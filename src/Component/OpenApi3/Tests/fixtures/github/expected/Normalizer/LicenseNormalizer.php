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
class LicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\License';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\License';
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
        $object = new \Github\Model\License();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\LicenseConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
            unset($data['key']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('spdx_id', $data) && $data['spdx_id'] !== null) {
            $object->setSpdxId($data['spdx_id']);
            unset($data['spdx_id']);
        }
        elseif (\array_key_exists('spdx_id', $data) && $data['spdx_id'] === null) {
            $object->setSpdxId(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('implementation', $data)) {
            $object->setImplementation($data['implementation']);
            unset($data['implementation']);
        }
        if (\array_key_exists('permissions', $data)) {
            $values = array();
            foreach ($data['permissions'] as $value) {
                $values[] = $value;
            }
            $object->setPermissions($values);
            unset($data['permissions']);
        }
        if (\array_key_exists('conditions', $data)) {
            $values_1 = array();
            foreach ($data['conditions'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setConditions($values_1);
            unset($data['conditions']);
        }
        if (\array_key_exists('limitations', $data)) {
            $values_2 = array();
            foreach ($data['limitations'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLimitations($values_2);
            unset($data['limitations']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('featured', $data)) {
            $object->setFeatured($data['featured']);
            unset($data['featured']);
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
        $data['key'] = $object->getKey();
        $data['name'] = $object->getName();
        $data['spdx_id'] = $object->getSpdxId();
        $data['url'] = $object->getUrl();
        $data['node_id'] = $object->getNodeId();
        $data['html_url'] = $object->getHtmlUrl();
        $data['description'] = $object->getDescription();
        $data['implementation'] = $object->getImplementation();
        $values = array();
        foreach ($object->getPermissions() as $value) {
            $values[] = $value;
        }
        $data['permissions'] = $values;
        $values_1 = array();
        foreach ($object->getConditions() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['conditions'] = $values_1;
        $values_2 = array();
        foreach ($object->getLimitations() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['limitations'] = $values_2;
        $data['body'] = $object->getBody();
        $data['featured'] = $object->getFeatured();
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\LicenseConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}