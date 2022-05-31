<?php

$str = "5000";
$str2 = "sborka_5000";

echo strpos($str2, 'sborka');

// echo is_int(strpos($str2, 'sborka'));
// echo is_int(strpos($str2, 'sborka'));
echo strpos($str2, 'sborka') === false;
echo strpos($str, 'sborka') === 0;