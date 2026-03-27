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
class GbCompanyReportExampleResponseReportCompanySummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('businessName', $data)) {
            $object->setBusinessName($data['businessName']);
            unset($data['businessName']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('companyNumber', $data)) {
            $object->setCompanyNumber($data['companyNumber']);
            unset($data['companyNumber']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('mainActivity', $data)) {
            $object->setMainActivity($this->denormalizer->denormalize($data['mainActivity'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryMainActivity::class, 'json', $context));
            unset($data['mainActivity']);
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->setCompanyStatus($this->denormalizer->denormalize($data['companyStatus'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus::class, 'json', $context));
            unset($data['companyStatus']);
        }
        if (\array_key_exists('latestTurnoverFigure', $data)) {
            $object->setLatestTurnoverFigure($this->denormalizer->denormalize($data['latestTurnoverFigure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure::class, 'json', $context));
            unset($data['latestTurnoverFigure']);
        }
        if (\array_key_exists('latestShareholdersEquityFigure', $data)) {
            $object->setLatestShareholdersEquityFigure($this->denormalizer->denormalize($data['latestShareholdersEquityFigure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure::class, 'json', $context));
            unset($data['latestShareholdersEquityFigure']);
        }
        if (\array_key_exists('creditRating', $data)) {
            $object->setCreditRating($this->denormalizer->denormalize($data['creditRating'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRating::class, 'json', $context));
            unset($data['creditRating']);
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
        if ($data->isInitialized('businessName') && null !== $data->getBusinessName()) {
            $dataArray['businessName'] = $data->getBusinessName();
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('companyNumber') && null !== $data->getCompanyNumber()) {
            $dataArray['companyNumber'] = $data->getCompanyNumber();
        }
        if ($data->isInitialized('companyRegistrationNumber') && null !== $data->getCompanyRegistrationNumber()) {
            $dataArray['companyRegistrationNumber'] = $data->getCompanyRegistrationNumber();
        }
        if ($data->isInitialized('mainActivity') && null !== $data->getMainActivity()) {
            $dataArray['mainActivity'] = $this->normalizer->normalize($data->getMainActivity(), 'json', $context);
        }
        if ($data->isInitialized('companyStatus') && null !== $data->getCompanyStatus()) {
            $dataArray['companyStatus'] = $this->normalizer->normalize($data->getCompanyStatus(), 'json', $context);
        }
        if ($data->isInitialized('latestTurnoverFigure') && null !== $data->getLatestTurnoverFigure()) {
            $dataArray['latestTurnoverFigure'] = $this->normalizer->normalize($data->getLatestTurnoverFigure(), 'json', $context);
        }
        if ($data->isInitialized('latestShareholdersEquityFigure') && null !== $data->getLatestShareholdersEquityFigure()) {
            $dataArray['latestShareholdersEquityFigure'] = $this->normalizer->normalize($data->getLatestShareholdersEquityFigure(), 'json', $context);
        }
        if ($data->isInitialized('creditRating') && null !== $data->getCreditRating()) {
            $dataArray['creditRating'] = $this->normalizer->normalize($data->getCreditRating(), 'json', $context);
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class => false];
    }
}