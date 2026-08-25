<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputConstraint());
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
            unset($data['summary']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('annotations', $data)) {
            $values = [];
            foreach ($data['annotations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem::class, 'json', $context);
            }
            $object->setAnnotations($values);
            unset($data['annotations']);
        }
        if (\array_key_exists('images', $data)) {
            $values_1 = [];
            foreach ($data['images'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem::class, 'json', $context);
            }
            $object->setImages($values_1);
            unset($data['images']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        $dataArray['summary'] = $data->getSummary();
        if ($data->isInitialized('text') && null !== $data->getText()) {
            $dataArray['text'] = $data->getText();
        }
        if ($data->isInitialized('annotations') && null !== $data->getAnnotations()) {
            $values = [];
            foreach ($data->getAnnotations() as $value) {
                $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['annotations'] = $values;
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values_1 = [];
            foreach ($data->getImages() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['images'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class => false];
    }
}