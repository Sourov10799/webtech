
<?php

$loginerror="";
if(isset($_REQUEST["entre"]))
{
    $name= $_REQUEST["firstname"];
    $phnnum= $_REQUEST["phnnum"];
    $email= $_REQUEST["email"];
    $myjsondata=file_get_contents("../data/data.json");
    $myphpdata=json_decode($myjsondata);

    foreach($myphpdata as $myobject)
    {
        if($name==$myobject->Name && age==$myobject->Age)
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