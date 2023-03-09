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
class ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions';
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
        $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('users', $data)) {
            $values = array();
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = array();
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTeams($values_1);
            unset($data['teams']);
        }
        if (\array_key_exists('apps', $data)) {
            $values_2 = array();
            foreach ($data['apps'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setApps($values_2);
            unset($data['apps']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        foreach ($object->getUsers() as $value) {
            $values[] = $value;
        }
        $data['users'] = $values;
        $values_1 = array();
        foreach ($object->getTeams() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['teams'] = $values_1;
        if ($object->isInitialized('apps') && null !== $object->getApps()) {
            $values_2 = array();
            foreach ($object->getApps() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['apps'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}