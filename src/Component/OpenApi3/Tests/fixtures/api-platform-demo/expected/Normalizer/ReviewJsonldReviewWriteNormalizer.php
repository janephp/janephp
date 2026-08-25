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
class ReviewJsonldReviewWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\ReviewJsonldReviewWrite::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\ReviewJsonldReviewWrite::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ApiPlatform\Demo\Model\ReviewJsonldReviewWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
            unset($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
            unset($data['@type']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('rating', $data)) {
            $object->setRating($data['rating']);
            unset($data['rating']);
        }
        if (\array_key_exists('letter', $data) && $data['letter'] !== null) {
            $object->setLetter($data['letter']);
            unset($data['letter']);
        }
        elseif (\array_key_exists('letter', $data) && $data['letter'] === null) {
            $object->setLetter(null);
            unset($data['letter']);
        }
        if (\array_key_exists('book', $data)) {
            $object->setBook($data['book']);
            unset($data['book']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
            unset($data['author']);
        }
        if (\array_key_exists('publicationDate', $data) && $data['publicationDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['publicationDate']);
            if (false === $date) {
                throw new \ApiPlatform\Demo\Runtime\Normalizer\InvalidDateException($data['publicationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setPublicationDate($date);
            unset($data['publicationDate']);
        }
        elseif (\array_key_exists('publicationDate', $data) && $data['publicationDate'] === null) {
            $object->setPublicationDate(null);
            unset($data['publicationDate']);
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
        $dataArray['body'] = $data->getBody();
        $dataArray['rating'] = $data->getRating();
        if ($data->isInitialized('letter') && null !== $data->getLetter()) {
            $dataArray['letter'] = $data->getLetter();
        }
        $dataArray['book'] = $data->getBook();
        if ($data->isInitialized('author') && null !== $data->getAuthor()) {
            $dataArray['author'] = $data->getAuthor();
        }
        if ($data->isInitialized('publicationDate') && null !== $data->getPublicationDate()) {
            $dataArray['publicationDate'] = $data->getPublicationDate()?->format('Y-m-d\TH:i:sP');
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
        return [\ApiPlatform\Demo\Model\ReviewJsonldReviewWrite::class => false];
    }
}