<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdValue StructType.
 */
#[\AllowDynamicProperties]
class EsdValue extends AbstractStructBase
{
    /** The height */
    protected float $height;

    /** The length */
    protected float $length;

    /** The width */
    protected float $width;

    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $closingDateTime = null;

    /**
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $retrievalDateTime = null;

    /**
     * The shipperBuildingFloor
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperBuildingFloor = null;

    /**
     * The shipperCarriesCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperCarriesCode = null;

    /**
     * The shipperServiceDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperServiceDirection = null;

    /**
     * The specificInstructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $specificInstructions = null;

    /**
     * Constructor method for esdValue.
     *
     * @uses EsdValue::setHeight()
     * @uses EsdValue::setLength()
     * @uses EsdValue::setWidth()
     * @uses EsdValue::setClosingDateTime()
     * @uses EsdValue::setRetrievalDateTime()
     * @uses EsdValue::setShipperBuildingFloor()
     * @uses EsdValue::setShipperCarriesCode()
     * @uses EsdValue::setShipperServiceDirection()
     * @uses EsdValue::setSpecificInstructions()
     */
    public function __construct(float $height, float $length, float $width, ?string $closingDateTime = null, ?string $retrievalDateTime = null, ?string $shipperBuildingFloor = null, ?string $shipperCarriesCode = null, ?string $shipperServiceDirection = null, ?string $specificInstructions = null)
    {
        $this
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
            ->setClosingDateTime($closingDateTime)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setShipperBuildingFloor($shipperBuildingFloor)
            ->setShipperCarriesCode($shipperCarriesCode)
            ->setShipperServiceDirection($shipperServiceDirection)
            ->setSpecificInstructions($specificInstructions)
        ;
    }

    /**
     * Get height value.
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Set height value.
     */
    public function setHeight(float $height): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;

        return $this;
    }

    /**
     * Get length value.
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Set length value.
     */
    public function setLength(float $length): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;

        return $this;
    }

    /**
     * Get width value.
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Set width value.
     */
    public function setWidth(float $width): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;

        return $this;
    }

    /**
     * Get closingDateTime value.
     */
    public function getClosingDateTime(): ?string
    {
        return $this->closingDateTime;
    }

    /**
     * Set closingDateTime value.
     */
    public function setClosingDateTime(?string $closingDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDateTime) && !is_string($closingDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDateTime, true), gettype($closingDateTime)), __LINE__);
        }
        $this->closingDateTime = $closingDateTime;

        return $this;
    }

    /**
     * Get retrievalDateTime value.
     */
    public function getRetrievalDateTime(): ?string
    {
        return $this->retrievalDateTime;
    }

    /**
     * Set retrievalDateTime value.
     */
    public function setRetrievalDateTime(?string $retrievalDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retrievalDateTime) && !is_string($retrievalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retrievalDateTime, true), gettype($retrievalDateTime)), __LINE__);
        }
        $this->retrievalDateTime = $retrievalDateTime;

        return $this;
    }

    /**
     * Get shipperBuildingFloor value.
     */
    public function getShipperBuildingFloor(): ?string
    {
        return $this->shipperBuildingFloor;
    }

    /**
     * Set shipperBuildingFloor value.
     */
    public function setShipperBuildingFloor(?string $shipperBuildingFloor = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperBuildingFloor) && !is_string($shipperBuildingFloor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperBuildingFloor, true), gettype($shipperBuildingFloor)), __LINE__);
        }
        $this->shipperBuildingFloor = $shipperBuildingFloor;

        return $this;
    }

    /**
     * Get shipperCarriesCode value.
     */
    public function getShipperCarriesCode(): ?string
    {
        return $this->shipperCarriesCode;
    }

    /**
     * Set shipperCarriesCode value.
     */
    public function setShipperCarriesCode(?string $shipperCarriesCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCarriesCode) && !is_string($shipperCarriesCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCarriesCode, true), gettype($shipperCarriesCode)), __LINE__);
        }
        $this->shipperCarriesCode = $shipperCarriesCode;

        return $this;
    }

    /**
     * Get shipperServiceDirection value.
     */
    public function getShipperServiceDirection(): ?string
    {
        return $this->shipperServiceDirection;
    }

    /**
     * Set shipperServiceDirection value.
     */
    public function setShipperServiceDirection(?string $shipperServiceDirection = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperServiceDirection) && !is_string($shipperServiceDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperServiceDirection, true), gettype($shipperServiceDirection)), __LINE__);
        }
        $this->shipperServiceDirection = $shipperServiceDirection;

        return $this;
    }

    /**
     * Get specificInstructions value.
     */
    public function getSpecificInstructions(): ?string
    {
        return $this->specificInstructions;
    }

    /**
     * Set specificInstructions value.
     */
    public function setSpecificInstructions(?string $specificInstructions = null): self
    {
        // validation for constraint: string
        if (!is_null($specificInstructions) && !is_string($specificInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specificInstructions, true), gettype($specificInstructions)), __LINE__);
        }
        $this->specificInstructions = $specificInstructions;

        return $this;
    }
}
