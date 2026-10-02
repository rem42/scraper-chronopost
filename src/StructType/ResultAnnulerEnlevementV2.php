<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultAnnulerEnlevementV2 StructType.
 */
#[\AllowDynamicProperties]
class ResultAnnulerEnlevementV2 extends AbstractStructBase
{
    /** The codeErreur */
    protected int $codeErreur;

    /**
     * The statut
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<EsdCancelStatutValue>|null
     */
    protected ?array $statut = null;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * Constructor method for resultAnnulerEnlevementV2.
     *
     * @uses ResultAnnulerEnlevementV2::setCodeErreur()
     * @uses ResultAnnulerEnlevementV2::setStatut()
     * @uses ResultAnnulerEnlevementV2::setErrorMessage()
     *
     * @param array<EsdCancelStatutValue> $statut
     */
    public function __construct(int $codeErreur, ?array $statut = null, ?string $errorMessage = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setStatut($statut)
            ->setErrorMessage($errorMessage)
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
     * Get statut value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<EsdCancelStatutValue>|null
     */
    public function getStatut(): ?array
    {
        return $this->statut ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setStatut method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatut method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatutForArrayConstraintFromSetStatut(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $resultAnnulerEnlevementV2StatutItem) {
            // validation for constraint: itemType
            if (!$resultAnnulerEnlevementV2StatutItem instanceof EsdCancelStatutValue) {
                $invalidValues[] = is_object($resultAnnulerEnlevementV2StatutItem) ? get_class($resultAnnulerEnlevementV2StatutItem) : sprintf('%s(%s)', gettype($resultAnnulerEnlevementV2StatutItem), var_export($resultAnnulerEnlevementV2StatutItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The statut property can only contain items of type \Scraper\ScraperChronopost\StructType\EsdCancelStatutValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set statut value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<EsdCancelStatutValue> $statut
     *
     * @throws \InvalidArgumentException
     */
    public function setStatut(?array $statut = null): self
    {
        // validation for constraint: array
        if ('' !== ($statutArrayErrorMessage = self::validateStatutForArrayConstraintFromSetStatut($statut))) {
            throw new \InvalidArgumentException($statutArrayErrorMessage, __LINE__);
        }

        if (is_null($statut) || (is_array($statut) && empty($statut))) {
            unset($this->statut);
        } else {
            $this->statut = $statut;
        }

        return $this;
    }

    /**
     * Add item to statut value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToStatut(EsdCancelStatutValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof EsdCancelStatutValue) {
            throw new \InvalidArgumentException(sprintf('The statut property can only contain items of type \Scraper\ScraperChronopost\StructType\EsdCancelStatutValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->statut[] = $item;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
