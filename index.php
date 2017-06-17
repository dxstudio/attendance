<?php
header('content-type:text/html;charset=utf-8');
  include "php/config.php";
    if(!$_COOKIE['username'])
  {
    echo "<script>location='php/login.php'</script>";

  }
?>
<!DOCTYPE HTML>
<html>
 <head>
  <title>学生考勤管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="css/main-min.css" rel="stylesheet" type="text/css" />
   <link href="css/sticky-footer.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
         <!--<img src="/images/whiteLogo.png">-->
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span><a href="" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title"><p class="dl-inform-icon dl-up"></p></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        		<li class="nav-item dl-selected"><div class="nav-item-inner nav-home">导入信息</div></li>		
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">业务管理</div></li>  
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">系统管理</div></li>      

      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
   
  <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="js/bui-min.js"></script>
  <script type="text/javascript" src="js/main-min.js"></script>
  <script type="text/javascript" src="js/config-min.js"></script>
  <script>
    BUI.use('common/main',function(){
      var config = [
      {id:'1',menu:
        [
          {text:'2016级',items:
            [
              {id:'2',text:'16电气类',href:'php/classTotal.php?id=1601'},
              {id:'3',text:'16计算机类',href:'php/classTotal.php?id=1602'},
              {id:'4',text:'16电信类',href:'php/classTotal.php?id=1603'},
              {id:'5',text:'16光信',href:'php/classTotal.php?id=1604'},
              {id:'6',text:'16电子',href:'php/classTotal.php?id=1605'}
            ]
          },
          {text:'2015级',items:
            [
              {id:'7',text:'15电气类',href:'php/classTotal.php?id=1501'},
              {id:'8',text:'15电信类',href:'php/classTotal.php?id=1502'},
              {id:'9',text:'15电子',href:'php/classTotal.php?id=1503'},
              {id:'10',text:'15光信',href:'php/classTotal.php?id=1504'}
            ]
          },
          {text:'2014级',items:
            [
              {id:'11',text:'14自动化系',href:'php/classTotal.php?id=1401'},
              {id:'12',text:'14电信系',href:'php/classTotal.php?id=1402'},
              {id:'13',text:'14计算机系',href:'php/classTotal.php?id=1403'},
              {id:'14',text:'14光信',href:'php/classTotal.php?id=1404'},
              {id:'15',text:'14电子',href:'php/classTotal.php?id=1405'}
            ]
          }
        ]
      },
      {id:'16',menu:
        [
          {text:'统计分析',items:
            [
              {id:'17',text:'按专业',href:''},
              {id:'18',text:'按班级',href:''},
              {id:'19',text:'按分管辅导员',href:''}
            ]
          },
          {text:'导出记录',items:
            [
              
            ]
          },
          {text:'查询记录',items:
            [
              
            ]
          }
        ]
      },
      {id:'20',menu:
        [
          {text:'管理员管理',items:
            [
              {id:'17',text:'学生会',href:'php/admin.php?id=StudentUnion'},
              {id:'18',text:'辅导员',href:'php/admin.php?id=counselor'},
              {id:'19',text:'超级管理员',href:'php/admin.php?id=superadmin'}
            ]
          },
          {text:'操作记录',items:
            [
              {id:'17',text:'一天内',href:'Role/index.html'},
              {id:'18',text:'一周内',href:'Role/index.html'},
              {id:'19',text:'一个月内',href:'Role/index.html'}
            ]
          }
        ]
      }
      ]
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
  <footer class="footer">
	      <div class="container">
	        <p class="text-muted" style="font-family:verdana">Copyright&copy;2016-2017. All rights deserved.<a href="http://www.miitbeian.gov.cn/">正在备案中</a>Powered by <a href="https://xhcj.taobao.com" title="去我的淘宝店逛逛">Gaoyuting,Zhaochuanlu,Dongdihao</a></p>
	      </div>
 </footer>
 </body>
</html>