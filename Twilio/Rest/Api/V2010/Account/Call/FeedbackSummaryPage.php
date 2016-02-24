<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Page;
use Twilio\Values;

class FeedbackSummaryPage extends Page {
    public function __construct($version, $response, $solution) {
        parent::__construct($version, $response);
        
        // Path Solution
        $this->solution = $solution;
    }

    /**
     * Create a new FeedbackSummaryInstance
     * 
     * @param string $startDate The start_date
     * @param string $endDate The end_date
     * @param array $options Optional Arguments
     * @return FeedbackSummaryInstance Newly created FeedbackSummaryInstance
     */
    public function create($startDate, $endDate, array $options = array()) {
        $options = new Values($options);
        
        $data = Values::of(array(
            'StartDate' => $startDate,
            'EndDate' => $endDate,
            'IncludeSubaccounts' => $options['includeSubaccounts'],
            'StatusCallback' => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new FeedbackSummaryInstance(
            $this->version,
            $payload,
            $this->solution['accountSid']
        );
    }

    public function buildInstance(array $payload) {
        return new FeedbackSummaryInstance(
            $this->version,
            $payload,
            $this->solution['accountSid']
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.FeedbackSummaryPage]';
    }
}