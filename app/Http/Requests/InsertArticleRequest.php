<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertArticleRequest extends Request
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
            'title' => 'required',
            'content'=>'required',
            'descr' => 'required',
            'cate_id' => 'numeric'
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => '文章标题不能为空',
            'content.required'  => '内容不能为空',
            'descr.required'  => '描述不能为空',
            'cate_id.required'  => '文章分类参数有误'
        ];
    }
}
