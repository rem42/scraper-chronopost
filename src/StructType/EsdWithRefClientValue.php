<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for esdWithRefClientValue StructType.
 */
#[\AllowDynamicProperties]
class EsdWithRefClientValue extends EsdValue
{
    /** The ltAImprimerParChronopost */
    protected bool $ltAImprimerParChronopost;

    /** The nombreDePassageMaximum */
    protected int $nombreDePassageMaximum;

    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $refEsdClient = null;

    /**
     * Constructor method for esdWithRefClientValue.
     *
     * @uses EsdWithRefClientValue::setLtAImprimerParChronopost()
     * @uses EsdWithRefClientValue::setNombreDePassageMaximum()
     * @uses EsdWithRefClientValue::setRefEsdClient()
     */
    public function __construct(bool $ltAImprimerParChronopost, int $nombreDePassageMaximum, ?string $refEsdClient = null)
    {
        $this
            ->setLtAImprimerParChronopost($ltAImprimerParChronopost)
            ->setNombreDePassageMaximum($nombreDePassageMaximum)
            ->setRefEsdClient($refEsdClient)
        ;
    }

    /**
     * Get ltAImprimerParChronopost value.
     */
    public function getLtAImprimerParChronopost(): bool
    {
        return $this->ltAImprimerParChronopost;
    }

    /**
     * Set ltAImprimerParChronopost value.
     */
    public function setLtAImprimerParChronopost(bool $ltAImprimerParChronopost): self
    {
        // validation for constraint: boolean
        if (!is_null($ltAImprimerParChronopost) && !is_bool($ltAImprimerParChronopost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ltAImprimerParChronopost, true), gettype($ltAImprimerParChronopost)), __LINE__);
        }
        $this->ltAImprimerParChronopost = $ltAImprimerParChronopost;

        return $this;
    }

    /**
     * Get nombreDePassageMaximum value.
     */
    public function getNombreDePassageMaximum(): int
    {
        return $this->nombreDePassageMaximum;
    }

    /**
     * Set nombreDePassageMaximum value.
     */
    public function setNombreDePassageMaximum(int $nombreDePassageMaximum): self
    {
        // validation for constraint: int
        if (!is_null($nombreDePassageMaximum) && !(is_int($nombreDePassageMaximum) || ctype_digit($nombreDePassageMaximum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nombreDePassageMaximum, true), gettype($nombreDePassageMaximum)), __LINE__);
        }
        $this->nombreDePassageMaximum = $nombreDePassageMaximum;

        return $this;
    }

    /**
     * Get refEsdClient value.
     */
    public function getRefEsdClient(): ?string
    {
        return $this->refEsdClient;
    }

    /**
     * Set refEsdClient value.
     */
    public function setRefEsdClient(?string $refEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;

        return $this;
    }
}
