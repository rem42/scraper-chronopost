<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for resultMultiParcelExpeditionValue StructType.
 */
#[\AllowDynamicProperties]
class ResultMultiParcelExpeditionValue extends ResultShippingValue
{
    /**
     * The resultMultiParcelValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<ResultMultiParcelValue>|null
     */
    protected ?array $resultMultiParcelValue = null;

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
     * Constructor method for resultMultiParcelExpeditionValue.
     *
     * @uses ResultMultiParcelExpeditionValue::setResultMultiParcelValue()
     * @uses ResultMultiParcelExpeditionValue::setESDFullNumber()
     * @uses ResultMultiParcelExpeditionValue::setESDNumber()
     * @uses ResultMultiParcelExpeditionValue::setPickupDate()
     * @uses ResultMultiParcelExpeditionValue::setReservationNumber()
     *
     * @param array<ResultMultiParcelValue> $resultMultiParcelValue
     */
    public function __construct(?array $resultMultiParcelValue = null, ?string $eSDFullNumber = null, ?string $eSDNumber = null, ?string $pickupDate = null, ?string $reservationNumber = null)
    {
        $this
            ->setResultMultiParcelValue($resultMultiParcelValue)
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
        ;
    }

    /**
     * Get resultMultiParcelValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<ResultMultiParcelValue>|null
     */
    public function getResultMultiParcelValue(): ?array
    {
        return $this->resultMultiParcelValue ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setResultMultiParcelValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultMultiParcelValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultMultiParcelValueForArrayConstraintFromSetResultMultiParcelValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $resultMultiParcelExpeditionValueResultMultiParcelValueItem) {
            // validation for constraint: itemType
            if (!$resultMultiParcelExpeditionValueResultMultiParcelValueItem instanceof ResultMultiParcelValue) {
                $invalidValues[] = is_object($resultMultiParcelExpeditionValueResultMultiParcelValueItem) ? get_class($resultMultiParcelExpeditionValueResultMultiParcelValueItem) : sprintf('%s(%s)', gettype($resultMultiParcelExpeditionValueResultMultiParcelValueItem), var_export($resultMultiParcelExpeditionValueResultMultiParcelValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The resultMultiParcelValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ResultMultiParcelValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set resultMultiParcelValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<ResultMultiParcelValue> $resultMultiParcelValue
     *
     * @throws \InvalidArgumentException
     */
    public function setResultMultiParcelValue(?array $resultMultiParcelValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($resultMultiParcelValueArrayErrorMessage = self::validateResultMultiParcelValueForArrayConstraintFromSetResultMultiParcelValue($resultMultiParcelValue))) {
            throw new \InvalidArgumentException($resultMultiParcelValueArrayErrorMessage, __LINE__);
        }

        if (is_null($resultMultiParcelValue) || (is_array($resultMultiParcelValue) && empty($resultMultiParcelValue))) {
            unset($this->resultMultiParcelValue);
        } else {
            $this->resultMultiParcelValue = $resultMultiParcelValue;
        }

        return $this;
    }

    /**
     * Add item to resultMultiParcelValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToResultMultiParcelValue(ResultMultiParcelValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ResultMultiParcelValue) {
            throw new \InvalidArgumentException(sprintf('The resultMultiParcelValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ResultMultiParcelValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resultMultiParcelValue[] = $item;

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
