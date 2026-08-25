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
class VideoMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('media_key', $data)) {
            $object->setMediaKey($data['media_key']);
            unset($data['media_key']);
        }
        if (\array_key_exists('view_count', $data)) {
            $object->setViewCount($data['view_count']);
            unset($data['view_count']);
        }
        if (\array_key_exists('playback_0_count', $data)) {
            $object->setPlayback0Count($data['playback_0_count']);
            unset($data['playback_0_count']);
        }
        if (\array_key_exists('playback_25_count', $data)) {
            $object->setPlayback25Count($data['playback_25_count']);
            unset($data['playback_25_count']);
        }
        if (\array_key_exists('playback_50_count', $data)) {
            $object->setPlayback50Count($data['playback_50_count']);
            unset($data['playback_50_count']);
        }
        if (\array_key_exists('playback_75_count', $data)) {
            $object->setPlayback75Count($data['playback_75_count']);
            unset($data['playback_75_count']);
        }
        if (\array_key_exists('playback_100_count', $data)) {
            $object->setPlayback100Count($data['playback_100_count']);
            unset($data['playback_100_count']);
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
        $dataArray['media_key'] = $data->getMediaKey();
        $dataArray['view_count'] = $data->getViewCount();
        if ($data->isInitialized('playback0Count') && null !== $data->getPlayback0Count()) {
            $dataArray['playback_0_count'] = $data->getPlayback0Count();
        }
        if ($data->isInitialized('playback25Count') && null !== $data->getPlayback25Count()) {
            $dataArray['playback_25_count'] = $data->getPlayback25Count();
        }
        if ($data->isInitialized('playback50Count') && null !== $data->getPlayback50Count()) {
            $dataArray['playback_50_count'] = $data->getPlayback50Count();
        }
        if ($data->isInitialized('playback75Count') && null !== $data->getPlayback75Count()) {
            $dataArray['playback_75_count'] = $data->getPlayback75Count();
        }
        if ($data->isInitialized('playback100Count') && null !== $data->getPlayback100Count()) {
            $dataArray['playback_100_count'] = $data->getPlayback100Count();
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics::class => false];
    }
}