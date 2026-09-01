<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScguserScgUserGroupPermissionListExtraNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionListExtra::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionListExtra::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionListExtra();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isSuperAdmin', $data) && \is_int($data['isSuperAdmin'])) {
            $data['isSuperAdmin'] = (bool) $data['isSuperAdmin'];
        }
        if (\array_key_exists('isSuperAdminOfDomain', $data) && \is_int($data['isSuperAdminOfDomain'])) {
            $data['isSuperAdminOfDomain'] = (bool) $data['isSuperAdminOfDomain'];
        }
        if (\array_key_exists('isSuperAdmin', $data)) {
            $object->isSuperAdmin = $data['isSuperAdmin'];
        }
        if (\array_key_exists('isSuperAdminOfDomain', $data)) {
            $object->isSuperAdminOfDomain = $data['isSuperAdminOfDomain'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('isSuperAdmin', get_object_vars($data)) && null !== ($data->isSuperAdmin ?? null)) {
            $dataArray['isSuperAdmin'] = $data->isSuperAdmin ?? null;
        }
        if (array_key_exists('isSuperAdminOfDomain', get_object_vars($data)) && null !== ($data->isSuperAdminOfDomain ?? null)) {
            $dataArray['isSuperAdminOfDomain'] = $data->isSuperAdminOfDomain ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionListExtra::class => false];
    }
}