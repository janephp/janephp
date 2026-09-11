<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class L2AccessControlModifyL2AccessControlNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlModifyL2AccessControl::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlModifyL2AccessControl::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlModifyL2AccessControl();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('restriction', $data)) {
            $object->restriction = $data['restriction'];
        }
        if (\array_key_exists('rules', $data)) {
            $values = [];
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlRuleObject::class, 'json', $context);
            }
            $object->rules = $values;
        }
        if (\array_key_exists('etherTypeRestriction', $data)) {
            $object->etherTypeRestriction = $data['etherTypeRestriction'];
        }
        if (\array_key_exists('etherTypes', $data)) {
            $values_1 = [];
            foreach ($data['etherTypes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlEtherTypeObject::class, 'json', $context);
            }
            $object->etherTypes = $values_1;
        }
        if (\array_key_exists('userDefinedEtherTypes', $data)) {
            $values_2 = [];
            foreach ($data['userDefinedEtherTypes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlUserDefinedEtherTypeObject::class, 'json', $context);
            }
            $object->userDefinedEtherTypes = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        $dataArray['restriction'] = $data->restriction;
        if (array_key_exists('rules', get_object_vars($data)) && null !== ($data->rules ?? null)) {
            $values = [];
            foreach ($data->rules as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['rules'] = $values;
        }
        $dataArray['etherTypeRestriction'] = $data->etherTypeRestriction;
        if (array_key_exists('etherTypes', get_object_vars($data)) && null !== ($data->etherTypes ?? null)) {
            $values_1 = [];
            foreach ($data->etherTypes as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['etherTypes'] = $values_1;
        }
        if (array_key_exists('userDefinedEtherTypes', get_object_vars($data)) && null !== ($data->userDefinedEtherTypes ?? null)) {
            $values_2 = [];
            foreach ($data->userDefinedEtherTypes as $value_2) {
                $normalized_2 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['userDefinedEtherTypes'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlModifyL2AccessControl::class => false];
    }
}