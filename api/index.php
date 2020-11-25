<?php
include_once '../vendor/autoload.php';
$text = $_GET['s'] ?? 'Basically, we will change new flow for register. I just extent and create new file. Some UI will change in staging';
$json = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=en&dt=t&q=' . urlencode($text)));
$json2 = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=vi&dt=t&q=' . urlencode($text)));
$json3 = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=de&dt=t&q=' . urlencode($text)));
$json4 = json_decode(file_get_contents('http://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=fr&dt=t&q=' . urlencode($text)));


echo "EN: \n";

echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'en', 'auto');

echo "\n VI:\n";

echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'vi', 'auto');
echo "\n DE:\n";

echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'de', 'auto');
echo "\n FR:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'fr', 'auto');
