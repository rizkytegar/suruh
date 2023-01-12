#!/usr/bin/env php
<?php

class suruh
{
    public static function action($args)
    {
        if(isset($args[1]) == "help"){
            $script = array_shift($args);
            print("perintah ".$args[0]."\n");
        }else{
            print("Perintah salah");
        }

    }
}
?>
