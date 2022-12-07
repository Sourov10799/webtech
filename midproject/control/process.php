<?php
$nameError="";
$phnError="";
$emailError="";
$carmodError="";
$carnumError="";
$nidError="";
$passError="";
$hasError="";


if(isset($_REQUEST["submit"]))
{

    if(empty($_FILES["myfile"]["name"]))
    {
        echo"no file uploded";
    }
    else
    {
        echo "your file name is".$_FILES["myfile"]["name"];
        move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_REQUEST["fullname"].".jpg");
    }
    if(empty($_REQUEST["fullname"]))
    {
        $nameError= "Please Enter your name.";
        $hasError= 1;
    }
    else
        {
            $nameError= "Your name is ".$_REQUEST["fullname"];
        }
        
   
   
    
   
        if(empty($_REQUEST["phn"]))
        {
         $phnError="Phone Number Must Required !!";
          $hasError=1;
        }


          else if(!is_numeric($_REQUEST["phn"] ))   /// validation
        {
           
          $phnError="Phone must be numeric number ";
          $hasError=1;
        }

       else if (strlen($_REQUEST["phn"]) < 11)                         /// unic validation
       {
           $phnError="Phone must be 11 digits ";
           $hasError=1;

       }
       else
      {
       $phnError= 'Your Phoone number is '. $_REQUEST["phn"];
      }









   if (empty($_REQUEST["mail"])) {
        $emailError = "You Forgot to Enter Your Email!";
        $hasError= 1;
    }
     else
      {
        $emailError = ($_REQUEST["mail"]);
      
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailError))
        {
            $emailError = "You Entered An Invalid Email Format"; 
            $hasError= 1;
        }
    } 
    if(empty($_REQUEST["carmod"]))
   {
    $carmodError= "Enter Car model.";
    $hasError= 1;
   }
   else
   {
    $carmodError= "your car model is " .$_REQUEST["carmod"];
   }

   if(empty($_REQUEST["carnum"]))
   {
    $carnumError= "Enter car Number.";
    $hasError= 1;
   }
   else
   {
    $carnumError= "your car number is " .$_REQUEST["carnum"];
   }

   if(empty($_REQUEST["nidnum"]))
   {
    $nidError= "Enter NID Number.";
    $hasError= 1;
   }
   else
   {
    $nidError= "your NID number is " .$_REQUEST["nidnum"];
   }

   if(empty($_REQUEST["passwo"]))
   {
    $passError= "Enter password.";
    $hasError= 1;
   }
   else
   {
    $passError= "Good to go. " ;
   }


     
    if($hasError==0)
    {
        header("Location: ../view/login.php");
        $existingdata=file_get_contents("../data/data.json");
        $existingdatainphp=json_decode("$existingdata");


       $myarr= array 
    ("Flname"=>$_REQUEST["fullname"],
     "Phnnum"=> $_REQUEST["phn"], 
     "Email"=>$_REQUEST["mail"],
     "Cmod"=>$_REQUEST["carmod"],
     "Cnum"=>$_REQUEST["carnum"],
     "Nid"=>$_REQUEST["nidnum"],
     "Pwo"=>$_REQUEST["passwo"]
    

       
    );
    $existingdatainphp[]=$myarr;
    $myjsonobj = json_encode($existingdatainphp,JSON_PRETTY_PRINT);
    file_put_contents("../data/data.json",$myjsonobj);
    $mydata=file_get_contents("../data/data.json");
    $myphpdata=json_decode($mydata);
    echo "<br>Print from JSON: ".$myphpdata[0]->Flname;
    echo "<br>Print from JSON: ".$myphpdata[0]->Phnnum;
    echo "<br>Print from JSON: ".$myphpdata[0]->Email;
    echo "<br>Print from JSON: ".$myphpdata[0]->Cmod;
    echo "<br>Print from JSON: ".$myphpdata[0]->Cnum;
    echo "<br>Print from JSON: ".$myphpdata[0]->Nid;
   





    }

   
}
   

 
?>