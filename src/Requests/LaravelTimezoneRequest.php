<?php

namespace Sawirricardo\LaravelTimezone\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaravelTimezoneRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'timezone' => [
                'required',
                'string',
                'in:' . join(',', config('timezone.allowed_timezones')),
            ],
        ];
    }

    public function messages()
    {
        return [
            'timezone.in' => 'Invalid :attribute',
        ];
    }
}
