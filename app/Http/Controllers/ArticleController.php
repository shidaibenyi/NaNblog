<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Config;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\InsertArticleRequest;
// use App\Http\Controllers\Controller\CateController;

class ArticleController extends Controller
{
    
    /**
    * 文章添加显示
    */
    public function getAdd($id='')
    {
        $cates = CateController::getCates();
        return view('admin.article.add',['cates'=>$cates ]);
    }

    /**
    * 文章添加操作
    */
    public function postInsert(InsertArticleRequest $request)
    {   
        //处理数据
        $data = $this->dealRequest($request);
        $data['created_at'] = date('Y-m-d H:i:s');
        // 插入数据库
        if(DB::table('article')->insert($data)){
            return redirect('/admin/article/index')->with('success','添加成功！');
        } else {
            return back()->with('error', '添加失败');
        }
    }

    /**
    * 文章列表显示
    */
    public function getIndex(request $request)
    {
        $article = DB::table('article')
        ->where(function($query)use($request){
            if($request->input('keywords')){
                $query->where('title','like','%'.$request->input('keywords').'%');
            }
        })
        ->paginate($request->input('num',10));
        // //调用获取的方法
        // $cates = CateController::getCates();
        return view('admin.article.index',['article'=>$article, 'request'=>$request->all()]);
    }

    /**
    * 文章修改操作
    */
    public function getEdit($id)
    {
        //获取当前指定id的文章信息
        $arc = DB::table('article')->where('id','=',$id)->first();
        //解析模板
        return view('admin.article.edit',[
            'arc' =>$arc,
            'cates' =>CateController::getCates()
            ]);
    }

 /**
    * 文章更新操作
    */
    public function postUpdate(InsertArticleRequest $request)
    {
        // 处理数据
        $data = $this->dealRequest($request);
        // 插入数据库
        if(DB::table('article')->where('id',$request->input('id'))->update($data)){
            return redirect('/admin/article/index')->with('success','更新成功！');
        } else {
            return back()->with('error', '更新失败');
        }
    }

    /**
    * 处理数据
    */
    private function dealRequest(request $request)
    {
        $data = $request->except(['_token']);
        //文件上传
        if($request->hasFile('pic')) {
            //拼接文件名称
            $pathname = time().rand(100000,999999).'.'.$request->file('pic')->getClientOriginalExtension();
            //上传文件
            $request->file('pic')->move(Config::get('app.upload_dir') ,$pathname);
            //拼接路径字段
            $data['pic'] = trim(Config::get('app.upload_dir').$pathname,'.');
        }
        $data['user_id'] = 1;
        //返回数据
        return $data;
    }

/**
    * 分类删除操作
    */
    public function getDelete($id)
    {
        //检测图片
        $arc = DB::table('article')->where('id',$id)->first();
        //拼接路径 删除图片
        $path = '.'.$arc['pic'];
        if(file_exists($path)){
            unlink($path);
        }
        //删除操作
        $res = DB::table('article')->where('id', $id)->delete();
        if($res) {
            return redirect('/admin/article/index')->with('success','删除成功！');
        } else {
            return back()->with('error','删除失败!');
        }
    }

   

}
