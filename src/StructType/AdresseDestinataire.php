<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseDestinataire StructType.
 */
#[\AllowDynamicProperties]
class AdresseDestinataire extends AbstractStructBase
{
    /**
     * The adresse
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $adresse = null;

    /**
     * The adresseSuite
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $adresseSuite = null;

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
     * The digicode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $digicode = null;

    /**
     * The etage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $etage = null;

    /**
     * The mail
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $mail = null;

    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $nom = null;

    /**
     * The poids
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $poids = null;

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
     * The referenceDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $referenceDestinataire = null;

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
     * Constructor method for adresseDestinataire.
     *
     * @uses AdresseDestinataire::setAdresse()
     * @uses AdresseDestinataire::setAdresseSuite()
     * @uses AdresseDestinataire::setCodePays()
     * @uses AdresseDestinataire::setCodePostal()
     * @uses AdresseDestinataire::setDigicode()
     * @uses AdresseDestinataire::setEtage()
     * @uses AdresseDestinataire::setMail()
     * @uses AdresseDestinataire::setNom()
     * @uses AdresseDestinataire::setPoids()
     * @uses AdresseDestinataire::setPrenom()
     * @uses AdresseDestinataire::setRaisonSociale()
     * @uses AdresseDestinataire::setReferenceDestinataire()
     * @uses AdresseDestinataire::setTelephone()
     * @uses AdresseDestinataire::setVille()
     */
    public function __construct(?string $adresse = null, ?string $adresseSuite = null, ?string $codePays = null, ?string $codePostal = null, ?string $digicode = null, ?string $etage = null, ?string $mail = null, ?string $nom = null, ?float $poids = null, ?string $prenom = null, ?string $raisonSociale = null, ?string $referenceDestinataire = null, ?string $telephone = null, ?string $ville = null)
    {
        $this
            ->setAdresse($adresse)
            ->setAdresseSuite($adresseSuite)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setDigicode($digicode)
            ->setEtage($etage)
            ->setMail($mail)
            ->setNom($nom)
            ->setPoids($poids)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setReferenceDestinataire($referenceDestinataire)
            ->setTelephone($telephone)
            ->setVille($ville)
        ;
    }

    /**
     * Get adresse value.
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * Set adresse value.
     */
    public function setAdresse(?string $adresse = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse) && !is_string($adresse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse, true), gettype($adresse)), __LINE__);
        }
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresseSuite value.
     */
    public function getAdresseSuite(): ?string
    {
        return $this->adresseSuite;
    }

    /**
     * Set adresseSuite value.
     */
    public function setAdresseSuite(?string $adresseSuite = null): self
    {
        // validation for constraint: string
        if (!is_null($adresseSuite) && !is_string($adresseSuite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresseSuite, true), gettype($adresseSuite)), __LINE__);
        }
        $this->adresseSuite = $adresseSuite;

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
     * Get digicode value.
     */
    public function getDigicode(): ?string
    {
        return $this->digicode;
    }

    /**
     * Set digicode value.
     */
    public function setDigicode(?string $digicode = null): self
    {
        // validation for constraint: string
        if (!is_null($digicode) && !is_string($digicode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode, true), gettype($digicode)), __LINE__);
        }
        $this->digicode = $digicode;

        return $this;
    }

    /**
     * Get etage value.
     */
    public function getEtage(): ?string
    {
        return $this->etage;
    }

    /**
     * Set etage value.
     */
    public function setEtage(?string $etage = null): self
    {
        // validation for constraint: string
        if (!is_null($etage) && !is_string($etage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etage, true), gettype($etage)), __LINE__);
        }
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get mail value.
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * Set mail value.
     */
    public function setMail(?string $mail = null): self
    {
        // validation for constraint: string
        if (!is_null($mail) && !is_string($mail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mail, true), gettype($mail)), __LINE__);
        }
        $this->mail = $mail;

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
     * Get poids value.
     */
    public function getPoids(): ?float
    {
        return $this->poids;
    }

    /**
     * Set poids value.
     */
    public function setPoids(?float $poids = null): self
    {
        // validation for constraint: float
        if (!is_null($poids) && !(is_float($poids) || is_numeric($poids))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($poids, true), gettype($poids)), __LINE__);
        }
        $this->poids = $poids;

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
     * Get referenceDestinataire value.
     */
    public function getReferenceDestinataire(): ?string
    {
        return $this->referenceDestinataire;
    }

    /**
     * Set referenceDestinataire value.
     */
    public function setReferenceDestinataire(?string $referenceDestinataire = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceDestinataire) && !is_string($referenceDestinataire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceDestinataire, true), gettype($referenceDestinataire)), __LINE__);
        }
        $this->referenceDestinataire = $referenceDestinataire;

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
}
