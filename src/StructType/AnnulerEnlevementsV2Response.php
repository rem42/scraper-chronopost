<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsV2Response.
 */
#[\AllowDynamicProperties]
class AnnulerEnlevementsV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultAnnulerEnlevementV2 $return = null;

    /**
     * Constructor method for annulerEnlevementsV2Response.
     *
     * @uses AnnulerEnlevementsV2Response::setReturn()
     */
    public function __construct(?ResultAnnulerEnlevementV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultAnnulerEnlevementV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultAnnulerEnlevementV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
