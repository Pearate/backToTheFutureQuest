<?php
require_once 'TimeTravel.php';


$timeTravel = new TimeTravel(new DateTimeImmutable('1989-10-26 01:21:00', new DateTimeZone("America/New_York")), new DateTime('now'));
echo "Entre le 26/10/1989 à 01:21:00 et aujourd'hui : ".$timeTravel->getTravelInfo();
echo "</br>";

$timeTravel-> setStart(new DateTimeImmutable('1985-12-31', new DateTimeZone("America/New_York")));


echo "Parti le 31 décembre 1985, ".$timeTravel->findDate(-1000000000);
echo "</br>";

echo "Lors de leur nouveau voyage, Doc et Martin doivent s'arrêter aux dates suivantes : ";
echo "</br>";
$timeTravel->backToFutureStepByStep('P1M8D');
