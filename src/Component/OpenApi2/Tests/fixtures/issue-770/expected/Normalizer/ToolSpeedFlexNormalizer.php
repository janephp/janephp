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
            $object->tool = $data['tool'];
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('clientIp', $data)) {
            $object->clientIp = $data['clientIp'];
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->clientMac = $data['clientMac'];
        }
        if (\array_key_exists('serverIp', $data)) {
            $object->serverIp = $data['serverIp'];
        }
        if (\array_key_exists('serverMac', $data)) {
            $object->serverMac = $data['serverMac'];
        }
        if (\array_key_exists('syspmtu', $data)) {
            $object->syspmtu = $data['syspmtu'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['tool'] = $data->tool ?? null;
        $dataArray['protocol'] = $data->protocol ?? null;
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('clientIp', get_object_vars($data)) && null !== ($data->clientIp ?? null)) {
            $dataArray['clientIp'] = $data->clientIp ?? null;
        }
        if (array_key_exists('clientMac', get_object_vars($data)) && null !== ($data->clientMac ?? null)) {
            $dataArray['clientMac'] = $data->clientMac ?? null;
        }
        if (array_key_exists('serverIp', get_object_vars($data)) && null !== ($data->serverIp ?? null)) {
            $dataArray['serverIp'] = $data->serverIp ?? null;
        }
        if (array_key_exists('serverMac', get_object_vars($data)) && null !== ($data->serverMac ?? null)) {
            $dataArray['serverMac'] = $data->serverMac ?? null;
        }
        if (array_key_exists('syspmtu', get_object_vars($data)) && null !== ($data->syspmtu ?? null)) {
            $dataArray['syspmtu'] = $data->syspmtu ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ToolSpeedFlex::class => false];
    }
}