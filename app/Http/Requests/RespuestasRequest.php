<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RespuestasRequest extends FormRequest
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
            'p1'   => 'required|in:1,2,3,4,5',
            'p2'   => 'required|in:1,2,3,4,5',
            'p2'   => 'required|in:1,2,3,4,5',
            'p3'   => 'required|in:1,2,3,4,5',
            'p4'   => 'required|in:1,2,3,4,5',
            'p5'   => 'required|in:1,2,3,4,5',
            'p6'   => 'required|in:1,2,3,4,5',
            'p7'   => 'required|in:1,2,3,4,5',
            'p8'   => 'required|in:1,2,3,4,5',
            'p9'   => 'required|in:1,2,3,4,5',
            'p10'  => 'required|in:1,2,3,4,5',
            'p11'  => 'required|in:1,2,3,4,5',
            'p12'  => 'required|in:1,2,3,4,5',
            'p13'  => 'required|in:1,2,3,4,5',
            'p14'  => 'required|in:1,2,3,4,5',
            'p15'  => 'required|in:1,2,3,4,5',
            'p16'  => 'required|in:1,2,3,4,5',
            'p17'  => 'required|in:1,2,3,4,5',
            'p18'  => 'required|in:1,2,3,4,5',
            'p19'  => 'required|in:1,2,3,4,5',
            'p20'  => 'required|in:1,2,3,4,5',
            'p21'  => 'required|in:1,2,3,4,5',
            'p22'  => 'required|in:1,2,3,4,5',
            'p23'  => 'required|in:1,2,3,4,5',
            'p24'  => 'required|in:1,2,3,4,5',
            'p25'  => 'required|in:1,2,3,4,5',
            'p26'  => 'required|in:1,2,3,4,5',
            'p27'  => 'required|in:1,2,3,4,5',
            'p28'  => 'required|in:1,2,3,4,5',
            'p29'  => 'required|in:1,2,3,4,5',
            'p30'  => 'required|in:1,2,3,4,5',
            'p31'  => 'required|in:1,2,3,4,5',
            'p32'  => 'required|in:1,2,3,4,5',
            'p33'  => 'required|in:1,2,3,4,5',
            'p34'  => 'required|in:1,2,3,4,5',
            'p35'  => 'required|in:1,2,3,4,5',
        ];
    }


    public function messages(){
        return [
            'p1.required'   => 'elija un valor entre 1 y 5',
            'p2.required'   => 'elija un valor entre 1 y 5',
            'p2.required'   => 'elija un valor entre 1 y 5',
            'p3.required'   => 'elija un valor entre 1 y 5',
            'p4.required'   => 'elija un valor entre 1 y 5',
            'p5.required'   => 'elija un valor entre 1 y 5',
            'p6.required'   => 'elija un valor entre 1 y 5',
            'p7.required'   => 'elija un valor entre 1 y 5',
            'p8.required'   => 'elija un valor entre 1 y 5',
            'p9.required'   => 'elija un valor entre 1 y 5',
            'p10.required'  => 'elija un valor entre 1 y 5',
            'p11.required'  => 'elija un valor entre 1 y 5',
            'p12.required'  => 'elija un valor entre 1 y 5',
            'p13.required'  => 'elija un valor entre 1 y 5',
            'p14.required'  => 'elija un valor entre 1 y 5',
            'p15.required'  => 'elija un valor entre 1 y 5',
            'p16.required'  => 'elija un valor entre 1 y 5',
            'p17.required'  => 'elija un valor entre 1 y 5',
            'p18.required'  => 'elija un valor entre 1 y 5',
            'p19.required'  => 'elija un valor entre 1 y 5',
            'p20.required'  => 'elija un valor entre 1 y 5',
            'p21.required'  => 'elija un valor entre 1 y 5',
            'p22.required'  => 'elija un valor entre 1 y 5',
            'p23.required'  => 'elija un valor entre 1 y 5',
            'p24.required'  => 'elija un valor entre 1 y 5',
            'p25.required'  => 'elija un valor entre 1 y 5',
            'p26.required'  => 'elija un valor entre 1 y 5',
            'p27.required'  => 'elija un valor entre 1 y 5',
            'p28.required'  => 'elija un valor entre 1 y 5',
            'p29.required'  => 'elija un valor entre 1 y 5',
            'p30.required'  => 'elija un valor entre 1 y 5',
            'p31.required'  => 'elija un valor entre 1 y 5',
            'p32.required'  => 'elija un valor entre 1 y 5',
            'p33.required'  => 'elija un valor entre 1 y 5',
            'p34.required'  => 'elija un valor entre 1 y 5',
            'p35.required'  => 'elija un valor entre 1 y 5',
        ];
        

    }






}
