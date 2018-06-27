<?php

namespace app\classes;

class Uri {

    public static function uri() {

        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = str_replace('php-mvc/public/', '', $url);

        return $url;

    }

}