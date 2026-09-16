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
        $normalizer = match ($normalizerClass) {
            \PicturePark\API\Normalizer\BusinessProcessNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessStateNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessStateNormalizer(),
            \PicturePark\API\Normalizer\ErrorResponseNormalizer::class => new \PicturePark\API\Normalizer\ErrorResponseNormalizer(),
            \PicturePark\API\Normalizer\PictureparkValidationExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkValidationExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkBusinessExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkBusinessExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkConflictExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkConflictExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkTimeoutExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkTimeoutExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkForbiddenExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkForbiddenExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserEmailAlreadyExistsExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserEmailAlreadyExistsExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserRoleAssignedExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserRoleAssignedExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnableToDeleteUserRoleExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnableToDeleteUserRoleExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserInactiveOrDeletedExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserInactiveOrDeletedExceptionNormalizer(),
            \PicturePark\API\Normalizer\InactiveOrDeletedUserRefusedAccessExceptionNormalizer::class => new \PicturePark\API\Normalizer\InactiveOrDeletedUserRefusedAccessExceptionNormalizer(),
            \PicturePark\API\Normalizer\TermsOfServiceNotNewestExceptionNormalizer::class => new \PicturePark\API\Normalizer\TermsOfServiceNotNewestExceptionNormalizer(),
            \PicturePark\API\Normalizer\IllegalAuthorizationStateTransitionExceptionNormalizer::class => new \PicturePark\API\Normalizer\IllegalAuthorizationStateTransitionExceptionNormalizer(),
            \PicturePark\API\Normalizer\TermsOfServiceConsentRequiredExceptionNormalizer::class => new \PicturePark\API\Normalizer\TermsOfServiceConsentRequiredExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserRolesNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserRolesNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnauthorizedExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnauthorizedExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserUnlockDisallowedExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserUnlockDisallowedExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserAlreadyInRequestedLockStateExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserAlreadyInRequestedLockStateExceptionNormalizer(),
            \PicturePark\API\Normalizer\LoginUsingIncorrectIdentityProviderExceptionNormalizer::class => new \PicturePark\API\Normalizer\LoginUsingIncorrectIdentityProviderExceptionNormalizer(),
            \PicturePark\API\Normalizer\IdentityProviderNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\IdentityProviderNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserDoesNotSupportLocalLoginExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserDoesNotSupportLocalLoginExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserAttributeNotSynchronizableExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserAttributeNotSynchronizableExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnableToMapMultipleClaimTypesIntoSameAttributeExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnableToMapMultipleClaimTypesIntoSameAttributeExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnableToChangeMappedUserRolesForFederatedUserExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnableToChangeMappedUserRolesForFederatedUserExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnableToDeleteDefaultUserRoleExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnableToDeleteDefaultUserRoleExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnableToDeleteUserRoleReferencedInIdentityProviderGroupMappingExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnableToDeleteUserRoleReferencedInIdentityProviderGroupMappingExceptionNormalizer(),
            \PicturePark\API\Normalizer\UserPropertyChangeNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\UserPropertyChangeNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\RenderingExceptionNormalizer::class => new \PicturePark\API\Normalizer\RenderingExceptionNormalizer(),
            \PicturePark\API\Normalizer\FormatNotApplicableForRenderingExceptionNormalizer::class => new \PicturePark\API\Normalizer\FormatNotApplicableForRenderingExceptionNormalizer(),
            \PicturePark\API\Normalizer\ServiceProviderDeleteExceptionNormalizer::class => new \PicturePark\API\Normalizer\ServiceProviderDeleteExceptionNormalizer(),
            \PicturePark\API\Normalizer\ServiceProviderCreateExceptionNormalizer::class => new \PicturePark\API\Normalizer\ServiceProviderCreateExceptionNormalizer(),
            \PicturePark\API\Normalizer\ServiceProviderNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ServiceProviderNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\DocumentVersionNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\DocumentVersionNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\DefaultChannelDeleteExceptionNormalizer::class => new \PicturePark\API\Normalizer\DefaultChannelDeleteExceptionNormalizer(),
            \PicturePark\API\Normalizer\ChannelsNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ChannelsNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\SuperAdminRolesNotAssignableToChannelExceptionNormalizer::class => new \PicturePark\API\Normalizer\SuperAdminRolesNotAssignableToChannelExceptionNormalizer(),
            \PicturePark\API\Normalizer\ElasticVersionUpdateExceptionNormalizer::class => new \PicturePark\API\Normalizer\ElasticVersionUpdateExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidVersionExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidVersionExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentNotDeactivatedExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentNotDeactivatedExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentDeactivationExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentDeactivationExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerClonesNotAcceptedExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerClonesNotAcceptedExceptionNormalizer(),
            \PicturePark\API\Normalizer\ShareNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ShareNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\ShareByTokenNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ShareByTokenNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\TokenGenerationExceptionNormalizer::class => new \PicturePark\API\Normalizer\TokenGenerationExceptionNormalizer(),
            \PicturePark\API\Normalizer\ShareExpiredExceptionNormalizer::class => new \PicturePark\API\Normalizer\ShareExpiredExceptionNormalizer(),
            \PicturePark\API\Normalizer\ShareSizeLimitExceededExceptionNormalizer::class => new \PicturePark\API\Normalizer\ShareSizeLimitExceededExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputIdNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputIdNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnableToCreateOrModifyStaticOutputFormatExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnableToCreateOrModifyStaticOutputFormatExceptionNormalizer(),
            \PicturePark\API\Normalizer\NotSupportedFileMappingExceptionNormalizer::class => new \PicturePark\API\Normalizer\NotSupportedFileMappingExceptionNormalizer(),
            \PicturePark\API\Normalizer\NotSupportedFileMappingForDynamicFormatExceptionNormalizer::class => new \PicturePark\API\Normalizer\NotSupportedFileMappingForDynamicFormatExceptionNormalizer(),
            \PicturePark\API\Normalizer\NotSupportedFileExtensionExceptionNormalizer::class => new \PicturePark\API\Normalizer\NotSupportedFileExtensionExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateOutputFormatIdExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateOutputFormatIdExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatResizingNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatResizingNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputBackupNotRequestedExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputBackupNotRequestedExceptionNormalizer(),
            \PicturePark\API\Normalizer\DownloadLinkExpiredExceptionNormalizer::class => new \PicturePark\API\Normalizer\DownloadLinkExpiredExceptionNormalizer(),
            \PicturePark\API\Normalizer\RenderingNotAwaitedExceptionNormalizer::class => new \PicturePark\API\Normalizer\RenderingNotAwaitedExceptionNormalizer(),
            \PicturePark\API\Normalizer\LeaseNotAcquiredExceptionNormalizer::class => new \PicturePark\API\Normalizer\LeaseNotAcquiredExceptionNormalizer(),
            \PicturePark\API\Normalizer\OperationInProgressExceptionNormalizer::class => new \PicturePark\API\Normalizer\OperationInProgressExceptionNormalizer(),
            \PicturePark\API\Normalizer\RetryExceptionNormalizer::class => new \PicturePark\API\Normalizer\RetryExceptionNormalizer(),
            \PicturePark\API\Normalizer\OwnerTokenNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\OwnerTokenNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidStateExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidStateExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkArgumentNullExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkArgumentNullExceptionNormalizer(),
            \PicturePark\API\Normalizer\ObjectTypeMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\ObjectTypeMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidStateTransitionExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidStateTransitionExceptionNormalizer(),
            \PicturePark\API\Normalizer\FailedToLockExceptionNormalizer::class => new \PicturePark\API\Normalizer\FailedToLockExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkOperationCanceledExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkOperationCanceledExceptionNormalizer(),
            \PicturePark\API\Normalizer\PictureparkApplicationExceptionNormalizer::class => new \PicturePark\API\Normalizer\PictureparkApplicationExceptionNormalizer(),
            \PicturePark\API\Normalizer\MissingCustomerDefaultLanguageExceptionNormalizer::class => new \PicturePark\API\Normalizer\MissingCustomerDefaultLanguageExceptionNormalizer(),
            \PicturePark\API\Normalizer\PartialOperationNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\PartialOperationNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContractMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContractMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidArgumentExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidArgumentExceptionNormalizer(),
            \PicturePark\API\Normalizer\ArgumentRangeExceptionNormalizer::class => new \PicturePark\API\Normalizer\ArgumentRangeExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnknownExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnknownExceptionNormalizer(),
            \PicturePark\API\Normalizer\OwnerTokenInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\OwnerTokenInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidValueFormatExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidValueFormatExceptionNormalizer(),
            \PicturePark\API\Normalizer\ItemIdDuplicatedExceptionNormalizer::class => new \PicturePark\API\Normalizer\ItemIdDuplicatedExceptionNormalizer(),
            \PicturePark\API\Normalizer\RequestSizeLimitExceededExceptionNormalizer::class => new \PicturePark\API\Normalizer\RequestSizeLimitExceededExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerViolationExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerViolationExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerAliasNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerAliasNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerAliasInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerAliasInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerNotDeactivatedExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerNotDeactivatedExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerDeactivationExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerDeactivationExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerHostNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerHostNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerNotActiveExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerNotActiveExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerBoostValuesInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerBoostValuesInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\SnapshotRetentionTimeTooShortExceptionNormalizer::class => new \PicturePark\API\Normalizer\SnapshotRetentionTimeTooShortExceptionNormalizer(),
            \PicturePark\API\Normalizer\ReshardIndexNotAllowedExceptionNormalizer::class => new \PicturePark\API\Normalizer\ReshardIndexNotAllowedExceptionNormalizer(),
            \PicturePark\API\Normalizer\ReshardNumberOfShardsInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\ReshardNumberOfShardsInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\ReshardNumberOfRoutingShardsInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\ReshardNumberOfRoutingShardsInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\ReshardNumberOfShardsInvalidForExistingRoutingShardsExceptionNormalizer::class => new \PicturePark\API\Normalizer\ReshardNumberOfShardsInvalidForExistingRoutingShardsExceptionNormalizer(),
            \PicturePark\API\Normalizer\ConfigurationIndexNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ConfigurationIndexNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateSearchIndexDocExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateSearchIndexDocExceptionNormalizer(),
            \PicturePark\API\Normalizer\SearchIndexDocNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\SearchIndexDocNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\IndexDocumentNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\IndexDocumentNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateAliasExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateAliasExceptionNormalizer(),
            \PicturePark\API\Normalizer\SearchIndexNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\SearchIndexNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\DefaultSearchIndexDeleteExceptionNormalizer::class => new \PicturePark\API\Normalizer\DefaultSearchIndexDeleteExceptionNormalizer(),
            \PicturePark\API\Normalizer\SearchIndexInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\SearchIndexInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\IndexExceptionNormalizer::class => new \PicturePark\API\Normalizer\IndexExceptionNormalizer(),
            \PicturePark\API\Normalizer\IndexMappingExceptionNormalizer::class => new \PicturePark\API\Normalizer\IndexMappingExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicatedSearchBehaviorExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicatedSearchBehaviorExceptionNormalizer(),
            \PicturePark\API\Normalizer\SearchStringLeadingWildcardExceptionNormalizer::class => new \PicturePark\API\Normalizer\SearchStringLeadingWildcardExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateAggregatorExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateAggregatorExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidDateTimeFormatExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidDateTimeFormatExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidSortFieldExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidSortFieldExceptionNormalizer(),
            \PicturePark\API\Normalizer\DocumentVersionConflictExceptionNormalizer::class => new \PicturePark\API\Normalizer\DocumentVersionConflictExceptionNormalizer(),
            \PicturePark\API\Normalizer\RedisDatabaseExceededExceptionNormalizer::class => new \PicturePark\API\Normalizer\RedisDatabaseExceededExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateDocumentExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateDocumentExceptionNormalizer(),
            \PicturePark\API\Normalizer\ObjectStoreResponseExceptionNormalizer::class => new \PicturePark\API\Normalizer\ObjectStoreResponseExceptionNormalizer(),
            \PicturePark\API\Normalizer\ObjectStoreExceptionNormalizer::class => new \PicturePark\API\Normalizer\ObjectStoreExceptionNormalizer(),
            \PicturePark\API\Normalizer\QueryExceptionNormalizer::class => new \PicturePark\API\Normalizer\QueryExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionOwnershipTransferExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionOwnershipTransferExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetAggregateExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetAggregateExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateRightExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateRightExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionValidationExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionValidationExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemPermissionExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemPermissionExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetInvalidRightCombinationExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetInvalidRightCombinationExceptionNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetValidationExceptionNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetValidationExceptionNormalizer(),
            \PicturePark\API\Normalizer\AmbiguousUserRoleRightsExceptionNormalizer::class => new \PicturePark\API\Normalizer\AmbiguousUserRoleRightsExceptionNormalizer(),
            \PicturePark\API\Normalizer\UnsupportedListItemChangeCommandExceptionNormalizer::class => new \PicturePark\API\Normalizer\UnsupportedListItemChangeCommandExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemLayerExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemLayerExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemCyclicDependencyExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemCyclicDependencyExceptionNormalizer(),
            \PicturePark\API\Normalizer\DeleteListItemsWithReferencesExceptionNormalizer::class => new \PicturePark\API\Normalizer\DeleteListItemsWithReferencesExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemUpdateManyExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemUpdateManyExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemSchemaMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemSchemaMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\TransferInfoNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\TransferInfoNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\FileTransferNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\FileTransferNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidTransferTypeExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidTransferTypeExceptionNormalizer(),
            \PicturePark\API\Normalizer\TransferNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\TransferNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\WrongChunkSizeExceptionNormalizer::class => new \PicturePark\API\Normalizer\WrongChunkSizeExceptionNormalizer(),
            \PicturePark\API\Normalizer\ChunkSizeOutOfRangeExceptionNormalizer::class => new \PicturePark\API\Normalizer\ChunkSizeOutOfRangeExceptionNormalizer(),
            \PicturePark\API\Normalizer\MaximumTransferSizeExceptionNormalizer::class => new \PicturePark\API\Normalizer\MaximumTransferSizeExceptionNormalizer(),
            \PicturePark\API\Normalizer\FileIdDuplicatedExceptionNormalizer::class => new \PicturePark\API\Normalizer\FileIdDuplicatedExceptionNormalizer(),
            \PicturePark\API\Normalizer\MissingDependenciesExceptionNormalizer::class => new \PicturePark\API\Normalizer\MissingDependenciesExceptionNormalizer(),
            \PicturePark\API\Normalizer\RelationSelfReferencingExceptionNormalizer::class => new \PicturePark\API\Normalizer\RelationSelfReferencingExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidChangeCommandFieldTypeInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidChangeCommandFieldTypeInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidChangeCommandFieldNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidChangeCommandFieldNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidChangeCommandSchemaChangeInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidChangeCommandSchemaChangeInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidMetadataExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidMetadataExceptionNormalizer(),
            \PicturePark\API\Normalizer\MetadataErrorNormalizer::class => new \PicturePark\API\Normalizer\MetadataErrorNormalizer(),
            \PicturePark\API\Normalizer\RelationNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\RelationNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\RelationTypeNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\RelationTypeNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\RelationTypeTargetDocTypeMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\RelationTypeTargetDocTypeMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\AggregationNameInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\AggregationNameInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\AggregationSizeInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\AggregationSizeInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\AggregationFilterNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\AggregationFilterNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\RelationTypeMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\RelationTypeMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\ReferencesUpdateExceptionNormalizer::class => new \PicturePark\API\Normalizer\ReferencesUpdateExceptionNormalizer(),
            \PicturePark\API\Normalizer\ReferenceUpdateExceptionNormalizer::class => new \PicturePark\API\Normalizer\ReferenceUpdateExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicatedItemAssignedExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicatedItemAssignedExceptionNormalizer(),
            \PicturePark\API\Normalizer\InvalidDataTypeExceptionNormalizer::class => new \PicturePark\API\Normalizer\InvalidDataTypeExceptionNormalizer(),
            \PicturePark\API\Normalizer\LayerAssignmentInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\LayerAssignmentInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutdatedMetadataUpdateInProgressExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutdatedMetadataUpdateInProgressExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldOverwriteTypeMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldOverwriteTypeMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldOverwriteIdExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldOverwriteIdExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldIdDuplicatedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldIdDuplicatedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldIdPreviouslyUsedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldIdPreviouslyUsedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldIdAlreadyExistsInSchemaHierarchyExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldIdAlreadyExistsInSchemaHierarchyExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldSchemaIndexInfoSimpleSearchNestingExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldSchemaIndexInfoSimpleSearchNestingExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldSchemaIndexInfoNestingExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldSchemaIndexInfoNestingExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldIdUppercaseExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldIdUppercaseExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaIdLowercaseExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaIdLowercaseExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInfoNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInfoNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\IndexedFieldThresholdExceededExceptionNormalizer::class => new \PicturePark\API\Normalizer\IndexedFieldThresholdExceededExceptionNormalizer(),
            \PicturePark\API\Normalizer\SortableFieldThresholdExceededExceptionNormalizer::class => new \PicturePark\API\Normalizer\SortableFieldThresholdExceededExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateSchemaInfoExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateSchemaInfoExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldNumberRangeExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldNumberRangeExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInUseContentSchemaExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInUseContentSchemaExceptionNormalizer(),
            \PicturePark\API\Normalizer\LayerAssignmentInUseWithContentsExceptionNormalizer::class => new \PicturePark\API\Normalizer\LayerAssignmentInUseWithContentsExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInUseListItemExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInUseListItemExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInUseContentExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInUseContentExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInUseFieldExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInUseFieldExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateMetadataDisplayPatternExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateMetadataDisplayPatternExceptionNormalizer(),
            \PicturePark\API\Normalizer\DuplicateSchemaExceptionNormalizer::class => new \PicturePark\API\Normalizer\DuplicateSchemaExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaImportEmptyExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaImportEmptyExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaImportVersionMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaImportVersionMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInheritanceFieldIndexDeviationExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInheritanceFieldIndexDeviationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInheritanceTypeDeviationExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInheritanceTypeDeviationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaValidationExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaValidationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaSortFieldExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaSortFieldExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldIdExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldIdExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldTypeChangeExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldTypeChangeExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldIndexExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldIndexExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldNotSortableExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldNotSortableExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldNotSearchableExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldNotSearchableExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldInvalidBoostExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldInvalidBoostExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldSortableInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldSortableInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaNoContentExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaNoContentExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaParentChangeExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaParentChangeExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaMissingTypeExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaMissingTypeExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionConfigurationExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionConfigurationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaNoLayerExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaNoLayerExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaIdExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaIdExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaCountLimitReachedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaCountLimitReachedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SystemSchemaInvalidModificationExceptionNormalizer::class => new \PicturePark\API\Normalizer\SystemSchemaInvalidModificationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldRelationSchemaSystemSchemaExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldRelationSchemaSystemSchemaExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldRelationSchemaTypeUnsupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldRelationSchemaTypeUnsupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaMultipleTypesExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaMultipleTypesExceptionNormalizer(),
            \PicturePark\API\Normalizer\MissingDisplayPatternForCustomerDefaultLanguageExceptionNormalizer::class => new \PicturePark\API\Normalizer\MissingDisplayPatternForCustomerDefaultLanguageExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaViewForAllExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaViewForAllExceptionNormalizer(),
            \PicturePark\API\Normalizer\SystemLayerReferenceInvalidModificationExceptionNormalizer::class => new \PicturePark\API\Normalizer\SystemLayerReferenceInvalidModificationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldAnalyzerInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldAnalyzerInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldRelationMultipleTypesExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldRelationMultipleTypesExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldNotRequirableExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldNotRequirableExceptionNormalizer(),
            \PicturePark\API\Normalizer\DisplayPatternTypeNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\DisplayPatternTypeNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldActivityInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldActivityInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldReferencedSchemaChangeNotAllowedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldReferencedSchemaChangeNotAllowedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldReferencedSchemaSystemSchemaExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldReferencedSchemaSystemSchemaExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldRelationRelationTypeIdModificationNotAllowedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldRelationRelationTypeIdModificationNotAllowedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldRelationTargetDocTypeModificationNotAllowedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldRelationTargetDocTypeModificationNotAllowedExceptionNormalizer(),
            \PicturePark\API\Normalizer\DeleteContentsWithReferencesExceptionNormalizer::class => new \PicturePark\API\Normalizer\DeleteContentsWithReferencesExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentMetadataUpdateManyExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentMetadataUpdateManyExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentLayerInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentLayerInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentFileReplaceTypeMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentFileReplaceTypeMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentBackupFailedExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentBackupFailedExceptionNormalizer(),
            \PicturePark\API\Normalizer\ContentLayerSameRootExceptionNormalizer::class => new \PicturePark\API\Normalizer\ContentLayerSameRootExceptionNormalizer(),
            \PicturePark\API\Normalizer\LayerIdsByRootSchemaNormalizer::class => new \PicturePark\API\Normalizer\LayerIdsByRootSchemaNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessEngineRequestExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessEngineRequestExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDefinitionNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDefinitionNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDefinitionCreateExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDefinitionCreateExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessNotExternalExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessNotExternalExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessCancellationNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessCancellationNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessContinuationExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessContinuationExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldImportMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldImportMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldImportRelatedSchemaMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldImportRelatedSchemaMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldImportTypeMismatchExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldImportTypeMismatchExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaFieldDisplayPatternTypeNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaFieldDisplayPatternTypeNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SnapshotTimeoutExceptionNormalizer::class => new \PicturePark\API\Normalizer\SnapshotTimeoutExceptionNormalizer(),
            \PicturePark\API\Normalizer\SnapshotFailedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SnapshotFailedExceptionNormalizer(),
            \PicturePark\API\Normalizer\SnapshotSkippedExceptionNormalizer::class => new \PicturePark\API\Normalizer\SnapshotSkippedExceptionNormalizer(),
            \PicturePark\API\Normalizer\AddMetadataLanguageTimeoutExceptionNormalizer::class => new \PicturePark\API\Normalizer\AddMetadataLanguageTimeoutExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentProcessAlreadyRunningExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentProcessAlreadyRunningExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentProcessNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentProcessNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentProcessWaitTimeoutExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentProcessWaitTimeoutExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerBoostValuesUpdateTimeoutExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerBoostValuesUpdateTimeoutExceptionNormalizer(),
            \PicturePark\API\Normalizer\NoTermsOfServiceDefinedExceptionNormalizer::class => new \PicturePark\API\Normalizer\NoTermsOfServiceDefinedExceptionNormalizer(),
            \PicturePark\API\Normalizer\AtLeastOneActiveTermsOfServiceMustExistExceptionNormalizer::class => new \PicturePark\API\Normalizer\AtLeastOneActiveTermsOfServiceMustExistExceptionNormalizer(),
            \PicturePark\API\Normalizer\ForbiddenHtmlElementsUsedExceptionNormalizer::class => new \PicturePark\API\Normalizer\ForbiddenHtmlElementsUsedExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessStateNotHitExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessStateNotHitExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessLifeCycleNotHitExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessLifeCycleNotHitExceptionNormalizer(),
            \PicturePark\API\Normalizer\OnlyAccessibleToRecipientExceptionNormalizer::class => new \PicturePark\API\Normalizer\OnlyAccessibleToRecipientExceptionNormalizer(),
            \PicturePark\API\Normalizer\EnvironmentNotAvailableExceptionNormalizer::class => new \PicturePark\API\Normalizer\EnvironmentNotAvailableExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerNotAvailableExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerNotAvailableExceptionNormalizer(),
            \PicturePark\API\Normalizer\CustomerAliasHeaderMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\CustomerAliasHeaderMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleActionInvalidDocumentTypeExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleActionInvalidDocumentTypeExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleActionInvalidExecutionScopeExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleActionInvalidExecutionScopeExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleActionsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleActionsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConditionMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConditionMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConditionsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConditionsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConfigurationValidationExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConfigurationValidationExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleSchemaIdInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleSchemaIdInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRulePermissionSetIdInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRulePermissionSetIdInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleRuleIdDuplicationExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleRuleIdDuplicationExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleRuleIdMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleRuleIdMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTriggerPointMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTriggerPointMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleValidationExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleValidationExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConditionInvalidTriggerPointDocumentTypeExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConditionInvalidTriggerPointDocumentTypeExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleRegularExpressionInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleRegularExpressionInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConditionInvalidTriggerPointActionExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConditionInvalidTriggerPointActionExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleRefIdsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleRefIdsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRulePathInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRulePathInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleFieldIdInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleFieldIdInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleContentPermissionSetIdsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleContentPermissionSetIdsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleFieldPathInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleFieldPathInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRulePolygonInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRulePolygonInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleArrayIndexInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleArrayIndexInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleDictionaryKeyInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleDictionaryKeyInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleProjectionTransformationsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleProjectionTransformationsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleInvalidVariableNameExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleInvalidVariableNameExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTransformationGroupTransformationsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTransformationGroupTransformationsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTransformationGroupInputsMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTransformationGroupInputsMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleNamedCacheNameInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleNamedCacheNameInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleNGramTransformationSizeInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleNGramTransformationSizeInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleNGramTransformationMinWordLengthInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleNGramTransformationMinWordLengthInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleNGramTransformationMaxWordLengthInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleNGramTransformationMaxWordLengthInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\NamedCacheConfigurationExceptionNormalizer::class => new \PicturePark\API\Normalizer\NamedCacheConfigurationExceptionNormalizer(),
            \PicturePark\API\Normalizer\NamedCacheNameMissingExceptionNormalizer::class => new \PicturePark\API\Normalizer\NamedCacheNameMissingExceptionNormalizer(),
            \PicturePark\API\Normalizer\NamedCacheNameDuplicationExceptionNormalizer::class => new \PicturePark\API\Normalizer\NamedCacheNameDuplicationExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemNamedCacheSchemaIdInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemNamedCacheSchemaIdInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\ListItemNamedCacheKeyFieldsInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\ListItemNamedCacheKeyFieldsInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\SchemaTagboxFilterLookupNamedCacheSchemaIdInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\SchemaTagboxFilterLookupNamedCacheSchemaIdInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\NoTagsFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\NoTagsFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputNotAvailableExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputNotAvailableExceptionNormalizer(),
            \PicturePark\API\Normalizer\ModelNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\ModelNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\DisplayValueRerenderingInProgressExceptionNormalizer::class => new \PicturePark\API\Normalizer\DisplayValueRerenderingInProgressExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatSourceNotDefinedExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatSourceNotDefinedExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatRetentionTimeOutOfRangeExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatRetentionTimeOutOfRangeExceptionNormalizer(),
            \PicturePark\API\Normalizer\NotSupportedFileExtensionForFormatExceptionNormalizer::class => new \PicturePark\API\Normalizer\NotSupportedFileExtensionForFormatExceptionNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatXmpWritebackNotSupportedExceptionNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatXmpWritebackNotSupportedExceptionNormalizer(),
            \PicturePark\API\Normalizer\CollectionSizeLimitExceededExceptionNormalizer::class => new \PicturePark\API\Normalizer\CollectionSizeLimitExceededExceptionNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingFieldNotSupportedNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingFieldNotSupportedNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingFieldNotFoundExceptionNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingFieldNotFoundExceptionNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingSchemaNotAvailableForFileContentSchemaExceptionNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingSchemaNotAvailableForFileContentSchemaExceptionNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingFieldToLayerWithRequiredFieldsNotAllowedExceptionNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingFieldToLayerWithRequiredFieldsNotAllowedExceptionNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingFieldInUseExceptionNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingFieldInUseExceptionNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingConfigurationInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingConfigurationInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\ActivityMappingInvalidExceptionNormalizer::class => new \PicturePark\API\Normalizer\ActivityMappingInvalidExceptionNormalizer(),
            \PicturePark\API\Normalizer\ProblemDetailsNormalizer::class => new \PicturePark\API\Normalizer\ProblemDetailsNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessNotificationUpdateNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessNotificationUpdateNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessStateChangeRequestNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessStateChangeRequestNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessNotificationUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessNotificationUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessWaitForStateResultNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessWaitForStateResultNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessWaitForLifeCycleResultNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessWaitForLifeCycleResultNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDetailsNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDetailsNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDetailsDataBaseNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDetailsDataBaseNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDetailsDataBatchResponseNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDetailsDataBatchResponseNormalizer(),
            \PicturePark\API\Normalizer\BatchResponseNormalizer::class => new \PicturePark\API\Normalizer\BatchResponseNormalizer(),
            \PicturePark\API\Normalizer\BatchResponseRowNormalizer::class => new \PicturePark\API\Normalizer\BatchResponseRowNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDetailsDataSchemaImportNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDetailsDataSchemaImportNormalizer(),
            \PicturePark\API\Normalizer\SchemaImportResultNormalizer::class => new \PicturePark\API\Normalizer\SchemaImportResultNormalizer(),
            \PicturePark\API\Normalizer\ListItemImportResultNormalizer::class => new \PicturePark\API\Normalizer\ListItemImportResultNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDetailsDataCdnPurgeNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDetailsDataCdnPurgeNormalizer(),
            \PicturePark\API\Normalizer\CdnPurgeJobBaseNormalizer::class => new \PicturePark\API\Normalizer\CdnPurgeJobBaseNormalizer(),
            \PicturePark\API\Normalizer\CdnPurgeJobByTagNormalizer::class => new \PicturePark\API\Normalizer\CdnPurgeJobByTagNormalizer(),
            \PicturePark\API\Normalizer\CdnPurgeJobByUriNormalizer::class => new \PicturePark\API\Normalizer\CdnPurgeJobByUriNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessDetailsDataContentImportNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessDetailsDataContentImportNormalizer(),
            \PicturePark\API\Normalizer\ContentImportResultNormalizer::class => new \PicturePark\API\Normalizer\ContentImportResultNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessSearchResultNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfBusinessProcessNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfBusinessProcessNormalizer(),
            \PicturePark\API\Normalizer\QueryDebugInformationNormalizer::class => new \PicturePark\API\Normalizer\QueryDebugInformationNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfBusinessProcessNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfBusinessProcessNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\FilterBaseNormalizer::class => new \PicturePark\API\Normalizer\FilterBaseNormalizer(),
            \PicturePark\API\Normalizer\AndFilterNormalizer::class => new \PicturePark\API\Normalizer\AndFilterNormalizer(),
            \PicturePark\API\Normalizer\OrFilterNormalizer::class => new \PicturePark\API\Normalizer\OrFilterNormalizer(),
            \PicturePark\API\Normalizer\NotFilterNormalizer::class => new \PicturePark\API\Normalizer\NotFilterNormalizer(),
            \PicturePark\API\Normalizer\DateRangeFilterNormalizer::class => new \PicturePark\API\Normalizer\DateRangeFilterNormalizer(),
            \PicturePark\API\Normalizer\DateRangeNormalizer::class => new \PicturePark\API\Normalizer\DateRangeNormalizer(),
            \PicturePark\API\Normalizer\ExistsFilterNormalizer::class => new \PicturePark\API\Normalizer\ExistsFilterNormalizer(),
            \PicturePark\API\Normalizer\GeoBoundingBoxFilterNormalizer::class => new \PicturePark\API\Normalizer\GeoBoundingBoxFilterNormalizer(),
            \PicturePark\API\Normalizer\GeoLocationNormalizer::class => new \PicturePark\API\Normalizer\GeoLocationNormalizer(),
            \PicturePark\API\Normalizer\GeoDistanceFilterNormalizer::class => new \PicturePark\API\Normalizer\GeoDistanceFilterNormalizer(),
            \PicturePark\API\Normalizer\NestedFilterNormalizer::class => new \PicturePark\API\Normalizer\NestedFilterNormalizer(),
            \PicturePark\API\Normalizer\NumericRangeFilterNormalizer::class => new \PicturePark\API\Normalizer\NumericRangeFilterNormalizer(),
            \PicturePark\API\Normalizer\NumericRangeNormalizer::class => new \PicturePark\API\Normalizer\NumericRangeNormalizer(),
            \PicturePark\API\Normalizer\PrefixFilterNormalizer::class => new \PicturePark\API\Normalizer\PrefixFilterNormalizer(),
            \PicturePark\API\Normalizer\TermFilterNormalizer::class => new \PicturePark\API\Normalizer\TermFilterNormalizer(),
            \PicturePark\API\Normalizer\TermsFilterNormalizer::class => new \PicturePark\API\Normalizer\TermsFilterNormalizer(),
            \PicturePark\API\Normalizer\AggregationFilterNormalizer::class => new \PicturePark\API\Normalizer\AggregationFilterNormalizer(),
            \PicturePark\API\Normalizer\ChildFilterNormalizer::class => new \PicturePark\API\Normalizer\ChildFilterNormalizer(),
            \PicturePark\API\Normalizer\ParentFilterNormalizer::class => new \PicturePark\API\Normalizer\ParentFilterNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConfigurationNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConfigurationNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTriggerPointNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTriggerPointNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConfigurableNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConfigurableNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConditionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConditionNormalizer(),
            \PicturePark\API\Normalizer\AndConditionNormalizer::class => new \PicturePark\API\Normalizer\AndConditionNormalizer(),
            \PicturePark\API\Normalizer\BooleanConditionNormalizer::class => new \PicturePark\API\Normalizer\BooleanConditionNormalizer(),
            \PicturePark\API\Normalizer\OrConditionNormalizer::class => new \PicturePark\API\Normalizer\OrConditionNormalizer(),
            \PicturePark\API\Normalizer\LayerAssignedConditionNormalizer::class => new \PicturePark\API\Normalizer\LayerAssignedConditionNormalizer(),
            \PicturePark\API\Normalizer\LayerUnassignedConditionNormalizer::class => new \PicturePark\API\Normalizer\LayerUnassignedConditionNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetAssignedConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetAssignedConditionNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetUnassignedConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetUnassignedConditionNormalizer(),
            \PicturePark\API\Normalizer\FieldValueChangedConditionNormalizer::class => new \PicturePark\API\Normalizer\FieldValueChangedConditionNormalizer(),
            \PicturePark\API\Normalizer\MatchRegexConditionNormalizer::class => new \PicturePark\API\Normalizer\MatchRegexConditionNormalizer(),
            \PicturePark\API\Normalizer\TagboxItemAssignedConditionNormalizer::class => new \PicturePark\API\Normalizer\TagboxItemAssignedConditionNormalizer(),
            \PicturePark\API\Normalizer\TagboxItemUnassignedConditionNormalizer::class => new \PicturePark\API\Normalizer\TagboxItemUnassignedConditionNormalizer(),
            \PicturePark\API\Normalizer\ContentSchemaConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentSchemaConditionNormalizer(),
            \PicturePark\API\Normalizer\NumberCompareConditionNormalizer::class => new \PicturePark\API\Normalizer\NumberCompareConditionNormalizer(),
            \PicturePark\API\Normalizer\ContentRelationItemAssignedConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentRelationItemAssignedConditionNormalizer(),
            \PicturePark\API\Normalizer\ContentRelationItemUnassignedConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentRelationItemUnassignedConditionNormalizer(),
            \PicturePark\API\Normalizer\GeoPointWithinPolygonConditionNormalizer::class => new \PicturePark\API\Normalizer\GeoPointWithinPolygonConditionNormalizer(),
            \PicturePark\API\Normalizer\LatLonNormalizer::class => new \PicturePark\API\Normalizer\LatLonNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetsChangedConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetsChangedConditionNormalizer(),
            \PicturePark\API\Normalizer\ContentRelationItemsChangedConditionNormalizer::class => new \PicturePark\API\Normalizer\ContentRelationItemsChangedConditionNormalizer(),
            \PicturePark\API\Normalizer\LayersChangedConditionNormalizer::class => new \PicturePark\API\Normalizer\LayersChangedConditionNormalizer(),
            \PicturePark\API\Normalizer\TagboxItemsChangedConditionNormalizer::class => new \PicturePark\API\Normalizer\TagboxItemsChangedConditionNormalizer(),
            \PicturePark\API\Normalizer\FieldEmptyConditionNormalizer::class => new \PicturePark\API\Normalizer\FieldEmptyConditionNormalizer(),
            \PicturePark\API\Normalizer\NotConditionNormalizer::class => new \PicturePark\API\Normalizer\NotConditionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTransformationGroupNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTransformationGroupNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTransformationNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTransformationNormalizer(),
            \PicturePark\API\Normalizer\TakeDictionaryValueTransformationNormalizer::class => new \PicturePark\API\Normalizer\TakeDictionaryValueTransformationNormalizer(),
            \PicturePark\API\Normalizer\TakeArrayValueTransformationNormalizer::class => new \PicturePark\API\Normalizer\TakeArrayValueTransformationNormalizer(),
            \PicturePark\API\Normalizer\JoinByTransformationNormalizer::class => new \PicturePark\API\Normalizer\JoinByTransformationNormalizer(),
            \PicturePark\API\Normalizer\LookupCacheTransformationNormalizer::class => new \PicturePark\API\Normalizer\LookupCacheTransformationNormalizer(),
            \PicturePark\API\Normalizer\NGramTransformationNormalizer::class => new \PicturePark\API\Normalizer\NGramTransformationNormalizer(),
            \PicturePark\API\Normalizer\ProjectionTransformationNormalizer::class => new \PicturePark\API\Normalizer\ProjectionTransformationNormalizer(),
            \PicturePark\API\Normalizer\SplitTransformationNormalizer::class => new \PicturePark\API\Normalizer\SplitTransformationNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleActionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleActionNormalizer(),
            \PicturePark\API\Normalizer\AssignLayerActionNormalizer::class => new \PicturePark\API\Normalizer\AssignLayerActionNormalizer(),
            \PicturePark\API\Normalizer\UnassignLayerActionNormalizer::class => new \PicturePark\API\Normalizer\UnassignLayerActionNormalizer(),
            \PicturePark\API\Normalizer\AssignValueActionNormalizer::class => new \PicturePark\API\Normalizer\AssignValueActionNormalizer(),
            \PicturePark\API\Normalizer\AssignTagboxItemsActionNormalizer::class => new \PicturePark\API\Normalizer\AssignTagboxItemsActionNormalizer(),
            \PicturePark\API\Normalizer\UnassignTagboxItemsActionNormalizer::class => new \PicturePark\API\Normalizer\UnassignTagboxItemsActionNormalizer(),
            \PicturePark\API\Normalizer\AssignContentPermissionSetsActionNormalizer::class => new \PicturePark\API\Normalizer\AssignContentPermissionSetsActionNormalizer(),
            \PicturePark\API\Normalizer\UnassignContentPermissionSetsActionNormalizer::class => new \PicturePark\API\Normalizer\UnassignContentPermissionSetsActionNormalizer(),
            \PicturePark\API\Normalizer\ProduceMessageActionNormalizer::class => new \PicturePark\API\Normalizer\ProduceMessageActionNormalizer(),
            \PicturePark\API\Normalizer\AssignTagboxItemsInLayerActionNormalizer::class => new \PicturePark\API\Normalizer\AssignTagboxItemsInLayerActionNormalizer(),
            \PicturePark\API\Normalizer\EnqueueTaggingActionNormalizer::class => new \PicturePark\API\Normalizer\EnqueueTaggingActionNormalizer(),
            \PicturePark\API\Normalizer\TaggingOptionsBaseNormalizer::class => new \PicturePark\API\Normalizer\TaggingOptionsBaseNormalizer(),
            \PicturePark\API\Normalizer\ClarifaiTaggingOptionsNormalizer::class => new \PicturePark\API\Normalizer\ClarifaiTaggingOptionsNormalizer(),
            \PicturePark\API\Normalizer\SimulatedTaggingOptionsNormalizer::class => new \PicturePark\API\Normalizer\SimulatedTaggingOptionsNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleScriptNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleScriptNormalizer(),
            \PicturePark\API\Normalizer\NamedCacheConfigurationBaseNormalizer::class => new \PicturePark\API\Normalizer\NamedCacheConfigurationBaseNormalizer(),
            \PicturePark\API\Normalizer\ListItemNamedCacheConfigurationNormalizer::class => new \PicturePark\API\Normalizer\ListItemNamedCacheConfigurationNormalizer(),
            \PicturePark\API\Normalizer\SchemaTagboxFilterLookupNamedCacheConfigurationNormalizer::class => new \PicturePark\API\Normalizer\SchemaTagboxFilterLookupNamedCacheConfigurationNormalizer(),
            \PicturePark\API\Normalizer\InverseListItemNamedCacheConfigurationNormalizer::class => new \PicturePark\API\Normalizer\InverseListItemNamedCacheConfigurationNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleConfigurationUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleConfigurationUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTraceLogSearchResultNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTraceLogSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfBusinessRuleTraceLogNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfBusinessRuleTraceLogNormalizer(),
            \PicturePark\API\Normalizer\AggregationResultNormalizer::class => new \PicturePark\API\Normalizer\AggregationResultNormalizer(),
            \PicturePark\API\Normalizer\AggregationResultItemNormalizer::class => new \PicturePark\API\Normalizer\AggregationResultItemNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfBusinessRuleTraceLogNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfBusinessRuleTraceLogNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfBusinessRuleTraceLogNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfBusinessRuleTraceLogNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTraceLogNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTraceLogNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTracedRuleNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTracedRuleNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTracedEvaluationNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTracedEvaluationNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTracedEvaluationConditionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTracedEvaluationConditionNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTracedTransformationGroupNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTracedTransformationGroupNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTracedTransformationNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTracedTransformationNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTracedActionNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTracedActionNormalizer(),
            \PicturePark\API\Normalizer\UserAuditNormalizer::class => new \PicturePark\API\Normalizer\UserAuditNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleTraceLogSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleTraceLogSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\AggregatorBaseNormalizer::class => new \PicturePark\API\Normalizer\AggregatorBaseNormalizer(),
            \PicturePark\API\Normalizer\DateRangeAggregatorNormalizer::class => new \PicturePark\API\Normalizer\DateRangeAggregatorNormalizer(),
            \PicturePark\API\Normalizer\DateRangeForAggregatorNormalizer::class => new \PicturePark\API\Normalizer\DateRangeForAggregatorNormalizer(),
            \PicturePark\API\Normalizer\GeoDistanceAggregatorNormalizer::class => new \PicturePark\API\Normalizer\GeoDistanceAggregatorNormalizer(),
            \PicturePark\API\Normalizer\GeoDistanceNormalizer::class => new \PicturePark\API\Normalizer\GeoDistanceNormalizer(),
            \PicturePark\API\Normalizer\NestedAggregatorNormalizer::class => new \PicturePark\API\Normalizer\NestedAggregatorNormalizer(),
            \PicturePark\API\Normalizer\NumericRangeAggregatorNormalizer::class => new \PicturePark\API\Normalizer\NumericRangeAggregatorNormalizer(),
            \PicturePark\API\Normalizer\NumericRangeForAggregatorNormalizer::class => new \PicturePark\API\Normalizer\NumericRangeForAggregatorNormalizer(),
            \PicturePark\API\Normalizer\TermsAggregatorNormalizer::class => new \PicturePark\API\Normalizer\TermsAggregatorNormalizer(),
            \PicturePark\API\Normalizer\TermsRelationAggregatorNormalizer::class => new \PicturePark\API\Normalizer\TermsRelationAggregatorNormalizer(),
            \PicturePark\API\Normalizer\TermsEnumAggregatorNormalizer::class => new \PicturePark\API\Normalizer\TermsEnumAggregatorNormalizer(),
            \PicturePark\API\Normalizer\SortInfoNormalizer::class => new \PicturePark\API\Normalizer\SortInfoNormalizer(),
            \PicturePark\API\Normalizer\ChannelNormalizer::class => new \PicturePark\API\Normalizer\ChannelNormalizer(),
            \PicturePark\API\Normalizer\SortFieldNormalizer::class => new \PicturePark\API\Normalizer\SortFieldNormalizer(),
            \PicturePark\API\Normalizer\ChannelCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ChannelCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ChannelUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ChannelUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetDetailNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetDetailNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetDetailOfContentRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetDetailOfContentRightNormalizer(),
            \PicturePark\API\Normalizer\PermissionUserRoleRightsOfContentRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionUserRoleRightsOfContentRightNormalizer(),
            \PicturePark\API\Normalizer\PermissionUserRoleRightsOfPermissionSetRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionUserRoleRightsOfPermissionSetRightNormalizer(),
            \PicturePark\API\Normalizer\UserAuditDetailNormalizer::class => new \PicturePark\API\Normalizer\UserAuditDetailNormalizer(),
            \PicturePark\API\Normalizer\UserNormalizer::class => new \PicturePark\API\Normalizer\UserNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetCreateRequestOfContentRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetCreateRequestOfContentRightNormalizer(),
            \PicturePark\API\Normalizer\UserRoleRightsOfContentRightNormalizer::class => new \PicturePark\API\Normalizer\UserRoleRightsOfContentRightNormalizer(),
            \PicturePark\API\Normalizer\UserRoleRightsOfPermissionSetRightNormalizer::class => new \PicturePark\API\Normalizer\UserRoleRightsOfPermissionSetRightNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetUpdateRequestOfContentRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetUpdateRequestOfContentRightNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetOwnershipTransferRequestNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetOwnershipTransferRequestNormalizer(),
            \PicturePark\API\Normalizer\BulkResponseNormalizer::class => new \PicturePark\API\Normalizer\BulkResponseNormalizer(),
            \PicturePark\API\Normalizer\BulkResponseRowNormalizer::class => new \PicturePark\API\Normalizer\BulkResponseRowNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionSetUpdateRequestItemNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionSetUpdateRequestItemNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetUpdateRequestItemOfContentRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetUpdateRequestItemOfContentRightNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetOwnershipTransferManyRequestNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetOwnershipTransferManyRequestNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetOwnershipTransferItemNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetOwnershipTransferItemNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetUserPermissionRightsNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetUserPermissionRightsNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetSearchResultNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfPermissionSetNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfPermissionSetNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfPermissionSetNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfPermissionSetNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentDetailNormalizer::class => new \PicturePark\API\Normalizer\ContentDetailNormalizer(),
            \PicturePark\API\Normalizer\OutputNormalizer::class => new \PicturePark\API\Normalizer\OutputNormalizer(),
            \PicturePark\API\Normalizer\OutputDataBaseNormalizer::class => new \PicturePark\API\Normalizer\OutputDataBaseNormalizer(),
            \PicturePark\API\Normalizer\OutputDataImageNormalizer::class => new \PicturePark\API\Normalizer\OutputDataImageNormalizer(),
            \PicturePark\API\Normalizer\OutputDataAudioNormalizer::class => new \PicturePark\API\Normalizer\OutputDataAudioNormalizer(),
            \PicturePark\API\Normalizer\OutputDataVideoNormalizer::class => new \PicturePark\API\Normalizer\OutputDataVideoNormalizer(),
            \PicturePark\API\Normalizer\SpriteNormalizer::class => new \PicturePark\API\Normalizer\SpriteNormalizer(),
            \PicturePark\API\Normalizer\OutputDataDocumentNormalizer::class => new \PicturePark\API\Normalizer\OutputDataDocumentNormalizer(),
            \PicturePark\API\Normalizer\OutputDataVectorNormalizer::class => new \PicturePark\API\Normalizer\OutputDataVectorNormalizer(),
            \PicturePark\API\Normalizer\OutputDataDefaultNormalizer::class => new \PicturePark\API\Normalizer\OutputDataDefaultNormalizer(),
            \PicturePark\API\Normalizer\OutputDetailNormalizer::class => new \PicturePark\API\Normalizer\OutputDetailNormalizer(),
            \PicturePark\API\Normalizer\ActivityNormalizer::class => new \PicturePark\API\Normalizer\ActivityNormalizer(),
            \PicturePark\API\Normalizer\ContentCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentMetadataUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentMetadataUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionsUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionsUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentOwnershipTransferRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentOwnershipTransferRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentFileUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentFileUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentReferencesResultNormalizer::class => new \PicturePark\API\Normalizer\ContentReferencesResultNormalizer(),
            \PicturePark\API\Normalizer\MetadataReferenceResultNormalizer::class => new \PicturePark\API\Normalizer\MetadataReferenceResultNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfMetadataReferenceNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfMetadataReferenceNormalizer(),
            \PicturePark\API\Normalizer\MetadataReferenceNormalizer::class => new \PicturePark\API\Normalizer\MetadataReferenceNormalizer(),
            \PicturePark\API\Normalizer\ContentShareReferenceResultNormalizer::class => new \PicturePark\API\Normalizer\ContentShareReferenceResultNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfContentShareReferenceNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfContentShareReferenceNormalizer(),
            \PicturePark\API\Normalizer\ContentShareReferenceNormalizer::class => new \PicturePark\API\Normalizer\ContentShareReferenceNormalizer(),
            \PicturePark\API\Normalizer\ContentReferencesRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentReferencesRequestNormalizer(),
            \PicturePark\API\Normalizer\MetadataReferencesPagingRequestNormalizer::class => new \PicturePark\API\Normalizer\MetadataReferencesPagingRequestNormalizer(),
            \PicturePark\API\Normalizer\PagingRequestNormalizer::class => new \PicturePark\API\Normalizer\PagingRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputResolveResultNormalizer::class => new \PicturePark\API\Normalizer\OutputResolveResultNormalizer(),
            \PicturePark\API\Normalizer\ContentDownloadLinkCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentDownloadLinkCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentDownloadRequestItemNormalizer::class => new \PicturePark\API\Normalizer\ContentDownloadRequestItemNormalizer(),
            \PicturePark\API\Normalizer\DownloadLinkNormalizer::class => new \PicturePark\API\Normalizer\DownloadLinkNormalizer(),
            \PicturePark\API\Normalizer\ContentCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentMetadataUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentMetadataUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentMetadataUpdateItemNormalizer::class => new \PicturePark\API\Normalizer\ContentMetadataUpdateItemNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionsUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionsUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentPermissionsUpdateItemNormalizer::class => new \PicturePark\API\Normalizer\ContentPermissionsUpdateItemNormalizer(),
            \PicturePark\API\Normalizer\ContentOwnershipTransferManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentOwnershipTransferManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentOwnershipTransferItemNormalizer::class => new \PicturePark\API\Normalizer\ContentOwnershipTransferItemNormalizer(),
            \PicturePark\API\Normalizer\ContentDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentDeleteManyFilterRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentDeleteManyFilterRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentFilterRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentFilterRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentRestoreManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentRestoreManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentManyReferencesRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentManyReferencesRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputResolveManyRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputResolveManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentFieldsBatchUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentFieldsBatchUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesChangeRequestBaseNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesChangeRequestBaseNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesChangeCommandBaseNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesChangeCommandBaseNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesSchemaUpdateCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesSchemaUpdateCommandNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesSchemaUpsertCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesSchemaUpsertCommandNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesSchemaRemoveCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesSchemaRemoveCommandNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesSchemaReplaceCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesSchemaReplaceCommandNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesFieldRemoveCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesFieldRemoveCommandNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesSchemaItemAddCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesSchemaItemAddCommandNormalizer(),
            \PicturePark\API\Normalizer\MetadataValuesSchemaItemRemoveCommandNormalizer::class => new \PicturePark\API\Normalizer\MetadataValuesSchemaItemRemoveCommandNormalizer(),
            \PicturePark\API\Normalizer\ContentFieldsBatchUpdateFilterRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentFieldsBatchUpdateFilterRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentSearchResultNormalizer::class => new \PicturePark\API\Normalizer\ContentSearchResultNormalizer(),
            \PicturePark\API\Normalizer\ContentRightAggregationCountNormalizer::class => new \PicturePark\API\Normalizer\ContentRightAggregationCountNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfContentNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfContentNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfContentNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfContentNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfContentNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfContentNormalizer(),
            \PicturePark\API\Normalizer\ContentNormalizer::class => new \PicturePark\API\Normalizer\ContentNormalizer(),
            \PicturePark\API\Normalizer\ContentSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\ContentAggregationOnChannelRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentAggregationOnChannelRequestNormalizer(),
            \PicturePark\API\Normalizer\ObjectAggregationResultNormalizer::class => new \PicturePark\API\Normalizer\ObjectAggregationResultNormalizer(),
            \PicturePark\API\Normalizer\ContentAggregationRequestNormalizer::class => new \PicturePark\API\Normalizer\ContentAggregationRequestNormalizer(),
            \PicturePark\API\Normalizer\DisplayValueStatusNormalizer::class => new \PicturePark\API\Normalizer\DisplayValueStatusNormalizer(),
            \PicturePark\API\Normalizer\DocumentHistoryNormalizer::class => new \PicturePark\API\Normalizer\DocumentHistoryNormalizer(),
            \PicturePark\API\Normalizer\UserAuditHistoryNormalizer::class => new \PicturePark\API\Normalizer\UserAuditHistoryNormalizer(),
            \PicturePark\API\Normalizer\DocumentHistoryDifferenceNormalizer::class => new \PicturePark\API\Normalizer\DocumentHistoryDifferenceNormalizer(),
            \PicturePark\API\Normalizer\DocumentHistorySearchResultNormalizer::class => new \PicturePark\API\Normalizer\DocumentHistorySearchResultNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfDocumentHistoryNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfDocumentHistoryNormalizer(),
            \PicturePark\API\Normalizer\DocumentHistorySearchRequestNormalizer::class => new \PicturePark\API\Normalizer\DocumentHistorySearchRequestNormalizer(),
            \PicturePark\API\Normalizer\IdentityProviderNormalizer::class => new \PicturePark\API\Normalizer\IdentityProviderNormalizer(),
            \PicturePark\API\Normalizer\IdentityProviderEditableNormalizer::class => new \PicturePark\API\Normalizer\IdentityProviderEditableNormalizer(),
            \PicturePark\API\Normalizer\IdpClaimToUserAttributeMappingNormalizer::class => new \PicturePark\API\Normalizer\IdpClaimToUserAttributeMappingNormalizer(),
            \PicturePark\API\Normalizer\IdpGroupToUserRoleMappingNormalizer::class => new \PicturePark\API\Normalizer\IdpGroupToUserRoleMappingNormalizer(),
            \PicturePark\API\Normalizer\IdentityProviderBasicInfoNormalizer::class => new \PicturePark\API\Normalizer\IdentityProviderBasicInfoNormalizer(),
            \PicturePark\API\Normalizer\VersionInfoNormalizer::class => new \PicturePark\API\Normalizer\VersionInfoNormalizer(),
            \PicturePark\API\Normalizer\CustomerInfoNormalizer::class => new \PicturePark\API\Normalizer\CustomerInfoNormalizer(),
            \PicturePark\API\Normalizer\LanguageConfigurationNormalizer::class => new \PicturePark\API\Normalizer\LanguageConfigurationNormalizer(),
            \PicturePark\API\Normalizer\LanguageNormalizer::class => new \PicturePark\API\Normalizer\LanguageNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatInfoNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatInfoNormalizer(),
            \PicturePark\API\Normalizer\CustomerAppNormalizer::class => new \PicturePark\API\Normalizer\CustomerAppNormalizer(),
            \PicturePark\API\Normalizer\SystemStatusNormalizer::class => new \PicturePark\API\Normalizer\SystemStatusNormalizer(),
            \PicturePark\API\Normalizer\StatusOfSearchIndexStateNormalizer::class => new \PicturePark\API\Normalizer\StatusOfSearchIndexStateNormalizer(),
            \PicturePark\API\Normalizer\StatusOfDisplayValuesStateNormalizer::class => new \PicturePark\API\Normalizer\StatusOfDisplayValuesStateNormalizer(),
            \PicturePark\API\Normalizer\StatusOfMetadataStateNormalizer::class => new \PicturePark\API\Normalizer\StatusOfMetadataStateNormalizer(),
            \PicturePark\API\Normalizer\ListItemDetailNormalizer::class => new \PicturePark\API\Normalizer\ListItemDetailNormalizer(),
            \PicturePark\API\Normalizer\ListItemUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemReferencesResultNormalizer::class => new \PicturePark\API\Normalizer\ListItemReferencesResultNormalizer(),
            \PicturePark\API\Normalizer\ListItemReferencesRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemReferencesRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemUpdateItemNormalizer::class => new \PicturePark\API\Normalizer\ListItemUpdateItemNormalizer(),
            \PicturePark\API\Normalizer\ListItemDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemDeleteManyFilterRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemDeleteManyFilterRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemFilterRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemFilterRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemRestoreManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemRestoreManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemManyReferencesRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemManyReferencesRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemFieldsBatchUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemFieldsBatchUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemFieldsBatchUpdateFilterRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemFieldsBatchUpdateFilterRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemSearchResultNormalizer::class => new \PicturePark\API\Normalizer\ListItemSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfListItemNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfListItemNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfListItemNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfListItemNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfListItemNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfListItemNormalizer(),
            \PicturePark\API\Normalizer\ListItemNormalizer::class => new \PicturePark\API\Normalizer\ListItemNormalizer(),
            \PicturePark\API\Normalizer\ListItemSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemSearchAndAggregationBaseRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemSearchAndAggregationBaseRequestNormalizer(),
            \PicturePark\API\Normalizer\ListItemAggregationRequestNormalizer::class => new \PicturePark\API\Normalizer\ListItemAggregationRequestNormalizer(),
            \PicturePark\API\Normalizer\LiveStreamSearchResultNormalizer::class => new \PicturePark\API\Normalizer\LiveStreamSearchResultNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfLiveStreamNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfLiveStreamNormalizer(),
            \PicturePark\API\Normalizer\LiveStreamNormalizer::class => new \PicturePark\API\Normalizer\LiveStreamNormalizer(),
            \PicturePark\API\Normalizer\LiveStreamTraceJobNormalizer::class => new \PicturePark\API\Normalizer\LiveStreamTraceJobNormalizer(),
            \PicturePark\API\Normalizer\LiveStreamSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\LiveStreamSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\MetadataStatusNormalizer::class => new \PicturePark\API\Normalizer\MetadataStatusNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatDownloadFileNamePatternUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatDownloadFileNamePatternUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatDownloadFileNamePatternUpdateRequestItemNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatDownloadFileNamePatternUpdateRequestItemNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateRequestItemNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatSetXmpWritebackStateRequestItemNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatRenderPreviewRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatRenderPreviewRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatRenderingSpecificationNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatRenderingSpecificationNormalizer(),
            \PicturePark\API\Normalizer\SourceOutputFormatsNormalizer::class => new \PicturePark\API\Normalizer\SourceOutputFormatsNormalizer(),
            \PicturePark\API\Normalizer\FormatBaseNormalizer::class => new \PicturePark\API\Normalizer\FormatBaseNormalizer(),
            \PicturePark\API\Normalizer\ImageFormatBaseNormalizer::class => new \PicturePark\API\Normalizer\ImageFormatBaseNormalizer(),
            \PicturePark\API\Normalizer\ResizeActionNormalizer::class => new \PicturePark\API\Normalizer\ResizeActionNormalizer(),
            \PicturePark\API\Normalizer\ImageActionBaseNormalizer::class => new \PicturePark\API\Normalizer\ImageActionBaseNormalizer(),
            \PicturePark\API\Normalizer\AlphaHandlingActionNormalizer::class => new \PicturePark\API\Normalizer\AlphaHandlingActionNormalizer(),
            \PicturePark\API\Normalizer\CropActionNormalizer::class => new \PicturePark\API\Normalizer\CropActionNormalizer(),
            \PicturePark\API\Normalizer\UnsharpenMaskActionNormalizer::class => new \PicturePark\API\Normalizer\UnsharpenMaskActionNormalizer(),
            \PicturePark\API\Normalizer\WatermarkActionNormalizer::class => new \PicturePark\API\Normalizer\WatermarkActionNormalizer(),
            \PicturePark\API\Normalizer\OriginalFormatNormalizer::class => new \PicturePark\API\Normalizer\OriginalFormatNormalizer(),
            \PicturePark\API\Normalizer\JpegFormatNormalizer::class => new \PicturePark\API\Normalizer\JpegFormatNormalizer(),
            \PicturePark\API\Normalizer\PngFormatNormalizer::class => new \PicturePark\API\Normalizer\PngFormatNormalizer(),
            \PicturePark\API\Normalizer\TiffFormatNormalizer::class => new \PicturePark\API\Normalizer\TiffFormatNormalizer(),
            \PicturePark\API\Normalizer\VideoFormatBaseNormalizer::class => new \PicturePark\API\Normalizer\VideoFormatBaseNormalizer(),
            \PicturePark\API\Normalizer\Mp4VideoFormatNormalizer::class => new \PicturePark\API\Normalizer\Mp4VideoFormatNormalizer(),
            \PicturePark\API\Normalizer\AudioFormatBaseNormalizer::class => new \PicturePark\API\Normalizer\AudioFormatBaseNormalizer(),
            \PicturePark\API\Normalizer\VideoSpriteFormatNormalizer::class => new \PicturePark\API\Normalizer\VideoSpriteFormatNormalizer(),
            \PicturePark\API\Normalizer\VideoStillFormatNormalizer::class => new \PicturePark\API\Normalizer\VideoStillFormatNormalizer(),
            \PicturePark\API\Normalizer\AacAudioFormatNormalizer::class => new \PicturePark\API\Normalizer\AacAudioFormatNormalizer(),
            \PicturePark\API\Normalizer\AudioStillFormatNormalizer::class => new \PicturePark\API\Normalizer\AudioStillFormatNormalizer(),
            \PicturePark\API\Normalizer\Mp3AudioFormatNormalizer::class => new \PicturePark\API\Normalizer\Mp3AudioFormatNormalizer(),
            \PicturePark\API\Normalizer\DocumentFormatBaseNormalizer::class => new \PicturePark\API\Normalizer\DocumentFormatBaseNormalizer(),
            \PicturePark\API\Normalizer\DocumentStillFormatNormalizer::class => new \PicturePark\API\Normalizer\DocumentStillFormatNormalizer(),
            \PicturePark\API\Normalizer\PdfFormatNormalizer::class => new \PicturePark\API\Normalizer\PdfFormatNormalizer(),
            \PicturePark\API\Normalizer\VectorFormatBaseNormalizer::class => new \PicturePark\API\Normalizer\VectorFormatBaseNormalizer(),
            \PicturePark\API\Normalizer\SvgFormatNormalizer::class => new \PicturePark\API\Normalizer\SvgFormatNormalizer(),
            \PicturePark\API\Normalizer\VectorStillFormatNormalizer::class => new \PicturePark\API\Normalizer\VectorStillFormatNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatDetailNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatDetailNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatEditableNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatEditableNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatUpdateManyRequestItemNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatUpdateManyRequestItemNormalizer(),
            \PicturePark\API\Normalizer\OutputFormatDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputFormatDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputSearchResultNormalizer::class => new \PicturePark\API\Normalizer\OutputSearchResultNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfOutputNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfOutputNormalizer(),
            \PicturePark\API\Normalizer\OutputSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\OutputResetRetryAttemptsRequestNormalizer::class => new \PicturePark\API\Normalizer\OutputResetRetryAttemptsRequestNormalizer(),
            \PicturePark\API\Normalizer\UserProfileNormalizer::class => new \PicturePark\API\Normalizer\UserProfileNormalizer(),
            \PicturePark\API\Normalizer\UserAddressNormalizer::class => new \PicturePark\API\Normalizer\UserAddressNormalizer(),
            \PicturePark\API\Normalizer\UserProfileUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\UserProfileUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionSetDetailNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionSetDetailNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetDetailOfMetadataRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetDetailOfMetadataRightNormalizer(),
            \PicturePark\API\Normalizer\PermissionUserRoleRightsOfMetadataRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionUserRoleRightsOfMetadataRightNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionSetCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionSetCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetCreateRequestOfMetadataRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetCreateRequestOfMetadataRightNormalizer(),
            \PicturePark\API\Normalizer\UserRoleRightsOfMetadataRightNormalizer::class => new \PicturePark\API\Normalizer\UserRoleRightsOfMetadataRightNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionSetUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionSetUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetUpdateRequestOfMetadataRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetUpdateRequestOfMetadataRightNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionSetCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionSetCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionSetUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionSetUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaPermissionSetUpdateRequestItemNormalizer::class => new \PicturePark\API\Normalizer\SchemaPermissionSetUpdateRequestItemNormalizer(),
            \PicturePark\API\Normalizer\PermissionSetUpdateRequestItemOfMetadataRightNormalizer::class => new \PicturePark\API\Normalizer\PermissionSetUpdateRequestItemOfMetadataRightNormalizer(),
            \PicturePark\API\Normalizer\SchemaDetailNormalizer::class => new \PicturePark\API\Normalizer\SchemaDetailNormalizer(),
            \PicturePark\API\Normalizer\DisplayPatternNormalizer::class => new \PicturePark\API\Normalizer\DisplayPatternNormalizer(),
            \PicturePark\API\Normalizer\FieldBaseNormalizer::class => new \PicturePark\API\Normalizer\FieldBaseNormalizer(),
            \PicturePark\API\Normalizer\FieldBooleanNormalizer::class => new \PicturePark\API\Normalizer\FieldBooleanNormalizer(),
            \PicturePark\API\Normalizer\FieldDateNormalizer::class => new \PicturePark\API\Normalizer\FieldDateNormalizer(),
            \PicturePark\API\Normalizer\FieldDateTimeNormalizer::class => new \PicturePark\API\Normalizer\FieldDateTimeNormalizer(),
            \PicturePark\API\Normalizer\FieldDateTimeArrayNormalizer::class => new \PicturePark\API\Normalizer\FieldDateTimeArrayNormalizer(),
            \PicturePark\API\Normalizer\FieldDecimalNormalizer::class => new \PicturePark\API\Normalizer\FieldDecimalNormalizer(),
            \PicturePark\API\Normalizer\FieldDictionaryNormalizer::class => new \PicturePark\API\Normalizer\FieldDictionaryNormalizer(),
            \PicturePark\API\Normalizer\FieldDictionaryArrayNormalizer::class => new \PicturePark\API\Normalizer\FieldDictionaryArrayNormalizer(),
            \PicturePark\API\Normalizer\FieldGeoPointNormalizer::class => new \PicturePark\API\Normalizer\FieldGeoPointNormalizer(),
            \PicturePark\API\Normalizer\FieldTriggerNormalizer::class => new \PicturePark\API\Normalizer\FieldTriggerNormalizer(),
            \PicturePark\API\Normalizer\FieldLongNormalizer::class => new \PicturePark\API\Normalizer\FieldLongNormalizer(),
            \PicturePark\API\Normalizer\FieldLongArrayNormalizer::class => new \PicturePark\API\Normalizer\FieldLongArrayNormalizer(),
            \PicturePark\API\Normalizer\FieldSingleFieldsetNormalizer::class => new \PicturePark\API\Normalizer\FieldSingleFieldsetNormalizer(),
            \PicturePark\API\Normalizer\SchemaIndexingInfoNormalizer::class => new \PicturePark\API\Normalizer\SchemaIndexingInfoNormalizer(),
            \PicturePark\API\Normalizer\FieldIndexingInfoNormalizer::class => new \PicturePark\API\Normalizer\FieldIndexingInfoNormalizer(),
            \PicturePark\API\Normalizer\FieldMultiFieldsetNormalizer::class => new \PicturePark\API\Normalizer\FieldMultiFieldsetNormalizer(),
            \PicturePark\API\Normalizer\FieldSingleTagboxNormalizer::class => new \PicturePark\API\Normalizer\FieldSingleTagboxNormalizer(),
            \PicturePark\API\Normalizer\FieldMultiTagboxNormalizer::class => new \PicturePark\API\Normalizer\FieldMultiTagboxNormalizer(),
            \PicturePark\API\Normalizer\FieldStringNormalizer::class => new \PicturePark\API\Normalizer\FieldStringNormalizer(),
            \PicturePark\API\Normalizer\AnalyzerBaseNormalizer::class => new \PicturePark\API\Normalizer\AnalyzerBaseNormalizer(),
            \PicturePark\API\Normalizer\EdgeNGramAnalyzerNormalizer::class => new \PicturePark\API\Normalizer\EdgeNGramAnalyzerNormalizer(),
            \PicturePark\API\Normalizer\LanguageAnalyzerNormalizer::class => new \PicturePark\API\Normalizer\LanguageAnalyzerNormalizer(),
            \PicturePark\API\Normalizer\NGramAnalyzerNormalizer::class => new \PicturePark\API\Normalizer\NGramAnalyzerNormalizer(),
            \PicturePark\API\Normalizer\PathHierarchyAnalyzerNormalizer::class => new \PicturePark\API\Normalizer\PathHierarchyAnalyzerNormalizer(),
            \PicturePark\API\Normalizer\SimpleAnalyzerNormalizer::class => new \PicturePark\API\Normalizer\SimpleAnalyzerNormalizer(),
            \PicturePark\API\Normalizer\FieldStringArrayNormalizer::class => new \PicturePark\API\Normalizer\FieldStringArrayNormalizer(),
            \PicturePark\API\Normalizer\FieldTranslatedStringNormalizer::class => new \PicturePark\API\Normalizer\FieldTranslatedStringNormalizer(),
            \PicturePark\API\Normalizer\FieldSingleRelationNormalizer::class => new \PicturePark\API\Normalizer\FieldSingleRelationNormalizer(),
            \PicturePark\API\Normalizer\RelationTypeNormalizer::class => new \PicturePark\API\Normalizer\RelationTypeNormalizer(),
            \PicturePark\API\Normalizer\FieldMultiRelationNormalizer::class => new \PicturePark\API\Normalizer\FieldMultiRelationNormalizer(),
            \PicturePark\API\Normalizer\FieldOverwriteBaseNormalizer::class => new \PicturePark\API\Normalizer\FieldOverwriteBaseNormalizer(),
            \PicturePark\API\Normalizer\FieldOverwriteSingleTagboxNormalizer::class => new \PicturePark\API\Normalizer\FieldOverwriteSingleTagboxNormalizer(),
            \PicturePark\API\Normalizer\FieldOverwriteMultiTagboxNormalizer::class => new \PicturePark\API\Normalizer\FieldOverwriteMultiTagboxNormalizer(),
            \PicturePark\API\Normalizer\SearchFieldCountNormalizer::class => new \PicturePark\API\Normalizer\SearchFieldCountNormalizer(),
            \PicturePark\API\Normalizer\SchemaExistsResponseNormalizer::class => new \PicturePark\API\Normalizer\SchemaExistsResponseNormalizer(),
            \PicturePark\API\Normalizer\FieldExistsResponseNormalizer::class => new \PicturePark\API\Normalizer\FieldExistsResponseNormalizer(),
            \PicturePark\API\Normalizer\SchemaUpdateResultNormalizer::class => new \PicturePark\API\Normalizer\SchemaUpdateResultNormalizer(),
            \PicturePark\API\Normalizer\SchemaUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaOwnershipTransferRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaOwnershipTransferRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaCreateResultNormalizer::class => new \PicturePark\API\Normalizer\SchemaCreateResultNormalizer(),
            \PicturePark\API\Normalizer\SchemaCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaUpdateItemNormalizer::class => new \PicturePark\API\Normalizer\SchemaUpdateItemNormalizer(),
            \PicturePark\API\Normalizer\SchemaOwnershipTransferManyRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaOwnershipTransferManyRequestNormalizer(),
            \PicturePark\API\Normalizer\SchemaSearchResultNormalizer::class => new \PicturePark\API\Normalizer\SchemaSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfSchemaNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfSchemaNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfSchemaNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfSchemaNormalizer(),
            \PicturePark\API\Normalizer\SchemaNormalizer::class => new \PicturePark\API\Normalizer\SchemaNormalizer(),
            \PicturePark\API\Normalizer\SchemaSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\IndexFieldNormalizer::class => new \PicturePark\API\Normalizer\IndexFieldNormalizer(),
            \PicturePark\API\Normalizer\IndexFieldsSearchBySchemaIdsRequestNormalizer::class => new \PicturePark\API\Normalizer\IndexFieldsSearchBySchemaIdsRequestNormalizer(),
            \PicturePark\API\Normalizer\TransferNormalizer::class => new \PicturePark\API\Normalizer\TransferNormalizer(),
            \PicturePark\API\Normalizer\SchemaImportRequestNormalizer::class => new \PicturePark\API\Normalizer\SchemaImportRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareDetailNormalizer::class => new \PicturePark\API\Normalizer\ShareDetailNormalizer(),
            \PicturePark\API\Normalizer\ShareUserNormalizer::class => new \PicturePark\API\Normalizer\ShareUserNormalizer(),
            \PicturePark\API\Normalizer\ShareContentDetailNormalizer::class => new \PicturePark\API\Normalizer\ShareContentDetailNormalizer(),
            \PicturePark\API\Normalizer\ShareOutputBaseNormalizer::class => new \PicturePark\API\Normalizer\ShareOutputBaseNormalizer(),
            \PicturePark\API\Normalizer\ShareOutputBasicNormalizer::class => new \PicturePark\API\Normalizer\ShareOutputBasicNormalizer(),
            \PicturePark\API\Normalizer\ShareOutputEmbedNormalizer::class => new \PicturePark\API\Normalizer\ShareOutputEmbedNormalizer(),
            \PicturePark\API\Normalizer\ShareDataBaseNormalizer::class => new \PicturePark\API\Normalizer\ShareDataBaseNormalizer(),
            \PicturePark\API\Normalizer\ShareDataEmbedNormalizer::class => new \PicturePark\API\Normalizer\ShareDataEmbedNormalizer(),
            \PicturePark\API\Normalizer\ShareDataBasicNormalizer::class => new \PicturePark\API\Normalizer\ShareDataBasicNormalizer(),
            \PicturePark\API\Normalizer\MailRecipientNormalizer::class => new \PicturePark\API\Normalizer\MailRecipientNormalizer(),
            \PicturePark\API\Normalizer\UserEmailNormalizer::class => new \PicturePark\API\Normalizer\UserEmailNormalizer(),
            \PicturePark\API\Normalizer\InternalRecipientNormalizer::class => new \PicturePark\API\Normalizer\InternalRecipientNormalizer(),
            \PicturePark\API\Normalizer\ShareBaseUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareBaseUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareContentNormalizer::class => new \PicturePark\API\Normalizer\ShareContentNormalizer(),
            \PicturePark\API\Normalizer\ShareBasicUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareBasicUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareEmbedUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareEmbedUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareBaseCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareBaseCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareBasicCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareBasicCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareEmbedCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareEmbedCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareRevokeManyRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareRevokeManyRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareAggregationRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareAggregationRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareSearchAndAggregationBaseRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareSearchAndAggregationBaseRequestNormalizer(),
            \PicturePark\API\Normalizer\ShareSearchResultNormalizer::class => new \PicturePark\API\Normalizer\ShareSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfShareNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfShareNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfShareNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfShareNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfShareNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfShareNormalizer(),
            \PicturePark\API\Normalizer\ShareNormalizer::class => new \PicturePark\API\Normalizer\ShareNormalizer(),
            \PicturePark\API\Normalizer\ShareSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\ShareSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\CreateTransferRequestNormalizer::class => new \PicturePark\API\Normalizer\CreateTransferRequestNormalizer(),
            \PicturePark\API\Normalizer\TransferUploadFileNormalizer::class => new \PicturePark\API\Normalizer\TransferUploadFileNormalizer(),
            \PicturePark\API\Normalizer\TransferFileNormalizer::class => new \PicturePark\API\Normalizer\TransferFileNormalizer(),
            \PicturePark\API\Normalizer\TransferWebLinkNormalizer::class => new \PicturePark\API\Normalizer\TransferWebLinkNormalizer(),
            \PicturePark\API\Normalizer\TransferDetailNormalizer::class => new \PicturePark\API\Normalizer\TransferDetailNormalizer(),
            \PicturePark\API\Normalizer\ImportTransferRequestNormalizer::class => new \PicturePark\API\Normalizer\ImportTransferRequestNormalizer(),
            \PicturePark\API\Normalizer\ImportTransferPartialRequestNormalizer::class => new \PicturePark\API\Normalizer\ImportTransferPartialRequestNormalizer(),
            \PicturePark\API\Normalizer\FileTransferCreateItemNormalizer::class => new \PicturePark\API\Normalizer\FileTransferCreateItemNormalizer(),
            \PicturePark\API\Normalizer\TransferSearchResultNormalizer::class => new \PicturePark\API\Normalizer\TransferSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfTransferNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfTransferNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfTransferNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfTransferNormalizer(),
            \PicturePark\API\Normalizer\TransferSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\TransferSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\FileTransferDetailNormalizer::class => new \PicturePark\API\Normalizer\FileTransferDetailNormalizer(),
            \PicturePark\API\Normalizer\FileMetadataNormalizer::class => new \PicturePark\API\Normalizer\FileMetadataNormalizer(),
            \PicturePark\API\Normalizer\FileTransferOutputNormalizer::class => new \PicturePark\API\Normalizer\FileTransferOutputNormalizer(),
            \PicturePark\API\Normalizer\FileTransferNormalizer::class => new \PicturePark\API\Normalizer\FileTransferNormalizer(),
            \PicturePark\API\Normalizer\FileTransferSearchResultNormalizer::class => new \PicturePark\API\Normalizer\FileTransferSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfFileTransferNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfFileTransferNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfFileTransferNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfFileTransferNormalizer(),
            \PicturePark\API\Normalizer\FileTransferSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\FileTransferSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\FileTransferDeleteRequestNormalizer::class => new \PicturePark\API\Normalizer\FileTransferDeleteRequestNormalizer(),
            \PicturePark\API\Normalizer\BlacklistNormalizer::class => new \PicturePark\API\Normalizer\BlacklistNormalizer(),
            \PicturePark\API\Normalizer\BlacklistItemNormalizer::class => new \PicturePark\API\Normalizer\BlacklistItemNormalizer(),
            \PicturePark\API\Normalizer\UserRoleSearchResultNormalizer::class => new \PicturePark\API\Normalizer\UserRoleSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfUserRoleNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfUserRoleNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfUserRoleNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfUserRoleNormalizer(),
            \PicturePark\API\Normalizer\UserRoleNormalizer::class => new \PicturePark\API\Normalizer\UserRoleNormalizer(),
            \PicturePark\API\Normalizer\UserRoleEditableNormalizer::class => new \PicturePark\API\Normalizer\UserRoleEditableNormalizer(),
            \PicturePark\API\Normalizer\UserRoleSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\UserRoleSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\UserRoleDetailNormalizer::class => new \PicturePark\API\Normalizer\UserRoleDetailNormalizer(),
            \PicturePark\API\Normalizer\UserRoleCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserRoleCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserRoleCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\UserRoleCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\UserRoleUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserRoleUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserRoleDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserRoleDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserDetailNormalizer::class => new \PicturePark\API\Normalizer\UserDetailNormalizer(),
            \PicturePark\API\Normalizer\UserRoleAssignmentNormalizer::class => new \PicturePark\API\Normalizer\UserRoleAssignmentNormalizer(),
            \PicturePark\API\Normalizer\OwnerTokenNormalizer::class => new \PicturePark\API\Normalizer\OwnerTokenNormalizer(),
            \PicturePark\API\Normalizer\UserUpdateRequestNormalizer::class => new \PicturePark\API\Normalizer\UserUpdateRequestNormalizer(),
            \PicturePark\API\Normalizer\UserLockRequestNormalizer::class => new \PicturePark\API\Normalizer\UserLockRequestNormalizer(),
            \PicturePark\API\Normalizer\UserLockManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserLockManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserManyRequestBaseNormalizer::class => new \PicturePark\API\Normalizer\UserManyRequestBaseNormalizer(),
            \PicturePark\API\Normalizer\UserReviewRequestNormalizer::class => new \PicturePark\API\Normalizer\UserReviewRequestNormalizer(),
            \PicturePark\API\Normalizer\UserReviewManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserReviewManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserInviteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserInviteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserReinviteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserReinviteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserRoleAssignManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserRoleAssignManyRequestNormalizer(),
            \PicturePark\API\Normalizer\UserDeleteRequestNormalizer::class => new \PicturePark\API\Normalizer\UserDeleteRequestNormalizer(),
            \PicturePark\API\Normalizer\UserCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\UserCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\UserSearchResultNormalizer::class => new \PicturePark\API\Normalizer\UserSearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfUserWithRolesNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfUserWithRolesNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfUserWithRolesNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfUserWithRolesNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfUserWithRolesNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfUserWithRolesNormalizer(),
            \PicturePark\API\Normalizer\UserWithRolesNormalizer::class => new \PicturePark\API\Normalizer\UserWithRolesNormalizer(),
            \PicturePark\API\Normalizer\UserSearchRequestNormalizer::class => new \PicturePark\API\Normalizer\UserSearchRequestNormalizer(),
            \PicturePark\API\Normalizer\UserSearchAndAggregationBaseRequestNormalizer::class => new \PicturePark\API\Normalizer\UserSearchAndAggregationBaseRequestNormalizer(),
            \PicturePark\API\Normalizer\UserAggregationRequestNormalizer::class => new \PicturePark\API\Normalizer\UserAggregationRequestNormalizer(),
            \PicturePark\API\Normalizer\UserUpdateIdentityProviderManyRequestNormalizer::class => new \PicturePark\API\Normalizer\UserUpdateIdentityProviderManyRequestNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingTargetsNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingTargetsNormalizer(),
            \PicturePark\API\Normalizer\XmpFieldNormalizer::class => new \PicturePark\API\Normalizer\XmpFieldNormalizer(),
            \PicturePark\API\Normalizer\MetadataFieldNormalizer::class => new \PicturePark\API\Normalizer\MetadataFieldNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntrySearchResultNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntrySearchResultNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntryNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntryNormalizer(),
            \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfXmpMappingEntryNormalizer::class => new \PicturePark\API\Normalizer\SearchBehaviorBaseResultOfXmpMappingEntryNormalizer(),
            \PicturePark\API\Normalizer\BaseResultOfXmpMappingEntryNormalizer::class => new \PicturePark\API\Normalizer\BaseResultOfXmpMappingEntryNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryEditableNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryEditableNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryConfigurationBaseNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryConfigurationBaseNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryConfigurationTagboxNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryConfigurationTagboxNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntrySearchRequestNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntrySearchRequestNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryCreateRequestNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryCreateRequestNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryCreateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryCreateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryUpdateManyRequestNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryUpdateManyRequestNormalizer(),
            \PicturePark\API\Normalizer\XmpMappingEntryDeleteManyRequestNormalizer::class => new \PicturePark\API\Normalizer\XmpMappingEntryDeleteManyRequestNormalizer(),
            \PicturePark\API\Normalizer\LiveStreamMessageNormalizer::class => new \PicturePark\API\Normalizer\LiveStreamMessageNormalizer(),
            \PicturePark\API\Normalizer\DocumentChangeNormalizer::class => new \PicturePark\API\Normalizer\DocumentChangeNormalizer(),
            \PicturePark\API\Normalizer\ApplicationEventNormalizer::class => new \PicturePark\API\Normalizer\ApplicationEventNormalizer(),
            \PicturePark\API\Normalizer\TransferEventNormalizer::class => new \PicturePark\API\Normalizer\TransferEventNormalizer(),
            \PicturePark\API\Normalizer\ReindexEventNormalizer::class => new \PicturePark\API\Normalizer\ReindexEventNormalizer(),
            \PicturePark\API\Normalizer\ContentDetailViewEventNormalizer::class => new \PicturePark\API\Normalizer\ContentDetailViewEventNormalizer(),
            \PicturePark\API\Normalizer\ContentDownloadEventNormalizer::class => new \PicturePark\API\Normalizer\ContentDownloadEventNormalizer(),
            \PicturePark\API\Normalizer\DownloadTrackingInfoNormalizer::class => new \PicturePark\API\Normalizer\DownloadTrackingInfoNormalizer(),
            \PicturePark\API\Normalizer\SessionRenewalEventNormalizer::class => new \PicturePark\API\Normalizer\SessionRenewalEventNormalizer(),
            \PicturePark\API\Normalizer\SharePageViewEventNormalizer::class => new \PicturePark\API\Normalizer\SharePageViewEventNormalizer(),
            \PicturePark\API\Normalizer\ApiStatisticsEventNormalizer::class => new \PicturePark\API\Normalizer\ApiStatisticsEventNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessEventNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessEventNormalizer(),
            \PicturePark\API\Normalizer\OutputRenderedEventNormalizer::class => new \PicturePark\API\Normalizer\OutputRenderedEventNormalizer(),
            \PicturePark\API\Normalizer\ConfigurationChangeEventNormalizer::class => new \PicturePark\API\Normalizer\ConfigurationChangeEventNormalizer(),
            \PicturePark\API\Normalizer\CustomerChangeEventNormalizer::class => new \PicturePark\API\Normalizer\CustomerChangeEventNormalizer(),
            \PicturePark\API\Normalizer\SearchReindexCompletedEventNormalizer::class => new \PicturePark\API\Normalizer\SearchReindexCompletedEventNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleFiredEventNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleFiredEventNormalizer(),
            \PicturePark\API\Normalizer\BusinessRuleFiredEventDetailNormalizer::class => new \PicturePark\API\Normalizer\BusinessRuleFiredEventDetailNormalizer(),
            \PicturePark\API\Normalizer\BusinessProcessCancellationRequestedEventNormalizer::class => new \PicturePark\API\Normalizer\BusinessProcessCancellationRequestedEventNormalizer(),
            \PicturePark\API\Normalizer\XmpWritebackCompletedEventNormalizer::class => new \PicturePark\API\Normalizer\XmpWritebackCompletedEventNormalizer(),
            \PicturePark\API\Normalizer\MessageNormalizer::class => new \PicturePark\API\Normalizer\MessageNormalizer(),
            \PicturePark\API\Normalizer\ConsoleMessageNormalizer::class => new \PicturePark\API\Normalizer\ConsoleMessageNormalizer(),
            \PicturePark\API\Normalizer\TupleOfStringAndStringNormalizer::class => new \PicturePark\API\Normalizer\TupleOfStringAndStringNormalizer(),
            \PicturePark\API\Normalizer\NodeInfoMessageNormalizer::class => new \PicturePark\API\Normalizer\NodeInfoMessageNormalizer(),
            \PicturePark\API\Normalizer\AudioMetadataNormalizer::class => new \PicturePark\API\Normalizer\AudioMetadataNormalizer(),
            \PicturePark\API\Normalizer\AudioStreamNormalizer::class => new \PicturePark\API\Normalizer\AudioStreamNormalizer(),
            \PicturePark\API\Normalizer\DocumentMetadataNormalizer::class => new \PicturePark\API\Normalizer\DocumentMetadataNormalizer(),
            \PicturePark\API\Normalizer\EpsMetadataNormalizer::class => new \PicturePark\API\Normalizer\EpsMetadataNormalizer(),
            \PicturePark\API\Normalizer\ImageMetadataNormalizer::class => new \PicturePark\API\Normalizer\ImageMetadataNormalizer(),
            \PicturePark\API\Normalizer\VideoMetadataNormalizer::class => new \PicturePark\API\Normalizer\VideoMetadataNormalizer(),
            \PicturePark\API\Normalizer\VideoStreamNormalizer::class => new \PicturePark\API\Normalizer\VideoStreamNormalizer(),
            \PicturePark\API\Normalizer\VectorMetadataNormalizer::class => new \PicturePark\API\Normalizer\VectorMetadataNormalizer(),
            \PicturePark\API\Runtime\Normalizer\ReferenceNormalizer::class => new \PicturePark\API\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}