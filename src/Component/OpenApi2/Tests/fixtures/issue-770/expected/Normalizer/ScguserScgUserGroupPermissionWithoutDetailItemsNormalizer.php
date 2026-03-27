<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScguserScgUserGroupPermissionWithoutDetailItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionWithoutDetailItems();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('resource', $data)) {
            $object->setResource($data['resource']);
        }
        if (\array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
        }
        if (\array_key_exists('display', $data)) {
            $object->setDisplay($data['display']);
        }
        if (\array_key_exists('ids', $data)) {
            $values = [];
            foreach ($data['ids'] as $value) {
                $values[] = $value;
            }
            $object->setIds($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('resource') && null !== $data->getResource()) {
            $dataArray['resource'] = $data->getResource();
        }
        if ($data->isInitialized('access') && null !== $data->getAccess()) {
            $dataArray['access'] = $data->getAccess();
        }
        if ($data->isInitialized('display') && null !== $data->getDisplay()) {
            $dataArray['display'] = $data->getDisplay();
        }
        if ($data->isInitialized('ids') && null !== $data->getIds()) {
            $values = [];
            foreach ($data->getIds() as $value) {
                $values[] = $value;
            }
            $dataArray['ids'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class => false];
    }
}