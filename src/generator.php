<?php

require __DIR__ . '/../vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;

/**
 * Description
 *
 * File contents is function for working with nesting level
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
 * Implements generator().
 *
 * Description
 * Function, that creates a tree structure
 *
 * @return array<int, mixed> an array as a new tree
 */


function generator() 
{
    $tree = mkdir('php-package', [
        mkfile('Makefile'),
        mkfile('README.md'),
        mkdir('dist'),
        mkdir('tests', [ mkfile('test.php', ['type' => 'text/php']) ]),
        mkdir('src', [ mkfile('index.php', ['type' => 'text/php']) ]),
        mkfile('phpunit.xml', ['type' => 'text/xml']),
        mkdir('assets', [ mkdir('util', [mkdir('cli', mkfile('LICENSE'))]) ], ['owner' => 'root', 'hidden' => false]),
    ], ['hidden' => true]);
    return $tree;
}

