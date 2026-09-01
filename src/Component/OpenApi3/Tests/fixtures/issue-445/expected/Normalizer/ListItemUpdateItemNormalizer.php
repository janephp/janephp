<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ListItemUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemUpdateItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemUpdateItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemUpdateItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->content = $values;
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->content = null;
            unset($data['content']);
        }
        if (\array_key_exists('contentFieldsUpdateOptions', $data)) {
            $value_1 = $data['contentFieldsUpdateOptions'];
            if (is_string($data['contentFieldsUpdateOptions'])) {
                $value_1 = $data['contentFieldsUpdateOptions'];
            }
            $object->contentFieldsUpdateOptions = $value_1;
            unset($data['contentFieldsUpdateOptions']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('content', get_object_vars($data)) && null !== ($data->content ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->content ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['content'] = $values;
        }
        $value_1 = $data->contentFieldsUpdateOptions ?? null;
        if (is_string($data->contentFieldsUpdateOptions ?? null)) {
            $value_1 = $data->contentFieldsUpdateOptions ?? null;
        }
        $dataArray['contentFieldsUpdateOptions'] = $value_1;
        $dataArray['id'] = $data->id ?? null;
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemUpdateItem::class => false];
    }
}