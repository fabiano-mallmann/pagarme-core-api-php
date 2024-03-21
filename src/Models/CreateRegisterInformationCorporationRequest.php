<?php

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

class CreateRegisterInformationCorporationRequest extends CreateRegisterInformationBaseRequest implements JsonSerializable
{
    /**
     * Company name
     * @required
     * @maps company_name
     * @var string $companyName public property
     */
    private $companyName;

    /**
     * Trading Name
     * @required
     * @maps trading_name
     * @var string $tradingName public property
     */
    private $tradingName;

    /**
     * Annual Revenue
     * @required
     * @maps annual_revenue
     * @var string $annualRevenue public property
     */
    private $annualRevenue;

    /**
     * Corporation Type
     * @required
     * @maps corporation_type
     * @var string $corporationType public property
     */
    private $corporationType;

    /**
     * Founding Date
     * @required
     * @maps founding_date
     * @var string $foundingDate public property
     */
    private $foundingDate;

    /**
     * Managing Partners
     * @required
     * @maps managing_partners
     * @var CreateManagingPartnerRequest[] $managingPartners public property
     */
    private $managingPartners;

    /**
     * Main Address
     * @required
     * @maps main_address
     * @var CreateRegisterInformationAddressRequest[] $mainAddress public property
     */
    private $mainAddress;

    /**
     * @param string $email
     * @param string $document
     * @param string $type
     * @param string $siteUrl
     * @param CreateRegisterInformationPhoneRequest[] $phoneNumbers
     * @param string $companyName
     * @param string $corporationType
     * @param string $tradingName
     * @param int $annualRevenue
     * @param string $foundingDate
     * @param CreateManagingPartnerRequest[] $managingPartners
     * @param CreateRegisterInformationAddressRequest $mainAddress
     */
    public function __construct(
        $email,
        $document,
        $type,
        $siteUrl,
        $phoneNumbers,
        $companyName,
        $corporationType,
        $tradingName,
        $annualRevenue,
        $foundingDate,
        $managingPartners,
        CreateRegisterInformationAddressRequest $mainAddress
    ) {
        parent::__construct($email, $document, $type, $siteUrl, $phoneNumbers);
        $this->companyName = $companyName;
        $this->corporationType = $corporationType;
        $this->tradingName = $tradingName;
        $this->annualRevenue = $annualRevenue;
        $this->foundingDate = $foundingDate;
        $this->managingPartners = $managingPartners;
        $this->mainAddress = $mainAddress;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize()
    {
        $json = [];
        $json['company_name']         = $this->companyName;
        $json['trading_name']         = $this->tradingName;
        $json['annual_revenue']       = $this->annualRevenue;
        $json['corporation_type']     = $this->corporationType;
        $json['founding_date']        = $this->foundingDate;
        $json['founding_date']        = $this->foundingDate;
        $json['managing_partners']    = $this->managingPartners;
        $json['main_address']         = $this->mainAddress;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}
