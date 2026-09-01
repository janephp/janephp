<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AppComponentInstanceBaseAutoscalingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('min_instance_count', $data)) {
            $object->minInstanceCount = $data['min_instance_count'];
            unset($data['min_instance_count']);
        }
        if (\array_key_exists('max_instance_count', $data)) {
            $object->maxInstanceCount = $data['max_instance_count'];
            unset($data['max_instance_count']);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->metrics = $this->denormalizer->denormalize($data['metrics'], \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscalingMetrics::class, 'json', $context);
            unset($data['metrics']);
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
        if (array_key_exists('minInstanceCount', get_object_vars($data)) && null !== ($data->minInstanceCount ?? null)) {
            $dataArray['min_instance_count'] = $data->minInstanceCount ?? null;
        }
        if (array_key_exists('maxInstanceCount', get_object_vars($data)) && null !== ($data->maxInstanceCount ?? null)) {
            $dataArray['max_instance_count'] = $data->maxInstanceCount ?? null;
        }
        if (array_key_exists('metrics', get_object_vars($data)) && null !== ($data->metrics ?? null)) {
            $dataArray['metrics'] = ($data->metrics ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->metrics ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class => false];
    }
}