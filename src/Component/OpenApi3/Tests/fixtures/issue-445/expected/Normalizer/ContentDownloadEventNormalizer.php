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
class ContentDownloadEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentDownloadEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentDownloadEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentDownloadEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']));
            unset($data['timestamp']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('downloadInfos', $data) && $data['downloadInfos'] !== null) {
            $values = [];
            foreach ($data['downloadInfos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\DownloadTrackingInfo::class, 'json', $context);
            }
            $object->setDownloadInfos($values);
            unset($data['downloadInfos']);
        }
        elseif (\array_key_exists('downloadInfos', $data) && $data['downloadInfos'] === null) {
            $object->setDownloadInfos(null);
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->setFileSize($data['fileSize']);
            unset($data['fileSize']);
        }
        if (\array_key_exists('shareToken', $data) && $data['shareToken'] !== null) {
            $object->setShareToken($data['shareToken']);
            unset($data['shareToken']);
        }
        elseif (\array_key_exists('shareToken', $data) && $data['shareToken'] === null) {
            $object->setShareToken(null);
        }
        if (\array_key_exists('range', $data) && $data['range'] !== null) {
            $object->setRange($data['range']);
            unset($data['range']);
        }
        elseif (\array_key_exists('range', $data) && $data['range'] === null) {
            $object->setRange(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['timestamp'] = $data->getTimestamp()->format('Y-m-d\TH:i:sP');
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('downloadInfos') && null !== $data->getDownloadInfos()) {
            $values = [];
            foreach ($data->getDownloadInfos() as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['downloadInfos'] = $values;
        }
        if ($data->isInitialized('fileSize') && null !== $data->getFileSize()) {
            $dataArray['fileSize'] = $data->getFileSize();
        }
        if ($data->isInitialized('shareToken') && null !== $data->getShareToken()) {
            $dataArray['shareToken'] = $data->getShareToken();
        }
        if ($data->isInitialized('range') && null !== $data->getRange()) {
            $dataArray['range'] = $data->getRange();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentDownloadEvent::class => false];
    }
}