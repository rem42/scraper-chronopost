<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for scheduledValue StructType.
 */
#[\AllowDynamicProperties]
class ScheduledValue extends AbstractStructBase
{
    /**
     * The appointmentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?AppointmentValue $appointmentValue = null;

    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $expirationDate = null;

    /**
     * The sellByDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $sellByDate = null;

    /**
     * Constructor method for scheduledValue.
     *
     * @uses ScheduledValue::setAppointmentValue()
     * @uses ScheduledValue::setExpirationDate()
     * @uses ScheduledValue::setSellByDate()
     */
    public function __construct(?AppointmentValue $appointmentValue = null, ?string $expirationDate = null, ?string $sellByDate = null)
    {
        $this
            ->setAppointmentValue($appointmentValue)
            ->setExpirationDate($expirationDate)
            ->setSellByDate($sellByDate)
        ;
    }

    /**
     * Get appointmentValue value.
     */
    public function getAppointmentValue(): ?AppointmentValue
    {
        return $this->appointmentValue;
    }

    /**
     * Set appointmentValue value.
     */
    public function setAppointmentValue(?AppointmentValue $appointmentValue = null): self
    {
        $this->appointmentValue = $appointmentValue;

        return $this;
    }

    /**
     * Get expirationDate value.
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * Set expirationDate value.
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get sellByDate value.
     */
    public function getSellByDate(): ?string
    {
        return $this->sellByDate;
    }

    /**
     * Set sellByDate value.
     */
    public function setSellByDate(?string $sellByDate = null): self
    {
        // validation for constraint: string
        if (!is_null($sellByDate) && !is_string($sellByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellByDate, true), gettype($sellByDate)), __LINE__);
        }
        $this->sellByDate = $sellByDate;

        return $this;
    }
}
