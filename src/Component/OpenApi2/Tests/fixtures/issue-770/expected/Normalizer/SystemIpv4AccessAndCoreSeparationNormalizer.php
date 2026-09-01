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
class SystemIpv4AccessAndCoreSeparationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4AccessAndCoreSeparation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4AccessAndCoreSeparation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4AccessAndCoreSeparation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('defaultGateway', $data)) {
            $object->defaultGateway = $data['defaultGateway'];
        }
        if (\array_key_exists('primaryDNSServer', $data)) {
            $object->primaryDNSServer = $data['primaryDNSServer'];
        }
        if (\array_key_exists('secondaryDNSServer', $data)) {
            $object->secondaryDNSServer = $data['secondaryDNSServer'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('defaultGateway', get_object_vars($data)) && null !== ($data->defaultGateway ?? null)) {
            $dataArray['defaultGateway'] = $data->defaultGateway ?? null;
        }
        if (array_key_exists('primaryDNSServer', get_object_vars($data)) && null !== ($data->primaryDNSServer ?? null)) {
            $dataArray['primaryDNSServer'] = $data->primaryDNSServer ?? null;
        }
        if (array_key_exists('secondaryDNSServer', get_object_vars($data)) && null !== ($data->secondaryDNSServer ?? null)) {
            $dataArray['secondaryDNSServer'] = $data->secondaryDNSServer ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4AccessAndCoreSeparation::class => false];
    }
}