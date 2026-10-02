<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesColisDpd StructType.
 */
#[\AllowDynamicProperties]
class ParticularitesColisDpd extends AbstractStructBase
{
    /** The valeurAssuree */
    protected float $valeurAssuree;

    /**
     * The infoDouanieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?InfoDouanieres $infoDouanieres = null;

    /**
     * Constructor method for particularitesColisDpd.
     *
     * @uses ParticularitesColisDpd::setValeurAssuree()
     * @uses ParticularitesColisDpd::setInfoDouanieres()
     */
    public function __construct(float $valeurAssuree, ?InfoDouanieres $infoDouanieres = null)
    {
        $this
            ->setValeurAssuree($valeurAssuree)
            ->setInfoDouanieres($infoDouanieres)
        ;
    }

    /**
     * Get valeurAssuree value.
     */
    public function getValeurAssuree(): float
    {
        return $this->valeurAssuree;
    }

    /**
     * Set valeurAssuree value.
     */
    public function setValeurAssuree(float $valeurAssuree): self
    {
        // validation for constraint: float
        if (!is_null($valeurAssuree) && !(is_float($valeurAssuree) || is_numeric($valeurAssuree))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valeurAssuree, true), gettype($valeurAssuree)), __LINE__);
        }
        $this->valeurAssuree = $valeurAssuree;

        return $this;
    }

    /**
     * Get infoDouanieres value.
     */
    public function getInfoDouanieres(): ?InfoDouanieres
    {
        return $this->infoDouanieres;
    }

    /**
     * Set infoDouanieres value.
     */
    public function setInfoDouanieres(?InfoDouanieres $infoDouanieres = null): self
    {
        $this->infoDouanieres = $infoDouanieres;

        return $this;
    }
}
