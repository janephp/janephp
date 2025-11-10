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
class RadioAutoChannelSelectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('channelSelectMode', $data)) {
            $object->setChannelSelectMode($data['channelSelectMode']);
        }
        if (\array_key_exists('channelFlyMtbc', $data)) {
            $object->setChannelFlyMtbc($data['channelFlyMtbc']);
        }
        if (\array_key_exists('channelFlyChangeFrequency', $data)) {
            $object->setChannelFlyChangeFrequency($data['channelFlyChangeFrequency']);
        }
        if (\array_key_exists('channelFlyOptimizationTimePeriod', $data)) {
            $values = [];
            foreach ($data['channelFlyOptimizationTimePeriod'] as $value) {
                $values[] = $value;
            }
            $object->setChannelFlyOptimizationTimePeriod($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('channelSelectMode') && null !== $data->getChannelSelectMode()) {
            $dataArray['channelSelectMode'] = $data->getChannelSelectMode();
        }
        if ($data->isInitialized('channelFlyMtbc') && null !== $data->getChannelFlyMtbc()) {
            $dataArray['channelFlyMtbc'] = $data->getChannelFlyMtbc();
        }
        if ($data->isInitialized('channelFlyChangeFrequency') && null !== $data->getChannelFlyChangeFrequency()) {
            $dataArray['channelFlyChangeFrequency'] = $data->getChannelFlyChangeFrequency();
        }
        if ($data->isInitialized('channelFlyOptimizationTimePeriod') && null !== $data->getChannelFlyOptimizationTimePeriod()) {
            $values = [];
            foreach ($data->getChannelFlyOptimizationTimePeriod() as $value) {
                $values[] = $value;
            }
            $dataArray['channelFlyOptimizationTimePeriod'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class => false];
    }
}