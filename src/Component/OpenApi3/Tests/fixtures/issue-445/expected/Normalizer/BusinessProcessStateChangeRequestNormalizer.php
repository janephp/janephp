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
class BusinessProcessStateChangeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessStateChangeRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessStateChangeRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessStateChangeRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('state', $data)) {
            $object->state = $data['state'];
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value = $data['lifeCycle'];
            }
            $object->lifeCycle = $value;
        }
        if (\array_key_exists('notification', $data) && $data['notification'] !== null) {
            $value_1 = $data['notification'];
            if (is_array($data['notification']) and \array_key_exists('title', $data['notification']) and \array_key_exists('message', $data['notification']) and \array_key_exists('eventType', $data['notification'])) {
                $value_1 = $this->denormalizer->denormalize($data['notification'], \PicturePark\API\Model\BusinessProcessNotificationUpdate::class, 'json', $context);
            }
            $object->notification = $value_1;
        }
        elseif (\array_key_exists('notification', $data) && $data['notification'] === null) {
            $object->notification = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['state'] = $data->state ?? null;
        $value = $data->lifeCycle ?? null;
        if (is_string($data->lifeCycle ?? null)) {
            $value = $data->lifeCycle ?? null;
        }
        $dataArray['lifeCycle'] = $value;
        if (array_key_exists('notification', get_object_vars($data)) && null !== ($data->notification ?? null)) {
            $value_1 = $data->notification ?? null;
            if (is_object($data->notification ?? null)) {
                $value_1 = ($data->notification ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->notification ?? null, 'json', $context));
            }
            $dataArray['notification'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessStateChangeRequest::class => false];
    }
}