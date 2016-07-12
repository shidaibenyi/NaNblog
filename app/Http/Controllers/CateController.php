<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    /**
    * 获取表中所有分类
    */
    public function getAllCate()
    {
        return DB::table('cates')->get();
    }

    /**
    * 递归方法来获取数据
    */
    public function getCatesByPidArr($cates, $pid)
    {
        //遍历数组
        $data = [];
        foreach ($cates as $key => $value) {
            if($value['pid'] == $pid){
                $value['sub'] = self::getCatesByPidArr($vates, $value['id']);
                $data[] =$value;
            }
        }
        return $data;
    }

     /**
    * 按顺序获取分类下所有的分类
    */
    public function getCate()
    {
        //获取所有分类
        $arr = self::getAllCate();
        // 通过父级ID来获取子元素
        $res = self::getCatesByPidArr();
        return $res;
    }

    /**
    * 按顺序获取分类下所有的分类
    */
    public static function getCates()
    {
        $res = DB::table('cates')
        ->select(DB::raw('*,concat(path,",",id) as paths'))
        ->orderBy('paths')
        ->get();
        //调整分类名称 |----IT
        foreach($res as $k=>$v){
            //拆分 数组
            $tmp = explode(',', $v['path']);
            $len = count($tmp) - 1;
            //修改分类名称
            $res[$k]['name'] = str_repeat('|----',$len).$v['name'];
        }
        return $res;
    }

    /**
    * 分类添加显示
    */
    public function getAdd($id='')
    {
        //调用获取的方法
        $cates = self::getCates();
        //获取所有的分类信息
        // $cates = DB::table('cates')->get();
        return view('admin.cate.add',['cates'=>$cates,'id'=>$id]);
    }

    /**
    * 分类添加操作
    */
    public function postInsert(request $request)
    {
        $data = array();
        $pid = $request->input('pid'); //input为基本获取元素内容

        $data = $request->except('_token');
        if ($pid == 0) { //顶级分类            
            $data['path'] = 0;
        } else { //获取pid 并且读取父级分类信息
            $info = DB::table('cates')->where('id','=',$pid)->first();
            $data['path'] = $info['path'].','.$info['id'];
        }
       $res = DB::table('cates')->insert($data);

       if ($res) {
            return redirect('/admin/cate/index')->with('success','添加分类成功！');
       } else {
            return back()->with('error','添加分类失败！');
       }
    }

    /**
    * 分类列表显示
    */
    public function getIndex()
    {
        //调用获取的方法
        $cates = self::getCates();
        return view('admin.cate.index',['cates'=>$cates]);
    }

    /**
    * 分类修改操作
    */
    public function getEdit($id)
    {
        //读取当前id分类信息
        $info = DB::table('cates')->where('id',$id)->first();
        //分配变量解析模板
        return view('admin.cate.edit',['cates'=>self::getCates(), 'info'=>$info]);
    }

    /**
    * 分类更新操作
    */
    public function postUpdate(request $request)
    {
        $data = array();
        $pid = $request->input('pid'); //input为基本获取元素内容

        $data = $request->except('_token');
        if ($pid == 0) { //顶级分类            
            $data['path'] = 0;
        } else { //获取pid 并且读取父级分类信息
            $info = DB::table('cates')->where('id','=',$pid)->first();
            //进行拼接path路径
            $data['path'] = $info['path'].','.$info['id'];
        }
        //更新
        $res = DB::table('cates')->where('id', $request->input('id'))->update($data);
        if($res) {
            return redirect('/admin/cate/index')->with('success','修改成功！');
        } else {
            return back()->with('error','修改失败!');
        }
    }

    /**
    * 分类删除操作
    */
    public function getDelete($id)
    {
        //检测当前分类下是否包含子分类
        $data = DB::table('cates')->where('pid',$id)->count();
        if($data >0){
            return back()->with('error','对不起，含有子分类的分类无法删除！');
        }
        //删除操作
        $res = DB::table('cates')->where('id', $id)->delete();
        if($res) {
            return redirect('/admin/cate/index')->with('success','删除成功！');
        } else {
            return back()->with('error','删除失败!');
        }
    }



}
