<?php

function multiply( int $num1, int $num2 = 2 ): int {
    return $num1 * $num2;
}

echo multiply(4). "\n"
echo multiply(4,2). "\n"

?>