<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationResponse.
 */
#[\AllowDynamicProperties]
class ShippingMultiParcelWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultReservationMultiParcelExpeditionValue $return = null;

    /**
     * Constructor method for shippingMultiParcelWithReservationResponse.
     *
     * @uses ShippingMultiParcelWithReservationResponse::setReturn()
     */
    public function __construct(?ResultReservationMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultReservationMultiParcelExpeditionValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultReservationMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
