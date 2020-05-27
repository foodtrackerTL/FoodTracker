<!DOCTYPE html>
<html>
<head>
	<title>Η σελιδα μου</title>
  <!--links 
 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">

<!--    links    -->
</head>
<!-- Side navigation -->

<div class="sidenav" style="display: none;" id="6">
  <img src="logo3.jpg" onclick="window.location.href='UserChoice.php'" class="logo" alt="">
  <a href="#">Προγραμματισμός Γευμάτων</a>
  <a href="#">Διαθέσιμα Προϊόντα</a>
  <a href="#">Πρόσθεσε Προϊόν</a>
  <a href="#">Αίτημα Φιλίας</a>
  <a href="#">Διαχείριση Λογαριασμού</a>
</div>
<div id="5" class="sidenav" >
  <img src="logo3.jpg" onclick="window.location.href='UserChoice.php'" class="logo" alt="">
  <br>
 Θέλεις παραπάνω πληροφορίες για ένα προϊόν; Γράψε το όνομα ή σκάναρε το barcode
</div>


<!-- Page content -->

<body>
<!--utf gia ypostiriksi sta ellinika kai navbar
 -->
  <meta charset="UTF-8">

<header class="navbar-custom">

    <div class="sidenav" style="display: none;" id="6">
  <img src="logo3.jpg" onclick="window.location.href='UserChoice.php'" class="logo" alt="">
  <a href="#">Προγραμματισμός Γευμάτων</a>
  <a href="#">Διαθέσιμα Προϊόντα</a>
  <a href="#">Πρόσθεσε Προϊόν</a>
  <a href="#">Αίτημα Φιλίας</a>
  <a href="#">Διαχείριση Λογαριασμού</a>
</div>
<div id="5" class="sidenav" >
  <img src="logo3.jpg" onclick="window.location.href='UserChoice.php'" class="logo" alt="">
  <br>
 Θέλεις παραπάνω πληροφορίες για ένα προϊόν; Γράψε το όνομα ή σκάναρε το barcode
</div>
	<div class="container">
		
		<nav class="navbar navbar-expand-lg navbar-light navbar-inverse">

  <a class="navbar-brand"><strong>FoodTracker</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  
  </button>
  <button type ="button" >About</button>
  <input  type="text" placeholder="Search..">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <form class="inout">

<button id = "1" type ="button" onclick="document.getElementById('id01').style.display='block'">Εγγραφή</button>
<button id = "2" type ="button" onclick="document.getElementById('id02').style.display='block'">Είσοδος</button>
<a href="logout.php" style="display: none;" id="3" class="logout">Έξοδος</a>
    </form>

  </div>
</nav>

</div>


</header>
<!--
 -->
<h3 class="h3"> </h3>
<div id = "wrapper" >
    
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  	 <!-- Modal Content -->
  <form class="modal-content animate" action="DbSignup.php" method="POST">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <h1>Εγγραφή</h1>
      <p>Παρακαλώ συμπληρώστε τη λίστα</p>
      <hr>
      <label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="Email" required>



      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>   
        <button type="submit" class="signup">Είσοδος</button>
 
    </div>
  </form>
</div>

<!-- The Modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="DbLogin.php" method="POST">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script> 
// Get the Modal                              gia na kleinei otan kaneis click eksw apo sign up
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal || event.target == modal2) {
    modal.style.display = "none";
    modal2.style.display = "none";
  }
 
}


</script>



<!--  Scripts
-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>