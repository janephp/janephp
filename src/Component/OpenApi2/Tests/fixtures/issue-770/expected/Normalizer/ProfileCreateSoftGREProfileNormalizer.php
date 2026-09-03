<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProfileCreateSoftGREProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateSoftGREProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateSoftGREProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateSoftGREProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('forceDisassociateClient', $data) && \is_int($data['forceDisassociateClient'])) {
            $data['forceDisassociateClient'] = (bool) $data['forceDisassociateClient'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('ipMode', $data)) {
            $object->ipMode = $data['ipMode'];
        }
        if (\array_key_exists('primaryGateway', $data)) {
            $object->primaryGateway = $data['primaryGateway'];
        }
        if (\array_key_exists('secondaryGateway', $data)) {
            $object->secondaryGateway = $data['secondaryGateway'];
        }
        if (\array_key_exists('tunnelMtuAutoEnabled', $data)) {
            $object->tunnelMtuAutoEnabled = $data['tunnelMtuAutoEnabled'];
        }
        if (\array_key_exists('tunnelMtuSize', $data)) {
            $object->tunnelMtuSize = $data['tunnelMtuSize'];
        }
        if (\array_key_exists('keepAlivePeriod', $data)) {
            $object->keepAlivePeriod = $data['keepAlivePeriod'];
        }
        if (\array_key_exists('keepAliveRetry', $data)) {
            $object->keepAliveRetry = $data['keepAliveRetry'];
        }
        if (\array_key_exists('forceDisassociateClient', $data)) {
            $object->forceDisassociateClient = $data['forceDisassociateClient'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('ipMode', get_object_vars($data)) && null !== ($data->ipMode ?? null)) {
            $dataArray['ipMode'] = $data->ipMode ?? null;
        }
        $dataArray['primaryGateway'] = $data->primaryGateway ?? null;
        if (array_key_exists('secondaryGateway', get_object_vars($data)) && null !== ($data->secondaryGateway ?? null)) {
            $dataArray['secondaryGateway'] = $data->secondaryGateway ?? null;
        }
        $dataArray['tunnelMtuAutoEnabled'] = $data->tunnelMtuAutoEnabled ?? null;
        if (array_key_exists('tunnelMtuSize', get_object_vars($data)) && null !== ($data->tunnelMtuSize ?? null)) {
            $dataArray['tunnelMtuSize'] = $data->tunnelMtuSize ?? null;
        }
        $dataArray['keepAlivePeriod'] = $data->keepAlivePeriod ?? null;
        $dataArray['keepAliveRetry'] = $data->keepAliveRetry ?? null;
        if (array_key_exists('forceDisassociateClient', get_object_vars($data)) && null !== ($data->forceDisassociateClient ?? null)) {
            $dataArray['forceDisassociateClient'] = $data->forceDisassociateClient ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateSoftGREProfile::class => false];
    }
}