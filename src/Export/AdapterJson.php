<?php

namespace App\Export;

use App\Entity\Champ;
use DateTime;

class AdaptaterExportJson
{

    public function __construct(private array $champ, private DateTime $date, private string $name)
    { 
        foreach ($this->champ as $champ) {
            if ($champ instanceof Champ) {
                continue;
            }
    }
    }
    public function convert(): string
    {
        $jsonStructure = [
            'metadata' => $this->date->format('Y-m-d'). "_". $this->name,
            'champ' => [],
        ];
        foreach ($this->champ as $champ) {
            $jsonStructure['champ'][] = [
                'id' => $champ->getId(),
                'name' => $champ->getName(),
                'region' => $champ->getRegion(),
                'baseAD' => $champ->getBaseAD(),
                'role' => $champ->getRole(),
                'date' => $champ->getDate()->format('Y-m-d'),
            ];
        }

        return json_encode($jsonStructure);
    }
}