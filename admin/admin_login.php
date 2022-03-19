<?php
session_start();
include("../Html/conect.php");
?>
<div class="main">
    <div class="wrapper">
        <h1>Teacher log in</h1>
        <br>
        <br>
        <form action=""method="POST">
            <table class="login">
                
                <tr>
                    <td>Name:</td>
                    <td><input type="text"name="email" placeholder="Enter your email"></td>
                </tr>
                <td>Password:</td>
                   <td> <input type="password" name="password"placeholder="Enter Password"></td>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Log in" class="btn-second">

                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div>


<?php
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=($_POST['password']);
        $sql="SELECT * FROM teacher where name='$email' AND password='$password'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['login']="<div class='success'>Login Successful.</div>";
            $_SESSION['id']=$sno;
            header('location:index.php');
        }
        else{
            $_SESSION['login']="<div class='error text-center'>Name or Password didn't match.</div>";
            header('location:admin_login.php');
        }
    }

?>