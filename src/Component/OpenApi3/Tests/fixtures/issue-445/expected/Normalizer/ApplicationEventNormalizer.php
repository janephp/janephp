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
class ApplicationEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ApplicationEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ApplicationEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ApplicationEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'TransferEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TransferEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ReindexEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ReindexEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentDetailViewEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentDetailViewEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentDownloadEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentDownloadEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SessionRenewalEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SessionRenewalEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SharePageViewEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SharePageViewEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ApiStatisticsEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ApiStatisticsEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessProcessEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputRenderedEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputRenderedEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ConfigurationChangeEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ConfigurationChangeEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'CustomerChangeEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\CustomerChangeEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SearchReindexCompletedEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SearchReindexCompletedEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessRuleFiredEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessRuleFiredEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessProcessCancellationRequestedEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessCancellationRequestedEvent', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'XmpWritebackCompletedEvent' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\XmpWritebackCompletedEvent', $format, $context);
        }
        if (\array_key_exists('timestamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->timestamp = $date;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'TransferEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ReindexEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ContentDetailViewEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ContentDownloadEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SessionRenewalEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SharePageViewEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ApiStatisticsEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'BusinessProcessEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OutputRenderedEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ConfigurationChangeEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'CustomerChangeEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SearchReindexCompletedEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'BusinessRuleFiredEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'BusinessProcessCancellationRequestedEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'XmpWritebackCompletedEvent' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['timestamp'] = ($data->timestamp ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ApplicationEvent::class => false];
    }
}