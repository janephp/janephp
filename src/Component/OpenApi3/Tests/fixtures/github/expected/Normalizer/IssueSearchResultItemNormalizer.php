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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class IssueSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssueSearchResultItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssueSearchResultItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\IssueSearchResultItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSearchResultItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('repository_url', $data)) {
                $object->setRepositoryUrl($data['repository_url']);
                unset($data['repository_url']);
            }
            if (\array_key_exists('labels_url', $data)) {
                $object->setLabelsUrl($data['labels_url']);
                unset($data['labels_url']);
            }
            if (\array_key_exists('comments_url', $data)) {
                $object->setCommentsUrl($data['comments_url']);
                unset($data['comments_url']);
            }
            if (\array_key_exists('events_url', $data)) {
                $object->setEventsUrl($data['events_url']);
                unset($data['events_url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
                unset($data['number']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('locked', $data)) {
                $object->setLocked($data['locked']);
                unset($data['locked']);
            }
            if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
                $object->setActiveLockReason($data['active_lock_reason']);
                unset($data['active_lock_reason']);
            }
            elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
                $object->setActiveLockReason(null);
            }
            if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
                $values = [];
                foreach ($data['assignees'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SimpleUser', 'json', $context);
                }
                $object->setAssignees($values);
                unset($data['assignees']);
            }
            elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
                $object->setAssignees(null);
            }
            if (\array_key_exists('user', $data) && $data['user'] !== null) {
                $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\IssueSearchResultItemUser', 'json', $context));
                unset($data['user']);
            }
            elseif (\array_key_exists('user', $data) && $data['user'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('labels', $data)) {
                $values_1 = [];
                foreach ($data['labels'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\IssueSearchResultItemLabelsItem', 'json', $context);
                }
                $object->setLabels($values_1);
                unset($data['labels']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
                $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\IssueSearchResultItemAssignee', 'json', $context));
                unset($data['assignee']);
            }
            elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
                $object->setAssignee(null);
            }
            if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
                $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\IssueSearchResultItemMilestone', 'json', $context));
                unset($data['milestone']);
            }
            elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
                $object->setMilestone(null);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
                $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
                unset($data['closed_at']);
            }
            elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
                $object->setClosedAt(null);
            }
            if (\array_key_exists('text_matches', $data)) {
                $values_2 = [];
                foreach ($data['text_matches'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
                }
                $object->setTextMatches($values_2);
                unset($data['text_matches']);
            }
            if (\array_key_exists('pull_request', $data)) {
                $object->setPullRequest($this->denormalizer->denormalize($data['pull_request'], 'Github\\Model\\IssueSearchResultItemPullRequest', 'json', $context));
                unset($data['pull_request']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('score', $data)) {
                $object->setScore($data['score']);
                unset($data['score']);
            }
            if (\array_key_exists('author_association', $data)) {
                $object->setAuthorAssociation($data['author_association']);
                unset($data['author_association']);
            }
            if (\array_key_exists('draft', $data)) {
                $object->setDraft($data['draft']);
                unset($data['draft']);
            }
            if (\array_key_exists('repository', $data)) {
                $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\Repository', 'json', $context));
                unset($data['repository']);
            }
            if (\array_key_exists('body_html', $data)) {
                $object->setBodyHtml($data['body_html']);
                unset($data['body_html']);
            }
            if (\array_key_exists('body_text', $data)) {
                $object->setBodyText($data['body_text']);
                unset($data['body_text']);
            }
            if (\array_key_exists('timeline_url', $data)) {
                $object->setTimelineUrl($data['timeline_url']);
                unset($data['timeline_url']);
            }
            if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
                $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], 'Github\\Model\\IssueSearchResultItemPerformedViaGithubApp', 'json', $context));
                unset($data['performed_via_github_app']);
            }
            elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
                $object->setPerformedViaGithubApp(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['url'] = $object->getUrl();
            $data['repository_url'] = $object->getRepositoryUrl();
            $data['labels_url'] = $object->getLabelsUrl();
            $data['comments_url'] = $object->getCommentsUrl();
            $data['events_url'] = $object->getEventsUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['number'] = $object->getNumber();
            $data['title'] = $object->getTitle();
            $data['locked'] = $object->getLocked();
            if ($object->isInitialized('activeLockReason') && null !== $object->getActiveLockReason()) {
                $data['active_lock_reason'] = $object->getActiveLockReason();
            }
            if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
                $values = [];
                foreach ($object->getAssignees() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['assignees'] = $values;
            }
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            $values_1 = [];
            foreach ($object->getLabels() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['labels'] = $values_1;
            $data['state'] = $object->getState();
            $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
            $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
            $data['comments'] = $object->getComments();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('textMatches') && null !== $object->getTextMatches()) {
                $values_2 = [];
                foreach ($object->getTextMatches() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['text_matches'] = $values_2;
            }
            if ($object->isInitialized('pullRequest') && null !== $object->getPullRequest()) {
                $data['pull_request'] = $this->normalizer->normalize($object->getPullRequest(), 'json', $context);
            }
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            $data['score'] = $object->getScore();
            $data['author_association'] = $object->getAuthorAssociation();
            if ($object->isInitialized('draft') && null !== $object->getDraft()) {
                $data['draft'] = $object->getDraft();
            }
            if ($object->isInitialized('repository') && null !== $object->getRepository()) {
                $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
            }
            if ($object->isInitialized('bodyHtml') && null !== $object->getBodyHtml()) {
                $data['body_html'] = $object->getBodyHtml();
            }
            if ($object->isInitialized('bodyText') && null !== $object->getBodyText()) {
                $data['body_text'] = $object->getBodyText();
            }
            if ($object->isInitialized('timelineUrl') && null !== $object->getTimelineUrl()) {
                $data['timeline_url'] = $object->getTimelineUrl();
            }
            if ($object->isInitialized('performedViaGithubApp') && null !== $object->getPerformedViaGithubApp()) {
                $data['performed_via_github_app'] = $this->normalizer->normalize($object->getPerformedViaGithubApp(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSearchResultItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssueSearchResultItem' => false];
        }
    }
} else {
    class IssueSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssueSearchResultItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssueSearchResultItem';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\IssueSearchResultItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSearchResultItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('repository_url', $data)) {
                $object->setRepositoryUrl($data['repository_url']);
                unset($data['repository_url']);
            }
            if (\array_key_exists('labels_url', $data)) {
                $object->setLabelsUrl($data['labels_url']);
                unset($data['labels_url']);
            }
            if (\array_key_exists('comments_url', $data)) {
                $object->setCommentsUrl($data['comments_url']);
                unset($data['comments_url']);
            }
            if (\array_key_exists('events_url', $data)) {
                $object->setEventsUrl($data['events_url']);
                unset($data['events_url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
                unset($data['number']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('locked', $data)) {
                $object->setLocked($data['locked']);
                unset($data['locked']);
            }
            if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
                $object->setActiveLockReason($data['active_lock_reason']);
                unset($data['active_lock_reason']);
            }
            elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
                $object->setActiveLockReason(null);
            }
            if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
                $values = [];
                foreach ($data['assignees'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SimpleUser', 'json', $context);
                }
                $object->setAssignees($values);
                unset($data['assignees']);
            }
            elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
                $object->setAssignees(null);
            }
            if (\array_key_exists('user', $data) && $data['user'] !== null) {
                $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\IssueSearchResultItemUser', 'json', $context));
                unset($data['user']);
            }
            elseif (\array_key_exists('user', $data) && $data['user'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('labels', $data)) {
                $values_1 = [];
                foreach ($data['labels'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\IssueSearchResultItemLabelsItem', 'json', $context);
                }
                $object->setLabels($values_1);
                unset($data['labels']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
                $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\IssueSearchResultItemAssignee', 'json', $context));
                unset($data['assignee']);
            }
            elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
                $object->setAssignee(null);
            }
            if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
                $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\IssueSearchResultItemMilestone', 'json', $context));
                unset($data['milestone']);
            }
            elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
                $object->setMilestone(null);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
                $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
                unset($data['closed_at']);
            }
            elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
                $object->setClosedAt(null);
            }
            if (\array_key_exists('text_matches', $data)) {
                $values_2 = [];
                foreach ($data['text_matches'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
                }
                $object->setTextMatches($values_2);
                unset($data['text_matches']);
            }
            if (\array_key_exists('pull_request', $data)) {
                $object->setPullRequest($this->denormalizer->denormalize($data['pull_request'], 'Github\\Model\\IssueSearchResultItemPullRequest', 'json', $context));
                unset($data['pull_request']);
            }
            if (\array_key_exists('body', $data)) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            if (\array_key_exists('score', $data)) {
                $object->setScore($data['score']);
                unset($data['score']);
            }
            if (\array_key_exists('author_association', $data)) {
                $object->setAuthorAssociation($data['author_association']);
                unset($data['author_association']);
            }
            if (\array_key_exists('draft', $data)) {
                $object->setDraft($data['draft']);
                unset($data['draft']);
            }
            if (\array_key_exists('repository', $data)) {
                $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\Repository', 'json', $context));
                unset($data['repository']);
            }
            if (\array_key_exists('body_html', $data)) {
                $object->setBodyHtml($data['body_html']);
                unset($data['body_html']);
            }
            if (\array_key_exists('body_text', $data)) {
                $object->setBodyText($data['body_text']);
                unset($data['body_text']);
            }
            if (\array_key_exists('timeline_url', $data)) {
                $object->setTimelineUrl($data['timeline_url']);
                unset($data['timeline_url']);
            }
            if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
                $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], 'Github\\Model\\IssueSearchResultItemPerformedViaGithubApp', 'json', $context));
                unset($data['performed_via_github_app']);
            }
            elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
                $object->setPerformedViaGithubApp(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['url'] = $object->getUrl();
            $data['repository_url'] = $object->getRepositoryUrl();
            $data['labels_url'] = $object->getLabelsUrl();
            $data['comments_url'] = $object->getCommentsUrl();
            $data['events_url'] = $object->getEventsUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['number'] = $object->getNumber();
            $data['title'] = $object->getTitle();
            $data['locked'] = $object->getLocked();
            if ($object->isInitialized('activeLockReason') && null !== $object->getActiveLockReason()) {
                $data['active_lock_reason'] = $object->getActiveLockReason();
            }
            if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
                $values = [];
                foreach ($object->getAssignees() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['assignees'] = $values;
            }
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            $values_1 = [];
            foreach ($object->getLabels() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['labels'] = $values_1;
            $data['state'] = $object->getState();
            $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
            $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
            $data['comments'] = $object->getComments();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('textMatches') && null !== $object->getTextMatches()) {
                $values_2 = [];
                foreach ($object->getTextMatches() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['text_matches'] = $values_2;
            }
            if ($object->isInitialized('pullRequest') && null !== $object->getPullRequest()) {
                $data['pull_request'] = $this->normalizer->normalize($object->getPullRequest(), 'json', $context);
            }
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            $data['score'] = $object->getScore();
            $data['author_association'] = $object->getAuthorAssociation();
            if ($object->isInitialized('draft') && null !== $object->getDraft()) {
                $data['draft'] = $object->getDraft();
            }
            if ($object->isInitialized('repository') && null !== $object->getRepository()) {
                $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
            }
            if ($object->isInitialized('bodyHtml') && null !== $object->getBodyHtml()) {
                $data['body_html'] = $object->getBodyHtml();
            }
            if ($object->isInitialized('bodyText') && null !== $object->getBodyText()) {
                $data['body_text'] = $object->getBodyText();
            }
            if ($object->isInitialized('timelineUrl') && null !== $object->getTimelineUrl()) {
                $data['timeline_url'] = $object->getTimelineUrl();
            }
            if ($object->isInitialized('performedViaGithubApp') && null !== $object->getPerformedViaGithubApp()) {
                $data['performed_via_github_app'] = $this->normalizer->normalize($object->getPerformedViaGithubApp(), 'json', $context);
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSearchResultItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssueSearchResultItem' => false];
        }
    }
}