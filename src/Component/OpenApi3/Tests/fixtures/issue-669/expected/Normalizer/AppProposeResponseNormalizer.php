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
class AppProposeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppProposeResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppProposeResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppProposeResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('app_is_static', $data) && \is_int($data['app_is_static'])) {
            $data['app_is_static'] = (bool) $data['app_is_static'];
        }
        if (\array_key_exists('app_name_available', $data) && \is_int($data['app_name_available'])) {
            $data['app_name_available'] = (bool) $data['app_name_available'];
        }
        if (\array_key_exists('app_is_static', $data)) {
            $object->appIsStatic = $data['app_is_static'];
            unset($data['app_is_static']);
        }
        if (\array_key_exists('app_name_available', $data)) {
            $object->appNameAvailable = $data['app_name_available'];
            unset($data['app_name_available']);
        }
        if (\array_key_exists('app_name_suggestion', $data)) {
            $object->appNameSuggestion = $data['app_name_suggestion'];
            unset($data['app_name_suggestion']);
        }
        if (\array_key_exists('existing_static_apps', $data)) {
            $object->existingStaticApps = $data['existing_static_apps'];
            unset($data['existing_static_apps']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppSpec::class, 'json', $context);
            unset($data['spec']);
        }
        if (\array_key_exists('app_cost', $data)) {
            $object->appCost = $data['app_cost'];
            unset($data['app_cost']);
        }
        if (\array_key_exists('app_tier_downgrade_cost', $data)) {
            $object->appTierDowngradeCost = $data['app_tier_downgrade_cost'];
            unset($data['app_tier_downgrade_cost']);
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
        if (array_key_exists('appIsStatic', get_object_vars($data)) && null !== ($data->appIsStatic ?? null)) {
            $dataArray['app_is_static'] = $data->appIsStatic ?? null;
        }
        if (array_key_exists('appNameAvailable', get_object_vars($data)) && null !== ($data->appNameAvailable ?? null)) {
            $dataArray['app_name_available'] = $data->appNameAvailable ?? null;
        }
        if (array_key_exists('appNameSuggestion', get_object_vars($data)) && null !== ($data->appNameSuggestion ?? null)) {
            $dataArray['app_name_suggestion'] = $data->appNameSuggestion ?? null;
        }
        if (array_key_exists('existingStaticApps', get_object_vars($data)) && null !== ($data->existingStaticApps ?? null)) {
            $dataArray['existing_static_apps'] = $data->existingStaticApps ?? null;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $dataArray['spec'] = ($data->spec ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        }
        if (array_key_exists('appCost', get_object_vars($data)) && null !== ($data->appCost ?? null)) {
            $dataArray['app_cost'] = $data->appCost ?? null;
        }
        if (array_key_exists('appTierDowngradeCost', get_object_vars($data)) && null !== ($data->appTierDowngradeCost ?? null)) {
            $dataArray['app_tier_downgrade_cost'] = $data->appTierDowngradeCost ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppProposeResponse::class => false];
    }
}