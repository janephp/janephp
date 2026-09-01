<?php

namespace PicturePark\API\Model;

class LiveStream
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string|null
     */
    public ?string $document;
    /**
     * @var string|null
     */
    public ?string $scopeType;
    /**
     * @var \DateTime
     */
    public \DateTime $timestamp;
    /**
     * @var LiveStreamTraceJob|null
     */
    public ?LiveStreamTraceJob $traceJob;
    /**
     * @var UserAudit|null
     */
    public ?UserAudit $audit;
}