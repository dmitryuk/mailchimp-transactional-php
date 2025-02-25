<?php

/**
 * UrlsApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.26
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * UrlsApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UrlsApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Add tracking domains
     * Add a tracking domain to your account.
     */
    public function addTrackingDomain($body = [])
    {
        return $this->config->post('/urls/add-tracking-domain', $body);
    }
    /**
     * Check cname settings
     * Checks the CNAME settings for a tracking domain. The domain must have been added already with the add-tracking-domain call.
     */
    public function checkTrackingDomain($body = [])
    {
        return $this->config->post('/urls/check-tracking-domain', $body);
    }
    /**
     * List most clicked urls
     * Get the 100 most clicked URLs.
     */
    public function list($body = [])
    {
        return $this->config->post('/urls/list', $body);
    }
    /**
     * Search most clicked urls
     * Return the 100 most clicked URLs that match the search query given.
     */
    public function search($body = [])
    {
        return $this->config->post('/urls/search', $body);
    }
    /**
     * Get url history
     * Return the recent history (hourly stats for the last 30 days) for a URL
     */
    public function timeSeries($body = [])
    {
        return $this->config->post('/urls/time-series', $body);
    }
    /**
     * List tracking domains
     * Get the list of tracking domains set up for this account.
     */
    public function trackingDomains($body = [])
    {
        return $this->config->post('/urls/tracking-domains', $body);
    }
}
