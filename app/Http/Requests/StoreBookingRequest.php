<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('bookings-manage');
    }

    public function rules(): array
    {
        return [
            'apartment_id' => ['required', 'exists:apartments,id'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'guests_adults' => ['integer'],
            'guests_children' => ['integer'],
        ];
    }
}
