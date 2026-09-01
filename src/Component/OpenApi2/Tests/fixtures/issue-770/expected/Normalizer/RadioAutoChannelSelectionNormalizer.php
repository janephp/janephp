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
class RadioAutoChannelSelectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioAutoChannelSelection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioAutoChannelSelection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioAutoChannelSelection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('channelSelectMode', $data)) {
            $object->channelSelectMode = $data['channelSelectMode'];
        }
        if (\array_key_exists('channelFlyMtbc', $data)) {
            $object->channelFlyMtbc = $data['channelFlyMtbc'];
        }
        if (\array_key_exists('channelFlyChangeFrequency', $data)) {
            $object->channelFlyChangeFrequency = $data['channelFlyChangeFrequency'];
        }
        if (\array_key_exists('channelFlyOptimizationTimePeriod', $data)) {
            $values = [];
            foreach ($data['channelFlyOptimizationTimePeriod'] as $value) {
                $values[] = $value;
            }
            $object->channelFlyOptimizationTimePeriod = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('channelSelectMode', get_object_vars($data)) && null !== ($data->channelSelectMode ?? null)) {
            $dataArray['channelSelectMode'] = $data->channelSelectMode ?? null;
        }
        if (array_key_exists('channelFlyMtbc', get_object_vars($data)) && null !== ($data->channelFlyMtbc ?? null)) {
            $dataArray['channelFlyMtbc'] = $data->channelFlyMtbc ?? null;
        }
        if (array_key_exists('channelFlyChangeFrequency', get_object_vars($data)) && null !== ($data->channelFlyChangeFrequency ?? null)) {
            $dataArray['channelFlyChangeFrequency'] = $data->channelFlyChangeFrequency ?? null;
        }
        if (array_key_exists('channelFlyOptimizationTimePeriod', get_object_vars($data)) && null !== ($data->channelFlyOptimizationTimePeriod ?? null)) {
            $values = [];
            foreach ($data->channelFlyOptimizationTimePeriod ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['channelFlyOptimizationTimePeriod'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioAutoChannelSelection::class => false];
    }
}