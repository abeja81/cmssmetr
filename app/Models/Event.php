<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Event extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'events';

    protected $dates = [
        'event_start',
        'event_finish',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const VERTRIEBSWEG_RADIO = [
        'sta_agentur' => 'Agentur',
        'sta_hotel'   => 'Hotel',
        'sta_direct'  => 'Direct',
    ];

    public const VERANSTALTUNGSART_RADIO = [
        'Veranstaltungsart_public'     => 'Public',
        'Veranstaltungsart_corporatre' => 'Corporate',
    ];

    public const JAHRESZEIT_RADIO = [
        'jahr_fruhling' => 'Frühling',
        'jahr_sommer'   => 'Sommer',
        'jahr_herbst'   => 'Herbst',
        'jahr_winter'   => 'Winter',
    ];

    public const PERSONEN_ZAHL_RADIO = [
        'zahl_bis_50'   => 'bis 50',
        'zahl_bis_100'  => 'bis 100',
        'zahl_bis_200'  => 'bis 200',
        'zahl_mehr_200' => 'mehr als 200',
    ];

    public const ALTERSSTRUKTUR_RADIO = [
        'Altersstruktur_bis_18'    => 'bis 18',
        'Altersstruktur_18_bis_30' => '18 bis 30',
        'Altersstruktur_30_bis_50' => '30 bis 50',
        'Altersstruktur_ab_50'     => 'ab 50',
    ];

    public const EVENT_TYP_RADIO = [
        'typ_event_incentive'     => 'Event / Incentive',
        'type_krimi'              => 'Krimi',
        'type_Training'           => 'Training',
        'type_intern'             => 'Intern',
        'type_moderation_vortrag' => 'Moderation / Vortrag',
    ];

    protected $fillable = [
        'name_va',
        'event_typ',
        'projektleiter_lt_orga',
        'gage',
        'event_location',
        'event_start',
        'event_finish',
        'veranstaltungsmodul',
        'customer_name',
        'event_description',
        'event_length',
        'auftraggeber',
        'asp_vorname',
        'asp_name',
        'asp_strasse',
        'plz',
        'ort_kunde',
        'telefon_kunde',
        'mobil_kunde',
        'email_kunde',
        'web',
        'kst_abteilung',
        'veranstaltungsland',
        'destination',
        'asp_location',
        'event_strasse',
        'event_plz',
        'event_ort',
        'event_telefon',
        'event_mobil',
        'event_email',
        'anzahl_guides',
        'veranstaltungsart',
        'altersstruktur',
        'regie_tl_vor_ort',
        'personenzahl',
        'event_ablauf',
        'sprache_deutsch',
        'sprache_englisch',
        'sprache_bayrisch',
        'sprache_schwabisch',
        'sprache_schweiz',
        'event_notiz',
        'event_teamkleidung',
        'teamverpflegung',
        'event_logistik',
        'vertriebsweg',
        'personen_zahl',
        'jahreszeit',
        'interne_notiz',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function boot()
    {
        parent::boot();
        self::observe(new \App\Observers\EventActionObserver);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function eventInvitations()
    {
        return $this->hasMany(Invitation::class, 'event_id', 'id');
    }

    public function getEventStartAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEventStartAttribute($value)
    {
        $this->attributes['event_start'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getEventFinishAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEventFinishAttribute($value)
    {
        $this->attributes['event_finish'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
