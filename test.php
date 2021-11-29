<?php
$parool=$_REQUEST["parool"];
$sool='taiestisuvalinetekst';
$krypt=crypt($parool, $sool);
echo $krypt;