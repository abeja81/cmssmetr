<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySmsStatusRequest;
use App\Http\Requests\StoreSmsStatusRequest;
use App\Http\Requests\UpdateSmsStatusRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SmsStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sms_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $all_sms = 

        return view('admin.smsStatuses.index');
    }

    public function create()
    {
        abort_if(Gate::denies('sms_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.smsStatuses.create');
    }

    public function store(StoreSmsStatusRequest $request)
    {
        $smsStatus = SmsStatus::create($request->all());

        return redirect()->route('admin.sms-statuses.index');
    }

    public function edit(SmsStatus $smsStatus)
    {
        abort_if(Gate::denies('sms_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.smsStatuses.edit', compact('smsStatus'));
    }

    public function update(UpdateSmsStatusRequest $request, SmsStatus $smsStatus)
    {
        $smsStatus->update($request->all());

        return redirect()->route('admin.sms-statuses.index');
    }

    public function show(SmsStatus $smsStatus)
    {
        abort_if(Gate::denies('sms_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.smsStatuses.show', compact('smsStatus'));
    }

    public function destroy(SmsStatus $smsStatus)
    {
        abort_if(Gate::denies('sms_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $smsStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroySmsStatusRequest $request)
    {
        SmsStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}