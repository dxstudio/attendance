
<?php
    header("content-type=text/html;charset=utf-8");
    require_once('config.php');
    $conn = db_connect();
    $classID=$_GET['id'];
    $sql="select * from studentrecord where classID='".$classID."' order by schoolID";
    mysqli_query($conn, "set character set 'utf8'");
    $result=mysqli_query($conn, $sql);
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
<body>
<form action="" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">时间</td>
        <td><input type="date" name="grouptitle"/>
        </td>
        <td width="10%" class="tableleft">节次</td>
        <td>
        <select class="form-control">
			  <option>1-2</option>
			  <option>3-4</option>
			  <option>5-6</option>
			  <option>7-8</option>
			  
		</select>
        </td>
    </tr>
</table>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
    	<th>班级</th>
        <th>学号</th>
        <th>姓名</th>
        <th>到课</th>
        <th>旷课</th>
        <th>请假</th>
        <th>未出示假条</th>
    </tr>
    </thead>
        <tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {   echo "<tr>";
            	
                    echo "<td>{$row['classname']}</td>";
                  	echo "<td>{$row['schoolID']}</td>";
                    echo "<td>{$row['studentname']}</td>";
                    echo "<td><input type='radio' id='inlineCheckbox2' value='option2' name='inlineRadioOptions'/></td>";
                    echo "<td><input type='radio' id='inlineCheckbox2' value='option2' name='inlineRadioOptions'/></td>";
                    echo "<td><input type='radio' id='inlineCheckbox2' value='option2' name='inlineRadioOptions'/></td>";
                    echo "<td><input type='radio' id='inlineCheckbox2' value='option2' name='inlineRadioOptions'/></td>";
                    echo "</tr>";
                
            }
                
                
                
            ?>
            
            
            
       </tr>
       
    </table>
    <table class="table table-bordered table-hover definewidth m10">
	<tr>
        
        <td class="tableright"> 
            <button type="submit" class="btn btn-primary" type="button">保存</button>&nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
</table>
</form>


</body>
</html>
