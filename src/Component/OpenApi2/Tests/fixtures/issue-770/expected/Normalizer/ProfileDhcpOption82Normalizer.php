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
class ProfileDhcpOption82Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82();
        if (\array_key_exists('dhcpOption82Enabled', $data) && \is_int($data['dhcpOption82Enabled'])) {
            $data['dhcpOption82Enabled'] = (bool) $data['dhcpOption82Enabled'];
        }
        if (\array_key_exists('subopt1Enabled', $data) && \is_int($data['subopt1Enabled'])) {
            $data['subopt1Enabled'] = (bool) $data['subopt1Enabled'];
        }
        if (\array_key_exists('subopt2Enabled', $data) && \is_int($data['subopt2Enabled'])) {
            $data['subopt2Enabled'] = (bool) $data['subopt2Enabled'];
        }
        if (\array_key_exists('subopt150Enabled', $data) && \is_int($data['subopt150Enabled'])) {
            $data['subopt150Enabled'] = (bool) $data['subopt150Enabled'];
        }
        if (\array_key_exists('subopt151Enabled', $data) && \is_int($data['subopt151Enabled'])) {
            $data['subopt151Enabled'] = (bool) $data['subopt151Enabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dhcpOption82Enabled', $data)) {
            $object->setDhcpOption82Enabled($data['dhcpOption82Enabled']);
        }
        if (\array_key_exists('subopt1Enabled', $data)) {
            $object->setSubopt1Enabled($data['subopt1Enabled']);
        }
        if (\array_key_exists('subopt1Format', $data)) {
            $object->setSubopt1Format($data['subopt1Format']);
        }
        if (\array_key_exists('subopt2Enabled', $data)) {
            $object->setSubopt2Enabled($data['subopt2Enabled']);
        }
        if (\array_key_exists('subopt2Format', $data)) {
            $object->setSubopt2Format($data['subopt2Format']);
        }
        if (\array_key_exists('subopt150Enabled', $data)) {
            $object->setSubopt150Enabled($data['subopt150Enabled']);
        }
        if (\array_key_exists('subopt151Enabled', $data)) {
            $object->setSubopt151Enabled($data['subopt151Enabled']);
        }
        if (\array_key_exists('subopt151Format', $data)) {
            $object->setSubopt151Format($data['subopt151Format']);
        }
        if (\array_key_exists('subopt151AreaName', $data)) {
            $object->setSubopt151AreaName($data['subopt151AreaName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dhcpOption82Enabled') && null !== $data->getDhcpOption82Enabled()) {
            $dataArray['dhcpOption82Enabled'] = $data->getDhcpOption82Enabled();
        }
        if ($data->isInitialized('subopt1Enabled') && null !== $data->getSubopt1Enabled()) {
            $dataArray['subopt1Enabled'] = $data->getSubopt1Enabled();
        }
        if ($data->isInitialized('subopt1Format') && null !== $data->getSubopt1Format()) {
            $dataArray['subopt1Format'] = $data->getSubopt1Format();
        }
        if ($data->isInitialized('subopt2Enabled') && null !== $data->getSubopt2Enabled()) {
            $dataArray['subopt2Enabled'] = $data->getSubopt2Enabled();
        }
        if ($data->isInitialized('subopt2Format') && null !== $data->getSubopt2Format()) {
            $dataArray['subopt2Format'] = $data->getSubopt2Format();
        }
        if ($data->isInitialized('subopt150Enabled') && null !== $data->getSubopt150Enabled()) {
            $dataArray['subopt150Enabled'] = $data->getSubopt150Enabled();
        }
        if ($data->isInitialized('subopt151Enabled') && null !== $data->getSubopt151Enabled()) {
            $dataArray['subopt151Enabled'] = $data->getSubopt151Enabled();
        }
        if ($data->isInitialized('subopt151Format') && null !== $data->getSubopt151Format()) {
            $dataArray['subopt151Format'] = $data->getSubopt151Format();
        }
        if ($data->isInitialized('subopt151AreaName') && null !== $data->getSubopt151AreaName()) {
            $dataArray['subopt151AreaName'] = $data->getSubopt151AreaName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class => false];
    }
}