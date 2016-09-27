<?php

use HelloWorld\SayHello;
use manelgavalda\SayHello as SayHello2;

//Per eliminar tots els requires i usarem el autoload perquè ens carregui tots els fitxers.
require "vendor/autoload.php";
require "src/SayHello.php";


//$sayhello= new \HelloWorld\SayHello();
//echo $sayhello->world();

//Versió estàtica.
//echo \HelloWorld\SayHello::world();
echo SayHello::world();
//Gràcies al namespace podem cridar les 2 classes de forma diferent usant el prefix.
//echo \manelgavalda\SayHello::world();
echo SayHello2::world();