<?php
	$path = array();
@foreach ($cates as $key => $value) {
	$path[] = explode(',',$value['path']);
}
@endforeach
foreach ($cates as $k => $v) {
	if (in_array($v['id'], $path)) {
		<option disabled value="{{$v['id']}}"> {{$v['name']}}</option>
	} else {
		<option value="{{$v['id']}}"> {{$v['name']}}</option>
	}
}