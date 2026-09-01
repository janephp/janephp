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
class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmJoinPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmJoinPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmJoinPostBody();
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
            $this->validate($data, new \Docker\Api\Validator\SwarmJoinPostBodyConstraint());
        }
        if (\array_key_exists('ListenAddr', $data)) {
            $object->listenAddr = $data['ListenAddr'];
        }
        if (\array_key_exists('AdvertiseAddr', $data)) {
            $object->advertiseAddr = $data['AdvertiseAddr'];
        }
        if (\array_key_exists('DataPathAddr', $data)) {
            $object->dataPathAddr = $data['DataPathAddr'];
        }
        if (\array_key_exists('RemoteAddrs', $data)) {
            $values = [];
            foreach ($data['RemoteAddrs'] as $value) {
                $values[] = $value;
            }
            $object->remoteAddrs = $values;
        }
        if (\array_key_exists('JoinToken', $data)) {
            $object->joinToken = $data['JoinToken'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('listenAddr', get_object_vars($data)) && null !== ($data->listenAddr ?? null)) {
            $dataArray['ListenAddr'] = $data->listenAddr ?? null;
        }
        if (array_key_exists('advertiseAddr', get_object_vars($data)) && null !== ($data->advertiseAddr ?? null)) {
            $dataArray['AdvertiseAddr'] = $data->advertiseAddr ?? null;
        }
        if (array_key_exists('dataPathAddr', get_object_vars($data)) && null !== ($data->dataPathAddr ?? null)) {
            $dataArray['DataPathAddr'] = $data->dataPathAddr ?? null;
        }
        if (array_key_exists('remoteAddrs', get_object_vars($data)) && null !== ($data->remoteAddrs ?? null)) {
            $values = [];
            foreach ($data->remoteAddrs ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['RemoteAddrs'] = $values;
        }
        if (array_key_exists('joinToken', get_object_vars($data)) && null !== ($data->joinToken ?? null)) {
            $dataArray['JoinToken'] = $data->joinToken ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmJoinPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmJoinPostBody::class => false];
    }
}