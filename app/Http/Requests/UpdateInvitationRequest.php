<?php

namespace App\Http\Requests;

use App\Models\Invitation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInvitationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('invitation_edit');
    }

    public function rules()
    {
        return [
            'all_users_invites.*' => [
                'integer',
            ],
            'all_users_invites' => [
                'array',
            ],
            'invitation_valid_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
