<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Address\DependentPhoneNumberList;
use WSAL_Vendor\Twilio\Serialize;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * @property DependentPhoneNumberList $dependentPhoneNumbers
 */
class AddressContext extends \WSAL_Vendor\Twilio\InstanceContext
{
    protected $_dependentPhoneNumbers;
    /**
     * Initialize the AddressContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that is responsible for
     *                           this address
     * @param string $sid The unique string that identifies the resource
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, $accountSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Addresses/' . \rawurlencode($sid) . '.json';
    }
    /**
     * Delete the AddressInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the AddressInstance
     *
     * @return AddressInstance Fetched AddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AddressInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AddressInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['sid']);
    }
    /**
     * Update the AddressInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AddressInstance Updated AddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AddressInstance
    {
        $options = new \WSAL_Vendor\Twilio\Values($options);
        $data = \WSAL_Vendor\Twilio\Values::of(['FriendlyName' => $options['friendlyName'], 'CustomerName' => $options['customerName'], 'Street' => $options['street'], 'City' => $options['city'], 'Region' => $options['region'], 'PostalCode' => $options['postalCode'], 'EmergencyEnabled' => \WSAL_Vendor\Twilio\Serialize::booleanToString($options['emergencyEnabled']), 'AutoCorrectAddress' => \WSAL_Vendor\Twilio\Serialize::booleanToString($options['autoCorrectAddress'])]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\AddressInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['sid']);
    }
    /**
     * Access the dependentPhoneNumbers
     */
    protected function getDependentPhoneNumbers() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Address\DependentPhoneNumberList
    {
        if (!$this->_dependentPhoneNumbers) {
            $this->_dependentPhoneNumbers = new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Address\DependentPhoneNumberList($this->version, $this->solution['accountSid'], $this->solution['sid']);
        }
        return $this->_dependentPhoneNumbers;
    }
    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name) : \WSAL_Vendor\Twilio\ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new \WSAL_Vendor\Twilio\Exceptions\TwilioException('Unknown subresource ' . $name);
    }
    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) : \WSAL_Vendor\Twilio\InstanceContext
    {
        $property = $this->{$name};
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }
        throw new \WSAL_Vendor\Twilio\Exceptions\TwilioException('Resource does not have a context');
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
        return '[Twilio.Api.V2010.AddressContext ' . \implode(' ', $context) . ']';
    }
}