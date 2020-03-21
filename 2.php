<?php
function usernameCheck($username){
  if(preg_match("/^[a-z]{5,7}$/",$username)){
    $hasil=true;
  }
  else{
    $hasil=false;
  };
  return $hasil;
};

function passwordCheck($password){
  if(preg_match("/^[a-zA-Z0-9@]{9}$/",$password) and preg_match("/[a-z]{1}/",$password) and
     preg_match("/[A-Z]{1}/",$password) and preg_match("/[0-9]{1}/",$password) and
     preg_match("/(@){1}/",$password)){
    $hasil=true;
  }
  else{
    $hasil=false;
  };
  return $hasil;
};

var_dump(usernameCheck("arkanfa"));
var_dump(passwordCheck("aaaa1Aa@a"));

?>
