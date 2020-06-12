<?php
if(isset($_GET["FirstName"])){//show data
  echo $_GET["FirstName"];
}else{//show form
  echo 
  '
 <h1>My Form</h1> 
 <form action="">
  <p>First Name <input type="text" name="FirstName" /></p>
  <p><input type="submit" /></p>
  </form>
  ';
}
?>
