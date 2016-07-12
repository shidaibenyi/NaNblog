@extends('admin.master')
@section('title','添加文章页')

    
@section('breadcrumb')
            <h3>
                添加文章
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/admin') }}">首页</a>
                </li>
                <li>
                    <a href="{{ url('/admin/article/index') }}">文章管理</a>
                </li>
                <li class="active"> 文章添加 </li>
            </ul>
 @endsection
@section('contents')
<div class="wrapper">  <!-- wrapper 盒子  statistics 统计-->
    @if(count($errors)>0)
     <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                        <!--statistics start-->
                    <div class="alert alert-block alert-danger fade in">                  
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>糟糕！</strong>
                        <ul>
                        @foreach( $errors->all() as $error)
                        <li> {{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endif
	<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    添加文章
                </header>
                <div class="panel-body">
                            <div class=" form">
                                <form action="{{ url('/admin/article/insert') }}" method="post" enctype="multipart/form-data" id="commentForm" class="cmxform form-horizontal adminex-form" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2" for="cname" >文章标题 (required)</label>
                                        <div class="col-lg-10">
                                            <input type="text" required minlength="2" name="title" id="cname" class=" form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2" for="ccomment">文章描述 (required)</label>
                                        <div class="col-lg-10">
                                            <textarea required name="descr" id="ccomment" class="form-control "></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-2" for="ccomment">文章内容 (required)</label>
                                        <div class="col-lg-10">
                                            <textarea required name="content" id="ccomment" class="form-control "></textarea>
                                        </div>
                                    </div>
                                        
                                    <select class="form-control m-bot15" name="cate_id">
                                        <option>--请选择</option>
                                        <?php 
                                        $path = array();
                                        foreach ($cates as $key => $value) {
                                            $path[] = $value['pid'] ;                                       
                                        }
                                        ?>
                                        @foreach($cates as $k => $v)
                                            @if(in_array($v['id'], $path)) 
                                                <option disabled value="{{$v['id']}}"> {{$v['name']}}(含有子类的元素无法选择)</option>
                                            @else
                                                <option value="{{$v['id']}}"> {{$v['name']}}</option>
                                            
                                            @endif
                                        @endforeach                                                                        
                                </select> 
                                <div class="form-group last">
                                    <label class="control-label col-md-3">文章主图</label>
                                    <div class="col-md-9">
                                        <div data-provides="fileupload" class="fileupload fileupload-new"><input type="hidden">
                                            <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                            </div>
                                            <div style="max-width: 200px; max-height: 150px; line-height: 10px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i>更换</span>
                                                   <input type="file" class="default" name="pic">
                                                   </span>
                                                <a data-dismiss="fileupload" class="btn btn-danger fileupload-exists" href=""><i class="fa fa-trash"></i> 删除</a>
                                            </div>
                                        </div>
                                        <br>
                                        <span class="label label-danger ">NOTE!</span>
                                             <span>
                                             该功能仅支持Latest Firefox, Chrome, Opera,
                                             Safari 和 Internet Explorer 10 浏览器                                             
                                             </span>
                                    </div>
                                </div>
                                {{ csrf_field() }} 
                            
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-primary">添加</button>
                                            <button type="button" class="btn btn-default">重置</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                                
            </section>
        </div>
    </div>
    
</div> 
@endsection 

