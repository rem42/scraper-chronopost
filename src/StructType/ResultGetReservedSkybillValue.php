<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetReservedSkybillValue StructType.
 */
#[\AllowDynamicProperties]
class ResultGetReservedSkybillValue extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybill = null;

    /**
     * Constructor method for resultGetReservedSkybillValue.
     *
     * @uses ResultGetReservedSkybillValue::setErrorCode()
     * @uses ResultGetReservedSkybillValue::setErrorMessage()
     * @uses ResultGetReservedSkybillValue::setSkybill()
     */
    public function __construct(int $errorCode, ?string $errorMessage = null, ?string $skybill = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setSkybill($skybill)
        ;
    }

    /**
     * Get errorCode value.
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode value.
     */
    public function setErrorCode(int $errorCode): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Get skybill value.
     */
    public function getSkybill(): ?string
    {
        return $this->skybill;
    }

    /**
     * Set skybill value.
     */
    public function setSkybill(?string $skybill = null): self
    {
        // validation for constraint: string
        if (!is_null($skybill) && !is_string($skybill)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybill, true), gettype($skybill)), __LINE__);
        }
        $this->skybill = $skybill;

        return $this;
    }
}
