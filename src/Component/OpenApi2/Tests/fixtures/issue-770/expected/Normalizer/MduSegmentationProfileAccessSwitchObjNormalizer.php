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
class MduSegmentationProfileAccessSwitchObjNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj();
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
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->setVlanId($data['vlanId']);
        }
        if (\array_key_exists('webAuthPasswordLabel', $data)) {
            $object->setWebAuthPasswordLabel($data['webAuthPasswordLabel']);
        }
        if (\array_key_exists('upLink', $data)) {
            $object->setUpLink($this->denormalizer->denormalize($data['upLink'], \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpLinkObj::class, 'json', $context));
        }
        if (\array_key_exists('ports', $data)) {
            $values = [];
            foreach ($data['ports'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileRateLimitPorts::class, 'json', $context);
            }
            $object->setPorts($values);
        }
        if (\array_key_exists('networkSegmentationDistributionSwitchId', $data)) {
            $object->setNetworkSegmentationDistributionSwitchId($data['networkSegmentationDistributionSwitchId']);
        }
        if (\array_key_exists('dispatchMessage', $data)) {
            $object->setDispatchMessage($data['dispatchMessage']);
        }
        if (\array_key_exists('webAuthCustomTitle', $data)) {
            $object->setWebAuthCustomTitle($data['webAuthCustomTitle']);
        }
        if (\array_key_exists('webAuthCustomTop', $data)) {
            $object->setWebAuthCustomTop($data['webAuthCustomTop']);
        }
        if (\array_key_exists('webAuthCustomLoginButton', $data)) {
            $object->setWebAuthCustomLoginButton($data['webAuthCustomLoginButton']);
        }
        if (\array_key_exists('webAuthCustomBottom', $data)) {
            $object->setWebAuthCustomBottom($data['webAuthCustomBottom']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('vlanId') && null !== $data->getVlanId()) {
            $dataArray['vlanId'] = $data->getVlanId();
        }
        if ($data->isInitialized('webAuthPasswordLabel') && null !== $data->getWebAuthPasswordLabel()) {
            $dataArray['webAuthPasswordLabel'] = $data->getWebAuthPasswordLabel();
        }
        if ($data->isInitialized('upLink') && null !== $data->getUpLink()) {
            $dataArray['upLink'] = $this->normalizer->normalize($data->getUpLink(), 'json', $context);
        }
        if ($data->isInitialized('ports') && null !== $data->getPorts()) {
            $values = [];
            foreach ($data->getPorts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ports'] = $values;
        }
        if ($data->isInitialized('networkSegmentationDistributionSwitchId') && null !== $data->getNetworkSegmentationDistributionSwitchId()) {
            $dataArray['networkSegmentationDistributionSwitchId'] = $data->getNetworkSegmentationDistributionSwitchId();
        }
        if ($data->isInitialized('dispatchMessage') && null !== $data->getDispatchMessage()) {
            $dataArray['dispatchMessage'] = $data->getDispatchMessage();
        }
        if ($data->isInitialized('webAuthCustomTitle') && null !== $data->getWebAuthCustomTitle()) {
            $dataArray['webAuthCustomTitle'] = $data->getWebAuthCustomTitle();
        }
        if ($data->isInitialized('webAuthCustomTop') && null !== $data->getWebAuthCustomTop()) {
            $dataArray['webAuthCustomTop'] = $data->getWebAuthCustomTop();
        }
        if ($data->isInitialized('webAuthCustomLoginButton') && null !== $data->getWebAuthCustomLoginButton()) {
            $dataArray['webAuthCustomLoginButton'] = $data->getWebAuthCustomLoginButton();
        }
        if ($data->isInitialized('webAuthCustomBottom') && null !== $data->getWebAuthCustomBottom()) {
            $dataArray['webAuthCustomBottom'] = $data->getWebAuthCustomBottom();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj::class => false];
    }
}