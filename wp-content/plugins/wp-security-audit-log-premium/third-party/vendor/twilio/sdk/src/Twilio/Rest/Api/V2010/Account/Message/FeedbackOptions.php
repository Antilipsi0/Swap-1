<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Message;

use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
abstract class FeedbackOptions
{
    /**
     * @param string $outcome Whether the feedback has arrived
     * @return CreateFeedbackOptions Options builder
     */
    public static function create(string $outcome = \WSAL_Vendor\Twilio\Values::NONE) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Message\CreateFeedbackOptions
    {
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Message\CreateFeedbackOptions($outcome);
    }
}
class CreateFeedbackOptions extends \WSAL_Vendor\Twilio\Options
{
    /**
     * @param string $outcome Whether the feedback has arrived
     */
    public function __construct(string $outcome = \WSAL_Vendor\Twilio\Values::NONE)
    {
        $this->options['outcome'] = $outcome;
    }
    /**
     * Whether the feedback has arrived. Can be: `unconfirmed` or `confirmed`. If `provide_feedback`=`true` in [the initial HTTP POST](https://www.twilio.com/docs/sms/api/message-resource#create-a-message-resource), the initial value of this property is `unconfirmed`. After the message arrives, update the value to `confirmed`.
     *
     * @param string $outcome Whether the feedback has arrived
     * @return $this Fluent Builder
     */
    public function setOutcome(string $outcome) : self
    {
        $this->options['outcome'] = $outcome;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(\WSAL_Vendor\Twilio\Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.CreateFeedbackOptions ' . $options . ']';
    }
}