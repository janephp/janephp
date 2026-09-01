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
class ContentShareReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentShareReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentShareReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentShareReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->name = $data['name'];
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value;
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
        }
        if (\array_key_exists('shareType', $data)) {
            $value_1 = $data['shareType'];
            if (is_string($data['shareType'])) {
                $value_1 = $data['shareType'];
            }
            $object->shareType = $value_1;
        }
        if (\array_key_exists('emailAddress', $data) && $data['emailAddress'] !== null) {
            $object->emailAddress = $data['emailAddress'];
        }
        elseif (\array_key_exists('emailAddress', $data) && $data['emailAddress'] === null) {
            $object->emailAddress = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
            }
            $dataArray['audit'] = $value;
        }
        $value_1 = $data->shareType ?? null;
        if (is_string($data->shareType ?? null)) {
            $value_1 = $data->shareType ?? null;
        }
        $dataArray['shareType'] = $value_1;
        if (array_key_exists('emailAddress', get_object_vars($data)) && null !== ($data->emailAddress ?? null)) {
            $dataArray['emailAddress'] = $data->emailAddress ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentShareReference::class => false];
    }
}