<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AnalyzerBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AnalyzerBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AnalyzerBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('kind', $data) and 'EdgeNGramAnalyzer' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\EdgeNGramAnalyzer', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LanguageAnalyzer' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\LanguageAnalyzer', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NGramAnalyzer' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NGramAnalyzer', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'PathHierarchyAnalyzer' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\PathHierarchyAnalyzer', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SimpleAnalyzer' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SimpleAnalyzer', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\AnalyzerBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'EdgeNGramAnalyzer' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'LanguageAnalyzer' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NGramAnalyzer' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'PathHierarchyAnalyzer' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'SimpleAnalyzer' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AnalyzerBase::class => false];
    }
}