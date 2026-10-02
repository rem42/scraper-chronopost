<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESD StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESD.
 */
#[\AllowDynamicProperties]
class FaisabiliteESD extends AbstractStructBase
{
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ShipperValue $shipperValue = null;

    /**
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $retrievalDateTime = null;

    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $closingDateTime = null;

    /**
     * Constructor method for faisabiliteESD.
     *
     * @uses FaisabiliteESD::setShipperValue()
     * @uses FaisabiliteESD::setRetrievalDateTime()
     * @uses FaisabiliteESD::setClosingDateTime()
     */
    public function __construct(?ShipperValue $shipperValue = null, ?string $retrievalDateTime = null, ?string $closingDateTime = null)
    {
        $this
            ->setShipperValue($shipperValue)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setClosingDateTime($closingDateTime)
        ;
    }

    /**
     * Get shipperValue value.
     */
    public function getShipperValue(): ?ShipperValue
    {
        return $this->shipperValue;
    }

    /**
     * Set shipperValue value.
     */
    public function setShipperValue(?ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;

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
}
