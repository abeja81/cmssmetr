@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.event.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.name_va') }}
                        </th>
                        <td>
                            {{ $event->name_va }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_typ') }}
                        </th>
                        <td>
                            {{ App\Models\Event::EVENT_TYP_RADIO[$event->event_typ] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.projektleiter_lt_orga') }}
                        </th>
                        <td>
                            {{ $event->projektleiter_lt_orga }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.gage') }}
                        </th>
                        <td>
                            {{ $event->gage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_location') }}
                        </th>
                        <td>
                            {{ $event->event_location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_start') }}
                        </th>
                        <td>
                            {{ $event->event_start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_finish') }}
                        </th>
                        <td>
                            {{ $event->event_finish }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.veranstaltungsmodul') }}
                        </th>
                        <td>
                            {{ $event->veranstaltungsmodul }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $event->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_description') }}
                        </th>
                        <td>
                            {{ $event->event_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_length') }}
                        </th>
                        <td>
                            {{ $event->event_length }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.auftraggeber') }}
                        </th>
                        <td>
                            {{ $event->auftraggeber }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.asp_vorname') }}
                        </th>
                        <td>
                            {{ $event->asp_vorname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.asp_name') }}
                        </th>
                        <td>
                            {{ $event->asp_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.asp_strasse') }}
                        </th>
                        <td>
                            {{ $event->asp_strasse }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.plz') }}
                        </th>
                        <td>
                            {{ $event->plz }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.ort_kunde') }}
                        </th>
                        <td>
                            {{ $event->ort_kunde }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.telefon_kunde') }}
                        </th>
                        <td>
                            {{ $event->telefon_kunde }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.mobil_kunde') }}
                        </th>
                        <td>
                            {{ $event->mobil_kunde }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.email_kunde') }}
                        </th>
                        <td>
                            {{ $event->email_kunde }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.web') }}
                        </th>
                        <td>
                            {{ $event->web }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.kst_abteilung') }}
                        </th>
                        <td>
                            {{ $event->kst_abteilung }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.veranstaltungsland') }}
                        </th>
                        <td>
                            {{ $event->veranstaltungsland }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.destination') }}
                        </th>
                        <td>
                            {{ $event->destination }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.asp_location') }}
                        </th>
                        <td>
                            {{ $event->asp_location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_strasse') }}
                        </th>
                        <td>
                            {{ $event->event_strasse }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_plz') }}
                        </th>
                        <td>
                            {{ $event->event_plz }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_ort') }}
                        </th>
                        <td>
                            {{ $event->event_ort }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_telefon') }}
                        </th>
                        <td>
                            {{ $event->event_telefon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_mobil') }}
                        </th>
                        <td>
                            {{ $event->event_mobil }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_email') }}
                        </th>
                        <td>
                            {{ $event->event_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.anzahl_guides') }}
                        </th>
                        <td>
                            {{ $event->anzahl_guides }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.veranstaltungsart') }}
                        </th>
                        <td>
                            {{ App\Models\Event::VERANSTALTUNGSART_RADIO[$event->veranstaltungsart] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.altersstruktur') }}
                        </th>
                        <td>
                            {{ App\Models\Event::ALTERSSTRUKTUR_RADIO[$event->altersstruktur] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.regie_tl_vor_ort') }}
                        </th>
                        <td>
                            {{ $event->regie_tl_vor_ort }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.personenzahl') }}
                        </th>
                        <td>
                            {{ $event->personenzahl }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_ablauf') }}
                        </th>
                        <td>
                            {!! $event->event_ablauf !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.sprache_deutsch') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $event->sprache_deutsch ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.sprache_englisch') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $event->sprache_englisch ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.sprache_bayrisch') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $event->sprache_bayrisch ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.sprache_schwabisch') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $event->sprache_schwabisch ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.sprache_schweiz') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $event->sprache_schweiz ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_notiz') }}
                        </th>
                        <td>
                            {{ $event->event_notiz }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_teamkleidung') }}
                        </th>
                        <td>
                            {{ $event->event_teamkleidung }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.teamverpflegung') }}
                        </th>
                        <td>
                            {{ $event->teamverpflegung }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.event_logistik') }}
                        </th>
                        <td>
                            {{ $event->event_logistik }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.vertriebsweg') }}
                        </th>
                        <td>
                            {{ App\Models\Event::VERTRIEBSWEG_RADIO[$event->vertriebsweg] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.personen_zahl') }}
                        </th>
                        <td>
                            {{ App\Models\Event::PERSONEN_ZAHL_RADIO[$event->personen_zahl] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.jahreszeit') }}
                        </th>
                        <td>
                            {{ App\Models\Event::JAHRESZEIT_RADIO[$event->jahreszeit] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.event.fields.interne_notiz') }}
                        </th>
                        <td>
                            {{ $event->interne_notiz }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#event_invitations" role="tab" data-toggle="tab">
                {{ trans('cruds.invitation.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="event_invitations">
            @includeIf('admin.events.relationships.eventInvitations', ['invitations' => $event->eventInvitations])
        </div>
    </div>
</div>

@endsection