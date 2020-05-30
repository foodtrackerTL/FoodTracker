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

  
<div class="outer-container">
  <div class="content">





</div>
</div>





  <?php }  ?>

</body>
</html>