<?php

require_once('../src/config/config.php');
require_once('../src/models/User.php');

 $user = new User(['name'=>'lucas', 'email'=>'lucas@gmail.com']);

foreach(User::get([], 'name') as $user){
 echo $user->name;
 echo '<br>';
}