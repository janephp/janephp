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
class MonitoringPortfoliosPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\MonitoringPortfoliosPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\MonitoringPortfoliosPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\MonitoringPortfoliosPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isDefault', $data) && \is_int($data['isDefault'])) {
            $data['isDefault'] = (bool) $data['isDefault'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('isDefault', $data)) {
            $object->isDefault = $data['isDefault'];
            unset($data['isDefault']);
        }
        if (\array_key_exists('emails', $data)) {
            $object->emails = $this->denormalizer->denormalize($data['emails'], \CreditSafe\API\Model\MonitoringPortfoliosPostBodyEmails::class, 'json', $context);
            unset($data['emails']);
        }
        if (\array_key_exists('emailSubject', $data)) {
            $object->emailSubject = $data['emailSubject'];
            unset($data['emailSubject']);
        }
        if (\array_key_exists('emailLanguage', $data)) {
            $object->emailLanguage = $data['emailLanguage'];
            unset($data['emailLanguage']);
        }
        if (\array_key_exists('frequency', $data)) {
            $object->frequency = $data['frequency'];
            unset($data['frequency']);
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
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('isDefault', get_object_vars($data)) && null !== ($data->isDefault ?? null)) {
            $dataArray['isDefault'] = $data->isDefault ?? null;
        }
        if (array_key_exists('emails', get_object_vars($data)) && null !== ($data->emails ?? null)) {
            $dataArray['emails'] = ($data->emails ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->emails ?? null, 'json', $context));
        }
        if (array_key_exists('emailSubject', get_object_vars($data)) && null !== ($data->emailSubject ?? null)) {
            $dataArray['emailSubject'] = $data->emailSubject ?? null;
        }
        if (array_key_exists('emailLanguage', get_object_vars($data)) && null !== ($data->emailLanguage ?? null)) {
            $dataArray['emailLanguage'] = $data->emailLanguage ?? null;
        }
        if (array_key_exists('frequency', get_object_vars($data)) && null !== ($data->frequency ?? null)) {
            $dataArray['frequency'] = $data->frequency ?? null;
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
        return [\CreditSafe\API\Model\MonitoringPortfoliosPostBody::class => false];
    }
}