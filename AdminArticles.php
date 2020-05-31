<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="main.css">

  <?php session_start();
  include 'index.html';
  if($_SESSION['AdminFlag']==TRUE){  ?> 
       <script type="text/javascript">
        document.getElementById("9").style.display = "block";
        document.getElementById("10").style.display = "block";
    document.getElementById("1").style.display = "none";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "block";
     document.getElementById("4").style.display = "block";

   
  </script>

<div class="outercontainer">
<div class="content">
  <style>
    h2 {
  text-align: center;

}
.content
{

padding-left: 17%;
}
    h4 {
  text-align: center;
  position: relative;
  bottom:   10%;
    width: 110%;

}
    h6 {
text-align: center;
width: 120%;
}
img{
float:left;

}
  </style>
  <div class="articles"><h2>Άρθρα και Νέα:</h2><br><br>
  
</div>
</div>
<div class="sidenav2">
  <div class="katata3i">
  
</div>
  </div>




  <?php }  ?>

</body>
</html>