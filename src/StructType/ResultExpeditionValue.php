<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultExpeditionValue StructType.
 */
#[\AllowDynamicProperties]
class ResultExpeditionValue extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The ESDFullNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ESDFullNumber = null;

    /**
     * The ESDNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ESDNumber = null;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * The pickupDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pickupDate = null;

    /**
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybill = null;

    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for resultExpeditionValue.
     *
     * @uses ResultExpeditionValue::setErrorCode()
     * @uses ResultExpeditionValue::setESDFullNumber()
     * @uses ResultExpeditionValue::setESDNumber()
     * @uses ResultExpeditionValue::setErrorMessage()
     * @uses ResultExpeditionValue::setPickupDate()
     * @uses ResultExpeditionValue::setSkybill()
     * @uses ResultExpeditionValue::setSkybillNumber()
     */
    public function __construct(int $errorCode, ?string $eSDFullNumber = null, ?string $eSDNumber = null, ?string $errorMessage = null, ?string $pickupDate = null, ?string $skybill = null, ?string $skybillNumber = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorMessage($errorMessage)
            ->setPickupDate($pickupDate)
            ->setSkybill($skybill)
            ->setSkybillNumber($skybillNumber)
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
     * Get ESDFullNumber value.
     */
    public function getESDFullNumber(): ?string
    {
        return $this->ESDFullNumber;
    }

    /**
     * Set ESDFullNumber value.
     */
    public function setESDFullNumber(?string $eSDFullNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDFullNumber) && !is_string($eSDFullNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDFullNumber, true), gettype($eSDFullNumber)), __LINE__);
        }
        $this->ESDFullNumber = $eSDFullNumber;

        return $this;
    }

    /**
     * Get ESDNumber value.
     */
    public function getESDNumber(): ?string
    {
        return $this->ESDNumber;
    }

    /**
     * Set ESDNumber value.
     */
    public function setESDNumber(?string $eSDNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eSDNumber) && !is_string($eSDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDNumber, true), gettype($eSDNumber)), __LINE__);
        }
        $this->ESDNumber = $eSDNumber;

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
     * Get pickupDate value.
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }

    /**
     * Set pickupDate value.
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;

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
