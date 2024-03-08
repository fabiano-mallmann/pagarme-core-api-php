<?php

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

class CreateRegisterInformationAddressRequest implements JsonSerializable
{
    /**
     * Street
     * @required
     * @maps street
     * @var string $street public property
     */
    private $street;

    /**
     * Complementary
     * @required
     * @maps complementary
     * @var string $complementary public property
     */
    private $complementary;

    /**
     * Street Number
     * @required
     * @maps street_number
     * @var string $streetNumber public property
     */
    private $streetNumber;

    /**
     * Neighborhood
     * @required
     * @maps neighborhood
     * @var string $neighborhood public property
     */
    private $neighborhood;

    /**
     * City
     * @required
     * @maps city
     * @var string $city public property
     */
    private $city;

    /**
     * State
     * @required
     * @maps state
     * @var string $state public property
     */
    private $state;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * Reference Point
     * @required
     * @maps reference_point
     * @var string $referencePoint public property
     */
    private $referencePoint;

    /**
     * @param string $street
     * @param string $complementary
     * @param string $streetNumber
     * @param string $neighborhood
     * @param string $city
     * @param string $state
     * @param string $zipCode
     * @param string $referencePoint
     */
    public function __construct(
        string $street,
        string $complementary,
        string $streetNumber,
        string $neighborhood,
        string $city,
        string $state,
        string $zipCode,
        string $referencePoint
    ) {
        $this->street = $street;
        $this->complementary = $complementary;
        $this->streetNumber = $streetNumber;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->referencePoint = $referencePoint;
    }


    /**
     * Encode this object to JSON
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize()
    {
        $json = [];
        $json['street']          = $this->street;
        $json['complementary']   = $this->complementary;
        $json['street_number']   = $this->streetNumber;
        $json['neighborhood']    = $this->neighborhood;
        $json['city']            = $this->city;
        $json['state']           = $this->state;
        $json['zip_code']        = $this->zipCode;
        $json['reference_point'] = $this->referencePoint;

        return $json;
    }
}
