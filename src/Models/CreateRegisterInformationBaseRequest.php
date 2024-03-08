<?php

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

class CreateRegisterInformationBaseRequest implements JsonSerializable
{
    /**
     * Email
     * @required
     * @maps email
     * @var string $email public property
     */
    private $email;

    /**
     * Document
     * @required
     * @maps document
     * @var string $document public property
     */
    private $document;

    /**
     * Type
     * @required
     * @maps type
     * @var string $type public property
     */
    private $type;

    /**
     * Site Url
     * @required
     * @maps site_url
     * @var string $siteUrl public property
     */
    private $siteUrl;

    /**
     * Phone Numbers
     * @required
     * @maps phone_numbers
     * @var CreateRegisterInformationPhoneRequest $phoneNumbers public property
     */
    private $phoneNumbers;

    /**
     * @param string $email
     * @param string $document
     * @param string $type
     * @param CreateRegisterInformationPhoneRequest[] $phoneNumbers
     */
    public function __construct(
        string $email,
        string $document,
        string $type,
        array $phoneNumbers
    ) {
        $this->email = $email;
        $this->document = $document;
        $this->type = $type;
        $this->phoneNumbers = $phoneNumbers;
    }


    /**
     * Encode this object to JSON
     * @return array
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize()
    {
        $json = [];
        $json['email']         = $this->email;
        $json['document']      = $this->document;
        $json['type']          = $this->type;
        $json['site_url']  = $this->siteUrl;
        $json['phone_numbers'] = $this->phoneNumbers;

        return $json;
    }
}
