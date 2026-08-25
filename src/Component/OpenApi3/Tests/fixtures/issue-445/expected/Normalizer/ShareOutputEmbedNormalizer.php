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
class ShareOutputEmbedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ShareOutputEmbed::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ShareOutputEmbed::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ShareOutputEmbed();
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
        if (\array_key_exists('contentId', $data)) {
            $object->setContentId($data['contentId']);
            unset($data['contentId']);
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->setOutputFormatId($data['outputFormatId']);
            unset($data['outputFormatId']);
        }
        if (\array_key_exists('viewUrl', $data) && $data['viewUrl'] !== null) {
            $object->setViewUrl($data['viewUrl']);
            unset($data['viewUrl']);
        }
        elseif (\array_key_exists('viewUrl', $data) && $data['viewUrl'] === null) {
            $object->setViewUrl(null);
            unset($data['viewUrl']);
        }
        if (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] !== null) {
            $object->setDownloadUrl($data['downloadUrl']);
            unset($data['downloadUrl']);
        }
        elseif (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] === null) {
            $object->setDownloadUrl(null);
            unset($data['downloadUrl']);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $value = $data['detail'];
            if (is_array($data['detail']) and \array_key_exists('kind', $data['detail'])) {
                $value = $this->denormalizer->denormalize($data['detail'], \PicturePark\API\Model\OutputDataBase::class, 'json', $context);
            }
            $object->setDetail($value);
            unset($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
            unset($data['detail']);
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->setDynamicRendering($data['dynamicRendering']);
            unset($data['dynamicRendering']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('token', $data) && $data['token'] !== null) {
            $object->setToken($data['token']);
            unset($data['token']);
        }
        elseif (\array_key_exists('token', $data) && $data['token'] === null) {
            $object->setToken(null);
            unset($data['token']);
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
        $dataArray['contentId'] = $data->getContentId();
        $dataArray['outputFormatId'] = $data->getOutputFormatId();
        if ($data->isInitialized('viewUrl') && null !== $data->getViewUrl()) {
            $dataArray['viewUrl'] = $data->getViewUrl();
        }
        if ($data->isInitialized('downloadUrl') && null !== $data->getDownloadUrl()) {
            $dataArray['downloadUrl'] = $data->getDownloadUrl();
        }
        if ($data->isInitialized('detail') && null !== $data->getDetail()) {
            $value = $data->getDetail();
            if (is_object($data->getDetail())) {
                $value = $data->getDetail() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getDetail(), 'json', $context));
            }
            $dataArray['detail'] = $value;
        }
        $dataArray['dynamicRendering'] = $data->getDynamicRendering();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('token') && null !== $data->getToken()) {
            $dataArray['token'] = $data->getToken();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareOutputEmbed::class => false];
    }
}