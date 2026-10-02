<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

/**
 * This class stands for skybillParamsValueV2 StructType.
 */
#[\AllowDynamicProperties]
class SkybillParamsValueV2 extends SkybillParamsValue
{
    /** The withReservation */
    protected int $withReservation;

    /**
     * Constructor method for skybillParamsValueV2.
     *
     * @uses SkybillParamsValueV2::setWithReservation()
     */
    public function __construct(int $withReservation)
    {
        $this
            ->setWithReservation($withReservation)
        ;
    }

    /**
     * Get withReservation value.
     */
    public function getWithReservation(): int
    {
        return $this->withReservation;
    }

    /**
     * Set withReservation value.
     */
    public function setWithReservation(int $withReservation): self
    {
        // validation for constraint: int
        if (!is_null($withReservation) && !(is_int($withReservation) || ctype_digit($withReservation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withReservation, true), gettype($withReservation)), __LINE__);
        }
        $this->withReservation = $withReservation;

        return $this;
    }
}
