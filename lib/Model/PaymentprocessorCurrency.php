<?php
/**
 * PaymentprocessorCurrency
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Processor Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentprocessorCurrency Class Doc Comment
 *
 * @category Class
 * @description Stands for Albania, not all ;-)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentprocessorCurrency
{
    /**
     * Possible values of this enum
     */
    public const XXX = 'XXX';

    public const ALL = 'ALL';

    public const DZD = 'DZD';

    public const ARS = 'ARS';

    public const AUD = 'AUD';

    public const BSD = 'BSD';

    public const BHD = 'BHD';

    public const BDT = 'BDT';

    public const AMD = 'AMD';

    public const BBD = 'BBD';

    public const BMD = 'BMD';

    public const BTN = 'BTN';

    public const BOB = 'BOB';

    public const BWP = 'BWP';

    public const BZD = 'BZD';

    public const SBD = 'SBD';

    public const BND = 'BND';

    public const MMK = 'MMK';

    public const BIF = 'BIF';

    public const KHR = 'KHR';

    public const CAD = 'CAD';

    public const CVE = 'CVE';

    public const KYD = 'KYD';

    public const LKR = 'LKR';

    public const CLP = 'CLP';

    public const CNY = 'CNY';

    public const COP = 'COP';

    public const KMF = 'KMF';

    public const CRC = 'CRC';

    public const HRK = 'HRK';

    public const CUP = 'CUP';

    public const CZK = 'CZK';

    public const DKK = 'DKK';

    public const DOP = 'DOP';

    public const SVC = 'SVC';

    public const ETB = 'ETB';

    public const ERN = 'ERN';

    public const FKP = 'FKP';

    public const FJD = 'FJD';

    public const DJF = 'DJF';

    public const GMD = 'GMD';

    public const GIP = 'GIP';

    public const GTQ = 'GTQ';

    public const GNF = 'GNF';

    public const GYD = 'GYD';

    public const HTG = 'HTG';

    public const HNL = 'HNL';

    public const HKD = 'HKD';

    public const HUF = 'HUF';

    public const ISK = 'ISK';

    public const INR = 'INR';

    public const IDR = 'IDR';

    public const IRR = 'IRR';

    public const IQD = 'IQD';

    public const ILS = 'ILS';

    public const JMD = 'JMD';

    public const JPY = 'JPY';

    public const KZT = 'KZT';

    public const JOD = 'JOD';

    public const KES = 'KES';

    public const KPW = 'KPW';

    public const KRW = 'KRW';

    public const KWD = 'KWD';

    public const KGS = 'KGS';

    public const LAK = 'LAK';

    public const LBP = 'LBP';

    public const LSL = 'LSL';

    public const LRD = 'LRD';

    public const LYD = 'LYD';

    public const LTL = 'LTL';

    public const MOP = 'MOP';

    public const MWK = 'MWK';

    public const MYR = 'MYR';

    public const MVR = 'MVR';

    public const MRO = 'MRO';

    public const MUR = 'MUR';

    public const MXN = 'MXN';

    public const MNT = 'MNT';

    public const MDL = 'MDL';

    public const MAD = 'MAD';

    public const OMR = 'OMR';

    public const NAD = 'NAD';

    public const NPR = 'NPR';

    public const ANG = 'ANG';

    public const AWG = 'AWG';

    public const VUV = 'VUV';

    public const NZD = 'NZD';

    public const NIO = 'NIO';

    public const NGN = 'NGN';

    public const NOK = 'NOK';

    public const PKR = 'PKR';

    public const PAB = 'PAB';

    public const PGK = 'PGK';

    public const PYG = 'PYG';

    public const PEN = 'PEN';

    public const PHP = 'PHP';

    public const QAR = 'QAR';

    public const RUB = 'RUB';

    public const RWF = 'RWF';

    public const SHP = 'SHP';

    public const STD = 'STD';

    public const SAR = 'SAR';

    public const SCR = 'SCR';

    public const SLL = 'SLL';

    public const SGD = 'SGD';

    public const VND = 'VND';

    public const SOS = 'SOS';

    public const ZAR = 'ZAR';

    public const SSP = 'SSP';

    public const SZL = 'SZL';

    public const SEK = 'SEK';

    public const CHF = 'CHF';

    public const SYP = 'SYP';

    public const THB = 'THB';

    public const TOP = 'TOP';

    public const TTD = 'TTD';

    public const AED = 'AED';

    public const TND = 'TND';

    public const UGX = 'UGX';

    public const MKD = 'MKD';

    public const EGP = 'EGP';

    public const GBP = 'GBP';

    public const TZS = 'TZS';

    public const USD = 'USD';

    public const UYU = 'UYU';

    public const UZS = 'UZS';

    public const WST = 'WST';

    public const YER = 'YER';

    public const TWD = 'TWD';

    public const CUC = 'CUC';

    public const ZWL = 'ZWL';

    public const TMT = 'TMT';

    public const GHS = 'GHS';

    public const VEF = 'VEF';

    public const SDG = 'SDG';

    public const UYI = 'UYI';

    public const RSD = 'RSD';

    public const MZN = 'MZN';

    public const AZN = 'AZN';

    public const RON = 'RON';

    public const CHE = 'CHE';

    public const CHW = 'CHW';

    public const _TRY = 'TRY';

    public const XAF = 'XAF';

    public const XCD = 'XCD';

    public const XOF = 'XOF';

    public const XPF = 'XPF';

    public const XBA = 'XBA';

    public const XBB = 'XBB';

    public const XBC = 'XBC';

    public const XBD = 'XBD';

    public const XAU = 'XAU';

    public const XDR = 'XDR';

    public const XAG = 'XAG';

    public const XPT = 'XPT';

    public const XPD = 'XPD';

    public const XUA = 'XUA';

    public const ZMW = 'ZMW';

    public const SRD = 'SRD';

    public const MGA = 'MGA';

    public const COU = 'COU';

    public const AFN = 'AFN';

    public const TJS = 'TJS';

    public const AOA = 'AOA';

    public const BYR = 'BYR';

    public const BGN = 'BGN';

    public const CDF = 'CDF';

    public const BAM = 'BAM';

    public const EUR = 'EUR';

    public const MXV = 'MXV';

    public const UAH = 'UAH';

    public const GEL = 'GEL';

    public const BOV = 'BOV';

    public const PLN = 'PLN';

    public const BRL = 'BRL';

    public const CLF = 'CLF';

    public const XSU = 'XSU';

    public const USN = 'USN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::XXX,
            self::ALL,
            self::DZD,
            self::ARS,
            self::AUD,
            self::BSD,
            self::BHD,
            self::BDT,
            self::AMD,
            self::BBD,
            self::BMD,
            self::BTN,
            self::BOB,
            self::BWP,
            self::BZD,
            self::SBD,
            self::BND,
            self::MMK,
            self::BIF,
            self::KHR,
            self::CAD,
            self::CVE,
            self::KYD,
            self::LKR,
            self::CLP,
            self::CNY,
            self::COP,
            self::KMF,
            self::CRC,
            self::HRK,
            self::CUP,
            self::CZK,
            self::DKK,
            self::DOP,
            self::SVC,
            self::ETB,
            self::ERN,
            self::FKP,
            self::FJD,
            self::DJF,
            self::GMD,
            self::GIP,
            self::GTQ,
            self::GNF,
            self::GYD,
            self::HTG,
            self::HNL,
            self::HKD,
            self::HUF,
            self::ISK,
            self::INR,
            self::IDR,
            self::IRR,
            self::IQD,
            self::ILS,
            self::JMD,
            self::JPY,
            self::KZT,
            self::JOD,
            self::KES,
            self::KPW,
            self::KRW,
            self::KWD,
            self::KGS,
            self::LAK,
            self::LBP,
            self::LSL,
            self::LRD,
            self::LYD,
            self::LTL,
            self::MOP,
            self::MWK,
            self::MYR,
            self::MVR,
            self::MRO,
            self::MUR,
            self::MXN,
            self::MNT,
            self::MDL,
            self::MAD,
            self::OMR,
            self::NAD,
            self::NPR,
            self::ANG,
            self::AWG,
            self::VUV,
            self::NZD,
            self::NIO,
            self::NGN,
            self::NOK,
            self::PKR,
            self::PAB,
            self::PGK,
            self::PYG,
            self::PEN,
            self::PHP,
            self::QAR,
            self::RUB,
            self::RWF,
            self::SHP,
            self::STD,
            self::SAR,
            self::SCR,
            self::SLL,
            self::SGD,
            self::VND,
            self::SOS,
            self::ZAR,
            self::SSP,
            self::SZL,
            self::SEK,
            self::CHF,
            self::SYP,
            self::THB,
            self::TOP,
            self::TTD,
            self::AED,
            self::TND,
            self::UGX,
            self::MKD,
            self::EGP,
            self::GBP,
            self::TZS,
            self::USD,
            self::UYU,
            self::UZS,
            self::WST,
            self::YER,
            self::TWD,
            self::CUC,
            self::ZWL,
            self::TMT,
            self::GHS,
            self::VEF,
            self::SDG,
            self::UYI,
            self::RSD,
            self::MZN,
            self::AZN,
            self::RON,
            self::CHE,
            self::CHW,
            self::_TRY,
            self::XAF,
            self::XCD,
            self::XOF,
            self::XPF,
            self::XBA,
            self::XBB,
            self::XBC,
            self::XBD,
            self::XAU,
            self::XDR,
            self::XAG,
            self::XPT,
            self::XPD,
            self::XUA,
            self::ZMW,
            self::SRD,
            self::MGA,
            self::COU,
            self::AFN,
            self::TJS,
            self::AOA,
            self::BYR,
            self::BGN,
            self::CDF,
            self::BAM,
            self::EUR,
            self::MXV,
            self::UAH,
            self::GEL,
            self::BOV,
            self::PLN,
            self::BRL,
            self::CLF,
            self::XSU,
            self::USN
        ];
    }
}


