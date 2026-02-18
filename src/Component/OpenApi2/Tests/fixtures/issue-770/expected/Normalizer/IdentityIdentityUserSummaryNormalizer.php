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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('displayName', $data)) {
            $object->setDisplayName($data['displayName']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('userSource', $data)) {
            $object->setUserSource($data['userSource']);
        }
        if (\array_key_exists('userType', $data)) {
            $object->setUserType($data['userType']);
        }
        if (\array_key_exists('isDisabled', $data)) {
            $object->setIsDisabled($data['isDisabled']);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn($data['createdOn']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('displayName') && null !== $data->getDisplayName()) {
            $dataArray['displayName'] = $data->getDisplayName();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('userSource') && null !== $data->getUserSource()) {
            $dataArray['userSource'] = $data->getUserSource();
        }
        if ($data->isInitialized('userType') && null !== $data->getUserType()) {
            $dataArray['userType'] = $data->getUserType();
        }
        if ($data->isInitialized('isDisabled') && null !== $data->getIsDisabled()) {
            $dataArray['isDisabled'] = $data->getIsDisabled();
        }
        if ($data->isInitialized('createdOn') && null !== $data->getCreatedOn()) {
            $dataArray['createdOn'] = $data->getCreatedOn();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary::class => false];
    }
}