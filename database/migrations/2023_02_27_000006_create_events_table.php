<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_va')->nullable();
            $table->string('event_typ')->nullable();
            $table->string('projektleiter_lt_orga')->nullable();
            $table->string('gage')->nullable();
            $table->string('event_location');
            $table->datetime('event_start')->nullable();
            $table->datetime('event_finish')->nullable();
            $table->string('veranstaltungsmodul')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('event_description')->nullable();
            $table->string('event_length')->nullable();
            $table->string('auftraggeber')->nullable();
            $table->string('asp_vorname')->nullable();
            $table->string('asp_name')->nullable();
            $table->string('asp_strasse')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort_kunde')->nullable();
            $table->string('telefon_kunde')->nullable();
            $table->string('mobil_kunde')->nullable();
            $table->string('email_kunde')->nullable();
            $table->string('web')->nullable();
            $table->string('kst_abteilung')->nullable();
            $table->string('veranstaltungsland')->nullable();
            $table->string('destination')->nullable();
            $table->string('asp_location')->nullable();
            $table->string('event_strasse');
            $table->integer('event_plz')->nullable();
            $table->string('event_ort');
            $table->integer('event_telefon')->nullable();
            $table->string('event_mobil')->nullable();
            $table->string('event_email')->nullable();
            $table->integer('anzahl_guides')->nullable();
            $table->string('veranstaltungsart')->nullable();
            $table->string('altersstruktur')->nullable();
            $table->string('regie_tl_vor_ort')->nullable();
            $table->string('personenzahl')->nullable();
            $table->longText('event_ablauf')->nullable();
            $table->boolean('sprache_deutsch')->default(0)->nullable();
            $table->boolean('sprache_englisch')->default(0)->nullable();
            $table->boolean('sprache_bayrisch')->default(0)->nullable();
            $table->boolean('sprache_schwabisch')->default(0)->nullable();
            $table->boolean('sprache_schweiz')->default(0)->nullable();
            $table->longText('event_notiz')->nullable();
            $table->longText('event_teamkleidung')->nullable();
            $table->string('teamverpflegung')->nullable();
            $table->string('event_logistik')->nullable();
            $table->string('vertriebsweg')->nullable();
            $table->string('personen_zahl')->nullable();
            $table->string('jahreszeit')->nullable();
            $table->longText('interne_notiz')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
