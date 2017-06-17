<?php
	header("content-type=text/html;charset=utf-8");
	require_once('config.php');
	$conn = db_connect();
	$facultyID=$_GET['id'];
	$sql="select * from classtotal where facultyID='".$facultyID."' order by classID";
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
<form class="form-inline definewidth m20" action="php/search.php" method="post">
    请输入班级名称：
    <input type="text" name="menuname" id="menuname" class="abc" value="">&nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
     <a  class="btn btn-success" id="addnew" href="">新增班级</a>
</form>

<table class="table table-bordered table-hover definewidth m10" data-role="table" data-mode="columntoggle" id="myTable">
    <thead>
    <tr>
        <th>班级</th>
        <th>辅导员</th>
        <th>第一周</th>
        <th>第二周</th>
        <th>第三周</th>
        <th>第四周</th>
        <th>第五周</th>
        <th>第六周</th>
        <th>第七周</th>
        <th>第八周</th>
        <th>第九周</th>
        <th>管理</th>
    </tr>
    </thead>
        <tr>
               <?php
               while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>{$row['classname']}</td>";
				echo "<td>{$row['counsellor']}</td>";
				echo "<td>{$row['week1']}</td>";		
				echo "<td>{$row['week2']}</td>";
				echo "<td>{$row['week3']}</td>";
				echo "<td>{$row['week4']}</td>";
				echo "<td>{$row['week5']}</td>";
				echo "<td>{$row['week6']}</td>";
				echo "<td>{$row['week7']}</td>";
				echo "<td>{$row['week8']}</td>";
				echo "<td>{$row['week9']}</td>";
		
				echo "<td><a href='add.php?id={$row['classID']}'>新增&nbsp;</a><a href='upload.php?id={$row['classID']}'>&nbsp;上传
					 
					  </td>";
				echo "</tr>";

			}
			
		?>
            </tr>
           </table>

</body>
</html>
