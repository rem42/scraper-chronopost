<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeAuthResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeAuthResponse.
 */
#[\AllowDynamicProperties]
class GetReservedSkybillWithTypeAndModeAuthResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultGetReservedSkybillWithTypeValue $return = null;

    /**
     * Constructor method for getReservedSkybillWithTypeAndModeAuthResponse.
     *
     * @uses GetReservedSkybillWithTypeAndModeAuthResponse::setReturn()
     */
    public function __construct(?ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
