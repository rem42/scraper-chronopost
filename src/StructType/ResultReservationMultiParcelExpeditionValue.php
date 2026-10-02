<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationMultiParcelExpeditionValue StructType.
 */
#[\AllowDynamicProperties]
class ResultReservationMultiParcelExpeditionValue extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The resultParcelValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<ResultParcelValue>|null
     */
    protected ?array $resultParcelValue = null;

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
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $reservationNumber = null;

    /**
     * Constructor method for resultReservationMultiParcelExpeditionValue.
     *
     * @uses ResultReservationMultiParcelExpeditionValue::setErrorCode()
     * @uses ResultReservationMultiParcelExpeditionValue::setResultParcelValue()
     * @uses ResultReservationMultiParcelExpeditionValue::setESDFullNumber()
     * @uses ResultReservationMultiParcelExpeditionValue::setESDNumber()
     * @uses ResultReservationMultiParcelExpeditionValue::setErrorMessage()
     * @uses ResultReservationMultiParcelExpeditionValue::setPickupDate()
     * @uses ResultReservationMultiParcelExpeditionValue::setReservationNumber()
     *
     * @param array<ResultParcelValue> $resultParcelValue
     */
    public function __construct(int $errorCode, ?array $resultParcelValue = null, ?string $eSDFullNumber = null, ?string $eSDNumber = null, ?string $errorMessage = null, ?string $pickupDate = null, ?string $reservationNumber = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setResultParcelValue($resultParcelValue)
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorMessage($errorMessage)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
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
     * Get resultParcelValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<ResultParcelValue>|null
     */
    public function getResultParcelValue(): ?array
    {
        return $this->resultParcelValue ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setResultParcelValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultParcelValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultParcelValueForArrayConstraintFromSetResultParcelValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $resultReservationMultiParcelExpeditionValueResultParcelValueItem) {
            // validation for constraint: itemType
            if (!$resultReservationMultiParcelExpeditionValueResultParcelValueItem instanceof ResultParcelValue) {
                $invalidValues[] = is_object($resultReservationMultiParcelExpeditionValueResultParcelValueItem) ? get_class($resultReservationMultiParcelExpeditionValueResultParcelValueItem) : sprintf('%s(%s)', gettype($resultReservationMultiParcelExpeditionValueResultParcelValueItem), var_export($resultReservationMultiParcelExpeditionValueResultParcelValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The resultParcelValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ResultParcelValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set resultParcelValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<ResultParcelValue> $resultParcelValue
     *
     * @throws \InvalidArgumentException
     */
    public function setResultParcelValue(?array $resultParcelValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($resultParcelValueArrayErrorMessage = self::validateResultParcelValueForArrayConstraintFromSetResultParcelValue($resultParcelValue))) {
            throw new \InvalidArgumentException($resultParcelValueArrayErrorMessage, __LINE__);
        }

        if (is_null($resultParcelValue) || (is_array($resultParcelValue) && empty($resultParcelValue))) {
            unset($this->resultParcelValue);
        } else {
            $this->resultParcelValue = $resultParcelValue;
        }

        return $this;
    }

    /**
     * Add item to resultParcelValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToResultParcelValue(ResultParcelValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ResultParcelValue) {
            throw new \InvalidArgumentException(sprintf('The resultParcelValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ResultParcelValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resultParcelValue[] = $item;

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
     * Get reservationNumber value.
     */
    public function getReservationNumber(): ?string
    {
        return $this->reservationNumber;
    }

    /**
     * Set reservationNumber value.
     */
    public function setReservationNumber(?string $reservationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;

        return $this;
    }
}
