<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for recipientValueV2 StructType.
 */
#[\AllowDynamicProperties]
class RecipientValueV2 extends RecipientValue
{
    /**
     * The recipientType
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $recipientType = null;

    /**
     * Constructor method for recipientValueV2.
     *
     * @uses RecipientValueV2::setRecipientType()
     */
    public function __construct(?string $recipientType = null)
    {
        $this
            ->setRecipientType($recipientType)
        ;
    }

    /**
     * Get recipientType value.
     */
    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }

    /**
     * Set recipientType value.
     */
    public function setRecipientType(?string $recipientType = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientType) && !is_string($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientType, true), gettype($recipientType)), __LINE__);
        }
        $this->recipientType = $recipientType;

        return $this;
    }
}
