<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class Dokaku17
{
    public function run(string $input) : string
    {
        $dec = intval($input);

        while (true) {
            $bin = decbin(strval(++$dec));

            if (strpos($bin, '000') === false && strpos($bin, '111') === false) {
                return strval($dec);
            }
        }
    }
}
