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
class AssignTagboxItemsInLayerActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AssignTagboxItemsInLayerAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AssignTagboxItemsInLayerAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AssignTagboxItemsInLayerAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('replace', $data) && \is_int($data['replace'])) {
            $data['replace'] = (bool) $data['replace'];
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->traceRefId = $data['traceRefId'];
            unset($data['traceRefId']);
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->traceRefId = null;
            unset($data['traceRefId']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('namedCache', $data) && $data['namedCache'] !== null) {
            $object->namedCache = $data['namedCache'];
            unset($data['namedCache']);
        }
        elseif (\array_key_exists('namedCache', $data) && $data['namedCache'] === null) {
            $object->namedCache = null;
            unset($data['namedCache']);
        }
        if (\array_key_exists('refIds', $data) && $data['refIds'] !== null) {
            $object->refIds = $data['refIds'];
            unset($data['refIds']);
        }
        elseif (\array_key_exists('refIds', $data) && $data['refIds'] === null) {
            $object->refIds = null;
            unset($data['refIds']);
        }
        if (\array_key_exists('replace', $data)) {
            $object->replace = $data['replace'];
            unset($data['replace']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('traceRefId', get_object_vars($data)) && null !== ($data->traceRefId ?? null)) {
            $dataArray['traceRefId'] = $data->traceRefId ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('namedCache', get_object_vars($data)) && null !== ($data->namedCache ?? null)) {
            $dataArray['namedCache'] = $data->namedCache ?? null;
        }
        if (array_key_exists('refIds', get_object_vars($data)) && null !== ($data->refIds ?? null)) {
            $dataArray['refIds'] = $data->refIds ?? null;
        }
        if (array_key_exists('replace', get_object_vars($data)) && null !== ($data->replace ?? null)) {
            $dataArray['replace'] = $data->replace ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AssignTagboxItemsInLayerAction::class => false];
    }
}