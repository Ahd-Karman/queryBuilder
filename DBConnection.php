<?php
class DBConnection {
private $dsn ="mysql:host=localhost;dbname=queryBuilder" ;
private $username = "root";
private $password = "";

private $pdo;
private $finalQuery;

function __construtor(){

    $this->pdo = new PDO($this-> dsn , $this-> username , $this-> password) ;
}

function select(){

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

/* Challenge Requirements */

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

function where(){
    return $this;
}

function orWhere(){

    return $this;
}

function runQuery(){
    $stm = $this->pdo->prepare($this->finalQuery);
    $stm->execute([]);
    return $stm->fetchAll(PDO::FETCH_OBJ);
}

}

$db = new DBConnection();
$query = $db->select()->where()->orderBy()->runQuery();

foreach ($query as $row) {
    
}


?>