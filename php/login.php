


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin</title>
   
   <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/signin.css" />
    <link href="../css/sticky-footer.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="back">
<div class="sign">
<center><h3>登录考勤管理系统</h3></center>
<div class="container">

<form class="form-horizontal" method="post" action="checkLogin.php">

  <div class="form-group">
  	
    <label for="inputEmail3" class="col-sm-3 control-label">账号</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password"  placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
      <div class="checkbox">
        <label>
          <input type="checkbox">记住密码
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
      <button type="submit" class="btn btn-primary col-sm-10">登录</button>
    </div>
  </div>
  
</form>
</div>
</div>
</div>
<center>
<footer class="footer">
	      <div class="container">
	        <p class="text-muted" style="font-family:verdana">Copyright&copy;2016-2017. All rights deserved.<a href="http://www.miitbeian.gov.cn/">正在备案中</a>Powered by <a href="https://xhcj.taobao.com" title="去我的淘宝店逛逛">Gaoyuting,Zhaochuanlu,Dongdihao</a></p>
	      </div>
 </footer></center>
</body>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.";
		 });

    });
</script>
</html>