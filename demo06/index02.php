<?php
//预定义超全局变量

//_GET 方式传递数据  从客户端
//http://localhost/demo06/index02.php?参数名=参数值&参数名=参数值
var_dump($_GET);    //在服务端可以通过$_GET 数组来获得    
//明文  缺点
var_dump($_POST);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>预定义全局变量</title>
</head>
<body>
<form method="post">   //post    请求
    姓名:<input type="text" name="username" /><br>
    性别:<input type="text" name="sex" /><br>
    <input type="submit" value="提交" /><br>

<!-- <form method="get">    //get     请求
姓名:<input type="text" name="username" /><br>
性别:<input type="text" name="sex" /><br>
<input type="submit" value="提交" />
</form> -->
</body>
</html>