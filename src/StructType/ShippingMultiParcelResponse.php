<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelResponse.
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelResponse.
     *
     * @uses ShippingMultiParcelResponse::setReturn()
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
