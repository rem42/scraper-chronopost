<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSkybill StructType
 * Meta information extracted from the WSDL
 * - type: tns:getSkybill.
 */
#[\AllowDynamicProperties]
class GetSkybill extends AbstractStructBase
{
    /**
     * The numberSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $numberSearch = null;

    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $mode = null;

    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $key = null;

    /**
     * The account
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $account = null;

    /**
     * Constructor method for getSkybill.
     *
     * @uses GetSkybill::setNumberSearch()
     * @uses GetSkybill::setMode()
     * @uses GetSkybill::setKey()
     * @uses GetSkybill::setAccount()
     */
    public function __construct(?string $numberSearch = null, ?string $mode = null, ?string $key = null, ?string $account = null)
    {
        $this
            ->setNumberSearch($numberSearch)
            ->setMode($mode)
            ->setKey($key)
            ->setAccount($account)
        ;
    }

    /**
     * Get numberSearch value.
     */
    public function getNumberSearch(): ?string
    {
        return $this->numberSearch;
    }

    /**
     * Set numberSearch value.
     */
    public function setNumberSearch(?string $numberSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($numberSearch) && !is_string($numberSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberSearch, true), gettype($numberSearch)), __LINE__);
        }
        $this->numberSearch = $numberSearch;

        return $this;
    }

    /**
     * Get mode value.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Set mode value.
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get key value.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Set key value.
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;

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
}
