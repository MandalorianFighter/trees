<?php

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

namespace Trees\removeFirstLevel;

/**
 * Implements removeFirstLevel().
 *
 * Description
 * Function, that removes first nesting level
 *
 * @param array<int, mixed> $arr as given array
 *
 * @return array<int, mixed> an array without first nesting level
 */

function removeFirstLevel($arr)
{
    $result = [];
    foreach($arr as $value) {
        if (is_array($value)) {
            $result = [...$result, ...$value];
        }
    }
    return $result;
}
