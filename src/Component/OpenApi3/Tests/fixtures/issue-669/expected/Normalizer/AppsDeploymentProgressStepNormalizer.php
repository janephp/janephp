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
class AppsDeploymentProgressStepNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('component_name', $data)) {
            $object->componentName = $data['component_name'];
            unset($data['component_name']);
        }
        if (\array_key_exists('ended_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['ended_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['ended_at'], 'Y-m-d\TH:i:sP');
            }
            $object->endedAt = $date;
            unset($data['ended_at']);
        }
        if (\array_key_exists('message_base', $data)) {
            $object->messageBase = $data['message_base'];
            unset($data['message_base']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->reason = $this->denormalizer->denormalize($data['reason'], \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStepReason::class, 'json', $context);
            unset($data['reason']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->startedAt = $date_1;
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('steps', $data)) {
            $values = [];
            foreach ($data['steps'] as $value) {
                $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->steps = $values;
            unset($data['steps']);
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
        if (array_key_exists('componentName', get_object_vars($data)) && null !== ($data->componentName ?? null)) {
            $dataArray['component_name'] = $data->componentName ?? null;
        }
        if (array_key_exists('endedAt', get_object_vars($data)) && null !== ($data->endedAt ?? null)) {
            $dataArray['ended_at'] = ($data->endedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('messageBase', get_object_vars($data)) && null !== ($data->messageBase ?? null)) {
            $dataArray['message_base'] = $data->messageBase ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('reason', get_object_vars($data)) && null !== ($data->reason ?? null)) {
            $dataArray['reason'] = ($data->reason ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->reason ?? null, 'json', $context));
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['started_at'] = ($data->startedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('steps', get_object_vars($data)) && null !== ($data->steps ?? null)) {
            $values = [];
            foreach ($data->steps ?? null as $value) {
                $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['steps'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class => false];
    }
}