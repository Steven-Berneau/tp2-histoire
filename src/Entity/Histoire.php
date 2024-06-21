<?php

namespace App\Entity;

use App\Repository\HistoireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoireRepository::class)]
class Histoire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $editeur = null;

    #[ORM\Column(length: 255)]
    private ?string $auteur = null;

    #[ORM\Column(length: 255)]
    private ?string $illustrateur = null;

    #[ORM\Column(length: 255)]
    private ?string $traducteur = null;

    #[ORM\Column(length: 255)]
    private ?string $illustration = null;

    #[ORM\Column(length: 255)]
    private ?string $droitsHistoire = null;

    #[ORM\Column(length: 255)]
    private ?string $droitsImages = null;

    #[ORM\OneToMany(mappedBy: 'histoire', targetEntity: Page::class)]
    private Collection $pages;

    public function __construct()
    {
        $this->pages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): static
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getIllustrateur(): ?string
    {
        return $this->illustrateur;
    }

    public function setIllustrateur(string $illustrateur): static
    {
        $this->illustrateur = $illustrateur;

        return $this;
    }

    public function getTraducteur(): ?string
    {
        return $this->traducteur;
    }

    public function setTraducteur(string $traducteur): static
    {
        $this->traducteur = $traducteur;

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getDroitsHistoire(): ?string
    {
        return $this->droitsHistoire;
    }

    public function setDroitsHistoire(string $droitsHistoire): static
    {
        $this->droitsHistoire = $droitsHistoire;

        return $this;
    }

    public function getDroitsImages(): ?string
    {
        return $this->droitsImages;
    }

    public function setDroitsImages(string $droitsImages): static
    {
        $this->droitsImages = $droitsImages;

        return $this;
    }

    /**
     * @return Collection<int, Page>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    public function addPage(Page $page): static
    {
        if (!$this->pages->contains($page)) {
            $this->pages->add($page);
            $page->setHistoire($this);
        }

        return $this;
    }

    public function removePage(Page $page): static
    {
        if ($this->pages->removeElement($page)) {
            // set the owning side to null (unless already changed)
            if ($page->getHistoire() === $this) {
                $page->setHistoire(null);
            }
        }

        return $this;
    }

    public function getFirstPage()
    {
        return $this->pages[0];
    }
}
