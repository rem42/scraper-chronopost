<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsV2.
 */
#[\AllowDynamicProperties]
class AnnulerEnlevementsV2 extends AbstractStructBase
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
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $locale = null;

    /**
     * The esdNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<string>
     */
    protected ?array $esdNumber = null;

    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $version = null;

    /**
     * Constructor method for annulerEnlevementsV2.
     *
     * @uses AnnulerEnlevementsV2::setAccountNumber()
     * @uses AnnulerEnlevementsV2::setPassword()
     * @uses AnnulerEnlevementsV2::setLocale()
     * @uses AnnulerEnlevementsV2::setEsdNumber()
     * @uses AnnulerEnlevementsV2::setVersion()
     *
     * @param array<string> $esdNumber
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $locale = null, ?array $esdNumber = null, ?string $version = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLocale($locale)
            ->setEsdNumber($esdNumber)
            ->setVersion($version)
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
     * Get locale value.
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * Set locale value.
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get esdNumber value.
     *
     * @return array<string>
     */
    public function getEsdNumber(): ?array
    {
        return $this->esdNumber;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setEsdNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEsdNumber method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEsdNumberForArrayConstraintFromSetEsdNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $annulerEnlevementsV2EsdNumberItem) {
            // validation for constraint: itemType
            if (!is_string($annulerEnlevementsV2EsdNumberItem)) {
                $invalidValues[] = is_object($annulerEnlevementsV2EsdNumberItem) ? get_class($annulerEnlevementsV2EsdNumberItem) : sprintf('%s(%s)', gettype($annulerEnlevementsV2EsdNumberItem), var_export($annulerEnlevementsV2EsdNumberItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The esdNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set esdNumber value.
     *
     * @param array<string> $esdNumber
     *
     * @throws \InvalidArgumentException
     */
    public function setEsdNumber(?array $esdNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($esdNumberArrayErrorMessage = self::validateEsdNumberForArrayConstraintFromSetEsdNumber($esdNumber))) {
            throw new \InvalidArgumentException($esdNumberArrayErrorMessage, __LINE__);
        }
        $this->esdNumber = $esdNumber;

        return $this;
    }

    /**
     * Add item to esdNumber value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToEsdNumber(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The esdNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->esdNumber[] = $item;

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
}
