<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=GiteRepository::class)
 */
class Gite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *        min=3,
     *        max=50,
     *        minMessage = "Le nom du gîte doit avoir au moins {{ limit }} caractères",
     *        maxMessage = "Le nom du gîte doit avoir au plus {{ limit }} caractères"
     * )
     */
    private string $nom;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(
     *        min=10,
     *        max=255,
     *        minMessage = "La description du gîte doit avoir au moins {{ limit }} caractères",
     *        maxMessage = "La description du gîte doit avoir au plus {{ limit }} caractères"
     * )
     */
    private string $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *        min=30,
     *        max=300,
     *        notInRangeMessage = "La chambre doit être entre {{ min }} m² et {{ max }} m²"
     * )
     */
    private int $surface;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private int $chambre;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private int $couchage;

    /**
     * @ORM\ManyToMany(targetEntity=Equipement::class, inversedBy="gites")
     * @Assert\Length(
     *        min=30,
     *        minMessage = "La chambre doit avoir au minimum {{ limit }} caractères"
     * )
     */
    private $equipements;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="gites")
     */
    private $users;

    public function __construct()
    {
        $this->equipements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getChambre(): ?int
    {
        return $this->chambre;
    }

    public function setChambre(int $chambre): self
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getCouchage(): ?int
    {
        return $this->couchage;
    }

    public function setCouchage(int $couchage): self
    {
        $this->couchage = $couchage;

        return $this;
    }

    /**
     * @return Collection<int, Equipement>
     */
    public function getEquipements(): Collection
    {
        return $this->equipements;
    }

    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
        }

        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        $this->equipements->removeElement($equipement);

        return $this;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }
}
