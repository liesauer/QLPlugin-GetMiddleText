<?php

namespace liesauer\QLPlugin;

use QL\Contracts\PluginContract;
use QL\QueryList;

class GetMiddleText extends PluginContract
{
    public static function install(QueryList $querylist, ...$opts)
    {
        $querylist->bind('getMiddleText', function (...$args) {
            return getMiddleText(...$args);
        });
        $querylist->bind('getMiddleTexts', function (...$args) {
            return getMiddleTexts(...$args);
        });
    }
}
