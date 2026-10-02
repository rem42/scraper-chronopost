<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse.
 */
#[\AllowDynamicProperties]
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultAnnulerEnlevement $return = null;

    /**
     * Constructor method for annulerEnlevementsResponse.
     *
     * @uses AnnulerEnlevementsResponse::setReturn()
     */
    public function __construct(?ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultAnnulerEnlevement
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
