<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'post_id' => ['integer', 'required'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['email', 'required'],
            'website' => ['url', 'nullable'],
            'message' => ['string', 'required', 'max:65535'],
        ];
    }
}
