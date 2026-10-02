<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillParamsValue StructType.
 */
#[\AllowDynamicProperties]
class SkybillParamsValue extends AbstractStructBase
{
    /**
     * The duplicata
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $duplicata = null;

    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $mode = null;

    /**
     * Constructor method for skybillParamsValue.
     *
     * @uses SkybillParamsValue::setDuplicata()
     * @uses SkybillParamsValue::setMode()
     */
    public function __construct(?string $duplicata = null, ?string $mode = null)
    {
        $this
            ->setDuplicata($duplicata)
            ->setMode($mode)
        ;
    }

    /**
     * Get duplicata value.
     */
    public function getDuplicata(): ?string
    {
        return $this->duplicata;
    }

    /**
     * Set duplicata value.
     */
    public function setDuplicata(?string $duplicata = null): self
    {
        // validation for constraint: string
        if (!is_null($duplicata) && !is_string($duplicata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicata, true), gettype($duplicata)), __LINE__);
        }
        $this->duplicata = $duplicata;

        return $this;
    }

    /**
     * Get mode value.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Set mode value.
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;

        return $this;
    }
}
