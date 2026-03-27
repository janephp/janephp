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
            $object->setAppIsStatic($data['app_is_static']);
            unset($data['app_is_static']);
        }
        if (\array_key_exists('app_name_available', $data)) {
            $object->setAppNameAvailable($data['app_name_available']);
            unset($data['app_name_available']);
        }
        if (\array_key_exists('app_name_suggestion', $data)) {
            $object->setAppNameSuggestion($data['app_name_suggestion']);
            unset($data['app_name_suggestion']);
        }
        if (\array_key_exists('existing_static_apps', $data)) {
            $object->setExistingStaticApps($data['existing_static_apps']);
            unset($data['existing_static_apps']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppSpec::class, 'json', $context));
            unset($data['spec']);
        }
        if (\array_key_exists('app_cost', $data)) {
            $object->setAppCost($data['app_cost']);
            unset($data['app_cost']);
        }
        if (\array_key_exists('app_tier_downgrade_cost', $data)) {
            $object->setAppTierDowngradeCost($data['app_tier_downgrade_cost']);
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
        if ($data->isInitialized('appIsStatic') && null !== $data->getAppIsStatic()) {
            $dataArray['app_is_static'] = $data->getAppIsStatic();
        }
        if ($data->isInitialized('appNameAvailable') && null !== $data->getAppNameAvailable()) {
            $dataArray['app_name_available'] = $data->getAppNameAvailable();
        }
        if ($data->isInitialized('appNameSuggestion') && null !== $data->getAppNameSuggestion()) {
            $dataArray['app_name_suggestion'] = $data->getAppNameSuggestion();
        }
        if ($data->isInitialized('existingStaticApps') && null !== $data->getExistingStaticApps()) {
            $dataArray['existing_static_apps'] = $data->getExistingStaticApps();
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('appCost') && null !== $data->getAppCost()) {
            $dataArray['app_cost'] = $data->getAppCost();
        }
        if ($data->isInitialized('appTierDowngradeCost') && null !== $data->getAppTierDowngradeCost()) {
            $dataArray['app_tier_downgrade_cost'] = $data->getAppTierDowngradeCost();
        }
        foreach ($data as $key => $value) {
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