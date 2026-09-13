<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FullTextEntitiesAnnotationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntitiesAnnotationsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntitiesAnnotationsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntitiesAnnotationsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('probability', $data) && \is_int($data['probability'])) {
            $data['probability'] = (float) $data['probability'];
        }
        if (\array_key_exists('start', $data)) {
            $object->start = $data['start'];
            unset($data['start']);
        }
        if (\array_key_exists('end', $data)) {
            $object->end = $data['end'];
            unset($data['end']);
        }
        if (\array_key_exists('probability', $data)) {
            $object->probability = $data['probability'];
            unset($data['probability']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('normalized_text', $data)) {
            $object->normalizedText = $data['normalized_text'];
            unset($data['normalized_text']);
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
        $dataArray['start'] = $data->start;
        $dataArray['end'] = $data->end;
        if (array_key_exists('probability', get_object_vars($data)) && null !== ($data->probability ?? null)) {
            $dataArray['probability'] = $data->probability;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }
        if (array_key_exists('normalizedText', get_object_vars($data)) && null !== ($data->normalizedText ?? null)) {
            $dataArray['normalized_text'] = $data->normalizedText;
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
        return [\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntitiesAnnotationsItem::class => false];
    }
}