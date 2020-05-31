<?php
session_start();
include 'index.html';
if($_SESSION['Logged']==TRUE){
$name= $_SESSION['Username'];
include 'connection.php';

?>

<div class="outercontainer">




<div class="content">
  <style>
    h2 {
  text-align: center;
  width: 120%;
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
  <div class="articles"><h2>Διαθέσιμα Προϊόντα:</h2><br><br>
 
</div>
</div>
<div class="sidenav2">
  <div class="katata3i"> <strong>Κατάταξη Χρηστών:</strong><br><br>
  <?php
  include 'connection.php';
  $insert = "SELECT username,userscore From users ORDER BY userscore DESC";
  $search = mysqli_query($conn, $insert);
  if (mysqli_num_rows($search)) {
        $rank = 0;
        $last_score = false;
        $rows = 0;
       while($row = $search->fetch_assoc() AND $rank < 9) {
                 $rows++;
    if( $last_score!= $row['userscore'] ){
      $last_score = $row['userscore'];
      $rank = $rows;
    }
    echo "rank ".$rank." : ".$row['username']." με score: ".$row['userscore']."<br>";
       }}
  ?>
</div>
  </div>
</div>
</body>

<body>
	  <script type="text/javascript">
  	document.getElementById("6").style.display = "block";
    document.getElementById("1").style.display = "none";
    document.getElementById("5").style.display = "none";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "block";
    document.getElementById("4").style.display = "block";
    
   
  </script>

<?php
}
?>