@extends('/admin/master')
@section('title','文章信息管理页')

@section('css')
<link href="{{ url('/js/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
  <link href="{{ url('/js/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ url('/js/data-tables/DT_bootstrap.css') }}" />

  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/css/style-responsive.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
	 		<h3>
                文章信息
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/admin') }}">主页</a>
                </li>
                <li>
                    <a href="{{ url('/admin/article') }}">文章</a>
                </li>
                <li class="active"> 基本信息 </li>
            </ul>
@endsection
@section('contents')
<div class="wrapper">
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
            文章信息
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table class="display table table-bordered" id="hidden-table-info">
        <thead>
        <tr>
            <th>文章ID</th>
            <th>文章标题</th>
            <th class="hidden-phone">文章描述</th>
            <th class="hidden-phone">文章内容</th>
            <th class="hidden-phone">文章创建时间</th>
            <th class="hidden-phone">文章主图</th>
            <th class="hidden-phone">文章所属用户</th>
            <th class="hidden-phone">文章所属分类</th>
            <th class="hidden-phone">管理</th>
        </tr>
        </thead>
        <tbody>
        @foreach($article as $k=>$v)
        <tr class="gradeX">
            <td>{{$v['id']}}</td>
            <td>{{$v['title']}}</td>
            <td class="hidden-phone">{{$v['descr']}}</td>
            <td class="center hidden-phone">{{$v['content']}}</td>
            <td class="center hidden-phone">{{$v['created_at']}}</td>
            <td class="center hidden-phone"><img src="{{$v['pic']}}" alt="" height="50px"></td>
            <td class="center hidden-phone">{{$v['user_id']}}</td>
            <td class="center hidden-phone">{{$v['cate_id']}}</td>
            <td class="center hidden-phone">  [<a href="/admin/article/edit/{{$v['id']}}">编辑</a>  <a href="/admin/article/delete/{{$v['id']}}">删除</a>]</td>
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