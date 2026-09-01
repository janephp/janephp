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
class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating();
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
            $object->commonValue = $data['commonValue'];
            unset($data['commonValue']);
        }
        if (\array_key_exists('commonDescription', $data)) {
            $object->commonDescription = $data['commonDescription'];
            unset($data['commonDescription']);
        }
        if (\array_key_exists('creditLimit', $data)) {
            $object->creditLimit = $this->denormalizer->denormalize($data['creditLimit'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit::class, 'json', $context);
            unset($data['creditLimit']);
        }
        if (\array_key_exists('providerValue', $data)) {
            $object->providerValue = $this->denormalizer->denormalize($data['providerValue'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValue::class, 'json', $context);
            unset($data['providerValue']);
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
        if (array_key_exists('commonValue', get_object_vars($data)) && null !== ($data->commonValue ?? null)) {
            $dataArray['commonValue'] = $data->commonValue ?? null;
        }
        if (array_key_exists('commonDescription', get_object_vars($data)) && null !== ($data->commonDescription ?? null)) {
            $dataArray['commonDescription'] = $data->commonDescription ?? null;
        }
        if (array_key_exists('creditLimit', get_object_vars($data)) && null !== ($data->creditLimit ?? null)) {
            $dataArray['creditLimit'] = ($data->creditLimit ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->creditLimit ?? null, 'json', $context));
        }
        if (array_key_exists('providerValue', get_object_vars($data)) && null !== ($data->providerValue ?? null)) {
            $dataArray['providerValue'] = ($data->providerValue ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->providerValue ?? null, 'json', $context));
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
        return [\CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating::class => false];
    }
}