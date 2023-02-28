<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('sent_at')->nullable();
            $table->datetime('accepted_at')->nullable();
            $table->datetime('rejected_at')->nullable();
            $table->boolean('invite_sms')->default(0)->nullable();
            $table->boolean('invite_email')->default(0)->nullable();
            $table->boolean('invite_whatsapp')->default(0)->nullable();
            $table->date('invitation_valid_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
