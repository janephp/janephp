<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class DocumentStillFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $extension;
    /**
     * Allows resizing of the image.
     *
     * @var mixed|null
     */
    protected $resizeAction;
    /**
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }
    /**
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
    /**
     * Allows resizing of the image.
     *
     * @return mixed
     */
    public function getResizeAction()
    {
        return $this->resizeAction;
    }
    /**
     * Allows resizing of the image.
     *
     * @param mixed $resizeAction
     *
     * @return self
     */
    public function setResizeAction($resizeAction): self
    {
        $this->initialized['resizeAction'] = true;
        $this->resizeAction = $resizeAction;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['extension' => ['extension', 'getExtension', 'setExtension'], 'resizeAction' => ['resizeAction', 'getResizeAction', 'setResizeAction']];
    }
}