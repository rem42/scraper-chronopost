<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipperValue StructType.
 */
#[\AllowDynamicProperties]
class ShipperValue extends AbstractStructBase
{
    /** The shipperPreAlert */
    protected int $shipperPreAlert;

    /**
     * The shipperAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperAdress1 = null;

    /**
     * The shipperAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperAdress2 = null;

    /**
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperCity = null;

    /**
     * The shipperCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperCivility = null;

    /**
     * The shipperContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperContactName = null;

    /**
     * The shipperCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperCountry = null;

    /**
     * The shipperCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperCountryName = null;

    /**
     * The shipperEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperEmail = null;

    /**
     * The shipperMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperMobilePhone = null;

    /**
     * The shipperName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperName = null;

    /**
     * The shipperName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperName2 = null;

    /**
     * The shipperPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperPhone = null;

    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shipperZipCode = null;

    /**
     * Constructor method for shipperValue.
     *
     * @uses ShipperValue::setShipperPreAlert()
     * @uses ShipperValue::setShipperAdress1()
     * @uses ShipperValue::setShipperAdress2()
     * @uses ShipperValue::setShipperCity()
     * @uses ShipperValue::setShipperCivility()
     * @uses ShipperValue::setShipperContactName()
     * @uses ShipperValue::setShipperCountry()
     * @uses ShipperValue::setShipperCountryName()
     * @uses ShipperValue::setShipperEmail()
     * @uses ShipperValue::setShipperMobilePhone()
     * @uses ShipperValue::setShipperName()
     * @uses ShipperValue::setShipperName2()
     * @uses ShipperValue::setShipperPhone()
     * @uses ShipperValue::setShipperZipCode()
     */
    public function __construct(int $shipperPreAlert, ?string $shipperAdress1 = null, ?string $shipperAdress2 = null, ?string $shipperCity = null, ?string $shipperCivility = null, ?string $shipperContactName = null, ?string $shipperCountry = null, ?string $shipperCountryName = null, ?string $shipperEmail = null, ?string $shipperMobilePhone = null, ?string $shipperName = null, ?string $shipperName2 = null, ?string $shipperPhone = null, ?string $shipperZipCode = null)
    {
        $this
            ->setShipperPreAlert($shipperPreAlert)
            ->setShipperAdress1($shipperAdress1)
            ->setShipperAdress2($shipperAdress2)
            ->setShipperCity($shipperCity)
            ->setShipperCivility($shipperCivility)
            ->setShipperContactName($shipperContactName)
            ->setShipperCountry($shipperCountry)
            ->setShipperCountryName($shipperCountryName)
            ->setShipperEmail($shipperEmail)
            ->setShipperMobilePhone($shipperMobilePhone)
            ->setShipperName($shipperName)
            ->setShipperName2($shipperName2)
            ->setShipperPhone($shipperPhone)
            ->setShipperZipCode($shipperZipCode)
        ;
    }

    /**
     * Get shipperPreAlert value.
     */
    public function getShipperPreAlert(): int
    {
        return $this->shipperPreAlert;
    }

    /**
     * Set shipperPreAlert value.
     */
    public function setShipperPreAlert(int $shipperPreAlert): self
    {
        // validation for constraint: int
        if (!is_null($shipperPreAlert) && !(is_int($shipperPreAlert) || ctype_digit($shipperPreAlert))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperPreAlert, true), gettype($shipperPreAlert)), __LINE__);
        }
        $this->shipperPreAlert = $shipperPreAlert;

        return $this;
    }

    /**
     * Get shipperAdress1 value.
     */
    public function getShipperAdress1(): ?string
    {
        return $this->shipperAdress1;
    }

    /**
     * Set shipperAdress1 value.
     */
    public function setShipperAdress1(?string $shipperAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAdress1) && !is_string($shipperAdress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress1, true), gettype($shipperAdress1)), __LINE__);
        }
        $this->shipperAdress1 = $shipperAdress1;

        return $this;
    }

    /**
     * Get shipperAdress2 value.
     */
    public function getShipperAdress2(): ?string
    {
        return $this->shipperAdress2;
    }

    /**
     * Set shipperAdress2 value.
     */
    public function setShipperAdress2(?string $shipperAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAdress2) && !is_string($shipperAdress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress2, true), gettype($shipperAdress2)), __LINE__);
        }
        $this->shipperAdress2 = $shipperAdress2;

        return $this;
    }

    /**
     * Get shipperCity value.
     */
    public function getShipperCity(): ?string
    {
        return $this->shipperCity;
    }

    /**
     * Set shipperCity value.
     */
    public function setShipperCity(?string $shipperCity = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCity) && !is_string($shipperCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCity, true), gettype($shipperCity)), __LINE__);
        }
        $this->shipperCity = $shipperCity;

        return $this;
    }

    /**
     * Get shipperCivility value.
     */
    public function getShipperCivility(): ?string
    {
        return $this->shipperCivility;
    }

    /**
     * Set shipperCivility value.
     */
    public function setShipperCivility(?string $shipperCivility = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCivility) && !is_string($shipperCivility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCivility, true), gettype($shipperCivility)), __LINE__);
        }
        $this->shipperCivility = $shipperCivility;

        return $this;
    }

    /**
     * Get shipperContactName value.
     */
    public function getShipperContactName(): ?string
    {
        return $this->shipperContactName;
    }

    /**
     * Set shipperContactName value.
     */
    public function setShipperContactName(?string $shipperContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperContactName) && !is_string($shipperContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperContactName, true), gettype($shipperContactName)), __LINE__);
        }
        $this->shipperContactName = $shipperContactName;

        return $this;
    }

    /**
     * Get shipperCountry value.
     */
    public function getShipperCountry(): ?string
    {
        return $this->shipperCountry;
    }

    /**
     * Set shipperCountry value.
     */
    public function setShipperCountry(?string $shipperCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCountry) && !is_string($shipperCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountry, true), gettype($shipperCountry)), __LINE__);
        }
        $this->shipperCountry = $shipperCountry;

        return $this;
    }

    /**
     * Get shipperCountryName value.
     */
    public function getShipperCountryName(): ?string
    {
        return $this->shipperCountryName;
    }

    /**
     * Set shipperCountryName value.
     */
    public function setShipperCountryName(?string $shipperCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCountryName) && !is_string($shipperCountryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountryName, true), gettype($shipperCountryName)), __LINE__);
        }
        $this->shipperCountryName = $shipperCountryName;

        return $this;
    }

    /**
     * Get shipperEmail value.
     */
    public function getShipperEmail(): ?string
    {
        return $this->shipperEmail;
    }

    /**
     * Set shipperEmail value.
     */
    public function setShipperEmail(?string $shipperEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperEmail) && !is_string($shipperEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperEmail, true), gettype($shipperEmail)), __LINE__);
        }
        $this->shipperEmail = $shipperEmail;

        return $this;
    }

    /**
     * Get shipperMobilePhone value.
     */
    public function getShipperMobilePhone(): ?string
    {
        return $this->shipperMobilePhone;
    }

    /**
     * Set shipperMobilePhone value.
     */
    public function setShipperMobilePhone(?string $shipperMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperMobilePhone) && !is_string($shipperMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperMobilePhone, true), gettype($shipperMobilePhone)), __LINE__);
        }
        $this->shipperMobilePhone = $shipperMobilePhone;

        return $this;
    }

    /**
     * Get shipperName value.
     */
    public function getShipperName(): ?string
    {
        return $this->shipperName;
    }

    /**
     * Set shipperName value.
     */
    public function setShipperName(?string $shipperName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName) && !is_string($shipperName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), gettype($shipperName)), __LINE__);
        }
        $this->shipperName = $shipperName;

        return $this;
    }

    /**
     * Get shipperName2 value.
     */
    public function getShipperName2(): ?string
    {
        return $this->shipperName2;
    }

    /**
     * Set shipperName2 value.
     */
    public function setShipperName2(?string $shipperName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName2) && !is_string($shipperName2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName2, true), gettype($shipperName2)), __LINE__);
        }
        $this->shipperName2 = $shipperName2;

        return $this;
    }

    /**
     * Get shipperPhone value.
     */
    public function getShipperPhone(): ?string
    {
        return $this->shipperPhone;
    }

    /**
     * Set shipperPhone value.
     */
    public function setShipperPhone(?string $shipperPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperPhone) && !is_string($shipperPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperPhone, true), gettype($shipperPhone)), __LINE__);
        }
        $this->shipperPhone = $shipperPhone;

        return $this;
    }

    /**
     * Get shipperZipCode value.
     */
    public function getShipperZipCode(): ?string
    {
        return $this->shipperZipCode;
    }

    /**
     * Set shipperZipCode value.
     */
    public function setShipperZipCode(?string $shipperZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperZipCode) && !is_string($shipperZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperZipCode, true), gettype($shipperZipCode)), __LINE__);
        }
        $this->shipperZipCode = $shipperZipCode;

        return $this;
    }
}
