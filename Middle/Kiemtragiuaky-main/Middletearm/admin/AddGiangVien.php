<?php
include("./config/db.php");
include("./css/style.css")
if(isset($_POST['btnAdd'])){
    $userName   = $_POST['HovaTen'];
    $email      = $_POST['Email'];
    $chucvu       = $_POST['Chucvu'];
    $bomon       = $_POST['BoMon'];
    $sdt       = $_POST['SDT'];
    $mota       = $_POST['MoTa'];
    
    $sql = "INSERT INTO tbl_admin (HovaTen, Email, SDT, Bomon , ChucVu , MoTa )
            VALUES ('$userName','$email','$chucvu',' $sdt ',' $bomon',' $mota')";
    
    if(mysqli_query($conn,$sql))
    {
        header('location:'.SITEURL.'/admin/EditGiangVien.php');
    }   
}
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
               <input id type ="HovaTen" class="input-text" type="text" name="HovaTen">
               <label for="HovaTen" class="label">Họ và Tên</label>
            </div>
            <div class="formfield col-6">
               <input id type ="Email" class="input-text" type="text" name="Email">
               <label for="Email" class="label">Email</label>
            </div>
            <div class="formfield col-6">
               <input id type ="Chucvu" class="input-text" type="text" name="Chucvu">
               <label for="Chucvu" class="label">Chức vụ</label>
            </div>
            <div class="formfield col-6">
               <input id type ="SDT" class="input-text" type="text" name="SDT">
               <label for="SDT" class="label">Số điện thoại</label>
            </div>
            <div class="formfield col-6">
               <input id type ="BoMon" class="input-text" type="text" name="BoMon">
               <label for="BoMon" class="label">Bộ môn giảng dạy</label>
            </div>  
            <div class="formfield col-6">
               <input id type ="MoTa" class="input-text" type="text" name="MoTa">
               <label for="MoTa" class="label">Mô tả</label>
            </div>         
            <div class="formfield col-lg-12">
               <input class="submit-btn" type="btnAdd" value="submit" name="btnAdd">
            </div>
         </div>
      </div>