<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType.
 */
#[\AllowDynamicProperties]
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Error $error = null;

    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ShippingInfo $shippingInfo = null;

    /**
     * Constructor method for resultShippingInfo.
     *
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     */
    public function __construct(?Error $error = null, ?ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo)
        ;
    }

    /**
     * Get error value.
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * Set error value.
     */
    public function setError(?Error $error = null): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get shippingInfo value.
     */
    public function getShippingInfo(): ?ShippingInfo
    {
        return $this->shippingInfo;
    }

    /**
     * Set shippingInfo value.
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }
}
