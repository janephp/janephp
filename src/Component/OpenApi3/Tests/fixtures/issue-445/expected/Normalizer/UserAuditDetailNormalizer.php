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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\UserAuditDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['creationDate']));
        }
        if (\array_key_exists('modificationDate', $data)) {
            $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modificationDate']));
        }
        if (\array_key_exists('createdByUser', $data) && $data['createdByUser'] !== null) {
            $value = $data['createdByUser'];
            if (is_array($data['createdByUser']) and isset($data['createdByUser']['emailAddress']) and isset($data['createdByUser']['isDeleted'])) {
                $value = $this->denormalizer->denormalize($data['createdByUser'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->setCreatedByUser($value);
        }
        elseif (\array_key_exists('createdByUser', $data) && $data['createdByUser'] === null) {
            $object->setCreatedByUser(null);
        }
        if (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] !== null) {
            $value_1 = $data['modifiedByUser'];
            if (is_array($data['modifiedByUser']) and isset($data['modifiedByUser']['emailAddress']) and isset($data['modifiedByUser']['isDeleted'])) {
                $value_1 = $this->denormalizer->denormalize($data['modifiedByUser'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->setModifiedByUser($value_1);
        }
        elseif (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] === null) {
            $object->setModifiedByUser(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['creationDate'] = $data->getCreationDate()->format('Y-m-d\TH:i:sP');
        $dataArray['modificationDate'] = $data->getModificationDate()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('createdByUser')) {
            $value = $data->getCreatedByUser();
            if (is_object($data->getCreatedByUser())) {
                $value = $this->normalizer->normalize($data->getCreatedByUser(), 'json', $context);
            }
            $dataArray['createdByUser'] = $value;
        }
        if ($data->isInitialized('modifiedByUser')) {
            $value_1 = $data->getModifiedByUser();
            if (is_object($data->getModifiedByUser())) {
                $value_1 = $this->normalizer->normalize($data->getModifiedByUser(), 'json', $context);
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