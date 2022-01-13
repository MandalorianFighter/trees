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
 * Implements getSizeCount().
 *
 * Description
 * Function, that counts file size
 *
 * @param array<int, mixed> $tree as given array
 *
 * @return int as a sum of filesizes
 */

function getSizeCount($tree)
{    
    if (isFile($tree)) {
        $meta = getMeta($tree);
        return $meta['size'];
    }

    $children = getChildren($tree);

    $descendantsCount = array_map(fn($child) => getSizeCount($child), $children);
    
    return array_sum($descendantsCount);
}

/**
 * Implements du().
 *
 * Description
 * Function, that structures files and dirs 
 *
 * @param array<int, mixed> $tree as given array
 *
 * @return array<int, mixed> as an array, structure with a size
 */

function du($tree)
{
$children = getChildren($tree);

$result = array_map(fn($child) => [getName($child), getSizeCount($child)], $children);

return $result;
}
