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
class ResponseVolumesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ResponseVolumes::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ResponseVolumes::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ResponseVolumes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('volumes', $data)) {
            $values = [];
            foreach ($data['volumes'] as $value) {
                $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->volumes = $values;
            unset($data['volumes']);
        }
        if (\array_key_exists('links', $data)) {
            $object->links = $this->denormalizer->denormalize($data['links'], \Jane\Generated\DigitalOcean\Model\PageLinks::class, 'json', $context);
            unset($data['links']);
        }
        if (\array_key_exists('meta', $data)) {
            $object->meta = $this->denormalizer->denormalize($data['meta'], \Jane\Generated\DigitalOcean\Model\MetaMeta::class, 'json', $context);
            unset($data['meta']);
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
        $values = [];
        foreach ($data->volumes ?? null as $value) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($value as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $values[] = $values_1;
        }
        $dataArray['volumes'] = $values;
        if (array_key_exists('links', get_object_vars($data)) && null !== ($data->links ?? null)) {
            $dataArray['links'] = ($data->links ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->links ?? null, 'json', $context));
        }
        $dataArray['meta'] = ($data->meta ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->meta ?? null, 'json', $context));
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ResponseVolumes::class => false];
    }
}