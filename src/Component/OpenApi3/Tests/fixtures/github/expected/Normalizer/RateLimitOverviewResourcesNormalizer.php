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
class RateLimitOverviewResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\RateLimitOverviewResources';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RateLimitOverviewResourcesConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('core', $data)) {
            $object->setCore($this->denormalizer->denormalize($data['core'], 'Github\\Model\\RateLimit', 'json', $context));
            unset($data['core']);
        }
        if (\array_key_exists('graphql', $data)) {
            $object->setGraphql($this->denormalizer->denormalize($data['graphql'], 'Github\\Model\\RateLimit', 'json', $context));
            unset($data['graphql']);
        }
        if (\array_key_exists('search', $data)) {
            $object->setSearch($this->denormalizer->denormalize($data['search'], 'Github\\Model\\RateLimit', 'json', $context));
            unset($data['search']);
        }
        if (\array_key_exists('source_import', $data)) {
            $object->setSourceImport($this->denormalizer->denormalize($data['source_import'], 'Github\\Model\\RateLimit', 'json', $context));
            unset($data['source_import']);
        }
        if (\array_key_exists('integration_manifest', $data)) {
            $object->setIntegrationManifest($this->denormalizer->denormalize($data['integration_manifest'], 'Github\\Model\\RateLimit', 'json', $context));
            unset($data['integration_manifest']);
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
        $data['core'] = $object->getCore() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getCore(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        if ($object->isInitialized('graphql') && null !== $object->getGraphql()) {
            $data['graphql'] = $object->getGraphql() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getGraphql(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['search'] = $object->getSearch() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getSearch(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        if ($object->isInitialized('sourceImport') && null !== $object->getSourceImport()) {
            $data['source_import'] = $object->getSourceImport() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getSourceImport(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('integrationManifest') && null !== $object->getIntegrationManifest()) {
            $data['integration_manifest'] = $object->getIntegrationManifest() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getIntegrationManifest(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RateLimitOverviewResourcesConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\RateLimitOverviewResources' => false);
    }
}