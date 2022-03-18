<?php
session_start();
include("../Html/conect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action=""method="POST">
            <table class="login">
            <tr>
                    <td>Subject:</td>
                    <td><input type="text"name="subject" placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>The Question:</td>
                    <td><input type="text"name="ques" placeholder="Enter your email"></td>
                </tr>
                <td>Choices:</td>
                   <td> <input type="txt" name="a"placeholder="Enter Password"></td>
                   <td> <input type="txt" name="b"placeholder="Enter Password"></td>
                   <td> <input type="txt" name="c"placeholder="Enter Password"></td>
                   <td> <input type="txt" name="d"placeholder="Enter Password"></td>
                <tr>
                <tr>
                    <td>The ans:</td>
                    <td><input type="text"name="ans" placeholder="Enter your email"></td>
                </tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="submit" class="btn-second">

                    </td>
                </tr>
                
            </table>
        </form>
        
</body>
</html>
<?php
if(isset($_POST['submit'])){

    
  $ques=$_POST['ques'];
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=$_POST['d'];
  $ans=$_POST['ans'];
  $sub=$_POST['subject'];
   

  $sql22="select max(id) as id from ques";
   if($res22=mysqli_query($con,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['id']+1;
}
else "error ";

$sql3="INSERT INTO `ques`(`id`, `ques`, `a`, `b`, `c`, `d`, `ans`, `subj`) VALUES ('$sno','$ques','$a','$b','$c','$d','$ans','$sub')";
$res=mysqli_query($con,$sql3);
 header('location:add_ques.php');


}
?>