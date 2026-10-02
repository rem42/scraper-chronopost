<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationV2Response.
 */
#[\AllowDynamicProperties]
class ShippingWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultReservationExpeditionValueV2 $return = null;

    /**
     * Constructor method for shippingWithReservationV2Response.
     *
     * @uses ShippingWithReservationV2Response::setReturn()
     */
    public function __construct(?ResultReservationExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultReservationExpeditionValueV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultReservationExpeditionValueV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
