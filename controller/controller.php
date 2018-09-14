<?php
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
session_start();
error_reporting(0);


require_once '../public/function/conn.php'; //  加载数据库连接
$db = new ClassConn();

//global $pdo;
//echo "现在的日期是:".$DataTime->getData()."现在的时间是:".$DataTime->getTime();

require_once '../smarty/Smarty.class.php';  //加载模版引擎
$smarty = new Smarty();

$smarty -> setConfigDir('../public/config');    //加载config配置文件

$ac = isset($_GET['ac'])?htmlspecialchars($_GET['ac']):'';

if( isset($_POST['ac'])){
    $hosts = $_SESSION['hosts'] = isset($_POST['hosts'])?htmlspecialchars($_POST['hosts']):'';
    $name = $_SESSION['name'] = isset($_POST['name'])?htmlspecialchars($_POST['name']):'';
    $paw = $_SESSION['paw'] = isset($_POST['paw'])?htmlspecialchars($_POST['paw']):'';
    $port = $_SESSION['port'] = isset($_POST['port'])?htmlspecialchars($_POST['port']):'';
    $pdo = $db->conn($hosts,$name,$paw,$port);
    if($pdo) echo 1;
}else if(isset($_GET['ac'])){
    $hosts = $_SESSION['hosts'];
    $name = $_SESSION['name'];
    $paw = $_SESSION['paw'];
    $port = $_SESSION['port'];
    $pdo = $db->conn($hosts,$name,$paw,$port);

    switch ($_GET['ac']){
        case "selectDb":{
            $array = $pdo->query('show databases;')->fetchAll(PDO::FETCH_ASSOC);
            $smarty -> assign('array',$array);
            $smarty -> display('../view/databases.html');
        }
        break;
        case "openDb":{
          $DbName = $_SESSION['DbName'] = isset($_GET['DbName'])?htmlspecialchars($_GET['DbName']):'';
          $pdo->query("use ".$DbName);
          $array = $pdo->query("show table status;")->fetchAll(PDO::FETCH_ASSOC);
          $smarty -> assign('array',$array);
          $smarty -> display('../view/opendb.html');
        }
        break;
      case "DelTable":{
        $TableName = $_SESSION['TableName'] = isset($_GET['TableName'])?htmlspecialchars($_GET['TableName']):'';
        $DbName = $_SESSION['DbName'];
        $pdo->query("use ".$DbName);
        $pdo->exec("DROP TABLE $TableName");
        $array = $pdo->query("show table status;")->fetchAll(PDO::FETCH_ASSOC);
        $smarty -> assign('array',$array);
        $smarty -> display('../view/opendb.html');
      }
      break;
      case "OpenTable":{
        $TableName = $_SESSION['TableName'] = isset($_GET['TableName'])?htmlspecialchars($_GET['TableName']):'';
        $DbName = $_SESSION['DbName'];
        $pdo->query("use ".$DbName);
        $array = $pdo->query("select * from $TableName ;")->fetchAll(PDO::FETCH_ASSOC);
        $smarty -> assign('TableName',$TableName);

        $smarty -> assign('array',$array);
        $smarty -> display('../view/opentable.html');
      }
      break;
      case "MpTable":{
        $TableName = $_SESSION['TableName'] = isset($_GET['TableName'])?htmlspecialchars($_GET['TableName']):'';
        $DbName = $_SESSION['DbName'];
        $pdo->query("use ".$DbName);
        $array = $pdo->query("desc $TableName ;")->fetchAll(PDO::FETCH_ASSOC);
        $arrayLength = count($array);
        $smarty -> assign('arrayLength',$arrayLength);
        $smarty -> assign('TableName',$TableName);
        $smarty -> assign('array',$array);
        $smarty -> display('../view/sqlmp.html');
      }
      break;
      case "goMp":{
        $selects = isset($_GET['selects'])?htmlspecialchars($_GET['selects']):'';
        $number = isset($_GET['number'])?htmlspecialchars($_GET['number']):'';
        $TableName = $_SESSION['TableName'];
        $DbName = $_SESSION['DbName'];
        $pdo->query("use ".$DbName);
        if($selects){
          $array = explode("','",$selects);
          //$count = count($array);

          require_once '../model/rand.php'; //加载核心生成文件
          $rand = new rand();
          $arrayRand = [];
          $count = 0;

          for(;$count < $number;$count++){
            foreach ($array as $value){
              switch ($value){
                case 0:
                  $arrayRand[] = "null";
                  //$arrayRand[] = rand(0,100);
                  //echo "任意数字  ";
                  break;
                case 1:
                  $arrayRand[] = $rand->xb().$rand->zi();
                  //echo $arrayRand." ";
                  //echo "中文姓名  ";
                  break;
                case 2:
                  $arrayRand[] = $rand->getDataTime();
                  //echo  $arrayRand." ";
                  //echo "年月日时  ";
                  break;
                case 3:
                  $arrayRand[] = rand(1,150);
                  //echo "年龄 ";
                  break;
                case 4:
                  $arrayRand[] = $rand->pass();
                  //echo  $arrayRand." ";
                  //echo "密码";
                  break;
                case 5:
                  $arrayRand[] = $rand->shop();
                  //echo "任意商品  ";
                  break;
                case 6:
                  $arrayRand[] = $rand->sf();
                  //echo "省  ";
                  break;
                case 7:
                  $arrayRand[] = $rand->sq();
                  //echo "市  ";
                  break;
              }
            }
            $str = '';
            foreach ($arrayRand as $value){
              $str .= '"'.$value.'",';
            }
            $str = rtrim($str, ",");
            $sql = "insert into $TableName values($str);";
            $sql = str_replace('"null"',"null",$sql);
            $pdo->exec($sql);
            echo $sql."<br>";
            array_splice($arrayRand, 0, count($arrayRand));
          }//左边执行量产行数
        }
      }
      break;

    }
}else{
    $smarty -> display('../view/index.html');
}
