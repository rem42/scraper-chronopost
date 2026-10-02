<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyV2Response.
 */
#[\AllowDynamicProperties]
class ShippingWithESDOnlyV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultReservationExpeditionValue $return = null;

    /**
     * Constructor method for shippingWithESDOnlyV2Response.
     *
     * @uses ShippingWithESDOnlyV2Response::setReturn()
     */
    public function __construct(?ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultReservationExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
