<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => 'required',
            'phone' => 'required|numeric',
            'guest_number' => 'required|numeric',
            'booking_date' => 'required',
            'time_start' => 'required',
//            'time_end' => 'after:time_start',
        ];
    }
}
