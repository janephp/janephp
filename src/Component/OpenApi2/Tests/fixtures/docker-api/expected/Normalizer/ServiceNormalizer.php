<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Service::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Service::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Service();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ServiceConstraint());
        }
        if (\array_key_exists('ID', $data)) {
            $object->iD = $data['ID'];
        }
        if (\array_key_exists('Version', $data)) {
            $object->version = $this->denormalizer->denormalize($data['Version'], \Docker\Api\Model\ObjectVersion::class, 'json', $context);
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->createdAt = $data['CreatedAt'];
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->updatedAt = $data['UpdatedAt'];
        }
        if (\array_key_exists('Spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \Docker\Api\Model\ServiceSpec::class, 'json', $context);
        }
        if (\array_key_exists('Endpoint', $data)) {
            $object->endpoint = $this->denormalizer->denormalize($data['Endpoint'], \Docker\Api\Model\ServiceEndpoint::class, 'json', $context);
        }
        if (\array_key_exists('UpdateStatus', $data)) {
            $object->updateStatus = $this->denormalizer->denormalize($data['UpdateStatus'], \Docker\Api\Model\ServiceUpdateStatus::class, 'json', $context);
        }
        if (\array_key_exists('ServiceStatus', $data)) {
            $object->serviceStatus = $this->denormalizer->denormalize($data['ServiceStatus'], \Docker\Api\Model\ServiceServiceStatus::class, 'json', $context);
        }
        if (\array_key_exists('JobStatus', $data)) {
            $object->jobStatus = $this->denormalizer->denormalize($data['JobStatus'], \Docker\Api\Model\ServiceJobStatus::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['Version'] = ($data->version ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->version ?? null, 'json', $context));
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['UpdatedAt'] = $data->updatedAt ?? null;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $dataArray['Spec'] = ($data->spec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        }
        if (array_key_exists('endpoint', get_object_vars($data)) && null !== ($data->endpoint ?? null)) {
            $dataArray['Endpoint'] = ($data->endpoint ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->endpoint ?? null, 'json', $context));
        }
        if (array_key_exists('updateStatus', get_object_vars($data)) && null !== ($data->updateStatus ?? null)) {
            $dataArray['UpdateStatus'] = ($data->updateStatus ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->updateStatus ?? null, 'json', $context));
        }
        if (array_key_exists('serviceStatus', get_object_vars($data)) && null !== ($data->serviceStatus ?? null)) {
            $dataArray['ServiceStatus'] = ($data->serviceStatus ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->serviceStatus ?? null, 'json', $context));
        }
        if (array_key_exists('jobStatus', get_object_vars($data)) && null !== ($data->jobStatus ?? null)) {
            $dataArray['JobStatus'] = ($data->jobStatus ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->jobStatus ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ServiceConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Service::class => false];
    }
}