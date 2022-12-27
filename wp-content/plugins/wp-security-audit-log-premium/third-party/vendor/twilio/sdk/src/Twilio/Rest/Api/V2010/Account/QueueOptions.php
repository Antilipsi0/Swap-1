<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account;

use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
abstract class QueueOptions
{
    /**
     * @param string $friendlyName A string to describe this resource
     * @param int $maxSize The max number of calls allowed in the queue
     * @return UpdateQueueOptions Options builder
     */
    public static function update(string $friendlyName = \WSAL_Vendor\Twilio\Values::NONE, int $maxSize = \WSAL_Vendor\Twilio\Values::NONE) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\UpdateQueueOptions
    {
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\UpdateQueueOptions($friendlyName, $maxSize);
    }
    /**
     * @param int $maxSize The max number of calls allowed in the queue
     * @return CreateQueueOptions Options builder
     */
    public static function create(int $maxSize = \WSAL_Vendor\Twilio\Values::NONE) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\CreateQueueOptions
    {
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\CreateQueueOptions($maxSize);
    }
}
class UpdateQueueOptions extends \WSAL_Vendor\Twilio\Options
{
    /**
     * @param string $friendlyName A string to describe this resource
     * @param int $maxSize The max number of calls allowed in the queue
     */
    public function __construct(string $friendlyName = \WSAL_Vendor\Twilio\Values::NONE, int $maxSize = \WSAL_Vendor\Twilio\Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['maxSize'] = $maxSize;
    }
    /**
     * A descriptive string that you created to describe this resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A string to describe this resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * The maximum number of calls allowed to be in the queue. The default is 100. The maximum is 5000.
     *
     * @param int $maxSize The max number of calls allowed in the queue
     * @return $this Fluent Builder
     */
    public function setMaxSize(int $maxSize) : self
    {
        $this->options['maxSize'] = $maxSize;
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
        return '[Twilio.Api.V2010.UpdateQueueOptions ' . $options . ']';
    }
}
class CreateQueueOptions extends \WSAL_Vendor\Twilio\Options
{
    /**
     * @param int $maxSize The max number of calls allowed in the queue
     */
    public function __construct(int $maxSize = \WSAL_Vendor\Twilio\Values::NONE)
    {
        $this->options['maxSize'] = $maxSize;
    }
    /**
     * The maximum number of calls allowed to be in the queue. The default is 100. The maximum is 5000.
     *
     * @param int $maxSize The max number of calls allowed in the queue
     * @return $this Fluent Builder
     */
    public function setMaxSize(int $maxSize) : self
    {
        $this->options['maxSize'] = $maxSize;
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
        return '[Twilio.Api.V2010.CreateQueueOptions ' . $options . ']';
    }
}
