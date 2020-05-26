<?php
session_start();
include 'index.html';
if($_SESSION['Logged']==TRUE){
$name= $_SESSION['Username'];
include 'connection.php';

?>
  <script type="text/javascript">
  	document.getElementById("6").style.display = "block";
    document.getElementById("1").style.display = "none";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "block";
    document.getElementById("4").style.display = "block";
    
   
  </script>


<?php
}
?>