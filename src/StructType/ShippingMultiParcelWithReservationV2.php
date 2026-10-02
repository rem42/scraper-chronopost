<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV2.
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelWithReservationV2 extends AbstractStructBase
{
    /** The numberOfParcel */
    protected int $numberOfParcel;

    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?EsdWithRefClientValue $esdValue = null;

    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?HeaderValue $headerValue = null;

    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ShipperValue $shipperValue = null;

    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?CustomerValue $customerValue = null;

    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<RecipientValue>
     */
    protected ?array $recipientValue = null;

    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<RefValue>
     */
    protected ?array $refValue = null;

    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<SkybillWithDimensionsValueV2>
     */
    protected ?array $skybillValue = null;

    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?SkybillParamsValue $skybillParamsValue = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $modeRetour = null;

    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $version = null;

    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $multiParcel = null;

    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ScheduledValue $scheduledValue = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationV2.
     *
     * @uses ShippingMultiParcelWithReservationV2::setNumberOfParcel()
     * @uses ShippingMultiParcelWithReservationV2::setEsdValue()
     * @uses ShippingMultiParcelWithReservationV2::setHeaderValue()
     * @uses ShippingMultiParcelWithReservationV2::setShipperValue()
     * @uses ShippingMultiParcelWithReservationV2::setCustomerValue()
     * @uses ShippingMultiParcelWithReservationV2::setRecipientValue()
     * @uses ShippingMultiParcelWithReservationV2::setRefValue()
     * @uses ShippingMultiParcelWithReservationV2::setSkybillValue()
     * @uses ShippingMultiParcelWithReservationV2::setSkybillParamsValue()
     * @uses ShippingMultiParcelWithReservationV2::setPassword()
     * @uses ShippingMultiParcelWithReservationV2::setModeRetour()
     * @uses ShippingMultiParcelWithReservationV2::setVersion()
     * @uses ShippingMultiParcelWithReservationV2::setMultiParcel()
     * @uses ShippingMultiParcelWithReservationV2::setScheduledValue()
     *
     * @param array<RecipientValue>               $recipientValue
     * @param array<RefValue>                     $refValue
     * @param array<SkybillWithDimensionsValueV2> $skybillValue
     */
    public function __construct(int $numberOfParcel, ?EsdWithRefClientValue $esdValue = null, ?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?string $multiParcel = null, ?ScheduledValue $scheduledValue = null)
    {
        $this
            ->setNumberOfParcel($numberOfParcel)
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue)
        ;
    }

    /**
     * Get numberOfParcel value.
     */
    public function getNumberOfParcel(): int
    {
        return $this->numberOfParcel;
    }

    /**
     * Set numberOfParcel value.
     */
    public function setNumberOfParcel(int $numberOfParcel): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;

        return $this;
    }

    /**
     * Get esdValue value.
     */
    public function getEsdValue(): ?EsdWithRefClientValue
    {
        return $this->esdValue;
    }

    /**
     * Set esdValue value.
     */
    public function setEsdValue(?EsdWithRefClientValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;

        return $this;
    }

    /**
     * Get headerValue value.
     */
    public function getHeaderValue(): ?HeaderValue
    {
        return $this->headerValue;
    }

    /**
     * Set headerValue value.
     */
    public function setHeaderValue(?HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
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
     * Get customerValue value.
     */
    public function getCustomerValue(): ?CustomerValue
    {
        return $this->customerValue;
    }

    /**
     * Set customerValue value.
     */
    public function setCustomerValue(?CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;

        return $this;
    }

    /**
     * Get recipientValue value.
     *
     * @return array<RecipientValue>
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelWithReservationV2RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2RecipientValueItem instanceof RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2RecipientValueItem) ? get_class($shippingMultiParcelWithReservationV2RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2RecipientValueItem), var_export($shippingMultiParcelWithReservationV2RecipientValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Scraper\ScraperChronopost\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set recipientValue value.
     *
     * @param array<RecipientValue> $recipientValue
     *
     * @throws \InvalidArgumentException
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintFromSetRecipientValue($recipientValue))) {
            throw new \InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;

        return $this;
    }

    /**
     * Add item to recipientValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToRecipientValue(RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof RecipientValue) {
            throw new \InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Scraper\ScraperChronopost\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;

        return $this;
    }

    /**
     * Get refValue value.
     *
     * @return array<RefValue>
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelWithReservationV2RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2RefValueItem instanceof RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2RefValueItem) ? get_class($shippingMultiParcelWithReservationV2RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2RefValueItem), var_export($shippingMultiParcelWithReservationV2RefValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Scraper\ScraperChronopost\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set refValue value.
     *
     * @param array<RefValue> $refValue
     *
     * @throws \InvalidArgumentException
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintFromSetRefValue($refValue))) {
            throw new \InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;

        return $this;
    }

    /**
     * Add item to refValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToRefValue(RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof RefValue) {
            throw new \InvalidArgumentException(sprintf('The refValue property can only contain items of type \Scraper\ScraperChronopost\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;

        return $this;
    }

    /**
     * Get skybillValue value.
     *
     * @return array<SkybillWithDimensionsValueV2>
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelWithReservationV2SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2SkybillValueItem instanceof SkybillWithDimensionsValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2SkybillValueItem) ? get_class($shippingMultiParcelWithReservationV2SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2SkybillValueItem), var_export($shippingMultiParcelWithReservationV2SkybillValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Scraper\ScraperChronopost\StructType\SkybillWithDimensionsValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set skybillValue value.
     *
     * @param array<SkybillWithDimensionsValueV2> $skybillValue
     *
     * @throws \InvalidArgumentException
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintFromSetSkybillValue($skybillValue))) {
            throw new \InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;

        return $this;
    }

    /**
     * Add item to skybillValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToSkybillValue(SkybillWithDimensionsValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SkybillWithDimensionsValueV2) {
            throw new \InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Scraper\ScraperChronopost\StructType\SkybillWithDimensionsValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;

        return $this;
    }

    /**
     * Get skybillParamsValue value.
     */
    public function getSkybillParamsValue(): ?SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }

    /**
     * Set skybillParamsValue value.
     */
    public function setSkybillParamsValue(?SkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;

        return $this;
    }

    /**
     * Get password value.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value.
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;

        return $this;
    }

    /**
     * Get modeRetour value.
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }

    /**
     * Set modeRetour value.
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;

        return $this;
    }

    /**
     * Get version value.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set version value.
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;

        return $this;
    }

    /**
     * Get multiParcel value.
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }

    /**
     * Set multiParcel value.
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;

        return $this;
    }

    /**
     * Get scheduledValue value.
     */
    public function getScheduledValue(): ?ScheduledValue
    {
        return $this->scheduledValue;
    }

    /**
     * Set scheduledValue value.
     */
    public function setScheduledValue(?ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;

        return $this;
    }
}
