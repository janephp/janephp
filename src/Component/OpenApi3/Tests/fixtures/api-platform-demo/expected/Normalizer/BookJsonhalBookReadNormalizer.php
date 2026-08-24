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
class BookJsonhalBookReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\BookJsonhalBookRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\BookJsonhalBookRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ApiPlatform\Demo\Model\BookJsonhalBookRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \ApiPlatform\Demo\Model\BookJsonhalBookReadLinks::class, 'json', $context));
            unset($data['_links']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('isbn', $data) && $data['isbn'] !== null) {
            $object->setIsbn($data['isbn']);
            unset($data['isbn']);
        }
        elseif (\array_key_exists('isbn', $data) && $data['isbn'] === null) {
            $object->setIsbn(null);
            unset($data['isbn']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($data['author']);
            unset($data['author']);
        }
        if (\array_key_exists('publicationDate', $data)) {
            $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['publicationDate']));
            unset($data['publicationDate']);
        }
        if (\array_key_exists('reviews', $data)) {
            $values = [];
            foreach ($data['reviews'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ApiPlatform\Demo\Model\ReviewJsonhalBookRead::class, 'json', $context);
            }
            $object->setReviews($values);
            unset($data['reviews']);
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
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $dataArray['_links'] = $data->getLinks() === null ? null : new \ApiPlatform\Demo\Runtime\JsonObject($this->normalizer->normalize($data->getLinks(), 'json', $context));
        }
        if ($data->isInitialized('isbn') && null !== $data->getIsbn()) {
            $dataArray['isbn'] = $data->getIsbn();
        }
        $dataArray['title'] = $data->getTitle();
        $dataArray['description'] = $data->getDescription();
        $dataArray['author'] = $data->getAuthor();
        $dataArray['publicationDate'] = $data->getPublicationDate()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('reviews') && null !== $data->getReviews()) {
            $values = [];
            foreach ($data->getReviews() as $value) {
                $values[] = $value === null ? null : new \ApiPlatform\Demo\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['reviews'] = $values;
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
        return [\ApiPlatform\Demo\Model\BookJsonhalBookRead::class => false];
    }
}