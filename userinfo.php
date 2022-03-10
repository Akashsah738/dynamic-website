<?php
if(isset($_POST['name'])){
    $server ="localhost";
    $username ="root";
    $password ="";
$con = mysqli_connect('localhost','root');

if($con){
echo "connection succesfull";
}else{
    echo "no connection";
}


mysqli_select_db($con,'websitepro');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

 $sql = "INSERT INTO `userinfo` (`name`, `email`, `phone`, `comments`) VALUES ( '$name', '$email', '$phone', '$comments')";



if($con->query($sql) == true){
    echo "sucessfully inserted";
}
$con -> close();
}
?>