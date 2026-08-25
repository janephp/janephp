<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class VectorStillFormat extends FormatBase implements AdditionalPropertiesInterface
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
     * Specifies output dimensions for raster operation
     *
     * @var ResizeAction|null
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
     * Specifies output dimensions for raster operation
     *
     * @return ResizeAction|null
     */
    public function getResizeAction(): ?ResizeAction
    {
        return $this->resizeAction;
    }
    /**
     * Specifies output dimensions for raster operation
     *
     * @param ResizeAction|null $resizeAction
     *
     * @return self
     */
    public function setResizeAction(?ResizeAction $resizeAction): self
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