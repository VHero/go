<?php
/**
 * Created by PhpStorm.
 * User: p
 * Date: 2016/9/9
 * Time: 14:40
 */
class DBUtil{
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $pdo;

    public function __construct($host,$user,$password,$dbName)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;
        //这里调用getConnect方法
        $this->getConnect();
    }
    private function getConnect(){
        //new PDO($dns,$user,$password);
        $dns = sprintf("mysql:host=%s;dbname=%s",$this->host,$this->dbName);
        $this->pdo = new PDO($dns,$this->user,$this->password);
        $this->pdo->query("set names utf8");
    }
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getPdo()
    {
        return $this->pdo;
    }
    //这个方法是用来像products表插入100条数据用的
    public function insertProducts(){
        $query = "insert into products (name,price,count,product_desc) values (?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $nameParam = null;
        $priceParam = null;
        $countParam = null;
        $productDescParam = null;

        $stmt->bindParam(1,$nameParam);
        $stmt->bindParam(2,$priceParam);
        $stmt->bindParam(3,$countParam);
        $stmt->bindParam(4,$productDescParam);

        for ($i = 0;$i<99;$i++){
            $nameParam = "name".$i;
            $priceParam = $i*30;
            $countParam =$i *50;
            $productDescParam = "productDescParam".$i;
            //执行插入
            $stmt->execute();
        }
    }

    /**
     * @param $currentPage  当前是多少页
     * @param $pageSize   每页多少行
     *
     * 可以计算出当前从多少行开始查找 (currentPage - 1) * pageSize ,pageSize
     *  select * from products limit a,b;
     */
    public  function  loadProducts($currentPage,$pageSize){
        $query = "select * from teacher limit ".($currentPage - 1)*$pageSize.",".$pageSize;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        print_r($rows);
        return $rows;
    }

    public function getCountProducts(){
        $query = "select count(*) as count from teacher";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}
