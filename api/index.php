<?php
require_once __DIR__ . '/../vendor/autoload.php';

$text = $_GET['s'] ?? die();
$ios = $_GET['ios'] ?? false;
header('Content-Type: text/plain; charset=utf-8');
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

echo "\n";
echo "\nPT:\n";
echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($text, 'pt', 'auto');
