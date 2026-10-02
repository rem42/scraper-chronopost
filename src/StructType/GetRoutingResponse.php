<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse.
 */
#[\AllowDynamicProperties]
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultGetRouting $return = null;

    /**
     * Constructor method for getRoutingResponse.
     *
     * @uses GetRoutingResponse::setReturn()
     */
    public function __construct(?ResultGetRouting $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultGetRouting
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultGetRouting $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
