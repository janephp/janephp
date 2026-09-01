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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deleteRecord', $data) && \is_int($data['deleteRecord'])) {
            $data['deleteRecord'] = (bool) $data['deleteRecord'];
        }
        if (\array_key_exists('ipOrFqdn', $data)) {
            $object->ipOrFqdn = $data['ipOrFqdn'];
        }
        if (\array_key_exists('clusterName', $data)) {
            $object->clusterName = $data['clusterName'];
        }
        if (\array_key_exists('apMacList', $data)) {
            $values = [];
            foreach ($data['apMacList'] as $value) {
                $values[] = $value;
            }
            $object->apMacList = $values;
        }
        if (\array_key_exists('zoneIdList', $data)) {
            $values_1 = [];
            foreach ($data['zoneIdList'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->zoneIdList = $values_1;
        }
        if (\array_key_exists('deleteRecord', $data)) {
            $object->deleteRecord = $data['deleteRecord'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ipOrFqdn', get_object_vars($data)) && null !== ($data->ipOrFqdn ?? null)) {
            $dataArray['ipOrFqdn'] = $data->ipOrFqdn ?? null;
        }
        if (array_key_exists('clusterName', get_object_vars($data)) && null !== ($data->clusterName ?? null)) {
            $dataArray['clusterName'] = $data->clusterName ?? null;
        }
        if (array_key_exists('apMacList', get_object_vars($data)) && null !== ($data->apMacList ?? null)) {
            $values = [];
            foreach ($data->apMacList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['apMacList'] = $values;
        }
        if (array_key_exists('zoneIdList', get_object_vars($data)) && null !== ($data->zoneIdList ?? null)) {
            $values_1 = [];
            foreach ($data->zoneIdList ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['zoneIdList'] = $values_1;
        }
        if (array_key_exists('deleteRecord', get_object_vars($data)) && null !== ($data->deleteRecord ?? null)) {
            $dataArray['deleteRecord'] = $data->deleteRecord ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP::class => false];
    }
}