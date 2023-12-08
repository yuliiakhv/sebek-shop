<?php
 namespace core;

 class Errors {

    public static function handler(string $method) {
        echo "<b>USER ERROR</b><br>$method</br>\n";
    }

 }