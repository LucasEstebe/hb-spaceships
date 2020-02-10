<?php
session_start();
require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lib/Service/Container.php';

$configuration = [
    'db_dsn'  => 'mysql:host=localhost;dbname=hbstarship',
    'db_user' => 'root',
    'db_pass' => null,
];