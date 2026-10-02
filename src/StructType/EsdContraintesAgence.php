<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdContraintesAgence StructType.
 */
#[\AllowDynamicProperties]
class EsdContraintesAgence extends AbstractStructBase
{
    /** The zoneA */
    protected bool $zoneA;

    /**
     * The battement
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?int $battement = null;

    /**
     * The battementEnHeure
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $battementEnHeure = null;

    /**
     * The codeAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeAgence = null;

    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codePays = null;

    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codePostal = null;

    /**
     * The hla
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hla = null;

    /**
     * The hlp
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hlp = null;

    /**
     * The hppt
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hppt = null;

    /**
     * The nomAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $nomAgence = null;

    /**
     * The raisonNonActivite
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $raisonNonActivite = null;

    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ville = null;

    /**
     * Constructor method for esdContraintesAgence.
     *
     * @uses EsdContraintesAgence::setZoneA()
     * @uses EsdContraintesAgence::setBattement()
     * @uses EsdContraintesAgence::setBattementEnHeure()
     * @uses EsdContraintesAgence::setCodeAgence()
     * @uses EsdContraintesAgence::setCodePays()
     * @uses EsdContraintesAgence::setCodePostal()
     * @uses EsdContraintesAgence::setHla()
     * @uses EsdContraintesAgence::setHlp()
     * @uses EsdContraintesAgence::setHppt()
     * @uses EsdContraintesAgence::setNomAgence()
     * @uses EsdContraintesAgence::setRaisonNonActivite()
     * @uses EsdContraintesAgence::setVille()
     */
    public function __construct(bool $zoneA, ?int $battement = null, ?string $battementEnHeure = null, ?string $codeAgence = null, ?string $codePays = null, ?string $codePostal = null, ?string $hla = null, ?string $hlp = null, ?string $hppt = null, ?string $nomAgence = null, ?string $raisonNonActivite = null, ?string $ville = null)
    {
        $this
            ->setZoneA($zoneA)
            ->setBattement($battement)
            ->setBattementEnHeure($battementEnHeure)
            ->setCodeAgence($codeAgence)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setHla($hla)
            ->setHlp($hlp)
            ->setHppt($hppt)
            ->setNomAgence($nomAgence)
            ->setRaisonNonActivite($raisonNonActivite)
            ->setVille($ville)
        ;
    }

    /**
     * Get zoneA value.
     */
    public function getZoneA(): bool
    {
        return $this->zoneA;
    }

    /**
     * Set zoneA value.
     */
    public function setZoneA(bool $zoneA): self
    {
        // validation for constraint: boolean
        if (!is_null($zoneA) && !is_bool($zoneA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zoneA, true), gettype($zoneA)), __LINE__);
        }
        $this->zoneA = $zoneA;

        return $this;
    }

    /**
     * Get battement value.
     */
    public function getBattement(): ?int
    {
        return $this->battement;
    }

    /**
     * Set battement value.
     */
    public function setBattement(?int $battement = null): self
    {
        // validation for constraint: int
        if (!is_null($battement) && !(is_int($battement) || ctype_digit($battement))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($battement, true), gettype($battement)), __LINE__);
        }
        $this->battement = $battement;

        return $this;
    }

    /**
     * Get battementEnHeure value.
     */
    public function getBattementEnHeure(): ?string
    {
        return $this->battementEnHeure;
    }

    /**
     * Set battementEnHeure value.
     */
    public function setBattementEnHeure(?string $battementEnHeure = null): self
    {
        // validation for constraint: string
        if (!is_null($battementEnHeure) && !is_string($battementEnHeure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($battementEnHeure, true), gettype($battementEnHeure)), __LINE__);
        }
        $this->battementEnHeure = $battementEnHeure;

        return $this;
    }

    /**
     * Get codeAgence value.
     */
    public function getCodeAgence(): ?string
    {
        return $this->codeAgence;
    }

    /**
     * Set codeAgence value.
     */
    public function setCodeAgence(?string $codeAgence = null): self
    {
        // validation for constraint: string
        if (!is_null($codeAgence) && !is_string($codeAgence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeAgence, true), gettype($codeAgence)), __LINE__);
        }
        $this->codeAgence = $codeAgence;

        return $this;
    }

    /**
     * Get codePays value.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Set codePays value.
     */
    public function setCodePays(?string $codePays = null): self
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePays, true), gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePostal value.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Set codePostal value.
     */
    public function setCodePostal(?string $codePostal = null): self
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostal, true), gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get hla value.
     */
    public function getHla(): ?string
    {
        return $this->hla;
    }

    /**
     * Set hla value.
     */
    public function setHla(?string $hla = null): self
    {
        // validation for constraint: string
        if (!is_null($hla) && !is_string($hla)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hla, true), gettype($hla)), __LINE__);
        }
        $this->hla = $hla;

        return $this;
    }

    /**
     * Get hlp value.
     */
    public function getHlp(): ?string
    {
        return $this->hlp;
    }

    /**
     * Set hlp value.
     */
    public function setHlp(?string $hlp = null): self
    {
        // validation for constraint: string
        if (!is_null($hlp) && !is_string($hlp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hlp, true), gettype($hlp)), __LINE__);
        }
        $this->hlp = $hlp;

        return $this;
    }

    /**
     * Get hppt value.
     */
    public function getHppt(): ?string
    {
        return $this->hppt;
    }

    /**
     * Set hppt value.
     */
    public function setHppt(?string $hppt = null): self
    {
        // validation for constraint: string
        if (!is_null($hppt) && !is_string($hppt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hppt, true), gettype($hppt)), __LINE__);
        }
        $this->hppt = $hppt;

        return $this;
    }

    /**
     * Get nomAgence value.
     */
    public function getNomAgence(): ?string
    {
        return $this->nomAgence;
    }

    /**
     * Set nomAgence value.
     */
    public function setNomAgence(?string $nomAgence = null): self
    {
        // validation for constraint: string
        if (!is_null($nomAgence) && !is_string($nomAgence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomAgence, true), gettype($nomAgence)), __LINE__);
        }
        $this->nomAgence = $nomAgence;

        return $this;
    }

    /**
     * Get raisonNonActivite value.
     */
    public function getRaisonNonActivite(): ?string
    {
        return $this->raisonNonActivite;
    }

    /**
     * Set raisonNonActivite value.
     */
    public function setRaisonNonActivite(?string $raisonNonActivite = null): self
    {
        // validation for constraint: string
        if (!is_null($raisonNonActivite) && !is_string($raisonNonActivite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raisonNonActivite, true), gettype($raisonNonActivite)), __LINE__);
        }
        $this->raisonNonActivite = $raisonNonActivite;

        return $this;
    }

    /**
     * Get ville value.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Set ville value.
     */
    public function setVille(?string $ville = null): self
    {
        // validation for constraint: string
        if (!is_null($ville) && !is_string($ville)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ville, true), gettype($ville)), __LINE__);
        }
        $this->ville = $ville;

        return $this;
    }
}
