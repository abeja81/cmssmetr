@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.invitation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.invitations.store") }}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="event_id">{{ trans('cruds.invitation.fields.event') }}</label>
                <select class="form-control select2 {{ $errors->has('event') ? 'is-invalid' : '' }}" name="event_id" id="event_id">
                    @foreach($events as $id => $entry)
                        <option value="{{ $id }}" {{ old('event_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('event'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.invitation.fields.event_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="all_users_invites">{{ trans('cruds.invitation.fields.all_users_invite') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('all_users_invites') ? 'is-invalid' : '' }}" name="all_users_invites[]" id="all_users_invites" multiple>
                    @foreach($all_users_invites as $id => $all_users_invite)
                        <option value="{{ $id }}" {{ in_array($id, old('all_users_invites', [])) ? 'selected' : '' }}>{{ $all_users_invite }}</option>
                    @endforeach
                </select>
                @if($errors->has('all_users_invites'))
                    <div class="invalid-feedback">
                        {{ $errors->first('all_users_invites') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.invitation.fields.all_users_invite_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('invite_sms') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="invite_sms" value="0">
                    <input class="form-check-input" type="checkbox" name="invite_sms" id="invite_sms" value="1" {{ old('invite_sms', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="invite_sms">{{ trans('cruds.invitation.fields.invite_sms') }}</label>
                </div>
                @if($errors->has('invite_sms'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invite_sms') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.invitation.fields.invite_sms_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('invite_email') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="invite_email" value="0">
                    <input class="form-check-input" type="checkbox" name="invite_email" id="invite_email" value="1" {{ old('invite_email', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="invite_email">{{ trans('cruds.invitation.fields.invite_email') }}</label>
                </div>
                @if($errors->has('invite_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invite_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.invitation.fields.invite_email_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('invite_whatsapp') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="invite_whatsapp" value="0">
                    <input class="form-check-input" type="checkbox" name="invite_whatsapp" id="invite_whatsapp" value="1" {{ old('invite_whatsapp', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="invite_whatsapp">{{ trans('cruds.invitation.fields.invite_whatsapp') }}</label>
                </div>
                @if($errors->has('invite_whatsapp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invite_whatsapp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.invitation.fields.invite_whatsapp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="invitation_valid_date">{{ trans('cruds.invitation.fields.invitation_valid_date') }}</label>
                <input class="form-control date {{ $errors->has('invitation_valid_date') ? 'is-invalid' : '' }}" type="text" name="invitation_valid_date" id="invitation_valid_date" value="{{ old('invitation_valid_date') }}">
                @if($errors->has('invitation_valid_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('invitation_valid_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.invitation.fields.invitation_valid_date_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection