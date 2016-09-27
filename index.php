<?php

//Per eliminar tots els requires i usarem el autoload perquè ens carregui tots els fitxers.
require "vendor/autoload.php";

//$sayhello= new \HelloWorld\SayHello();
//echo $sayhello->world();

//Versió estàtica
echo \HelloWorld\SayHello::world();