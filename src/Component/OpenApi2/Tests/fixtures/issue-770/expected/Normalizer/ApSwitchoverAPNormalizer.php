<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApSwitchoverAPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP();
        if (\array_key_exists('deleteRecord', $data) && \is_int($data['deleteRecord'])) {
            $data['deleteRecord'] = (bool) $data['deleteRecord'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ipOrFqdn', $data)) {
            $object->setIpOrFqdn($data['ipOrFqdn']);
        }
        if (\array_key_exists('clusterName', $data)) {
            $object->setClusterName($data['clusterName']);
        }
        if (\array_key_exists('apMacList', $data)) {
            $values = [];
            foreach ($data['apMacList'] as $value) {
                $values[] = $value;
            }
            $object->setApMacList($values);
        }
        if (\array_key_exists('zoneIdList', $data)) {
            $values_1 = [];
            foreach ($data['zoneIdList'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setZoneIdList($values_1);
        }
        if (\array_key_exists('deleteRecord', $data)) {
            $object->setDeleteRecord($data['deleteRecord']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ipOrFqdn') && null !== $data->getIpOrFqdn()) {
            $dataArray['ipOrFqdn'] = $data->getIpOrFqdn();
        }
        if ($data->isInitialized('clusterName') && null !== $data->getClusterName()) {
            $dataArray['clusterName'] = $data->getClusterName();
        }
        if ($data->isInitialized('apMacList') && null !== $data->getApMacList()) {
            $values = [];
            foreach ($data->getApMacList() as $value) {
                $values[] = $value;
            }
            $dataArray['apMacList'] = $values;
        }
        if ($data->isInitialized('zoneIdList') && null !== $data->getZoneIdList()) {
            $values_1 = [];
            foreach ($data->getZoneIdList() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['zoneIdList'] = $values_1;
        }
        if ($data->isInitialized('deleteRecord') && null !== $data->getDeleteRecord()) {
            $dataArray['deleteRecord'] = $data->getDeleteRecord();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP::class => false];
    }
}