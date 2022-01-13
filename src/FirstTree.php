<?php

require __DIR__ . '/../vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;



$tree = mkdir('etc', [
  mkfile('bashrc'),
  mkdir('consul', [
    mkfile('config.json'),
  ]),
], ['key' => 'value']);


