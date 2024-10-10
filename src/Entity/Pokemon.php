<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping as ORM;

#[Entity]
class Pokemon
{
    public function __construct(
        #[ORM\Id]
        #[ORM\Column]
        private string $name,
        #[ORM\Column]
        private string $type,
        #[ORM\Column]
        private int $level
    ) {
    }
}
