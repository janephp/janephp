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
class PullRequestReviewRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\PullRequestReviewRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestReviewRequest';
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
        $object = new \Github\Model\PullRequestReviewRequest();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\PullRequestReviewRequestConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('users', $data)) {
            $values = array();
            foreach ($data['users'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\PullRequestReviewRequestUsersItem', 'json', $context);
            }
            $object->setUsers($values);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = array();
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\PullRequestReviewRequestTeamsItem', 'json', $context);
            }
            $object->setTeams($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUsers()) {
            $values = array();
            foreach ($object->getUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['users'] = $values;
        }
        if (null !== $object->getTeams()) {
            $values_1 = array();
            foreach ($object->getTeams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['teams'] = $values_1;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\PullRequestReviewRequestConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}