<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Stream;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class IpAccessControlListMappingList extends \WSAL_Vendor\Twilio\ListResource
{
    /**
     * Construct the IpAccessControlListMappingList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique id of the Account that is responsible
     *                           for this resource.
     * @param string $domainSid The unique string that identifies the resource
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, string $accountSid, string $domainSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'domainSid' => $domainSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/Domains/' . \rawurlencode($domainSid) . '/IpAccessControlListMappings.json';
    }
    /**
     * Create the IpAccessControlListMappingInstance
     *
     * @param string $ipAccessControlListSid The unique id of the IP access control
     *                                       list to map to the SIP domain
     * @return IpAccessControlListMappingInstance Created
     *                                            IpAccessControlListMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $ipAccessControlListSid) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingInstance
    {
        $data = \WSAL_Vendor\Twilio\Values::of(['IpAccessControlListSid' => $ipAccessControlListSid]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['domainSid']);
    }
    /**
     * Streams IpAccessControlListMappingInstance records from the API as a
     * generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null) : \WSAL_Vendor\Twilio\Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);
        $page = $this->page($limits['pageSize']);
        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }
    /**
     * Reads IpAccessControlListMappingInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return IpAccessControlListMappingInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null) : array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), \false);
    }
    /**
     * Retrieve a single page of IpAccessControlListMappingInstance records from
     * the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return IpAccessControlListMappingPage Page of
     *                                        IpAccessControlListMappingInstance
     */
    public function page($pageSize = \WSAL_Vendor\Twilio\Values::NONE, string $pageToken = \WSAL_Vendor\Twilio\Values::NONE, $pageNumber = \WSAL_Vendor\Twilio\Values::NONE) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingPage
    {
        $params = \WSAL_Vendor\Twilio\Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize]);
        $response = $this->version->page('GET', $this->uri, $params);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingPage($this->version, $response, $this->solution);
    }
    /**
     * Retrieve a specific page of IpAccessControlListMappingInstance records from
     * the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return IpAccessControlListMappingPage Page of
     *                                        IpAccessControlListMappingInstance
     */
    public function getPage(string $targetUrl) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingPage
    {
        $response = $this->version->getDomain()->getClient()->request('GET', $targetUrl);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingPage($this->version, $response, $this->solution);
    }
    /**
     * Constructs a IpAccessControlListMappingContext
     *
     * @param string $sid A 34 character string that uniquely identifies the
     *                    resource to fetch.
     */
    public function getContext(string $sid) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingContext
    {
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingContext($this->version, $this->solution['accountSid'], $this->solution['domainSid'], $sid);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.IpAccessControlListMappingList]';
    }
}
