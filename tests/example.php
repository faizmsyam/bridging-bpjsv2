<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once 'config.php';

//use referensi serivce
$referensi = new Faizmsyam\Bpjs\VClaimV2\Referensi($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

//use peserta service
$peserta = new Faizmsyam\Bpjs\VClaimV2\Peserta($vclaim_conf);
var_dump($peserta->getByNoKartu('123456789','2022-01-01'));
