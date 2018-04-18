<?php
function checkUser($user, $someOne){
//foreach($user as $var){
foreach($user as $useris);
foreach($someOne as $var);
if($useris == $var)
return true;
else
return false;
//}
}
$user = array(
    'username' => "admin",
    'password' => "admin123"
);
$someOne = array(
    'username' => "admin",
    'password' => "admin123"
);
var_dump(checkUser($user, $someOne));
?>
