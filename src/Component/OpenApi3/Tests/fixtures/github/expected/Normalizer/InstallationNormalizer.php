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
class InstallationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Installation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Installation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\Installation();
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
            $this->validate($data, new \Github\Validator\InstallationConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('account', $data) && $data['account'] !== null) {
            $value = $data['account'];
            if (is_array($data['account']) and isset($data['account']['login']) and isset($data['account']['id']) and isset($data['account']['node_id']) and isset($data['account']['avatar_url']) and isset($data['account']['gravatar_id']) and isset($data['account']['url']) and isset($data['account']['html_url']) and isset($data['account']['followers_url']) and isset($data['account']['following_url']) and isset($data['account']['gists_url']) and isset($data['account']['starred_url']) and isset($data['account']['subscriptions_url']) and isset($data['account']['organizations_url']) and isset($data['account']['repos_url']) and isset($data['account']['events_url']) and isset($data['account']['received_events_url']) and isset($data['account']['type']) and isset($data['account']['site_admin'])) {
                $value = $this->denormalizer->denormalize($data['account'], \Github\Model\SimpleUser::class, 'json', $context);
            } elseif (is_array($data['account']) and isset($data['account']['html_url']) and isset($data['account']['id']) and isset($data['account']['node_id']) and isset($data['account']['name']) and isset($data['account']['slug']) and isset($data['account']['created_at']) and isset($data['account']['updated_at']) and isset($data['account']['avatar_url'])) {
                $value = $this->denormalizer->denormalize($data['account'], \Github\Model\Enterprise::class, 'json', $context);
            }
            $object->setAccount($value);
            unset($data['account']);
        }
        elseif (\array_key_exists('account', $data) && $data['account'] === null) {
            $object->setAccount(null);
        }
        if (\array_key_exists('repository_selection', $data)) {
            $object->setRepositorySelection($data['repository_selection']);
            unset($data['repository_selection']);
        }
        if (\array_key_exists('access_tokens_url', $data)) {
            $object->setAccessTokensUrl($data['access_tokens_url']);
            unset($data['access_tokens_url']);
        }
        if (\array_key_exists('repositories_url', $data)) {
            $object->setRepositoriesUrl($data['repositories_url']);
            unset($data['repositories_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('app_id', $data)) {
            $object->setAppId($data['app_id']);
            unset($data['app_id']);
        }
        if (\array_key_exists('target_id', $data)) {
            $object->setTargetId($data['target_id']);
            unset($data['target_id']);
        }
        if (\array_key_exists('target_type', $data)) {
            $object->setTargetType($data['target_type']);
            unset($data['target_type']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\InstallationPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('events', $data)) {
            $values = [];
            foreach ($data['events'] as $value_1) {
                $values[] = $value_1;
            }
            $object->setEvents($values);
            unset($data['events']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('single_file_name', $data) && $data['single_file_name'] !== null) {
            $object->setSingleFileName($data['single_file_name']);
            unset($data['single_file_name']);
        }
        elseif (\array_key_exists('single_file_name', $data) && $data['single_file_name'] === null) {
            $object->setSingleFileName(null);
        }
        if (\array_key_exists('app_slug', $data)) {
            $object->setAppSlug($data['app_slug']);
            unset($data['app_slug']);
        }
        if (\array_key_exists('suspended_by', $data) && $data['suspended_by'] !== null) {
            $object->setSuspendedBy($this->denormalizer->denormalize($data['suspended_by'], \Github\Model\InstallationSuspendedBy::class, 'json', $context));
            unset($data['suspended_by']);
        }
        elseif (\array_key_exists('suspended_by', $data) && $data['suspended_by'] === null) {
            $object->setSuspendedBy(null);
        }
        if (\array_key_exists('suspended_at', $data) && $data['suspended_at'] !== null) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['suspended_at']));
            unset($data['suspended_at']);
        }
        elseif (\array_key_exists('suspended_at', $data) && $data['suspended_at'] === null) {
            $object->setSuspendedAt(null);
        }
        if (\array_key_exists('contact_email', $data) && $data['contact_email'] !== null) {
            $object->setContactEmail($data['contact_email']);
            unset($data['contact_email']);
        }
        elseif (\array_key_exists('contact_email', $data) && $data['contact_email'] === null) {
            $object->setContactEmail(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $value = $data->getAccount();
        if (is_object($data->getAccount())) {
            $value = $this->normalizer->normalize($data->getAccount(), 'json', $context);
        } elseif (is_object($data->getAccount())) {
            $value = $this->normalizer->normalize($data->getAccount(), 'json', $context);
        }
        $dataArray['account'] = $value;
        $dataArray['repository_selection'] = $data->getRepositorySelection();
        $dataArray['access_tokens_url'] = $data->getAccessTokensUrl();
        $dataArray['repositories_url'] = $data->getRepositoriesUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['app_id'] = $data->getAppId();
        $dataArray['target_id'] = $data->getTargetId();
        $dataArray['target_type'] = $data->getTargetType();
        $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        $values = [];
        foreach ($data->getEvents() as $value_1) {
            $values[] = $value_1;
        }
        $dataArray['events'] = $values;
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['single_file_name'] = $data->getSingleFileName();
        $dataArray['app_slug'] = $data->getAppSlug();
        if ($data->isInitialized('suspendedBy')) {
            $dataArray['suspended_by'] = $this->normalizer->normalize($data->getSuspendedBy(), 'json', $context);
        }
        if ($data->isInitialized('suspendedAt')) {
            $dataArray['suspended_at'] = $data->getSuspendedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('contactEmail')) {
            $dataArray['contact_email'] = $data->getContactEmail();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\InstallationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Installation::class => false];
    }
}