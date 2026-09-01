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
class ApiCreateScheduledIndexingInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('days', $data)) {
            $values = [];
            foreach ($data['days'] as $value) {
                $values[] = $value;
            }
            $object->days = $values;
            unset($data['days']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->knowledgeBaseUuid = $data['knowledge_base_uuid'];
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('time', $data)) {
            $object->time = $data['time'];
            unset($data['time']);
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
        if (array_key_exists('days', get_object_vars($data)) && null !== ($data->days ?? null)) {
            $values = [];
            foreach ($data->days ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['days'] = $values;
        }
        if (array_key_exists('knowledgeBaseUuid', get_object_vars($data)) && null !== ($data->knowledgeBaseUuid ?? null)) {
            $dataArray['knowledge_base_uuid'] = $data->knowledgeBaseUuid ?? null;
        }
        if (array_key_exists('time', get_object_vars($data)) && null !== ($data->time ?? null)) {
            $dataArray['time'] = $data->time ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic::class => false];
    }
}