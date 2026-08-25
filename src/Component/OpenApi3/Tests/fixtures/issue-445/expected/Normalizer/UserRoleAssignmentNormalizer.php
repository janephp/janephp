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
class UserRoleAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserRoleAssignment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserRoleAssignment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserRoleAssignment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isFederated', $data) && \is_int($data['isFederated'])) {
            $data['isFederated'] = (bool) $data['isFederated'];
        }
        if (\array_key_exists('userRole', $data) && $data['userRole'] !== null) {
            $value = $data['userRole'];
            if (is_array($data['userRole'])) {
                $value = $this->denormalizer->denormalize($data['userRole'], \PicturePark\API\Model\UserRole::class, 'json', $context);
            }
            $object->setUserRole($value);
        }
        elseif (\array_key_exists('userRole', $data) && $data['userRole'] === null) {
            $object->setUserRole(null);
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->setIsFederated($data['isFederated']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('userRole') && null !== $data->getUserRole()) {
            $value = $data->getUserRole();
            if (is_object($data->getUserRole())) {
                $value = $data->getUserRole() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getUserRole(), 'json', $context));
            }
            $dataArray['userRole'] = $value;
        }
        $dataArray['isFederated'] = $data->getIsFederated();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserRoleAssignment::class => false];
    }
}