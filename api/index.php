<?php
require_once __DIR__ . '/../vendor/autoload.php';

$text = $_GET['s'] ?? 'Basically, we will change new flow for register. I just extent and create new file. Some UI will change in staging';

echo "EN: \n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'en', 'auto');
echo "\n";

echo "\nVI:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'vi', 'auto');
echo "\n";

echo "\nDE:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'de', 'auto');
echo "\n";

echo "\nFR:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'fr', 'auto');
