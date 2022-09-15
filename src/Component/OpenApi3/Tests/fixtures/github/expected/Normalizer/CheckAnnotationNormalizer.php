<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\CheckAnnotation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CheckAnnotation';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CheckAnnotation();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('start_line', $data)) {
            $object->setStartLine($data['start_line']);
        }
        if (\array_key_exists('end_line', $data)) {
            $object->setEndLine($data['end_line']);
        }
        if (\array_key_exists('start_column', $data) && $data['start_column'] !== null) {
            $object->setStartColumn($data['start_column']);
        }
        elseif (\array_key_exists('start_column', $data) && $data['start_column'] === null) {
            $object->setStartColumn(null);
        }
        if (\array_key_exists('end_column', $data) && $data['end_column'] !== null) {
            $object->setEndColumn($data['end_column']);
        }
        elseif (\array_key_exists('end_column', $data) && $data['end_column'] === null) {
            $object->setEndColumn(null);
        }
        if (\array_key_exists('annotation_level', $data) && $data['annotation_level'] !== null) {
            $object->setAnnotationLevel($data['annotation_level']);
        }
        elseif (\array_key_exists('annotation_level', $data) && $data['annotation_level'] === null) {
            $object->setAnnotationLevel(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        if (\array_key_exists('raw_details', $data) && $data['raw_details'] !== null) {
            $object->setRawDetails($data['raw_details']);
        }
        elseif (\array_key_exists('raw_details', $data) && $data['raw_details'] === null) {
            $object->setRawDetails(null);
        }
        if (\array_key_exists('blob_href', $data)) {
            $object->setBlobHref($data['blob_href']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['path'] = $object->getPath();
        $data['start_line'] = $object->getStartLine();
        $data['end_line'] = $object->getEndLine();
        $data['start_column'] = $object->getStartColumn();
        $data['end_column'] = $object->getEndColumn();
        $data['annotation_level'] = $object->getAnnotationLevel();
        $data['title'] = $object->getTitle();
        $data['message'] = $object->getMessage();
        $data['raw_details'] = $object->getRawDetails();
        $data['blob_href'] = $object->getBlobHref();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CheckAnnotationConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}