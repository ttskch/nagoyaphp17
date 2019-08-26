<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class Dokaku17
{
    public function run(string $input) : string
    {
        $dec = intval($input) + 1;

        while (true) {
            $bin = '0' . decbin($dec);

            preg_match('/(.*?)(1000|0111)(.*)/', $bin, $m);

            if (empty($m)) {
                return strval($dec);
            }

            $head = ltrim($m[1], '0');
            $tailLength = strlen($m[3]);
            $tail = substr(str_repeat('001', intval(floor($tailLength / 3)) + 1), 0, $tailLength);

            $dec = strval(bindec($head . '1001' . $tail));
        }
    }
}
