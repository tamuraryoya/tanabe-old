<?php

require_once('date.php');

$d = new FormatedDate();

echo "Format0 : YYYYMMDD HHIISS\nFormat1 : YYYY/MM/DD HH:II:SS\nFormat2 : MM/DD/YYYY HH:II:SS\n";
echo 'Format type (0-2) : ';
$format = fgets(STDIN);

$fd = $d->fDate(str_replace("\n", "", $format));
