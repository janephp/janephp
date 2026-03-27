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
class ToolSpeedFlexNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ToolSpeedFlex::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ToolSpeedFlex::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ToolSpeedFlex();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tool', $data)) {
            $object->setTool($data['tool']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('clientIp', $data)) {
            $object->setClientIp($data['clientIp']);
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->setClientMac($data['clientMac']);
        }
        if (\array_key_exists('serverIp', $data)) {
            $object->setServerIp($data['serverIp']);
        }
        if (\array_key_exists('serverMac', $data)) {
            $object->setServerMac($data['serverMac']);
        }
        if (\array_key_exists('syspmtu', $data)) {
            $object->setSyspmtu($data['syspmtu']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['tool'] = $data->getTool();
        $dataArray['protocol'] = $data->getProtocol();
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('clientIp') && null !== $data->getClientIp()) {
            $dataArray['clientIp'] = $data->getClientIp();
        }
        if ($data->isInitialized('clientMac') && null !== $data->getClientMac()) {
            $dataArray['clientMac'] = $data->getClientMac();
        }
        if ($data->isInitialized('serverIp') && null !== $data->getServerIp()) {
            $dataArray['serverIp'] = $data->getServerIp();
        }
        if ($data->isInitialized('serverMac') && null !== $data->getServerMac()) {
            $dataArray['serverMac'] = $data->getServerMac();
        }
        if ($data->isInitialized('syspmtu') && null !== $data->getSyspmtu()) {
            $dataArray['syspmtu'] = $data->getSyspmtu();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ToolSpeedFlex::class => false];
    }
}