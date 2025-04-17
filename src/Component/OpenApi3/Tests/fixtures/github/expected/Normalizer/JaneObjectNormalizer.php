<?php

namespace Github\Normalizer;

use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Github\Model\SimpleUser::class => \Github\Normalizer\SimpleUserNormalizer::class,
        
        \Github\Model\MinimalRepository::class => \Github\Normalizer\MinimalRepositoryNormalizer::class,
        
        \Github\Model\MinimalRepositoryOwner::class => \Github\Normalizer\MinimalRepositoryOwnerNormalizer::class,
        
        \Github\Model\MinimalRepositoryPermissions::class => \Github\Normalizer\MinimalRepositoryPermissionsNormalizer::class,
        
        \Github\Model\MinimalRepositoryLicense::class => \Github\Normalizer\MinimalRepositoryLicenseNormalizer::class,
        
        \Github\Model\LicenseSimple::class => \Github\Normalizer\LicenseSimpleNormalizer::class,
        
        \Github\Model\Repository::class => \Github\Normalizer\RepositoryNormalizer::class,
        
        \Github\Model\RepositoryLicense::class => \Github\Normalizer\RepositoryLicenseNormalizer::class,
        
        \Github\Model\RepositoryPermissions::class => \Github\Normalizer\RepositoryPermissionsNormalizer::class,
        
        \Github\Model\RepositoryOwner::class => \Github\Normalizer\RepositoryOwnerNormalizer::class,
        
        \Github\Model\RepositoryTemplateRepository::class => \Github\Normalizer\RepositoryTemplateRepositoryNormalizer::class,
        
        \Github\Model\RepositoryTemplateRepositoryOwner::class => \Github\Normalizer\RepositoryTemplateRepositoryOwnerNormalizer::class,
        
        \Github\Model\RepositoryTemplateRepositoryPermissions::class => \Github\Normalizer\RepositoryTemplateRepositoryPermissionsNormalizer::class,
        
        \Github\Model\BasicError::class => \Github\Normalizer\BasicErrorNormalizer::class,
        
        \Github\Model\ValidationError::class => \Github\Normalizer\ValidationErrorNormalizer::class,
        
        \Github\Model\ValidationErrorErrorsItem::class => \Github\Normalizer\ValidationErrorErrorsItemNormalizer::class,
        
        \Github\Model\TeamSimple::class => \Github\Normalizer\TeamSimpleNormalizer::class,
        
        \Github\Model\Team::class => \Github\Normalizer\TeamNormalizer::class,
        
        \Github\Model\TeamParent::class => \Github\Normalizer\TeamParentNormalizer::class,
        
        \Github\Model\BranchShort::class => \Github\Normalizer\BranchShortNormalizer::class,
        
        \Github\Model\BranchShortCommit::class => \Github\Normalizer\BranchShortCommitNormalizer::class,
        
        \Github\Model\ContentTraffic::class => \Github\Normalizer\ContentTrafficNormalizer::class,
        
        \Github\Model\ValidationErrorSimple::class => \Github\Normalizer\ValidationErrorSimpleNormalizer::class,
        
        \Github\Model\Integration::class => \Github\Normalizer\IntegrationNormalizer::class,
        
        \Github\Model\IntegrationOwner::class => \Github\Normalizer\IntegrationOwnerNormalizer::class,
        
        \Github\Model\IntegrationPermissions::class => \Github\Normalizer\IntegrationPermissionsNormalizer::class,
        
        \Github\Model\Deployment::class => \Github\Normalizer\DeploymentNormalizer::class,
        
        \Github\Model\DeploymentPayload::class => \Github\Normalizer\DeploymentPayloadNormalizer::class,
        
        \Github\Model\DeploymentCreator::class => \Github\Normalizer\DeploymentCreatorNormalizer::class,
        
        \Github\Model\DeploymentPerformedViaGithubApp::class => \Github\Normalizer\DeploymentPerformedViaGithubAppNormalizer::class,
        
        \Github\Model\ReleaseAsset::class => \Github\Normalizer\ReleaseAssetNormalizer::class,
        
        \Github\Model\ReleaseAssetUploader::class => \Github\Normalizer\ReleaseAssetUploaderNormalizer::class,
        
        \Github\Model\ContentTree::class => \Github\Normalizer\ContentTreeNormalizer::class,
        
        \Github\Model\ContentTreeEntriesItem::class => \Github\Normalizer\ContentTreeEntriesItemNormalizer::class,
        
        \Github\Model\ContentTreeEntriesItemLinks::class => \Github\Normalizer\ContentTreeEntriesItemLinksNormalizer::class,
        
        \Github\Model\ContentTreeLinks::class => \Github\Normalizer\ContentTreeLinksNormalizer::class,
        
        \Github\Model\ContentDirectoryItem::class => \Github\Normalizer\ContentDirectoryItemNormalizer::class,
        
        \Github\Model\ContentDirectoryItemLinks::class => \Github\Normalizer\ContentDirectoryItemLinksNormalizer::class,
        
        \Github\Model\ContentFile::class => \Github\Normalizer\ContentFileNormalizer::class,
        
        \Github\Model\ContentFileLinks::class => \Github\Normalizer\ContentFileLinksNormalizer::class,
        
        \Github\Model\ContentSymlink::class => \Github\Normalizer\ContentSymlinkNormalizer::class,
        
        \Github\Model\ContentSymlinkLinks::class => \Github\Normalizer\ContentSymlinkLinksNormalizer::class,
        
        \Github\Model\ContentSubmodule::class => \Github\Normalizer\ContentSubmoduleNormalizer::class,
        
        \Github\Model\ContentSubmoduleLinks::class => \Github\Normalizer\ContentSubmoduleLinksNormalizer::class,
        
        \Github\Model\FileCommit::class => \Github\Normalizer\FileCommitNormalizer::class,
        
        \Github\Model\FileCommitContent::class => \Github\Normalizer\FileCommitContentNormalizer::class,
        
        \Github\Model\FileCommitContentLinks::class => \Github\Normalizer\FileCommitContentLinksNormalizer::class,
        
        \Github\Model\FileCommitCommit::class => \Github\Normalizer\FileCommitCommitNormalizer::class,
        
        \Github\Model\FileCommitCommitAuthor::class => \Github\Normalizer\FileCommitCommitAuthorNormalizer::class,
        
        \Github\Model\FileCommitCommitCommitter::class => \Github\Normalizer\FileCommitCommitCommitterNormalizer::class,
        
        \Github\Model\FileCommitCommitTree::class => \Github\Normalizer\FileCommitCommitTreeNormalizer::class,
        
        \Github\Model\FileCommitCommitParentsItem::class => \Github\Normalizer\FileCommitCommitParentsItemNormalizer::class,
        
        \Github\Model\FileCommitCommitVerification::class => \Github\Normalizer\FileCommitCommitVerificationNormalizer::class,
        
        \Github\Model\Topic::class => \Github\Normalizer\TopicNormalizer::class,
        
        \Github\Model\CodeOfConductSimple::class => \Github\Normalizer\CodeOfConductSimpleNormalizer::class,
        
        \Github\Model\CommunityHealthFile::class => \Github\Normalizer\CommunityHealthFileNormalizer::class,
        
        \Github\Model\CommunityProfile::class => \Github\Normalizer\CommunityProfileNormalizer::class,
        
        \Github\Model\CommunityProfileFiles::class => \Github\Normalizer\CommunityProfileFilesNormalizer::class,
        
        \Github\Model\CommunityProfileFilesCodeOfConduct::class => \Github\Normalizer\CommunityProfileFilesCodeOfConductNormalizer::class,
        
        \Github\Model\CommunityProfileFilesLicense::class => \Github\Normalizer\CommunityProfileFilesLicenseNormalizer::class,
        
        \Github\Model\CommunityProfileFilesContributing::class => \Github\Normalizer\CommunityProfileFilesContributingNormalizer::class,
        
        \Github\Model\CommunityProfileFilesReadme::class => \Github\Normalizer\CommunityProfileFilesReadmeNormalizer::class,
        
        \Github\Model\CommunityProfileFilesIssueTemplate::class => \Github\Normalizer\CommunityProfileFilesIssueTemplateNormalizer::class,
        
        \Github\Model\CommunityProfileFilesPullRequestTemplate::class => \Github\Normalizer\CommunityProfileFilesPullRequestTemplateNormalizer::class,
        
        \Github\Model\PagesSourceHash::class => \Github\Normalizer\PagesSourceHashNormalizer::class,
        
        \Github\Model\Page::class => \Github\Normalizer\PageNormalizer::class,
        
        \Github\Model\ScimError::class => \Github\Normalizer\ScimErrorNormalizer::class,
        
        \Github\Model\ProtectedBranchPullRequestReview::class => \Github\Normalizer\ProtectedBranchPullRequestReviewNormalizer::class,
        
        \Github\Model\ProtectedBranchPullRequestReviewDismissalRestrictions::class => \Github\Normalizer\ProtectedBranchPullRequestReviewDismissalRestrictionsNormalizer::class,
        
        \Github\Model\ReferrerTraffic::class => \Github\Normalizer\ReferrerTrafficNormalizer::class,
        
        \Github\Model\Status::class => \Github\Normalizer\StatusNormalizer::class,
        
        \Github\Model\GitUser::class => \Github\Normalizer\GitUserNormalizer::class,
        
        \Github\Model\Verification::class => \Github\Normalizer\VerificationNormalizer::class,
        
        \Github\Model\Commit::class => \Github\Normalizer\CommitNormalizer::class,
        
        \Github\Model\CommitCommit::class => \Github\Normalizer\CommitCommitNormalizer::class,
        
        \Github\Model\CommitCommitAuthor::class => \Github\Normalizer\CommitCommitAuthorNormalizer::class,
        
        \Github\Model\CommitCommitCommitter::class => \Github\Normalizer\CommitCommitCommitterNormalizer::class,
        
        \Github\Model\CommitCommitTree::class => \Github\Normalizer\CommitCommitTreeNormalizer::class,
        
        \Github\Model\CommitAuthor::class => \Github\Normalizer\CommitAuthorNormalizer::class,
        
        \Github\Model\CommitCommitter::class => \Github\Normalizer\CommitCommitterNormalizer::class,
        
        \Github\Model\CommitParentsItem::class => \Github\Normalizer\CommitParentsItemNormalizer::class,
        
        \Github\Model\CommitStats::class => \Github\Normalizer\CommitStatsNormalizer::class,
        
        \Github\Model\CommitFilesItem::class => \Github\Normalizer\CommitFilesItemNormalizer::class,
        
        \Github\Model\DiffEntry::class => \Github\Normalizer\DiffEntryNormalizer::class,
        
        \Github\Model\CommitComparison::class => \Github\Normalizer\CommitComparisonNormalizer::class,
        
        \Github\Model\Milestone::class => \Github\Normalizer\MilestoneNormalizer::class,
        
        \Github\Model\MilestoneCreator::class => \Github\Normalizer\MilestoneCreatorNormalizer::class,
        
        \Github\Model\Link::class => \Github\Normalizer\LinkNormalizer::class,
        
        \Github\Model\PullRequestSimple::class => \Github\Normalizer\PullRequestSimpleNormalizer::class,
        
        \Github\Model\PullRequestSimpleUser::class => \Github\Normalizer\PullRequestSimpleUserNormalizer::class,
        
        \Github\Model\PullRequestSimpleLabelsItem::class => \Github\Normalizer\PullRequestSimpleLabelsItemNormalizer::class,
        
        \Github\Model\PullRequestSimpleMilestone::class => \Github\Normalizer\PullRequestSimpleMilestoneNormalizer::class,
        
        \Github\Model\PullRequestSimpleAssignee::class => \Github\Normalizer\PullRequestSimpleAssigneeNormalizer::class,
        
        \Github\Model\PullRequestSimpleHead::class => \Github\Normalizer\PullRequestSimpleHeadNormalizer::class,
        
        \Github\Model\PullRequestSimpleHeadUser::class => \Github\Normalizer\PullRequestSimpleHeadUserNormalizer::class,
        
        \Github\Model\PullRequestSimpleBase::class => \Github\Normalizer\PullRequestSimpleBaseNormalizer::class,
        
        \Github\Model\PullRequestSimpleBaseUser::class => \Github\Normalizer\PullRequestSimpleBaseUserNormalizer::class,
        
        \Github\Model\PullRequestSimpleLinks::class => \Github\Normalizer\PullRequestSimpleLinksNormalizer::class,
        
        \Github\Model\ProtectedBranchAdminEnforced::class => \Github\Normalizer\ProtectedBranchAdminEnforcedNormalizer::class,
        
        \Github\Model\DeploymentStatus::class => \Github\Normalizer\DeploymentStatusNormalizer::class,
        
        \Github\Model\DeploymentStatusCreator::class => \Github\Normalizer\DeploymentStatusCreatorNormalizer::class,
        
        \Github\Model\DeploymentStatusPerformedViaGithubApp::class => \Github\Normalizer\DeploymentStatusPerformedViaGithubAppNormalizer::class,
        
        \Github\Model\BranchRestrictionPolicy::class => \Github\Normalizer\BranchRestrictionPolicyNormalizer::class,
        
        \Github\Model\BranchRestrictionPolicyUsersItem::class => \Github\Normalizer\BranchRestrictionPolicyUsersItemNormalizer::class,
        
        \Github\Model\BranchRestrictionPolicyTeamsItem::class => \Github\Normalizer\BranchRestrictionPolicyTeamsItemNormalizer::class,
        
        \Github\Model\BranchRestrictionPolicyAppsItem::class => \Github\Normalizer\BranchRestrictionPolicyAppsItemNormalizer::class,
        
        \Github\Model\BranchRestrictionPolicyAppsItemOwner::class => \Github\Normalizer\BranchRestrictionPolicyAppsItemOwnerNormalizer::class,
        
        \Github\Model\BranchRestrictionPolicyAppsItemPermissions::class => \Github\Normalizer\BranchRestrictionPolicyAppsItemPermissionsNormalizer::class,
        
        \Github\Model\BranchProtection::class => \Github\Normalizer\BranchProtectionNormalizer::class,
        
        \Github\Model\BranchProtectionRequiredStatusChecks::class => \Github\Normalizer\BranchProtectionRequiredStatusChecksNormalizer::class,
        
        \Github\Model\BranchProtectionRequiredLinearHistory::class => \Github\Normalizer\BranchProtectionRequiredLinearHistoryNormalizer::class,
        
        \Github\Model\BranchProtectionAllowForcePushes::class => \Github\Normalizer\BranchProtectionAllowForcePushesNormalizer::class,
        
        \Github\Model\BranchProtectionAllowDeletions::class => \Github\Normalizer\BranchProtectionAllowDeletionsNormalizer::class,
        
        \Github\Model\ShortBranch::class => \Github\Normalizer\ShortBranchNormalizer::class,
        
        \Github\Model\ShortBranchCommit::class => \Github\Normalizer\ShortBranchCommitNormalizer::class,
        
        \Github\Model\RepositoryInvitation::class => \Github\Normalizer\RepositoryInvitationNormalizer::class,
        
        \Github\Model\RepositoryInvitationInvitee::class => \Github\Normalizer\RepositoryInvitationInviteeNormalizer::class,
        
        \Github\Model\RepositoryInvitationInviter::class => \Github\Normalizer\RepositoryInvitationInviterNormalizer::class,
        
        \Github\Model\BranchWithProtection::class => \Github\Normalizer\BranchWithProtectionNormalizer::class,
        
        \Github\Model\BranchWithProtectionLinks::class => \Github\Normalizer\BranchWithProtectionLinksNormalizer::class,
        
        \Github\Model\DeployKey::class => \Github\Normalizer\DeployKeyNormalizer::class,
        
        \Github\Model\PageBuild::class => \Github\Normalizer\PageBuildNormalizer::class,
        
        \Github\Model\PageBuildError::class => \Github\Normalizer\PageBuildErrorNormalizer::class,
        
        \Github\Model\PageBuildPusher::class => \Github\Normalizer\PageBuildPusherNormalizer::class,
        
        \Github\Model\Traffic::class => \Github\Normalizer\TrafficNormalizer::class,
        
        \Github\Model\CloneTraffic::class => \Github\Normalizer\CloneTrafficNormalizer::class,
        
        \Github\Model\HookResponse::class => \Github\Normalizer\HookResponseNormalizer::class,
        
        \Github\Model\Hook::class => \Github\Normalizer\HookNormalizer::class,
        
        \Github\Model\HookConfig::class => \Github\Normalizer\HookConfigNormalizer::class,
        
        \Github\Model\Release::class => \Github\Normalizer\ReleaseNormalizer::class,
        
        \Github\Model\StatusCheckPolicy::class => \Github\Normalizer\StatusCheckPolicyNormalizer::class,
        
        \Github\Model\FullRepository::class => \Github\Normalizer\FullRepositoryNormalizer::class,
        
        \Github\Model\FullRepositoryOwner::class => \Github\Normalizer\FullRepositoryOwnerNormalizer::class,
        
        \Github\Model\FullRepositoryPermissions::class => \Github\Normalizer\FullRepositoryPermissionsNormalizer::class,
        
        \Github\Model\FullRepositoryTemplateRepository::class => \Github\Normalizer\FullRepositoryTemplateRepositoryNormalizer::class,
        
        \Github\Model\FullRepositoryLicense::class => \Github\Normalizer\FullRepositoryLicenseNormalizer::class,
        
        \Github\Model\FullRepositoryOrganization::class => \Github\Normalizer\FullRepositoryOrganizationNormalizer::class,
        
        \Github\Model\ProtectedBranch::class => \Github\Normalizer\ProtectedBranchNormalizer::class,
        
        \Github\Model\ProtectedBranchRequiredPullRequestReviews::class => \Github\Normalizer\ProtectedBranchRequiredPullRequestReviewsNormalizer::class,
        
        \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class => \Github\Normalizer\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsNormalizer::class,
        
        \Github\Model\ProtectedBranchRequiredSignatures::class => \Github\Normalizer\ProtectedBranchRequiredSignaturesNormalizer::class,
        
        \Github\Model\ProtectedBranchEnforceAdmins::class => \Github\Normalizer\ProtectedBranchEnforceAdminsNormalizer::class,
        
        \Github\Model\ProtectedBranchRequiredLinearHistory::class => \Github\Normalizer\ProtectedBranchRequiredLinearHistoryNormalizer::class,
        
        \Github\Model\ProtectedBranchAllowForcePushes::class => \Github\Normalizer\ProtectedBranchAllowForcePushesNormalizer::class,
        
        \Github\Model\ProtectedBranchAllowDeletions::class => \Github\Normalizer\ProtectedBranchAllowDeletionsNormalizer::class,
        
        \Github\Model\Tag::class => \Github\Normalizer\TagNormalizer::class,
        
        \Github\Model\TagCommit::class => \Github\Normalizer\TagCommitNormalizer::class,
        
        \Github\Model\CommitActivity::class => \Github\Normalizer\CommitActivityNormalizer::class,
        
        \Github\Model\PageBuildStatus::class => \Github\Normalizer\PageBuildStatusNormalizer::class,
        
        \Github\Model\ViewTraffic::class => \Github\Normalizer\ViewTrafficNormalizer::class,
        
        \Github\Model\ReactionRollup::class => \Github\Normalizer\ReactionRollupNormalizer::class,
        
        \Github\Model\CommitComment::class => \Github\Normalizer\CommitCommentNormalizer::class,
        
        \Github\Model\CommitCommentUser::class => \Github\Normalizer\CommitCommentUserNormalizer::class,
        
        \Github\Model\ParticipationStats::class => \Github\Normalizer\ParticipationStatsNormalizer::class,
        
        \Github\Model\SimpleCommit::class => \Github\Normalizer\SimpleCommitNormalizer::class,
        
        \Github\Model\SimpleCommitAuthor::class => \Github\Normalizer\SimpleCommitAuthorNormalizer::class,
        
        \Github\Model\SimpleCommitCommitter::class => \Github\Normalizer\SimpleCommitCommitterNormalizer::class,
        
        \Github\Model\SimpleCommitStatus::class => \Github\Normalizer\SimpleCommitStatusNormalizer::class,
        
        \Github\Model\CombinedCommitStatus::class => \Github\Normalizer\CombinedCommitStatusNormalizer::class,
        
        \Github\Model\ContributorActivity::class => \Github\Normalizer\ContributorActivityNormalizer::class,
        
        \Github\Model\ContributorActivityAuthor::class => \Github\Normalizer\ContributorActivityAuthorNormalizer::class,
        
        \Github\Model\ContributorActivityWeeksItem::class => \Github\Normalizer\ContributorActivityWeeksItemNormalizer::class,
        
        \Github\Model\Contributor::class => \Github\Normalizer\ContributorNormalizer::class,
        
        \Github\Model\Collaborator::class => \Github\Normalizer\CollaboratorNormalizer::class,
        
        \Github\Model\CollaboratorPermissions::class => \Github\Normalizer\CollaboratorPermissionsNormalizer::class,
        
        \Github\Model\RepositoryCollaboratorPermission::class => \Github\Normalizer\RepositoryCollaboratorPermissionNormalizer::class,
        
        \Github\Model\RepositoryCollaboratorPermissionUser::class => \Github\Normalizer\RepositoryCollaboratorPermissionUserNormalizer::class,
        
        \Github\Model\ScimUser::class => \Github\Normalizer\ScimUserNormalizer::class,
        
        \Github\Model\ScimUserName::class => \Github\Normalizer\ScimUserNameNormalizer::class,
        
        \Github\Model\ScimUserEmailsItem::class => \Github\Normalizer\ScimUserEmailsItemNormalizer::class,
        
        \Github\Model\ScimUserMeta::class => \Github\Normalizer\ScimUserMetaNormalizer::class,
        
        \Github\Model\ScimUserOperationsItem::class => \Github\Normalizer\ScimUserOperationsItemNormalizer::class,
        
        \Github\Model\ScimUserGroupsItem::class => \Github\Normalizer\ScimUserGroupsItemNormalizer::class,
        
        \Github\Model\ScimUserList::class => \Github\Normalizer\ScimUserListNormalizer::class,
        
        \Github\Model\Migration::class => \Github\Normalizer\MigrationNormalizer::class,
        
        \Github\Model\MigrationOwner::class => \Github\Normalizer\MigrationOwnerNormalizer::class,
        
        \Github\Model\PorterLargeFile::class => \Github\Normalizer\PorterLargeFileNormalizer::class,
        
        \Github\Model\Import::class => \Github\Normalizer\ImportNormalizer::class,
        
        \Github\Model\ImportProjectChoicesItem::class => \Github\Normalizer\ImportProjectChoicesItemNormalizer::class,
        
        \Github\Model\PorterAuthor::class => \Github\Normalizer\PorterAuthorNormalizer::class,
        
        \Github\Model\InteractionLimit::class => \Github\Normalizer\InteractionLimitNormalizer::class,
        
        \Github\Model\LicenseContent::class => \Github\Normalizer\LicenseContentNormalizer::class,
        
        \Github\Model\LicenseContentLinks::class => \Github\Normalizer\LicenseContentLinksNormalizer::class,
        
        \Github\Model\LicenseContentLicense::class => \Github\Normalizer\LicenseContentLicenseNormalizer::class,
        
        \Github\Model\License::class => \Github\Normalizer\LicenseNormalizer::class,
        
        \Github\Model\RepositorySubscription::class => \Github\Normalizer\RepositorySubscriptionNormalizer::class,
        
        \Github\Model\Actor::class => \Github\Normalizer\ActorNormalizer::class,
        
        \Github\Model\IssueSimple::class => \Github\Normalizer\IssueSimpleNormalizer::class,
        
        \Github\Model\IssueSimpleUser::class => \Github\Normalizer\IssueSimpleUserNormalizer::class,
        
        \Github\Model\IssueSimpleLabelsItem::class => \Github\Normalizer\IssueSimpleLabelsItemNormalizer::class,
        
        \Github\Model\IssueSimpleAssignee::class => \Github\Normalizer\IssueSimpleAssigneeNormalizer::class,
        
        \Github\Model\IssueSimpleMilestone::class => \Github\Normalizer\IssueSimpleMilestoneNormalizer::class,
        
        \Github\Model\IssueSimplePullRequest::class => \Github\Normalizer\IssueSimplePullRequestNormalizer::class,
        
        \Github\Model\IssueSimplePerformedViaGithubApp::class => \Github\Normalizer\IssueSimplePerformedViaGithubAppNormalizer::class,
        
        \Github\Model\IssueComment::class => \Github\Normalizer\IssueCommentNormalizer::class,
        
        \Github\Model\IssueCommentUser::class => \Github\Normalizer\IssueCommentUserNormalizer::class,
        
        \Github\Model\IssueCommentPerformedViaGithubApp::class => \Github\Normalizer\IssueCommentPerformedViaGithubAppNormalizer::class,
        
        \Github\Model\Event::class => \Github\Normalizer\EventNormalizer::class,
        
        \Github\Model\EventRepo::class => \Github\Normalizer\EventRepoNormalizer::class,
        
        \Github\Model\EventPayload::class => \Github\Normalizer\EventPayloadNormalizer::class,
        
        \Github\Model\EventPayloadPagesItem::class => \Github\Normalizer\EventPayloadPagesItemNormalizer::class,
        
        \Github\Model\Thread::class => \Github\Normalizer\ThreadNormalizer::class,
        
        \Github\Model\ThreadSubject::class => \Github\Normalizer\ThreadSubjectNormalizer::class,
        
        \Github\Model\LinkWithType::class => \Github\Normalizer\LinkWithTypeNormalizer::class,
        
        \Github\Model\Feed::class => \Github\Normalizer\FeedNormalizer::class,
        
        \Github\Model\FeedLinks::class => \Github\Normalizer\FeedLinksNormalizer::class,
        
        \Github\Model\StarredRepository::class => \Github\Normalizer\StarredRepositoryNormalizer::class,
        
        \Github\Model\ThreadSubscription::class => \Github\Normalizer\ThreadSubscriptionNormalizer::class,
        
        \Github\Model\Stargazer::class => \Github\Normalizer\StargazerNormalizer::class,
        
        \Github\Model\StargazerUser::class => \Github\Normalizer\StargazerUserNormalizer::class,
        
        \Github\Model\CheckAnnotation::class => \Github\Normalizer\CheckAnnotationNormalizer::class,
        
        \Github\Model\PullRequestMinimal::class => \Github\Normalizer\PullRequestMinimalNormalizer::class,
        
        \Github\Model\PullRequestMinimalHead::class => \Github\Normalizer\PullRequestMinimalHeadNormalizer::class,
        
        \Github\Model\PullRequestMinimalHeadRepo::class => \Github\Normalizer\PullRequestMinimalHeadRepoNormalizer::class,
        
        \Github\Model\PullRequestMinimalBase::class => \Github\Normalizer\PullRequestMinimalBaseNormalizer::class,
        
        \Github\Model\PullRequestMinimalBaseRepo::class => \Github\Normalizer\PullRequestMinimalBaseRepoNormalizer::class,
        
        \Github\Model\CheckSuite::class => \Github\Normalizer\CheckSuiteNormalizer::class,
        
        \Github\Model\CheckSuiteApp::class => \Github\Normalizer\CheckSuiteAppNormalizer::class,
        
        \Github\Model\CheckRun::class => \Github\Normalizer\CheckRunNormalizer::class,
        
        \Github\Model\CheckRunOutput::class => \Github\Normalizer\CheckRunOutputNormalizer::class,
        
        \Github\Model\CheckRunCheckSuite::class => \Github\Normalizer\CheckRunCheckSuiteNormalizer::class,
        
        \Github\Model\CheckRunApp::class => \Github\Normalizer\CheckRunAppNormalizer::class,
        
        \Github\Model\CheckSuitePreference::class => \Github\Normalizer\CheckSuitePreferenceNormalizer::class,
        
        \Github\Model\CheckSuitePreferencePreferences::class => \Github\Normalizer\CheckSuitePreferencePreferencesNormalizer::class,
        
        \Github\Model\CheckSuitePreferencePreferencesAutoTriggerChecksItem::class => \Github\Normalizer\CheckSuitePreferencePreferencesAutoTriggerChecksItemNormalizer::class,
        
        \Github\Model\Project::class => \Github\Normalizer\ProjectNormalizer::class,
        
        \Github\Model\ProjectCreator::class => \Github\Normalizer\ProjectCreatorNormalizer::class,
        
        \Github\Model\ProjectPermissions::class => \Github\Normalizer\ProjectPermissionsNormalizer::class,
        
        \Github\Model\ProjectCard::class => \Github\Normalizer\ProjectCardNormalizer::class,
        
        \Github\Model\ProjectCardCreator::class => \Github\Normalizer\ProjectCardCreatorNormalizer::class,
        
        \Github\Model\ProjectColumn::class => \Github\Normalizer\ProjectColumnNormalizer::class,
        
        \Github\Model\Reaction::class => \Github\Normalizer\ReactionNormalizer::class,
        
        \Github\Model\ReactionUser::class => \Github\Normalizer\ReactionUserNormalizer::class,
        
        \Github\Model\ApiOverview::class => \Github\Normalizer\ApiOverviewNormalizer::class,
        
        \Github\Model\ApiOverviewSshKeyFingerprints::class => \Github\Normalizer\ApiOverviewSshKeyFingerprintsNormalizer::class,
        
        \Github\Model\CredentialAuthorization::class => \Github\Normalizer\CredentialAuthorizationNormalizer::class,
        
        \Github\Model\OrganizationSimple::class => \Github\Normalizer\OrganizationSimpleNormalizer::class,
        
        \Github\Model\OrgMembership::class => \Github\Normalizer\OrgMembershipNormalizer::class,
        
        \Github\Model\OrgMembershipUser::class => \Github\Normalizer\OrgMembershipUserNormalizer::class,
        
        \Github\Model\OrgMembershipPermissions::class => \Github\Normalizer\OrgMembershipPermissionsNormalizer::class,
        
        \Github\Model\OrgHook::class => \Github\Normalizer\OrgHookNormalizer::class,
        
        \Github\Model\OrgHookConfig::class => \Github\Normalizer\OrgHookConfigNormalizer::class,
        
        \Github\Model\OrganizationFull::class => \Github\Normalizer\OrganizationFullNormalizer::class,
        
        \Github\Model\OrganizationFullPlan::class => \Github\Normalizer\OrganizationFullPlanNormalizer::class,
        
        \Github\Model\Enterprise::class => \Github\Normalizer\EnterpriseNormalizer::class,
        
        \Github\Model\Installation::class => \Github\Normalizer\InstallationNormalizer::class,
        
        \Github\Model\InstallationPermissions::class => \Github\Normalizer\InstallationPermissionsNormalizer::class,
        
        \Github\Model\InstallationSuspendedBy::class => \Github\Normalizer\InstallationSuspendedByNormalizer::class,
        
        \Github\Model\OrganizationInvitation::class => \Github\Normalizer\OrganizationInvitationNormalizer::class,
        
        \Github\Model\SearchResultTextMatchesItem::class => \Github\Normalizer\SearchResultTextMatchesItemNormalizer::class,
        
        \Github\Model\SearchResultTextMatchesItemMatchesItem::class => \Github\Normalizer\SearchResultTextMatchesItemMatchesItemNormalizer::class,
        
        \Github\Model\CodeSearchResultItem::class => \Github\Normalizer\CodeSearchResultItemNormalizer::class,
        
        \Github\Model\LabelSearchResultItem::class => \Github\Normalizer\LabelSearchResultItemNormalizer::class,
        
        \Github\Model\UserSearchResultItem::class => \Github\Normalizer\UserSearchResultItemNormalizer::class,
        
        \Github\Model\CommitSearchResultItem::class => \Github\Normalizer\CommitSearchResultItemNormalizer::class,
        
        \Github\Model\CommitSearchResultItemCommit::class => \Github\Normalizer\CommitSearchResultItemCommitNormalizer::class,
        
        \Github\Model\CommitSearchResultItemCommitAuthor::class => \Github\Normalizer\CommitSearchResultItemCommitAuthorNormalizer::class,
        
        \Github\Model\CommitSearchResultItemCommitCommitter::class => \Github\Normalizer\CommitSearchResultItemCommitCommitterNormalizer::class,
        
        \Github\Model\CommitSearchResultItemCommitTree::class => \Github\Normalizer\CommitSearchResultItemCommitTreeNormalizer::class,
        
        \Github\Model\CommitSearchResultItemAuthor::class => \Github\Normalizer\CommitSearchResultItemAuthorNormalizer::class,
        
        \Github\Model\CommitSearchResultItemCommitter::class => \Github\Normalizer\CommitSearchResultItemCommitterNormalizer::class,
        
        \Github\Model\CommitSearchResultItemParentsItem::class => \Github\Normalizer\CommitSearchResultItemParentsItemNormalizer::class,
        
        \Github\Model\IssueSearchResultItem::class => \Github\Normalizer\IssueSearchResultItemNormalizer::class,
        
        \Github\Model\IssueSearchResultItemUser::class => \Github\Normalizer\IssueSearchResultItemUserNormalizer::class,
        
        \Github\Model\IssueSearchResultItemLabelsItem::class => \Github\Normalizer\IssueSearchResultItemLabelsItemNormalizer::class,
        
        \Github\Model\IssueSearchResultItemAssignee::class => \Github\Normalizer\IssueSearchResultItemAssigneeNormalizer::class,
        
        \Github\Model\IssueSearchResultItemMilestone::class => \Github\Normalizer\IssueSearchResultItemMilestoneNormalizer::class,
        
        \Github\Model\IssueSearchResultItemPullRequest::class => \Github\Normalizer\IssueSearchResultItemPullRequestNormalizer::class,
        
        \Github\Model\IssueSearchResultItemPerformedViaGithubApp::class => \Github\Normalizer\IssueSearchResultItemPerformedViaGithubAppNormalizer::class,
        
        \Github\Model\RepoSearchResultItem::class => \Github\Normalizer\RepoSearchResultItemNormalizer::class,
        
        \Github\Model\RepoSearchResultItemOwner::class => \Github\Normalizer\RepoSearchResultItemOwnerNormalizer::class,
        
        \Github\Model\RepoSearchResultItemLicense::class => \Github\Normalizer\RepoSearchResultItemLicenseNormalizer::class,
        
        \Github\Model\RepoSearchResultItemPermissions::class => \Github\Normalizer\RepoSearchResultItemPermissionsNormalizer::class,
        
        \Github\Model\TopicSearchResultItem::class => \Github\Normalizer\TopicSearchResultItemNormalizer::class,
        
        \Github\Model\TopicSearchResultItemRelatedItem::class => \Github\Normalizer\TopicSearchResultItemRelatedItemNormalizer::class,
        
        \Github\Model\TopicSearchResultItemRelatedItemTopicRelation::class => \Github\Normalizer\TopicSearchResultItemRelatedItemTopicRelationNormalizer::class,
        
        \Github\Model\TopicSearchResultItemAliasesItem::class => \Github\Normalizer\TopicSearchResultItemAliasesItemNormalizer::class,
        
        \Github\Model\TopicSearchResultItemAliasesItemTopicRelation::class => \Github\Normalizer\TopicSearchResultItemAliasesItemTopicRelationNormalizer::class,
        
        \Github\Model\ApplicationGrant::class => \Github\Normalizer\ApplicationGrantNormalizer::class,
        
        \Github\Model\ApplicationGrantApp::class => \Github\Normalizer\ApplicationGrantAppNormalizer::class,
        
        \Github\Model\ApplicationGrantUser::class => \Github\Normalizer\ApplicationGrantUserNormalizer::class,
        
        \Github\Model\ScopedInstallation::class => \Github\Normalizer\ScopedInstallationNormalizer::class,
        
        \Github\Model\Authorization::class => \Github\Normalizer\AuthorizationNormalizer::class,
        
        \Github\Model\AuthorizationApp::class => \Github\Normalizer\AuthorizationAppNormalizer::class,
        
        \Github\Model\AuthorizationUser::class => \Github\Normalizer\AuthorizationUserNormalizer::class,
        
        \Github\Model\AuthorizationInstallation::class => \Github\Normalizer\AuthorizationInstallationNormalizer::class,
        
        \Github\Model\CodeOfConduct::class => \Github\Normalizer\CodeOfConductNormalizer::class,
        
        \Github\Model\GpgKey::class => \Github\Normalizer\GpgKeyNormalizer::class,
        
        \Github\Model\GpgKeyEmailsItem::class => \Github\Normalizer\GpgKeyEmailsItemNormalizer::class,
        
        \Github\Model\GpgKeySubkeysItem::class => \Github\Normalizer\GpgKeySubkeysItemNormalizer::class,
        
        \Github\Model\Key::class => \Github\Normalizer\KeyNormalizer::class,
        
        \Github\Model\PrivateUser::class => \Github\Normalizer\PrivateUserNormalizer::class,
        
        \Github\Model\PrivateUserPlan::class => \Github\Normalizer\PrivateUserPlanNormalizer::class,
        
        \Github\Model\PublicUser::class => \Github\Normalizer\PublicUserNormalizer::class,
        
        \Github\Model\PublicUserPlan::class => \Github\Normalizer\PublicUserPlanNormalizer::class,
        
        \Github\Model\Hovercard::class => \Github\Normalizer\HovercardNormalizer::class,
        
        \Github\Model\HovercardContextsItem::class => \Github\Normalizer\HovercardContextsItemNormalizer::class,
        
        \Github\Model\KeySimple::class => \Github\Normalizer\KeySimpleNormalizer::class,
        
        \Github\Model\Workflow::class => \Github\Normalizer\WorkflowNormalizer::class,
        
        \Github\Model\Runner::class => \Github\Normalizer\RunnerNormalizer::class,
        
        \Github\Model\RunnerApplication::class => \Github\Normalizer\RunnerApplicationNormalizer::class,
        
        \Github\Model\Artifact::class => \Github\Normalizer\ArtifactNormalizer::class,
        
        \Github\Model\ActionsSecret::class => \Github\Normalizer\ActionsSecretNormalizer::class,
        
        \Github\Model\OrganizationActionsSecret::class => \Github\Normalizer\OrganizationActionsSecretNormalizer::class,
        
        \Github\Model\WorkflowUsage::class => \Github\Normalizer\WorkflowUsageNormalizer::class,
        
        \Github\Model\WorkflowUsageBillable::class => \Github\Normalizer\WorkflowUsageBillableNormalizer::class,
        
        \Github\Model\WorkflowUsageBillableUBUNTU::class => \Github\Normalizer\WorkflowUsageBillableUBUNTUNormalizer::class,
        
        \Github\Model\WorkflowUsageBillableMACOS::class => \Github\Normalizer\WorkflowUsageBillableMACOSNormalizer::class,
        
        \Github\Model\WorkflowUsageBillableWINDOWS::class => \Github\Normalizer\WorkflowUsageBillableWINDOWSNormalizer::class,
        
        \Github\Model\AuthenticationToken::class => \Github\Normalizer\AuthenticationTokenNormalizer::class,
        
        \Github\Model\Job::class => \Github\Normalizer\JobNormalizer::class,
        
        \Github\Model\JobStepsItem::class => \Github\Normalizer\JobStepsItemNormalizer::class,
        
        \Github\Model\WorkflowRun::class => \Github\Normalizer\WorkflowRunNormalizer::class,
        
        \Github\Model\WorkflowRunUsage::class => \Github\Normalizer\WorkflowRunUsageNormalizer::class,
        
        \Github\Model\WorkflowRunUsageBillable::class => \Github\Normalizer\WorkflowRunUsageBillableNormalizer::class,
        
        \Github\Model\WorkflowRunUsageBillableUBUNTU::class => \Github\Normalizer\WorkflowRunUsageBillableUBUNTUNormalizer::class,
        
        \Github\Model\WorkflowRunUsageBillableMACOS::class => \Github\Normalizer\WorkflowRunUsageBillableMACOSNormalizer::class,
        
        \Github\Model\WorkflowRunUsageBillableWINDOWS::class => \Github\Normalizer\WorkflowRunUsageBillableWINDOWSNormalizer::class,
        
        \Github\Model\ActionsPublicKey::class => \Github\Normalizer\ActionsPublicKeyNormalizer::class,
        
        \Github\Model\TeamRepository::class => \Github\Normalizer\TeamRepositoryNormalizer::class,
        
        \Github\Model\TeamRepositoryLicense::class => \Github\Normalizer\TeamRepositoryLicenseNormalizer::class,
        
        \Github\Model\TeamRepositoryPermissions::class => \Github\Normalizer\TeamRepositoryPermissionsNormalizer::class,
        
        \Github\Model\TeamRepositoryOwner::class => \Github\Normalizer\TeamRepositoryOwnerNormalizer::class,
        
        \Github\Model\TeamRepositoryTemplateRepository::class => \Github\Normalizer\TeamRepositoryTemplateRepositoryNormalizer::class,
        
        \Github\Model\TeamRepositoryTemplateRepositoryOwner::class => \Github\Normalizer\TeamRepositoryTemplateRepositoryOwnerNormalizer::class,
        
        \Github\Model\TeamRepositoryTemplateRepositoryPermissions::class => \Github\Normalizer\TeamRepositoryTemplateRepositoryPermissionsNormalizer::class,
        
        \Github\Model\TeamDiscussionComment::class => \Github\Normalizer\TeamDiscussionCommentNormalizer::class,
        
        \Github\Model\TeamDiscussionCommentAuthor::class => \Github\Normalizer\TeamDiscussionCommentAuthorNormalizer::class,
        
        \Github\Model\TeamMembership::class => \Github\Normalizer\TeamMembershipNormalizer::class,
        
        \Github\Model\TeamDiscussion::class => \Github\Normalizer\TeamDiscussionNormalizer::class,
        
        \Github\Model\TeamDiscussionAuthor::class => \Github\Normalizer\TeamDiscussionAuthorNormalizer::class,
        
        \Github\Model\Organization::class => \Github\Normalizer\OrganizationNormalizer::class,
        
        \Github\Model\OrganizationPlan::class => \Github\Normalizer\OrganizationPlanNormalizer::class,
        
        \Github\Model\TeamFull::class => \Github\Normalizer\TeamFullNormalizer::class,
        
        \Github\Model\TeamFullParent::class => \Github\Normalizer\TeamFullParentNormalizer::class,
        
        \Github\Model\GroupMapping::class => \Github\Normalizer\GroupMappingNormalizer::class,
        
        \Github\Model\GroupMappingGroupsItem::class => \Github\Normalizer\GroupMappingGroupsItemNormalizer::class,
        
        \Github\Model\TeamProject::class => \Github\Normalizer\TeamProjectNormalizer::class,
        
        \Github\Model\TeamProjectPermissions::class => \Github\Normalizer\TeamProjectPermissionsNormalizer::class,
        
        \Github\Model\PullRequestReviewComment::class => \Github\Normalizer\PullRequestReviewCommentNormalizer::class,
        
        \Github\Model\PullRequestReviewCommentLinks::class => \Github\Normalizer\PullRequestReviewCommentLinksNormalizer::class,
        
        \Github\Model\PullRequestReviewCommentLinksSelf::class => \Github\Normalizer\PullRequestReviewCommentLinksSelfNormalizer::class,
        
        \Github\Model\PullRequestReviewCommentLinksHtml::class => \Github\Normalizer\PullRequestReviewCommentLinksHtmlNormalizer::class,
        
        \Github\Model\PullRequestReviewCommentLinksPullRequest::class => \Github\Normalizer\PullRequestReviewCommentLinksPullRequestNormalizer::class,
        
        \Github\Model\PullRequestReview::class => \Github\Normalizer\PullRequestReviewNormalizer::class,
        
        \Github\Model\PullRequestReviewUser::class => \Github\Normalizer\PullRequestReviewUserNormalizer::class,
        
        \Github\Model\PullRequestReviewLinks::class => \Github\Normalizer\PullRequestReviewLinksNormalizer::class,
        
        \Github\Model\PullRequestReviewLinksHtml::class => \Github\Normalizer\PullRequestReviewLinksHtmlNormalizer::class,
        
        \Github\Model\PullRequestReviewLinksPullRequest::class => \Github\Normalizer\PullRequestReviewLinksPullRequestNormalizer::class,
        
        \Github\Model\PullRequestReviewRequest::class => \Github\Normalizer\PullRequestReviewRequestNormalizer::class,
        
        \Github\Model\PullRequestReviewRequestUsersItem::class => \Github\Normalizer\PullRequestReviewRequestUsersItemNormalizer::class,
        
        \Github\Model\PullRequestReviewRequestTeamsItem::class => \Github\Normalizer\PullRequestReviewRequestTeamsItemNormalizer::class,
        
        \Github\Model\PullRequest::class => \Github\Normalizer\PullRequestNormalizer::class,
        
        \Github\Model\PullRequestUser::class => \Github\Normalizer\PullRequestUserNormalizer::class,
        
        \Github\Model\PullRequestLabelsItem::class => \Github\Normalizer\PullRequestLabelsItemNormalizer::class,
        
        \Github\Model\PullRequestMilestone::class => \Github\Normalizer\PullRequestMilestoneNormalizer::class,
        
        \Github\Model\PullRequestAssignee::class => \Github\Normalizer\PullRequestAssigneeNormalizer::class,
        
        \Github\Model\PullRequestHead::class => \Github\Normalizer\PullRequestHeadNormalizer::class,
        
        \Github\Model\PullRequestHeadRepo::class => \Github\Normalizer\PullRequestHeadRepoNormalizer::class,
        
        \Github\Model\PullRequestHeadRepoOwner::class => \Github\Normalizer\PullRequestHeadRepoOwnerNormalizer::class,
        
        \Github\Model\PullRequestHeadRepoPermissions::class => \Github\Normalizer\PullRequestHeadRepoPermissionsNormalizer::class,
        
        \Github\Model\PullRequestHeadRepoLicense::class => \Github\Normalizer\PullRequestHeadRepoLicenseNormalizer::class,
        
        \Github\Model\PullRequestHeadUser::class => \Github\Normalizer\PullRequestHeadUserNormalizer::class,
        
        \Github\Model\PullRequestBase::class => \Github\Normalizer\PullRequestBaseNormalizer::class,
        
        \Github\Model\PullRequestBaseRepo::class => \Github\Normalizer\PullRequestBaseRepoNormalizer::class,
        
        \Github\Model\PullRequestBaseRepoOwner::class => \Github\Normalizer\PullRequestBaseRepoOwnerNormalizer::class,
        
        \Github\Model\PullRequestBaseRepoPermissions::class => \Github\Normalizer\PullRequestBaseRepoPermissionsNormalizer::class,
        
        \Github\Model\PullRequestBaseRepoLicense::class => \Github\Normalizer\PullRequestBaseRepoLicenseNormalizer::class,
        
        \Github\Model\PullRequestBaseUser::class => \Github\Normalizer\PullRequestBaseUserNormalizer::class,
        
        \Github\Model\PullRequestLinks::class => \Github\Normalizer\PullRequestLinksNormalizer::class,
        
        \Github\Model\PullRequestMergedBy::class => \Github\Normalizer\PullRequestMergedByNormalizer::class,
        
        \Github\Model\PullRequestMergeResult::class => \Github\Normalizer\PullRequestMergeResultNormalizer::class,
        
        \Github\Model\ReviewComment::class => \Github\Normalizer\ReviewCommentNormalizer::class,
        
        \Github\Model\ReviewCommentUser::class => \Github\Normalizer\ReviewCommentUserNormalizer::class,
        
        \Github\Model\ReviewCommentLinks::class => \Github\Normalizer\ReviewCommentLinksNormalizer::class,
        
        \Github\Model\CodeScanningAlert::class => \Github\Normalizer\CodeScanningAlertNormalizer::class,
        
        \Github\Model\CodeScanningAlertClosedBy::class => \Github\Normalizer\CodeScanningAlertClosedByNormalizer::class,
        
        \Github\Model\Issue::class => \Github\Normalizer\IssueNormalizer::class,
        
        \Github\Model\IssueUser::class => \Github\Normalizer\IssueUserNormalizer::class,
        
        \Github\Model\IssueAssignee::class => \Github\Normalizer\IssueAssigneeNormalizer::class,
        
        \Github\Model\IssueMilestone::class => \Github\Normalizer\IssueMilestoneNormalizer::class,
        
        \Github\Model\IssuePullRequest::class => \Github\Normalizer\IssuePullRequestNormalizer::class,
        
        \Github\Model\IssueClosedBy::class => \Github\Normalizer\IssueClosedByNormalizer::class,
        
        \Github\Model\IssuePerformedViaGithubApp::class => \Github\Normalizer\IssuePerformedViaGithubAppNormalizer::class,
        
        \Github\Model\Label::class => \Github\Normalizer\LabelNormalizer::class,
        
        \Github\Model\IssueEventForIssue::class => \Github\Normalizer\IssueEventForIssueNormalizer::class,
        
        \Github\Model\IssueEventLabel::class => \Github\Normalizer\IssueEventLabelNormalizer::class,
        
        \Github\Model\IssueEventDismissedReview::class => \Github\Normalizer\IssueEventDismissedReviewNormalizer::class,
        
        \Github\Model\IssueEventMilestone::class => \Github\Normalizer\IssueEventMilestoneNormalizer::class,
        
        \Github\Model\IssueEventProjectCard::class => \Github\Normalizer\IssueEventProjectCardNormalizer::class,
        
        \Github\Model\IssueEventRename::class => \Github\Normalizer\IssueEventRenameNormalizer::class,
        
        \Github\Model\IssueEvent::class => \Github\Normalizer\IssueEventNormalizer::class,
        
        \Github\Model\IssueEventActor::class => \Github\Normalizer\IssueEventActorNormalizer::class,
        
        \Github\Model\IssueEventAssignee::class => \Github\Normalizer\IssueEventAssigneeNormalizer::class,
        
        \Github\Model\IssueEventAssigner::class => \Github\Normalizer\IssueEventAssignerNormalizer::class,
        
        \Github\Model\IssueEventReviewRequester::class => \Github\Normalizer\IssueEventReviewRequesterNormalizer::class,
        
        \Github\Model\IssueEventRequestedReviewer::class => \Github\Normalizer\IssueEventRequestedReviewerNormalizer::class,
        
        \Github\Model\MarketplaceListingPlan::class => \Github\Normalizer\MarketplaceListingPlanNormalizer::class,
        
        \Github\Model\MarketplacePurchase::class => \Github\Normalizer\MarketplacePurchaseNormalizer::class,
        
        \Github\Model\MarketplacePurchaseMarketplacePendingChange::class => \Github\Normalizer\MarketplacePurchaseMarketplacePendingChangeNormalizer::class,
        
        \Github\Model\MarketplacePurchaseMarketplacePurchase::class => \Github\Normalizer\MarketplacePurchaseMarketplacePurchaseNormalizer::class,
        
        \Github\Model\ContentReferenceAttachment::class => \Github\Normalizer\ContentReferenceAttachmentNormalizer::class,
        
        \Github\Model\InstallationToken::class => \Github\Normalizer\InstallationTokenNormalizer::class,
        
        \Github\Model\InstallationTokenPermissions::class => \Github\Normalizer\InstallationTokenPermissionsNormalizer::class,
        
        \Github\Model\MarketplaceAccount::class => \Github\Normalizer\MarketplaceAccountNormalizer::class,
        
        \Github\Model\UserMarketplacePurchase::class => \Github\Normalizer\UserMarketplacePurchaseNormalizer::class,
        
        \Github\Model\BaseGist::class => \Github\Normalizer\BaseGistNormalizer::class,
        
        \Github\Model\BaseGistFilesItem::class => \Github\Normalizer\BaseGistFilesItemNormalizer::class,
        
        \Github\Model\BaseGistUser::class => \Github\Normalizer\BaseGistUserNormalizer::class,
        
        \Github\Model\BaseGistOwner::class => \Github\Normalizer\BaseGistOwnerNormalizer::class,
        
        \Github\Model\GistComment::class => \Github\Normalizer\GistCommentNormalizer::class,
        
        \Github\Model\GistCommentUser::class => \Github\Normalizer\GistCommentUserNormalizer::class,
        
        \Github\Model\GistSimple::class => \Github\Normalizer\GistSimpleNormalizer::class,
        
        \Github\Model\GistSimpleFilesItem::class => \Github\Normalizer\GistSimpleFilesItemNormalizer::class,
        
        \Github\Model\GistFull::class => \Github\Normalizer\GistFullNormalizer::class,
        
        \Github\Model\GistFullforksItem::class => \Github\Normalizer\GistFullforksItemNormalizer::class,
        
        \Github\Model\GistFullforksItemUser::class => \Github\Normalizer\GistFullforksItemUserNormalizer::class,
        
        \Github\Model\GistFullhistoryItem::class => \Github\Normalizer\GistFullhistoryItemNormalizer::class,
        
        \Github\Model\GistFullhistoryItemUser::class => \Github\Normalizer\GistFullhistoryItemUserNormalizer::class,
        
        \Github\Model\GistFullhistoryItemChangeStatus::class => \Github\Normalizer\GistFullhistoryItemChangeStatusNormalizer::class,
        
        \Github\Model\GistFullforkOf::class => \Github\Normalizer\GistFullforkOfNormalizer::class,
        
        \Github\Model\GistCommit::class => \Github\Normalizer\GistCommitNormalizer::class,
        
        \Github\Model\GistCommitUser::class => \Github\Normalizer\GistCommitUserNormalizer::class,
        
        \Github\Model\GistCommitChangeStatus::class => \Github\Normalizer\GistCommitChangeStatusNormalizer::class,
        
        \Github\Model\CombinedBillingUsage::class => \Github\Normalizer\CombinedBillingUsageNormalizer::class,
        
        \Github\Model\PackagesBillingUsage::class => \Github\Normalizer\PackagesBillingUsageNormalizer::class,
        
        \Github\Model\ActionsBillingUsage::class => \Github\Normalizer\ActionsBillingUsageNormalizer::class,
        
        \Github\Model\ActionsBillingUsageMinutesUsedBreakdown::class => \Github\Normalizer\ActionsBillingUsageMinutesUsedBreakdownNormalizer::class,
        
        \Github\Model\RateLimit::class => \Github\Normalizer\RateLimitNormalizer::class,
        
        \Github\Model\RateLimitOverview::class => \Github\Normalizer\RateLimitOverviewNormalizer::class,
        
        \Github\Model\RateLimitOverviewResources::class => \Github\Normalizer\RateLimitOverviewResourcesNormalizer::class,
        
        \Github\Model\GitTree::class => \Github\Normalizer\GitTreeNormalizer::class,
        
        \Github\Model\GitTreeTreeItem::class => \Github\Normalizer\GitTreeTreeItemNormalizer::class,
        
        \Github\Model\GitRef::class => \Github\Normalizer\GitRefNormalizer::class,
        
        \Github\Model\GitRefObject::class => \Github\Normalizer\GitRefObjectNormalizer::class,
        
        \Github\Model\GitCommit::class => \Github\Normalizer\GitCommitNormalizer::class,
        
        \Github\Model\GitCommitAuthor::class => \Github\Normalizer\GitCommitAuthorNormalizer::class,
        
        \Github\Model\GitCommitCommitter::class => \Github\Normalizer\GitCommitCommitterNormalizer::class,
        
        \Github\Model\GitCommitTree::class => \Github\Normalizer\GitCommitTreeNormalizer::class,
        
        \Github\Model\GitCommitParentsItem::class => \Github\Normalizer\GitCommitParentsItemNormalizer::class,
        
        \Github\Model\GitCommitVerification::class => \Github\Normalizer\GitCommitVerificationNormalizer::class,
        
        \Github\Model\GitTag::class => \Github\Normalizer\GitTagNormalizer::class,
        
        \Github\Model\GitTagTagger::class => \Github\Normalizer\GitTagTaggerNormalizer::class,
        
        \Github\Model\GitTagObject::class => \Github\Normalizer\GitTagObjectNormalizer::class,
        
        \Github\Model\ShortBlob::class => \Github\Normalizer\ShortBlobNormalizer::class,
        
        \Github\Model\Blob::class => \Github\Normalizer\BlobNormalizer::class,
        
        \Github\Model\GitignoreTemplate::class => \Github\Normalizer\GitignoreTemplateNormalizer::class,
        
        \Github\Model\ResponsePreviewHeaderMissing::class => \Github\Normalizer\ResponsePreviewHeaderMissingNormalizer::class,
        
        \Github\Model\ResponseServiceUnavailable::class => \Github\Normalizer\ResponseServiceUnavailableNormalizer::class,
        
        \Github\Model\ResponseForbiddenGist::class => \Github\Normalizer\ResponseForbiddenGistNormalizer::class,
        
        \Github\Model\ResponseForbiddenGistBlock::class => \Github\Normalizer\ResponseForbiddenGistBlockNormalizer::class,
        
        \Github\Model\OrgsOrgReposPostBody::class => \Github\Normalizer\OrgsOrgReposPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoReleasesAssetsAssetIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoContentsPathDeleteBody::class => \Github\Normalizer\ReposOwnerRepoContentsPathDeleteBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoContentsPathDeleteBodyCommitter::class => \Github\Normalizer\ReposOwnerRepoContentsPathDeleteBodyCommitterNormalizer::class,
        
        \Github\Model\ReposOwnerRepoContentsPathDeleteBodyAuthor::class => \Github\Normalizer\ReposOwnerRepoContentsPathDeleteBodyAuthorNormalizer::class,
        
        \Github\Model\ReposOwnerRepoContentsPathPutBody::class => \Github\Normalizer\ReposOwnerRepoContentsPathPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoContentsPathPutBodyCommitter::class => \Github\Normalizer\ReposOwnerRepoContentsPathPutBodyCommitterNormalizer::class,
        
        \Github\Model\ReposOwnerRepoContentsPathPutBodyAuthor::class => \Github\Normalizer\ReposOwnerRepoContentsPathPutBodyAuthorNormalizer::class,
        
        \Github\Model\ReposOwnerRepoTopicsPutBody::class => \Github\Normalizer\ReposOwnerRepoTopicsPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoDeploymentsPostBody::class => \Github\Normalizer\ReposOwnerRepoDeploymentsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoDeploymentsPostResponse202::class => \Github\Normalizer\ReposOwnerRepoDeploymentsPostResponse202Normalizer::class,
        
        \Github\Model\ReposOwnerRepoDeploymentsPostResponse409::class => \Github\Normalizer\ReposOwnerRepoDeploymentsPostResponse409Normalizer::class,
        
        \Github\Model\ReposOwnerRepoPagesPostBody::class => \Github\Normalizer\ReposOwnerRepoPagesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPagesPostBodySource::class => \Github\Normalizer\ReposOwnerRepoPagesPostBodySourceNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPagesPutBody::class => \Github\Normalizer\ReposOwnerRepoPagesPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictionsNormalizer::class,
        
        \Github\Model\ReposOwnerRepoKeysPostBody::class => \Github\Normalizer\ReposOwnerRepoKeysPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoHooksHookIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoHooksHookIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoHooksHookIdPatchBodyConfig::class => \Github\Normalizer\ReposOwnerRepoHooksHookIdPatchBodyConfigNormalizer::class,
        
        \Github\Model\ReposOwnerRepoReleasesPostBody::class => \Github\Normalizer\ReposOwnerRepoReleasesPostBodyNormalizer::class,
        
        \Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody::class => \Github\Normalizer\ReposTemplateOwnerTemplateRepoGeneratePostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredStatusChecksPatchBody::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionRequiredStatusChecksPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoDeleteResponse403::class => \Github\Normalizer\ReposOwnerRepoDeleteResponse403Normalizer::class,
        
        \Github\Model\ReposOwnerRepoPatchBody::class => \Github\Normalizer\ReposOwnerRepoPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoReleasesReleaseIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecksNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviewsNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviewsDismissalRestrictions::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviewsDismissalRestrictionsNormalizer::class,
        
        \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions::class => \Github\Normalizer\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsNormalizer::class,
        
        \Github\Model\ReposOwnerRepoDispatchesPostBody::class => \Github\Normalizer\ReposOwnerRepoDispatchesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoTransferPostBody::class => \Github\Normalizer\ReposOwnerRepoTransferPostBodyNormalizer::class,
        
        \Github\Model\UserReposPostBody::class => \Github\Normalizer\UserReposPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCollaboratorsUsernamePutBody::class => \Github\Normalizer\ReposOwnerRepoCollaboratorsUsernamePutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoForksPostBody::class => \Github\Normalizer\ReposOwnerRepoForksPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCommentsCommentIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoCommentsCommentIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoHooksPostBody::class => \Github\Normalizer\ReposOwnerRepoHooksPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoHooksPostBodyConfig::class => \Github\Normalizer\ReposOwnerRepoHooksPostBodyConfigNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCommitsCommitShaCommentsPostBody::class => \Github\Normalizer\ReposOwnerRepoCommitsCommitShaCommentsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoInvitationsInvitationIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoStatusesShaPostBody::class => \Github\Normalizer\ReposOwnerRepoStatusesShaPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody::class => \Github\Normalizer\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoMergesPostBody::class => \Github\Normalizer\ReposOwnerRepoMergesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoMergesPostResponse404::class => \Github\Normalizer\ReposOwnerRepoMergesPostResponse404Normalizer::class,
        
        \Github\Model\ReposOwnerRepoMergesPostResponse409::class => \Github\Normalizer\ReposOwnerRepoMergesPostResponse409Normalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItemNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersScimUserIdPutBodyNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBodyName::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersScimUserIdPutBodyNameNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItemNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersPostBody::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersPostBodyNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersPostBodyName::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersPostBodyNameNormalizer::class,
        
        \Github\Model\ScimV2OrganizationsOrgUsersPostBodyEmailsItem::class => \Github\Normalizer\ScimV2OrganizationsOrgUsersPostBodyEmailsItemNormalizer::class,
        
        \Github\Model\OrgsOrgMigrationsPostBody::class => \Github\Normalizer\OrgsOrgMigrationsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoImportPatchBody::class => \Github\Normalizer\ReposOwnerRepoImportPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoImportPutBody::class => \Github\Normalizer\ReposOwnerRepoImportPutBodyNormalizer::class,
        
        \Github\Model\UserMigrationsPostBody::class => \Github\Normalizer\UserMigrationsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoImportAuthorsAuthorIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoImportLfsPatchBody::class => \Github\Normalizer\ReposOwnerRepoImportLfsPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoInteractionLimitsPutBody::class => \Github\Normalizer\ReposOwnerRepoInteractionLimitsPutBodyNormalizer::class,
        
        \Github\Model\OrgsOrgInteractionLimitsPutBody::class => \Github\Normalizer\OrgsOrgInteractionLimitsPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoSubscriptionPutBody::class => \Github\Normalizer\ReposOwnerRepoSubscriptionPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoNotificationsPutBody::class => \Github\Normalizer\ReposOwnerRepoNotificationsPutBodyNormalizer::class,
        
        \Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody::class => \Github\Normalizer\NotificationsThreadsThreadIdSubscriptionPutBodyNormalizer::class,
        
        \Github\Model\NotificationsPutBody::class => \Github\Normalizer\NotificationsPutBodyNormalizer::class,
        
        \Github\Model\NotificationsPutResponse202::class => \Github\Normalizer\NotificationsPutResponse202Normalizer::class,
        
        \Github\Model\ReposOwnerRepoCommitsRefCheckSuitesGetResponse200::class => \Github\Normalizer\ReposOwnerRepoCommitsRefCheckSuitesGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoCommitsRefCheckRunsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoCommitsRefCheckRunsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class => \Github\Normalizer\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem::class => \Github\Normalizer\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem::class => \Github\Normalizer\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem::class => \Github\Normalizer\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckSuitesPostBody::class => \Github\Normalizer\ReposOwnerRepoCheckSuitesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody::class => \Github\Normalizer\ReposOwnerRepoCheckSuitesPreferencesPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem::class => \Github\Normalizer\ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsPostBody::class => \Github\Normalizer\ReposOwnerRepoCheckRunsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutput::class => \Github\Normalizer\ReposOwnerRepoCheckRunsPostBodyOutputNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem::class => \Github\Normalizer\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutputImagesItem::class => \Github\Normalizer\ReposOwnerRepoCheckRunsPostBodyOutputImagesItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCheckRunsPostBodyActionsItem::class => \Github\Normalizer\ReposOwnerRepoCheckRunsPostBodyActionsItemNormalizer::class,
        
        \Github\Model\MarkdownPostBody::class => \Github\Normalizer\MarkdownPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgProjectsPostBody::class => \Github\Normalizer\OrgsOrgProjectsPostBodyNormalizer::class,
        
        \Github\Model\ProjectsColumnsColumnIdMovesPostBody::class => \Github\Normalizer\ProjectsColumnsColumnIdMovesPostBodyNormalizer::class,
        
        \Github\Model\ProjectsColumnsColumnIdMovesPostResponse201::class => \Github\Normalizer\ProjectsColumnsColumnIdMovesPostResponse201Normalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdDeleteResponse403::class => \Github\Normalizer\ProjectsColumnsCardsCardIdDeleteResponse403Normalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdPatchBody::class => \Github\Normalizer\ProjectsColumnsCardsCardIdPatchBodyNormalizer::class,
        
        \Github\Model\ProjectsColumnsColumnIdPatchBody::class => \Github\Normalizer\ProjectsColumnsColumnIdPatchBodyNormalizer::class,
        
        \Github\Model\ProjectsProjectIdDeleteResponse403::class => \Github\Normalizer\ProjectsProjectIdDeleteResponse403Normalizer::class,
        
        \Github\Model\ProjectsProjectIdPatchBody::class => \Github\Normalizer\ProjectsProjectIdPatchBodyNormalizer::class,
        
        \Github\Model\ProjectsProjectIdPatchResponse403::class => \Github\Normalizer\ProjectsProjectIdPatchResponse403Normalizer::class,
        
        \Github\Model\ProjectsProjectIdColumnsPostBody::class => \Github\Normalizer\ProjectsProjectIdColumnsPostBodyNormalizer::class,
        
        \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503::class => \Github\Normalizer\ProjectsColumnsColumnIdCardsPostResponse503Normalizer::class,
        
        \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503ErrorsItem::class => \Github\Normalizer\ProjectsColumnsColumnIdCardsPostResponse503ErrorsItemNormalizer::class,
        
        \Github\Model\UserProjectsPostBody::class => \Github\Normalizer\UserProjectsPostBodyNormalizer::class,
        
        \Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody::class => \Github\Normalizer\ProjectsProjectIdCollaboratorsUsernamePutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoProjectsPostBody::class => \Github\Normalizer\ReposOwnerRepoProjectsPostBodyNormalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdMovesPostBody::class => \Github\Normalizer\ProjectsColumnsCardsCardIdMovesPostBodyNormalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse201::class => \Github\Normalizer\ProjectsColumnsCardsCardIdMovesPostResponse201Normalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403::class => \Github\Normalizer\ProjectsColumnsCardsCardIdMovesPostResponse403Normalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403ErrorsItem::class => \Github\Normalizer\ProjectsColumnsCardsCardIdMovesPostResponse403ErrorsItemNormalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503::class => \Github\Normalizer\ProjectsColumnsCardsCardIdMovesPostResponse503Normalizer::class,
        
        \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503ErrorsItem::class => \Github\Normalizer\ProjectsColumnsCardsCardIdMovesPostResponse503ErrorsItemNormalizer::class,
        
        \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody::class => \Github\Normalizer\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody::class => \Github\Normalizer\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesCommentsCommentIdReactionsPostBody::class => \Github\Normalizer\ReposOwnerRepoIssuesCommentsCommentIdReactionsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberReactionsPostBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberReactionsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsCommentsCommentIdReactionsPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsCommentsCommentIdReactionsPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberReactionsPostBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberReactionsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody::class => \Github\Normalizer\ReposOwnerRepoCommentsCommentIdReactionsPostBodyNormalizer::class,
        
        \Github\Model\GetResponse200::class => \Github\Normalizer\GetResponse200Normalizer::class,
        
        \Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422::class => \Github\Normalizer\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422Normalizer::class,
        
        \Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403::class => \Github\Normalizer\OrgsOrgOutsideCollaboratorsUsernamePutResponse403Normalizer::class,
        
        \Github\Model\UserMembershipsOrgsOrgPatchBody::class => \Github\Normalizer\UserMembershipsOrgsOrgPatchBodyNormalizer::class,
        
        \Github\Model\OrgsOrgMembershipsUsernamePutBody::class => \Github\Normalizer\OrgsOrgMembershipsUsernamePutBodyNormalizer::class,
        
        \Github\Model\OrgsOrgHooksHookIdPatchBody::class => \Github\Normalizer\OrgsOrgHooksHookIdPatchBodyNormalizer::class,
        
        \Github\Model\OrgsOrgHooksHookIdPatchBodyConfig::class => \Github\Normalizer\OrgsOrgHooksHookIdPatchBodyConfigNormalizer::class,
        
        \Github\Model\OrgsOrgPatchBody::class => \Github\Normalizer\OrgsOrgPatchBodyNormalizer::class,
        
        \Github\Model\OrgsOrgInstallationsGetResponse200::class => \Github\Normalizer\OrgsOrgInstallationsGetResponse200Normalizer::class,
        
        \Github\Model\OrgsOrgInvitationsPostBody::class => \Github\Normalizer\OrgsOrgInvitationsPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgHooksPostBody::class => \Github\Normalizer\OrgsOrgHooksPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgHooksPostBodyConfig::class => \Github\Normalizer\OrgsOrgHooksPostBodyConfigNormalizer::class,
        
        \Github\Model\SearchCodeGetResponse200::class => \Github\Normalizer\SearchCodeGetResponse200Normalizer::class,
        
        \Github\Model\SearchLabelsGetResponse200::class => \Github\Normalizer\SearchLabelsGetResponse200Normalizer::class,
        
        \Github\Model\SearchUsersGetResponse200::class => \Github\Normalizer\SearchUsersGetResponse200Normalizer::class,
        
        \Github\Model\SearchCommitsGetResponse200::class => \Github\Normalizer\SearchCommitsGetResponse200Normalizer::class,
        
        \Github\Model\SearchIssuesGetResponse200::class => \Github\Normalizer\SearchIssuesGetResponse200Normalizer::class,
        
        \Github\Model\SearchRepositoriesGetResponse200::class => \Github\Normalizer\SearchRepositoriesGetResponse200Normalizer::class,
        
        \Github\Model\SearchTopicsGetResponse200::class => \Github\Normalizer\SearchTopicsGetResponse200Normalizer::class,
        
        \Github\Model\AuthorizationsPostBody::class => \Github\Normalizer\AuthorizationsPostBodyNormalizer::class,
        
        \Github\Model\AuthorizationsClientsClientIdFingerprintPutBody::class => \Github\Normalizer\AuthorizationsClientsClientIdFingerprintPutBodyNormalizer::class,
        
        \Github\Model\AuthorizationsAuthorizationIdPatchBody::class => \Github\Normalizer\AuthorizationsAuthorizationIdPatchBodyNormalizer::class,
        
        \Github\Model\AuthorizationsClientsClientIdPutBody::class => \Github\Normalizer\AuthorizationsClientsClientIdPutBodyNormalizer::class,
        
        \Github\Model\UserGpgKeysPostBody::class => \Github\Normalizer\UserGpgKeysPostBodyNormalizer::class,
        
        \Github\Model\UserKeysPostBody::class => \Github\Normalizer\UserKeysPostBodyNormalizer::class,
        
        \Github\Model\UserPatchBody::class => \Github\Normalizer\UserPatchBodyNormalizer::class,
        
        \Github\Model\UserEmailVisibilityPatchBody::class => \Github\Normalizer\UserEmailVisibilityPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsWorkflowsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsWorkflowsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody::class => \Github\Normalizer\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgActionsRunnersGetResponse200::class => \Github\Normalizer\OrgsOrgActionsRunnersGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsArtifactsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsArtifactsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsSecretsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsSecretsGetResponse200Normalizer::class,
        
        \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody::class => \Github\Normalizer\OrgsOrgActionsSecretsSecretNamePutBodyNormalizer::class,
        
        \Github\Model\OrgsOrgActionsSecretsGetResponse200::class => \Github\Normalizer\OrgsOrgActionsSecretsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody::class => \Github\Normalizer\ReposOwnerRepoActionsSecretsSecretNamePutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsRunnersGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsRunnersGetResponse200Normalizer::class,
        
        \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200::class => \Github\Normalizer\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200Normalizer::class,
        
        \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesPutBody::class => \Github\Normalizer\OrgsOrgActionsSecretsSecretNameRepositoriesPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsRunsRunIdArtifactsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsRunsRunIdArtifactsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdRunsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsWorkflowsWorkflowIdRunsGetResponse200Normalizer::class,
        
        \Github\Model\ReposOwnerRepoActionsRunsGetResponse200::class => \Github\Normalizer\ReposOwnerRepoActionsRunsGetResponse200Normalizer::class,
        
        \Github\Model\TeamsTeamIdMembersUsernamePutResponse422::class => \Github\Normalizer\TeamsTeamIdMembersUsernamePutResponse422Normalizer::class,
        
        \Github\Model\TeamsTeamIdMembersUsernamePutResponse422ErrorsItem::class => \Github\Normalizer\TeamsTeamIdMembersUsernamePutResponse422ErrorsItemNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody::class => \Github\Normalizer\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdReposOwnerRepoPutBody::class => \Github\Normalizer\TeamsTeamIdReposOwnerRepoPutBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdMembershipsUsernamePutBody::class => \Github\Normalizer\TeamsTeamIdMembershipsUsernamePutBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422::class => \Github\Normalizer\TeamsTeamIdMembershipsUsernamePutResponse422Normalizer::class,
        
        \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422ErrorsItem::class => \Github\Normalizer\TeamsTeamIdMembershipsUsernamePutResponse422ErrorsItemNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsPostBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsPostBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberPatchBody::class => \Github\Normalizer\TeamsTeamIdDiscussionsDiscussionNumberPatchBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdPatchBody::class => \Github\Normalizer\TeamsTeamIdPatchBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsPostBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugDiscussionsPostBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdTeamSyncGroupMappingsPatchBody::class => \Github\Normalizer\TeamsTeamIdTeamSyncGroupMappingsPatchBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem::class => \Github\Normalizer\TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItemNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberPatchBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberPatchBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsPostBody::class => \Github\Normalizer\TeamsTeamIdDiscussionsDiscussionNumberCommentsPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403Normalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberPatchBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberPatchBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdProjectsProjectIdPutBody::class => \Github\Normalizer\TeamsTeamIdProjectsProjectIdPutBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403::class => \Github\Normalizer\TeamsTeamIdProjectsProjectIdPutResponse403Normalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422Normalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItemNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugPatchBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugPatchBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsPostBody::class => \Github\Normalizer\OrgsOrgTeamsPostBodyNormalizer::class,
        
        \Github\Model\TeamsTeamIdDiscussionsPostBody::class => \Github\Normalizer\TeamsTeamIdDiscussionsPostBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyNormalizer::class,
        
        \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem::class => \Github\Normalizer\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsCommentsCommentIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoPullsCommentsCommentIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberCommentsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberPatchBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberReviewsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberMergePutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberMergePutResponse405Normalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberMergePutResponse409Normalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberUpdateBranchPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutResponse202::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberUpdateBranchPutResponse202Normalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdEventsPostBody::class => \Github\Normalizer\ReposOwnerRepoPullsPullNumberReviewsReviewIdEventsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberLockPutBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberLockPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody::class => \Github\Normalizer\ReposOwnerRepoMilestonesMilestoneNumberPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoMilestonesPostBody::class => \Github\Normalizer\ReposOwnerRepoMilestonesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesCommentsCommentIdPatchBody::class => \Github\Normalizer\ReposOwnerRepoIssuesCommentsCommentIdPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoLabelsNamePatchBody::class => \Github\Normalizer\ReposOwnerRepoLabelsNamePatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoLabelsPostBody::class => \Github\Normalizer\ReposOwnerRepoLabelsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberLabelsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPutBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberLabelsPutBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesPostBody::class => \Github\Normalizer\ReposOwnerRepoIssuesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberCommentsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody::class => \Github\Normalizer\ReposOwnerRepoIssuesIssueNumberAssigneesPostBodyNormalizer::class,
        
        \Github\Model\ApplicationsClientIdTokenDeleteBody::class => \Github\Normalizer\ApplicationsClientIdTokenDeleteBodyNormalizer::class,
        
        \Github\Model\ApplicationsClientIdTokenPatchBody::class => \Github\Normalizer\ApplicationsClientIdTokenPatchBodyNormalizer::class,
        
        \Github\Model\ApplicationsClientIdTokenPostBody::class => \Github\Normalizer\ApplicationsClientIdTokenPostBodyNormalizer::class,
        
        \Github\Model\ContentReferencesContentReferenceIdAttachmentsPostBody::class => \Github\Normalizer\ContentReferencesContentReferenceIdAttachmentsPostBodyNormalizer::class,
        
        \Github\Model\UserInstallationsGetResponse200::class => \Github\Normalizer\UserInstallationsGetResponse200Normalizer::class,
        
        \Github\Model\InstallationRepositoriesGetResponse200::class => \Github\Normalizer\InstallationRepositoriesGetResponse200Normalizer::class,
        
        \Github\Model\UserInstallationsInstallationIdRepositoriesGetResponse200::class => \Github\Normalizer\UserInstallationsInstallationIdRepositoriesGetResponse200Normalizer::class,
        
        \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody::class => \Github\Normalizer\AppInstallationsInstallationIdAccessTokensPostBodyNormalizer::class,
        
        \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions::class => \Github\Normalizer\AppInstallationsInstallationIdAccessTokensPostBodyPermissionsNormalizer::class,
        
        \Github\Model\ApplicationsClientIdTokensAccessTokenGetResponse200::class => \Github\Normalizer\ApplicationsClientIdTokensAccessTokenGetResponse200Normalizer::class,
        
        \Github\Model\AppManifestsCodeConversionsPostResponse201::class => \Github\Normalizer\AppManifestsCodeConversionsPostResponse201Normalizer::class,
        
        \Github\Model\ApplicationsClientIdGrantDeleteBody::class => \Github\Normalizer\ApplicationsClientIdGrantDeleteBodyNormalizer::class,
        
        \Github\Model\GistsGistIdStarGetResponse404::class => \Github\Normalizer\GistsGistIdStarGetResponse404Normalizer::class,
        
        \Github\Model\GistsGistIdCommentsCommentIdPatchBody::class => \Github\Normalizer\GistsGistIdCommentsCommentIdPatchBodyNormalizer::class,
        
        \Github\Model\GistsGistIdPatchBody::class => \Github\Normalizer\GistsGistIdPatchBodyNormalizer::class,
        
        \Github\Model\GistsGistIdPatchBodyFilesItem::class => \Github\Normalizer\GistsGistIdPatchBodyFilesItemNormalizer::class,
        
        \Github\Model\GistsPostBody::class => \Github\Normalizer\GistsPostBodyNormalizer::class,
        
        \Github\Model\GistsPostBodyFilesItem::class => \Github\Normalizer\GistsPostBodyFilesItemNormalizer::class,
        
        \Github\Model\GistsGistIdCommentsPostBody::class => \Github\Normalizer\GistsGistIdCommentsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitRefsRefPatchBody::class => \Github\Normalizer\ReposOwnerRepoGitRefsRefPatchBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitCommitsPostBody::class => \Github\Normalizer\ReposOwnerRepoGitCommitsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitCommitsPostBodyAuthor::class => \Github\Normalizer\ReposOwnerRepoGitCommitsPostBodyAuthorNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitCommitsPostBodyCommitter::class => \Github\Normalizer\ReposOwnerRepoGitCommitsPostBodyCommitterNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitTreesPostBody::class => \Github\Normalizer\ReposOwnerRepoGitTreesPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitTreesPostBodyTreeItem::class => \Github\Normalizer\ReposOwnerRepoGitTreesPostBodyTreeItemNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitRefsPostBody::class => \Github\Normalizer\ReposOwnerRepoGitRefsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitTagsPostBody::class => \Github\Normalizer\ReposOwnerRepoGitTagsPostBodyNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitTagsPostBodyTagger::class => \Github\Normalizer\ReposOwnerRepoGitTagsPostBodyTaggerNormalizer::class,
        
        \Github\Model\ReposOwnerRepoGitBlobsPostBody::class => \Github\Normalizer\ReposOwnerRepoGitBlobsPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Github\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Github\Model\SimpleUser::class => false,
            \Github\Model\MinimalRepository::class => false,
            \Github\Model\MinimalRepositoryOwner::class => false,
            \Github\Model\MinimalRepositoryPermissions::class => false,
            \Github\Model\MinimalRepositoryLicense::class => false,
            \Github\Model\LicenseSimple::class => false,
            \Github\Model\Repository::class => false,
            \Github\Model\RepositoryLicense::class => false,
            \Github\Model\RepositoryPermissions::class => false,
            \Github\Model\RepositoryOwner::class => false,
            \Github\Model\RepositoryTemplateRepository::class => false,
            \Github\Model\RepositoryTemplateRepositoryOwner::class => false,
            \Github\Model\RepositoryTemplateRepositoryPermissions::class => false,
            \Github\Model\BasicError::class => false,
            \Github\Model\ValidationError::class => false,
            \Github\Model\ValidationErrorErrorsItem::class => false,
            \Github\Model\TeamSimple::class => false,
            \Github\Model\Team::class => false,
            \Github\Model\TeamParent::class => false,
            \Github\Model\BranchShort::class => false,
            \Github\Model\BranchShortCommit::class => false,
            \Github\Model\ContentTraffic::class => false,
            \Github\Model\ValidationErrorSimple::class => false,
            \Github\Model\Integration::class => false,
            \Github\Model\IntegrationOwner::class => false,
            \Github\Model\IntegrationPermissions::class => false,
            \Github\Model\Deployment::class => false,
            \Github\Model\DeploymentPayload::class => false,
            \Github\Model\DeploymentCreator::class => false,
            \Github\Model\DeploymentPerformedViaGithubApp::class => false,
            \Github\Model\ReleaseAsset::class => false,
            \Github\Model\ReleaseAssetUploader::class => false,
            \Github\Model\ContentTree::class => false,
            \Github\Model\ContentTreeEntriesItem::class => false,
            \Github\Model\ContentTreeEntriesItemLinks::class => false,
            \Github\Model\ContentTreeLinks::class => false,
            \Github\Model\ContentDirectoryItem::class => false,
            \Github\Model\ContentDirectoryItemLinks::class => false,
            \Github\Model\ContentFile::class => false,
            \Github\Model\ContentFileLinks::class => false,
            \Github\Model\ContentSymlink::class => false,
            \Github\Model\ContentSymlinkLinks::class => false,
            \Github\Model\ContentSubmodule::class => false,
            \Github\Model\ContentSubmoduleLinks::class => false,
            \Github\Model\FileCommit::class => false,
            \Github\Model\FileCommitContent::class => false,
            \Github\Model\FileCommitContentLinks::class => false,
            \Github\Model\FileCommitCommit::class => false,
            \Github\Model\FileCommitCommitAuthor::class => false,
            \Github\Model\FileCommitCommitCommitter::class => false,
            \Github\Model\FileCommitCommitTree::class => false,
            \Github\Model\FileCommitCommitParentsItem::class => false,
            \Github\Model\FileCommitCommitVerification::class => false,
            \Github\Model\Topic::class => false,
            \Github\Model\CodeOfConductSimple::class => false,
            \Github\Model\CommunityHealthFile::class => false,
            \Github\Model\CommunityProfile::class => false,
            \Github\Model\CommunityProfileFiles::class => false,
            \Github\Model\CommunityProfileFilesCodeOfConduct::class => false,
            \Github\Model\CommunityProfileFilesLicense::class => false,
            \Github\Model\CommunityProfileFilesContributing::class => false,
            \Github\Model\CommunityProfileFilesReadme::class => false,
            \Github\Model\CommunityProfileFilesIssueTemplate::class => false,
            \Github\Model\CommunityProfileFilesPullRequestTemplate::class => false,
            \Github\Model\PagesSourceHash::class => false,
            \Github\Model\Page::class => false,
            \Github\Model\ScimError::class => false,
            \Github\Model\ProtectedBranchPullRequestReview::class => false,
            \Github\Model\ProtectedBranchPullRequestReviewDismissalRestrictions::class => false,
            \Github\Model\ReferrerTraffic::class => false,
            \Github\Model\Status::class => false,
            \Github\Model\GitUser::class => false,
            \Github\Model\Verification::class => false,
            \Github\Model\Commit::class => false,
            \Github\Model\CommitCommit::class => false,
            \Github\Model\CommitCommitAuthor::class => false,
            \Github\Model\CommitCommitCommitter::class => false,
            \Github\Model\CommitCommitTree::class => false,
            \Github\Model\CommitAuthor::class => false,
            \Github\Model\CommitCommitter::class => false,
            \Github\Model\CommitParentsItem::class => false,
            \Github\Model\CommitStats::class => false,
            \Github\Model\CommitFilesItem::class => false,
            \Github\Model\DiffEntry::class => false,
            \Github\Model\CommitComparison::class => false,
            \Github\Model\Milestone::class => false,
            \Github\Model\MilestoneCreator::class => false,
            \Github\Model\Link::class => false,
            \Github\Model\PullRequestSimple::class => false,
            \Github\Model\PullRequestSimpleUser::class => false,
            \Github\Model\PullRequestSimpleLabelsItem::class => false,
            \Github\Model\PullRequestSimpleMilestone::class => false,
            \Github\Model\PullRequestSimpleAssignee::class => false,
            \Github\Model\PullRequestSimpleHead::class => false,
            \Github\Model\PullRequestSimpleHeadUser::class => false,
            \Github\Model\PullRequestSimpleBase::class => false,
            \Github\Model\PullRequestSimpleBaseUser::class => false,
            \Github\Model\PullRequestSimpleLinks::class => false,
            \Github\Model\ProtectedBranchAdminEnforced::class => false,
            \Github\Model\DeploymentStatus::class => false,
            \Github\Model\DeploymentStatusCreator::class => false,
            \Github\Model\DeploymentStatusPerformedViaGithubApp::class => false,
            \Github\Model\BranchRestrictionPolicy::class => false,
            \Github\Model\BranchRestrictionPolicyUsersItem::class => false,
            \Github\Model\BranchRestrictionPolicyTeamsItem::class => false,
            \Github\Model\BranchRestrictionPolicyAppsItem::class => false,
            \Github\Model\BranchRestrictionPolicyAppsItemOwner::class => false,
            \Github\Model\BranchRestrictionPolicyAppsItemPermissions::class => false,
            \Github\Model\BranchProtection::class => false,
            \Github\Model\BranchProtectionRequiredStatusChecks::class => false,
            \Github\Model\BranchProtectionRequiredLinearHistory::class => false,
            \Github\Model\BranchProtectionAllowForcePushes::class => false,
            \Github\Model\BranchProtectionAllowDeletions::class => false,
            \Github\Model\ShortBranch::class => false,
            \Github\Model\ShortBranchCommit::class => false,
            \Github\Model\RepositoryInvitation::class => false,
            \Github\Model\RepositoryInvitationInvitee::class => false,
            \Github\Model\RepositoryInvitationInviter::class => false,
            \Github\Model\BranchWithProtection::class => false,
            \Github\Model\BranchWithProtectionLinks::class => false,
            \Github\Model\DeployKey::class => false,
            \Github\Model\PageBuild::class => false,
            \Github\Model\PageBuildError::class => false,
            \Github\Model\PageBuildPusher::class => false,
            \Github\Model\Traffic::class => false,
            \Github\Model\CloneTraffic::class => false,
            \Github\Model\HookResponse::class => false,
            \Github\Model\Hook::class => false,
            \Github\Model\HookConfig::class => false,
            \Github\Model\Release::class => false,
            \Github\Model\StatusCheckPolicy::class => false,
            \Github\Model\FullRepository::class => false,
            \Github\Model\FullRepositoryOwner::class => false,
            \Github\Model\FullRepositoryPermissions::class => false,
            \Github\Model\FullRepositoryTemplateRepository::class => false,
            \Github\Model\FullRepositoryLicense::class => false,
            \Github\Model\FullRepositoryOrganization::class => false,
            \Github\Model\ProtectedBranch::class => false,
            \Github\Model\ProtectedBranchRequiredPullRequestReviews::class => false,
            \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class => false,
            \Github\Model\ProtectedBranchRequiredSignatures::class => false,
            \Github\Model\ProtectedBranchEnforceAdmins::class => false,
            \Github\Model\ProtectedBranchRequiredLinearHistory::class => false,
            \Github\Model\ProtectedBranchAllowForcePushes::class => false,
            \Github\Model\ProtectedBranchAllowDeletions::class => false,
            \Github\Model\Tag::class => false,
            \Github\Model\TagCommit::class => false,
            \Github\Model\CommitActivity::class => false,
            \Github\Model\PageBuildStatus::class => false,
            \Github\Model\ViewTraffic::class => false,
            \Github\Model\ReactionRollup::class => false,
            \Github\Model\CommitComment::class => false,
            \Github\Model\CommitCommentUser::class => false,
            \Github\Model\ParticipationStats::class => false,
            \Github\Model\SimpleCommit::class => false,
            \Github\Model\SimpleCommitAuthor::class => false,
            \Github\Model\SimpleCommitCommitter::class => false,
            \Github\Model\SimpleCommitStatus::class => false,
            \Github\Model\CombinedCommitStatus::class => false,
            \Github\Model\ContributorActivity::class => false,
            \Github\Model\ContributorActivityAuthor::class => false,
            \Github\Model\ContributorActivityWeeksItem::class => false,
            \Github\Model\Contributor::class => false,
            \Github\Model\Collaborator::class => false,
            \Github\Model\CollaboratorPermissions::class => false,
            \Github\Model\RepositoryCollaboratorPermission::class => false,
            \Github\Model\RepositoryCollaboratorPermissionUser::class => false,
            \Github\Model\ScimUser::class => false,
            \Github\Model\ScimUserName::class => false,
            \Github\Model\ScimUserEmailsItem::class => false,
            \Github\Model\ScimUserMeta::class => false,
            \Github\Model\ScimUserOperationsItem::class => false,
            \Github\Model\ScimUserGroupsItem::class => false,
            \Github\Model\ScimUserList::class => false,
            \Github\Model\Migration::class => false,
            \Github\Model\MigrationOwner::class => false,
            \Github\Model\PorterLargeFile::class => false,
            \Github\Model\Import::class => false,
            \Github\Model\ImportProjectChoicesItem::class => false,
            \Github\Model\PorterAuthor::class => false,
            \Github\Model\InteractionLimit::class => false,
            \Github\Model\LicenseContent::class => false,
            \Github\Model\LicenseContentLinks::class => false,
            \Github\Model\LicenseContentLicense::class => false,
            \Github\Model\License::class => false,
            \Github\Model\RepositorySubscription::class => false,
            \Github\Model\Actor::class => false,
            \Github\Model\IssueSimple::class => false,
            \Github\Model\IssueSimpleUser::class => false,
            \Github\Model\IssueSimpleLabelsItem::class => false,
            \Github\Model\IssueSimpleAssignee::class => false,
            \Github\Model\IssueSimpleMilestone::class => false,
            \Github\Model\IssueSimplePullRequest::class => false,
            \Github\Model\IssueSimplePerformedViaGithubApp::class => false,
            \Github\Model\IssueComment::class => false,
            \Github\Model\IssueCommentUser::class => false,
            \Github\Model\IssueCommentPerformedViaGithubApp::class => false,
            \Github\Model\Event::class => false,
            \Github\Model\EventRepo::class => false,
            \Github\Model\EventPayload::class => false,
            \Github\Model\EventPayloadPagesItem::class => false,
            \Github\Model\Thread::class => false,
            \Github\Model\ThreadSubject::class => false,
            \Github\Model\LinkWithType::class => false,
            \Github\Model\Feed::class => false,
            \Github\Model\FeedLinks::class => false,
            \Github\Model\StarredRepository::class => false,
            \Github\Model\ThreadSubscription::class => false,
            \Github\Model\Stargazer::class => false,
            \Github\Model\StargazerUser::class => false,
            \Github\Model\CheckAnnotation::class => false,
            \Github\Model\PullRequestMinimal::class => false,
            \Github\Model\PullRequestMinimalHead::class => false,
            \Github\Model\PullRequestMinimalHeadRepo::class => false,
            \Github\Model\PullRequestMinimalBase::class => false,
            \Github\Model\PullRequestMinimalBaseRepo::class => false,
            \Github\Model\CheckSuite::class => false,
            \Github\Model\CheckSuiteApp::class => false,
            \Github\Model\CheckRun::class => false,
            \Github\Model\CheckRunOutput::class => false,
            \Github\Model\CheckRunCheckSuite::class => false,
            \Github\Model\CheckRunApp::class => false,
            \Github\Model\CheckSuitePreference::class => false,
            \Github\Model\CheckSuitePreferencePreferences::class => false,
            \Github\Model\CheckSuitePreferencePreferencesAutoTriggerChecksItem::class => false,
            \Github\Model\Project::class => false,
            \Github\Model\ProjectCreator::class => false,
            \Github\Model\ProjectPermissions::class => false,
            \Github\Model\ProjectCard::class => false,
            \Github\Model\ProjectCardCreator::class => false,
            \Github\Model\ProjectColumn::class => false,
            \Github\Model\Reaction::class => false,
            \Github\Model\ReactionUser::class => false,
            \Github\Model\ApiOverview::class => false,
            \Github\Model\ApiOverviewSshKeyFingerprints::class => false,
            \Github\Model\CredentialAuthorization::class => false,
            \Github\Model\OrganizationSimple::class => false,
            \Github\Model\OrgMembership::class => false,
            \Github\Model\OrgMembershipUser::class => false,
            \Github\Model\OrgMembershipPermissions::class => false,
            \Github\Model\OrgHook::class => false,
            \Github\Model\OrgHookConfig::class => false,
            \Github\Model\OrganizationFull::class => false,
            \Github\Model\OrganizationFullPlan::class => false,
            \Github\Model\Enterprise::class => false,
            \Github\Model\Installation::class => false,
            \Github\Model\InstallationPermissions::class => false,
            \Github\Model\InstallationSuspendedBy::class => false,
            \Github\Model\OrganizationInvitation::class => false,
            \Github\Model\SearchResultTextMatchesItem::class => false,
            \Github\Model\SearchResultTextMatchesItemMatchesItem::class => false,
            \Github\Model\CodeSearchResultItem::class => false,
            \Github\Model\LabelSearchResultItem::class => false,
            \Github\Model\UserSearchResultItem::class => false,
            \Github\Model\CommitSearchResultItem::class => false,
            \Github\Model\CommitSearchResultItemCommit::class => false,
            \Github\Model\CommitSearchResultItemCommitAuthor::class => false,
            \Github\Model\CommitSearchResultItemCommitCommitter::class => false,
            \Github\Model\CommitSearchResultItemCommitTree::class => false,
            \Github\Model\CommitSearchResultItemAuthor::class => false,
            \Github\Model\CommitSearchResultItemCommitter::class => false,
            \Github\Model\CommitSearchResultItemParentsItem::class => false,
            \Github\Model\IssueSearchResultItem::class => false,
            \Github\Model\IssueSearchResultItemUser::class => false,
            \Github\Model\IssueSearchResultItemLabelsItem::class => false,
            \Github\Model\IssueSearchResultItemAssignee::class => false,
            \Github\Model\IssueSearchResultItemMilestone::class => false,
            \Github\Model\IssueSearchResultItemPullRequest::class => false,
            \Github\Model\IssueSearchResultItemPerformedViaGithubApp::class => false,
            \Github\Model\RepoSearchResultItem::class => false,
            \Github\Model\RepoSearchResultItemOwner::class => false,
            \Github\Model\RepoSearchResultItemLicense::class => false,
            \Github\Model\RepoSearchResultItemPermissions::class => false,
            \Github\Model\TopicSearchResultItem::class => false,
            \Github\Model\TopicSearchResultItemRelatedItem::class => false,
            \Github\Model\TopicSearchResultItemRelatedItemTopicRelation::class => false,
            \Github\Model\TopicSearchResultItemAliasesItem::class => false,
            \Github\Model\TopicSearchResultItemAliasesItemTopicRelation::class => false,
            \Github\Model\ApplicationGrant::class => false,
            \Github\Model\ApplicationGrantApp::class => false,
            \Github\Model\ApplicationGrantUser::class => false,
            \Github\Model\ScopedInstallation::class => false,
            \Github\Model\Authorization::class => false,
            \Github\Model\AuthorizationApp::class => false,
            \Github\Model\AuthorizationUser::class => false,
            \Github\Model\AuthorizationInstallation::class => false,
            \Github\Model\CodeOfConduct::class => false,
            \Github\Model\GpgKey::class => false,
            \Github\Model\GpgKeyEmailsItem::class => false,
            \Github\Model\GpgKeySubkeysItem::class => false,
            \Github\Model\Key::class => false,
            \Github\Model\PrivateUser::class => false,
            \Github\Model\PrivateUserPlan::class => false,
            \Github\Model\PublicUser::class => false,
            \Github\Model\PublicUserPlan::class => false,
            \Github\Model\Hovercard::class => false,
            \Github\Model\HovercardContextsItem::class => false,
            \Github\Model\KeySimple::class => false,
            \Github\Model\Workflow::class => false,
            \Github\Model\Runner::class => false,
            \Github\Model\RunnerApplication::class => false,
            \Github\Model\Artifact::class => false,
            \Github\Model\ActionsSecret::class => false,
            \Github\Model\OrganizationActionsSecret::class => false,
            \Github\Model\WorkflowUsage::class => false,
            \Github\Model\WorkflowUsageBillable::class => false,
            \Github\Model\WorkflowUsageBillableUBUNTU::class => false,
            \Github\Model\WorkflowUsageBillableMACOS::class => false,
            \Github\Model\WorkflowUsageBillableWINDOWS::class => false,
            \Github\Model\AuthenticationToken::class => false,
            \Github\Model\Job::class => false,
            \Github\Model\JobStepsItem::class => false,
            \Github\Model\WorkflowRun::class => false,
            \Github\Model\WorkflowRunUsage::class => false,
            \Github\Model\WorkflowRunUsageBillable::class => false,
            \Github\Model\WorkflowRunUsageBillableUBUNTU::class => false,
            \Github\Model\WorkflowRunUsageBillableMACOS::class => false,
            \Github\Model\WorkflowRunUsageBillableWINDOWS::class => false,
            \Github\Model\ActionsPublicKey::class => false,
            \Github\Model\TeamRepository::class => false,
            \Github\Model\TeamRepositoryLicense::class => false,
            \Github\Model\TeamRepositoryPermissions::class => false,
            \Github\Model\TeamRepositoryOwner::class => false,
            \Github\Model\TeamRepositoryTemplateRepository::class => false,
            \Github\Model\TeamRepositoryTemplateRepositoryOwner::class => false,
            \Github\Model\TeamRepositoryTemplateRepositoryPermissions::class => false,
            \Github\Model\TeamDiscussionComment::class => false,
            \Github\Model\TeamDiscussionCommentAuthor::class => false,
            \Github\Model\TeamMembership::class => false,
            \Github\Model\TeamDiscussion::class => false,
            \Github\Model\TeamDiscussionAuthor::class => false,
            \Github\Model\Organization::class => false,
            \Github\Model\OrganizationPlan::class => false,
            \Github\Model\TeamFull::class => false,
            \Github\Model\TeamFullParent::class => false,
            \Github\Model\GroupMapping::class => false,
            \Github\Model\GroupMappingGroupsItem::class => false,
            \Github\Model\TeamProject::class => false,
            \Github\Model\TeamProjectPermissions::class => false,
            \Github\Model\PullRequestReviewComment::class => false,
            \Github\Model\PullRequestReviewCommentLinks::class => false,
            \Github\Model\PullRequestReviewCommentLinksSelf::class => false,
            \Github\Model\PullRequestReviewCommentLinksHtml::class => false,
            \Github\Model\PullRequestReviewCommentLinksPullRequest::class => false,
            \Github\Model\PullRequestReview::class => false,
            \Github\Model\PullRequestReviewUser::class => false,
            \Github\Model\PullRequestReviewLinks::class => false,
            \Github\Model\PullRequestReviewLinksHtml::class => false,
            \Github\Model\PullRequestReviewLinksPullRequest::class => false,
            \Github\Model\PullRequestReviewRequest::class => false,
            \Github\Model\PullRequestReviewRequestUsersItem::class => false,
            \Github\Model\PullRequestReviewRequestTeamsItem::class => false,
            \Github\Model\PullRequest::class => false,
            \Github\Model\PullRequestUser::class => false,
            \Github\Model\PullRequestLabelsItem::class => false,
            \Github\Model\PullRequestMilestone::class => false,
            \Github\Model\PullRequestAssignee::class => false,
            \Github\Model\PullRequestHead::class => false,
            \Github\Model\PullRequestHeadRepo::class => false,
            \Github\Model\PullRequestHeadRepoOwner::class => false,
            \Github\Model\PullRequestHeadRepoPermissions::class => false,
            \Github\Model\PullRequestHeadRepoLicense::class => false,
            \Github\Model\PullRequestHeadUser::class => false,
            \Github\Model\PullRequestBase::class => false,
            \Github\Model\PullRequestBaseRepo::class => false,
            \Github\Model\PullRequestBaseRepoOwner::class => false,
            \Github\Model\PullRequestBaseRepoPermissions::class => false,
            \Github\Model\PullRequestBaseRepoLicense::class => false,
            \Github\Model\PullRequestBaseUser::class => false,
            \Github\Model\PullRequestLinks::class => false,
            \Github\Model\PullRequestMergedBy::class => false,
            \Github\Model\PullRequestMergeResult::class => false,
            \Github\Model\ReviewComment::class => false,
            \Github\Model\ReviewCommentUser::class => false,
            \Github\Model\ReviewCommentLinks::class => false,
            \Github\Model\CodeScanningAlert::class => false,
            \Github\Model\CodeScanningAlertClosedBy::class => false,
            \Github\Model\Issue::class => false,
            \Github\Model\IssueUser::class => false,
            \Github\Model\IssueAssignee::class => false,
            \Github\Model\IssueMilestone::class => false,
            \Github\Model\IssuePullRequest::class => false,
            \Github\Model\IssueClosedBy::class => false,
            \Github\Model\IssuePerformedViaGithubApp::class => false,
            \Github\Model\Label::class => false,
            \Github\Model\IssueEventForIssue::class => false,
            \Github\Model\IssueEventLabel::class => false,
            \Github\Model\IssueEventDismissedReview::class => false,
            \Github\Model\IssueEventMilestone::class => false,
            \Github\Model\IssueEventProjectCard::class => false,
            \Github\Model\IssueEventRename::class => false,
            \Github\Model\IssueEvent::class => false,
            \Github\Model\IssueEventActor::class => false,
            \Github\Model\IssueEventAssignee::class => false,
            \Github\Model\IssueEventAssigner::class => false,
            \Github\Model\IssueEventReviewRequester::class => false,
            \Github\Model\IssueEventRequestedReviewer::class => false,
            \Github\Model\MarketplaceListingPlan::class => false,
            \Github\Model\MarketplacePurchase::class => false,
            \Github\Model\MarketplacePurchaseMarketplacePendingChange::class => false,
            \Github\Model\MarketplacePurchaseMarketplacePurchase::class => false,
            \Github\Model\ContentReferenceAttachment::class => false,
            \Github\Model\InstallationToken::class => false,
            \Github\Model\InstallationTokenPermissions::class => false,
            \Github\Model\MarketplaceAccount::class => false,
            \Github\Model\UserMarketplacePurchase::class => false,
            \Github\Model\BaseGist::class => false,
            \Github\Model\BaseGistFilesItem::class => false,
            \Github\Model\BaseGistUser::class => false,
            \Github\Model\BaseGistOwner::class => false,
            \Github\Model\GistComment::class => false,
            \Github\Model\GistCommentUser::class => false,
            \Github\Model\GistSimple::class => false,
            \Github\Model\GistSimpleFilesItem::class => false,
            \Github\Model\GistFull::class => false,
            \Github\Model\GistFullforksItem::class => false,
            \Github\Model\GistFullforksItemUser::class => false,
            \Github\Model\GistFullhistoryItem::class => false,
            \Github\Model\GistFullhistoryItemUser::class => false,
            \Github\Model\GistFullhistoryItemChangeStatus::class => false,
            \Github\Model\GistFullforkOf::class => false,
            \Github\Model\GistCommit::class => false,
            \Github\Model\GistCommitUser::class => false,
            \Github\Model\GistCommitChangeStatus::class => false,
            \Github\Model\CombinedBillingUsage::class => false,
            \Github\Model\PackagesBillingUsage::class => false,
            \Github\Model\ActionsBillingUsage::class => false,
            \Github\Model\ActionsBillingUsageMinutesUsedBreakdown::class => false,
            \Github\Model\RateLimit::class => false,
            \Github\Model\RateLimitOverview::class => false,
            \Github\Model\RateLimitOverviewResources::class => false,
            \Github\Model\GitTree::class => false,
            \Github\Model\GitTreeTreeItem::class => false,
            \Github\Model\GitRef::class => false,
            \Github\Model\GitRefObject::class => false,
            \Github\Model\GitCommit::class => false,
            \Github\Model\GitCommitAuthor::class => false,
            \Github\Model\GitCommitCommitter::class => false,
            \Github\Model\GitCommitTree::class => false,
            \Github\Model\GitCommitParentsItem::class => false,
            \Github\Model\GitCommitVerification::class => false,
            \Github\Model\GitTag::class => false,
            \Github\Model\GitTagTagger::class => false,
            \Github\Model\GitTagObject::class => false,
            \Github\Model\ShortBlob::class => false,
            \Github\Model\Blob::class => false,
            \Github\Model\GitignoreTemplate::class => false,
            \Github\Model\ResponsePreviewHeaderMissing::class => false,
            \Github\Model\ResponseServiceUnavailable::class => false,
            \Github\Model\ResponseForbiddenGist::class => false,
            \Github\Model\ResponseForbiddenGistBlock::class => false,
            \Github\Model\OrgsOrgReposPostBody::class => false,
            \Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoContentsPathDeleteBody::class => false,
            \Github\Model\ReposOwnerRepoContentsPathDeleteBodyCommitter::class => false,
            \Github\Model\ReposOwnerRepoContentsPathDeleteBodyAuthor::class => false,
            \Github\Model\ReposOwnerRepoContentsPathPutBody::class => false,
            \Github\Model\ReposOwnerRepoContentsPathPutBodyCommitter::class => false,
            \Github\Model\ReposOwnerRepoContentsPathPutBodyAuthor::class => false,
            \Github\Model\ReposOwnerRepoTopicsPutBody::class => false,
            \Github\Model\ReposOwnerRepoDeploymentsPostBody::class => false,
            \Github\Model\ReposOwnerRepoDeploymentsPostResponse202::class => false,
            \Github\Model\ReposOwnerRepoDeploymentsPostResponse409::class => false,
            \Github\Model\ReposOwnerRepoPagesPostBody::class => false,
            \Github\Model\ReposOwnerRepoPagesPostBodySource::class => false,
            \Github\Model\ReposOwnerRepoPagesPutBody::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions::class => false,
            \Github\Model\ReposOwnerRepoKeysPostBody::class => false,
            \Github\Model\ReposOwnerRepoHooksHookIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoHooksHookIdPatchBodyConfig::class => false,
            \Github\Model\ReposOwnerRepoReleasesPostBody::class => false,
            \Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredStatusChecksPatchBody::class => false,
            \Github\Model\ReposOwnerRepoDeleteResponse403::class => false,
            \Github\Model\ReposOwnerRepoPatchBody::class => false,
            \Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredStatusChecks::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviews::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviewsDismissalRestrictions::class => false,
            \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions::class => false,
            \Github\Model\ReposOwnerRepoDispatchesPostBody::class => false,
            \Github\Model\ReposOwnerRepoTransferPostBody::class => false,
            \Github\Model\UserReposPostBody::class => false,
            \Github\Model\ReposOwnerRepoCollaboratorsUsernamePutBody::class => false,
            \Github\Model\ReposOwnerRepoForksPostBody::class => false,
            \Github\Model\ReposOwnerRepoCommentsCommentIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoHooksPostBody::class => false,
            \Github\Model\ReposOwnerRepoHooksPostBodyConfig::class => false,
            \Github\Model\ReposOwnerRepoCommitsCommitShaCommentsPostBody::class => false,
            \Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoStatusesShaPostBody::class => false,
            \Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody::class => false,
            \Github\Model\ReposOwnerRepoMergesPostBody::class => false,
            \Github\Model\ReposOwnerRepoMergesPostResponse404::class => false,
            \Github\Model\ReposOwnerRepoMergesPostResponse409::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBodyName::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersPostBody::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersPostBodyName::class => false,
            \Github\Model\ScimV2OrganizationsOrgUsersPostBodyEmailsItem::class => false,
            \Github\Model\OrgsOrgMigrationsPostBody::class => false,
            \Github\Model\ReposOwnerRepoImportPatchBody::class => false,
            \Github\Model\ReposOwnerRepoImportPutBody::class => false,
            \Github\Model\UserMigrationsPostBody::class => false,
            \Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoImportLfsPatchBody::class => false,
            \Github\Model\ReposOwnerRepoInteractionLimitsPutBody::class => false,
            \Github\Model\OrgsOrgInteractionLimitsPutBody::class => false,
            \Github\Model\ReposOwnerRepoSubscriptionPutBody::class => false,
            \Github\Model\ReposOwnerRepoNotificationsPutBody::class => false,
            \Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody::class => false,
            \Github\Model\NotificationsPutBody::class => false,
            \Github\Model\NotificationsPutResponse202::class => false,
            \Github\Model\ReposOwnerRepoCommitsRefCheckSuitesGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoCommitsRefCheckRunsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem::class => false,
            \Github\Model\ReposOwnerRepoCheckSuitesPostBody::class => false,
            \Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody::class => false,
            \Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsPostBody::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutput::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutputImagesItem::class => false,
            \Github\Model\ReposOwnerRepoCheckRunsPostBodyActionsItem::class => false,
            \Github\Model\MarkdownPostBody::class => false,
            \Github\Model\OrgsOrgProjectsPostBody::class => false,
            \Github\Model\ProjectsColumnsColumnIdMovesPostBody::class => false,
            \Github\Model\ProjectsColumnsColumnIdMovesPostResponse201::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdDeleteResponse403::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdPatchBody::class => false,
            \Github\Model\ProjectsColumnsColumnIdPatchBody::class => false,
            \Github\Model\ProjectsProjectIdDeleteResponse403::class => false,
            \Github\Model\ProjectsProjectIdPatchBody::class => false,
            \Github\Model\ProjectsProjectIdPatchResponse403::class => false,
            \Github\Model\ProjectsProjectIdColumnsPostBody::class => false,
            \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503::class => false,
            \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503ErrorsItem::class => false,
            \Github\Model\UserProjectsPostBody::class => false,
            \Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody::class => false,
            \Github\Model\ReposOwnerRepoProjectsPostBody::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdMovesPostBody::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse201::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403ErrorsItem::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503::class => false,
            \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503ErrorsItem::class => false,
            \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody::class => false,
            \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesCommentsCommentIdReactionsPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberReactionsPostBody::class => false,
            \Github\Model\ReposOwnerRepoPullsCommentsCommentIdReactionsPostBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberReactionsPostBody::class => false,
            \Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody::class => false,
            \Github\Model\GetResponse200::class => false,
            \Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422::class => false,
            \Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403::class => false,
            \Github\Model\UserMembershipsOrgsOrgPatchBody::class => false,
            \Github\Model\OrgsOrgMembershipsUsernamePutBody::class => false,
            \Github\Model\OrgsOrgHooksHookIdPatchBody::class => false,
            \Github\Model\OrgsOrgHooksHookIdPatchBodyConfig::class => false,
            \Github\Model\OrgsOrgPatchBody::class => false,
            \Github\Model\OrgsOrgInstallationsGetResponse200::class => false,
            \Github\Model\OrgsOrgInvitationsPostBody::class => false,
            \Github\Model\OrgsOrgHooksPostBody::class => false,
            \Github\Model\OrgsOrgHooksPostBodyConfig::class => false,
            \Github\Model\SearchCodeGetResponse200::class => false,
            \Github\Model\SearchLabelsGetResponse200::class => false,
            \Github\Model\SearchUsersGetResponse200::class => false,
            \Github\Model\SearchCommitsGetResponse200::class => false,
            \Github\Model\SearchIssuesGetResponse200::class => false,
            \Github\Model\SearchRepositoriesGetResponse200::class => false,
            \Github\Model\SearchTopicsGetResponse200::class => false,
            \Github\Model\AuthorizationsPostBody::class => false,
            \Github\Model\AuthorizationsClientsClientIdFingerprintPutBody::class => false,
            \Github\Model\AuthorizationsAuthorizationIdPatchBody::class => false,
            \Github\Model\AuthorizationsClientsClientIdPutBody::class => false,
            \Github\Model\UserGpgKeysPostBody::class => false,
            \Github\Model\UserKeysPostBody::class => false,
            \Github\Model\UserPatchBody::class => false,
            \Github\Model\UserEmailVisibilityPatchBody::class => false,
            \Github\Model\ReposOwnerRepoActionsWorkflowsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody::class => false,
            \Github\Model\OrgsOrgActionsRunnersGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsArtifactsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsSecretsGetResponse200::class => false,
            \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody::class => false,
            \Github\Model\OrgsOrgActionsSecretsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody::class => false,
            \Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsRunnersGetResponse200::class => false,
            \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200::class => false,
            \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesPutBody::class => false,
            \Github\Model\ReposOwnerRepoActionsRunsRunIdArtifactsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdRunsGetResponse200::class => false,
            \Github\Model\ReposOwnerRepoActionsRunsGetResponse200::class => false,
            \Github\Model\TeamsTeamIdMembersUsernamePutResponse422::class => false,
            \Github\Model\TeamsTeamIdMembersUsernamePutResponse422ErrorsItem::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody::class => false,
            \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody::class => false,
            \Github\Model\TeamsTeamIdReposOwnerRepoPutBody::class => false,
            \Github\Model\TeamsTeamIdMembershipsUsernamePutBody::class => false,
            \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422::class => false,
            \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422ErrorsItem::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsPostBody::class => false,
            \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberPatchBody::class => false,
            \Github\Model\TeamsTeamIdPatchBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsPostBody::class => false,
            \Github\Model\TeamsTeamIdTeamSyncGroupMappingsPatchBody::class => false,
            \Github\Model\TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberPatchBody::class => false,
            \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsPostBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberPatchBody::class => false,
            \Github\Model\TeamsTeamIdProjectsProjectIdPutBody::class => false,
            \Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422ErrorsItem::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugPatchBody::class => false,
            \Github\Model\OrgsOrgTeamsPostBody::class => false,
            \Github\Model\TeamsTeamIdDiscussionsPostBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody::class => false,
            \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem::class => false,
            \Github\Model\ReposOwnerRepoPullsCommentsCommentIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberPatchBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutResponse202::class => false,
            \Github\Model\ReposOwnerRepoPullsPostBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody::class => false,
            \Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdEventsPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberLockPutBody::class => false,
            \Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody::class => false,
            \Github\Model\ReposOwnerRepoMilestonesPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesCommentsCommentIdPatchBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody::class => false,
            \Github\Model\ReposOwnerRepoLabelsNamePatchBody::class => false,
            \Github\Model\ReposOwnerRepoLabelsPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPutBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody::class => false,
            \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody::class => false,
            \Github\Model\ApplicationsClientIdTokenDeleteBody::class => false,
            \Github\Model\ApplicationsClientIdTokenPatchBody::class => false,
            \Github\Model\ApplicationsClientIdTokenPostBody::class => false,
            \Github\Model\ContentReferencesContentReferenceIdAttachmentsPostBody::class => false,
            \Github\Model\UserInstallationsGetResponse200::class => false,
            \Github\Model\InstallationRepositoriesGetResponse200::class => false,
            \Github\Model\UserInstallationsInstallationIdRepositoriesGetResponse200::class => false,
            \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody::class => false,
            \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions::class => false,
            \Github\Model\ApplicationsClientIdTokensAccessTokenGetResponse200::class => false,
            \Github\Model\AppManifestsCodeConversionsPostResponse201::class => false,
            \Github\Model\ApplicationsClientIdGrantDeleteBody::class => false,
            \Github\Model\GistsGistIdStarGetResponse404::class => false,
            \Github\Model\GistsGistIdCommentsCommentIdPatchBody::class => false,
            \Github\Model\GistsGistIdPatchBody::class => false,
            \Github\Model\GistsGistIdPatchBodyFilesItem::class => false,
            \Github\Model\GistsPostBody::class => false,
            \Github\Model\GistsPostBodyFilesItem::class => false,
            \Github\Model\GistsGistIdCommentsPostBody::class => false,
            \Github\Model\ReposOwnerRepoGitRefsRefPatchBody::class => false,
            \Github\Model\ReposOwnerRepoGitCommitsPostBody::class => false,
            \Github\Model\ReposOwnerRepoGitCommitsPostBodyAuthor::class => false,
            \Github\Model\ReposOwnerRepoGitCommitsPostBodyCommitter::class => false,
            \Github\Model\ReposOwnerRepoGitTreesPostBody::class => false,
            \Github\Model\ReposOwnerRepoGitTreesPostBodyTreeItem::class => false,
            \Github\Model\ReposOwnerRepoGitRefsPostBody::class => false,
            \Github\Model\ReposOwnerRepoGitTagsPostBody::class => false,
            \Github\Model\ReposOwnerRepoGitTagsPostBodyTagger::class => false,
            \Github\Model\ReposOwnerRepoGitBlobsPostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}