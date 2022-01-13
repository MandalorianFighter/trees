<?php

require __DIR__ . '/../vendor/autoload.php';

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\getChildren;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;
use function Php\Immutable\Fs\Trees\trees\isDirectory;
use function Php\Immutable\Fs\Trees\trees\isFile;

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
 * Implements compressImages().
 *
 * Description
 * Function, that decreases size of images in 2 times
 *
 * @param array<int, mixed> $tree as given array
 *
 * @return array<int, mixed> an array as a new tree with modified size
 */



function compressImages($tree)
{
    $children = getChildren($tree);
    $newChildren = array_map(function ($child) {
        $name = getName($child);
        if (str_ends_with($name, '.jpg')) {
           $size = getMeta($child);
           $size['size'] = $size['size'] / 2;
            $photo = mkfile($name, $size);
            return $photo;
        } 
            return $child;
    }, $children);
    return mkdir(getName($tree), $newChildren);
}

