<?php
include ("../control/process.php");
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
  <h3> Regestration  </h3>
  
  <label> Firstname </label> 
<input type="text" name="firstname"  size="15"  />
<?php echo $nameError; ?>
 <br>
<label> Lastname: </label>  
<input type="text" name="lastname"  size="15" /> 
<?php echo $nameError; ?>
<br>
<label> Address : </label> 
<input type="text"name="middlename"
 size="15"  />

<br>
<label> City: </label> 
<input type="text"name="middlename"
 size="15"  />
<br>
<label> 
Zip Code :
</label>
<input type="text" name="country code"    size="2"/> 
<br>
<label> 
Country :
</label> 

<select>
<option type="radio" value="State">Select a State</option>v
<option type="radio" value="Bangladesh">Bangladesh</option>
<option type="radio" value="USA">USA</option>
<option type="radio" value="UK">UK</option>
<option type="radio" value="UAE">UAE</option>
<option type="radio" value="India">India</option>
<option type="radio" value="Pakistan">Pakistan</option>
</select>
</div>

<div>
<label> 
Phone :
</label>
<input type="text" name="country code"    size="15"/>
</div>

<div>
<label> 
E-mail :
</label>
<input type="text" name="country code"    size="10"/>
<div>
    <br>
    <label> 
        Gender :
        </label>
    <input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<br>

<label> 

<input type="submit" name="submit" value="submit"    />
</div>

</form>