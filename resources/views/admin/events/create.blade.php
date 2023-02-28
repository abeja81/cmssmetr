@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.events.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-6">
                <h5>Veranstaltungs Daten</h5>
                <div class="form-group">
                    <label for="customer_name">Kunde</label>
                    <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', '') }}">
                    @if($errors->has('customer_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('customer_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.customer_name_helper') }}</span>
                </div>
                
            <div class="form-group">
                <label for="event_length">Dauer</label>
                <input class="form-control {{ $errors->has('event_length') ? 'is-invalid' : '' }}" type="text" name="event_length" id="event_length" value="{{ old('event_length', '') }}">
                @if($errors->has('event_length'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_length') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_length_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label for="event_start">{{ trans('cruds.event.fields.event_start') }}</label>
                <input class="form-control datetime {{ $errors->has('event_start') ? 'is-invalid' : '' }}" type="text" name="event_start" id="event_start" value="{{ old('event_start') }}">
                @if($errors->has('event_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_start_helper') }}</span>
            </div>

            <div class="form-group" >
                <label for="event_finish">{{ trans('cruds.event.fields.event_finish') }}</label>
                <input class="form-control datetime {{ $errors->has('event_finish') ? 'is-invalid' : '' }}" type="text" name="event_finish" id="event_finish" value="{{ old('event_finish') }}">
                @if($errors->has('event_finish'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_finish') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_finish_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_ablauf">{{ trans('cruds.event.fields.event_ablauf') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('event_ablauf') ? 'is-invalid' : '' }}" name="event_ablauf" id="event_ablauf">{!! old('event_ablauf') !!}</textarea>
                @if($errors->has('event_ablauf'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_ablauf') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_ablauf_helper') }}</span>
            </div>
            
        </div>
        
        {{-- div 1 --}}

        <div class="col-lg-6">
            <h5>Kunde / Auftraggeber</h5>
            <div class="form-group">
                <label for="auftraggeber">{{ trans('cruds.event.fields.auftraggeber') }}</label>
                <input class="form-control {{ $errors->has('auftraggeber') ? 'is-invalid' : '' }}" type="text" name="auftraggeber" id="auftraggeber" value="{{ old('auftraggeber', '') }}">
                @if($errors->has('auftraggeber'))
                    <div class="invalid-feedback">
                        {{ $errors->first('auftraggeber') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.auftraggeber_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="asp_vorname">{{ trans('cruds.event.fields.asp_vorname') }}</label>
                <input class="form-control {{ $errors->has('asp_vorname') ? 'is-invalid' : '' }}" type="text" name="asp_vorname" id="asp_vorname" value="{{ old('asp_vorname', '') }}">
                @if($errors->has('asp_vorname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('asp_vorname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.asp_vorname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="asp_name">{{ trans('cruds.event.fields.asp_name') }}</label>
                <input class="form-control {{ $errors->has('asp_name') ? 'is-invalid' : '' }}" type="text" name="asp_name" id="asp_name" value="{{ old('asp_name', '') }}">
                @if($errors->has('asp_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('asp_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.asp_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="asp_strasse">{{ trans('cruds.event.fields.asp_strasse') }}</label>
                <input class="form-control {{ $errors->has('asp_strasse') ? 'is-invalid' : '' }}" type="text" name="asp_strasse" id="asp_strasse" value="{{ old('asp_strasse', '') }}">
                @if($errors->has('asp_strasse'))
                    <div class="invalid-feedback">
                        {{ $errors->first('asp_strasse') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.asp_strasse_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="plz">{{ trans('cruds.event.fields.plz') }}</label>
                <input class="form-control {{ $errors->has('plz') ? 'is-invalid' : '' }}" type="text" name="plz" id="plz" value="{{ old('plz', '') }}">
                @if($errors->has('plz'))
                    <div class="invalid-feedback">
                        {{ $errors->first('plz') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.plz_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ort_kunde">{{ trans('cruds.event.fields.ort_kunde') }}</label>
                <input class="form-control {{ $errors->has('ort_kunde') ? 'is-invalid' : '' }}" type="text" name="ort_kunde" id="ort_kunde" value="{{ old('ort_kunde', '') }}">
                @if($errors->has('ort_kunde'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ort_kunde') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ort_kunde_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="telefon_kunde">{{ trans('cruds.event.fields.telefon_kunde') }}</label>
                <input class="form-control {{ $errors->has('telefon_kunde') ? 'is-invalid' : '' }}" type="text" name="telefon_kunde" id="telefon_kunde" value="{{ old('telefon_kunde', '') }}">
                @if($errors->has('telefon_kunde'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telefon_kunde') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.telefon_kunde_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobil_kunde">{{ trans('cruds.event.fields.mobil_kunde') }}</label>
                <input class="form-control {{ $errors->has('mobil_kunde') ? 'is-invalid' : '' }}" type="text" name="mobil_kunde" id="mobil_kunde" value="{{ old('mobil_kunde', '') }}">
                @if($errors->has('mobil_kunde'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobil_kunde') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.mobil_kunde_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_kunde">{{ trans('cruds.event.fields.email_kunde') }}</label>
                <input class="form-control {{ $errors->has('email_kunde') ? 'is-invalid' : '' }}" type="email" name="email_kunde" id="email_kunde" value="{{ old('email_kunde') }}">
                @if($errors->has('email_kunde'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email_kunde') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.email_kunde_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="web">{{ trans('cruds.event.fields.web') }}</label>
                <input class="form-control {{ $errors->has('web') ? 'is-invalid' : '' }}" type="text" name="web" id="web" value="{{ old('web', '') }}">
                @if($errors->has('web'))
                    <div class="invalid-feedback">
                        {{ $errors->first('web') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.web_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="kst_abteilung">{{ trans('cruds.event.fields.kst_abteilung') }}</label>
                <input class="form-control {{ $errors->has('kst_abteilung') ? 'is-invalid' : '' }}" type="text" name="kst_abteilung" id="kst_abteilung" value="{{ old('kst_abteilung', '') }}">
                @if($errors->has('kst_abteilung'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kst_abteilung') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.kst_abteilung_helper') }}</span>
            </div>
        </div>
            </div>
        {{-- div 2 --}}
        <div class="row">
        <div class="col-lg-6">
            <h5>Daten zur Location</h5>
            <div class="form-group">
                <label for="veranstaltungsland">{{ trans('cruds.event.fields.veranstaltungsland') }}</label>
                <input class="form-control {{ $errors->has('veranstaltungsland') ? 'is-invalid' : '' }}" type="text" name="veranstaltungsland" id="veranstaltungsland" value="{{ old('veranstaltungsland', 'Deutschland') }}">
                @if($errors->has('veranstaltungsland'))
                    <div class="invalid-feedback">
                        {{ $errors->first('veranstaltungsland') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.veranstaltungsland_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination">{{ trans('cruds.event.fields.destination') }}</label>
                <input class="form-control {{ $errors->has('destination') ? 'is-invalid' : '' }}" type="text" name="destination" id="destination" value="{{ old('destination', 'Bayern') }}">
                @if($errors->has('destination'))
                    <div class="invalid-feedback">
                        {{ $errors->first('destination') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.destination_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="event_location">{{ trans('cruds.event.fields.event_location') }}</label>
                <input class="form-control {{ $errors->has('event_location') ? 'is-invalid' : '' }}" type="text" name="event_location" id="event_location" value="{{ old('event_location', '') }}" required>
                @if($errors->has('event_location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="asp_location">{{ trans('cruds.event.fields.asp_location') }}</label>
                <input class="form-control {{ $errors->has('asp_location') ? 'is-invalid' : '' }}" type="text" name="asp_location" id="asp_location" value="{{ old('asp_location', '') }}">
                @if($errors->has('asp_location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('asp_location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.asp_location_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="event_strasse">{{ trans('cruds.event.fields.event_strasse') }}</label>
                <input class="form-control {{ $errors->has('event_strasse') ? 'is-invalid' : '' }}" type="text" name="event_strasse" id="event_strasse" value="{{ old('event_strasse', '') }}" required>
                @if($errors->has('event_strasse'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_strasse') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_strasse_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_plz">{{ trans('cruds.event.fields.event_plz') }}</label>
                <input class="form-control {{ $errors->has('event_plz') ? 'is-invalid' : '' }}" type="number" name="event_plz" id="event_plz" value="{{ old('event_plz', '') }}" step="1">
                @if($errors->has('event_plz'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_plz') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_plz_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="event_ort">{{ trans('cruds.event.fields.event_ort') }}</label>
                <input class="form-control {{ $errors->has('event_ort') ? 'is-invalid' : '' }}" type="text" name="event_ort" id="event_ort" value="{{ old('event_ort', '') }}" required>
                @if($errors->has('event_ort'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_ort') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_ort_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_telefon">{{ trans('cruds.event.fields.event_telefon') }}</label>
                <input class="form-control {{ $errors->has('event_telefon') ? 'is-invalid' : '' }}" type="number" name="event_telefon" id="event_telefon" value="{{ old('event_telefon', '') }}" step="1">
                @if($errors->has('event_telefon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_telefon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_telefon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_mobil">{{ trans('cruds.event.fields.event_mobil') }}</label>
                <input class="form-control {{ $errors->has('event_mobil') ? 'is-invalid' : '' }}" type="text" name="event_mobil" id="event_mobil" value="{{ old('event_mobil', '') }}">
                @if($errors->has('event_mobil'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_mobil') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_mobil_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_email">{{ trans('cruds.event.fields.event_email') }}</label>
                <input class="form-control {{ $errors->has('event_email') ? 'is-invalid' : '' }}" type="email" name="event_email" id="event_email" value="{{ old('event_email') }}">
                @if($errors->has('event_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_email_helper') }}</span>
            </div>
        </div>
        {{-- div 3 --}}
        <div class="col-lg-6">
            <h5>Details zum Event</h5>
            <div class="form-group">
                <label for="anzahl_guides">{{ trans('cruds.event.fields.anzahl_guides') }}</label>
                <input class="form-control {{ $errors->has('anzahl_guides') ? 'is-invalid' : '' }}" type="number" name="anzahl_guides" id="anzahl_guides" value="{{ old('anzahl_guides', '') }}" step="1">
                @if($errors->has('anzahl_guides'))
                    <div class="invalid-feedback">
                        {{ $errors->first('anzahl_guides') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.anzahl_guides_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.event.fields.event_typ') }}</label>
                @foreach(App\Models\Event::EVENT_TYP_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('event_typ') ? 'is-invalid' : '' }}" >
                        <input class="form-check-input" type="radio" id="event_typ_{{ $key }}" name="event_typ" value="{{ $key }}" {{ old('event_typ', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="event_typ_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('event_typ'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_typ') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_typ_helper') }}</span>
                <br>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.event.fields.veranstaltungsart') }}</label>
                @foreach(App\Models\Event::VERANSTALTUNGSART_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('veranstaltungsart') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="veranstaltungsart_{{ $key }}" name="veranstaltungsart" value="{{ $key }}" {{ old('veranstaltungsart', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="veranstaltungsart_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('veranstaltungsart'))
                    <div class="invalid-feedback">
                        {{ $errors->first('veranstaltungsart') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.veranstaltungsart_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.event.fields.altersstruktur') }}</label>
                @foreach(App\Models\Event::ALTERSSTRUKTUR_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('altersstruktur') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="altersstruktur_{{ $key }}" name="altersstruktur" value="{{ $key }}" {{ old('altersstruktur', '') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="altersstruktur_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('altersstruktur'))
                    <div class="invalid-feedback">
                        {{ $errors->first('altersstruktur') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.altersstruktur_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="projektleiter_lt_orga">{{ trans('cruds.event.fields.projektleiter_lt_orga') }}</label>
                <input class="form-control {{ $errors->has('projektleiter_lt_orga') ? 'is-invalid' : '' }}" type="text" name="projektleiter_lt_orga" id="projektleiter_lt_orga" value="{{ old('projektleiter_lt_orga', '') }}">
                @if($errors->has('projektleiter_lt_orga'))
                    <div class="invalid-feedback">
                        {{ $errors->first('projektleiter_lt_orga') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.projektleiter_lt_orga_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="regie_tl_vor_ort">{{ trans('cruds.event.fields.regie_tl_vor_ort') }}</label>
                <input class="form-control {{ $errors->has('regie_tl_vor_ort') ? 'is-invalid' : '' }}" type="text" name="regie_tl_vor_ort" id="regie_tl_vor_ort" value="{{ old('regie_tl_vor_ort', '') }}">
                @if($errors->has('regie_tl_vor_ort'))
                    <div class="invalid-feedback">
                        {{ $errors->first('regie_tl_vor_ort') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.regie_tl_vor_ort_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gage">{{ trans('cruds.event.fields.gage') }}</label>
                <input class="form-control {{ $errors->has('gage') ? 'is-invalid' : '' }}" type="text" name="gage" id="gage" value="{{ old('gage', '') }}">
                @if($errors->has('gage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.gage_helper') }}</span>
            </div>
            
            
            <div class="form-group">
                <label for="veranstaltungsmodul">{{ trans('cruds.event.fields.veranstaltungsmodul') }}</label>
                <input class="form-control {{ $errors->has('veranstaltungsmodul') ? 'is-invalid' : '' }}" type="text" name="veranstaltungsmodul" id="veranstaltungsmodul" value="{{ old('veranstaltungsmodul', '') }}">
                @if($errors->has('veranstaltungsmodul'))
                    <div class="invalid-feedback">
                        {{ $errors->first('veranstaltungsmodul') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.veranstaltungsmodul_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_va">{{ trans('cruds.event.fields.name_va') }}</label>
                <input class="form-control {{ $errors->has('name_va') ? 'is-invalid' : '' }}" type="text" name="name_va" id="name_va" value="{{ old('name_va', '') }}">
                @if($errors->has('name_va'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_va') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.name_va_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="personenzahl">{{ trans('cruds.event.fields.personenzahl') }}</label>
                <input class="form-control {{ $errors->has('personenzahl') ? 'is-invalid' : '' }}" type="text" name="personenzahl" id="personenzahl" value="{{ old('personenzahl', '') }}">
                @if($errors->has('personenzahl'))
                    <div class="invalid-feedback">
                        {{ $errors->first('personenzahl') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.personenzahl_helper') }}</span>
            </div>
        </div>
        </div>
        {{-- div 4 --}}
        <div class="row">
            <div class="col-lg-6">
                <h5>Anforderungen an Guides</h5>
                <h6>Sprache</h6>
                <div class="form-group">
                    <div class="form-check {{ $errors->has('sprache_deutsch') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="sprache_deutsch" value="0">
                        <input class="form-check-input" type="checkbox" name="sprache_deutsch" id="sprache_deutsch" value="1" {{ old('sprache_deutsch', 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="sprache_deutsch">{{ trans('cruds.event.fields.sprache_deutsch') }}</label>
                    </div>
                    @if($errors->has('sprache_deutsch'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sprache_deutsch') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.sprache_deutsch_helper') }}</span>
                </div>
                <div class="form-group">
                    <div class="form-check {{ $errors->has('sprache_englisch') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="sprache_englisch" value="0">
                        <input class="form-check-input" type="checkbox" name="sprache_englisch" id="sprache_englisch" value="1" {{ old('sprache_englisch', 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="sprache_englisch">{{ trans('cruds.event.fields.sprache_englisch') }}</label>
                    </div>
                    @if($errors->has('sprache_englisch'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sprache_englisch') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.sprache_englisch_helper') }}</span>
                </div>
                <div class="form-group">
                    <div class="form-check {{ $errors->has('sprache_bayrisch') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="sprache_bayrisch" value="0">
                        <input class="form-check-input" type="checkbox" name="sprache_bayrisch" id="sprache_bayrisch" value="1" {{ old('sprache_bayrisch', 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="sprache_bayrisch">{{ trans('cruds.event.fields.sprache_bayrisch') }}</label>
                    </div>
                    @if($errors->has('sprache_bayrisch'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sprache_bayrisch') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.sprache_bayrisch_helper') }}</span>
                </div>
                <div class="form-group">
                    <div class="form-check {{ $errors->has('sprache_schwabisch') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="sprache_schwabisch" value="0">
                        <input class="form-check-input" type="checkbox" name="sprache_schwabisch" id="sprache_schwabisch" value="1" {{ old('sprache_schwabisch', 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="sprache_schwabisch">{{ trans('cruds.event.fields.sprache_schwabisch') }}</label>
                    </div>
                    @if($errors->has('sprache_schwabisch'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sprache_schwabisch') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.sprache_schwabisch_helper') }}</span>
                </div>
                <div class="form-group">
                    <div class="form-check {{ $errors->has('sprache_schweiz') ? 'is-invalid' : '' }}">
                        <input type="hidden" name="sprache_schweiz" value="0">
                        <input class="form-check-input" type="checkbox" name="sprache_schweiz" id="sprache_schweiz" value="1" {{ old('sprache_schweiz', 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="sprache_schweiz">{{ trans('cruds.event.fields.sprache_schweiz') }}</label>
                    </div>
                    @if($errors->has('sprache_schweiz'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sprache_schweiz') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.sprache_schweiz_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="event_notiz">{{ trans('cruds.event.fields.event_notiz') }}</label>
                    <textarea class="form-control {{ $errors->has('event_notiz') ? 'is-invalid' : '' }}" name="event_notiz" id="event_notiz">{{ old('event_notiz') }}</textarea>
                    @if($errors->has('event_notiz'))
                        <div class="invalid-feedback">
                            {{ $errors->first('event_notiz') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.event_notiz_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="event_teamkleidung">{{ trans('cruds.event.fields.event_teamkleidung') }}</label>
                    <textarea class="form-control {{ $errors->has('event_teamkleidung') ? 'is-invalid' : '' }}" name="event_teamkleidung" id="event_teamkleidung">{{ old('event_teamkleidung') }}</textarea>
                    @if($errors->has('event_teamkleidung'))
                        <div class="invalid-feedback">
                            {{ $errors->first('event_teamkleidung') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.event_teamkleidung_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="teamverpflegung">{{ trans('cruds.event.fields.teamverpflegung') }}</label>
                    <input class="form-control {{ $errors->has('teamverpflegung') ? 'is-invalid' : '' }}" type="text" name="teamverpflegung" id="teamverpflegung" value="{{ old('teamverpflegung', '') }}">
                    @if($errors->has('teamverpflegung'))
                        <div class="invalid-feedback">
                            {{ $errors->first('teamverpflegung') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.teamverpflegung_helper') }}</span>
                </div>
            </div>
            {{-- div 5 --}}
            <div class="col-lg-6">
                <h5>Statistische Werte</h5>
                <div class="form-group">
                    <label for="event_logistik">{{ trans('cruds.event.fields.event_logistik') }}</label>
                    <input class="form-control {{ $errors->has('event_logistik') ? 'is-invalid' : '' }}" type="text" name="event_logistik" id="event_logistik" value="{{ old('event_logistik', '') }}">
                    @if($errors->has('event_logistik'))
                        <div class="invalid-feedback">
                            {{ $errors->first('event_logistik') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.event_logistik_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.event.fields.vertriebsweg') }}</label>
                    @foreach(App\Models\Event::VERTRIEBSWEG_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('vertriebsweg') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="vertriebsweg_{{ $key }}" name="vertriebsweg" value="{{ $key }}" {{ old('vertriebsweg', '') === (string) $key ? 'checked' : '' }}>
                            <label class="form-check-label" for="vertriebsweg_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('vertriebsweg'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vertriebsweg') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.vertriebsweg_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.event.fields.personen_zahl') }}</label>
                    @foreach(App\Models\Event::PERSONEN_ZAHL_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('personen_zahl') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="personen_zahl_{{ $key }}" name="personen_zahl" value="{{ $key }}" {{ old('personen_zahl', '') === (string) $key ? 'checked' : '' }}>
                            <label class="form-check-label" for="personen_zahl_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('personen_zahl'))
                        <div class="invalid-feedback">
                            {{ $errors->first('personen_zahl') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.personen_zahl_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.event.fields.jahreszeit') }}</label>
                    @foreach(App\Models\Event::JAHRESZEIT_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('jahreszeit') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="jahreszeit_{{ $key }}" name="jahreszeit" value="{{ $key }}" {{ old('jahreszeit', '') === (string) $key ? 'checked' : '' }}>
                            <label class="form-check-label" for="jahreszeit_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('jahreszeit'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jahreszeit') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.jahreszeit_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="interne_notiz">{{ trans('cruds.event.fields.interne_notiz') }}</label>
                    <textarea class="form-control {{ $errors->has('interne_notiz') ? 'is-invalid' : '' }}" name="interne_notiz" id="interne_notiz">{{ old('interne_notiz') }}</textarea>
                    @if($errors->has('interne_notiz'))
                        <div class="invalid-feedback">
                            {{ $errors->first('interne_notiz') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.interne_notiz_helper') }}</span>
                </div>
            </div>
            {{-- div 6 --}}
        </div>

            {{-- <div class="form-group">
                <label for="event_description">{{ trans('cruds.event.fields.event_description') }}</label>
                <input class="form-control {{ $errors->has('event_description') ? 'is-invalid' : '' }}" type="text" name="event_description" id="event_description" value="{{ old('event_description', '') }}">
                @if($errors->has('event_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.event_description_helper') }}</span>
            </div> --}}
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.events.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $event->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection