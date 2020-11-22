<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConsoleMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ConsoleMessage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ConsoleMessage';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ConsoleMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('retries', $data)) {
            $object->setRetries($data['retries']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('deduplicate', $data)) {
            $object->setDeduplicate($data['deduplicate']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('command', $data) && $data['command'] !== null) {
            $object->setCommand($data['command']);
        }
        elseif (\array_key_exists('command', $data) && $data['command'] === null) {
            $object->setCommand(null);
        }
        if (\array_key_exists('arguments', $data) && $data['arguments'] !== null) {
            $values = array();
            foreach ($data['arguments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\TupleOfStringAndString', 'json', $context);
            }
            $object->setArguments($values);
        }
        elseif (\array_key_exists('arguments', $data) && $data['arguments'] === null) {
            $object->setArguments(null);
        }
        if (\array_key_exists('targetQueue', $data) && $data['targetQueue'] !== null) {
            $object->setTargetQueue($data['targetQueue']);
        }
        elseif (\array_key_exists('targetQueue', $data) && $data['targetQueue'] === null) {
            $object->setTargetQueue(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['retries'] = $object->getRetries();
        $data['priority'] = $object->getPriority();
        $data['deduplicate'] = $object->getDeduplicate();
        $data['kind'] = $object->getKind();
        if (null !== $object->getCommand()) {
            $data['command'] = $object->getCommand();
        }
        if (null !== $object->getArguments()) {
            $values = array();
            foreach ($object->getArguments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['arguments'] = $values;
        }
        if (null !== $object->getTargetQueue()) {
            $data['targetQueue'] = $object->getTargetQueue();
        }
        return $data;
    }
}