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
class ReviewsGetHaljsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('_embedded', $data)) {
            $values = [];
            foreach ($data['_embedded'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ApiPlatform\Demo\Model\ReviewJsonhalReviewRead::class, 'json', $context);
            }
            $object->setEmbedded($values);
            unset($data['_embedded']);
        }
        if (\array_key_exists('totalItems', $data)) {
            $object->setTotalItems($data['totalItems']);
            unset($data['totalItems']);
        }
        if (\array_key_exists('itemsPerPage', $data)) {
            $object->setItemsPerPage($data['itemsPerPage']);
            unset($data['itemsPerPage']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200Links::class, 'json', $context));
            unset($data['_links']);
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
        foreach ($data->getEmbedded() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['_embedded'] = $values;
        if ($data->isInitialized('totalItems') && null !== $data->getTotalItems()) {
            $dataArray['totalItems'] = $data->getTotalItems();
        }
        if ($data->isInitialized('itemsPerPage') && null !== $data->getItemsPerPage()) {
            $dataArray['itemsPerPage'] = $data->getItemsPerPage();
        }
        $dataArray['_links'] = $this->normalizer->normalize($data->getLinks(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200::class => false];
    }
}