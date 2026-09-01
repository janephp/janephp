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
class DpSwitchoverDpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpSwitchoverDp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpSwitchoverDp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpSwitchoverDp();
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
        if (\array_key_exists('dpIdList', $data)) {
            $values = [];
            foreach ($data['dpIdList'] as $value) {
                $values[] = $value;
            }
            $object->dpIdList = $values;
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
        if (array_key_exists('dpIdList', get_object_vars($data)) && null !== ($data->dpIdList ?? null)) {
            $values = [];
            foreach ($data->dpIdList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['dpIdList'] = $values;
        }
        if (array_key_exists('deleteRecord', get_object_vars($data)) && null !== ($data->deleteRecord ?? null)) {
            $dataArray['deleteRecord'] = $data->deleteRecord ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpSwitchoverDp::class => false];
    }
}