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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\AddonsResource();
        if (\array_key_exists('has_config', $data) && \is_int($data['has_config'])) {
            $data['has_config'] = (bool) $data['has_config'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('app_name', $data)) {
            $object->setAppName($data['app_name']);
            unset($data['app_name']);
        }
        if (\array_key_exists('app_slug', $data)) {
            $object->setAppSlug($data['app_slug']);
            unset($data['app_slug']);
        }
        if (\array_key_exists('plan_name', $data)) {
            $object->setPlanName($data['plan_name']);
            unset($data['plan_name']);
        }
        if (\array_key_exists('plan_slug', $data)) {
            $object->setPlanSlug($data['plan_slug']);
            unset($data['plan_slug']);
        }
        if (\array_key_exists('plan_price_per_month', $data)) {
            $object->setPlanPricePerMonth($data['plan_price_per_month']);
            unset($data['plan_price_per_month']);
        }
        if (\array_key_exists('has_config', $data)) {
            $object->setHasConfig($data['has_config']);
            unset($data['has_config']);
        }
        if (\array_key_exists('metadata', $data)) {
            $values = [];
            foreach ($data['metadata'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AddonsResourceMetadata::class, 'json', $context);
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        if (\array_key_exists('sso_url', $data)) {
            $object->setSsoUrl($data['sso_url']);
            unset($data['sso_url']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
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
        $dataArray['uuid'] = $data->getUuid();
        $dataArray['name'] = $data->getName();
        $dataArray['state'] = $data->getState();
        if ($data->isInitialized('appName') && null !== $data->getAppName()) {
            $dataArray['app_name'] = $data->getAppName();
        }
        $dataArray['app_slug'] = $data->getAppSlug();
        if ($data->isInitialized('planName') && null !== $data->getPlanName()) {
            $dataArray['plan_name'] = $data->getPlanName();
        }
        $dataArray['plan_slug'] = $data->getPlanSlug();
        if ($data->isInitialized('planPricePerMonth') && null !== $data->getPlanPricePerMonth()) {
            $dataArray['plan_price_per_month'] = $data->getPlanPricePerMonth();
        }
        $dataArray['has_config'] = $data->getHasConfig();
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['metadata'] = $values;
        }
        if ($data->isInitialized('ssoUrl') && null !== $data->getSsoUrl()) {
            $dataArray['sso_url'] = $data->getSsoUrl();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        foreach ($data as $key => $value_1) {
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