<?php
$text = $_GET['s'] ?? 'Basically, we will change new flow for register. I just extent and create new file. Some UI will change in staging';
$json = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=en&dt=t&q=' . urlencode($text)));
$json2 = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=vi&dt=t&q=' . urlencode($text)));
$json3 = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=de&dt=t&q=' . urlencode($text)));
$json4 = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=fr&dt=t&q=' . urlencode($text)));

echo "EN: \n";

foreach ($json[0] ?? [] as $value) {
	echo $value[0];
}
echo "\n VI:\n";

foreach ($json2[0] ?? [] as $value) {
	echo $value[0];
}
echo "\n DE:\n";

foreach ($json3[0] ?? [] as $value) {
	echo $value[0];
}

echo "\n FR:\n";

foreach ($json4[0] ?? [] as $value) {
	echo $value[0];
}

