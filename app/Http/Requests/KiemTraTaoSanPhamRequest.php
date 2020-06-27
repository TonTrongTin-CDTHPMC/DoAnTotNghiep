<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KiemTraTaoSanPhamRequest extends FormRequest
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
            'name' => 'bail|required|max:20', 
            'short_description'=>'bail|required',
            'brand'=>'bail|required',
            'Images'=>'bail|required',
            'model'=>'bail|required',
            'color_family'=>'bail|required',
            'size'=>'bail|required',
            'price'=>'bail|required|integer|min:10000',
            'package_length'=>'bail|integer|required',
            'package_height'=>'bail|integer|required',
            'package_width'=>'bail|integer|required',
            'package_content'=>'bail|required'
          
        ];
    }
    public function messages() {
     return [ 'name.required' => 'Chưa nhập tên Sản phẩm',
              'short_description.required'  => 'Chưa nhập mô tả ngắn',
              'brand.required'=>'Chưa nhập thương hiệu',
              'model.required'=>'Chưa nhập dòng sản phẩm',
              'color_family.required'=>'Chưa nhập nhóm màu',
              'size.required'=>'Chưa nhập kích thước',
              'price.required'=>'Chưa nhập giá',
              'price.min'=>'Giá phải từ 10000',
              'package_length.required'=>'Chưa nhập chiều dài hộp đựng',
              'package_width.required'=>'Chưa nhập chiều rộng hộp đựng',
              'package_content.required'=>'Chưa nhập trọng lượng hộp đựng',
              'Images.required'=>'Chưa chọn hình'
            ]; }
}
