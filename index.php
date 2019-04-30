<?php
use BackToTheFuture\TimeTravel;



$temps_diff=new TimeTravel("24/04/1954 12:10:00", "31/12/1985 21:00:00");
echo "Entre le 10/05/1989 à 12:10:00 et le 04/09/2017 à 21:00:00".$temps_diff->getTravelInfo();
echo "</br>";

$voyage = new TimeTravel("31-12-1985", "");
echo "Le 31 décembre 1985, Doc s'est retrouvé projeté dans le temps, il a atteri le ".$voyage->findDate("PT1000000000S");
echo "</br>";

$periode = new TimeTravel("23-04-1954 06:35", "31-12-1985 06:35");
echo "Doc et Martin doivent s'arrêter aux dates suivantes, en partant du ";
$periode->backToFutureStepByStep("P1M8D");