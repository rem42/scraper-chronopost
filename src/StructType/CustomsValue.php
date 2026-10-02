<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customsValue StructType.
 */
#[\AllowDynamicProperties]
class CustomsValue extends AbstractStructBase
{
    /**
     * The articlesValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<ArticleValue>|null
     */
    protected ?array $articlesValue = null;

    /**
     * The bagNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $bagNumber = null;

    /**
     * The clearanceCleared
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $clearanceCleared = null;

    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $currency = null;

    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $description = null;

    /**
     * The descriptionInLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $descriptionInLanguage = null;

    /**
     * The eori
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $eori = null;

    /**
     * The incoterm
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $incoterm = null;

    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $language = null;

    /**
     * The numberOfItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?int $numberOfItems = null;

    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $value = null;

    /**
     * The vatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $vatNumber = null;

    /**
     * Constructor method for customsValue.
     *
     * @uses CustomsValue::setArticlesValue()
     * @uses CustomsValue::setBagNumber()
     * @uses CustomsValue::setClearanceCleared()
     * @uses CustomsValue::setCurrency()
     * @uses CustomsValue::setDescription()
     * @uses CustomsValue::setDescriptionInLanguage()
     * @uses CustomsValue::setEori()
     * @uses CustomsValue::setIncoterm()
     * @uses CustomsValue::setLanguage()
     * @uses CustomsValue::setNumberOfItems()
     * @uses CustomsValue::setValue()
     * @uses CustomsValue::setVatNumber()
     *
     * @param array<ArticleValue> $articlesValue
     */
    public function __construct(?array $articlesValue = null, ?string $bagNumber = null, ?string $clearanceCleared = null, ?string $currency = null, ?string $description = null, ?string $descriptionInLanguage = null, ?string $eori = null, ?string $incoterm = null, ?string $language = null, ?int $numberOfItems = null, ?float $value = null, ?string $vatNumber = null)
    {
        $this
            ->setArticlesValue($articlesValue)
            ->setBagNumber($bagNumber)
            ->setClearanceCleared($clearanceCleared)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setDescriptionInLanguage($descriptionInLanguage)
            ->setEori($eori)
            ->setIncoterm($incoterm)
            ->setLanguage($language)
            ->setNumberOfItems($numberOfItems)
            ->setValue($value)
            ->setVatNumber($vatNumber)
        ;
    }

    /**
     * Get articlesValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<ArticleValue>|null
     */
    public function getArticlesValue(): ?array
    {
        return $this->articlesValue ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setArticlesValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArticlesValue method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArticlesValueForArrayConstraintFromSetArticlesValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $customsValueArticlesValueItem) {
            // validation for constraint: itemType
            if (!$customsValueArticlesValueItem instanceof ArticleValue) {
                $invalidValues[] = is_object($customsValueArticlesValueItem) ? get_class($customsValueArticlesValueItem) : sprintf('%s(%s)', gettype($customsValueArticlesValueItem), var_export($customsValueArticlesValueItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The articlesValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ArticleValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set articlesValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<ArticleValue> $articlesValue
     *
     * @throws \InvalidArgumentException
     */
    public function setArticlesValue(?array $articlesValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($articlesValueArrayErrorMessage = self::validateArticlesValueForArrayConstraintFromSetArticlesValue($articlesValue))) {
            throw new \InvalidArgumentException($articlesValueArrayErrorMessage, __LINE__);
        }

        if (is_null($articlesValue) || (is_array($articlesValue) && empty($articlesValue))) {
            unset($this->articlesValue);
        } else {
            $this->articlesValue = $articlesValue;
        }

        return $this;
    }

    /**
     * Add item to articlesValue value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToArticlesValue(ArticleValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ArticleValue) {
            throw new \InvalidArgumentException(sprintf('The articlesValue property can only contain items of type \Scraper\ScraperChronopost\StructType\ArticleValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->articlesValue[] = $item;

        return $this;
    }

    /**
     * Get bagNumber value.
     */
    public function getBagNumber(): ?string
    {
        return $this->bagNumber;
    }

    /**
     * Set bagNumber value.
     */
    public function setBagNumber(?string $bagNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bagNumber) && !is_string($bagNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bagNumber, true), gettype($bagNumber)), __LINE__);
        }
        $this->bagNumber = $bagNumber;

        return $this;
    }

    /**
     * Get clearanceCleared value.
     */
    public function getClearanceCleared(): ?string
    {
        return $this->clearanceCleared;
    }

    /**
     * Set clearanceCleared value.
     */
    public function setClearanceCleared(?string $clearanceCleared = null): self
    {
        // validation for constraint: string
        if (!is_null($clearanceCleared) && !is_string($clearanceCleared)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clearanceCleared, true), gettype($clearanceCleared)), __LINE__);
        }
        $this->clearanceCleared = $clearanceCleared;

        return $this;
    }

    /**
     * Get currency value.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set currency value.
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get description value.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description value.
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;

        return $this;
    }

    /**
     * Get descriptionInLanguage value.
     */
    public function getDescriptionInLanguage(): ?string
    {
        return $this->descriptionInLanguage;
    }

    /**
     * Set descriptionInLanguage value.
     */
    public function setDescriptionInLanguage(?string $descriptionInLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($descriptionInLanguage) && !is_string($descriptionInLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionInLanguage, true), gettype($descriptionInLanguage)), __LINE__);
        }
        $this->descriptionInLanguage = $descriptionInLanguage;

        return $this;
    }

    /**
     * Get eori value.
     */
    public function getEori(): ?string
    {
        return $this->eori;
    }

    /**
     * Set eori value.
     */
    public function setEori(?string $eori = null): self
    {
        // validation for constraint: string
        if (!is_null($eori) && !is_string($eori)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eori, true), gettype($eori)), __LINE__);
        }
        $this->eori = $eori;

        return $this;
    }

    /**
     * Get incoterm value.
     */
    public function getIncoterm(): ?string
    {
        return $this->incoterm;
    }

    /**
     * Set incoterm value.
     */
    public function setIncoterm(?string $incoterm = null): self
    {
        // validation for constraint: string
        if (!is_null($incoterm) && !is_string($incoterm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incoterm, true), gettype($incoterm)), __LINE__);
        }
        $this->incoterm = $incoterm;

        return $this;
    }

    /**
     * Get language value.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value.
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }

    /**
     * Get numberOfItems value.
     */
    public function getNumberOfItems(): ?int
    {
        return $this->numberOfItems;
    }

    /**
     * Set numberOfItems value.
     */
    public function setNumberOfItems(?int $numberOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !(is_int($numberOfItems) || ctype_digit($numberOfItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfItems, true), gettype($numberOfItems)), __LINE__);
        }
        $this->numberOfItems = $numberOfItems;

        return $this;
    }

    /**
     * Get value value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Set value value.
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }

    /**
     * Get vatNumber value.
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * Set vatNumber value.
     */
    public function setVatNumber(?string $vatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vatNumber) && !is_string($vatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatNumber, true), gettype($vatNumber)), __LINE__);
        }
        $this->vatNumber = $vatNumber;

        return $this;
    }
}
