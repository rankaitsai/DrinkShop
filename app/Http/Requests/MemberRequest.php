<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    // 在form request 裡驗證身分
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    // 在form request裡設定規則
    public function rules()
    {
        return [
            'account' => 'required|unique:member|regex:/^[\w-]*$/|min:3|max:20',
            'password' => 'required|regex:/^[\w-]*$/|min:3',
            'name' => 'required',
            'phone' => 'required|min:6,max:10|numeric',
            'email' =>'required|email|unique:member',
            'address' => 'required',
            'photo' => 'mimes:jpeg,bmp,png,jpg',
        ];
    }
}
