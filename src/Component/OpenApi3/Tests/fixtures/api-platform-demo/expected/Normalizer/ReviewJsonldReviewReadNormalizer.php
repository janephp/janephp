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
class ReviewJsonldReviewReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\ReviewJsonldReviewRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\ReviewJsonldReviewRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ApiPlatform\Demo\Model\ReviewJsonldReviewRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
            unset($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
            unset($data['@type']);
        }
        if (\array_key_exists('@context', $data)) {
            $object->setContext($data['@context']);
            unset($data['@context']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId2($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId2(null);
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
        }
        if (\array_key_exists('book', $data)) {
            $object->setBook($this->denormalizer->denormalize($data['book'], \ApiPlatform\Demo\Model\BookJsonldReviewRead::class, 'json', $context));
            unset($data['book']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('publicationDate', $data) && $data['publicationDate'] !== null) {
            $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['publicationDate']));
            unset($data['publicationDate']);
        }
        elseif (\array_key_exists('publicationDate', $data) && $data['publicationDate'] === null) {
            $object->setPublicationDate(null);
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
        if ($data->isInitialized('letter')) {
            $dataArray['letter'] = $data->getLetter();
        }
        $dataArray['book'] = $this->normalizer->normalize($data->getBook(), 'json', $context);
        if ($data->isInitialized('author')) {
            $dataArray['author'] = $data->getAuthor();
        }
        if ($data->isInitialized('publicationDate')) {
            $dataArray['publicationDate'] = $data->getPublicationDate()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ApiPlatform\Demo\Model\ReviewJsonldReviewRead::class => false];
    }
}