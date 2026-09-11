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
class OutputDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dynamicRendering', $data) && \is_int($data['dynamicRendering'])) {
            $data['dynamicRendering'] = (bool) $data['dynamicRendering'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data)) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->outputFormatId = $data['outputFormatId'];
            unset($data['outputFormatId']);
        }
        if (\array_key_exists('contentId', $data)) {
            $object->contentId = $data['contentId'];
            unset($data['contentId']);
        }
        if (\array_key_exists('renderingState', $data)) {
            $value = $data['renderingState'];
            if (is_string($data['renderingState'])) {
                $value = $data['renderingState'];
            }
            $object->renderingState = $value;
            unset($data['renderingState']);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $value_1 = $data['detail'];
            if (is_array($data['detail']) and \array_key_exists('kind', $data['detail'])) {
                $value_1 = $this->denormalizer->denormalize($data['detail'], \PicturePark\API\Model\OutputDataBase::class, 'json', $context);
            }
            $object->detail = $value_1;
            unset($data['detail']);
        }
        elseif (\array_key_exists('detail', $data)) {
            $object->detail = null;
            unset($data['detail']);
        }
        if (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['backupTimestamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['backupTimestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->backupTimestamp = $date;
            unset($data['backupTimestamp']);
        }
        elseif (\array_key_exists('backupTimestamp', $data)) {
            $object->backupTimestamp = null;
            unset($data['backupTimestamp']);
        }
        if (\array_key_exists('attemptsLeft', $data)) {
            $object->attemptsLeft = $data['attemptsLeft'];
            unset($data['attemptsLeft']);
        }
        if (\array_key_exists('fileVersion', $data)) {
            $object->fileVersion = $data['fileVersion'];
            unset($data['fileVersion']);
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->dynamicRendering = $data['dynamicRendering'];
            unset($data['dynamicRendering']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        $dataArray['outputFormatId'] = $data->outputFormatId;
        $dataArray['contentId'] = $data->contentId;
        $value = $data->renderingState;
        if (is_string($data->renderingState)) {
            $value = $data->renderingState;
        }
        $dataArray['renderingState'] = $value;
        if (array_key_exists('detail', get_object_vars($data)) && null !== ($data->detail ?? null)) {
            $value_1 = $data->detail;
            if (is_object($data->detail)) {
                $normalized = $this->normalizer->normalize($data->detail, 'json', $context);
                $value_1 = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['detail'] = $value_1;
        }
        if (array_key_exists('backupTimestamp', get_object_vars($data)) && null !== ($data->backupTimestamp ?? null)) {
            $dataArray['backupTimestamp'] = $data->backupTimestamp?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['attemptsLeft'] = $data->attemptsLeft;
        $dataArray['fileVersion'] = $data->fileVersion;
        $dataArray['dynamicRendering'] = $data->dynamicRendering;
        $dataArray['kind'] = $data->kind;
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputDetail::class => false];
    }
}