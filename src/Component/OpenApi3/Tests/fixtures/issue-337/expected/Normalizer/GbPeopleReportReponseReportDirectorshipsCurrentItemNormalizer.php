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
class GbPeopleReportReponseReportDirectorshipsCurrentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
            unset($data['companyName']);
        }
        if (\array_key_exists('companyNumber', $data)) {
            $object->setCompanyNumber($data['companyNumber']);
            unset($data['companyNumber']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($this->denormalizer->denormalize($data['position'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemPosition::class, 'json', $context));
            unset($data['position']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->setCompanyRegistrationDate($data['companyRegistrationDate']);
            unset($data['companyRegistrationDate']);
        }
        if (\array_key_exists('legalCount', $data)) {
            $object->setLegalCount($data['legalCount']);
            unset($data['legalCount']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->setCreditScore($this->denormalizer->denormalize($data['creditScore'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore::class, 'json', $context));
            unset($data['creditScore']);
        }
        if (\array_key_exists('additionalData', $data)) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additionalData'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData::class, 'json', $context));
            unset($data['additionalData']);
        }
        if (\array_key_exists('latestTurnoverFigure', $data)) {
            $object->setLatestTurnoverFigure($this->denormalizer->denormalize($data['latestTurnoverFigure'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure::class, 'json', $context));
            unset($data['latestTurnoverFigure']);
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->setNetWorth($this->denormalizer->denormalize($data['netWorth'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth::class, 'json', $context));
            unset($data['netWorth']);
        }
        if (\array_key_exists('legalAmount', $data)) {
            $object->setLegalAmount($this->denormalizer->denormalize($data['legalAmount'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount::class, 'json', $context));
            unset($data['legalAmount']);
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
        if ($data->isInitialized('companyName') && null !== $data->getCompanyName()) {
            $dataArray['companyName'] = $data->getCompanyName();
        }
        if ($data->isInitialized('companyNumber') && null !== $data->getCompanyNumber()) {
            $dataArray['companyNumber'] = $data->getCompanyNumber();
        }
        if ($data->isInitialized('companyRegistrationNumber') && null !== $data->getCompanyRegistrationNumber()) {
            $dataArray['companyRegistrationNumber'] = $data->getCompanyRegistrationNumber();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('position') && null !== $data->getPosition()) {
            $dataArray['position'] = $this->normalizer->normalize($data->getPosition(), 'json', $context);
        }
        if ($data->isInitialized('companyRegistrationDate') && null !== $data->getCompanyRegistrationDate()) {
            $dataArray['companyRegistrationDate'] = $data->getCompanyRegistrationDate();
        }
        if ($data->isInitialized('legalCount') && null !== $data->getLegalCount()) {
            $dataArray['legalCount'] = $data->getLegalCount();
        }
        if ($data->isInitialized('creditScore') && null !== $data->getCreditScore()) {
            $dataArray['creditScore'] = $this->normalizer->normalize($data->getCreditScore(), 'json', $context);
        }
        if ($data->isInitialized('additionalData') && null !== $data->getAdditionalData()) {
            $dataArray['additionalData'] = $this->normalizer->normalize($data->getAdditionalData(), 'json', $context);
        }
        if ($data->isInitialized('latestTurnoverFigure') && null !== $data->getLatestTurnoverFigure()) {
            $dataArray['latestTurnoverFigure'] = $this->normalizer->normalize($data->getLatestTurnoverFigure(), 'json', $context);
        }
        if ($data->isInitialized('netWorth') && null !== $data->getNetWorth()) {
            $dataArray['netWorth'] = $this->normalizer->normalize($data->getNetWorth(), 'json', $context);
        }
        if ($data->isInitialized('legalAmount') && null !== $data->getLegalAmount()) {
            $dataArray['legalAmount'] = $this->normalizer->normalize($data->getLegalAmount(), 'json', $context);
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
        return [\CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem::class => false];
    }
}