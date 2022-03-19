<?php
session_start();
include("../Html/conect.php");
include("./header.php");
?>
<section class="mar25">
<div class="log_in ">
        <br><br>
        <h1 class="t_center" >Add Question</h1>
        <br>  
        <form action=""method="POST" class="t_center">
            
                
                
                    Name: <br>
                    <input type="text"name="email" placeholder="Enter your email"><br>
              
                Password:<br>
                    <input type="password" name="password"placeholder="Enter Password"><br>
                
                
                        <input type="submit" name="submit" value="Log in" class="btn">

                    <br>

        </form>
    </div>
</section>


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