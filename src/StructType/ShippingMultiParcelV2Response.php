<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV2Response.
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelV2Response.
     *
     * @uses ShippingMultiParcelV2Response::setReturn()
     */
    public function __construct(?ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
