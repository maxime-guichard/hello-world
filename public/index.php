<?php

require_once __DIR__ . '/../vendor/autoload.php'; //appel à l'autoload

use HelloWorld\SayHello; //appel à la fonction SayHello depuis Namespace HelloWorld

$world = new SayHello(); //instancie objet de la classe SayHello  

echo SayHello-> world(); //echo, appel à la classe puis fonction