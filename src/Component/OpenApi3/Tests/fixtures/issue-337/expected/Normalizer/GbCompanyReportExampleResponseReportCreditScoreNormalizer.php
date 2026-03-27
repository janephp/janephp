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
            $object->setCurrentCreditRating($this->denormalizer->denormalize($data['currentCreditRating'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating::class, 'json', $context));
            unset($data['currentCreditRating']);
        }
        if (\array_key_exists('currentContractLimit', $data)) {
            $object->setCurrentContractLimit($this->denormalizer->denormalize($data['currentContractLimit'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit::class, 'json', $context));
            unset($data['currentContractLimit']);
        }
        if (\array_key_exists('previousCreditRating', $data)) {
            $object->setPreviousCreditRating($this->denormalizer->denormalize($data['previousCreditRating'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class, 'json', $context));
            unset($data['previousCreditRating']);
        }
        if (\array_key_exists('latestRatingChangeDate', $data)) {
            $object->setLatestRatingChangeDate($data['latestRatingChangeDate']);
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
        if ($data->isInitialized('currentCreditRating') && null !== $data->getCurrentCreditRating()) {
            $dataArray['currentCreditRating'] = $this->normalizer->normalize($data->getCurrentCreditRating(), 'json', $context);
        }
        if ($data->isInitialized('currentContractLimit') && null !== $data->getCurrentContractLimit()) {
            $dataArray['currentContractLimit'] = $this->normalizer->normalize($data->getCurrentContractLimit(), 'json', $context);
        }
        if ($data->isInitialized('previousCreditRating') && null !== $data->getPreviousCreditRating()) {
            $dataArray['previousCreditRating'] = $this->normalizer->normalize($data->getPreviousCreditRating(), 'json', $context);
        }
        if ($data->isInitialized('latestRatingChangeDate') && null !== $data->getLatestRatingChangeDate()) {
            $dataArray['latestRatingChangeDate'] = $data->getLatestRatingChangeDate();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class => false];
    }
}