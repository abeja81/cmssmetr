<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInvitationRequest;
use App\Http\Requests\StoreInvitationRequest;
use App\Http\Requests\UpdateInvitationRequest;
use App\Mail\InvitationSend;
use App\Models\Event;
use App\Models\Invitation;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;

class InvitationsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('invitation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invitations = Invitation::with(['event', 'all_users_invites'])->get();

        return view('admin.invitations.index', compact('invitations'));
    }

    public function create()
    {
        abort_if(Gate::denies('invitation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::pluck('name_va', 'id')->prepend(trans('global.pleaseSelect'), '');

        $all_users_invites = User::pluck('name', 'id');

        return view('admin.invitations.create', compact('all_users_invites', 'events'));
    }

    public function store(StoreInvitationRequest $request)
    {
        $invitation = Invitation::create($request->all());
        $invitation->all_users_invites()->sync($request->input('all_users_invites', []));

        return redirect()->route('admin.invitations.index');
    }

    public function edit(Invitation $invitation)
    {
        abort_if(Gate::denies('invitation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::pluck('name_va', 'id')->prepend(trans('global.pleaseSelect'), '');

        $all_users_invites = User::pluck('name', 'id');

        $invitation->load('event', 'all_users_invites');

        return view('admin.invitations.edit', compact('all_users_invites', 'events', 'invitation'));
    }

    public function update(UpdateInvitationRequest $request, Invitation $invitation)
    {
        $invitation->update($request->all());
        $invitation->all_users_invites()->sync($request->input('all_users_invites', []));

        return redirect()->route('admin.invitations.index');
    }

    public function show(Invitation $invitation)
    {
        abort_if(Gate::denies('invitation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invitation->load('event', 'all_users_invites');

        return view('admin.invitations.show', compact('invitation'));
    }

    public function destroy(Invitation $invitation)
    {
        abort_if(Gate::denies('invitation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invitation->delete();

        return back();
    }

    public function massDestroy(MassDestroyInvitationRequest $request)
    {
        $invitations = Invitation::find(request('ids'));

        foreach ($invitations as $invitation) {
            $invitation->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function send(Invitation $invitation)
    {
        abort_if(Gate::denies('invitation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invitation->load('event', 'all_users_invites');
        var_dump($invitation->all_users_invites);
        // foreach ($invitation->all_users_invites as $key => $all_users_invite) {
        //     var_dump($all_users_invite);
        // }
        // foreach ($invitation as $invite) {
        //     var_dump($invitation);
        // }

        Mail::to('mirek@mirek.com')->send(new InvitationSend($invitation));

        // echo "fuck!";

        // foreach ($invitation->all_users_invites as $key => $all_users_invite) {
        //     // var_dump($invitation);
        // }


        $invitation->update(['sent_at' => Carbon::now()->toDateString()]);

        return redirect()->route('admin.invitations.index');
    }
}