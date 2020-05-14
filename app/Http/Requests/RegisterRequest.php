<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'name' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => 'This email id is already in use.',
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
