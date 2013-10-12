<?php

$serv = "mysql:host="._SERVER.";dbname="._DB;
R::setup($serv, _USER, _PASS);
R::$writer->setUseCache(true);
