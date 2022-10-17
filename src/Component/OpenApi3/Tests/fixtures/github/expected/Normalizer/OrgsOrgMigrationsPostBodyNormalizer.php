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
class OrgsOrgMigrationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgMigrationsPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgMigrationsPostBody';
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
        $object = new \Github\Model\OrgsOrgMigrationsPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgMigrationsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('repositories', $data)) {
            $values = array();
            foreach ($data['repositories'] as $value) {
                $values[] = $value;
            }
            $object->setRepositories($values);
            unset($data['repositories']);
        }
        if (\array_key_exists('lock_repositories', $data)) {
            $object->setLockRepositories($data['lock_repositories']);
            unset($data['lock_repositories']);
        }
        if (\array_key_exists('exclude_attachments', $data)) {
            $object->setExcludeAttachments($data['exclude_attachments']);
            unset($data['exclude_attachments']);
        }
        if (\array_key_exists('exclude', $data)) {
            $values_1 = array();
            foreach ($data['exclude'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExclude($values_1);
            unset($data['exclude']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $values = array();
        foreach ($object->getRepositories() as $value) {
            $values[] = $value;
        }
        $data['repositories'] = $values;
        if (null !== $object->getLockRepositories()) {
            $data['lock_repositories'] = $object->getLockRepositories();
        }
        if (null !== $object->getExcludeAttachments()) {
            $data['exclude_attachments'] = $object->getExcludeAttachments();
        }
        if (null !== $object->getExclude()) {
            $values_1 = array();
            foreach ($object->getExclude() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['exclude'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgMigrationsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}