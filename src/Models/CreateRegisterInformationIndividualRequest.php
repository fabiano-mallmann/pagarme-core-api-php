<?php

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

class CreateRegisterInformationIndividualRequest extends CreateRegisterInformationBaseRequest implements JsonSerializable
{
    /**
     * Name
     * @required
     * @maps name
     * @var string $name public property
     */
    private $name;

    /**
     * Mother Name
     * @required
     * @maps mother_name
     * @var string $motherName public property
     */
    private $motherName;

    /**
     * Birthdate
     * @required
     * @maps birthdate
     * @var string $birthdate public property
     */
    private $birthdate;

    /**
     * Monthly Income
     * @required
     * @maps monthly_income
     * @var int $monthlyIncome public property
     */
    private $monthlyIncome;

    /**
     * Professional Occupation
     * @required
     * @maps professional_occupation
     * @var string $professionalOccupation public property
     */
    private $professionalOccupation;

    /**
     * Address
     * @required
     * @maps address
     * @var CreateRegisterInformationAddressRequest $address public property
     */
    private $address;

    /**
     * @param string $email
     * @param string $document
     * @param string $type
     * @param string $siteUrl
     * @param CreateRegisterInformationPhoneRequest[] $phoneNumbers
     * @param string $name
     * @param string $birthdate
     * @param int $monthlyIncome
     * @param string $professionalOccupation
     * @param CreateRegisterInformationAddressRequest $address
     */
    public function __construct(
        string $email,
        string $document,
        string $type,
        string $siteUrl,
        array $phoneNumbers,
        string $name,
        string $motherName,
        string $birthdate,
        string $monthlyIncome,
        string $professionalOccupation,
        CreateRegisterInformationAddressRequest $address
    ) {
        parent::__construct($email, $document, $type, $siteUrl, $phoneNumbers);
        $this->name = $name;
        $this->motherName = $motherName;
        $this->birthdate = $birthdate;
        $this->monthlyIncome = $monthlyIncome;
        $this->professionalOccupation = $professionalOccupation;
        $this->address = $address;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize()
    {
        $json = [];
        $json['name']                    = $this->name;
        $json['mother_name']             = $this->motherName;
        $json['birthdate']               = $this->birthdate;
        $json['monthly_income']          = $this->monthlyIncome;
        $json['professional_occupation'] = $this->professionalOccupation;
        $json['address']                 = $this->address;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}
