<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultAnnulerEnlevement StructType.
 */
#[\AllowDynamicProperties]
class ResultAnnulerEnlevement extends AbstractStructBase
{
    /** The codeErreur */
    protected int $codeErreur;

    /** The statut */
    protected Statut $statut;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * Constructor method for resultAnnulerEnlevement.
     *
     * @uses ResultAnnulerEnlevement::setCodeErreur()
     * @uses ResultAnnulerEnlevement::setStatut()
     * @uses ResultAnnulerEnlevement::setErrorMessage()
     */
    public function __construct(int $codeErreur, Statut $statut, ?string $errorMessage = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setStatut($statut)
            ->setErrorMessage($errorMessage)
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
     * Get statut value.
     */
    public function getStatut(): Statut
    {
        return $this->statut;
    }

    /**
     * Set statut value.
     */
    public function setStatut(Statut $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
