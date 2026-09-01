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
class GbCompanyReportExampleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('orderId', $data)) {
            $object->orderId = $data['orderId'];
            unset($data['orderId']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->companyId = $data['companyId'];
            unset($data['companyId']);
        }
        if (\array_key_exists('dateOfOrder', $data)) {
            $object->dateOfOrder = $data['dateOfOrder'];
            unset($data['dateOfOrder']);
        }
        if (\array_key_exists('language', $data)) {
            $object->language = $data['language'];
            unset($data['language']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->userId = $data['userId'];
            unset($data['userId']);
        }
        if (\array_key_exists('report', $data)) {
            $object->report = $this->denormalizer->denormalize($data['report'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class, 'json', $context);
            unset($data['report']);
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
        if (array_key_exists('orderId', get_object_vars($data)) && null !== ($data->orderId ?? null)) {
            $dataArray['orderId'] = $data->orderId ?? null;
        }
        if (array_key_exists('companyId', get_object_vars($data)) && null !== ($data->companyId ?? null)) {
            $dataArray['companyId'] = $data->companyId ?? null;
        }
        if (array_key_exists('dateOfOrder', get_object_vars($data)) && null !== ($data->dateOfOrder ?? null)) {
            $dataArray['dateOfOrder'] = $data->dateOfOrder ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['userId'] = $data->userId ?? null;
        }
        if (array_key_exists('report', get_object_vars($data)) && null !== ($data->report ?? null)) {
            $dataArray['report'] = ($data->report ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->report ?? null, 'json', $context));
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponse::class => false];
    }
}