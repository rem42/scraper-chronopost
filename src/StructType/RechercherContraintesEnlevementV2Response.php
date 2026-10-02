<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementV2Response.
 */
#[\AllowDynamicProperties]
class RechercherContraintesEnlevementV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?EsdResultContraintesAgenceValue $return = null;

    /**
     * Constructor method for rechercherContraintesEnlevementV2Response.
     *
     * @uses RechercherContraintesEnlevementV2Response::setReturn()
     */
    public function __construct(?EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?EsdResultContraintesAgenceValue
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?EsdResultContraintesAgenceValue $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
