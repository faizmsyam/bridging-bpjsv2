<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once 'config.php';

$vc = new Faizmsyam\Bpjs\VClaimV2\Referensi($vclaim_conf);
var_dump($vc->dokterDpjp('2', '2022-01-01', 'INT'));
