<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TransferUploadFile implements AdditionalPropertiesInterface
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
     * Target filename of file.
     *
     * @var string
     */
    public string $fileName;
    public function definedProperties(): array
    {
        return ['identifier' => 'identifier', 'requestId' => 'requestId', 'fileName' => 'fileName'];
    }
}