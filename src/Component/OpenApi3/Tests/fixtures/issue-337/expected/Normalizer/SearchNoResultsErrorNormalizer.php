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
class SearchNoResultsErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\SearchNoResultsError::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\SearchNoResultsError::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\SearchNoResultsError();
        if (\array_key_exists('totalSize', $data) && \is_int($data['totalSize'])) {
            $data['totalSize'] = (double) $data['totalSize'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalSize', $data)) {
            $object->setTotalSize($data['totalSize']);
            unset($data['totalSize']);
        }
        if (\array_key_exists('companies', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['companies'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCompanies($values);
            unset($data['companies']);
        }
        if (\array_key_exists('messages', $data)) {
            $object->setMessages($this->denormalizer->denormalize($data['messages'], \CreditSafe\API\Model\SearchNoResultsErrorMessages::class, 'json', $context));
            unset($data['messages']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('totalSize') && null !== $data->getTotalSize()) {
            $dataArray['totalSize'] = $data->getTotalSize();
        }
        if ($data->isInitialized('companies') && null !== $data->getCompanies()) {
            $values = [];
            foreach ($data->getCompanies() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['companies'] = $values;
        }
        if ($data->isInitialized('messages') && null !== $data->getMessages()) {
            $dataArray['messages'] = $this->normalizer->normalize($data->getMessages(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\SearchNoResultsError::class => false];
    }
}