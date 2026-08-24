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
class GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('commonValue', $data)) {
            $object->setCommonValue($data['commonValue']);
            unset($data['commonValue']);
        }
        if (\array_key_exists('commonDescription', $data)) {
            $object->setCommonDescription($data['commonDescription']);
            unset($data['commonDescription']);
        }
        if (\array_key_exists('creditLimit', $data)) {
            $object->setCreditLimit($this->denormalizer->denormalize($data['creditLimit'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit::class, 'json', $context));
            unset($data['creditLimit']);
        }
        if (\array_key_exists('providerValue', $data)) {
            $object->setProviderValue($this->denormalizer->denormalize($data['providerValue'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue::class, 'json', $context));
            unset($data['providerValue']);
        }
        if (\array_key_exists('providerDescription', $data)) {
            $object->setProviderDescription($data['providerDescription']);
            unset($data['providerDescription']);
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
        if ($data->isInitialized('commonValue') && null !== $data->getCommonValue()) {
            $dataArray['commonValue'] = $data->getCommonValue();
        }
        if ($data->isInitialized('commonDescription') && null !== $data->getCommonDescription()) {
            $dataArray['commonDescription'] = $data->getCommonDescription();
        }
        if ($data->isInitialized('creditLimit') && null !== $data->getCreditLimit()) {
            $dataArray['creditLimit'] = $data->getCreditLimit() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getCreditLimit(), 'json', $context));
        }
        if ($data->isInitialized('providerValue') && null !== $data->getProviderValue()) {
            $dataArray['providerValue'] = $data->getProviderValue() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getProviderValue(), 'json', $context));
        }
        if ($data->isInitialized('providerDescription') && null !== $data->getProviderDescription()) {
            $dataArray['providerDescription'] = $data->getProviderDescription();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class => false];
    }
}