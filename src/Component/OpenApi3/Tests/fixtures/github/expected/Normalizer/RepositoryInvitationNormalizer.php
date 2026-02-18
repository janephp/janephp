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
class RepositoryInvitationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\RepositoryInvitation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\RepositoryInvitation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\RepositoryInvitation();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RepositoryInvitationConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], \Github\Model\MinimalRepository::class, 'json', $context));
            unset($data['repository']);
        }
        if (\array_key_exists('invitee', $data) && $data['invitee'] !== null) {
            $object->setInvitee($this->denormalizer->denormalize($data['invitee'], \Github\Model\RepositoryInvitationInvitee::class, 'json', $context));
            unset($data['invitee']);
        }
        elseif (\array_key_exists('invitee', $data) && $data['invitee'] === null) {
            $object->setInvitee(null);
        }
        if (\array_key_exists('inviter', $data) && $data['inviter'] !== null) {
            $object->setInviter($this->denormalizer->denormalize($data['inviter'], \Github\Model\RepositoryInvitationInviter::class, 'json', $context));
            unset($data['inviter']);
        }
        elseif (\array_key_exists('inviter', $data) && $data['inviter'] === null) {
            $object->setInviter(null);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($data['permissions']);
            unset($data['permissions']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['repository'] = $this->normalizer->normalize($data->getRepository(), 'json', $context);
        $dataArray['invitee'] = $this->normalizer->normalize($data->getInvitee(), 'json', $context);
        $dataArray['inviter'] = $this->normalizer->normalize($data->getInviter(), 'json', $context);
        $dataArray['permissions'] = $data->getPermissions();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['node_id'] = $data->getNodeId();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\RepositoryInvitationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\RepositoryInvitation::class => false];
    }
}