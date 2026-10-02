<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rechercher ServiceType.
 */
class Rechercher extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rechercherContraintesEnlevementV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevementV2Response|bool
     */
    public function rechercherContraintesEnlevementV2(\Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevementV2 $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevementV2 = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevementV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultRechercherContraintesEnlevementV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named rechercherContraintesEnlevement.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevementResponse|bool
     */
    public function rechercherContraintesEnlevement(\Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevement $parameters)
    {
        try {
            $this->setResult($resultRechercherContraintesEnlevement = $this->getSoapClient()->__soapCall('rechercherContraintesEnlevement', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultRechercherContraintesEnlevement;
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
     * @return \Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevementResponse|\Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevementV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
