<?php

require __DIR__ . '/vendor/autoload.php';

use Griffin\Examples\Basic;
use Griffin\Migration\Container;
use Griffin\Planner\Planner;
use Griffin\Runner\Runner;

$container = new Container();
$planner   = new Planner($container);
$runner    = new Runner($planner);

$runner->getPlanner()->getContainer()
    // Sort Alphabetically (or Any Order)
    ->addMigration(new Basic\Categories())
    ->addMigration(new Basic\Items())
    ->addMigration(new Basic\Movements())
    ->addMigration(new Basic\Orders())
    ->addMigration(new Basic\Payments())
    ->addMigration(new Basic\Products())
    ->addMigration(new Basic\Stocks())
    ->addMigration(new Basic\Users())
    ->addMigration(new Basic\Wishes());

return $runner;
