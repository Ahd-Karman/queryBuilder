<?php
class DBConnection {
private $dsn ="mysql:host=localhost;dbname=queryBuilder" ;
private $username = "root";
private $password = "";

private $conn;
private $finalQuery;

function __construtor(){

    $this->conn = new PDO($this-> dsn , $this-> username , $this-> password) ;
}

function select($table_name , array $columns = ["*"]){
    $col_names = implode("," , $columns);
    $query = "SELECT $col_names FROM $table_name ";
    $this->finalQuery = $query ;

    runQuery($query);


    
    return $this;
}

function where(array $conditions = null){
    $where_condition = "";

    if ($conditions) {
      foreach ($conditions as $item) 
      {
          $query;
          // Rest will be here ;
      }
    }
    else{
        $query= $this->finalQuery;
    }
    return $this;
}


function insert(){
    
    return $this;
}

function update(){

    return $this;
}

function delete (){

    return $this;
}

function orderBy(){

    return $this;
}

function groupBy(){

    return $this;
}

function count(){
    return $this;
}

function innerJoin(){
    return $this;
}

function leftJoin(){
    return $this;
}

function outerJoin(){
    return $this;
}

function limit(){
    return $this;
}


function orWhere(){

    return $this;
}

function runQuery($query){
    $stm = $this->conn->prepare($this->finalQuery);
$stm->execute(/*[]*/); // here you can pass columns
    return $stm->fetchAll(PDO::FETCH_OBJ);
}

}

$db = new DBConnection();
$query = $db->select()->where()->orderBy()->runQuery();

foreach ($query as $row) {
    
}


?>