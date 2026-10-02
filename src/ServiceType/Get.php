<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType.
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getReservedSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetReservedSkybillResponse|bool
     */
    public function getReservedSkybill(\Scraper\ScraperChronopost\StructType\GetReservedSkybill $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybill = $this->getSoapClient()->__soapCall('getReservedSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybill;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getRouting.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetRoutingResponse|bool
     */
    public function getRouting(\Scraper\ScraperChronopost\StructType\GetRouting $parameters)
    {
        try {
            $this->setResult($resultGetRouting = $this->getSoapClient()->__soapCall('getRouting', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRouting;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeByReservation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeByReservation = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeByReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithTypeAndModeByReservation;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetSkybillResponse|bool
     */
    public function getSkybill(\Scraper\ScraperChronopost\StructType\GetSkybill $parameters)
    {
        try {
            $this->setResult($resultGetSkybill = $this->getSoapClient()->__soapCall('getSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSkybill;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeAuth.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeAuth(\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndModeAuth = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndModeAuth', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithTypeAndModeAuth;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeResponse|bool
     */
    public function getReservedSkybillWithTypeAndMode(\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndMode $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithTypeAndMode = $this->getSoapClient()->__soapCall('getReservedSkybillWithTypeAndMode', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithTypeAndMode;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReservedSkybillWithType.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeResponse|bool
     */
    public function getReservedSkybillWithType(\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithType $parameters)
    {
        try {
            $this->setResult($resultGetReservedSkybillWithType = $this->getSoapClient()->__soapCall('getReservedSkybillWithType', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReservedSkybillWithType;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getShippingInformation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetShippingInformationResponse|bool
     */
    public function getShippingInformation(\Scraper\ScraperChronopost\StructType\GetShippingInformation $parameters)
    {
        try {
            $this->setResult($resultGetShippingInformation = $this->getSoapClient()->__soapCall('getShippingInformation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShippingInformation;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperChronopost\StructType\GetReservedSkybillResponse|\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeResponse|\Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeResponse|\Scraper\ScraperChronopost\StructType\GetRoutingResponse|\Scraper\ScraperChronopost\StructType\GetShippingInformationResponse|\Scraper\ScraperChronopost\StructType\GetSkybillResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
