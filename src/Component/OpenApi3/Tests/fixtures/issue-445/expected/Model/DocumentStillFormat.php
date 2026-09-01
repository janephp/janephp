<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class DocumentStillFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $extension;
    /**
     * Allows resizing of the image.
     *
     * @var ResizeAction|null
     */
    public ?ResizeAction $resizeAction;
    public function definedProperties(): array
    {
        return ['extension' => 'extension', 'resizeAction' => 'resizeAction'];
    }
}