<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $contenue = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?User $idUser = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Project $iD_Project = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenue(): ?string
    {
        return $this->contenue;
    }

    public function setContenue(string $contenue): static
    {
        $this->contenue = $contenue;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIDProject(): ?Project
    {
        return $this->iD_Project;
    }

    public function setIDProject(?Project $iD_Project): static
    {
        $this->iD_Project = $iD_Project;

        return $this;
    }
}
