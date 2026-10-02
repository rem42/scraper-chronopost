<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7Response.
 */
#[\AllowDynamicProperties]
class ShippingV7Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultMonoParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingV7Response.
     *
     * @uses ShippingV7Response::setReturn()
     */
    public function __construct(?ResultMonoParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultMonoParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultMonoParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
