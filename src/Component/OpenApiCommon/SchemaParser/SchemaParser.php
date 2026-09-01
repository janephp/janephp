<?php

namespace Jane\Component\OpenApiCommon\SchemaParser;

use Jane\Component\JsonSchema\Exception\InvalidSchemaException;
use Jane\Component\OpenApiCommon\Exception\CouldNotParseException;
use Jane\Component\OpenApiCommon\Exception\OpenApiVersionSupportException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Yaml\Exception\ExceptionInterface as YamlException;
use Symfony\Component\Yaml\Yaml;

abstract class SchemaParser
{
    /** @var array<string, mixed> */
    private array $parsed = [];

    protected const OPEN_API_MODEL = null;
    protected const OPEN_API_VERSION_MAJOR = null;

    public function __construct(
        private readonly DenormalizerInterface $denormalizer,
    ) {
    }

    public function parseSchema(string $openApiSpecPath)
    {
        if (!\array_key_exists($openApiSpecPath, $this->parsed)) {
            $openApiSpecContents = file_get_contents($openApiSpecPath);
            $jsonException = null;
            $yamlException = null;

            try {
                return $this->parsed[$openApiSpecPath] = $this->deserialize($openApiSpecContents, $openApiSpecPath);
            } catch (InvalidSchemaException $exception) {
                // Structural violations do not depend on the serialization format,
                // retrying as YAML would only report the same problem again.
                throw $exception;
            } catch (\TypeError $exception) {
                throw new CouldNotParseException(\sprintf('Could not parse schema "%s": "%s"', $openApiSpecPath, $exception->getMessage()));
            } catch (\Exception $exception) {
                $jsonException = $exception;
            }

            try {
                $content = Yaml::parse(
                    $openApiSpecContents,
                    Yaml::PARSE_OBJECT | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE
                );

                return $this->parsed[$openApiSpecPath] = $this->denormalize($content, $openApiSpecPath);
            } catch (InvalidSchemaException $exception) {
                throw $exception;
            } catch (\TypeError $exception) {
                throw new CouldNotParseException(\sprintf('Could not parse schema "%s": "%s"', $openApiSpecPath, $exception->getMessage()));
            } catch (YamlException $yamlException) {
                throw new CouldNotParseException(\sprintf("Could not parse schema in JSON nor YAML format:\n- JSON error: \"%s\"\n- YAML error: \"%s\"\n", $jsonException->getMessage(), $yamlException->getMessage()));
            }
        }

        return $this->parsed[$openApiSpecPath];
    }

    protected function deserialize($openApiSpecContents, $openApiSpecPath)
    {
        $openApiData = json_decode($openApiSpecContents, true);

        return $this->denormalize($openApiData, $openApiSpecPath);
    }

    abstract protected function validSchema($openApiSpecData): bool;

    /**
     * Checks the raw decoded document for features unsupported by the target
     * OpenAPI version, returning one human readable error per violation.
     *
     * @param array<mixed> $openApiSpecData
     *
     * @return array<string>
     */
    protected function validateSchema(array $openApiSpecData): array
    {
        return [];
    }

    protected function denormalize($openApiSpecData, $openApiSpecPath)
    {
        if (!$this->validSchema($openApiSpecData)) {
            throw new OpenApiVersionSupportException(\sprintf('Only OpenAPI v%s specifications and up are supported, use an external tool to convert your api files', static::OPEN_API_VERSION_MAJOR));
        }

        $errors = $this->validateSchema($openApiSpecData);

        if ([] !== $errors) {
            throw new InvalidSchemaException($errors);
        }

        return $this->denormalizer->denormalize(
            $openApiSpecData,
            static::OPEN_API_MODEL,
            'json',
            [
                'document-origin' => $openApiSpecPath,
            ]
        );
    }
}
