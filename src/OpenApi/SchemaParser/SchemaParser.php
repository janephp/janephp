<?php

namespace Jane\OpenApi\SchemaParser;

use Jane\OpenApi\Exception\ParseFailureException;
use Jane\OpenApi\JsonSchema\Version3\Model\OpenApi;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Exception\ExceptionInterface as YamlException;
use Symfony\Component\Yaml\Yaml;

class SchemaParser
{
    /** @var SerializerInterface  */
    private $serializer;

    /** @var Converter */
    private $converter;

    public function __construct(SerializerInterface $serializer, Converter $converter)
    {
        $this->serializer = $serializer;
        $this->converter = $converter;
    }

    /**
     * Parse an file into a OpenAPI Schema model.
     */
    public function parseSchema(string $openApiSpecPath, int $version): OpenApi
    {
        $openApiSpecContents = file_get_contents($openApiSpecPath);
        $jsonException = null;
        $yamlException = null;

        try {
            return $this->deserialize($openApiSpecContents, $openApiSpecPath, $version);
        } catch (\Exception $exception) {
            $jsonException = $exception;
        }

        try {
            $content = Yaml::parse(
                $openApiSpecContents,
                Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE
            );
            $openApiSpecContents = json_encode($content);
        } catch (YamlException $yamlException) {
            throw new \LogicException(sprintf(
                "Could not parse schema in JSON nor YAML format:\n- JSON error: \"%s\"\n- YAML error: \"%s\"\n",
                $jsonException->getMessage(),
                $yamlException->getMessage()
            ));
        }

        return $this->deserialize($openApiSpecContents, $openApiSpecPath, $version);
    }

    private function deserialize($openApiSpecContents, $openApiSpecPath, $version)
    {
        $schemaClass = $version === 3 ? OpenApi::class : \Jane\OpenApi\JsonSchema\Version2\Model\OpenApi::class;
        $openApi = $this->serializer->deserialize(
            $openApiSpecContents,
            $schemaClass,
            'json',
            [
                'document-origin' => $openApiSpecPath,
            ]
        );

        if ($version === 2) {
            return $this->converter->convert($openApi);
        }

        return $openApi;
    }
}
