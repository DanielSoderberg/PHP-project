<?php 
session_start();
require('db.php');


/*Testprinta värden TA BORT UR KÄLLKODEN*/
function printOut($value){
echo "<pre>", print_r($value, true), "</pre>";
die();
}


function executeQuery($sql, $data){
global $conn;
$stmt = $conn->prepare($sql);
$values = array_values($data);
$types = str_repeat('s', count($values));
$stmt->bind_param($types, ...$values); //$stmt->bind_param("sssss", $id, $user_name, $admin, $email, $password, $created_at);
$stmt->execute();
return $stmt;
}




/*Funktion & sök - välj ALLA users*/
function selectAll($table, $conditions = []) 
{
global $conn;
$sql = "SELECT * FROM $table";
if(empty($conditions)){
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $records;

} else{
    $i = 0;
    //Returnera resultat med matchande villkor
   // $sql = "SELECT * FROM $table WHERE username='Daniel S' AND admin=1";

    foreach ($conditions as $key => $value){
        if($i === 0){
        $sql = $sql . " WHERE $key=?";    
        } else{
        $sql = $sql . " AND $key=?";
    }
$i++;
}

//$users = $stmt->get_result()->fetch_all(PDO::FETCH_ASSOC);
 
$stmt = executeQuery($sql, $conditions);
$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $records; 

}
}

/*Funktion & sök - välj EN user*/
function selectOne($table, $conditions)
{
global $conn;
$sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value){
        if($i === 0){
        $sql = $sql . " WHERE $key=?";    
        } else{
        $sql = $sql . " AND $key=?";
    }
$i++;
}

$sql = $sql . " LIMIT 1";
$stmt = executeQuery($sql, $conditions);
$records = $stmt->get_result()->fetch_assoc();
return $records; 
}

/*Skapa tabeller och data*/
function create($table, $data){

    global $conn;
   // $sql = "INSERT INTO users SET (username=?, admin=?, email=?, password=?)"
$sql = "INSERT INTO $table SET ";

$i = 0;
    foreach ($data as $key => $value){
        if($i === 0){
        $sql = $sql . " $key=?";    
        } else{
        $sql = $sql . ", $key=?";
    }
$i++;
}

$stmt = executeQuery($sql, $data);
$id = $stmt->insert_id;
return $id;
}


/*UPPDATERA tabeller och data*/
function update($table, $id, $data){
    global $conn;
$sql = "UPDATE $table SET ";

$i = 0;
    foreach ($data as $key => $value){
        if($i === 0){
        $sql = $sql . " $key=?";    
        } else{
        $sql = $sql . ", $key=?";
    }
$i++;
}

$sql = $sql . " WHERE id=?";
$data['id'] = $id;
$stmt = executeQuery($sql, $data);
return $stmt->affected_rows;
}


/*RADERA tabeller och data*/
function delete($table, $id){

global $conn;
$sql = "DELETE FROM $table WHERE id=?";

$stmt = executeQuery($sql, ['id' => $id]);
return $stmt->affected_rows;
}


