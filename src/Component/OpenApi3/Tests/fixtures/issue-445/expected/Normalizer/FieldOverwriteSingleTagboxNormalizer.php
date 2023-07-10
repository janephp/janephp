<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FieldOverwriteSingleTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\FieldOverwriteSingleTagbox';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldOverwriteSingleTagbox';
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
        $object = new \PicturePark\API\Model\FieldOverwriteSingleTagbox();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        if (\array_key_exists('overwriteRequired', $data)) {
            $object->setOverwriteRequired($data['overwriteRequired']);
            unset($data['overwriteRequired']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('overwriteFilter', $data)) {
            $object->setOverwriteFilter($data['overwriteFilter']);
            unset($data['overwriteFilter']);
        }
        if (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] !== null) {
            $object->setListItemCreateTemplate($data['listItemCreateTemplate']);
            unset($data['listItemCreateTemplate']);
        }
        elseif (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] === null) {
            $object->setListItemCreateTemplate(null);
        }
        if (\array_key_exists('overwriteListItemCreateTemplate', $data)) {
            $object->setOverwriteListItemCreateTemplate($data['overwriteListItemCreateTemplate']);
            unset($data['overwriteListItemCreateTemplate']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['required'] = $object->getRequired();
        $data['overwriteRequired'] = $object->getOverwriteRequired();
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('filter') && null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        if ($object->isInitialized('overwriteFilter') && null !== $object->getOverwriteFilter()) {
            $data['overwriteFilter'] = $object->getOverwriteFilter();
        }
        if ($object->isInitialized('listItemCreateTemplate') && null !== $object->getListItemCreateTemplate()) {
            $data['listItemCreateTemplate'] = $object->getListItemCreateTemplate();
        }
        if ($object->isInitialized('overwriteListItemCreateTemplate') && null !== $object->getOverwriteListItemCreateTemplate()) {
            $data['overwriteListItemCreateTemplate'] = $object->getOverwriteListItemCreateTemplate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\FieldOverwriteSingleTagbox' => false);
    }
}