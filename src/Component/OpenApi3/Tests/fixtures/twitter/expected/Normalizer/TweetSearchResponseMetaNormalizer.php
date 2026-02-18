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
class TweetSearchResponseMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('newest_id', $data)) {
            $object->setNewestId($data['newest_id']);
            unset($data['newest_id']);
        }
        if (\array_key_exists('oldest_id', $data)) {
            $object->setOldestId($data['oldest_id']);
            unset($data['oldest_id']);
        }
        if (\array_key_exists('next_token', $data)) {
            $object->setNextToken($data['next_token']);
            unset($data['next_token']);
        }
        if (\array_key_exists('result_count', $data)) {
            $object->setResultCount($data['result_count']);
            unset($data['result_count']);
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
        if ($data->isInitialized('newestId') && null !== $data->getNewestId()) {
            $dataArray['newest_id'] = $data->getNewestId();
        }
        if ($data->isInitialized('oldestId') && null !== $data->getOldestId()) {
            $dataArray['oldest_id'] = $data->getOldestId();
        }
        if ($data->isInitialized('nextToken') && null !== $data->getNextToken()) {
            $dataArray['next_token'] = $data->getNextToken();
        }
        if ($data->isInitialized('resultCount') && null !== $data->getResultCount()) {
            $dataArray['result_count'] = $data->getResultCount();
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta::class => false];
    }
}