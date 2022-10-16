<?php
$nameError="";
if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["firstname"]))
    {
        $nameError= "Pleaas Enter your name.";

        if (strlen($_REQUEST["firstname"])<5)
        {
            $nameError="your first name must contain atlist 5 letter";
    
        }
    }
    else
    {
        $nameError= "Your name is ".$_REQUEST["firstname"];
    }
   
    if(empty($_REQUEST["lastname"]))
    {
        $nameError= "Pleaas Enter your name.";
    }
    else
    {
        $nameError= "Your name is ".$_REQUEST["lastname"];
    }
    
}
?>