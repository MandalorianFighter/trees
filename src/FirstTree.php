<?php

require __DIR__ . '/../vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;

/**
 * Description
 *
 * File contents is function for working with trees
 *
 * PHP version 8.0.14
 *
 * @category Executives
 * @package  Functions
 * @author   Yanush Polishchuk <yanush.polishchuk@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  GIT: @1.0.1@
 * @link     https://www.linkedin.com/in/yanush-polishchuk-090b92178/
 * @since    2021-12-30
 */


/**
 * Implements $tree.
 *
 * Description
 * Making first tree with help of outside functions
 *
 */

$tree = mkdir('etc', [
  mkfile('bashrc'),
  mkdir('consul', [
    mkfile('config.json'),
  ]),
], ['key' => 'value']);


