<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Feed::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Feed::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\Feed();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\FeedConstraint());
        }
        if (\array_key_exists('timeline_url', $data)) {
            $object->setTimelineUrl($data['timeline_url']);
            unset($data['timeline_url']);
        }
        if (\array_key_exists('user_url', $data)) {
            $object->setUserUrl($data['user_url']);
            unset($data['user_url']);
        }
        if (\array_key_exists('current_user_public_url', $data)) {
            $object->setCurrentUserPublicUrl($data['current_user_public_url']);
            unset($data['current_user_public_url']);
        }
        if (\array_key_exists('current_user_url', $data)) {
            $object->setCurrentUserUrl($data['current_user_url']);
            unset($data['current_user_url']);
        }
        if (\array_key_exists('current_user_actor_url', $data)) {
            $object->setCurrentUserActorUrl($data['current_user_actor_url']);
            unset($data['current_user_actor_url']);
        }
        if (\array_key_exists('current_user_organization_url', $data)) {
            $object->setCurrentUserOrganizationUrl($data['current_user_organization_url']);
            unset($data['current_user_organization_url']);
        }
        if (\array_key_exists('current_user_organization_urls', $data)) {
            $values = [];
            foreach ($data['current_user_organization_urls'] as $value) {
                $values[] = $value;
            }
            $object->setCurrentUserOrganizationUrls($values);
            unset($data['current_user_organization_urls']);
        }
        if (\array_key_exists('security_advisories_url', $data)) {
            $object->setSecurityAdvisoriesUrl($data['security_advisories_url']);
            unset($data['security_advisories_url']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \Github\Model\FeedLinks::class, 'json', $context));
            unset($data['_links']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['timeline_url'] = $data->getTimelineUrl();
        $dataArray['user_url'] = $data->getUserUrl();
        if ($data->isInitialized('currentUserPublicUrl') && null !== $data->getCurrentUserPublicUrl()) {
            $dataArray['current_user_public_url'] = $data->getCurrentUserPublicUrl();
        }
        if ($data->isInitialized('currentUserUrl') && null !== $data->getCurrentUserUrl()) {
            $dataArray['current_user_url'] = $data->getCurrentUserUrl();
        }
        if ($data->isInitialized('currentUserActorUrl') && null !== $data->getCurrentUserActorUrl()) {
            $dataArray['current_user_actor_url'] = $data->getCurrentUserActorUrl();
        }
        if ($data->isInitialized('currentUserOrganizationUrl') && null !== $data->getCurrentUserOrganizationUrl()) {
            $dataArray['current_user_organization_url'] = $data->getCurrentUserOrganizationUrl();
        }
        if ($data->isInitialized('currentUserOrganizationUrls') && null !== $data->getCurrentUserOrganizationUrls()) {
            $values = [];
            foreach ($data->getCurrentUserOrganizationUrls() as $value) {
                $values[] = $value;
            }
            $dataArray['current_user_organization_urls'] = $values;
        }
        if ($data->isInitialized('securityAdvisoriesUrl') && null !== $data->getSecurityAdvisoriesUrl()) {
            $dataArray['security_advisories_url'] = $data->getSecurityAdvisoriesUrl();
        }
        $dataArray['_links'] = $this->normalizer->normalize($data->getLinks(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\FeedConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Feed::class => false];
    }
}