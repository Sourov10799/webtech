
<?php

$loginerror="";
if(isset($_REQUEST["submit"]))
{
    $email= $_REQUEST["email"];
    $pass= $_REQUEST["pass"];
    $myjsondata=file_get_contents("../data/data.json");
    $myphpdata=json_decode($myjsondata);

    foreach($myphpdata as $myobject)
    {
        if($email==$myobject->Email && $pass==$myobject->Pwo)
        {
            header("Location: ../view/profile.php");
        }
        else
        {
            $loginerror=1;
        }
    }
    if($loginerror==1)
    {
        echo "user not exists";
    }



}

?>