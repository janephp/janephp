<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\ExecIdJsonGetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ExecIdJsonGetResponse200';
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
        $object = new \Docker\Api\Model\ExecIdJsonGetResponse200();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ExecIdJsonGetResponse200Constraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CanRemove', $data)) {
            $object->setCanRemove($data['CanRemove']);
        }
        if (\array_key_exists('DetachKeys', $data)) {
            $object->setDetachKeys($data['DetachKeys']);
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Running', $data)) {
            $object->setRunning($data['Running']);
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->setExitCode($data['ExitCode']);
        }
        if (\array_key_exists('ProcessConfig', $data)) {
            $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], 'Docker\\Api\\Model\\ProcessConfig', 'json', $context));
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->setOpenStdin($data['OpenStdin']);
        }
        if (\array_key_exists('OpenStderr', $data)) {
            $object->setOpenStderr($data['OpenStderr']);
        }
        if (\array_key_exists('OpenStdout', $data)) {
            $object->setOpenStdout($data['OpenStdout']);
        }
        if (\array_key_exists('ContainerID', $data)) {
            $object->setContainerID($data['ContainerID']);
        }
        if (\array_key_exists('Pid', $data)) {
            $object->setPid($data['Pid']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
            $data['CanRemove'] = $object->getCanRemove();
        }
        if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
            $data['DetachKeys'] = $object->getDetachKeys();
        }
        if ($object->isInitialized('iD') && null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if ($object->isInitialized('running') && null !== $object->getRunning()) {
            $data['Running'] = $object->getRunning();
        }
        if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        }
        if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
            $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
        }
        if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        }
        if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
            $data['OpenStderr'] = $object->getOpenStderr();
        }
        if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
            $data['OpenStdout'] = $object->getOpenStdout();
        }
        if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
            $data['ContainerID'] = $object->getContainerID();
        }
        if ($object->isInitialized('pid') && null !== $object->getPid()) {
            $data['Pid'] = $object->getPid();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ExecIdJsonGetResponse200Constraint());
        }
        return $data;
    }
}