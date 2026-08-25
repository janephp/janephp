<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalesInvoiceFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SalesInvoiceFilter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SalesInvoiceFilter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SalesInvoiceFilter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('includePositions', $data) && \is_int($data['includePositions'])) {
            $data['includePositions'] = (bool) $data['includePositions'];
        }
        if (\array_key_exists('invoiceIds', $data) && $data['invoiceIds'] !== null) {
            $values = [];
            foreach ($data['invoiceIds'] as $value) {
                $values[] = $value;
            }
            $object->setInvoiceIds($values);
        }
        elseif (\array_key_exists('invoiceIds', $data) && $data['invoiceIds'] === null) {
            $object->setInvoiceIds(null);
        }
        if (\array_key_exists('links', $data) && $data['links'] !== null) {
            $values_1 = [];
            foreach ($data['links'] as $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1) and \array_key_exists('discriminator', $value_1)) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\LinkLinkBase::class, 'json', $context);
                } elseif (is_array($value_1) and \array_key_exists('invoiceId', $value_1)) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\LinkInvoiceLink::class, 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setLinks($values_1);
        }
        elseif (\array_key_exists('links', $data) && $data['links'] === null) {
            $object->setLinks(null);
        }
        if (\array_key_exists('includePositions', $data) && $data['includePositions'] !== null) {
            $object->setIncludePositions($data['includePositions']);
        }
        elseif (\array_key_exists('includePositions', $data) && $data['includePositions'] === null) {
            $object->setIncludePositions(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('invoiceIds') && null !== $data->getInvoiceIds()) {
            $values = [];
            foreach ($data->getInvoiceIds() as $value) {
                $values[] = $value;
            }
            $dataArray['invoiceIds'] = $values;
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values_1 = [];
            foreach ($data->getLinks() as $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                }
                $values_1[] = $value_2;
            }
            $dataArray['links'] = $values_1;
        }
        if ($data->isInitialized('includePositions') && null !== $data->getIncludePositions()) {
            $dataArray['includePositions'] = $data->getIncludePositions();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SalesInvoiceFilter::class => false];
    }
}