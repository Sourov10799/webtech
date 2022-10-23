<?php
include("../control/logincontrol.php")
?>

<!DOCTYPE html>
<html>
  
<head>


</head>
<body>
<form action="" method="post">
  <div class="container">
  <h> </h>
<hr>
  <h3> Log In  </h3>
  
  <label> Firstname </label> 
<input type="text" name="firstname"  size="15"  />
<?php echo $fnameError; ?>


 <br>

<div>
<label> 
Phone :
</label>
<input type="text" name="phnnum"    size="15"/>
<?php echo $phnError; ?>
</div>

<br>
<label> 
E-mail :
</label>
<input type="text" name="email"    size="15"/>
<?php echo $emailError; ?>
<br>


<label> 

<input type="submit" name="submit" value="submit"    />
</div>

</form>







