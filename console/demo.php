#!/usr/bin/env php

<?php

use Symfony\Component\Console\Application;

require __DIR__ . '/vendor/autoload.php';

$app = new Application('Laracasts Demo', 1.0);

$app->add(new SpeakCommand());

$app->run();