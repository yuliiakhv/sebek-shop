<?php

namespace core;

class Route
{
    public static $DATA = [];

    static function start()
    {
        $route = substr($_SERVER['REQUEST_URI'], 1);
        if (strripos($route, "?") != NULL) {
            $route = strstr($route, "?", true);
        }
        foreach (self::$DATA as $value) {
            if ($value["path"] ==  $route) {
                $con = explode('@', $value["ctrl"]);
                $controller_name = $con[0];
                $action = $con[1];
                $controller_name = 'Controller\\' . $controller_name;
                $controller = new $controller_name;
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    Errors::handler("Method not found");
                }
            } 
        }
    }

    static function get(string $path, string $ctrl)
    {
        self::$DATA[] = [
            "path" => $path,
            "ctrl" => $ctrl
        ];
    }
}
