<?php

namespace PicturePark\API\Model;

class QueryDebugInformation
{
    /**
     * @var string|null
     */
    public ?string $general;
    /**
     * @var string|null
     */
    public ?string $auditTrail;
    /**
     * @var mixed|null
     */
    public $request;
    /**
     * @var mixed|null
     */
    public $response;
}