<?php

include('lib/Tripledes.php');


$triple_des = new Tripledes();
echo $triple_des->decrypt($_POST['data'], $_POST['secret']);
