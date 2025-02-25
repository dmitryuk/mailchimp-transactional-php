<?php

/**
 * MessagesApi
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
 * MessagesApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagesApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Cancel scheduled email
     * Cancels a scheduled email.
     */
    public function cancelScheduled($body = [])
    {
        return $this->config->post('/messages/cancel-scheduled', $body);
    }
    /**
     * Get message content
     * Get the full content of a recently sent message.
     */
    public function content($body = [])
    {
        return $this->config->post('/messages/content', $body);
    }
    /**
     * Get message info
     * Get the information for a single recently sent message.
     */
    public function info($body = [])
    {
        return $this->config->post('/messages/info', $body);
    }
    /**
     * List scheduled emails
     * Queries your scheduled emails.
     */
    public function listScheduled($body = [])
    {
        return $this->config->post('/messages/list-scheduled', $body);
    }
    /**
     * Parse mime document
     * Parse the full MIME document for an email message, returning the content of the message broken into its constituent pieces.
     */
    public function parse($body = [])
    {
        return $this->config->post('/messages/parse', $body);
    }
    /**
     * Reschedule email
     * Reschedules a scheduled email.
     */
    public function reschedule($body = [])
    {
        return $this->config->post('/messages/reschedule', $body);
    }
    /**
     * Search messages by date
     * Search recently sent messages and optionally narrow by date range, tags, senders, and API keys. If no date range is specified, results within the last 7 days are returned. This method may be called up to 20 times per minute. If you need the data more often, you can use /messages/info.json to get the information for a single message, or webhooks to push activity to your own application for querying.
     */
    public function search($body = [])
    {
        return $this->config->post('/messages/search', $body);
    }
    /**
     * Search messages by hour
     * Search the content of recently sent messages and return the aggregated hourly stats for matching messages.
     */
    public function searchTimeSeries($body = [])
    {
        return $this->config->post('/messages/search-time-series', $body);
    }
    /**
     * Send new message
     * Send a new transactional message through the Transactional API.
     */
    public function send($body = [])
    {
        return $this->config->post('/messages/send', $body);
    }
    /**
     * Send mime document
     * Take a raw MIME document for a message, and send it exactly as if it were sent through the Transactional API&#39;s SMTP servers.
     */
    public function sendRaw($body = [])
    {
        return $this->config->post('/messages/send-raw', $body);
    }
    /**
     * Send using message template
     * Send a new transactional message through the Transactional API using a template.
     */
    public function sendTemplate($body = [])
    {
        return $this->config->post('/messages/send-template', $body);
    }
}
