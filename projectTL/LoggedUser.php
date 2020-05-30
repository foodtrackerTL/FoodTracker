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
  <div class="articles"><h2>Πρόσφατα Άρθρα:</h2><br><br>
  <?php
  include 'connection.php';
  $insert = "SELECT * From articles ORDER BY 'date' DESC";
  $search = mysqli_query($conn, $insert);
  if (mysqli_num_rows($search)) {
        $rank = 0;
        $last_score = false;
        $rows = 0;
       while($row = $search->fetch_assoc() AND $rank < 4) {
                 $rows++;
    if( $last_score!= $row['title'] ){
      $last_score = $row['title'];
      $rank = $rows;
    }

    echo"<img src='" . $row['thumbnail'] . "' alt='error'>".'<h4>'.$row['title'].'<h4>'.'<h6>'.$row['content'].'<h6>'."<br><br><br><br><br>";
       }}
  ?>
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