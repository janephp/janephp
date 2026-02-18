<?php

namespace PicturePark\API\Normalizer;

use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
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
        
        \PicturePark\API\Model\BusinessProcess::class => \PicturePark\API\Normalizer\BusinessProcessNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessState::class => \PicturePark\API\Normalizer\BusinessProcessStateNormalizer::class,
        
        \PicturePark\API\Model\ErrorResponse::class => \PicturePark\API\Normalizer\ErrorResponseNormalizer::class,
        
        \PicturePark\API\Model\PictureparkValidationException::class => \PicturePark\API\Normalizer\PictureparkValidationExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkBusinessException::class => \PicturePark\API\Normalizer\PictureparkBusinessExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkException::class => \PicturePark\API\Normalizer\PictureparkExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkConflictException::class => \PicturePark\API\Normalizer\PictureparkConflictExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkTimeoutException::class => \PicturePark\API\Normalizer\PictureparkTimeoutExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkForbiddenException::class => \PicturePark\API\Normalizer\PictureparkForbiddenExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserEmailAlreadyExistsException::class => \PicturePark\API\Normalizer\UserEmailAlreadyExistsExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserRoleAssignedException::class => \PicturePark\API\Normalizer\UserRoleAssignedExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnableToDeleteUserRoleException::class => \PicturePark\API\Normalizer\UnableToDeleteUserRoleExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserNotFoundException::class => \PicturePark\API\Normalizer\UserNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserInactiveOrDeletedException::class => \PicturePark\API\Normalizer\UserInactiveOrDeletedExceptionNormalizer::class,
        
        \PicturePark\API\Model\InactiveOrDeletedUserRefusedAccessException::class => \PicturePark\API\Normalizer\InactiveOrDeletedUserRefusedAccessExceptionNormalizer::class,
        
        \PicturePark\API\Model\TermsOfServiceNotNewestException::class => \PicturePark\API\Normalizer\TermsOfServiceNotNewestExceptionNormalizer::class,
        
        \PicturePark\API\Model\IllegalAuthorizationStateTransitionException::class => \PicturePark\API\Normalizer\IllegalAuthorizationStateTransitionExceptionNormalizer::class,
        
        \PicturePark\API\Model\TermsOfServiceConsentRequiredException::class => \PicturePark\API\Normalizer\TermsOfServiceConsentRequiredExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserRolesNotFoundException::class => \PicturePark\API\Normalizer\UserRolesNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkNotFoundException::class => \PicturePark\API\Normalizer\PictureparkNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnauthorizedException::class => \PicturePark\API\Normalizer\UnauthorizedExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserUnlockDisallowedException::class => \PicturePark\API\Normalizer\UserUnlockDisallowedExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserAlreadyInRequestedLockStateException::class => \PicturePark\API\Normalizer\UserAlreadyInRequestedLockStateExceptionNormalizer::class,
        
        \PicturePark\API\Model\LoginUsingIncorrectIdentityProviderException::class => \PicturePark\API\Normalizer\LoginUsingIncorrectIdentityProviderExceptionNormalizer::class,
        
        \PicturePark\API\Model\IdentityProviderNotFoundException::class => \PicturePark\API\Normalizer\IdentityProviderNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserDoesNotSupportLocalLoginException::class => \PicturePark\API\Normalizer\UserDoesNotSupportLocalLoginExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserAttributeNotSynchronizableException::class => \PicturePark\API\Normalizer\UserAttributeNotSynchronizableExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnableToMapMultipleClaimTypesIntoSameAttributeException::class => \PicturePark\API\Normalizer\UnableToMapMultipleClaimTypesIntoSameAttributeExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnableToChangeMappedUserRolesForFederatedUserException::class => \PicturePark\API\Normalizer\UnableToChangeMappedUserRolesForFederatedUserExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnableToDeleteDefaultUserRoleException::class => \PicturePark\API\Normalizer\UnableToDeleteDefaultUserRoleExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnableToDeleteUserRoleReferencedInIdentityProviderGroupMappingException::class => \PicturePark\API\Normalizer\UnableToDeleteUserRoleReferencedInIdentityProviderGroupMappingExceptionNormalizer::class,
        
        \PicturePark\API\Model\UserPropertyChangeNotSupportedException::class => \PicturePark\API\Normalizer\UserPropertyChangeNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\RenderingException::class => \PicturePark\API\Normalizer\RenderingExceptionNormalizer::class,
        
        \PicturePark\API\Model\FormatNotApplicableForRenderingException::class => \PicturePark\API\Normalizer\FormatNotApplicableForRenderingExceptionNormalizer::class,
        
        \PicturePark\API\Model\ServiceProviderDeleteException::class => \PicturePark\API\Normalizer\ServiceProviderDeleteExceptionNormalizer::class,
        
        \PicturePark\API\Model\ServiceProviderCreateException::class => \PicturePark\API\Normalizer\ServiceProviderCreateExceptionNormalizer::class,
        
        \PicturePark\API\Model\ServiceProviderNotFoundException::class => \PicturePark\API\Normalizer\ServiceProviderNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\DocumentVersionNotFoundException::class => \PicturePark\API\Normalizer\DocumentVersionNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\DefaultChannelDeleteException::class => \PicturePark\API\Normalizer\DefaultChannelDeleteExceptionNormalizer::class,
        
        \PicturePark\API\Model\ChannelsNotFoundException::class => \PicturePark\API\Normalizer\ChannelsNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\SuperAdminRolesNotAssignableToChannelException::class => \PicturePark\API\Normalizer\SuperAdminRolesNotAssignableToChannelExceptionNormalizer::class,
        
        \PicturePark\API\Model\ElasticVersionUpdateException::class => \PicturePark\API\Normalizer\ElasticVersionUpdateExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidVersionException::class => \PicturePark\API\Normalizer\InvalidVersionExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentNotDeactivatedException::class => \PicturePark\API\Normalizer\EnvironmentNotDeactivatedExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentNotFoundException::class => \PicturePark\API\Normalizer\EnvironmentNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentDeactivationException::class => \PicturePark\API\Normalizer\EnvironmentDeactivationExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerClonesNotAcceptedException::class => \PicturePark\API\Normalizer\CustomerClonesNotAcceptedExceptionNormalizer::class,
        
        \PicturePark\API\Model\ShareNotFoundException::class => \PicturePark\API\Normalizer\ShareNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\ShareByTokenNotFoundException::class => \PicturePark\API\Normalizer\ShareByTokenNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\TokenGenerationException::class => \PicturePark\API\Normalizer\TokenGenerationExceptionNormalizer::class,
        
        \PicturePark\API\Model\ShareExpiredException::class => \PicturePark\API\Normalizer\ShareExpiredExceptionNormalizer::class,
        
        \PicturePark\API\Model\ShareSizeLimitExceededException::class => \PicturePark\API\Normalizer\ShareSizeLimitExceededExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputIdNotFoundException::class => \PicturePark\API\Normalizer\OutputIdNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputNotFoundException::class => \PicturePark\API\Normalizer\OutputNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnableToCreateOrModifyStaticOutputFormatException::class => \PicturePark\API\Normalizer\UnableToCreateOrModifyStaticOutputFormatExceptionNormalizer::class,
        
        \PicturePark\API\Model\NotSupportedFileMappingException::class => \PicturePark\API\Normalizer\NotSupportedFileMappingExceptionNormalizer::class,
        
        \PicturePark\API\Model\NotSupportedFileMappingForDynamicFormatException::class => \PicturePark\API\Normalizer\NotSupportedFileMappingForDynamicFormatExceptionNormalizer::class,
        
        \PicturePark\API\Model\NotSupportedFileExtensionException::class => \PicturePark\API\Normalizer\NotSupportedFileExtensionExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateOutputFormatIdException::class => \PicturePark\API\Normalizer\DuplicateOutputFormatIdExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatResizingNotSupportedException::class => \PicturePark\API\Normalizer\OutputFormatResizingNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputBackupNotRequestedException::class => \PicturePark\API\Normalizer\OutputBackupNotRequestedExceptionNormalizer::class,
        
        \PicturePark\API\Model\DownloadLinkExpiredException::class => \PicturePark\API\Normalizer\DownloadLinkExpiredExceptionNormalizer::class,
        
        \PicturePark\API\Model\RenderingNotAwaitedException::class => \PicturePark\API\Normalizer\RenderingNotAwaitedExceptionNormalizer::class,
        
        \PicturePark\API\Model\LeaseNotAcquiredException::class => \PicturePark\API\Normalizer\LeaseNotAcquiredExceptionNormalizer::class,
        
        \PicturePark\API\Model\OperationInProgressException::class => \PicturePark\API\Normalizer\OperationInProgressExceptionNormalizer::class,
        
        \PicturePark\API\Model\RetryException::class => \PicturePark\API\Normalizer\RetryExceptionNormalizer::class,
        
        \PicturePark\API\Model\OwnerTokenNotFoundException::class => \PicturePark\API\Normalizer\OwnerTokenNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidStateException::class => \PicturePark\API\Normalizer\InvalidStateExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkArgumentNullException::class => \PicturePark\API\Normalizer\PictureparkArgumentNullExceptionNormalizer::class,
        
        \PicturePark\API\Model\ObjectTypeMismatchException::class => \PicturePark\API\Normalizer\ObjectTypeMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidStateTransitionException::class => \PicturePark\API\Normalizer\InvalidStateTransitionExceptionNormalizer::class,
        
        \PicturePark\API\Model\FailedToLockException::class => \PicturePark\API\Normalizer\FailedToLockExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkOperationCanceledException::class => \PicturePark\API\Normalizer\PictureparkOperationCanceledExceptionNormalizer::class,
        
        \PicturePark\API\Model\PictureparkApplicationException::class => \PicturePark\API\Normalizer\PictureparkApplicationExceptionNormalizer::class,
        
        \PicturePark\API\Model\MissingCustomerDefaultLanguageException::class => \PicturePark\API\Normalizer\MissingCustomerDefaultLanguageExceptionNormalizer::class,
        
        \PicturePark\API\Model\PartialOperationNotSupportedException::class => \PicturePark\API\Normalizer\PartialOperationNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContractMismatchException::class => \PicturePark\API\Normalizer\ContractMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidArgumentException::class => \PicturePark\API\Normalizer\InvalidArgumentExceptionNormalizer::class,
        
        \PicturePark\API\Model\ArgumentRangeException::class => \PicturePark\API\Normalizer\ArgumentRangeExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnknownException::class => \PicturePark\API\Normalizer\UnknownExceptionNormalizer::class,
        
        \PicturePark\API\Model\OwnerTokenInUseException::class => \PicturePark\API\Normalizer\OwnerTokenInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidValueFormatException::class => \PicturePark\API\Normalizer\InvalidValueFormatExceptionNormalizer::class,
        
        \PicturePark\API\Model\ItemIdDuplicatedException::class => \PicturePark\API\Normalizer\ItemIdDuplicatedExceptionNormalizer::class,
        
        \PicturePark\API\Model\RequestSizeLimitExceededException::class => \PicturePark\API\Normalizer\RequestSizeLimitExceededExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerViolationException::class => \PicturePark\API\Normalizer\CustomerViolationExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerAliasNotFoundException::class => \PicturePark\API\Normalizer\CustomerAliasNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerAliasInUseException::class => \PicturePark\API\Normalizer\CustomerAliasInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerNotDeactivatedException::class => \PicturePark\API\Normalizer\CustomerNotDeactivatedExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerDeactivationException::class => \PicturePark\API\Normalizer\CustomerDeactivationExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerHostNotFoundException::class => \PicturePark\API\Normalizer\CustomerHostNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerNotFoundException::class => \PicturePark\API\Normalizer\CustomerNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerNotActiveException::class => \PicturePark\API\Normalizer\CustomerNotActiveExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerBoostValuesInvalidException::class => \PicturePark\API\Normalizer\CustomerBoostValuesInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\SnapshotRetentionTimeTooShortException::class => \PicturePark\API\Normalizer\SnapshotRetentionTimeTooShortExceptionNormalizer::class,
        
        \PicturePark\API\Model\ReshardIndexNotAllowedException::class => \PicturePark\API\Normalizer\ReshardIndexNotAllowedExceptionNormalizer::class,
        
        \PicturePark\API\Model\ReshardNumberOfShardsInvalidException::class => \PicturePark\API\Normalizer\ReshardNumberOfShardsInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\ReshardNumberOfRoutingShardsInvalidException::class => \PicturePark\API\Normalizer\ReshardNumberOfRoutingShardsInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\ReshardNumberOfShardsInvalidForExistingRoutingShardsException::class => \PicturePark\API\Normalizer\ReshardNumberOfShardsInvalidForExistingRoutingShardsExceptionNormalizer::class,
        
        \PicturePark\API\Model\ConfigurationIndexNotFoundException::class => \PicturePark\API\Normalizer\ConfigurationIndexNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateSearchIndexDocException::class => \PicturePark\API\Normalizer\DuplicateSearchIndexDocExceptionNormalizer::class,
        
        \PicturePark\API\Model\SearchIndexDocNotFoundException::class => \PicturePark\API\Normalizer\SearchIndexDocNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\IndexDocumentNotFoundException::class => \PicturePark\API\Normalizer\IndexDocumentNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateAliasException::class => \PicturePark\API\Normalizer\DuplicateAliasExceptionNormalizer::class,
        
        \PicturePark\API\Model\SearchIndexNotFoundException::class => \PicturePark\API\Normalizer\SearchIndexNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\DefaultSearchIndexDeleteException::class => \PicturePark\API\Normalizer\DefaultSearchIndexDeleteExceptionNormalizer::class,
        
        \PicturePark\API\Model\SearchIndexInUseException::class => \PicturePark\API\Normalizer\SearchIndexInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\IndexException::class => \PicturePark\API\Normalizer\IndexExceptionNormalizer::class,
        
        \PicturePark\API\Model\IndexMappingException::class => \PicturePark\API\Normalizer\IndexMappingExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicatedSearchBehaviorException::class => \PicturePark\API\Normalizer\DuplicatedSearchBehaviorExceptionNormalizer::class,
        
        \PicturePark\API\Model\SearchStringLeadingWildcardException::class => \PicturePark\API\Normalizer\SearchStringLeadingWildcardExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateAggregatorException::class => \PicturePark\API\Normalizer\DuplicateAggregatorExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidDateTimeFormatException::class => \PicturePark\API\Normalizer\InvalidDateTimeFormatExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidSortFieldException::class => \PicturePark\API\Normalizer\InvalidSortFieldExceptionNormalizer::class,
        
        \PicturePark\API\Model\DocumentVersionConflictException::class => \PicturePark\API\Normalizer\DocumentVersionConflictExceptionNormalizer::class,
        
        \PicturePark\API\Model\RedisDatabaseExceededException::class => \PicturePark\API\Normalizer\RedisDatabaseExceededExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateDocumentException::class => \PicturePark\API\Normalizer\DuplicateDocumentExceptionNormalizer::class,
        
        \PicturePark\API\Model\ObjectStoreResponseException::class => \PicturePark\API\Normalizer\ObjectStoreResponseExceptionNormalizer::class,
        
        \PicturePark\API\Model\ObjectStoreException::class => \PicturePark\API\Normalizer\ObjectStoreExceptionNormalizer::class,
        
        \PicturePark\API\Model\QueryException::class => \PicturePark\API\Normalizer\QueryExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionOwnershipTransferException::class => \PicturePark\API\Normalizer\PermissionOwnershipTransferExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetNotFoundException::class => \PicturePark\API\Normalizer\PermissionSetNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetAggregateException::class => \PicturePark\API\Normalizer\PermissionSetAggregateExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateRightException::class => \PicturePark\API\Normalizer\DuplicateRightExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionValidationException::class => \PicturePark\API\Normalizer\PermissionValidationExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetInUseException::class => \PicturePark\API\Normalizer\PermissionSetInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionException::class => \PicturePark\API\Normalizer\ContentPermissionExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemPermissionException::class => \PicturePark\API\Normalizer\ListItemPermissionExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionException::class => \PicturePark\API\Normalizer\SchemaPermissionExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetInvalidRightCombinationException::class => \PicturePark\API\Normalizer\PermissionSetInvalidRightCombinationExceptionNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetValidationException::class => \PicturePark\API\Normalizer\PermissionSetValidationExceptionNormalizer::class,
        
        \PicturePark\API\Model\AmbiguousUserRoleRightsException::class => \PicturePark\API\Normalizer\AmbiguousUserRoleRightsExceptionNormalizer::class,
        
        \PicturePark\API\Model\UnsupportedListItemChangeCommandException::class => \PicturePark\API\Normalizer\UnsupportedListItemChangeCommandExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemLayerException::class => \PicturePark\API\Normalizer\ListItemLayerExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemNotFoundException::class => \PicturePark\API\Normalizer\ListItemNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemCyclicDependencyException::class => \PicturePark\API\Normalizer\ListItemCyclicDependencyExceptionNormalizer::class,
        
        \PicturePark\API\Model\DeleteListItemsWithReferencesException::class => \PicturePark\API\Normalizer\DeleteListItemsWithReferencesExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemUpdateManyException::class => \PicturePark\API\Normalizer\ListItemUpdateManyExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemSchemaMismatchException::class => \PicturePark\API\Normalizer\ListItemSchemaMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\TransferInfoNotFoundException::class => \PicturePark\API\Normalizer\TransferInfoNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\FileTransferNotFoundException::class => \PicturePark\API\Normalizer\FileTransferNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidTransferTypeException::class => \PicturePark\API\Normalizer\InvalidTransferTypeExceptionNormalizer::class,
        
        \PicturePark\API\Model\TransferNotFoundException::class => \PicturePark\API\Normalizer\TransferNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\WrongChunkSizeException::class => \PicturePark\API\Normalizer\WrongChunkSizeExceptionNormalizer::class,
        
        \PicturePark\API\Model\ChunkSizeOutOfRangeException::class => \PicturePark\API\Normalizer\ChunkSizeOutOfRangeExceptionNormalizer::class,
        
        \PicturePark\API\Model\MaximumTransferSizeException::class => \PicturePark\API\Normalizer\MaximumTransferSizeExceptionNormalizer::class,
        
        \PicturePark\API\Model\FileIdDuplicatedException::class => \PicturePark\API\Normalizer\FileIdDuplicatedExceptionNormalizer::class,
        
        \PicturePark\API\Model\MissingDependenciesException::class => \PicturePark\API\Normalizer\MissingDependenciesExceptionNormalizer::class,
        
        \PicturePark\API\Model\RelationSelfReferencingException::class => \PicturePark\API\Normalizer\RelationSelfReferencingExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidChangeCommandFieldTypeInvalidException::class => \PicturePark\API\Normalizer\InvalidChangeCommandFieldTypeInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidChangeCommandFieldNotFoundException::class => \PicturePark\API\Normalizer\InvalidChangeCommandFieldNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidChangeCommandSchemaChangeInvalidException::class => \PicturePark\API\Normalizer\InvalidChangeCommandSchemaChangeInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidMetadataException::class => \PicturePark\API\Normalizer\InvalidMetadataExceptionNormalizer::class,
        
        \PicturePark\API\Model\MetadataError::class => \PicturePark\API\Normalizer\MetadataErrorNormalizer::class,
        
        \PicturePark\API\Model\RelationNotFoundException::class => \PicturePark\API\Normalizer\RelationNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\RelationTypeNotFoundException::class => \PicturePark\API\Normalizer\RelationTypeNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\RelationTypeTargetDocTypeMismatchException::class => \PicturePark\API\Normalizer\RelationTypeTargetDocTypeMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\AggregationNameInvalidException::class => \PicturePark\API\Normalizer\AggregationNameInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\AggregationSizeInvalidException::class => \PicturePark\API\Normalizer\AggregationSizeInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\AggregationFilterNotSupportedException::class => \PicturePark\API\Normalizer\AggregationFilterNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\RelationTypeMissingException::class => \PicturePark\API\Normalizer\RelationTypeMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\ReferencesUpdateException::class => \PicturePark\API\Normalizer\ReferencesUpdateExceptionNormalizer::class,
        
        \PicturePark\API\Model\ReferenceUpdateException::class => \PicturePark\API\Normalizer\ReferenceUpdateExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicatedItemAssignedException::class => \PicturePark\API\Normalizer\DuplicatedItemAssignedExceptionNormalizer::class,
        
        \PicturePark\API\Model\InvalidDataTypeException::class => \PicturePark\API\Normalizer\InvalidDataTypeExceptionNormalizer::class,
        
        \PicturePark\API\Model\LayerAssignmentInvalidException::class => \PicturePark\API\Normalizer\LayerAssignmentInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutdatedMetadataUpdateInProgressException::class => \PicturePark\API\Normalizer\OutdatedMetadataUpdateInProgressExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldOverwriteTypeMismatchException::class => \PicturePark\API\Normalizer\SchemaFieldOverwriteTypeMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldOverwriteIdException::class => \PicturePark\API\Normalizer\SchemaFieldOverwriteIdExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldIdDuplicatedException::class => \PicturePark\API\Normalizer\SchemaFieldIdDuplicatedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldIdPreviouslyUsedException::class => \PicturePark\API\Normalizer\SchemaFieldIdPreviouslyUsedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldIdAlreadyExistsInSchemaHierarchyException::class => \PicturePark\API\Normalizer\SchemaFieldIdAlreadyExistsInSchemaHierarchyExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldSchemaIndexInfoSimpleSearchNestingException::class => \PicturePark\API\Normalizer\SchemaFieldSchemaIndexInfoSimpleSearchNestingExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldSchemaIndexInfoNestingException::class => \PicturePark\API\Normalizer\SchemaFieldSchemaIndexInfoNestingExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldIdUppercaseException::class => \PicturePark\API\Normalizer\SchemaFieldIdUppercaseExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaIdLowercaseException::class => \PicturePark\API\Normalizer\SchemaIdLowercaseExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInfoNotFoundException::class => \PicturePark\API\Normalizer\SchemaInfoNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\IndexedFieldThresholdExceededException::class => \PicturePark\API\Normalizer\IndexedFieldThresholdExceededExceptionNormalizer::class,
        
        \PicturePark\API\Model\SortableFieldThresholdExceededException::class => \PicturePark\API\Normalizer\SortableFieldThresholdExceededExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateSchemaInfoException::class => \PicturePark\API\Normalizer\DuplicateSchemaInfoExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldNumberRangeException::class => \PicturePark\API\Normalizer\SchemaFieldNumberRangeExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInUseContentSchemaException::class => \PicturePark\API\Normalizer\SchemaInUseContentSchemaExceptionNormalizer::class,
        
        \PicturePark\API\Model\LayerAssignmentInUseWithContentsException::class => \PicturePark\API\Normalizer\LayerAssignmentInUseWithContentsExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInUseListItemException::class => \PicturePark\API\Normalizer\SchemaInUseListItemExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInUseContentException::class => \PicturePark\API\Normalizer\SchemaInUseContentExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInUseFieldException::class => \PicturePark\API\Normalizer\SchemaInUseFieldExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateMetadataDisplayPatternException::class => \PicturePark\API\Normalizer\DuplicateMetadataDisplayPatternExceptionNormalizer::class,
        
        \PicturePark\API\Model\DuplicateSchemaException::class => \PicturePark\API\Normalizer\DuplicateSchemaExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaImportEmptyException::class => \PicturePark\API\Normalizer\SchemaImportEmptyExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaImportVersionMismatchException::class => \PicturePark\API\Normalizer\SchemaImportVersionMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInheritanceFieldIndexDeviationException::class => \PicturePark\API\Normalizer\SchemaInheritanceFieldIndexDeviationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInheritanceTypeDeviationException::class => \PicturePark\API\Normalizer\SchemaInheritanceTypeDeviationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaValidationException::class => \PicturePark\API\Normalizer\SchemaValidationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaSortFieldException::class => \PicturePark\API\Normalizer\SchemaSortFieldExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldIdException::class => \PicturePark\API\Normalizer\SchemaFieldIdExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldTypeChangeException::class => \PicturePark\API\Normalizer\SchemaFieldTypeChangeExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldIndexException::class => \PicturePark\API\Normalizer\SchemaFieldIndexExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldNotSortableException::class => \PicturePark\API\Normalizer\SchemaFieldNotSortableExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldNotSearchableException::class => \PicturePark\API\Normalizer\SchemaFieldNotSearchableExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldInvalidBoostException::class => \PicturePark\API\Normalizer\SchemaFieldInvalidBoostExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldSortableInUseException::class => \PicturePark\API\Normalizer\SchemaFieldSortableInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaNoContentException::class => \PicturePark\API\Normalizer\SchemaNoContentExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaParentChangeException::class => \PicturePark\API\Normalizer\SchemaParentChangeExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaMissingTypeException::class => \PicturePark\API\Normalizer\SchemaMissingTypeExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionConfigurationException::class => \PicturePark\API\Normalizer\SchemaPermissionConfigurationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaNoLayerException::class => \PicturePark\API\Normalizer\SchemaNoLayerExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaIdException::class => \PicturePark\API\Normalizer\SchemaIdExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaInUseException::class => \PicturePark\API\Normalizer\SchemaInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaNotFoundException::class => \PicturePark\API\Normalizer\SchemaNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaCountLimitReachedException::class => \PicturePark\API\Normalizer\SchemaCountLimitReachedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SystemSchemaInvalidModificationException::class => \PicturePark\API\Normalizer\SystemSchemaInvalidModificationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldRelationSchemaSystemSchemaException::class => \PicturePark\API\Normalizer\SchemaFieldRelationSchemaSystemSchemaExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldRelationSchemaTypeUnsupportedException::class => \PicturePark\API\Normalizer\SchemaFieldRelationSchemaTypeUnsupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaMultipleTypesException::class => \PicturePark\API\Normalizer\SchemaMultipleTypesExceptionNormalizer::class,
        
        \PicturePark\API\Model\MissingDisplayPatternForCustomerDefaultLanguageException::class => \PicturePark\API\Normalizer\MissingDisplayPatternForCustomerDefaultLanguageExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaViewForAllException::class => \PicturePark\API\Normalizer\SchemaViewForAllExceptionNormalizer::class,
        
        \PicturePark\API\Model\SystemLayerReferenceInvalidModificationException::class => \PicturePark\API\Normalizer\SystemLayerReferenceInvalidModificationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldAnalyzerInvalidException::class => \PicturePark\API\Normalizer\SchemaFieldAnalyzerInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldRelationMultipleTypesException::class => \PicturePark\API\Normalizer\SchemaFieldRelationMultipleTypesExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldNotRequirableException::class => \PicturePark\API\Normalizer\SchemaFieldNotRequirableExceptionNormalizer::class,
        
        \PicturePark\API\Model\DisplayPatternTypeNotSupportedException::class => \PicturePark\API\Normalizer\DisplayPatternTypeNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldActivityInUseException::class => \PicturePark\API\Normalizer\SchemaFieldActivityInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldReferencedSchemaChangeNotAllowedException::class => \PicturePark\API\Normalizer\SchemaFieldReferencedSchemaChangeNotAllowedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldReferencedSchemaSystemSchemaException::class => \PicturePark\API\Normalizer\SchemaFieldReferencedSchemaSystemSchemaExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldRelationRelationTypeIdModificationNotAllowedException::class => \PicturePark\API\Normalizer\SchemaFieldRelationRelationTypeIdModificationNotAllowedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldRelationTargetDocTypeModificationNotAllowedException::class => \PicturePark\API\Normalizer\SchemaFieldRelationTargetDocTypeModificationNotAllowedExceptionNormalizer::class,
        
        \PicturePark\API\Model\DeleteContentsWithReferencesException::class => \PicturePark\API\Normalizer\DeleteContentsWithReferencesExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentMetadataUpdateManyException::class => \PicturePark\API\Normalizer\ContentMetadataUpdateManyExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentNotFoundException::class => \PicturePark\API\Normalizer\ContentNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentLayerInvalidException::class => \PicturePark\API\Normalizer\ContentLayerInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentFileReplaceTypeMismatchException::class => \PicturePark\API\Normalizer\ContentFileReplaceTypeMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentBackupFailedException::class => \PicturePark\API\Normalizer\ContentBackupFailedExceptionNormalizer::class,
        
        \PicturePark\API\Model\ContentLayerSameRootException::class => \PicturePark\API\Normalizer\ContentLayerSameRootExceptionNormalizer::class,
        
        \PicturePark\API\Model\LayerIdsByRootSchema::class => \PicturePark\API\Normalizer\LayerIdsByRootSchemaNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessEngineRequestException::class => \PicturePark\API\Normalizer\BusinessProcessEngineRequestExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessNotFoundException::class => \PicturePark\API\Normalizer\BusinessProcessNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDefinitionNotFoundException::class => \PicturePark\API\Normalizer\BusinessProcessDefinitionNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDefinitionCreateException::class => \PicturePark\API\Normalizer\BusinessProcessDefinitionCreateExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessNotExternalException::class => \PicturePark\API\Normalizer\BusinessProcessNotExternalExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessCancellationNotSupportedException::class => \PicturePark\API\Normalizer\BusinessProcessCancellationNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessContinuationException::class => \PicturePark\API\Normalizer\BusinessProcessContinuationExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldImportMismatchException::class => \PicturePark\API\Normalizer\SchemaFieldImportMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldImportRelatedSchemaMismatchException::class => \PicturePark\API\Normalizer\SchemaFieldImportRelatedSchemaMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldImportTypeMismatchException::class => \PicturePark\API\Normalizer\SchemaFieldImportTypeMismatchExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldNotSupportedException::class => \PicturePark\API\Normalizer\SchemaFieldNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaFieldDisplayPatternTypeNotSupportedException::class => \PicturePark\API\Normalizer\SchemaFieldDisplayPatternTypeNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SnapshotTimeoutException::class => \PicturePark\API\Normalizer\SnapshotTimeoutExceptionNormalizer::class,
        
        \PicturePark\API\Model\SnapshotFailedException::class => \PicturePark\API\Normalizer\SnapshotFailedExceptionNormalizer::class,
        
        \PicturePark\API\Model\SnapshotSkippedException::class => \PicturePark\API\Normalizer\SnapshotSkippedExceptionNormalizer::class,
        
        \PicturePark\API\Model\AddMetadataLanguageTimeoutException::class => \PicturePark\API\Normalizer\AddMetadataLanguageTimeoutExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentProcessAlreadyRunningException::class => \PicturePark\API\Normalizer\EnvironmentProcessAlreadyRunningExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentProcessNotFoundException::class => \PicturePark\API\Normalizer\EnvironmentProcessNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentProcessWaitTimeoutException::class => \PicturePark\API\Normalizer\EnvironmentProcessWaitTimeoutExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerBoostValuesUpdateTimeoutException::class => \PicturePark\API\Normalizer\CustomerBoostValuesUpdateTimeoutExceptionNormalizer::class,
        
        \PicturePark\API\Model\NoTermsOfServiceDefinedException::class => \PicturePark\API\Normalizer\NoTermsOfServiceDefinedExceptionNormalizer::class,
        
        \PicturePark\API\Model\AtLeastOneActiveTermsOfServiceMustExistException::class => \PicturePark\API\Normalizer\AtLeastOneActiveTermsOfServiceMustExistExceptionNormalizer::class,
        
        \PicturePark\API\Model\ForbiddenHtmlElementsUsedException::class => \PicturePark\API\Normalizer\ForbiddenHtmlElementsUsedExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessStateNotHitException::class => \PicturePark\API\Normalizer\BusinessProcessStateNotHitExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessLifeCycleNotHitException::class => \PicturePark\API\Normalizer\BusinessProcessLifeCycleNotHitExceptionNormalizer::class,
        
        \PicturePark\API\Model\OnlyAccessibleToRecipientException::class => \PicturePark\API\Normalizer\OnlyAccessibleToRecipientExceptionNormalizer::class,
        
        \PicturePark\API\Model\EnvironmentNotAvailableException::class => \PicturePark\API\Normalizer\EnvironmentNotAvailableExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerNotAvailableException::class => \PicturePark\API\Normalizer\CustomerNotAvailableExceptionNormalizer::class,
        
        \PicturePark\API\Model\CustomerAliasHeaderMissingException::class => \PicturePark\API\Normalizer\CustomerAliasHeaderMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleActionInvalidDocumentTypeException::class => \PicturePark\API\Normalizer\BusinessRuleActionInvalidDocumentTypeExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleActionInvalidExecutionScopeException::class => \PicturePark\API\Normalizer\BusinessRuleActionInvalidExecutionScopeExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleActionsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleActionsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConditionMissingException::class => \PicturePark\API\Normalizer\BusinessRuleConditionMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConditionsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleConditionsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConfigurationValidationException::class => \PicturePark\API\Normalizer\BusinessRuleConfigurationValidationExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleSchemaIdInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleSchemaIdInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRulePermissionSetIdInvalidException::class => \PicturePark\API\Normalizer\BusinessRulePermissionSetIdInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleRuleIdDuplicationException::class => \PicturePark\API\Normalizer\BusinessRuleRuleIdDuplicationExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleRuleIdMissingException::class => \PicturePark\API\Normalizer\BusinessRuleRuleIdMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTriggerPointMissingException::class => \PicturePark\API\Normalizer\BusinessRuleTriggerPointMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleValidationException::class => \PicturePark\API\Normalizer\BusinessRuleValidationExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConditionInvalidTriggerPointDocumentTypeException::class => \PicturePark\API\Normalizer\BusinessRuleConditionInvalidTriggerPointDocumentTypeExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleRegularExpressionInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleRegularExpressionInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConditionInvalidTriggerPointActionException::class => \PicturePark\API\Normalizer\BusinessRuleConditionInvalidTriggerPointActionExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleRefIdsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleRefIdsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRulePathInvalidException::class => \PicturePark\API\Normalizer\BusinessRulePathInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleFieldIdInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleFieldIdInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleContentPermissionSetIdsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleContentPermissionSetIdsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleFieldPathInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleFieldPathInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRulePolygonInvalidException::class => \PicturePark\API\Normalizer\BusinessRulePolygonInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleArrayIndexInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleArrayIndexInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleDictionaryKeyInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleDictionaryKeyInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleProjectionTransformationsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleProjectionTransformationsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleInvalidVariableNameException::class => \PicturePark\API\Normalizer\BusinessRuleInvalidVariableNameExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTransformationGroupTransformationsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleTransformationGroupTransformationsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTransformationGroupInputsMissingException::class => \PicturePark\API\Normalizer\BusinessRuleTransformationGroupInputsMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleNamedCacheNameInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleNamedCacheNameInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleNGramTransformationSizeInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleNGramTransformationSizeInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleNGramTransformationMinWordLengthInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleNGramTransformationMinWordLengthInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleNGramTransformationMaxWordLengthInvalidException::class => \PicturePark\API\Normalizer\BusinessRuleNGramTransformationMaxWordLengthInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\NamedCacheConfigurationException::class => \PicturePark\API\Normalizer\NamedCacheConfigurationExceptionNormalizer::class,
        
        \PicturePark\API\Model\NamedCacheNameMissingException::class => \PicturePark\API\Normalizer\NamedCacheNameMissingExceptionNormalizer::class,
        
        \PicturePark\API\Model\NamedCacheNameDuplicationException::class => \PicturePark\API\Normalizer\NamedCacheNameDuplicationExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemNamedCacheSchemaIdInvalidException::class => \PicturePark\API\Normalizer\ListItemNamedCacheSchemaIdInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\ListItemNamedCacheKeyFieldsInvalidException::class => \PicturePark\API\Normalizer\ListItemNamedCacheKeyFieldsInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\SchemaTagboxFilterLookupNamedCacheSchemaIdInvalidException::class => \PicturePark\API\Normalizer\SchemaTagboxFilterLookupNamedCacheSchemaIdInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\NoTagsFoundException::class => \PicturePark\API\Normalizer\NoTagsFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputNotAvailableException::class => \PicturePark\API\Normalizer\OutputNotAvailableExceptionNormalizer::class,
        
        \PicturePark\API\Model\ModelNotFoundException::class => \PicturePark\API\Normalizer\ModelNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\DisplayValueRerenderingInProgressException::class => \PicturePark\API\Normalizer\DisplayValueRerenderingInProgressExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatNotFoundException::class => \PicturePark\API\Normalizer\OutputFormatNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatSourceNotDefinedException::class => \PicturePark\API\Normalizer\OutputFormatSourceNotDefinedExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatRetentionTimeOutOfRangeException::class => \PicturePark\API\Normalizer\OutputFormatRetentionTimeOutOfRangeExceptionNormalizer::class,
        
        \PicturePark\API\Model\NotSupportedFileExtensionForFormatException::class => \PicturePark\API\Normalizer\NotSupportedFileExtensionForFormatExceptionNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatXmpWritebackNotSupportedException::class => \PicturePark\API\Normalizer\OutputFormatXmpWritebackNotSupportedExceptionNormalizer::class,
        
        \PicturePark\API\Model\CollectionSizeLimitExceededException::class => \PicturePark\API\Normalizer\CollectionSizeLimitExceededExceptionNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingFieldNotSupported::class => \PicturePark\API\Normalizer\XmpMappingFieldNotSupportedNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingFieldNotFoundException::class => \PicturePark\API\Normalizer\XmpMappingFieldNotFoundExceptionNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingSchemaNotAvailableForFileContentSchemaException::class => \PicturePark\API\Normalizer\XmpMappingSchemaNotAvailableForFileContentSchemaExceptionNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingFieldToLayerWithRequiredFieldsNotAllowedException::class => \PicturePark\API\Normalizer\XmpMappingFieldToLayerWithRequiredFieldsNotAllowedExceptionNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingFieldInUseException::class => \PicturePark\API\Normalizer\XmpMappingFieldInUseExceptionNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingConfigurationInvalidException::class => \PicturePark\API\Normalizer\XmpMappingConfigurationInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\ActivityMappingInvalidException::class => \PicturePark\API\Normalizer\ActivityMappingInvalidExceptionNormalizer::class,
        
        \PicturePark\API\Model\ProblemDetails::class => \PicturePark\API\Normalizer\ProblemDetailsNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessCreateRequest::class => \PicturePark\API\Normalizer\BusinessProcessCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessNotificationUpdate::class => \PicturePark\API\Normalizer\BusinessProcessNotificationUpdateNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessStateChangeRequest::class => \PicturePark\API\Normalizer\BusinessProcessStateChangeRequestNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest::class => \PicturePark\API\Normalizer\BusinessProcessNotificationUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessWaitForStateResult::class => \PicturePark\API\Normalizer\BusinessProcessWaitForStateResultNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult::class => \PicturePark\API\Normalizer\BusinessProcessWaitForLifeCycleResultNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDetails::class => \PicturePark\API\Normalizer\BusinessProcessDetailsNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDetailsDataBase::class => \PicturePark\API\Normalizer\BusinessProcessDetailsDataBaseNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDetailsDataBatchResponse::class => \PicturePark\API\Normalizer\BusinessProcessDetailsDataBatchResponseNormalizer::class,
        
        \PicturePark\API\Model\BatchResponse::class => \PicturePark\API\Normalizer\BatchResponseNormalizer::class,
        
        \PicturePark\API\Model\BatchResponseRow::class => \PicturePark\API\Normalizer\BatchResponseRowNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport::class => \PicturePark\API\Normalizer\BusinessProcessDetailsDataSchemaImportNormalizer::class,
        
        \PicturePark\API\Model\SchemaImportResult::class => \PicturePark\API\Normalizer\SchemaImportResultNormalizer::class,
        
        \PicturePark\API\Model\ListItemImportResult::class => \PicturePark\API\Normalizer\ListItemImportResultNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDetailsDataCdnPurge::class => \PicturePark\API\Normalizer\BusinessProcessDetailsDataCdnPurgeNormalizer::class,
        
        \PicturePark\API\Model\CdnPurgeJobBase::class => \PicturePark\API\Normalizer\CdnPurgeJobBaseNormalizer::class,
        
        \PicturePark\API\Model\CdnPurgeJobByTag::class => \PicturePark\API\Normalizer\CdnPurgeJobByTagNormalizer::class,
        
        \PicturePark\API\Model\CdnPurgeJobByUri::class => \PicturePark\API\Normalizer\CdnPurgeJobByUriNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessDetailsDataContentImport::class => \PicturePark\API\Normalizer\BusinessProcessDetailsDataContentImportNormalizer::class,
        
        \PicturePark\API\Model\ContentImportResult::class => \PicturePark\API\Normalizer\ContentImportResultNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessSearchResult::class => \PicturePark\API\Normalizer\BusinessProcessSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfBusinessProcess::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfBusinessProcessNormalizer::class,
        
        \PicturePark\API\Model\QueryDebugInformation::class => \PicturePark\API\Normalizer\QueryDebugInformationNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfBusinessProcess::class => \PicturePark\API\Normalizer\BaseResultOfBusinessProcessNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessSearchRequest::class => \PicturePark\API\Normalizer\BusinessProcessSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\FilterBase::class => \PicturePark\API\Normalizer\FilterBaseNormalizer::class,
        
        \PicturePark\API\Model\AndFilter::class => \PicturePark\API\Normalizer\AndFilterNormalizer::class,
        
        \PicturePark\API\Model\OrFilter::class => \PicturePark\API\Normalizer\OrFilterNormalizer::class,
        
        \PicturePark\API\Model\NotFilter::class => \PicturePark\API\Normalizer\NotFilterNormalizer::class,
        
        \PicturePark\API\Model\DateRangeFilter::class => \PicturePark\API\Normalizer\DateRangeFilterNormalizer::class,
        
        \PicturePark\API\Model\DateRange::class => \PicturePark\API\Normalizer\DateRangeNormalizer::class,
        
        \PicturePark\API\Model\ExistsFilter::class => \PicturePark\API\Normalizer\ExistsFilterNormalizer::class,
        
        \PicturePark\API\Model\GeoBoundingBoxFilter::class => \PicturePark\API\Normalizer\GeoBoundingBoxFilterNormalizer::class,
        
        \PicturePark\API\Model\GeoLocation::class => \PicturePark\API\Normalizer\GeoLocationNormalizer::class,
        
        \PicturePark\API\Model\GeoDistanceFilter::class => \PicturePark\API\Normalizer\GeoDistanceFilterNormalizer::class,
        
        \PicturePark\API\Model\NestedFilter::class => \PicturePark\API\Normalizer\NestedFilterNormalizer::class,
        
        \PicturePark\API\Model\NumericRangeFilter::class => \PicturePark\API\Normalizer\NumericRangeFilterNormalizer::class,
        
        \PicturePark\API\Model\NumericRange::class => \PicturePark\API\Normalizer\NumericRangeNormalizer::class,
        
        \PicturePark\API\Model\PrefixFilter::class => \PicturePark\API\Normalizer\PrefixFilterNormalizer::class,
        
        \PicturePark\API\Model\TermFilter::class => \PicturePark\API\Normalizer\TermFilterNormalizer::class,
        
        \PicturePark\API\Model\TermsFilter::class => \PicturePark\API\Normalizer\TermsFilterNormalizer::class,
        
        \PicturePark\API\Model\AggregationFilter::class => \PicturePark\API\Normalizer\AggregationFilterNormalizer::class,
        
        \PicturePark\API\Model\ChildFilter::class => \PicturePark\API\Normalizer\ChildFilterNormalizer::class,
        
        \PicturePark\API\Model\ParentFilter::class => \PicturePark\API\Normalizer\ParentFilterNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConfiguration::class => \PicturePark\API\Normalizer\BusinessRuleConfigurationNormalizer::class,
        
        \PicturePark\API\Model\BusinessRule::class => \PicturePark\API\Normalizer\BusinessRuleNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTriggerPoint::class => \PicturePark\API\Normalizer\BusinessRuleTriggerPointNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConfigurable::class => \PicturePark\API\Normalizer\BusinessRuleConfigurableNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleCondition::class => \PicturePark\API\Normalizer\BusinessRuleConditionNormalizer::class,
        
        \PicturePark\API\Model\AndCondition::class => \PicturePark\API\Normalizer\AndConditionNormalizer::class,
        
        \PicturePark\API\Model\BooleanCondition::class => \PicturePark\API\Normalizer\BooleanConditionNormalizer::class,
        
        \PicturePark\API\Model\OrCondition::class => \PicturePark\API\Normalizer\OrConditionNormalizer::class,
        
        \PicturePark\API\Model\LayerAssignedCondition::class => \PicturePark\API\Normalizer\LayerAssignedConditionNormalizer::class,
        
        \PicturePark\API\Model\LayerUnassignedCondition::class => \PicturePark\API\Normalizer\LayerUnassignedConditionNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetAssignedCondition::class => \PicturePark\API\Normalizer\ContentPermissionSetAssignedConditionNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetUnassignedCondition::class => \PicturePark\API\Normalizer\ContentPermissionSetUnassignedConditionNormalizer::class,
        
        \PicturePark\API\Model\FieldValueChangedCondition::class => \PicturePark\API\Normalizer\FieldValueChangedConditionNormalizer::class,
        
        \PicturePark\API\Model\MatchRegexCondition::class => \PicturePark\API\Normalizer\MatchRegexConditionNormalizer::class,
        
        \PicturePark\API\Model\TagboxItemAssignedCondition::class => \PicturePark\API\Normalizer\TagboxItemAssignedConditionNormalizer::class,
        
        \PicturePark\API\Model\TagboxItemUnassignedCondition::class => \PicturePark\API\Normalizer\TagboxItemUnassignedConditionNormalizer::class,
        
        \PicturePark\API\Model\ContentSchemaCondition::class => \PicturePark\API\Normalizer\ContentSchemaConditionNormalizer::class,
        
        \PicturePark\API\Model\NumberCompareCondition::class => \PicturePark\API\Normalizer\NumberCompareConditionNormalizer::class,
        
        \PicturePark\API\Model\ContentRelationItemAssignedCondition::class => \PicturePark\API\Normalizer\ContentRelationItemAssignedConditionNormalizer::class,
        
        \PicturePark\API\Model\ContentRelationItemUnassignedCondition::class => \PicturePark\API\Normalizer\ContentRelationItemUnassignedConditionNormalizer::class,
        
        \PicturePark\API\Model\GeoPointWithinPolygonCondition::class => \PicturePark\API\Normalizer\GeoPointWithinPolygonConditionNormalizer::class,
        
        \PicturePark\API\Model\LatLon::class => \PicturePark\API\Normalizer\LatLonNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetsChangedCondition::class => \PicturePark\API\Normalizer\ContentPermissionSetsChangedConditionNormalizer::class,
        
        \PicturePark\API\Model\ContentRelationItemsChangedCondition::class => \PicturePark\API\Normalizer\ContentRelationItemsChangedConditionNormalizer::class,
        
        \PicturePark\API\Model\LayersChangedCondition::class => \PicturePark\API\Normalizer\LayersChangedConditionNormalizer::class,
        
        \PicturePark\API\Model\TagboxItemsChangedCondition::class => \PicturePark\API\Normalizer\TagboxItemsChangedConditionNormalizer::class,
        
        \PicturePark\API\Model\FieldEmptyCondition::class => \PicturePark\API\Normalizer\FieldEmptyConditionNormalizer::class,
        
        \PicturePark\API\Model\NotCondition::class => \PicturePark\API\Normalizer\NotConditionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTransformationGroup::class => \PicturePark\API\Normalizer\BusinessRuleTransformationGroupNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTransformation::class => \PicturePark\API\Normalizer\BusinessRuleTransformationNormalizer::class,
        
        \PicturePark\API\Model\TakeDictionaryValueTransformation::class => \PicturePark\API\Normalizer\TakeDictionaryValueTransformationNormalizer::class,
        
        \PicturePark\API\Model\TakeArrayValueTransformation::class => \PicturePark\API\Normalizer\TakeArrayValueTransformationNormalizer::class,
        
        \PicturePark\API\Model\JoinByTransformation::class => \PicturePark\API\Normalizer\JoinByTransformationNormalizer::class,
        
        \PicturePark\API\Model\LookupCacheTransformation::class => \PicturePark\API\Normalizer\LookupCacheTransformationNormalizer::class,
        
        \PicturePark\API\Model\NGramTransformation::class => \PicturePark\API\Normalizer\NGramTransformationNormalizer::class,
        
        \PicturePark\API\Model\ProjectionTransformation::class => \PicturePark\API\Normalizer\ProjectionTransformationNormalizer::class,
        
        \PicturePark\API\Model\SplitTransformation::class => \PicturePark\API\Normalizer\SplitTransformationNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleAction::class => \PicturePark\API\Normalizer\BusinessRuleActionNormalizer::class,
        
        \PicturePark\API\Model\AssignLayerAction::class => \PicturePark\API\Normalizer\AssignLayerActionNormalizer::class,
        
        \PicturePark\API\Model\UnassignLayerAction::class => \PicturePark\API\Normalizer\UnassignLayerActionNormalizer::class,
        
        \PicturePark\API\Model\AssignValueAction::class => \PicturePark\API\Normalizer\AssignValueActionNormalizer::class,
        
        \PicturePark\API\Model\AssignTagboxItemsAction::class => \PicturePark\API\Normalizer\AssignTagboxItemsActionNormalizer::class,
        
        \PicturePark\API\Model\UnassignTagboxItemsAction::class => \PicturePark\API\Normalizer\UnassignTagboxItemsActionNormalizer::class,
        
        \PicturePark\API\Model\AssignContentPermissionSetsAction::class => \PicturePark\API\Normalizer\AssignContentPermissionSetsActionNormalizer::class,
        
        \PicturePark\API\Model\UnassignContentPermissionSetsAction::class => \PicturePark\API\Normalizer\UnassignContentPermissionSetsActionNormalizer::class,
        
        \PicturePark\API\Model\ProduceMessageAction::class => \PicturePark\API\Normalizer\ProduceMessageActionNormalizer::class,
        
        \PicturePark\API\Model\AssignTagboxItemsInLayerAction::class => \PicturePark\API\Normalizer\AssignTagboxItemsInLayerActionNormalizer::class,
        
        \PicturePark\API\Model\EnqueueTaggingAction::class => \PicturePark\API\Normalizer\EnqueueTaggingActionNormalizer::class,
        
        \PicturePark\API\Model\TaggingOptionsBase::class => \PicturePark\API\Normalizer\TaggingOptionsBaseNormalizer::class,
        
        \PicturePark\API\Model\ClarifaiTaggingOptions::class => \PicturePark\API\Normalizer\ClarifaiTaggingOptionsNormalizer::class,
        
        \PicturePark\API\Model\SimulatedTaggingOptions::class => \PicturePark\API\Normalizer\SimulatedTaggingOptionsNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleScript::class => \PicturePark\API\Normalizer\BusinessRuleScriptNormalizer::class,
        
        \PicturePark\API\Model\NamedCacheConfigurationBase::class => \PicturePark\API\Normalizer\NamedCacheConfigurationBaseNormalizer::class,
        
        \PicturePark\API\Model\ListItemNamedCacheConfiguration::class => \PicturePark\API\Normalizer\ListItemNamedCacheConfigurationNormalizer::class,
        
        \PicturePark\API\Model\SchemaTagboxFilterLookupNamedCacheConfiguration::class => \PicturePark\API\Normalizer\SchemaTagboxFilterLookupNamedCacheConfigurationNormalizer::class,
        
        \PicturePark\API\Model\InverseListItemNamedCacheConfiguration::class => \PicturePark\API\Normalizer\InverseListItemNamedCacheConfigurationNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest::class => \PicturePark\API\Normalizer\BusinessRuleConfigurationUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTraceLogSearchResult::class => \PicturePark\API\Normalizer\BusinessRuleTraceLogSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfBusinessRuleTraceLog::class => \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfBusinessRuleTraceLogNormalizer::class,
        
        \PicturePark\API\Model\AggregationResult::class => \PicturePark\API\Normalizer\AggregationResultNormalizer::class,
        
        \PicturePark\API\Model\AggregationResultItem::class => \PicturePark\API\Normalizer\AggregationResultItemNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfBusinessRuleTraceLog::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfBusinessRuleTraceLogNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfBusinessRuleTraceLog::class => \PicturePark\API\Normalizer\BaseResultOfBusinessRuleTraceLogNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTraceLog::class => \PicturePark\API\Normalizer\BusinessRuleTraceLogNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTracedRule::class => \PicturePark\API\Normalizer\BusinessRuleTracedRuleNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTracedEvaluation::class => \PicturePark\API\Normalizer\BusinessRuleTracedEvaluationNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTracedEvaluationCondition::class => \PicturePark\API\Normalizer\BusinessRuleTracedEvaluationConditionNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class => \PicturePark\API\Normalizer\BusinessRuleTracedTransformationGroupNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTracedTransformation::class => \PicturePark\API\Normalizer\BusinessRuleTracedTransformationNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTracedAction::class => \PicturePark\API\Normalizer\BusinessRuleTracedActionNormalizer::class,
        
        \PicturePark\API\Model\UserAudit::class => \PicturePark\API\Normalizer\UserAuditNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest::class => \PicturePark\API\Normalizer\BusinessRuleTraceLogSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\AggregatorBase::class => \PicturePark\API\Normalizer\AggregatorBaseNormalizer::class,
        
        \PicturePark\API\Model\DateRangeAggregator::class => \PicturePark\API\Normalizer\DateRangeAggregatorNormalizer::class,
        
        \PicturePark\API\Model\DateRangeForAggregator::class => \PicturePark\API\Normalizer\DateRangeForAggregatorNormalizer::class,
        
        \PicturePark\API\Model\GeoDistanceAggregator::class => \PicturePark\API\Normalizer\GeoDistanceAggregatorNormalizer::class,
        
        \PicturePark\API\Model\GeoDistance::class => \PicturePark\API\Normalizer\GeoDistanceNormalizer::class,
        
        \PicturePark\API\Model\NestedAggregator::class => \PicturePark\API\Normalizer\NestedAggregatorNormalizer::class,
        
        \PicturePark\API\Model\NumericRangeAggregator::class => \PicturePark\API\Normalizer\NumericRangeAggregatorNormalizer::class,
        
        \PicturePark\API\Model\NumericRangeForAggregator::class => \PicturePark\API\Normalizer\NumericRangeForAggregatorNormalizer::class,
        
        \PicturePark\API\Model\TermsAggregator::class => \PicturePark\API\Normalizer\TermsAggregatorNormalizer::class,
        
        \PicturePark\API\Model\TermsRelationAggregator::class => \PicturePark\API\Normalizer\TermsRelationAggregatorNormalizer::class,
        
        \PicturePark\API\Model\TermsEnumAggregator::class => \PicturePark\API\Normalizer\TermsEnumAggregatorNormalizer::class,
        
        \PicturePark\API\Model\SortInfo::class => \PicturePark\API\Normalizer\SortInfoNormalizer::class,
        
        \PicturePark\API\Model\Channel::class => \PicturePark\API\Normalizer\ChannelNormalizer::class,
        
        \PicturePark\API\Model\SortField::class => \PicturePark\API\Normalizer\SortFieldNormalizer::class,
        
        \PicturePark\API\Model\ChannelCreateRequest::class => \PicturePark\API\Normalizer\ChannelCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ChannelUpdateRequest::class => \PicturePark\API\Normalizer\ChannelUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetDetail::class => \PicturePark\API\Normalizer\ContentPermissionSetDetailNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetDetailOfContentRight::class => \PicturePark\API\Normalizer\PermissionSetDetailOfContentRightNormalizer::class,
        
        \PicturePark\API\Model\PermissionUserRoleRightsOfContentRight::class => \PicturePark\API\Normalizer\PermissionUserRoleRightsOfContentRightNormalizer::class,
        
        \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class => \PicturePark\API\Normalizer\PermissionUserRoleRightsOfPermissionSetRightNormalizer::class,
        
        \PicturePark\API\Model\UserAuditDetail::class => \PicturePark\API\Normalizer\UserAuditDetailNormalizer::class,
        
        \PicturePark\API\Model\User::class => \PicturePark\API\Normalizer\UserNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetCreateRequest::class => \PicturePark\API\Normalizer\ContentPermissionSetCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetCreateRequestOfContentRight::class => \PicturePark\API\Normalizer\PermissionSetCreateRequestOfContentRightNormalizer::class,
        
        \PicturePark\API\Model\UserRoleRightsOfContentRight::class => \PicturePark\API\Normalizer\UserRoleRightsOfContentRightNormalizer::class,
        
        \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight::class => \PicturePark\API\Normalizer\UserRoleRightsOfPermissionSetRightNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetUpdateRequest::class => \PicturePark\API\Normalizer\ContentPermissionSetUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetUpdateRequestOfContentRight::class => \PicturePark\API\Normalizer\PermissionSetUpdateRequestOfContentRightNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetOwnershipTransferRequest::class => \PicturePark\API\Normalizer\PermissionSetOwnershipTransferRequestNormalizer::class,
        
        \PicturePark\API\Model\BulkResponse::class => \PicturePark\API\Normalizer\BulkResponseNormalizer::class,
        
        \PicturePark\API\Model\BulkResponseRow::class => \PicturePark\API\Normalizer\BulkResponseRowNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetCreateManyRequest::class => \PicturePark\API\Normalizer\ContentPermissionSetCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetUpdateManyRequest::class => \PicturePark\API\Normalizer\ContentPermissionSetUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionSetUpdateRequestItem::class => \PicturePark\API\Normalizer\ContentPermissionSetUpdateRequestItemNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetUpdateRequestItemOfContentRight::class => \PicturePark\API\Normalizer\PermissionSetUpdateRequestItemOfContentRightNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetDeleteManyRequest::class => \PicturePark\API\Normalizer\PermissionSetDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest::class => \PicturePark\API\Normalizer\PermissionSetOwnershipTransferManyRequestNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetOwnershipTransferItem::class => \PicturePark\API\Normalizer\PermissionSetOwnershipTransferItemNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetUserPermissionRights::class => \PicturePark\API\Normalizer\PermissionSetUserPermissionRightsNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetSearchResult::class => \PicturePark\API\Normalizer\PermissionSetSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfPermissionSet::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfPermissionSetNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfPermissionSet::class => \PicturePark\API\Normalizer\BaseResultOfPermissionSetNormalizer::class,
        
        \PicturePark\API\Model\PermissionSet::class => \PicturePark\API\Normalizer\PermissionSetNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetSearchRequest::class => \PicturePark\API\Normalizer\PermissionSetSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentDetail::class => \PicturePark\API\Normalizer\ContentDetailNormalizer::class,
        
        \PicturePark\API\Model\Output::class => \PicturePark\API\Normalizer\OutputNormalizer::class,
        
        \PicturePark\API\Model\OutputDataBase::class => \PicturePark\API\Normalizer\OutputDataBaseNormalizer::class,
        
        \PicturePark\API\Model\OutputDataImage::class => \PicturePark\API\Normalizer\OutputDataImageNormalizer::class,
        
        \PicturePark\API\Model\OutputDataAudio::class => \PicturePark\API\Normalizer\OutputDataAudioNormalizer::class,
        
        \PicturePark\API\Model\OutputDataVideo::class => \PicturePark\API\Normalizer\OutputDataVideoNormalizer::class,
        
        \PicturePark\API\Model\Sprite::class => \PicturePark\API\Normalizer\SpriteNormalizer::class,
        
        \PicturePark\API\Model\OutputDataDocument::class => \PicturePark\API\Normalizer\OutputDataDocumentNormalizer::class,
        
        \PicturePark\API\Model\OutputDataVector::class => \PicturePark\API\Normalizer\OutputDataVectorNormalizer::class,
        
        \PicturePark\API\Model\OutputDataDefault::class => \PicturePark\API\Normalizer\OutputDataDefaultNormalizer::class,
        
        \PicturePark\API\Model\OutputDetail::class => \PicturePark\API\Normalizer\OutputDetailNormalizer::class,
        
        \PicturePark\API\Model\Activity::class => \PicturePark\API\Normalizer\ActivityNormalizer::class,
        
        \PicturePark\API\Model\ContentCreateRequest::class => \PicturePark\API\Normalizer\ContentCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentMetadataUpdateRequest::class => \PicturePark\API\Normalizer\ContentMetadataUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionsUpdateRequest::class => \PicturePark\API\Normalizer\ContentPermissionsUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentOwnershipTransferRequest::class => \PicturePark\API\Normalizer\ContentOwnershipTransferRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentFileUpdateRequest::class => \PicturePark\API\Normalizer\ContentFileUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentReferencesResult::class => \PicturePark\API\Normalizer\ContentReferencesResultNormalizer::class,
        
        \PicturePark\API\Model\MetadataReferenceResult::class => \PicturePark\API\Normalizer\MetadataReferenceResultNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfMetadataReference::class => \PicturePark\API\Normalizer\BaseResultOfMetadataReferenceNormalizer::class,
        
        \PicturePark\API\Model\MetadataReference::class => \PicturePark\API\Normalizer\MetadataReferenceNormalizer::class,
        
        \PicturePark\API\Model\ContentShareReferenceResult::class => \PicturePark\API\Normalizer\ContentShareReferenceResultNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfContentShareReference::class => \PicturePark\API\Normalizer\BaseResultOfContentShareReferenceNormalizer::class,
        
        \PicturePark\API\Model\ContentShareReference::class => \PicturePark\API\Normalizer\ContentShareReferenceNormalizer::class,
        
        \PicturePark\API\Model\ContentReferencesRequest::class => \PicturePark\API\Normalizer\ContentReferencesRequestNormalizer::class,
        
        \PicturePark\API\Model\MetadataReferencesPagingRequest::class => \PicturePark\API\Normalizer\MetadataReferencesPagingRequestNormalizer::class,
        
        \PicturePark\API\Model\PagingRequest::class => \PicturePark\API\Normalizer\PagingRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputResolveResult::class => \PicturePark\API\Normalizer\OutputResolveResultNormalizer::class,
        
        \PicturePark\API\Model\ContentDownloadLinkCreateRequest::class => \PicturePark\API\Normalizer\ContentDownloadLinkCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentDownloadRequestItem::class => \PicturePark\API\Normalizer\ContentDownloadRequestItemNormalizer::class,
        
        \PicturePark\API\Model\DownloadLink::class => \PicturePark\API\Normalizer\DownloadLinkNormalizer::class,
        
        \PicturePark\API\Model\ContentCreateManyRequest::class => \PicturePark\API\Normalizer\ContentCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentMetadataUpdateManyRequest::class => \PicturePark\API\Normalizer\ContentMetadataUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentMetadataUpdateItem::class => \PicturePark\API\Normalizer\ContentMetadataUpdateItemNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionsUpdateManyRequest::class => \PicturePark\API\Normalizer\ContentPermissionsUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentPermissionsUpdateItem::class => \PicturePark\API\Normalizer\ContentPermissionsUpdateItemNormalizer::class,
        
        \PicturePark\API\Model\ContentOwnershipTransferManyRequest::class => \PicturePark\API\Normalizer\ContentOwnershipTransferManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentOwnershipTransferItem::class => \PicturePark\API\Normalizer\ContentOwnershipTransferItemNormalizer::class,
        
        \PicturePark\API\Model\ContentDeleteManyRequest::class => \PicturePark\API\Normalizer\ContentDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentDeleteManyFilterRequest::class => \PicturePark\API\Normalizer\ContentDeleteManyFilterRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentFilterRequest::class => \PicturePark\API\Normalizer\ContentFilterRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentRestoreManyRequest::class => \PicturePark\API\Normalizer\ContentRestoreManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentManyReferencesRequest::class => \PicturePark\API\Normalizer\ContentManyReferencesRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputResolveManyRequest::class => \PicturePark\API\Normalizer\OutputResolveManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentFieldsBatchUpdateRequest::class => \PicturePark\API\Normalizer\ContentFieldsBatchUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesChangeRequestBase::class => \PicturePark\API\Normalizer\MetadataValuesChangeRequestBaseNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesChangeCommandBase::class => \PicturePark\API\Normalizer\MetadataValuesChangeCommandBaseNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesSchemaUpdateCommand::class => \PicturePark\API\Normalizer\MetadataValuesSchemaUpdateCommandNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesSchemaUpsertCommand::class => \PicturePark\API\Normalizer\MetadataValuesSchemaUpsertCommandNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesSchemaRemoveCommand::class => \PicturePark\API\Normalizer\MetadataValuesSchemaRemoveCommandNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesSchemaReplaceCommand::class => \PicturePark\API\Normalizer\MetadataValuesSchemaReplaceCommandNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesFieldRemoveCommand::class => \PicturePark\API\Normalizer\MetadataValuesFieldRemoveCommandNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesSchemaItemAddCommand::class => \PicturePark\API\Normalizer\MetadataValuesSchemaItemAddCommandNormalizer::class,
        
        \PicturePark\API\Model\MetadataValuesSchemaItemRemoveCommand::class => \PicturePark\API\Normalizer\MetadataValuesSchemaItemRemoveCommandNormalizer::class,
        
        \PicturePark\API\Model\ContentFieldsBatchUpdateFilterRequest::class => \PicturePark\API\Normalizer\ContentFieldsBatchUpdateFilterRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentSearchResult::class => \PicturePark\API\Normalizer\ContentSearchResultNormalizer::class,
        
        \PicturePark\API\Model\ContentRightAggregationCount::class => \PicturePark\API\Normalizer\ContentRightAggregationCountNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfContent::class => \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfContentNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfContent::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfContentNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfContent::class => \PicturePark\API\Normalizer\BaseResultOfContentNormalizer::class,
        
        \PicturePark\API\Model\Content::class => \PicturePark\API\Normalizer\ContentNormalizer::class,
        
        \PicturePark\API\Model\ContentSearchRequest::class => \PicturePark\API\Normalizer\ContentSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\ContentAggregationOnChannelRequest::class => \PicturePark\API\Normalizer\ContentAggregationOnChannelRequestNormalizer::class,
        
        \PicturePark\API\Model\ObjectAggregationResult::class => \PicturePark\API\Normalizer\ObjectAggregationResultNormalizer::class,
        
        \PicturePark\API\Model\ContentAggregationRequest::class => \PicturePark\API\Normalizer\ContentAggregationRequestNormalizer::class,
        
        \PicturePark\API\Model\DisplayValueStatus::class => \PicturePark\API\Normalizer\DisplayValueStatusNormalizer::class,
        
        \PicturePark\API\Model\DocumentHistory::class => \PicturePark\API\Normalizer\DocumentHistoryNormalizer::class,
        
        \PicturePark\API\Model\UserAuditHistory::class => \PicturePark\API\Normalizer\UserAuditHistoryNormalizer::class,
        
        \PicturePark\API\Model\DocumentHistoryDifference::class => \PicturePark\API\Normalizer\DocumentHistoryDifferenceNormalizer::class,
        
        \PicturePark\API\Model\DocumentHistorySearchResult::class => \PicturePark\API\Normalizer\DocumentHistorySearchResultNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfDocumentHistory::class => \PicturePark\API\Normalizer\BaseResultOfDocumentHistoryNormalizer::class,
        
        \PicturePark\API\Model\DocumentHistorySearchRequest::class => \PicturePark\API\Normalizer\DocumentHistorySearchRequestNormalizer::class,
        
        \PicturePark\API\Model\IdentityProvider::class => \PicturePark\API\Normalizer\IdentityProviderNormalizer::class,
        
        \PicturePark\API\Model\IdentityProviderEditable::class => \PicturePark\API\Normalizer\IdentityProviderEditableNormalizer::class,
        
        \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class => \PicturePark\API\Normalizer\IdpClaimToUserAttributeMappingNormalizer::class,
        
        \PicturePark\API\Model\IdpGroupToUserRoleMapping::class => \PicturePark\API\Normalizer\IdpGroupToUserRoleMappingNormalizer::class,
        
        \PicturePark\API\Model\IdentityProviderBasicInfo::class => \PicturePark\API\Normalizer\IdentityProviderBasicInfoNormalizer::class,
        
        \PicturePark\API\Model\VersionInfo::class => \PicturePark\API\Normalizer\VersionInfoNormalizer::class,
        
        \PicturePark\API\Model\CustomerInfo::class => \PicturePark\API\Normalizer\CustomerInfoNormalizer::class,
        
        \PicturePark\API\Model\LanguageConfiguration::class => \PicturePark\API\Normalizer\LanguageConfigurationNormalizer::class,
        
        \PicturePark\API\Model\Language::class => \PicturePark\API\Normalizer\LanguageNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatInfo::class => \PicturePark\API\Normalizer\OutputFormatInfoNormalizer::class,
        
        \PicturePark\API\Model\CustomerApp::class => \PicturePark\API\Normalizer\CustomerAppNormalizer::class,
        
        \PicturePark\API\Model\SystemStatus::class => \PicturePark\API\Normalizer\SystemStatusNormalizer::class,
        
        \PicturePark\API\Model\StatusOfSearchIndexState::class => \PicturePark\API\Normalizer\StatusOfSearchIndexStateNormalizer::class,
        
        \PicturePark\API\Model\StatusOfDisplayValuesState::class => \PicturePark\API\Normalizer\StatusOfDisplayValuesStateNormalizer::class,
        
        \PicturePark\API\Model\StatusOfMetadataState::class => \PicturePark\API\Normalizer\StatusOfMetadataStateNormalizer::class,
        
        \PicturePark\API\Model\ListItemDetail::class => \PicturePark\API\Normalizer\ListItemDetailNormalizer::class,
        
        \PicturePark\API\Model\ListItemUpdateRequest::class => \PicturePark\API\Normalizer\ListItemUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemReferencesResult::class => \PicturePark\API\Normalizer\ListItemReferencesResultNormalizer::class,
        
        \PicturePark\API\Model\ListItemReferencesRequest::class => \PicturePark\API\Normalizer\ListItemReferencesRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemCreateRequest::class => \PicturePark\API\Normalizer\ListItemCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemCreateManyRequest::class => \PicturePark\API\Normalizer\ListItemCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemUpdateManyRequest::class => \PicturePark\API\Normalizer\ListItemUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemUpdateItem::class => \PicturePark\API\Normalizer\ListItemUpdateItemNormalizer::class,
        
        \PicturePark\API\Model\ListItemDeleteManyRequest::class => \PicturePark\API\Normalizer\ListItemDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemDeleteManyFilterRequest::class => \PicturePark\API\Normalizer\ListItemDeleteManyFilterRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemFilterRequest::class => \PicturePark\API\Normalizer\ListItemFilterRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemRestoreManyRequest::class => \PicturePark\API\Normalizer\ListItemRestoreManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemManyReferencesRequest::class => \PicturePark\API\Normalizer\ListItemManyReferencesRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class => \PicturePark\API\Normalizer\ListItemFieldsBatchUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest::class => \PicturePark\API\Normalizer\ListItemFieldsBatchUpdateFilterRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemSearchResult::class => \PicturePark\API\Normalizer\ListItemSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfListItem::class => \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfListItemNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfListItem::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfListItemNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfListItem::class => \PicturePark\API\Normalizer\BaseResultOfListItemNormalizer::class,
        
        \PicturePark\API\Model\ListItem::class => \PicturePark\API\Normalizer\ListItemNormalizer::class,
        
        \PicturePark\API\Model\ListItemSearchRequest::class => \PicturePark\API\Normalizer\ListItemSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemSearchAndAggregationBaseRequest::class => \PicturePark\API\Normalizer\ListItemSearchAndAggregationBaseRequestNormalizer::class,
        
        \PicturePark\API\Model\ListItemAggregationRequest::class => \PicturePark\API\Normalizer\ListItemAggregationRequestNormalizer::class,
        
        \PicturePark\API\Model\LiveStreamSearchResult::class => \PicturePark\API\Normalizer\LiveStreamSearchResultNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfLiveStream::class => \PicturePark\API\Normalizer\BaseResultOfLiveStreamNormalizer::class,
        
        \PicturePark\API\Model\LiveStream::class => \PicturePark\API\Normalizer\LiveStreamNormalizer::class,
        
        \PicturePark\API\Model\LiveStreamTraceJob::class => \PicturePark\API\Normalizer\LiveStreamTraceJobNormalizer::class,
        
        \PicturePark\API\Model\LiveStreamSearchRequest::class => \PicturePark\API\Normalizer\LiveStreamSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\MetadataStatus::class => \PicturePark\API\Normalizer\MetadataStatusNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateManyRequest::class => \PicturePark\API\Normalizer\OutputFormatDownloadFileNamePatternUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateRequestItem::class => \PicturePark\API\Normalizer\OutputFormatDownloadFileNamePatternUpdateRequestItemNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequest::class => \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatSetXmpWritebackStateManyRequest::class => \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequestItem::class => \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateRequestItemNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatRenderPreviewRequest::class => \PicturePark\API\Normalizer\OutputFormatRenderPreviewRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatRenderingSpecification::class => \PicturePark\API\Normalizer\OutputFormatRenderingSpecificationNormalizer::class,
        
        \PicturePark\API\Model\SourceOutputFormats::class => \PicturePark\API\Normalizer\SourceOutputFormatsNormalizer::class,
        
        \PicturePark\API\Model\FormatBase::class => \PicturePark\API\Normalizer\FormatBaseNormalizer::class,
        
        \PicturePark\API\Model\ImageFormatBase::class => \PicturePark\API\Normalizer\ImageFormatBaseNormalizer::class,
        
        \PicturePark\API\Model\ResizeAction::class => \PicturePark\API\Normalizer\ResizeActionNormalizer::class,
        
        \PicturePark\API\Model\ImageActionBase::class => \PicturePark\API\Normalizer\ImageActionBaseNormalizer::class,
        
        \PicturePark\API\Model\AlphaHandlingAction::class => \PicturePark\API\Normalizer\AlphaHandlingActionNormalizer::class,
        
        \PicturePark\API\Model\CropAction::class => \PicturePark\API\Normalizer\CropActionNormalizer::class,
        
        \PicturePark\API\Model\UnsharpenMaskAction::class => \PicturePark\API\Normalizer\UnsharpenMaskActionNormalizer::class,
        
        \PicturePark\API\Model\WatermarkAction::class => \PicturePark\API\Normalizer\WatermarkActionNormalizer::class,
        
        \PicturePark\API\Model\OriginalFormat::class => \PicturePark\API\Normalizer\OriginalFormatNormalizer::class,
        
        \PicturePark\API\Model\JpegFormat::class => \PicturePark\API\Normalizer\JpegFormatNormalizer::class,
        
        \PicturePark\API\Model\PngFormat::class => \PicturePark\API\Normalizer\PngFormatNormalizer::class,
        
        \PicturePark\API\Model\TiffFormat::class => \PicturePark\API\Normalizer\TiffFormatNormalizer::class,
        
        \PicturePark\API\Model\VideoFormatBase::class => \PicturePark\API\Normalizer\VideoFormatBaseNormalizer::class,
        
        \PicturePark\API\Model\Mp4VideoFormat::class => \PicturePark\API\Normalizer\Mp4VideoFormatNormalizer::class,
        
        \PicturePark\API\Model\AudioFormatBase::class => \PicturePark\API\Normalizer\AudioFormatBaseNormalizer::class,
        
        \PicturePark\API\Model\VideoSpriteFormat::class => \PicturePark\API\Normalizer\VideoSpriteFormatNormalizer::class,
        
        \PicturePark\API\Model\VideoStillFormat::class => \PicturePark\API\Normalizer\VideoStillFormatNormalizer::class,
        
        \PicturePark\API\Model\AacAudioFormat::class => \PicturePark\API\Normalizer\AacAudioFormatNormalizer::class,
        
        \PicturePark\API\Model\AudioStillFormat::class => \PicturePark\API\Normalizer\AudioStillFormatNormalizer::class,
        
        \PicturePark\API\Model\Mp3AudioFormat::class => \PicturePark\API\Normalizer\Mp3AudioFormatNormalizer::class,
        
        \PicturePark\API\Model\DocumentFormatBase::class => \PicturePark\API\Normalizer\DocumentFormatBaseNormalizer::class,
        
        \PicturePark\API\Model\DocumentStillFormat::class => \PicturePark\API\Normalizer\DocumentStillFormatNormalizer::class,
        
        \PicturePark\API\Model\PdfFormat::class => \PicturePark\API\Normalizer\PdfFormatNormalizer::class,
        
        \PicturePark\API\Model\VectorFormatBase::class => \PicturePark\API\Normalizer\VectorFormatBaseNormalizer::class,
        
        \PicturePark\API\Model\SvgFormat::class => \PicturePark\API\Normalizer\SvgFormatNormalizer::class,
        
        \PicturePark\API\Model\VectorStillFormat::class => \PicturePark\API\Normalizer\VectorStillFormatNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatDetail::class => \PicturePark\API\Normalizer\OutputFormatDetailNormalizer::class,
        
        \PicturePark\API\Model\OutputFormat::class => \PicturePark\API\Normalizer\OutputFormatNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatEditable::class => \PicturePark\API\Normalizer\OutputFormatEditableNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatCreateManyRequest::class => \PicturePark\API\Normalizer\OutputFormatCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatUpdateManyRequest::class => \PicturePark\API\Normalizer\OutputFormatUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatUpdateManyRequestItem::class => \PicturePark\API\Normalizer\OutputFormatUpdateManyRequestItemNormalizer::class,
        
        \PicturePark\API\Model\OutputFormatDeleteManyRequest::class => \PicturePark\API\Normalizer\OutputFormatDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputSearchResult::class => \PicturePark\API\Normalizer\OutputSearchResultNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfOutput::class => \PicturePark\API\Normalizer\BaseResultOfOutputNormalizer::class,
        
        \PicturePark\API\Model\OutputSearchRequest::class => \PicturePark\API\Normalizer\OutputSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\OutputResetRetryAttemptsRequest::class => \PicturePark\API\Normalizer\OutputResetRetryAttemptsRequestNormalizer::class,
        
        \PicturePark\API\Model\UserProfile::class => \PicturePark\API\Normalizer\UserProfileNormalizer::class,
        
        \PicturePark\API\Model\UserAddress::class => \PicturePark\API\Normalizer\UserAddressNormalizer::class,
        
        \PicturePark\API\Model\UserProfileUpdateRequest::class => \PicturePark\API\Normalizer\UserProfileUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionSetDetail::class => \PicturePark\API\Normalizer\SchemaPermissionSetDetailNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetDetailOfMetadataRight::class => \PicturePark\API\Normalizer\PermissionSetDetailOfMetadataRightNormalizer::class,
        
        \PicturePark\API\Model\PermissionUserRoleRightsOfMetadataRight::class => \PicturePark\API\Normalizer\PermissionUserRoleRightsOfMetadataRightNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionSetCreateRequest::class => \PicturePark\API\Normalizer\SchemaPermissionSetCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetCreateRequestOfMetadataRight::class => \PicturePark\API\Normalizer\PermissionSetCreateRequestOfMetadataRightNormalizer::class,
        
        \PicturePark\API\Model\UserRoleRightsOfMetadataRight::class => \PicturePark\API\Normalizer\UserRoleRightsOfMetadataRightNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionSetUpdateRequest::class => \PicturePark\API\Normalizer\SchemaPermissionSetUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class => \PicturePark\API\Normalizer\PermissionSetUpdateRequestOfMetadataRightNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionSetCreateManyRequest::class => \PicturePark\API\Normalizer\SchemaPermissionSetCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest::class => \PicturePark\API\Normalizer\SchemaPermissionSetUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaPermissionSetUpdateRequestItem::class => \PicturePark\API\Normalizer\SchemaPermissionSetUpdateRequestItemNormalizer::class,
        
        \PicturePark\API\Model\PermissionSetUpdateRequestItemOfMetadataRight::class => \PicturePark\API\Normalizer\PermissionSetUpdateRequestItemOfMetadataRightNormalizer::class,
        
        \PicturePark\API\Model\SchemaDetail::class => \PicturePark\API\Normalizer\SchemaDetailNormalizer::class,
        
        \PicturePark\API\Model\DisplayPattern::class => \PicturePark\API\Normalizer\DisplayPatternNormalizer::class,
        
        \PicturePark\API\Model\FieldBase::class => \PicturePark\API\Normalizer\FieldBaseNormalizer::class,
        
        \PicturePark\API\Model\FieldBoolean::class => \PicturePark\API\Normalizer\FieldBooleanNormalizer::class,
        
        \PicturePark\API\Model\FieldDate::class => \PicturePark\API\Normalizer\FieldDateNormalizer::class,
        
        \PicturePark\API\Model\FieldDateTime::class => \PicturePark\API\Normalizer\FieldDateTimeNormalizer::class,
        
        \PicturePark\API\Model\FieldDateTimeArray::class => \PicturePark\API\Normalizer\FieldDateTimeArrayNormalizer::class,
        
        \PicturePark\API\Model\FieldDecimal::class => \PicturePark\API\Normalizer\FieldDecimalNormalizer::class,
        
        \PicturePark\API\Model\FieldDictionary::class => \PicturePark\API\Normalizer\FieldDictionaryNormalizer::class,
        
        \PicturePark\API\Model\FieldDictionaryArray::class => \PicturePark\API\Normalizer\FieldDictionaryArrayNormalizer::class,
        
        \PicturePark\API\Model\FieldGeoPoint::class => \PicturePark\API\Normalizer\FieldGeoPointNormalizer::class,
        
        \PicturePark\API\Model\FieldTrigger::class => \PicturePark\API\Normalizer\FieldTriggerNormalizer::class,
        
        \PicturePark\API\Model\FieldLong::class => \PicturePark\API\Normalizer\FieldLongNormalizer::class,
        
        \PicturePark\API\Model\FieldLongArray::class => \PicturePark\API\Normalizer\FieldLongArrayNormalizer::class,
        
        \PicturePark\API\Model\FieldSingleFieldset::class => \PicturePark\API\Normalizer\FieldSingleFieldsetNormalizer::class,
        
        \PicturePark\API\Model\SchemaIndexingInfo::class => \PicturePark\API\Normalizer\SchemaIndexingInfoNormalizer::class,
        
        \PicturePark\API\Model\FieldIndexingInfo::class => \PicturePark\API\Normalizer\FieldIndexingInfoNormalizer::class,
        
        \PicturePark\API\Model\FieldMultiFieldset::class => \PicturePark\API\Normalizer\FieldMultiFieldsetNormalizer::class,
        
        \PicturePark\API\Model\FieldSingleTagbox::class => \PicturePark\API\Normalizer\FieldSingleTagboxNormalizer::class,
        
        \PicturePark\API\Model\FieldMultiTagbox::class => \PicturePark\API\Normalizer\FieldMultiTagboxNormalizer::class,
        
        \PicturePark\API\Model\FieldString::class => \PicturePark\API\Normalizer\FieldStringNormalizer::class,
        
        \PicturePark\API\Model\AnalyzerBase::class => \PicturePark\API\Normalizer\AnalyzerBaseNormalizer::class,
        
        \PicturePark\API\Model\EdgeNGramAnalyzer::class => \PicturePark\API\Normalizer\EdgeNGramAnalyzerNormalizer::class,
        
        \PicturePark\API\Model\LanguageAnalyzer::class => \PicturePark\API\Normalizer\LanguageAnalyzerNormalizer::class,
        
        \PicturePark\API\Model\NGramAnalyzer::class => \PicturePark\API\Normalizer\NGramAnalyzerNormalizer::class,
        
        \PicturePark\API\Model\PathHierarchyAnalyzer::class => \PicturePark\API\Normalizer\PathHierarchyAnalyzerNormalizer::class,
        
        \PicturePark\API\Model\SimpleAnalyzer::class => \PicturePark\API\Normalizer\SimpleAnalyzerNormalizer::class,
        
        \PicturePark\API\Model\FieldStringArray::class => \PicturePark\API\Normalizer\FieldStringArrayNormalizer::class,
        
        \PicturePark\API\Model\FieldTranslatedString::class => \PicturePark\API\Normalizer\FieldTranslatedStringNormalizer::class,
        
        \PicturePark\API\Model\FieldSingleRelation::class => \PicturePark\API\Normalizer\FieldSingleRelationNormalizer::class,
        
        \PicturePark\API\Model\RelationType::class => \PicturePark\API\Normalizer\RelationTypeNormalizer::class,
        
        \PicturePark\API\Model\FieldMultiRelation::class => \PicturePark\API\Normalizer\FieldMultiRelationNormalizer::class,
        
        \PicturePark\API\Model\FieldOverwriteBase::class => \PicturePark\API\Normalizer\FieldOverwriteBaseNormalizer::class,
        
        \PicturePark\API\Model\FieldOverwriteSingleTagbox::class => \PicturePark\API\Normalizer\FieldOverwriteSingleTagboxNormalizer::class,
        
        \PicturePark\API\Model\FieldOverwriteMultiTagbox::class => \PicturePark\API\Normalizer\FieldOverwriteMultiTagboxNormalizer::class,
        
        \PicturePark\API\Model\SearchFieldCount::class => \PicturePark\API\Normalizer\SearchFieldCountNormalizer::class,
        
        \PicturePark\API\Model\SchemaExistsResponse::class => \PicturePark\API\Normalizer\SchemaExistsResponseNormalizer::class,
        
        \PicturePark\API\Model\FieldExistsResponse::class => \PicturePark\API\Normalizer\FieldExistsResponseNormalizer::class,
        
        \PicturePark\API\Model\SchemaUpdateResult::class => \PicturePark\API\Normalizer\SchemaUpdateResultNormalizer::class,
        
        \PicturePark\API\Model\SchemaUpdateRequest::class => \PicturePark\API\Normalizer\SchemaUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaOwnershipTransferRequest::class => \PicturePark\API\Normalizer\SchemaOwnershipTransferRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaCreateResult::class => \PicturePark\API\Normalizer\SchemaCreateResultNormalizer::class,
        
        \PicturePark\API\Model\SchemaCreateRequest::class => \PicturePark\API\Normalizer\SchemaCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaCreateManyRequest::class => \PicturePark\API\Normalizer\SchemaCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaUpdateManyRequest::class => \PicturePark\API\Normalizer\SchemaUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaUpdateItem::class => \PicturePark\API\Normalizer\SchemaUpdateItemNormalizer::class,
        
        \PicturePark\API\Model\SchemaOwnershipTransferManyRequest::class => \PicturePark\API\Normalizer\SchemaOwnershipTransferManyRequestNormalizer::class,
        
        \PicturePark\API\Model\SchemaSearchResult::class => \PicturePark\API\Normalizer\SchemaSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfSchema::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfSchemaNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfSchema::class => \PicturePark\API\Normalizer\BaseResultOfSchemaNormalizer::class,
        
        \PicturePark\API\Model\Schema::class => \PicturePark\API\Normalizer\SchemaNormalizer::class,
        
        \PicturePark\API\Model\SchemaSearchRequest::class => \PicturePark\API\Normalizer\SchemaSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\IndexField::class => \PicturePark\API\Normalizer\IndexFieldNormalizer::class,
        
        \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest::class => \PicturePark\API\Normalizer\IndexFieldsSearchBySchemaIdsRequestNormalizer::class,
        
        \PicturePark\API\Model\Transfer::class => \PicturePark\API\Normalizer\TransferNormalizer::class,
        
        \PicturePark\API\Model\SchemaImportRequest::class => \PicturePark\API\Normalizer\SchemaImportRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareDetail::class => \PicturePark\API\Normalizer\ShareDetailNormalizer::class,
        
        \PicturePark\API\Model\ShareUser::class => \PicturePark\API\Normalizer\ShareUserNormalizer::class,
        
        \PicturePark\API\Model\ShareContentDetail::class => \PicturePark\API\Normalizer\ShareContentDetailNormalizer::class,
        
        \PicturePark\API\Model\ShareOutputBase::class => \PicturePark\API\Normalizer\ShareOutputBaseNormalizer::class,
        
        \PicturePark\API\Model\ShareOutputBasic::class => \PicturePark\API\Normalizer\ShareOutputBasicNormalizer::class,
        
        \PicturePark\API\Model\ShareOutputEmbed::class => \PicturePark\API\Normalizer\ShareOutputEmbedNormalizer::class,
        
        \PicturePark\API\Model\ShareDataBase::class => \PicturePark\API\Normalizer\ShareDataBaseNormalizer::class,
        
        \PicturePark\API\Model\ShareDataEmbed::class => \PicturePark\API\Normalizer\ShareDataEmbedNormalizer::class,
        
        \PicturePark\API\Model\ShareDataBasic::class => \PicturePark\API\Normalizer\ShareDataBasicNormalizer::class,
        
        \PicturePark\API\Model\MailRecipient::class => \PicturePark\API\Normalizer\MailRecipientNormalizer::class,
        
        \PicturePark\API\Model\UserEmail::class => \PicturePark\API\Normalizer\UserEmailNormalizer::class,
        
        \PicturePark\API\Model\InternalRecipient::class => \PicturePark\API\Normalizer\InternalRecipientNormalizer::class,
        
        \PicturePark\API\Model\ShareBaseUpdateRequest::class => \PicturePark\API\Normalizer\ShareBaseUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareContent::class => \PicturePark\API\Normalizer\ShareContentNormalizer::class,
        
        \PicturePark\API\Model\ShareBasicUpdateRequest::class => \PicturePark\API\Normalizer\ShareBasicUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareEmbedUpdateRequest::class => \PicturePark\API\Normalizer\ShareEmbedUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareBaseCreateRequest::class => \PicturePark\API\Normalizer\ShareBaseCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareBasicCreateRequest::class => \PicturePark\API\Normalizer\ShareBasicCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareEmbedCreateRequest::class => \PicturePark\API\Normalizer\ShareEmbedCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareDeleteManyRequest::class => \PicturePark\API\Normalizer\ShareDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareRevokeManyRequest::class => \PicturePark\API\Normalizer\ShareRevokeManyRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareAggregationRequest::class => \PicturePark\API\Normalizer\ShareAggregationRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareSearchAndAggregationBaseRequest::class => \PicturePark\API\Normalizer\ShareSearchAndAggregationBaseRequestNormalizer::class,
        
        \PicturePark\API\Model\ShareSearchResult::class => \PicturePark\API\Normalizer\ShareSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfShare::class => \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfShareNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfShare::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfShareNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfShare::class => \PicturePark\API\Normalizer\BaseResultOfShareNormalizer::class,
        
        \PicturePark\API\Model\Share::class => \PicturePark\API\Normalizer\ShareNormalizer::class,
        
        \PicturePark\API\Model\ShareSearchRequest::class => \PicturePark\API\Normalizer\ShareSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\CreateTransferRequest::class => \PicturePark\API\Normalizer\CreateTransferRequestNormalizer::class,
        
        \PicturePark\API\Model\TransferUploadFile::class => \PicturePark\API\Normalizer\TransferUploadFileNormalizer::class,
        
        \PicturePark\API\Model\TransferFile::class => \PicturePark\API\Normalizer\TransferFileNormalizer::class,
        
        \PicturePark\API\Model\TransferWebLink::class => \PicturePark\API\Normalizer\TransferWebLinkNormalizer::class,
        
        \PicturePark\API\Model\TransferDetail::class => \PicturePark\API\Normalizer\TransferDetailNormalizer::class,
        
        \PicturePark\API\Model\ImportTransferRequest::class => \PicturePark\API\Normalizer\ImportTransferRequestNormalizer::class,
        
        \PicturePark\API\Model\ImportTransferPartialRequest::class => \PicturePark\API\Normalizer\ImportTransferPartialRequestNormalizer::class,
        
        \PicturePark\API\Model\FileTransferCreateItem::class => \PicturePark\API\Normalizer\FileTransferCreateItemNormalizer::class,
        
        \PicturePark\API\Model\TransferSearchResult::class => \PicturePark\API\Normalizer\TransferSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfTransfer::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfTransferNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfTransfer::class => \PicturePark\API\Normalizer\BaseResultOfTransferNormalizer::class,
        
        \PicturePark\API\Model\TransferSearchRequest::class => \PicturePark\API\Normalizer\TransferSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\FileTransferDetail::class => \PicturePark\API\Normalizer\FileTransferDetailNormalizer::class,
        
        \PicturePark\API\Model\FileMetadata::class => \PicturePark\API\Normalizer\FileMetadataNormalizer::class,
        
        \PicturePark\API\Model\FileTransferOutput::class => \PicturePark\API\Normalizer\FileTransferOutputNormalizer::class,
        
        \PicturePark\API\Model\FileTransfer::class => \PicturePark\API\Normalizer\FileTransferNormalizer::class,
        
        \PicturePark\API\Model\FileTransferSearchResult::class => \PicturePark\API\Normalizer\FileTransferSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfFileTransfer::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfFileTransferNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfFileTransfer::class => \PicturePark\API\Normalizer\BaseResultOfFileTransferNormalizer::class,
        
        \PicturePark\API\Model\FileTransferSearchRequest::class => \PicturePark\API\Normalizer\FileTransferSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\FileTransferDeleteRequest::class => \PicturePark\API\Normalizer\FileTransferDeleteRequestNormalizer::class,
        
        \PicturePark\API\Model\Blacklist::class => \PicturePark\API\Normalizer\BlacklistNormalizer::class,
        
        \PicturePark\API\Model\BlacklistItem::class => \PicturePark\API\Normalizer\BlacklistItemNormalizer::class,
        
        \PicturePark\API\Model\UserRoleSearchResult::class => \PicturePark\API\Normalizer\UserRoleSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfUserRole::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfUserRoleNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfUserRole::class => \PicturePark\API\Normalizer\BaseResultOfUserRoleNormalizer::class,
        
        \PicturePark\API\Model\UserRole::class => \PicturePark\API\Normalizer\UserRoleNormalizer::class,
        
        \PicturePark\API\Model\UserRoleEditable::class => \PicturePark\API\Normalizer\UserRoleEditableNormalizer::class,
        
        \PicturePark\API\Model\UserRoleSearchRequest::class => \PicturePark\API\Normalizer\UserRoleSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\UserRoleDetail::class => \PicturePark\API\Normalizer\UserRoleDetailNormalizer::class,
        
        \PicturePark\API\Model\UserRoleCreateManyRequest::class => \PicturePark\API\Normalizer\UserRoleCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserRoleCreateRequest::class => \PicturePark\API\Normalizer\UserRoleCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\UserRoleUpdateManyRequest::class => \PicturePark\API\Normalizer\UserRoleUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserRoleDeleteManyRequest::class => \PicturePark\API\Normalizer\UserRoleDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserDetail::class => \PicturePark\API\Normalizer\UserDetailNormalizer::class,
        
        \PicturePark\API\Model\UserRoleAssignment::class => \PicturePark\API\Normalizer\UserRoleAssignmentNormalizer::class,
        
        \PicturePark\API\Model\OwnerToken::class => \PicturePark\API\Normalizer\OwnerTokenNormalizer::class,
        
        \PicturePark\API\Model\UserUpdateRequest::class => \PicturePark\API\Normalizer\UserUpdateRequestNormalizer::class,
        
        \PicturePark\API\Model\UserLockRequest::class => \PicturePark\API\Normalizer\UserLockRequestNormalizer::class,
        
        \PicturePark\API\Model\UserLockManyRequest::class => \PicturePark\API\Normalizer\UserLockManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserManyRequestBase::class => \PicturePark\API\Normalizer\UserManyRequestBaseNormalizer::class,
        
        \PicturePark\API\Model\UserReviewRequest::class => \PicturePark\API\Normalizer\UserReviewRequestNormalizer::class,
        
        \PicturePark\API\Model\UserReviewManyRequest::class => \PicturePark\API\Normalizer\UserReviewManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserInviteManyRequest::class => \PicturePark\API\Normalizer\UserInviteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserReinviteManyRequest::class => \PicturePark\API\Normalizer\UserReinviteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserRoleAssignManyRequest::class => \PicturePark\API\Normalizer\UserRoleAssignManyRequestNormalizer::class,
        
        \PicturePark\API\Model\UserDeleteRequest::class => \PicturePark\API\Normalizer\UserDeleteRequestNormalizer::class,
        
        \PicturePark\API\Model\UserCreateRequest::class => \PicturePark\API\Normalizer\UserCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\UserSearchResult::class => \PicturePark\API\Normalizer\UserSearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfUserWithRoles::class => \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfUserWithRolesNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfUserWithRoles::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfUserWithRolesNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfUserWithRoles::class => \PicturePark\API\Normalizer\BaseResultOfUserWithRolesNormalizer::class,
        
        \PicturePark\API\Model\UserWithRoles::class => \PicturePark\API\Normalizer\UserWithRolesNormalizer::class,
        
        \PicturePark\API\Model\UserSearchRequest::class => \PicturePark\API\Normalizer\UserSearchRequestNormalizer::class,
        
        \PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class => \PicturePark\API\Normalizer\UserSearchAndAggregationBaseRequestNormalizer::class,
        
        \PicturePark\API\Model\UserAggregationRequest::class => \PicturePark\API\Normalizer\UserAggregationRequestNormalizer::class,
        
        \PicturePark\API\Model\UserUpdateIdentityProviderManyRequest::class => \PicturePark\API\Normalizer\UserUpdateIdentityProviderManyRequestNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingTargets::class => \PicturePark\API\Normalizer\XmpMappingTargetsNormalizer::class,
        
        \PicturePark\API\Model\XmpField::class => \PicturePark\API\Normalizer\XmpFieldNormalizer::class,
        
        \PicturePark\API\Model\MetadataField::class => \PicturePark\API\Normalizer\MetadataFieldNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntrySearchResult::class => \PicturePark\API\Normalizer\XmpMappingEntrySearchResultNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntry::class => \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntryNormalizer::class,
        
        \PicturePark\API\Model\SearchBehaviorBaseResultOfXmpMappingEntry::class => \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfXmpMappingEntryNormalizer::class,
        
        \PicturePark\API\Model\BaseResultOfXmpMappingEntry::class => \PicturePark\API\Normalizer\BaseResultOfXmpMappingEntryNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntry::class => \PicturePark\API\Normalizer\XmpMappingEntryNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryEditable::class => \PicturePark\API\Normalizer\XmpMappingEntryEditableNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryConfigurationBase::class => \PicturePark\API\Normalizer\XmpMappingEntryConfigurationBaseNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryConfigurationTagbox::class => \PicturePark\API\Normalizer\XmpMappingEntryConfigurationTagboxNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntrySearchRequest::class => \PicturePark\API\Normalizer\XmpMappingEntrySearchRequestNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryCreateRequest::class => \PicturePark\API\Normalizer\XmpMappingEntryCreateRequestNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryCreateManyRequest::class => \PicturePark\API\Normalizer\XmpMappingEntryCreateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryUpdateManyRequest::class => \PicturePark\API\Normalizer\XmpMappingEntryUpdateManyRequestNormalizer::class,
        
        \PicturePark\API\Model\XmpMappingEntryDeleteManyRequest::class => \PicturePark\API\Normalizer\XmpMappingEntryDeleteManyRequestNormalizer::class,
        
        \PicturePark\API\Model\LiveStreamMessage::class => \PicturePark\API\Normalizer\LiveStreamMessageNormalizer::class,
        
        \PicturePark\API\Model\DocumentChange::class => \PicturePark\API\Normalizer\DocumentChangeNormalizer::class,
        
        \PicturePark\API\Model\ApplicationEvent::class => \PicturePark\API\Normalizer\ApplicationEventNormalizer::class,
        
        \PicturePark\API\Model\TransferEvent::class => \PicturePark\API\Normalizer\TransferEventNormalizer::class,
        
        \PicturePark\API\Model\ReindexEvent::class => \PicturePark\API\Normalizer\ReindexEventNormalizer::class,
        
        \PicturePark\API\Model\ContentDetailViewEvent::class => \PicturePark\API\Normalizer\ContentDetailViewEventNormalizer::class,
        
        \PicturePark\API\Model\ContentDownloadEvent::class => \PicturePark\API\Normalizer\ContentDownloadEventNormalizer::class,
        
        \PicturePark\API\Model\DownloadTrackingInfo::class => \PicturePark\API\Normalizer\DownloadTrackingInfoNormalizer::class,
        
        \PicturePark\API\Model\SessionRenewalEvent::class => \PicturePark\API\Normalizer\SessionRenewalEventNormalizer::class,
        
        \PicturePark\API\Model\SharePageViewEvent::class => \PicturePark\API\Normalizer\SharePageViewEventNormalizer::class,
        
        \PicturePark\API\Model\ApiStatisticsEvent::class => \PicturePark\API\Normalizer\ApiStatisticsEventNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessEvent::class => \PicturePark\API\Normalizer\BusinessProcessEventNormalizer::class,
        
        \PicturePark\API\Model\OutputRenderedEvent::class => \PicturePark\API\Normalizer\OutputRenderedEventNormalizer::class,
        
        \PicturePark\API\Model\ConfigurationChangeEvent::class => \PicturePark\API\Normalizer\ConfigurationChangeEventNormalizer::class,
        
        \PicturePark\API\Model\CustomerChangeEvent::class => \PicturePark\API\Normalizer\CustomerChangeEventNormalizer::class,
        
        \PicturePark\API\Model\SearchReindexCompletedEvent::class => \PicturePark\API\Normalizer\SearchReindexCompletedEventNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleFiredEvent::class => \PicturePark\API\Normalizer\BusinessRuleFiredEventNormalizer::class,
        
        \PicturePark\API\Model\BusinessRuleFiredEventDetail::class => \PicturePark\API\Normalizer\BusinessRuleFiredEventDetailNormalizer::class,
        
        \PicturePark\API\Model\BusinessProcessCancellationRequestedEvent::class => \PicturePark\API\Normalizer\BusinessProcessCancellationRequestedEventNormalizer::class,
        
        \PicturePark\API\Model\XmpWritebackCompletedEvent::class => \PicturePark\API\Normalizer\XmpWritebackCompletedEventNormalizer::class,
        
        \PicturePark\API\Model\Message::class => \PicturePark\API\Normalizer\MessageNormalizer::class,
        
        \PicturePark\API\Model\ConsoleMessage::class => \PicturePark\API\Normalizer\ConsoleMessageNormalizer::class,
        
        \PicturePark\API\Model\TupleOfStringAndString::class => \PicturePark\API\Normalizer\TupleOfStringAndStringNormalizer::class,
        
        \PicturePark\API\Model\NodeInfoMessage::class => \PicturePark\API\Normalizer\NodeInfoMessageNormalizer::class,
        
        \PicturePark\API\Model\AudioMetadata::class => \PicturePark\API\Normalizer\AudioMetadataNormalizer::class,
        
        \PicturePark\API\Model\AudioStream::class => \PicturePark\API\Normalizer\AudioStreamNormalizer::class,
        
        \PicturePark\API\Model\DocumentMetadata::class => \PicturePark\API\Normalizer\DocumentMetadataNormalizer::class,
        
        \PicturePark\API\Model\EpsMetadata::class => \PicturePark\API\Normalizer\EpsMetadataNormalizer::class,
        
        \PicturePark\API\Model\ImageMetadata::class => \PicturePark\API\Normalizer\ImageMetadataNormalizer::class,
        
        \PicturePark\API\Model\VideoMetadata::class => \PicturePark\API\Normalizer\VideoMetadataNormalizer::class,
        
        \PicturePark\API\Model\VideoStream::class => \PicturePark\API\Normalizer\VideoStreamNormalizer::class,
        
        \PicturePark\API\Model\VectorMetadata::class => \PicturePark\API\Normalizer\VectorMetadataNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \PicturePark\API\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \PicturePark\API\Model\BusinessProcess::class => false,
            \PicturePark\API\Model\BusinessProcessState::class => false,
            \PicturePark\API\Model\ErrorResponse::class => false,
            \PicturePark\API\Model\PictureparkValidationException::class => false,
            \PicturePark\API\Model\PictureparkBusinessException::class => false,
            \PicturePark\API\Model\PictureparkException::class => false,
            \PicturePark\API\Model\PictureparkConflictException::class => false,
            \PicturePark\API\Model\PictureparkTimeoutException::class => false,
            \PicturePark\API\Model\PictureparkForbiddenException::class => false,
            \PicturePark\API\Model\UserEmailAlreadyExistsException::class => false,
            \PicturePark\API\Model\UserRoleAssignedException::class => false,
            \PicturePark\API\Model\UnableToDeleteUserRoleException::class => false,
            \PicturePark\API\Model\UserNotFoundException::class => false,
            \PicturePark\API\Model\UserInactiveOrDeletedException::class => false,
            \PicturePark\API\Model\InactiveOrDeletedUserRefusedAccessException::class => false,
            \PicturePark\API\Model\TermsOfServiceNotNewestException::class => false,
            \PicturePark\API\Model\IllegalAuthorizationStateTransitionException::class => false,
            \PicturePark\API\Model\TermsOfServiceConsentRequiredException::class => false,
            \PicturePark\API\Model\UserRolesNotFoundException::class => false,
            \PicturePark\API\Model\PictureparkNotFoundException::class => false,
            \PicturePark\API\Model\UnauthorizedException::class => false,
            \PicturePark\API\Model\UserUnlockDisallowedException::class => false,
            \PicturePark\API\Model\UserAlreadyInRequestedLockStateException::class => false,
            \PicturePark\API\Model\LoginUsingIncorrectIdentityProviderException::class => false,
            \PicturePark\API\Model\IdentityProviderNotFoundException::class => false,
            \PicturePark\API\Model\UserDoesNotSupportLocalLoginException::class => false,
            \PicturePark\API\Model\UserAttributeNotSynchronizableException::class => false,
            \PicturePark\API\Model\UnableToMapMultipleClaimTypesIntoSameAttributeException::class => false,
            \PicturePark\API\Model\UnableToChangeMappedUserRolesForFederatedUserException::class => false,
            \PicturePark\API\Model\UnableToDeleteDefaultUserRoleException::class => false,
            \PicturePark\API\Model\UnableToDeleteUserRoleReferencedInIdentityProviderGroupMappingException::class => false,
            \PicturePark\API\Model\UserPropertyChangeNotSupportedException::class => false,
            \PicturePark\API\Model\RenderingException::class => false,
            \PicturePark\API\Model\FormatNotApplicableForRenderingException::class => false,
            \PicturePark\API\Model\ServiceProviderDeleteException::class => false,
            \PicturePark\API\Model\ServiceProviderCreateException::class => false,
            \PicturePark\API\Model\ServiceProviderNotFoundException::class => false,
            \PicturePark\API\Model\DocumentVersionNotFoundException::class => false,
            \PicturePark\API\Model\DefaultChannelDeleteException::class => false,
            \PicturePark\API\Model\ChannelsNotFoundException::class => false,
            \PicturePark\API\Model\SuperAdminRolesNotAssignableToChannelException::class => false,
            \PicturePark\API\Model\ElasticVersionUpdateException::class => false,
            \PicturePark\API\Model\InvalidVersionException::class => false,
            \PicturePark\API\Model\EnvironmentNotDeactivatedException::class => false,
            \PicturePark\API\Model\EnvironmentNotFoundException::class => false,
            \PicturePark\API\Model\EnvironmentDeactivationException::class => false,
            \PicturePark\API\Model\CustomerClonesNotAcceptedException::class => false,
            \PicturePark\API\Model\ShareNotFoundException::class => false,
            \PicturePark\API\Model\ShareByTokenNotFoundException::class => false,
            \PicturePark\API\Model\TokenGenerationException::class => false,
            \PicturePark\API\Model\ShareExpiredException::class => false,
            \PicturePark\API\Model\ShareSizeLimitExceededException::class => false,
            \PicturePark\API\Model\OutputIdNotFoundException::class => false,
            \PicturePark\API\Model\OutputNotFoundException::class => false,
            \PicturePark\API\Model\UnableToCreateOrModifyStaticOutputFormatException::class => false,
            \PicturePark\API\Model\NotSupportedFileMappingException::class => false,
            \PicturePark\API\Model\NotSupportedFileMappingForDynamicFormatException::class => false,
            \PicturePark\API\Model\NotSupportedFileExtensionException::class => false,
            \PicturePark\API\Model\DuplicateOutputFormatIdException::class => false,
            \PicturePark\API\Model\OutputFormatResizingNotSupportedException::class => false,
            \PicturePark\API\Model\OutputBackupNotRequestedException::class => false,
            \PicturePark\API\Model\DownloadLinkExpiredException::class => false,
            \PicturePark\API\Model\RenderingNotAwaitedException::class => false,
            \PicturePark\API\Model\LeaseNotAcquiredException::class => false,
            \PicturePark\API\Model\OperationInProgressException::class => false,
            \PicturePark\API\Model\RetryException::class => false,
            \PicturePark\API\Model\OwnerTokenNotFoundException::class => false,
            \PicturePark\API\Model\InvalidStateException::class => false,
            \PicturePark\API\Model\PictureparkArgumentNullException::class => false,
            \PicturePark\API\Model\ObjectTypeMismatchException::class => false,
            \PicturePark\API\Model\InvalidStateTransitionException::class => false,
            \PicturePark\API\Model\FailedToLockException::class => false,
            \PicturePark\API\Model\PictureparkOperationCanceledException::class => false,
            \PicturePark\API\Model\PictureparkApplicationException::class => false,
            \PicturePark\API\Model\MissingCustomerDefaultLanguageException::class => false,
            \PicturePark\API\Model\PartialOperationNotSupportedException::class => false,
            \PicturePark\API\Model\ContractMismatchException::class => false,
            \PicturePark\API\Model\InvalidArgumentException::class => false,
            \PicturePark\API\Model\ArgumentRangeException::class => false,
            \PicturePark\API\Model\UnknownException::class => false,
            \PicturePark\API\Model\OwnerTokenInUseException::class => false,
            \PicturePark\API\Model\InvalidValueFormatException::class => false,
            \PicturePark\API\Model\ItemIdDuplicatedException::class => false,
            \PicturePark\API\Model\RequestSizeLimitExceededException::class => false,
            \PicturePark\API\Model\CustomerViolationException::class => false,
            \PicturePark\API\Model\CustomerAliasNotFoundException::class => false,
            \PicturePark\API\Model\CustomerAliasInUseException::class => false,
            \PicturePark\API\Model\CustomerNotDeactivatedException::class => false,
            \PicturePark\API\Model\CustomerDeactivationException::class => false,
            \PicturePark\API\Model\CustomerHostNotFoundException::class => false,
            \PicturePark\API\Model\CustomerNotFoundException::class => false,
            \PicturePark\API\Model\CustomerNotActiveException::class => false,
            \PicturePark\API\Model\CustomerBoostValuesInvalidException::class => false,
            \PicturePark\API\Model\SnapshotRetentionTimeTooShortException::class => false,
            \PicturePark\API\Model\ReshardIndexNotAllowedException::class => false,
            \PicturePark\API\Model\ReshardNumberOfShardsInvalidException::class => false,
            \PicturePark\API\Model\ReshardNumberOfRoutingShardsInvalidException::class => false,
            \PicturePark\API\Model\ReshardNumberOfShardsInvalidForExistingRoutingShardsException::class => false,
            \PicturePark\API\Model\ConfigurationIndexNotFoundException::class => false,
            \PicturePark\API\Model\DuplicateSearchIndexDocException::class => false,
            \PicturePark\API\Model\SearchIndexDocNotFoundException::class => false,
            \PicturePark\API\Model\IndexDocumentNotFoundException::class => false,
            \PicturePark\API\Model\DuplicateAliasException::class => false,
            \PicturePark\API\Model\SearchIndexNotFoundException::class => false,
            \PicturePark\API\Model\DefaultSearchIndexDeleteException::class => false,
            \PicturePark\API\Model\SearchIndexInUseException::class => false,
            \PicturePark\API\Model\IndexException::class => false,
            \PicturePark\API\Model\IndexMappingException::class => false,
            \PicturePark\API\Model\DuplicatedSearchBehaviorException::class => false,
            \PicturePark\API\Model\SearchStringLeadingWildcardException::class => false,
            \PicturePark\API\Model\DuplicateAggregatorException::class => false,
            \PicturePark\API\Model\InvalidDateTimeFormatException::class => false,
            \PicturePark\API\Model\InvalidSortFieldException::class => false,
            \PicturePark\API\Model\DocumentVersionConflictException::class => false,
            \PicturePark\API\Model\RedisDatabaseExceededException::class => false,
            \PicturePark\API\Model\DuplicateDocumentException::class => false,
            \PicturePark\API\Model\ObjectStoreResponseException::class => false,
            \PicturePark\API\Model\ObjectStoreException::class => false,
            \PicturePark\API\Model\QueryException::class => false,
            \PicturePark\API\Model\PermissionOwnershipTransferException::class => false,
            \PicturePark\API\Model\PermissionSetNotFoundException::class => false,
            \PicturePark\API\Model\PermissionSetAggregateException::class => false,
            \PicturePark\API\Model\DuplicateRightException::class => false,
            \PicturePark\API\Model\PermissionValidationException::class => false,
            \PicturePark\API\Model\PermissionSetInUseException::class => false,
            \PicturePark\API\Model\ContentPermissionException::class => false,
            \PicturePark\API\Model\ListItemPermissionException::class => false,
            \PicturePark\API\Model\SchemaPermissionException::class => false,
            \PicturePark\API\Model\PermissionSetInvalidRightCombinationException::class => false,
            \PicturePark\API\Model\PermissionSetValidationException::class => false,
            \PicturePark\API\Model\AmbiguousUserRoleRightsException::class => false,
            \PicturePark\API\Model\UnsupportedListItemChangeCommandException::class => false,
            \PicturePark\API\Model\ListItemLayerException::class => false,
            \PicturePark\API\Model\ListItemNotFoundException::class => false,
            \PicturePark\API\Model\ListItemCyclicDependencyException::class => false,
            \PicturePark\API\Model\DeleteListItemsWithReferencesException::class => false,
            \PicturePark\API\Model\ListItemUpdateManyException::class => false,
            \PicturePark\API\Model\ListItemSchemaMismatchException::class => false,
            \PicturePark\API\Model\TransferInfoNotFoundException::class => false,
            \PicturePark\API\Model\FileTransferNotFoundException::class => false,
            \PicturePark\API\Model\InvalidTransferTypeException::class => false,
            \PicturePark\API\Model\TransferNotFoundException::class => false,
            \PicturePark\API\Model\WrongChunkSizeException::class => false,
            \PicturePark\API\Model\ChunkSizeOutOfRangeException::class => false,
            \PicturePark\API\Model\MaximumTransferSizeException::class => false,
            \PicturePark\API\Model\FileIdDuplicatedException::class => false,
            \PicturePark\API\Model\MissingDependenciesException::class => false,
            \PicturePark\API\Model\RelationSelfReferencingException::class => false,
            \PicturePark\API\Model\InvalidChangeCommandFieldTypeInvalidException::class => false,
            \PicturePark\API\Model\InvalidChangeCommandFieldNotFoundException::class => false,
            \PicturePark\API\Model\InvalidChangeCommandSchemaChangeInvalidException::class => false,
            \PicturePark\API\Model\InvalidMetadataException::class => false,
            \PicturePark\API\Model\MetadataError::class => false,
            \PicturePark\API\Model\RelationNotFoundException::class => false,
            \PicturePark\API\Model\RelationTypeNotFoundException::class => false,
            \PicturePark\API\Model\RelationTypeTargetDocTypeMismatchException::class => false,
            \PicturePark\API\Model\AggregationNameInvalidException::class => false,
            \PicturePark\API\Model\AggregationSizeInvalidException::class => false,
            \PicturePark\API\Model\AggregationFilterNotSupportedException::class => false,
            \PicturePark\API\Model\RelationTypeMissingException::class => false,
            \PicturePark\API\Model\ReferencesUpdateException::class => false,
            \PicturePark\API\Model\ReferenceUpdateException::class => false,
            \PicturePark\API\Model\DuplicatedItemAssignedException::class => false,
            \PicturePark\API\Model\InvalidDataTypeException::class => false,
            \PicturePark\API\Model\LayerAssignmentInvalidException::class => false,
            \PicturePark\API\Model\OutdatedMetadataUpdateInProgressException::class => false,
            \PicturePark\API\Model\SchemaFieldOverwriteTypeMismatchException::class => false,
            \PicturePark\API\Model\SchemaFieldOverwriteIdException::class => false,
            \PicturePark\API\Model\SchemaFieldIdDuplicatedException::class => false,
            \PicturePark\API\Model\SchemaFieldIdPreviouslyUsedException::class => false,
            \PicturePark\API\Model\SchemaFieldIdAlreadyExistsInSchemaHierarchyException::class => false,
            \PicturePark\API\Model\SchemaFieldSchemaIndexInfoSimpleSearchNestingException::class => false,
            \PicturePark\API\Model\SchemaFieldSchemaIndexInfoNestingException::class => false,
            \PicturePark\API\Model\SchemaFieldIdUppercaseException::class => false,
            \PicturePark\API\Model\SchemaIdLowercaseException::class => false,
            \PicturePark\API\Model\SchemaInfoNotFoundException::class => false,
            \PicturePark\API\Model\IndexedFieldThresholdExceededException::class => false,
            \PicturePark\API\Model\SortableFieldThresholdExceededException::class => false,
            \PicturePark\API\Model\DuplicateSchemaInfoException::class => false,
            \PicturePark\API\Model\SchemaFieldNumberRangeException::class => false,
            \PicturePark\API\Model\SchemaInUseContentSchemaException::class => false,
            \PicturePark\API\Model\LayerAssignmentInUseWithContentsException::class => false,
            \PicturePark\API\Model\SchemaInUseListItemException::class => false,
            \PicturePark\API\Model\SchemaInUseContentException::class => false,
            \PicturePark\API\Model\SchemaInUseFieldException::class => false,
            \PicturePark\API\Model\DuplicateMetadataDisplayPatternException::class => false,
            \PicturePark\API\Model\DuplicateSchemaException::class => false,
            \PicturePark\API\Model\SchemaImportEmptyException::class => false,
            \PicturePark\API\Model\SchemaImportVersionMismatchException::class => false,
            \PicturePark\API\Model\SchemaInheritanceFieldIndexDeviationException::class => false,
            \PicturePark\API\Model\SchemaInheritanceTypeDeviationException::class => false,
            \PicturePark\API\Model\SchemaValidationException::class => false,
            \PicturePark\API\Model\SchemaSortFieldException::class => false,
            \PicturePark\API\Model\SchemaFieldIdException::class => false,
            \PicturePark\API\Model\SchemaFieldTypeChangeException::class => false,
            \PicturePark\API\Model\SchemaFieldIndexException::class => false,
            \PicturePark\API\Model\SchemaFieldNotSortableException::class => false,
            \PicturePark\API\Model\SchemaFieldNotSearchableException::class => false,
            \PicturePark\API\Model\SchemaFieldInvalidBoostException::class => false,
            \PicturePark\API\Model\SchemaFieldSortableInUseException::class => false,
            \PicturePark\API\Model\SchemaNoContentException::class => false,
            \PicturePark\API\Model\SchemaParentChangeException::class => false,
            \PicturePark\API\Model\SchemaMissingTypeException::class => false,
            \PicturePark\API\Model\SchemaPermissionConfigurationException::class => false,
            \PicturePark\API\Model\SchemaNoLayerException::class => false,
            \PicturePark\API\Model\SchemaIdException::class => false,
            \PicturePark\API\Model\SchemaInUseException::class => false,
            \PicturePark\API\Model\SchemaNotFoundException::class => false,
            \PicturePark\API\Model\SchemaCountLimitReachedException::class => false,
            \PicturePark\API\Model\SystemSchemaInvalidModificationException::class => false,
            \PicturePark\API\Model\SchemaFieldRelationSchemaSystemSchemaException::class => false,
            \PicturePark\API\Model\SchemaFieldRelationSchemaTypeUnsupportedException::class => false,
            \PicturePark\API\Model\SchemaMultipleTypesException::class => false,
            \PicturePark\API\Model\MissingDisplayPatternForCustomerDefaultLanguageException::class => false,
            \PicturePark\API\Model\SchemaViewForAllException::class => false,
            \PicturePark\API\Model\SystemLayerReferenceInvalidModificationException::class => false,
            \PicturePark\API\Model\SchemaFieldAnalyzerInvalidException::class => false,
            \PicturePark\API\Model\SchemaFieldRelationMultipleTypesException::class => false,
            \PicturePark\API\Model\SchemaFieldNotRequirableException::class => false,
            \PicturePark\API\Model\DisplayPatternTypeNotSupportedException::class => false,
            \PicturePark\API\Model\SchemaFieldActivityInUseException::class => false,
            \PicturePark\API\Model\SchemaFieldReferencedSchemaChangeNotAllowedException::class => false,
            \PicturePark\API\Model\SchemaFieldReferencedSchemaSystemSchemaException::class => false,
            \PicturePark\API\Model\SchemaFieldRelationRelationTypeIdModificationNotAllowedException::class => false,
            \PicturePark\API\Model\SchemaFieldRelationTargetDocTypeModificationNotAllowedException::class => false,
            \PicturePark\API\Model\DeleteContentsWithReferencesException::class => false,
            \PicturePark\API\Model\ContentMetadataUpdateManyException::class => false,
            \PicturePark\API\Model\ContentNotFoundException::class => false,
            \PicturePark\API\Model\ContentLayerInvalidException::class => false,
            \PicturePark\API\Model\ContentFileReplaceTypeMismatchException::class => false,
            \PicturePark\API\Model\ContentBackupFailedException::class => false,
            \PicturePark\API\Model\ContentLayerSameRootException::class => false,
            \PicturePark\API\Model\LayerIdsByRootSchema::class => false,
            \PicturePark\API\Model\BusinessProcessEngineRequestException::class => false,
            \PicturePark\API\Model\BusinessProcessNotFoundException::class => false,
            \PicturePark\API\Model\BusinessProcessDefinitionNotFoundException::class => false,
            \PicturePark\API\Model\BusinessProcessDefinitionCreateException::class => false,
            \PicturePark\API\Model\BusinessProcessNotExternalException::class => false,
            \PicturePark\API\Model\BusinessProcessCancellationNotSupportedException::class => false,
            \PicturePark\API\Model\BusinessProcessContinuationException::class => false,
            \PicturePark\API\Model\SchemaFieldImportMismatchException::class => false,
            \PicturePark\API\Model\SchemaFieldImportRelatedSchemaMismatchException::class => false,
            \PicturePark\API\Model\SchemaFieldImportTypeMismatchException::class => false,
            \PicturePark\API\Model\SchemaFieldNotSupportedException::class => false,
            \PicturePark\API\Model\SchemaFieldDisplayPatternTypeNotSupportedException::class => false,
            \PicturePark\API\Model\SnapshotTimeoutException::class => false,
            \PicturePark\API\Model\SnapshotFailedException::class => false,
            \PicturePark\API\Model\SnapshotSkippedException::class => false,
            \PicturePark\API\Model\AddMetadataLanguageTimeoutException::class => false,
            \PicturePark\API\Model\EnvironmentProcessAlreadyRunningException::class => false,
            \PicturePark\API\Model\EnvironmentProcessNotFoundException::class => false,
            \PicturePark\API\Model\EnvironmentProcessWaitTimeoutException::class => false,
            \PicturePark\API\Model\CustomerBoostValuesUpdateTimeoutException::class => false,
            \PicturePark\API\Model\NoTermsOfServiceDefinedException::class => false,
            \PicturePark\API\Model\AtLeastOneActiveTermsOfServiceMustExistException::class => false,
            \PicturePark\API\Model\ForbiddenHtmlElementsUsedException::class => false,
            \PicturePark\API\Model\BusinessProcessStateNotHitException::class => false,
            \PicturePark\API\Model\BusinessProcessLifeCycleNotHitException::class => false,
            \PicturePark\API\Model\OnlyAccessibleToRecipientException::class => false,
            \PicturePark\API\Model\EnvironmentNotAvailableException::class => false,
            \PicturePark\API\Model\CustomerNotAvailableException::class => false,
            \PicturePark\API\Model\CustomerAliasHeaderMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleActionInvalidDocumentTypeException::class => false,
            \PicturePark\API\Model\BusinessRuleActionInvalidExecutionScopeException::class => false,
            \PicturePark\API\Model\BusinessRuleActionsMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleConditionMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleConditionsMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleConfigurationValidationException::class => false,
            \PicturePark\API\Model\BusinessRuleSchemaIdInvalidException::class => false,
            \PicturePark\API\Model\BusinessRulePermissionSetIdInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleRuleIdDuplicationException::class => false,
            \PicturePark\API\Model\BusinessRuleRuleIdMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleTriggerPointMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleValidationException::class => false,
            \PicturePark\API\Model\BusinessRuleConditionInvalidTriggerPointDocumentTypeException::class => false,
            \PicturePark\API\Model\BusinessRuleRegularExpressionInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleConditionInvalidTriggerPointActionException::class => false,
            \PicturePark\API\Model\BusinessRuleRefIdsMissingException::class => false,
            \PicturePark\API\Model\BusinessRulePathInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleFieldIdInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleContentPermissionSetIdsMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleFieldPathInvalidException::class => false,
            \PicturePark\API\Model\BusinessRulePolygonInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleArrayIndexInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleDictionaryKeyInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleProjectionTransformationsMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleInvalidVariableNameException::class => false,
            \PicturePark\API\Model\BusinessRuleTransformationGroupTransformationsMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleTransformationGroupInputsMissingException::class => false,
            \PicturePark\API\Model\BusinessRuleNamedCacheNameInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleNGramTransformationSizeInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleNGramTransformationMinWordLengthInvalidException::class => false,
            \PicturePark\API\Model\BusinessRuleNGramTransformationMaxWordLengthInvalidException::class => false,
            \PicturePark\API\Model\NamedCacheConfigurationException::class => false,
            \PicturePark\API\Model\NamedCacheNameMissingException::class => false,
            \PicturePark\API\Model\NamedCacheNameDuplicationException::class => false,
            \PicturePark\API\Model\ListItemNamedCacheSchemaIdInvalidException::class => false,
            \PicturePark\API\Model\ListItemNamedCacheKeyFieldsInvalidException::class => false,
            \PicturePark\API\Model\SchemaTagboxFilterLookupNamedCacheSchemaIdInvalidException::class => false,
            \PicturePark\API\Model\NoTagsFoundException::class => false,
            \PicturePark\API\Model\OutputNotAvailableException::class => false,
            \PicturePark\API\Model\ModelNotFoundException::class => false,
            \PicturePark\API\Model\DisplayValueRerenderingInProgressException::class => false,
            \PicturePark\API\Model\OutputFormatNotFoundException::class => false,
            \PicturePark\API\Model\OutputFormatSourceNotDefinedException::class => false,
            \PicturePark\API\Model\OutputFormatRetentionTimeOutOfRangeException::class => false,
            \PicturePark\API\Model\NotSupportedFileExtensionForFormatException::class => false,
            \PicturePark\API\Model\OutputFormatXmpWritebackNotSupportedException::class => false,
            \PicturePark\API\Model\CollectionSizeLimitExceededException::class => false,
            \PicturePark\API\Model\XmpMappingFieldNotSupported::class => false,
            \PicturePark\API\Model\XmpMappingFieldNotFoundException::class => false,
            \PicturePark\API\Model\XmpMappingSchemaNotAvailableForFileContentSchemaException::class => false,
            \PicturePark\API\Model\XmpMappingFieldToLayerWithRequiredFieldsNotAllowedException::class => false,
            \PicturePark\API\Model\XmpMappingFieldInUseException::class => false,
            \PicturePark\API\Model\XmpMappingConfigurationInvalidException::class => false,
            \PicturePark\API\Model\ActivityMappingInvalidException::class => false,
            \PicturePark\API\Model\ProblemDetails::class => false,
            \PicturePark\API\Model\BusinessProcessCreateRequest::class => false,
            \PicturePark\API\Model\BusinessProcessNotificationUpdate::class => false,
            \PicturePark\API\Model\BusinessProcessStateChangeRequest::class => false,
            \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest::class => false,
            \PicturePark\API\Model\BusinessProcessWaitForStateResult::class => false,
            \PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult::class => false,
            \PicturePark\API\Model\BusinessProcessDetails::class => false,
            \PicturePark\API\Model\BusinessProcessDetailsDataBase::class => false,
            \PicturePark\API\Model\BusinessProcessDetailsDataBatchResponse::class => false,
            \PicturePark\API\Model\BatchResponse::class => false,
            \PicturePark\API\Model\BatchResponseRow::class => false,
            \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport::class => false,
            \PicturePark\API\Model\SchemaImportResult::class => false,
            \PicturePark\API\Model\ListItemImportResult::class => false,
            \PicturePark\API\Model\BusinessProcessDetailsDataCdnPurge::class => false,
            \PicturePark\API\Model\CdnPurgeJobBase::class => false,
            \PicturePark\API\Model\CdnPurgeJobByTag::class => false,
            \PicturePark\API\Model\CdnPurgeJobByUri::class => false,
            \PicturePark\API\Model\BusinessProcessDetailsDataContentImport::class => false,
            \PicturePark\API\Model\ContentImportResult::class => false,
            \PicturePark\API\Model\BusinessProcessSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfBusinessProcess::class => false,
            \PicturePark\API\Model\QueryDebugInformation::class => false,
            \PicturePark\API\Model\BaseResultOfBusinessProcess::class => false,
            \PicturePark\API\Model\BusinessProcessSearchRequest::class => false,
            \PicturePark\API\Model\FilterBase::class => false,
            \PicturePark\API\Model\AndFilter::class => false,
            \PicturePark\API\Model\OrFilter::class => false,
            \PicturePark\API\Model\NotFilter::class => false,
            \PicturePark\API\Model\DateRangeFilter::class => false,
            \PicturePark\API\Model\DateRange::class => false,
            \PicturePark\API\Model\ExistsFilter::class => false,
            \PicturePark\API\Model\GeoBoundingBoxFilter::class => false,
            \PicturePark\API\Model\GeoLocation::class => false,
            \PicturePark\API\Model\GeoDistanceFilter::class => false,
            \PicturePark\API\Model\NestedFilter::class => false,
            \PicturePark\API\Model\NumericRangeFilter::class => false,
            \PicturePark\API\Model\NumericRange::class => false,
            \PicturePark\API\Model\PrefixFilter::class => false,
            \PicturePark\API\Model\TermFilter::class => false,
            \PicturePark\API\Model\TermsFilter::class => false,
            \PicturePark\API\Model\AggregationFilter::class => false,
            \PicturePark\API\Model\ChildFilter::class => false,
            \PicturePark\API\Model\ParentFilter::class => false,
            \PicturePark\API\Model\BusinessRuleConfiguration::class => false,
            \PicturePark\API\Model\BusinessRule::class => false,
            \PicturePark\API\Model\BusinessRuleTriggerPoint::class => false,
            \PicturePark\API\Model\BusinessRuleConfigurable::class => false,
            \PicturePark\API\Model\BusinessRuleCondition::class => false,
            \PicturePark\API\Model\AndCondition::class => false,
            \PicturePark\API\Model\BooleanCondition::class => false,
            \PicturePark\API\Model\OrCondition::class => false,
            \PicturePark\API\Model\LayerAssignedCondition::class => false,
            \PicturePark\API\Model\LayerUnassignedCondition::class => false,
            \PicturePark\API\Model\ContentPermissionSetAssignedCondition::class => false,
            \PicturePark\API\Model\ContentPermissionSetUnassignedCondition::class => false,
            \PicturePark\API\Model\FieldValueChangedCondition::class => false,
            \PicturePark\API\Model\MatchRegexCondition::class => false,
            \PicturePark\API\Model\TagboxItemAssignedCondition::class => false,
            \PicturePark\API\Model\TagboxItemUnassignedCondition::class => false,
            \PicturePark\API\Model\ContentSchemaCondition::class => false,
            \PicturePark\API\Model\NumberCompareCondition::class => false,
            \PicturePark\API\Model\ContentRelationItemAssignedCondition::class => false,
            \PicturePark\API\Model\ContentRelationItemUnassignedCondition::class => false,
            \PicturePark\API\Model\GeoPointWithinPolygonCondition::class => false,
            \PicturePark\API\Model\LatLon::class => false,
            \PicturePark\API\Model\ContentPermissionSetsChangedCondition::class => false,
            \PicturePark\API\Model\ContentRelationItemsChangedCondition::class => false,
            \PicturePark\API\Model\LayersChangedCondition::class => false,
            \PicturePark\API\Model\TagboxItemsChangedCondition::class => false,
            \PicturePark\API\Model\FieldEmptyCondition::class => false,
            \PicturePark\API\Model\NotCondition::class => false,
            \PicturePark\API\Model\BusinessRuleTransformationGroup::class => false,
            \PicturePark\API\Model\BusinessRuleTransformation::class => false,
            \PicturePark\API\Model\TakeDictionaryValueTransformation::class => false,
            \PicturePark\API\Model\TakeArrayValueTransformation::class => false,
            \PicturePark\API\Model\JoinByTransformation::class => false,
            \PicturePark\API\Model\LookupCacheTransformation::class => false,
            \PicturePark\API\Model\NGramTransformation::class => false,
            \PicturePark\API\Model\ProjectionTransformation::class => false,
            \PicturePark\API\Model\SplitTransformation::class => false,
            \PicturePark\API\Model\BusinessRuleAction::class => false,
            \PicturePark\API\Model\AssignLayerAction::class => false,
            \PicturePark\API\Model\UnassignLayerAction::class => false,
            \PicturePark\API\Model\AssignValueAction::class => false,
            \PicturePark\API\Model\AssignTagboxItemsAction::class => false,
            \PicturePark\API\Model\UnassignTagboxItemsAction::class => false,
            \PicturePark\API\Model\AssignContentPermissionSetsAction::class => false,
            \PicturePark\API\Model\UnassignContentPermissionSetsAction::class => false,
            \PicturePark\API\Model\ProduceMessageAction::class => false,
            \PicturePark\API\Model\AssignTagboxItemsInLayerAction::class => false,
            \PicturePark\API\Model\EnqueueTaggingAction::class => false,
            \PicturePark\API\Model\TaggingOptionsBase::class => false,
            \PicturePark\API\Model\ClarifaiTaggingOptions::class => false,
            \PicturePark\API\Model\SimulatedTaggingOptions::class => false,
            \PicturePark\API\Model\BusinessRuleScript::class => false,
            \PicturePark\API\Model\NamedCacheConfigurationBase::class => false,
            \PicturePark\API\Model\ListItemNamedCacheConfiguration::class => false,
            \PicturePark\API\Model\SchemaTagboxFilterLookupNamedCacheConfiguration::class => false,
            \PicturePark\API\Model\InverseListItemNamedCacheConfiguration::class => false,
            \PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest::class => false,
            \PicturePark\API\Model\BusinessRuleTraceLogSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfBusinessRuleTraceLog::class => false,
            \PicturePark\API\Model\AggregationResult::class => false,
            \PicturePark\API\Model\AggregationResultItem::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfBusinessRuleTraceLog::class => false,
            \PicturePark\API\Model\BaseResultOfBusinessRuleTraceLog::class => false,
            \PicturePark\API\Model\BusinessRuleTraceLog::class => false,
            \PicturePark\API\Model\BusinessRuleTracedRule::class => false,
            \PicturePark\API\Model\BusinessRuleTracedEvaluation::class => false,
            \PicturePark\API\Model\BusinessRuleTracedEvaluationCondition::class => false,
            \PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class => false,
            \PicturePark\API\Model\BusinessRuleTracedTransformation::class => false,
            \PicturePark\API\Model\BusinessRuleTracedAction::class => false,
            \PicturePark\API\Model\UserAudit::class => false,
            \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest::class => false,
            \PicturePark\API\Model\AggregatorBase::class => false,
            \PicturePark\API\Model\DateRangeAggregator::class => false,
            \PicturePark\API\Model\DateRangeForAggregator::class => false,
            \PicturePark\API\Model\GeoDistanceAggregator::class => false,
            \PicturePark\API\Model\GeoDistance::class => false,
            \PicturePark\API\Model\NestedAggregator::class => false,
            \PicturePark\API\Model\NumericRangeAggregator::class => false,
            \PicturePark\API\Model\NumericRangeForAggregator::class => false,
            \PicturePark\API\Model\TermsAggregator::class => false,
            \PicturePark\API\Model\TermsRelationAggregator::class => false,
            \PicturePark\API\Model\TermsEnumAggregator::class => false,
            \PicturePark\API\Model\SortInfo::class => false,
            \PicturePark\API\Model\Channel::class => false,
            \PicturePark\API\Model\SortField::class => false,
            \PicturePark\API\Model\ChannelCreateRequest::class => false,
            \PicturePark\API\Model\ChannelUpdateRequest::class => false,
            \PicturePark\API\Model\ContentPermissionSetDetail::class => false,
            \PicturePark\API\Model\PermissionSetDetailOfContentRight::class => false,
            \PicturePark\API\Model\PermissionUserRoleRightsOfContentRight::class => false,
            \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class => false,
            \PicturePark\API\Model\UserAuditDetail::class => false,
            \PicturePark\API\Model\User::class => false,
            \PicturePark\API\Model\ContentPermissionSetCreateRequest::class => false,
            \PicturePark\API\Model\PermissionSetCreateRequestOfContentRight::class => false,
            \PicturePark\API\Model\UserRoleRightsOfContentRight::class => false,
            \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight::class => false,
            \PicturePark\API\Model\ContentPermissionSetUpdateRequest::class => false,
            \PicturePark\API\Model\PermissionSetUpdateRequestOfContentRight::class => false,
            \PicturePark\API\Model\PermissionSetOwnershipTransferRequest::class => false,
            \PicturePark\API\Model\BulkResponse::class => false,
            \PicturePark\API\Model\BulkResponseRow::class => false,
            \PicturePark\API\Model\ContentPermissionSetCreateManyRequest::class => false,
            \PicturePark\API\Model\ContentPermissionSetUpdateManyRequest::class => false,
            \PicturePark\API\Model\ContentPermissionSetUpdateRequestItem::class => false,
            \PicturePark\API\Model\PermissionSetUpdateRequestItemOfContentRight::class => false,
            \PicturePark\API\Model\PermissionSetDeleteManyRequest::class => false,
            \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest::class => false,
            \PicturePark\API\Model\PermissionSetOwnershipTransferItem::class => false,
            \PicturePark\API\Model\PermissionSetUserPermissionRights::class => false,
            \PicturePark\API\Model\PermissionSetSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfPermissionSet::class => false,
            \PicturePark\API\Model\BaseResultOfPermissionSet::class => false,
            \PicturePark\API\Model\PermissionSet::class => false,
            \PicturePark\API\Model\PermissionSetSearchRequest::class => false,
            \PicturePark\API\Model\ContentDetail::class => false,
            \PicturePark\API\Model\Output::class => false,
            \PicturePark\API\Model\OutputDataBase::class => false,
            \PicturePark\API\Model\OutputDataImage::class => false,
            \PicturePark\API\Model\OutputDataAudio::class => false,
            \PicturePark\API\Model\OutputDataVideo::class => false,
            \PicturePark\API\Model\Sprite::class => false,
            \PicturePark\API\Model\OutputDataDocument::class => false,
            \PicturePark\API\Model\OutputDataVector::class => false,
            \PicturePark\API\Model\OutputDataDefault::class => false,
            \PicturePark\API\Model\OutputDetail::class => false,
            \PicturePark\API\Model\Activity::class => false,
            \PicturePark\API\Model\ContentCreateRequest::class => false,
            \PicturePark\API\Model\ContentMetadataUpdateRequest::class => false,
            \PicturePark\API\Model\ContentPermissionsUpdateRequest::class => false,
            \PicturePark\API\Model\ContentOwnershipTransferRequest::class => false,
            \PicturePark\API\Model\ContentFileUpdateRequest::class => false,
            \PicturePark\API\Model\ContentReferencesResult::class => false,
            \PicturePark\API\Model\MetadataReferenceResult::class => false,
            \PicturePark\API\Model\BaseResultOfMetadataReference::class => false,
            \PicturePark\API\Model\MetadataReference::class => false,
            \PicturePark\API\Model\ContentShareReferenceResult::class => false,
            \PicturePark\API\Model\BaseResultOfContentShareReference::class => false,
            \PicturePark\API\Model\ContentShareReference::class => false,
            \PicturePark\API\Model\ContentReferencesRequest::class => false,
            \PicturePark\API\Model\MetadataReferencesPagingRequest::class => false,
            \PicturePark\API\Model\PagingRequest::class => false,
            \PicturePark\API\Model\OutputResolveResult::class => false,
            \PicturePark\API\Model\ContentDownloadLinkCreateRequest::class => false,
            \PicturePark\API\Model\ContentDownloadRequestItem::class => false,
            \PicturePark\API\Model\DownloadLink::class => false,
            \PicturePark\API\Model\ContentCreateManyRequest::class => false,
            \PicturePark\API\Model\ContentMetadataUpdateManyRequest::class => false,
            \PicturePark\API\Model\ContentMetadataUpdateItem::class => false,
            \PicturePark\API\Model\ContentPermissionsUpdateManyRequest::class => false,
            \PicturePark\API\Model\ContentPermissionsUpdateItem::class => false,
            \PicturePark\API\Model\ContentOwnershipTransferManyRequest::class => false,
            \PicturePark\API\Model\ContentOwnershipTransferItem::class => false,
            \PicturePark\API\Model\ContentDeleteManyRequest::class => false,
            \PicturePark\API\Model\ContentDeleteManyFilterRequest::class => false,
            \PicturePark\API\Model\ContentFilterRequest::class => false,
            \PicturePark\API\Model\ContentRestoreManyRequest::class => false,
            \PicturePark\API\Model\ContentManyReferencesRequest::class => false,
            \PicturePark\API\Model\OutputResolveManyRequest::class => false,
            \PicturePark\API\Model\ContentFieldsBatchUpdateRequest::class => false,
            \PicturePark\API\Model\MetadataValuesChangeRequestBase::class => false,
            \PicturePark\API\Model\MetadataValuesChangeCommandBase::class => false,
            \PicturePark\API\Model\MetadataValuesSchemaUpdateCommand::class => false,
            \PicturePark\API\Model\MetadataValuesSchemaUpsertCommand::class => false,
            \PicturePark\API\Model\MetadataValuesSchemaRemoveCommand::class => false,
            \PicturePark\API\Model\MetadataValuesSchemaReplaceCommand::class => false,
            \PicturePark\API\Model\MetadataValuesFieldRemoveCommand::class => false,
            \PicturePark\API\Model\MetadataValuesSchemaItemAddCommand::class => false,
            \PicturePark\API\Model\MetadataValuesSchemaItemRemoveCommand::class => false,
            \PicturePark\API\Model\ContentFieldsBatchUpdateFilterRequest::class => false,
            \PicturePark\API\Model\ContentSearchResult::class => false,
            \PicturePark\API\Model\ContentRightAggregationCount::class => false,
            \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfContent::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfContent::class => false,
            \PicturePark\API\Model\BaseResultOfContent::class => false,
            \PicturePark\API\Model\Content::class => false,
            \PicturePark\API\Model\ContentSearchRequest::class => false,
            \PicturePark\API\Model\ContentAggregationOnChannelRequest::class => false,
            \PicturePark\API\Model\ObjectAggregationResult::class => false,
            \PicturePark\API\Model\ContentAggregationRequest::class => false,
            \PicturePark\API\Model\DisplayValueStatus::class => false,
            \PicturePark\API\Model\DocumentHistory::class => false,
            \PicturePark\API\Model\UserAuditHistory::class => false,
            \PicturePark\API\Model\DocumentHistoryDifference::class => false,
            \PicturePark\API\Model\DocumentHistorySearchResult::class => false,
            \PicturePark\API\Model\BaseResultOfDocumentHistory::class => false,
            \PicturePark\API\Model\DocumentHistorySearchRequest::class => false,
            \PicturePark\API\Model\IdentityProvider::class => false,
            \PicturePark\API\Model\IdentityProviderEditable::class => false,
            \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class => false,
            \PicturePark\API\Model\IdpGroupToUserRoleMapping::class => false,
            \PicturePark\API\Model\IdentityProviderBasicInfo::class => false,
            \PicturePark\API\Model\VersionInfo::class => false,
            \PicturePark\API\Model\CustomerInfo::class => false,
            \PicturePark\API\Model\LanguageConfiguration::class => false,
            \PicturePark\API\Model\Language::class => false,
            \PicturePark\API\Model\OutputFormatInfo::class => false,
            \PicturePark\API\Model\CustomerApp::class => false,
            \PicturePark\API\Model\SystemStatus::class => false,
            \PicturePark\API\Model\StatusOfSearchIndexState::class => false,
            \PicturePark\API\Model\StatusOfDisplayValuesState::class => false,
            \PicturePark\API\Model\StatusOfMetadataState::class => false,
            \PicturePark\API\Model\ListItemDetail::class => false,
            \PicturePark\API\Model\ListItemUpdateRequest::class => false,
            \PicturePark\API\Model\ListItemReferencesResult::class => false,
            \PicturePark\API\Model\ListItemReferencesRequest::class => false,
            \PicturePark\API\Model\ListItemCreateRequest::class => false,
            \PicturePark\API\Model\ListItemCreateManyRequest::class => false,
            \PicturePark\API\Model\ListItemUpdateManyRequest::class => false,
            \PicturePark\API\Model\ListItemUpdateItem::class => false,
            \PicturePark\API\Model\ListItemDeleteManyRequest::class => false,
            \PicturePark\API\Model\ListItemDeleteManyFilterRequest::class => false,
            \PicturePark\API\Model\ListItemFilterRequest::class => false,
            \PicturePark\API\Model\ListItemRestoreManyRequest::class => false,
            \PicturePark\API\Model\ListItemManyReferencesRequest::class => false,
            \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class => false,
            \PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest::class => false,
            \PicturePark\API\Model\ListItemSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfListItem::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfListItem::class => false,
            \PicturePark\API\Model\BaseResultOfListItem::class => false,
            \PicturePark\API\Model\ListItem::class => false,
            \PicturePark\API\Model\ListItemSearchRequest::class => false,
            \PicturePark\API\Model\ListItemSearchAndAggregationBaseRequest::class => false,
            \PicturePark\API\Model\ListItemAggregationRequest::class => false,
            \PicturePark\API\Model\LiveStreamSearchResult::class => false,
            \PicturePark\API\Model\BaseResultOfLiveStream::class => false,
            \PicturePark\API\Model\LiveStream::class => false,
            \PicturePark\API\Model\LiveStreamTraceJob::class => false,
            \PicturePark\API\Model\LiveStreamSearchRequest::class => false,
            \PicturePark\API\Model\MetadataStatus::class => false,
            \PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateManyRequest::class => false,
            \PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateRequestItem::class => false,
            \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequest::class => false,
            \PicturePark\API\Model\OutputFormatSetXmpWritebackStateManyRequest::class => false,
            \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequestItem::class => false,
            \PicturePark\API\Model\OutputFormatRenderPreviewRequest::class => false,
            \PicturePark\API\Model\OutputFormatRenderingSpecification::class => false,
            \PicturePark\API\Model\SourceOutputFormats::class => false,
            \PicturePark\API\Model\FormatBase::class => false,
            \PicturePark\API\Model\ImageFormatBase::class => false,
            \PicturePark\API\Model\ResizeAction::class => false,
            \PicturePark\API\Model\ImageActionBase::class => false,
            \PicturePark\API\Model\AlphaHandlingAction::class => false,
            \PicturePark\API\Model\CropAction::class => false,
            \PicturePark\API\Model\UnsharpenMaskAction::class => false,
            \PicturePark\API\Model\WatermarkAction::class => false,
            \PicturePark\API\Model\OriginalFormat::class => false,
            \PicturePark\API\Model\JpegFormat::class => false,
            \PicturePark\API\Model\PngFormat::class => false,
            \PicturePark\API\Model\TiffFormat::class => false,
            \PicturePark\API\Model\VideoFormatBase::class => false,
            \PicturePark\API\Model\Mp4VideoFormat::class => false,
            \PicturePark\API\Model\AudioFormatBase::class => false,
            \PicturePark\API\Model\VideoSpriteFormat::class => false,
            \PicturePark\API\Model\VideoStillFormat::class => false,
            \PicturePark\API\Model\AacAudioFormat::class => false,
            \PicturePark\API\Model\AudioStillFormat::class => false,
            \PicturePark\API\Model\Mp3AudioFormat::class => false,
            \PicturePark\API\Model\DocumentFormatBase::class => false,
            \PicturePark\API\Model\DocumentStillFormat::class => false,
            \PicturePark\API\Model\PdfFormat::class => false,
            \PicturePark\API\Model\VectorFormatBase::class => false,
            \PicturePark\API\Model\SvgFormat::class => false,
            \PicturePark\API\Model\VectorStillFormat::class => false,
            \PicturePark\API\Model\OutputFormatDetail::class => false,
            \PicturePark\API\Model\OutputFormat::class => false,
            \PicturePark\API\Model\OutputFormatEditable::class => false,
            \PicturePark\API\Model\OutputFormatCreateManyRequest::class => false,
            \PicturePark\API\Model\OutputFormatUpdateManyRequest::class => false,
            \PicturePark\API\Model\OutputFormatUpdateManyRequestItem::class => false,
            \PicturePark\API\Model\OutputFormatDeleteManyRequest::class => false,
            \PicturePark\API\Model\OutputSearchResult::class => false,
            \PicturePark\API\Model\BaseResultOfOutput::class => false,
            \PicturePark\API\Model\OutputSearchRequest::class => false,
            \PicturePark\API\Model\OutputResetRetryAttemptsRequest::class => false,
            \PicturePark\API\Model\UserProfile::class => false,
            \PicturePark\API\Model\UserAddress::class => false,
            \PicturePark\API\Model\UserProfileUpdateRequest::class => false,
            \PicturePark\API\Model\SchemaPermissionSetDetail::class => false,
            \PicturePark\API\Model\PermissionSetDetailOfMetadataRight::class => false,
            \PicturePark\API\Model\PermissionUserRoleRightsOfMetadataRight::class => false,
            \PicturePark\API\Model\SchemaPermissionSetCreateRequest::class => false,
            \PicturePark\API\Model\PermissionSetCreateRequestOfMetadataRight::class => false,
            \PicturePark\API\Model\UserRoleRightsOfMetadataRight::class => false,
            \PicturePark\API\Model\SchemaPermissionSetUpdateRequest::class => false,
            \PicturePark\API\Model\PermissionSetUpdateRequestOfMetadataRight::class => false,
            \PicturePark\API\Model\SchemaPermissionSetCreateManyRequest::class => false,
            \PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest::class => false,
            \PicturePark\API\Model\SchemaPermissionSetUpdateRequestItem::class => false,
            \PicturePark\API\Model\PermissionSetUpdateRequestItemOfMetadataRight::class => false,
            \PicturePark\API\Model\SchemaDetail::class => false,
            \PicturePark\API\Model\DisplayPattern::class => false,
            \PicturePark\API\Model\FieldBase::class => false,
            \PicturePark\API\Model\FieldBoolean::class => false,
            \PicturePark\API\Model\FieldDate::class => false,
            \PicturePark\API\Model\FieldDateTime::class => false,
            \PicturePark\API\Model\FieldDateTimeArray::class => false,
            \PicturePark\API\Model\FieldDecimal::class => false,
            \PicturePark\API\Model\FieldDictionary::class => false,
            \PicturePark\API\Model\FieldDictionaryArray::class => false,
            \PicturePark\API\Model\FieldGeoPoint::class => false,
            \PicturePark\API\Model\FieldTrigger::class => false,
            \PicturePark\API\Model\FieldLong::class => false,
            \PicturePark\API\Model\FieldLongArray::class => false,
            \PicturePark\API\Model\FieldSingleFieldset::class => false,
            \PicturePark\API\Model\SchemaIndexingInfo::class => false,
            \PicturePark\API\Model\FieldIndexingInfo::class => false,
            \PicturePark\API\Model\FieldMultiFieldset::class => false,
            \PicturePark\API\Model\FieldSingleTagbox::class => false,
            \PicturePark\API\Model\FieldMultiTagbox::class => false,
            \PicturePark\API\Model\FieldString::class => false,
            \PicturePark\API\Model\AnalyzerBase::class => false,
            \PicturePark\API\Model\EdgeNGramAnalyzer::class => false,
            \PicturePark\API\Model\LanguageAnalyzer::class => false,
            \PicturePark\API\Model\NGramAnalyzer::class => false,
            \PicturePark\API\Model\PathHierarchyAnalyzer::class => false,
            \PicturePark\API\Model\SimpleAnalyzer::class => false,
            \PicturePark\API\Model\FieldStringArray::class => false,
            \PicturePark\API\Model\FieldTranslatedString::class => false,
            \PicturePark\API\Model\FieldSingleRelation::class => false,
            \PicturePark\API\Model\RelationType::class => false,
            \PicturePark\API\Model\FieldMultiRelation::class => false,
            \PicturePark\API\Model\FieldOverwriteBase::class => false,
            \PicturePark\API\Model\FieldOverwriteSingleTagbox::class => false,
            \PicturePark\API\Model\FieldOverwriteMultiTagbox::class => false,
            \PicturePark\API\Model\SearchFieldCount::class => false,
            \PicturePark\API\Model\SchemaExistsResponse::class => false,
            \PicturePark\API\Model\FieldExistsResponse::class => false,
            \PicturePark\API\Model\SchemaUpdateResult::class => false,
            \PicturePark\API\Model\SchemaUpdateRequest::class => false,
            \PicturePark\API\Model\SchemaOwnershipTransferRequest::class => false,
            \PicturePark\API\Model\SchemaCreateResult::class => false,
            \PicturePark\API\Model\SchemaCreateRequest::class => false,
            \PicturePark\API\Model\SchemaCreateManyRequest::class => false,
            \PicturePark\API\Model\SchemaUpdateManyRequest::class => false,
            \PicturePark\API\Model\SchemaUpdateItem::class => false,
            \PicturePark\API\Model\SchemaOwnershipTransferManyRequest::class => false,
            \PicturePark\API\Model\SchemaSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfSchema::class => false,
            \PicturePark\API\Model\BaseResultOfSchema::class => false,
            \PicturePark\API\Model\Schema::class => false,
            \PicturePark\API\Model\SchemaSearchRequest::class => false,
            \PicturePark\API\Model\IndexField::class => false,
            \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest::class => false,
            \PicturePark\API\Model\Transfer::class => false,
            \PicturePark\API\Model\SchemaImportRequest::class => false,
            \PicturePark\API\Model\ShareDetail::class => false,
            \PicturePark\API\Model\ShareUser::class => false,
            \PicturePark\API\Model\ShareContentDetail::class => false,
            \PicturePark\API\Model\ShareOutputBase::class => false,
            \PicturePark\API\Model\ShareOutputBasic::class => false,
            \PicturePark\API\Model\ShareOutputEmbed::class => false,
            \PicturePark\API\Model\ShareDataBase::class => false,
            \PicturePark\API\Model\ShareDataEmbed::class => false,
            \PicturePark\API\Model\ShareDataBasic::class => false,
            \PicturePark\API\Model\MailRecipient::class => false,
            \PicturePark\API\Model\UserEmail::class => false,
            \PicturePark\API\Model\InternalRecipient::class => false,
            \PicturePark\API\Model\ShareBaseUpdateRequest::class => false,
            \PicturePark\API\Model\ShareContent::class => false,
            \PicturePark\API\Model\ShareBasicUpdateRequest::class => false,
            \PicturePark\API\Model\ShareEmbedUpdateRequest::class => false,
            \PicturePark\API\Model\ShareBaseCreateRequest::class => false,
            \PicturePark\API\Model\ShareBasicCreateRequest::class => false,
            \PicturePark\API\Model\ShareEmbedCreateRequest::class => false,
            \PicturePark\API\Model\ShareDeleteManyRequest::class => false,
            \PicturePark\API\Model\ShareRevokeManyRequest::class => false,
            \PicturePark\API\Model\ShareAggregationRequest::class => false,
            \PicturePark\API\Model\ShareSearchAndAggregationBaseRequest::class => false,
            \PicturePark\API\Model\ShareSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfShare::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfShare::class => false,
            \PicturePark\API\Model\BaseResultOfShare::class => false,
            \PicturePark\API\Model\Share::class => false,
            \PicturePark\API\Model\ShareSearchRequest::class => false,
            \PicturePark\API\Model\CreateTransferRequest::class => false,
            \PicturePark\API\Model\TransferUploadFile::class => false,
            \PicturePark\API\Model\TransferFile::class => false,
            \PicturePark\API\Model\TransferWebLink::class => false,
            \PicturePark\API\Model\TransferDetail::class => false,
            \PicturePark\API\Model\ImportTransferRequest::class => false,
            \PicturePark\API\Model\ImportTransferPartialRequest::class => false,
            \PicturePark\API\Model\FileTransferCreateItem::class => false,
            \PicturePark\API\Model\TransferSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfTransfer::class => false,
            \PicturePark\API\Model\BaseResultOfTransfer::class => false,
            \PicturePark\API\Model\TransferSearchRequest::class => false,
            \PicturePark\API\Model\FileTransferDetail::class => false,
            \PicturePark\API\Model\FileMetadata::class => false,
            \PicturePark\API\Model\FileTransferOutput::class => false,
            \PicturePark\API\Model\FileTransfer::class => false,
            \PicturePark\API\Model\FileTransferSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfFileTransfer::class => false,
            \PicturePark\API\Model\BaseResultOfFileTransfer::class => false,
            \PicturePark\API\Model\FileTransferSearchRequest::class => false,
            \PicturePark\API\Model\FileTransferDeleteRequest::class => false,
            \PicturePark\API\Model\Blacklist::class => false,
            \PicturePark\API\Model\BlacklistItem::class => false,
            \PicturePark\API\Model\UserRoleSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfUserRole::class => false,
            \PicturePark\API\Model\BaseResultOfUserRole::class => false,
            \PicturePark\API\Model\UserRole::class => false,
            \PicturePark\API\Model\UserRoleEditable::class => false,
            \PicturePark\API\Model\UserRoleSearchRequest::class => false,
            \PicturePark\API\Model\UserRoleDetail::class => false,
            \PicturePark\API\Model\UserRoleCreateManyRequest::class => false,
            \PicturePark\API\Model\UserRoleCreateRequest::class => false,
            \PicturePark\API\Model\UserRoleUpdateManyRequest::class => false,
            \PicturePark\API\Model\UserRoleDeleteManyRequest::class => false,
            \PicturePark\API\Model\UserDetail::class => false,
            \PicturePark\API\Model\UserRoleAssignment::class => false,
            \PicturePark\API\Model\OwnerToken::class => false,
            \PicturePark\API\Model\UserUpdateRequest::class => false,
            \PicturePark\API\Model\UserLockRequest::class => false,
            \PicturePark\API\Model\UserLockManyRequest::class => false,
            \PicturePark\API\Model\UserManyRequestBase::class => false,
            \PicturePark\API\Model\UserReviewRequest::class => false,
            \PicturePark\API\Model\UserReviewManyRequest::class => false,
            \PicturePark\API\Model\UserInviteManyRequest::class => false,
            \PicturePark\API\Model\UserReinviteManyRequest::class => false,
            \PicturePark\API\Model\UserRoleAssignManyRequest::class => false,
            \PicturePark\API\Model\UserDeleteRequest::class => false,
            \PicturePark\API\Model\UserCreateRequest::class => false,
            \PicturePark\API\Model\UserSearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfUserWithRoles::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfUserWithRoles::class => false,
            \PicturePark\API\Model\BaseResultOfUserWithRoles::class => false,
            \PicturePark\API\Model\UserWithRoles::class => false,
            \PicturePark\API\Model\UserSearchRequest::class => false,
            \PicturePark\API\Model\UserSearchAndAggregationBaseRequest::class => false,
            \PicturePark\API\Model\UserAggregationRequest::class => false,
            \PicturePark\API\Model\UserUpdateIdentityProviderManyRequest::class => false,
            \PicturePark\API\Model\XmpMappingTargets::class => false,
            \PicturePark\API\Model\XmpField::class => false,
            \PicturePark\API\Model\MetadataField::class => false,
            \PicturePark\API\Model\XmpMappingEntrySearchResult::class => false,
            \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntry::class => false,
            \PicturePark\API\Model\SearchBehaviorBaseResultOfXmpMappingEntry::class => false,
            \PicturePark\API\Model\BaseResultOfXmpMappingEntry::class => false,
            \PicturePark\API\Model\XmpMappingEntry::class => false,
            \PicturePark\API\Model\XmpMappingEntryEditable::class => false,
            \PicturePark\API\Model\XmpMappingEntryConfigurationBase::class => false,
            \PicturePark\API\Model\XmpMappingEntryConfigurationTagbox::class => false,
            \PicturePark\API\Model\XmpMappingEntrySearchRequest::class => false,
            \PicturePark\API\Model\XmpMappingEntryCreateRequest::class => false,
            \PicturePark\API\Model\XmpMappingEntryCreateManyRequest::class => false,
            \PicturePark\API\Model\XmpMappingEntryUpdateManyRequest::class => false,
            \PicturePark\API\Model\XmpMappingEntryDeleteManyRequest::class => false,
            \PicturePark\API\Model\LiveStreamMessage::class => false,
            \PicturePark\API\Model\DocumentChange::class => false,
            \PicturePark\API\Model\ApplicationEvent::class => false,
            \PicturePark\API\Model\TransferEvent::class => false,
            \PicturePark\API\Model\ReindexEvent::class => false,
            \PicturePark\API\Model\ContentDetailViewEvent::class => false,
            \PicturePark\API\Model\ContentDownloadEvent::class => false,
            \PicturePark\API\Model\DownloadTrackingInfo::class => false,
            \PicturePark\API\Model\SessionRenewalEvent::class => false,
            \PicturePark\API\Model\SharePageViewEvent::class => false,
            \PicturePark\API\Model\ApiStatisticsEvent::class => false,
            \PicturePark\API\Model\BusinessProcessEvent::class => false,
            \PicturePark\API\Model\OutputRenderedEvent::class => false,
            \PicturePark\API\Model\ConfigurationChangeEvent::class => false,
            \PicturePark\API\Model\CustomerChangeEvent::class => false,
            \PicturePark\API\Model\SearchReindexCompletedEvent::class => false,
            \PicturePark\API\Model\BusinessRuleFiredEvent::class => false,
            \PicturePark\API\Model\BusinessRuleFiredEventDetail::class => false,
            \PicturePark\API\Model\BusinessProcessCancellationRequestedEvent::class => false,
            \PicturePark\API\Model\XmpWritebackCompletedEvent::class => false,
            \PicturePark\API\Model\Message::class => false,
            \PicturePark\API\Model\ConsoleMessage::class => false,
            \PicturePark\API\Model\TupleOfStringAndString::class => false,
            \PicturePark\API\Model\NodeInfoMessage::class => false,
            \PicturePark\API\Model\AudioMetadata::class => false,
            \PicturePark\API\Model\AudioStream::class => false,
            \PicturePark\API\Model\DocumentMetadata::class => false,
            \PicturePark\API\Model\EpsMetadata::class => false,
            \PicturePark\API\Model\ImageMetadata::class => false,
            \PicturePark\API\Model\VideoMetadata::class => false,
            \PicturePark\API\Model\VideoStream::class => false,
            \PicturePark\API\Model\VectorMetadata::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}