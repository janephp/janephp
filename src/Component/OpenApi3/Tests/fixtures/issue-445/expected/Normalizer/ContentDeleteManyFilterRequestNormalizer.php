<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContentDeleteManyFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentDeleteManyFilterRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentDeleteManyFilterRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentDeleteManyFilterRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('forceReferenceRemoval', $data) && \is_int($data['forceReferenceRemoval'])) {
            $data['forceReferenceRemoval'] = (bool) $data['forceReferenceRemoval'];
        }
        if (\array_key_exists('notifyProgress', $data) && \is_int($data['notifyProgress'])) {
            $data['notifyProgress'] = (bool) $data['notifyProgress'];
        }
        if (\array_key_exists('filterRequest', $data)) {
            $value = $data['filterRequest'];
            if (is_array($data['filterRequest']) and \array_key_exists('searchType', $data['filterRequest']) and \array_key_exists('lifeCycleFilter', $data['filterRequest']) and \array_key_exists('brokenDependenciesFilter', $data['filterRequest'])) {
                $value = $this->denormalizer->denormalize($data['filterRequest'], \PicturePark\API\Model\ContentFilterRequest::class, 'json', $context);
            }
            $object->filterRequest = $value;
        }
        if (\array_key_exists('forceReferenceRemoval', $data)) {
            $object->forceReferenceRemoval = $data['forceReferenceRemoval'];
        }
        if (\array_key_exists('notifyProgress', $data)) {
            $object->notifyProgress = $data['notifyProgress'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->filterRequest ?? null;
        if (is_object($data->filterRequest ?? null)) {
            $value = ($data->filterRequest ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filterRequest ?? null, 'json', $context));
        }
        $dataArray['filterRequest'] = $value;
        $dataArray['forceReferenceRemoval'] = $data->forceReferenceRemoval ?? null;
        $dataArray['notifyProgress'] = $data->notifyProgress ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentDeleteManyFilterRequest::class => false];
    }
}