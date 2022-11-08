<?php

namespace App\Entity;

use App\Repository\AlertRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlertRepository::class)]
class Alert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cur1 = null;

    #[ORM\Column(length: 255)]
    private ?string $func = null;

    #[ORM\Column(length: 255)]
    private ?string $cur2 = null;

    #[ORM\Column]
    private ?int $result = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCur1(): ?string
    {
        return $this->cur1;
    }

    public function setCur1(string $cur1): self
    {
        $this->cur1 = $cur1;

        return $this;
    }

    public function getFunc(): ?string
    {
        return $this->func;
    }

    public function setFunc(string $func): self
    {
        $this->func = $func;

        return $this;
    }

    public function getCur2(): ?string
    {
        return $this->cur2;
    }

    public function setCur2(string $cur2): self
    {
        $this->cur2 = $cur2;

        return $this;
    }

    public function getResult(): ?int
    {
        return $this->result;
    }

    public function setResult(int $result): self
    {
        $this->result = $result;

        return $this;
    }
}
