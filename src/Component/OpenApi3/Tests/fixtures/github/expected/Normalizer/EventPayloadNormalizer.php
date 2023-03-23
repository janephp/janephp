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
class EventPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\EventPayload';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\EventPayload';
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
        $object = new \Github\Model\EventPayload();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventPayloadConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
            unset($data['action']);
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($this->denormalizer->denormalize($data['issue'], 'Github\\Model\\IssueSimple', 'json', $context));
            unset($data['issue']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Github\\Model\\IssueComment', 'json', $context));
            unset($data['comment']);
        }
        if (\array_key_exists('pages', $data)) {
            $values = array();
            foreach ($data['pages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\EventPayloadPagesItem', 'json', $context);
            }
            $object->setPages($values);
            unset($data['pages']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('action') && null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if ($object->isInitialized('issue') && null !== $object->getIssue()) {
            $data['issue'] = $this->normalizer->normalize($object->getIssue(), 'json', $context);
        }
        if ($object->isInitialized('comment') && null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if ($object->isInitialized('pages') && null !== $object->getPages()) {
            $values = array();
            foreach ($object->getPages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['pages'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventPayloadConstraint());
        }
        return $data;
    }
}
