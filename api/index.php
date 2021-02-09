<?php
require_once __DIR__ . '/../vendor/autoload.php';

$text = $_GET['s'] ?? die();
$ios = $_GET['ios'] ?? false;

echo "EN: \n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'en', 'auto');
echo "\n";
//usleep(50);
echo "\nVI:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'vi', 'auto');
if($ios){
header('Content-Type: text/plain; charset=utf-8');
exit(200);
}
echo "\n";
//usleep(50);
echo "\nDE:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'de', 'auto');
echo "\n";
//usleep(50);
echo "\nFR:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'fr', 'auto');
