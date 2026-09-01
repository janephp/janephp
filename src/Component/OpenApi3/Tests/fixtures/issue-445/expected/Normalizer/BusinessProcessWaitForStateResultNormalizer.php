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
class BusinessProcessWaitForStateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessWaitForStateResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessWaitForStateResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessWaitForStateResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('stateHit', $data) && $data['stateHit'] !== null) {
            $object->stateHit = $data['stateHit'];
        }
        elseif (\array_key_exists('stateHit', $data) && $data['stateHit'] === null) {
            $object->stateHit = null;
        }
        if (\array_key_exists('businessProcess', $data)) {
            $value = $data['businessProcess'];
            if (is_array($data['businessProcess']) and \array_key_exists('id', $data['businessProcess']) and \array_key_exists('processDefinitionId', $data['businessProcess']) and \array_key_exists('supportsCancellation', $data['businessProcess']) and \array_key_exists('businessProcessScope', $data['businessProcess']) and \array_key_exists('lifeCycle', $data['businessProcess']) and \array_key_exists('startDate', $data['businessProcess']) and \array_key_exists('endDate', $data['businessProcess']) and \array_key_exists('finished', $data['businessProcess']) and \array_key_exists('kind', $data['businessProcess'])) {
                $value = $this->denormalizer->denormalize($data['businessProcess'], \PicturePark\API\Model\BusinessProcess::class, 'json', $context);
            }
            $object->businessProcess = $value;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('stateHit', get_object_vars($data)) && null !== ($data->stateHit ?? null)) {
            $dataArray['stateHit'] = $data->stateHit ?? null;
        }
        $value = $data->businessProcess ?? null;
        if (is_object($data->businessProcess ?? null)) {
            $value = ($data->businessProcess ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->businessProcess ?? null, 'json', $context));
        }
        $dataArray['businessProcess'] = $value;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessWaitForStateResult::class => false];
    }
}