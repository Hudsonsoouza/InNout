<?php

require_once('../src/config/config.php');
require_once('../src/models/User.php');

echo User::getSelect(['id' => '1'], 'name, email');
echo '<br>';
echo User::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);