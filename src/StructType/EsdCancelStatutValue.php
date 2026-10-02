<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdCancelStatutValue StructType.
 */
#[\AllowDynamicProperties]
class EsdCancelStatutValue extends AbstractStructBase
{
    /** The codeErreur */
    protected int $codeErreur;

    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $libelleErreur = null;

    /**
     * The numeroESD
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $numeroESD = null;

    /**
     * Constructor method for esdCancelStatutValue.
     *
     * @uses EsdCancelStatutValue::setCodeErreur()
     * @uses EsdCancelStatutValue::setLibelleErreur()
     * @uses EsdCancelStatutValue::setNumeroESD()
     */
    public function __construct(int $codeErreur, ?string $libelleErreur = null, ?string $numeroESD = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setLibelleErreur($libelleErreur)
            ->setNumeroESD($numeroESD)
        ;
    }

    /**
     * Get codeErreur value.
     */
    public function getCodeErreur(): int
    {
        return $this->codeErreur;
    }

    /**
     * Set codeErreur value.
     */
    public function setCodeErreur(int $codeErreur): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;

        return $this;
    }

    /**
     * Get libelleErreur value.
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }

    /**
     * Set libelleErreur value.
     */
    public function setLibelleErreur(?string $libelleErreur = null): self
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;

        return $this;
    }

    /**
     * Get numeroESD value.
     */
    public function getNumeroESD(): ?string
    {
        return $this->numeroESD;
    }

    /**
     * Set numeroESD value.
     */
    public function setNumeroESD(?string $numeroESD = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroESD) && !is_string($numeroESD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroESD, true), gettype($numeroESD)), __LINE__);
        }
        $this->numeroESD = $numeroESD;

        return $this;
    }
}
