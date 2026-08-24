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
class CheckAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CheckAnnotation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CheckAnnotation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CheckAnnotation();
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
            $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('start_line', $data)) {
            $object->setStartLine($data['start_line']);
            unset($data['start_line']);
        }
        if (\array_key_exists('end_line', $data)) {
            $object->setEndLine($data['end_line']);
            unset($data['end_line']);
        }
        if (\array_key_exists('start_column', $data) && $data['start_column'] !== null) {
            $object->setStartColumn($data['start_column']);
            unset($data['start_column']);
        }
        elseif (\array_key_exists('start_column', $data) && $data['start_column'] === null) {
            $object->setStartColumn(null);
            unset($data['start_column']);
        }
        if (\array_key_exists('end_column', $data) && $data['end_column'] !== null) {
            $object->setEndColumn($data['end_column']);
            unset($data['end_column']);
        }
        elseif (\array_key_exists('end_column', $data) && $data['end_column'] === null) {
            $object->setEndColumn(null);
            unset($data['end_column']);
        }
        if (\array_key_exists('annotation_level', $data) && $data['annotation_level'] !== null) {
            $object->setAnnotationLevel($data['annotation_level']);
            unset($data['annotation_level']);
        }
        elseif (\array_key_exists('annotation_level', $data) && $data['annotation_level'] === null) {
            $object->setAnnotationLevel(null);
            unset($data['annotation_level']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
            unset($data['title']);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
            unset($data['message']);
        }
        if (\array_key_exists('raw_details', $data) && $data['raw_details'] !== null) {
            $object->setRawDetails($data['raw_details']);
            unset($data['raw_details']);
        }
        elseif (\array_key_exists('raw_details', $data) && $data['raw_details'] === null) {
            $object->setRawDetails(null);
            unset($data['raw_details']);
        }
        if (\array_key_exists('blob_href', $data)) {
            $object->setBlobHref($data['blob_href']);
            unset($data['blob_href']);
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
        $dataArray['path'] = $data->getPath();
        $dataArray['start_line'] = $data->getStartLine();
        $dataArray['end_line'] = $data->getEndLine();
        $dataArray['start_column'] = $data->getStartColumn();
        $dataArray['end_column'] = $data->getEndColumn();
        $dataArray['annotation_level'] = $data->getAnnotationLevel();
        $dataArray['title'] = $data->getTitle();
        $dataArray['message'] = $data->getMessage();
        $dataArray['raw_details'] = $data->getRawDetails();
        $dataArray['blob_href'] = $data->getBlobHref();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CheckAnnotationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CheckAnnotation::class => false];
    }
}