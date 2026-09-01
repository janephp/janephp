<?php

namespace PicturePark\API\Model;

class TransferFile
{
    /**
     * Replaced in favor of RequestId. Client generated identifier of the item.
     *
     * @deprecated
     *
     * @var string|null
     */
    public ?string $identifier;
    /**
     * Client generated identifier of the item.
     *
     * @var string|null
     */
    public ?string $requestId;
}