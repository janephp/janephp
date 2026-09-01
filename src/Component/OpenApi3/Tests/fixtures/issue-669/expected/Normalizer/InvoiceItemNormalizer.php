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
class InvoiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\InvoiceItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\InvoiceItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\InvoiceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('product', $data)) {
            $object->product = $data['product'];
            unset($data['product']);
        }
        if (\array_key_exists('resource_uuid', $data)) {
            $object->resourceUuid = $data['resource_uuid'];
            unset($data['resource_uuid']);
        }
        if (\array_key_exists('resource_id', $data)) {
            $object->resourceId = $data['resource_id'];
            unset($data['resource_id']);
        }
        if (\array_key_exists('group_description', $data)) {
            $object->groupDescription = $data['group_description'];
            unset($data['group_description']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->amount = $data['amount'];
            unset($data['amount']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->duration = $data['duration'];
            unset($data['duration']);
        }
        if (\array_key_exists('duration_unit', $data)) {
            $object->durationUnit = $data['duration_unit'];
            unset($data['duration_unit']);
        }
        if (\array_key_exists('start_time', $data)) {
            $object->startTime = $data['start_time'];
            unset($data['start_time']);
        }
        if (\array_key_exists('end_time', $data)) {
            $object->endTime = $data['end_time'];
            unset($data['end_time']);
        }
        if (\array_key_exists('project_name', $data)) {
            $object->projectName = $data['project_name'];
            unset($data['project_name']);
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
        if (array_key_exists('product', get_object_vars($data)) && null !== ($data->product ?? null)) {
            $dataArray['product'] = $data->product ?? null;
        }
        if (array_key_exists('resourceUuid', get_object_vars($data)) && null !== ($data->resourceUuid ?? null)) {
            $dataArray['resource_uuid'] = $data->resourceUuid ?? null;
        }
        if (array_key_exists('resourceId', get_object_vars($data)) && null !== ($data->resourceId ?? null)) {
            $dataArray['resource_id'] = $data->resourceId ?? null;
        }
        if (array_key_exists('groupDescription', get_object_vars($data)) && null !== ($data->groupDescription ?? null)) {
            $dataArray['group_description'] = $data->groupDescription ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('amount', get_object_vars($data)) && null !== ($data->amount ?? null)) {
            $dataArray['amount'] = $data->amount ?? null;
        }
        if (array_key_exists('duration', get_object_vars($data)) && null !== ($data->duration ?? null)) {
            $dataArray['duration'] = $data->duration ?? null;
        }
        if (array_key_exists('durationUnit', get_object_vars($data)) && null !== ($data->durationUnit ?? null)) {
            $dataArray['duration_unit'] = $data->durationUnit ?? null;
        }
        if (array_key_exists('startTime', get_object_vars($data)) && null !== ($data->startTime ?? null)) {
            $dataArray['start_time'] = $data->startTime ?? null;
        }
        if (array_key_exists('endTime', get_object_vars($data)) && null !== ($data->endTime ?? null)) {
            $dataArray['end_time'] = $data->endTime ?? null;
        }
        if (array_key_exists('projectName', get_object_vars($data)) && null !== ($data->projectName ?? null)) {
            $dataArray['project_name'] = $data->projectName ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\InvoiceItem::class => false];
    }
}