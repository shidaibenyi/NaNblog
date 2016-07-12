@extends('admin.master')
@section('title','编辑分类页')
@section('breadcrumb')
            <h3>
                编辑分类
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/admin') }}">首页</a>
                </li>
                <li>
                    <a href="{{ url('/admin/cate/index') }}">分类管理</a>
                </li>
                <li class="active"> 分类编辑 </li>
            </ul>
 @endsection
@section('contents')
<div class="wrapper">  <!-- wrapper 盒子  statistics 统计-->
    @if(session('error'))
     <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                        <!--statistics start-->
                    <div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>糟糕！</strong>{{session('error')}}
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
                    编辑分类
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="{{ url('/admin/cate/update') }}">
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">分类名称 (必填)</label>
                                <div class="col-lg-8">
                                    <input type="hidden" name="id" value="{{$info['id']}}">
                                    <input class="form-control" id="cname" name="name" minlength="2" type="text" value="{{$info['name']}}" required />
                                </div>
                            </div>                                
                                {{ csrf_field() }} 
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">修改</button>
                                    <button class="btn btn-default" type="button">重置</button>
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