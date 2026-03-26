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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleConfiguration();
        if (\array_key_exists('disableRuleEngine', $data) && \is_int($data['disableRuleEngine'])) {
            $data['disableRuleEngine'] = (bool) $data['disableRuleEngine'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('disableRuleEngine', $data)) {
            $object->setDisableRuleEngine($data['disableRuleEngine']);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values = [];
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessRule::class, 'json', $context);
            }
            $object->setRules($values);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('caches', $data) && $data['caches'] !== null) {
            $values_1 = [];
            foreach ($data['caches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\NamedCacheConfigurationBase::class, 'json', $context);
            }
            $object->setCaches($values_1);
        }
        elseif (\array_key_exists('caches', $data) && $data['caches'] === null) {
            $object->setCaches(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['disableRuleEngine'] = $data->getDisableRuleEngine();
        if ($data->isInitialized('rules')) {
            $values = [];
            foreach ($data->getRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['rules'] = $values;
        }
        if ($data->isInitialized('caches')) {
            $values_1 = [];
            foreach ($data->getCaches() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
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