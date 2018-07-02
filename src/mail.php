<?php

$recepient = "admin@dobiten.mk";
$sitename = "Dobiten";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nPhone: $phone \nText: $text";

$pagetitle = "Thanks \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
