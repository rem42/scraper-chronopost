<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Annuler ServiceType.
 */
class Annuler extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named annulerEnlevementsV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\AnnulerEnlevementsV2Response|bool
     */
    public function annulerEnlevementsV2(\Scraper\ScraperChronopost\StructType\AnnulerEnlevementsV2 $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevementsV2 = $this->getSoapClient()->__soapCall('annulerEnlevementsV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAnnulerEnlevementsV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named annulerEnlevements.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\AnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\Scraper\ScraperChronopost\StructType\AnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($resultAnnulerEnlevements = $this->getSoapClient()->__soapCall('annulerEnlevements', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAnnulerEnlevements;
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
     * @return \Scraper\ScraperChronopost\StructType\AnnulerEnlevementsResponse|\Scraper\ScraperChronopost\StructType\AnnulerEnlevementsV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
