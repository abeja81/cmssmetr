@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.invitation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.invitations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.invitation.fields.event') }}
                        </th>
                        <td>
                            {{ $invitation->event->name_va ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invitation.fields.all_users_invite') }}
                        </th>
                        <td>
                            @foreach($invitation->all_users_invites as $key => $all_users_invite)
                                <span class="label label-info">{{ $all_users_invite->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invitation.fields.sent_at') }}
                        </th>
                        <td>
                            {{ $invitation->sent_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invitation.fields.accepted_at') }}
                        </th>
                        <td>
                            {{ $invitation->accepted_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invitation.fields.rejected_at') }}
                        </th>
                        <td>
                            {{ $invitation->rejected_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.invitation.fields.invitation_valid_date') }}
                        </th>
                        <td>
                            {{ $invitation->invitation_valid_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.invitations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection