<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEurope StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEurope.
 */
#[\AllowDynamicProperties]
class CreerEnlevementEurope extends AbstractStructBase
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
     * The destinatairesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DestinatairesDpd $destinatairesEsd = null;

    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $locale = null;

    /**
     * Constructor method for creerEnlevementEurope.
     *
     * @uses CreerEnlevementEurope::setHeaderValue()
     * @uses CreerEnlevementEurope::setPassword()
     * @uses CreerEnlevementEurope::setDatePassage()
     * @uses CreerEnlevementEurope::setDonneurDOrdre()
     * @uses CreerEnlevementEurope::setAdresseEnlevement()
     * @uses CreerEnlevementEurope::setDestinatairesEsd()
     * @uses CreerEnlevementEurope::setLocale()
     */
    public function __construct(?HeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?DonneurDOrdre $donneurDOrdre = null, ?AdresseEnlevementV3 $adresseEnlevement = null, ?DestinatairesDpd $destinatairesEsd = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setDestinatairesEsd($destinatairesEsd)
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
     * Get destinatairesEsd value.
     */
    public function getDestinatairesEsd(): ?DestinatairesDpd
    {
        return $this->destinatairesEsd;
    }

    /**
     * Set destinatairesEsd value.
     */
    public function setDestinatairesEsd(?DestinatairesDpd $destinatairesEsd = null): self
    {
        $this->destinatairesEsd = $destinatairesEsd;

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
