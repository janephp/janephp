<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FeedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Feed';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Feed';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Feed();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('timeline_url', $data)) {
            $object->setTimelineUrl($data['timeline_url']);
        }
        if (\array_key_exists('user_url', $data)) {
            $object->setUserUrl($data['user_url']);
        }
        if (\array_key_exists('current_user_public_url', $data)) {
            $object->setCurrentUserPublicUrl($data['current_user_public_url']);
        }
        if (\array_key_exists('current_user_url', $data)) {
            $object->setCurrentUserUrl($data['current_user_url']);
        }
        if (\array_key_exists('current_user_actor_url', $data)) {
            $object->setCurrentUserActorUrl($data['current_user_actor_url']);
        }
        if (\array_key_exists('current_user_organization_url', $data)) {
            $object->setCurrentUserOrganizationUrl($data['current_user_organization_url']);
        }
        if (\array_key_exists('current_user_organization_urls', $data)) {
            $values = array();
            foreach ($data['current_user_organization_urls'] as $value) {
                $values[] = $value;
            }
            $object->setCurrentUserOrganizationUrls($values);
        }
        if (\array_key_exists('security_advisories_url', $data)) {
            $object->setSecurityAdvisoriesUrl($data['security_advisories_url']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\FeedLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['timeline_url'] = $object->getTimelineUrl();
        $data['user_url'] = $object->getUserUrl();
        if (null !== $object->getCurrentUserPublicUrl()) {
            $data['current_user_public_url'] = $object->getCurrentUserPublicUrl();
        }
        if (null !== $object->getCurrentUserUrl()) {
            $data['current_user_url'] = $object->getCurrentUserUrl();
        }
        if (null !== $object->getCurrentUserActorUrl()) {
            $data['current_user_actor_url'] = $object->getCurrentUserActorUrl();
        }
        if (null !== $object->getCurrentUserOrganizationUrl()) {
            $data['current_user_organization_url'] = $object->getCurrentUserOrganizationUrl();
        }
        if (null !== $object->getCurrentUserOrganizationUrls()) {
            $values = array();
            foreach ($object->getCurrentUserOrganizationUrls() as $value) {
                $values[] = $value;
            }
            $data['current_user_organization_urls'] = $values;
        }
        if (null !== $object->getSecurityAdvisoriesUrl()) {
            $data['security_advisories_url'] = $object->getSecurityAdvisoriesUrl();
        }
        $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        return $data;
    }
}