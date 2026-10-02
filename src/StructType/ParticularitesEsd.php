<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesEsd StructType.
 */
#[\AllowDynamicProperties]
class ParticularitesEsd extends AbstractStructBase
{
    /** The etudeDeFaisabilite */
    protected bool $etudeDeFaisabilite;

    /** The grosVolume */
    protected bool $grosVolume;

    /** The hauteur */
    protected int $hauteur;

    /** The largeur */
    protected int $largeur;

    /** The longueur */
    protected int $longueur;

    /** The nombreEnvois */
    protected int $nombreEnvois;

    /** The poids */
    protected float $poids;

    /**
     * The instructionsParticulieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $instructionsParticulieres = null;

    /**
     * The listeColisAnnonces
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $listeColisAnnonces = null;

    /**
     * The volume
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $volume = null;

    /**
     * Constructor method for particularitesEsd.
     *
     * @uses ParticularitesEsd::setEtudeDeFaisabilite()
     * @uses ParticularitesEsd::setGrosVolume()
     * @uses ParticularitesEsd::setHauteur()
     * @uses ParticularitesEsd::setLargeur()
     * @uses ParticularitesEsd::setLongueur()
     * @uses ParticularitesEsd::setNombreEnvois()
     * @uses ParticularitesEsd::setPoids()
     * @uses ParticularitesEsd::setInstructionsParticulieres()
     * @uses ParticularitesEsd::setListeColisAnnonces()
     * @uses ParticularitesEsd::setVolume()
     */
    public function __construct(bool $etudeDeFaisabilite, bool $grosVolume, int $hauteur, int $largeur, int $longueur, int $nombreEnvois, float $poids, ?string $instructionsParticulieres = null, ?string $listeColisAnnonces = null, ?string $volume = null)
    {
        $this
            ->setEtudeDeFaisabilite($etudeDeFaisabilite)
            ->setGrosVolume($grosVolume)
            ->setHauteur($hauteur)
            ->setLargeur($largeur)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setListeColisAnnonces($listeColisAnnonces)
            ->setVolume($volume)
        ;
    }

    /**
     * Get etudeDeFaisabilite value.
     */
    public function getEtudeDeFaisabilite(): bool
    {
        return $this->etudeDeFaisabilite;
    }

    /**
     * Set etudeDeFaisabilite value.
     */
    public function setEtudeDeFaisabilite(bool $etudeDeFaisabilite): self
    {
        // validation for constraint: boolean
        if (!is_null($etudeDeFaisabilite) && !is_bool($etudeDeFaisabilite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($etudeDeFaisabilite, true), gettype($etudeDeFaisabilite)), __LINE__);
        }
        $this->etudeDeFaisabilite = $etudeDeFaisabilite;

        return $this;
    }

    /**
     * Get grosVolume value.
     */
    public function getGrosVolume(): bool
    {
        return $this->grosVolume;
    }

    /**
     * Set grosVolume value.
     */
    public function setGrosVolume(bool $grosVolume): self
    {
        // validation for constraint: boolean
        if (!is_null($grosVolume) && !is_bool($grosVolume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($grosVolume, true), gettype($grosVolume)), __LINE__);
        }
        $this->grosVolume = $grosVolume;

        return $this;
    }

    /**
     * Get hauteur value.
     */
    public function getHauteur(): int
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur value.
     */
    public function setHauteur(int $hauteur): self
    {
        // validation for constraint: int
        if (!is_null($hauteur) && !(is_int($hauteur) || ctype_digit($hauteur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
        }
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get largeur value.
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * Set largeur value.
     */
    public function setLargeur(int $largeur): self
    {
        // validation for constraint: int
        if (!is_null($largeur) && !(is_int($largeur) || ctype_digit($largeur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get longueur value.
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * Set longueur value.
     */
    public function setLongueur(int $longueur): self
    {
        // validation for constraint: int
        if (!is_null($longueur) && !(is_int($longueur) || ctype_digit($longueur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
        }
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get nombreEnvois value.
     */
    public function getNombreEnvois(): int
    {
        return $this->nombreEnvois;
    }

    /**
     * Set nombreEnvois value.
     */
    public function setNombreEnvois(int $nombreEnvois): self
    {
        // validation for constraint: int
        if (!is_null($nombreEnvois) && !(is_int($nombreEnvois) || ctype_digit($nombreEnvois))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nombreEnvois, true), gettype($nombreEnvois)), __LINE__);
        }
        $this->nombreEnvois = $nombreEnvois;

        return $this;
    }

    /**
     * Get poids value.
     */
    public function getPoids(): float
    {
        return $this->poids;
    }

    /**
     * Set poids value.
     */
    public function setPoids(float $poids): self
    {
        // validation for constraint: float
        if (!is_null($poids) && !(is_float($poids) || is_numeric($poids))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($poids, true), gettype($poids)), __LINE__);
        }
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get instructionsParticulieres value.
     */
    public function getInstructionsParticulieres(): ?string
    {
        return $this->instructionsParticulieres;
    }

    /**
     * Set instructionsParticulieres value.
     */
    public function setInstructionsParticulieres(?string $instructionsParticulieres = null): self
    {
        // validation for constraint: string
        if (!is_null($instructionsParticulieres) && !is_string($instructionsParticulieres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructionsParticulieres, true), gettype($instructionsParticulieres)), __LINE__);
        }
        $this->instructionsParticulieres = $instructionsParticulieres;

        return $this;
    }

    /**
     * Get listeColisAnnonces value.
     */
    public function getListeColisAnnonces(): ?string
    {
        return $this->listeColisAnnonces;
    }

    /**
     * Set listeColisAnnonces value.
     */
    public function setListeColisAnnonces(?string $listeColisAnnonces = null): self
    {
        // validation for constraint: string
        if (!is_null($listeColisAnnonces) && !is_string($listeColisAnnonces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listeColisAnnonces, true), gettype($listeColisAnnonces)), __LINE__);
        }
        $this->listeColisAnnonces = $listeColisAnnonces;

        return $this;
    }

    /**
     * Get volume value.
     */
    public function getVolume(): ?string
    {
        return $this->volume;
    }

    /**
     * Set volume value.
     */
    public function setVolume(?string $volume = null): self
    {
        // validation for constraint: string
        if (!is_null($volume) && !is_string($volume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($volume, true), gettype($volume)), __LINE__);
        }
        $this->volume = $volume;

        return $this;
    }
}
