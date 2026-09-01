<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GdprFtpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GdprFtp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GdprFtp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GdprFtp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ftpHost', $data)) {
            $object->ftpHost = $data['ftpHost'];
        }
        if (\array_key_exists('ftpPort', $data)) {
            $object->ftpPort = $data['ftpPort'];
        }
        if (\array_key_exists('ftpRemoteDirectory', $data)) {
            $object->ftpRemoteDirectory = $data['ftpRemoteDirectory'];
        }
        if (\array_key_exists('ftpUserName', $data)) {
            $object->ftpUserName = $data['ftpUserName'];
        }
        if (\array_key_exists('ftpPassword', $data)) {
            $object->ftpPassword = $data['ftpPassword'];
        }
        if (\array_key_exists('ftpProtocol', $data)) {
            $object->ftpProtocol = $data['ftpProtocol'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ftpHost'] = $data->ftpHost ?? null;
        $dataArray['ftpPort'] = $data->ftpPort ?? null;
        if (array_key_exists('ftpRemoteDirectory', get_object_vars($data)) && null !== ($data->ftpRemoteDirectory ?? null)) {
            $dataArray['ftpRemoteDirectory'] = $data->ftpRemoteDirectory ?? null;
        }
        if (array_key_exists('ftpUserName', get_object_vars($data)) && null !== ($data->ftpUserName ?? null)) {
            $dataArray['ftpUserName'] = $data->ftpUserName ?? null;
        }
        if (array_key_exists('ftpPassword', get_object_vars($data)) && null !== ($data->ftpPassword ?? null)) {
            $dataArray['ftpPassword'] = $data->ftpPassword ?? null;
        }
        if (array_key_exists('ftpProtocol', get_object_vars($data)) && null !== ($data->ftpProtocol ?? null)) {
            $dataArray['ftpProtocol'] = $data->ftpProtocol ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GdprFtp::class => false];
    }
}