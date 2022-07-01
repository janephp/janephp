<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PageBuildNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\PageBuild';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PageBuild';
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
        $object = new \Github\Model\PageBuild();
        $validator = new \Github\Validator\PageBuildValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($this->denormalizer->denormalize($data['error'], 'Github\\Model\\PageBuildError', 'json', $context));
        }
        if (\array_key_exists('pusher', $data) && $data['pusher'] !== null) {
            $object->setPusher($this->denormalizer->denormalize($data['pusher'], 'Github\\Model\\PageBuildPusher', 'json', $context));
        }
        elseif (\array_key_exists('pusher', $data) && $data['pusher'] === null) {
            $object->setPusher(null);
        }
        if (\array_key_exists('commit', $data)) {
            $object->setCommit($data['commit']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['status'] = $object->getStatus();
        $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
        $data['pusher'] = $this->normalizer->normalize($object->getPusher(), 'json', $context);
        $data['commit'] = $object->getCommit();
        $data['duration'] = $object->getDuration();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $validator = new \Github\Validator\PageBuildValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}