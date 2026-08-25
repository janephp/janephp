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
            $object->setId($data['id']);
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->setDocument($data['document']);
        }
        elseif (\array_key_exists('document', $data) && $data['document'] === null) {
            $object->setDocument(null);
        }
        if (\array_key_exists('scopeType', $data) && $data['scopeType'] !== null) {
            $object->setScopeType($data['scopeType']);
        }
        elseif (\array_key_exists('scopeType', $data) && $data['scopeType'] === null) {
            $object->setScopeType(null);
        }
        if (\array_key_exists('timestamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->setTimestamp($date);
        }
        if (\array_key_exists('traceJob', $data) && $data['traceJob'] !== null) {
            $value = $data['traceJob'];
            if (is_array($data['traceJob'])) {
                $value = $this->denormalizer->denormalize($data['traceJob'], \PicturePark\API\Model\LiveStreamTraceJob::class, 'json', $context);
            }
            $object->setTraceJob($value);
        }
        elseif (\array_key_exists('traceJob', $data) && $data['traceJob'] === null) {
            $object->setTraceJob(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_1 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_1 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->setAudit($value_1);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('document') && null !== $data->getDocument()) {
            $dataArray['document'] = $data->getDocument();
        }
        if ($data->isInitialized('scopeType') && null !== $data->getScopeType()) {
            $dataArray['scopeType'] = $data->getScopeType();
        }
        $dataArray['timestamp'] = $data->getTimestamp()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('traceJob') && null !== $data->getTraceJob()) {
            $value = $data->getTraceJob();
            if (is_object($data->getTraceJob())) {
                $value = $data->getTraceJob() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getTraceJob(), 'json', $context));
            }
            $dataArray['traceJob'] = $value;
        }
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $value_1 = $data->getAudit();
            if (is_object($data->getAudit())) {
                $value_1 = $data->getAudit() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudit(), 'json', $context));
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