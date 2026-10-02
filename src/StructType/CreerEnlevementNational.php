<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNational StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNational.
 */
#[\AllowDynamicProperties]
class CreerEnlevementNational extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?HeaderValue $headerValue = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $datePassage = null;

    /**
     * The datePassageFermeture
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $datePassageFermeture = null;

    /**
     * The donneurDOrdre
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DonneurDOrdre $donneurDOrdre = null;

    /**
     * The adresseEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?AdresseEnlevementV3 $adresseEnlevement = null;

    /**
     * The particulartiesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ParticularitesEsd $particulartiesEsd = null;

    /**
     * The referenceEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $referenceEsdClient = null;

    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $contenu = null;

    /**
     * The options
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Options $options = null;

    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $locale = null;

    /**
     * Constructor method for creerEnlevementNational.
     *
     * @uses CreerEnlevementNational::setHeaderValue()
     * @uses CreerEnlevementNational::setPassword()
     * @uses CreerEnlevementNational::setDatePassage()
     * @uses CreerEnlevementNational::setDatePassageFermeture()
     * @uses CreerEnlevementNational::setDonneurDOrdre()
     * @uses CreerEnlevementNational::setAdresseEnlevement()
     * @uses CreerEnlevementNational::setParticulartiesEsd()
     * @uses CreerEnlevementNational::setReferenceEsdClient()
     * @uses CreerEnlevementNational::setContenu()
     * @uses CreerEnlevementNational::setOptions()
     * @uses CreerEnlevementNational::setLocale()
     */
    public function __construct(?HeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?string $datePassageFermeture = null, ?DonneurDOrdre $donneurDOrdre = null, ?AdresseEnlevementV3 $adresseEnlevement = null, ?ParticularitesEsd $particulartiesEsd = null, ?string $referenceEsdClient = null, ?string $contenu = null, ?Options $options = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDatePassageFermeture($datePassageFermeture)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setParticulartiesEsd($particulartiesEsd)
            ->setReferenceEsdClient($referenceEsdClient)
            ->setContenu($contenu)
            ->setOptions($options)
            ->setLocale($locale)
        ;
    }

    /**
     * Get headerValue value.
     */
    public function getHeaderValue(): ?HeaderValue
    {
        return $this->headerValue;
    }

    /**
     * Set headerValue value.
     */
    public function setHeaderValue(?HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    /**
     * Get password value.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value.
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;

        return $this;
    }

    /**
     * Get datePassage value.
     */
    public function getDatePassage(): ?string
    {
        return $this->datePassage;
    }

    /**
     * Set datePassage value.
     */
    public function setDatePassage(?string $datePassage = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassage) && !is_string($datePassage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassage, true), gettype($datePassage)), __LINE__);
        }
        $this->datePassage = $datePassage;

        return $this;
    }

    /**
     * Get datePassageFermeture value.
     */
    public function getDatePassageFermeture(): ?string
    {
        return $this->datePassageFermeture;
    }

    /**
     * Set datePassageFermeture value.
     */
    public function setDatePassageFermeture(?string $datePassageFermeture = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassageFermeture) && !is_string($datePassageFermeture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassageFermeture, true), gettype($datePassageFermeture)), __LINE__);
        }
        $this->datePassageFermeture = $datePassageFermeture;

        return $this;
    }

    /**
     * Get donneurDOrdre value.
     */
    public function getDonneurDOrdre(): ?DonneurDOrdre
    {
        return $this->donneurDOrdre;
    }

    /**
     * Set donneurDOrdre value.
     */
    public function setDonneurDOrdre(?DonneurDOrdre $donneurDOrdre = null): self
    {
        $this->donneurDOrdre = $donneurDOrdre;

        return $this;
    }

    /**
     * Get adresseEnlevement value.
     */
    public function getAdresseEnlevement(): ?AdresseEnlevementV3
    {
        return $this->adresseEnlevement;
    }

    /**
     * Set adresseEnlevement value.
     */
    public function setAdresseEnlevement(?AdresseEnlevementV3 $adresseEnlevement = null): self
    {
        $this->adresseEnlevement = $adresseEnlevement;

        return $this;
    }

    /**
     * Get particulartiesEsd value.
     */
    public function getParticulartiesEsd(): ?ParticularitesEsd
    {
        return $this->particulartiesEsd;
    }

    /**
     * Set particulartiesEsd value.
     */
    public function setParticulartiesEsd(?ParticularitesEsd $particulartiesEsd = null): self
    {
        $this->particulartiesEsd = $particulartiesEsd;

        return $this;
    }

    /**
     * Get referenceEsdClient value.
     */
    public function getReferenceEsdClient(): ?string
    {
        return $this->referenceEsdClient;
    }

    /**
     * Set referenceEsdClient value.
     */
    public function setReferenceEsdClient(?string $referenceEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceEsdClient) && !is_string($referenceEsdClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceEsdClient, true), gettype($referenceEsdClient)), __LINE__);
        }
        $this->referenceEsdClient = $referenceEsdClient;

        return $this;
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
     * Get options value.
     */
    public function getOptions(): ?Options
    {
        return $this->options;
    }

    /**
     * Set options value.
     */
    public function setOptions(?Options $options = null): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get locale value.
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * Set locale value.
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;

        return $this;
    }
}
