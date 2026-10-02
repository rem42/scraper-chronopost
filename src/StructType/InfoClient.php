<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoClient StructType.
 */
#[\AllowDynamicProperties]
class InfoClient extends AbstractStructBase
{
    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $contenu = null;

    /**
     * The devise
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $devise = null;

    /**
     * The montant
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $montant = null;

    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $refEsdClient = null;

    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $service = null;

    /**
     * Constructor method for infoClient.
     *
     * @uses InfoClient::setContenu()
     * @uses InfoClient::setDevise()
     * @uses InfoClient::setMontant()
     * @uses InfoClient::setRefEsdClient()
     * @uses InfoClient::setService()
     */
    public function __construct(?string $contenu = null, ?string $devise = null, ?float $montant = null, ?string $refEsdClient = null, ?string $service = null)
    {
        $this
            ->setContenu($contenu)
            ->setDevise($devise)
            ->setMontant($montant)
            ->setRefEsdClient($refEsdClient)
            ->setService($service)
        ;
    }

    /**
     * Get contenu value.
     */
    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    /**
     * Set contenu value.
     */
    public function setContenu(?string $contenu = null): self
    {
        // validation for constraint: string
        if (!is_null($contenu) && !is_string($contenu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contenu, true), gettype($contenu)), __LINE__);
        }
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get devise value.
     */
    public function getDevise(): ?string
    {
        return $this->devise;
    }

    /**
     * Set devise value.
     */
    public function setDevise(?string $devise = null): self
    {
        // validation for constraint: string
        if (!is_null($devise) && !is_string($devise)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devise, true), gettype($devise)), __LINE__);
        }
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get montant value.
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * Set montant value.
     */
    public function setMontant(?float $montant = null): self
    {
        // validation for constraint: float
        if (!is_null($montant) && !(is_float($montant) || is_numeric($montant))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($montant, true), gettype($montant)), __LINE__);
        }
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get refEsdClient value.
     */
    public function getRefEsdClient(): ?string
    {
        return $this->refEsdClient;
    }

    /**
     * Set refEsdClient value.
     */
    public function setRefEsdClient(?string $refEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;

        return $this;
    }

    /**
     * Get service value.
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * Set service value.
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;

        return $this;
    }
}
