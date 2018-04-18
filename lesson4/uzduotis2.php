<?php
function checkUser($user, $someOne){
//foreach($user as $var){
if($user['username'] == $someOne['username'] && $user['password'] == $someOne['password'])
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