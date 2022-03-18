<?php
session_start();
include("../Html/conect.php");
?>
<?php
$sql="SELECT * FROM `temp` ";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      while($rows=mysqli_fetch_assoc($res))
      {
          $name=$rows['name'];
          $inst=$rows['institute'];
          $email=$rows['email'];
          $password=$rows['password'];
          $sno=$rows['id'];
          ?>
          <html>
  <div>
  <table class="admin">
             <tr>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Institute</th>
                 
             </tr>          
</div>
 </html>
          
           <tr>
           <form action="" method="POST">
               <td><?php echo $name; ?></td>
               <td><?php echo $email; ?></td>
               <td><?php echo $inst; ?></td>   
                <input type="submit" name="add" value="Accept" class="btn-second">
                <input type="submit" name="delete" value="Delete" class="btn-second">
                </form>
              <br>
              <br>
           </tr>
           <?php
          }
if(isset($POST["add"])){
    $sql22="select max(id) as id from teacher";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sid=$row['id']+1;
}
else "error ";
$sql3="INSERT INTO `teacher`(`id`, `name`, `institute`, `email`, `password`) VALUES ('$sid','$name','$inst','$email','$password')";
$res=mysqli_query($con,$sql3);
$sql4="DELETE FROM `temp` WHERE id=$sno";
$res1=mysqli_query($con,$sql4);
header('location:quiz.php');
}
else if(isset($POST["delete"])){
    $sql4="DELETE FROM `temp` WHERE id=$sno";
    $res1=mysqli_query($con,$sql4);
}


?>
