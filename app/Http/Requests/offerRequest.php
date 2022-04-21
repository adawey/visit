<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        // $regexName='/^[a-zA-Z\u0600-\u06FF,-\s][\s\a-zA-Z\u0600-\u06FF,-]*$/';
        return [

            // 'name' => 'required|regex:'.$regexName,
            'region_id' => 'required',
            'description' => 'required',
            'link' => 'required|regex:'.$regex,
        ];
    }
    public function messages(){
        return [
            'name.required' =>'اسم العرض مطلوب',
            'name.regex' =>'يجب أدخال أحرف فقط',
            'region_id.required' =>'اسم المدينه مطلوب',
            'description.required' =>'اسم الوصف مطلوب',
            'link.required' =>'اسم الرابط مطلوب',
            'link.regex' =>'يجب ادخال الرابط بطريقه صحيحه',
        ];
    }
}
