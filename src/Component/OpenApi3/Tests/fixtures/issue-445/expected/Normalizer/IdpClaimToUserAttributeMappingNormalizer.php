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
class IdpClaimToUserAttributeMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\IdpClaimToUserAttributeMapping();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('claimType', $data) && $data['claimType'] !== null) {
            $object->setClaimType($data['claimType']);
        }
        elseif (\array_key_exists('claimType', $data) && $data['claimType'] === null) {
            $object->setClaimType(null);
        }
        if (\array_key_exists('userAttributePath', $data) && $data['userAttributePath'] !== null) {
            $object->setUserAttributePath($data['userAttributePath']);
        }
        elseif (\array_key_exists('userAttributePath', $data) && $data['userAttributePath'] === null) {
            $object->setUserAttributePath(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('claimType') && null !== $data->getClaimType()) {
            $dataArray['claimType'] = $data->getClaimType();
        }
        if ($data->isInitialized('userAttributePath') && null !== $data->getUserAttributePath()) {
            $dataArray['userAttributePath'] = $data->getUserAttributePath();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\IdpClaimToUserAttributeMapping::class => false];
    }
}