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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('ruleType', $data)) {
            $object->setRuleType($data['ruleType']);
        }
        if (\array_key_exists('applicationType', $data)) {
            $object->setApplicationType($data['applicationType']);
        }
        if (\array_key_exists('catId', $data)) {
            $object->setCatId($data['catId']);
        }
        if (\array_key_exists('catName', $data)) {
            $object->setCatName($data['catName']);
        }
        if (\array_key_exists('appId', $data)) {
            $object->setAppId($data['appId']);
        }
        if (\array_key_exists('appName', $data)) {
            $object->setAppName($data['appName']);
        }
        if (\array_key_exists('uplink', $data)) {
            $object->setUplink($data['uplink']);
        }
        if (\array_key_exists('downlink', $data)) {
            $object->setDownlink($data['downlink']);
        }
        if (\array_key_exists('markingPriority', $data)) {
            $object->setMarkingPriority($data['markingPriority']);
        }
        if (\array_key_exists('markingType', $data)) {
            $object->setMarkingType($data['markingType']);
        }
        if (\array_key_exists('classificationType', $data)) {
            $object->setClassificationType($data['classificationType']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('ruleType') && null !== $data->getRuleType()) {
            $dataArray['ruleType'] = $data->getRuleType();
        }
        if ($data->isInitialized('applicationType') && null !== $data->getApplicationType()) {
            $dataArray['applicationType'] = $data->getApplicationType();
        }
        if ($data->isInitialized('catId') && null !== $data->getCatId()) {
            $dataArray['catId'] = $data->getCatId();
        }
        if ($data->isInitialized('catName') && null !== $data->getCatName()) {
            $dataArray['catName'] = $data->getCatName();
        }
        if ($data->isInitialized('appId') && null !== $data->getAppId()) {
            $dataArray['appId'] = $data->getAppId();
        }
        if ($data->isInitialized('appName') && null !== $data->getAppName()) {
            $dataArray['appName'] = $data->getAppName();
        }
        if ($data->isInitialized('uplink') && null !== $data->getUplink()) {
            $dataArray['uplink'] = $data->getUplink();
        }
        if ($data->isInitialized('downlink') && null !== $data->getDownlink()) {
            $dataArray['downlink'] = $data->getDownlink();
        }
        if ($data->isInitialized('markingPriority') && null !== $data->getMarkingPriority()) {
            $dataArray['markingPriority'] = $data->getMarkingPriority();
        }
        if ($data->isInitialized('markingType') && null !== $data->getMarkingType()) {
            $dataArray['markingType'] = $data->getMarkingType();
        }
        if ($data->isInitialized('classificationType') && null !== $data->getClassificationType()) {
            $dataArray['classificationType'] = $data->getClassificationType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule::class => false];
    }
}