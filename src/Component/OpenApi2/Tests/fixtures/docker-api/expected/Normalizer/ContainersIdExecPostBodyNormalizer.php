<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\Api\\Model\\ContainersIdExecPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ContainersIdExecPostBody';
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
        $object = new \Docker\Api\Model\ContainersIdExecPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AttachStdin', $data)) {
            $object->setAttachStdin($data['AttachStdin']);
        }
        if (\array_key_exists('AttachStdout', $data)) {
            $object->setAttachStdout($data['AttachStdout']);
        }
        if (\array_key_exists('AttachStderr', $data)) {
            $object->setAttachStderr($data['AttachStderr']);
        }
        if (\array_key_exists('DetachKeys', $data)) {
            $object->setDetachKeys($data['DetachKeys']);
        }
        if (\array_key_exists('Tty', $data)) {
            $object->setTty($data['Tty']);
        }
        if (\array_key_exists('Env', $data)) {
            $values = array();
            foreach ($data['Env'] as $value) {
                $values[] = $value;
            }
            $object->setEnv($values);
        }
        if (\array_key_exists('Cmd', $data)) {
            $values_1 = array();
            foreach ($data['Cmd'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCmd($values_1);
        }
        if (\array_key_exists('Privileged', $data)) {
            $object->setPrivileged($data['Privileged']);
        }
        if (\array_key_exists('User', $data)) {
            $object->setUser($data['User']);
        }
        if (\array_key_exists('WorkingDir', $data)) {
            $object->setWorkingDir($data['WorkingDir']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttachStdin()) {
            $data['AttachStdin'] = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data['AttachStdout'] = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data['AttachStderr'] = $object->getAttachStderr();
        }
        if (null !== $object->getDetachKeys()) {
            $data['DetachKeys'] = $object->getDetachKeys();
        }
        if (null !== $object->getTty()) {
            $data['Tty'] = $object->getTty();
        }
        if (null !== $object->getEnv()) {
            $values = array();
            foreach ($object->getEnv() as $value) {
                $values[] = $value;
            }
            $data['Env'] = $values;
        }
        if (null !== $object->getCmd()) {
            $values_1 = array();
            foreach ($object->getCmd() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Cmd'] = $values_1;
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        }
        if (null !== $object->getWorkingDir()) {
            $data['WorkingDir'] = $object->getWorkingDir();
        }
        return $data;
    }
}