<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for skybillWithDimensionsValueV5 StructType.
 */
#[\AllowDynamicProperties]
class SkybillWithDimensionsValueV5 extends SkybillWithDimensionsValueV4
{
    /**
     * The carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $carrier = null;

    /**
     * The skybillBackNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillBackNumber = null;

    /**
     * Constructor method for skybillWithDimensionsValueV5.
     *
     * @uses SkybillWithDimensionsValueV5::setCarrier()
     * @uses SkybillWithDimensionsValueV5::setSkybillBackNumber()
     */
    public function __construct(?string $carrier = null, ?string $skybillBackNumber = null)
    {
        $this
            ->setCarrier($carrier)
            ->setSkybillBackNumber($skybillBackNumber)
        ;
    }

    /**
     * Get carrier value.
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * Set carrier value.
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get skybillBackNumber value.
     */
    public function getSkybillBackNumber(): ?string
    {
        return $this->skybillBackNumber;
    }

    /**
     * Set skybillBackNumber value.
     */
    public function setSkybillBackNumber(?string $skybillBackNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillBackNumber) && !is_string($skybillBackNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillBackNumber, true), gettype($skybillBackNumber)), __LINE__);
        }
        $this->skybillBackNumber = $skybillBackNumber;

        return $this;
    }
}
