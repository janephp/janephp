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
class BusinessProcessWaitForLifeCycleResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('lifeCycleHit', $data) && $data['lifeCycleHit'] !== null) {
            $value = $data['lifeCycleHit'];
            if (is_string($data['lifeCycleHit'])) {
                $value = $data['lifeCycleHit'];
            }
            $object->lifeCycleHit = $value;
        }
        elseif (\array_key_exists('lifeCycleHit', $data) && $data['lifeCycleHit'] === null) {
            $object->lifeCycleHit = null;
        }
        if (\array_key_exists('businessProcess', $data)) {
            $value_1 = $data['businessProcess'];
            if (is_array($data['businessProcess']) and \array_key_exists('id', $data['businessProcess']) and \array_key_exists('processDefinitionId', $data['businessProcess']) and \array_key_exists('supportsCancellation', $data['businessProcess']) and \array_key_exists('businessProcessScope', $data['businessProcess']) and \array_key_exists('lifeCycle', $data['businessProcess']) and \array_key_exists('startDate', $data['businessProcess']) and \array_key_exists('endDate', $data['businessProcess']) and \array_key_exists('finished', $data['businessProcess']) and \array_key_exists('kind', $data['businessProcess'])) {
                $value_1 = $this->denormalizer->denormalize($data['businessProcess'], \PicturePark\API\Model\BusinessProcess::class, 'json', $context);
            }
            $object->businessProcess = $value_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('lifeCycleHit', get_object_vars($data)) && null !== ($data->lifeCycleHit ?? null)) {
            $value = $data->lifeCycleHit ?? null;
            if (is_string($data->lifeCycleHit ?? null)) {
                $value = $data->lifeCycleHit ?? null;
            }
            $dataArray['lifeCycleHit'] = $value;
        }
        $value_1 = $data->businessProcess ?? null;
        if (is_object($data->businessProcess ?? null)) {
            $value_1 = ($data->businessProcess ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->businessProcess ?? null, 'json', $context));
        }
        $dataArray['businessProcess'] = $value_1;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult::class => false];
    }
}