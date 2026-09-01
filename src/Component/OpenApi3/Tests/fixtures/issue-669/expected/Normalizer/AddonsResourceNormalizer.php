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
class AddonsResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AddonsResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AddonsResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AddonsResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_config', $data) && \is_int($data['has_config'])) {
            $data['has_config'] = (bool) $data['has_config'];
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('state', $data)) {
            $object->state = $data['state'];
            unset($data['state']);
        }
        if (\array_key_exists('app_name', $data)) {
            $object->appName = $data['app_name'];
            unset($data['app_name']);
        }
        if (\array_key_exists('app_slug', $data)) {
            $object->appSlug = $data['app_slug'];
            unset($data['app_slug']);
        }
        if (\array_key_exists('plan_name', $data)) {
            $object->planName = $data['plan_name'];
            unset($data['plan_name']);
        }
        if (\array_key_exists('plan_slug', $data)) {
            $object->planSlug = $data['plan_slug'];
            unset($data['plan_slug']);
        }
        if (\array_key_exists('plan_price_per_month', $data)) {
            $object->planPricePerMonth = $data['plan_price_per_month'];
            unset($data['plan_price_per_month']);
        }
        if (\array_key_exists('has_config', $data)) {
            $object->hasConfig = $data['has_config'];
            unset($data['has_config']);
        }
        if (\array_key_exists('metadata', $data)) {
            $values = [];
            foreach ($data['metadata'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AddonsResourceMetadata::class, 'json', $context);
            }
            $object->metadata = $values;
            unset($data['metadata']);
        }
        if (\array_key_exists('sso_url', $data)) {
            $object->ssoUrl = $data['sso_url'];
            unset($data['sso_url']);
        }
        if (\array_key_exists('message', $data)) {
            $object->message = $data['message'];
            unset($data['message']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['uuid'] = $data->uuid ?? null;
        $dataArray['name'] = $data->name ?? null;
        $dataArray['state'] = $data->state ?? null;
        if (array_key_exists('appName', get_object_vars($data)) && null !== ($data->appName ?? null)) {
            $dataArray['app_name'] = $data->appName ?? null;
        }
        $dataArray['app_slug'] = $data->appSlug ?? null;
        if (array_key_exists('planName', get_object_vars($data)) && null !== ($data->planName ?? null)) {
            $dataArray['plan_name'] = $data->planName ?? null;
        }
        $dataArray['plan_slug'] = $data->planSlug ?? null;
        if (array_key_exists('planPricePerMonth', get_object_vars($data)) && null !== ($data->planPricePerMonth ?? null)) {
            $dataArray['plan_price_per_month'] = $data->planPricePerMonth ?? null;
        }
        $dataArray['has_config'] = $data->hasConfig ?? null;
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $values = [];
            foreach ($data->metadata ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['metadata'] = $values;
        }
        if (array_key_exists('ssoUrl', get_object_vars($data)) && null !== ($data->ssoUrl ?? null)) {
            $dataArray['sso_url'] = $data->ssoUrl ?? null;
        }
        if (array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $dataArray['message'] = $data->message ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AddonsResource::class => false];
    }
}