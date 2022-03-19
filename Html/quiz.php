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
    <title>Online Quiz </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="../images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="http://localhost/quiz_game-main/index.php">home</a>
            <a href="course.html">Course</a>
            <a href="http://localhost/quiz_game-main/Html/quiz.php">Quiz</a>
            <a href="result.html">results</a>
            <a href="contact.html">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>


    </header>
</body>



</html>
<?php
$sql="SELECT * FROM `quiz_table` ";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
      while($rows=mysqli_fetch_assoc($res))
      {
          $title=$rows['title'];
          $subj=$rows['subj'];
          ;
          $sno=$rows['id'];
          ?>
          <html>
  <div>
  <table class="admin">
             <tr>
                 <th>Title</th>
                 <th>Subject</th>
             </tr>          
</div>
 </html>
          
           <tr>
           <form action="" method="POST">
               <td><?php echo $title; ?></td>
               <td><?php echo $subj; ?></td>
                 
                <input type="submit" name="add" value="Accept" class="btn-second">
                <!-- <input type="submit" name="delete" value="Delete" class="btn-second"> -->
                </form>
              <br>
              <br>
           </tr>
           <?php
          }
if(isset($_POST["add"])){
    
header('location:exam.php');
}



?>