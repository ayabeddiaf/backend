
<html>
<?php


$host="localhost";
$user="root";
$password="";
$dbname="online";
$fullname = $_POST['fullname'];
$phonenumber = $_POST['phonenumber'];
$birthday= $_POST['birthday'];
$addres=$_POST['addres'];

$conn=mysqli_connect($host,$user,$password,$dbname);
  if(mysqli_connect_errno()){
   echo"connectednoooooot ";
}else{
   echo"connecteddddddd";    
}

$insert_query =("INSERT INTO clients (fullname, phonenumber, birthday,addres) VALUES ('$fullname', '$phonenumber', '$birthday','$addres')");

if(mysqli_query($conn,$insert_query)){
    echo "done succefuly";
}else{
    echo"has field";
}
$cleintID=mysqli_insert_id($conn);
$insert_query2=("INSERT INTO Orders(cleintID,productID)VALUES (:cleintID,:productID)");
if(mysqli_query($conn,$insert_query2)){
    echo "done succefuly";
}else{
    echo"has field";
}

$statement->execute();
$selec=mysqli_query($database,'select productID from product');
$cleintID= $database->lastInsertId();
$insert_query=("INSERT INTO Orders(cleintID,productID)VALUES (:cleintID,:$selec)");
$stat->bindParam(':cleintID',$cleintID);
$stat->bindParam('$selec',$productID);
$stat= $database->prepare($insert_query);

$stat->execute();

    ?>
    </html>