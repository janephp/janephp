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
class FeedLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\FeedLinks';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\FeedLinks';
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
        $object = new \Github\Model\FeedLinks();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\FeedLinksConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('timeline', $data)) {
            $object->setTimeline($this->denormalizer->denormalize($data['timeline'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['timeline']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['user']);
        }
        if (\array_key_exists('security_advisories', $data)) {
            $object->setSecurityAdvisories($this->denormalizer->denormalize($data['security_advisories'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['security_advisories']);
        }
        if (\array_key_exists('current_user', $data)) {
            $object->setCurrentUser($this->denormalizer->denormalize($data['current_user'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['current_user']);
        }
        if (\array_key_exists('current_user_public', $data)) {
            $object->setCurrentUserPublic($this->denormalizer->denormalize($data['current_user_public'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['current_user_public']);
        }
        if (\array_key_exists('current_user_actor', $data)) {
            $object->setCurrentUserActor($this->denormalizer->denormalize($data['current_user_actor'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['current_user_actor']);
        }
        if (\array_key_exists('current_user_organization', $data)) {
            $object->setCurrentUserOrganization($this->denormalizer->denormalize($data['current_user_organization'], 'Github\\Model\\LinkWithType', 'json', $context));
            unset($data['current_user_organization']);
        }
        if (\array_key_exists('current_user_organizations', $data)) {
            $values = array();
            foreach ($data['current_user_organizations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\LinkWithType', 'json', $context);
            }
            $object->setCurrentUserOrganizations($values);
            unset($data['current_user_organizations']);
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
        $data['timeline'] = $this->normalizer->normalize($object->getTimeline(), 'json', $context);
        $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        if ($object->isInitialized('securityAdvisories') && null !== $object->getSecurityAdvisories()) {
            $data['security_advisories'] = $this->normalizer->normalize($object->getSecurityAdvisories(), 'json', $context);
        }
        if ($object->isInitialized('currentUser') && null !== $object->getCurrentUser()) {
            $data['current_user'] = $this->normalizer->normalize($object->getCurrentUser(), 'json', $context);
        }
        if ($object->isInitialized('currentUserPublic') && null !== $object->getCurrentUserPublic()) {
            $data['current_user_public'] = $this->normalizer->normalize($object->getCurrentUserPublic(), 'json', $context);
        }
        if ($object->isInitialized('currentUserActor') && null !== $object->getCurrentUserActor()) {
            $data['current_user_actor'] = $this->normalizer->normalize($object->getCurrentUserActor(), 'json', $context);
        }
        if ($object->isInitialized('currentUserOrganization') && null !== $object->getCurrentUserOrganization()) {
            $data['current_user_organization'] = $this->normalizer->normalize($object->getCurrentUserOrganization(), 'json', $context);
        }
        if ($object->isInitialized('currentUserOrganizations') && null !== $object->getCurrentUserOrganizations()) {
            $values = array();
            foreach ($object->getCurrentUserOrganizations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['current_user_organizations'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\FeedLinksConstraint());
        }
        return $data;
    }
}
