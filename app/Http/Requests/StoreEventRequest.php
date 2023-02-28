<?php

namespace App\Http\Requests;

use App\Models\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_create');
    }

    public function rules()
    {
        return [
            'name_va' => [
                'string',
                'nullable',
            ],
            'projektleiter_lt_orga' => [
                'string',
                'nullable',
            ],
            'gage' => [
                'string',
                'nullable',
            ],
            'event_location' => [
                'string',
                'required',
            ],
            'event_start' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'event_finish' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'veranstaltungsmodul' => [
                'string',
                'nullable',
            ],
            'customer_name' => [
                'string',
                'nullable',
            ],
            'event_description' => [
                'string',
                'nullable',
            ],
            'event_length' => [
                'string',
                'nullable',
            ],
            'auftraggeber' => [
                'string',
                'nullable',
            ],
            'asp_vorname' => [
                'string',
                'nullable',
            ],
            'asp_name' => [
                'string',
                'nullable',
            ],
            'asp_strasse' => [
                'string',
                'nullable',
            ],
            'plz' => [
                'string',
                'nullable',
            ],
            'ort_kunde' => [
                'string',
                'nullable',
            ],
            'telefon_kunde' => [
                'string',
                'nullable',
            ],
            'mobil_kunde' => [
                'string',
                'nullable',
            ],
            'web' => [
                'string',
                'nullable',
            ],
            'kst_abteilung' => [
                'string',
                'nullable',
            ],
            'veranstaltungsland' => [
                'string',
                'nullable',
            ],
            'destination' => [
                'string',
                'nullable',
            ],
            'asp_location' => [
                'string',
                'nullable',
            ],
            'event_strasse' => [
                'string',
                'required',
            ],
            'event_plz' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'event_ort' => [
                'string',
                'required',
            ],
            'event_telefon' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'event_mobil' => [
                'string',
                'nullable',
            ],
            'anzahl_guides' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'regie_tl_vor_ort' => [
                'string',
                'nullable',
            ],
            'personenzahl' => [
                'string',
                'nullable',
            ],
            'teamverpflegung' => [
                'string',
                'nullable',
            ],
            'event_logistik' => [
                'string',
                'nullable',
            ],
        ];
    }
}
