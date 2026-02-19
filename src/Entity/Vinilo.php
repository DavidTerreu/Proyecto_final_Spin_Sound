<?php

namespace App\Entity;

use App\Repository\ViniloRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ViniloRepository::class)]
class Vinilo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_vinilo = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha_lanzamiento = null;

    #[ORM\Column]
    private ?float $precio = null;

    #[ORM\Column]
    private ?int $stock = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVinilo(): ?string
    {
        return $this->id_vinilo;
    }

    public function setIdVinilo(string $id_vinilo): static
    {
        $this->id_vinilo = $id_vinilo;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getFechaLanzamiento(): ?\DateTime
    {
        return $this->fecha_lanzamiento;
    }

    public function setFechaLanzamiento(\DateTime $fecha_lanzamiento): static
    {
        $this->fecha_lanzamiento = $fecha_lanzamiento;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }
}
