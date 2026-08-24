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
class OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Output::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Output::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Output();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'OutputDetail' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDetail', $format, $context);
        }
        if (\array_key_exists('dynamicRendering', $data) && \is_int($data['dynamicRendering'])) {
            $data['dynamicRendering'] = (bool) $data['dynamicRendering'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->setOutputFormatId($data['outputFormatId']);
        }
        if (\array_key_exists('contentId', $data)) {
            $object->setContentId($data['contentId']);
        }
        if (\array_key_exists('renderingState', $data)) {
            $object->setRenderingState($data['renderingState']);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->setDetail($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
        }
        if (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] !== null) {
            $object->setBackupTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['backupTimestamp']));
        }
        elseif (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] === null) {
            $object->setBackupTimestamp(null);
        }
        if (\array_key_exists('attemptsLeft', $data)) {
            $object->setAttemptsLeft($data['attemptsLeft']);
        }
        if (\array_key_exists('fileVersion', $data)) {
            $object->setFileVersion($data['fileVersion']);
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->setDynamicRendering($data['dynamicRendering']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'OutputDetail' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        $dataArray['outputFormatId'] = $data->getOutputFormatId();
        $dataArray['contentId'] = $data->getContentId();
        $dataArray['renderingState'] = $data->getRenderingState();
        if ($data->isInitialized('detail') && null !== $data->getDetail()) {
            $dataArray['detail'] = $data->getDetail();
        }
        if ($data->isInitialized('backupTimestamp') && null !== $data->getBackupTimestamp()) {
            $dataArray['backupTimestamp'] = $data->getBackupTimestamp()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['attemptsLeft'] = $data->getAttemptsLeft();
        $dataArray['fileVersion'] = $data->getFileVersion();
        $dataArray['dynamicRendering'] = $data->getDynamicRendering();
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Output::class => false];
    }
}