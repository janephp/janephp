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
class BusinessRuleConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('disableRuleEngine', $data) && \is_int($data['disableRuleEngine'])) {
            $data['disableRuleEngine'] = (bool) $data['disableRuleEngine'];
        }
        if (\array_key_exists('disableRuleEngine', $data)) {
            $object->disableRuleEngine = $data['disableRuleEngine'];
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values = [];
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessRule::class, 'json', $context);
            }
            $object->rules = $values;
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->rules = null;
        }
        if (\array_key_exists('caches', $data) && $data['caches'] !== null) {
            $values_1 = [];
            foreach ($data['caches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\NamedCacheConfigurationBase::class, 'json', $context);
            }
            $object->caches = $values_1;
        }
        elseif (\array_key_exists('caches', $data) && $data['caches'] === null) {
            $object->caches = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['disableRuleEngine'] = $data->disableRuleEngine ?? null;
        if (array_key_exists('rules', get_object_vars($data)) && null !== ($data->rules ?? null)) {
            $values = [];
            foreach ($data->rules ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['rules'] = $values;
        }
        if (array_key_exists('caches', get_object_vars($data)) && null !== ($data->caches ?? null)) {
            $values_1 = [];
            foreach ($data->caches ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['caches'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleConfiguration::class => false];
    }
}