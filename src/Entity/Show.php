<?php

namespace App\Entity;

use App\Repository\ShowRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShowRepository::class)]
#[ORM\Table(name: '`show`')]
class Show
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Numshow = null;

    #[ORM\Column]
    private ?int $Nbrseat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Dateshow = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumshow(): ?string
    {
        return $this->Numshow;
    }

    public function setNumshow(string $Numshow): static
    {
        $this->Numshow = $Numshow;

        return $this;
    }

    public function getNbrseat(): ?int
    {
        return $this->Nbrseat;
    }

    public function setNbrseat(int $Nbrseat): static
    {
        $this->Nbrseat = $Nbrseat;

        return $this;
    }

    public function getDateshow(): ?\DateTimeInterface
    {
        return $this->Dateshow;
    }

    public function setDateshow(\DateTimeInterface $Dateshow): static
    {
        $this->Dateshow = $Dateshow;

        return $this;
    }
}
