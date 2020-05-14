<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class LoginRequest extends FormRequest
{
    use ApiResponse;

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
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'password.min' => 'Password should have minimum 8 charachter.'
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $this->setMeta('status', AppConstant::STATUS_FAIL);
        $this->setMeta('message', $validator->messages()->first());
        throw new HttpResponseException(response()->json($this->setResponse(), AppConstant::UNPROCESSABLE_REQUEST));
    }
}
