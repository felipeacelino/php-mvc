<?php

namespace app\models;

use PDO;

class Connection {

    public function connect() {

        $pdo = new PDO('mysql:host=localhost;dbname=php_mvc;charset=utf8','root','');
        $pdo->setAttributes('PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION');
        $pdo->setAttributes('PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ');

        return $pdo;

    }

}