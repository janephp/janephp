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
class ExpansionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('users', $data)) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('tweets', $data)) {
            $values_1 = [];
            foreach ($data['tweets'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTweets($values_1);
            unset($data['tweets']);
        }
        if (\array_key_exists('places', $data)) {
            $values_2 = [];
            foreach ($data['places'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPlaces($values_2);
            unset($data['places']);
        }
        if (\array_key_exists('media', $data)) {
            $values_3 = [];
            foreach ($data['media'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setMedia($values_3);
            unset($data['media']);
        }
        if (\array_key_exists('polls', $data)) {
            $values_4 = [];
            foreach ($data['polls'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class, 'json', $context);
            }
            $object->setPolls($values_4);
            unset($data['polls']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('users') && null !== $data->getUsers()) {
            $values = [];
            foreach ($data->getUsers() as $value) {
                $values[] = $value;
            }
            $dataArray['users'] = $values;
        }
        if ($data->isInitialized('tweets') && null !== $data->getTweets()) {
            $values_1 = [];
            foreach ($data->getTweets() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tweets'] = $values_1;
        }
        if ($data->isInitialized('places') && null !== $data->getPlaces()) {
            $values_2 = [];
            foreach ($data->getPlaces() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['places'] = $values_2;
        }
        if ($data->isInitialized('media') && null !== $data->getMedia()) {
            $values_3 = [];
            foreach ($data->getMedia() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['media'] = $values_3;
        }
        if ($data->isInitialized('polls') && null !== $data->getPolls()) {
            $values_4 = [];
            foreach ($data->getPolls() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['polls'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class => false];
    }
}