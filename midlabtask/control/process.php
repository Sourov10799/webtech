<?php
$fnameError="";
$adrError="";
$lnameError="";
$phnError="";
$emailError="";

if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["firstname"]))
    {
        $fnameError= "Pleaas Enter your name.";
        
    }
    else
        {
            $fnameError= "Your name is ".$_REQUEST["firstname"];
        }
        if (strlen($_REQUEST["firstname"])<5)
        {
            $fnameError="your first name must contain atlist 5 letter";
    
        }
        else
        {
            $fnameError= "Your first name is ".$_REQUEST["firstname"];
        }
   
   
    if(empty($_REQUEST["lastname"]))
    {
        $lnameError= "Pleaas Enter your name.";
    }
    else
    {
        $lnameError= "Your name is ".$_REQUEST["lastname"];
    }
    if (strlen($_REQUEST["lastname"])<5)
    {
        $lnameError="your last name must contain atlist 5 letter";

    }
    else
    {
        $lnameError= "Your last name is ".$_REQUEST["lastname"];
    }
   if(empty($_REQUEST["adrname"]))
   {
    $adrError= "Enter address.";
   }
   else
   {
    $adrError= "your add is " .$_REQUEST["adrname"];
   }
   if(empty($_REQUEST["phnnum"]))
   {
    $phnError= "Enter Phone Number.";
   }
   else
   {
    $phnError= "your number is " .$_REQUEST["phnnum"];
   }


   if (empty($_REQUEST["email"])) {
        $emailError = "You Forgot to Enter Your Email!";
    }
     else
      {
        $emailError = ($_REQUEST["email"]);
      
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailError))
        {
            $emailError = "You Entered An Invalid Email Format"; 
        }
    } 

   
}
   

 
?>
