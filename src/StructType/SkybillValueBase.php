<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValueBase StructType.
 */
#[\AllowDynamicProperties]
class SkybillValueBase extends AbstractStructBase
{
    /**
     * The as
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $as = null;

    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $objectType = null;

    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $productCode = null;

    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $service = null;

    /**
     * The shipDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipDate = null;

    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $weight = null;

    /**
     * Constructor method for skybillValueBase.
     *
     * @uses SkybillValueBase::setAs()
     * @uses SkybillValueBase::setObjectType()
     * @uses SkybillValueBase::setProductCode()
     * @uses SkybillValueBase::setService()
     * @uses SkybillValueBase::setShipDate()
     * @uses SkybillValueBase::setWeight()
     */
    public function __construct(?string $as = null, ?string $objectType = null, ?string $productCode = null, ?string $service = null, ?string $shipDate = null, ?float $weight = null)
    {
        $this
            ->setAs($as)
            ->setObjectType($objectType)
            ->setProductCode($productCode)
            ->setService($service)
            ->setShipDate($shipDate)
            ->setWeight($weight)
        ;
    }

    /**
     * Get as value.
     */
    public function getAs(): ?string
    {
        return $this->as;
    }

    /**
     * Set as value.
     */
    public function setAs(?string $as = null): self
    {
        // validation for constraint: string
        if (!is_null($as) && !is_string($as)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as, true), gettype($as)), __LINE__);
        }
        $this->as = $as;

        return $this;
    }

    /**
     * Get objectType value.
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * Set objectType value.
     */
    public function setObjectType(?string $objectType = null): self
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get productCode value.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Set productCode value.
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get service value.
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * Set service value.
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;

        return $this;
    }

    /**
     * Get shipDate value.
     */
    public function getShipDate(): ?string
    {
        return $this->shipDate;
    }

    /**
     * Set shipDate value.
     */
    public function setShipDate(?string $shipDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipDate, true), gettype($shipDate)), __LINE__);
        }
        $this->shipDate = $shipDate;

        return $this;
    }

    /**
     * Get weight value.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Set weight value.
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }
}
