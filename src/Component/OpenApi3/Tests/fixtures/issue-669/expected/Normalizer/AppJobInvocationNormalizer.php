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
class AppJobInvocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppJobInvocation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppJobInvocation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppJobInvocation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('job_name', $data)) {
            $object->jobName = $data['job_name'];
            unset($data['job_name']);
        }
        if (\array_key_exists('deployment_id', $data)) {
            $object->deploymentId = $data['deployment_id'];
            unset($data['deployment_id']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->phase = $data['phase'];
            unset($data['phase']);
        }
        if (\array_key_exists('trigger', $data)) {
            $object->trigger = $this->denormalizer->denormalize($data['trigger'], \Jane\Generated\DigitalOcean\Model\AppJobInvocationTrigger::class, 'json', $context);
            unset($data['trigger']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->startedAt = $date_1;
            unset($data['started_at']);
        }
        if (\array_key_exists('completed_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->completedAt = $date_2;
            unset($data['completed_at']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('jobName', get_object_vars($data)) && null !== ($data->jobName ?? null)) {
            $dataArray['job_name'] = $data->jobName ?? null;
        }
        if (array_key_exists('deploymentId', get_object_vars($data)) && null !== ($data->deploymentId ?? null)) {
            $dataArray['deployment_id'] = $data->deploymentId ?? null;
        }
        if (array_key_exists('phase', get_object_vars($data)) && null !== ($data->phase ?? null)) {
            $dataArray['phase'] = $data->phase ?? null;
        }
        if (array_key_exists('trigger', get_object_vars($data)) && null !== ($data->trigger ?? null)) {
            $dataArray['trigger'] = ($data->trigger ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->trigger ?? null, 'json', $context));
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['started_at'] = ($data->startedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('completedAt', get_object_vars($data)) && null !== ($data->completedAt ?? null)) {
            $dataArray['completed_at'] = ($data->completedAt ?? null)->format('Y-m-d\TH:i:sP');
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
        return [\Jane\Generated\DigitalOcean\Model\AppJobInvocation::class => false];
    }
}