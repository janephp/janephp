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
class CheckSuiteAppNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CheckSuiteApp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CheckSuiteApp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CheckSuiteApp();
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
            $this->validate($data, new \Github\Validator\CheckSuiteAppConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], \Github\Model\IntegrationOwner::class, 'json', $context));
            unset($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
            unset($data['owner']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('external_url', $data)) {
            $object->setExternalUrl($data['external_url']);
            unset($data['external_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_1);
            unset($data['updated_at']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\IntegrationPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('events', $data)) {
            $values = [];
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
            unset($data['events']);
        }
        if (\array_key_exists('installations_count', $data)) {
            $object->setInstallationsCount($data['installations_count']);
            unset($data['installations_count']);
        }
        if (\array_key_exists('client_id', $data)) {
            $object->setClientId($data['client_id']);
            unset($data['client_id']);
        }
        if (\array_key_exists('client_secret', $data)) {
            $object->setClientSecret($data['client_secret']);
            unset($data['client_secret']);
        }
        if (\array_key_exists('webhook_secret', $data)) {
            $object->setWebhookSecret($data['webhook_secret']);
            unset($data['webhook_secret']);
        }
        if (\array_key_exists('pem', $data)) {
            $object->setPem($data['pem']);
            unset($data['pem']);
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
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('slug') && null !== $data->getSlug()) {
            $dataArray['slug'] = $data->getSlug();
        }
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['owner'] = $data->getOwner() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getOwner(), 'json', $context));
        $dataArray['name'] = $data->getName();
        $dataArray['description'] = $data->getDescription();
        $dataArray['external_url'] = $data->getExternalUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['permissions'] = $data->getPermissions() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPermissions(), 'json', $context));
        $values = [];
        foreach ($data->getEvents() as $value) {
            $values[] = $value;
        }
        $dataArray['events'] = $values;
        if ($data->isInitialized('installationsCount') && null !== $data->getInstallationsCount()) {
            $dataArray['installations_count'] = $data->getInstallationsCount();
        }
        if ($data->isInitialized('clientId') && null !== $data->getClientId()) {
            $dataArray['client_id'] = $data->getClientId();
        }
        if ($data->isInitialized('clientSecret') && null !== $data->getClientSecret()) {
            $dataArray['client_secret'] = $data->getClientSecret();
        }
        if ($data->isInitialized('webhookSecret') && null !== $data->getWebhookSecret()) {
            $dataArray['webhook_secret'] = $data->getWebhookSecret();
        }
        if ($data->isInitialized('pem') && null !== $data->getPem()) {
            $dataArray['pem'] = $data->getPem();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CheckSuiteAppConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CheckSuiteApp::class => false];
    }
}