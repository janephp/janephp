<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MarketplacePurchaseMarketplacePendingChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\MarketplacePurchaseMarketplacePendingChange::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\MarketplacePurchaseMarketplacePendingChange::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\MarketplacePurchaseMarketplacePendingChange();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_installed', $data) && \is_int($data['is_installed'])) {
            $data['is_installed'] = (bool) $data['is_installed'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\MarketplacePurchaseMarketplacePendingChangeConstraint());
        }
        if (\array_key_exists('is_installed', $data)) {
            $object->setIsInstalled($data['is_installed']);
            unset($data['is_installed']);
        }
        if (\array_key_exists('effective_date', $data)) {
            $object->setEffectiveDate($data['effective_date']);
            unset($data['effective_date']);
        }
        if (\array_key_exists('unit_count', $data) && $data['unit_count'] !== null) {
            $object->setUnitCount($data['unit_count']);
            unset($data['unit_count']);
        }
        elseif (\array_key_exists('unit_count', $data) && $data['unit_count'] === null) {
            $object->setUnitCount(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], \Github\Model\MarketplaceListingPlan::class, 'json', $context));
            unset($data['plan']);
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
        if ($data->isInitialized('isInstalled') && null !== $data->getIsInstalled()) {
            $dataArray['is_installed'] = $data->getIsInstalled();
        }
        if ($data->isInitialized('effectiveDate') && null !== $data->getEffectiveDate()) {
            $dataArray['effective_date'] = $data->getEffectiveDate();
        }
        if ($data->isInitialized('unitCount')) {
            $dataArray['unit_count'] = $data->getUnitCount();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $this->normalizer->normalize($data->getPlan(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\MarketplacePurchaseMarketplacePendingChangeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\MarketplacePurchaseMarketplacePendingChange::class => false];
    }
}