@extends('admin.master')
@section('title','分类列表页')
@section('css')
<link href="{{ url('/js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
  <link href="{{ url('/js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ url('/js/data-tables/DT_bootstrap.css') }}" />

  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/css/style-responsive.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
			<h3>
                分类列表
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/admin') }}">首页</a>
                </li>
                <li>
                    <a href="{{ url('/admin/cate/index') }}">分类管理</a>
                </li>
                <li class="active"> 分类列表 </li>
            </ul>
 @endsection

@section('contents')
<div class="wrapper">  <!-- wrapper 盒子  statistics 统计-->
            
@if(session('success'))
	<div class="row">
	    <div class="col-md-12">
			<section class="panel">
				<div class="panel-body">
	                    <!--statistics start-->
					<div class="alert alert-success alert-block fade in">
					    <button data-dismiss="alert" class="close close-sm" type="button">
					        <i class="fa fa-times"></i>
					    </button>
					    <h4>
					        <i class="icon-ok-sign"></i>
					        成功！
					    </h4>
					    <p>{{session('success')}}</p>
					</div>
				</div>
			<section>
		</div>
	</div>
@endif
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
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            分类列表
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;D  </th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;分类名称</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;分类路径</th>
            <th class="hidden-phone"> &nbsp;&nbsp;&nbsp;&nbsp;状态</th>
            <th class="hidden-phone"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;操作</th>
        </tr>
        </thead>
        <tbody>
@foreach($cates as $k=>$v)
        <tr class="gradeX">
            <td>{{$v['id']}}</td>
            <td>{{$v['name']}}</td>
            <td>{{$v['path']}}</td>
            <td class="center hidden-phone">{{$v['status']}}</td>
            <td class="center hidden-phone">[<a href="/admin/cate/add/{{ $v['id'] }}">添加</a>]  [<a href="/admin/cate/edit/{{ $v['id'] }}">编辑</a>  <a href="/admin/cate/delete/{{ $v['id'] }}">删除</a>]</td>
        </tr>
@endforeach
        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>

</div>
@endsection
@section('js')
<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ url('/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ url('/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/modernizr.min.js') }}"></script>
<script src="{{ url('/js/jquery.nicescroll.js') }}"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="{{ url('/js/advanced-datatable/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/data-tables/DT_bootstrap.js') }}"></script>
<!--dynamic table initialization -->
<script src="{{ url('/js/dynamic_table_init.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ url('/js/scripts.js') }}"></script>
@endsection