<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TLSInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TLSInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TLSInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TLSInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TLSInfoConstraint());
        }
        if (\array_key_exists('TrustRoot', $data)) {
            $object->trustRoot = $data['TrustRoot'];
        }
        if (\array_key_exists('CertIssuerSubject', $data)) {
            $object->certIssuerSubject = $data['CertIssuerSubject'];
        }
        if (\array_key_exists('CertIssuerPublicKey', $data)) {
            $object->certIssuerPublicKey = $data['CertIssuerPublicKey'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('trustRoot', get_object_vars($data)) && null !== ($data->trustRoot ?? null)) {
            $dataArray['TrustRoot'] = $data->trustRoot ?? null;
        }
        if (array_key_exists('certIssuerSubject', get_object_vars($data)) && null !== ($data->certIssuerSubject ?? null)) {
            $dataArray['CertIssuerSubject'] = $data->certIssuerSubject ?? null;
        }
        if (array_key_exists('certIssuerPublicKey', get_object_vars($data)) && null !== ($data->certIssuerPublicKey ?? null)) {
            $dataArray['CertIssuerPublicKey'] = $data->certIssuerPublicKey ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TLSInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TLSInfo::class => false];
    }
}