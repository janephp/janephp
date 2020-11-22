<?php

namespace Github\Model;

class OrgsOrgActionsSecretsSecretNameRepositoriesPutBody
{
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://developer.github.com/v3/actions/secrets/#remove-selected-repository-from-an-organization-secret) endpoints.
     *
     * @var int[]
     */
    protected $selectedRepositoryIds;
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://developer.github.com/v3/actions/secrets/#remove-selected-repository-from-an-organization-secret) endpoints.
     *
     * @return int[]
     */
    public function getSelectedRepositoryIds() : array
    {
        return $this->selectedRepositoryIds;
    }
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can add and remove individual repositories using the [Set selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#set-selected-repositories-for-an-organization-secret) and [Remove selected repository from an organization secret](https://developer.github.com/v3/actions/secrets/#remove-selected-repository-from-an-organization-secret) endpoints.
     *
     * @param int[] $selectedRepositoryIds
     *
     * @return self
     */
    public function setSelectedRepositoryIds(array $selectedRepositoryIds) : self
    {
        $this->selectedRepositoryIds = $selectedRepositoryIds;
        return $this;
    }
}