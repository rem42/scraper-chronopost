<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for adresseEnlevementV2 StructType.
 */
#[\AllowDynamicProperties]
class AdresseEnlevementV2 extends AdresseEnlevement
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $email = null;

    /**
     * Constructor method for adresseEnlevementV2.
     *
     * @uses AdresseEnlevementV2::setEmail()
     */
    public function __construct(?string $email = null)
    {
        $this
            ->setEmail($email)
        ;
    }

    /**
     * Get email value.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email value.
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }
}
