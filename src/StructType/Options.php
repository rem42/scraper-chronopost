<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for options StructType.
 */
#[\AllowDynamicProperties]
class Options extends AbstractStructBase
{
    /** The aviserSurRealisation */
    protected bool $aviserSurRealisation;

    /** The chezUnTiers */
    protected bool $chezUnTiers;

    /** The envoyerLtParMail */
    protected bool $envoyerLtParMail;

    /** The LTaImprimerParChronopost */
    protected bool $LTaImprimerParChronopost;

    /**
     * Constructor method for options.
     *
     * @uses Options::setAviserSurRealisation()
     * @uses Options::setChezUnTiers()
     * @uses Options::setEnvoyerLtParMail()
     * @uses Options::setLTaImprimerParChronopost()
     */
    public function __construct(bool $aviserSurRealisation, bool $chezUnTiers, bool $envoyerLtParMail, bool $lTaImprimerParChronopost)
    {
        $this
            ->setAviserSurRealisation($aviserSurRealisation)
            ->setChezUnTiers($chezUnTiers)
            ->setEnvoyerLtParMail($envoyerLtParMail)
            ->setLTaImprimerParChronopost($lTaImprimerParChronopost)
        ;
    }

    /**
     * Get aviserSurRealisation value.
     */
    public function getAviserSurRealisation(): bool
    {
        return $this->aviserSurRealisation;
    }

    /**
     * Set aviserSurRealisation value.
     */
    public function setAviserSurRealisation(bool $aviserSurRealisation): self
    {
        // validation for constraint: boolean
        if (!is_null($aviserSurRealisation) && !is_bool($aviserSurRealisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aviserSurRealisation, true), gettype($aviserSurRealisation)), __LINE__);
        }
        $this->aviserSurRealisation = $aviserSurRealisation;

        return $this;
    }

    /**
     * Get chezUnTiers value.
     */
    public function getChezUnTiers(): bool
    {
        return $this->chezUnTiers;
    }

    /**
     * Set chezUnTiers value.
     */
    public function setChezUnTiers(bool $chezUnTiers): self
    {
        // validation for constraint: boolean
        if (!is_null($chezUnTiers) && !is_bool($chezUnTiers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chezUnTiers, true), gettype($chezUnTiers)), __LINE__);
        }
        $this->chezUnTiers = $chezUnTiers;

        return $this;
    }

    /**
     * Get envoyerLtParMail value.
     */
    public function getEnvoyerLtParMail(): bool
    {
        return $this->envoyerLtParMail;
    }

    /**
     * Set envoyerLtParMail value.
     */
    public function setEnvoyerLtParMail(bool $envoyerLtParMail): self
    {
        // validation for constraint: boolean
        if (!is_null($envoyerLtParMail) && !is_bool($envoyerLtParMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($envoyerLtParMail, true), gettype($envoyerLtParMail)), __LINE__);
        }
        $this->envoyerLtParMail = $envoyerLtParMail;

        return $this;
    }

    /**
     * Get LTaImprimerParChronopost value.
     */
    public function getLTaImprimerParChronopost(): bool
    {
        return $this->LTaImprimerParChronopost;
    }

    /**
     * Set LTaImprimerParChronopost value.
     */
    public function setLTaImprimerParChronopost(bool $lTaImprimerParChronopost): self
    {
        // validation for constraint: boolean
        if (!is_null($lTaImprimerParChronopost) && !is_bool($lTaImprimerParChronopost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lTaImprimerParChronopost, true), gettype($lTaImprimerParChronopost)), __LINE__);
        }
        $this->LTaImprimerParChronopost = $lTaImprimerParChronopost;

        return $this;
    }
}
