<?php

namespace Jane\Generated\DigitalOcean;

class Client extends \Jane\Generated\DigitalOcean\Runtime\Client\Client
{
    /**
     * To list all available 1-Click applications, send a GET request to `/v2/1-clicks`. The `type` may
     * be provided as query paramater in order to restrict results to a certain type of 1-Click, for
     * example: `/v2/1-clicks?type=droplet`. Current supported types are `kubernetes` and `droplet`.
     *
     * The response will be a JSON object with a key called `1_clicks`. This will be set to an array of
     * 1-Click application data, each of which will contain the the slug and type for the 1-Click.
     *
     * @param array{
     *    "type"?: string, //Restrict results to a certain type of 1-Click.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseOneClicksAll|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function oneClicksList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\OneClicksList($queryParameters), $fetch);
    }
    /**
     * To install a Kubernetes 1-Click application on a cluster, send a POST request to
     * `/v2/1-clicks/kubernetes`. The `addon_slugs` and `cluster_uuid` must be provided as body
     * parameter in order to specify which 1-Click application(s) to install. To list all available
     * 1-Click Kubernetes applications, send a request to `/v2/1-clicks?type=kubernetes`.
     *
     * @param \Jane\Generated\DigitalOcean\Model\OneClicksCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\OneClicksInstallKubernetesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseOneClicksCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function oneClicksInstallKubernetes(\Jane\Generated\DigitalOcean\Model\OneClicksCreate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\OneClicksInstallKubernetes($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AccountGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AccountGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AccountGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAccount|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function accountGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AccountGet(), $fetch);
    }
    /**
     * To list all of the keys in your account, send a GET request to `/v2/account/keys`. The response will be a JSON object with a key set to `ssh_keys`. The value of this will be an array of ssh_key objects, each of which contains the standard ssh_key attributes.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSshKeysAll|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function sshKeysList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SshKeysList($queryParameters), $fetch);
    }
    /**
     * To add a new SSH public key to your DigitalOcean account, send a POST request to `/v2/account/keys`. Set the `name` attribute to the name you wish to use and the `public_key` attribute to the full public key you are adding.
     * @param \Jane\Generated\DigitalOcean\Model\SshKeys $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSshKeysNew|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function sshKeysCreate(\Jane\Generated\DigitalOcean\Model\SshKeys $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SshKeysCreate($requestBody), $fetch);
    }
    /**
     * To destroy a public SSH key that you have in your account, send a DELETE request to `/v2/account/keys/$KEY_ID` or `/v2/account/keys/$KEY_FINGERPRINT`.
     * A 204 status will be returned, indicating that the action was successful and that the response body is empty.
     * @param mixed $sshKeyIdentifier Either the ID or the fingerprint of an existing SSH key.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function sshKeysDelete($sshKeyIdentifier, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SshKeysDelete($sshKeyIdentifier), $fetch);
    }
    /**
     * To get information about a key, send a GET request to `/v2/account/keys/$KEY_ID` or `/v2/account/keys/$KEY_FINGERPRINT`.
     * The response will be a JSON object with the key `ssh_key` and value an ssh_key object which contains the standard ssh_key attributes.
     * @param mixed $sshKeyIdentifier Either the ID or the fingerprint of an existing SSH key.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSshKeysExisting|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function sshKeysGet($sshKeyIdentifier, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SshKeysGet($sshKeyIdentifier), $fetch);
    }
    /**
     * To update the name of an SSH key, send a PUT request to either `/v2/account/keys/$SSH_KEY_ID` or `/v2/account/keys/$SSH_KEY_FINGERPRINT`. Set the `name` attribute to the new name you want to use.
     * @param mixed $sshKeyIdentifier Either the ID or the fingerprint of an existing SSH key.
     * @param \Jane\Generated\DigitalOcean\Model\V2AccountKeysSshKeyIdentifierPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SshKeysUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSshKeysExisting|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function sshKeysUpdate($sshKeyIdentifier, \Jane\Generated\DigitalOcean\Model\V2AccountKeysSshKeyIdentifierPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SshKeysUpdate($sshKeyIdentifier, $requestBody), $fetch);
    }
    /**
     * This will be the entire list of actions taken on your account, so it will be quite large. As with any large collection returned by the API, the results will be paginated with only 20 on each page by default.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseActions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function actionsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ActionsList($queryParameters), $fetch);
    }
    /**
     * To retrieve a specific action object, send a GET request to `/v2/actions/$ACTION_ID`.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ActionsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function actionsGet(int $actionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ActionsGet($actionId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsGetApp|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsGetApp(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsGetApp(), $fetch);
    }
    /**
     * To find out what metadata is required for a specific add-on, send a GET request to `/v2/add-ons/apps/{app_slug}/metadata`.
     * Metadata varies by application.
     *
     * @param string $appSlug The slug identifier for the application whose metadata is being requested.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppMetadataUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppMetadataNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppMetadataTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetAppMetadataInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsGetAppMetadata|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsGetAppMetadata(string $appSlug, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsGetAppMetadata($appSlug), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsList(), $fetch);
    }
    /**
     * To create an add-on resource, send a POST request to `/v2/add-ons/saas` with required parameters.
     * Some add-ons require additional metadata to be provided in the request body. To find out
     * what metadata is required for a specific add-on, send a GET request to `/v2/add-ons/apps/{app_slug}/metadata`.
     *
     * @param \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsCreate(\Jane\Generated\DigitalOcean\Model\V2AddOnsSaasPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsCreate($requestBody), $fetch);
    }
    /**
     * To delete an add-on resource, send a DELETE request to `/v2/add-ons/saas/{resource_uuid}` with the UUID of the resource to delete.
     * You cannot retrieve the resource after it has been deleted. The response indicates a request was sent to the 3rd party add-on provider to delete the resource.
     * You will no longer be billed for this resource.
     *
     * @param string $resourceUuid A unique identifier for the add-on resource.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsDelete(string $resourceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsDelete($resourceUuid), $fetch);
    }
    /**
     * To fetch details of a specific Add-On Resource, send a GET request to `/v2/add-ons/saas/{resource_uuid}`.
     * Replace `{resource_uuid}` with the UUID of the resource you want to retrieve.
     *
     * @param string $resourceUuid The UUID of the add-on resource to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsGet|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsGet(string $resourceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsGet($resourceUuid), $fetch);
    }
    /**
     * To change the name of an Add-On Resource, send a PATCH request to `/v2/add-ons/saas/{resource_uuid}`.
     * Replace `{resource_uuid}` with the UUID of the resource for which you want to change the name.
     *
     * @param string $resourceUuid The UUID of the add-on resource to rename.
     * @param \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsPatch(string $resourceUuid, \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsPatch($resourceUuid, $requestBody), $fetch);
    }
    /**
     * To change the plan associated with an Add-On Resource, send a PATCH request to `/v2/add-ons/saas/{resource_uuid}/plan`.
     * Replace `{resource_uuid}` with the UUID of the resource for which you want to change the plan.
     *
     * @param string $resourceUuid The UUID of the add-on resource to update.
     * @param \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPlanPatchBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchPlanUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchPlanNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchPlanTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AddonsPatchPlanInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAddonsUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function addonsPatchPlan(string $resourceUuid, \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPlanPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AddonsPatchPlan($resourceUuid, $requestBody), $fetch);
    }
    /**
     * List all apps on your account. Information about the current active deployment as well as any in progress ones will also be included for each app.
     * @param array{
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "per_page"?: int, //Number of items returned per page
     *    "with_projects"?: bool, //Whether the project_id of listed apps should be fetched and included.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsList($queryParameters), $fetch);
    }
    /**
     * Create a new app by submitting an app specification. For documentation on app specifications (`AppSpec` objects), please refer to [the product documentation](https://docs.digitalocean.com/products/app-platform/reference/app-spec/).
     * @param \Jane\Generated\DigitalOcean\Model\AppsCreateAppRequest $requestBody
     * @param array{
     *    "Accept"?: string, //The content-type that should be used by the response. By default, the response will be `application/json`. `application/yaml` is also supported.
     *    "Content-Type"?: string, //The content-type used for the request. By default, the requests are assumed to use `application/json`. `application/yaml` is also supported.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsCreate(\Jane\Generated\DigitalOcean\Model\AppsCreateAppRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsCreate($requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete an existing app. Once deleted, all active deployments will be permanently shut down and the app deleted. If needed, be sure to back up your app specification so that you may re-create it at a later time.
     * @param string $id The ID of the app
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeleteAppResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsDelete($id), $fetch);
    }
    /**
     * Retrieve details about an existing app by either its ID or name. To retrieve an app by its name, do not include an ID in the request path. Information about the current active deployment as well as any in progress ones will also be included in the response.
     * @param string $id The ID of the app
     * @param array{
     *    "name"?: string, //The name of the app to retrieve.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGet(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGet($id, $queryParameters), $fetch);
    }
    /**
     * Update an existing app by submitting a new app specification. For documentation on app specifications (`AppSpec` objects), please refer to [the product documentation](https://docs.digitalocean.com/products/app-platform/reference/app-spec/).
     * @param string $id The ID of the app
     * @param \Jane\Generated\DigitalOcean\Model\AppsUpdateAppRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsUpdate(string $id, \Jane\Generated\DigitalOcean\Model\AppsUpdateAppRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsUpdate($id, $requestBody), $fetch);
    }
    /**
     * Perform a rolling restart of all or specific components in an app.
     * @param string $appId The app ID
     * @param null|\Jane\Generated\DigitalOcean\Model\AppsRestartRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRestartUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRestartNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRestartTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRestartInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsRestart(string $appId, ?\Jane\Generated\DigitalOcean\Model\AppsRestartRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsRestart($appId, $requestBody), $fetch);
    }
    /**
    * Retrieve the logs of the active deployment if one exists. The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment. Note log_type=BUILD logs will return logs associated with the current active deployment (being served). To view build logs associated with in-progress build, the query must explicitly reference the deployment id.
    * @param string $appId The app ID
    * @param string $componentName An optional component name. If set, logs will be limited to this component only.
    * @param array{
    *    "follow"?: bool, //Whether the logs should follow live updates.
    *    "type": string, //The type of logs to retrieve
    - BUILD: Build-time logs
    - DEPLOY: Deploy-time logs
    - RUN: Live run-time logs
    - RUN_RESTARTED: Logs of crashed/restarted instances during runtime
    *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function appsGetLogsActiveDeployment(string $appId, string $componentName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetLogsActiveDeployment($appId, $componentName, $queryParameters), $fetch);
    }
    /**
     * Returns a websocket URL that allows sending/receiving console input and output to a component of the active deployment if one exists.
     * @param string $appId The app ID
     * @param string $componentName An optional component name. If set, logs will be limited to this component only.
     * @param array{
     *    "instance_name"?: string, //The name of the actively running ephemeral compute instance
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecActiveDeploymentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecActiveDeploymentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecActiveDeploymentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecActiveDeploymentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetExecResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetExecActiveDeployment(string $appId, string $componentName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetExecActiveDeployment($appId, $componentName, $queryParameters), $fetch);
    }
    /**
     * Retrieve the list of running instances for a given application, including instance names and component types. Please note that these instances are ephemeral and may change over time. It is recommended not to make persistent changes or develop scripts that rely on their persistence.
     * @param string $appId The app ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstancesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstancesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstancesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstancesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppInstances|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetInstances(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetInstances($appId), $fetch);
    }
    /**
    * List all deployments of an app.
    * @param string $appId The app ID
    * @param array{
    *    "page"?: int, //Which 'page' of paginated results to return.
    *    "per_page"?: int, //Number of items returned per page
    *    "deployment_types"?: array, //Optional. Filter deployments by deployment_type
     - MANUAL: manual deployment
     - DEPLOY_ON_PUSH: deployment triggered by a push to the app's repository
     - MAINTENANCE: deployment for maintenance purposes
     - MANUAL_ROLLBACK: manual revert to a previous deployment
     - AUTO_ROLLBACK: automatic revert to a previous deployment
     - UPDATE_DATABASE_TRUSTED_SOURCES: update database trusted sources
     - AUTOSCALED: deployment that has been autoscaled
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function appsListDeployments(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsListDeployments($appId, $queryParameters), $fetch);
    }
    /**
     * Creating an app deployment will pull the latest changes from your repository and schedule a new deployment for your app.
     * @param string $appId The app ID
     * @param \Jane\Generated\DigitalOcean\Model\AppsCreateDeploymentRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateDeploymentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateDeploymentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateDeploymentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateDeploymentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsCreateDeployment(string $appId, \Jane\Generated\DigitalOcean\Model\AppsCreateDeploymentRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsCreateDeployment($appId, $requestBody), $fetch);
    }
    /**
     * Retrieve information about an app deployment.
     * @param string $appId The app ID
     * @param string $deploymentId The deployment ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetDeploymentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetDeploymentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetDeploymentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetDeploymentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetDeployment(string $appId, string $deploymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetDeployment($appId, $deploymentId), $fetch);
    }
    /**
     * Immediately cancel an in-progress deployment.
     * @param string $appId The app ID
     * @param string $deploymentId The deployment ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCancelDeploymentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCancelDeploymentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCancelDeploymentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCancelDeploymentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsCancelDeployment(string $appId, string $deploymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsCancelDeployment($appId, $deploymentId), $fetch);
    }
    /**
    * Retrieve the logs of a past, in-progress, or active deployment. The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment.
    * @param string $appId The app ID
    * @param string $deploymentId The deployment ID
    * @param string $componentName An optional component name. If set, logs will be limited to this component only.
    * @param array{
    *    "follow"?: bool, //Whether the logs should follow live updates.
    *    "type": string, //The type of logs to retrieve
    - BUILD: Build-time logs
    - DEPLOY: Deploy-time logs
    - RUN: Live run-time logs
    - RUN_RESTARTED: Logs of crashed/restarted instances during runtime
    *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function appsGetLogs(string $appId, string $deploymentId, string $componentName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetLogs($appId, $deploymentId, $componentName, $queryParameters), $fetch);
    }
    /**
    * Retrieve the logs of a past, in-progress, or active deployment. If a component name is specified, the logs will be limited to only that component. The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment.
    * @param string $appId The app ID
    * @param string $deploymentId The deployment ID
    * @param array{
    *    "follow"?: bool, //Whether the logs should follow live updates.
    *    "type": string, //The type of logs to retrieve
    - BUILD: Build-time logs
    - DEPLOY: Deploy-time logs
    - RUN: Live run-time logs
    - RUN_RESTARTED: Logs of crashed/restarted instances during runtime
    *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsAggregateUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsAggregateNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsAggregateTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsAggregateInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function appsGetLogsAggregate(string $appId, string $deploymentId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetLogsAggregate($appId, $deploymentId, $queryParameters), $fetch);
    }
    /**
     * Returns a websocket URL that allows sending/receiving console input and output to a component of the specified deployment if one exists. Optionally, the instance_name parameter can be provided to retrieve the exec URL for a specific instance. Note that instances are ephemeral; therefore, we recommended to avoid making persistent changes or such scripting around them.
     * @param string $appId The app ID
     * @param string $deploymentId The deployment ID
     * @param string $componentName An optional component name. If set, logs will be limited to this component only.
     * @param array{
     *    "instance_name"?: string, //The name of the actively running ephemeral compute instance
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetExecResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetExec(string $appId, string $deploymentId, string $componentName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetExec($appId, $deploymentId, $componentName, $queryParameters), $fetch);
    }
    /**
    * Retrieve the logs of the active deployment if one exists. The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment. Note log_type=BUILD logs will return logs associated with the current active deployment (being served). To view build logs associated with in-progress build, the query must explicitly reference the deployment id.
    * @param string $appId The app ID
    * @param array{
    *    "follow"?: bool, //Whether the logs should follow live updates.
    *    "type": string, //The type of logs to retrieve
    - BUILD: Build-time logs
    - DEPLOY: Deploy-time logs
    - RUN: Live run-time logs
    - RUN_RESTARTED: Logs of crashed/restarted instances during runtime
    *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentAggregateUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentAggregateNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentAggregateTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsActiveDeploymentAggregateInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function appsGetLogsActiveDeploymentAggregate(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetLogsActiveDeploymentAggregate($appId, $queryParameters), $fetch);
    }
    /**
     * List all job invocations for an app.
     * @param string $appId The app ID
     * @param array{
     *    "job_names"?: array, //The job names to list job invocations for.
     *    "deployment_id"?: string, //The deployment ID
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "per_page"?: int, //Number of items returned per page
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppJobInvocations|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsListJobInvocations(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsListJobInvocations($appId, $queryParameters), $fetch);
    }
    /**
     * Get a specific job invocation for an app.
     * @param string $appId The app ID
     * @param string $jobInvocationId The ID of the job invocation to retrieve.
     * @param array{
     *    "job_name"?: string, //The job name to list job invocations for.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppJobInvocation|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetJobInvocation(string $appId, string $jobInvocationId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetJobInvocation($appId, $jobInvocationId, $queryParameters), $fetch);
    }
    /**
     * Retrieve the logs of a past, in-progress, or active deployment. If a component name is specified, the logs will be limited to only that component. If deployment is omitted the active deployment will be selected (if available). The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment.
     * @param string $appId The app ID
     * @param string $jobName The job name to list job invocations for.
     * @param string $jobInvocationId The ID of the job invocation to retrieve.
     * @param array{
     *    "deployment_id"?: string, //The deployment ID
     *    "follow"?: bool, //Whether the logs should follow live updates.
     *    "type": string, //The type of logs to retrieve
     *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
     *    "tail_lines"?: string, //The number of lines from the end of the logs to retrieve.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetJobInvocationLogs(string $appId, string $jobName, string $jobInvocationId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetJobInvocationLogs($appId, $jobName, $jobInvocationId, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListInstanceSizesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListInstanceSizesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListInstanceSizesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsListInstanceSizesResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsListInstanceSizes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsListInstanceSizes(), $fetch);
    }
    /**
     * Retrieve information about a specific instance size for `service`, `worker`, and `job` components.
     * @param string $slug The slug of the instance size
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstanceSizeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstanceSizeNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstanceSizeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetInstanceSizeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsGetInstanceSizeResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetInstanceSize(string $slug, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetInstanceSize($slug), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListRegionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListRegionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListRegionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsListRegionsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsListRegions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsListRegions(), $fetch);
    }
    /**
     * To propose and validate a spec for a new or existing app, send a POST request to the `/v2/apps/propose` endpoint. The request returns some information about the proposed app, including app cost and upgrade cost. If an existing app ID is specified, the app spec is treated as a proposed update to the existing app.
     * @param \Jane\Generated\DigitalOcean\Model\AppPropose $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateAppSpecUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateAppSpecTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateAppSpecInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppProposeResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsValidateAppSpec(\Jane\Generated\DigitalOcean\Model\AppPropose $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsValidateAppSpec($requestBody), $fetch);
    }
    /**
     * List alerts associated to the app and any components. This includes configuration information about the alerts including emails, slack webhooks, and triggering events or conditions.
     * @param string $appId The app ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListAlertsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListAlertsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListAlertsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListAlertsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsListAlertsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsListAlerts(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsListAlerts($appId), $fetch);
    }
    /**
     * Updates the emails and slack webhook destinations for app alerts. Emails must be associated to a user with access to the app.
     * @param string $appId The app ID
     * @param string $alertId The alert ID
     * @param \Jane\Generated\DigitalOcean\Model\AppsAssignAppAlertDestinationsRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsAssignAlertDestinationsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsAssignAlertDestinationsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsAssignAlertDestinationsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsAssignAlertDestinationsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsAlertResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsAssignAlertDestinations(string $appId, string $alertId, \Jane\Generated\DigitalOcean\Model\AppsAssignAppAlertDestinationsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsAssignAlertDestinations($appId, $alertId, $requestBody), $fetch);
    }
    /**
     * Rollback an app to a previous deployment. A new deployment will be created to perform the rollback.
     * The app will be pinned to the rollback deployment preventing any new deployments from being created,
     * either manually or through Auto Deploy on Push webhooks. To resume deployments, the rollback must be
     * either committed or reverted.
     *
     * It is recommended to use the Validate App Rollback endpoint to double check if the rollback is
     * valid and if there are any warnings.
     *
     * @param string $appId The app ID
     * @param \Jane\Generated\DigitalOcean\Model\AppsRollbackAppRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateRollbackUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateRollbackNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateRollbackTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCreateRollbackInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsCreateRollback(string $appId, \Jane\Generated\DigitalOcean\Model\AppsRollbackAppRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsCreateRollback($appId, $requestBody), $fetch);
    }
    /**
     * Check whether an app can be rolled back to a specific deployment. This endpoint can also be used
     * to check if there are any warnings or validation conditions that will cause the rollback to proceed
     * under unideal circumstances. For example, if a component must be rebuilt as part of the rollback
     * causing it to take longer than usual.
     *
     * @param string $appId The app ID
     * @param \Jane\Generated\DigitalOcean\Model\AppsRollbackAppRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateRollbackUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateRollbackNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateRollbackTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsValidateRollbackInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsValidateRollback(string $appId, \Jane\Generated\DigitalOcean\Model\AppsRollbackAppRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsValidateRollback($appId, $requestBody), $fetch);
    }
    /**
     * Commit an app rollback. This action permanently applies the rollback and unpins the app to resume new deployments.
     *
     * @param string $appId The app ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCommitRollbackUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCommitRollbackNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCommitRollbackTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsCommitRollbackInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsCommitRollback(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsCommitRollback($appId), $fetch);
    }
    /**
     * Revert an app rollback. This action reverts the active rollback by creating a new deployment from the
     * latest app spec prior to the rollback and unpins the app to resume new deployments.
     *
     * @param string $appId The app ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRevertRollbackUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRevertRollbackNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRevertRollbackTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsRevertRollbackInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsRevertRollback(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsRevertRollback($appId), $fetch);
    }
    /**
     * Retrieve daily bandwidth usage metrics for a single app.
     * @param string $appId The app ID
     * @param array{
     *    "date"?: string, //Optional day to query. Only the date component of the timestamp will be considered. Default: yesterday.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetMetricsBandwidthDailyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetMetricsBandwidthDailyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetMetricsBandwidthDailyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetMetricsBandwidthDailyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsage|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetMetricsBandwidthDaily(string $appId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetMetricsBandwidthDaily($appId, $queryParameters), $fetch);
    }
    /**
     * Retrieve daily bandwidth usage metrics for multiple apps.
     * @param \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsageRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListMetricsBandwidthDailyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListMetricsBandwidthDailyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListMetricsBandwidthDailyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListMetricsBandwidthDailyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsage|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsListMetricsBandwidthDaily(\Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsListMetricsBandwidthDaily($requestBody), $fetch);
    }
    /**
     * Retrieve information like health status, cpu and memory utilization of app components.
     * @param string $appId The app ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetHealthUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetHealthNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetHealthTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetHealthInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AppHealthResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function appsGetHealth(string $appId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AppsGetHealth($appId), $fetch);
    }
    /**
     * To list all of the CDN endpoints available on your account, send a GET request to `/v2/cdn/endpoints`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnListEndpointsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnListEndpointsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnListEndpointsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllCdnEndpoints|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function cdnListEndpoints(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CdnListEndpoints($queryParameters), $fetch);
    }
    /**
     * To create a new CDN endpoint, send a POST request to `/v2/cdn/endpoints`. The
     * origin attribute must be set to the fully qualified domain name (FQDN) of a
     * DigitalOcean Space. Optionally, the TTL may be configured by setting the `ttl`
     * attribute.
     *
     * A custom subdomain may be configured by specifying the `custom_domain` and
     * `certificate_id` attributes.
     *
     * @param \Jane\Generated\DigitalOcean\Model\CdnEndpoint $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnCreateEndpointUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnCreateEndpointTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnCreateEndpointInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function cdnCreateEndpoint(\Jane\Generated\DigitalOcean\Model\CdnEndpoint $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CdnCreateEndpoint($requestBody), $fetch);
    }
    /**
     * To delete a specific CDN endpoint, send a DELETE request to
     * `/v2/cdn/endpoints/$ENDPOINT_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * @param string $cdnId A unique identifier for a CDN endpoint.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnDeleteEndpointUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnDeleteEndpointNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnDeleteEndpointTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnDeleteEndpointInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function cdnDeleteEndpoint(string $cdnId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CdnDeleteEndpoint($cdnId), $fetch);
    }
    /**
     * To show information about an existing CDN endpoint, send a GET request to `/v2/cdn/endpoints/$ENDPOINT_ID`.
     * @param string $cdnId A unique identifier for a CDN endpoint.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnGetEndpointUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnGetEndpointNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnGetEndpointTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnGetEndpointInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function cdnGetEndpoint(string $cdnId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CdnGetEndpoint($cdnId), $fetch);
    }
    /**
     * To update the TTL, certificate ID, or the FQDN of the custom subdomain for
     * an existing CDN endpoint, send a PUT request to
     * `/v2/cdn/endpoints/$ENDPOINT_ID`.
     *
     * @param string $cdnId A unique identifier for a CDN endpoint.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateEndpoint $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnUpdateEndpointsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function cdnUpdateEndpoints(string $cdnId, \Jane\Generated\DigitalOcean\Model\UpdateEndpoint $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CdnUpdateEndpoints($cdnId, $requestBody), $fetch);
    }
    /**
     * To purge cached content from a CDN endpoint, send a DELETE request to
     * `/v2/cdn/endpoints/$ENDPOINT_ID/cache`. The body of the request should include
     * a `files` attribute containing a list of cached file paths to be purged. A
     * path may be for a single file or may contain a wildcard (`*`) to recursively
     * purge all files under a directory. When only a wildcard is provided, all cached
     * files will be purged. There is a rate limit of 50 files per 20 seconds that can
     * be purged. CDN endpoints have a rate limit of 5 requests per 10 seconds.
     * Purging files using a wildcard path counts as a single request against the API's
     * rate limit. Two identical purge requests cannot be sent at the same time.
     *
     * @param string $cdnId A unique identifier for a CDN endpoint.
     * @param \Jane\Generated\DigitalOcean\Model\PurgeCache $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CdnPurgeCacheInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function cdnPurgeCache(string $cdnId, \Jane\Generated\DigitalOcean\Model\PurgeCache $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CdnPurgeCache($cdnId, $requestBody), $fetch);
    }
    /**
     * To list all of the certificates available on your account, send a GET request to `/v2/certificates`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "name"?: string, //Name of expected certificate
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllCertificates|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function certificatesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CertificatesList($queryParameters), $fetch);
    }
    /**
     * To upload new SSL certificate which you have previously generated, send a POST
     * request to `/v2/certificates`.
     *
     * When uploading a user-generated certificate, the `private_key`,
     * `leaf_certificate`, and optionally the `certificate_chain` attributes should
     * be provided. The type must be set to `custom`.
     *
     * When using Let's Encrypt to create a certificate, the `dns_names` attribute
     * must be provided, and the type must be set to `lets_encrypt`.
     *
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNewCertificate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function certificatesCreate($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CertificatesCreate($requestBody), $fetch);
    }
    /**
     * To delete a specific certificate, send a DELETE request to
     * `/v2/certificates/$CERTIFICATE_ID`.
     *
     * @param string $certificateId A unique identifier for a certificate.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function certificatesDelete(string $certificateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CertificatesDelete($certificateId), $fetch);
    }
    /**
     * To show information about an existing certificate, send a GET request to `/v2/certificates/$CERTIFICATE_ID`.
     * @param string $certificateId A unique identifier for a certificate.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\CertificatesGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingCertificate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function certificatesGet(string $certificateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\CertificatesGet($certificateId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\BalanceGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\BalanceGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\BalanceGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\BalanceGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Balance|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function balanceGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\BalanceGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingHistoryListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingHistoryListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingHistoryListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingHistoryListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseBillingHistory|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function billingHistoryList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\BillingHistoryList(), $fetch);
    }
    /**
     * To retrieve a list of all invoices, send a GET request to `/v2/customers/my/invoices`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseInvoices|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function invoicesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\InvoicesList($queryParameters), $fetch);
    }
    /**
     * To retrieve the invoice items for an invoice, send a GET request to `/v2/customers/my/invoices/$INVOICE_UUID`.
     * @param string $invoiceUuid UUID of the invoice
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetByUUIDUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetByUUIDNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetByUUIDTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetByUUIDInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseInvoice|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function invoicesGetByUUID(string $invoiceUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\InvoicesGetByUUID($invoiceUuid, $queryParameters), $fetch);
    }
    /**
     * To retrieve a CSV for an invoice, send a GET request to `/v2/customers/my/invoices/$INVOICE_UUID/csv`.
     * @param string $invoiceUuid UUID of the invoice
     * @param array $accept Accept content header text/csv|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetCsvByUUIDUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetCsvByUUIDNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetCsvByUUIDTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetCsvByUUIDInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function invoicesGetCsvByUUID(string $invoiceUuid, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\InvoicesGetCsvByUUID($invoiceUuid, $accept), $fetch);
    }
    /**
     * To retrieve a PDF for an invoice, send a GET request to `/v2/customers/my/invoices/$INVOICE_UUID/pdf`.
     * @param string $invoiceUuid UUID of the invoice
     * @param array $accept Accept content header application/pdf|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetPdfByUUIDUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetPdfByUUIDNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetPdfByUUIDTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetPdfByUUIDInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function invoicesGetPdfByUUID(string $invoiceUuid, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\InvoicesGetPdfByUUID($invoiceUuid, $accept), $fetch);
    }
    /**
     * To retrieve a summary for an invoice, send a GET request to `/v2/customers/my/invoices/$INVOICE_UUID/summary`.
     * @param string $invoiceUuid UUID of the invoice
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetSummaryByUUIDUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetSummaryByUUIDNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetSummaryByUUIDTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\InvoicesGetSummaryByUUIDInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\InvoiceSummary|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function invoicesGetSummaryByUUID(string $invoiceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\InvoicesGetSummaryByUUID($invoiceUuid), $fetch);
    }
    /**
     *
     * This endpoint returns day-over-day changes in billing resource usage based on nightly invoice items, including total amount, region, SKU, and description for a specified date range. It is important to note that the daily resource usage may not reflect month-end billing totals when totaled for a given month as nightly invoice item estimates do not necessarily encompass all invoicing factors for the entire month.
     * @param string $accountUrn URN of the customer account, can be a team (do:team:uuid) or an organization (do:teamgroup:uuid)
     * @param string $startDate Start date for billing insights in YYYY-MM-DD format
     * @param string $endDate End date for billing insights in YYYY-MM-DD format. Must be within 31 days of start_date
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\BillingInsightsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseBillingInsights|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function billingInsightsList(string $accountUrn, string $startDate, string $endDate, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\BillingInsightsList($accountUrn, $startDate, $endDate, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOptionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOptionsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOptionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOptionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Options|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListOptions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListOptions(), $fetch);
    }
    /**
     * To list all of the database clusters available on your account, send a GET request to `/v2/databases`. To limit the results to database clusters with a specific tag, include the `tag_name` query parameter set to the name of the tag. For example, `/v2/databases?tag_name=$TAG_NAME`.
     *
     * The result will be a JSON object with a `databases` key. This will be set to an array of database objects, each of which will contain the standard database attributes.
     *
     * The embedded `connection` and `private_connection` objects will contain the information needed to access the database cluster. For multi-node clusters, the `standby_connection` and `standby_private_connection` objects will contain the information needed to connect to the cluster's standby node(s).
     *
     * The embedded `maintenance_window` object will contain information about any scheduled maintenance for the database cluster.
     * @param array{
     *    "tag_name"?: string, //Limits the results to database clusters with a specific tag.<br><br>Requires `tag:read` scope.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseClusters|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListClusters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListClusters($queryParameters), $fetch);
    }
    /**
     * To create a database cluster, send a POST request to `/v2/databases`. To see a list  of options for each engine, such as available regions, size slugs, and versions, send a GET request to the `/v2/databases/options` endpoint. The available sizes for  the `storage_size_mib` field depends on the cluster's size. To see a list of available sizes, see [Managed Database Pricing](https://www.digitalocean.com/pricing/managed-databases).
     *
     * The create response returns a JSON object with a key called `database`. The value of this is an object that contains the standard attributes associated with a database cluster. The initial value of the database cluster's `status` attribute is `creating`. When the cluster is ready to receive traffic, this changes to `online`.
     *
     * The embedded `connection` and `private_connection` objects contains the information needed to access the database cluster. For multi-node clusters, the `standby_connection` and `standby_private_connection` objects contain the information needed to connect to the cluster's standby node(s).
     *
     * DigitalOcean managed PostgreSQL and MySQL database clusters take automated daily backups. To create a new database cluster based on a backup of an existing cluster, send a POST request to `/v2/databases`. In addition to the standard database cluster attributes, the JSON body must include a key named `backup_restore` with the name of the original database cluster and the timestamp of the backup to be restored. Creating a database from a backup is the same as forking a database in the control panel.
     * Note: Caching cluster creates are no longer supported as of 2025-04-30T00:00:00Z. Backups are also not supported for Caching or Valkey clusters.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseCluster|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesCreateCluster(\Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesCreateCluster($requestBody), $fetch);
    }
    /**
     * To destroy a specific database, send a DELETE request to `/v2/databases/$DATABASE_ID`.
     * A status of 204 will be given. This indicates that the request was processed successfully, but that no response body is needed.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDestroyCluster(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDestroyCluster($databaseClusterUuid), $fetch);
    }
    /**
     * To show information about an existing database cluster, send a GET request to `/v2/databases/$DATABASE_ID`.
     *
     * The response will be a JSON object with a database key. This will be set to an object containing the standard database cluster attributes.
     *
     * The embedded `connection` and `private_connection` objects will contain the information needed to access the database cluster. For multi-node clusters, the `standby_connection` and `standby_private_connection` objects contain the information needed to connect to the cluster's standby node(s).
     *
     * The embedded maintenance_window object will contain information about any scheduled maintenance for the database cluster.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseCluster|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetCluster(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetCluster($databaseClusterUuid), $fetch);
    }
    /**
     * Shows configuration parameters for an existing database cluster by sending a GET request to
     * `/v2/databases/$DATABASE_ID/config`.
     * The response is a JSON object with a `config` key, which is set to an object
     * containing any database configuration parameters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetConfig(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetConfig($databaseClusterUuid), $fetch);
    }
    /**
     * To update the configuration for an existing database cluster, send a PATCH request to
     * `/v2/databases/$DATABASE_ID/config`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DatabaseConfig $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPatchConfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPatchConfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPatchConfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPatchConfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesPatchConfig(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\DatabaseConfig $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesPatchConfig($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To retrieve the public certificate used to secure the connection to the database cluster send a GET request to
     * `/v2/databases/$DATABASE_ID/ca`.
     *
     * The response will be a JSON object with a `ca` key. This will be set to an object
     * containing the base64 encoding of the public key certificate.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetCaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetCaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetCaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetCaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseCa|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetCa(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetCa($databaseClusterUuid), $fetch);
    }
    /**
     * To retrieve the status of the most recent online migration, send a GET request to `/v2/databases/$DATABASE_ID/online-migration`.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetMigrationStatusUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetMigrationStatusNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetMigrationStatusTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetMigrationStatusInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\OnlineMigration|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetMigrationStatus(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetMigrationStatus($databaseClusterUuid), $fetch);
    }
    /**
     * To start an online migration, send a PUT request to `/v2/databases/$DATABASE_ID/online-migration` endpoint. Migrating a cluster establishes a connection with an existing cluster and replicates its contents to the target cluster. Online migration is only available for MySQL, PostgreSQL, Caching, and Valkey clusters.
     * If the existing database is continuously being written to,  the migration process will continue for up to two weeks unless it is manually stopped. Online migration is only available for [MySQL](https://docs.digitalocean.com/products/databases/mysql/how-to/migrate/#:~:text=To%20migrate%20a%20MySQL%20database,then%20select%20Set%20Up%20Migration), [PostgreSQL](https://docs.digitalocean.com/products/databases/postgresql/how-to/migrate/), [Caching](https://docs.digitalocean.com/products/databases/redis/how-to/migrate/), and [Valkey](https://docs.digitalocean.com/products/databases/valkey/how-to/migrate/) clusters.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\SourceDatabase $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateOnlineMigrationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\OnlineMigration|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateOnlineMigration(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\SourceDatabase $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateOnlineMigration($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To stop an online migration, send a DELETE request to `/v2/databases/$DATABASE_ID/online-migration/$MIGRATION_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $migrationId A unique identifier assigned to the online migration.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOnlineMigrationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteOnlineMigration(string $databaseClusterUuid, string $migrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteOnlineMigration($databaseClusterUuid, $migrationId), $fetch);
    }
    /**
     * To migrate a database cluster to a new region, send a `PUT` request to
     * `/v2/databases/$DATABASE_ID/migrate`. The body of the request must specify a
     * `region` attribute.
     *
     * A successful request will receive a 202 Accepted status code with no body in
     * response. Querying the database cluster will show that its `status` attribute
     * will now be set to `migrating`. This will transition back to `online` when the
     * migration has completed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidMigratePutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateRegionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateRegionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateRegionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateRegionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateRegion(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidMigratePutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateRegion($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To resize a database cluster, send a PUT request to `/v2/databases/$DATABASE_ID/resize`. The body of the request must specify both the size and num_nodes attributes.
     * A successful request will receive a 202 Accepted status code with no body in response. Querying the database cluster will show that its status attribute will now be set to resizing. This will transition back to online when the resize operation has completed.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DatabaseClusterResize $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterSizeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterSizeNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterSizeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterSizeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateClusterSize(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\DatabaseClusterResize $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateClusterSize($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To list all of a database cluster's firewall rules (known as "trusted sources" in the control panel), send a GET request to `/v2/databases/$DATABASE_ID/firewall`.
     * The result will be a JSON object with a `rules` key.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListFirewallRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListFirewallRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListFirewallRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListFirewallRulesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFirewallRules|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListFirewallRules(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListFirewallRules($databaseClusterUuid), $fetch);
    }
    /**
     * To update a database cluster's firewall rules (known as "trusted sources" in the control panel), send a PUT request to `/v2/databases/$DATABASE_ID/firewall` specifying which resources should be able to open connections to the database. You may limit connections to specific Droplets, Kubernetes clusters, or IP addresses. When a tag is provided, any Droplet or Kubernetes node with that tag applied to it will have access. The firewall is limited to 100 rules (or trusted sources). When possible, we recommend [placing your databases into a VPC network](https://docs.digitalocean.com/products/networking/vpc/) to limit access to them instead of using a firewall.
     * A successful
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidFirewallPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateFirewallRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateFirewallRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateFirewallRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateFirewallRulesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateFirewallRules(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidFirewallPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateFirewallRules($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To configure the window when automatic maintenance should be performed for a database cluster, send a PUT request to `/v2/databases/$DATABASE_ID/maintenance`.
     * A successful request will receive a 204 No Content status code with no body in response.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DatabaseMaintenanceWindow $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMaintenanceWindowUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMaintenanceWindowNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMaintenanceWindowTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMaintenanceWindowInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateMaintenanceWindow(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\DatabaseMaintenanceWindow $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateMaintenanceWindow($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To start the installation of updates for a database cluster, send a PUT request to `/v2/databases/$DATABASE_ID/install_update`.
     * A successful request will receive a 204 No Content status code with no body in response.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesInstallUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesInstallUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesInstallUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesInstallUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesInstallUpdate(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesInstallUpdate($databaseClusterUuid), $fetch);
    }
    /**
     * To list all of the available backups of a PostgreSQL or MySQL database cluster, send a GET request to `/v2/databases/$DATABASE_ID/backups`.
     * **Note**: Backups are not supported for Caching or Valkey clusters.
     * The result will be a JSON object with a `backups key`. This will be set to an array of backup objects, each of which will contain the size of the backup and the timestamp at which it was created.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListBackupsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListBackupsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListBackupsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListBackupsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackups|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListBackups(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListBackups($databaseClusterUuid), $fetch);
    }
    /**
     * To list all of the read-only replicas associated with a database cluster, send a GET request to `/v2/databases/$DATABASE_ID/replicas`.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * The result will be a JSON object with a `replicas` key. This will be set to an array of database replica objects, each of which will contain the standard database replica attributes.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListReplicasUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListReplicasNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListReplicasTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListReplicasInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplicas|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListReplicas(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListReplicas($databaseClusterUuid), $fetch);
    }
    /**
     * To create a read-only replica for a PostgreSQL or MySQL database cluster, send a POST request to `/v2/databases/$DATABASE_ID/replicas` specifying the name it should be given, the size of the node to be used, and the region where it will be located.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a key called `replica`. The value of this will be an object that contains the standard attributes associated with a database replica. The initial value of the read-only replica's `status` attribute will be `forking`. When the replica is ready to receive traffic, this will transition to `active`.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateReplicaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplica|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesCreateReplica(string $databaseClusterUuid, ?\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesCreateReplica($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To list all of the cluster events, send a GET request to
     * `/v2/databases/$DATABASE_ID/events`.
     *
     * The result will be a JSON object with a `events` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListEventsLogsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListEventsLogsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListEventsLogsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListEventsLogsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseEventsLogs|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListEventsLogs(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListEventsLogs($databaseClusterUuid), $fetch);
    }
    /**
     * To destroy a specific read-only replica, send a DELETE request to `/v2/databases/$DATABASE_ID/replicas/$REPLICA_NAME`.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * A status of 204 will be given. This indicates that the request was processed successfully, but that no response body is needed.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $replicaName The name of the database replica.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDestroyReplicaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDestroyReplica(string $databaseClusterUuid, string $replicaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDestroyReplica($databaseClusterUuid, $replicaName), $fetch);
    }
    /**
     * To show information about an existing database replica, send a GET request to `/v2/databases/$DATABASE_ID/replicas/$REPLICA_NAME`.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a `replica key`. This will be set to an object containing the standard database replica attributes.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $replicaName The name of the database replica.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetReplicaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplica|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetReplica(string $databaseClusterUuid, string $replicaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetReplica($databaseClusterUuid, $replicaName), $fetch);
    }
    /**
     * To promote a specific read-only replica, send a PUT request to `/v2/databases/$DATABASE_ID/replicas/$REPLICA_NAME/promote`.
     *
     * **Note**: Read-only replicas are not supported for Caching or Valkey clusters.
     *
     * A status of 204 will be given. This indicates that the request was processed successfully, but that no response body is needed.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $replicaName The name of the database replica.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesPromoteReplicaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesPromoteReplica(string $databaseClusterUuid, string $replicaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesPromoteReplica($databaseClusterUuid, $replicaName), $fetch);
    }
    /**
     * To list all of the users for your database cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/users`.
     *
     * Note: User management is not supported for Caching or Valkey clusters.
     *
     * The result will be a JSON object with a `users` key. This will be set to an array
     * of database user objects, each of which will contain the standard database user attributes.
     * User passwords will not show without the `database:view_credentials` scope.
     *
     * For MySQL clusters, additional options will be contained in the mysql_settings object.
     *
     * For MongoDB clusters, additional information will be contained in the mongo_user_settings object
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListUsersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListUsersNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListUsersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListUsersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUsers|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListUsers(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListUsers($databaseClusterUuid), $fetch);
    }
    /**
     * To add a new database user, send a POST request to `/v2/databases/$DATABASE_ID/users`
     * with the desired username.
     *
     * Note: User management is not supported for Caching or Valkey clusters.
     *
     * When adding a user to a MySQL cluster, additional options can be configured in the
     * `mysql_settings` object.
     *
     * When adding a user to a Kafka cluster, additional options can be configured in
     * the `settings` object.
     *
     *  When adding a user to a MongoDB cluster, additional options can be configured in
     * the `settings.mongo_user_settings` object.
     *
     * The response will be a JSON object with a key called `user`. The value of this will be an
     * object that contains the standard attributes associated with a database user including
     * its randomly generated password.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUserInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesAddUser(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesAddUser($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To remove a specific database user, send a DELETE request to
     * `/v2/databases/$DATABASE_ID/users/$USERNAME`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * Note: User management is not supported for Caching or Valkey clusters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteUserInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteUser(string $databaseClusterUuid, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteUser($databaseClusterUuid, $username), $fetch);
    }
    /**
     * To show information about an existing database user, send a GET request to
     * `/v2/databases/$DATABASE_ID/users/$USERNAME`.
     *
     * Note: User management is not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a `user` key. This will be set to an object
     * containing the standard database user attributes. The user's password will not show
     * up unless the `database:view_credentials` scope is present.
     *
     * For MySQL clusters, additional options will be contained in the `mysql_settings`
     * object.
     *
     * For Kafka clusters, additional options will be contained in the `settings` object.
     *
     * For MongoDB clusters, additional information will be contained in the mongo_user_settings object
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUserInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetUser(string $databaseClusterUuid, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetUser($databaseClusterUuid, $username), $fetch);
    }
    /**
     * To update an existing database user, send a PUT request to `/v2/databases/$DATABASE_ID/users/$USERNAME`
     * with the desired settings.
     *
     * **Note**: only `settings` can be updated via this type of request. If you wish to change the name of a user,
     * you must recreate a new user.
     *
     * The response will be a JSON object with a key called `user`. The value of this will be an
     * object that contains the name of the update database user, along with the `settings` object that
     * has been updated.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateUserInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateUser(string $databaseClusterUuid, string $username, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateUser($databaseClusterUuid, $username, $requestBody), $fetch);
    }
    /**
     * To reset the password for a database user, send a POST request to
     * `/v2/databases/$DATABASE_ID/users/$USERNAME/reset_auth`.
     *
     * For `mysql` databases, the authentication method can be specifying by
     * including a key in the JSON body called `mysql_settings` with the `auth_plugin`
     * value specified.
     *
     * The response will be a JSON object with a `user` key. This will be set to an
     * object containing the standard database user attributes.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $username The name of the database user.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesResetAuthInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUser|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesResetAuth(string $databaseClusterUuid, string $username, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesResetAuth($databaseClusterUuid, $username, $requestBody), $fetch);
    }
    /**
     * To list all of the databases in a clusters, send a GET request to
     * `/v2/databases/$DATABASE_ID/dbs`.
     *
     * The result will be a JSON object with a `dbs` key. This will be set to an array
     * of database objects, each of which will contain the standard database attributes.
     *
     * Note: Database management is not supported for Caching or Valkey clusters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabases|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesList(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesList($databaseClusterUuid), $fetch);
    }
    /**
     * To add a new database to an existing cluster, send a POST request to
     * `/v2/databases/$DATABASE_ID/dbs`.
     *
     * Note: Database management is not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a key called `db`. The value of this will be
     * an object that contains the standard attributes associated with a database.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\Database $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabase|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesAdd(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\Database $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesAdd($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To delete a specific database, send a DELETE request to
     * `/v2/databases/$DATABASE_ID/dbs/$DB_NAME`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * Note: Database management is not supported for Caching or Valkey clusters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $databaseName The name of the database.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDelete(string $databaseClusterUuid, string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDelete($databaseClusterUuid, $databaseName), $fetch);
    }
    /**
     * To show information about an existing database cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/dbs/$DB_NAME`.
     *
     * Note: Database management is not supported for Caching or Valkey clusters.
     *
     * The response will be a JSON object with a `db` key. This will be set to an object
     * containing the standard database attributes.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $databaseName The name of the database.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabase|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGet(string $databaseClusterUuid, string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGet($databaseClusterUuid, $databaseName), $fetch);
    }
    /**
     * To list all of the connection pools available to a PostgreSQL database cluster, send a GET request to `/v2/databases/$DATABASE_ID/pools`.
     * The result will be a JSON object with a `pools` key. This will be set to an array of connection pool objects.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListConnectionPoolsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListConnectionPoolsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListConnectionPoolsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListConnectionPoolsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ConnectionPools|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListConnectionPools(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListConnectionPools($databaseClusterUuid), $fetch);
    }
    /**
     * For PostgreSQL database clusters, connection pools can be used to allow a
     * database to share its idle connections. The popular PostgreSQL connection
     * pooling utility PgBouncer is used to provide this service. [See here for more information](https://docs.digitalocean.com/products/databases/postgresql/how-to/manage-connection-pools/)
     * about how and why to use PgBouncer connection pooling including
     * details about the available transaction modes.
     *
     * To add a new connection pool to a PostgreSQL database cluster, send a POST
     * request to `/v2/databases/$DATABASE_ID/pools` specifying a name for the pool,
     * the user to connect with, the database to connect to, as well as its desired
     * size and transaction mode.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\ConnectionPool $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddConnectionPoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddConnectionPoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddConnectionPoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesAddConnectionPoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseConnectionPool|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesAddConnectionPool(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\ConnectionPool $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesAddConnectionPool($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To delete a specific connection pool for a PostgreSQL database cluster, send
     * a DELETE request to `/v2/databases/$DATABASE_ID/pools/$POOL_NAME`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $poolName The name used to identify the connection pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteConnectionPoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteConnectionPool(string $databaseClusterUuid, string $poolName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteConnectionPool($databaseClusterUuid, $poolName), $fetch);
    }
    /**
     * To show information about an existing connection pool for a PostgreSQL database cluster, send a GET request to `/v2/databases/$DATABASE_ID/pools/$POOL_NAME`.
     * The response will be a JSON object with a `pool` key.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $poolName The name used to identify the connection pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConnectionPoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConnectionPoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConnectionPoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetConnectionPoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseConnectionPool|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetConnectionPool(string $databaseClusterUuid, string $poolName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetConnectionPool($databaseClusterUuid, $poolName), $fetch);
    }
    /**
     * To update a connection pool for a PostgreSQL database cluster, send a PUT request to  `/v2/databases/$DATABASE_ID/pools/$POOL_NAME`.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $poolName The name used to identify the connection pool.
     * @param \Jane\Generated\DigitalOcean\Model\ConnectionPoolUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateConnectionPoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateConnectionPoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateConnectionPoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateConnectionPoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateConnectionPool(string $databaseClusterUuid, string $poolName, \Jane\Generated\DigitalOcean\Model\ConnectionPoolUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateConnectionPool($databaseClusterUuid, $poolName, $requestBody), $fetch);
    }
    /**
     * To retrieve the configured eviction policy for an existing Caching or Valkey cluster, send a GET request to `/v2/databases/$DATABASE_ID/eviction_policy`.
     * The response will be a JSON object with an `eviction_policy` key. This will be set to a string representing the eviction policy.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetEvictionPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetEvictionPolicyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetEvictionPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetEvictionPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseEvictionPolicyResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetEvictionPolicy(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetEvictionPolicy($databaseClusterUuid), $fetch);
    }
    /**
     * To configure an eviction policy for an existing Caching or Valkey cluster, send a PUT request to `/v2/databases/$DATABASE_ID/eviction_policy` specifying the desired policy.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateEvictionPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateEvictionPolicyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateEvictionPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateEvictionPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateEvictionPolicy(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateEvictionPolicy($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To retrieve the configured SQL modes for an existing MySQL cluster, send a GET request to `/v2/databases/$DATABASE_ID/sql_mode`.
     * The response will be a JSON object with a `sql_mode` key. This will be set to a string representing the configured SQL modes.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetSqlModeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetSqlModeNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetSqlModeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetSqlModeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\SqlMode|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetSqlMode(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetSqlMode($databaseClusterUuid), $fetch);
    }
    /**
     * To configure the SQL modes for an existing MySQL cluster, send a PUT request to `/v2/databases/$DATABASE_ID/sql_mode` specifying the desired modes. See the official MySQL 8 documentation for a [full list of supported SQL modes](https://dev.mysql.com/doc/refman/8.0/en/sql-mode.html#sql-mode-full).
     * A successful request will receive a 204 No Content status code with no body in response.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\SqlMode $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateSqlModeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateSqlModeNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateSqlModeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateSqlModeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateSqlMode(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\SqlMode $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateSqlMode($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To upgrade the major version of a database, send a PUT request to `/v2/databases/$DATABASE_ID/upgrade`, specifying the target version.
     * A successful request will receive a 204 No Content status code with no body in response.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\Version2 $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMajorVersionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMajorVersionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMajorVersionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateMajorVersionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateMajorVersion(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\Version2 $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateMajorVersion($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To retrieve the autoscale configuration for an existing database cluster, send a GET request to `/v2/databases/$DATABASE_ID/autoscale`.
     * The response will be a JSON object with autoscaling configuration details.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetAutoscaleUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetAutoscaleNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetAutoscaleTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetAutoscaleInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAutoscale|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetAutoscale(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetAutoscale($databaseClusterUuid), $fetch);
    }
    /**
     * To configure autoscale settings for an existing database cluster, send a PUT request to `/v2/databases/$DATABASE_ID/autoscale`, specifying the autoscale configuration.
     * A successful request will receive a 204 No Content status code with no body in response.
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateAutoscaleInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateAutoscale(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateAutoscale($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To list all of a Kafka cluster's topics, send a GET request to
     * `/v2/databases/$DATABASE_ID/topics`.
     *
     * The result will be a JSON object with a `topics` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaTopicsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaTopicsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaTopicsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaTopicsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaTopics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListKafkaTopics(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListKafkaTopics($databaseClusterUuid), $fetch);
    }
    /**
     * To create a topic attached to a Kafka cluster, send a POST request to
     * `/v2/databases/$DATABASE_ID/topics`.
     *
     * The result will be a JSON object with a `topic` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaTopicUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaTopicNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaTopicTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaTopicInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesCreateKafkaTopic(string $databaseClusterUuid, ?\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesCreateKafkaTopic($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To delete a single topic within a Kafka cluster, send a DELETE request
     * to `/v2/databases/$DATABASE_ID/topics/$TOPIC_NAME`.
     *
     * A status of 204 will be given. This indicates that the request was
     * processed successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $topicName The name used to identify the Kafka topic.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaTopicInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteKafkaTopic(string $databaseClusterUuid, string $topicName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteKafkaTopic($databaseClusterUuid, $topicName), $fetch);
    }
    /**
     * To retrieve a given topic by name from the set of a Kafka cluster's topics,
     * send a GET request to `/v2/databases/$DATABASE_ID/topics/$TOPIC_NAME`.
     *
     * The result will be a JSON object with a `topic` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $topicName The name used to identify the Kafka topic.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaTopicUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaTopicNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaTopicTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaTopicInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetKafkaTopic(string $databaseClusterUuid, string $topicName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetKafkaTopic($databaseClusterUuid, $topicName), $fetch);
    }
    /**
     * To update a topic attached to a Kafka cluster, send a PUT request to
     * `/v2/databases/$DATABASE_ID/topics/$TOPIC_NAME`.
     *
     * The result will be a JSON object with a `topic` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $topicName The name used to identify the Kafka topic.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaTopicInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateKafkaTopic(string $databaseClusterUuid, string $topicName, ?\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateKafkaTopic($databaseClusterUuid, $topicName, $requestBody), $fetch);
    }
    /**
     * To list logsinks for a database cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/logsink`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListLogsinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListLogsinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListLogsinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListLogsinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseLogsinks|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListLogsink(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListLogsink($databaseClusterUuid), $fetch);
    }
    /**
     * To create logsink for a database cluster, send a POST request to
     * `/v2/databases/$DATABASE_ID/logsink`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateLogsinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateLogsinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateLogsinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateLogsinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseLogsink|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesCreateLogsink(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesCreateLogsink($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To delete a logsink for a database cluster, send a DELETE request to
     * `/v2/databases/$DATABASE_ID/logsink/$LOGSINK_ID`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $logsinkId A unique identifier for a logsink of a database cluster
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteLogsinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteLogsinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteLogsinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteLogsinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteLogsink(string $databaseClusterUuid, string $logsinkId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteLogsink($databaseClusterUuid, $logsinkId), $fetch);
    }
    /**
     * To get a logsink for a database cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/logsink/$LOGSINK_ID`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $logsinkId A unique identifier for a logsink of a database cluster
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetLogsinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetLogsinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetLogsinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetLogsinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\LogsinkSchema|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetLogsink(string $databaseClusterUuid, string $logsinkId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetLogsink($databaseClusterUuid, $logsinkId), $fetch);
    }
    /**
     * To update a logsink for a database cluster, send a PUT request to
     * `/v2/databases/$DATABASE_ID/logsink/$LOGSINK_ID`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $logsinkId A unique identifier for a logsink of a database cluster
     * @param \Jane\Generated\DigitalOcean\Model\LogsinkUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateLogsinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateLogsinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateLogsinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateLogsinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateLogsink(string $databaseClusterUuid, string $logsinkId, \Jane\Generated\DigitalOcean\Model\LogsinkUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateLogsink($databaseClusterUuid, $logsinkId, $requestBody), $fetch);
    }
    /**
     * To list all schemas for a Kafka cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/schema-registry`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaSchemasUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaSchemasNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaSchemasTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListKafkaSchemasInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemas|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListKafkaSchemas(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListKafkaSchemas($databaseClusterUuid), $fetch);
    }
    /**
     * To create a Kafka schema for a database cluster, send a POST request to
     * `/v2/databases/$DATABASE_ID/schema-registry`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaSchemaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaSchemaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaSchemaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesCreateKafkaSchemaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaSchema|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesCreateKafkaSchema(string $databaseClusterUuid, \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesCreateKafkaSchema($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To delete a specific schema by subject name for a Kafka cluster, send a DELETE request to
     * `/v2/databases/$DATABASE_ID/schema-registry/$SUBJECT_NAME`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteKafkaSchemaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteKafkaSchema(string $databaseClusterUuid, string $subjectName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteKafkaSchema($databaseClusterUuid, $subjectName), $fetch);
    }
    /**
     * To get a specific schema by subject name for a Kafka cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/schema-registry/$SUBJECT_NAME`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemaVersion : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetKafkaSchema(string $databaseClusterUuid, string $subjectName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetKafkaSchema($databaseClusterUuid, $subjectName), $fetch);
    }
    /**
     * To get a specific schema by subject name for a Kafka cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/schema-registry/$SUBJECT_NAME/versions/$VERSION`.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     * @param string $version The version of the Kafka schema subject.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaVersionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemaVersion : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetKafkaSchemaVersion(string $databaseClusterUuid, string $subjectName, string $version, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetKafkaSchemaVersion($databaseClusterUuid, $subjectName, $version), $fetch);
    }
    /**
     * To retrieve the Schema Registry configuration for a Kafka cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/schema-registry/config`.
     * The response is a JSON object with a `compatibility_level` key, which is set to an object
     * containing any database configuration parameters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaConfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaConfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaConfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaConfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistryConfig|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetKafkaSchemaConfig(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetKafkaSchemaConfig($databaseClusterUuid), $fetch);
    }
    /**
     * To update the Schema Registry configuration for a Kafka cluster, send a PUT request to
     * `/v2/databases/$DATABASE_ID/schema-registry/config`.
     * The response is a JSON object with a `compatibility_level` key, which is set to an object
     * containing any database configuration parameters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaConfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaConfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaConfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaConfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistryConfig|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateKafkaSchemaConfig(string $databaseClusterUuid, ?\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateKafkaSchemaConfig($databaseClusterUuid, $requestBody), $fetch);
    }
    /**
     * To retrieve the Schema Registry configuration for a Subject of a Kafka cluster, send a GET request to
     * `/v2/databases/$DATABASE_ID/schema-registry/config/$SUBJECT_NAME`.
     * The response is a JSON object with a `compatibility_level` key, which is set to an object
     * containing any database configuration parameters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaSubjectConfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaSubjectConfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaSubjectConfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetKafkaSchemaSubjectConfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistrySubjectConfig|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetKafkaSchemaSubjectConfig(string $databaseClusterUuid, string $subjectName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetKafkaSchemaSubjectConfig($databaseClusterUuid, $subjectName), $fetch);
    }
    /**
     * To update the Schema Registry configuration for a Subject of a Kafka cluster, send a PUT request to
     * `/v2/databases/$DATABASE_ID/schema-registry/config/$SUBJECT_NAME`.
     * The response is a JSON object with a `compatibility_level` key, which is set to an object
     * containing any database configuration parameters.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $subjectName The name of the Kafka schema subject.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaSubjectConfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaSubjectConfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaSubjectConfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateKafkaSchemaSubjectConfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistrySubjectConfig|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateKafkaSchemaSubjectConfig(string $databaseClusterUuid, string $subjectName, ?\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateKafkaSchemaSubjectConfig($databaseClusterUuid, $subjectName, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterMetricsCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterMetricsCredentialsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterMetricsCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesGetClusterMetricsCredentialsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseMetricsAuth|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesGetClusterMetricsCredentials(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesGetClusterMetricsCredentials(), $fetch);
    }
    /**
     * To update the credentials for all database clusters' metrics endpoints, send a PUT request to `/v2/databases/metrics/credentials`. A successful request will receive a 204 No Content status code  with no body in response.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2DatabasesMetricsCredentialsPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterMetricsCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterMetricsCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesUpdateClusterMetricsCredentialsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesUpdateClusterMetricsCredentials(?\Jane\Generated\DigitalOcean\Model\V2DatabasesMetricsCredentialsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesUpdateClusterMetricsCredentials($requestBody), $fetch);
    }
    /**
     * To list all of a OpenSearch cluster's indexes, send a GET request to
     * `/v2/databases/$DATABASE_ID/indexes`.
     *
     * The result will be a JSON object with a `indexes` key.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOpeasearchIndexesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOpeasearchIndexesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOpeasearchIndexesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListOpeasearchIndexesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseOpensearchIndexes|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesListOpeasearchIndexes(string $databaseClusterUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesListOpeasearchIndexes($databaseClusterUuid), $fetch);
    }
    /**
     * To delete a single index within OpenSearch cluster, send a DELETE request
     * to `/v2/databases/$DATABASE_ID/indexes/$INDEX_NAME`.
     *
     * A status of 204 will be given. This indicates that the request was
     * processed successfully, but that no response body is needed.
     *
     * @param string $databaseClusterUuid A unique identifier for a database cluster.
     * @param string $indexName The name of the OpenSearch index.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOpensearchIndexUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOpensearchIndexNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOpensearchIndexTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesDeleteOpensearchIndexInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function databasesDeleteOpensearchIndex(string $databaseClusterUuid, string $indexName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DatabasesDeleteOpensearchIndex($databaseClusterUuid, $indexName), $fetch);
    }
    /**
     * To retrieve a list of all of the domains in your account, send a GET request to `/v2/domains`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDomainsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsList($queryParameters), $fetch);
    }
    /**
     * To create a new domain, send a POST request to `/v2/domains`. Set the "name"
     * attribute to the domain name you are adding. Optionally, you may set the
     * "ip_address" attribute, and an A record will be automatically created pointing
     * to the apex domain.
     *
     * @param null|\Jane\Generated\DigitalOcean\Model\Domain $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseCreateDomainResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsCreate(?\Jane\Generated\DigitalOcean\Model\Domain $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsCreate($requestBody), $fetch);
    }
    /**
     * To delete a domain, send a DELETE request to `/v2/domains/$DOMAIN_NAME`.
     *
     * @param string $domainName The name of the domain itself.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsDelete(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsDelete($domainName), $fetch);
    }
    /**
     * To get details about a specific domain, send a GET request to `/v2/domains/$DOMAIN_NAME`.
     * @param string $domainName The name of the domain itself.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingDomain|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsGet(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsGet($domainName), $fetch);
    }
    /**
     * To get a listing of all records configured for a domain, send a GET request to `/v2/domains/$DOMAIN_NAME/records`.
     * The list of records returned can be filtered by using the `name` and `type` query parameters. For example, to only include A records for a domain, send a GET request to `/v2/domains/$DOMAIN_NAME/records?type=A`. `name` must be a fully qualified record name. For example, to only include records matching `sub.example.com`, send a GET request to `/v2/domains/$DOMAIN_NAME/records?name=sub.example.com`. Both name and type may be used together.
     *
     *
     * @param string $domainName The name of the domain itself.
     * @param array{
     *    "name"?: string, //A fully qualified record name. For example, to only include records matching sub.example.com, send a GET request to `/v2/domains/$DOMAIN_NAME/records?name=sub.example.com`.
     *    "type"?: string, //The type of the DNS record. For example: A, CNAME, TXT, ...
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListRecordsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListRecordsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListRecordsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsListRecordsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDomainRecordsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsListRecords(string $domainName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsListRecords($domainName, $queryParameters), $fetch);
    }
    /**
     * To create a new record to a domain, send a POST request to
     * `/v2/domains/$DOMAIN_NAME/records`.
     *
     * The request must include all of the required fields for the domain record type
     * being added.
     *
     * See the [attribute table](#tag/Domain-Records) for details regarding record
     * types and their respective required attributes.
     *
     * @param string $domainName The name of the domain itself.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateRecordUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateRecordNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateRecordTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsCreateRecordInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseCreatedDomainRecord|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsCreateRecord(string $domainName, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsCreateRecord($domainName, $requestBody), $fetch);
    }
    /**
     * To delete a record for a domain, send a DELETE request to
     * `/v2/domains/$DOMAIN_NAME/records/$DOMAIN_RECORD_ID`.
     *
     * The record will be deleted and the response status will be a 204. This
     * indicates a successful request with no body returned.
     *
     * @param string $domainName The name of the domain itself.
     * @param int $domainRecordId The unique identifier of the domain record.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteRecordUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteRecordNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteRecordTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsDeleteRecordInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsDeleteRecord(string $domainName, int $domainRecordId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsDeleteRecord($domainName, $domainRecordId), $fetch);
    }
    /**
     * To retrieve a specific domain record, send a GET request to `/v2/domains/$DOMAIN_NAME/records/$RECORD_ID`.
     * @param string $domainName The name of the domain itself.
     * @param int $domainRecordId The unique identifier of the domain record.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetRecordUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetRecordNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetRecordTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsGetRecordInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDomainRecord|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsGetRecord(string $domainName, int $domainRecordId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsGetRecord($domainName, $domainRecordId), $fetch);
    }
    /**
     * To update an existing record, send a PATCH request to
     * `/v2/domains/$DOMAIN_NAME/records/$DOMAIN_RECORD_ID`. Any attribute valid for
     * the record type can be set to a new value for the record.
     *
     * See the [attribute table](#tag/Domain-Records) for details regarding record
     * types and their respective attributes.
     *
     * @param string $domainName The name of the domain itself.
     * @param int $domainRecordId The unique identifier of the domain record.
     * @param null|\Jane\Generated\DigitalOcean\Model\DomainRecord $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsPatchRecordInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDomainRecord|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsPatchRecord(string $domainName, int $domainRecordId, ?\Jane\Generated\DigitalOcean\Model\DomainRecord $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsPatchRecord($domainName, $domainRecordId, $requestBody), $fetch);
    }
    /**
     * To update an existing record, send a PUT request to
     * `/v2/domains/$DOMAIN_NAME/records/$DOMAIN_RECORD_ID`. Any attribute valid for
     * the record type can be set to a new value for the record.
     *
     * See the [attribute table](#tag/Domain-Records) for details regarding record
     * types and their respective attributes.
     *
     * @param string $domainName The name of the domain itself.
     * @param int $domainRecordId The unique identifier of the domain record.
     * @param null|\Jane\Generated\DigitalOcean\Model\DomainRecord $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsUpdateRecordUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsUpdateRecordNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsUpdateRecordTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DomainsUpdateRecordInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDomainRecord|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function domainsUpdateRecord(string $domainName, int $domainRecordId, ?\Jane\Generated\DigitalOcean\Model\DomainRecord $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DomainsUpdateRecord($domainName, $domainRecordId, $requestBody), $fetch);
    }
    /**
     * To delete **all** Droplets assigned to a specific tag, include the `tag_name`
     * query parameter set to the name of the tag in your DELETE request. For
     * example, `/v2/droplets?tag_name=$TAG_NAME`.
     *
     * This endpoint requires `tag:read` scope.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param array{
     *    "tag_name": string, //Specifies Droplets to be deleted by tag.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsDestroyByTag(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsDestroyByTag($queryParameters), $fetch);
    }
    /**
     * To list all Droplets in your account, send a GET request to `/v2/droplets`.
     *
     * The response body will be a JSON object with a key of `droplets`. This will be
     * set to an array containing objects each representing a Droplet. These will
     * contain the standard Droplet attributes.
     *
     * ### Filtering Results by Tag
     *
     * It's possible to request filtered results by including certain query parameters.
     * To only list Droplets assigned to a specific tag, include the `tag_name` query
     * parameter set to the name of the tag in your GET request. For example,
     * `/v2/droplets?tag_name=$TAG_NAME`.
     *
     * ### GPU Droplets
     *
     * By default, only non-GPU Droplets are returned. To list only GPU Droplets, set
     * the `type` query parameter to `gpus`. For example, `/v2/droplets?type=gpus`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "tag_name"?: string, //Used to filter Droplets by a specific tag. Can not be combined with `name` or `type`.<br>Requires `tag:read` scope.
     *    "name"?: string, //Used to filter list response by Droplet name returning only exact matches. It is case-insensitive and can not be combined with `tag_name`.
     *    "type"?: string, //When `type` is set to `gpus`, only GPU Droplets will be returned. By default, only non-GPU Droplets are returned. Can not be combined with `tag_name`.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDroplets|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsList($queryParameters), $fetch);
    }
    /**
     * To create a new Droplet, send a POST request to `/v2/droplets` setting the
     * required attributes.
     *
     * A Droplet will be created using the provided information. The response body
     * will contain a JSON object with a key called `droplet`. The value will be an
     * object containing the standard attributes for your new Droplet. The response
     * code, 202 Accepted, does not indicate the success or failure of the operation,
     * just that the request has been accepted for processing. The `actions` returned
     * as part of the response's `links` object can be used to check the status
     * of the Droplet create event.
     *
     * ### Create Multiple Droplets
     *
     * Creating multiple Droplets is very similar to creating a single Droplet.
     * Instead of sending `name` as a string, send `names` as an array of strings. A
     * Droplet will be created for each name you send using the associated
     * information. Up to ten Droplets may be created this way at a time.
     *
     * Rather than returning a single Droplet, the response body will contain a JSON
     * array with a key called `droplets`. This will be set to an array of JSON
     * objects, each of which will contain the standard Droplet attributes. The
     * response code, 202 Accepted, does not indicate the success or failure of any
     * operation, just that the request has been accepted for processing. The array
     * of `actions` returned as part of the response's `links` object can be used to
     * check the status of each individual Droplet create event.
     *
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsCreate($requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsCreate($requestBody), $fetch);
    }
    /**
     * To delete a Droplet, send a DELETE request to `/v2/droplets/$DROPLET_ID`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsDestroy(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsDestroy($dropletId), $fetch);
    }
    /**
     * To show information about an individual Droplet, send a GET request to
     * `/v2/droplets/$DROPLET_ID`.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingDroplet|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsGet(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsGet($dropletId), $fetch);
    }
    /**
     * To retrieve any backups associated with a Droplet, send a GET request to
     * `/v2/droplets/$DROPLET_ID/backups`.
     *
     * You will get back a JSON object that has a `backups` key. This will be set to
     * an array of backup objects, each of which contain the standard
     * Droplet backup attributes.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDropletBackups|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListBackups(int $dropletId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListBackups($dropletId, $queryParameters), $fetch);
    }
    /**
     * To show information about an individual Droplet's backup policy, send a GET
     * request to `/v2/droplets/$DROPLET_ID/backups/policy`.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetBackupPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetBackupPolicyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetBackupPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetBackupPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDropletBackupPolicy|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsGetBackupPolicy(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsGetBackupPolicy($dropletId), $fetch);
    }
    /**
     * To list information about the backup policies for all Droplets in the account,
     * send a GET request to `/v2/droplets/backups/policies`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupPoliciesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupPoliciesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupPoliciesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListBackupPoliciesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDropletBackupPolicies|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListBackupPolicies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListBackupPolicies($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSupportedBackupPoliciesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSupportedBackupPoliciesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSupportedBackupPoliciesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSupportedBackupPoliciesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDropletsSupportedBackupPolicies|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListSupportedBackupPolicies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListSupportedBackupPolicies(), $fetch);
    }
    /**
     * To retrieve the snapshots that have been created from a Droplet, send a GET
     * request to `/v2/droplets/$DROPLET_ID/snapshots`.
     *
     * You will get back a JSON object that has a `snapshots` key. This will be set
     * to an array of snapshot objects, each of which contain the standard Droplet
     * snapshot attributes.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSnapshotsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSnapshotsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSnapshotsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListSnapshotsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDropletSnapshots|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListSnapshots(int $dropletId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListSnapshots($dropletId, $queryParameters), $fetch);
    }
    /**
     * To retrieve a list of all actions that have been executed for a Droplet, send
     * a GET request to `/v2/droplets/$DROPLET_ID/actions`.
     *
     * The results will be returned as a JSON object with an `actions` key. This will
     * be set to an array filled with `action` objects containing the standard
     * `action` attributes.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllDropletActions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletActionsList(int $dropletId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletActionsList($dropletId, $queryParameters), $fetch);
    }
    /**
     * To initiate an action on a Droplet send a POST request to
     * `/v2/droplets/$DROPLET_ID/actions`. In the JSON body to the request,
     * set the `type` attribute to on of the supported action types:
     *
     * | Action                                   | Details | Additionally Required Permission |
     * | ---------------------------------------- | ----------- | ----------- |
     * | <nobr>`enable_backups`</nobr>            | Enables backups for a Droplet | |
     * | <nobr>`disable_backups`</nobr>           | Disables backups for a Droplet | |
     * | <nobr>`change_backup_policy`</nobr>      | Update the backup policy for a Droplet | |
     * | <nobr>`reboot`</nobr>                    | Reboots a Droplet. A `reboot` action is an attempt to reboot the Droplet in a graceful way, similar to using the `reboot` command from the console. | |
     * | <nobr>`power_cycle`</nobr>               | Power cycles a Droplet. A `powercycle` action is similar to pushing the reset button on a physical machine, it's similar to booting from scratch. | |
     * | <nobr>`shutdown`</nobr>                  | Shutsdown a Droplet. A shutdown action is an attempt to shutdown the Droplet in a graceful way, similar to using the `shutdown` command from the console. Since a `shutdown` command can fail, this action guarantees that the command is issued, not that it succeeds. The preferred way to turn off a Droplet is to attempt a shutdown, with a reasonable timeout, followed by a `power_off` action to ensure the Droplet is off. | |
     * | <nobr>`power_off`</nobr>                 | Powers off a Droplet. A `power_off` event is a hard shutdown and should only be used if the `shutdown` action is not successful. It is similar to cutting the power on a server and could lead to complications. | |
     * | <nobr>`power_on`</nobr>                  | Powers on a Droplet. | |
     * | <nobr>`restore`</nobr>                   | Restore a Droplet using a backup image. The image ID that is passed in must be a backup of the current Droplet instance. The operation will leave any embedded SSH keys intact. | droplet:admin |
     * | <nobr>`password_reset`</nobr>            | Resets the root password for a Droplet. A new password will be provided via email. It must be changed after first use. | droplet:admin |
     * | <nobr>`resize`</nobr>                    | Resizes a Droplet. Set the `size` attribute to a size slug. If a permanent resize with disk changes included is desired, set the `disk` attribute to `true`. | droplet:create |
     * | <nobr>`rebuild`</nobr>                   | Rebuilds a Droplet from a new base image. Set the `image` attribute to an image ID or slug. | droplet:admin |
     * | <nobr>`rename`</nobr>                    | Renames a Droplet. | |
     * | <nobr>`change_kernel`</nobr>             | Changes a Droplet's kernel. Only applies to Droplets with externally managed kernels. All Droplets created after March 2017 use internal kernels by default. | |
     * | <nobr>`enable_ipv6`</nobr>               | Enables IPv6 for a Droplet. Once enabled for a Droplet, IPv6 can not be disabled. When enabling IPv6 on an existing Droplet, [additional OS-level configuration](https://docs.digitalocean.com/products/networking/ipv6/how-to/enable/#on-existing-droplets) is required. | |
     * | <nobr>`snapshot`</nobr>                  | Takes a snapshot of a Droplet. | image:create |
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDropletAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletActionsPost(int $dropletId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletActionsPost($dropletId, $requestBody), $fetch);
    }
    /**
     * Some actions can be performed in bulk on tagged Droplets. The actions can be
     * initiated by sending a POST to `/v2/droplets/actions?tag_name=$TAG_NAME` with
     * the action arguments.
     *
     * Only a sub-set of action types are supported:
     *
     * - `power_cycle`
     * - `power_on`
     * - `power_off`
     * - `shutdown`
     * - `enable_ipv6`
     * - `enable_backups`
     * - `disable_backups`
     * - `snapshot` (also requires `image:create` permission)
     *
     * @param null|mixed $requestBody
     * @param array{
     *    "tag_name"?: string, //Used to filter Droplets by a specific tag. Can not be combined with `name` or `type`.<br>Requires `tag:read` scope.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostByTagUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostByTagTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsPostByTagInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDropletActionsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletActionsPostByTag($requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletActionsPostByTag($requestBody, $queryParameters), $fetch);
    }
    /**
     * To retrieve a Droplet action, send a GET request to
     * `/v2/droplets/$DROPLET_ID/actions/$ACTION_ID`.
     *
     * The response will be a JSON object with a key called `action`. The value will
     * be a Droplet action object.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletActionsGet(int $dropletId, int $actionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletActionsGet($dropletId, $actionId), $fetch);
    }
    /**
     * To retrieve a list of all kernels available to a Droplet, send a GET request
     * to `/v2/droplets/$DROPLET_ID/kernels`
     *
     * The response will be a JSON object that has a key called `kernels`. This will
     * be set to an array of `kernel` objects, each of which contain the standard
     * `kernel` attributes.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListKernelsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListKernelsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListKernelsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListKernelsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllKernels|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListKernels(int $dropletId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListKernels($dropletId, $queryParameters), $fetch);
    }
    /**
     * To retrieve a list of all firewalls available to a Droplet, send a GET request
     * to `/v2/droplets/$DROPLET_ID/firewalls`
     *
     * The response will be a JSON object that has a key called `firewalls`. This will
     * be set to an array of `firewall` objects, each of which contain the standard
     * `firewall` attributes.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListFirewallsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListFirewallsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListFirewallsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListFirewallsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllFirewalls|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListFirewalls(int $dropletId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListFirewalls($dropletId, $queryParameters), $fetch);
    }
    /**
     * To retrieve a list of any "neighbors" (i.e. Droplets that are co-located on
     * the same physical hardware) for a specific Droplet, send a GET request to
     * `/v2/droplets/$DROPLET_ID/neighbors`.
     *
     * The results will be returned as a JSON object with a key of `droplets`. This
     * will be set to an array containing objects representing any other Droplets
     * that share the same physical hardware. An empty array indicates that the
     * Droplet is not co-located any other Droplets associated with your account.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNeighborDroplets|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListNeighbors(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListNeighbors($dropletId), $fetch);
    }
    /**
     * To list the associated billable resources that can be destroyed along with a
     * Droplet, send a GET request to the
     * `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources` endpoint.
     *
     * This endpoint will only return resources that you are authorized to see. For
     * example, to see associated Reserved IPs, include the `reserved_ip:read` scope.
     *
     * The response will be a JSON object containing `snapshots`, `volumes`, and
     * `volume_snapshots` keys. Each will be set to an array of objects containing
     * information about the associated resources.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListAssociatedResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListAssociatedResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListAssociatedResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListAssociatedResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAssociatedResourcesList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListAssociatedResources(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListAssociatedResources($dropletId), $fetch);
    }
    /**
     * To destroy a Droplet along with a sub-set of its associated resources, send a
     * DELETE request to the `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/selective`
     * endpoint. The JSON body of the request should include `reserved_ips`, `snapshots`, `volumes`,
     * or `volume_snapshots` keys each set to an array of IDs for the associated
     * resources to be destroyed. The IDs can be found by querying the Droplet's
     * associated resources. Any associated resource not included in the request
     * will remain and continue to accrue changes on your account.
     *
     * A successful response will include a 202 response code and no content. Use
     * the status endpoint to check on the success or failure of the destruction of
     * the individual resources.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param null|\Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsDestroyWithAssociatedResourcesSelective(int $dropletId, ?\Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsDestroyWithAssociatedResourcesSelective($dropletId, $requestBody), $fetch);
    }
    /**
     * To destroy a Droplet along with all of its associated resources, send a DELETE
     * request to the `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/dangerous`
     * endpoint. The headers of this request must include an `X-Dangerous` key set to
     * `true`. To preview which resources will be destroyed, first query the
     * Droplet's associated resources. This operation _can not_ be reverse and should
     * be used with caution.
     *
     * A successful response will include a 202 response code and no content. Use the
     * status endpoint to check on the success or failure of the destruction of the
     * individual resources.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "X-Dangerous": bool, //Acknowledge this action will destroy the Droplet and all associated resources and _can not_ be reversed.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsDestroyWithAssociatedResourcesDangerous(int $dropletId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsDestroyWithAssociatedResourcesDangerous($dropletId, $headerParameters), $fetch);
    }
    /**
     * To check on the status of a request to destroy a Droplet with its associated
     * resources, send a GET request to the
     * `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/status` endpoint.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsGetDestroyAssociatedResourcesStatus(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsGetDestroyAssociatedResourcesStatus($dropletId), $fetch);
    }
    /**
     * If the status of a request to destroy a Droplet with its associated resources
     * reported any errors, it can be retried by sending a POST request to the
     * `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/retry` endpoint.
     *
     * Only one destroy can be active at a time per Droplet. If a retry is issued
     * while another destroy is in progress for the Droplet a 409 status code will
     * be returned. A successful response will include a 202 response code and no
     * content.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesConflictException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsDestroyRetryWithAssociatedResources(int $dropletId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsDestroyRetryWithAssociatedResources($dropletId), $fetch);
    }
    /**
     * To list all autoscale pools in your team, send a GET request to `/v2/droplets/autoscale`.
     * The response body will be a JSON object with a key of `autoscale_pools` containing an array of autoscale pool objects.
     * These each contain the standard autoscale pool attributes.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "name"?: string, //The name of the autoscale pool
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllAutoscalePools|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsList($queryParameters), $fetch);
    }
    /**
     * To create a new autoscale pool, send a POST request to `/v2/droplets/autoscale` setting the required attributes.
     *
     * The response body will contain a JSON object with a key called `autoscale_pool` containing the standard attributes for the new autoscale pool.
     *
     * @param null|\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsCreate(?\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsCreate($requestBody), $fetch);
    }
    /**
     * To destroy an autoscale pool, send a DELETE request to the `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID` endpoint.
     *
     * A successful response will include a 202 response code and no content.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsDelete(string $autoscalePoolId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsDelete($autoscalePoolId), $fetch);
    }
    /**
     * To show information about an individual autoscale pool, send a GET request to
     * `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID`.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingAutoscalePool|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsGet(string $autoscalePoolId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsGet($autoscalePoolId), $fetch);
    }
    /**
     * To update the configuration of an existing autoscale pool, send a PUT request to
     * `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID`. The request must contain a full representation
     * of the autoscale pool including existing attributes.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param null|\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsUpdate(string $autoscalePoolId, ?\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsUpdate($autoscalePoolId, $requestBody), $fetch);
    }
    /**
     * To destroy an autoscale pool and its associated resources (Droplets),
     * send a DELETE request to the `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID/dangerous` endpoint.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param array{
     *    "X-Dangerous": bool, //Acknowledge this action will destroy the autoscale pool and its associated resources and _can not_ be reversed.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsDeleteDangerousInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsDeleteDangerous(string $autoscalePoolId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsDeleteDangerous($autoscalePoolId, $headerParameters), $fetch);
    }
    /**
     * To list the Droplets in an autoscale pool, send a GET request to `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID/members`.
     *
     * The response body will be a JSON object with a key of `droplets`. This will be
     * set to an array containing information about each of the Droplets in the autoscale pool.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListMembersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListMembersNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListMembersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListMembersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllMembers|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsListMembers(string $autoscalePoolId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsListMembers($autoscalePoolId, $queryParameters), $fetch);
    }
    /**
     * To list all of the scaling history events of an autoscale pool, send a GET request to `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID/history`.
     *
     * The response body will be a JSON object with a key of `history`. This will be
     * set to an array containing objects each representing a history event.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListHistoryUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListHistoryNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListHistoryTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsListHistoryInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseHistoryEvents|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function autoscalepoolsListHistory(string $autoscalePoolId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\AutoscalepoolsListHistory($autoscalePoolId, $queryParameters), $fetch);
    }
    /**
     * To list all of the firewalls available on your account, send a GET request to `/v2/firewalls`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseListFirewallsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsList($queryParameters), $fetch);
    }
    /**
     * To create a new firewall, send a POST request to `/v2/firewalls`. The request
     * must contain at least one inbound or outbound access rule.
     *
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseCreateFirewallResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsCreate(?\Jane\Generated\DigitalOcean\Model\V2FirewallsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsCreate($requestBody), $fetch);
    }
    /**
     * To delete a firewall send a DELETE request to `/v2/firewalls/$FIREWALL_ID`.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsDelete(string $firewallId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsDelete($firewallId), $fetch);
    }
    /**
     * To show information about an existing firewall, send a GET request to `/v2/firewalls/$FIREWALL_ID`.
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGetFirewallResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsGet(string $firewallId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsGet($firewallId), $fetch);
    }
    /**
     * To update the configuration of an existing firewall, send a PUT request to
     * `/v2/firewalls/$FIREWALL_ID`. The request should contain a full representation
     * of the firewall including existing attributes. **Note that any attributes that
     * are not provided will be reset to their default values.**
     * <br><br>You must have read access (e.g. `droplet:read`) to all resources attached
     * to the firewall to successfully update the firewall.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsUpdateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponsePutFirewallResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsUpdate(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsUpdate($firewallId, $requestBody), $fetch);
    }
    /**
     * To remove a Droplet from a firewall, send a DELETE request to
     * `/v2/firewalls/$FIREWALL_ID/droplets`. In the body of the request, there should
     * be a `droplet_ids` attribute containing a list of Droplet IDs.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsDeleteBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteDropletsBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteDropletsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteDropletsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteDropletsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteDropletsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsDeleteDroplets(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsDeleteDroplets($firewallId, $requestBody), $fetch);
    }
    /**
     * To assign a Droplet to a firewall, send a POST request to
     * `/v2/firewalls/$FIREWALL_ID/droplets`. In the body of the request, there
     * should be a `droplet_ids` attribute containing a list of Droplet IDs.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAssignDropletsBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAssignDropletsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAssignDropletsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAssignDropletsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAssignDropletsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsAssignDroplets(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsAssignDroplets($firewallId, $requestBody), $fetch);
    }
    /**
     * To remove a tag representing a group of Droplets from a firewall, send a
     * DELETE request to `/v2/firewalls/$FIREWALL_ID/tags`. In the body of the
     * request, there should be a `tags` attribute containing a list of tag names.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsDeleteTags(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsDeleteTags($firewallId, $requestBody), $fetch);
    }
    /**
     * To assign a tag representing a group of Droplets to a firewall, send a POST
     * request to `/v2/firewalls/$FIREWALL_ID/tags`. In the body of the request,
     * there should be a `tags` attribute containing a list of tag names.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddTagsBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddTagsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddTagsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddTagsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddTagsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsAddTags(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsAddTags($firewallId, $requestBody), $fetch);
    }
    /**
     * To remove access rules from a firewall, send a DELETE request to
     * `/v2/firewalls/$FIREWALL_ID/rules`. The body of the request may include an
     * `inbound_rules` and/or `outbound_rules` attribute containing an array of rules
     * to be removed.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesDeleteBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteRulesBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteRulesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsDeleteRules(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsDeleteRules($firewallId, $requestBody), $fetch);
    }
    /**
     * To add additional access rules to a firewall, send a POST request to
     * `/v2/firewalls/$FIREWALL_ID/rules`. The body of the request may include an
     * inbound_rules and/or outbound_rules attribute containing an array of rules to
     * be added.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddRulesBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsAddRulesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function firewallsAddRules(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FirewallsAddRules($firewallId, $requestBody), $fetch);
    }
    /**
     * To list all of the floating IPs available on your account, send a GET request to `/v2/floating_ips`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFloatingIpList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsList($queryParameters), $fetch);
    }
    /**
     * On creation, a floating IP must be either assigned to a Droplet or reserved to a region.
     * * To create a new floating IP assigned to a Droplet, send a POST
     *   request to `/v2/floating_ips` with the `droplet_id` attribute.
     * * To create a new floating IP reserved to a region, send a POST request to
     *   `/v2/floating_ips` with the `region` attribute.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFloatingIpCreated|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsCreate($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsCreate($requestBody), $fetch);
    }
    /**
     * To delete a floating IP and remove it from your account, send a DELETE request
     * to `/v2/floating_ips/$FLOATING_IP_ADDR`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $floatingIp A floating IP address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsDelete(string $floatingIp, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsDelete($floatingIp), $fetch);
    }
    /**
     * To show information about a floating IP, send a GET request to `/v2/floating_ips/$FLOATING_IP_ADDR`.
     * @param string $floatingIp A floating IP address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFloatingIp|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsGet(string $floatingIp, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsGet($floatingIp), $fetch);
    }
    /**
     * To retrieve all actions that have been executed on a floating IP, send a GET request to `/v2/floating_ips/$FLOATING_IP/actions`.
     * @param string $floatingIp A floating IP address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFloatingIpActions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsActionList(string $floatingIp, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsActionList($floatingIp), $fetch);
    }
    /**
     * To initiate an action on a floating IP send a POST request to
     * `/v2/floating_ips/$FLOATING_IP/actions`. In the JSON body to the request,
     * set the `type` attribute to on of the supported action types:
     *
     * | Action     | Details
     * |------------|--------
     * | `assign`   | Assigns a floating IP to a Droplet
     * | `unassign` | Unassign a floating IP from a Droplet
     *
     * @param string $floatingIp A floating IP address.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionPostInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFloatingIpAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsActionPost(string $floatingIp, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsActionPost($floatingIp, $requestBody), $fetch);
    }
    /**
     * To retrieve the status of a floating IP action, send a GET request to `/v2/floating_ips/$FLOATING_IP/actions/$ACTION_ID`.
     * @param string $floatingIp A floating IP address.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FloatingIPsActionGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseFloatingIpAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function floatingIPsActionGet(string $floatingIp, int $actionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FloatingIPsActionGet($floatingIp, $actionId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListNamespacesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListNamespacesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListNamespacesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseListNamespaces|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsListNamespaces(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsListNamespaces(), $fetch);
    }
    /**
     * Creates a new serverless functions namespace in the desired region and associates it with the provided label. A namespace is a collection of functions and their associated packages, triggers, and project specifications. To create a namespace, send a POST request to `/v2/functions/namespaces` with the `region` and `label` properties.
     * @param \Jane\Generated\DigitalOcean\Model\CreateNamespace $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateNamespaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateNamespaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateNamespaceUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateNamespaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateNamespaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNamespaceCreated|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsCreateNamespace(\Jane\Generated\DigitalOcean\Model\CreateNamespace $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsCreateNamespace($requestBody), $fetch);
    }
    /**
     * Deletes the given namespace.  When a namespace is deleted all assets, in the namespace are deleted, this includes packages, functions and triggers. Deleting a namespace is a destructive operation and assets in the namespace are not recoverable after deletion. Some metadata is retained, such as activations, or soft deleted for reporting purposes.
     * To delete namespace, send a DELETE request to `/v2/functions/namespaces/$NAMESPACE_ID`.
     * A successful deletion returns a 204 response.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteNamespaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteNamespaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteNamespaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteNamespaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsDeleteNamespace(string $namespaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsDeleteNamespace($namespaceId), $fetch);
    }
    /**
     * Gets the namespace details for the given namespace UUID. To get namespace details, send a GET request to `/v2/functions/namespaces/$NAMESPACE_ID` with no parameters.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetNamespaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetNamespaceForbiddenException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetNamespaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetNamespaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetNamespaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNamespaceCreated|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsGetNamespace(string $namespaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsGetNamespace($namespaceId), $fetch);
    }
    /**
     * Returns a list of triggers associated with the current user and namespace. To get all triggers, send a GET request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers`.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListTriggersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListTriggersNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListTriggersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsListTriggersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseListTriggers|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsListTriggers(string $namespaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsListTriggers($namespaceId), $fetch);
    }
    /**
     * Creates a new trigger for a given function in a namespace. To create a trigger, send a POST request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers` with the `name`, `function`, `type`, `is_enabled` and `scheduled_details` properties.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param \Jane\Generated\DigitalOcean\Model\CreateTrigger $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateTriggerBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateTriggerUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateTriggerNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateTriggerUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateTriggerTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsCreateTriggerInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsCreateTrigger(string $namespaceId, \Jane\Generated\DigitalOcean\Model\CreateTrigger $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsCreateTrigger($namespaceId, $requestBody), $fetch);
    }
    /**
     * Deletes the given trigger.
     * To delete trigger, send a DELETE request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers/$TRIGGER_NAME`.
     * A successful deletion returns a 204 response.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $triggerName The name of the trigger to be managed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteTriggerUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteTriggerNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteTriggerTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsDeleteTriggerInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsDeleteTrigger(string $namespaceId, string $triggerName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsDeleteTrigger($namespaceId, $triggerName), $fetch);
    }
    /**
     * Gets the trigger details. To get the trigger details, send a GET request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers/$TRIGGER_NAME`.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $triggerName The name of the trigger to be managed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsGetTrigger(string $namespaceId, string $triggerName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsGetTrigger($namespaceId, $triggerName), $fetch);
    }
    /**
     * Updates the details of the given trigger. To update a trigger, send a PUT request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers/$TRIGGER_NAME` with new values for the `is_enabled ` or `scheduled_details` properties.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $triggerName The name of the trigger to be managed.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateTrigger $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function functionsUpdateTrigger(string $namespaceId, string $triggerName, \Jane\Generated\DigitalOcean\Model\UpdateTrigger $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\FunctionsUpdateTrigger($namespaceId, $triggerName, $requestBody), $fetch);
    }
    /**
     * To list all of the images available on your account, send a GET request to /v2/images.
     *
     * ## Filtering Results
     * -----
     *
     * It's possible to request filtered results by including certain query parameters.
     *
     * **Image Type**
     *
     * Either 1-Click Application or OS Distribution images can be filtered by using the `type` query parameter.
     *
     * > Important: The `type` query parameter does not directly relate to the `type` attribute.
     *
     * To retrieve only ***distribution*** images, include the `type` query parameter set to distribution, `/v2/images?type=distribution`.
     *
     * To retrieve only ***application*** images, include the `type` query parameter set to application, `/v2/images?type=application`.
     *
     * **User Images**
     *
     * To retrieve only the private images of a user, include the `private` query parameter set to true, `/v2/images?private=true`.
     *
     * **Tags**
     *
     * To list all images assigned to a specific tag, include the `tag_name` query parameter set to the name of the tag in your GET request. For example, `/v2/images?tag_name=$TAG_NAME`.
     *
     * @param array{
     *    "type"?: string, //Filters results based on image type which can be either `application` or `distribution`.
     *    "private"?: bool, //Used to filter only user images.
     *    "tag_name"?: string, //Used to filter images by a specific tag.
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllImages|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imagesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImagesList($queryParameters), $fetch);
    }
    /**
     * To create a new custom image, send a POST request to /v2/images.
     * The body must contain a url attribute pointing to a Linux virtual machine
     * image to be imported into DigitalOcean.
     * The image must be in the raw, qcow2, vhdx, vdi, or vmdk format.
     * It may be compressed using gzip or bzip2 and must be smaller than 100 GB after
     *  being decompressed.
     *
     * @param \Jane\Generated\DigitalOcean\Model\ImageNewCustom $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesCreateCustomUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesCreateCustomTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesCreateCustomInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNewCustomImage|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imagesCreateCustom(\Jane\Generated\DigitalOcean\Model\ImageNewCustom $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImagesCreateCustom($requestBody), $fetch);
    }
    /**
     * To delete a snapshot or custom image, send a `DELETE` request to `/v2/images/$IMAGE_ID`.
     *
     * @param int $imageId A unique number that can be used to identify and reference a specific image.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imagesDelete(int $imageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImagesDelete($imageId), $fetch);
    }
    /**
    * To retrieve information about an image, send a `GET` request to
    * `/v2/images/$IDENTIFIER`.
    *
    * @param mixed $imageId A unique number (id) or string (slug) used to identify and reference a
    specific image.
    
    **Public** images can be identified by image `id` or `slug`.
    
    **Private** images *must* be identified by image `id`.
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\ImagesGetUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\ImagesGetNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\ImagesGetTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\ImagesGetInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingImage|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function imagesGet($imageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImagesGet($imageId), $fetch);
    }
    /**
     * To update an image, send a `PUT` request to `/v2/images/$IMAGE_ID`.
     * Set the `name` attribute to the new value you would like to use.
     * For custom images, the `description` and `distribution` attributes may also be updated.
     *
     * @param int $imageId A unique number that can be used to identify and reference a specific image.
     * @param \Jane\Generated\DigitalOcean\Model\ImageUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImagesUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUpdatedImage|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imagesUpdate(int $imageId, \Jane\Generated\DigitalOcean\Model\ImageUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImagesUpdate($imageId, $requestBody), $fetch);
    }
    /**
     * To retrieve all actions that have been executed on an image, send a GET request to `/v2/images/$IMAGE_ID/actions`.
     * @param int $imageId A unique number that can be used to identify and reference a specific image.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGetImageActionsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imageActionsList(int $imageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImageActionsList($imageId), $fetch);
    }
    /**
     * The following actions are available on an Image.
     *
     * ## Convert an Image to a Snapshot
     *
     * To convert an image, for example, a backup to a snapshot, send a POST request
     * to `/v2/images/$IMAGE_ID/actions`. Set the `type` attribute to `convert`.
     *
     * ## Transfer an Image
     *
     * To transfer an image to another region, send a POST request to
     * `/v2/images/$IMAGE_ID/actions`. Set the `type` attribute to `transfer` and set
     * `region` attribute to the slug identifier of the region you wish to transfer
     * to.
     *
     * @param int $imageId A unique number that can be used to identify and reference a specific image.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Action|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imageActionsPost(int $imageId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImageActionsPost($imageId, $requestBody), $fetch);
    }
    /**
     * To retrieve the status of an image action, send a GET request to `/v2/images/$IMAGE_ID/actions/$IMAGE_ACTION_ID`.
     * @param int $imageId A unique number that can be used to identify and reference a specific image.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Action|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function imageActionsGet(int $imageId, int $actionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ImageActionsGet($imageId, $actionId), $fetch);
    }
    /**
     * To list all of the Kubernetes clusters on your account, send a GET request
     * to `/v2/kubernetes/clusters`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListClustersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListClustersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListClustersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllClusters|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesListClusters(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesListClusters($queryParameters), $fetch);
    }
    /**
     * To create a new Kubernetes cluster, send a POST request to
     * `/v2/kubernetes/clusters`. The request must contain at least one node pool
     * with at least one worker.
     *
     * The request may contain a maintenance window policy describing a time period
     * when disruptive maintenance tasks may be carried out. Omitting the policy
     * implies that a window will be chosen automatically. See
     * [here](https://docs.digitalocean.com/products/kubernetes/how-to/upgrade-cluster/)
     * for details.
     *
     * @param \Jane\Generated\DigitalOcean\Model\Cluster $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesCreateClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesCreateClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesCreateClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseClusterCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesCreateCluster(\Jane\Generated\DigitalOcean\Model\Cluster $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesCreateCluster($requestBody), $fetch);
    }
    /**
     * To delete a Kubernetes cluster and all services deployed to it, send a DELETE
     * request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID`.
     *
     * A 204 status code with no body will be returned in response to a successful
     * request.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesDeleteCluster(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesDeleteCluster($clusterId), $fetch);
    }
    /**
     * To show information about an existing Kubernetes cluster, send a GET request
     * to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID`.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingCluster|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetCluster(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetCluster($clusterId), $fetch);
    }
    /**
     * To update a Kubernetes cluster, send a PUT request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID` and specify one or more of the
     * attributes below.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param \Jane\Generated\DigitalOcean\Model\ClusterUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUpdatedCluster|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesUpdateCluster(string $clusterId, \Jane\Generated\DigitalOcean\Model\ClusterUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesUpdateCluster($clusterId, $requestBody), $fetch);
    }
    /**
     * To list the associated billable resources that can be destroyed along with a cluster, send a GET request to the `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/destroy_with_associated_resources` endpoint.
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListAssociatedResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListAssociatedResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListAssociatedResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListAssociatedResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesListAssociatedResources(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesListAssociatedResources($clusterId), $fetch);
    }
    /**
     * To delete a Kubernetes cluster along with a subset of its associated resources,
     * send a DELETE request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/destroy_with_associated_resources/selective`.
     *
     * The JSON body of the request should include `load_balancers`, `volumes`, or
     * `volume_snapshots` keys each set to an array of IDs for the associated
     * resources to be destroyed.
     *
     * The IDs can be found by querying the cluster's associated resources endpoint.
     * Any associated resource not included in the request will remain and continue
     * to accrue changes on your account.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesSelectiveInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesDestroyAssociatedResourcesSelective(string $clusterId, \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesDestroyAssociatedResourcesSelective($clusterId, $requestBody), $fetch);
    }
    /**
     * To delete a Kubernetes cluster with all of its associated resources, send a
     * DELETE request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/destroy_with_associated_resources/dangerous`.
     * A 204 status code with no body will be returned in response to a successful request.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDestroyAssociatedResourcesDangerousInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesDestroyAssociatedResourcesDangerous(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesDestroyAssociatedResourcesDangerous($clusterId), $fetch);
    }
    /**
     * This endpoint returns a kubeconfig file in YAML format. It can be used to
     * connect to and administer the cluster using the Kubernetes command line tool,
     * `kubectl`, or other programs supporting kubeconfig files (e.g., client libraries).
     *
     * The resulting kubeconfig file uses token-based authentication for clusters
     * supporting it, and certificate-based authentication otherwise. For a list of
     * supported versions and more information, see "[How to Connect to a DigitalOcean
     * Kubernetes Cluster](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/)".
     *
     * To retrieve a kubeconfig file for use with a Kubernetes cluster, send a GET
     * request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/kubeconfig`.
     *
     * Clusters supporting token-based authentication may define an expiration by
     * passing a duration in seconds as a query parameter to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/kubeconfig?expiry_seconds=$DURATION_IN_SECONDS`.
     * If not set or 0, then the token will have a 7 day expiry. The query parameter
     * has no impact in certificate-based authentication.
     *
     * Kubernetes Roles granted to a user with a token-based kubeconfig are derived from that user's
     * DigitalOcean role. Predefined roles (Owner, Member, Modifier etc.) have an automatic mapping
     * to Kubernetes roles. Custom roles are not automatically mapped to any Kubernetes roles,
     * and require [additional configuration](https://docs.digitalocean.com/products/kubernetes/how-to/set-up-custom-rolebindings/)
     * by a cluster administrator.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "expiry_seconds"?: int, //The duration in seconds that the returned Kubernetes credentials will be valid. If not set or 0, the credentials will have a 7 day expiry.
     * } $queryParameters
     * @param array $accept Accept content header application/yaml|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetKubeconfigInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetKubeconfig(string $clusterId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetKubeconfig($clusterId, $queryParameters, $accept), $fetch);
    }
    /**
     * This endpoint returns a JSON object . It can be used to programmatically
     * construct Kubernetes clients which cannot parse kubeconfig files.
     *
     * The resulting JSON object contains token-based authentication for clusters
     * supporting it, and certificate-based authentication otherwise. For a list of
     * supported versions and more information, see "[How to Connect to a DigitalOcean
     * Kubernetes Cluster](https://docs.digitalocean.com/products/kubernetes/how-to/connect-to-cluster/)".
     *
     * To retrieve credentials for accessing a Kubernetes cluster, send a GET
     * request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/credentials`.
     *
     * Clusters supporting token-based authentication may define an expiration by
     * passing a duration in seconds as a query parameter to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/credentials?expiry_seconds=$DURATION_IN_SECONDS`.
     * If not set or 0, then the token will have a 7 day expiry. The query parameter
     * has no impact in certificate-based authentication.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "expiry_seconds"?: int, //The duration in seconds that the returned Kubernetes credentials will be valid. If not set or 0, the credentials will have a 7 day expiry.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetCredentialsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Credentials|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetCredentials(string $clusterId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetCredentials($clusterId, $queryParameters), $fetch);
    }
    /**
     * To determine whether a cluster can be upgraded, and the versions to which it
     * can be upgraded, send a GET request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/upgrades`.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetAvailableUpgradesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetAvailableUpgradesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetAvailableUpgradesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetAvailableUpgradesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAvailableUpgrades|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetAvailableUpgrades(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetAvailableUpgrades($clusterId), $fetch);
    }
    /**
     * To immediately upgrade a Kubernetes cluster to a newer patch release of
     * Kubernetes, send a POST request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/upgrade`.
     * The body of the request must specify a version attribute.
     *
     * Available upgrade versions for a cluster can be fetched from
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/upgrades`.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdUpgradePostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpgradeClusterUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpgradeClusterNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpgradeClusterTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpgradeClusterInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesUpgradeCluster(string $clusterId, \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdUpgradePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesUpgradeCluster($clusterId, $requestBody), $fetch);
    }
    /**
     * To list all of the node pools in a Kubernetes clusters, send a GET request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools`.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListNodePoolsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListNodePoolsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListNodePoolsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListNodePoolsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllNodePools|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesListNodePools(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesListNodePools($clusterId), $fetch);
    }
    /**
     * To add an additional node pool to a Kubernetes clusters, send a POST request
     * to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools` with the following
     * attributes.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param \Jane\Generated\DigitalOcean\Model\KubernetesNodePool $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddNodePoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddNodePoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddNodePoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddNodePoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNodePoolCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesAddNodePool(string $clusterId, \Jane\Generated\DigitalOcean\Model\KubernetesNodePool $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesAddNodePool($clusterId, $requestBody), $fetch);
    }
    /**
     * To delete a node pool, send a DELETE request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID`.
     *
     * A 204 status code with no body will be returned in response to a successful
     * request. Nodes in the pool will subsequently be drained and deleted.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodePoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodePoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodePoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodePoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesDeleteNodePool(string $clusterId, string $nodePoolId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesDeleteNodePool($clusterId, $nodePoolId), $fetch);
    }
    /**
     * To show information about a specific node pool in a Kubernetes cluster, send
     * a GET request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID`.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetNodePoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetNodePoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetNodePoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetNodePoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingNodePool|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetNodePool(string $clusterId, string $nodePoolId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetNodePool($clusterId, $nodePoolId), $fetch);
    }
    /**
     * To update the name of a node pool, edit the tags applied to it, or adjust its
     * number of nodes, send a PUT request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID` with the
     * following attributes.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateNodePoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateNodePoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateNodePoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesUpdateNodePoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseNodePoolUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesUpdateNodePool(string $clusterId, string $nodePoolId, \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesUpdateNodePool($clusterId, $nodePoolId, $requestBody), $fetch);
    }
    /**
     * To delete a single node in a pool, send a DELETE request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID/nodes/$NODE_ID`.
     *
     * Appending the `skip_drain=1` query parameter to the request causes node
     * draining to be skipped. Omitting the query parameter or setting its value to
     * `0` carries out draining prior to deletion.
     *
     * Appending the `replace=1` query parameter to the request causes the node to
     * be replaced by a new one after deletion. Omitting the query parameter or
     * setting its value to `0` deletes without replacement.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param string $nodeId A unique ID that can be used to reference a node in a Kubernetes node pool.
     * @param array{
     *    "skip_drain"?: int, //Specifies whether or not to drain workloads from a node before it is deleted. Setting it to `1` causes node draining to be skipped. Omitting the query parameter or setting its value to `0` carries out draining prior to deletion.
     *    "replace"?: int, //Specifies whether or not to replace a node after it has been deleted. Setting it to `1` causes the node to be replaced by a new one after deletion. Omitting the query parameter or setting its value to `0` deletes without replacement.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesDeleteNodeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesDeleteNode(string $clusterId, string $nodePoolId, string $nodeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesDeleteNode($clusterId, $nodePoolId, $nodeId, $queryParameters), $fetch);
    }
    /**
     * The endpoint has been deprecated. Please use the DELETE
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/node_pools/$NODE_POOL_ID/nodes/$NODE_ID`
     * method instead.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $nodePoolId A unique ID that can be used to reference a Kubernetes node pool.
     * @param \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRecycleNodePoolInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesRecycleNodePool(string $clusterId, string $nodePoolId, \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesRecycleNodePool($clusterId, $nodePoolId, $requestBody), $fetch);
    }
    /**
     * To show information the user associated with a Kubernetes cluster, send a GET
     * request to `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/user`.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterUserUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterUserNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterUserTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterUserInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\User|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetClusterUser(string $clusterId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetClusterUser($clusterId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListOptionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListOptionsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListOptionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesListOptionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\KubernetesOptions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesListOptions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesListOptions(), $fetch);
    }
    /**
     * To request clusterlint diagnostics for your cluster, send a GET request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/clusterlint`. If the `run_id` query
     * parameter is provided, then the diagnostics for the specific run is fetched.
     * By default, the latest results are shown.
     *
     * To find out how to address clusterlint feedback, please refer to
     * [the clusterlint check documentation](https://github.com/digitalocean/clusterlint/blob/master/checks.md).
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "run_id"?: string, //Specifies the clusterlint run whose results will be retrieved.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetClusterLintResultsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ClusterlintResults|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetClusterLintResults(string $clusterId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetClusterLintResults($clusterId, $queryParameters), $fetch);
    }
    /**
     * Clusterlint helps operators conform to Kubernetes best practices around
     * resources, security and reliability to avoid common problems while operating
     * or upgrading the clusters.
     *
     * To request a clusterlint run on your cluster, send a POST request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/clusterlint`. This will run all
     * checks present in the `doks` group by default, if a request body is not
     * specified. Optionally specify the below attributes.
     *
     * For information about the available checks, please refer to
     * [the clusterlint check documentation](https://github.com/digitalocean/clusterlint/blob/master/checks.md).
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param null|\Jane\Generated\DigitalOcean\Model\ClusterlintRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRunClusterLintUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRunClusterLintNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRunClusterLintTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRunClusterLintInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseClusterlintRun|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesRunClusterLint(string $clusterId, ?\Jane\Generated\DigitalOcean\Model\ClusterlintRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesRunClusterLint($clusterId, $requestBody), $fetch);
    }
    /**
     * To remove the container registry from Kubernetes clusters, send a DELETE request to `/v2/kubernetes/registry`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ClusterRegistry $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRemoveRegistryUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRemoveRegistryTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRemoveRegistryInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesRemoveRegistry(?\Jane\Generated\DigitalOcean\Model\ClusterRegistry $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesRemoveRegistry($requestBody), $fetch);
    }
    /**
     * To integrate the container registry with Kubernetes clusters, send a POST request to `/v2/kubernetes/registry`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ClusterRegistry $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddRegistryUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddRegistryTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddRegistryInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesAddRegistry(?\Jane\Generated\DigitalOcean\Model\ClusterRegistry $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesAddRegistry($requestBody), $fetch);
    }
    /**
     * To remove the container registries from Kubernetes clusters, send a DELETE request to `/v2/kubernetes/registries`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ClusterRegistries $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRemoveRegistriesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRemoveRegistriesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesRemoveRegistriesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesRemoveRegistries(?\Jane\Generated\DigitalOcean\Model\ClusterRegistries $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesRemoveRegistries($requestBody), $fetch);
    }
    /**
     * To integrate the container registries with Kubernetes clusters, send a POST request to `/v2/kubernetes/registries`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ClusterRegistries $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddRegistriesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddRegistriesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesAddRegistriesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesAddRegistries(?\Jane\Generated\DigitalOcean\Model\ClusterRegistries $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesAddRegistries($requestBody), $fetch);
    }
    /**
     * To retrieve status messages for a Kubernetes cluster, send a GET request to
     * `/v2/kubernetes/clusters/$K8S_CLUSTER_ID/status_messages`. Status messages inform users of any issues that come up during the cluster lifecycle.
     *
     * @param string $clusterId A unique ID that can be used to reference a Kubernetes cluster.
     * @param array{
     *    "since"?: string, //A timestamp used to return status messages emitted since the specified time. The timestamp should be in ISO8601 format.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetStatusMessagesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetStatusMessagesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetStatusMessagesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\KubernetesGetStatusMessagesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseStatusMessages|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function kubernetesGetStatusMessages(string $clusterId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\KubernetesGetStatusMessages($clusterId, $queryParameters), $fetch);
    }
    /**
     * To list all of the load balancer instances on your account, send a GET request
     * to `/v2/load_balancers`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllLoadBalancers|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersList($queryParameters), $fetch);
    }
    /**
     * To create a new load balancer instance, send a POST request to
     * `/v2/load_balancers`.
     *
     * You can specify the Droplets that will sit behind the load balancer using one
     * of two methods:
     *
     * * Set `droplet_ids` to a list of specific Droplet IDs.
     * * Set `tag` to the name of a tag. All Droplets with this tag applied will be
     *   assigned to the load balancer. Additional Droplets will be automatically
     *   assigned as they are tagged.
     * These methods are mutually exclusive.
     *
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseLoadBalancerCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersCreate($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersCreate($requestBody), $fetch);
    }
    /**
     * To delete a load balancer instance, disassociating any Droplets assigned to it
     * and removing it from your account, send a DELETE request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersDelete(string $lbId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersDelete($lbId), $fetch);
    }
    /**
     * To show information about a load balancer instance, send a GET request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID`.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingLoadBalancer|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersGet(string $lbId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersGet($lbId), $fetch);
    }
    /**
     * To update a load balancer's settings, send a PUT request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID`. The request should contain a full
     * representation of the load balancer including existing attributes. It may
     * contain _one of_ the `droplets_ids` or `tag` attributes as they are mutually
     * exclusive. **Note that any attribute that is not provided will be reset to its
     * default value.**
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseUpdatedLoadBalancer|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersUpdate(string $lbId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersUpdate($lbId, $requestBody), $fetch);
    }
    /**
     * To delete a Global load balancer CDN cache, send a DELETE request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID/cache`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteCacheUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteCacheNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteCacheTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersDeleteCacheInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersDeleteCache(string $lbId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersDeleteCache($lbId), $fetch);
    }
    /**
     * To remove a Droplet from a load balancer instance, send a DELETE request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID/droplets`. In the body of the request,
     * there should be a `droplet_ids` attribute containing a list of Droplet IDs.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsDeleteBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveDropletsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveDropletsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveDropletsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveDropletsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersRemoveDroplets(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsDeleteBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersRemoveDroplets($lbId, $requestBody), $fetch);
    }
    /**
     * To assign a Droplet to a load balancer instance, send a POST request to
     * `/v2/load_balancers/$LOAD_BALANCER_ID/droplets`. In the body of the request,
     * there should be a `droplet_ids` attribute containing a list of Droplet IDs.
     * Individual Droplets can not be added to a load balancer configured with a
     * Droplet tag. Attempting to do so will result in a "422 Unprocessable Entity"
     * response from the API.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddDropletsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersAddDroplets(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersAddDroplets($lbId, $requestBody), $fetch);
    }
    /**
     * To remove forwarding rules from a load balancer instance, send a DELETE
     * request to `/v2/load_balancers/$LOAD_BALANCER_ID/forwarding_rules`. In the
     * body of the request, there should be a `forwarding_rules` attribute containing
     * an array of rules to be removed.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersRemoveForwardingRulesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersRemoveForwardingRules(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersRemoveForwardingRules($lbId, $requestBody), $fetch);
    }
    /**
     * To add an additional forwarding rule to a load balancer instance, send a POST
     * request to `/v2/load_balancers/$LOAD_BALANCER_ID/forwarding_rules`. In the body
     * of the request, there should be a `forwarding_rules` attribute containing an
     * array of rules to be added.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $lbId A unique identifier for a load balancer.
     * @param \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\LoadBalancersAddForwardingRulesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function loadBalancersAddForwardingRules(string $lbId, \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\LoadBalancersAddForwardingRules($lbId, $requestBody), $fetch);
    }
    /**
     * Returns all alert policies that are configured for the given account. To List all alert policies, send a GET request to `/v2/monitoring/alerts`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListAlertPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListAlertPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListAlertPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseListAlertPolicyResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringListAlertPolicy(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringListAlertPolicy($queryParameters), $fetch);
    }
    /**
     * To create a new alert, send a POST request to `/v2/monitoring/alerts`.
     * @param \Jane\Generated\DigitalOcean\Model\AlertPolicyRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateAlertPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateAlertPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateAlertPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAlertPolicyResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringCreateAlertPolicy(\Jane\Generated\DigitalOcean\Model\AlertPolicyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringCreateAlertPolicy($requestBody), $fetch);
    }
    /**
     * To delete an alert policy, send a DELETE request to `/v2/monitoring/alerts/{alert_uuid}`
     * @param string $alertUuid A unique identifier for an alert policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteAlertPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteAlertPolicyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteAlertPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteAlertPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringDeleteAlertPolicy(string $alertUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringDeleteAlertPolicy($alertUuid), $fetch);
    }
    /**
     * To retrieve a given alert policy, send a GET request to `/v2/monitoring/alerts/{alert_uuid}`
     * @param string $alertUuid A unique identifier for an alert policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAlertPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAlertPolicyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAlertPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAlertPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAlertPolicyResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetAlertPolicy(string $alertUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetAlertPolicy($alertUuid), $fetch);
    }
    /**
     * To update en existing policy, send a PUT request to `v2/monitoring/alerts/{alert_uuid}`.
     * @param string $alertUuid A unique identifier for an alert policy.
     * @param \Jane\Generated\DigitalOcean\Model\AlertPolicyRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateAlertPolicyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateAlertPolicyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateAlertPolicyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateAlertPolicyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAlertPolicyResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringUpdateAlertPolicy(string $alertUuid, \Jane\Generated\DigitalOcean\Model\AlertPolicyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringUpdateAlertPolicy($alertUuid, $requestBody), $fetch);
    }
    /**
     * To retrieve bandwidth metrics for a given Droplet, send a GET request to `/v2/monitoring/metrics/droplet/bandwidth`. Use the `interface` query parameter to specify if the results should be for the `private` or `public` interface. Use the `direction` query parameter to specify if the results should be for `inbound` or `outbound` traffic.
     * The metrics in the response body are in megabits per second (Mbps).
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "interface": string, //The network interface.
     *    "direction": string, //The traffic direction.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletBandwidthMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletBandwidthMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletBandwidthMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletBandwidthMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletBandwidthMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve CPU metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/cpu`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletCpuMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletCpuMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletCpuMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletCpuMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletCpuMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve filesystem free metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/filesystem_free`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletFilesystemFreeMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletFilesystemFreeMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletFilesystemFreeMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletFilesystemFreeMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletFilesystemFreeMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve filesystem size metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/filesystem_size`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletFilesystemSizeMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletFilesystemSizeMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletFilesystemSizeMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletFilesystemSizeMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletFilesystemSizeMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve 1 minute load average metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/load_1`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad1MetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad1MetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad1MetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletLoad1Metrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletLoad1Metrics($queryParameters), $fetch);
    }
    /**
     * To retrieve 5 minute load average metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/load_5`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad5MetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad5MetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad5MetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletLoad5Metrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletLoad5Metrics($queryParameters), $fetch);
    }
    /**
     * To retrieve 15 minute load average metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/load_15`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad15MetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad15MetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletLoad15MetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletLoad15Metrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletLoad15Metrics($queryParameters), $fetch);
    }
    /**
     * To retrieve cached memory metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/memory_cached`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryCachedMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryCachedMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryCachedMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletMemoryCachedMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletMemoryCachedMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve free memory metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/memory_free`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryFreeMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryFreeMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryFreeMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletMemoryFreeMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletMemoryFreeMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve total memory metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/memory_total`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryTotalMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryTotalMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryTotalMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletMemoryTotalMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletMemoryTotalMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve available memory metrics for a given droplet, send a GET request to `/v2/monitoring/metrics/droplet/memory_available`.
     * @param array{
     *    "host_id": string, //The droplet ID.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryAvailableMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryAvailableMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletMemoryAvailableMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletMemoryAvailableMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletMemoryAvailableMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve memory percentage metrics for a given app, send a GET request to `/v2/monitoring/metrics/apps/memory_percentage`.
     * @param array{
     *    "app_id": string, //The app UUID.
     *    "app_component"?: string, //The app component name.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppMemoryPercentageMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppMemoryPercentageMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppMemoryPercentageMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetAppMemoryPercentageMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetAppMemoryPercentageMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve cpu percentage metrics for a given app, send a GET request to `/v2/monitoring/metrics/apps/cpu_percentage`.
     * @param array{
     *    "app_id": string, //The app UUID.
     *    "app_component"?: string, //The app component name.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppCPUPercentageMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppCPUPercentageMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppCPUPercentageMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetAppCPUPercentageMetrics(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetAppCPUPercentageMetrics($queryParameters), $fetch);
    }
    /**
     * To retrieve restart count metrics for a given app, send a GET request to `/v2/monitoring/metrics/apps/restart_count`.
     * @param array{
     *    "app_id": string, //The app UUID.
     *    "app_component"?: string, //The app component name.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppRestartCountMetricsYmlUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppRestartCountMetricsYmlTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetAppRestartCountMetricsYmlInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetAppRestartCountMetricsYml(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetAppRestartCountMetricsYml($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend total current active connections for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_connections_current`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendConnectionsCurrentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendConnectionsCurrentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendConnectionsCurrentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendConnectionsCurrent(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendConnectionsCurrent($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend max connections limit for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_connections_limit`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendConnectionsLimitUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendConnectionsLimitTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendConnectionsLimitInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendConnectionsLimit(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendConnectionsLimit($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend average percentage CPU utilization for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_cpu_utilization`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendCpuUtilizationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendCpuUtilizationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendCpuUtilizationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendCpuUtilization(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendCpuUtilization($queryParameters), $fetch);
    }
    /**
     * To retrieve firewall dropped bytes for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_firewall_dropped_bytes`. This is currently only supported for network load balancers.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendFirewallDroppedBytesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendFirewallDroppedBytesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendFirewallDroppedBytesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendFirewallDroppedBytes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendFirewallDroppedBytes($queryParameters), $fetch);
    }
    /**
     * To retrieve firewall dropped packets per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_firewall_dropped_packets`. This is currently only supported for network load balancers.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendFirewallDroppedPacketsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendFirewallDroppedPacketsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendFirewallDroppedPacketsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendFirewallDroppedPackets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendFirewallDroppedPackets($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend HTTP rate of response code for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_http_responses`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendHttpResponsesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendHttpResponsesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendHttpResponsesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendHttpResponses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendHttpResponses($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend HTTP requests per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_http_requests_per_second`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendHttpRequestsPerSecondUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendHttpRequestsPerSecondTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendHttpRequestsPerSecondInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendHttpRequestsPerSecond(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendHttpRequestsPerSecond($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend HTTP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_network_throughput_http`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputHttpUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputHttpTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputHttpInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendNetworkThroughputHttp(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendNetworkThroughputHttp($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend UDP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_network_throughput_udp`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputUdpInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendNetworkThroughputUdp(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendNetworkThroughputUdp($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend TCP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_network_throughput_tcp`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputTcpUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputTcpTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNetworkThroughputTcpInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendNetworkThroughputTcp(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendNetworkThroughputTcp($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend TCP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_nlb_tcp_network_throughput`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbTcpNetworkThroughputUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbTcpNetworkThroughputTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbTcpNetworkThroughputInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendNlbTcpNetworkThroughput(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendNlbTcpNetworkThroughput($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend UDP throughput in bytes per second for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_nlb_udp_network_throughput`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendNlbUdpNetworkThroughputInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendNlbUdpNetworkThroughput(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendNlbUdpNetworkThroughput($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend current TLS connections rate for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_tls_connections_current`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsCurrentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsCurrentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsCurrentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendTlsConnectionsCurrent(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendTlsConnectionsCurrent($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend max TLS connections limit for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_tls_connections_limit`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsLimitUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsLimitTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsLimitInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendTlsConnectionsLimit(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendTlsConnectionsLimit($queryParameters), $fetch);
    }
    /**
     * To retrieve frontend closed TLS connections for exceeded rate limit for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/frontend_tls_connections_exceeding_rate_limit`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsExceedingRateLimitUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsExceedingRateLimitTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbFrontendTlsConnectionsExceedingRateLimitInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbFrontendTlsConnectionsExceedingRateLimit(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbFrontendTlsConnectionsExceedingRateLimit($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets average HTTP session duration in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_session_duration_avg`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDurationAvgUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDurationAvgTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDurationAvgInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpSessionDurationAvg(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpSessionDurationAvg($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets 50th percentile HTTP session duration in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_session_duration_50p`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDuration50pUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDuration50pTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDuration50pInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpSessionDuration50p(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpSessionDuration50p($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets 95th percentile HTTP session duration in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_session_duration_95p`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDuration95pUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDuration95pTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpSessionDuration95pInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpSessionDuration95p(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpSessionDuration95p($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets average HTTP response time in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_response_time_avg`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTimeAvgUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTimeAvgTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTimeAvgInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpResponseTimeAvg(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpResponseTimeAvg($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets 50th percentile HTTP response time in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_response_time_50p`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime50pUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime50pTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime50pInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpResponseTime50p(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpResponseTime50p($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets 95th percentile HTTP response time in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_response_time_95p`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime95pUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime95pTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime95pInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpResponseTime95p(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpResponseTime95p($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets 99th percentile HTTP response time in seconds for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_response_time_99p`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime99pUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime99pTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponseTime99pInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpResponseTime99p(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpResponseTime99p($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets queue size for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_queue_size`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsQueueSizeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsQueueSizeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsQueueSizeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsQueueSize(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsQueueSize($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets HTTP rate of response code for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_http_responses`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponsesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponsesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHttpResponsesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHttpResponses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHttpResponses($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets active connections for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_connections`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsConnectionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsConnectionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsConnectionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsConnections(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsConnections($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets health check status for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_health_checks`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHealthChecksUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHealthChecksTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsHealthChecksInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsHealthChecks(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsHealthChecks($queryParameters), $fetch);
    }
    /**
     * To retrieve Droplets downtime status for a given load balancer, send a GET request to `/v2/monitoring/metrics/load_balancer/droplets_downtime`.
     * @param array{
     *    "lb_id": string, //A unique identifier for a load balancer.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsDowntimeUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsDowntimeTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetLbDropletsDowntimeInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetLbDropletsDowntime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetLbDropletsDowntime($queryParameters), $fetch);
    }
    /**
     * To retrieve the current size for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/current_instances`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentInstancesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentInstancesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentInstancesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletAutoscaleCurrentInstances(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletAutoscaleCurrentInstances($queryParameters), $fetch);
    }
    /**
     * To retrieve the target size for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/target_instances`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetInstancesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletAutoscaleTargetInstances(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletAutoscaleTargetInstances($queryParameters), $fetch);
    }
    /**
     * To retrieve the current average CPU utilization for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/current_cpu_utilization`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentCpuUtilizationYmlUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentCpuUtilizationYmlTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentCpuUtilizationYmlInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletAutoscaleCurrentCpuUtilizationYml(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletAutoscaleCurrentCpuUtilizationYml($queryParameters), $fetch);
    }
    /**
     * To retrieve the target average CPU utilization for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/target_cpu_utilization`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetCpuUtilizationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetCpuUtilizationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetCpuUtilizationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletAutoscaleTargetCpuUtilization(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletAutoscaleTargetCpuUtilization($queryParameters), $fetch);
    }
    /**
     * To retrieve the current average memory utilization for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/current_memory_utilization`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentMemoryUtilizationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentMemoryUtilizationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleCurrentMemoryUtilizationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletAutoscaleCurrentMemoryUtilization(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletAutoscaleCurrentMemoryUtilization($queryParameters), $fetch);
    }
    /**
     * To retrieve the target average memory utilization for a given Droplet Autoscale Pool, send a GET request to `/v2/monitoring/metrics/droplet_autoscale/target_memory_utilization`.
     * @param array{
     *    "autoscale_pool_id": string, //A unique identifier for an autoscale pool.
     *    "start": string, //UNIX timestamp to start metric window.
     *    "end": string, //UNIX timestamp to end metric window.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetMemoryUtilizationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetMemoryUtilizationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDropletAutoscaleTargetMemoryUtilizationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Metrics|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDropletAutoscaleTargetMemoryUtilization(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDropletAutoscaleTargetMemoryUtilization($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListDestinationsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListDestinationsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListDestinationsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListDestinationsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseMonitoringListDestinations|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringListDestinations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringListDestinations(), $fetch);
    }
    /**
     * To create a new destination, send a POST request to `/v2/monitoring/sinks/destinations`.
     * @param \Jane\Generated\DigitalOcean\Model\DestinationRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateDestinationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateDestinationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateDestinationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateDestinationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDestination|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringCreateDestination(\Jane\Generated\DigitalOcean\Model\DestinationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringCreateDestination($requestBody), $fetch);
    }
    /**
     * To delete a destination and all associated sinks, send a DELETE request to `/v2/monitoring/sinks/destinations/${destination_uuid}`.
     * @param string $destinationUuid A unique identifier for a destination.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteDestinationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteDestinationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteDestinationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteDestinationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringDeleteDestination(string $destinationUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringDeleteDestination($destinationUuid), $fetch);
    }
    /**
     * To get the details of a destination, send a GET request to `/v2/monitoring/sinks/destinations/${destination_uuid}`.
     * @param string $destinationUuid A unique identifier for a destination.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDestinationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDestinationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDestinationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetDestinationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDestination|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetDestination(string $destinationUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetDestination($destinationUuid), $fetch);
    }
    /**
     * To update the details of a destination, send a PATCH request to `/v2/monitoring/sinks/destinations/${destination_uuid}`.
     * @param string $destinationUuid A unique identifier for a destination.
     * @param \Jane\Generated\DigitalOcean\Model\DestinationRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateDestinationUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateDestinationNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateDestinationTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringUpdateDestinationInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringUpdateDestination(string $destinationUuid, \Jane\Generated\DigitalOcean\Model\DestinationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringUpdateDestination($destinationUuid, $requestBody), $fetch);
    }
    /**
     * To list all sinks, send a GET request to `/v2/monitoring/sinks`.
     * @param array{
     *    "resource_id"?: string, //A unique URN for a resource.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListSinksUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListSinksNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListSinksTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringListSinksInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseListSinks|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringListSinks(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringListSinks($queryParameters), $fetch);
    }
    /**
     * To create a new sink, send a POST request to `/v2/monitoring/sinks`. Forwards logs from the
     * resources identified in `resources` to the specified pre-existing destination.
     *
     * @param \Jane\Generated\DigitalOcean\Model\V2MonitoringSinksPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateSinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateSinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateSinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringCreateSinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringCreateSink(\Jane\Generated\DigitalOcean\Model\V2MonitoringSinksPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringCreateSink($requestBody), $fetch);
    }
    /**
     * To delete a sink, send a DELETE request to `/v2/monitoring/sinks/${sink_uuid}`.
     * @param string $sinkUuid A unique identifier for a sink.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteSinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteSinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteSinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringDeleteSinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringDeleteSink(string $sinkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringDeleteSink($sinkUuid), $fetch);
    }
    /**
     * To get the details of a sink (resources and destination), send a GET request to `/v2/monitoring/sinks/${sink_uuid}`.
     * @param string $sinkUuid A unique identifier for a sink.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetSinkUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetSinkNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetSinkTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\MonitoringGetSinkInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinks|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function monitoringGetSink(string $sinkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\MonitoringGetSink($sinkUuid), $fetch);
    }
    /**
     * To list NFS shares, send a GET request to `/v2/nfs?region=${region}`.
     *
     * A successful request will return all NFS shares belonging to the authenticated user.
     *
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NfsListResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsList($queryParameters), $fetch);
    }
    /**
     * To create a new NFS share, send a POST request to `/v2/nfs`.
     *
     * @param \Jane\Generated\DigitalOcean\Model\NfsRequest $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NfsCreateResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsCreate(\Jane\Generated\DigitalOcean\Model\NfsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsCreate($requestBody), $fetch);
    }
    /**
     * To delete an NFS share, send a DELETE request to `/v2/nfs/{nfs_id}?region=${region}`.
     *
     * A successful request will return a `204 No Content` status code.
     *
     * @param string $nfsId The unique ID of the NFS share
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsDelete(string $nfsId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsDelete($nfsId, $queryParameters), $fetch);
    }
    /**
     * To get an NFS share, send a GET request to `/v2/nfs/{nfs_id}?region=${region}`.
     *
     * A successful request will return the NFS share.
     *
     * @param string $nfsId The unique ID of the NFS share
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NfsGetResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsGet(string $nfsId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsGet($nfsId, $queryParameters), $fetch);
    }
    /**
     * To execute an action (such as resize) on a specified NFS share,
     * send a POST request to `/v2/nfs/{nfs_id}/actions`. In the JSON body
     * to the request, set the `type` attribute to on of the supported action types:
     *
     * | Action                           | Details |
     * | -------------------------------- | ----------- |
     * | <nobr>`resize`</nobr>            | Resizes an NFS share. Set the size_gib attribute to a desired value in GiB |
     * | <nobr>`snapshot`</nobr>          | Takes a snapshot of an NFS share |
     * | <nobr>`attach`</nobr>            | Attaches an NFS share to a VPC. Set the vpc_id attribute to the desired VPC ID |
     * | <nobr>`detach`</nobr>            | Detaches an NFS share from a VPC. Set the vpc_id attribute to the desired VPC ID |
     *
     * @param string $nfsId The unique ID of the NFS share
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsCreateActionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NfsActionsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsCreateAction(string $nfsId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsCreateAction($nfsId, $requestBody), $fetch);
    }
    /**
     * To list all NFS snapshots, send a GET request to `/v2/nfs/snapshots?region=${region}&share_id={share_id}`.
     *
     * A successful request will return all NFS snapshots belonging to the authenticated user in the specified region.
     *
     * Optionally, you can filter snapshots by a specific NFS share by including the `share_id` query parameter.
     *
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *    "share_id"?: string, //The unique ID of an NFS share. If provided, only snapshots of this specific share will be returned.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListSnapshotUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListSnapshotNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListSnapshotTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsListSnapshotInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NfsSnapshotListResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsListSnapshot(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsListSnapshot($queryParameters), $fetch);
    }
    /**
     * To delete an NFS snapshot, send a DELETE request to `/v2/nfs/snapshots/{nfs_snapshot_id}?region=${region}`.
     *
     * A successful request will return a `204 No Content` status code.
     *
     * @param string $nfsSnapshotId The unique ID of the NFS snapshot
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsDeleteSnapshot(string $nfsSnapshotId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsDeleteSnapshot($nfsSnapshotId, $queryParameters), $fetch);
    }
    /**
     * To get an NFS snapshot, send a GET request to `/v2/nfs/snapshots/{nfs_snapshot_id}?region=${region}`.
     *
     * A successful request will return the NFS snapshot.
     *
     * @param string $nfsSnapshotId The unique ID of the NFS snapshot
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NfsSnapshotGetResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function nfsGetSnapshot(string $nfsSnapshotId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\NfsGetSnapshot($nfsSnapshotId, $queryParameters), $fetch);
    }
    /**
     * To list all of the Partner Attachments on your account, send a `GET` request to `/v2/partner_network_connect/attachments`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllPartnerAttachments|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsList($queryParameters), $fetch);
    }
    /**
     * To create a new partner attachment, send a `POST` request to
     * `/v2/partner_network_connect/attachments` with a JSON object containing the
     * required configuration details.
     *
     * @param null|\Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachment|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsCreate(?\Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsCreate($requestBody), $fetch);
    }
    /**
     * To delete an existing partner attachment, send a `DELETE` request to
     * `/v2/partner_network_connect/attachments/{pa_id}`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentDeleting|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsDelete(string $paId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsDelete($paId), $fetch);
    }
    /**
     * To get the details of a partner attachment, send a `GET` request to
     * `/v2/partner_network_connect/attachments/{pa_id}`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachment|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsGet(string $paId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsGet($paId), $fetch);
    }
    /**
     * To update an existing partner attachment, send a `PATCH` request to
     * `/v2/partner_network_connect/attachments/{pa_id}` with a JSON object containing the
     * fields to be updated.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachment|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsPatch(string $paId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsPatch($paId, $requestBody), $fetch);
    }
    /**
     * To get the current BGP auth key for a partner attachment, send a `GET` request to
     * `/v2/partner_network_connect/attachments/{pa_id}/bgp_auth_key`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetBgpAuthKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetBgpAuthKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetBgpAuthKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetBgpAuthKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentBgpAuthKey|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsGetBgpAuthKey(string $paId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsGetBgpAuthKey($paId), $fetch);
    }
    /**
     * To list all remote routes associated with a partner attachment, send a `GET` request to
     * `/v2/partner_network_connect/attachments/{pa_id}/remote_routes`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListRemoteRoutesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListRemoteRoutesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListRemoteRoutesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsListRemoteRoutesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllPartnerAttachmentRemoteRoutes|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsListRemoteRoutes(string $paId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsListRemoteRoutes($paId, $queryParameters), $fetch);
    }
    /**
     * To get the current service key for a partner attachment, send a `GET` request to
     * `/v2/partner_network_connect/attachments/{pa_id}/service_key`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsGetServiceKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentServiceKey|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsGetServiceKey(string $paId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsGetServiceKey($paId), $fetch);
    }
    /**
     * This operation generates a new service key for the specified partner attachment. The operation is asynchronous, and the response is an empty JSON object returned with a 202 status code. To poll for the new service key, send a `GET` request to `/v2/partner_network_connect/attachments/{pa_id}/service_key`.
     *
     * @param string $paId A unique identifier for a partner attachment.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\PartnerAttachmentsCreateServiceKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseEmptyJsonObject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function partnerAttachmentsCreateServiceKey(string $paId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\PartnerAttachmentsCreateServiceKey($paId), $fetch);
    }
    /**
     * To list all your projects, send a GET request to `/v2/projects`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseProjectsList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsList($queryParameters), $fetch);
    }
    /**
     * To create a project, send a POST request to `/v2/projects`.
     * @param \Jane\Generated\DigitalOcean\Model\V2ProjectsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsCreate(\Jane\Generated\DigitalOcean\Model\V2ProjectsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsCreate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetDefaultUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetDefaultNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetDefaultTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetDefaultInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDefaultProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsGetDefault(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsGetDefault(), $fetch);
    }
    /**
     * To update only specific attributes of your default project, send a PATCH request to `/v2/projects/default`. At least one of the following attributes needs to be sent.
     * @param \Jane\Generated\DigitalOcean\Model\Project $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchDefaultUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchDefaultNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchDefaultTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchDefaultInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsPatchDefault(\Jane\Generated\DigitalOcean\Model\Project $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsPatchDefault($requestBody), $fetch);
    }
    /**
     * To update you default project, send a PUT request to `/v2/projects/default`. All of the following attributes must be sent.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateDefaultUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateDefaultNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateDefaultTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateDefaultInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsUpdateDefault($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsUpdateDefault($requestBody), $fetch);
    }
    /**
     * To delete a project, send a DELETE request to `/v2/projects/$PROJECT_ID`. To
     * be deleted, a project must not have any resources assigned to it. Any existing
     * resources must first be reassigned or destroyed, or you will receive a 412 error.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $projectId A unique identifier for a project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsDeletePreconditionFailedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsDelete(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsDelete($projectId), $fetch);
    }
    /**
     * To get a project, send a GET request to `/v2/projects/$PROJECT_ID`.
     * @param string $projectId A unique identifier for a project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsGet(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsGet($projectId), $fetch);
    }
    /**
     * To update only specific attributes of a project, send a PATCH request to `/v2/projects/$PROJECT_ID`. At least one of the following attributes needs to be sent.
     * @param string $projectId A unique identifier for a project.
     * @param \Jane\Generated\DigitalOcean\Model\Project $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsPatch(string $projectId, \Jane\Generated\DigitalOcean\Model\Project $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsPatch($projectId, $requestBody), $fetch);
    }
    /**
     * To update a project, send a PUT request to `/v2/projects/$PROJECT_ID`. All of the following attributes must be sent.
     * @param string $projectId A unique identifier for a project.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingProject|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsUpdate(string $projectId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsUpdate($projectId, $requestBody), $fetch);
    }
    /**
     * To list all your resources in a project, send a GET request to `/v2/projects/$PROJECT_ID/resources`.
     *
     * This endpoint will only return resources that you are authorized to see. For example, to see Droplets in a project, include the `droplet:read` scope.
     *
     * @param string $projectId A unique identifier for a project.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseResourcesList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsListResources(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsListResources($projectId, $queryParameters), $fetch);
    }
    /**
     * To assign resources to a project, send a POST request to `/v2/projects/$PROJECT_ID/resources`.
     *
     * You must have both `project:update` and `<resource>:read` scopes to assign new resources. For example, to assign a Droplet to a project, include both the `project:update` and `droplet:read` scopes.
     *
     * @param string $projectId A unique identifier for a project.
     * @param \Jane\Generated\DigitalOcean\Model\ProjectAssignment $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsAssignResources(string $projectId, \Jane\Generated\DigitalOcean\Model\ProjectAssignment $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsAssignResources($projectId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesDefaultUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesDefaultNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesDefaultTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsListResourcesDefaultInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseResourcesList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsListResourcesDefault(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsListResourcesDefault(), $fetch);
    }
    /**
     * To assign resources to your default project, send a POST request to `/v2/projects/default/resources`.
     *
     * You must have both project:update and <resource>:read scopes to assign new resources. For example, to assign a Droplet to the default project, include both the `project:update` and `droplet:read` scopes.
     *
     * @param \Jane\Generated\DigitalOcean\Model\ProjectAssignment $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesDefaultUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesDefaultNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesDefaultTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesDefaultInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function projectsAssignResourcesDefault(\Jane\Generated\DigitalOcean\Model\ProjectAssignment $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ProjectsAssignResourcesDefault($requestBody), $fetch);
    }
    /**
     * To list all of the regions that are available, send a GET request to `/v2/regions`.
     * The response will be a JSON object with a key called `regions`. The value of this will be an array of `region` objects, each of which will contain the standard region attributes.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegionsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegionsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegionsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllRegions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function regionsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegionsList($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllRegistriesInfo|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesList(), $fetch);
    }
    /**
     * To create your container registry, send a POST request to `/v2/registries`.
     *
     * The `name` becomes part of the URL for images stored in the registry. For
     * example, if your registry is called `example`, an image in it will have the
     * URL `registry.digitalocean.com/example/image:tag`.
     *
     * @param \Jane\Generated\DigitalOcean\Model\MultiregistryCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesCreateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseMultiregistryInfo|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesCreate(\Jane\Generated\DigitalOcean\Model\MultiregistryCreate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesCreate($requestBody), $fetch);
    }
    /**
     * To delete your container registry, destroying all container image data stored in it, send a DELETE request to `/v2/registries/{registry_name}`.
     * @param string $registryName The name of a container registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesDelete(string $registryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesDelete($registryName), $fetch);
    }
    /**
     * To get information about any container registry in your account, send a GET request to `/v2/registries/{registry_name}`.
     * @param string $registryName The name of a container registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseMultiregistryInfo|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesGet(string $registryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesGet($registryName), $fetch);
    }
    /**
     * In order to access your container registry with the Docker client or from a
     * Kubernetes cluster, you will need to configure authentication. The necessary
     * JSON configuration can be retrieved by sending a GET request to
     * `/v2/registries/{registry_name}/docker-credentials`.
     *
     * The response will be in the format of a Docker `config.json` file. To use the
     * config in your Kubernetes cluster, create a Secret with:
     *
     *     kubectl create secret generic docr \
     *       --from-file=.dockerconfigjson=config.json \
     *       --type=kubernetes.io/dockerconfigjson
     * By default, the returned credentials have read-only access to your registry
     * and cannot be used to push images. This is appropriate for most Kubernetes
     * clusters. To retrieve read/write credentials, suitable for use with the Docker
     * client or in a CI system, read_write may be provided as query parameter. For
     * example: `/v2/registries/{registry_name}/docker-credentials?read_write=true`
     *
     * By default, the returned credentials will not expire. To retrieve credentials
     * with an expiry set, expiry_seconds may be provided as a query parameter. For
     * example: `/v2/registries/{registry_name}/docker-credentials?expiry_seconds=3600` will return
     * credentials that expire after one hour.
     *
     * @param string $registryName The name of a container registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\DockerCredentials|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesGetDockerCredentials(string $registryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesGetDockerCredentials($registryName), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetSubscriptionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetSubscriptionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesGetSubscription(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesGetSubscription(), $fetch);
    }
    /**
     * After creating your registry, you can switch to a different subscription tier to better suit your needs. To do this, send a POST request to `/v2/registries/subscription`. It is similar to POST `/v2/registry/subscription` and exists for backward compatibility.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesUpdateSubscription(?\Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesUpdateSubscription($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetOptionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetOptionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetOptionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesGetOptions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesGetOptions(), $fetch);
    }
    /**
     * To get information about the currently-active garbage collection for a registry, send a GET request to `/v2/registry/$REGISTRY_NAME/garbage-collection`.
     * @param string $registryName The name of a container registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetGarbageCollectionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesGetGarbageCollection(string $registryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesGetGarbageCollection($registryName), $fetch);
    }
    /**
     * Garbage collection enables users to clear out unreferenced blobs (layer &
     * manifest data) after deleting one or more manifests from a repository. If
     * there are no unreferenced blobs resulting from the deletion of one or more
     * manifests, garbage collection is effectively a noop.
     * [See here for more information](https://docs.digitalocean.com/products/container-registry/how-to/clean-up-container-registry/)
     * about how and why you should clean up your container registry periodically.
     *
     * To request a garbage collection run on your registry, send a POST request to
     * `/v2/registries/$REGISTRY_NAME/garbage-collection`. This will initiate the
     * following sequence of events on your registry.
     *
     * * Set the registry to read-only mode, meaning no further write-scoped
     *   JWTs will be issued to registry clients. Existing write-scoped JWTs will
     *   continue to work until they expire which can take up to 15 minutes.
     * * Wait until all existing write-scoped JWTs have expired.
     * * Scan all registry manifests to determine which blobs are unreferenced.
     * * Delete all unreferenced blobs from the registry.
     * * Record the number of blobs deleted and bytes freed, mark the garbage
     *   collection status as `success`.
     * * Remove the read-only mode restriction from the registry, meaning write-scoped
     *   JWTs will once again be issued to registry clients.
     *
     * @param string $registryName The name of a container registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesRunGarbageCollection(string $registryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesRunGarbageCollection($registryName), $fetch);
    }
    /**
     * To get information about past garbage collections for a registry, send a GET request to `/v2/registry/$REGISTRY_NAME/garbage-collections`.
     * @param string $registryName The name of a container registry.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListGarbageCollectionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListGarbageCollectionsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListGarbageCollectionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListGarbageCollectionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollections|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesListGarbageCollections(string $registryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesListGarbageCollections($registryName, $queryParameters), $fetch);
    }
    /**
     * To cancel the currently-active garbage collection for a registry, send a PUT request to `/v2/registries/$REGISTRY_NAME/garbage-collection/$GC_UUID` and specify one or more of the attributes below. It is similar to PUT `/v2/registries/$REGISTRY_NAME/garbage-collection/$GC_UUID` and exists for backward compatibility.
     * @param string $registryName The name of a container registry.
     * @param string $garbageCollectionUuid The UUID of a garbage collection run.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateRegistry $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesUpdateGarbageCollection(string $registryName, string $garbageCollectionUuid, \Jane\Generated\DigitalOcean\Model\UpdateRegistry $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesUpdateGarbageCollection($registryName, $garbageCollectionUuid, $requestBody), $fetch);
    }
    /**
     * To list all repositories in your container registry, send a GET request to `/v2/registries/$REGISTRY_NAME/repositoriesV2`. It is similar to GET `/v2/registry/$REGISTRY_NAME/repositoriesV2` and exists for backward compatibility.
     * @param string $registryName The name of a container registry.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return. Ignored when 'page_token' is provided.
     *    "page_token"?: string, //Token to retrieve of the next or previous set of results more quickly than using 'page'.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2BadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2UnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2NotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2TooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2InternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllRepositoriesV2|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesListRepositoriesV2(string $registryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesListRepositoriesV2($registryName, $queryParameters), $fetch);
    }
    /**
     * To delete a container repository including all of its tags, send a DELETE request to
     * `/v2/registries/$REGISTRY_NAME/repositories/$REPOSITORY_NAME`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesDeleteRepository(string $registryName, string $repositoryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesDeleteRepository($registryName, $repositoryName), $fetch);
    }
    /**
     * To list all tags in one of your container registry's repository, send a GET
     * request to `/v2/registries/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to list tags for
     * `registry.digitalocean.com/example/my/repo`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/tags`.
     *
     * It is similar to GET `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags` and exists for backward compatibility.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryTagsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryTagsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryTagsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryTagsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRepositoryTags|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesListRepositoryTags(string $registryName, string $repositoryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesListRepositoryTags($registryName, $repositoryName, $queryParameters), $fetch);
    }
    /**
     * To delete a container repository tag in on of our container registries, send a DELETE request to
     * `/v2/registries/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags/$TAG`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to delete
     * `registry.digitalocean.com/example/my/repo:mytag`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/tags/mytag`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully. It is similar to DELETE `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags/$TAG` and exists for backward compatibility.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $repositoryTag The name of a container registry repository tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryTagUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryTagNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryTagTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryTagInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesDeleteRepositoryTag(string $registryName, string $repositoryName, string $repositoryTag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesDeleteRepositoryTag($registryName, $repositoryName, $repositoryTag), $fetch);
    }
    /**
     * To list all manifests in your container registry repository, send a GET
     * request to `/v2/registries/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to list manifests for
     * `registry.digitalocean.com/example/my/repo`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/digests`.
     *
     * It is similar to `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests` and exists for backward compatibility.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryManifestsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryManifestsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryManifestsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoryManifestsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRepositoryManifests|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesListRepositoryManifests(string $registryName, string $repositoryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesListRepositoryManifests($registryName, $repositoryName, $queryParameters), $fetch);
    }
    /**
     * To delete a container repository manifest by digest in one of your registries, send a DELETE request to
     * `/v2/registries/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests/$MANIFEST_DIGEST`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to delete
     * `registry.digitalocean.com/example/my/repo@sha256:abcd`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/digests/sha256:abcd`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * It is similar to DELETE `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests/$MANIFEST_DIGEST` and exists for backward compatibility.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $manifestDigest The manifest digest of a container registry repository tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryManifestUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryManifestNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryManifestTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesDeleteRepositoryManifestInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesDeleteRepositoryManifest(string $registryName, string $repositoryName, string $manifestDigest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesDeleteRepositoryManifest($registryName, $repositoryName, $manifestDigest), $fetch);
    }
    /**
     * To validate that a container registry name is available for use, send a POST
     * request to `/v2/registries/validate-name`.
     *
     * If the name is both formatted correctly and available, the response code will
     * be 204 and contain no body. If the name is already in use, the response will
     * be a 409 Conflict.
     *
     * It is similar to `/v2/registry/validate-name` and exists for backward compatibility.
     *
     * @param \Jane\Generated\DigitalOcean\Model\ValidateRegistry $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesValidateNameUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesValidateNameConflictException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesValidateNameTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesValidateNameInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registriesValidateName(\Jane\Generated\DigitalOcean\Model\ValidateRegistry $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistriesValidateName($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeletePreconditionFailedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetPreconditionFailedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRegistryInfo|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryGet(), $fetch);
    }
    /**
     * To create your container registry, send a POST request to `/v2/registry`.
     *
     * The `name` becomes part of the URL for images stored in the registry. For
     * example, if your registry is called `example`, an image in it will have the
     * URL `registry.digitalocean.com/example/image:tag`.
     *
     * @param \Jane\Generated\DigitalOcean\Model\RegistryCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRegistryInfo|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryCreate(\Jane\Generated\DigitalOcean\Model\RegistryCreate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryCreate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetSubscriptionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetSubscriptionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryGetSubscription(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryGetSubscription(), $fetch);
    }
    /**
     * After creating your registry, you can switch to a different subscription tier to better suit your needs. To do this, send a POST request to `/v2/registry/subscription`.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2RegistrySubscriptionPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateSubscriptionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateSubscriptionPreconditionFailedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateSubscriptionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateSubscriptionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryUpdateSubscription(?\Jane\Generated\DigitalOcean\Model\V2RegistrySubscriptionPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryUpdateSubscription($requestBody), $fetch);
    }
    /**
     * In order to access your container registry with the Docker client or from a
     * Kubernetes cluster, you will need to configure authentication. The necessary
     * JSON configuration can be retrieved by sending a GET request to
     * `/v2/registry/docker-credentials`.
     *
     * The response will be in the format of a Docker `config.json` file. To use the
     * config in your Kubernetes cluster, create a Secret with:
     *
     *     kubectl create secret generic docr \
     *       --from-file=.dockerconfigjson=config.json \
     *       --type=kubernetes.io/dockerconfigjson
     * By default, the returned credentials have read-only access to your registry
     * and cannot be used to push images. This is appropriate for most Kubernetes
     * clusters. To retrieve read/write credentials, suitable for use with the Docker
     * client or in a CI system, read_write may be provided as query parameter. For
     * example: `/v2/registry/docker-credentials?read_write=true`
     *
     * By default, the returned credentials will not expire. To retrieve credentials
     * with an expiry set, expiry_seconds may be provided as a query parameter. For
     * example: `/v2/registry/docker-credentials?expiry_seconds=3600` will return
     * credentials that expire after one hour.
     *
     * @param array{
     *    "expiry_seconds"?: int, //The duration in seconds that the returned registry credentials will be valid. If not set or 0, the credentials will not expire.
     *    "read_write"?: bool, //By default, the registry credentials allow for read-only access. Set this query parameter to `true` to obtain read-write credentials.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\DockerCredentials|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryGetDockerCredentials(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryGetDockerCredentials($queryParameters), $fetch);
    }
    /**
     * To validate that a container registry name is available for use, send a POST
     * request to `/v2/registry/validate-name`.
     *
     * If the name is both formatted correctly and available, the response code will
     * be 204 and contain no body. If the name is already in use, the response will
     * be a 409 Conflict.
     *
     * @param \Jane\Generated\DigitalOcean\Model\ValidateRegistry $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryValidateNameUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryValidateNameConflictException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryValidateNameTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryValidateNameInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryValidateName(\Jane\Generated\DigitalOcean\Model\ValidateRegistry $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryValidateName($requestBody), $fetch);
    }
    /**
     * This endpoint has been deprecated in favor of the _List All Container Registry Repositories [V2]_ endpoint.
     *
     * To list all repositories in your container registry, send a GET
     * request to `/v2/registry/$REGISTRY_NAME/repositories`.
     *
     * @param string $registryName The name of a container registry.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllRepositories|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryListRepositories(string $registryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryListRepositories($registryName, $queryParameters), $fetch);
    }
    /**
     * To list all repositories in your container registry, send a GET request to `/v2/registry/$REGISTRY_NAME/repositoriesV2`.
     * @param string $registryName The name of a container registry.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return. Ignored when 'page_token' is provided.
     *    "page_token"?: string, //Token to retrieve of the next or previous set of results more quickly than using 'page'.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesV2BadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesV2UnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesV2NotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesV2TooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoriesV2InternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllRepositoriesV2|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryListRepositoriesV2(string $registryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryListRepositoriesV2($registryName, $queryParameters), $fetch);
    }
    /**
     * To list all tags in your container registry repository, send a GET
     * request to `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to list tags for
     * `registry.digitalocean.com/example/my/repo`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/tags`.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRepositoryTags|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryListRepositoryTags(string $registryName, string $repositoryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryListRepositoryTags($registryName, $repositoryName, $queryParameters), $fetch);
    }
    /**
     * To delete a container repository tag, send a DELETE request to
     * `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags/$TAG`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to delete
     * `registry.digitalocean.com/example/my/repo:mytag`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/tags/mytag`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $repositoryTag The name of a container registry repository tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryDeleteRepositoryTag(string $registryName, string $repositoryName, string $repositoryTag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryDeleteRepositoryTag($registryName, $repositoryName, $repositoryTag), $fetch);
    }
    /**
     * To list all manifests in your container registry repository, send a GET
     * request to `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to list manifests for
     * `registry.digitalocean.com/example/my/repo`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/digests`.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryManifestsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryManifestsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryManifestsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryManifestsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRepositoryManifests|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryListRepositoryManifests(string $registryName, string $repositoryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryListRepositoryManifests($registryName, $repositoryName, $queryParameters), $fetch);
    }
    /**
     * To delete a container repository manifest by digest, send a DELETE request to
     * `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests/$MANIFEST_DIGEST`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to delete
     * `registry.digitalocean.com/example/my/repo@sha256:abcd`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/digests/sha256:abcd`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $manifestDigest The manifest digest of a container registry repository tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryDeleteRepositoryManifest(string $registryName, string $repositoryName, string $manifestDigest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryDeleteRepositoryManifest($registryName, $repositoryName, $manifestDigest), $fetch);
    }
    /**
     * To get information about the currently-active garbage collection for a registry, send a GET request to `/v2/registry/$REGISTRY_NAME/garbage-collection`.
     * @param string $registryName The name of a container registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetGarbageCollectionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryGetGarbageCollection(string $registryName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryGetGarbageCollection($registryName), $fetch);
    }
    /**
     * Garbage collection enables users to clear out unreferenced blobs (layer &
     * manifest data) after deleting one or more manifests from a repository. If
     * there are no unreferenced blobs resulting from the deletion of one or more
     * manifests, garbage collection is effectively a noop.
     * [See here for more information](https://docs.digitalocean.com/products/container-registry/how-to/clean-up-container-registry/)
     * about how and why you should clean up your container registry periodically.
     *
     * To request a garbage collection run on your registry, send a POST request to
     * `/v2/registry/$REGISTRY_NAME/garbage-collection`. This will initiate the
     * following sequence of events on your registry.
     *
     * * Set the registry to read-only mode, meaning no further write-scoped
     *   JWTs will be issued to registry clients. Existing write-scoped JWTs will
     *   continue to work until they expire which can take up to 15 minutes.
     * * Wait until all existing write-scoped JWTs have expired.
     * * Scan all registry manifests to determine which blobs are unreferenced.
     * * Delete all unreferenced blobs from the registry.
     * * Record the number of blobs deleted and bytes freed, mark the garbage
     *   collection status as `success`.
     * * Remove the read-only mode restriction from the registry, meaning write-scoped
     *   JWTs will once again be issued to registry clients.
     *
     * @param string $registryName The name of a container registry.
     * @param null|\Jane\Generated\DigitalOcean\Model\RegistryRunGc $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryRunGarbageCollection(string $registryName, ?\Jane\Generated\DigitalOcean\Model\RegistryRunGc $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryRunGarbageCollection($registryName, $requestBody), $fetch);
    }
    /**
     * To get information about past garbage collections for a registry, send a GET request to `/v2/registry/$REGISTRY_NAME/garbage-collections`.
     * @param string $registryName The name of a container registry.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListGarbageCollectionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListGarbageCollectionsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListGarbageCollectionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListGarbageCollectionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollections|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryListGarbageCollections(string $registryName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryListGarbageCollections($registryName, $queryParameters), $fetch);
    }
    /**
     * To cancel the currently-active garbage collection for a registry, send a PUT request to `/v2/registry/$REGISTRY_NAME/garbage-collection/$GC_UUID` and specify one or more of the attributes below.
     * @param string $registryName The name of a container registry.
     * @param string $garbageCollectionUuid The UUID of a garbage collection run.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateRegistry $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryUpdateGarbageCollectionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryUpdateGarbageCollection(string $registryName, string $garbageCollectionUuid, \Jane\Generated\DigitalOcean\Model\UpdateRegistry $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryUpdateGarbageCollection($registryName, $garbageCollectionUuid, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetOptionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetOptionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetOptionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponse|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function registryGetOptions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\RegistryGetOptions(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsIdsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsIdsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsIdsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsIdsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\NeighborIds|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function dropletsListNeighborsIds(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\DropletsListNeighborsIds(), $fetch);
    }
    /**
     * To list all of the reserved IPs available on your account, send a GET request to `/v2/reserved_ips`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsList($queryParameters), $fetch);
    }
    /**
     * On creation, a reserved IP must be either assigned to a Droplet or reserved to a region.
     * * To create a new reserved IP assigned to a Droplet, send a POST
     *   request to `/v2/reserved_ips` with the `droplet_id` attribute.
     * * To create a new reserved IP reserved to a region, send a POST request to
     *   `/v2/reserved_ips` with the `region` attribute.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpCreated|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsCreate($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsCreate($requestBody), $fetch);
    }
    /**
     * To delete a reserved IP and remove it from your account, send a DELETE request
     * to `/v2/reserved_ips/$RESERVED_IP_ADDR`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $reservedIp A reserved IP address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsDelete(string $reservedIp, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsDelete($reservedIp), $fetch);
    }
    /**
     * To show information about a reserved IP, send a GET request to `/v2/reserved_ips/$RESERVED_IP_ADDR`.
     * @param string $reservedIp A reserved IP address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIp|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsGet(string $reservedIp, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsGet($reservedIp), $fetch);
    }
    /**
     * To retrieve all actions that have been executed on a reserved IP, send a GET request to `/v2/reserved_ips/$RESERVED_IP/actions`.
     * @param string $reservedIp A reserved IP address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpActions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsActionsList(string $reservedIp, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsActionsList($reservedIp), $fetch);
    }
    /**
     * To initiate an action on a reserved IP send a POST request to
     * `/v2/reserved_ips/$RESERVED_IP/actions`. In the JSON body to the request,
     * set the `type` attribute to on of the supported action types:
     *
     * | Action     | Details
     * |------------|--------
     * | `assign`   | Assigns a reserved IP to a Droplet
     * | `unassign` | Unassign a reserved IP from a Droplet
     *
     * @param string $reservedIp A reserved IP address.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsPostInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsActionsPost(string $reservedIp, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsActionsPost($reservedIp, $requestBody), $fetch);
    }
    /**
     * To retrieve the status of a reserved IP action, send a GET request to `/v2/reserved_ips/$RESERVED_IP/actions/$ACTION_ID`.
     * @param string $reservedIp A reserved IP address.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPsActionsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPsActionsGet(string $reservedIp, int $actionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPsActionsGet($reservedIp, $actionId), $fetch);
    }
    /**
     * To list all of the reserved IPv6s available on your account, send a GET request to `/v2/reserved_ipv6`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6List|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPv6List(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPv6List($queryParameters), $fetch);
    }
    /**
     * On creation, a reserved IPv6 must be reserved to a region.
     * * To create a new reserved IPv6 reserved to a region, send a POST request to
     *   `/v2/reserved_ipv6` with the `region_slug` attribute.
     * @param \Jane\Generated\DigitalOcean\Model\ReservedIpv6Create $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6CreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6CreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6CreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Create|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPv6Create(\Jane\Generated\DigitalOcean\Model\ReservedIpv6Create $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPv6Create($requestBody), $fetch);
    }
    /**
     * To delete a reserved IP and remove it from your account, send a DELETE request
     * to `/v2/reserved_ipv6/$RESERVED_IPV6`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $reservedIpv6 A reserved IPv6 address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6DeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPv6Delete(string $reservedIpv6, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPv6Delete($reservedIpv6), $fetch);
    }
    /**
     * To show information about a reserved IPv6, send a GET request to `/v2/reserved_ipv6/$RESERVED_IPV6`.
     * @param string $reservedIpv6 A reserved IPv6 address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6GetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6GetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6GetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6GetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPv6Get(string $reservedIpv6, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPv6Get($reservedIpv6), $fetch);
    }
    /**
     * To initiate an action on a reserved IPv6 send a POST request to
     * `/v2/reserved_ipv6/$RESERVED_IPV6/actions`. In the JSON body to the request,
     * set the `type` attribute to on of the supported action types:
     *
     * | Action     | Details
     * |------------|--------
     * | `assign`   | Assigns a reserved IPv6 to a Droplet
     * | `unassign` | Unassign a reserved IPv6 from a Droplet
     *
     * @param string $reservedIpv6 A reserved IPv6 address.
     * @param null|mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ReservedIPv6ActionsPostInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Action|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function reservedIPv6ActionsPost(string $reservedIpv6, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ReservedIPv6ActionsPost($reservedIpv6, $requestBody), $fetch);
    }
    /**
     * To list all BYOIP prefixes, send a GET request to `/v2/byoip_prefixes`.
     * A successful response will return a list of all BYOIP prefixes associated with the account.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function byoipPrefixesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ByoipPrefixesList($queryParameters), $fetch);
    }
    /**
     * To create a BYOIP prefix, send a POST request to `/v2/byoip_prefixes`.
     *
     * A successful request will initiate the process of bringing your BYOIP Prefix into your account.
     * The response will include the details of the created prefix, including its UUID and status.
     *
     * @param \Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function byoipPrefixesCreate(\Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ByoipPrefixesCreate($requestBody), $fetch);
    }
    /**
     * To delete a BYOIP prefix and remove it from your account, send a DELETE request
     * to `/v2/byoip_prefixes/$byoip_prefix_uuid`.
     *
     * A successful request will receive a 202 status code with no body in response.
     * This indicates that the request was accepted and the prefix is being deleted.
     *
     * @param string $byoipPrefixUuid The unique identifier for the BYOIP Prefix.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function byoipPrefixesDelete(string $byoipPrefixUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ByoipPrefixesDelete($byoipPrefixUuid), $fetch);
    }
    /**
     * To get a BYOIP prefix, send a GET request to `/v2/byoip_prefixes/$byoip_prefix_uuid`.
     *
     * A successful response will return the details of the specified BYOIP prefix.
     *
     * @param string $byoipPrefixUuid The unique identifier for the BYOIP Prefix.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesGetUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixGet|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function byoipPrefixesGet(string $byoipPrefixUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ByoipPrefixesGet($byoipPrefixUuid), $fetch);
    }
    /**
     * To update a BYOIP prefix, send a PATCH request to `/v2/byoip_prefixes/$byoip_prefix_uuid`.
     *
     * Currently, you can update the advertisement status of the prefix.
     * The response will include the updated details of the prefix.
     *
     * @param string $byoipPrefixUuid A unique identifier for a BYOIP prefix.
     * @param \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchUnprocessableEntityException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function byoipPrefixesPatch(string $byoipPrefixUuid, \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ByoipPrefixesPatch($byoipPrefixUuid, $requestBody), $fetch);
    }
    /**
     * To list resources associated with BYOIP prefixes, send a GET request to `/v2/byoip_prefixes/{byoip_prefix_uuid}/ips`.
     *
     * A successful response will return a list of resources associated with the specified BYOIP prefix.
     *
     * @param string $byoipPrefixUuid The unique identifier for the BYOIP Prefix.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ByoipPrefixesListResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixListResources|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function byoipPrefixesListResources(string $byoipPrefixUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\ByoipPrefixesListResources($byoipPrefixUuid, $queryParameters), $fetch);
    }
    /**
     * To list all of available Droplet sizes, send a GET request to `/v2/sizes`.
     * The response will be a JSON object with a key called `sizes`. The value of this will be an array of `size` objects each of which contain the standard size attributes.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SizesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SizesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SizesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllSizes|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function sizesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SizesList($queryParameters), $fetch);
    }
    /**
     * To list all of the snapshots available on your account, send a GET request to
     * `/v2/snapshots`.
     *
     * The response will be a JSON object with a key called `snapshots`. This will be
     * set to an array of `snapshot` objects, each of which will contain the standard
     * snapshot attributes.
     *
     * ### Filtering Results by Resource Type
     *
     * It's possible to request filtered results by including certain query parameters.
     *
     * #### List Droplet Snapshots
     *
     * To retrieve only snapshots based on Droplets, include the `resource_type`
     * query parameter set to `droplet`. For example, `/v2/snapshots?resource_type=droplet`.
     *
     * #### List Volume Snapshots
     *
     * To retrieve only snapshots based on volumes, include the `resource_type`
     * query parameter set to `volume`. For example, `/v2/snapshots?resource_type=volume`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "resource_type"?: string, //Used to filter snapshots by a resource type.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSnapshots|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function snapshotsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SnapshotsList($queryParameters), $fetch);
    }
    /**
     * Both Droplet and volume snapshots are managed through the `/v2/snapshots/`
     * endpoint. To delete a snapshot, send a DELETE request to
     * `/v2/snapshots/$SNAPSHOT_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * @param mixed $snapshotId Either the ID of an existing snapshot. This will be an integer for a Droplet snapshot or a string for a volume snapshot.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function snapshotsDelete($snapshotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SnapshotsDelete($snapshotId), $fetch);
    }
    /**
     * To retrieve information about a snapshot, send a GET request to
     * `/v2/snapshots/$SNAPSHOT_ID`.
     *
     * The response will be a JSON object with a key called `snapshot`. The value of
     * this will be an snapshot object containing the standard snapshot attributes.
     *
     * @param mixed $snapshotId Either the ID of an existing snapshot. This will be an integer for a Droplet snapshot or a string for a volume snapshot.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseSnapshotsExisting|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function snapshotsGet($snapshotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SnapshotsGet($snapshotId), $fetch);
    }
    /**
     * To list Spaces Access Key, send a GET request to `/v2/spaces/keys`. Sort parameter must be used with Sort Direction.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "sort"?: string, //The field to sort by.
     *    "sort_direction"?: string, //The direction to sort by. Possible values are `asc` or `desc`.
     *    "name"?: string, //The access key's name.
     *    "bucket"?: string, //The bucket's name.
     *    "permission"?: string, //The permission of the access key. Possible values are `read`, `readwrite`, `fullaccess`, or an empty string.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKeyList|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function spacesKeyList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SpacesKeyList($queryParameters), $fetch);
    }
    /**
     * To create a new Spaces Access Key, send a POST request to `/v2/spaces/keys`.
     * At the moment, you cannot mix a fullaccess permission with scoped permissions.
     * A fullaccess permission will be prioritized if fullaccess and scoped permissions are both added.
     *
     * @param \Jane\Generated\DigitalOcean\Model\Key $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKeyCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function spacesKeyCreate(\Jane\Generated\DigitalOcean\Model\Key $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SpacesKeyCreate($requestBody), $fetch);
    }
    /**
     * To delete a Spaces Access Key, send a DELETE request to `/v2/spaces/keys/$ACCESS_KEY`.
     *
     * A successful request will return a `204 No Content` status code.
     *
     * @param string $accessKey The access key's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function spacesKeyDelete(string $accessKey, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SpacesKeyDelete($accessKey), $fetch);
    }
    /**
     * To get a Spaces Access Key, send a GET request to `/v2/spaces/keys/$ACCESS_KEY`.
     *
     * A successful request will return the Access Key.
     *
     * @param string $accessKey The access key's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKeyGet|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function spacesKeyGet(string $accessKey, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SpacesKeyGet($accessKey), $fetch);
    }
    /**
     * To update Spaces Access Key, send a PUT or PATCH request to `/v2/spaces/keys/$ACCESS_KEY`. At the moment, you cannot convert a
     * fullaccess key to a scoped key or vice versa. You can only update the name of the key.
     *
     * @param string $accessKey The access key's ID.
     * @param \Jane\Generated\DigitalOcean\Model\Key $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyPatchBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKeyUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function spacesKeyPatch(string $accessKey, \Jane\Generated\DigitalOcean\Model\Key $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SpacesKeyPatch($accessKey, $requestBody), $fetch);
    }
    /**
     * To update Spaces Access Key, send a PUT or PATCH request to `/v2/spaces/keys/$ACCESS_KEY`. At the moment, you cannot convert a
     * fullaccess key to a scoped key or vice versa. You can only update the name of the key.
     *
     * @param string $accessKey The access key's ID.
     * @param \Jane\Generated\DigitalOcean\Model\Key $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyUpdateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseKeyUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function spacesKeyUpdate(string $accessKey, \Jane\Generated\DigitalOcean\Model\Key $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\SpacesKeyUpdate($accessKey, $requestBody), $fetch);
    }
    /**
     * To list all of your tags, you can send a GET request to `/v2/tags`.
     *
     * This endpoint will only return tagged resources that you are authorized to see
     * (e.g. Droplets will only be returned if you have `droplet:read`).
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseTagsAll|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tagsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\TagsList($queryParameters), $fetch);
    }
    /**
     * To create a tag you can send a POST request to `/v2/tags` with a `name` attribute.
     * @param \Jane\Generated\DigitalOcean\Model\Tags $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseTagsNew|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tagsCreate(\Jane\Generated\DigitalOcean\Model\Tags $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\TagsCreate($requestBody), $fetch);
    }
    /**
     * A tag can be deleted by sending a `DELETE` request to `/v2/tags/$TAG_NAME`. Deleting a tag also untags all the resources that have previously been tagged by the Tag
     * @param string $tagId The name of the tag. Tags may contain letters, numbers, colons, dashes, and underscores. There is a limit of 255 characters per tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tagsDelete(string $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\TagsDelete($tagId), $fetch);
    }
    /**
     * To retrieve an individual tag, you can send a `GET` request to
     * `/v2/tags/$TAG_NAME`.
     *
     * This endpoint will only return tagged resources that you are authorized to see.
     * For example, to see tagged Droplets, include the `droplet:read` scope.
     *
     * @param string $tagId The name of the tag. Tags may contain letters, numbers, colons, dashes, and underscores. There is a limit of 255 characters per tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseTagsExisting|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tagsGet(string $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\TagsGet($tagId), $fetch);
    }
    /**
     * Resources can be untagged by sending a DELETE request to
     * `/v2/tags/$TAG_NAME/resources` with an array of json objects containing
     * `resource_id` and `resource_type` attributes.
     *
     * Currently only untagging of Droplets, Databases, Images, Volumes, and Volume
     * Snapshots is supported. `resource_type` is expected to be the string `droplet`,
     * `database`, `image`, `volume` or `volume_snapshot`. `resource_id` is expected
     * to be the ID of the resource as a string.
     *
     * In order to untag a resource, you must have both `tag:delete` and `<resource type>:update` scopes. For example,
     * to untag a Droplet, you must have `tag:delete` and `droplet:update`.
     *
     * @param string $tagId The name of the tag. Tags may contain letters, numbers, colons, dashes, and underscores. There is a limit of 255 characters per tag.
     * @param \Jane\Generated\DigitalOcean\Model\TagsResource $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tagsUnassignResources(string $tagId, \Jane\Generated\DigitalOcean\Model\TagsResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\TagsUnassignResources($tagId, $requestBody), $fetch);
    }
    /**
     * Resources can be tagged by sending a POST request to
     * `/v2/tags/$TAG_NAME/resources` with an array of json objects containing
     * `resource_id` and `resource_type` attributes.
     *
     * Currently only tagging of Droplets, Databases, Images, Volumes, and Volume
     * Snapshots is supported. `resource_type` is expected to be the string `droplet`,
     * `database`, `image`, `volume` or `volume_snapshot`. `resource_id` is expected
     * to be the ID of the resource as a string.
     *
     * In order to tag a resource, you must have both `tag:create` and `<resource type>:update` scopes. For example,
     * to tag a Droplet, you must have `tag:create` and `droplet:update`.
     *
     * @param string $tagId The name of the tag. Tags may contain letters, numbers, colons, dashes, and underscores. There is a limit of 255 characters per tag.
     * @param \Jane\Generated\DigitalOcean\Model\TagsResource $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function tagsAssignResources(string $tagId, \Jane\Generated\DigitalOcean\Model\TagsResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\TagsAssignResources($tagId, $requestBody), $fetch);
    }
    /**
     * Block storage volumes may also be deleted by name by sending a DELETE request with the volume's **name** and the **region slug** for the region it is located in as query parameters to `/v2/volumes?name=$VOLUME_NAME&region=nyc1`.
     * No response body will be sent back, but the response code will indicate success. Specifically, the response code will be a 204, which means that the action was successful with no returned body data.
     *
     *
     * @param array{
     *    "name"?: string, //The block storage volume's name.
     *    "region"?: string, //The slug identifier for the region where the resource is available.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteByNameUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteByNameNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteByNameTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteByNameInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumesDeleteByName(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumesDeleteByName($queryParameters), $fetch);
    }
    /**
     * To list all of the block storage volumes available on your account, send a GET request to `/v2/volumes`.
     * ## Filtering Results
     * ### By Region
     * The `region` may be provided as query parameter in order to restrict results to volumes available in a specific region. For example: `/v2/volumes?region=nyc1`
     * ### By Name
     * It is also possible to list volumes on your account that match a specified name. To do so, send a GET request with the volume's name as a query parameter to `/v2/volumes?name=$VOLUME_NAME`.
     * **Note:** You can only create one volume per region with the same name.
     * ### By Name and Region
     * It is also possible to retrieve information about a block storage volume by name. To do so, send a GET request with the volume's name and the region slug for the region it is located in as query parameters to `/v2/volumes?name=$VOLUME_NAME&region=nyc1`.
     *
     *
     *
     * @param array{
     *    "name"?: string, //The block storage volume's name.
     *    "region"?: string, //The slug identifier for the region where the resource is available.
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumes|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumesList($queryParameters), $fetch);
    }
    /**
     * To create a new volume, send a POST request to `/v2/volumes`. Optionally, a `filesystem_type` attribute may be provided in order to automatically format the volume's filesystem. Pre-formatted volumes are automatically mounted when attached to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS Droplets created on or after April 26, 2018. Attaching pre-formatted volumes to Droplets without support for auto-mounting is not recommended.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesCreateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolume|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumesCreate($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumesCreate($requestBody), $fetch);
    }
    /**
     * To initiate an action on a block storage volume by Name, send a POST request to
     * `~/v2/volumes/actions`. The body should contain the appropriate
     * attributes for the respective action.
     *
     * ## Attach a Block Storage Volume to a Droplet
     *
     * | Attribute   | Details                                                             |
     * | ----------- | ------------------------------------------------------------------- |
     * | type        | This must be `attach`                                               |
     * | volume_name | The name of the block storage volume                                |
     * | droplet_id  | Set to the Droplet's ID                                             |
     * | region      | Set to the slug representing the region where the volume is located |
     *
     * Each volume may only be attached to a single Droplet. However, up to fifteen
     * volumes may be attached to a Droplet at a time. Pre-formatted volumes will be
     * automatically mounted to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS
     * Droplets created on or after April 26, 2018 when attached. On older Droplets,
     * [additional configuration](https://docs.digitalocean.com/products/volumes/how-to/mount/)
     * is required.
     *
     * ## Remove a Block Storage Volume from a Droplet
     *
     * | Attribute   | Details                                                             |
     * | ----------- | ------------------------------------------------------------------- |
     * | type        | This must be `detach`                                               |
     * | volume_name | The name of the block storage volume                                |
     * | droplet_id  | Set to the Droplet's ID                                             |
     * | region      | Set to the slug representing the region where the volume is located |
     *
     * @param mixed $requestBody
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeActionsPost($requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeActionsPost($requestBody, $queryParameters), $fetch);
    }
    /**
     * To delete a volume snapshot, send a DELETE request to
     * `/v2/volumes/snapshots/$VOLUME_SNAPSHOT_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * @param string $snapshotId The unique identifier for the snapshot.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeSnapshotsDeleteById(string $snapshotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeSnapshotsDeleteById($snapshotId), $fetch);
    }
    /**
     * To retrieve the details of a snapshot that has been created from a volume, send a GET request to `/v2/volumes/snapshots/$VOLUME_SNAPSHOT_ID`.
     *
     *
     * @param string $snapshotId The unique identifier for the snapshot.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeSnapshotsGetById(string $snapshotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeSnapshotsGetById($snapshotId), $fetch);
    }
    /**
     * To delete a block storage volume, destroying all data and removing it from your account, send a DELETE request to `/v2/volumes/$VOLUME_ID`.
     * No response body will be sent back, but the response code will indicate success. Specifically, the response code will be a 204, which means that the action was successful with no returned body data.
     *
     *
     * @param string $volumeId The ID of the block storage volume.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumesDelete(string $volumeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumesDelete($volumeId), $fetch);
    }
    /**
     * To show information about a block storage volume, send a GET request to `/v2/volumes/$VOLUME_ID`.
     *
     *
     * @param string $volumeId The ID of the block storage volume.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumesGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolume|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumesGet(string $volumeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumesGet($volumeId), $fetch);
    }
    /**
     * To retrieve all actions that have been executed on a volume, send a GET request to `/v2/volumes/$VOLUME_ID/actions`.
     *
     *
     * @param string $volumeId The ID of the block storage volume.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeActions|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeActionsList(string $volumeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeActionsList($volumeId, $queryParameters), $fetch);
    }
    /**
     * To initiate an action on a block storage volume by Id, send a POST request to
     * `~/v2/volumes/$VOLUME_ID/actions`. The body should contain the appropriate
     * attributes for the respective action.
     *
     * ## Attach a Block Storage Volume to a Droplet
     *
     * | Attribute  | Details                                                             |
     * | ---------- | ------------------------------------------------------------------- |
     * | type       | This must be `attach`                                               |
     * | droplet_id | Set to the Droplet's ID                                             |
     * | region     | Set to the slug representing the region where the volume is located |
     *
     * Each volume may only be attached to a single Droplet. However, up to fifteen
     * volumes may be attached to a Droplet at a time. Pre-formatted volumes will be
     * automatically mounted to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS
     * Droplets created on or after April 26, 2018 when attached. On older Droplets,
     * [additional configuration](https://docs.digitalocean.com/products/volumes/how-to/mount/)
     * is required.
     *
     * ## Remove a Block Storage Volume from a Droplet
     *
     * | Attribute  | Details                                                             |
     * | ---------- | ------------------------------------------------------------------- |
     * | type       | This must be `detach`                                               |
     * | droplet_id | Set to the Droplet's ID                                             |
     * | region     | Set to the slug representing the region where the volume is located |
     *
     * ## Resize a Volume
     *
     * | Attribute      | Details                                                             |
     * | -------------- | ------------------------------------------------------------------- |
     * | type           | This must be `resize`                                               |
     * | size_gigabytes | The new size of the block storage volume in GiB (1024^3)            |
     * | region         | Set to the slug representing the region where the volume is located |
     *
     * Volumes may only be resized upwards. The maximum size for a volume is 16TiB.
     *
     * @param string $volumeId The ID of the block storage volume.
     * @param mixed $requestBody
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostByIdUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostByIdNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostByIdTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostByIdInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeActionsPostById(string $volumeId, $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeActionsPostById($volumeId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * To retrieve the status of a volume action, send a GET request to `/v2/volumes/$VOLUME_ID/actions/$ACTION_ID`.
     *
     *
     * @param string $volumeId The ID of the block storage volume.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeAction|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeActionsGet(string $volumeId, int $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeActionsGet($volumeId, $actionId, $queryParameters), $fetch);
    }
    /**
     * To retrieve the snapshots that have been created from a volume, send a GET request to `/v2/volumes/$VOLUME_ID/snapshots`.
     *
     *
     * @param string $volumeId The ID of the block storage volume.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshots|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeSnapshotsList(string $volumeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeSnapshotsList($volumeId, $queryParameters), $fetch);
    }
    /**
     * To create a snapshot from a volume, sent a POST request to `/v2/volumes/$VOLUME_ID/snapshots`.
     * @param string $volumeId The ID of the block storage volume.
     * @param \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function volumeSnapshotsCreate(string $volumeId, \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VolumeSnapshotsCreate($volumeId, $requestBody), $fetch);
    }
    /**
     * To list all of the VPCs on your account, send a GET request to `/v2/vpcs`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllVpcs|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsList($queryParameters), $fetch);
    }
    /**
     * To create a VPC, send a POST request to `/v2/vpcs` specifying the attributes
     * in the table below in the JSON body.
     *
     * **Note:** If you do not currently have a VPC network in a specific datacenter
     * region, the first one that you create will be set as the default for that
     * region. The default VPC for a region cannot be changed or deleted.
     *
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingVpc|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsCreate(\Jane\Generated\DigitalOcean\Model\V2VpcsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsCreate($requestBody), $fetch);
    }
    /**
     * To delete a VPC, send a DELETE request to `/v2/vpcs/$VPC_ID`. A 204 status
     * code with no body will be returned in response to a successful request.
     *
     * The default VPC for a region can not be deleted. Additionally, a VPC can only
     * be deleted if it does not contain any member resources. Attempting to delete
     * a region's default VPC or a VPC that still has members will result in a
     * 403 Forbidden error response.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsDelete(string $vpcId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsDelete($vpcId), $fetch);
    }
    /**
     * To show information about an existing VPC, send a GET request to `/v2/vpcs/$VPC_ID`.
     * @param string $vpcId A unique identifier for a VPC.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingVpc|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsGet(string $vpcId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsGet($vpcId), $fetch);
    }
    /**
     * To update a subset of information about a VPC, send a PATCH request to
     * `/v2/vpcs/$VPC_ID`.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPatchBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingVpc|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsPatch(string $vpcId, \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsPatch($vpcId, $requestBody), $fetch);
    }
    /**
     * To update information about a VPC, send a PUT request to `/v2/vpcs/$VPC_ID`.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingVpc|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsUpdate(string $vpcId, \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsUpdate($vpcId, $requestBody), $fetch);
    }
    /**
     * To list all of the resources that are members of a VPC, send a GET request to
     * `/v2/vpcs/$VPC_ID/members`.
     *
     * To only list resources of a specific type that are members of the VPC,
     * included a `resource_type` query parameter. For example, to only list Droplets
     * in the VPC, send a GET request to `/v2/vpcs/$VPC_ID/members?resource_type=droplet`.
     *
     * Only resources that you are authorized to see will be returned (e.g. to see Droplets,
     * you must have `droplet:read`).
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param array{
     *    "resource_type"?: string, //Used to filter VPC members by a resource type.
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListMembersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListMembersNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListMembersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListMembersInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcMembers|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsListMembers(string $vpcId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsListMembers($vpcId, $queryParameters), $fetch);
    }
    /**
     * To list all of a VPC's peerings, send a GET request to
     * `/v2/vpcs/$VPC_ID/peerings`.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListPeeringsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListPeeringsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListPeeringsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsListPeeringsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcPeerings|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsListPeerings(string $vpcId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsListPeerings($vpcId, $queryParameters), $fetch);
    }
    /**
     * To create a new VPC peering for a given VPC, send a POST request to
     * `/v2/vpcs/$VPC_ID/peerings`.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreatePeeringsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreatePeeringsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreatePeeringsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsCreatePeeringsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcPeering|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsCreatePeerings(string $vpcId, \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsCreatePeerings($vpcId, $requestBody), $fetch);
    }
    /**
     * To update the name of a VPC peering in a particular VPC, send a PATCH request
     * to `/v2/vpcs/$VPC_ID/peerings/$VPC_PEERING_ID` with the new `name` in the
     * request body.
     *
     * @param string $vpcId A unique identifier for a VPC.
     * @param string $vpcPeeringId A unique identifier for a VPC peering.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcsPatchPeeringsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcPeering|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcsPatchPeerings(string $vpcId, string $vpcPeeringId, \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcsPatchPeerings($vpcId, $vpcPeeringId, $requestBody), $fetch);
    }
    /**
     * To list all of the VPC peerings on your account, send a GET request to `/v2/vpc_peerings`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "region"?: string, //The slug identifier for the region where the resource is available.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsListNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllVpcPeerings|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcPeeringsList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcPeeringsList($queryParameters), $fetch);
    }
    /**
     * To create a new VPC Peering, send a POST request to `/v2/vpc_peerings`
     * specifying a name and a list of two VPC IDs to peer. The response code, 202
     * Accepted, does not indicate the success or failure of the operation, just
     * that the request has been accepted for processing.
     *
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseProvisioningVpcPeering|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcPeeringsCreate(\Jane\Generated\DigitalOcean\Model\V2VpcPeeringsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcPeeringsCreate($requestBody), $fetch);
    }
    /**
     * To delete a VPC peering, send a DELETE request to `/v2/vpc_peerings/$VPC_PEERING_ID`.
     *
     * @param string $vpcPeeringId A unique identifier for a VPC peering.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseDeletingVpcPeering|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcPeeringsDelete(string $vpcPeeringId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcPeeringsDelete($vpcPeeringId), $fetch);
    }
    /**
     * To show information about an existing VPC Peering, send a GET request to `/v2/vpc_peerings/$VPC_PEERING_ID`.
     *
     * @param string $vpcPeeringId A unique identifier for a VPC peering.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcPeeringsGet(string $vpcPeeringId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcPeeringsGet($vpcPeeringId), $fetch);
    }
    /**
     * To update the name of a VPC peering, send a PATCH request to `/v2/vpc_peerings/$VPC_PEERING_ID` with the new `name` in the request body.
     *
     * @param string $vpcPeeringId A unique identifier for a VPC peering.
     * @param \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcPeeringsPatchInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcPeeringsPatch(string $vpcPeeringId, \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcPeeringsPatch($vpcPeeringId, $requestBody), $fetch);
    }
    /**
     * To list all VPC NAT gateways in your team, send a GET request to `/v2/vpc_nat_gateways`.
     * The response body will be a JSON object with a key of `vpc_nat_gateways` containing an array of VPC NAT gateway objects.
     * These each contain the standard VPC NAT gateway attributes.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "state"?: string, //The current state of the VPC NAT gateway.
     *    "region"?: string, //The region where the VPC NAT gateway is located.
     *    "type"?: string, //The type of the VPC NAT gateway.
     *    "name"?: string, //The name of the VPC NAT gateway.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysListInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcNatGateways|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcnatgatewaysList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcnatgatewaysList($queryParameters), $fetch);
    }
    /**
     * To create a new VPC NAT gateway, send a POST request to `/v2/vpc_nat_gateways` setting the required attributes.
     *
     * The response body will contain a JSON object with a key called `vpc_nat_gateway` containing the standard attributes for the new VPC NAT gateway.
     *
     * @param null|\Jane\Generated\DigitalOcean\Model\VpcNatGatewayCreate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysCreateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayCreate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcnatgatewaysCreate(?\Jane\Generated\DigitalOcean\Model\VpcNatGatewayCreate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcnatgatewaysCreate($requestBody), $fetch);
    }
    /**
     * To destroy a VPC NAT Gateway, send a DELETE request to the `/v2/vpc_nat_gateways/$VPC_NAT_GATEWAY_ID` endpoint.
     *
     * A successful response will include a 202 response code and no content.
     *
     * @param string $id The unique identifier of the VPC NAT gateway.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysDeleteInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcnatgatewaysDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcnatgatewaysDelete($id), $fetch);
    }
    /**
     * To show information about an individual VPC NAT gateway, send a GET request to
     * `/v2/vpc_nat_gateways/$VPC_NAT_GATEWAY_ID`.
     *
     * @param string $id The unique identifier of the VPC NAT gateway.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysGetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcNatGateway|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcnatgatewaysGet(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcnatgatewaysGet($id), $fetch);
    }
    /**
     * To update the configuration of an existing VPC NAT Gateway, send a PUT request to
     * `/v2/vpc_nat_gateways/$VPC_NAT_GATEWAY_ID`. The request must contain a full representation
     * of the VPC NAT Gateway including existing attributes.
     *
     * @param string $id The unique identifier of the VPC NAT gateway.
     * @param null|\Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VpcnatgatewaysUpdateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayUpdate|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function vpcnatgatewaysUpdate(string $id, ?\Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\VpcnatgatewaysUpdate($id, $requestBody), $fetch);
    }
    /**
     * To list all of the Uptime checks on your account, send a GET request to `/v2/uptime/checks`.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListChecksUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListChecksNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListChecksTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListChecksInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllChecks|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeListChecks(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeListChecks($queryParameters), $fetch);
    }
    /**
     * To create an Uptime check, send a POST request to `/v2/uptime/checks` specifying the attributes
     * in the table below in the JSON body.
     *
     * @param \Jane\Generated\DigitalOcean\Model\V2UptimeChecksPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateCheckUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateCheckTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateCheckInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingCheck|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeCreateCheck(\Jane\Generated\DigitalOcean\Model\V2UptimeChecksPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeCreateCheck($requestBody), $fetch);
    }
    /**
     * To delete an Uptime check, send a DELETE request to `/v2/uptime/checks/$CHECK_ID`. A 204 status
     * code with no body will be returned in response to a successful request.
     *
     *
     * Deleting a check will also delete alerts associated with the check.
     *
     * @param string $checkId A unique identifier for a check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteCheckUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteCheckNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteCheckTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteCheckInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeDeleteCheck(string $checkId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeDeleteCheck($checkId), $fetch);
    }
    /**
     * To show information about an existing check, send a GET request to `/v2/uptime/checks/$CHECK_ID`.
     * @param string $checkId A unique identifier for a check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingCheck|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeGetCheck(string $checkId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeGetCheck($checkId), $fetch);
    }
    /**
     * To update the settings of an Uptime check, send a PUT request to `/v2/uptime/checks/$CHECK_ID`.
     *
     * @param string $checkId A unique identifier for a check.
     * @param \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateCheckUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateCheckNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateCheckTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateCheckInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingCheck|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeUpdateCheck(string $checkId, \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeUpdateCheck($checkId, $requestBody), $fetch);
    }
    /**
     * To show information about an existing check's state, send a GET request to `/v2/uptime/checks/$CHECK_ID/state`.
     * @param string $checkId A unique identifier for a check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckStateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckStateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckStateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetCheckStateInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingCheckState|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeGetCheckState(string $checkId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeGetCheckState($checkId), $fetch);
    }
    /**
     * To list all of the alerts for an Uptime check, send a GET request to `/v2/uptime/checks/$CHECK_ID/alerts`.
     * @param string $checkId A unique identifier for a check.
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListAlertsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListAlertsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListAlertsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeListAlertsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseAllAlerts|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeListAlerts(string $checkId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeListAlerts($checkId, $queryParameters), $fetch);
    }
    /**
     * To create an Uptime alert, send a POST request to `/v2/uptime/checks/$CHECK_ID/alerts` specifying the attributes
     * in the table below in the JSON body.
     *
     * @param string $checkId A unique identifier for a check.
     * @param \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingAlert|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeCreateAlert(string $checkId, \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeCreateAlert($checkId, $requestBody), $fetch);
    }
    /**
     * To delete an Uptime alert, send a DELETE request to `/v2/uptime/checks/$CHECK_ID/alerts/$ALERT_ID`. A 204 status
     * code with no body will be returned in response to a successful request.
     *
     * @param string $checkId A unique identifier for a check.
     * @param string $alertId A unique identifier for an alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteAlertUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteAlertNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteAlertTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeDeleteAlertInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeDeleteAlert(string $checkId, string $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeDeleteAlert($checkId, $alertId), $fetch);
    }
    /**
     * To show information about an existing alert, send a GET request to `/v2/uptime/checks/$CHECK_ID/alerts/$ALERT_ID`.
     * @param string $checkId A unique identifier for a check.
     * @param string $alertId A unique identifier for an alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetAlertUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetAlertNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetAlertTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeGetAlertInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingAlert|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeGetAlert(string $checkId, string $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeGetAlert($checkId, $alertId), $fetch);
    }
    /**
     * To update the settings of an Uptime alert, send a PUT request to `/v2/uptime/checks/$CHECK_ID/alerts/$ALERT_ID`.
     *
     * @param string $checkId A unique identifier for a check.
     * @param string $alertId A unique identifier for an alert.
     * @param \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsAlertIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateAlertUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateAlertNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateAlertTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeUpdateAlertInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ResponseExistingAlert|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function uptimeUpdateAlert(string $checkId, string $alertId, \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsAlertIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\UptimeUpdateAlert($checkId, $alertId, $requestBody), $fetch);
    }
    /**
     * To list all agents, send a GET request to `/v2/gen-ai/agents`.
     * @param array{
     *    "only_deployed"?: bool, //Only list agents that are deployed.
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAgentsOutputPublic|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAgents(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAgents($queryParameters), $fetch);
    }
    /**
     * To create a new agent, send a POST request to `/v2/gen-ai/agents`. The response body contains a JSON object with the newly created agent object.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateAgent(?\Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateAgent($requestBody), $fetch);
    }
    /**
     * To list all agent API keys, send a GET request to `/v2/gen-ai/agents/{agent_uuid}/api_keys`.
     * @param string $agentUuid Agent id
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentApiKeysUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentApiKeysNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentApiKeysTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentApiKeysInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAgentAPIKeysOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAgentApiKeys(string $agentUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAgentApiKeys($agentUuid, $queryParameters), $fetch);
    }
    /**
     * To create an agent API key, send a POST request to `/v2/gen-ai/agents/{agent_uuid}/api_keys`.
     * @param string $agentUuid Agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAgentApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateAgentApiKey(string $agentUuid, ?\Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateAgentApiKey($agentUuid, $requestBody), $fetch);
    }
    /**
     * To delete an API key for an agent, send a DELETE request to `/v2/gen-ai/agents/{agent_uuid}/api_keys/{api_key_uuid}`.
     * @param string $agentUuid A unique identifier for your agent.
     * @param string $apiKeyUuid API key for an agent.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteAgentAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteAgentApiKey(string $agentUuid, string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteAgentApiKey($agentUuid, $apiKeyUuid), $fetch);
    }
    /**
     * To update an agent API key, send a PUT request to `/v2/gen-ai/agents/{agent_uuid}/api_keys/{api_key_uuid}`.
     * @param string $agentUuid Agent id
     * @param string $apiKeyUuid API key ID
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAgentApiKey(string $agentUuid, string $apiKeyUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAgentApiKey($agentUuid, $apiKeyUuid, $requestBody), $fetch);
    }
    /**
     * To regenerate an agent API key, send a PUT request to `/v2/gen-ai/agents/{agent_uuid}/api_keys/{api_key_uuid}/regenerate`.
     * @param string $agentUuid Agent id
     * @param string $apiKeyUuid API key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateAgentApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiRegenerateAgentAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiRegenerateAgentApiKey(string $agentUuid, string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiRegenerateAgentApiKey($agentUuid, $apiKeyUuid), $fetch);
    }
    /**
     * To create a function route for an agent, send a POST request to `/v2/gen-ai/agents/{agent_uuid}/functions`.
     * @param string $agentUuid Agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentFunctionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentFunctionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentFunctionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentFunctionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiAttachAgentFunction(string $agentUuid, ?\Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiAttachAgentFunction($agentUuid, $requestBody), $fetch);
    }
    /**
     * To delete a function route from an agent, send a DELETE request to `/v2/gen-ai/agents/{agent_uuid}/functions/{function_uuid}`.
     * @param string $agentUuid The id of the agent the function route belongs to.
     * @param string $functionUuid The function route to be destroyed. This does not destroy the function itself.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentFunctionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentFunctionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentFunctionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentFunctionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUnlinkAgentFunctionOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDetachAgentFunction(string $agentUuid, string $functionUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDetachAgentFunction($agentUuid, $functionUuid), $fetch);
    }
    /**
     * To update the function route, send a PUT request to `/v2/gen-ai/agents/{agent_uuid}/functions/{function_uuid}`.
     * @param string $agentUuid Agent id
     * @param string $functionUuid Function id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentFunctionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAgentFunction(string $agentUuid, string $functionUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAgentFunction($agentUuid, $functionUuid, $requestBody), $fetch);
    }
    /**
     * To attach knowledge bases to an agent, send a POST request to `/v2/gen-ai/agents/{agent_uuid}/knowledge_bases`
     * @param string $agentUuid A unique identifier for an agent.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBasesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBasesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBasesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBasesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiLinkKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiAttachKnowledgeBases(string $agentUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiAttachKnowledgeBases($agentUuid), $fetch);
    }
    /**
     * To detach a knowledge base from an agent, send a DELETE request to `/v2/gen-ai/agents/{agent_uuid}/knowledge_bases/{knowledge_base_uuid}`.
     * @param string $agentUuid Agent id
     * @param string $knowledgeBaseUuid Knowledge base id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUnlinkKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDetachKnowledgeBase(string $agentUuid, string $knowledgeBaseUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDetachKnowledgeBase($agentUuid, $knowledgeBaseUuid), $fetch);
    }
    /**
     * To attach a knowledge base to an agent, send a POST request to `/v2/gen-ai/agents/{agent_uuid}/knowledge_bases/{knowledge_base_uuid}`
     * @param string $agentUuid A unique identifier for an agent.
     * @param string $knowledgeBaseUuid A unique identifier for a knowledge base.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiLinkKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiAttachKnowledgeBase(string $agentUuid, string $knowledgeBaseUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiAttachKnowledgeBase($agentUuid, $knowledgeBaseUuid), $fetch);
    }
    /**
     * To delete an agent route from a parent agent, send a DELETE request to `/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}`.
     * @param string $parentAgentUuid Pagent agent id
     * @param string $childAgentUuid Routed agent id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDetachAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUnlinkAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDetachAgent(string $parentAgentUuid, string $childAgentUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDetachAgent($parentAgentUuid, $childAgentUuid), $fetch);
    }
    /**
     * To add an agent route to an agent, send a POST request to `/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}`.
     * @param string $parentAgentUuid A unique identifier for the parent agent.
     * @param string $childAgentUuid Routed agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiAttachAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiLinkAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiAttachAgent(string $parentAgentUuid, string $childAgentUuid, ?\Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiAttachAgent($parentAgentUuid, $childAgentUuid, $requestBody), $fetch);
    }
    /**
     * To update an agent route for an agent, send a PUT request to `/v2/gen-ai/agents/{parent_agent_uuid}/child_agents/{child_agent_uuid}`.
     * @param string $parentAgentUuid A unique identifier for the parent agent.
     * @param string $childAgentUuid Routed agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAttachedAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAttachedAgent(string $parentAgentUuid, string $childAgentUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAttachedAgent($parentAgentUuid, $childAgentUuid, $requestBody), $fetch);
    }
    /**
     * To delete an agent, send a DELETE request to `/v2/gen-ai/agents/{uuid}`.
     * @param string $uuid Unique agent id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteAgent(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteAgent($uuid), $fetch);
    }
    /**
     * To retrieve details of an agent, GET request to `/v2/gen-ai/agents/{uuid}`. The response body is a JSON object containing the agent.
     * @param string $uuid Unique agent id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetAgent(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetAgent($uuid), $fetch);
    }
    /**
     * To update an agent, send a PUT request to `/v2/gen-ai/agents/{uuid}`. The response body is a JSON object containing the agent.
     * @param string $uuid Unique agent id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAgent(string $uuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAgent($uuid, $requestBody), $fetch);
    }
    /**
     * To view agent routes for an agent, send a GET requtest to `/v2/gen-ai/agents/{uuid}/child_agents`.
     * @param string $uuid Agent id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentChildrenUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentChildrenNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentChildrenTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentChildrenInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetChildrenOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetAgentChildren(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetAgentChildren($uuid), $fetch);
    }
    /**
     * Check whether an agent is public or private. To update the agent status, send a PUT request to `/v2/gen-ai/agents/{uuid}/deployment_visibility`.
     * @param string $uuid Unique id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisibilityInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentDeploymentVisibilityUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentDeploymentVisibilityNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentDeploymentVisibilityTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentDeploymentVisibilityInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisbilityOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAgentDeploymentVisibility(string $uuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisibilityInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAgentDeploymentVisibility($uuid, $requestBody), $fetch);
    }
    /**
     * To get agent usage, send a GET request to `/v2/gen-ai/agents/{uuid}/usage`. Returns usage metrics for the specified agent within the provided time range.
     * @param string $uuid Agent id
     * @param array{
     *    "start"?: string, //Return all usage data from this date.
     *    "stop"?: string, //Return all usage data up to this date, if omitted, will return up to the current date.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentUsageUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentUsageNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentUsageTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAgentUsageInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetAgentUsageOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetAgentUsage(string $uuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetAgentUsage($uuid, $queryParameters), $fetch);
    }
    /**
     * To list all agent versions, send a GET request to `/v2/gen-ai/agents/{uuid}/versions`.
     * @param string $uuid Agent uuid
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentVersionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentVersionsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentVersionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentVersionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAgentVersionsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAgentVersions(string $uuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAgentVersions($uuid, $queryParameters), $fetch);
    }
    /**
     * To update to a specific agent version, send a PUT request to `/v2/gen-ai/agents/{uuid}/versions`.
     * @param string $uuid Agent unique identifier
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRollbackToAgentVersionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRollbackToAgentVersionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRollbackToAgentVersionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRollbackToAgentVersionInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiRollbackToAgentVersion(string $uuid, ?\Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiRollbackToAgentVersion($uuid, $requestBody), $fetch);
    }
    /**
     * To list all Anthropic API keys, send a GET request to `/v2/gen-ai/anthropic/keys`.
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAnthropicApiKeysUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAnthropicApiKeysNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAnthropicApiKeysTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAnthropicApiKeysInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAnthropicAPIKeysOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAnthropicApiKeys(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAnthropicApiKeys($queryParameters), $fetch);
    }
    /**
     * To create an Anthropic API key, send a POST request to `/v2/gen-ai/anthropic/keys`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAnthropicApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAnthropicApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAnthropicApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateAnthropicApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateAnthropicApiKey(?\Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateAnthropicApiKey($requestBody), $fetch);
    }
    /**
     * To delete an Anthropic API key, send a DELETE request to `/v2/gen-ai/anthropic/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAnthropicApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAnthropicApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAnthropicApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteAnthropicApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteAnthropicAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteAnthropicApiKey(string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteAnthropicApiKey($apiKeyUuid), $fetch);
    }
    /**
     * To retrieve details of an Anthropic API key, send a GET request to `/v2/gen-ai/anthropic/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetAnthropicApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetAnthropicAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetAnthropicApiKey(string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetAnthropicApiKey($apiKeyUuid), $fetch);
    }
    /**
     * To update an Anthropic API key, send a PUT request to `/v2/gen-ai/anthropic/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAnthropicApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAnthropicApiKey(string $apiKeyUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAnthropicApiKey($apiKeyUuid, $requestBody), $fetch);
    }
    /**
     * List Agents by Anthropic Key.
     * @param string $uuid Unique ID of Anthropic key
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByAnthropicKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByAnthropicKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByAnthropicKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByAnthropicKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAgentsByAnthropicKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAgentsByAnthropicKey(string $uuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAgentsByAnthropicKey($uuid, $queryParameters), $fetch);
    }
    /**
     * To create an evaluation dataset, send a POST request to `/v2/gen-ai/evaluation_datasets`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateEvaluationDataset(?\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateEvaluationDataset($requestBody), $fetch);
    }
    /**
     * To create presigned URLs for evaluation dataset file upload, send a POST request to `/v2/gen-ai/evaluation_datasets/file_upload_presigned_urls`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationDatasetFileUploadPresignedUrlsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateEvaluationDatasetFileUploadPresignedUrls(?\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateEvaluationDatasetFileUploadPresignedUrls($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationMetricsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationMetricsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationMetricsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationMetricsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListEvaluationMetricsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListEvaluationMetrics(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListEvaluationMetrics(), $fetch);
    }
    /**
     * To run an evaluation test case, send a POST request to `/v2/gen-ai/evaluation_runs`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRunEvaluationTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRunEvaluationTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRunEvaluationTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRunEvaluationTestCaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiRunEvaluationTestCase(?\Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiRunEvaluationTestCase($requestBody), $fetch);
    }
    /**
     * To retrive information about an existing evaluation run, send a GET request to `/v2/gen-ai/evaluation_runs/{evaluation_run_uuid}`.
     * @param string $evaluationRunUuid Evaluation run UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetEvaluationRun(string $evaluationRunUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetEvaluationRun($evaluationRunUuid), $fetch);
    }
    /**
     * To retrieve results of an evaluation run, send a GET request to `/v2/gen-ai/evaluation_runs/{evaluation_run_uuid}/results`.
     * @param string $evaluationRunUuid Evaluation run UUID.
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunResultsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunResultsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunResultsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunResultsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunResultsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetEvaluationRunResults(string $evaluationRunUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetEvaluationRunResults($evaluationRunUuid, $queryParameters), $fetch);
    }
    /**
     * To retrieve results of an evaluation run, send a GET request to `/v2/gen-ai/evaluation_runs/{evaluation_run_uuid}/results/{prompt_id}`.
     * @param string $evaluationRunUuid Evaluation run UUID.
     * @param int $promptId Prompt ID to get results for.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationRunPromptResultsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunPromptResultsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetEvaluationRunPromptResults(string $evaluationRunUuid, int $promptId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetEvaluationRunPromptResults($evaluationRunUuid, $promptId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListEvaluationTestCases(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListEvaluationTestCases(), $fetch);
    }
    /**
     * To create an evaluation test-case send a POST request to `/v2/gen-ai/evaluation_test_cases`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateEvaluationTestCaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateEvaluationTestCase(?\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateEvaluationTestCase($requestBody), $fetch);
    }
    /**
     * To list all evaluation runs by test case, send a GET request to `/v2/gen-ai/evaluation_test_cases/{evaluation_test_case_uuid}/evaluation_runs`.
     * @param string $evaluationTestCaseUuid Evaluation run UUID.
     * @param array{
     *    "evaluation_test_case_version"?: int, //Version of the test case.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationRunsByTestCaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListEvaluationRunsByTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListEvaluationRunsByTestCase(string $evaluationTestCaseUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListEvaluationRunsByTestCase($evaluationTestCaseUuid, $queryParameters), $fetch);
    }
    /**
     * To retrive information about an existing evaluation test case, send a GET request to `/v2/gen-ai/evaluation_test_case/{test_case_uuid}`.
     * @param string $testCaseUuid The test case uuid to retrieve.
     * @param array{
     *    "evaluation_test_case_version"?: int, //Version of the test case.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetEvaluationTestCaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetEvaluationTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetEvaluationTestCase(string $testCaseUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetEvaluationTestCase($testCaseUuid, $queryParameters), $fetch);
    }
    /**
     * To update an evaluation test-case send a PUT request to `/v2/gen-ai/evaluation_test_cases/{test_case_uuid}`.
     * @param string $testCaseUuid Test-case UUID to update
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateEvaluationTestCaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateEvaluationTestCase(string $testCaseUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateEvaluationTestCase($testCaseUuid, $requestBody), $fetch);
    }
    /**
     * To list all indexing jobs for a knowledge base, send a GET request to `/v2/gen-ai/indexing_jobs`.
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseIndexingJobsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListIndexingJobs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListIndexingJobs($queryParameters), $fetch);
    }
    /**
     * To start an indexing job for a knowledge base, send a POST request to `/v2/gen-ai/indexing_jobs`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateIndexingJobUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateIndexingJobNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateIndexingJobTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateIndexingJobInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateIndexingJob(?\Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateIndexingJob($requestBody), $fetch);
    }
    /**
     * To list all datasources for an indexing job, send a GET request to `/v2/gen-ai/indexing_jobs/{indexing_job_uuid}/data_sources`.
     * @param string $indexingJobUuid Uuid of the indexing job
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobDataSourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListIndexingJobDataSourcesOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListIndexingJobDataSources(string $indexingJobUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListIndexingJobDataSources($indexingJobUuid), $fetch);
    }
    /**
     * To get a signed URL for indexing job details, send a GET request to `/v2/gen-ai/indexing_jobs/{uuid}/details_signed_url`.
     * @param string $indexingJobUuid The uuid of the indexing job
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobDetailsSignedUrlInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetIndexingJobDetailsSignedURLOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetIndexingJobDetailsSignedUrl(string $indexingJobUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetIndexingJobDetailsSignedUrl($indexingJobUuid), $fetch);
    }
    /**
     * To get status of an indexing Job for a knowledge base, send a GET request to `/v2/gen-ai/indexing_jobs/{uuid}`.
     * @param string $uuid Indexing job id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetIndexingJobInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetKnowledgeBaseIndexingJobOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetIndexingJob(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetIndexingJob($uuid), $fetch);
    }
    /**
     * To cancel an indexing job for a knowledge base, send a PUT request to `/v2/gen-ai/indexing_jobs/{uuid}/cancel`.
     * @param string $uuid A unique identifier for an indexing job.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCancelIndexingJobUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCancelIndexingJobNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCancelIndexingJobTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCancelIndexingJobInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCancelIndexingJob(string $uuid, ?\Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCancelIndexingJob($uuid, $requestBody), $fetch);
    }
    /**
     * To list all knowledge bases, send a GET request to `/v2/gen-ai/knowledge_bases`.
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBasesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBasesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBasesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBasesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBasesOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListKnowledgeBases(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListKnowledgeBases($queryParameters), $fetch);
    }
    /**
     * To create a knowledge base, send a POST request to `/v2/gen-ai/knowledge_bases`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateKnowledgeBase(?\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateKnowledgeBase($requestBody), $fetch);
    }
    /**
     * To create presigned URLs for knowledge base data source file upload, send a POST request to `/v2/gen-ai/knowledge_bases/data_sources/file_upload_presigned_urls`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateDataSourceFileUploadPresignedUrlsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateDataSourceFileUploadPresignedUrlsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateDataSourceFileUploadPresignedUrlsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateDataSourceFileUploadPresignedUrlsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateDataSourceFileUploadPresignedUrls(?\Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateDataSourceFileUploadPresignedUrls($requestBody), $fetch);
    }
    /**
     * To list all data sources for a knowledge base, send a GET request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources`.
     * @param string $knowledgeBaseUuid Knowledge base id
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListKnowledgeBaseDataSourcesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListKnowledgeBaseDataSources(string $knowledgeBaseUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListKnowledgeBaseDataSources($knowledgeBaseUuid, $queryParameters), $fetch);
    }
    /**
     * To add a data source to a knowledge base, send a POST request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources`.
     * @param string $knowledgeBaseUuid Knowledge base id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateKnowledgeBaseDataSourceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateKnowledgeBaseDataSource(string $knowledgeBaseUuid, ?\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateKnowledgeBaseDataSource($knowledgeBaseUuid, $requestBody), $fetch);
    }
    /**
     * To delete a data source from a knowledge base, send a DELETE request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/data_sources/{data_source_uuid}`.
     * @param string $knowledgeBaseUuid Knowledge base id
     * @param string $dataSourceUuid Data source id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseDataSourceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseDataSourceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseDataSourceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseDataSourceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteKnowledgeBaseDataSourceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteKnowledgeBaseDataSource(string $knowledgeBaseUuid, string $dataSourceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteKnowledgeBaseDataSource($knowledgeBaseUuid, $dataSourceUuid), $fetch);
    }
    /**
     * To list latest 15 indexing jobs for a knowledge base, send a GET request to `/v2/gen-ai/knowledge_bases/{knowledge_base_uuid}/indexing_jobs`.
     * @param string $knowledgeBaseUuid Knowledge base uuid in string
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListIndexingJobsByKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseIndexingJobsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListIndexingJobsByKnowledgeBase(string $knowledgeBaseUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListIndexingJobsByKnowledgeBase($knowledgeBaseUuid), $fetch);
    }
    /**
     * To delete a knowledge base, send a DELETE request to `/v2/gen-ai/knowledge_bases/{uuid}`.
     * @param string $uuid Knowledge base id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteKnowledgeBase(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteKnowledgeBase($uuid), $fetch);
    }
    /**
     * To retrive information about an existing knowledge base, send a GET request to `/v2/gen-ai/knowledge_bases/{uuid}`.
     * @param string $uuid Knowledge base id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetKnowledgeBase(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetKnowledgeBase($uuid), $fetch);
    }
    /**
     * To update a knowledge base, send a PUT request to `/v2/gen-ai/knowledge_bases/{uuid}`.
     * @param string $uuid Knowledge base id
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateKnowledgeBaseUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateKnowledgeBaseNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateKnowledgeBaseTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateKnowledgeBaseInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateKnowledgeBase(string $uuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateKnowledgeBase($uuid, $requestBody), $fetch);
    }
    /**
    * To list all models, send a GET request to `/v2/gen-ai/models`.
    * @param array{
    *    "usecases"?: array, //Include only models defined for the listed usecases.
    
    - MODEL_USECASE_UNKNOWN: The use case of the model is unknown
    - MODEL_USECASE_AGENT: The model maybe used in an agent
    - MODEL_USECASE_FINETUNED: The model maybe used for fine tuning
    - MODEL_USECASE_KNOWLEDGEBASE: The model maybe used for knowledge bases (embedding models)
    - MODEL_USECASE_GUARDRAIL: The model maybe used for guardrails
    - MODEL_USECASE_REASONING: The model usecase for reasoning
    - MODEL_USECASE_SERVERLESS: The model usecase for serverless inference
    *    "public_only"?: bool, //Only include models that are publicly available.
    *    "page"?: int, //Page number.
    *    "per_page"?: int, //Items per page.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsUnauthorizedException
    * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsNotFoundException
    * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsTooManyRequestsException
    * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListModelsOutputPublic|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
    */
    public function genaiListModels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListModels($queryParameters), $fetch);
    }
    /**
     * To list all model API keys, send a GET request to `/v2/gen-ai/models/api_keys`.
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelApiKeysUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelApiKeysNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelApiKeysTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListModelApiKeysInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListModelAPIKeysOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListModelApiKeys(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListModelApiKeys($queryParameters), $fetch);
    }
    /**
     * To create a model API key, send a POST request to `/v2/gen-ai/models/api_keys`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateModelApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateModelApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateModelApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateModelApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateModelApiKey(?\Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateModelApiKey($requestBody), $fetch);
    }
    /**
     * To delete an API key for a model, send a DELETE request to `/v2/gen-ai/models/api_keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key for an agent.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteModelApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteModelApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteModelApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteModelApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteModelAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteModelApiKey(string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteModelApiKey($apiKeyUuid), $fetch);
    }
    /**
     * To update a model API key, send a PUT request to `/v2/gen-ai/models/api_keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateModelApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateModelApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateModelApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateModelApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateModelApiKey(string $apiKeyUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateModelApiKey($apiKeyUuid, $requestBody), $fetch);
    }
    /**
     * To regenerate a model API key, send a PUT request to `/v2/gen-ai/models/api_keys/{api_key_uuid}/regenerate`.
     * @param string $apiKeyUuid API key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateModelApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateModelApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateModelApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiRegenerateModelApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiRegenerateModelAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiRegenerateModelApiKey(string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiRegenerateModelApiKey($apiKeyUuid), $fetch);
    }
    /**
     * To obtain the refresh token, needed for creation of data sources, send a GET request to `/v2/gen-ai/oauth2/dropbox/tokens`. Pass the code you obtrained from the oauth flow in the field 'code'
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOauth2DropboxTokensInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateOauth2DropboxTokens(?\Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateOauth2DropboxTokens($requestBody), $fetch);
    }
    /**
     * To generate an Oauth2-URL for use with your localhost, send a GET request to `/v2/gen-ai/oauth2/url`. Pass 'http://localhost:3000 as redirect_url
     * @param array{
     *    "type"?: string, //Type "google" / "dropbox".
     *    "redirect_url"?: string, //The redirect url.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOauth2UrlUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOauth2UrlNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOauth2UrlTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOauth2UrlInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGenerateOauth2URLOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetOauth2Url(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetOauth2Url($queryParameters), $fetch);
    }
    /**
     * To list all OpenAI API keys, send a GET request to `/v2/gen-ai/openai/keys`.
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListOpenaiApiKeysUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListOpenaiApiKeysNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListOpenaiApiKeysTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListOpenaiApiKeysInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListOpenAIAPIKeysOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListOpenaiApiKeys(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListOpenaiApiKeys($queryParameters), $fetch);
    }
    /**
     * To create an OpenAI API key, send a POST request to `/v2/gen-ai/openai/keys`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOpenaiApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOpenaiApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOpenaiApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateOpenaiApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateOpenaiApiKey(?\Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateOpenaiApiKey($requestBody), $fetch);
    }
    /**
     * To delete an OpenAI API key, send a DELETE request to `/v2/gen-ai/openai/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteOpenaiApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteOpenaiApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteOpenaiApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteOpenaiApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteOpenAIAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteOpenaiApiKey(string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteOpenaiApiKey($apiKeyUuid), $fetch);
    }
    /**
     * To retrieve details of an OpenAI API key, send a GET request to `/v2/gen-ai/openai/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOpenaiApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOpenaiApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOpenaiApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetOpenaiApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetOpenAIAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetOpenaiApiKey(string $apiKeyUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetOpenaiApiKey($apiKeyUuid), $fetch);
    }
    /**
     * To update an OpenAI API key, send a PUT request to `/v2/gen-ai/openai/keys/{api_key_uuid}`.
     * @param string $apiKeyUuid API key ID
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateOpenaiApiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateOpenaiApiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateOpenaiApiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateOpenaiApiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateOpenaiApiKey(string $apiKeyUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateOpenaiApiKey($apiKeyUuid, $requestBody), $fetch);
    }
    /**
     * List Agents by OpenAI Key.
     * @param string $uuid Unique ID of OpenAI key
     * @param array{
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByOpenaiKeyUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByOpenaiKeyNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByOpenaiKeyTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByOpenaiKeyInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAgentsByOpenAIKeyOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAgentsByOpenaiKey(string $uuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAgentsByOpenaiKey($uuid, $queryParameters), $fetch);
    }
    /**
     * To list all datacenter regions, send a GET request to `/v2/gen-ai/regions`.
     * @param array{
     *    "serves_inference"?: bool, //Include datacenters that serve inference.
     *    "serves_batch"?: bool, //Include datacenters that are capable of running batch jobs.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListDatacenterRegionsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListDatacenterRegionsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListDatacenterRegionsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListDatacenterRegionsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListRegionsOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListDatacenterRegions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListDatacenterRegions($queryParameters), $fetch);
    }
    /**
     * To create scheduled indexing for a knowledge base, send a POST request to `/v2/gen-ai/scheduled-indexing`.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateScheduledIndexingUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateScheduledIndexingNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateScheduledIndexingTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateScheduledIndexingInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateScheduledIndexing(?\Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateScheduledIndexing($requestBody), $fetch);
    }
    /**
     * Get Scheduled Indexing for knowledge base using knoweldge base uuid, send a GET request to `/v2/gen-ai/scheduled-indexing/knowledge-base/{knowledge_base_uuid}`.
     * @param string $knowledgeBaseUuid UUID of the scheduled indexing entry
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetScheduledIndexingInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetScheduledIndexingOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetScheduledIndexing(string $knowledgeBaseUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetScheduledIndexing($knowledgeBaseUuid), $fetch);
    }
    /**
     * Delete Scheduled Indexing for knowledge base, send a DELETE request to `/v2/gen-ai/scheduled-indexing/{uuid}`.
     * @param string $uuid UUID of the scheduled indexing
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteScheduledIndexingUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteScheduledIndexingNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteScheduledIndexingTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteScheduledIndexingInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteScheduledIndexingOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteScheduledIndexing(string $uuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteScheduledIndexing($uuid), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListWorkspacesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListWorkspacesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListWorkspacesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListWorkspacesInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListWorkspacesOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListWorkspaces(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListWorkspaces(), $fetch);
    }
    /**
     * To create a new workspace, send a POST request to `/v2/gen-ai/workspaces`. The response body contains a JSON object with the newly created workspace object.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiCreateWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiCreateWorkspace(?\Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiCreateWorkspace($requestBody), $fetch);
    }
    /**
     * To delete a workspace, send a DELETE request to `/v2/gen-ai/workspace/{workspace_uuid}`.
     * @param string $workspaceUuid Workspace UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiDeleteWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiDeleteWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiDeleteWorkspace(string $workspaceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiDeleteWorkspace($workspaceUuid), $fetch);
    }
    /**
     * To retrieve details of a workspace, GET request to `/v2/gen-ai/workspaces/{workspace_uuid}`. The response body is a JSON object containing the workspace.
     * @param string $workspaceUuid Workspace UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiGetWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiGetWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiGetWorkspace(string $workspaceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiGetWorkspace($workspaceUuid), $fetch);
    }
    /**
     * To update a workspace, send a PUT request to `/v2/gen-ai/workspaces/{workspace_uuid}`. The response body is a JSON object containing the workspace.
     * @param string $workspaceUuid Workspace UUID.
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateWorkspace(string $workspaceUuid, ?\Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateWorkspace($workspaceUuid, $requestBody), $fetch);
    }
    /**
     * To list all agents by a Workspace, send a GET request to `/v2/gen-ai/workspaces/{workspace_uuid}/agents`.
     * @param string $workspaceUuid Workspace UUID.
     * @param array{
     *    "only_deployed"?: bool, //Only list agents that are deployed.
     *    "page"?: int, //Page number.
     *    "per_page"?: int, //Items per page.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListAgentsByWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListAgentsByWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListAgentsByWorkspace(string $workspaceUuid, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListAgentsByWorkspace($workspaceUuid, $queryParameters), $fetch);
    }
    /**
     * To move all listed agents a given workspace, send a PUT request to `/v2/gen-ai/workspaces/{workspace_uuid}/agents`.
     * @param string $workspaceUuid Workspace uuid to move agents to
     * @param null|\Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceInputPublic $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentsWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentsWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentsWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiUpdateAgentsWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiUpdateAgentsWorkspace(string $workspaceUuid, ?\Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceInputPublic $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiUpdateAgentsWorkspace($workspaceUuid, $requestBody), $fetch);
    }
    /**
     * To list all evaluation test cases by a workspace, send a GET request to `/v2/gen-ai/workspaces/{workspace_uuid}/evaluation_test_cases`.
     * @param string $workspaceUuid Workspace UUID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\GenaiListEvaluationTestCasesByWorkspaceInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null|\Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesByWorkspaceOutput|\Jane\Generated\DigitalOcean\Model\Error : \Psr\Http\Message\ResponseInterface)
     */
    public function genaiListEvaluationTestCasesByWorkspace(string $workspaceUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Generated\DigitalOcean\Endpoint\GenaiListEvaluationTestCasesByWorkspace($workspaceUuid), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.digitalocean.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Generated\DigitalOcean\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}