<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse.
 */
#[\AllowDynamicProperties]
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultShippingInfo $return = null;

    /**
     * Constructor method for getShippingInformationResponse.
     *
     * @uses GetShippingInformationResponse::setReturn()
     */
    public function __construct(?ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultShippingInfo
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultShippingInfo $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
