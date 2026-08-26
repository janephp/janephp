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

class EncodingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\Encoding::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\Encoding;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\Encoding();
        if (\array_key_exists('explode', $data) && \is_int($data['explode'])) {
            $data['explode'] = (bool) $data['explode'];
        }
        if (\array_key_exists('allowReserved', $data) && \is_int($data['allowReserved'])) {
            $data['allowReserved'] = (bool) $data['allowReserved'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentType', $data) && $data['contentType'] !== null) {
            $object->setContentType($data['contentType']);
        } elseif (\array_key_exists('contentType', $data) && $data['contentType'] === null) {
            $object->setContentType(null);
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
        if ($data->isInitialized('contentType') && null !== $data->getContentType()) {
            $dataArray['contentType'] = $data->getContentType();
        }
        if ($data->isInitialized('headers') && null !== $data->getHeaders()) {
            $values = [];
            foreach ($data->getHeaders() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['headers'] = $values;
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
        return [\Jane\Component\OpenApi31\JsonSchema\Model\Encoding::class => false];
    }
}
