@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="last_name">{{ trans('cruds.user.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}" required>
                @if($errors->has('last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('event_incentive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="event_incentive" value="0">
                    <input class="form-check-input" type="checkbox" name="event_incentive" id="event_incentive" value="1" {{ old('event_incentive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="event_incentive">{{ trans('cruds.user.fields.event_incentive') }}</label>
                </div>
                @if($errors->has('event_incentive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_incentive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.event_incentive_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('krimi') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="krimi" value="0">
                    <input class="form-check-input" type="checkbox" name="krimi" id="krimi" value="1" {{ old('krimi', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="krimi">{{ trans('cruds.user.fields.krimi') }}</label>
                </div>
                @if($errors->has('krimi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('krimi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.krimi_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('training') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="training" value="0">
                    <input class="form-check-input" type="checkbox" name="training" id="training" value="1" {{ old('training', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="training">{{ trans('cruds.user.fields.training') }}</label>
                </div>
                @if($errors->has('training'))
                    <div class="invalid-feedback">
                        {{ $errors->first('training') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.training_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('intern') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="intern" value="0">
                    <input class="form-check-input" type="checkbox" name="intern" id="intern" value="1" {{ old('intern', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="intern">{{ trans('cruds.user.fields.intern') }}</label>
                </div>
                @if($errors->has('intern'))
                    <div class="invalid-feedback">
                        {{ $errors->first('intern') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.intern_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('moderation_vortrag') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="moderation_vortrag" value="0">
                    <input class="form-check-input" type="checkbox" name="moderation_vortrag" id="moderation_vortrag" value="1" {{ old('moderation_vortrag', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="moderation_vortrag">{{ trans('cruds.user.fields.moderation_vortrag') }}</label>
                </div>
                @if($errors->has('moderation_vortrag'))
                    <div class="invalid-feedback">
                        {{ $errors->first('moderation_vortrag') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.moderation_vortrag_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.user.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob') }}">
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="street">{{ trans('cruds.user.fields.street') }}</label>
                <input class="form-control {{ $errors->has('street') ? 'is-invalid' : '' }}" type="text" name="street" id="street" value="{{ old('street', '') }}">
                @if($errors->has('street'))
                    <div class="invalid-feedback">
                        {{ $errors->first('street') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.street_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="post_code">{{ trans('cruds.user.fields.post_code') }}</label>
                <input class="form-control {{ $errors->has('post_code') ? 'is-invalid' : '' }}" type="number" name="post_code" id="post_code" value="{{ old('post_code', '') }}" step="1">
                @if($errors->has('post_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('post_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.post_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.user.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_number">{{ trans('cruds.user.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="number" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" step="1">
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_phone_number">{{ trans('cruds.user.fields.mobile_phone_number') }}</label>
                <input class="form-control {{ $errors->has('mobile_phone_number') ? 'is-invalid' : '' }}" type="number" name="mobile_phone_number" id="mobile_phone_number" value="{{ old('mobile_phone_number', '') }}" step="1">
                @if($errors->has('mobile_phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.mobile_phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specials">{{ trans('cruds.user.fields.specials') }}</label>
                <input class="form-control {{ $errors->has('specials') ? 'is-invalid' : '' }}" type="text" name="specials" id="specials" value="{{ old('specials', '') }}">
                @if($errors->has('specials'))
                    <div class="invalid-feedback">
                        {{ $errors->first('specials') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.specials_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="interna">{{ trans('cruds.user.fields.interna') }}</label>
                <input class="form-control {{ $errors->has('interna') ? 'is-invalid' : '' }}" type="text" name="interna" id="interna" value="{{ old('interna', '') }}">
                @if($errors->has('interna'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interna') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.interna_helper') }}</span>
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