<?php

require_once '../vendor/autoload.php';

$text = ['a','b','c'];
$algo = 'aes256';

try {
    $hider = (new eminmuhammadi\HideMyAss\HideMyAss('public-key', 'secret-key', $algo));

    $data = $hider->ArrayEncrypt($text);
    print($data);
}
catch (Exception $e) {
    print($e);
}