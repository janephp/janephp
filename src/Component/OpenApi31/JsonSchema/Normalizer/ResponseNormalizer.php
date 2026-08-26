<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\Response::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\Response;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\Response();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('headers', $data) && $data['headers'] !== null) {
            $values = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['headers'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setHeaders($values);
        } elseif (\array_key_exists('headers', $data) && $data['headers'] === null) {
            $object->setHeaders(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_1 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['content'] as $key_1 => $value_1) {
                $values_1[$key_1] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi31\JsonSchema\Model\MediaType::class, 'json', $context);
            }
            $object->setContent($values_1);
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('links', $data) && $data['links'] !== null) {
            $values_2 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['links'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setLinks($values_2);
        } elseif (\array_key_exists('links', $data) && $data['links'] === null) {
            $object->setLinks(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('headers') && null !== $data->getHeaders()) {
            $values = [];
            foreach ($data->getHeaders() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['headers'] = $values;
        }
        if ($data->isInitialized('content') && null !== $data->getContent()) {
            $values_1 = [];
            foreach ($data->getContent() as $key_1 => $value_1) {
                $values_1[$key_1] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['content'] = $values_1;
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values_2 = [];
            foreach ($data->getLinks() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $dataArray['links'] = $values_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\Response::class => false];
    }
}
