<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('event_incentive')->default(0)->nullable();
            $table->boolean('krimi')->default(0)->nullable();
            $table->boolean('training')->default(0)->nullable();
            $table->boolean('intern')->default(0)->nullable();
            $table->boolean('moderation_vortrag')->default(0)->nullable();
            $table->date('dob')->nullable();
            $table->string('street')->nullable();
            $table->integer('post_code')->nullable();
            $table->string('city')->nullable();
            $table->integer('phone_number')->nullable();
            $table->integer('mobile_phone_number')->nullable();
            $table->string('specials')->nullable();
            $table->string('interna')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
