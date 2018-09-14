<?php
header("Content-type: text/html; charset=utf-8");
class ClassConn{
    public function conn($host,$dbuser,$dbpaw,$port){
        $dbms="mysql";
        $dsn="$dbms:host=$host;port=$port;";
        try{
            $pdo = new PDO($dsn,$dbuser,$dbpaw);
            //echo "数据库连接成功";
            return $pdo;
        }catch (PDOException $e){
            //die('发生了不可预料的错误:<br>'.$e->getMessage().'<br>');
            if ($e->getMessage() == "SQLSTATE[HY000] [1045] Access denied for user ''@'localhost' (using password: NO)"){
              die('<h3 style="color: red">如果你在使用中看到这段提示，那是因为你清除了浏览器临时存储信息，请尝试重新登陆！</h3>');
            }
        }
    }
}
?>