<?php

namespace PicturePark\API;

class Client extends \PicturePark\API\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $id The business process id.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessGetBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessGetUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessGet($id), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\BusinessProcessCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessCreateBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessCreate(\PicturePark\API\Model\BusinessProcessCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessCreate($requestBody), $fetch);
    }
    /**
     * Only available for business processes created through BusinessProcessCreateRequest). The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id The business process id.
     * @param \PicturePark\API\Model\BusinessProcessStateChangeRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessChangeStateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessChangeState(string $id, \PicturePark\API\Model\BusinessProcessStateChangeRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessChangeState($id, $requestBody), $fetch);
    }
    /**
     * Only available for business processes created through BusinessProcessCreateRequest).
     *
     * @param string $id The business process id.
     * @param \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessUpdateNotification(string $id, \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessUpdateNotification($id, $requestBody), $fetch);
    }
    /**
     * Only available if the business process indicates support for cancellation in SupportsCancellation.
     *
     * @param string $id The business process id.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessCancelBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessCancelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessCancel(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessCancel($id), $fetch);
    }
    /**
     * Wait for the business process to hit one of the given states.
     *
     * @param string $id The business process id.
     * @param array $queryParameters {
     *     @var array $states Business process states to wait for.
     *     @var string $timeout The timeout to wait for completion.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForStateResult|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessWaitForStates(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessWaitForStates($id, $queryParameters), $fetch);
    }
    /**
     * Wait for the business process to hit one of the given life cycles.
     *
     * @param string $id The business process id.
     * @param array $queryParameters {
     *     @var array $lifeCycles Business process life cycles to wait for.
     *     @var string $timeout The timeout to wait for completion.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForLifeCyclesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessWaitForLifeCycles(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessWaitForLifeCycles($id, $queryParameters), $fetch);
    }
    /**
    * Shortcut to wait for the business process to hit one of the finished life cycles.
    Finished life cycles are:
    - Succeeded
    - SucceededWithErrors
    - Cancelled
    - Failed
    *
    * @param string $id The business process id.
    * @param array $queryParameters {
    *     @var string $timeout The timeout to wait for completion.
    *     @var bool $waitForContinuationCompletion Waits for the completion of the continuation business process (if existing, recursively). Default to true.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionBadRequestException
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionUnauthorizedException
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionNotFoundException
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionMethodNotAllowedException
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionConflictException
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionTooManyRequestsException
    * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult|\Psr\Http\Message\ResponseInterface
    */
    public function businessProcessWaitForCompletion(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessWaitForCompletion($id, $queryParameters), $fetch);
    }
    /**
     * Gets details of the given business process.
     *
     * @param string $id The business process id.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessGetDetailsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessDetails|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessGetDetails(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessGetDetails($id), $fetch);
    }
    /**
     * Search for business processes.
     *
     * @param \PicturePark\API\Model\BusinessProcessSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessProcessSearchBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function businessProcessSearch(\PicturePark\API\Model\BusinessProcessSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessProcessSearch($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleGetConfigurationInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessRuleConfiguration|\Psr\Http\Message\ResponseInterface
     */
    public function businessRuleGetConfiguration(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessRuleGetConfiguration(), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function businessRuleUpdateConfiguration(\PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessRuleUpdateConfiguration($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessRuleTraceLogSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function businessRuleSearchTraces(\PicturePark\API\Model\BusinessRuleTraceLogSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\BusinessRuleSearchTraces($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ChannelGetAllBadRequestException
     * @throws \PicturePark\API\Exception\ChannelGetAllUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelGetAllNotFoundException
     * @throws \PicturePark\API\Exception\ChannelGetAllMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelGetAllConflictException
     * @throws \PicturePark\API\Exception\ChannelGetAllTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelGetAllInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel[]|\Psr\Http\Message\ResponseInterface
     */
    public function channelGetAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelGetAll(), $fetch);
    }
    /**
     * Creates new channel based on supplied request.
     *
     * @param \PicturePark\API\Model\ChannelCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ChannelCreateBadRequestException
     * @throws \PicturePark\API\Exception\ChannelCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelCreateNotFoundException
     * @throws \PicturePark\API\Exception\ChannelCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelCreateConflictException
     * @throws \PicturePark\API\Exception\ChannelCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel|\Psr\Http\Message\ResponseInterface
     */
    public function channelCreate(\PicturePark\API\Model\ChannelCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelCreate($requestBody), $fetch);
    }
    /**
     * Deletes the channel specified by the ID.
     *
     * @param string $id ID of the channel that should be deleted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ChannelDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ChannelDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ChannelDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelDeleteConflictException
     * @throws \PicturePark\API\Exception\ChannelDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function channelDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelDelete($id), $fetch);
    }
    /**
     * Gets the channel information by the output format ID.
     *
     * @param string $id The channel ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ChannelGetBadRequestException
     * @throws \PicturePark\API\Exception\ChannelGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelGetNotFoundException
     * @throws \PicturePark\API\Exception\ChannelGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelGetConflictException
     * @throws \PicturePark\API\Exception\ChannelGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel|\Psr\Http\Message\ResponseInterface
     */
    public function channelGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelGet($id), $fetch);
    }
    /**
     * Updates the channel specified by the ID and based on supplied request.
     *
     * @param string $id ID of channel to update
     * @param \PicturePark\API\Model\ChannelUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ChannelUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ChannelUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ChannelUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ChannelUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ChannelUpdateConflictException
     * @throws \PicturePark\API\Exception\ChannelUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ChannelUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Channel|\Psr\Http\Message\ResponseInterface
     */
    public function channelUpdate(string $id, \PicturePark\API\Model\ChannelUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ChannelUpdate($id, $requestBody), $fetch);
    }
    /**
     * Deletes the content permission set specified by the ID.
     *
     * @param string $id Content permission set ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetDelete($id), $fetch);
    }
    /**
     * Gets the content permission set detail information by the content permission set ID.
     *
     * @param string $id Content permission set ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGet($id), $fetch);
    }
    /**
     * Updates the content permission set specified by the ID and based on supplied request.
     *
     * @param string $id Content permission set ID.
     * @param \PicturePark\API\Model\ContentPermissionSetUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetUpdate(string $id, \PicturePark\API\Model\ContentPermissionSetUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetUpdate($id, $requestBody), $fetch);
    }
    /**
     * Gets multiple content permission set details by the content permission set IDs.
     *
     * @param array $queryParameters {
     *     @var array $ids Ids
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGetMany($queryParameters), $fetch);
    }
    /**
     * Creates new content permission set based on supplied request.
     *
     * @param \PicturePark\API\Model\ContentPermissionSetCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentPermissionSetDetail|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetCreate(\PicturePark\API\Model\ContentPermissionSetCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetCreate($requestBody), $fetch);
    }
    /**
     * Transfers ownership of content permission set to supplied user.
     *
     * @param string $id Content permission set ID.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetTransferOwnership(string $id, \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetTransferOwnership($id, $requestBody), $fetch);
    }
    /**
     * Returns permissions for the content permission set for the current user.
     *
     * @param string $id Content permission set ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetGetPermissions(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGetPermissions($id), $fetch);
    }
    /**
     * Creates new content permission sets based on supplied requests.
     *
     * @param \PicturePark\API\Model\ContentPermissionSetCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetCreateMany(\PicturePark\API\Model\ContentPermissionSetCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetCreateMany($requestBody), $fetch);
    }
    /**
     * Updates the content permission sets specified by the IDs and based on supplied request.
     *
     * @param \PicturePark\API\Model\ContentPermissionSetUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetUpdateMany(\PicturePark\API\Model\ContentPermissionSetUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetUpdateMany($requestBody), $fetch);
    }
    /**
     * Deletes the content permission sets specified by the IDs.
     *
     * @param \PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetDeleteMany(\PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetDeleteMany($requestBody), $fetch);
    }
    /**
     * Transfers ownership of multiple content permission sets to respective supplied users.
     *
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetTransferOwnershipManyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetTransferOwnershipMany(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetTransferOwnershipMany($requestBody), $fetch);
    }
    /**
     * Returns permissions for multiple content permission sets for the current user.
     *
     * @param array $queryParameters {
     *     @var array $ids Ids
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetGetPermissionsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetUserPermissionRights[]|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetGetPermissionsMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetGetPermissionsMany($queryParameters), $fetch);
    }
    /**
     * Searches content permission sets as specified in the search request.
     *
     * @param \PicturePark\API\Model\PermissionSetSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchBadRequestException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchNotFoundException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchConflictException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentPermissionSetSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function contentPermissionSetSearch(\PicturePark\API\Model\PermissionSetSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentPermissionSetSearch($requestBody), $fetch);
    }
    /**
    * Deletes a single content. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
    *
    * @param string $id The ID of the content to delete.
    * @param array $queryParameters {
    *     @var bool $forceReferenceRemoval A value indicating whether references to the content should be removed.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentDeleteBadRequestException
    * @throws \PicturePark\API\Exception\ContentDeleteUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentDeleteNotFoundException
    * @throws \PicturePark\API\Exception\ContentDeleteMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentDeleteConflictException
    * @throws \PicturePark\API\Exception\ContentDeleteTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentDeleteInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function contentDelete(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDelete($id, $queryParameters), $fetch);
    }
    /**
     * Gets the content detail by ID.
     *
     * @param string $id The content ID.
     * @param array $queryParameters {
     *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentGetBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetConflictException
     * @throws \PicturePark\API\Exception\ContentGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail|\Psr\Http\Message\ResponseInterface
     */
    public function contentGet(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGet($id, $queryParameters), $fetch);
    }
    /**
     * Download a single content in a specific output format. To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     *
     * @param string $contentId The content ID.
     * @param string $outputFormatId The output format ID.
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image.
     *     @var int $height Optional height in pixels to resize image.
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadPreconditionFailedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contentDownload(string $contentId, string $outputFormatId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDownload($contentId, $outputFormatId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Provides a lightweight endpoint to download content thumbnails.
     *
     * @param string $id The content ID.
     * @param string $size Thumbnail size. Either small, medium or large.
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image.
     *     @var int $height Optional height in pixels to resize image.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailBadRequestException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailNotFoundException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailConflictException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailInternalServerErrorException
     * @throws \PicturePark\API\Exception\ContentDownloadThumbnailPreconditionFailedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function contentDownloadThumbnail(string $id, string $size, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDownloadThumbnail($id, $size, $queryParameters), $fetch);
    }
    /**
    * Gets multiple content details by IDs.
    Can fetch 100 contents at most.
    *
    * @param array $queryParameters {
    *     @var array $ids List of content IDs
    *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentGetManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentGetManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentGetManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentGetManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentGetManyConflictException
    * @throws \PicturePark\API\Exception\ContentGetManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentGetManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ContentDetail[]|\Psr\Http\Message\ResponseInterface
    */
    public function contentGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetMany($queryParameters), $fetch);
    }
    /**
    * Create a single file-less content item. To import files, see [Transfer](#tag/Transfer).
    *
    * @param \PicturePark\API\Model\ContentCreateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
    *     @var bool $allowMissingDependencies Allows creating contents that refer to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentCreateBadRequestException
    * @throws \PicturePark\API\Exception\ContentCreateUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentCreateNotFoundException
    * @throws \PicturePark\API\Exception\ContentCreateMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentCreateConflictException
    * @throws \PicturePark\API\Exception\ContentCreateTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentCreateInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ContentDetail|\Psr\Http\Message\ResponseInterface
    */
    public function contentCreate(\PicturePark\API\Model\ContentCreateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentCreate($requestBody, $queryParameters), $fetch);
    }
    /**
    * Updates metadata layers of a specified content. For file-less contents, the content itself can be updated as well.
    The update is flexible enough to allow the update of only the fields that are specified in the request (leaving untouched the other existing ones) or to allow
    the entire replacement of all the values of a schema or even of all the schemas.
    See [ShouldUpdateMetadata](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
    *
    * @param string $id The content ID.
    * @param \PicturePark\API\Model\ContentMetadataUpdateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
    *     @var bool $allowMissingDependencies Allows storing references to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataBadRequestException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataNotFoundException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataConflictException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ContentDetail|\Psr\Http\Message\ResponseInterface
    */
    public function contentUpdateMetadata(string $id, \PicturePark\API\Model\ContentMetadataUpdateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdateMetadata($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Updates the content permission sets of a single content. To get a list of available content permission sets, see [Permissions](operation/Permission_SearchContentPermissions)
    *
    * @param string $id The content ID.
    * @param \PicturePark\API\Model\ContentPermissionsUpdateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsBadRequestException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsNotFoundException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsConflictException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ContentDetail|\Psr\Http\Message\ResponseInterface
    */
    public function contentUpdatePermissions(string $id, \PicturePark\API\Model\ContentPermissionsUpdateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdatePermissions($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Restores a previously deleted content.
    *
    * @param string $id The content ID.
    * @param array $queryParameters {
    *     @var bool $allowMissingDependencies Allows restoring contents that refer to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentRestoreBadRequestException
    * @throws \PicturePark\API\Exception\ContentRestoreUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentRestoreNotFoundException
    * @throws \PicturePark\API\Exception\ContentRestoreMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentRestoreConflictException
    * @throws \PicturePark\API\Exception\ContentRestoreTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentRestoreInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function contentRestore(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentRestore($id, $queryParameters), $fetch);
    }
    /**
    * Transfers ownership of a content to another user. The target user must have the ManageContent UserRight.
    *
    * @param string $id The content ID.
    * @param \PicturePark\API\Model\ContentOwnershipTransferRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipBadRequestException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipNotFoundException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipConflictException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function contentTransferOwnership(string $id, \PicturePark\API\Model\ContentOwnershipTransferRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentTransferOwnership($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Updates binary file of existing content. The file must already be uploaded before calling this endpoint. See [Transfer](#tag/Transfer).
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param string $id The ID of the content to replace.
    * @param \PicturePark\API\Model\ContentFileUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentUpdateFileBadRequestException
    * @throws \PicturePark\API\Exception\ContentUpdateFileUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentUpdateFileNotFoundException
    * @throws \PicturePark\API\Exception\ContentUpdateFileMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentUpdateFileConflictException
    * @throws \PicturePark\API\Exception\ContentUpdateFileTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentUpdateFileInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentUpdateFile(string $id, \PicturePark\API\Model\ContentFileUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdateFile($id, $requestBody), $fetch);
    }
    /**
     * Gets the references (list items, contents, shares) to a single content.
     *
     * @param string $id The content ID whose references to retrieve.
     * @param \PicturePark\API\Model\ContentReferencesRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentGetReferencesBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetReferencesUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetReferencesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesConflictException
     * @throws \PicturePark\API\Exception\ContentGetReferencesTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetReferencesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentReferencesResult|\Psr\Http\Message\ResponseInterface
     */
    public function contentGetReferences(string $id, \PicturePark\API\Model\ContentReferencesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetReferences($id, $requestBody), $fetch);
    }
    /**
     * Retrieves all outputs available for content, also dynamic rendered outputs are returned, if requested.
     *
     * @param string $id ID of content.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentGetOutputsBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetOutputsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetOutputsNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetOutputsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetOutputsConflictException
     * @throws \PicturePark\API\Exception\ContentGetOutputsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetOutputsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputResolveResult[]|\Psr\Http\Message\ResponseInterface
     */
    public function contentGetOutputs(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetOutputs($id), $fetch);
    }
    /**
     * Creates a download link for one or more contents. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\ContentDownloadLinkCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkBadRequestException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkNotFoundException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkConflictException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentCreateDownloadLinkInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function contentCreateDownloadLink(\PicturePark\API\Model\ContentDownloadLinkCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentCreateDownloadLink($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $token Token
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkConflictException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetDownloadLinkInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DownloadLink|\Psr\Http\Message\ResponseInterface
     */
    public function contentGetDownloadLink(string $token, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetDownloadLink($token), $fetch);
    }
    /**
    * Create multiple file-less content items. To import files, see [Transfer](#tag/Transfer).
    The operation is executed asynchronous and it's not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentCreateManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentCreateManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentCreateManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentCreateManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentCreateManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentCreateManyConflictException
    * @throws \PicturePark\API\Exception\ContentCreateManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentCreateManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentCreateMany(\PicturePark\API\Model\ContentCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentCreateMany($requestBody), $fetch);
    }
    /**
    * Updates metadata layers of multiple contents. For file-less contents, the contents itself can be updated a swell.
    See [ShouldUpdateMetadata](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentMetadataUpdateManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyConflictException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentUpdateMetadataManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentUpdateMetadataMany(\PicturePark\API\Model\ContentMetadataUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdateMetadataMany($requestBody), $fetch);
    }
    /**
    * Updates the content permission sets of multiple contents. To get a list of available content permission sets, see [Permissions](#operation/Permission_SearchContentPermissions)
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentPermissionsUpdateManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyConflictException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentUpdatePermissionsManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentUpdatePermissionsMany(\PicturePark\API\Model\ContentPermissionsUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentUpdatePermissionsMany($requestBody), $fetch);
    }
    /**
    * Transfers ownerships of multiple contents to specified users. The target users must have the ManageContent UserRight.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentOwnershipTransferManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyConflictException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentTransferOwnershipManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentTransferOwnershipMany(\PicturePark\API\Model\ContentOwnershipTransferManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentTransferOwnershipMany($requestBody), $fetch);
    }
    /**
    * Deletes multiple contents. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentDeleteManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentDeleteManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentDeleteManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentDeleteManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentDeleteManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentDeleteManyConflictException
    * @throws \PicturePark\API\Exception\ContentDeleteManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentDeleteManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentDeleteMany(\PicturePark\API\Model\ContentDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDeleteMany($requestBody), $fetch);
    }
    /**
    * Deletes multiple contents. A filter must be provided to limit the deletion to specific contents.
    The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
    The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentDeleteManyFilterRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterBadRequestException
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterNotFoundException
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterConflictException
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentDeleteManyByFilterInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentDeleteManyByFilter(\PicturePark\API\Model\ContentDeleteManyFilterRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentDeleteManyByFilter($requestBody), $fetch);
    }
    /**
    * Restores previously deleted contents.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentRestoreManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentRestoreManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentRestoreManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentRestoreManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentRestoreManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentRestoreManyConflictException
    * @throws \PicturePark\API\Exception\ContentRestoreManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentRestoreManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentRestoreMany(\PicturePark\API\Model\ContentRestoreManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentRestoreMany($requestBody), $fetch);
    }
    /**
     * Gets references (list items, contents, shares) to content documents defined by IDs.
     *
     * @param \PicturePark\API\Model\ContentManyReferencesRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyBadRequestException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyNotFoundException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyConflictException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentGetReferencesManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentReferencesResult|\Psr\Http\Message\ResponseInterface
     */
    public function contentGetReferencesMany(\PicturePark\API\Model\ContentManyReferencesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetReferencesMany($requestBody), $fetch);
    }
    /**
    * Retrieves all outputs available for contents, also dynamic rendered outputs are returned, if requested.
    A maximum of 1000 content ids can be specified.
    *
    * @param \PicturePark\API\Model\OutputResolveManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyBadRequestException
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyNotFoundException
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyConflictException
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentGetOutputsManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\OutputResolveResult[]|\Psr\Http\Message\ResponseInterface
    */
    public function contentGetOutputsMany(\PicturePark\API\Model\OutputResolveManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentGetOutputsMany($requestBody), $fetch);
    }
    /**
    * Updates metadata layers' fields of multiple contents. For file-less contents, the content's fields themselves can be updated as well.
    A list of content IDs must be provided to limit the update to specific contents. The same set of changes is applied to all the contents.
    See [ShouldUpdateMetadataMany](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentFieldsBatchUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsBadRequestException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsNotFoundException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsConflictException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByIdsInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentBatchUpdateFieldsByIds(\PicturePark\API\Model\ContentFieldsBatchUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentBatchUpdateFieldsByIds($requestBody), $fetch);
    }
    /**
    * Updates metadata layers' fields of multiple contents. For file-less contents, the content's fields themselves can be updated as well.
    A filter must be provided to limit the update to specific contents. The same set of changes is applied to all the contents.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ContentFieldsBatchUpdateFilterRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterBadRequestException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterUnauthorizedException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterNotFoundException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterConflictException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterTooManyRequestsException
    * @throws \PicturePark\API\Exception\ContentBatchUpdateFieldsByFilterInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function contentBatchUpdateFieldsByFilter(\PicturePark\API\Model\ContentFieldsBatchUpdateFilterRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentBatchUpdateFieldsByFilter($requestBody), $fetch);
    }
    /**
     * Searches contents as specified in the search request.
     *
     * @param \PicturePark\API\Model\ContentSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentSearchBadRequestException
     * @throws \PicturePark\API\Exception\ContentSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentSearchNotFoundException
     * @throws \PicturePark\API\Exception\ContentSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentSearchConflictException
     * @throws \PicturePark\API\Exception\ContentSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function contentSearch(\PicturePark\API\Model\ContentSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentSearch($requestBody), $fetch);
    }
    /**
     * Aggregates content by content fields values as specified in the aggregators saved on a channel.
     *
     * @param \PicturePark\API\Model\ContentAggregationOnChannelRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelBadRequestException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelNotFoundException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelConflictException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult|\Psr\Http\Message\ResponseInterface
     */
    public function contentAggregateOnChannel(\PicturePark\API\Model\ContentAggregationOnChannelRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentAggregateOnChannel($requestBody), $fetch);
    }
    /**
     * Aggregates content by content fields values as specified in the aggregation request.
     *
     * @param \PicturePark\API\Model\ContentAggregationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ContentAggregateBadRequestException
     * @throws \PicturePark\API\Exception\ContentAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentAggregateNotFoundException
     * @throws \PicturePark\API\Exception\ContentAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentAggregateConflictException
     * @throws \PicturePark\API\Exception\ContentAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult|\Psr\Http\Message\ResponseInterface
     */
    public function contentAggregate(\PicturePark\API\Model\ContentAggregationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ContentAggregate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusBadRequestException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusUnauthorizedException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusNotFoundException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusConflictException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusTooManyRequestsException
     * @throws \PicturePark\API\Exception\DisplayValueGetStatusInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DisplayValueStatus|\Psr\Http\Message\ResponseInterface
     */
    public function displayValueGetStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DisplayValueGetStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DisplayValueRerenderBadRequestException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderUnauthorizedException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderNotFoundException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderConflictException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderTooManyRequestsException
     * @throws \PicturePark\API\Exception\DisplayValueRerenderInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function displayValueRerender(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DisplayValueRerender(), $fetch);
    }
    /**
     * Gets the current version of a document.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetCurrentInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistory|\Psr\Http\Message\ResponseInterface
     */
    public function documentHistoryGetCurrent(string $documentType, string $documentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryGetCurrent($documentType, $documentId), $fetch);
    }
    /**
     * Gets a specific version of a document.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryGetVersionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistory|\Psr\Http\Message\ResponseInterface
     */
    public function documentHistoryGetVersion(string $documentType, string $documentId, int $documentVersion, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryGetVersion($documentType, $documentId, $documentVersion), $fetch);
    }
    /**
     * Compare the current version of a document with the requested version and get the differences.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param array $queryParameters {
     *     @var int $version The version of the document to compare with.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithCurrentInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistoryDifference|\Psr\Http\Message\ResponseInterface
     */
    public function documentHistoryCompareWithCurrent(string $documentType, string $documentId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryCompareWithCurrent($documentType, $documentId, $queryParameters), $fetch);
    }
    /**
     * Compare a specific version of a document with another version and get the differences.
     *
     * @param string $documentType The type of the document (e.g. Content).
     * @param string $documentId The ID of the document (e.g. contentId).
     * @param int $documentVersion The version of the document to use for the comparison.
     * @param array $queryParameters {
     *     @var int $version The version of the document to compare with.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionConflictException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistoryCompareWithVersionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistoryDifference|\Psr\Http\Message\ResponseInterface
     */
    public function documentHistoryCompareWithVersion(string $documentType, string $documentId, int $documentVersion, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistoryCompareWithVersion($documentType, $documentId, $documentVersion, $queryParameters), $fetch);
    }
    /**
     * Search the document history as specified in the search request.
     *
     * @param \PicturePark\API\Model\DocumentHistorySearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\DocumentHistorySearchBadRequestException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchUnauthorizedException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchNotFoundException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchConflictException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\DocumentHistorySearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\DocumentHistorySearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function documentHistorySearch(\PicturePark\API\Model\DocumentHistorySearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\DocumentHistorySearch($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider[]|\Psr\Http\Message\ResponseInterface
     */
    public function identityProviderGetAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGetAll(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetAllBasicInfosInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProviderBasicInfo[]|\Psr\Http\Message\ResponseInterface
     */
    public function identityProviderGetAllBasicInfos(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGetAllBasicInfos(), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identity provider ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\IdentityProviderGetBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider|\Psr\Http\Message\ResponseInterface
     */
    public function identityProviderGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGet($id), $fetch);
    }
    /**
     * Identity provider has to be already created via UI
     *
     * @param string $id Identity provider ID.
     * @param \PicturePark\API\Model\IdentityProviderEditable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IdentityProvider|\Psr\Http\Message\ResponseInterface
     */
    public function identityProviderUpdate(string $id, \PicturePark\API\Model\IdentityProviderEditable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderUpdate($id, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function identityProviderGetSynchronizableAttributes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\IdentityProviderGetSynchronizableAttributes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\PicturePark\API\Model\VersionInfo|\Psr\Http\Message\ResponseInterface
     */
    public function infoGetVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\InfoGetVersion(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\PicturePark\API\Model\CustomerInfo|\Psr\Http\Message\ResponseInterface
     */
    public function infoGetInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\InfoGetInfo(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\PicturePark\API\Model\SystemStatus|\Psr\Http\Message\ResponseInterface
     */
    public function infoGetStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\InfoGetStatus(), $fetch);
    }
    /**
     * Gets the json schema for the specified schema.
     *
     * @param string $id The ID of the schema whose json schema to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\JsonSchemaGetBadRequestException
     * @throws \PicturePark\API\Exception\JsonSchemaGetUnauthorizedException
     * @throws \PicturePark\API\Exception\JsonSchemaGetNotFoundException
     * @throws \PicturePark\API\Exception\JsonSchemaGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\JsonSchemaGetConflictException
     * @throws \PicturePark\API\Exception\JsonSchemaGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\JsonSchemaGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function jsonSchemaGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\JsonSchemaGet($id), $fetch);
    }
    /**
    * Deletes a list item. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all related files will be deleted.
    *
    * @param string $id The ID of the list item to delete.
    * @param array $queryParameters {
    *     @var bool $forceReferenceRemoval A value indicating whether references to the list item should be removed.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemDeleteBadRequestException
    * @throws \PicturePark\API\Exception\ListItemDeleteUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemDeleteNotFoundException
    * @throws \PicturePark\API\Exception\ListItemDeleteMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemDeleteConflictException
    * @throws \PicturePark\API\Exception\ListItemDeleteTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemDeleteInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function listItemDelete(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemDelete($id, $queryParameters), $fetch);
    }
    /**
     * Gets the list item detail by ID.
     *
     * @param string $id The list item ID.
     * @param array $queryParameters {
     *     @var array $resolveBehaviors List of enums that control which parts of the list item are resolved and returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemGetBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetConflictException
     * @throws \PicturePark\API\Exception\ListItemGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemDetail|\Psr\Http\Message\ResponseInterface
     */
    public function listItemGet(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGet($id, $queryParameters), $fetch);
    }
    /**
    * Updates a single list item.
    *
    * @param string $id The list item ID.
    * @param \PicturePark\API\Model\ListItemUpdateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the list item are resolved and returned.
    *     @var bool $allowMissingDependencies Allows creating list items that refer to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemUpdateBadRequestException
    * @throws \PicturePark\API\Exception\ListItemUpdateUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemUpdateNotFoundException
    * @throws \PicturePark\API\Exception\ListItemUpdateMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemUpdateConflictException
    * @throws \PicturePark\API\Exception\ListItemUpdateTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemUpdateInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ListItemDetail|\Psr\Http\Message\ResponseInterface
    */
    public function listItemUpdate(string $id, \PicturePark\API\Model\ListItemUpdateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemUpdate($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Restores a previously deleted list item.
    *
    * @param string $id The list item ID.
    * @param array $queryParameters {
    *     @var bool $allowMissingDependencies Allows restoring list items that refer to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemRestoreBadRequestException
    * @throws \PicturePark\API\Exception\ListItemRestoreUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemRestoreNotFoundException
    * @throws \PicturePark\API\Exception\ListItemRestoreMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemRestoreConflictException
    * @throws \PicturePark\API\Exception\ListItemRestoreTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemRestoreInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function listItemRestore(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemRestore($id, $queryParameters), $fetch);
    }
    /**
     * Gets the references (list items, contents) to a single list item.
     *
     * @param string $id The ID of the list item.
     * @param \PicturePark\API\Model\ListItemReferencesRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemGetReferencesBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesConflictException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemReferencesResult|\Psr\Http\Message\ResponseInterface
     */
    public function listItemGetReferences(string $id, \PicturePark\API\Model\ListItemReferencesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGetReferences($id, $requestBody), $fetch);
    }
    /**
    * Gets multiple list item details by IDs.
    Can fetch 100 list items at most.
    *
    * @param array $queryParameters {
    *     @var array $ids List of list item IDs.
    *     @var array $resolveBehaviors List of enums that control which parts of the list items are resolved and returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemGetManyBadRequestException
    * @throws \PicturePark\API\Exception\ListItemGetManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemGetManyNotFoundException
    * @throws \PicturePark\API\Exception\ListItemGetManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemGetManyConflictException
    * @throws \PicturePark\API\Exception\ListItemGetManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemGetManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ListItemDetail[]|\Psr\Http\Message\ResponseInterface
    */
    public function listItemGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGetMany($queryParameters), $fetch);
    }
    /**
    * Create a new list item.
    *
    * @param \PicturePark\API\Model\ListItemCreateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the list item are resolved and returned.
    *     @var bool $allowMissingDependencies Allows creating list items that refer to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemCreateBadRequestException
    * @throws \PicturePark\API\Exception\ListItemCreateUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemCreateNotFoundException
    * @throws \PicturePark\API\Exception\ListItemCreateMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemCreateConflictException
    * @throws \PicturePark\API\Exception\ListItemCreateTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemCreateInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\ListItemDetail|\Psr\Http\Message\ResponseInterface
    */
    public function listItemCreate(\PicturePark\API\Model\ListItemCreateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemCreate($requestBody, $queryParameters), $fetch);
    }
    /**
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\ListItemCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemCreateManyConflictException
     * @throws \PicturePark\API\Exception\ListItemCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function listItemCreateMany(\PicturePark\API\Model\ListItemCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemCreateMany($requestBody), $fetch);
    }
    /**
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\ListItemUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyConflictException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function listItemUpdateMany(\PicturePark\API\Model\ListItemUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemUpdateMany($requestBody), $fetch);
    }
    /**
    * The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all files will be deleted.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ListItemDeleteManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemDeleteManyBadRequestException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyNotFoundException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyConflictException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function listItemDeleteMany(\PicturePark\API\Model\ListItemDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemDeleteMany($requestBody), $fetch);
    }
    /**
    * Deletes multiple list items. A filter must be provided to limit the deletion to specific list items.
    The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all files will be hard deleted.
    The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ListItemDeleteManyFilterRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterBadRequestException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterNotFoundException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterConflictException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function listItemDeleteManyByFilter(\PicturePark\API\Model\ListItemDeleteManyFilterRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemDeleteManyByFilter($requestBody), $fetch);
    }
    /**
    * Restores previously deleted list items.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ListItemRestoreManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemRestoreManyBadRequestException
    * @throws \PicturePark\API\Exception\ListItemRestoreManyUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemRestoreManyNotFoundException
    * @throws \PicturePark\API\Exception\ListItemRestoreManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemRestoreManyConflictException
    * @throws \PicturePark\API\Exception\ListItemRestoreManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemRestoreManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function listItemRestoreMany(\PicturePark\API\Model\ListItemRestoreManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemRestoreMany($requestBody), $fetch);
    }
    /**
     * Gets the references (list items, contents) to multiple list items.
     *
     * @param \PicturePark\API\Model\ListItemManyReferencesRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyBadRequestException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyNotFoundException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyConflictException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemGetReferencesManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemReferencesResult|\Psr\Http\Message\ResponseInterface
     */
    public function listItemGetReferencesMany(\PicturePark\API\Model\ListItemManyReferencesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemGetReferencesMany($requestBody), $fetch);
    }
    /**
    * Updates fields of multiple list items. A list of list item IDs must be provided to limit the update to specific list items.
    The same set of changes is applied to all the list items.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsBadRequestException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsNotFoundException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsConflictException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByIdsInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function listItemBatchUpdateFieldsByIds(\PicturePark\API\Model\ListItemFieldsBatchUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemBatchUpdateFieldsByIds($requestBody), $fetch);
    }
    /**
    * Updates fields of multiple list items. A filter must be provided to limit the update to specific list items.
    The same set of changes is applied to all the list items.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterBadRequestException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterUnauthorizedException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterNotFoundException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterMethodNotAllowedException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterConflictException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterTooManyRequestsException
    * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function listItemBatchUpdateFieldsByFilter(\PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemBatchUpdateFieldsByFilter($requestBody), $fetch);
    }
    /**
     * Searches list items as specified in the search request.
     *
     * @param \PicturePark\API\Model\ListItemSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemSearchBadRequestException
     * @throws \PicturePark\API\Exception\ListItemSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemSearchNotFoundException
     * @throws \PicturePark\API\Exception\ListItemSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemSearchConflictException
     * @throws \PicturePark\API\Exception\ListItemSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function listItemSearch(\PicturePark\API\Model\ListItemSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemSearch($requestBody), $fetch);
    }
    /**
     * Aggregates list items as specified in the aggregation request.
     *
     * @param \PicturePark\API\Model\ListItemAggregationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ListItemAggregateBadRequestException
     * @throws \PicturePark\API\Exception\ListItemAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemAggregateNotFoundException
     * @throws \PicturePark\API\Exception\ListItemAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemAggregateConflictException
     * @throws \PicturePark\API\Exception\ListItemAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult|\Psr\Http\Message\ResponseInterface
     */
    public function listItemAggregate(\PicturePark\API\Model\ListItemAggregationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ListItemAggregate($requestBody), $fetch);
    }
    /**
     * Search for live stream events with optional parameters to limit time, document type or use more complex filtering.
     *
     * @param \PicturePark\API\Model\LiveStreamSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\LiveStreamSearchBadRequestException
     * @throws \PicturePark\API\Exception\LiveStreamSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\LiveStreamSearchNotFoundException
     * @throws \PicturePark\API\Exception\LiveStreamSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\LiveStreamSearchConflictException
     * @throws \PicturePark\API\Exception\LiveStreamSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\LiveStreamSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\LiveStreamSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function liveStreamSearch(\PicturePark\API\Model\LiveStreamSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\LiveStreamSearch($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\MetadataGetStatusBadRequestException
     * @throws \PicturePark\API\Exception\MetadataGetStatusUnauthorizedException
     * @throws \PicturePark\API\Exception\MetadataGetStatusNotFoundException
     * @throws \PicturePark\API\Exception\MetadataGetStatusMethodNotAllowedException
     * @throws \PicturePark\API\Exception\MetadataGetStatusConflictException
     * @throws \PicturePark\API\Exception\MetadataGetStatusTooManyRequestsException
     * @throws \PicturePark\API\Exception\MetadataGetStatusInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\MetadataStatus|\Psr\Http\Message\ResponseInterface
     */
    public function metadataGetStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\MetadataGetStatus(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedBadRequestException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedUnauthorizedException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedNotFoundException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedConflictException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedTooManyRequestsException
     * @throws \PicturePark\API\Exception\MetadataUpdateOutdatedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function metadataUpdateOutdated(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\MetadataUpdateOutdated(), $fetch);
    }
    /**
     * This is allowed for both static and dynamic formats. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id ID of the output format.
     * @param \stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatSetDownloadFileNamePatterns(string $id, \stdClass $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetDownloadFileNamePatterns($id, $requestBody), $fetch);
    }
    /**
     * This is allowed for both static and dynamic formats. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatSetDownloadFileNamePatternsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatSetDownloadFileNamePatternsMany(\PicturePark\API\Model\OutputFormatDownloadFileNamePatternUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetDownloadFileNamePatternsMany($requestBody), $fetch);
    }
    /**
    * This is allowed for both static and dynamic formats.
    However, enabling XMP writeback for Thumbnail formats or temporary formats is not allowed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param string $id ID of the output format.
    * @param \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateBadRequestException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateUnauthorizedException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateNotFoundException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateMethodNotAllowedException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateConflictException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateTooManyRequestsException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackStateInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function outputFormatSetXmpWritebackState(string $id, \PicturePark\API\Model\OutputFormatSetXmpWritebackStateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetXmpWritebackState($id, $requestBody), $fetch);
    }
    /**
    * This is allowed for both static and dynamic formats.
    However, enabling XMP writeback for Thumbnail formats or temporary formats is not allowed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\OutputFormatSetXmpWritebackStateManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2BadRequestException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2UnauthorizedException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2NotFoundException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2MethodNotAllowedException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2ConflictException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2TooManyRequestsException
    * @throws \PicturePark\API\Exception\OutputFormatSetXmpWritebackState2InternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function outputFormatSetXmpWritebackState2(\PicturePark\API\Model\OutputFormatSetXmpWritebackStateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatSetXmpWritebackState2($requestBody), $fetch);
    }
    /**
     * Request rendering of the given OutputFormat for a given content.
     *
     * @param \PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewConflictException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewInternalServerErrorException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewPreconditionFailedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatRenderFormatPreview(\PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatRenderFormatPreview($requestBody), $fetch);
    }
    /**
     * Gets multiple output format details by the output format IDs. Can fetch maximum of 100 output formats at once.
     *
     * @param array $queryParameters {
     *     @var array $ids Output format IDs to get information about. If this is omitted, all output formats in the system will be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatGetManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputFormatDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatGetMany($queryParameters), $fetch);
    }
    /**
     * Creates new output format based on the supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\OutputFormat $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatCreateBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateConflictException
     * @throws \PicturePark\API\Exception\OutputFormatCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatCreate(\PicturePark\API\Model\OutputFormat $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatCreate($requestBody), $fetch);
    }
    /**
     * Deletes the output format specified by the ID. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id Output format ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatDeleteBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteConflictException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatDelete($id), $fetch);
    }
    /**
     * Gets the output format by the output format ID.
     *
     * @param string $id Output format ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatGetBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatGetUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatGetNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatGetConflictException
     * @throws \PicturePark\API\Exception\OutputFormatGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputFormatDetail|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatGet($id), $fetch);
    }
    /**
     * Updates the output format specified by the ID and based on supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id Output format ID.
     * @param \PicturePark\API\Model\OutputFormatEditable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatUpdateBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateConflictException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatUpdate(string $id, \PicturePark\API\Model\OutputFormatEditable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatUpdate($id, $requestBody), $fetch);
    }
    /**
     * Creates new output formats based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\OutputFormatCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatCreateMany(\PicturePark\API\Model\OutputFormatCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatCreateMany($requestBody), $fetch);
    }
    /**
     * Updates the output formats specified by the IDs and based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\OutputFormatUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatUpdateMany(\PicturePark\API\Model\OutputFormatUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatUpdateMany($requestBody), $fetch);
    }
    /**
     * Deletes the output formats specified by the IDs. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\OutputFormatDeleteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function outputFormatDeleteMany(\PicturePark\API\Model\OutputFormatDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputFormatDeleteMany($requestBody), $fetch);
    }
    /**
     * Gets a output document by id.
     *
     * @param string $id Output ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputGetBadRequestException
     * @throws \PicturePark\API\Exception\OutputGetUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputGetNotFoundException
     * @throws \PicturePark\API\Exception\OutputGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputGetConflictException
     * @throws \PicturePark\API\Exception\OutputGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputDetail|\Psr\Http\Message\ResponseInterface
     */
    public function outputGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputGet($id), $fetch);
    }
    /**
     * ContentIds must be mandatory filled.
     *
     * @param \PicturePark\API\Model\OutputSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\OutputSearchBadRequestException
     * @throws \PicturePark\API\Exception\OutputSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputSearchNotFoundException
     * @throws \PicturePark\API\Exception\OutputSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputSearchConflictException
     * @throws \PicturePark\API\Exception\OutputSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function outputSearch(\PicturePark\API\Model\OutputSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputSearch($requestBody), $fetch);
    }
    /**
    * Resets retry attempt counters on failed (optionally also completed) outputs and they will be subsequently picked up for re-rendering.
    The number the counters are reset to is determined by a global configuration value. If OutputIds are specified, the rest of the fields are ignored.
    Can reset 100 outputs at most. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\OutputResetRetryAttemptsRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsBadRequestException
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsUnauthorizedException
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsNotFoundException
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsMethodNotAllowedException
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsConflictException
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsTooManyRequestsException
    * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function outputResetRetryAttempts(\PicturePark\API\Model\OutputResetRetryAttemptsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\OutputResetRetryAttempts($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ProfileGetBadRequestException
     * @throws \PicturePark\API\Exception\ProfileGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ProfileGetNotFoundException
     * @throws \PicturePark\API\Exception\ProfileGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ProfileGetConflictException
     * @throws \PicturePark\API\Exception\ProfileGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ProfileGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserProfile|\Psr\Http\Message\ResponseInterface
     */
    public function profileGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ProfileGet(), $fetch);
    }
    /**
     * Updates profile of currently logged in user.
     *
     * @param \PicturePark\API\Model\UserProfileUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ProfileUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ProfileUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ProfileUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ProfileUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ProfileUpdateConflictException
     * @throws \PicturePark\API\Exception\ProfileUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ProfileUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserProfile|\Psr\Http\Message\ResponseInterface
     */
    public function profileUpdate(\PicturePark\API\Model\UserProfileUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ProfileUpdate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionBadRequestException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionUnauthorizedException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionNotFoundException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionConflictException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionTooManyRequestsException
     * @throws \PicturePark\API\Exception\ProfileRequestDeletionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function profileRequestDeletion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ProfileRequestDeletion(), $fetch);
    }
    /**
     * Deletes the schema permission set specified by the ID.
     *
     * @param string $id Schema permission set ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetDelete($id), $fetch);
    }
    /**
     * Gets the schema permission set detail information by the schema permission set ID.
     *
     * @param string $id Schema permission set ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGet($id), $fetch);
    }
    /**
     * Updates the schema permission set specified by the ID and based on supplied request.
     *
     * @param string $id Schema permission set ID.
     * @param \PicturePark\API\Model\SchemaPermissionSetUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetUpdate(string $id, \PicturePark\API\Model\SchemaPermissionSetUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetUpdate($id, $requestBody), $fetch);
    }
    /**
     * Gets multiple schema permission set details by the schema permission set IDs.
     *
     * @param array $queryParameters {
     *     @var array $ids Ids
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGetMany($queryParameters), $fetch);
    }
    /**
     * Creates new schema permission set based on supplied request.
     *
     * @param \PicturePark\API\Model\SchemaPermissionSetCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaPermissionSetDetail|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetCreate(\PicturePark\API\Model\SchemaPermissionSetCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetCreate($requestBody), $fetch);
    }
    /**
     * Transfers ownership of schema permission set to supplied user.
     *
     * @param string $id Schema permission set ID.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetTransferOwnership(string $id, \PicturePark\API\Model\PermissionSetOwnershipTransferRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetTransferOwnership($id, $requestBody), $fetch);
    }
    /**
     * Returns permissions for the schema permission set for the current user.
     *
     * @param string $id Schema permission set ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetGetPermissions(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGetPermissions($id), $fetch);
    }
    /**
     * Creates new schema permission sets based on supplied requests.
     *
     * @param \PicturePark\API\Model\SchemaPermissionSetCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetCreateMany(\PicturePark\API\Model\SchemaPermissionSetCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetCreateMany($requestBody), $fetch);
    }
    /**
     * Updates the schema permission sets specified by the IDs and based on supplied request.
     *
     * @param \PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetUpdateMany(\PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetUpdateMany($requestBody), $fetch);
    }
    /**
     * Deletes the schema permission sets specified by the IDs.
     *
     * @param \PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetDeleteMany(\PicturePark\API\Model\PermissionSetDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetDeleteMany($requestBody), $fetch);
    }
    /**
     * Transfers ownership of multiple schema permission sets to respective supplied users.
     *
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetTransferOwnershipMany(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetTransferOwnershipMany($requestBody), $fetch);
    }
    /**
     * Returns permissions for multiple schema permission sets for the current user.
     *
     * @param array $queryParameters {
     *     @var array $ids Ids
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetGetPermissionsManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetUserPermissionRights[]|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetGetPermissionsMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetGetPermissionsMany($queryParameters), $fetch);
    }
    /**
     * Searches schema permission sets as specified in the search request.
     *
     * @param \PicturePark\API\Model\PermissionSetSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\PermissionSetSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function schemaPermissionSetSearch(\PicturePark\API\Model\PermissionSetSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaPermissionSetSearch($requestBody), $fetch);
    }
    /**
    * Deletes an existing schema.
    Depending on how much the schema is referenced, the operation can take a lot of time.
    *
    * @param string $id The schema ID.
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaDeleteBadRequestException
    * @throws \PicturePark\API\Exception\SchemaDeleteUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaDeleteNotFoundException
    * @throws \PicturePark\API\Exception\SchemaDeleteMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaDeleteConflictException
    * @throws \PicturePark\API\Exception\SchemaDeleteTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaDeleteInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function schemaDelete(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaDelete($id, $queryParameters), $fetch);
    }
    /**
     * Gets the schema detail by schema ID.
     *
     * @param string $id The schema ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaGetBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetConflictException
     * @throws \PicturePark\API\Exception\SchemaGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail|\Psr\Http\Message\ResponseInterface
     */
    public function schemaGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGet($id), $fetch);
    }
    /**
    * Updates an existing schema.
    Depending on how much the schema is referenced by existing data, the operation can take a lot of time.
    *
    * @param string $id The schema ID.
    * @param \PicturePark\API\Model\SchemaUpdateRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaUpdateBadRequestException
    * @throws \PicturePark\API\Exception\SchemaUpdateUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaUpdateNotFoundException
    * @throws \PicturePark\API\Exception\SchemaUpdateMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaUpdateConflictException
    * @throws \PicturePark\API\Exception\SchemaUpdateTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaUpdateInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\SchemaUpdateResult|\Psr\Http\Message\ResponseInterface
    */
    public function schemaUpdate(string $id, \PicturePark\API\Model\SchemaUpdateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaUpdate($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Checks if the schema already exists.
     *
     * @param string $id The schema ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaExistsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaExistsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaExistsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaExistsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaExistsConflictException
     * @throws \PicturePark\API\Exception\SchemaExistsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaExistsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaExistsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function schemaExists(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaExists($id), $fetch);
    }
    /**
    * Checks if the field in the specified schema already exists.
    Also returns a flag indicating if the field was previously deleted and the ID can therefore not be reused.
    *
    * @param string $schemaId The schema ID.
    * @param string $fieldId The field ID.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaFieldExistsBadRequestException
    * @throws \PicturePark\API\Exception\SchemaFieldExistsUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaFieldExistsNotFoundException
    * @throws \PicturePark\API\Exception\SchemaFieldExistsMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaFieldExistsConflictException
    * @throws \PicturePark\API\Exception\SchemaFieldExistsTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaFieldExistsInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\FieldExistsResponse|\Psr\Http\Message\ResponseInterface
    */
    public function schemaFieldExists(string $schemaId, string $fieldId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaFieldExists($schemaId, $fieldId), $fetch);
    }
    /**
     * Can fetch referencing schemas for 100 schemas at most.
     *
     * @param string $id The schema ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaGetReferencedBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedConflictException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function schemaGetReferenced(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetReferenced($id), $fetch);
    }
    /**
    * Transfer ownership of the schema specified in 
    *
    * @param string $id The schema ID.
    * @param \PicturePark\API\Model\SchemaOwnershipTransferRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipBadRequestException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipNotFoundException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipConflictException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function schemaTransferOwnership(string $id, \PicturePark\API\Model\SchemaOwnershipTransferRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaTransferOwnership($id, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Gets multiple schema details by given schema IDs.
    Can fetch 100 schema details at most.
    *
    * @param array $queryParameters {
    *     @var array $ids Comma separated list of schema IDs.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaGetManyBadRequestException
    * @throws \PicturePark\API\Exception\SchemaGetManyUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaGetManyNotFoundException
    * @throws \PicturePark\API\Exception\SchemaGetManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaGetManyConflictException
    * @throws \PicturePark\API\Exception\SchemaGetManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaGetManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\SchemaDetail[]|\Psr\Http\Message\ResponseInterface
    */
    public function schemaGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetMany($queryParameters), $fetch);
    }
    /**
    * Create a new schema.
    *
    * @param \PicturePark\API\Model\SchemaCreateRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaCreateBadRequestException
    * @throws \PicturePark\API\Exception\SchemaCreateUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaCreateNotFoundException
    * @throws \PicturePark\API\Exception\SchemaCreateMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaCreateConflictException
    * @throws \PicturePark\API\Exception\SchemaCreateTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaCreateInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\SchemaCreateResult|\Psr\Http\Message\ResponseInterface
    */
    public function schemaCreate(\PicturePark\API\Model\SchemaCreateRequest $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaCreate($requestBody, $queryParameters), $fetch);
    }
    /**
     * Creates new schemas. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\SchemaCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaCreateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function schemaCreateMany(\PicturePark\API\Model\SchemaCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaCreateMany($requestBody), $fetch);
    }
    /**
    * Updates multiple existing schemas.
    Prefer this whenever you have updates for multiple schemas. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\SchemaUpdateManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaUpdateManyBadRequestException
    * @throws \PicturePark\API\Exception\SchemaUpdateManyUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaUpdateManyNotFoundException
    * @throws \PicturePark\API\Exception\SchemaUpdateManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaUpdateManyConflictException
    * @throws \PicturePark\API\Exception\SchemaUpdateManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaUpdateManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function schemaUpdateMany(\PicturePark\API\Model\SchemaUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaUpdateMany($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $ids The schema IDs.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedConflictException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetManyReferencedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function schemaGetManyReferenced(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetManyReferenced($queryParameters), $fetch);
    }
    /**
    * Transfers ownership of multiple schemas to specified user. The target user must have the ManageSchemas user right.
    The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\SchemaOwnershipTransferManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyBadRequestException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyNotFoundException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyConflictException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaTransferOwnershipManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function schemaTransferOwnershipMany(\PicturePark\API\Model\SchemaOwnershipTransferManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaTransferOwnershipMany($requestBody), $fetch);
    }
    /**
     * Searches schemas as specified in the search request.
     *
     * @param \PicturePark\API\Model\SchemaSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\SchemaSearchBadRequestException
     * @throws \PicturePark\API\Exception\SchemaSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaSearchNotFoundException
     * @throws \PicturePark\API\Exception\SchemaSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaSearchConflictException
     * @throws \PicturePark\API\Exception\SchemaSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function schemaSearch(\PicturePark\API\Model\SchemaSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaSearch($requestBody), $fetch);
    }
    /**
    * Search the indexed fields based on the search request.
    An indexed field object is created for a schema field only if that field has one of the following properties set to true: Index,
    SimpleSearch or Sortable.
    All indexed fields are aggregated and returned as a a single list.
    *
    * @param \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsBadRequestException
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsNotFoundException
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsConflictException
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\IndexField[]|\Psr\Http\Message\ResponseInterface
    */
    public function schemaGetIndexFields(\PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaGetIndexFields($requestBody), $fetch);
    }
    /**
    * Imports schemas and list items. The file must already be uploaded before calling this endpoint. See [Transfer](#tag/Transfer).
    The operation is executed asynchronous and it is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\SchemaImportRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\SchemaTransferImportBadRequestException
    * @throws \PicturePark\API\Exception\SchemaTransferImportUnauthorizedException
    * @throws \PicturePark\API\Exception\SchemaTransferImportNotFoundException
    * @throws \PicturePark\API\Exception\SchemaTransferImportMethodNotAllowedException
    * @throws \PicturePark\API\Exception\SchemaTransferImportConflictException
    * @throws \PicturePark\API\Exception\SchemaTransferImportTooManyRequestsException
    * @throws \PicturePark\API\Exception\SchemaTransferImportInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\Transfer|\Psr\Http\Message\ResponseInterface
    */
    public function schemaTransferImport(\PicturePark\API\Model\SchemaImportRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\SchemaTransferImport($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $token Share token
     * @param array $queryParameters {
     *     @var string $lang Language code
     *     @var array $resolveBehaviors List of enums that control which parts of the share are resolved and returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareGetShareJsonBadRequestException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonNotFoundException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonConflictException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareDetail|\Psr\Http\Message\ResponseInterface
     */
    public function shareGetShareJson(string $token, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareGetShareJson($token, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $token Share token
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image
     *     @var int $height Optional height in pixels to resize image
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareDownloadBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadPreconditionFailedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function shareDownload(string $token, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareDownload($token, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Download single content in a specific output format (or automatically determined format if none is specified). To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     *
     * @param string $token Share token
     * @param string $contentId The content id
     * @param string $outputFormatId The output format id
     * @param array $queryParameters {
     *     @var int $width Optional width in pixels to resize image
     *     @var int $height Optional height in pixels to resize image
     * }
     * @param array $headerParameters {
     *     @var string $range The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentPreconditionFailedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function shareDownloadSingleContent(string $token, string $contentId, string $outputFormatId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareDownloadSingleContent($token, $contentId, $outputFormatId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get share by id (basic or embed).
     *
     * @param string $id Share Id (not token, use [GetShareJson](#operation/Share_GetShareJson) to get share by token)
     * @param array $queryParameters {
     *     @var array $resolveBehaviors List of enums that control which parts of the share are resolved and returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareGetBadRequestException
     * @throws \PicturePark\API\Exception\ShareGetUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareGetNotFoundException
     * @throws \PicturePark\API\Exception\ShareGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareGetConflictException
     * @throws \PicturePark\API\Exception\ShareGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareDetail|\Psr\Http\Message\ResponseInterface
     */
    public function shareGet(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareGet($id, $queryParameters), $fetch);
    }
    /**
     * Updates a single share. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id The share id.
     * @param \PicturePark\API\Model\ShareBaseUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareUpdateBadRequestException
     * @throws \PicturePark\API\Exception\ShareUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareUpdateNotFoundException
     * @throws \PicturePark\API\Exception\ShareUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareUpdateConflictException
     * @throws \PicturePark\API\Exception\ShareUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function shareUpdate(string $id, \PicturePark\API\Model\ShareBaseUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareUpdate($id, $requestBody), $fetch);
    }
    /**
     * Create a new share (basic or embed). The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\ShareBaseCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareCreateBadRequestException
     * @throws \PicturePark\API\Exception\ShareCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareCreateNotFoundException
     * @throws \PicturePark\API\Exception\ShareCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareCreateConflictException
     * @throws \PicturePark\API\Exception\ShareCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function shareCreate(\PicturePark\API\Model\ShareBaseCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareCreate($requestBody), $fetch);
    }
    /**
     * Deletes multiple shares. Returns a business process which will hold a batch response detail containing information about successful and failed rows. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\ShareDeleteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\ShareDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\ShareDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDeleteManyConflictException
     * @throws \PicturePark\API\Exception\ShareDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function shareDeleteMany(\PicturePark\API\Model\ShareDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareDeleteMany($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\ShareRevokeManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareRevokeBadRequestException
     * @throws \PicturePark\API\Exception\ShareRevokeUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareRevokeNotFoundException
     * @throws \PicturePark\API\Exception\ShareRevokeMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareRevokeConflictException
     * @throws \PicturePark\API\Exception\ShareRevokeTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareRevokeInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function shareRevoke(\PicturePark\API\Model\ShareRevokeManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareRevoke($requestBody), $fetch);
    }
    /**
     * Aggregates shares either created by or sent to current user.
     *
     * @param \PicturePark\API\Model\ShareAggregationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareAggregateBadRequestException
     * @throws \PicturePark\API\Exception\ShareAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareAggregateNotFoundException
     * @throws \PicturePark\API\Exception\ShareAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareAggregateConflictException
     * @throws \PicturePark\API\Exception\ShareAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult|\Psr\Http\Message\ResponseInterface
     */
    public function shareAggregate(\PicturePark\API\Model\ShareAggregationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareAggregate($requestBody), $fetch);
    }
    /**
     * Search shares either created by or sent to current user.
     *
     * @param \PicturePark\API\Model\ShareSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\ShareSearchBadRequestException
     * @throws \PicturePark\API\Exception\ShareSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareSearchNotFoundException
     * @throws \PicturePark\API\Exception\ShareSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareSearchConflictException
     * @throws \PicturePark\API\Exception\ShareSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function shareSearch(\PicturePark\API\Model\ShareSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\ShareSearch($requestBody), $fetch);
    }
    /**
     * For transfers of type FileUpload or FileUploadAutoImport, after creating the transfer, wait for the returned BusinessProcess to hit the "Created" state before attempting to upload files.
     *
     * @param \PicturePark\API\Model\CreateTransferRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferCreateBadRequestException
     * @throws \PicturePark\API\Exception\TransferCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferCreateNotFoundException
     * @throws \PicturePark\API\Exception\TransferCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferCreateConflictException
     * @throws \PicturePark\API\Exception\TransferCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Transfer|\Psr\Http\Message\ResponseInterface
     */
    public function transferCreate(\PicturePark\API\Model\CreateTransferRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferCreate($requestBody), $fetch);
    }
    /**
     * A transfer cannot be deleted if it's currently in the UploadInProgress or ImportInProgress state.
     *
     * @param string $id ID of transfer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferDeleteBadRequestException
     * @throws \PicturePark\API\Exception\TransferDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferDeleteNotFoundException
     * @throws \PicturePark\API\Exception\TransferDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferDeleteConflictException
     * @throws \PicturePark\API\Exception\TransferDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function transferDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferDelete($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of transfer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferGetBadRequestException
     * @throws \PicturePark\API\Exception\TransferGetUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferGetNotFoundException
     * @throws \PicturePark\API\Exception\TransferGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferGetConflictException
     * @throws \PicturePark\API\Exception\TransferGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\TransferDetail|\Psr\Http\Message\ResponseInterface
     */
    public function transferGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferGet($id), $fetch);
    }
    /**
    * This triggers the import of a Transfer, creating Contents. All items in the Transfer will be enqueued for rendering.
               
    Wait for completion on the Business process ID that is returned to wait for import completion.
    Note: Before attempting to import a Transfer, the transfer has to be in the TransferReady state.
    *
    * @param string $id ID of transfer.
    * @param \PicturePark\API\Model\ImportTransferRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\TransferImportBadRequestException
    * @throws \PicturePark\API\Exception\TransferImportUnauthorizedException
    * @throws \PicturePark\API\Exception\TransferImportNotFoundException
    * @throws \PicturePark\API\Exception\TransferImportMethodNotAllowedException
    * @throws \PicturePark\API\Exception\TransferImportConflictException
    * @throws \PicturePark\API\Exception\TransferImportTooManyRequestsException
    * @throws \PicturePark\API\Exception\TransferImportInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\Transfer|\Psr\Http\Message\ResponseInterface
    */
    public function transferImport(string $id, \PicturePark\API\Model\ImportTransferRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferImport($id, $requestBody), $fetch);
    }
    /**
    * This triggers the import of selected items in a Transfer, creating contents. All imported items will be enqueued for rendering.
               
    Wait for completion on the Business process ID that is returned to wait for import completion.
               
    Transfer will transition to state ImportDone if no files of the transfer remain for import.
    Transfer will transition to state TransferReady if any files of the transfer remain for import.
    *
    * @param string $id ID of transfer.
    * @param \PicturePark\API\Model\ImportTransferPartialRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\TransferPartialImportBadRequestException
    * @throws \PicturePark\API\Exception\TransferPartialImportUnauthorizedException
    * @throws \PicturePark\API\Exception\TransferPartialImportNotFoundException
    * @throws \PicturePark\API\Exception\TransferPartialImportMethodNotAllowedException
    * @throws \PicturePark\API\Exception\TransferPartialImportConflictException
    * @throws \PicturePark\API\Exception\TransferPartialImportTooManyRequestsException
    * @throws \PicturePark\API\Exception\TransferPartialImportInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\Transfer|\Psr\Http\Message\ResponseInterface
    */
    public function transferPartialImport(string $id, \PicturePark\API\Model\ImportTransferPartialRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferPartialImport($id, $requestBody), $fetch);
    }
    /**
    * Requests cancellation of transfer.
    Note: Transfers can only be cancelled when state is UploadInProgress.
    *
    * @param string $id ID of transfer.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\TransferCancelBadRequestException
    * @throws \PicturePark\API\Exception\TransferCancelUnauthorizedException
    * @throws \PicturePark\API\Exception\TransferCancelNotFoundException
    * @throws \PicturePark\API\Exception\TransferCancelMethodNotAllowedException
    * @throws \PicturePark\API\Exception\TransferCancelConflictException
    * @throws \PicturePark\API\Exception\TransferCancelTooManyRequestsException
    * @throws \PicturePark\API\Exception\TransferCancelInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function transferCancel(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferCancel($id), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\TransferSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferSearchBadRequestException
     * @throws \PicturePark\API\Exception\TransferSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferSearchNotFoundException
     * @throws \PicturePark\API\Exception\TransferSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferSearchConflictException
     * @throws \PicturePark\API\Exception\TransferSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\TransferSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function transferSearch(\PicturePark\API\Model\TransferSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferSearch($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID of file transfer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferGetFileBadRequestException
     * @throws \PicturePark\API\Exception\TransferGetFileUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferGetFileNotFoundException
     * @throws \PicturePark\API\Exception\TransferGetFileMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferGetFileConflictException
     * @throws \PicturePark\API\Exception\TransferGetFileTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferGetFileInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FileTransferDetail|\Psr\Http\Message\ResponseInterface
     */
    public function transferGetFile(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferGetFile($id), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\FileTransferSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferSearchFilesBadRequestException
     * @throws \PicturePark\API\Exception\TransferSearchFilesUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferSearchFilesNotFoundException
     * @throws \PicturePark\API\Exception\TransferSearchFilesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferSearchFilesConflictException
     * @throws \PicturePark\API\Exception\TransferSearchFilesTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferSearchFilesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FileTransferSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function transferSearchFiles(\PicturePark\API\Model\FileTransferSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferSearchFiles($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\FileTransferDeleteRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferDeleteFilesBadRequestException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesNotFoundException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesConflictException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferDeleteFilesInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function transferDeleteFiles(\PicturePark\API\Model\FileTransferDeleteRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferDeleteFiles($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\TransferGetBlacklistBadRequestException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistUnauthorizedException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistNotFoundException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistMethodNotAllowedException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistConflictException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistTooManyRequestsException
     * @throws \PicturePark\API\Exception\TransferGetBlacklistInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\Blacklist|\Psr\Http\Message\ResponseInterface
     */
    public function transferGetBlacklist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferGetBlacklist(), $fetch);
    }
    /**
    * Uploads the specified chunk data.
               
    Use `Content-Type: application/octet-stream` for uploading chunked data.
    The chunk data should be contained in the body of your request.
               
    To upload a file, split it into chunks of reasonable size (accepted range is 1MB-100MB). The last chunk may be smaller than 1MB.
    *
    * @param string $transferId ID of transfer.
    * @param string $requestId Identifier of file.
    * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
    * @param array $queryParameters {
    *     @var int $ChunkNumber Information about chunk.
    *     @var int $CurrentChunkSize Information about chunk.
    *     @var int $TotalSize Information about chunk.
    *     @var int $TotalChunks Information about chunk.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\TransferUploadFileBadRequestException
    * @throws \PicturePark\API\Exception\TransferUploadFileUnauthorizedException
    * @throws \PicturePark\API\Exception\TransferUploadFileNotFoundException
    * @throws \PicturePark\API\Exception\TransferUploadFileMethodNotAllowedException
    * @throws \PicturePark\API\Exception\TransferUploadFileConflictException
    * @throws \PicturePark\API\Exception\TransferUploadFileTooManyRequestsException
    * @throws \PicturePark\API\Exception\TransferUploadFileInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function transferUploadFile(string $transferId, string $requestId, $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\TransferUploadFile($transferId, $requestId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\UserRoleSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleSearchBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleSearchNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleSearchConflictException
     * @throws \PicturePark\API\Exception\UserRoleSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleSearch(\PicturePark\API\Model\UserRoleSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleSearch($requestBody), $fetch);
    }
    /**
     * Gets multiple user role details by the user role IDs. Can fetch maximum of 100 user roles at once.
     *
     * @param array $queryParameters {
     *     @var array $ids User role IDs to get information about.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleGetManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleGetManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleGetManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleGetMany($queryParameters), $fetch);
    }
    /**
     * Creates new user role based on the supplied request.
     *
     * @param \PicturePark\API\Model\UserRoleCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleCreateBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleCreateNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleCreateConflictException
     * @throws \PicturePark\API\Exception\UserRoleCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleCreate(\PicturePark\API\Model\UserRoleCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleCreate($requestBody), $fetch);
    }
    /**
     * Creates new user roles based on supplied requests.
     *
     * @param \PicturePark\API\Model\UserRoleCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleCreateMany(\PicturePark\API\Model\UserRoleCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleCreateMany($requestBody), $fetch);
    }
    /**
     * Updates the user roles specified by the IDs and based on supplied requests.
     *
     * @param \PicturePark\API\Model\UserRoleUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleUpdateMany(\PicturePark\API\Model\UserRoleUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleUpdateMany($requestBody), $fetch);
    }
    /**
     * Deletes the user roles specified by the IDs.
     *
     * @param \PicturePark\API\Model\UserRoleDeleteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleDeleteMany(\PicturePark\API\Model\UserRoleDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleDeleteMany($requestBody), $fetch);
    }
    /**
     * Deletes the user role specified by the ID.
     *
     * @param string $id User role ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleDeleteBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleDeleteConflictException
     * @throws \PicturePark\API\Exception\UserRoleDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleDelete($id), $fetch);
    }
    /**
     * Gets the user role by the user role ID.
     *
     * @param string $id User role ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleGetBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleGetUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleGetNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleGetConflictException
     * @throws \PicturePark\API\Exception\UserRoleGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleGet($id), $fetch);
    }
    /**
     * Updates the user role specified by the ID and based on supplied request.
     *
     * @param string $id User role ID.
     * @param \PicturePark\API\Model\UserRoleEditable $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRoleUpdateBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleUpdateConflictException
     * @throws \PicturePark\API\Exception\UserRoleUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userRoleUpdate(string $id, \PicturePark\API\Model\UserRoleEditable $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRoleUpdate($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id User ID to search for.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserGetBadRequestException
     * @throws \PicturePark\API\Exception\UserGetUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetNotFoundException
     * @throws \PicturePark\API\Exception\UserGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetConflictException
     * @throws \PicturePark\API\Exception\UserGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserGet($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id User ID to action on.
     * @param \PicturePark\API\Model\UserUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserUpdateBadRequestException
     * @throws \PicturePark\API\Exception\UserUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserUpdateNotFoundException
     * @throws \PicturePark\API\Exception\UserUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserUpdateConflictException
     * @throws \PicturePark\API\Exception\UserUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userUpdate(string $id, \PicturePark\API\Model\UserUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserUpdate($id, $requestBody), $fetch);
    }
    /**
    * Does not affect AuthorizationState of user.
    If User is already in desired state, this will be returned as error.
    *
    * @param string $id User ID to action on.
    * @param \PicturePark\API\Model\UserLockRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\UserLockBadRequestException
    * @throws \PicturePark\API\Exception\UserLockUnauthorizedException
    * @throws \PicturePark\API\Exception\UserLockNotFoundException
    * @throws \PicturePark\API\Exception\UserLockMethodNotAllowedException
    * @throws \PicturePark\API\Exception\UserLockConflictException
    * @throws \PicturePark\API\Exception\UserLockTooManyRequestsException
    * @throws \PicturePark\API\Exception\UserLockInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function userLock(string $id, \PicturePark\API\Model\UserLockRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserLock($id, $requestBody), $fetch);
    }
    /**
    * Does not affect AuthorizationState of users
    Users which are already in desired state will be returned as errors. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\UserLockManyRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \PicturePark\API\Exception\UserLockManyBadRequestException
    * @throws \PicturePark\API\Exception\UserLockManyUnauthorizedException
    * @throws \PicturePark\API\Exception\UserLockManyNotFoundException
    * @throws \PicturePark\API\Exception\UserLockManyMethodNotAllowedException
    * @throws \PicturePark\API\Exception\UserLockManyConflictException
    * @throws \PicturePark\API\Exception\UserLockManyTooManyRequestsException
    * @throws \PicturePark\API\Exception\UserLockManyInternalServerErrorException
    *
    * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
    */
    public function userLockMany(\PicturePark\API\Model\UserLockManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserLockMany($requestBody), $fetch);
    }
    /**
     * Users with AuthorizationState != ToBeReviewed are considered reviewed.
     *
     * @param string $id User ID to action on.
     * @param \PicturePark\API\Model\UserReviewRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserReviewBadRequestException
     * @throws \PicturePark\API\Exception\UserReviewUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReviewNotFoundException
     * @throws \PicturePark\API\Exception\UserReviewMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReviewConflictException
     * @throws \PicturePark\API\Exception\UserReviewTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReviewInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userReview(string $id, \PicturePark\API\Model\UserReviewRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReview($id, $requestBody), $fetch);
    }
    /**
     * Users with AuthorizationState != ToBeReviewed are considered reviewed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\UserReviewManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserReviewManyBadRequestException
     * @throws \PicturePark\API\Exception\UserReviewManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReviewManyNotFoundException
     * @throws \PicturePark\API\Exception\UserReviewManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReviewManyConflictException
     * @throws \PicturePark\API\Exception\UserReviewManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReviewManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function userReviewMany(\PicturePark\API\Model\UserReviewManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReviewMany($requestBody), $fetch);
    }
    /**
     * Formally invites a user, e.g. sends an invitation email. Transitions AuthorizationState to Invited, implicitly reviews user.
     *
     * @param string $id User ID to action on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserInviteBadRequestException
     * @throws \PicturePark\API\Exception\UserInviteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserInviteNotFoundException
     * @throws \PicturePark\API\Exception\UserInviteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserInviteConflictException
     * @throws \PicturePark\API\Exception\UserInviteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserInviteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userInvite(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserInvite($id), $fetch);
    }
    /**
     * Formally invites users, e.g. sends an invitation email. Transitions to Invited, implicitly reviews user. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\UserInviteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserInviteManyBadRequestException
     * @throws \PicturePark\API\Exception\UserInviteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserInviteManyNotFoundException
     * @throws \PicturePark\API\Exception\UserInviteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserInviteManyConflictException
     * @throws \PicturePark\API\Exception\UserInviteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserInviteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function userInviteMany(\PicturePark\API\Model\UserInviteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserInviteMany($requestBody), $fetch);
    }
    /**
     * Formally re-invites a user, e.g. sends an invitation email.
     *
     * @param string $id User ID to action on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserReinviteBadRequestException
     * @throws \PicturePark\API\Exception\UserReinviteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReinviteNotFoundException
     * @throws \PicturePark\API\Exception\UserReinviteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReinviteConflictException
     * @throws \PicturePark\API\Exception\UserReinviteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReinviteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userReinvite(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReinvite($id), $fetch);
    }
    /**
     * Formally re-invites users, e.g. sends an invitation email. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\UserReinviteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserReInviteManyBadRequestException
     * @throws \PicturePark\API\Exception\UserReInviteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReInviteManyNotFoundException
     * @throws \PicturePark\API\Exception\UserReInviteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReInviteManyConflictException
     * @throws \PicturePark\API\Exception\UserReInviteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReInviteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function userReInviteMany(\PicturePark\API\Model\UserReinviteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserReInviteMany($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\UserRoleAssignManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserAssignUserRolesBadRequestException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesUnauthorizedException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesNotFoundException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesConflictException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserAssignUserRolesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function userAssignUserRoles(\PicturePark\API\Model\UserRoleAssignManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserAssignUserRoles($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id User ID
     * @param \PicturePark\API\Model\UserDeleteRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserDeleteBadRequestException
     * @throws \PicturePark\API\Exception\UserDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\UserDeleteNotFoundException
     * @throws \PicturePark\API\Exception\UserDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserDeleteConflictException
     * @throws \PicturePark\API\Exception\UserDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userDelete(string $id, \PicturePark\API\Model\UserDeleteRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserDelete($id, $requestBody), $fetch);
    }
    /**
     * Restores previously deleted user, who was not cleaned up yet.
     *
     * @param string $id User ID to action on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserRestoreBadRequestException
     * @throws \PicturePark\API\Exception\UserRestoreUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRestoreNotFoundException
     * @throws \PicturePark\API\Exception\UserRestoreMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRestoreConflictException
     * @throws \PicturePark\API\Exception\UserRestoreTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRestoreInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userRestore(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserRestore($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id User ID to action on.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestBadRequestException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestUnauthorizedException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestNotFoundException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestConflictException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserCancelDeletionRequestInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userCancelDeletionRequest(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserCancelDeletionRequest($id), $fetch);
    }
    /**
     * 
     *
     * @param string $tokenId ID of the owner token.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenBadRequestException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenNotFoundException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenConflictException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetByOwnerTokenInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userGetByOwnerToken(string $tokenId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserGetByOwnerToken($tokenId), $fetch);
    }
    /**
     * User will not be invited.
     *
     * @param \PicturePark\API\Model\UserCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserCreateBadRequestException
     * @throws \PicturePark\API\Exception\UserCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserCreateNotFoundException
     * @throws \PicturePark\API\Exception\UserCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserCreateConflictException
     * @throws \PicturePark\API\Exception\UserCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail|\Psr\Http\Message\ResponseInterface
     */
    public function userCreate(\PicturePark\API\Model\UserCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserCreate($requestBody), $fetch);
    }
    /**
     * Can fetch 100 users at most.
     *
     * @param array $queryParameters {
     *     @var array $ids User IDs.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserGetManyBadRequestException
     * @throws \PicturePark\API\Exception\UserGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserGetManyNotFoundException
     * @throws \PicturePark\API\Exception\UserGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserGetManyConflictException
     * @throws \PicturePark\API\Exception\UserGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function userGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserGetMany($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\UserSearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserSearchBadRequestException
     * @throws \PicturePark\API\Exception\UserSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\UserSearchNotFoundException
     * @throws \PicturePark\API\Exception\UserSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserSearchConflictException
     * @throws \PicturePark\API\Exception\UserSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserSearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function userSearch(\PicturePark\API\Model\UserSearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserSearch($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\UserAggregationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserAggregateBadRequestException
     * @throws \PicturePark\API\Exception\UserAggregateUnauthorizedException
     * @throws \PicturePark\API\Exception\UserAggregateNotFoundException
     * @throws \PicturePark\API\Exception\UserAggregateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserAggregateConflictException
     * @throws \PicturePark\API\Exception\UserAggregateTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserAggregateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult|\Psr\Http\Message\ResponseInterface
     */
    public function userAggregate(\PicturePark\API\Model\UserAggregationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserAggregate($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\UserUpdateIdentityProviderManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyBadRequestException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyNotFoundException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyConflictException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserUpdateIdentityProviderManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function userUpdateIdentityProviderMany(\PicturePark\API\Model\UserUpdateIdentityProviderManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\UserUpdateIdentityProviderMany($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetAvailableTargetsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingTargets|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingGetAvailableTargets(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingGetAvailableTargets(), $fetch);
    }
    /**
     * 
     *
     * @param \PicturePark\API\Model\XmpMappingEntrySearchRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingSearchBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingSearchNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingSearchConflictException
     * @throws \PicturePark\API\Exception\XmpMappingSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntrySearchResult|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingSearch(\PicturePark\API\Model\XmpMappingEntrySearchRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingSearch($requestBody), $fetch);
    }
    /**
     * Deletes the xmp mapping specified by the ID. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id Xmp mapping ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingDeleteBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteConflictException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingDelete($id), $fetch);
    }
    /**
     * Gets the xmp mapping by the xmp mapping ID.
     *
     * @param string $id Xmp mapping ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingGetBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntry|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingGet($id), $fetch);
    }
    /**
     * Updates the xmp mapping specified by the ID and based on supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param string $id Xmp mapping ID.
     * @param \PicturePark\API\Model\XmpMappingEntry $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingUpdateBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateConflictException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingUpdate(string $id, \PicturePark\API\Model\XmpMappingEntry $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingUpdate($id, $requestBody), $fetch);
    }
    /**
     * Gets multiple xmp mapping details by the xmp mapping IDs. Can fetch maximum of 100 xmp mappings at once.
     *
     * @param array $queryParameters {
     *     @var array $ids Xmp mapping IDs to get information about.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingGetManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntry[]|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingGetMany(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingGetMany($queryParameters), $fetch);
    }
    /**
     * Creates new xmp mapping based on the supplied request. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\XmpMappingEntryCreateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingCreateBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateConflictException
     * @throws \PicturePark\API\Exception\XmpMappingCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingCreate(\PicturePark\API\Model\XmpMappingEntryCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingCreate($requestBody), $fetch);
    }
    /**
     * Creates new xmp mappings based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\XmpMappingEntryCreateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingCreateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingCreateMany(\PicturePark\API\Model\XmpMappingEntryCreateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingCreateMany($requestBody), $fetch);
    }
    /**
     * Updates the xmp mappings specified by the IDs and based on supplied requests. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\XmpMappingEntryUpdateManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingUpdateMany(\PicturePark\API\Model\XmpMappingEntryUpdateManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingUpdateMany($requestBody), $fetch);
    }
    /**
     * Deletes the xmp mappings specified by the IDs. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\XmpMappingEntryDeleteManyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingDeleteManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess|\Psr\Http\Message\ResponseInterface
     */
    public function xmpMappingDeleteMany(\PicturePark\API\Model\XmpMappingEntryDeleteManyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PicturePark\API\Endpoint\XmpMappingDeleteMany($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \PicturePark\API\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}