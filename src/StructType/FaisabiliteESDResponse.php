<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse.
 */
#[\AllowDynamicProperties]
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultFaisabiliteESD $return = null;

    /**
     * Constructor method for faisabiliteESDResponse.
     *
     * @uses FaisabiliteESDResponse::setReturn()
     */
    public function __construct(?ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultFaisabiliteESD
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
