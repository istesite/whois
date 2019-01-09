<?php
include_once "whois.php";

if (php_sapi_name() == "cli") {
	$domain = $argv[1];
}
else if (isset($_REQUEST['domain'])){
	$domain = $_REQUEST['domain'];
}
else{
	$domain = '';
}

$whois = new cWhois;
$whois->setDomain($domain);
$data = $whois->whois();

echo "<pre>".$data."</pre>";