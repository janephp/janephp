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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('min_instance_count', $data)) {
            $object->setMinInstanceCount($data['min_instance_count']);
            unset($data['min_instance_count']);
        }
        if (\array_key_exists('max_instance_count', $data)) {
            $object->setMaxInstanceCount($data['max_instance_count']);
            unset($data['max_instance_count']);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($this->denormalizer->denormalize($data['metrics'], \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscalingMetrics::class, 'json', $context));
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
        if ($data->isInitialized('minInstanceCount') && null !== $data->getMinInstanceCount()) {
            $dataArray['min_instance_count'] = $data->getMinInstanceCount();
        }
        if ($data->isInitialized('maxInstanceCount') && null !== $data->getMaxInstanceCount()) {
            $dataArray['max_instance_count'] = $data->getMaxInstanceCount();
        }
        if ($data->isInitialized('metrics') && null !== $data->getMetrics()) {
            $dataArray['metrics'] = $this->normalizer->normalize($data->getMetrics(), 'json', $context);
        }
        foreach ($data as $key => $value) {
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