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
class EndpointPortConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\EndpointPortConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\EndpointPortConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\EndpointPortConfig();
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
            $this->validate($data, new \Docker\Api\Validator\EndpointPortConfigConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Protocol', $data)) {
            $object->protocol = $data['Protocol'];
        }
        if (\array_key_exists('TargetPort', $data)) {
            $object->targetPort = $data['TargetPort'];
        }
        if (\array_key_exists('PublishedPort', $data)) {
            $object->publishedPort = $data['PublishedPort'];
        }
        if (\array_key_exists('PublishMode', $data)) {
            $object->publishMode = $data['PublishMode'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name ?? null;
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['Protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('targetPort', get_object_vars($data)) && null !== ($data->targetPort ?? null)) {
            $dataArray['TargetPort'] = $data->targetPort ?? null;
        }
        if (array_key_exists('publishedPort', get_object_vars($data)) && null !== ($data->publishedPort ?? null)) {
            $dataArray['PublishedPort'] = $data->publishedPort ?? null;
        }
        if (array_key_exists('publishMode', get_object_vars($data)) && null !== ($data->publishMode ?? null)) {
            $dataArray['PublishMode'] = $data->publishMode ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\EndpointPortConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\EndpointPortConfig::class => false];
    }
}