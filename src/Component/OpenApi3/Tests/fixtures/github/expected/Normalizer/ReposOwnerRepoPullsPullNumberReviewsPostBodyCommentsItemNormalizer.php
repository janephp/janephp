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
class ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem';
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
        $object = new \Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItemConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
            unset($data['position']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('line', $data)) {
            $object->setLine($data['line']);
            unset($data['line']);
        }
        if (\array_key_exists('side', $data)) {
            $object->setSide($data['side']);
            unset($data['side']);
        }
        if (\array_key_exists('start_line', $data)) {
            $object->setStartLine($data['start_line']);
            unset($data['start_line']);
        }
        if (\array_key_exists('start_side', $data)) {
            $object->setStartSide($data['start_side']);
            unset($data['start_side']);
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
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        $data['body'] = $object->getBody();
        if ($object->isInitialized('line') && null !== $object->getLine()) {
            $data['line'] = $object->getLine();
        }
        if ($object->isInitialized('side') && null !== $object->getSide()) {
            $data['side'] = $object->getSide();
        }
        if ($object->isInitialized('startLine') && null !== $object->getStartLine()) {
            $data['start_line'] = $object->getStartLine();
        }
        if ($object->isInitialized('startSide') && null !== $object->getStartSide()) {
            $data['start_side'] = $object->getStartSide();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItemConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}