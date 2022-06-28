<?php

namespace App\Entity;

use App\Repository\StudiesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudiesRepository::class)
 */
class Studies
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="studies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usercreatestudies;

    /**
     * @ORM\ManyToOne(targetEntity=Themes::class, inversedBy="studies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $studytheme;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getUsercreatestudies(): ?User
    {
        return $this->usercreatestudies;
    }

    public function setUsercreatestudies(?User $usercreatestudies): self
    {
        $this->usercreatestudies = $usercreatestudies;

        return $this;
    }

    public function getStudytheme(): ?Themes
    {
        return $this->studytheme;
    }

    public function setStudytheme(?Themes $studytheme): self
    {
        $this->studytheme = $studytheme;

        return $this;
    }

}
