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
class SciSciProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('sciPriority', $data)) {
            $object->setSciPriority($data['sciPriority']);
        }
        if (\array_key_exists('sciProfile', $data)) {
            $object->setSciProfile($data['sciProfile']);
        }
        if (\array_key_exists('sciSystemId', $data)) {
            $object->setSciSystemId($data['sciSystemId']);
        }
        if (\array_key_exists('sciServerHost', $data)) {
            $object->setSciServerHost($data['sciServerHost']);
        }
        if (\array_key_exists('sciServerPort', $data)) {
            $object->setSciServerPort($data['sciServerPort']);
        }
        if (\array_key_exists('sciUser', $data)) {
            $object->setSciUser($data['sciUser']);
        }
        if (\array_key_exists('sciPassword', $data)) {
            $object->setSciPassword($data['sciPassword']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('sciPriority') && null !== $data->getSciPriority()) {
            $dataArray['sciPriority'] = $data->getSciPriority();
        }
        if ($data->isInitialized('sciProfile') && null !== $data->getSciProfile()) {
            $dataArray['sciProfile'] = $data->getSciProfile();
        }
        if ($data->isInitialized('sciSystemId') && null !== $data->getSciSystemId()) {
            $dataArray['sciSystemId'] = $data->getSciSystemId();
        }
        if ($data->isInitialized('sciServerHost') && null !== $data->getSciServerHost()) {
            $dataArray['sciServerHost'] = $data->getSciServerHost();
        }
        if ($data->isInitialized('sciServerPort') && null !== $data->getSciServerPort()) {
            $dataArray['sciServerPort'] = $data->getSciServerPort();
        }
        if ($data->isInitialized('sciUser') && null !== $data->getSciUser()) {
            $dataArray['sciUser'] = $data->getSciUser();
        }
        if ($data->isInitialized('sciPassword') && null !== $data->getSciPassword()) {
            $dataArray['sciPassword'] = $data->getSciPassword();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfile::class => false];
    }
}