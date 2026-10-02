<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevement StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevement.
 */
#[\AllowDynamicProperties]
class RechercherContraintesEnlevement extends AbstractStructBase
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
     * Constructor method for rechercherContraintesEnlevement.
     *
     * @uses RechercherContraintesEnlevement::setCountry()
     * @uses RechercherContraintesEnlevement::setZipCode()
     * @uses RechercherContraintesEnlevement::setCity()
     */
    public function __construct(?string $country = null, ?string $zipCode = null, ?string $city = null)
    {
        $this
            ->setCountry($country)
            ->setZipCode($zipCode)
            ->setCity($city)
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
}
