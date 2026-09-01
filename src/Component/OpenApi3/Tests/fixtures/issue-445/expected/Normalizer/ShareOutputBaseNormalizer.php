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
class ShareOutputBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ShareOutputBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ShareOutputBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ShareOutputBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'ShareOutputBasic' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ShareOutputBasic', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ShareOutputEmbed' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ShareOutputEmbed', $format, $context);
        }
        if (\array_key_exists('dynamicRendering', $data) && \is_int($data['dynamicRendering'])) {
            $data['dynamicRendering'] = (bool) $data['dynamicRendering'];
        }
        if (\array_key_exists('contentId', $data)) {
            $object->contentId = $data['contentId'];
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->outputFormatId = $data['outputFormatId'];
        }
        if (\array_key_exists('viewUrl', $data) && $data['viewUrl'] !== null) {
            $object->viewUrl = $data['viewUrl'];
        }
        elseif (\array_key_exists('viewUrl', $data) && $data['viewUrl'] === null) {
            $object->viewUrl = null;
        }
        if (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] !== null) {
            $object->downloadUrl = $data['downloadUrl'];
        }
        elseif (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] === null) {
            $object->downloadUrl = null;
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $value = $data['detail'];
            if (is_array($data['detail']) and \array_key_exists('kind', $data['detail'])) {
                $value = $this->denormalizer->denormalize($data['detail'], \PicturePark\API\Model\OutputDataBase::class, 'json', $context);
            }
            $object->detail = $value;
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->detail = null;
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->dynamicRendering = $data['dynamicRendering'];
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'ShareOutputBasic' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ShareOutputEmbed' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['contentId'] = $data->contentId ?? null;
        $dataArray['outputFormatId'] = $data->outputFormatId ?? null;
        if (array_key_exists('viewUrl', get_object_vars($data)) && null !== ($data->viewUrl ?? null)) {
            $dataArray['viewUrl'] = $data->viewUrl ?? null;
        }
        if (array_key_exists('downloadUrl', get_object_vars($data)) && null !== ($data->downloadUrl ?? null)) {
            $dataArray['downloadUrl'] = $data->downloadUrl ?? null;
        }
        if (array_key_exists('detail', get_object_vars($data)) && null !== ($data->detail ?? null)) {
            $value = $data->detail ?? null;
            if (is_object($data->detail ?? null)) {
                $value = ($data->detail ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->detail ?? null, 'json', $context));
            }
            $dataArray['detail'] = $value;
        }
        $dataArray['dynamicRendering'] = $data->dynamicRendering ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareOutputBase::class => false];
    }
}