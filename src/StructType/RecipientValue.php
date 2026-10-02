<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientValue StructType.
 */
#[\AllowDynamicProperties]
class RecipientValue extends AbstractStructBase
{
    /** The recipientPreAlert */
    protected int $recipientPreAlert;

    /**
     * The recipientAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientAdress1 = null;

    /**
     * The recipientAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientAdress2 = null;

    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientCity = null;

    /**
     * The recipientContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientContactName = null;

    /**
     * The recipientCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientCountry = null;

    /**
     * The recipientCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientCountryName = null;

    /**
     * The recipientEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientEmail = null;

    /**
     * The recipientMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientMobilePhone = null;

    /**
     * The recipientName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientName = null;

    /**
     * The recipientName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientName2 = null;

    /**
     * The recipientPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientPhone = null;

    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientZipCode = null;

    /**
     * Constructor method for recipientValue.
     *
     * @uses RecipientValue::setRecipientPreAlert()
     * @uses RecipientValue::setRecipientAdress1()
     * @uses RecipientValue::setRecipientAdress2()
     * @uses RecipientValue::setRecipientCity()
     * @uses RecipientValue::setRecipientContactName()
     * @uses RecipientValue::setRecipientCountry()
     * @uses RecipientValue::setRecipientCountryName()
     * @uses RecipientValue::setRecipientEmail()
     * @uses RecipientValue::setRecipientMobilePhone()
     * @uses RecipientValue::setRecipientName()
     * @uses RecipientValue::setRecipientName2()
     * @uses RecipientValue::setRecipientPhone()
     * @uses RecipientValue::setRecipientZipCode()
     */
    public function __construct(int $recipientPreAlert, ?string $recipientAdress1 = null, ?string $recipientAdress2 = null, ?string $recipientCity = null, ?string $recipientContactName = null, ?string $recipientCountry = null, ?string $recipientCountryName = null, ?string $recipientEmail = null, ?string $recipientMobilePhone = null, ?string $recipientName = null, ?string $recipientName2 = null, ?string $recipientPhone = null, ?string $recipientZipCode = null)
    {
        $this
            ->setRecipientPreAlert($recipientPreAlert)
            ->setRecipientAdress1($recipientAdress1)
            ->setRecipientAdress2($recipientAdress2)
            ->setRecipientCity($recipientCity)
            ->setRecipientContactName($recipientContactName)
            ->setRecipientCountry($recipientCountry)
            ->setRecipientCountryName($recipientCountryName)
            ->setRecipientEmail($recipientEmail)
            ->setRecipientMobilePhone($recipientMobilePhone)
            ->setRecipientName($recipientName)
            ->setRecipientName2($recipientName2)
            ->setRecipientPhone($recipientPhone)
            ->setRecipientZipCode($recipientZipCode)
        ;
    }

    /**
     * Get recipientPreAlert value.
     */
    public function getRecipientPreAlert(): int
    {
        return $this->recipientPreAlert;
    }

    /**
     * Set recipientPreAlert value.
     */
    public function setRecipientPreAlert(int $recipientPreAlert): self
    {
        // validation for constraint: int
        if (!is_null($recipientPreAlert) && !(is_int($recipientPreAlert) || ctype_digit($recipientPreAlert))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recipientPreAlert, true), gettype($recipientPreAlert)), __LINE__);
        }
        $this->recipientPreAlert = $recipientPreAlert;

        return $this;
    }

    /**
     * Get recipientAdress1 value.
     */
    public function getRecipientAdress1(): ?string
    {
        return $this->recipientAdress1;
    }

    /**
     * Set recipientAdress1 value.
     */
    public function setRecipientAdress1(?string $recipientAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress1) && !is_string($recipientAdress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress1, true), gettype($recipientAdress1)), __LINE__);
        }
        $this->recipientAdress1 = $recipientAdress1;

        return $this;
    }

    /**
     * Get recipientAdress2 value.
     */
    public function getRecipientAdress2(): ?string
    {
        return $this->recipientAdress2;
    }

    /**
     * Set recipientAdress2 value.
     */
    public function setRecipientAdress2(?string $recipientAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress2) && !is_string($recipientAdress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress2, true), gettype($recipientAdress2)), __LINE__);
        }
        $this->recipientAdress2 = $recipientAdress2;

        return $this;
    }

    /**
     * Get recipientCity value.
     */
    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }

    /**
     * Set recipientCity value.
     */
    public function setRecipientCity(?string $recipientCity = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;

        return $this;
    }

    /**
     * Get recipientContactName value.
     */
    public function getRecipientContactName(): ?string
    {
        return $this->recipientContactName;
    }

    /**
     * Set recipientContactName value.
     */
    public function setRecipientContactName(?string $recipientContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientContactName) && !is_string($recipientContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientContactName, true), gettype($recipientContactName)), __LINE__);
        }
        $this->recipientContactName = $recipientContactName;

        return $this;
    }

    /**
     * Get recipientCountry value.
     */
    public function getRecipientCountry(): ?string
    {
        return $this->recipientCountry;
    }

    /**
     * Set recipientCountry value.
     */
    public function setRecipientCountry(?string $recipientCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountry) && !is_string($recipientCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountry, true), gettype($recipientCountry)), __LINE__);
        }
        $this->recipientCountry = $recipientCountry;

        return $this;
    }

    /**
     * Get recipientCountryName value.
     */
    public function getRecipientCountryName(): ?string
    {
        return $this->recipientCountryName;
    }

    /**
     * Set recipientCountryName value.
     */
    public function setRecipientCountryName(?string $recipientCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountryName) && !is_string($recipientCountryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountryName, true), gettype($recipientCountryName)), __LINE__);
        }
        $this->recipientCountryName = $recipientCountryName;

        return $this;
    }

    /**
     * Get recipientEmail value.
     */
    public function getRecipientEmail(): ?string
    {
        return $this->recipientEmail;
    }

    /**
     * Set recipientEmail value.
     */
    public function setRecipientEmail(?string $recipientEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientEmail) && !is_string($recipientEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientEmail, true), gettype($recipientEmail)), __LINE__);
        }
        $this->recipientEmail = $recipientEmail;

        return $this;
    }

    /**
     * Get recipientMobilePhone value.
     */
    public function getRecipientMobilePhone(): ?string
    {
        return $this->recipientMobilePhone;
    }

    /**
     * Set recipientMobilePhone value.
     */
    public function setRecipientMobilePhone(?string $recipientMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientMobilePhone) && !is_string($recipientMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientMobilePhone, true), gettype($recipientMobilePhone)), __LINE__);
        }
        $this->recipientMobilePhone = $recipientMobilePhone;

        return $this;
    }

    /**
     * Get recipientName value.
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }

    /**
     * Set recipientName value.
     */
    public function setRecipientName(?string $recipientName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName, true), gettype($recipientName)), __LINE__);
        }
        $this->recipientName = $recipientName;

        return $this;
    }

    /**
     * Get recipientName2 value.
     */
    public function getRecipientName2(): ?string
    {
        return $this->recipientName2;
    }

    /**
     * Set recipientName2 value.
     */
    public function setRecipientName2(?string $recipientName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName2) && !is_string($recipientName2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName2, true), gettype($recipientName2)), __LINE__);
        }
        $this->recipientName2 = $recipientName2;

        return $this;
    }

    /**
     * Get recipientPhone value.
     */
    public function getRecipientPhone(): ?string
    {
        return $this->recipientPhone;
    }

    /**
     * Set recipientPhone value.
     */
    public function setRecipientPhone(?string $recipientPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientPhone) && !is_string($recipientPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientPhone, true), gettype($recipientPhone)), __LINE__);
        }
        $this->recipientPhone = $recipientPhone;

        return $this;
    }

    /**
     * Get recipientZipCode value.
     */
    public function getRecipientZipCode(): ?string
    {
        return $this->recipientZipCode;
    }

    /**
     * Set recipientZipCode value.
     */
    public function setRecipientZipCode(?string $recipientZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;

        return $this;
    }
}
