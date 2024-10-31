<?php
/**
 * @author Daniel Monastersky
 */

class Noencontrado_Vista
{
    public static function cargar($file)
    {
        $file = dirname(__FILE__) . '/../views/' . $file . '.php';

        if(!file_exists($file))
        {
            throw new Exception("View '$file' was not found");
        }


        include($file);
    }
}