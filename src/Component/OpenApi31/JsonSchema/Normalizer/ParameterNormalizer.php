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

class ParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\Parameter::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\Parameter();
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('deprecated', $data) && \is_int($data['deprecated'])) {
            $data['deprecated'] = (bool) $data['deprecated'];
        }
        if (\array_key_exists('explode', $data) && \is_int($data['explode'])) {
            $data['explode'] = (bool) $data['explode'];
        }
        if (\array_key_exists('allowReserved', $data) && \is_int($data['allowReserved'])) {
            $data['allowReserved'] = (bool) $data['allowReserved'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('in', $data) && $data['in'] !== null) {
            $object->setIn($data['in']);
        } elseif (\array_key_exists('in', $data) && $data['in'] === null) {
            $object->setIn(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
        } elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
        } elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('schema', $data) && $data['schema'] !== null) {
            $object->setSchema($data['schema']);
        } elseif (\array_key_exists('schema', $data) && $data['schema'] === null) {
            $object->setSchema(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi31\JsonSchema\Model\MediaType::class, 'json', $context);
            }
            $object->setContent($values);
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('style', $data) && $data['style'] !== null) {
            $object->setStyle($data['style']);
        } elseif (\array_key_exists('style', $data) && $data['style'] === null) {
            $object->setStyle(null);
        }
        if (\array_key_exists('explode', $data) && $data['explode'] !== null) {
            $object->setExplode($data['explode']);
        } elseif (\array_key_exists('explode', $data) && $data['explode'] === null) {
            $object->setExplode(null);
        }
        if (\array_key_exists('allowReserved', $data) && $data['allowReserved'] !== null) {
            $object->setAllowReserved($data['allowReserved']);
        } elseif (\array_key_exists('allowReserved', $data) && $data['allowReserved'] === null) {
            $object->setAllowReserved(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['in'] = $data->getIn();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('required') && null !== $data->getRequired()) {
            $dataArray['required'] = $data->getRequired();
        }
        if ($data->isInitialized('deprecated') && null !== $data->getDeprecated()) {
            $dataArray['deprecated'] = $data->getDeprecated();
        }
        if ($data->isInitialized('schema') && null !== $data->getSchema()) {
            $dataArray['schema'] = $data->getSchema();
        }
        if ($data->isInitialized('content') && null !== $data->getContent()) {
            $values = [];
            foreach ($data->getContent() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['content'] = $values;
        }
        if ($data->isInitialized('style') && null !== $data->getStyle()) {
            $dataArray['style'] = $data->getStyle();
        }
        if ($data->isInitialized('explode') && null !== $data->getExplode()) {
            $dataArray['explode'] = $data->getExplode();
        }
        if ($data->isInitialized('allowReserved') && null !== $data->getAllowReserved()) {
            $dataArray['allowReserved'] = $data->getAllowReserved();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\Parameter::class => false];
    }
}
