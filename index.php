<?php
include './exCreation_classe.php';
$chat= new Exemple("chat", 40, 4);
$chien = new Exemple("chien", 60, 9);
$tigre = new Exemple("tigre", 120, 80);
echo '<pre>';
var_dump($chat, $chien);
echo '</pre>';
echo $chat;
$chat->crie();
?>