<?php

namespace Jane\OpenApi\SchemaParser;

use Jane\OpenApi\JsonSchema\Model\OpenApi;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Exception\ExceptionInterface as YamlException;
use Symfony\Component\Yaml\Yaml;

class SchemaParser
{
    /** @var SerializerInterface */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Parse an file into a OpenAPI Schema model.
     */
    public function parseSchema(string $openApiSpecPath): OpenApi
    {
        $openApiSpecContents = file_get_contents($openApiSpecPath);
        $jsonException = null;
        $yamlException = null;

        try {
            return $this->deserialize($openApiSpecContents, $openApiSpecPath);
        } catch (\Exception $exception) {
            $jsonException = $exception;
        }

        try {
            $content = Yaml::parse(
                $openApiSpecContents,
                Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE
            );

            return $this->denormalize($content, $openApiSpecPath);
        } catch (YamlException $yamlException) {
            throw new \LogicException(sprintf(
                "Could not parse schema in JSON nor YAML format:\n- JSON error: \"%s\"\n- YAML error: \"%s\"\n",
                $jsonException->getMessage(),
                $yamlException->getMessage()
            ));
        }
    }

    private function deserialize($openApiSpecContents, $openApiSpecPath)
    {
        $openApiData = json_decode($openApiSpecContents);

        return $this->denormalize($openApiData, $openApiSpecPath);
    }

    private function denormalize($openApiSpecData, $openApiSpecPath): OpenApi
    {
        if (!($openApiSpecData instanceof \stdClass && property_exists($openApiSpecData, 'openapi') && version_compare($openApiSpecData->openapi, '3.0.0', '>='))) {
            throw new \BadMethodCallException('Only OpenAPI v3 specifications and up are supported, use an external tool to convert your api files');
        }

        return $this->serializer->denormalize(
            $openApiSpecData,
            OpenApi::class,
            'json',
            [
                'document-origin' => $openApiSpecPath,
            ]
        );
    }
}
