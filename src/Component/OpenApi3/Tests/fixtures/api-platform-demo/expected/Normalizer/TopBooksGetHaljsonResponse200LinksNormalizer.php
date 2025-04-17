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
class TopBooksGetHaljsonResponse200LinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200Links::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200Links::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200Links();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksSelf::class, 'json', $context));
            unset($data['self']);
        }
        if (\array_key_exists('first', $data)) {
            $object->setFirst($this->denormalizer->denormalize($data['first'], \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksFirst::class, 'json', $context));
            unset($data['first']);
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($this->denormalizer->denormalize($data['last'], \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksLast::class, 'json', $context));
            unset($data['last']);
        }
        if (\array_key_exists('next', $data)) {
            $object->setNext($this->denormalizer->denormalize($data['next'], \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksNext::class, 'json', $context));
            unset($data['next']);
        }
        if (\array_key_exists('previous', $data)) {
            $object->setPrevious($this->denormalizer->denormalize($data['previous'], \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksPrevious::class, 'json', $context));
            unset($data['previous']);
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
        if ($data->isInitialized('self') && null !== $data->getSelf()) {
            $dataArray['self'] = $this->normalizer->normalize($data->getSelf(), 'json', $context);
        }
        if ($data->isInitialized('first') && null !== $data->getFirst()) {
            $dataArray['first'] = $this->normalizer->normalize($data->getFirst(), 'json', $context);
        }
        if ($data->isInitialized('last') && null !== $data->getLast()) {
            $dataArray['last'] = $this->normalizer->normalize($data->getLast(), 'json', $context);
        }
        if ($data->isInitialized('next') && null !== $data->getNext()) {
            $dataArray['next'] = $this->normalizer->normalize($data->getNext(), 'json', $context);
        }
        if ($data->isInitialized('previous') && null !== $data->getPrevious()) {
            $dataArray['previous'] = $this->normalizer->normalize($data->getPrevious(), 'json', $context);
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
        return [\ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200Links::class => false];
    }
}