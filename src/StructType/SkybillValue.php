<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValue StructType.
 */
#[\AllowDynamicProperties]
class SkybillValue extends AbstractStructBase
{
    /** The shipHour */
    protected int $shipHour;

    /**
     * The bulkNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $bulkNumber = null;

    /**
     * The codCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codCurrency = null;

    /**
     * The codValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $codValue = null;

    /**
     * The content1
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $content1 = null;

    /**
     * The content2
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $content2 = null;

    /**
     * The content3
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $content3 = null;

    /**
     * The content4
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $content4 = null;

    /**
     * The content5
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $content5 = null;

    /**
     * The customsCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $customsCurrency = null;

    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $customsValue = null;

    /**
     * The evtCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $evtCode = null;

    /**
     * The insuredCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $insuredCurrency = null;

    /**
     * The insuredValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $insuredValue = null;

    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $latitude = null;

    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $longitude = null;

    /**
     * The masterSkybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $masterSkybillNumber = null;

    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $objectType = null;

    /**
     * The portCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $portCurrency = null;

    /**
     * The portValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $portValue = null;

    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $productCode = null;

    /**
     * The qualite
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $qualite = null;

    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $service = null;

    /**
     * The shipDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipDate = null;

    /**
     * The skybillRank
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillRank = null;

    /**
     * The source
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $source = null;

    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $weight = null;

    /**
     * The weightUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $weightUnit = null;

    /**
     * Constructor method for skybillValue.
     *
     * @uses SkybillValue::setShipHour()
     * @uses SkybillValue::setBulkNumber()
     * @uses SkybillValue::setCodCurrency()
     * @uses SkybillValue::setCodValue()
     * @uses SkybillValue::setContent1()
     * @uses SkybillValue::setContent2()
     * @uses SkybillValue::setContent3()
     * @uses SkybillValue::setContent4()
     * @uses SkybillValue::setContent5()
     * @uses SkybillValue::setCustomsCurrency()
     * @uses SkybillValue::setCustomsValue()
     * @uses SkybillValue::setEvtCode()
     * @uses SkybillValue::setInsuredCurrency()
     * @uses SkybillValue::setInsuredValue()
     * @uses SkybillValue::setLatitude()
     * @uses SkybillValue::setLongitude()
     * @uses SkybillValue::setMasterSkybillNumber()
     * @uses SkybillValue::setObjectType()
     * @uses SkybillValue::setPortCurrency()
     * @uses SkybillValue::setPortValue()
     * @uses SkybillValue::setProductCode()
     * @uses SkybillValue::setQualite()
     * @uses SkybillValue::setService()
     * @uses SkybillValue::setShipDate()
     * @uses SkybillValue::setSkybillRank()
     * @uses SkybillValue::setSource()
     * @uses SkybillValue::setWeight()
     * @uses SkybillValue::setWeightUnit()
     */
    public function __construct(int $shipHour, ?string $bulkNumber = null, ?string $codCurrency = null, ?float $codValue = null, ?string $content1 = null, ?string $content2 = null, ?string $content3 = null, ?string $content4 = null, ?string $content5 = null, ?string $customsCurrency = null, ?float $customsValue = null, ?string $evtCode = null, ?string $insuredCurrency = null, ?float $insuredValue = null, ?string $latitude = null, ?string $longitude = null, ?string $masterSkybillNumber = null, ?string $objectType = null, ?string $portCurrency = null, ?float $portValue = null, ?string $productCode = null, ?string $qualite = null, ?string $service = null, ?string $shipDate = null, ?string $skybillRank = null, ?string $source = null, ?float $weight = null, ?string $weightUnit = null)
    {
        $this
            ->setShipHour($shipHour)
            ->setBulkNumber($bulkNumber)
            ->setCodCurrency($codCurrency)
            ->setCodValue($codValue)
            ->setContent1($content1)
            ->setContent2($content2)
            ->setContent3($content3)
            ->setContent4($content4)
            ->setContent5($content5)
            ->setCustomsCurrency($customsCurrency)
            ->setCustomsValue($customsValue)
            ->setEvtCode($evtCode)
            ->setInsuredCurrency($insuredCurrency)
            ->setInsuredValue($insuredValue)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setMasterSkybillNumber($masterSkybillNumber)
            ->setObjectType($objectType)
            ->setPortCurrency($portCurrency)
            ->setPortValue($portValue)
            ->setProductCode($productCode)
            ->setQualite($qualite)
            ->setService($service)
            ->setShipDate($shipDate)
            ->setSkybillRank($skybillRank)
            ->setSource($source)
            ->setWeight($weight)
            ->setWeightUnit($weightUnit)
        ;
    }

    /**
     * Get shipHour value.
     */
    public function getShipHour(): int
    {
        return $this->shipHour;
    }

    /**
     * Set shipHour value.
     */
    public function setShipHour(int $shipHour): self
    {
        // validation for constraint: int
        if (!is_null($shipHour) && !(is_int($shipHour) || ctype_digit($shipHour))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipHour, true), gettype($shipHour)), __LINE__);
        }
        $this->shipHour = $shipHour;

        return $this;
    }

    /**
     * Get bulkNumber value.
     */
    public function getBulkNumber(): ?string
    {
        return $this->bulkNumber;
    }

    /**
     * Set bulkNumber value.
     */
    public function setBulkNumber(?string $bulkNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkNumber) && !is_string($bulkNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkNumber, true), gettype($bulkNumber)), __LINE__);
        }
        $this->bulkNumber = $bulkNumber;

        return $this;
    }

    /**
     * Get codCurrency value.
     */
    public function getCodCurrency(): ?string
    {
        return $this->codCurrency;
    }

    /**
     * Set codCurrency value.
     */
    public function setCodCurrency(?string $codCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($codCurrency) && !is_string($codCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCurrency, true), gettype($codCurrency)), __LINE__);
        }
        $this->codCurrency = $codCurrency;

        return $this;
    }

    /**
     * Get codValue value.
     */
    public function getCodValue(): ?float
    {
        return $this->codValue;
    }

    /**
     * Set codValue value.
     */
    public function setCodValue(?float $codValue = null): self
    {
        // validation for constraint: float
        if (!is_null($codValue) && !(is_float($codValue) || is_numeric($codValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($codValue, true), gettype($codValue)), __LINE__);
        }
        $this->codValue = $codValue;

        return $this;
    }

    /**
     * Get content1 value.
     */
    public function getContent1(): ?string
    {
        return $this->content1;
    }

    /**
     * Set content1 value.
     */
    public function setContent1(?string $content1 = null): self
    {
        // validation for constraint: string
        if (!is_null($content1) && !is_string($content1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content1, true), gettype($content1)), __LINE__);
        }
        $this->content1 = $content1;

        return $this;
    }

    /**
     * Get content2 value.
     */
    public function getContent2(): ?string
    {
        return $this->content2;
    }

    /**
     * Set content2 value.
     */
    public function setContent2(?string $content2 = null): self
    {
        // validation for constraint: string
        if (!is_null($content2) && !is_string($content2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content2, true), gettype($content2)), __LINE__);
        }
        $this->content2 = $content2;

        return $this;
    }

    /**
     * Get content3 value.
     */
    public function getContent3(): ?string
    {
        return $this->content3;
    }

    /**
     * Set content3 value.
     */
    public function setContent3(?string $content3 = null): self
    {
        // validation for constraint: string
        if (!is_null($content3) && !is_string($content3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content3, true), gettype($content3)), __LINE__);
        }
        $this->content3 = $content3;

        return $this;
    }

    /**
     * Get content4 value.
     */
    public function getContent4(): ?string
    {
        return $this->content4;
    }

    /**
     * Set content4 value.
     */
    public function setContent4(?string $content4 = null): self
    {
        // validation for constraint: string
        if (!is_null($content4) && !is_string($content4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content4, true), gettype($content4)), __LINE__);
        }
        $this->content4 = $content4;

        return $this;
    }

    /**
     * Get content5 value.
     */
    public function getContent5(): ?string
    {
        return $this->content5;
    }

    /**
     * Set content5 value.
     */
    public function setContent5(?string $content5 = null): self
    {
        // validation for constraint: string
        if (!is_null($content5) && !is_string($content5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content5, true), gettype($content5)), __LINE__);
        }
        $this->content5 = $content5;

        return $this;
    }

    /**
     * Get customsCurrency value.
     */
    public function getCustomsCurrency(): ?string
    {
        return $this->customsCurrency;
    }

    /**
     * Set customsCurrency value.
     */
    public function setCustomsCurrency(?string $customsCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($customsCurrency) && !is_string($customsCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsCurrency, true), gettype($customsCurrency)), __LINE__);
        }
        $this->customsCurrency = $customsCurrency;

        return $this;
    }

    /**
     * Get customsValue value.
     */
    public function getCustomsValue(): ?float
    {
        return $this->customsValue;
    }

    /**
     * Set customsValue value.
     */
    public function setCustomsValue(?float $customsValue = null): self
    {
        // validation for constraint: float
        if (!is_null($customsValue) && !(is_float($customsValue) || is_numeric($customsValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsValue, true), gettype($customsValue)), __LINE__);
        }
        $this->customsValue = $customsValue;

        return $this;
    }

    /**
     * Get evtCode value.
     */
    public function getEvtCode(): ?string
    {
        return $this->evtCode;
    }

    /**
     * Set evtCode value.
     */
    public function setEvtCode(?string $evtCode = null): self
    {
        // validation for constraint: string
        if (!is_null($evtCode) && !is_string($evtCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($evtCode, true), gettype($evtCode)), __LINE__);
        }
        $this->evtCode = $evtCode;

        return $this;
    }

    /**
     * Get insuredCurrency value.
     */
    public function getInsuredCurrency(): ?string
    {
        return $this->insuredCurrency;
    }

    /**
     * Set insuredCurrency value.
     */
    public function setInsuredCurrency(?string $insuredCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($insuredCurrency) && !is_string($insuredCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuredCurrency, true), gettype($insuredCurrency)), __LINE__);
        }
        $this->insuredCurrency = $insuredCurrency;

        return $this;
    }

    /**
     * Get insuredValue value.
     */
    public function getInsuredValue(): ?float
    {
        return $this->insuredValue;
    }

    /**
     * Set insuredValue value.
     */
    public function setInsuredValue(?float $insuredValue = null): self
    {
        // validation for constraint: float
        if (!is_null($insuredValue) && !(is_float($insuredValue) || is_numeric($insuredValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuredValue, true), gettype($insuredValue)), __LINE__);
        }
        $this->insuredValue = $insuredValue;

        return $this;
    }

    /**
     * Get latitude value.
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Set latitude value.
     */
    public function setLatitude(?string $latitude = null): self
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get longitude value.
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Set longitude value.
     */
    public function setLongitude(?string $longitude = null): self
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get masterSkybillNumber value.
     */
    public function getMasterSkybillNumber(): ?string
    {
        return $this->masterSkybillNumber;
    }

    /**
     * Set masterSkybillNumber value.
     */
    public function setMasterSkybillNumber(?string $masterSkybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($masterSkybillNumber) && !is_string($masterSkybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($masterSkybillNumber, true), gettype($masterSkybillNumber)), __LINE__);
        }
        $this->masterSkybillNumber = $masterSkybillNumber;

        return $this;
    }

    /**
     * Get objectType value.
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * Set objectType value.
     */
    public function setObjectType(?string $objectType = null): self
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get portCurrency value.
     */
    public function getPortCurrency(): ?string
    {
        return $this->portCurrency;
    }

    /**
     * Set portCurrency value.
     */
    public function setPortCurrency(?string $portCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($portCurrency) && !is_string($portCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portCurrency, true), gettype($portCurrency)), __LINE__);
        }
        $this->portCurrency = $portCurrency;

        return $this;
    }

    /**
     * Get portValue value.
     */
    public function getPortValue(): ?float
    {
        return $this->portValue;
    }

    /**
     * Set portValue value.
     */
    public function setPortValue(?float $portValue = null): self
    {
        // validation for constraint: float
        if (!is_null($portValue) && !(is_float($portValue) || is_numeric($portValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($portValue, true), gettype($portValue)), __LINE__);
        }
        $this->portValue = $portValue;

        return $this;
    }

    /**
     * Get productCode value.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Set productCode value.
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get qualite value.
     */
    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    /**
     * Set qualite value.
     */
    public function setQualite(?string $qualite = null): self
    {
        // validation for constraint: string
        if (!is_null($qualite) && !is_string($qualite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qualite, true), gettype($qualite)), __LINE__);
        }
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get service value.
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * Set service value.
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;

        return $this;
    }

    /**
     * Get shipDate value.
     */
    public function getShipDate(): ?string
    {
        return $this->shipDate;
    }

    /**
     * Set shipDate value.
     */
    public function setShipDate(?string $shipDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipDate, true), gettype($shipDate)), __LINE__);
        }
        $this->shipDate = $shipDate;

        return $this;
    }

    /**
     * Get skybillRank value.
     */
    public function getSkybillRank(): ?string
    {
        return $this->skybillRank;
    }

    /**
     * Set skybillRank value.
     */
    public function setSkybillRank(?string $skybillRank = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillRank) && !is_string($skybillRank)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillRank, true), gettype($skybillRank)), __LINE__);
        }
        $this->skybillRank = $skybillRank;

        return $this;
    }

    /**
     * Get source value.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Set source value.
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;

        return $this;
    }

    /**
     * Get weight value.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Set weight value.
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weightUnit value.
     */
    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }

    /**
     * Set weightUnit value.
     */
    public function setWeightUnit(?string $weightUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($weightUnit) && !is_string($weightUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weightUnit, true), gettype($weightUnit)), __LINE__);
        }
        $this->weightUnit = $weightUnit;

        return $this;
    }
}
