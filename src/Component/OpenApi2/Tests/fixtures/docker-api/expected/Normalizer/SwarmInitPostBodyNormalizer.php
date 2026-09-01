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
class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmInitPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmInitPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmInitPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ForceNewCluster', $data) && \is_int($data['ForceNewCluster'])) {
            $data['ForceNewCluster'] = (bool) $data['ForceNewCluster'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmInitPostBodyConstraint());
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
        if (\array_key_exists('DataPathPort', $data)) {
            $object->dataPathPort = $data['DataPathPort'];
        }
        if (\array_key_exists('DefaultAddrPool', $data)) {
            $values = [];
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->defaultAddrPool = $values;
        }
        if (\array_key_exists('ForceNewCluster', $data)) {
            $object->forceNewCluster = $data['ForceNewCluster'];
        }
        if (\array_key_exists('SubnetSize', $data)) {
            $object->subnetSize = $data['SubnetSize'];
        }
        if (\array_key_exists('Spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \Docker\Api\Model\SwarmSpec::class, 'json', $context);
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
        if (array_key_exists('dataPathPort', get_object_vars($data)) && null !== ($data->dataPathPort ?? null)) {
            $dataArray['DataPathPort'] = $data->dataPathPort ?? null;
        }
        if (array_key_exists('defaultAddrPool', get_object_vars($data)) && null !== ($data->defaultAddrPool ?? null)) {
            $values = [];
            foreach ($data->defaultAddrPool ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['DefaultAddrPool'] = $values;
        }
        if (array_key_exists('forceNewCluster', get_object_vars($data)) && null !== ($data->forceNewCluster ?? null)) {
            $dataArray['ForceNewCluster'] = $data->forceNewCluster ?? null;
        }
        if (array_key_exists('subnetSize', get_object_vars($data)) && null !== ($data->subnetSize ?? null)) {
            $dataArray['SubnetSize'] = $data->subnetSize ?? null;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $dataArray['Spec'] = ($data->spec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmInitPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmInitPostBody::class => false];
    }
}