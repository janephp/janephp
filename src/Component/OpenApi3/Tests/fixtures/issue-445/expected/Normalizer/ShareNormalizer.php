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
class ShareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Share::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Share::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Share();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isReadOnly', $data) && \is_int($data['isReadOnly'])) {
            $data['isReadOnly'] = (bool) $data['isReadOnly'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->name = $data['name'];
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
        }
        if (\array_key_exists('contentIds', $data)) {
            $values = [];
            foreach ($data['contentIds'] as $value) {
                $values[] = $value;
            }
            $object->contentIds = $values;
        }
        if (\array_key_exists('audit', $data)) {
            $value_1 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_1 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value_1;
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expirationDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['expirationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->expirationDate = $date;
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->expirationDate = null;
        }
        if (\array_key_exists('shareType', $data)) {
            $value_2 = $data['shareType'];
            if (is_string($data['shareType'])) {
                $value_2 = $data['shareType'];
            }
            $object->shareType = $value_2;
        }
        if (\array_key_exists('isReadOnly', $data)) {
            $object->isReadOnly = $data['isReadOnly'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        $values = [];
        foreach ($data->contentIds ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['contentIds'] = $values;
        $value_1 = $data->audit ?? null;
        if (is_object($data->audit ?? null)) {
            $value_1 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
        }
        $dataArray['audit'] = $value_1;
        if (array_key_exists('expirationDate', get_object_vars($data)) && null !== ($data->expirationDate ?? null)) {
            $dataArray['expirationDate'] = ($data->expirationDate ?? null)?->format('Y-m-d\TH:i:sP');
        }
        $value_2 = $data->shareType ?? null;
        if (is_string($data->shareType ?? null)) {
            $value_2 = $data->shareType ?? null;
        }
        $dataArray['shareType'] = $value_2;
        $dataArray['isReadOnly'] = $data->isReadOnly ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Share::class => false];
    }
}