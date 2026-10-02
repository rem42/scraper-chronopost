<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for resultReservationMultiParcelExpeditionValueV2 StructType.
 */
#[\AllowDynamicProperties]
class ResultReservationMultiParcelExpeditionValueV2 extends ResultReservationMultiParcelExpeditionValue
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $asCode = null;

    /**
     * Constructor method for resultReservationMultiParcelExpeditionValueV2.
     *
     * @uses ResultReservationMultiParcelExpeditionValueV2::setAsCode()
     */
    public function __construct(?string $asCode = null)
    {
        $this
            ->setAsCode($asCode)
        ;
    }

    /**
     * Get asCode value.
     */
    public function getAsCode(): ?string
    {
        return $this->asCode;
    }

    /**
     * Set asCode value.
     */
    public function setAsCode(?string $asCode = null): self
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;

        return $this;
    }
}
