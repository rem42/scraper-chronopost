<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV2.
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV2 extends AbstractStructBase
{
    /** The numberOfParcel */
    protected int $numberOfParcel;

    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?EsdValue3 $esdValue = null;

    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?HeaderValue $headerValue = null;

    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<ShipperValueV2>
     */
    protected ?array $shipperValue = null;

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
     * @var array<SkybillWithDimensionsValueV4>
     */
    protected ?array $skybillValue = null;

    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?SkybillParamsValueV2 $skybillParamsValue = null;

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
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<ScheduledValue>
     */
    protected ?array $scheduledValue = null;

    /**
     * The recipientLocalValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<RecipientLocalValue>
     */
    protected ?array $recipientLocalValue = null;

    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<CustomsValue>
     */
    protected ?array $customsValue = null;

    /**
     * Constructor method for shippingMultiParcelV2.
     *
     * @uses ShippingMultiParcelV2::setNumberOfParcel()
     * @uses ShippingMultiParcelV2::setEsdValue()
     * @uses ShippingMultiParcelV2::setHeaderValue()
     * @uses ShippingMultiParcelV2::setShipperValue()
     * @uses ShippingMultiParcelV2::setCustomerValue()
     * @uses ShippingMultiParcelV2::setRecipientValue()
     * @uses ShippingMultiParcelV2::setRefValue()
     * @uses ShippingMultiParcelV2::setSkybillValue()
     * @uses ShippingMultiParcelV2::setSkybillParamsValue()
     * @uses ShippingMultiParcelV2::setPassword()
     * @uses ShippingMultiParcelV2::setModeRetour()
     * @uses ShippingMultiParcelV2::setVersion()
     * @uses ShippingMultiParcelV2::setMultiParcel()
     * @uses ShippingMultiParcelV2::setScheduledValue()
     * @uses ShippingMultiParcelV2::setRecipientLocalValue()
     * @uses ShippingMultiParcelV2::setCustomsValue()
     *
     * @param array<ShipperValueV2>               $shipperValue
     * @param array<RecipientValue>               $recipientValue
     * @param array<RefValue>                     $refValue
     * @param array<SkybillWithDimensionsValueV4> $skybillValue
     * @param array<ScheduledValue>               $scheduledValue
     * @param array<RecipientLocalValue>          $recipientLocalValue
     * @param array<CustomsValue>                 $customsValue
     */
    public function __construct(int $numberOfParcel, ?EsdValue3 $esdValue = null, ?HeaderValue $headerValue = null, ?array $shipperValue = null, ?CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?SkybillParamsValueV2 $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?string $multiParcel = null, ?array $scheduledValue = null, ?array $recipientLocalValue = null, ?array $customsValue = null)
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
            ->setRecipientLocalValue($recipientLocalValue)
            ->setCustomsValue($customsValue)
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
    public function getEsdValue(): ?EsdValue3
    {
        return $this->esdValue;
    }

    /**
     * Set esdValue value.
     */
    public function setEsdValue(?EsdValue3 $esdValue = null): self
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
     *
     * @return array<ShipperValueV2>
     */
    public function getShipperValue(): ?array
    {
        return $this->shipperValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShipperValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperValueForArrayConstraintFromSetShipperValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelV2ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2ShipperValueItem instanceof ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV2ShipperValueItem) ? get_class($shippingMultiParcelV2ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2ShipperValueItem), var_export($shippingMultiParcelV2ShipperValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ShipperValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set shipperValue value.
     *
     * @param array<ShipperValueV2> $shipperValue
     *
     * @throws \InvalidArgumentException
     */
    public function setShipperValue(?array $shipperValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperValueArrayErrorMessage = self::validateShipperValueForArrayConstraintFromSetShipperValue($shipperValue))) {
            throw new \InvalidArgumentException($shipperValueArrayErrorMessage, __LINE__);
        }
        $this->shipperValue = $shipperValue;

        return $this;
    }

    /**
     * Add item to shipperValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToShipperValue(ShipperValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ShipperValueV2) {
            throw new \InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ShipperValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;

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

        foreach ($values as $shippingMultiParcelV2RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RecipientValueItem instanceof RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RecipientValueItem) ? get_class($shippingMultiParcelV2RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RecipientValueItem), var_export($shippingMultiParcelV2RecipientValueItem, true));
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

        foreach ($values as $shippingMultiParcelV2RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RefValueItem instanceof RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RefValueItem) ? get_class($shippingMultiParcelV2RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RefValueItem), var_export($shippingMultiParcelV2RefValueItem, true));
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
     * @return array<SkybillWithDimensionsValueV4>
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

        foreach ($values as $shippingMultiParcelV2SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2SkybillValueItem instanceof SkybillWithDimensionsValueV4) {
                $invalidValues[] = is_object($shippingMultiParcelV2SkybillValueItem) ? get_class($shippingMultiParcelV2SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2SkybillValueItem), var_export($shippingMultiParcelV2SkybillValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Scraper\ScraperChronopost\StructType\SkybillWithDimensionsValueV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set skybillValue value.
     *
     * @param array<SkybillWithDimensionsValueV4> $skybillValue
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
    public function addToSkybillValue(SkybillWithDimensionsValueV4 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SkybillWithDimensionsValueV4) {
            throw new \InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Scraper\ScraperChronopost\StructType\SkybillWithDimensionsValueV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;

        return $this;
    }

    /**
     * Get skybillParamsValue value.
     */
    public function getSkybillParamsValue(): ?SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }

    /**
     * Set skybillParamsValue value.
     */
    public function setSkybillParamsValue(?SkybillParamsValueV2 $skybillParamsValue = null): self
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
     *
     * @return array<ScheduledValue>
     */
    public function getScheduledValue(): ?array
    {
        return $this->scheduledValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setScheduledValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduledValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduledValueForArrayConstraintFromSetScheduledValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelV2ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2ScheduledValueItem instanceof ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2ScheduledValueItem) ? get_class($shippingMultiParcelV2ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2ScheduledValueItem), var_export($shippingMultiParcelV2ScheduledValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set scheduledValue value.
     *
     * @param array<ScheduledValue> $scheduledValue
     *
     * @throws \InvalidArgumentException
     */
    public function setScheduledValue(?array $scheduledValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($scheduledValueArrayErrorMessage = self::validateScheduledValueForArrayConstraintFromSetScheduledValue($scheduledValue))) {
            throw new \InvalidArgumentException($scheduledValueArrayErrorMessage, __LINE__);
        }
        $this->scheduledValue = $scheduledValue;

        return $this;
    }

    /**
     * Add item to scheduledValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToScheduledValue(ScheduledValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ScheduledValue) {
            throw new \InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;

        return $this;
    }

    /**
     * Get recipientLocalValue value.
     *
     * @return array<RecipientLocalValue>
     */
    public function getRecipientLocalValue(): ?array
    {
        return $this->recipientLocalValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setRecipientLocalValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientLocalValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientLocalValueForArrayConstraintFromSetRecipientLocalValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelV2RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2RecipientLocalValueItem instanceof RecipientLocalValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2RecipientLocalValueItem) ? get_class($shippingMultiParcelV2RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2RecipientLocalValueItem), var_export($shippingMultiParcelV2RecipientLocalValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \Scraper\ScraperChronopost\StructType\RecipientLocalValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set recipientLocalValue value.
     *
     * @param array<RecipientLocalValue> $recipientLocalValue
     *
     * @throws \InvalidArgumentException
     */
    public function setRecipientLocalValue(?array $recipientLocalValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientLocalValueArrayErrorMessage = self::validateRecipientLocalValueForArrayConstraintFromSetRecipientLocalValue($recipientLocalValue))) {
            throw new \InvalidArgumentException($recipientLocalValueArrayErrorMessage, __LINE__);
        }
        $this->recipientLocalValue = $recipientLocalValue;

        return $this;
    }

    /**
     * Add item to recipientLocalValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToRecipientLocalValue(RecipientLocalValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof RecipientLocalValue) {
            throw new \InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \Scraper\ScraperChronopost\StructType\RecipientLocalValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientLocalValue[] = $item;

        return $this;
    }

    /**
     * Get customsValue value.
     *
     * @return array<CustomsValue>
     */
    public function getCustomsValue(): ?array
    {
        return $this->customsValue;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCustomsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomsValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomsValueForArrayConstraintFromSetCustomsValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $shippingMultiParcelV2CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV2CustomsValueItem instanceof CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV2CustomsValueItem) ? get_class($shippingMultiParcelV2CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV2CustomsValueItem), var_export($shippingMultiParcelV2CustomsValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The customsValue property can only contain items of type \Scraper\ScraperChronopost\StructType\CustomsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set customsValue value.
     *
     * @param array<CustomsValue> $customsValue
     *
     * @throws \InvalidArgumentException
     */
    public function setCustomsValue(?array $customsValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($customsValueArrayErrorMessage = self::validateCustomsValueForArrayConstraintFromSetCustomsValue($customsValue))) {
            throw new \InvalidArgumentException($customsValueArrayErrorMessage, __LINE__);
        }
        $this->customsValue = $customsValue;

        return $this;
    }

    /**
     * Add item to customsValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToCustomsValue(CustomsValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CustomsValue) {
            throw new \InvalidArgumentException(sprintf('The customsValue property can only contain items of type \Scraper\ScraperChronopost\StructType\CustomsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customsValue[] = $item;

        return $this;
    }
}
