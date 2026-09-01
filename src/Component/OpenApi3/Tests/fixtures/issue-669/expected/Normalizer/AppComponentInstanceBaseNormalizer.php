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
class AppComponentInstanceBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('instance_count', $data)) {
            $object->instanceCount = $data['instance_count'];
            unset($data['instance_count']);
        }
        if (\array_key_exists('instance_size_slug', $data)) {
            $value = $data['instance_size_slug'];
            if (is_string($data['instance_size_slug'])) {
                $value = $data['instance_size_slug'];
            } elseif (is_string($data['instance_size_slug'])) {
                $value = $data['instance_size_slug'];
            }
            $object->instanceSizeSlug = $value;
            unset($data['instance_size_slug']);
        }
        if (\array_key_exists('autoscaling', $data)) {
            $object->autoscaling = $this->denormalizer->denormalize($data['autoscaling'], \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class, 'json', $context);
            unset($data['autoscaling']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('instanceCount', get_object_vars($data)) && null !== ($data->instanceCount ?? null)) {
            $dataArray['instance_count'] = $data->instanceCount ?? null;
        }
        if (array_key_exists('instanceSizeSlug', get_object_vars($data)) && null !== ($data->instanceSizeSlug ?? null)) {
            $value = $data->instanceSizeSlug ?? null;
            if (is_string($data->instanceSizeSlug ?? null)) {
                $value = $data->instanceSizeSlug ?? null;
            } elseif (is_string($data->instanceSizeSlug ?? null)) {
                $value = $data->instanceSizeSlug ?? null;
            }
            $dataArray['instance_size_slug'] = $value;
        }
        if (array_key_exists('autoscaling', get_object_vars($data)) && null !== ($data->autoscaling ?? null)) {
            $dataArray['autoscaling'] = ($data->autoscaling ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->autoscaling ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppComponentInstanceBase::class => false];
    }
}