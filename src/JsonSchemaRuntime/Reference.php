<?php

declare(strict_types=1);

namespace Jane\JsonSchemaRuntime;

use League\Uri\AbstractUri;
use League\Uri\Http;
use League\Uri\Parser;
use Rs\Json\Pointer;
use Symfony\Component\Yaml\Yaml;

/**
 * Deal with a Json Reference.
 */
class Reference
{
    private static $fileCache = [];
    private static $pointerCache = [];
    private static $arrayCache = [];

    private $resolved;

    private $referenceUri;

    private $originUri;

    private $mergedUri;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var float|null
     */
    protected $multipleOf;

    /**
     * @var float|null
     */
    protected $maximum;

    /**
     * @var bool|null
     */
    protected $exclusiveMaximum;

    /**
     * @var float|null
     */
    protected $minimum;

    /**
     * @var bool|null
     */
    protected $exclusiveMinimum;

    /**
     * @var int|null
     */
    protected $maxLength;

    /**
     * @var int|null
     */
    protected $minLength;

    /**
     * @var string|null
     */
    protected $pattern;

    /**
     * @var int|null
     */
    protected $maxItems;

    /**
     * @var int|null
     */
    protected $minItems;

    /**
     * @var bool|null
     */
    protected $uniqueItems;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $format;

    /**
     * @var bool|null
     */
    protected $nullable;

    /**
     * @var bool|null
     */
    protected $readOnly;

    /**
     * @var bool|null
     */
    protected $writeOnly;

    /**
     * @var mixed|null
     */
    protected $example;

    /**
     * @var bool|null
     */
    protected $deprecated;

    public function __construct(string $reference, string $origin)
    {
        $originParts = (new Parser())->parse($origin);
        $referenceParts = parse_url($reference);
        $mergedParts = array_merge($originParts, $referenceParts);

        if (\array_key_exists('path', $referenceParts)) {
            $mergedParts['path'] = $this->joinPath(\dirname($originParts['path']), $referenceParts['path']);
        }

        $this->referenceUri = Http::createFromString($reference);
        $this->originUri = Http::createFromString($origin);
        $this->mergedUri = Http::createFromComponents($mergedParts);
    }

    /**
     * Resolve a JSON Reference.
     *
     * @param callable $deserializeCallback
     *
     * @return mixed Return the json value (deserialized) referenced
     */
    public function resolve(callable $deserializeCallback = null)
    {
        if (null === $deserializeCallback) {
            $deserializeCallback = function ($data) { return $data; };
        }

        if (null === $this->resolved) {
            $this->resolved = $this->doResolve();
        }

        return $deserializeCallback($this->resolved);
    }

    /**
     * Resolve a JSON Reference for a Schema.
     *
     * @return mixed Return the json value referenced
     */
    protected function doResolve()
    {
        $fragment = (string) $this->mergedUri->withFragment('');
        $reference = sprintf('%s_%s', $fragment, $this->mergedUri->getFragment());

        if (!\array_key_exists($fragment, self::$fileCache)) {
            $contents = file_get_contents($fragment);

            if (!json_decode($contents) || JSON_ERROR_NONE !== json_last_error()) {
                $decoded = Yaml::parse($contents,
                    Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE);
                $contents = json_encode($decoded);
            }

            self::$fileCache[$fragment] = $contents;
        }

        if (!\array_key_exists($reference, self::$arrayCache)) {
            if ('' === $this->mergedUri->getFragment()) {
                $array = json_decode(self::$fileCache[$fragment]);
            } else {
                if (!\array_key_exists($fragment, self::$pointerCache)) {
                    self::$pointerCache[$fragment] = new Pointer(self::$fileCache[$fragment]);
                }

                $array = self::$pointerCache[$fragment]->get($this->mergedUri->getFragment());
            }

            self::$arrayCache[$reference] = $array;
        }

        return self::$arrayCache[$reference];
    }

    /**
     * Return true if reference and origin are in the same document.
     */
    public function isInCurrentDocument(): bool
    {
        return
            $this->mergedUri->getScheme() === $this->originUri->getScheme()
            &&
            $this->mergedUri->getHost() === $this->originUri->getHost()
            &&
            $this->mergedUri->getPort() === $this->originUri->getPort()
            &&
            $this->mergedUri->getPath() === $this->originUri->getPath()
            &&
            $this->mergedUri->getQuery() === $this->originUri->getQuery()
            ;
    }

    public function getMergedUri(): AbstractUri
    {
        return $this->mergedUri;
    }

    public function getReferenceUri(): AbstractUri
    {
        return $this->referenceUri;
    }

    public function getOriginUri(): AbstractUri
    {
        return $this->originUri;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return Reference
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMultipleOf(): ?float
    {
        return $this->multipleOf;
    }

    /**
     * @param float|null $multipleOf
     *
     * @return Reference
     */
    public function setMultipleOf(?float $multipleOf): self
    {
        $this->multipleOf = $multipleOf;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaximum(): ?float
    {
        return $this->maximum;
    }

    /**
     * @param float|null $maximum
     *
     * @return Reference
     */
    public function setMaximum(?float $maximum): self
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getExclusiveMaximum(): ?bool
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @param bool|null $exclusiveMaximum
     *
     * @return Reference
     */
    public function setExclusiveMaximum(?bool $exclusiveMaximum): self
    {
        $this->exclusiveMaximum = $exclusiveMaximum;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinimum(): ?float
    {
        return $this->minimum;
    }

    /**
     * @param float|null $minimum
     *
     * @return Reference
     */
    public function setMinimum(?float $minimum): self
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getExclusiveMinimum(): ?bool
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @param bool|null $exclusiveMinimum
     *
     * @return Reference
     */
    public function setExclusiveMinimum(?bool $exclusiveMinimum): self
    {
        $this->exclusiveMinimum = $exclusiveMinimum;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int|null $maxLength
     *
     * @return Reference
     */
    public function setMaxLength(?int $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @param int|null $minLength
     *
     * @return Reference
     */
    public function setMinLength(?int $minLength): self
    {
        $this->minLength = $minLength;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * @param string|null $pattern
     *
     * @return Reference
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxItems(): ?int
    {
        return $this->maxItems;
    }

    /**
     * @param int|null $maxItems
     *
     * @return Reference
     */
    public function setMaxItems(?int $maxItems): self
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinItems(): ?int
    {
        return $this->minItems;
    }

    /**
     * @param int|null $minItems
     *
     * @return Reference
     */
    public function setMinItems(?int $minItems): self
    {
        $this->minItems = $minItems;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUniqueItems(): ?bool
    {
        return $this->uniqueItems;
    }

    /**
     * @param bool|null $uniqueItems
     *
     * @return Reference
     */
    public function setUniqueItems(?bool $uniqueItems): self
    {
        $this->uniqueItems = $uniqueItems;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return Reference
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return Reference
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string|null $format
     *
     * @return Reference
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNullable(): ?bool
    {
        return $this->nullable;
    }

    /**
     * @param bool|null $nullable
     *
     * @return Reference
     */
    public function setNullable(?bool $nullable): self
    {
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * @param bool|null $readOnly
     *
     * @return Reference
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWriteOnly(): ?bool
    {
        return $this->writeOnly;
    }

    /**
     * @param bool|null $writeOnly
     *
     * @return Reference
     */
    public function setWriteOnly(?bool $writeOnly): self
    {
        $this->writeOnly = $writeOnly;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    /**
     * @param bool|null $deprecated
     *
     * @return Reference
     */
    public function setDeprecated(?bool $deprecated): self
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * Join path like unix path join :.
     *
     *   a/b + c => a/b/c
     *   a/b + /c => /c
     *   a/b/c + .././d => a/b/d
     */
    private function joinPath(...$paths): string
    {
        $resultPath = null;

        foreach ($paths as $path) {
            if (null === $resultPath || (!empty($path) && '/' === $path[0])) {
                $resultPath = $path;
            } else {
                $resultPath = $resultPath . '/' . $path;
            }
        }

        $resultPath = preg_replace('~/{2,}~', '/', $resultPath);

        if ('/' === $resultPath) {
            return '/';
        }

        $resultPathParts = [];
        foreach (explode('/', rtrim($resultPath, '/')) as $part) {
            if ('.' === $part) {
                continue;
            }

            if ('..' === $part && \count($resultPathParts) > 0) {
                array_pop($resultPathParts);
                continue;
            }

            $resultPathParts[] = $part;
        }

        return implode('/', $resultPathParts);
    }
}
