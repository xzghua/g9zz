<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-2-7
 * Time: 下午3:23
 */

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;


class PostController extends \App\Http\Controllers\Admin\PostController
{

    public function store(Request $request)
    {
        $input =  $request->only(['title','categoryId','content','isExcellent','isTop']);
        $input = parse_input($input);

        $input['is_excellent'] = !empty($input['is_excellent']) && $input['is_excellent'] == 'on' ? 'yes' : 'no';
        $input['is_top'] = !empty($input['is_top']) && $input['is_top'] == 'on' ?  'yes' : 'no';

        \Log::info('"controller.error" to listener "' . __METHOD__ . '".', ['request' => $input]);

        $rules = [
            'title' => 'required',
            'category_id' => 'required',//还需校验分类是否存在

        ];

        $this->requestValidate($input,$rules,'post');

        $input['user_id'] = rand(1,30);//作者名称
        $input['body_original'] = $input['content'];
        $id = $this->repository->create($input);

        reminder()->success('创建帖子成功','创建成功');

        return redirect()->route("index.post.detail",$id->id);

    }


}