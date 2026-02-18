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
class GdprFtpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\GdprFtp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\GdprFtp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\GdprFtp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ftpHost', $data)) {
            $object->setFtpHost($data['ftpHost']);
        }
        if (\array_key_exists('ftpPort', $data)) {
            $object->setFtpPort($data['ftpPort']);
        }
        if (\array_key_exists('ftpRemoteDirectory', $data)) {
            $object->setFtpRemoteDirectory($data['ftpRemoteDirectory']);
        }
        if (\array_key_exists('ftpUserName', $data)) {
            $object->setFtpUserName($data['ftpUserName']);
        }
        if (\array_key_exists('ftpPassword', $data)) {
            $object->setFtpPassword($data['ftpPassword']);
        }
        if (\array_key_exists('ftpProtocol', $data)) {
            $object->setFtpProtocol($data['ftpProtocol']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ftpHost'] = $data->getFtpHost();
        $dataArray['ftpPort'] = $data->getFtpPort();
        if ($data->isInitialized('ftpRemoteDirectory') && null !== $data->getFtpRemoteDirectory()) {
            $dataArray['ftpRemoteDirectory'] = $data->getFtpRemoteDirectory();
        }
        if ($data->isInitialized('ftpUserName') && null !== $data->getFtpUserName()) {
            $dataArray['ftpUserName'] = $data->getFtpUserName();
        }
        if ($data->isInitialized('ftpPassword') && null !== $data->getFtpPassword()) {
            $dataArray['ftpPassword'] = $data->getFtpPassword();
        }
        if ($data->isInitialized('ftpProtocol') && null !== $data->getFtpProtocol()) {
            $dataArray['ftpProtocol'] = $data->getFtpProtocol();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\GdprFtp::class => false];
    }
}