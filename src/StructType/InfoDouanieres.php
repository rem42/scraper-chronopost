<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoDouanieres StructType.
 */
#[\AllowDynamicProperties]
class InfoDouanieres extends AbstractStructBase
{
    /** The montant */
    protected float $montant;

    /**
     * The devise
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $devise = null;

    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $type = null;

    /**
     * Constructor method for infoDouanieres.
     *
     * @uses InfoDouanieres::setMontant()
     * @uses InfoDouanieres::setDevise()
     * @uses InfoDouanieres::setType()
     */
    public function __construct(float $montant, ?string $devise = null, ?string $type = null)
    {
        $this
            ->setMontant($montant)
            ->setDevise($devise)
            ->setType($type)
        ;
    }

    /**
     * Get montant value.
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * Set montant value.
     */
    public function setMontant(float $montant): self
    {
        // validation for constraint: float
        if (!is_null($montant) && !(is_float($montant) || is_numeric($montant))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($montant, true), gettype($montant)), __LINE__);
        }
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get devise value.
     */
    public function getDevise(): ?string
    {
        return $this->devise;
    }

    /**
     * Set devise value.
     */
    public function setDevise(?string $devise = null): self
    {
        // validation for constraint: string
        if (!is_null($devise) && !is_string($devise)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devise, true), gettype($devise)), __LINE__);
        }
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get type value.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type value.
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;

        return $this;
    }
}
