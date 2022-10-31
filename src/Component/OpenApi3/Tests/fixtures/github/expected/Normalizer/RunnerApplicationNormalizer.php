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
class RunnerApplicationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\RunnerApplication';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\RunnerApplication';
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
        $object = new \Github\Model\RunnerApplication();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RunnerApplicationConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('os', $data)) {
            $object->setOs($data['os']);
            unset($data['os']);
        }
        if (\array_key_exists('architecture', $data)) {
            $object->setArchitecture($data['architecture']);
            unset($data['architecture']);
        }
        if (\array_key_exists('download_url', $data)) {
            $object->setDownloadUrl($data['download_url']);
            unset($data['download_url']);
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
            unset($data['filename']);
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
        if ($object->isInitialized('os') && null !== $object->getOs()) {
            $data['os'] = $object->getOs();
        }
        if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
            $data['architecture'] = $object->getArchitecture();
        }
        if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
            $data['download_url'] = $object->getDownloadUrl();
        }
        if ($object->isInitialized('filename') && null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RunnerApplicationConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}