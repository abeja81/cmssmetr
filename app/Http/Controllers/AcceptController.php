<?php

namespace App\Http\Controllers;


use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AcceptController extends Controller
{
    //
    public function accept($invitation_id, $action)
    {
        $invitation = Invitation::findOrFail($invitation_id);
        if (!in_array($action, ['accept', 'reject'])) {
            abort(code: 404);
        }
        if ($action == 'accept') {
            $invitation->update(['accepted_at' => Carbon::now()->toDateTimeString()]);
        }
        if ($action == 'reject') {
            $invitation->update(['rejected_at' => Carbon::now()->toDateTimeString()]);
        }

        return 'Your invitation was successfully ' . $action . 'ed.';
    }
}