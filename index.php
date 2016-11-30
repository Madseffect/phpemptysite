<?php
$uri = "http://restmads.cloudapp.net/FridgeService.svc/billed/";


$output = file_get_contents($uri);

$convertToAssociativeArray = true;
$urioutput = json_decode($output, $convertToAssociativeArray);



foreach ($urioutput as &$value)
{
$billedeOutput = file_get_contents($value);
echo '<img src="data:image/jpeg;base64,' . $billedeOutput . '" />';
?>
