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
class UserAuditDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserAuditDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserAuditDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserAuditDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['creationDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['creationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->creationDate = $date;
        }
        if (\array_key_exists('modificationDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modificationDate']);
            if (false === $date_1) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['modificationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->modificationDate = $date_1;
        }
        if (\array_key_exists('createdByUser', $data) && $data['createdByUser'] !== null) {
            $value = $data['createdByUser'];
            if (is_array($data['createdByUser']) and \array_key_exists('emailAddress', $data['createdByUser']) and \array_key_exists('isDeleted', $data['createdByUser'])) {
                $value = $this->denormalizer->denormalize($data['createdByUser'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->createdByUser = $value;
        }
        elseif (\array_key_exists('createdByUser', $data) && $data['createdByUser'] === null) {
            $object->createdByUser = null;
        }
        if (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] !== null) {
            $value_1 = $data['modifiedByUser'];
            if (is_array($data['modifiedByUser']) and \array_key_exists('emailAddress', $data['modifiedByUser']) and \array_key_exists('isDeleted', $data['modifiedByUser'])) {
                $value_1 = $this->denormalizer->denormalize($data['modifiedByUser'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->modifiedByUser = $value_1;
        }
        elseif (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] === null) {
            $object->modifiedByUser = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['creationDate'] = ($data->creationDate ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['modificationDate'] = ($data->modificationDate ?? null)->format('Y-m-d\TH:i:sP');
        if (array_key_exists('createdByUser', get_object_vars($data)) && null !== ($data->createdByUser ?? null)) {
            $value = $data->createdByUser ?? null;
            if (is_object($data->createdByUser ?? null)) {
                $value = ($data->createdByUser ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->createdByUser ?? null, 'json', $context));
            }
            $dataArray['createdByUser'] = $value;
        }
        if (array_key_exists('modifiedByUser', get_object_vars($data)) && null !== ($data->modifiedByUser ?? null)) {
            $value_1 = $data->modifiedByUser ?? null;
            if (is_object($data->modifiedByUser ?? null)) {
                $value_1 = ($data->modifiedByUser ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->modifiedByUser ?? null, 'json', $context));
            }
            $dataArray['modifiedByUser'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserAuditDetail::class => false];
    }
}