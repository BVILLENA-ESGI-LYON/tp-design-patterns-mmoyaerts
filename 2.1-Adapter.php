<?php 

use App\Export\AdaptaterExportJson;
use App\Entity\Champ;

$champions = [
    (new Champ())
        ->setId(1)
        ->setName("Ashe")
        ->setRole("ADC")
        ->setBaseAD(61)
        ->setRegion("Freljord")
        ->setDate(new DateTime("2009-02-21")),

    (new Champ())
        ->setId(2)
        ->setName("Lee Sin")
        ->setRole("Jungler")
        ->setBaseAD(70)
        ->setRegion("Ionia")
        ->setDate(new DateTime("2011-04-01")),

    (new Champ())
        ->setId(3)
        ->setName("Ahri")
        ->setRole("Mid")
        ->setBaseAD(53)
        ->setRegion("Ionia")
        ->setDate(new DateTime("2011-12-14")),

    (new Champ())
        ->setId(4)
        ->setName("Darius")
        ->setRole("Top")
        ->setBaseAD(64)
        ->setRegion("Noxus")
        ->setDate(new DateTime("2012-05-23")),

    (new Champ())
        ->setId(5)
        ->setName("Jinx")
        ->setRole("ADC")
        ->setBaseAD(57)
        ->setRegion("Piltover")
        ->setDate(new DateTime("2013-10-10")),

    (new Champ())
        ->setId(6)
        ->setName("Yasuo")
        ->setRole("Mid")
        ->setBaseAD(60)
        ->setRegion("Ionia")
        ->setDate(new DateTime("2013-12-13"))
];



$adapter = new AdaptaterExportJson($champions, new DateTime(), "Rapport-Champions");

$json = $adapter->convert();

echo $json;