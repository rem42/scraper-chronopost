<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementV2.
 */
#[\AllowDynamicProperties]
class RechercherContraintesEnlevementV2 extends AbstractStructBase
{
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $country = null;

    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $city = null;

    /**
     * The bu
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $bu = null;

    /**
     * The account
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $account = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * Constructor method for rechercherContraintesEnlevementV2.
     *
     * @uses RechercherContraintesEnlevementV2::setCountry()
     * @uses RechercherContraintesEnlevementV2::setZipCode()
     * @uses RechercherContraintesEnlevementV2::setCity()
     * @uses RechercherContraintesEnlevementV2::setBu()
     * @uses RechercherContraintesEnlevementV2::setAccount()
     * @uses RechercherContraintesEnlevementV2::setPassword()
     */
    public function __construct(?string $country = null, ?string $zipCode = null, ?string $city = null, ?string $bu = null, ?string $account = null, ?string $password = null)
    {
        $this
            ->setCountry($country)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setBu($bu)
            ->setAccount($account)
            ->setPassword($password)
        ;
    }

    /**
     * Get country value.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Set country value.
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;

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
     * Get city value.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city value.
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;

        return $this;
    }

    /**
     * Get bu value.
     */
    public function getBu(): ?string
    {
        return $this->bu;
    }

    /**
     * Set bu value.
     */
    public function setBu(?string $bu = null): self
    {
        // validation for constraint: string
        if (!is_null($bu) && !is_string($bu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bu, true), gettype($bu)), __LINE__);
        }
        $this->bu = $bu;

        return $this;
    }

    /**
     * Get account value.
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * Set account value.
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;

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
}
