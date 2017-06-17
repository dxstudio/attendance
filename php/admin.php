<?php
header("content-type=text/html;charset=utf-8");
require_once('config.php');
$conn = db_connect();
$identity=$_GET['id'];
$sql="select * from administrator where identity='".$identity."' order by id";
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


<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>用户名</th>
        <th>角色</th>
        <th>权限</th>
        <th>最近登录</th>
        <th>操作</th>
    </tr>
    </thead>
        <tr>
               <?php
               while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>{$row['username']}</td>";
				echo "<td>{$row['identity']}</td>";
				echo "<td></td>";		
				echo "<td>{$row['lasttime']}</td>";
				echo "<td><a href='identity.php?id={$row['id']}'>编辑</a>
					  </td>";
				echo "</tr>";

			}
			
		?>
            </tr>
           </table>

</body>
</html>
