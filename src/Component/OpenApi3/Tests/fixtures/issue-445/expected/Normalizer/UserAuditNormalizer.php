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
class UserAuditNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserAudit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserAudit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserAudit();
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
            $object->createdByUser = $data['createdByUser'];
        }
        elseif (\array_key_exists('createdByUser', $data) && $data['createdByUser'] === null) {
            $object->createdByUser = null;
        }
        if (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] !== null) {
            $object->modifiedByUser = $data['modifiedByUser'];
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
            $dataArray['createdByUser'] = $data->createdByUser ?? null;
        }
        if (array_key_exists('modifiedByUser', get_object_vars($data)) && null !== ($data->modifiedByUser ?? null)) {
            $dataArray['modifiedByUser'] = $data->modifiedByUser ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserAudit::class => false];
    }
}