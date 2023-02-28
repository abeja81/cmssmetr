<?php

namespace App\Observers;

use App\Models\Invitation;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class InvitationActionObserver
{
    public function created(Invitation $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Invitation'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(Invitation $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'Invitation'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(Invitation $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'Invitation'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
