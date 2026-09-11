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
class LiveStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\LiveStream::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\LiveStream::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\LiveStream();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->document = $data['document'];
        }
        elseif (\array_key_exists('document', $data)) {
            $object->document = null;
        }
        if (\array_key_exists('scopeType', $data) && $data['scopeType'] !== null) {
            $object->scopeType = $data['scopeType'];
        }
        elseif (\array_key_exists('scopeType', $data)) {
            $object->scopeType = null;
        }
        if (\array_key_exists('timestamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->timestamp = $date;
        }
        if (\array_key_exists('traceJob', $data) && $data['traceJob'] !== null) {
            $value = $data['traceJob'];
            if (is_array($data['traceJob'])) {
                $value = $this->denormalizer->denormalize($data['traceJob'], \PicturePark\API\Model\LiveStreamTraceJob::class, 'json', $context);
            }
            $object->traceJob = $value;
        }
        elseif (\array_key_exists('traceJob', $data)) {
            $object->traceJob = null;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_1 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_1 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value_1;
        }
        elseif (\array_key_exists('audit', $data)) {
            $object->audit = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id;
        if (array_key_exists('document', get_object_vars($data)) && null !== ($data->document ?? null)) {
            $dataArray['document'] = $data->document;
        }
        if (array_key_exists('scopeType', get_object_vars($data)) && null !== ($data->scopeType ?? null)) {
            $dataArray['scopeType'] = $data->scopeType;
        }
        $dataArray['timestamp'] = $data->timestamp->format('Y-m-d\TH:i:sP');
        if (array_key_exists('traceJob', get_object_vars($data)) && null !== ($data->traceJob ?? null)) {
            $value = $data->traceJob;
            if (is_object($data->traceJob)) {
                $normalized = $this->normalizer->normalize($data->traceJob, 'json', $context);
                $value = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['traceJob'] = $value;
        }
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value_1 = $data->audit;
            if (is_object($data->audit)) {
                $normalized_1 = $this->normalizer->normalize($data->audit, 'json', $context);
                $value_1 = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['audit'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\LiveStream::class => false];
    }
}