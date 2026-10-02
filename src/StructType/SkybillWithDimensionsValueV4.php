<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for skybillWithDimensionsValueV4 StructType.
 */
#[\AllowDynamicProperties]
class SkybillWithDimensionsValueV4 extends SkybillWithDimensionsValueV3
{
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for skybillWithDimensionsValueV4.
     *
     * @uses SkybillWithDimensionsValueV4::setSkybillNumber()
     */
    public function __construct(?string $skybillNumber = null)
    {
        $this
            ->setSkybillNumber($skybillNumber)
        ;
    }

    /**
     * Get skybillNumber value.
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }

    /**
     * Set skybillNumber value.
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;

        return $this;
    }
}
