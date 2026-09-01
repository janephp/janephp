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
class GbCompanyReportExampleResponseReportCreditScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('currentCreditRating', $data)) {
            $object->currentCreditRating = $this->denormalizer->denormalize($data['currentCreditRating'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating::class, 'json', $context);
            unset($data['currentCreditRating']);
        }
        if (\array_key_exists('currentContractLimit', $data)) {
            $object->currentContractLimit = $this->denormalizer->denormalize($data['currentContractLimit'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit::class, 'json', $context);
            unset($data['currentContractLimit']);
        }
        if (\array_key_exists('previousCreditRating', $data)) {
            $object->previousCreditRating = $this->denormalizer->denormalize($data['previousCreditRating'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class, 'json', $context);
            unset($data['previousCreditRating']);
        }
        if (\array_key_exists('latestRatingChangeDate', $data)) {
            $object->latestRatingChangeDate = $data['latestRatingChangeDate'];
            unset($data['latestRatingChangeDate']);
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
        if (array_key_exists('currentCreditRating', get_object_vars($data)) && null !== ($data->currentCreditRating ?? null)) {
            $dataArray['currentCreditRating'] = ($data->currentCreditRating ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->currentCreditRating ?? null, 'json', $context));
        }
        if (array_key_exists('currentContractLimit', get_object_vars($data)) && null !== ($data->currentContractLimit ?? null)) {
            $dataArray['currentContractLimit'] = ($data->currentContractLimit ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->currentContractLimit ?? null, 'json', $context));
        }
        if (array_key_exists('previousCreditRating', get_object_vars($data)) && null !== ($data->previousCreditRating ?? null)) {
            $dataArray['previousCreditRating'] = ($data->previousCreditRating ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->previousCreditRating ?? null, 'json', $context));
        }
        if (array_key_exists('latestRatingChangeDate', get_object_vars($data)) && null !== ($data->latestRatingChangeDate ?? null)) {
            $dataArray['latestRatingChangeDate'] = $data->latestRatingChangeDate ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class => false];
    }
}