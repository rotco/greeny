<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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

//{{--$table->increments('id');--}}
//    {{--$table->integer('user_id');--}}
//    {{--$table->integer('category_id');--}}
//    {{--$table->integer('subcategory_id');--}}
//    {{--$table->integer('manufacturer_id');--}}
//    {{--$table->integer('model_id');--}}
//    {{--$table->integer('condition_id');--}}
//    {{--$table->integer('price');--}}
//    {{--$table->string('title');--}}
//    {{--$table->text('description');--}}
//    {{--$table->boolean('status')->default(false);--}}
    public function rules()
    {

        return [
            'user_id'=>'required',
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'manufacturer_id'=>'required',
            'model_id'=>'required',
            'condition_id'=>'required',
            'price'=>'required',
            'title'=>'required',
            'description'=>'required'
        ];
    }
}
