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
class CertificateCertificateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate();
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
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('data', $data)) {
            $object->data = $data['data'];
        }
        if (\array_key_exists('information', $data)) {
            $object->information = $data['information'];
        }
        if (\array_key_exists('intermediateData', $data)) {
            $values = [];
            foreach ($data['intermediateData'] as $value) {
                $values[] = $value;
            }
            $object->intermediateData = $values;
        }
        if (\array_key_exists('rootData', $data)) {
            $object->rootData = $data['rootData'];
        }
        if (\array_key_exists('privateKeyData', $data)) {
            $object->privateKeyData = $data['privateKeyData'];
        }
        if (\array_key_exists('certificasSigningRequest', $data)) {
            $object->certificasSigningRequest = $this->denormalizer->denormalize($data['certificasSigningRequest'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->passphrase = $data['passphrase'];
        }
        if (\array_key_exists('publicKey', $data)) {
            $object->publicKey = $data['publicKey'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('data', get_object_vars($data)) && null !== ($data->data ?? null)) {
            $dataArray['data'] = $data->data ?? null;
        }
        if (array_key_exists('information', get_object_vars($data)) && null !== ($data->information ?? null)) {
            $dataArray['information'] = $data->information ?? null;
        }
        if (array_key_exists('intermediateData', get_object_vars($data)) && null !== ($data->intermediateData ?? null)) {
            $values = [];
            foreach ($data->intermediateData ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['intermediateData'] = $values;
        }
        if (array_key_exists('rootData', get_object_vars($data)) && null !== ($data->rootData ?? null)) {
            $dataArray['rootData'] = $data->rootData ?? null;
        }
        if (array_key_exists('privateKeyData', get_object_vars($data)) && null !== ($data->privateKeyData ?? null)) {
            $dataArray['privateKeyData'] = $data->privateKeyData ?? null;
        }
        if (array_key_exists('certificasSigningRequest', get_object_vars($data)) && null !== ($data->certificasSigningRequest ?? null)) {
            $dataArray['certificasSigningRequest'] = ($data->certificasSigningRequest ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->certificasSigningRequest ?? null, 'json', $context));
        }
        if (array_key_exists('passphrase', get_object_vars($data)) && null !== ($data->passphrase ?? null)) {
            $dataArray['passphrase'] = $data->passphrase ?? null;
        }
        if (array_key_exists('publicKey', get_object_vars($data)) && null !== ($data->publicKey ?? null)) {
            $dataArray['publicKey'] = $data->publicKey ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class => false];
    }
}