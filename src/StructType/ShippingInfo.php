<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingInfo StructType.
 */
#[\AllowDynamicProperties]
class ShippingInfo extends AbstractStructBase
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $asCode = null;

    /**
     * The codeService
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeService = null;

    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $destinationDepot = null;

    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $groupingPriorityLabel = null;

    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceMark = null;

    /**
     * The serviceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceName = null;

    /**
     * The signaletiqueProduit
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $signaletiqueProduit = null;

    /**
     * The dSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $dSort = null;

    /**
     * The oSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $oSort = null;

    /**
     * Constructor method for shippingInfo.
     *
     * @uses ShippingInfo::setAsCode()
     * @uses ShippingInfo::setCodeService()
     * @uses ShippingInfo::setDestinationDepot()
     * @uses ShippingInfo::setGroupingPriorityLabel()
     * @uses ShippingInfo::setServiceMark()
     * @uses ShippingInfo::setServiceName()
     * @uses ShippingInfo::setSignaletiqueProduit()
     * @uses ShippingInfo::setDSort()
     * @uses ShippingInfo::setOSort()
     */
    public function __construct(?string $asCode = null, ?string $codeService = null, ?string $destinationDepot = null, ?string $groupingPriorityLabel = null, ?string $serviceMark = null, ?string $serviceName = null, ?string $signaletiqueProduit = null, ?string $dSort = null, ?string $oSort = null)
    {
        $this
            ->setAsCode($asCode)
            ->setCodeService($codeService)
            ->setDestinationDepot($destinationDepot)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setDSort($dSort)
            ->setOSort($oSort)
        ;
    }

    /**
     * Get asCode value.
     */
    public function getAsCode(): ?string
    {
        return $this->asCode;
    }

    /**
     * Set asCode value.
     */
    public function setAsCode(?string $asCode = null): self
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;

        return $this;
    }

    /**
     * Get codeService value.
     */
    public function getCodeService(): ?string
    {
        return $this->codeService;
    }

    /**
     * Set codeService value.
     */
    public function setCodeService(?string $codeService = null): self
    {
        // validation for constraint: string
        if (!is_null($codeService) && !is_string($codeService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeService, true), gettype($codeService)), __LINE__);
        }
        $this->codeService = $codeService;

        return $this;
    }

    /**
     * Get destinationDepot value.
     */
    public function getDestinationDepot(): ?string
    {
        return $this->destinationDepot;
    }

    /**
     * Set destinationDepot value.
     */
    public function setDestinationDepot(?string $destinationDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDepot) && !is_string($destinationDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDepot, true), gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;

        return $this;
    }

    /**
     * Get groupingPriorityLabel value.
     */
    public function getGroupingPriorityLabel(): ?string
    {
        return $this->groupingPriorityLabel;
    }

    /**
     * Set groupingPriorityLabel value.
     */
    public function setGroupingPriorityLabel(?string $groupingPriorityLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($groupingPriorityLabel) && !is_string($groupingPriorityLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriorityLabel, true), gettype($groupingPriorityLabel)), __LINE__);
        }
        $this->groupingPriorityLabel = $groupingPriorityLabel;

        return $this;
    }

    /**
     * Get serviceMark value.
     */
    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }

    /**
     * Set serviceMark value.
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;

        return $this;
    }

    /**
     * Get serviceName value.
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    /**
     * Set serviceName value.
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get signaletiqueProduit value.
     */
    public function getSignaletiqueProduit(): ?string
    {
        return $this->signaletiqueProduit;
    }

    /**
     * Set signaletiqueProduit value.
     */
    public function setSignaletiqueProduit(?string $signaletiqueProduit = null): self
    {
        // validation for constraint: string
        if (!is_null($signaletiqueProduit) && !is_string($signaletiqueProduit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signaletiqueProduit, true), gettype($signaletiqueProduit)), __LINE__);
        }
        $this->signaletiqueProduit = $signaletiqueProduit;

        return $this;
    }

    /**
     * Get dSort value.
     */
    public function getDSort(): ?string
    {
        return $this->dSort;
    }

    /**
     * Set dSort value.
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->dSort = $dSort;

        return $this;
    }

    /**
     * Get oSort value.
     */
    public function getOSort(): ?string
    {
        return $this->oSort;
    }

    /**
     * Set oSort value.
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->oSort = $oSort;

        return $this;
    }
}
