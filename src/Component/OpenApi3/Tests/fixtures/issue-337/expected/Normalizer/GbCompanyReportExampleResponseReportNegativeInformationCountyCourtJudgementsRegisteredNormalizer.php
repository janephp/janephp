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
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('exact', $data)) {
            $values = [];
            foreach ($data['exact'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class, 'json', $context);
            }
            $object->setExact($values);
            unset($data['exact']);
        }
        if (\array_key_exists('possible', $data)) {
            $values_1 = [];
            foreach ($data['possible'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class, 'json', $context);
            }
            $object->setPossible($values_1);
            unset($data['possible']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('exact') && null !== $data->getExact()) {
            $values = [];
            foreach ($data->getExact() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['exact'] = $values;
        }
        if ($data->isInitialized('possible') && null !== $data->getPossible()) {
            $values_1 = [];
            foreach ($data->getPossible() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['possible'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class => false];
    }
}