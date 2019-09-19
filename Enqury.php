<?php
$pname=$_POST['name'];
$pmobile=$_POST['mobile'];
$pemail=$_POST['email'];
$preq=$_POST['req'];
$message= "Name: $pname \n\n Email ID: $pemail \n\n Mobile No.: $pmobile \n\n Req: $preq"
$to="rishiraj.python@gmail.com";
$headers="From: wabrishi@gmail.com";
if (mail($to,$pname,$message,$headers)){
    echo "Enquiry Successfully Sent "
}
    else {
    echo "Try Again !"
}


?>