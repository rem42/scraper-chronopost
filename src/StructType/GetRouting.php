<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRouting StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRouting.
 */
#[\AllowDynamicProperties]
class GetRouting extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * The shipperDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperDepot = null;

    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $countryCode = null;

    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * The socode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $socode = null;

    /**
     * The ascode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ascode = null;

    /**
     * Constructor method for getRouting.
     *
     * @uses GetRouting::setAccountNumber()
     * @uses GetRouting::setPassword()
     * @uses GetRouting::setShipperDepot()
     * @uses GetRouting::setCountryCode()
     * @uses GetRouting::setZipCode()
     * @uses GetRouting::setSocode()
     * @uses GetRouting::setAscode()
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $shipperDepot = null, ?string $countryCode = null, ?string $zipCode = null, ?string $socode = null, ?string $ascode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setShipperDepot($shipperDepot)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setSocode($socode)
            ->setAscode($ascode)
        ;
    }

    /**
     * Get accountNumber value.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value.
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

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
     * Get shipperDepot value.
     */
    public function getShipperDepot(): ?string
    {
        return $this->shipperDepot;
    }

    /**
     * Set shipperDepot value.
     */
    public function setShipperDepot(?string $shipperDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperDepot) && !is_string($shipperDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperDepot, true), gettype($shipperDepot)), __LINE__);
        }
        $this->shipperDepot = $shipperDepot;

        return $this;
    }

    /**
     * Get countryCode value.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Set countryCode value.
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get zipCode value.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value.
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get socode value.
     */
    public function getSocode(): ?string
    {
        return $this->socode;
    }

    /**
     * Set socode value.
     */
    public function setSocode(?string $socode = null): self
    {
        // validation for constraint: string
        if (!is_null($socode) && !is_string($socode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socode, true), gettype($socode)), __LINE__);
        }
        $this->socode = $socode;

        return $this;
    }

    /**
     * Get ascode value.
     */
    public function getAscode(): ?string
    {
        return $this->ascode;
    }

    /**
     * Set ascode value.
     */
    public function setAscode(?string $ascode = null): self
    {
        // validation for constraint: string
        if (!is_null($ascode) && !is_string($ascode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ascode, true), gettype($ascode)), __LINE__);
        }
        $this->ascode = $ascode;

        return $this;
    }
}
