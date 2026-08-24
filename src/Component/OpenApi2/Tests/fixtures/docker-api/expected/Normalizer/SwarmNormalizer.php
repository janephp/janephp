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
class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Swarm::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Swarm::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Swarm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('RootRotationInProgress', $data) && \is_int($data['RootRotationInProgress'])) {
            $data['RootRotationInProgress'] = (bool) $data['RootRotationInProgress'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmConstraint());
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], \Docker\Api\Model\ObjectVersion::class, 'json', $context));
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->setUpdatedAt($data['UpdatedAt']);
        }
        if (\array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Docker\Api\Model\SwarmSpec::class, 'json', $context));
        }
        if (\array_key_exists('TLSInfo', $data)) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Docker\Api\Model\TLSInfo::class, 'json', $context));
        }
        if (\array_key_exists('RootRotationInProgress', $data)) {
            $object->setRootRotationInProgress($data['RootRotationInProgress']);
        }
        if (\array_key_exists('DataPathPort', $data)) {
            $object->setDataPathPort($data['DataPathPort']);
        }
        if (\array_key_exists('DefaultAddrPool', $data)) {
            $values = [];
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        }
        if (\array_key_exists('SubnetSize', $data)) {
            $object->setSubnetSize($data['SubnetSize']);
        }
        if (\array_key_exists('JoinTokens', $data)) {
            $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], \Docker\Api\Model\JoinTokens::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['Version'] = $data->getVersion() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getVersion(), 'json', $context));
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['CreatedAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['UpdatedAt'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['Spec'] = $data->getSpec() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSpec(), 'json', $context));
        }
        if ($data->isInitialized('tLSInfo') && null !== $data->getTLSInfo()) {
            $dataArray['TLSInfo'] = $data->getTLSInfo() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getTLSInfo(), 'json', $context));
        }
        if ($data->isInitialized('rootRotationInProgress') && null !== $data->getRootRotationInProgress()) {
            $dataArray['RootRotationInProgress'] = $data->getRootRotationInProgress();
        }
        if ($data->isInitialized('dataPathPort') && null !== $data->getDataPathPort()) {
            $dataArray['DataPathPort'] = $data->getDataPathPort();
        }
        if ($data->isInitialized('defaultAddrPool') && null !== $data->getDefaultAddrPool()) {
            $values = [];
            foreach ($data->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $dataArray['DefaultAddrPool'] = $values;
        }
        if ($data->isInitialized('subnetSize') && null !== $data->getSubnetSize()) {
            $dataArray['SubnetSize'] = $data->getSubnetSize();
        }
        if ($data->isInitialized('joinTokens') && null !== $data->getJoinTokens()) {
            $dataArray['JoinTokens'] = $data->getJoinTokens() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getJoinTokens(), 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Swarm::class => false];
    }
}