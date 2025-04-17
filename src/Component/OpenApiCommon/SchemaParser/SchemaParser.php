<?php

namespace Jane\Component\OpenApiCommon\SchemaParser;

use Jane\Component\OpenApiCommon\Exception\CouldNotParseException;
use Jane\Component\OpenApiCommon\Exception\OpenApiVersionSupportException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Exception\ExceptionInterface as YamlException;
use Symfony\Component\Yaml\Yaml;

abstract class SchemaParser
{
    protected static $parsed = [];

    protected const OPEN_API_MODEL = null;
    protected const OPEN_API_VERSION_MAJOR = null;

    /** @var SerializerInterface */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function parseSchema(string $openApiSpecPath)
    {
        if (!\array_key_exists($openApiSpecPath, static::$parsed)) {
            $openApiSpecContents = file_get_contents($openApiSpecPath);
            $jsonException = null;
            $yamlException = null;

            try {
                return static::$parsed[$openApiSpecPath] = $this->deserialize($openApiSpecContents, $openApiSpecPath);
            } catch (\Exception $exception) {
                $jsonException = $exception;
            }

            try {
                $content = Yaml::parse(
                    $openApiSpecContents,
                    Yaml::PARSE_OBJECT | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE
                );

                return static::$parsed[$openApiSpecPath] = $this->denormalize($content, $openApiSpecPath);
            } catch (YamlException $yamlException) {
                throw new CouldNotParseException(\sprintf("Could not parse schema in JSON nor YAML format:\n- JSON error: \"%s\"\n- YAML error: \"%s\"\n", $jsonException->getMessage(), $yamlException->getMessage()));
            }
        }

        return static::$parsed[$openApiSpecPath];
    }

    protected function deserialize($openApiSpecContents, $openApiSpecPath)
    {
        $openApiData = json_decode($openApiSpecContents, true);

        return $this->denormalize($openApiData, $openApiSpecPath);
    }

    abstract protected function validSchema($openApiSpecData): bool;

    protected function denormalize($openApiSpecData, $openApiSpecPath)
    {
        if (!$this->validSchema($openApiSpecData)) {
            throw new OpenApiVersionSupportException(\sprintf('Only OpenAPI v%s specifications and up are supported, use an external tool to convert your api files', static::OPEN_API_VERSION_MAJOR));
        }

        return $this->serializer->denormalize(
            $openApiSpecData,
            static::OPEN_API_MODEL,
            'json',
            [
                'document-origin' => $openApiSpecPath,
            ]
        );
    }
}
