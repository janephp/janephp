<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BooksBookIdReviewsGetLdjsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hydra:member', $data)) {
            $values = [];
            foreach ($data['hydra:member'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ApiPlatform\Demo\Model\ReviewJsonldReviewRead::class, 'json', $context);
            }
            $object->setHydraMember($values);
            unset($data['hydra:member']);
        }
        if (\array_key_exists('hydra:totalItems', $data)) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
            unset($data['hydra:totalItems']);
        }
        if (\array_key_exists('hydra:view', $data)) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraView::class, 'json', $context));
            unset($data['hydra:view']);
        }
        if (\array_key_exists('hydra:search', $data)) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearch::class, 'json', $context));
            unset($data['hydra:search']);
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
        $values = [];
        foreach ($data->getHydraMember() as $value) {
            $values[] = $value === null ? null : new \ApiPlatform\Demo\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['hydra:member'] = $values;
        if ($data->isInitialized('hydraTotalItems') && null !== $data->getHydraTotalItems()) {
            $dataArray['hydra:totalItems'] = $data->getHydraTotalItems();
        }
        if ($data->isInitialized('hydraView') && null !== $data->getHydraView()) {
            $dataArray['hydra:view'] = $data->getHydraView() === null ? null : new \ApiPlatform\Demo\Runtime\JsonObject($this->normalizer->normalize($data->getHydraView(), 'json', $context));
        }
        if ($data->isInitialized('hydraSearch') && null !== $data->getHydraSearch()) {
            $dataArray['hydra:search'] = $data->getHydraSearch() === null ? null : new \ApiPlatform\Demo\Runtime\JsonObject($this->normalizer->normalize($data->getHydraSearch(), 'json', $context));
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
        return [\ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200::class => false];
    }
}