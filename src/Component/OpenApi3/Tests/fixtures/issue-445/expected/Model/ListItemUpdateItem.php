<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ListItemUpdateItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema of the list item.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $content;
    /**
     * Options to modify the behavior for updating the content.
     * Merge: the values specified in the Content object are merged to the existing content.
     * Replace: the values specified in the Content object entirely replace any existing content.
     * Defaults to Merge.
     *
     * @var string
     */
    public string $contentFieldsUpdateOptions = 'Merge';
    /**
     * The list item id.
     *
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['content' => 'content', 'contentFieldsUpdateOptions' => 'contentFieldsUpdateOptions', 'id' => 'id'];
    }
}