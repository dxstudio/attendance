<?php
    header("content-type=text/html;charset=utf-8");
    require_once('config.php');
    $conn = db_connect();
    $classID=$_GET['id'];
    $sql="select * from studentrecord where classID='".$classID."' order by schoolID";
    mysqli_query($conn, "set character set 'utf8'");
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $classname=$row['classname'];
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.sorted.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/ckform.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<form action="index.html" method="post">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">班级</td>
        <td><p class="form-control-static"><?php echo $classname;?></p></td>
    </tr>
   
    <tr>
        <td width="10%" class="tableleft">时间</td>
        <td><input type="date" name="grouptitle"/>
        </td>
        <td width="10%" class="tableleft">节次</td>
        <td>
        <select class="form-control" name="class">
			  <option>1-2</option>
			  <option>3-4</option>
			  <option>5-6</option>
			  <option>7-8</option>
			  
		</select>
        </td>
    </tr>
    <tr>
        <td width="10%" class="tableleft">表格上传</td>
        <td>
            <input type="file" class="btn btn-default" >
        </td>
    </tr>
    <tr>
        <td width="10%" class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button">保存</button>&nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
</table>
</form>
</body>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.";
		 });

    });
</script>
</html>
