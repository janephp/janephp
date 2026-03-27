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
            $object->setProduct($data['product']);
            unset($data['product']);
        }
        if (\array_key_exists('resource_uuid', $data)) {
            $object->setResourceUuid($data['resource_uuid']);
            unset($data['resource_uuid']);
        }
        if (\array_key_exists('resource_id', $data)) {
            $object->setResourceId($data['resource_id']);
            unset($data['resource_id']);
        }
        if (\array_key_exists('group_description', $data)) {
            $object->setGroupDescription($data['group_description']);
            unset($data['group_description']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        if (\array_key_exists('duration_unit', $data)) {
            $object->setDurationUnit($data['duration_unit']);
            unset($data['duration_unit']);
        }
        if (\array_key_exists('start_time', $data)) {
            $object->setStartTime($data['start_time']);
            unset($data['start_time']);
        }
        if (\array_key_exists('end_time', $data)) {
            $object->setEndTime($data['end_time']);
            unset($data['end_time']);
        }
        if (\array_key_exists('project_name', $data)) {
            $object->setProjectName($data['project_name']);
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
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $data->getProduct();
        }
        if ($data->isInitialized('resourceUuid') && null !== $data->getResourceUuid()) {
            $dataArray['resource_uuid'] = $data->getResourceUuid();
        }
        if ($data->isInitialized('resourceId') && null !== $data->getResourceId()) {
            $dataArray['resource_id'] = $data->getResourceId();
        }
        if ($data->isInitialized('groupDescription') && null !== $data->getGroupDescription()) {
            $dataArray['group_description'] = $data->getGroupDescription();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('amount') && null !== $data->getAmount()) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('duration') && null !== $data->getDuration()) {
            $dataArray['duration'] = $data->getDuration();
        }
        if ($data->isInitialized('durationUnit') && null !== $data->getDurationUnit()) {
            $dataArray['duration_unit'] = $data->getDurationUnit();
        }
        if ($data->isInitialized('startTime') && null !== $data->getStartTime()) {
            $dataArray['start_time'] = $data->getStartTime();
        }
        if ($data->isInitialized('endTime') && null !== $data->getEndTime()) {
            $dataArray['end_time'] = $data->getEndTime();
        }
        if ($data->isInitialized('projectName') && null !== $data->getProjectName()) {
            $dataArray['project_name'] = $data->getProjectName();
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
        return [\Jane\Generated\DigitalOcean\Model\InvoiceItem::class => false];
    }
}