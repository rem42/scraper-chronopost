<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for shipperValueV2 StructType.
 */
#[\AllowDynamicProperties]
class ShipperValueV2 extends ShipperValue
{
    /**
     * The shipperType
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperType = null;

    /**
     * Constructor method for shipperValueV2.
     *
     * @uses ShipperValueV2::setShipperType()
     */
    public function __construct(?string $shipperType = null)
    {
        $this
            ->setShipperType($shipperType)
        ;
    }

    /**
     * Get shipperType value.
     */
    public function getShipperType(): ?string
    {
        return $this->shipperType;
    }

    /**
     * Set shipperType value.
     */
    public function setShipperType(?string $shipperType = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperType) && !is_string($shipperType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperType, true), gettype($shipperType)), __LINE__);
        }
        $this->shipperType = $shipperType;

        return $this;
    }
}
