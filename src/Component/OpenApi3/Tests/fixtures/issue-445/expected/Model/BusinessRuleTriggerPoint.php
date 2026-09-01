<?php

namespace PicturePark\API\Model;

class BusinessRuleTriggerPoint
{
    /**
     * Execution scope.
     *
     * @var string
     */
    public string $executionScope;
    /**
     * Document type.
     *
     * @var string
     */
    public string $documentType;
    /**
     * Action performed.
     *
     * @var string
     */
    public string $action;
}