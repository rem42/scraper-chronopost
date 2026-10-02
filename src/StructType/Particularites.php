<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularites StructType.
 */
#[\AllowDynamicProperties]
class Particularites extends AbstractStructBase
{
    /** The hauteur */
    protected float $hauteur;

    /** The largeur */
    protected float $largeur;

    /** The longueur */
    protected float $longueur;

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
     * Constructor method for particularites.
     *
     * @uses Particularites::setHauteur()
     * @uses Particularites::setLargeur()
     * @uses Particularites::setLongueur()
     * @uses Particularites::setNombreEnvois()
     * @uses Particularites::setPoids()
     * @uses Particularites::setInstructionsParticulieres()
     */
    public function __construct(float $hauteur, float $largeur, float $longueur, int $nombreEnvois, float $poids, ?string $instructionsParticulieres = null)
    {
        $this
            ->setHauteur($hauteur)
            ->setLargeur($largeur)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids)
            ->setInstructionsParticulieres($instructionsParticulieres)
        ;
    }

    /**
     * Get hauteur value.
     */
    public function getHauteur(): float
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur value.
     */
    public function setHauteur(float $hauteur): self
    {
        // validation for constraint: float
        if (!is_null($hauteur) && !(is_float($hauteur) || is_numeric($hauteur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
        }
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get largeur value.
     */
    public function getLargeur(): float
    {
        return $this->largeur;
    }

    /**
     * Set largeur value.
     */
    public function setLargeur(float $largeur): self
    {
        // validation for constraint: float
        if (!is_null($largeur) && !(is_float($largeur) || is_numeric($largeur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get longueur value.
     */
    public function getLongueur(): float
    {
        return $this->longueur;
    }

    /**
     * Set longueur value.
     */
    public function setLongueur(float $longueur): self
    {
        // validation for constraint: float
        if (!is_null($longueur) && !(is_float($longueur) || is_numeric($longueur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
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
}
