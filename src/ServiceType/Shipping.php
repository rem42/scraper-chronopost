<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopost\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shipping ServiceType.
 */
class Shipping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClientPC = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClientPC', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservationAndESDWithRefClientPC;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingV3.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingV3Response|bool
     */
    public function shippingV3(\Scraper\ScraperChronopost\StructType\ShippingV3 $parameters)
    {
        try {
            $this->setResult($resultShippingV3 = $this->getSoapClient()->__soapCall('shippingV3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV3;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingV2Response|bool
     */
    public function shippingV2(\Scraper\ScraperChronopost\StructType\ShippingV2 $parameters)
    {
        try {
            $this->setResult($resultShippingV2 = $this->getSoapClient()->__soapCall('shippingV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelV7.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV7Response|bool
     */
    public function shippingMultiParcelV7(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV7 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV7 = $this->getSoapClient()->__soapCall('shippingMultiParcelV7', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV7;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingWithESDOnlyV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\Scraper\ScraperChronopost\StructType\ShippingWithESDOnlyV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnlyV2 = $this->getSoapClient()->__soapCall('shippingWithESDOnlyV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithESDOnlyV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelV6.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV6Response|bool
     */
    public function shippingMultiParcelV6(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV6 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV6 = $this->getSoapClient()->__soapCall('shippingMultiParcelV6', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV6;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelV5.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV5 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV5 = $this->getSoapClient()->__soapCall('shippingMultiParcelV5', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV5;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingV7.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingV7Response|bool
     */
    public function shippingV7(\Scraper\ScraperChronopost\StructType\ShippingV7 $parameters)
    {
        try {
            $this->setResult($resultShippingV7 = $this->getSoapClient()->__soapCall('shippingV7', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV7;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelV4.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV4 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV4 = $this->getSoapClient()->__soapCall('shippingMultiParcelV4', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV4;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingV6.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingV6Response|bool
     */
    public function shippingV6(\Scraper\ScraperChronopost\StructType\ShippingV6 $parameters)
    {
        try {
            $this->setResult($resultShippingV6 = $this->getSoapClient()->__soapCall('shippingV6', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV6;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelV3.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelV3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV3;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingV5.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingV5Response|bool
     */
    public function shippingV5(\Scraper\ScraperChronopost\StructType\ShippingV5 $parameters)
    {
        try {
            $this->setResult($resultShippingV5 = $this->getSoapClient()->__soapCall('shippingV5', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV5;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingV4.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingV4Response|bool
     */
    public function shippingV4(\Scraper\ScraperChronopost\StructType\ShippingV4 $parameters)
    {
        try {
            $this->setResult($resultShippingV4 = $this->getSoapClient()->__soapCall('shippingV4', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingV4;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingWithESDOnly.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\Scraper\ScraperChronopost\StructType\ShippingWithESDOnly $parameters)
    {
        try {
            $this->setResult($resultShippingWithESDOnly = $this->getSoapClient()->__soapCall('shippingWithESDOnly', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithESDOnly;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcelWithReservation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservation = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelWithReservation;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClient $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationAndESDWithRefClient = $this->getSoapClient()->__soapCall('shippingWithReservationAndESDWithRefClient', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservationAndESDWithRefClient;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingMultiParcel.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\Scraper\ScraperChronopost\StructType\ShippingMultiParcel $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcel = $this->getSoapClient()->__soapCall('shippingMultiParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcel;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shipping.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingResponse|bool
     */
    public function shipping(\Scraper\ScraperChronopost\StructType\Shipping $parameters)
    {
        try {
            $this->setResult($resultShipping = $this->getSoapClient()->__soapCall('shipping', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShipping;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV3 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV3 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelWithReservationV3;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingMultiParcelWithReservationV2 = $this->getSoapClient()->__soapCall('shippingMultiParcelWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingMultiParcelWithReservationV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingWithReservationV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\Scraper\ScraperChronopost\StructType\ShippingWithReservationV2 $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservationV2 = $this->getSoapClient()->__soapCall('shippingWithReservationV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservationV2;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named shippingWithReservation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopost\StructType\ShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\Scraper\ScraperChronopost\StructType\ShippingWithReservation $parameters)
    {
        try {
            $this->setResult($resultShippingWithReservation = $this->getSoapClient()->__soapCall('shippingWithReservation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultShippingWithReservation;
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
     * @return \Scraper\ScraperChronopost\StructType\ShippingMultiParcelResponse|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV2Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV3Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV4Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV5Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV6Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelV7Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationResponse|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV2Response|\Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV3Response|\Scraper\ScraperChronopost\StructType\ShippingResponse|\Scraper\ScraperChronopost\StructType\ShippingV2Response|\Scraper\ScraperChronopost\StructType\ShippingV3Response|\Scraper\ScraperChronopost\StructType\ShippingV4Response|\Scraper\ScraperChronopost\StructType\ShippingV5Response|\Scraper\ScraperChronopost\StructType\ShippingV6Response|\Scraper\ScraperChronopost\StructType\ShippingV7Response|\Scraper\ScraperChronopost\StructType\ShippingWithESDOnlyResponse|\Scraper\ScraperChronopost\StructType\ShippingWithESDOnlyV2Response|\Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|\Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse|\Scraper\ScraperChronopost\StructType\ShippingWithReservationResponse|\Scraper\ScraperChronopost\StructType\ShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
