<?php 
session_start();

if(!isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:index.php");


 ?>
<?php include("conn.php"); ?>
<!-- PAGE HEADER -->
<?php include("includes/header.php"); ?>      

<
<?php //include("includes/ui-theme.php"); ?>

<div class="app-main">
<!-- sidebar   -->
<?php include("includes/sidebar.php"); ?>



<!-- Condition If page  click -->
<?php 
   @$page = $_GET['page'];


   if($page != '')
   {
     if($page == "exam")
     {
       include("pages/exam.php");
     }
     else if($page == "result")
     {
       include("pages/result.php");
     }
     else if($page == "myscores")
     {
       include("pages/myscores.php");
     }
     
   }
   // Else display home 
   else
   {
     include("pages/home.php"); 
   }


 ?> 
<img src="assets/images/2.jpg">

<!--FOOTER -->
<?php include("includes/footer.php"); ?>

<?php include("includes/modals.php"); ?>


