<?php

namespace Docker\Api\Model;

class SystemVersionComponentsItem
{
    /**
     * Name of the component
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * Version of the component
     * 
     *
     * @var string
     */
    public string $version;
    /**
     * Key/value pairs of strings with additional information about the
     * component. These values are intended for informational purposes
     * only, and their content is not defined, and not part of the API
     * specification.
     * 
     * These messages can be printed by the client as information to the user.
     * 
     *
     * @var mixed|null
     */
    public $details;
}