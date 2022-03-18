<?php
session_start();
include("../Html/conect.php");
?>
<div class="main">
    <div class="wrapper">
        <h1>Add Instructor</h1>
        <br>
        <br>
        <form action=""method="POST">
            <table class="add-admin">
                
                <tr>
                    <td>Name:</td>
                    <td><input type="text"name="name" placeholder="Enter your name"></td>
                </tr>
                <td>Password:</td>
                   <td> <input type="password" name="password"placeholder="Enter Password"></td>
                <tr>
                    <td>Institution:</td>
                    <td><input type="text"name="institute" placeholder="Enter your Institute"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text"name="email" placeholder="Enter your Email"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-second">

                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div>


<?php
if(isset($_POST['submit'])){ 
    
$Name=$_POST['name'];
$inst=$_POST['institute'];
$email=$_POST['email'];
$password=$_POST['password'];

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

$sql22="select max(id) as id from teacher";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['id']+1;
}
else "error ";

$sql3="INSERT INTO `teacher`(`id`, `name`, `institute`, `email`, `password`) VALUES ('$sno','$Name','$inst','$email','$password')";
$res=mysqli_query($con,$sql3);
header('location:admin_login.php');
}
else{
    echo("$email is not a valid email address");
}

}

?>