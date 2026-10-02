<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse.
 */
#[\AllowDynamicProperties]
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultGetReservedSkybillValue $return = null;

    /**
     * Constructor method for getReservedSkybillResponse.
     *
     * @uses GetReservedSkybillResponse::setReturn()
     */
    public function __construct(?ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultGetReservedSkybillValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
