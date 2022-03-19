<?php
session_start();
include("../Html/conect.php");
?>

<div class="main">
    <div class="wrapper">
        <h1>Make quiz</h1>
        <br>
        <br>
        <form action=""method="POST">
            <table class="add-admin">
                
                <tr>
                    <td>title:</td>
                    <td><input type="text"name="title" placeholder="Enter your name"></td>
                </tr>
                <tr>
                <td>Subject:</td>
                   <td> <input type="password" name="Subject"placeholder="Enter Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <td>Be sure you wanna create this quiz:</td>
                        <input type="submit" name="submit" value="Create" class="btn-second">

                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
$subj=$_POST['Subject'];
$title=$_POST['title'];
    $sql22="select max(id) as id from quiz_table";
    if($res22=mysqli_query($con,$sql22)){
     $row=mysqli_fetch_assoc($res22);
     $sno=$row['id']+1;
 }
 else "error ";

 $sql3="INSERT INTO `quiz_table`(`id`, `q_id`, `subject`, `title`) VALUES ('$sno','$sno','$subj','$title')";
 $res=mysqli_query($con,$sql3);



 $sql="CREATE TABLE `$sno` (
     `id` int(11) NOT NULL,
     `title` varchar(1000) NOT NULL,
     `subj` varchar(1000) NOT NULL
   )";
   $res=mysqli_query($con,$sql);
   header('location:ques_select.php');


}
?>
