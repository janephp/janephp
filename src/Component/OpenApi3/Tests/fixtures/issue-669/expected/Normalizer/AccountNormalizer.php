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
class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Account::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Account::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\Account();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('email_verified', $data) && \is_int($data['email_verified'])) {
            $data['email_verified'] = (bool) $data['email_verified'];
        }
        if (\array_key_exists('droplet_limit', $data)) {
            $object->dropletLimit = $data['droplet_limit'];
            unset($data['droplet_limit']);
        }
        if (\array_key_exists('floating_ip_limit', $data)) {
            $object->floatingIpLimit = $data['floating_ip_limit'];
            unset($data['floating_ip_limit']);
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
            unset($data['email']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('email_verified', $data)) {
            $object->emailVerified = $data['email_verified'];
            unset($data['email_verified']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('status_message', $data)) {
            $object->statusMessage = $data['status_message'];
            unset($data['status_message']);
        }
        if (\array_key_exists('team', $data)) {
            $object->team = $this->denormalizer->denormalize($data['team'], \Jane\Generated\DigitalOcean\Model\AccountTeam::class, 'json', $context);
            unset($data['team']);
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
        $dataArray['droplet_limit'] = $data->dropletLimit ?? null;
        $dataArray['floating_ip_limit'] = $data->floatingIpLimit ?? null;
        $dataArray['email'] = $data->email ?? null;
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        $dataArray['uuid'] = $data->uuid ?? null;
        $dataArray['email_verified'] = $data->emailVerified ?? null;
        $dataArray['status'] = $data->status ?? null;
        $dataArray['status_message'] = $data->statusMessage ?? null;
        if (array_key_exists('team', get_object_vars($data)) && null !== ($data->team ?? null)) {
            $dataArray['team'] = ($data->team ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->team ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\Account::class => false];
    }
}