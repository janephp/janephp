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
class AvcApplicationRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        if (\array_key_exists('ruleType', $data)) {
            $object->ruleType = $data['ruleType'];
        }
        if (\array_key_exists('applicationType', $data)) {
            $object->applicationType = $data['applicationType'];
        }
        if (\array_key_exists('catId', $data)) {
            $object->catId = $data['catId'];
        }
        if (\array_key_exists('catName', $data)) {
            $object->catName = $data['catName'];
        }
        if (\array_key_exists('appId', $data)) {
            $object->appId = $data['appId'];
        }
        if (\array_key_exists('appName', $data)) {
            $object->appName = $data['appName'];
        }
        if (\array_key_exists('uplink', $data)) {
            $object->uplink = $data['uplink'];
        }
        if (\array_key_exists('downlink', $data)) {
            $object->downlink = $data['downlink'];
        }
        if (\array_key_exists('markingPriority', $data)) {
            $object->markingPriority = $data['markingPriority'];
        }
        if (\array_key_exists('markingType', $data)) {
            $object->markingType = $data['markingType'];
        }
        if (\array_key_exists('classificationType', $data)) {
            $object->classificationType = $data['classificationType'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority ?? null;
        }
        if (array_key_exists('ruleType', get_object_vars($data)) && null !== ($data->ruleType ?? null)) {
            $dataArray['ruleType'] = $data->ruleType ?? null;
        }
        if (array_key_exists('applicationType', get_object_vars($data)) && null !== ($data->applicationType ?? null)) {
            $dataArray['applicationType'] = $data->applicationType ?? null;
        }
        if (array_key_exists('catId', get_object_vars($data)) && null !== ($data->catId ?? null)) {
            $dataArray['catId'] = $data->catId ?? null;
        }
        if (array_key_exists('catName', get_object_vars($data)) && null !== ($data->catName ?? null)) {
            $dataArray['catName'] = $data->catName ?? null;
        }
        if (array_key_exists('appId', get_object_vars($data)) && null !== ($data->appId ?? null)) {
            $dataArray['appId'] = $data->appId ?? null;
        }
        if (array_key_exists('appName', get_object_vars($data)) && null !== ($data->appName ?? null)) {
            $dataArray['appName'] = $data->appName ?? null;
        }
        if (array_key_exists('uplink', get_object_vars($data)) && null !== ($data->uplink ?? null)) {
            $dataArray['uplink'] = $data->uplink ?? null;
        }
        if (array_key_exists('downlink', get_object_vars($data)) && null !== ($data->downlink ?? null)) {
            $dataArray['downlink'] = $data->downlink ?? null;
        }
        if (array_key_exists('markingPriority', get_object_vars($data)) && null !== ($data->markingPriority ?? null)) {
            $dataArray['markingPriority'] = $data->markingPriority ?? null;
        }
        if (array_key_exists('markingType', get_object_vars($data)) && null !== ($data->markingType ?? null)) {
            $dataArray['markingType'] = $data->markingType ?? null;
        }
        if (array_key_exists('classificationType', get_object_vars($data)) && null !== ($data->classificationType ?? null)) {
            $dataArray['classificationType'] = $data->classificationType ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule::class => false];
    }
}