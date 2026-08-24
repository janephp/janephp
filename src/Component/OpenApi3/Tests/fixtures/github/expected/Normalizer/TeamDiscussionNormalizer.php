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
class TeamDiscussionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\TeamDiscussion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\TeamDiscussion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\TeamDiscussion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('pinned', $data) && \is_int($data['pinned'])) {
            $data['pinned'] = (bool) $data['pinned'];
        }
        if (\array_key_exists('private', $data) && \is_int($data['private'])) {
            $data['private'] = (bool) $data['private'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\TeamDiscussionConstraint());
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\TeamDiscussionAuthor::class, 'json', $context));
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
            unset($data['author']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('body_version', $data)) {
            $object->setBodyVersion($data['body_version']);
            unset($data['body_version']);
        }
        if (\array_key_exists('comments_count', $data)) {
            $object->setCommentsCount($data['comments_count']);
            unset($data['comments_count']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('last_edited_at', $data) && $data['last_edited_at'] !== null) {
            $object->setLastEditedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_edited_at']));
            unset($data['last_edited_at']);
        }
        elseif (\array_key_exists('last_edited_at', $data) && $data['last_edited_at'] === null) {
            $object->setLastEditedAt(null);
            unset($data['last_edited_at']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (\array_key_exists('pinned', $data)) {
            $object->setPinned($data['pinned']);
            unset($data['pinned']);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
            unset($data['private']);
        }
        if (\array_key_exists('team_url', $data)) {
            $object->setTeamUrl($data['team_url']);
            unset($data['team_url']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('reactions', $data)) {
            $object->setReactions($this->denormalizer->denormalize($data['reactions'], \Github\Model\ReactionRollup::class, 'json', $context));
            unset($data['reactions']);
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
        $dataArray['author'] = $data->getAuthor() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getAuthor(), 'json', $context));
        $dataArray['body'] = $data->getBody();
        $dataArray['body_html'] = $data->getBodyHtml();
        $dataArray['body_version'] = $data->getBodyVersion();
        $dataArray['comments_count'] = $data->getCommentsCount();
        $dataArray['comments_url'] = $data->getCommentsUrl();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['last_edited_at'] = $data->getLastEditedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['number'] = $data->getNumber();
        $dataArray['pinned'] = $data->getPinned();
        $dataArray['private'] = $data->getPrivate();
        $dataArray['team_url'] = $data->getTeamUrl();
        $dataArray['title'] = $data->getTitle();
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['url'] = $data->getUrl();
        if ($data->isInitialized('reactions') && null !== $data->getReactions()) {
            $dataArray['reactions'] = $data->getReactions() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getReactions(), 'json', $context));
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\TeamDiscussionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\TeamDiscussion::class => false];
    }
}