<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TransferWebLink implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    /**
     * URL of the item.
     *
     * @var string
     */
    public string $url;
    /**
     * Optional target filename of the file.
     *
     * @var string|null
     */
    public ?string $fileName;
    public function definedProperties(): array
    {
        return ['identifier' => 'identifier', 'requestId' => 'requestId', 'url' => 'url', 'fileName' => 'fileName'];
    }
}