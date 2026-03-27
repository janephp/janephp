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
class BooksBookIdReviewsGetLdjsonResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearch::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearch::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
            unset($data['@type']);
        }
        if (\array_key_exists('hydra:template', $data)) {
            $object->setHydraTemplate($data['hydra:template']);
            unset($data['hydra:template']);
        }
        if (\array_key_exists('hydra:variableRepresentation', $data)) {
            $object->setHydraVariableRepresentation($data['hydra:variableRepresentation']);
            unset($data['hydra:variableRepresentation']);
        }
        if (\array_key_exists('hydra:mapping', $data)) {
            $values = [];
            foreach ($data['hydra:mapping'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem::class, 'json', $context);
            }
            $object->setHydraMapping($values);
            unset($data['hydra:mapping']);
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
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['@type'] = $data->getType();
        }
        if ($data->isInitialized('hydraTemplate') && null !== $data->getHydraTemplate()) {
            $dataArray['hydra:template'] = $data->getHydraTemplate();
        }
        if ($data->isInitialized('hydraVariableRepresentation') && null !== $data->getHydraVariableRepresentation()) {
            $dataArray['hydra:variableRepresentation'] = $data->getHydraVariableRepresentation();
        }
        if ($data->isInitialized('hydraMapping') && null !== $data->getHydraMapping()) {
            $values = [];
            foreach ($data->getHydraMapping() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['hydra:mapping'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearch::class => false];
    }
}