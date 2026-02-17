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
class AlertSummaryEventSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AlertSummaryEventSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AlertSummaryEventSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AlertSummaryEventSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('criticalCount', $data)) {
            $object->setCriticalCount($data['criticalCount']);
        }
        if (\array_key_exists('majorCount', $data)) {
            $object->setMajorCount($data['majorCount']);
        }
        if (\array_key_exists('minorCount', $data)) {
            $object->setMinorCount($data['minorCount']);
        }
        if (\array_key_exists('warningCount', $data)) {
            $object->setWarningCount($data['warningCount']);
        }
        if (\array_key_exists('informationalCount', $data)) {
            $object->setInformationalCount($data['informationalCount']);
        }
        if (\array_key_exists('debugCount', $data)) {
            $object->setDebugCount($data['debugCount']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('criticalCount') && null !== $data->getCriticalCount()) {
            $dataArray['criticalCount'] = $data->getCriticalCount();
        }
        if ($data->isInitialized('majorCount') && null !== $data->getMajorCount()) {
            $dataArray['majorCount'] = $data->getMajorCount();
        }
        if ($data->isInitialized('minorCount') && null !== $data->getMinorCount()) {
            $dataArray['minorCount'] = $data->getMinorCount();
        }
        if ($data->isInitialized('warningCount') && null !== $data->getWarningCount()) {
            $dataArray['warningCount'] = $data->getWarningCount();
        }
        if ($data->isInitialized('informationalCount') && null !== $data->getInformationalCount()) {
            $dataArray['informationalCount'] = $data->getInformationalCount();
        }
        if ($data->isInitialized('debugCount') && null !== $data->getDebugCount()) {
            $dataArray['debugCount'] = $data->getDebugCount();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AlertSummaryEventSummary::class => false];
    }
}