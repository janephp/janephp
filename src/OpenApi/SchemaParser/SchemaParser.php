<?php

namespace Jane\OpenApi\SchemaParser;

use Jane\OpenApi\Exception\ParseFailureException;
use Jane\OpenApi\Model\OpenApi;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Yaml;

class SchemaParser
{
    const OPEN_API_MODEL    = "Joli\\Jane\\OpenApi\\Model\\OpenApi";
    const EXCEPTION_MESSAGE = "Could not parse \"%s\", is it a valid specification?";
    const CONTENT_TYPE_JSON = 'json';
    const CONTENT_TYPE_YAML = 'yaml';
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * SchemaParser constructor.
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }


    /**
     * Parse an file into a OpenAPI Schema model
     *
     * @param string $openApiSpec
     *
     * @return OpenApi
     *
     * @throws ParseFailureException
     */
    public function parseSchema($openApiSpec)
    {
        $openApiSpecContents = file_get_contents($openApiSpec);
        $schemaClass         = self::OPEN_API_MODEL;
        $schema              = null;
        $jsonException       = null;
        $yamlException       = null;

        try {
            return $this->serializer->deserialize(
                $openApiSpecContents,
                $schemaClass,
                self::CONTENT_TYPE_JSON,
                [
                    'document-origin' => $openApiSpec
                ]
            );
        } catch (\Exception $exception) {
            $jsonException = $exception;
        }

        $content = Yaml::parse($openApiSpecContents, Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE);
        $openApiSpecContents = json_encode($content);

        return $this->serializer->deserialize(
            $openApiSpecContents,
            $schemaClass,
            self::CONTENT_TYPE_JSON,
            [
                'document-origin' => $openApiSpec
            ]
        );
    }
}
