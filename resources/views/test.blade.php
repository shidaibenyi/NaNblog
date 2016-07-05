<?php
$user = array(
		"name" => "Lucy",
		"sex" => "female",
		"age" => 23
	);
?>
	<ul>
	@foreach ($user as $tmp)
		<li>{{$tmp}}</li>  
	@endforeach
	</ul>