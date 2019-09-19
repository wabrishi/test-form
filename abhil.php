<?php
$pname="mama G";
$pmobile="887555485";
$pemail="eidshfbsjdk";
$preq="Nothing";
$message= "Name: $pname \n\n Email ID: $pemail \n\n Mobile No.: $pmobile \n\n Req: $preq"
$to="rishiraj.python@gmail.com";
$headers="From: wabrishi@gmail.com";
if (mail($to,$pname,$preq,$headers)){
    echo "Enquiry Successfully Sent "
}
    else {
    echo "Try Again !"
}


?>