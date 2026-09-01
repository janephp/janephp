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
class SciCreateSciProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SciCreateSciProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SciCreateSciProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SciCreateSciProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('sciProfile', $data)) {
            $object->sciProfile = $data['sciProfile'];
        }
        if (\array_key_exists('sciSystemId', $data)) {
            $object->sciSystemId = $data['sciSystemId'];
        }
        if (\array_key_exists('sciServerHost', $data)) {
            $object->sciServerHost = $data['sciServerHost'];
        }
        if (\array_key_exists('sciServerPort', $data)) {
            $object->sciServerPort = $data['sciServerPort'];
        }
        if (\array_key_exists('sciUser', $data)) {
            $object->sciUser = $data['sciUser'];
        }
        if (\array_key_exists('sciPassword', $data)) {
            $object->sciPassword = $data['sciPassword'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['sciProfile'] = $data->sciProfile ?? null;
        $dataArray['sciSystemId'] = $data->sciSystemId ?? null;
        $dataArray['sciServerHost'] = $data->sciServerHost ?? null;
        $dataArray['sciServerPort'] = $data->sciServerPort ?? null;
        $dataArray['sciUser'] = $data->sciUser ?? null;
        $dataArray['sciPassword'] = $data->sciPassword ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SciCreateSciProfile::class => false];
    }
}