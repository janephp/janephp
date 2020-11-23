<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsCheckRunIdPatchBody
{
    /**
     * The name of the check. For example, "code-coverage".
     *
     * @var string
     */
    protected $name;
    /**
     * The URL of the integrator's site that has the full details of the check.
     *
     * @var string
     */
    protected $detailsUrl;
    /**
     * A reference for the run on the integrator's system.
     *
     * @var string
     */
    protected $externalId;
    /**
     * This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @var string
     */
    protected $startedAt;
    /**
     * The current status. Can be one of `queued`, `in_progress`, or `completed`.
     *
     * @var string
     */
    protected $status;
    /**
    * **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. Can be one of `success`, `failure`, `neutral`, `cancelled`, `skipped`, `timed_out`, or `action_required`.  
    **Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. Only GitHub can change a check run conclusion to `stale`.
    *
    * @var string
    */
    protected $conclusion;
    /**
     * The time the check completed. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @var string
     */
    protected $completedAt;
    /**
     * Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://developer.github.com/v3/checks/runs/#output-object-1) description.
     *
     * @var ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput
     */
    protected $output;
    /**
     * Possible further actions the integrator can perform, which a user may trigger. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://developer.github.com/v3/checks/runs/#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)."
     *
     * @var ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem[]
     */
    protected $actions;
    /**
     * The name of the check. For example, "code-coverage".
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the check. For example, "code-coverage".
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The URL of the integrator's site that has the full details of the check.
     *
     * @return string
     */
    public function getDetailsUrl() : string
    {
        return $this->detailsUrl;
    }
    /**
     * The URL of the integrator's site that has the full details of the check.
     *
     * @param string $detailsUrl
     *
     * @return self
     */
    public function setDetailsUrl(string $detailsUrl) : self
    {
        $this->detailsUrl = $detailsUrl;
        return $this;
    }
    /**
     * A reference for the run on the integrator's system.
     *
     * @return string
     */
    public function getExternalId() : string
    {
        return $this->externalId;
    }
    /**
     * A reference for the run on the integrator's system.
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @return string
     */
    public function getStartedAt() : string
    {
        return $this->startedAt;
    }
    /**
     * This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The current status. Can be one of `queued`, `in_progress`, or `completed`.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The current status. Can be one of `queued`, `in_progress`, or `completed`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
    * **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. Can be one of `success`, `failure`, `neutral`, `cancelled`, `skipped`, `timed_out`, or `action_required`.  
    **Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. Only GitHub can change a check run conclusion to `stale`.
    *
    * @return string
    */
    public function getConclusion() : string
    {
        return $this->conclusion;
    }
    /**
    * **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. Can be one of `success`, `failure`, `neutral`, `cancelled`, `skipped`, `timed_out`, or `action_required`.  
    **Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. Only GitHub can change a check run conclusion to `stale`.
    *
    * @param string $conclusion
    *
    * @return self
    */
    public function setConclusion(string $conclusion) : self
    {
        $this->conclusion = $conclusion;
        return $this;
    }
    /**
     * The time the check completed. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @return string
     */
    public function getCompletedAt() : string
    {
        return $this->completedAt;
    }
    /**
     * The time the check completed. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @param string $completedAt
     *
     * @return self
     */
    public function setCompletedAt(string $completedAt) : self
    {
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://developer.github.com/v3/checks/runs/#output-object-1) description.
     *
     * @return ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput
     */
    public function getOutput() : ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput
    {
        return $this->output;
    }
    /**
     * Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://developer.github.com/v3/checks/runs/#output-object-1) description.
     *
     * @param ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput $output
     *
     * @return self
     */
    public function setOutput(ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput $output) : self
    {
        $this->output = $output;
        return $this;
    }
    /**
     * Possible further actions the integrator can perform, which a user may trigger. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://developer.github.com/v3/checks/runs/#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)."
     *
     * @return ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Possible further actions the integrator can perform, which a user may trigger. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://developer.github.com/v3/checks/runs/#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)."
     *
     * @param ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem[] $actions
     *
     * @return self
     */
    public function setActions(array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
}