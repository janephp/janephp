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
class IdentityIdentityUserSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('displayName', $data)) {
            $object->displayName = $data['displayName'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('userSource', $data)) {
            $object->userSource = $data['userSource'];
        }
        if (\array_key_exists('userType', $data)) {
            $object->userType = $data['userType'];
        }
        if (\array_key_exists('isDisabled', $data)) {
            $object->isDisabled = $data['isDisabled'];
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->createdOn = $data['createdOn'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('displayName', get_object_vars($data)) && null !== ($data->displayName ?? null)) {
            $dataArray['displayName'] = $data->displayName ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('userSource', get_object_vars($data)) && null !== ($data->userSource ?? null)) {
            $dataArray['userSource'] = $data->userSource ?? null;
        }
        if (array_key_exists('userType', get_object_vars($data)) && null !== ($data->userType ?? null)) {
            $dataArray['userType'] = $data->userType ?? null;
        }
        if (array_key_exists('isDisabled', get_object_vars($data)) && null !== ($data->isDisabled ?? null)) {
            $dataArray['isDisabled'] = $data->isDisabled ?? null;
        }
        if (array_key_exists('createdOn', get_object_vars($data)) && null !== ($data->createdOn ?? null)) {
            $dataArray['createdOn'] = $data->createdOn ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary::class => false];
    }
}