<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for skybillWithDimensionsValueV8 StructType.
 */
#[\AllowDynamicProperties]
class SkybillWithDimensionsValueV8 extends SkybillWithDimensionsValueV7
{
    /**
     * The printCustomLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $printCustomLabel = null;

    /**
     * Constructor method for skybillWithDimensionsValueV8.
     *
     * @uses SkybillWithDimensionsValueV8::setPrintCustomLabel()
     */
    public function __construct(?string $printCustomLabel = null)
    {
        $this
            ->setPrintCustomLabel($printCustomLabel)
        ;
    }

    /**
     * Get printCustomLabel value.
     */
    public function getPrintCustomLabel(): ?string
    {
        return $this->printCustomLabel;
    }

    /**
     * Set printCustomLabel value.
     */
    public function setPrintCustomLabel(?string $printCustomLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($printCustomLabel) && !is_string($printCustomLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printCustomLabel, true), gettype($printCustomLabel)), __LINE__);
        }
        $this->printCustomLabel = $printCustomLabel;

        return $this;
    }
}
