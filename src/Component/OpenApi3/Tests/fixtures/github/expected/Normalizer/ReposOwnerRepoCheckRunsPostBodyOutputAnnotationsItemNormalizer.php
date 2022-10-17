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
class ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem';
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
        $object = new \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItemConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('start_column', $data)) {
            $object->setStartColumn($data['start_column']);
            unset($data['start_column']);
        }
        if (\array_key_exists('end_column', $data)) {
            $object->setEndColumn($data['end_column']);
            unset($data['end_column']);
        }
        if (\array_key_exists('annotation_level', $data)) {
            $object->setAnnotationLevel($data['annotation_level']);
            unset($data['annotation_level']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('raw_details', $data)) {
            $object->setRawDetails($data['raw_details']);
            unset($data['raw_details']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
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
        if (null !== $object->getStartColumn()) {
            $data['start_column'] = $object->getStartColumn();
        }
        if (null !== $object->getEndColumn()) {
            $data['end_column'] = $object->getEndColumn();
        }
        $data['annotation_level'] = $object->getAnnotationLevel();
        $data['message'] = $object->getMessage();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getRawDetails()) {
            $data['raw_details'] = $object->getRawDetails();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItemConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}