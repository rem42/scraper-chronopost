<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Creer ServiceType.
 */
class Creer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named creerEnlevementNational.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\CreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\Scraper\ScraperChronopost\StructType\CreerEnlevementNational $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementNational = $this->getSoapClient()->__soapCall('creerEnlevementNational', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreerEnlevementNational;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named creerEnlevementEurope.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\CreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\Scraper\ScraperChronopost\StructType\CreerEnlevementEurope $parameters)
    {
        try {
            $this->setResult($resultCreerEnlevementEurope = $this->getSoapClient()->__soapCall('creerEnlevementEurope', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreerEnlevementEurope;
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
     * @return \Scraper\ScraperChronopost\StructType\CreerEnlevementEuropeResponse|\Scraper\ScraperChronopost\StructType\CreerEnlevementNationalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
