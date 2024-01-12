<?php
/*if(!isset($_SERVER['HTTP_REFERER'])){
    header('location:http://localhost/Freshcery/index.php');
    exit;
}
*/
try{
define("HOST","localhost");
define("USER","root");
define("DBNAME","buynsell");
define("PASS","");

$conn=new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",USER,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 /*if($conn==true){
    echo "Connected ";
}
else{
    echo"not";
}*/
}
catch(PDOException $e){
echo $e->getMessage();
}
?>