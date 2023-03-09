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
class ContributorActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\ContributorActivity';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ContributorActivity';
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
        $object = new \Github\Model\ContributorActivity();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ContributorActivityConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\ContributorActivityAuthor', 'json', $context));
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
            unset($data['total']);
        }
        if (\array_key_exists('weeks', $data)) {
            $values = array();
            foreach ($data['weeks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\ContributorActivityWeeksItem', 'json', $context);
            }
            $object->setWeeks($values);
            unset($data['weeks']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        $data['total'] = $object->getTotal();
        $values = array();
        foreach ($object->getWeeks() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['weeks'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ContributorActivityConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}