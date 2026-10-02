<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Scraper\ScraperChronopost\ClassMap::get(),
];
/**
 * Samples for Rechercher ServiceType
 */
$rechercher = new \Scraper\ScraperChronopost\ServiceType\Rechercher($options);
/**
 * Sample call for rechercherContraintesEnlevementV2 operation/method
 */
if ($rechercher->rechercherContraintesEnlevementV2(new \Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevementV2()) !== false) {
    print_r($rechercher->getResult());
} else {
    print_r($rechercher->getLastError());
}
/**
 * Sample call for rechercherContraintesEnlevement operation/method
 */
if ($rechercher->rechercherContraintesEnlevement(new \Scraper\ScraperChronopost\StructType\RechercherContraintesEnlevement()) !== false) {
    print_r($rechercher->getResult());
} else {
    print_r($rechercher->getLastError());
}
/**
 * Samples for Shipping ServiceType
 */
$shipping = new \Scraper\ScraperChronopost\ServiceType\Shipping($options);
/**
 * Sample call for shippingWithReservationAndESDWithRefClientPC operation/method
 */
if ($shipping->shippingWithReservationAndESDWithRefClientPC(new \Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClientPC()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV3 operation/method
 */
if ($shipping->shippingV3(new \Scraper\ScraperChronopost\StructType\ShippingV3()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV2 operation/method
 */
if ($shipping->shippingV2(new \Scraper\ScraperChronopost\StructType\ShippingV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV7 operation/method
 */
if ($shipping->shippingMultiParcelV7(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV7()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithESDOnlyV2 operation/method
 */
if ($shipping->shippingWithESDOnlyV2(new \Scraper\ScraperChronopost\StructType\ShippingWithESDOnlyV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV6 operation/method
 */
if ($shipping->shippingMultiParcelV6(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV6()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV5 operation/method
 */
if ($shipping->shippingMultiParcelV5(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV5()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV7 operation/method
 */
if ($shipping->shippingV7(new \Scraper\ScraperChronopost\StructType\ShippingV7()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV4 operation/method
 */
if ($shipping->shippingMultiParcelV4(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV4()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV6 operation/method
 */
if ($shipping->shippingV6(new \Scraper\ScraperChronopost\StructType\ShippingV6()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV3 operation/method
 */
if ($shipping->shippingMultiParcelV3(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV3()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV5 operation/method
 */
if ($shipping->shippingV5(new \Scraper\ScraperChronopost\StructType\ShippingV5()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelV2 operation/method
 */
if ($shipping->shippingMultiParcelV2(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingV4 operation/method
 */
if ($shipping->shippingV4(new \Scraper\ScraperChronopost\StructType\ShippingV4()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithESDOnly operation/method
 */
if ($shipping->shippingWithESDOnly(new \Scraper\ScraperChronopost\StructType\ShippingWithESDOnly()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservation operation/method
 */
if ($shipping->shippingMultiParcelWithReservation(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservation()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservationAndESDWithRefClient operation/method
 */
if ($shipping->shippingWithReservationAndESDWithRefClient(new \Scraper\ScraperChronopost\StructType\ShippingWithReservationAndESDWithRefClient()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcel operation/method
 */
if ($shipping->shippingMultiParcel(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcel()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shipping operation/method
 */
if ($shipping->shipping(new \Scraper\ScraperChronopost\StructType\Shipping()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservationV3 operation/method
 */
if ($shipping->shippingMultiParcelWithReservationV3(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV3()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingMultiParcelWithReservationV2 operation/method
 */
if ($shipping->shippingMultiParcelWithReservationV2(new \Scraper\ScraperChronopost\StructType\ShippingMultiParcelWithReservationV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservationV2 operation/method
 */
if ($shipping->shippingWithReservationV2(new \Scraper\ScraperChronopost\StructType\ShippingWithReservationV2()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Sample call for shippingWithReservation operation/method
 */
if ($shipping->shippingWithReservation(new \Scraper\ScraperChronopost\StructType\ShippingWithReservation()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Scraper\ScraperChronopost\ServiceType\Get($options);
/**
 * Sample call for getReservedSkybill operation/method
 */
if ($get->getReservedSkybill(new \Scraper\ScraperChronopost\StructType\GetReservedSkybill()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRouting operation/method
 */
if ($get->getRouting(new \Scraper\ScraperChronopost\StructType\GetRouting()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndModeByReservation operation/method
 */
if ($get->getReservedSkybillWithTypeAndModeByReservation(new \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeByReservation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSkybill operation/method
 */
if ($get->getSkybill(new \Scraper\ScraperChronopost\StructType\GetSkybill()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndModeAuth operation/method
 */
if ($get->getReservedSkybillWithTypeAndModeAuth(new \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndModeAuth()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithTypeAndMode operation/method
 */
if ($get->getReservedSkybillWithTypeAndMode(new \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithTypeAndMode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReservedSkybillWithType operation/method
 */
if ($get->getReservedSkybillWithType(new \Scraper\ScraperChronopost\StructType\GetReservedSkybillWithType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShippingInformation operation/method
 */
if ($get->getShippingInformation(new \Scraper\ScraperChronopost\StructType\GetShippingInformation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Faisabilite ServiceType
 */
$faisabilite = new \Scraper\ScraperChronopost\ServiceType\Faisabilite($options);
/**
 * Sample call for faisabiliteESD operation/method
 */
if ($faisabilite->faisabiliteESD(new \Scraper\ScraperChronopost\StructType\FaisabiliteESD()) !== false) {
    print_r($faisabilite->getResult());
} else {
    print_r($faisabilite->getLastError());
}
/**
 * Samples for Creer ServiceType
 */
$creer = new \Scraper\ScraperChronopost\ServiceType\Creer($options);
/**
 * Sample call for creerEnlevementNational operation/method
 */
if ($creer->creerEnlevementNational(new \Scraper\ScraperChronopost\StructType\CreerEnlevementNational()) !== false) {
    print_r($creer->getResult());
} else {
    print_r($creer->getLastError());
}
/**
 * Sample call for creerEnlevementEurope operation/method
 */
if ($creer->creerEnlevementEurope(new \Scraper\ScraperChronopost\StructType\CreerEnlevementEurope()) !== false) {
    print_r($creer->getResult());
} else {
    print_r($creer->getLastError());
}
/**
 * Samples for Annuler ServiceType
 */
$annuler = new \Scraper\ScraperChronopost\ServiceType\Annuler($options);
/**
 * Sample call for annulerEnlevementsV2 operation/method
 */
if ($annuler->annulerEnlevementsV2(new \Scraper\ScraperChronopost\StructType\AnnulerEnlevementsV2()) !== false) {
    print_r($annuler->getResult());
} else {
    print_r($annuler->getLastError());
}
/**
 * Sample call for annulerEnlevements operation/method
 */
if ($annuler->annulerEnlevements(new \Scraper\ScraperChronopost\StructType\AnnulerEnlevements()) !== false) {
    print_r($annuler->getResult());
} else {
    print_r($annuler->getLastError());
}
