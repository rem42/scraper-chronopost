<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultPickupOrCollectionRequest StructType.
 */
#[\AllowDynamicProperties]
class ResultPickupOrCollectionRequest extends AbstractStructBase
{
    /** The codeErreur */
    protected int $codeErreur;

    /** The collectionRequest */
    protected bool $collectionRequest;

    /**
     * The infoEnlevements
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<InfoEnlevement>|null
     */
    protected ?array $infoEnlevements = null;

    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $libelleErreur = null;

    /**
     * Constructor method for resultPickupOrCollectionRequest.
     *
     * @uses ResultPickupOrCollectionRequest::setCodeErreur()
     * @uses ResultPickupOrCollectionRequest::setCollectionRequest()
     * @uses ResultPickupOrCollectionRequest::setInfoEnlevements()
     * @uses ResultPickupOrCollectionRequest::setLibelleErreur()
     *
     * @param array<InfoEnlevement> $infoEnlevements
     */
    public function __construct(int $codeErreur, bool $collectionRequest, ?array $infoEnlevements = null, ?string $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setCollectionRequest($collectionRequest)
            ->setInfoEnlevements($infoEnlevements)
            ->setLibelleErreur($libelleErreur)
        ;
    }

    /**
     * Get codeErreur value.
     */
    public function getCodeErreur(): int
    {
        return $this->codeErreur;
    }

    /**
     * Set codeErreur value.
     */
    public function setCodeErreur(int $codeErreur): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;

        return $this;
    }

    /**
     * Get collectionRequest value.
     */
    public function getCollectionRequest(): bool
    {
        return $this->collectionRequest;
    }

    /**
     * Set collectionRequest value.
     */
    public function setCollectionRequest(bool $collectionRequest): self
    {
        // validation for constraint: boolean
        if (!is_null($collectionRequest) && !is_bool($collectionRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectionRequest, true), gettype($collectionRequest)), __LINE__);
        }
        $this->collectionRequest = $collectionRequest;

        return $this;
    }

    /**
     * Get infoEnlevements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<InfoEnlevement>|null
     */
    public function getInfoEnlevements(): ?array
    {
        return $this->infoEnlevements ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setInfoEnlevements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoEnlevements method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoEnlevementsForArrayConstraintFromSetInfoEnlevements(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $resultPickupOrCollectionRequestInfoEnlevementsItem) {
            // validation for constraint: itemType
            if (!$resultPickupOrCollectionRequestInfoEnlevementsItem instanceof InfoEnlevement) {
                $invalidValues[] = is_object($resultPickupOrCollectionRequestInfoEnlevementsItem) ? get_class($resultPickupOrCollectionRequestInfoEnlevementsItem) : sprintf('%s(%s)', gettype($resultPickupOrCollectionRequestInfoEnlevementsItem), var_export($resultPickupOrCollectionRequestInfoEnlevementsItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The infoEnlevements property can only contain items of type \Scraper\ScraperChronopost\StructType\InfoEnlevement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set infoEnlevements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<InfoEnlevement> $infoEnlevements
     *
     * @throws \InvalidArgumentException
     */
    public function setInfoEnlevements(?array $infoEnlevements = null): self
    {
        // validation for constraint: array
        if ('' !== ($infoEnlevementsArrayErrorMessage = self::validateInfoEnlevementsForArrayConstraintFromSetInfoEnlevements($infoEnlevements))) {
            throw new \InvalidArgumentException($infoEnlevementsArrayErrorMessage, __LINE__);
        }

        if (is_null($infoEnlevements) || (is_array($infoEnlevements) && empty($infoEnlevements))) {
            unset($this->infoEnlevements);
        } else {
            $this->infoEnlevements = $infoEnlevements;
        }

        return $this;
    }

    /**
     * Add item to infoEnlevements value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToInfoEnlevements(InfoEnlevement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof InfoEnlevement) {
            throw new \InvalidArgumentException(sprintf('The infoEnlevements property can only contain items of type \Scraper\ScraperChronopost\StructType\InfoEnlevement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoEnlevements[] = $item;

        return $this;
    }

    /**
     * Get libelleErreur value.
     */
    public function getLibelleErreur(): ?string
    {
        return $this->libelleErreur;
    }

    /**
     * Set libelleErreur value.
     */
    public function setLibelleErreur(?string $libelleErreur = null): self
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;

        return $this;
    }
}
