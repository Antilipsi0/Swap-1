<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceResource;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\LocalList;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\MachineToMachineList;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\MobileList;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\NationalList;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\SharedCostList;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\TollFreeList;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\VoipList;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * @property string $countryCode
 * @property string $country
 * @property string $uri
 * @property bool $beta
 * @property array $subresourceUris
 */
class AvailablePhoneNumberCountryInstance extends \WSAL_Vendor\Twilio\InstanceResource
{
    protected $_local;
    protected $_tollFree;
    protected $_mobile;
    protected $_national;
    protected $_voip;
    protected $_sharedCost;
    protected $_machineToMachine;
    /**
     * Initialize the AvailablePhoneNumberCountryInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid A 34 character string that uniquely identifies
     *                           this resource.
     * @param string $countryCode The ISO country code of the country to fetch
     *                            available phone number information about
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, array $payload, string $accountSid, string $countryCode = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['countryCode' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'country_code'), 'country' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'country'), 'uri' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'uri'), 'beta' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'beta'), 'subresourceUris' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'subresource_uris')];
        $this->solution = ['accountSid' => $accountSid, 'countryCode' => $countryCode ?: $this->properties['countryCode']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return AvailablePhoneNumberCountryContext Context for this
     *                                            AvailablePhoneNumberCountryInstance
     */
    protected function proxy() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext
    {
        if (!$this->context) {
            $this->context = new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext($this->version, $this->solution['accountSid'], $this->solution['countryCode']);
        }
        return $this->context;
    }
    /**
     * Fetch the AvailablePhoneNumberCountryInstance
     *
     * @return AvailablePhoneNumberCountryInstance Fetched
     *                                             AvailablePhoneNumberCountryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Access the local
     */
    protected function getLocal() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\LocalList
    {
        return $this->proxy()->local;
    }
    /**
     * Access the tollFree
     */
    protected function getTollFree() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\TollFreeList
    {
        return $this->proxy()->tollFree;
    }
    /**
     * Access the mobile
     */
    protected function getMobile() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\MobileList
    {
        return $this->proxy()->mobile;
    }
    /**
     * Access the national
     */
    protected function getNational() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\NationalList
    {
        return $this->proxy()->national;
    }
    /**
     * Access the voip
     */
    protected function getVoip() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\VoipList
    {
        return $this->proxy()->voip;
    }
    /**
     * Access the sharedCost
     */
    protected function getSharedCost() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\SharedCostList
    {
        return $this->proxy()->sharedCost;
    }
    /**
     * Access the machineToMachine
     */
    protected function getMachineToMachine() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry\MachineToMachineList
    {
        return $this->proxy()->machineToMachine;
    }
    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new \WSAL_Vendor\Twilio\Exceptions\TwilioException('Unknown property: ' . $name);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "{$key}={$value}";
        }
        return '[Twilio.Api.V2010.AvailablePhoneNumberCountryInstance ' . \implode(' ', $context) . ']';
    }
}
