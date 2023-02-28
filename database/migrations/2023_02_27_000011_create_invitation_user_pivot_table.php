<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('invitation_user', function (Blueprint $table) {
            $table->unsignedBigInteger('invitation_id');
            $table->foreign('invitation_id', 'invitation_id_fk_7945589')->references('id')->on('invitations')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_7945589')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
