<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultEnlevementNational StructType.
 */
#[\AllowDynamicProperties]
class ResultEnlevementNational extends AbstractStructBase
{
    /** The codeErreur */
    protected int $codeErreur;

    /**
     * The infoEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?InfoEnlevement $infoEnlevement = null;

    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $libelleErreur = null;

    /**
     * Constructor method for resultEnlevementNational.
     *
     * @uses ResultEnlevementNational::setCodeErreur()
     * @uses ResultEnlevementNational::setInfoEnlevement()
     * @uses ResultEnlevementNational::setLibelleErreur()
     */
    public function __construct(int $codeErreur, ?InfoEnlevement $infoEnlevement = null, ?string $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setInfoEnlevement($infoEnlevement)
            ->setLibelleErreur($libelleErreur)
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
     * Get infoEnlevement value.
     */
    public function getInfoEnlevement(): ?InfoEnlevement
    {
        return $this->infoEnlevement;
    }

    /**
     * Set infoEnlevement value.
     */
    public function setInfoEnlevement(?InfoEnlevement $infoEnlevement = null): self
    {
        $this->infoEnlevement = $infoEnlevement;

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
}
