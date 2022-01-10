<?php

require __DIR__ . '/../vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;

// mkdir вторым параметром принимает список детей
// которые могут быть либо директориями созданными mkdir
// либо файлами созданными mkfile

$tree = Php\Immutable\Fs\Trees\trees\mkdir('etc', [
  mkfile('bashrc'),
  mkdir('consul', [
    mkfile('config.json'),
  ]),
], ['key' => 'value']);



print_r($tree);
