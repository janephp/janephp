<?php

namespace PicturePark\API;

class Client extends \PicturePark\API\Runtime\Client\Client
{
    /**
     * @param string $id The business process id.
     * @throws \PicturePark\API\Exception\BusinessProcessGetBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessGetUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function businessProcessGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessGet($id));
    }
    /**
     * @param \PicturePark\API\Model\BusinessProcessCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\BusinessProcessCreateBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function businessProcessCreate(\PicturePark\API\Model\BusinessProcessCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessCreate($requestBody));
    }
    /**
     * Only available for business processes created through BusinessProcessCreateRequest). The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id The business process id.
     * @param \PicturePark\API\Model\BusinessProcessStateChangeRequest $requestBody
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function businessProcessChangeState(string $id, \PicturePark\API\Model\BusinessProcessStateChangeRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessChangeState($id, $requestBody));
    }
    /**
     * Only available for business processes created through BusinessProcessCreateRequest).
     * @param string $id The business process id.
     * @param \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationInternalServerErrorException
     *
     * @return null
     */
    public function businessProcessUpdateNotification(string $id, \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessUpdateNotification($id, $requestBody));
    }
    /**
     * Only available if the business process indicates support for cancellation in SupportsCancellation.
     * @param string $id The business process id.
     * @throws \PicturePark\API\Exception\BusinessProcessCancelBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelInternalServerErrorException
     *
     * @return null
     */
    public function businessProcessCancel(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessCancel($id));
    }
    /**
     * Wait for the business process to hit one of the given states.
     * @param string $id The business process id.
     * @param array{
     *    "states"?: array, //Business process states to wait for.
     *    "timeout"?: string, //The timeout to wait for completion.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForStateResult
     */
    public function businessProcessWaitForStates(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessWaitForStates($id, $queryParameters));
    }
    /**
     * Wait for the business process to hit one of the given life cycles.
     * @param string $id The business process id.
     * @param array{
     *    "lifeCycles"?: array, //Business process life cycles to wait for.
     *    "timeout"?: string, //The timeout to wait for completion.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult
     */
    public function businessProcessWaitForLifeCycles(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessWaitForLifeCycles($id, $queryParameters));
    }
    /**
     * Shortcut to wait for the business process to hit one of the finished life cycles.
     * Finished life cycles are:
     * - Succeeded
     * - SucceededWithErrors
     * - Cancelled
     * - Failed
     * @param string $id The business process id.
     * @param array{
     *    "timeout"?: string, //The timeout to wait for completion.
     *    "waitForContinuationCompletion"?: bool, //Waits for the completion of the continuation business process (if existing, recursively). Default to true.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult
     */
    public function businessProcessWaitForCompletion(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessWaitForCompletion($id, $queryParameters));
    }
    /**
     * Gets details of the given business process.
     * @param string $id The business process id.
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessDetails
     */
    public function businessProcessGetDetails(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessGetDetails($id));
    }
    /**
     * Search for business processes.
     * @param \PicturePark\API\Model\BusinessProcessSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\BusinessProcessSearchBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessSearchResult
     */
    public function businessProcessSearch(\PicturePark\API\Model\BusinessProcessSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessSearch($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessRuleConfiguration
     */
    public function businessRuleGetConfiguration()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessRuleGetConfiguration());
    }
    /**
     * @param \PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function businessRuleUpdateConfiguration(\PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessRuleUpdateConfiguration($requestBody));
    }
    /**
     * @param \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessRuleTraceLogSearchResult
     */
    public function businessRuleSearchTraces(\PicturePark\API\Model\BusinessRuleTraceLogSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessRuleSearchTraces($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\ChannelGetAllBadRequestException
     * @throws \PicturePark\API\Exception\ChannelGetAllUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelGetAllNotFoundException
     * @throws \PicturePark\API\Exception\ChannelGetAllMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelGetAllConflictException
     * @throws \PicturePark\API\Exception\ChannelGetAllTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelGetAllInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel[]
     */
    public function channelGetAll()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelGetAll());
    }
    /**
     * Creates new channel based on supplied request.
     * @param \PicturePark\API\Model\ChannelCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\ChannelCreateBadRequestException
     * @throws \PicturePark\API\Exception\ChannelCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelCreateNotFoundException
     * @throws \PicturePark\API\Exception\ChannelCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelCreateConflictException
     * @throws \PicturePark\API\Exception\ChannelCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel
     */
    public function channelCreate(\PicturePark\API\Model\ChannelCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelCreate($requestBody));
    }
    /**
     * Deletes the channel specified by the ID.
     * @param string $id ID of the channel that should be deleted.
     * @throws \PicturePark\API\Exception\ChannelDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ChannelDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ChannelDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelDeleteConflictException
     * @throws \PicturePark\API\Exception\ChannelDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelDeleteInternalServerErrorException
     *
     * @return null
     */
    public function channelDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelDelete($id));
    }
    /**
     * Gets the channel information by the output format ID.
     * @param string $id The channel ID.
     * @throws \PicturePark\API\Exception\ChannelGetBadRequestException
     * @throws \PicturePark\API\Exception\ChannelGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelGetNotFoundException
     * @throws \PicturePark\API\Exception\ChannelGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelGetConflictException
     * @throws \PicturePark\API\Exception\ChannelGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel
     */
    public function channelGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelGet($id));
    }
    /**
     * Updates the channel specified by the ID and based on supplied request.
     * @param string $id ID of channel to update
     * @param \PicturePark\API\Model\ChannelUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ChannelUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ChannelUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ChannelUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelUpdateConflictException
     * @throws \PicturePark\API\Exception\ChannelUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel
     */
    public function channelUpdate(string $id, \PicturePark\API\Model\ChannelUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelUpdate($id, $requestBody));
    }
    /**
     * Deletes the content permission set specified by the ID.
     * @param string $id Content permission set ID.
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteInternalServerErrorException
     *
     * @return null
     */
    public function contentPermissionSetDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetDelete($id));
    }
    /**
     * Gets the content permission set detail information by the content permission set ID.
     * @param string $id Content permission set ID.
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail
     */
    public function contentPermissionSetGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGet($id));
    }
    /**
     * Updates the content permission set specified by the ID and based on supplied request.
     * @param string $id Content permission set ID.
     * @param \PicturePark\API\Model\ContentPermissionSetUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail
     */
    public function contentPermissionSetUpdate(string $id, \PicturePark\API\Model\ContentPermissionSetUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetUpdate($id, $requestBody));
    }
    /**
     * Gets multiple content permission set details by the content permission set IDs.
     * @param array{
     *    "ids"?: array, //Ids
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail[]
     */
    public function contentPermissionSetGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGetMany($queryParameters));
    }
    /**
     * Creates new content permission set based on supplied request.
     * @param \PicturePark\API\Model\ContentPermissionSetCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail
     */
    public function contentPermissionSetCreate(\PicturePark\API\Model\ContentPermissionSetCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetCreate($requestBody));
    }
    /**
     * Transfers ownership of content permission set to supplied user.
     * @param string $id Content permission set ID.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    public function contentPermissionSetTransferOwnership(string $id, \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetTransferOwnership($id, $requestBody));
    }
    /**
     * Returns permissions for the content permission set for the current user.
     * @param string $id Content permission set ID.
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsInternalServerErrorException
     *
     * @return null|array
     */
    public function contentPermissionSetGetPermissions(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGetPermissions($id));
    }
    /**
     * Creates new content permission sets based on supplied requests.
     * @param \PicturePark\API\Model\ContentPermissionSetCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function contentPermissionSetCreateMany(\PicturePark\API\Model\ContentPermissionSetCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetCreateMany($requestBody));
    }
    /**
     * Updates the content permission sets specified by the IDs and based on supplied request.
     * @param \PicturePark\API\Model\ContentPermissionSetUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function contentPermissionSetUpdateMany(\PicturePark\API\Model\ContentPermissionSetUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetUpdateMany($requestBody));
    }
    /**
     * Deletes the content permission sets specified by the IDs.
     * @param \PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function contentPermissionSetDeleteMany(\PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetDeleteMany($requestBody));
    }
    /**
     * Transfers ownership of multiple content permission sets to respective supplied users.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyInternalServerErrorException
     *
     * @return null
     */
    public function contentPermissionSetTransferOwnershipMany(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetTransferOwnershipMany($requestBody));
    }
    /**
     * Returns permissions for multiple content permission sets for the current user.
     * @param array{
     *    "ids"?: array, //Ids
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetUserPermissionRights[]
     */
    public function contentPermissionSetGetPermissionsMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGetPermissionsMany($queryParameters));
    }
    /**
     * Searches content permission sets as specified in the search request.
     * @param \PicturePark\API\Model\PermissionSetSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetSearchResult
     */
    public function contentPermissionSetSearch(\PicturePark\API\Model\PermissionSetSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetSearch($requestBody));
    }
    /**
     * Deletes a single content. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
     * @param string $id The ID of the content to delete.
     * @param array{
     *    "forceReferenceRemoval"?: bool, //A value indicating whether references to the content should be removed.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ContentDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ContentDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDeleteConflictException
     * @throws \PicturePark\API\Exception\ContentDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDeleteInternalServerErrorException
     *
     * @return null
     */
    public function contentDelete(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDelete($id, $queryParameters));
    }
    /**
     * Gets the content detail by ID.
     * @param string $id The content ID.
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the content are resolved and returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentGetBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetConflictException
     * @throws \PicturePark\API\Exception\ContentGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail
     */
    public function contentGet(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGet($id, $queryParameters));
    }
    /**
     * Download a single content in a specific output format. To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     * @param string $contentId The content ID.
     * @param string $outputFormatId The output format ID.
     * @param array{
     *    "width"?: int, //Optional width in pixels to resize image.
     *    "height"?: int, //Optional height in pixels to resize image.
     * } $queryParameters
     * @param array{
     *    "range"?: string, //The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000).
     * } $headerParameters
     * @param array $accept Accept content header application/json|application/octet-stream
     * @throws \PicturePark\API\Exception\ContentDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadPreconditionFailedException
     *
     * @return null
     */
    public function contentDownload(string $contentId, string $outputFormatId, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDownload($contentId, $outputFormatId, $queryParameters, $headerParameters, $accept));
    }
    /**
     * Provides a lightweight endpoint to download content thumbnails.
     * @param string $id The content ID.
     * @param string $size Thumbnail size. Either small, medium or large.
     * @param array{
     *    "width"?: int, //Optional width in pixels to resize image.
     *    "height"?: int, //Optional height in pixels to resize image.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/octet-stream
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailPreconditionFailedException
     *
     * @return null
     */
    public function contentDownloadThumbnail(string $id, string $size, array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDownloadThumbnail($id, $size, $queryParameters, $accept));
    }
    /**
     * Gets multiple content details by IDs.
     * Can fetch 100 contents at most.
     * @param array{
     *    "ids": array, //List of content IDs
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the content are resolved and returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentGetManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetManyConflictException
     * @throws \PicturePark\API\Exception\ContentGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail[]
     */
    public function contentGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetMany($queryParameters));
    }
    /**
     * Create a single file-less content item. To import files, see [Transfer](#tag/Transfer).
     * @param \PicturePark\API\Model\ContentCreateRequest $requestBody
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the content are resolved and returned.
     *    "allowMissingDependencies"?: bool, //Allows creating contents that refer to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentCreateBadRequestException
     * @throws \PicturePark\API\Exception\ContentCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentCreateNotFoundException
     * @throws \PicturePark\API\Exception\ContentCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentCreateConflictException
     * @throws \PicturePark\API\Exception\ContentCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail
     */
    public function contentCreate(\PicturePark\API\Model\ContentCreateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentCreate($requestBody, $queryParameters));
    }
    /**
     * Updates metadata layers of a specified content. For file-less contents, the content itself can be updated as well.
     * The update is flexible enough to allow the update of only the fields that are specified in the request (leaving untouched the other existing ones) or to allow
     * the entire replacement of all the values of a schema or even of all the schemas.
     * See [ShouldUpdateMetadata](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
     * @param string $id The content ID.
     * @param \PicturePark\API\Model\ContentMetadataUpdateRequest $requestBody
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the content are resolved and returned.
     *    "allowMissingDependencies"?: bool, //Allows storing references to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataConflictException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail
     */
    public function contentUpdateMetadata(string $id, \PicturePark\API\Model\ContentMetadataUpdateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdateMetadata($id, $requestBody, $queryParameters));
    }
    /**
     * Updates the content permission sets of a single content. To get a list of available content permission sets, see [Permissions](operation/Permission_SearchContentPermissions)
     * @param string $id The content ID.
     * @param \PicturePark\API\Model\ContentPermissionsUpdateRequest $requestBody
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the content are resolved and returned.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsConflictException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail
     */
    public function contentUpdatePermissions(string $id, \PicturePark\API\Model\ContentPermissionsUpdateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdatePermissions($id, $requestBody, $queryParameters));
    }
    /**
     * Restores a previously deleted content.
     * @param string $id The content ID.
     * @param array{
     *    "allowMissingDependencies"?: bool, //Allows restoring contents that refer to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentRestoreBadRequestException
     * @throws \PicturePark\API\Exception\ContentRestoreUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentRestoreNotFoundException
     * @throws \PicturePark\API\Exception\ContentRestoreMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentRestoreConflictException
     * @throws \PicturePark\API\Exception\ContentRestoreTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentRestoreInternalServerErrorException
     *
     * @return null
     */
    public function contentRestore(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentRestore($id, $queryParameters));
    }
    /**
     * Transfers ownership of a content to another user. The target user must have the ManageContent UserRight.
     * @param string $id The content ID.
     * @param \PicturePark\API\Model\ContentOwnershipTransferRequest $requestBody
     * @param array{
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    public function contentTransferOwnership(string $id, \PicturePark\API\Model\ContentOwnershipTransferRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentTransferOwnership($id, $requestBody, $queryParameters));
    }
    /**
     * Updates binary file of existing content. The file must already be uploaded before calling this endpoint. See [Transfer](#tag/Transfer).
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id The ID of the content to replace.
     * @param \PicturePark\API\Model\ContentFileUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentUpdateFileBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdateFileUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdateFileNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdateFileMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdateFileConflictException
     * @throws \PicturePark\API\Exception\ContentUpdateFileTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdateFileInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentUpdateFile(string $id, \PicturePark\API\Model\ContentFileUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdateFile($id, $requestBody));
    }
    /**
     * Gets the references (list items, contents, shares) to a single content.
     * @param string $id The content ID whose references to retrieve.
     * @param \PicturePark\API\Model\ContentReferencesRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentGetReferencesBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetReferencesUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetReferencesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesConflictException
     * @throws \PicturePark\API\Exception\ContentGetReferencesTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetReferencesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentReferencesResult
     */
    public function contentGetReferences(string $id, \PicturePark\API\Model\ContentReferencesRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetReferences($id, $requestBody));
    }
    /**
     * Retrieves all outputs available for content, also dynamic rendered outputs are returned, if requested.
     * @param string $id ID of content.
     * @throws \PicturePark\API\Exception\ContentGetOutputsBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetOutputsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetOutputsNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetOutputsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetOutputsConflictException
     * @throws \PicturePark\API\Exception\ContentGetOutputsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetOutputsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputResolveResult[]
     */
    public function contentGetOutputs(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetOutputs($id));
    }
    /**
     * Creates a download link for one or more contents. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentDownloadLinkCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkBadRequestException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkNotFoundException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkConflictException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentCreateDownloadLink(\PicturePark\API\Model\ContentDownloadLinkCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentCreateDownloadLink($requestBody));
    }
    /**
     * @param string $token Token
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkConflictException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DownloadLink
     */
    public function contentGetDownloadLink(string $token)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetDownloadLink($token));
    }
    /**
     * Create multiple file-less content items. To import files, see [Transfer](#tag/Transfer).
     * The operation is executed asynchronous and it's not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentCreateManyConflictException
     * @throws \PicturePark\API\Exception\ContentCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentCreateMany(\PicturePark\API\Model\ContentCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentCreateMany($requestBody));
    }
    /**
     * Updates metadata layers of multiple contents. For file-less contents, the contents itself can be updated a swell.
     * See [ShouldUpdateMetadata](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentMetadataUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyConflictException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentUpdateMetadataMany(\PicturePark\API\Model\ContentMetadataUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdateMetadataMany($requestBody));
    }
    /**
     * Updates the content permission sets of multiple contents. To get a list of available content permission sets, see [Permissions](#operation/Permission_SearchContentPermissions)
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentPermissionsUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyConflictException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentUpdatePermissionsMany(\PicturePark\API\Model\ContentPermissionsUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdatePermissionsMany($requestBody));
    }
    /**
     * Transfers ownerships of multiple contents to specified users. The target users must have the ManageContent UserRight.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentOwnershipTransferManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentTransferOwnershipMany(\PicturePark\API\Model\ContentOwnershipTransferManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentTransferOwnershipMany($requestBody));
    }
    /**
     * Deletes multiple contents. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ContentDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentDeleteMany(\PicturePark\API\Model\ContentDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDeleteMany($requestBody));
    }
    /**
     * Deletes multiple contents. A filter must be provided to limit the deletion to specific contents.
     * The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
     * The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentDeleteManyFilterRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterBadRequestException
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterNotFoundException
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterConflictException
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentDeleteManyByFilter(\PicturePark\API\Model\ContentDeleteManyFilterRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDeleteManyByFilter($requestBody));
    }
    /**
     * Restores previously deleted contents.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentRestoreManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentRestoreManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentRestoreManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentRestoreManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentRestoreManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentRestoreManyConflictException
     * @throws \PicturePark\API\Exception\ContentRestoreManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentRestoreManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentRestoreMany(\PicturePark\API\Model\ContentRestoreManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentRestoreMany($requestBody));
    }
    /**
     * Gets references (list items, contents, shares) to content documents defined by IDs.
     * @param \PicturePark\API\Model\ContentManyReferencesRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyConflictException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentReferencesResult
     */
    public function contentGetReferencesMany(\PicturePark\API\Model\ContentManyReferencesRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetReferencesMany($requestBody));
    }
    /**
     * Retrieves all outputs available for contents, also dynamic rendered outputs are returned, if requested.
     * A maximum of 1000 content ids can be specified.
     * @param \PicturePark\API\Model\OutputResolveManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyConflictException
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetOutputsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputResolveResult[]
     */
    public function contentGetOutputsMany(\PicturePark\API\Model\OutputResolveManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetOutputsMany($requestBody));
    }
    /**
     * Updates metadata layers' fields of multiple contents. For file-less contents, the content's fields themselves can be updated as well.
     * A list of content IDs must be provided to limit the update to specific contents. The same set of changes is applied to all the contents.
     * See [ShouldUpdateMetadataMany](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentFieldsBatchUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsBadRequestException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsNotFoundException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsConflictException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentBatchUpdateFieldsByIds(\PicturePark\API\Model\ContentFieldsBatchUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentBatchUpdateFieldsByIds($requestBody));
    }
    /**
     * Updates metadata layers' fields of multiple contents. For file-less contents, the content's fields themselves can be updated as well.
     * A filter must be provided to limit the update to specific contents. The same set of changes is applied to all the contents.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ContentFieldsBatchUpdateFilterRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterBadRequestException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterNotFoundException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterConflictException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function contentBatchUpdateFieldsByFilter(\PicturePark\API\Model\ContentFieldsBatchUpdateFilterRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentBatchUpdateFieldsByFilter($requestBody));
    }
    /**
     * Searches contents as specified in the search request.
     * @param \PicturePark\API\Model\ContentSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentSearchBadRequestException
     * @throws \PicturePark\API\Exception\ContentSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentSearchNotFoundException
     * @throws \PicturePark\API\Exception\ContentSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentSearchConflictException
     * @throws \PicturePark\API\Exception\ContentSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentSearchResult
     */
    public function contentSearch(\PicturePark\API\Model\ContentSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentSearch($requestBody));
    }
    /**
     * Aggregates content by content fields values as specified in the aggregators saved on a channel.
     * @param \PicturePark\API\Model\ContentAggregationOnChannelRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelBadRequestException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelNotFoundException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelConflictException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult
     */
    public function contentAggregateOnChannel(\PicturePark\API\Model\ContentAggregationOnChannelRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentAggregateOnChannel($requestBody));
    }
    /**
     * Aggregates content by content fields values as specified in the aggregation request.
     * @param \PicturePark\API\Model\ContentAggregationRequest $requestBody
     * @throws \PicturePark\API\Exception\ContentAggregateBadRequestException
     * @throws \PicturePark\API\Exception\ContentAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentAggregateNotFoundException
     * @throws \PicturePark\API\Exception\ContentAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentAggregateConflictException
     * @throws \PicturePark\API\Exception\ContentAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult
     */
    public function contentAggregate(\PicturePark\API\Model\ContentAggregationRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentAggregate($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusBadRequestException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusUnauthorizedException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusNotFoundException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusConflictException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusTooManyRequestsException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DisplayValueStatus
     */
    public function displayValueGetStatus()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DisplayValueGetStatus());
    }
    /**
     * @throws \PicturePark\API\Exception\DisplayValueRerenderBadRequestException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderUnauthorizedException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderNotFoundException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderConflictException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderTooManyRequestsException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function displayValueRerender()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DisplayValueRerender());
    }
    /**
     * Gets the current version of a document.
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistory
     */
    public function documentHistoryGetCurrent(string $documentType, string $documentId)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryGetCurrent($documentType, $documentId));
    }
    /**
     * Gets a specific version of a document.
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document.
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistory
     */
    public function documentHistoryGetVersion(string $documentType, string $documentId, int $documentVersion)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryGetVersion($documentType, $documentId, $documentVersion));
    }
    /**
     * Compare the current version of a document with the requested version and get the differences.
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param array{
     *    "version"?: int, //The version of the document to compare with.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistoryDifference
     */
    public function documentHistoryCompareWithCurrent(string $documentType, string $documentId, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryCompareWithCurrent($documentType, $documentId, $queryParameters));
    }
    /**
     * Compare a specific version of a document with another version and get the differences.
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document to use for the comparison.
     * @param array{
     *    "version"?: int, //The version of the document to compare with.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistoryDifference
     */
    public function documentHistoryCompareWithVersion(string $documentType, string $documentId, int $documentVersion, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryCompareWithVersion($documentType, $documentId, $documentVersion, $queryParameters));
    }
    /**
     * Search the document history as specified in the search request.
     * @param \PicturePark\API\Model\DocumentHistorySearchRequest $requestBody
     * @throws \PicturePark\API\Exception\DocumentHistorySearchBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchConflictException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistorySearchResult
     */
    public function documentHistorySearch(\PicturePark\API\Model\DocumentHistorySearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistorySearch($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider[]
     */
    public function identityProviderGetAll()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGetAll());
    }
    /**
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProviderBasicInfo[]
     */
    public function identityProviderGetAllBasicInfos()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGetAllBasicInfos());
    }
    /**
     * @param string $id Identity provider ID.
     * @throws \PicturePark\API\Exception\IdentityProviderGetBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider
     */
    public function identityProviderGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGet($id));
    }
    /**
     * Identity provider has to be already created via UI
     * @param string $id Identity provider ID.
     * @param \PicturePark\API\Model\IdentityProviderEditable $requestBody
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider
     */
    public function identityProviderUpdate(string $id, \PicturePark\API\Model\IdentityProviderEditable $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderUpdate($id, $requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesInternalServerErrorException
     *
     * @return null|array
     */
    public function identityProviderGetSynchronizableAttributes()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGetSynchronizableAttributes());
    }
    /**
     *
     * @return null|\PicturePark\API\Model\VersionInfo
     */
    public function infoGetVersion()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\InfoGetVersion());
    }
    /**
     *
     * @return null|\PicturePark\API\Model\CustomerInfo
     */
    public function infoGetInfo()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\InfoGetInfo());
    }
    /**
     *
     * @return null|\PicturePark\API\Model\SystemStatus
     */
    public function infoGetStatus()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\InfoGetStatus());
    }
    /**
     * Gets the json schema for the specified schema.
     * @param string $id The ID of the schema whose json schema to retrieve.
     * @throws \PicturePark\API\Exception\JsonSchemaGetBadRequestException
     * @throws \PicturePark\API\Exception\JsonSchemaGetUnauthorizedException
     * @throws \PicturePark\API\Exception\JsonSchemaGetNotFoundException
     * @throws \PicturePark\API\Exception\JsonSchemaGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\JsonSchemaGetConflictException
     * @throws \PicturePark\API\Exception\JsonSchemaGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\JsonSchemaGetInternalServerErrorException
     *
     * @return null
     */
    public function jsonSchemaGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\JsonSchemaGet($id));
    }
    /**
     * Deletes a list item. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all related files will be deleted.
     * @param string $id The ID of the list item to delete.
     * @param array{
     *    "forceReferenceRemoval"?: bool, //A value indicating whether references to the list item should be removed.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ListItemDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ListItemDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ListItemDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemDeleteConflictException
     * @throws \PicturePark\API\Exception\ListItemDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemDeleteInternalServerErrorException
     *
     * @return null
     */
    public function listItemDelete(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemDelete($id, $queryParameters));
    }
    /**
     * Gets the list item detail by ID.
     * @param string $id The list item ID.
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the list item are resolved and returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ListItemGetBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetConflictException
     * @throws \PicturePark\API\Exception\ListItemGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemDetail
     */
    public function listItemGet(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGet($id, $queryParameters));
    }
    /**
     * Updates a single list item.
     * @param string $id The list item ID.
     * @param \PicturePark\API\Model\ListItemUpdateRequest $requestBody
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the list item are resolved and returned.
     *    "allowMissingDependencies"?: bool, //Allows creating list items that refer to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ListItemUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ListItemUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ListItemUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemUpdateConflictException
     * @throws \PicturePark\API\Exception\ListItemUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemDetail
     */
    public function listItemUpdate(string $id, \PicturePark\API\Model\ListItemUpdateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemUpdate($id, $requestBody, $queryParameters));
    }
    /**
     * Restores a previously deleted list item.
     * @param string $id The list item ID.
     * @param array{
     *    "allowMissingDependencies"?: bool, //Allows restoring list items that refer to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ListItemRestoreBadRequestException
     * @throws \PicturePark\API\Exception\ListItemRestoreUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemRestoreNotFoundException
     * @throws \PicturePark\API\Exception\ListItemRestoreMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemRestoreConflictException
     * @throws \PicturePark\API\Exception\ListItemRestoreTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemRestoreInternalServerErrorException
     *
     * @return null
     */
    public function listItemRestore(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemRestore($id, $queryParameters));
    }
    /**
     * Gets the references (list items, contents) to a single list item.
     * @param string $id The ID of the list item.
     * @param \PicturePark\API\Model\ListItemReferencesRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemGetReferencesBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesConflictException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemReferencesResult
     */
    public function listItemGetReferences(string $id, \PicturePark\API\Model\ListItemReferencesRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGetReferences($id, $requestBody));
    }
    /**
     * Gets multiple list item details by IDs.
     * Can fetch 100 list items at most.
     * @param array{
     *    "ids"?: array, //List of list item IDs.
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the list items are resolved and returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ListItemGetManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetManyConflictException
     * @throws \PicturePark\API\Exception\ListItemGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemDetail[]
     */
    public function listItemGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGetMany($queryParameters));
    }
    /**
     * Create a new list item.
     * @param \PicturePark\API\Model\ListItemCreateRequest $requestBody
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the list item are resolved and returned.
     *    "allowMissingDependencies"?: bool, //Allows creating list items that refer to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ListItemCreateBadRequestException
     * @throws \PicturePark\API\Exception\ListItemCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemCreateNotFoundException
     * @throws \PicturePark\API\Exception\ListItemCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemCreateConflictException
     * @throws \PicturePark\API\Exception\ListItemCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemDetail
     */
    public function listItemCreate(\PicturePark\API\Model\ListItemCreateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemCreate($requestBody, $queryParameters));
    }
    /**
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemCreateManyConflictException
     * @throws \PicturePark\API\Exception\ListItemCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemCreateMany(\PicturePark\API\Model\ListItemCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemCreateMany($requestBody));
    }
    /**
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyConflictException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemUpdateMany(\PicturePark\API\Model\ListItemUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemUpdateMany($requestBody));
    }
    /**
     * The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all files will be deleted.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemDeleteMany(\PicturePark\API\Model\ListItemDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemDeleteMany($requestBody));
    }
    /**
     * Deletes multiple list items. A filter must be provided to limit the deletion to specific list items.
     * The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all files will be hard deleted.
     * The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemDeleteManyFilterRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterBadRequestException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterNotFoundException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterConflictException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemDeleteManyByFilter(\PicturePark\API\Model\ListItemDeleteManyFilterRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemDeleteManyByFilter($requestBody));
    }
    /**
     * Restores previously deleted list items.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemRestoreManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemRestoreManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemRestoreManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemRestoreManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemRestoreManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemRestoreManyConflictException
     * @throws \PicturePark\API\Exception\ListItemRestoreManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemRestoreManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemRestoreMany(\PicturePark\API\Model\ListItemRestoreManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemRestoreMany($requestBody));
    }
    /**
     * Gets the references (list items, contents) to multiple list items.
     * @param \PicturePark\API\Model\ListItemManyReferencesRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyConflictException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemReferencesResult
     */
    public function listItemGetReferencesMany(\PicturePark\API\Model\ListItemManyReferencesRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGetReferencesMany($requestBody));
    }
    /**
     * Updates fields of multiple list items. A list of list item IDs must be provided to limit the update to specific list items.
     * The same set of changes is applied to all the list items.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsBadRequestException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsNotFoundException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsConflictException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemBatchUpdateFieldsByIds(\PicturePark\API\Model\ListItemFieldsBatchUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemBatchUpdateFieldsByIds($requestBody));
    }
    /**
     * Updates fields of multiple list items. A filter must be provided to limit the update to specific list items.
     * The same set of changes is applied to all the list items.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterBadRequestException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterNotFoundException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterConflictException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function listItemBatchUpdateFieldsByFilter(\PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemBatchUpdateFieldsByFilter($requestBody));
    }
    /**
     * Searches list items as specified in the search request.
     * @param \PicturePark\API\Model\ListItemSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemSearchBadRequestException
     * @throws \PicturePark\API\Exception\ListItemSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemSearchNotFoundException
     * @throws \PicturePark\API\Exception\ListItemSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemSearchConflictException
     * @throws \PicturePark\API\Exception\ListItemSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemSearchResult
     */
    public function listItemSearch(\PicturePark\API\Model\ListItemSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemSearch($requestBody));
    }
    /**
     * Aggregates list items as specified in the aggregation request.
     * @param \PicturePark\API\Model\ListItemAggregationRequest $requestBody
     * @throws \PicturePark\API\Exception\ListItemAggregateBadRequestException
     * @throws \PicturePark\API\Exception\ListItemAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemAggregateNotFoundException
     * @throws \PicturePark\API\Exception\ListItemAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemAggregateConflictException
     * @throws \PicturePark\API\Exception\ListItemAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult
     */
    public function listItemAggregate(\PicturePark\API\Model\ListItemAggregationRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemAggregate($requestBody));
    }
    /**
     * Search for live stream events with optional parameters to limit time, document type or use more complex filtering.
     * @param \PicturePark\API\Model\LiveStreamSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\LiveStreamSearchBadRequestException
     * @throws \PicturePark\API\Exception\LiveStreamSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\LiveStreamSearchNotFoundException
     * @throws \PicturePark\API\Exception\LiveStreamSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\LiveStreamSearchConflictException
     * @throws \PicturePark\API\Exception\LiveStreamSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\LiveStreamSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\LiveStreamSearchResult
     */
    public function liveStreamSearch(\PicturePark\API\Model\LiveStreamSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\LiveStreamSearch($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\MetadataGetStatusBadRequestException
     * @throws \PicturePark\API\Exception\MetadataGetStatusUnauthorizedException
     * @throws \PicturePark\API\Exception\MetadataGetStatusNotFoundException
     * @throws \PicturePark\API\Exception\MetadataGetStatusMethodNotAllowedException
     * @throws \PicturePark\API\Exception\MetadataGetStatusConflictException
     * @throws \PicturePark\API\Exception\MetadataGetStatusTooManyRequestsException
     * @throws \PicturePark\API\Exception\MetadataGetStatusInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\MetadataStatus
     */
    public function metadataGetStatus()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\MetadataGetStatus());
    }
    /**
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedBadRequestException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedUnauthorizedException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedNotFoundException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedConflictException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedTooManyRequestsException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function metadataUpdateOutdated()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\MetadataUpdateOutdated());
    }
    /**
     * This is allowed for both static and dynamic formats. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id ID of the output format.
     * @param \stdClass $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatSetDownloadFileNamePatterns(string $id, \stdClass $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetDownloadFileNamePatterns($id, $requestBody));
    }
    /**
     * This is allowed for both static and dynamic formats. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatSetDownloadFileNamePatternsMany(\PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetDownloadFileNamePatternsMany($requestBody));
    }
    /**
     * This is allowed for both static and dynamic formats.
     * However, enabling XMP writeback for Thumbnail formats or temporary formats is not allowed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id ID of the output format.
     * @param \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatSetXmpWritebackState(string $id, \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetXmpWritebackState($id, $requestBody));
    }
    /**
     * This is allowed for both static and dynamic formats.
     * However, enabling XMP writeback for Thumbnail formats or temporary formats is not allowed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputFormatSetXmpWritebackStateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2BadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2UnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2NotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2MethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2ConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2TooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2InternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatSetXmpWritebackState2(\PicturePark\API\Model\OutputFormatSetXmpWritebackStateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetXmpWritebackState2($requestBody));
    }
    /**
     * Request rendering of the given OutputFormat for a given content.
     * @param \PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody
     * @param array $accept Accept content header application/octet-stream|application/json
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewConflictException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewInternalServerErrorException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewPreconditionFailedException
     *
     * @return null
     */
    public function outputFormatRenderFormatPreview(\PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody, array $accept = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatRenderFormatPreview($requestBody, $accept));
    }
    /**
     * Gets multiple output format details by the output format IDs. Can fetch maximum of 100 output formats at once.
     * @param array{
     *    "ids"?: array, //Output format IDs to get information about. If this is omitted, all output formats in the system will be returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\OutputFormatGetManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputFormatDetail[]
     */
    public function outputFormatGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatGetMany($queryParameters));
    }
    /**
     * Creates new output format based on the supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputFormat $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatCreateBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateConflictException
     * @throws \PicturePark\API\Exception\OutputFormatCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatCreate(\PicturePark\API\Model\OutputFormat $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatCreate($requestBody));
    }
    /**
     * Deletes the output format specified by the ID. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id Output format ID.
     * @throws \PicturePark\API\Exception\OutputFormatDeleteBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteConflictException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatDelete($id));
    }
    /**
     * Gets the output format by the output format ID.
     * @param string $id Output format ID.
     * @throws \PicturePark\API\Exception\OutputFormatGetBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatGetUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatGetNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatGetConflictException
     * @throws \PicturePark\API\Exception\OutputFormatGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputFormatDetail
     */
    public function outputFormatGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatGet($id));
    }
    /**
     * Updates the output format specified by the ID and based on supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id Output format ID.
     * @param \PicturePark\API\Model\OutputFormatEditable $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatUpdateBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateConflictException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatUpdate(string $id, \PicturePark\API\Model\OutputFormatEditable $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatUpdate($id, $requestBody));
    }
    /**
     * Creates new output formats based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputFormatCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatCreateMany(\PicturePark\API\Model\OutputFormatCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatCreateMany($requestBody));
    }
    /**
     * Updates the output formats specified by the IDs and based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputFormatUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatUpdateMany(\PicturePark\API\Model\OutputFormatUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatUpdateMany($requestBody));
    }
    /**
     * Deletes the output formats specified by the IDs. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputFormatDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputFormatDeleteMany(\PicturePark\API\Model\OutputFormatDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatDeleteMany($requestBody));
    }
    /**
     * Gets a output document by id.
     * @param string $id Output ID.
     * @throws \PicturePark\API\Exception\OutputGetBadRequestException
     * @throws \PicturePark\API\Exception\OutputGetUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputGetNotFoundException
     * @throws \PicturePark\API\Exception\OutputGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputGetConflictException
     * @throws \PicturePark\API\Exception\OutputGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputDetail
     */
    public function outputGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputGet($id));
    }
    /**
     * ContentIds must be mandatory filled.
     * @param \PicturePark\API\Model\OutputSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputSearchBadRequestException
     * @throws \PicturePark\API\Exception\OutputSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputSearchNotFoundException
     * @throws \PicturePark\API\Exception\OutputSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputSearchConflictException
     * @throws \PicturePark\API\Exception\OutputSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputSearchResult
     */
    public function outputSearch(\PicturePark\API\Model\OutputSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputSearch($requestBody));
    }
    /**
     * Resets retry attempt counters on failed (optionally also completed) outputs and they will be subsequently picked up for re-rendering.
     * The number the counters are reset to is determined by a global configuration value. If OutputIds are specified, the rest of the fields are ignored.
     * Can reset 100 outputs at most. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\OutputResetRetryAttemptsRequest $requestBody
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsBadRequestException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsNotFoundException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsConflictException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function outputResetRetryAttempts(\PicturePark\API\Model\OutputResetRetryAttemptsRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputResetRetryAttempts($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\ProfileGetBadRequestException
     * @throws \PicturePark\API\Exception\ProfileGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ProfileGetNotFoundException
     * @throws \PicturePark\API\Exception\ProfileGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ProfileGetConflictException
     * @throws \PicturePark\API\Exception\ProfileGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ProfileGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserProfile
     */
    public function profileGet()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ProfileGet());
    }
    /**
     * Updates profile of currently logged in user.
     * @param \PicturePark\API\Model\UserProfileUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ProfileUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ProfileUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ProfileUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ProfileUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ProfileUpdateConflictException
     * @throws \PicturePark\API\Exception\ProfileUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ProfileUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserProfile
     */
    public function profileUpdate(\PicturePark\API\Model\UserProfileUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ProfileUpdate($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionBadRequestException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionUnauthorizedException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionNotFoundException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionConflictException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionTooManyRequestsException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionInternalServerErrorException
     *
     * @return null
     */
    public function profileRequestDeletion()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ProfileRequestDeletion());
    }
    /**
     * Deletes the schema permission set specified by the ID.
     * @param string $id Schema permission set ID.
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteInternalServerErrorException
     *
     * @return null
     */
    public function schemaPermissionSetDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetDelete($id));
    }
    /**
     * Gets the schema permission set detail information by the schema permission set ID.
     * @param string $id Schema permission set ID.
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail
     */
    public function schemaPermissionSetGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGet($id));
    }
    /**
     * Updates the schema permission set specified by the ID and based on supplied request.
     * @param string $id Schema permission set ID.
     * @param \PicturePark\API\Model\SchemaPermissionSetUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail
     */
    public function schemaPermissionSetUpdate(string $id, \PicturePark\API\Model\SchemaPermissionSetUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetUpdate($id, $requestBody));
    }
    /**
     * Gets multiple schema permission set details by the schema permission set IDs.
     * @param array{
     *    "ids"?: array, //Ids
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail[]
     */
    public function schemaPermissionSetGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGetMany($queryParameters));
    }
    /**
     * Creates new schema permission set based on supplied request.
     * @param \PicturePark\API\Model\SchemaPermissionSetCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail
     */
    public function schemaPermissionSetCreate(\PicturePark\API\Model\SchemaPermissionSetCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetCreate($requestBody));
    }
    /**
     * Transfers ownership of schema permission set to supplied user.
     * @param string $id Schema permission set ID.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    public function schemaPermissionSetTransferOwnership(string $id, \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetTransferOwnership($id, $requestBody));
    }
    /**
     * Returns permissions for the schema permission set for the current user.
     * @param string $id Schema permission set ID.
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsInternalServerErrorException
     *
     * @return null|array
     */
    public function schemaPermissionSetGetPermissions(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGetPermissions($id));
    }
    /**
     * Creates new schema permission sets based on supplied requests.
     * @param \PicturePark\API\Model\SchemaPermissionSetCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function schemaPermissionSetCreateMany(\PicturePark\API\Model\SchemaPermissionSetCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetCreateMany($requestBody));
    }
    /**
     * Updates the schema permission sets specified by the IDs and based on supplied request.
     * @param \PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function schemaPermissionSetUpdateMany(\PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetUpdateMany($requestBody));
    }
    /**
     * Deletes the schema permission sets specified by the IDs.
     * @param \PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function schemaPermissionSetDeleteMany(\PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetDeleteMany($requestBody));
    }
    /**
     * Transfers ownership of multiple schema permission sets to respective supplied users.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyInternalServerErrorException
     *
     * @return null
     */
    public function schemaPermissionSetTransferOwnershipMany(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetTransferOwnershipMany($requestBody));
    }
    /**
     * Returns permissions for multiple schema permission sets for the current user.
     * @param array{
     *    "ids"?: array, //Ids
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetUserPermissionRights[]
     */
    public function schemaPermissionSetGetPermissionsMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGetPermissionsMany($queryParameters));
    }
    /**
     * Searches schema permission sets as specified in the search request.
     * @param \PicturePark\API\Model\PermissionSetSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetSearchResult
     */
    public function schemaPermissionSetSearch(\PicturePark\API\Model\PermissionSetSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetSearch($requestBody));
    }
    /**
     * Deletes an existing schema.
     * Depending on how much the schema is referenced, the operation can take a lot of time.
     * @param string $id The schema ID.
     * @param array{
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaDeleteBadRequestException
     * @throws \PicturePark\API\Exception\SchemaDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaDeleteNotFoundException
     * @throws \PicturePark\API\Exception\SchemaDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaDeleteConflictException
     * @throws \PicturePark\API\Exception\SchemaDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaDeleteInternalServerErrorException
     *
     * @return null
     */
    public function schemaDelete(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaDelete($id, $queryParameters));
    }
    /**
     * Gets the schema detail by schema ID.
     * @param string $id The schema ID.
     * @throws \PicturePark\API\Exception\SchemaGetBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetConflictException
     * @throws \PicturePark\API\Exception\SchemaGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail
     */
    public function schemaGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGet($id));
    }
    /**
     * Updates an existing schema.
     * Depending on how much the schema is referenced by existing data, the operation can take a lot of time.
     * @param string $id The schema ID.
     * @param \PicturePark\API\Model\SchemaUpdateRequest $requestBody
     * @param array{
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaUpdateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaUpdateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaUpdateConflictException
     * @throws \PicturePark\API\Exception\SchemaUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaUpdateResult
     */
    public function schemaUpdate(string $id, \PicturePark\API\Model\SchemaUpdateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaUpdate($id, $requestBody, $queryParameters));
    }
    /**
     * Checks if the schema already exists.
     * @param string $id The schema ID.
     * @throws \PicturePark\API\Exception\SchemaExistsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaExistsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaExistsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaExistsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaExistsConflictException
     * @throws \PicturePark\API\Exception\SchemaExistsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaExistsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaExistsResponse
     */
    public function schemaExists(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaExists($id));
    }
    /**
     * Checks if the field in the specified schema already exists.
     * Also returns a flag indicating if the field was previously deleted and the ID can therefore not be reused.
     * @param string $schemaId The schema ID.
     * @param string $fieldId The field ID.
     * @throws \PicturePark\API\Exception\SchemaFieldExistsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsConflictException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FieldExistsResponse
     */
    public function schemaFieldExists(string $schemaId, string $fieldId)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaFieldExists($schemaId, $fieldId));
    }
    /**
     * Can fetch referencing schemas for 100 schemas at most.
     * @param string $id The schema ID.
     * @throws \PicturePark\API\Exception\SchemaGetReferencedBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedConflictException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail[]
     */
    public function schemaGetReferenced(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetReferenced($id));
    }
    /**
     * Transfer ownership of the schema specified in
     * @param string $id The schema ID.
     * @param \PicturePark\API\Model\SchemaOwnershipTransferRequest $requestBody
     * @param array{
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    public function schemaTransferOwnership(string $id, \PicturePark\API\Model\SchemaOwnershipTransferRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaTransferOwnership($id, $requestBody, $queryParameters));
    }
    /**
     * Gets multiple schema details by given schema IDs.
     * Can fetch 100 schema details at most.
     * @param array{
     *    "ids"?: array, //Comma separated list of schema IDs.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaGetManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetManyConflictException
     * @throws \PicturePark\API\Exception\SchemaGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail[]
     */
    public function schemaGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetMany($queryParameters));
    }
    /**
     * Create a new schema.
     * @param \PicturePark\API\Model\SchemaCreateRequest $requestBody
     * @param array{
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaCreateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaCreateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaCreateConflictException
     * @throws \PicturePark\API\Exception\SchemaCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaCreateResult
     */
    public function schemaCreate(\PicturePark\API\Model\SchemaCreateRequest $requestBody, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaCreate($requestBody, $queryParameters));
    }
    /**
     * Creates new schemas. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\SchemaCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaCreateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function schemaCreateMany(\PicturePark\API\Model\SchemaCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaCreateMany($requestBody));
    }
    /**
     * Updates multiple existing schemas.
     * Prefer this whenever you have updates for multiple schemas. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\SchemaUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaUpdateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function schemaUpdateMany(\PicturePark\API\Model\SchemaUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaUpdateMany($requestBody));
    }
    /**
     * @param array{
     *    "ids"?: array, //The schema IDs.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedConflictException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail[]
     */
    public function schemaGetManyReferenced(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetManyReferenced($queryParameters));
    }
    /**
     * Transfers ownership of multiple schemas to specified user. The target user must have the ManageSchemas user right.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\SchemaOwnershipTransferManyRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function schemaTransferOwnershipMany(\PicturePark\API\Model\SchemaOwnershipTransferManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaTransferOwnershipMany($requestBody));
    }
    /**
     * Searches schemas as specified in the search request.
     * @param \PicturePark\API\Model\SchemaSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaSearchBadRequestException
     * @throws \PicturePark\API\Exception\SchemaSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaSearchNotFoundException
     * @throws \PicturePark\API\Exception\SchemaSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaSearchConflictException
     * @throws \PicturePark\API\Exception\SchemaSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaSearchResult
     */
    public function schemaSearch(\PicturePark\API\Model\SchemaSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaSearch($requestBody));
    }
    /**
     * Search the indexed fields based on the search request.
     * An indexed field object is created for a schema field only if that field has one of the following properties set to true: Index,
     * SimpleSearch or Sortable.
     * All indexed fields are aggregated and returned as a a single list.
     * @param \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsConflictException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IndexField[]
     */
    public function schemaGetIndexFields(\PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetIndexFields($requestBody));
    }
    /**
     * Imports schemas and list items. The file must already be uploaded before calling this endpoint. See [Transfer](#tag/Transfer).
     * The operation is executed asynchronous and it is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\SchemaImportRequest $requestBody
     * @throws \PicturePark\API\Exception\SchemaTransferImportBadRequestException
     * @throws \PicturePark\API\Exception\SchemaTransferImportUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaTransferImportNotFoundException
     * @throws \PicturePark\API\Exception\SchemaTransferImportMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaTransferImportConflictException
     * @throws \PicturePark\API\Exception\SchemaTransferImportTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaTransferImportInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer
     */
    public function schemaTransferImport(\PicturePark\API\Model\SchemaImportRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaTransferImport($requestBody));
    }
    /**
     * @param string $token Share token
     * @param array{
     *    "lang"?: string, //Language code
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the share are resolved and returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ShareGetShareJsonBadRequestException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonNotFoundException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonConflictException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareDetail
     */
    public function shareGetShareJson(string $token, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareGetShareJson($token, $queryParameters));
    }
    /**
     * @param string $token Share token
     * @param array{
     *    "width"?: int, //Optional width in pixels to resize image
     *    "height"?: int, //Optional height in pixels to resize image
     * } $queryParameters
     * @param array{
     *    "range"?: string, //The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * } $headerParameters
     * @param array $accept Accept content header application/json|application/octet-stream
     * @throws \PicturePark\API\Exception\ShareDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadPreconditionFailedException
     *
     * @return null
     */
    public function shareDownload(string $token, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareDownload($token, $queryParameters, $headerParameters, $accept));
    }
    /**
     * Download single content in a specific output format (or automatically determined format if none is specified). To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     * @param string $token Share token
     * @param string $contentId The content id
     * @param string $outputFormatId The output format id
     * @param array{
     *    "width"?: int, //Optional width in pixels to resize image
     *    "height"?: int, //Optional height in pixels to resize image
     * } $queryParameters
     * @param array{
     *    "range"?: string, //The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * } $headerParameters
     * @param array $accept Accept content header application/json|application/octet-stream
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentPreconditionFailedException
     *
     * @return null
     */
    public function shareDownloadSingleContent(string $token, string $contentId, string $outputFormatId, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareDownloadSingleContent($token, $contentId, $outputFormatId, $queryParameters, $headerParameters, $accept));
    }
    /**
     * Get share by id (basic or embed).
     * @param string $id Share Id (not token, use [GetShareJson](#operation/Share_GetShareJson) to get share by token)
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the share are resolved and returned.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\ShareGetBadRequestException
     * @throws \PicturePark\API\Exception\ShareGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareGetNotFoundException
     * @throws \PicturePark\API\Exception\ShareGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareGetConflictException
     * @throws \PicturePark\API\Exception\ShareGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareDetail
     */
    public function shareGet(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareGet($id, $queryParameters));
    }
    /**
     * Updates a single share. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id The share id.
     * @param \PicturePark\API\Model\ShareBaseUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\ShareUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ShareUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ShareUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareUpdateConflictException
     * @throws \PicturePark\API\Exception\ShareUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function shareUpdate(string $id, \PicturePark\API\Model\ShareBaseUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareUpdate($id, $requestBody));
    }
    /**
     * Create a new share (basic or embed). The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ShareBaseCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\ShareCreateBadRequestException
     * @throws \PicturePark\API\Exception\ShareCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareCreateNotFoundException
     * @throws \PicturePark\API\Exception\ShareCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareCreateConflictException
     * @throws \PicturePark\API\Exception\ShareCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function shareCreate(\PicturePark\API\Model\ShareBaseCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareCreate($requestBody));
    }
    /**
     * Deletes multiple shares. Returns a business process which will hold a batch response detail containing information about successful and failed rows. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ShareDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ShareDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ShareDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ShareDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ShareDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function shareDeleteMany(\PicturePark\API\Model\ShareDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareDeleteMany($requestBody));
    }
    /**
     * @param \PicturePark\API\Model\ShareRevokeManyRequest $requestBody
     * @throws \PicturePark\API\Exception\ShareRevokeBadRequestException
     * @throws \PicturePark\API\Exception\ShareRevokeUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareRevokeNotFoundException
     * @throws \PicturePark\API\Exception\ShareRevokeMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareRevokeConflictException
     * @throws \PicturePark\API\Exception\ShareRevokeTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareRevokeInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function shareRevoke(\PicturePark\API\Model\ShareRevokeManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareRevoke($requestBody));
    }
    /**
     * Aggregates shares either created by or sent to current user.
     * @param \PicturePark\API\Model\ShareAggregationRequest $requestBody
     * @throws \PicturePark\API\Exception\ShareAggregateBadRequestException
     * @throws \PicturePark\API\Exception\ShareAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareAggregateNotFoundException
     * @throws \PicturePark\API\Exception\ShareAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareAggregateConflictException
     * @throws \PicturePark\API\Exception\ShareAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult
     */
    public function shareAggregate(\PicturePark\API\Model\ShareAggregationRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareAggregate($requestBody));
    }
    /**
     * Search shares either created by or sent to current user.
     * @param \PicturePark\API\Model\ShareSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\ShareSearchBadRequestException
     * @throws \PicturePark\API\Exception\ShareSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareSearchNotFoundException
     * @throws \PicturePark\API\Exception\ShareSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareSearchConflictException
     * @throws \PicturePark\API\Exception\ShareSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareSearchResult
     */
    public function shareSearch(\PicturePark\API\Model\ShareSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareSearch($requestBody));
    }
    /**
     * For transfers of type FileUpload or FileUploadAutoImport, after creating the transfer, wait for the returned BusinessProcess to hit the "Created" state before attempting to upload files.
     * @param \PicturePark\API\Model\CreateTransferRequest $requestBody
     * @throws \PicturePark\API\Exception\TransferCreateBadRequestException
     * @throws \PicturePark\API\Exception\TransferCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferCreateNotFoundException
     * @throws \PicturePark\API\Exception\TransferCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferCreateConflictException
     * @throws \PicturePark\API\Exception\TransferCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer
     */
    public function transferCreate(\PicturePark\API\Model\CreateTransferRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferCreate($requestBody));
    }
    /**
     * A transfer cannot be deleted if it's currently in the UploadInProgress or ImportInProgress state.
     * @param string $id ID of transfer.
     * @throws \PicturePark\API\Exception\TransferDeleteBadRequestException
     * @throws \PicturePark\API\Exception\TransferDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferDeleteNotFoundException
     * @throws \PicturePark\API\Exception\TransferDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferDeleteConflictException
     * @throws \PicturePark\API\Exception\TransferDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferDeleteInternalServerErrorException
     *
     * @return null
     */
    public function transferDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferDelete($id));
    }
    /**
     * @param string $id ID of transfer.
     * @throws \PicturePark\API\Exception\TransferGetBadRequestException
     * @throws \PicturePark\API\Exception\TransferGetUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferGetNotFoundException
     * @throws \PicturePark\API\Exception\TransferGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferGetConflictException
     * @throws \PicturePark\API\Exception\TransferGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\TransferDetail
     */
    public function transferGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferGet($id));
    }
    /**
     * This triggers the import of a Transfer, creating Contents. All items in the Transfer will be enqueued for rendering.
     *
     * Wait for completion on the Business process ID that is returned to wait for import completion.
     * Note: Before attempting to import a Transfer, the transfer has to be in the TransferReady state.
     * @param string $id ID of transfer.
     * @param \PicturePark\API\Model\ImportTransferRequest $requestBody
     * @throws \PicturePark\API\Exception\TransferImportBadRequestException
     * @throws \PicturePark\API\Exception\TransferImportUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferImportNotFoundException
     * @throws \PicturePark\API\Exception\TransferImportMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferImportConflictException
     * @throws \PicturePark\API\Exception\TransferImportTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferImportInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer
     */
    public function transferImport(string $id, \PicturePark\API\Model\ImportTransferRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferImport($id, $requestBody));
    }
    /**
     * This triggers the import of selected items in a Transfer, creating contents. All imported items will be enqueued for rendering.
     *
     * Wait for completion on the Business process ID that is returned to wait for import completion.
     *
     * Transfer will transition to state ImportDone if no files of the transfer remain for import.
     * Transfer will transition to state TransferReady if any files of the transfer remain for import.
     * @param string $id ID of transfer.
     * @param \PicturePark\API\Model\ImportTransferPartialRequest $requestBody
     * @throws \PicturePark\API\Exception\TransferPartialImportBadRequestException
     * @throws \PicturePark\API\Exception\TransferPartialImportUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferPartialImportNotFoundException
     * @throws \PicturePark\API\Exception\TransferPartialImportMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferPartialImportConflictException
     * @throws \PicturePark\API\Exception\TransferPartialImportTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferPartialImportInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer
     */
    public function transferPartialImport(string $id, \PicturePark\API\Model\ImportTransferPartialRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferPartialImport($id, $requestBody));
    }
    /**
     * Requests cancellation of transfer.
     * Note: Transfers can only be cancelled when state is UploadInProgress.
     * @param string $id ID of transfer.
     * @throws \PicturePark\API\Exception\TransferCancelBadRequestException
     * @throws \PicturePark\API\Exception\TransferCancelUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferCancelNotFoundException
     * @throws \PicturePark\API\Exception\TransferCancelMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferCancelConflictException
     * @throws \PicturePark\API\Exception\TransferCancelTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferCancelInternalServerErrorException
     *
     * @return null
     */
    public function transferCancel(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferCancel($id));
    }
    /**
     * @param \PicturePark\API\Model\TransferSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\TransferSearchBadRequestException
     * @throws \PicturePark\API\Exception\TransferSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferSearchNotFoundException
     * @throws \PicturePark\API\Exception\TransferSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferSearchConflictException
     * @throws \PicturePark\API\Exception\TransferSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\TransferSearchResult
     */
    public function transferSearch(\PicturePark\API\Model\TransferSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferSearch($requestBody));
    }
    /**
     * @param string $id ID of file transfer.
     * @throws \PicturePark\API\Exception\TransferGetFileBadRequestException
     * @throws \PicturePark\API\Exception\TransferGetFileUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferGetFileNotFoundException
     * @throws \PicturePark\API\Exception\TransferGetFileMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferGetFileConflictException
     * @throws \PicturePark\API\Exception\TransferGetFileTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferGetFileInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FileTransferDetail
     */
    public function transferGetFile(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferGetFile($id));
    }
    /**
     * @param \PicturePark\API\Model\FileTransferSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\TransferSearchFilesBadRequestException
     * @throws \PicturePark\API\Exception\TransferSearchFilesUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferSearchFilesNotFoundException
     * @throws \PicturePark\API\Exception\TransferSearchFilesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferSearchFilesConflictException
     * @throws \PicturePark\API\Exception\TransferSearchFilesTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferSearchFilesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FileTransferSearchResult
     */
    public function transferSearchFiles(\PicturePark\API\Model\FileTransferSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferSearchFiles($requestBody));
    }
    /**
     * @param \PicturePark\API\Model\FileTransferDeleteRequest $requestBody
     * @throws \PicturePark\API\Exception\TransferDeleteFilesBadRequestException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesNotFoundException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesConflictException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesInternalServerErrorException
     *
     * @return null
     */
    public function transferDeleteFiles(\PicturePark\API\Model\FileTransferDeleteRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferDeleteFiles($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\TransferGetBlacklistBadRequestException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistNotFoundException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistConflictException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Blacklist
     */
    public function transferGetBlacklist()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferGetBlacklist());
    }
    /**
     * Uploads the specified chunk data.
     *
     * Use `Content-Type: application/octet-stream` for uploading chunked data.
     * The chunk data should be contained in the body of your request.
     *
     * To upload a file, split it into chunks of reasonable size (accepted range is 1MB-100MB). The last chunk may be smaller than 1MB.
     * @param string $transferId ID of transfer.
     * @param string $requestId Identifier of file.
     * @param null|string|resource $requestBody
     * @param array{
     *    "ChunkNumber": int, //Information about chunk.
     *    "CurrentChunkSize": int, //Information about chunk.
     *    "TotalSize": int, //Information about chunk.
     *    "TotalChunks": int, //Information about chunk.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\TransferUploadFileBadRequestException
     * @throws \PicturePark\API\Exception\TransferUploadFileUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferUploadFileNotFoundException
     * @throws \PicturePark\API\Exception\TransferUploadFileMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferUploadFileConflictException
     * @throws \PicturePark\API\Exception\TransferUploadFileTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferUploadFileInternalServerErrorException
     *
     * @return null
     */
    public function transferUploadFile(string $transferId, string $requestId, $requestBody = null, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferUploadFile($transferId, $requestId, $requestBody, $queryParameters));
    }
    /**
     * @param \PicturePark\API\Model\UserRoleSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\UserRoleSearchBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleSearchNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleSearchConflictException
     * @throws \PicturePark\API\Exception\UserRoleSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleSearchResult
     */
    public function userRoleSearch(\PicturePark\API\Model\UserRoleSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleSearch($requestBody));
    }
    /**
     * Gets multiple user role details by the user role IDs. Can fetch maximum of 100 user roles at once.
     * @param array{
     *    "ids"?: array, //User role IDs to get information about.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\UserRoleGetManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleGetManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleGetManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail[]
     */
    public function userRoleGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleGetMany($queryParameters));
    }
    /**
     * Creates new user role based on the supplied request.
     * @param \PicturePark\API\Model\UserRoleCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\UserRoleCreateBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleCreateNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleCreateConflictException
     * @throws \PicturePark\API\Exception\UserRoleCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail
     */
    public function userRoleCreate(\PicturePark\API\Model\UserRoleCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleCreate($requestBody));
    }
    /**
     * Creates new user roles based on supplied requests.
     * @param \PicturePark\API\Model\UserRoleCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserRoleCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function userRoleCreateMany(\PicturePark\API\Model\UserRoleCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleCreateMany($requestBody));
    }
    /**
     * Updates the user roles specified by the IDs and based on supplied requests.
     * @param \PicturePark\API\Model\UserRoleUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function userRoleUpdateMany(\PicturePark\API\Model\UserRoleUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleUpdateMany($requestBody));
    }
    /**
     * Deletes the user roles specified by the IDs.
     * @param \PicturePark\API\Model\UserRoleDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    public function userRoleDeleteMany(\PicturePark\API\Model\UserRoleDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleDeleteMany($requestBody));
    }
    /**
     * Deletes the user role specified by the ID.
     * @param string $id User role ID.
     * @throws \PicturePark\API\Exception\UserRoleDeleteBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteConflictException
     * @throws \PicturePark\API\Exception\UserRoleDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleDeleteInternalServerErrorException
     *
     * @return null
     */
    public function userRoleDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleDelete($id));
    }
    /**
     * Gets the user role by the user role ID.
     * @param string $id User role ID.
     * @throws \PicturePark\API\Exception\UserRoleGetBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleGetUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleGetNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleGetConflictException
     * @throws \PicturePark\API\Exception\UserRoleGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail
     */
    public function userRoleGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleGet($id));
    }
    /**
     * Updates the user role specified by the ID and based on supplied request.
     * @param string $id User role ID.
     * @param \PicturePark\API\Model\UserRoleEditable $requestBody
     * @throws \PicturePark\API\Exception\UserRoleUpdateBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateConflictException
     * @throws \PicturePark\API\Exception\UserRoleUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail
     */
    public function userRoleUpdate(string $id, \PicturePark\API\Model\UserRoleEditable $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleUpdate($id, $requestBody));
    }
    /**
     * @param string $id User ID to search for.
     * @throws \PicturePark\API\Exception\UserGetBadRequestException
     * @throws \PicturePark\API\Exception\UserGetUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetNotFoundException
     * @throws \PicturePark\API\Exception\UserGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetConflictException
     * @throws \PicturePark\API\Exception\UserGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail
     */
    public function userGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserGet($id));
    }
    /**
     * @param string $id User ID to action on.
     * @param \PicturePark\API\Model\UserUpdateRequest $requestBody
     * @throws \PicturePark\API\Exception\UserUpdateBadRequestException
     * @throws \PicturePark\API\Exception\UserUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserUpdateNotFoundException
     * @throws \PicturePark\API\Exception\UserUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserUpdateConflictException
     * @throws \PicturePark\API\Exception\UserUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail
     */
    public function userUpdate(string $id, \PicturePark\API\Model\UserUpdateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserUpdate($id, $requestBody));
    }
    /**
     * Does not affect AuthorizationState of user.
     * If User is already in desired state, this will be returned as error.
     * @param string $id User ID to action on.
     * @param \PicturePark\API\Model\UserLockRequest $requestBody
     * @throws \PicturePark\API\Exception\UserLockBadRequestException
     * @throws \PicturePark\API\Exception\UserLockUnauthorizedException
     * @throws \PicturePark\API\Exception\UserLockNotFoundException
     * @throws \PicturePark\API\Exception\UserLockMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserLockConflictException
     * @throws \PicturePark\API\Exception\UserLockTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserLockInternalServerErrorException
     *
     * @return null
     */
    public function userLock(string $id, \PicturePark\API\Model\UserLockRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserLock($id, $requestBody));
    }
    /**
     * Does not affect AuthorizationState of users
     * Users which are already in desired state will be returned as errors. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\UserLockManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserLockManyBadRequestException
     * @throws \PicturePark\API\Exception\UserLockManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserLockManyNotFoundException
     * @throws \PicturePark\API\Exception\UserLockManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserLockManyConflictException
     * @throws \PicturePark\API\Exception\UserLockManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserLockManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function userLockMany(\PicturePark\API\Model\UserLockManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserLockMany($requestBody));
    }
    /**
     * Users with AuthorizationState != ToBeReviewed are considered reviewed.
     * @param string $id User ID to action on.
     * @param \PicturePark\API\Model\UserReviewRequest $requestBody
     * @throws \PicturePark\API\Exception\UserReviewBadRequestException
     * @throws \PicturePark\API\Exception\UserReviewUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReviewNotFoundException
     * @throws \PicturePark\API\Exception\UserReviewMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReviewConflictException
     * @throws \PicturePark\API\Exception\UserReviewTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReviewInternalServerErrorException
     *
     * @return null
     */
    public function userReview(string $id, \PicturePark\API\Model\UserReviewRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReview($id, $requestBody));
    }
    /**
     * Users with AuthorizationState != ToBeReviewed are considered reviewed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\UserReviewManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserReviewManyBadRequestException
     * @throws \PicturePark\API\Exception\UserReviewManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReviewManyNotFoundException
     * @throws \PicturePark\API\Exception\UserReviewManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReviewManyConflictException
     * @throws \PicturePark\API\Exception\UserReviewManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReviewManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function userReviewMany(\PicturePark\API\Model\UserReviewManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReviewMany($requestBody));
    }
    /**
     * Formally invites a user, e.g. sends an invitation email. Transitions AuthorizationState to Invited, implicitly reviews user.
     * @param string $id User ID to action on.
     * @throws \PicturePark\API\Exception\UserInviteBadRequestException
     * @throws \PicturePark\API\Exception\UserInviteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserInviteNotFoundException
     * @throws \PicturePark\API\Exception\UserInviteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserInviteConflictException
     * @throws \PicturePark\API\Exception\UserInviteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserInviteInternalServerErrorException
     *
     * @return null
     */
    public function userInvite(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserInvite($id));
    }
    /**
     * Formally invites users, e.g. sends an invitation email. Transitions to Invited, implicitly reviews user. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\UserInviteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserInviteManyBadRequestException
     * @throws \PicturePark\API\Exception\UserInviteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserInviteManyNotFoundException
     * @throws \PicturePark\API\Exception\UserInviteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserInviteManyConflictException
     * @throws \PicturePark\API\Exception\UserInviteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserInviteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function userInviteMany(\PicturePark\API\Model\UserInviteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserInviteMany($requestBody));
    }
    /**
     * Formally re-invites a user, e.g. sends an invitation email.
     * @param string $id User ID to action on.
     * @throws \PicturePark\API\Exception\UserReinviteBadRequestException
     * @throws \PicturePark\API\Exception\UserReinviteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReinviteNotFoundException
     * @throws \PicturePark\API\Exception\UserReinviteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReinviteConflictException
     * @throws \PicturePark\API\Exception\UserReinviteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReinviteInternalServerErrorException
     *
     * @return null
     */
    public function userReinvite(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReinvite($id));
    }
    /**
     * Formally re-invites users, e.g. sends an invitation email. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\UserReinviteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserReInviteManyBadRequestException
     * @throws \PicturePark\API\Exception\UserReInviteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReInviteManyNotFoundException
     * @throws \PicturePark\API\Exception\UserReInviteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReInviteManyConflictException
     * @throws \PicturePark\API\Exception\UserReInviteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReInviteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function userReInviteMany(\PicturePark\API\Model\UserReinviteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReInviteMany($requestBody));
    }
    /**
     * @param \PicturePark\API\Model\UserRoleAssignManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserAssignUserRolesBadRequestException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesUnauthorizedException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesNotFoundException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesConflictException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function userAssignUserRoles(\PicturePark\API\Model\UserRoleAssignManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserAssignUserRoles($requestBody));
    }
    /**
     * @param string $id User ID
     * @param \PicturePark\API\Model\UserDeleteRequest $requestBody
     * @throws \PicturePark\API\Exception\UserDeleteBadRequestException
     * @throws \PicturePark\API\Exception\UserDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserDeleteNotFoundException
     * @throws \PicturePark\API\Exception\UserDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserDeleteConflictException
     * @throws \PicturePark\API\Exception\UserDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserDeleteInternalServerErrorException
     *
     * @return null
     */
    public function userDelete(string $id, \PicturePark\API\Model\UserDeleteRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserDelete($id, $requestBody));
    }
    /**
     * Restores previously deleted user, who was not cleaned up yet.
     * @param string $id User ID to action on.
     * @throws \PicturePark\API\Exception\UserRestoreBadRequestException
     * @throws \PicturePark\API\Exception\UserRestoreUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRestoreNotFoundException
     * @throws \PicturePark\API\Exception\UserRestoreMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRestoreConflictException
     * @throws \PicturePark\API\Exception\UserRestoreTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRestoreInternalServerErrorException
     *
     * @return null
     */
    public function userRestore(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRestore($id));
    }
    /**
     * @param string $id User ID to action on.
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestBadRequestException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestUnauthorizedException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestNotFoundException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestConflictException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestInternalServerErrorException
     *
     * @return null
     */
    public function userCancelDeletionRequest(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserCancelDeletionRequest($id));
    }
    /**
     * @param string $tokenId ID of the owner token.
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenBadRequestException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenNotFoundException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenConflictException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail
     */
    public function userGetByOwnerToken(string $tokenId)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserGetByOwnerToken($tokenId));
    }
    /**
     * User will not be invited.
     * @param \PicturePark\API\Model\UserCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\UserCreateBadRequestException
     * @throws \PicturePark\API\Exception\UserCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserCreateNotFoundException
     * @throws \PicturePark\API\Exception\UserCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserCreateConflictException
     * @throws \PicturePark\API\Exception\UserCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail
     */
    public function userCreate(\PicturePark\API\Model\UserCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserCreate($requestBody));
    }
    /**
     * Can fetch 100 users at most.
     * @param array{
     *    "ids"?: array, //User IDs.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\UserGetManyBadRequestException
     * @throws \PicturePark\API\Exception\UserGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetManyNotFoundException
     * @throws \PicturePark\API\Exception\UserGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetManyConflictException
     * @throws \PicturePark\API\Exception\UserGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail[]
     */
    public function userGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserGetMany($queryParameters));
    }
    /**
     * @param \PicturePark\API\Model\UserSearchRequest $requestBody
     * @throws \PicturePark\API\Exception\UserSearchBadRequestException
     * @throws \PicturePark\API\Exception\UserSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\UserSearchNotFoundException
     * @throws \PicturePark\API\Exception\UserSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserSearchConflictException
     * @throws \PicturePark\API\Exception\UserSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserSearchResult
     */
    public function userSearch(\PicturePark\API\Model\UserSearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserSearch($requestBody));
    }
    /**
     * @param \PicturePark\API\Model\UserAggregationRequest $requestBody
     * @throws \PicturePark\API\Exception\UserAggregateBadRequestException
     * @throws \PicturePark\API\Exception\UserAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserAggregateNotFoundException
     * @throws \PicturePark\API\Exception\UserAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserAggregateConflictException
     * @throws \PicturePark\API\Exception\UserAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult
     */
    public function userAggregate(\PicturePark\API\Model\UserAggregationRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserAggregate($requestBody));
    }
    /**
     * @param \PicturePark\API\Model\UserUpdateIdentityProviderManyRequest $requestBody
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyBadRequestException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyNotFoundException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyConflictException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function userUpdateIdentityProviderMany(\PicturePark\API\Model\UserUpdateIdentityProviderManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserUpdateIdentityProviderMany($requestBody));
    }
    /**
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingTargets
     */
    public function xmpMappingGetAvailableTargets()
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingGetAvailableTargets());
    }
    /**
     * @param \PicturePark\API\Model\XmpMappingEntrySearchRequest $requestBody
     * @throws \PicturePark\API\Exception\XmpMappingSearchBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingSearchNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingSearchConflictException
     * @throws \PicturePark\API\Exception\XmpMappingSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntrySearchResult
     */
    public function xmpMappingSearch(\PicturePark\API\Model\XmpMappingEntrySearchRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingSearch($requestBody));
    }
    /**
     * Deletes the xmp mapping specified by the ID. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id Xmp mapping ID.
     * @throws \PicturePark\API\Exception\XmpMappingDeleteBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteConflictException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function xmpMappingDelete(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingDelete($id));
    }
    /**
     * Gets the xmp mapping by the xmp mapping ID.
     * @param string $id Xmp mapping ID.
     * @throws \PicturePark\API\Exception\XmpMappingGetBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntry
     */
    public function xmpMappingGet(string $id)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingGet($id));
    }
    /**
     * Updates the xmp mapping specified by the ID and based on supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param string $id Xmp mapping ID.
     * @param \PicturePark\API\Model\XmpMappingEntry $requestBody
     * @throws \PicturePark\API\Exception\XmpMappingUpdateBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateConflictException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function xmpMappingUpdate(string $id, \PicturePark\API\Model\XmpMappingEntry $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingUpdate($id, $requestBody));
    }
    /**
     * Gets multiple xmp mapping details by the xmp mapping IDs. Can fetch maximum of 100 xmp mappings at once.
     * @param array{
     *    "ids"?: array, //Xmp mapping IDs to get information about.
     * } $queryParameters
     * @throws \PicturePark\API\Exception\XmpMappingGetManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntry[]
     */
    public function xmpMappingGetMany(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingGetMany($queryParameters));
    }
    /**
     * Creates new xmp mapping based on the supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\XmpMappingEntryCreateRequest $requestBody
     * @throws \PicturePark\API\Exception\XmpMappingCreateBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateConflictException
     * @throws \PicturePark\API\Exception\XmpMappingCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function xmpMappingCreate(\PicturePark\API\Model\XmpMappingEntryCreateRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingCreate($requestBody));
    }
    /**
     * Creates new xmp mappings based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\XmpMappingEntryCreateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function xmpMappingCreateMany(\PicturePark\API\Model\XmpMappingEntryCreateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingCreateMany($requestBody));
    }
    /**
     * Updates the xmp mappings specified by the IDs and based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\XmpMappingEntryUpdateManyRequest $requestBody
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function xmpMappingUpdateMany(\PicturePark\API\Model\XmpMappingEntryUpdateManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingUpdateMany($requestBody));
    }
    /**
     * Deletes the xmp mappings specified by the IDs. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\XmpMappingEntryDeleteManyRequest $requestBody
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    public function xmpMappingDeleteMany(\PicturePark\API\Model\XmpMappingEntryDeleteManyRequest $requestBody)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingDeleteMany($requestBody));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        $plugins = [];
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \PicturePark\API\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \PicturePark\API\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}