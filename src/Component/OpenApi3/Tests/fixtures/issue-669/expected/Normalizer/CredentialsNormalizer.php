<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CredentialsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Credentials::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Credentials::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\Credentials();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('server', $data)) {
            $object->server = $data['server'];
            unset($data['server']);
        }
        if (\array_key_exists('certificate_authority_data', $data)) {
            $object->certificateAuthorityData = $data['certificate_authority_data'];
            unset($data['certificate_authority_data']);
        }
        if (\array_key_exists('client_certificate_data', $data) && $data['client_certificate_data'] !== null) {
            $object->clientCertificateData = $data['client_certificate_data'];
            unset($data['client_certificate_data']);
        }
        elseif (\array_key_exists('client_certificate_data', $data) && $data['client_certificate_data'] === null) {
            $object->clientCertificateData = null;
            unset($data['client_certificate_data']);
        }
        if (\array_key_exists('client_key_data', $data) && $data['client_key_data'] !== null) {
            $object->clientKeyData = $data['client_key_data'];
            unset($data['client_key_data']);
        }
        elseif (\array_key_exists('client_key_data', $data) && $data['client_key_data'] === null) {
            $object->clientKeyData = null;
            unset($data['client_key_data']);
        }
        if (\array_key_exists('token', $data)) {
            $object->token = $data['token'];
            unset($data['token']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['expires_at'], 'Y-m-d\TH:i:sP');
            }
            $object->expiresAt = $date;
            unset($data['expires_at']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('server', get_object_vars($data)) && null !== ($data->server ?? null)) {
            $dataArray['server'] = $data->server ?? null;
        }
        if (array_key_exists('certificateAuthorityData', get_object_vars($data)) && null !== ($data->certificateAuthorityData ?? null)) {
            $dataArray['certificate_authority_data'] = $data->certificateAuthorityData ?? null;
        }
        if (array_key_exists('clientCertificateData', get_object_vars($data)) && null !== ($data->clientCertificateData ?? null)) {
            $dataArray['client_certificate_data'] = $data->clientCertificateData ?? null;
        }
        if (array_key_exists('clientKeyData', get_object_vars($data)) && null !== ($data->clientKeyData ?? null)) {
            $dataArray['client_key_data'] = $data->clientKeyData ?? null;
        }
        if (array_key_exists('token', get_object_vars($data)) && null !== ($data->token ?? null)) {
            $dataArray['token'] = $data->token ?? null;
        }
        if (array_key_exists('expiresAt', get_object_vars($data)) && null !== ($data->expiresAt ?? null)) {
            $dataArray['expires_at'] = ($data->expiresAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\Credentials::class => false];
    }
}