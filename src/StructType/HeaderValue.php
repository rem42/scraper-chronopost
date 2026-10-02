<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for headerValue StructType.
 */
#[\AllowDynamicProperties]
class HeaderValue extends AbstractStructBase
{
    /** The accountNumber */
    protected int $accountNumber;

    /** The subAccount */
    protected int $subAccount;

    /**
     * The idEmit
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $idEmit = null;

    /**
     * The identWebPro
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $identWebPro = null;

    /**
     * Constructor method for headerValue.
     *
     * @uses HeaderValue::setAccountNumber()
     * @uses HeaderValue::setSubAccount()
     * @uses HeaderValue::setIdEmit()
     * @uses HeaderValue::setIdentWebPro()
     */
    public function __construct(int $accountNumber, int $subAccount, ?string $idEmit = null, ?string $identWebPro = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setSubAccount($subAccount)
            ->setIdEmit($idEmit)
            ->setIdentWebPro($identWebPro)
        ;
    }

    /**
     * Get accountNumber value.
     */
    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value.
     */
    public function setAccountNumber(int $accountNumber): self
    {
        // validation for constraint: int
        if (!is_null($accountNumber) && !(is_int($accountNumber) || ctype_digit($accountNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get subAccount value.
     */
    public function getSubAccount(): int
    {
        return $this->subAccount;
    }

    /**
     * Set subAccount value.
     */
    public function setSubAccount(int $subAccount): self
    {
        // validation for constraint: int
        if (!is_null($subAccount) && !(is_int($subAccount) || ctype_digit($subAccount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subAccount, true), gettype($subAccount)), __LINE__);
        }
        $this->subAccount = $subAccount;

        return $this;
    }

    /**
     * Get idEmit value.
     */
    public function getIdEmit(): ?string
    {
        return $this->idEmit;
    }

    /**
     * Set idEmit value.
     */
    public function setIdEmit(?string $idEmit = null): self
    {
        // validation for constraint: string
        if (!is_null($idEmit) && !is_string($idEmit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idEmit, true), gettype($idEmit)), __LINE__);
        }
        $this->idEmit = $idEmit;

        return $this;
    }

    /**
     * Get identWebPro value.
     */
    public function getIdentWebPro(): ?string
    {
        return $this->identWebPro;
    }

    /**
     * Set identWebPro value.
     */
    public function setIdentWebPro(?string $identWebPro = null): self
    {
        // validation for constraint: string
        if (!is_null($identWebPro) && !is_string($identWebPro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identWebPro, true), gettype($identWebPro)), __LINE__);
        }
        $this->identWebPro = $identWebPro;

        return $this;
    }
}
