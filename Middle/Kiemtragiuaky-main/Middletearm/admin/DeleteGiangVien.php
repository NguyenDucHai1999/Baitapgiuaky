<?php
include('./config/db.php')
$tencanxoa = $_GET['username'];
$sql = "DELETE FROM tbladmin WHERE username=$tencanxoa";
$result = mysqli_query($conn,$sql);
if($result == true){
    header('location:'.SITEURL.'./DeleteGiangVien.php');
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Dashboard Admin</title>
      <link rel="stylesheet" href="css/style.css">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   </head>
   <body>
      <div class="sidebar">
         <header>Admin Panel</header>
         <ul>
            <li><a href="./Home.php" >Edit User</a></li>
            <li><a href="#">Add User</a></li>
            <li><a href="#" class="active">Delete User</a></li>
         </ul>
      </div>
      <div class="container">
         <div class="form row">
            <div class="formfield col-6">
               <input id type ="HovaTen" class="input-text" type="text" name="username">
               <label for="HovaTen" class="label"></label>
           
            <div class="formfield col-lg-12">
               <input class="submit-btn" type="submit" value="Delete" name="">
            </div>
         </div>
      </div>
           
   </body>
</html>
