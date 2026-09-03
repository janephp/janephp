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
class DpskWlanExternalDpskEncryptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpskEncryption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpskEncryption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpskEncryption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('method', $data)) {
            $object->method = $data['method'];
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->algorithm = $data['algorithm'];
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->passphrase = $data['passphrase'];
        }
        if (\array_key_exists('mfp', $data)) {
            $object->mfp = $data['mfp'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('method', get_object_vars($data)) && null !== ($data->method ?? null)) {
            $dataArray['method'] = $data->method ?? null;
        }
        if (array_key_exists('algorithm', get_object_vars($data)) && null !== ($data->algorithm ?? null)) {
            $dataArray['algorithm'] = $data->algorithm ?? null;
        }
        if (array_key_exists('passphrase', get_object_vars($data)) && null !== ($data->passphrase ?? null)) {
            $dataArray['passphrase'] = $data->passphrase ?? null;
        }
        if (array_key_exists('mfp', get_object_vars($data)) && null !== ($data->mfp ?? null)) {
            $dataArray['mfp'] = $data->mfp ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpskEncryption::class => false];
    }
}