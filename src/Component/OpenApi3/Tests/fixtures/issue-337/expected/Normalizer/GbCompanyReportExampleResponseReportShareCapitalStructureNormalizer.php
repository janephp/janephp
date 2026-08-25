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
class GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('numberOfSharesIssued', $data) && \is_int($data['numberOfSharesIssued'])) {
            $data['numberOfSharesIssued'] = (float) $data['numberOfSharesIssued'];
        }
        if (\array_key_exists('issuedShareCapital', $data)) {
            $object->setIssuedShareCapital($this->denormalizer->denormalize($data['issuedShareCapital'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital::class, 'json', $context));
            unset($data['issuedShareCapital']);
        }
        if (\array_key_exists('numberOfSharesIssued', $data)) {
            $object->setNumberOfSharesIssued($data['numberOfSharesIssued']);
            unset($data['numberOfSharesIssued']);
        }
        if (\array_key_exists('shareHolders', $data)) {
            $values = [];
            foreach ($data['shareHolders'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class, 'json', $context);
            }
            $object->setShareHolders($values);
            unset($data['shareHolders']);
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
        if ($data->isInitialized('issuedShareCapital') && null !== $data->getIssuedShareCapital()) {
            $dataArray['issuedShareCapital'] = $data->getIssuedShareCapital() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getIssuedShareCapital(), 'json', $context));
        }
        if ($data->isInitialized('numberOfSharesIssued') && null !== $data->getNumberOfSharesIssued()) {
            $dataArray['numberOfSharesIssued'] = $data->getNumberOfSharesIssued();
        }
        if ($data->isInitialized('shareHolders') && null !== $data->getShareHolders()) {
            $values = [];
            foreach ($data->getShareHolders() as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['shareHolders'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class => false];
    }
}