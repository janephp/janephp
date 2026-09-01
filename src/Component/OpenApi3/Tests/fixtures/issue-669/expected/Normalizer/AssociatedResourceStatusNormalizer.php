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
class AssociatedResourceStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('droplet', $data)) {
            $object->droplet = $this->denormalizer->denormalize($data['droplet'], \Jane\Generated\DigitalOcean\Model\DestroyedAssociatedResource::class, 'json', $context);
            unset($data['droplet']);
        }
        if (\array_key_exists('resources', $data)) {
            $object->resources = $this->denormalizer->denormalize($data['resources'], \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatusResources::class, 'json', $context);
            unset($data['resources']);
        }
        if (\array_key_exists('completed_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->completedAt = $date;
            unset($data['completed_at']);
        }
        if (\array_key_exists('failures', $data)) {
            $object->failures = $data['failures'];
            unset($data['failures']);
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
        if (array_key_exists('droplet', get_object_vars($data)) && null !== ($data->droplet ?? null)) {
            $dataArray['droplet'] = ($data->droplet ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->droplet ?? null, 'json', $context));
        }
        if (array_key_exists('resources', get_object_vars($data)) && null !== ($data->resources ?? null)) {
            $dataArray['resources'] = ($data->resources ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->resources ?? null, 'json', $context));
        }
        if (array_key_exists('completedAt', get_object_vars($data)) && null !== ($data->completedAt ?? null)) {
            $dataArray['completed_at'] = ($data->completedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('failures', get_object_vars($data)) && null !== ($data->failures ?? null)) {
            $dataArray['failures'] = $data->failures ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus::class => false];
    }
}