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
class UserReposPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\UserReposPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\UserReposPostBody';
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
        $object = new \Github\Model\UserReposPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserReposPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('homepage', $data)) {
            $object->setHomepage($data['homepage']);
            unset($data['homepage']);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
            unset($data['private']);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
            unset($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
            unset($data['has_projects']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
            unset($data['has_wiki']);
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
            unset($data['team_id']);
        }
        if (\array_key_exists('auto_init', $data)) {
            $object->setAutoInit($data['auto_init']);
            unset($data['auto_init']);
        }
        if (\array_key_exists('gitignore_template', $data)) {
            $object->setGitignoreTemplate($data['gitignore_template']);
            unset($data['gitignore_template']);
        }
        if (\array_key_exists('license_template', $data)) {
            $object->setLicenseTemplate($data['license_template']);
            unset($data['license_template']);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
            unset($data['allow_squash_merge']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
            unset($data['allow_merge_commit']);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
            unset($data['allow_rebase_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
            unset($data['delete_branch_on_merge']);
        }
        if (\array_key_exists('has_downloads', $data)) {
            $object->setHasDownloads($data['has_downloads']);
            unset($data['has_downloads']);
        }
        if (\array_key_exists('is_template', $data)) {
            $object->setIsTemplate($data['is_template']);
            unset($data['is_template']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['name'] = $object->getName();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('homepage') && null !== $object->getHomepage()) {
            $data['homepage'] = $object->getHomepage();
        }
        if ($object->isInitialized('private') && null !== $object->getPrivate()) {
            $data['private'] = $object->getPrivate();
        }
        if ($object->isInitialized('hasIssues') && null !== $object->getHasIssues()) {
            $data['has_issues'] = $object->getHasIssues();
        }
        if ($object->isInitialized('hasProjects') && null !== $object->getHasProjects()) {
            $data['has_projects'] = $object->getHasProjects();
        }
        if ($object->isInitialized('hasWiki') && null !== $object->getHasWiki()) {
            $data['has_wiki'] = $object->getHasWiki();
        }
        if ($object->isInitialized('teamId') && null !== $object->getTeamId()) {
            $data['team_id'] = $object->getTeamId();
        }
        if ($object->isInitialized('autoInit') && null !== $object->getAutoInit()) {
            $data['auto_init'] = $object->getAutoInit();
        }
        if ($object->isInitialized('gitignoreTemplate') && null !== $object->getGitignoreTemplate()) {
            $data['gitignore_template'] = $object->getGitignoreTemplate();
        }
        if ($object->isInitialized('licenseTemplate') && null !== $object->getLicenseTemplate()) {
            $data['license_template'] = $object->getLicenseTemplate();
        }
        if ($object->isInitialized('allowSquashMerge') && null !== $object->getAllowSquashMerge()) {
            $data['allow_squash_merge'] = $object->getAllowSquashMerge();
        }
        if ($object->isInitialized('allowMergeCommit') && null !== $object->getAllowMergeCommit()) {
            $data['allow_merge_commit'] = $object->getAllowMergeCommit();
        }
        if ($object->isInitialized('allowRebaseMerge') && null !== $object->getAllowRebaseMerge()) {
            $data['allow_rebase_merge'] = $object->getAllowRebaseMerge();
        }
        if ($object->isInitialized('deleteBranchOnMerge') && null !== $object->getDeleteBranchOnMerge()) {
            $data['delete_branch_on_merge'] = $object->getDeleteBranchOnMerge();
        }
        if ($object->isInitialized('hasDownloads') && null !== $object->getHasDownloads()) {
            $data['has_downloads'] = $object->getHasDownloads();
        }
        if ($object->isInitialized('isTemplate') && null !== $object->getIsTemplate()) {
            $data['is_template'] = $object->getIsTemplate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserReposPostBodyConstraint());
        }
        return $data;
    }
}