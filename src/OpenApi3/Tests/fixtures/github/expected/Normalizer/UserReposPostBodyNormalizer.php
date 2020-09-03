<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserReposPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\UserReposPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\UserReposPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\UserReposPostBody();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('homepage', $data)) {
            $object->setHomepage($data['homepage']);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
        }
        if (\array_key_exists('auto_init', $data)) {
            $object->setAutoInit($data['auto_init']);
        }
        if (\array_key_exists('gitignore_template', $data)) {
            $object->setGitignoreTemplate($data['gitignore_template']);
        }
        if (\array_key_exists('license_template', $data)) {
            $object->setLicenseTemplate($data['license_template']);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
        }
        if (\array_key_exists('has_downloads', $data)) {
            $object->setHasDownloads($data['has_downloads']);
        }
        if (\array_key_exists('is_template', $data)) {
            $object->setIsTemplate($data['is_template']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getHomepage()) {
            $data['homepage'] = $object->getHomepage();
        }
        if (null !== $object->getPrivate()) {
            $data['private'] = $object->getPrivate();
        }
        if (null !== $object->getHasIssues()) {
            $data['has_issues'] = $object->getHasIssues();
        }
        if (null !== $object->getHasProjects()) {
            $data['has_projects'] = $object->getHasProjects();
        }
        if (null !== $object->getHasWiki()) {
            $data['has_wiki'] = $object->getHasWiki();
        }
        if (null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if (null !== $object->getAutoInit()) {
            $data['auto_init'] = $object->getAutoInit();
        }
        if (null !== $object->getGitignoreTemplate()) {
            $data['gitignore_template'] = $object->getGitignoreTemplate();
        }
        if (null !== $object->getLicenseTemplate()) {
            $data['license_template'] = $object->getLicenseTemplate();
        }
        if (null !== $object->getAllowSquashMerge()) {
            $data['allow_squash_merge'] = $object->getAllowSquashMerge();
        }
        if (null !== $object->getAllowMergeCommit()) {
            $data['allow_merge_commit'] = $object->getAllowMergeCommit();
        }
        if (null !== $object->getAllowRebaseMerge()) {
            $data['allow_rebase_merge'] = $object->getAllowRebaseMerge();
        }
        if (null !== $object->getDeleteBranchOnMerge()) {
            $data['delete_branch_on_merge'] = $object->getDeleteBranchOnMerge();
        }
        if (null !== $object->getHasDownloads()) {
            $data['has_downloads'] = $object->getHasDownloads();
        }
        if (null !== $object->getIsTemplate()) {
            $data['is_template'] = $object->getIsTemplate();
        }
        return $data;
    }
}