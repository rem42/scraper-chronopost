<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for donneurDOrdre StructType.
 */
#[\AllowDynamicProperties]
class DonneurDOrdre extends AbstractStructBase
{
    /**
     * The autreTelephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $autreTelephone = null;

    /**
     * The batiment
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $batiment = null;

    /**
     * The codeCivilite
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeCivilite = null;

    /**
     * The codeNaf
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $codeNaf = null;

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
     * The EMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $EMail = null;

    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $fax = null;

    /**
     * The lieuDit
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $lieuDit = null;

    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $nom = null;

    /**
     * The prenom
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $prenom = null;

    /**
     * The raisonSociale
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $raisonSociale = null;

    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $service = null;

    /**
     * The telephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $telephone = null;

    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $ville = null;

    /**
     * The voie
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $voie = null;

    /**
     * Constructor method for donneurDOrdre.
     *
     * @uses DonneurDOrdre::setAutreTelephone()
     * @uses DonneurDOrdre::setBatiment()
     * @uses DonneurDOrdre::setCodeCivilite()
     * @uses DonneurDOrdre::setCodeNaf()
     * @uses DonneurDOrdre::setCodePays()
     * @uses DonneurDOrdre::setCodePostal()
     * @uses DonneurDOrdre::setEMail()
     * @uses DonneurDOrdre::setFax()
     * @uses DonneurDOrdre::setLieuDit()
     * @uses DonneurDOrdre::setNom()
     * @uses DonneurDOrdre::setPrenom()
     * @uses DonneurDOrdre::setRaisonSociale()
     * @uses DonneurDOrdre::setService()
     * @uses DonneurDOrdre::setTelephone()
     * @uses DonneurDOrdre::setVille()
     * @uses DonneurDOrdre::setVoie()
     */
    public function __construct(?string $autreTelephone = null, ?string $batiment = null, ?string $codeCivilite = null, ?string $codeNaf = null, ?string $codePays = null, ?string $codePostal = null, ?string $eMail = null, ?string $fax = null, ?string $lieuDit = null, ?string $nom = null, ?string $prenom = null, ?string $raisonSociale = null, ?string $service = null, ?string $telephone = null, ?string $ville = null, ?string $voie = null)
    {
        $this
            ->setAutreTelephone($autreTelephone)
            ->setBatiment($batiment)
            ->setCodeCivilite($codeCivilite)
            ->setCodeNaf($codeNaf)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setEMail($eMail)
            ->setFax($fax)
            ->setLieuDit($lieuDit)
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setService($service)
            ->setTelephone($telephone)
            ->setVille($ville)
            ->setVoie($voie)
        ;
    }

    /**
     * Get autreTelephone value.
     */
    public function getAutreTelephone(): ?string
    {
        return $this->autreTelephone;
    }

    /**
     * Set autreTelephone value.
     */
    public function setAutreTelephone(?string $autreTelephone = null): self
    {
        // validation for constraint: string
        if (!is_null($autreTelephone) && !is_string($autreTelephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autreTelephone, true), gettype($autreTelephone)), __LINE__);
        }
        $this->autreTelephone = $autreTelephone;

        return $this;
    }

    /**
     * Get batiment value.
     */
    public function getBatiment(): ?string
    {
        return $this->batiment;
    }

    /**
     * Set batiment value.
     */
    public function setBatiment(?string $batiment = null): self
    {
        // validation for constraint: string
        if (!is_null($batiment) && !is_string($batiment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($batiment, true), gettype($batiment)), __LINE__);
        }
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get codeCivilite value.
     */
    public function getCodeCivilite(): ?string
    {
        return $this->codeCivilite;
    }

    /**
     * Set codeCivilite value.
     */
    public function setCodeCivilite(?string $codeCivilite = null): self
    {
        // validation for constraint: string
        if (!is_null($codeCivilite) && !is_string($codeCivilite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeCivilite, true), gettype($codeCivilite)), __LINE__);
        }
        $this->codeCivilite = $codeCivilite;

        return $this;
    }

    /**
     * Get codeNaf value.
     */
    public function getCodeNaf(): ?string
    {
        return $this->codeNaf;
    }

    /**
     * Set codeNaf value.
     */
    public function setCodeNaf(?string $codeNaf = null): self
    {
        // validation for constraint: string
        if (!is_null($codeNaf) && !is_string($codeNaf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeNaf, true), gettype($codeNaf)), __LINE__);
        }
        $this->codeNaf = $codeNaf;

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
     * Get EMail value.
     */
    public function getEMail(): ?string
    {
        return $this->EMail;
    }

    /**
     * Set EMail value.
     */
    public function setEMail(?string $eMail = null): self
    {
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMail, true), gettype($eMail)), __LINE__);
        }
        $this->EMail = $eMail;

        return $this;
    }

    /**
     * Get fax value.
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * Set fax value.
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get lieuDit value.
     */
    public function getLieuDit(): ?string
    {
        return $this->lieuDit;
    }

    /**
     * Set lieuDit value.
     */
    public function setLieuDit(?string $lieuDit = null): self
    {
        // validation for constraint: string
        if (!is_null($lieuDit) && !is_string($lieuDit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lieuDit, true), gettype($lieuDit)), __LINE__);
        }
        $this->lieuDit = $lieuDit;

        return $this;
    }

    /**
     * Get nom value.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set nom value.
     */
    public function setNom(?string $nom = null): self
    {
        // validation for constraint: string
        if (!is_null($nom) && !is_string($nom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom, true), gettype($nom)), __LINE__);
        }
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get prenom value.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Set prenom value.
     */
    public function setPrenom(?string $prenom = null): self
    {
        // validation for constraint: string
        if (!is_null($prenom) && !is_string($prenom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prenom, true), gettype($prenom)), __LINE__);
        }
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get raisonSociale value.
     */
    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    /**
     * Set raisonSociale value.
     */
    public function setRaisonSociale(?string $raisonSociale = null): self
    {
        // validation for constraint: string
        if (!is_null($raisonSociale) && !is_string($raisonSociale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raisonSociale, true), gettype($raisonSociale)), __LINE__);
        }
        $this->raisonSociale = $raisonSociale;

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

    /**
     * Get telephone value.
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * Set telephone value.
     */
    public function setTelephone(?string $telephone = null): self
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephone, true), gettype($telephone)), __LINE__);
        }
        $this->telephone = $telephone;

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

    /**
     * Get voie value.
     */
    public function getVoie(): ?string
    {
        return $this->voie;
    }

    /**
     * Set voie value.
     */
    public function setVoie(?string $voie = null): self
    {
        // validation for constraint: string
        if (!is_null($voie) && !is_string($voie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voie, true), gettype($voie)), __LINE__);
        }
        $this->voie = $voie;

        return $this;
    }
}
