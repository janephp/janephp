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
class MarketplaceListingPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\MarketplaceListingPlan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\MarketplaceListingPlan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\MarketplaceListingPlan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_free_trial', $data) && \is_int($data['has_free_trial'])) {
            $data['has_free_trial'] = (bool) $data['has_free_trial'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\MarketplaceListingPlanConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('accounts_url', $data)) {
            $object->setAccountsUrl($data['accounts_url']);
            unset($data['accounts_url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('monthly_price_in_cents', $data)) {
            $object->setMonthlyPriceInCents($data['monthly_price_in_cents']);
            unset($data['monthly_price_in_cents']);
        }
        if (\array_key_exists('yearly_price_in_cents', $data)) {
            $object->setYearlyPriceInCents($data['yearly_price_in_cents']);
            unset($data['yearly_price_in_cents']);
        }
        if (\array_key_exists('price_model', $data)) {
            $object->setPriceModel($data['price_model']);
            unset($data['price_model']);
        }
        if (\array_key_exists('has_free_trial', $data)) {
            $object->setHasFreeTrial($data['has_free_trial']);
            unset($data['has_free_trial']);
        }
        if (\array_key_exists('unit_name', $data) && $data['unit_name'] !== null) {
            $object->setUnitName($data['unit_name']);
            unset($data['unit_name']);
        }
        elseif (\array_key_exists('unit_name', $data) && $data['unit_name'] === null) {
            $object->setUnitName(null);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('bullets', $data)) {
            $values = [];
            foreach ($data['bullets'] as $value) {
                $values[] = $value;
            }
            $object->setBullets($values);
            unset($data['bullets']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['accounts_url'] = $data->getAccountsUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['number'] = $data->getNumber();
        $dataArray['name'] = $data->getName();
        $dataArray['description'] = $data->getDescription();
        $dataArray['monthly_price_in_cents'] = $data->getMonthlyPriceInCents();
        $dataArray['yearly_price_in_cents'] = $data->getYearlyPriceInCents();
        $dataArray['price_model'] = $data->getPriceModel();
        $dataArray['has_free_trial'] = $data->getHasFreeTrial();
        $dataArray['unit_name'] = $data->getUnitName();
        $dataArray['state'] = $data->getState();
        $values = [];
        foreach ($data->getBullets() as $value) {
            $values[] = $value;
        }
        $dataArray['bullets'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\MarketplaceListingPlanConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\MarketplaceListingPlan::class => false];
    }
}