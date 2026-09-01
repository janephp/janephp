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
            $object->businessName = $data['businessName'];
            unset($data['businessName']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $data['country'];
            unset($data['country']);
        }
        if (\array_key_exists('companyNumber', $data)) {
            $object->companyNumber = $data['companyNumber'];
            unset($data['companyNumber']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->companyRegistrationNumber = $data['companyRegistrationNumber'];
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('mainActivity', $data)) {
            $object->mainActivity = $this->denormalizer->denormalize($data['mainActivity'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryMainActivity::class, 'json', $context);
            unset($data['mainActivity']);
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->companyStatus = $this->denormalizer->denormalize($data['companyStatus'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus::class, 'json', $context);
            unset($data['companyStatus']);
        }
        if (\array_key_exists('latestTurnoverFigure', $data)) {
            $object->latestTurnoverFigure = $this->denormalizer->denormalize($data['latestTurnoverFigure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure::class, 'json', $context);
            unset($data['latestTurnoverFigure']);
        }
        if (\array_key_exists('latestShareholdersEquityFigure', $data)) {
            $object->latestShareholdersEquityFigure = $this->denormalizer->denormalize($data['latestShareholdersEquityFigure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure::class, 'json', $context);
            unset($data['latestShareholdersEquityFigure']);
        }
        if (\array_key_exists('creditRating', $data)) {
            $object->creditRating = $this->denormalizer->denormalize($data['creditRating'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRating::class, 'json', $context);
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
        if (array_key_exists('businessName', get_object_vars($data)) && null !== ($data->businessName ?? null)) {
            $dataArray['businessName'] = $data->businessName ?? null;
        }
        if (array_key_exists('country', get_object_vars($data)) && null !== ($data->country ?? null)) {
            $dataArray['country'] = $data->country ?? null;
        }
        if (array_key_exists('companyNumber', get_object_vars($data)) && null !== ($data->companyNumber ?? null)) {
            $dataArray['companyNumber'] = $data->companyNumber ?? null;
        }
        if (array_key_exists('companyRegistrationNumber', get_object_vars($data)) && null !== ($data->companyRegistrationNumber ?? null)) {
            $dataArray['companyRegistrationNumber'] = $data->companyRegistrationNumber ?? null;
        }
        if (array_key_exists('mainActivity', get_object_vars($data)) && null !== ($data->mainActivity ?? null)) {
            $dataArray['mainActivity'] = ($data->mainActivity ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->mainActivity ?? null, 'json', $context));
        }
        if (array_key_exists('companyStatus', get_object_vars($data)) && null !== ($data->companyStatus ?? null)) {
            $dataArray['companyStatus'] = ($data->companyStatus ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->companyStatus ?? null, 'json', $context));
        }
        if (array_key_exists('latestTurnoverFigure', get_object_vars($data)) && null !== ($data->latestTurnoverFigure ?? null)) {
            $dataArray['latestTurnoverFigure'] = ($data->latestTurnoverFigure ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->latestTurnoverFigure ?? null, 'json', $context));
        }
        if (array_key_exists('latestShareholdersEquityFigure', get_object_vars($data)) && null !== ($data->latestShareholdersEquityFigure ?? null)) {
            $dataArray['latestShareholdersEquityFigure'] = ($data->latestShareholdersEquityFigure ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->latestShareholdersEquityFigure ?? null, 'json', $context));
        }
        if (array_key_exists('creditRating', get_object_vars($data)) && null !== ($data->creditRating ?? null)) {
            $dataArray['creditRating'] = ($data->creditRating ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->creditRating ?? null, 'json', $context));
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class => false];
    }
}