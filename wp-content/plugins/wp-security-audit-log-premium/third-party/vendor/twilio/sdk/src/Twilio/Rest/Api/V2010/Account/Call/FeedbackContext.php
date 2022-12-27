<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Serialize;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class FeedbackContext extends \WSAL_Vendor\Twilio\InstanceContext
{
    /**
     * Initialize the FeedbackContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique sid that identifies this account
     * @param string $callSid The call sid that uniquely identifies the call
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, $accountSid, $callSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/Feedback.json';
    }
    /**
     * Fetch the FeedbackInstance
     *
     * @return FeedbackInstance Fetched FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call\FeedbackInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call\FeedbackInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['callSid']);
    }
    /**
     * Create the FeedbackInstance
     *
     * @param int $qualityScore The call quality expressed as an integer from 1 to 5
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Created FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(int $qualityScore, array $options = []) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call\FeedbackInstance
    {
        $options = new \WSAL_Vendor\Twilio\Values($options);
        $data = \WSAL_Vendor\Twilio\Values::of(['QualityScore' => $qualityScore, 'Issue' => \WSAL_Vendor\Twilio\Serialize::map($options['issue'], function ($e) {
            return $e;
        })]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call\FeedbackInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['callSid']);
    }
    /**
     * Update the FeedbackInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Updated FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call\FeedbackInstance
    {
        $options = new \WSAL_Vendor\Twilio\Values($options);
        $data = \WSAL_Vendor\Twilio\Values::of(['QualityScore' => $options['qualityScore'], 'Issue' => \WSAL_Vendor\Twilio\Serialize::map($options['issue'], function ($e) {
            return $e;
        })]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call\FeedbackInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['callSid']);
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
        return '[Twilio.Api.V2010.FeedbackContext ' . \implode(' ', $context) . ']';
    }
}