<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response.
 */
#[\AllowDynamicProperties]
class ShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultExpeditionValueV3 $return = null;

    /**
     * Constructor method for shippingV6Response.
     *
     * @uses ShippingV6Response::setReturn()
     */
    public function __construct(?ResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultExpeditionValueV3
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultExpeditionValueV3 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
