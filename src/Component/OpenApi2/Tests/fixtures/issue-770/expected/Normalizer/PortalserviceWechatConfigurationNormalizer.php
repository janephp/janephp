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
class PortalserviceWechatConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceWechatConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceWechatConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceWechatConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('authUrl', $data)) {
            $object->setAuthUrl($data['authUrl']);
        }
        if (\array_key_exists('dnatDestination', $data)) {
            $object->setDnatDestination($data['dnatDestination']);
        }
        if (\array_key_exists('gracePeriod', $data)) {
            $object->setGracePeriod($data['gracePeriod']);
        }
        if (\array_key_exists('blackList', $data)) {
            $object->setBlackList($data['blackList']);
        }
        if (\array_key_exists('whiteList', $data)) {
            $values = [];
            foreach ($data['whiteList'] as $value) {
                $values[] = $value;
            }
            $object->setWhiteList($values);
        }
        if (\array_key_exists('dnatPortMapping', $data)) {
            $values_1 = [];
            foreach ($data['dnatPortMapping'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceDnatPortMapping::class, 'json', $context);
            }
            $object->setDnatPortMapping($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('authUrl') && null !== $data->getAuthUrl()) {
            $dataArray['authUrl'] = $data->getAuthUrl();
        }
        if ($data->isInitialized('dnatDestination') && null !== $data->getDnatDestination()) {
            $dataArray['dnatDestination'] = $data->getDnatDestination();
        }
        if ($data->isInitialized('gracePeriod') && null !== $data->getGracePeriod()) {
            $dataArray['gracePeriod'] = $data->getGracePeriod();
        }
        if ($data->isInitialized('blackList') && null !== $data->getBlackList()) {
            $dataArray['blackList'] = $data->getBlackList();
        }
        if ($data->isInitialized('whiteList') && null !== $data->getWhiteList()) {
            $values = [];
            foreach ($data->getWhiteList() as $value) {
                $values[] = $value;
            }
            $dataArray['whiteList'] = $values;
        }
        if ($data->isInitialized('dnatPortMapping') && null !== $data->getDnatPortMapping()) {
            $values_1 = [];
            foreach ($data->getDnatPortMapping() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['dnatPortMapping'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceWechatConfiguration::class => false];
    }
}