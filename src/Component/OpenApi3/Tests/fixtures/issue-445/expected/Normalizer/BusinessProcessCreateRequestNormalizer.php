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
class BusinessProcessCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('supportsCancellation', $data) && \is_int($data['supportsCancellation'])) {
            $data['supportsCancellation'] = (bool) $data['supportsCancellation'];
        }
        if (\array_key_exists('supportsCancellation', $data)) {
            $object->supportsCancellation = $data['supportsCancellation'];
        }
        if (\array_key_exists('notification', $data) && $data['notification'] !== null) {
            $value = $data['notification'];
            if (is_array($data['notification']) and \array_key_exists('title', $data['notification']) and \array_key_exists('message', $data['notification']) and \array_key_exists('eventType', $data['notification'])) {
                $value = $this->denormalizer->denormalize($data['notification'], \PicturePark\API\Model\BusinessProcessNotificationUpdate::class, 'json', $context);
            }
            $object->notification = $value;
        }
        elseif (\array_key_exists('notification', $data) && $data['notification'] === null) {
            $object->notification = null;
        }
        if (\array_key_exists('initialState', $data)) {
            $object->initialState = $data['initialState'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['supportsCancellation'] = $data->supportsCancellation ?? null;
        if (array_key_exists('notification', get_object_vars($data)) && null !== ($data->notification ?? null)) {
            $value = $data->notification ?? null;
            if (is_object($data->notification ?? null)) {
                $value = ($data->notification ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->notification ?? null, 'json', $context));
            }
            $dataArray['notification'] = $value;
        }
        $dataArray['initialState'] = $data->initialState ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessCreateRequest::class => false];
    }
}