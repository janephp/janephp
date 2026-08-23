<?php

namespace Jane\Component\OpenApi31\Normalizer;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\Components;
use Jane\Component\OpenApi31\JsonSchema\Model\Header;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi31\JsonSchema\Model\Response;
use Jane\Component\OpenApi31\JsonSchema\Model\Responses;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SchemaDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    private const SUPPORTED_TYPES = [
        MediaType::class,
        Parameter::class,
        Header::class,
        Components::class,
        Responses::class,
    ];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \in_array($type, self::SUPPORTED_TYPES, true) && !($context['jane_schema_denormalizer_pass'] ?? false);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $context['jane_schema_denormalizer_pass'] = true;

        if ($type === Components::class && \is_array($data)) {
            $data = $this->denormalizeComponentsSchemas($data, $format, $context);
            $data = $this->denormalizeComponentsResponses($data, $format, $context);
            $data = $this->denormalizeComponentsSecuritySchemas($data, $format, $context);
        }

        if ($type === Responses::class && \is_array($data)) {
            $data = $this->denormalizeResponsesEntries($data, $format, $context);
        }

        if (\in_array($type, [MediaType::class, Parameter::class, Header::class], true) && \is_array($data) && \array_key_exists('schema', $data)) {
            $data['schema'] = $this->denormalizeSchemaField($data['schema'], $format, $context);
        }

        return $this->denormalizer->denormalize($data, $type, $format, $context);
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            MediaType::class => false,
            Parameter::class => false,
            Header::class => false,
            Components::class => false,
            Responses::class => false,
        ];
    }

    private function denormalizeSchemaField(mixed $schemaData, ?string $format, array $context): mixed
    {
        if (\is_bool($schemaData)) {
            $jsonSchema = new JsonSchema();

            return $jsonSchema;
        }

        if (\is_array($schemaData)) {
            if (isset($schemaData['$ref'])) {
                return new Reference($schemaData['$ref'], $context['document-origin'] ?? '');
            }

            return $this->denormalizer->denormalize($schemaData, JsonSchema::class, $format, $context);
        }

        return $schemaData;
    }

    private function denormalizeComponentsSchemas(array $data, ?string $format, array $context): array
    {
        if (!isset($data['schemas']) || !\is_array($data['schemas'])) {
            return $data;
        }

        foreach ($data['schemas'] as $key => $schemaData) {
            if (\is_array($schemaData)) {
                if (isset($schemaData['$ref'])) {
                    $data['schemas'][$key] = new Reference($schemaData['$ref'], $context['document-origin'] ?? '');
                } else {
                    $data['schemas'][$key] = $this->denormalizer->denormalize($schemaData, JsonSchema::class, $format, $context);
                }
            }
        }

        return $data;
    }

    private function denormalizeResponsesEntries(array $data, ?string $format, array $context): array
    {
        foreach ($data as $key => $responseData) {
            $isResponseKey = 'default' === $key || 1 === preg_match('/^[1-5](?:[0-9]{2}|XX)$/', (string) $key);

            if ($isResponseKey && \is_array($responseData)) {
                $data[$key] = $this->denormalizeResponseEntry($responseData, $format, $context);
            }
        }

        return $data;
    }

    private function denormalizeResponseEntry(array $responseData, ?string $format, array $context): mixed
    {
        if (isset($responseData['$ref'])) {
            return new Reference($responseData['$ref'], $context['document-origin'] ?? '');
        }

        if (!isset($responseData['description']) && !isset($responseData['content']) && !isset($responseData['headers'])) {
            return $responseData;
        }

        return $this->denormalizer->denormalize(
            $responseData,
            Response::class,
            $format,
            $this->withoutDenormalizerPass($context)
        );
    }

    private function denormalizeComponentsResponses(array $data, ?string $format, array $context): array
    {
        if (!isset($data['responses']) || !\is_array($data['responses'])) {
            return $data;
        }

        foreach ($data['responses'] as $key => $responseData) {
            if (\is_array($responseData)) {
                $data['responses'][$key] = $this->denormalizeResponseEntry($responseData, $format, $context);
            }
        }

        return $data;
    }

    private function withoutDenormalizerPass(array $context): array
    {
        unset($context['jane_schema_denormalizer_pass']);

        return $context;
    }

    private function denormalizeComponentsSecuritySchemas(array $data, ?string $format, array $context): array
    {
        if (!isset($data['securitySchemes']) || !\is_array($data['securitySchemes'])) {
            return $data;
        }

        foreach ($data['securitySchemes'] as $key => $schemeData) {
            if (\is_array($schemeData) && !isset($schemeData['$ref'])) {
                $data['securitySchemes'][$key] = $this->denormalizer->denormalize(
                    $schemeData,
                    EnrichedSecurityScheme::class,
                    $format,
                    $context
                );
            }
        }

        return $data;
    }
}
