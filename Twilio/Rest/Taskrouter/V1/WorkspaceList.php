<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class WorkspaceList extends ListResource {
    /**
     * Construct the WorkspaceList
     * 
     * @param Version $version Version that contains the resource
     * @return WorkspaceList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array();
        $this->uri = '/Workspaces';
    }

    /**
     * Create a new WorkspaceInstance
     * 
     * @param string $friendlyName The friendly_name
     * @return WorkspaceInstance Newly created WorkspaceInstance
     */
    public function create($friendlyName, $options) {
        $data = Values::of(array(
            'FriendlyName' => $friendlyName,
            'EventCallbackUrl' => $options['eventCallbackUrl'],
            'Template' => $options['template'],
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new WorkspaceInstance(
            $this->version,
            $payload
        );
    }

    /**
     * Constructs a WorkspaceContext
     * 
     * @param string $sid The sid
     * @return WorkspaceContext 
     */
    public function getContext($sid) {
        return new WorkspaceContext(
            $this->version,
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Taskrouter.V1.WorkspaceList]';
    }
}