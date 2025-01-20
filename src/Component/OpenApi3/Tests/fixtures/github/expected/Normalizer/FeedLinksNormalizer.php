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
class FeedLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\FeedLinks::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\FeedLinks::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setTimeline($this->denormalizer->denormalize($data['timeline'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['timeline']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['user']);
        }
        if (\array_key_exists('security_advisories', $data)) {
            $object->setSecurityAdvisories($this->denormalizer->denormalize($data['security_advisories'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['security_advisories']);
        }
        if (\array_key_exists('current_user', $data)) {
            $object->setCurrentUser($this->denormalizer->denormalize($data['current_user'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['current_user']);
        }
        if (\array_key_exists('current_user_public', $data)) {
            $object->setCurrentUserPublic($this->denormalizer->denormalize($data['current_user_public'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['current_user_public']);
        }
        if (\array_key_exists('current_user_actor', $data)) {
            $object->setCurrentUserActor($this->denormalizer->denormalize($data['current_user_actor'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['current_user_actor']);
        }
        if (\array_key_exists('current_user_organization', $data)) {
            $object->setCurrentUserOrganization($this->denormalizer->denormalize($data['current_user_organization'], \Github\Model\LinkWithType::class, 'json', $context));
            unset($data['current_user_organization']);
        }
        if (\array_key_exists('current_user_organizations', $data)) {
            $values = [];
            foreach ($data['current_user_organizations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\LinkWithType::class, 'json', $context);
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['timeline'] = $this->normalizer->normalize($data->getTimeline(), 'json', $context);
        $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        if ($data->isInitialized('securityAdvisories') && null !== $data->getSecurityAdvisories()) {
            $dataArray['security_advisories'] = $this->normalizer->normalize($data->getSecurityAdvisories(), 'json', $context);
        }
        if ($data->isInitialized('currentUser') && null !== $data->getCurrentUser()) {
            $dataArray['current_user'] = $this->normalizer->normalize($data->getCurrentUser(), 'json', $context);
        }
        if ($data->isInitialized('currentUserPublic') && null !== $data->getCurrentUserPublic()) {
            $dataArray['current_user_public'] = $this->normalizer->normalize($data->getCurrentUserPublic(), 'json', $context);
        }
        if ($data->isInitialized('currentUserActor') && null !== $data->getCurrentUserActor()) {
            $dataArray['current_user_actor'] = $this->normalizer->normalize($data->getCurrentUserActor(), 'json', $context);
        }
        if ($data->isInitialized('currentUserOrganization') && null !== $data->getCurrentUserOrganization()) {
            $dataArray['current_user_organization'] = $this->normalizer->normalize($data->getCurrentUserOrganization(), 'json', $context);
        }
        if ($data->isInitialized('currentUserOrganizations') && null !== $data->getCurrentUserOrganizations()) {
            $values = [];
            foreach ($data->getCurrentUserOrganizations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['current_user_organizations'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\FeedLinksConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\FeedLinks::class => false];
    }
}