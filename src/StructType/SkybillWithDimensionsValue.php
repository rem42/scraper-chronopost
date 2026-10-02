<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for skybillWithDimensionsValue StructType.
 */
#[\AllowDynamicProperties]
class SkybillWithDimensionsValue extends SkybillValue
{
    /** The height */
    protected float $height;

    /** The length */
    protected float $length;

    /** The width */
    protected float $width;

    /**
     * Constructor method for skybillWithDimensionsValue.
     *
     * @uses SkybillWithDimensionsValue::setHeight()
     * @uses SkybillWithDimensionsValue::setLength()
     * @uses SkybillWithDimensionsValue::setWidth()
     */
    public function __construct(float $height, float $length, float $width)
    {
        $this
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
        ;
    }

    /**
     * Get height value.
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Set height value.
     */
    public function setHeight(float $height): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;

        return $this;
    }

    /**
     * Get length value.
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Set length value.
     */
    public function setLength(float $length): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;

        return $this;
    }

    /**
     * Get width value.
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Set width value.
     */
    public function setWidth(float $width): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;

        return $this;
    }
}
