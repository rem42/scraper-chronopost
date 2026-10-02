<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformation.
 */
#[\AllowDynamicProperties]
class GetShippingInformation extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?HeaderValue $headerValue = null;

    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ShipperValue $shipperValue = null;

    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?RecipientValue $recipientValue = null;

    /**
     * The skybillValueBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?SkybillValueBase $skybillValueBase = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * Constructor method for getShippingInformation.
     *
     * @uses GetShippingInformation::setHeaderValue()
     * @uses GetShippingInformation::setShipperValue()
     * @uses GetShippingInformation::setRecipientValue()
     * @uses GetShippingInformation::setSkybillValueBase()
     * @uses GetShippingInformation::setPassword()
     */
    public function __construct(?HeaderValue $headerValue = null, ?ShipperValue $shipperValue = null, ?RecipientValue $recipientValue = null, ?SkybillValueBase $skybillValueBase = null, ?string $password = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setRecipientValue($recipientValue)
            ->setSkybillValueBase($skybillValueBase)
            ->setPassword($password)
        ;
    }

    /**
     * Get headerValue value.
     */
    public function getHeaderValue(): ?HeaderValue
    {
        return $this->headerValue;
    }

    /**
     * Set headerValue value.
     */
    public function setHeaderValue(?HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    /**
     * Get shipperValue value.
     */
    public function getShipperValue(): ?ShipperValue
    {
        return $this->shipperValue;
    }

    /**
     * Set shipperValue value.
     */
    public function setShipperValue(?ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;

        return $this;
    }

    /**
     * Get recipientValue value.
     */
    public function getRecipientValue(): ?RecipientValue
    {
        return $this->recipientValue;
    }

    /**
     * Set recipientValue value.
     */
    public function setRecipientValue(?RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;

        return $this;
    }

    /**
     * Get skybillValueBase value.
     */
    public function getSkybillValueBase(): ?SkybillValueBase
    {
        return $this->skybillValueBase;
    }

    /**
     * Set skybillValueBase value.
     */
    public function setSkybillValueBase(?SkybillValueBase $skybillValueBase = null): self
    {
        $this->skybillValueBase = $skybillValueBase;

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
