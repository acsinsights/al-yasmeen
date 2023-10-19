<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'phone_no' => ['integer'],
            'sales_no' => ['integer'],
            'sales_mail' => ['string'],
            'company_name' => ['string'],
            'company_location' => ['string', 'max:3000'],
            'meta_pixel' => ['nullable','string', 'max:2000'],
            'w_app_wid' => ['nullable','string', 'max:2000'],
            'chatbot_widgets' => ['nullable','string', 'max:2000'],
            'g_analytics' => ['nullable','string', 'max:2000'],
            'company_address' => ['string'],
            'facebook' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'string'],
            // 'profile_img' => ['required','image'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
