<?php

namespace Source;

use Pimple\Container;

$container = new Container();

$container["tipo"] = "mysql";
$container["host"] = "localhost";
$container["dbname"] = "loja";
$container["user"] = "root";
$container["pass"] = "123456";

