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
            $object->setTimestamp($date);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'TransferEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ReindexEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentDetailViewEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentDownloadEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'SessionRenewalEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'SharePageViewEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ApiStatisticsEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'BusinessProcessEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OutputRenderedEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ConfigurationChangeEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'CustomerChangeEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'SearchReindexCompletedEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'BusinessRuleFiredEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'BusinessProcessCancellationRequestedEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'XmpWritebackCompletedEvent' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['timestamp'] = $data->getTimestamp()->format('Y-m-d\TH:i:sP');
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ApplicationEvent::class => false];
    }
}