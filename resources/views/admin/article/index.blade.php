@extends('/admin/master')
@section('title','文章信息管理页')

@section('css')
<link href="/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="/js/data-tables/DT_bootstrap.css" />

  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet">
@endsection

@section('breadcrumb')
	 		<h3>
                主页
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="/admin">主页</a>
                </li>
                <li>
                    <a href="/admin/article">文章</a>
                </li>
                <li class="active"> 基本信息 </li>
@endsection
@section('contents')
<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            DataTables hidden row details example
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
            <th>Rendering engine</th>
            <th>Browser</th>
            <th class="hidden-phone">Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">4</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
                Explorer 5.0</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">5</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">5.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeU">
            <td>Other browsers</td>
            <td>All others</td>
            <td class="hidden-phone">-</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">U</td>
        </tr>
        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
        <!--body wrapper end-->
@endsection

@section('js')
<!-- Placed js at the end of the document so the pages load faster -->
<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/modernizr.min.js"></script>
<script src="/js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="/js/dynamic_table_init.js"></script>

<!--common scripts for all pages-->
<script src="/js/scripts.js"></script>
@endsection