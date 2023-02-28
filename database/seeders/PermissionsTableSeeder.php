<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'event_create',
            ],
            [
                'id'    => 18,
                'title' => 'event_edit',
            ],
            [
                'id'    => 19,
                'title' => 'event_show',
            ],
            [
                'id'    => 20,
                'title' => 'event_delete',
            ],
            [
                'id'    => 21,
                'title' => 'event_access',
            ],
            [
                'id'    => 22,
                'title' => 'invitation_create',
            ],
            [
                'id'    => 23,
                'title' => 'invitation_edit',
            ],
            [
                'id'    => 24,
                'title' => 'invitation_show',
            ],
            [
                'id'    => 25,
                'title' => 'invitation_delete',
            ],
            [
                'id'    => 26,
                'title' => 'invitation_access',
            ],
            [
                'id'    => 27,
                'title' => 'sms_status_create',
            ],
            [
                'id'    => 28,
                'title' => 'sms_status_edit',
            ],
            [
                'id'    => 29,
                'title' => 'sms_status_show',
            ],
            [
                'id'    => 30,
                'title' => 'sms_status_delete',
            ],
            [
                'id'    => 31,
                'title' => 'sms_status_access',
            ],
            [
                'id'    => 32,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 34,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 35,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 36,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 37,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 38,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
