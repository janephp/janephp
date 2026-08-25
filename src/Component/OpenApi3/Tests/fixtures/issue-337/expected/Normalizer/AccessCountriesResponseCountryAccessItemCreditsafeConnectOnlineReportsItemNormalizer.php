<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('countryName', $data)) {
            $object->setCountryName($data['countryName']);
            unset($data['countryName']);
        }
        if (\array_key_exists('templateName', $data)) {
            $object->setTemplateName($data['templateName']);
            unset($data['templateName']);
        }
        if (\array_key_exists('countryIso2', $data)) {
            $object->setCountryIso2($data['countryIso2']);
            unset($data['countryIso2']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('expireDate', $data)) {
            $object->setExpireDate($data['expireDate']);
            unset($data['expireDate']);
        }
        if (\array_key_exists('paid', $data)) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        }
        if (\array_key_exists('used', $data)) {
            $object->setUsed($data['used']);
            unset($data['used']);
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
        if ($data->isInitialized('countryName') && null !== $data->getCountryName()) {
            $dataArray['countryName'] = $data->getCountryName();
        }
        if ($data->isInitialized('templateName') && null !== $data->getTemplateName()) {
            $dataArray['templateName'] = $data->getTemplateName();
        }
        if ($data->isInitialized('countryIso2') && null !== $data->getCountryIso2()) {
            $dataArray['countryIso2'] = $data->getCountryIso2();
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('expireDate') && null !== $data->getExpireDate()) {
            $dataArray['expireDate'] = $data->getExpireDate();
        }
        if ($data->isInitialized('paid') && null !== $data->getPaid()) {
            $dataArray['paid'] = $data->getPaid();
        }
        if ($data->isInitialized('used') && null !== $data->getUsed()) {
            $dataArray['used'] = $data->getUsed();
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
        return [\CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem::class => false];
    }
}