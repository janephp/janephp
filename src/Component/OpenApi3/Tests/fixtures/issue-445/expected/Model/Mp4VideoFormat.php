<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class Mp4VideoFormat extends FormatBase implements AdditionalPropertiesInterface
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
     * Allows resizing of the video.
     *
     * @var ResizeAction|null
     */
    protected $resizeAction;
    /**
     * Gets or sets the encoding audio codec.
     *
     * @var AudioFormatBase|null
     */
    protected $audioCodec;
    /**
     * Gets or sets the encoding codec preset.
     *
     * @var string
     */
    protected $preset;
    /**
     * @var string|null
     */
    protected $extension;
    /**
     * Allows resizing of the video.
     *
     * @return ResizeAction|null
     */
    public function getResizeAction(): ?ResizeAction
    {
        return $this->resizeAction;
    }
    /**
     * Allows resizing of the video.
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
    /**
     * Gets or sets the encoding audio codec.
     *
     * @return AudioFormatBase|null
     */
    public function getAudioCodec(): ?AudioFormatBase
    {
        return $this->audioCodec;
    }
    /**
     * Gets or sets the encoding audio codec.
     *
     * @param AudioFormatBase|null $audioCodec
     *
     * @return self
     */
    public function setAudioCodec(?AudioFormatBase $audioCodec): self
    {
        $this->initialized['audioCodec'] = true;
        $this->audioCodec = $audioCodec;
        return $this;
    }
    /**
     * Gets or sets the encoding codec preset.
     *
     * @return string
     */
    public function getPreset(): string
    {
        return $this->preset;
    }
    /**
     * Gets or sets the encoding codec preset.
     *
     * @param string $preset
     *
     * @return self
     */
    public function setPreset(string $preset): self
    {
        $this->initialized['preset'] = true;
        $this->preset = $preset;
        return $this;
    }
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
    public function definedProperties(): array
    {
        return ['resizeAction' => ['resizeAction', 'getResizeAction', 'setResizeAction'], 'audioCodec' => ['audioCodec', 'getAudioCodec', 'setAudioCodec'], 'preset' => ['preset', 'getPreset', 'setPreset'], 'extension' => ['extension', 'getExtension', 'setExtension']];
    }
}