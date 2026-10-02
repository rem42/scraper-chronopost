<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for error StructType.
 */
#[\AllowDynamicProperties]
class Error extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The detail
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Detail $detail = null;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * Constructor method for error.
     *
     * @uses Error::setErrorCode()
     * @uses Error::setDetail()
     * @uses Error::setErrorMessage()
     */
    public function __construct(int $errorCode, ?Detail $detail = null, ?string $errorMessage = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setDetail($detail)
            ->setErrorMessage($errorMessage)
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
     * Get detail value.
     */
    public function getDetail(): ?Detail
    {
        return $this->detail;
    }

    /**
     * Set detail value.
     */
    public function setDetail(?Detail $detail = null): self
    {
        $this->detail = $detail;

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
}
