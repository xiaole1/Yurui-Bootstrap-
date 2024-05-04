<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
$code='[
	{"id":"1","title":"网站建设","children":[
		{"name":"a1","src":"../img/bxpc1.png"},
		{"name":"a2","src":"../img/bxpc2.png"},
		{"name":"a3","src":"../img/bxpc3.png"},
		{"name":"a4","src":"../img/bxpc1.png"},
		{"name":"a5","src":"../img/bxpc2.png"},
		{"name":"a6","src":"../img/bxpc3.png"}
		]},
	{"id":"2","title":"微信开发","children":[
		{"name":"a1","src":"../img/bx.jpg"},
		{"name":"a2","src":"../img/cz.png"},
		{"name":"a3","src":"../img/bx.jpg"},
		{"name":"a4","src":"../img/cz.png"}
		]},
	{"id":"3","title":"APP开发","children":[
		{"name":"a1","src":"../img/xb1.png"},
		{"name":"a2","src":"../img/xb2.png"},
		{"name":"a3","src":"../img/xb3.png"},
		{"name":"a4","src":"../img/xb1.png"},
		{"name":"a5","src":"../img/xb2.png"},
		{"name":"a6","src":"../img/xb3.png"}
		]},
	{"id":"4","title":"软件定制","children":[
		{"name":"a1","src":"../img/gps1.png"},
		{"name":"a2","src":"../img/gps2.png"},
		{"name":"a3","src":"../img/gps3.png"},
		{"name":"a4","src":"../img/gps1.png"},
		{"name":"a5","src":"../img/gps2.png"},
		{"name":"a6","src":"../img/gps3.png"}
		]}
	]';
echo json_encode($code);
?>