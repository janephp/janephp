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
class RateLimitOverviewResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\RateLimitOverviewResources';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\RateLimitOverviewResources';
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
        $object = new \Github\Model\RateLimitOverviewResources();
        $validator = new \Github\Validator\RateLimitOverviewResourcesValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('core', $data)) {
            $object->setCore($this->denormalizer->denormalize($data['core'], 'Github\\Model\\RateLimit', 'json', $context));
        }
        if (\array_key_exists('graphql', $data)) {
            $object->setGraphql($this->denormalizer->denormalize($data['graphql'], 'Github\\Model\\RateLimit', 'json', $context));
        }
        if (\array_key_exists('search', $data)) {
            $object->setSearch($this->denormalizer->denormalize($data['search'], 'Github\\Model\\RateLimit', 'json', $context));
        }
        if (\array_key_exists('source_import', $data)) {
            $object->setSourceImport($this->denormalizer->denormalize($data['source_import'], 'Github\\Model\\RateLimit', 'json', $context));
        }
        if (\array_key_exists('integration_manifest', $data)) {
            $object->setIntegrationManifest($this->denormalizer->denormalize($data['integration_manifest'], 'Github\\Model\\RateLimit', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['core'] = $this->normalizer->normalize($object->getCore(), 'json', $context);
        if (null !== $object->getGraphql()) {
            $data['graphql'] = $this->normalizer->normalize($object->getGraphql(), 'json', $context);
        }
        $data['search'] = $this->normalizer->normalize($object->getSearch(), 'json', $context);
        if (null !== $object->getSourceImport()) {
            $data['source_import'] = $this->normalizer->normalize($object->getSourceImport(), 'json', $context);
        }
        if (null !== $object->getIntegrationManifest()) {
            $data['integration_manifest'] = $this->normalizer->normalize($object->getIntegrationManifest(), 'json', $context);
        }
        $validator = new \Github\Validator\RateLimitOverviewResourcesValidator();
        $validator->validate($data);
        return $data;
    }
}