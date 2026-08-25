<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BalanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Balance::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Balance::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\Balance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('month_to_date_balance', $data)) {
            $object->setMonthToDateBalance($data['month_to_date_balance']);
            unset($data['month_to_date_balance']);
        }
        if (\array_key_exists('account_balance', $data)) {
            $object->setAccountBalance($data['account_balance']);
            unset($data['account_balance']);
        }
        if (\array_key_exists('month_to_date_usage', $data)) {
            $object->setMonthToDateUsage($data['month_to_date_usage']);
            unset($data['month_to_date_usage']);
        }
        if (\array_key_exists('generated_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['generated_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['generated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setGeneratedAt($date);
            unset($data['generated_at']);
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
        if ($data->isInitialized('monthToDateBalance') && null !== $data->getMonthToDateBalance()) {
            $dataArray['month_to_date_balance'] = $data->getMonthToDateBalance();
        }
        if ($data->isInitialized('accountBalance') && null !== $data->getAccountBalance()) {
            $dataArray['account_balance'] = $data->getAccountBalance();
        }
        if ($data->isInitialized('monthToDateUsage') && null !== $data->getMonthToDateUsage()) {
            $dataArray['month_to_date_usage'] = $data->getMonthToDateUsage();
        }
        if ($data->isInitialized('generatedAt') && null !== $data->getGeneratedAt()) {
            $dataArray['generated_at'] = $data->getGeneratedAt()->format('Y-m-d\TH:i:sP');
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
        return [\Jane\Generated\DigitalOcean\Model\Balance::class => false];
    }
}