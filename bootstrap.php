<?php

require "vendor/autoload.php";

use app\classes\Bind;
use app\models\Connection;

$config = require "config.php";

Bind::set("config", $config);
Bind::set("connect", Connection::connect());