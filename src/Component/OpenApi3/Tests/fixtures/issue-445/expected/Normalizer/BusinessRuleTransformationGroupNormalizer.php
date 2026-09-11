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
class BusinessRuleTransformationGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTransformationGroup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTransformationGroup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTransformationGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('inputs', $data) && $data['inputs'] !== null) {
            $values = [];
            foreach ($data['inputs'] as $value) {
                $values[] = $value;
            }
            $object->inputs = $values;
        }
        elseif (\array_key_exists('inputs', $data)) {
            $object->inputs = null;
        }
        if (\array_key_exists('transformations', $data) && $data['transformations'] !== null) {
            $values_1 = [];
            foreach ($data['transformations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\BusinessRuleTransformation::class, 'json', $context);
            }
            $object->transformations = $values_1;
        }
        elseif (\array_key_exists('transformations', $data)) {
            $object->transformations = null;
        }
        if (\array_key_exists('storeIn', $data) && $data['storeIn'] !== null) {
            $object->storeIn = $data['storeIn'];
        }
        elseif (\array_key_exists('storeIn', $data)) {
            $object->storeIn = null;
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->traceRefId = $data['traceRefId'];
        }
        elseif (\array_key_exists('traceRefId', $data)) {
            $object->traceRefId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('inputs', get_object_vars($data)) && null !== ($data->inputs ?? null)) {
            $values = [];
            foreach ($data->inputs as $value) {
                $values[] = $value;
            }
            $dataArray['inputs'] = $values;
        }
        if (array_key_exists('transformations', get_object_vars($data)) && null !== ($data->transformations ?? null)) {
            $values_1 = [];
            foreach ($data->transformations as $value_1) {
                $normalized = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['transformations'] = $values_1;
        }
        if (array_key_exists('storeIn', get_object_vars($data)) && null !== ($data->storeIn ?? null)) {
            $dataArray['storeIn'] = $data->storeIn;
        }
        if (array_key_exists('traceRefId', get_object_vars($data)) && null !== ($data->traceRefId ?? null)) {
            $dataArray['traceRefId'] = $data->traceRefId;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTransformationGroup::class => false];
    }
}