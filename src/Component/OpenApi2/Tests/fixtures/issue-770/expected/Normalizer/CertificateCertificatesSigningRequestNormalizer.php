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
class CertificateCertificatesSigningRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificatesSigningRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificatesSigningRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificatesSigningRequest();
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
        if (\array_key_exists('commonName', $data)) {
            $object->commonName = $data['commonName'];
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
        }
        if (\array_key_exists('organization', $data)) {
            $object->organization = $data['organization'];
        }
        if (\array_key_exists('organizationUnit', $data)) {
            $object->organizationUnit = $data['organizationUnit'];
        }
        if (\array_key_exists('city', $data)) {
            $object->city = $data['city'];
        }
        if (\array_key_exists('state', $data)) {
            $object->state = $data['state'];
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
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
        if (array_key_exists('commonName', get_object_vars($data)) && null !== ($data->commonName ?? null)) {
            $dataArray['commonName'] = $data->commonName ?? null;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email ?? null;
        }
        if (array_key_exists('organization', get_object_vars($data)) && null !== ($data->organization ?? null)) {
            $dataArray['organization'] = $data->organization ?? null;
        }
        if (array_key_exists('organizationUnit', get_object_vars($data)) && null !== ($data->organizationUnit ?? null)) {
            $dataArray['organizationUnit'] = $data->organizationUnit ?? null;
        }
        if (array_key_exists('city', get_object_vars($data)) && null !== ($data->city ?? null)) {
            $dataArray['city'] = $data->city ?? null;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['state'] = $data->state ?? null;
        }
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificatesSigningRequest::class => false];
    }
}