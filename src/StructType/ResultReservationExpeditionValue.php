<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationExpeditionValue StructType.
 */
#[\AllowDynamicProperties]
class ResultReservationExpeditionValue extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The codeDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeDepot = null;

    /**
     * The codeService
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeService = null;

    /**
     * The DSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $DSort = null;

    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $destinationDepot = null;

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
     * The geoPostCodeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $geoPostCodeBarre = null;

    /**
     * The geoPostNumeroColis
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $geoPostNumeroColis = null;

    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $groupingPriorityLabel = null;

    /**
     * The OSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $OSort = null;

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
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for resultReservationExpeditionValue.
     *
     * @uses ResultReservationExpeditionValue::setErrorCode()
     * @uses ResultReservationExpeditionValue::setCodeDepot()
     * @uses ResultReservationExpeditionValue::setCodeService()
     * @uses ResultReservationExpeditionValue::setDSort()
     * @uses ResultReservationExpeditionValue::setDestinationDepot()
     * @uses ResultReservationExpeditionValue::setESDFullNumber()
     * @uses ResultReservationExpeditionValue::setESDNumber()
     * @uses ResultReservationExpeditionValue::setErrorMessage()
     * @uses ResultReservationExpeditionValue::setGeoPostCodeBarre()
     * @uses ResultReservationExpeditionValue::setGeoPostNumeroColis()
     * @uses ResultReservationExpeditionValue::setGroupingPriorityLabel()
     * @uses ResultReservationExpeditionValue::setOSort()
     * @uses ResultReservationExpeditionValue::setPickupDate()
     * @uses ResultReservationExpeditionValue::setReservationNumber()
     * @uses ResultReservationExpeditionValue::setServiceMark()
     * @uses ResultReservationExpeditionValue::setServiceName()
     * @uses ResultReservationExpeditionValue::setSignaletiqueProduit()
     * @uses ResultReservationExpeditionValue::setSkybillNumber()
     */
    public function __construct(int $errorCode, ?string $codeDepot = null, ?string $codeService = null, ?string $dSort = null, ?string $destinationDepot = null, ?string $eSDFullNumber = null, ?string $eSDNumber = null, ?string $errorMessage = null, ?string $geoPostCodeBarre = null, ?string $geoPostNumeroColis = null, ?string $groupingPriorityLabel = null, ?string $oSort = null, ?string $pickupDate = null, ?string $reservationNumber = null, ?string $serviceMark = null, ?string $serviceName = null, ?string $signaletiqueProduit = null, ?string $skybillNumber = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDSort($dSort)
            ->setDestinationDepot($destinationDepot)
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorMessage($errorMessage)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setOSort($oSort)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
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
     * Get codeDepot value.
     */
    public function getCodeDepot(): ?string
    {
        return $this->codeDepot;
    }

    /**
     * Set codeDepot value.
     */
    public function setCodeDepot(?string $codeDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($codeDepot) && !is_string($codeDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepot, true), gettype($codeDepot)), __LINE__);
        }
        $this->codeDepot = $codeDepot;

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
     * Get DSort value.
     */
    public function getDSort(): ?string
    {
        return $this->DSort;
    }

    /**
     * Set DSort value.
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->DSort = $dSort;

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
     * Get geoPostCodeBarre value.
     */
    public function getGeoPostCodeBarre(): ?string
    {
        return $this->geoPostCodeBarre;
    }

    /**
     * Set geoPostCodeBarre value.
     */
    public function setGeoPostCodeBarre(?string $geoPostCodeBarre = null): self
    {
        // validation for constraint: string
        if (!is_null($geoPostCodeBarre) && !is_string($geoPostCodeBarre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostCodeBarre, true), gettype($geoPostCodeBarre)), __LINE__);
        }
        $this->geoPostCodeBarre = $geoPostCodeBarre;

        return $this;
    }

    /**
     * Get geoPostNumeroColis value.
     */
    public function getGeoPostNumeroColis(): ?string
    {
        return $this->geoPostNumeroColis;
    }

    /**
     * Set geoPostNumeroColis value.
     */
    public function setGeoPostNumeroColis(?string $geoPostNumeroColis = null): self
    {
        // validation for constraint: string
        if (!is_null($geoPostNumeroColis) && !is_string($geoPostNumeroColis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostNumeroColis, true), gettype($geoPostNumeroColis)), __LINE__);
        }
        $this->geoPostNumeroColis = $geoPostNumeroColis;

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
     * Get OSort value.
     */
    public function getOSort(): ?string
    {
        return $this->OSort;
    }

    /**
     * Set OSort value.
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->OSort = $oSort;

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
