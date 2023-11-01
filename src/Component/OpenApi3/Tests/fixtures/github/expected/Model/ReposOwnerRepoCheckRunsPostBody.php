<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the check. For example, "code-coverage".
     *
     * @var string
     */
    protected $name;
    /**
     * The SHA of the commit.
     *
     * @var string
     */
    protected $headSha;
    /**
     * The URL of the integrator's site that has the full details of the check. If the integrator does not provide this, then the homepage of the GitHub app is used.
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
     * The current status. Can be one of `queued`, `in_progress`, or `completed`.
     *
     * @var string
     */
    protected $status = 'queued';
    /**
     * The time that the check run began. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @var string
     */
    protected $startedAt;
    /**
    * **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. Can be one of `success`, `failure`, `neutral`, `cancelled`, `skipped`, `timed_out`, or `action_required`. When the conclusion is `action_required`, additional details should be provided on the site specified by `details_url`.  
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
     * Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://developer.github.com/v3/checks/runs/#output-object) description.
     *
     * @var ReposOwnerRepoCheckRunsPostBodyOutput
     */
    protected $output;
    /**
     * Displays a button on GitHub that can be clicked to alert your app to do additional tasks. For example, a code linting app can display a button that automatically fixes detected errors. The button created in this object is displayed after the check run completes. When a user clicks the button, GitHub sends the [`check_run.requested_action` webhook](https://developer.github.com/webhooks/event-payloads/#check_run) to your app. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://developer.github.com/v3/checks/runs/#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)." To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)."
     *
     * @var ReposOwnerRepoCheckRunsPostBodyActionsItem[]
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The SHA of the commit.
     *
     * @return string
     */
    public function getHeadSha() : string
    {
        return $this->headSha;
    }
    /**
     * The SHA of the commit.
     *
     * @param string $headSha
     *
     * @return self
     */
    public function setHeadSha(string $headSha) : self
    {
        $this->initialized['headSha'] = true;
        $this->headSha = $headSha;
        return $this;
    }
    /**
     * The URL of the integrator's site that has the full details of the check. If the integrator does not provide this, then the homepage of the GitHub app is used.
     *
     * @return string
     */
    public function getDetailsUrl() : string
    {
        return $this->detailsUrl;
    }
    /**
     * The URL of the integrator's site that has the full details of the check. If the integrator does not provide this, then the homepage of the GitHub app is used.
     *
     * @param string $detailsUrl
     *
     * @return self
     */
    public function setDetailsUrl(string $detailsUrl) : self
    {
        $this->initialized['detailsUrl'] = true;
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
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The time that the check run began. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @return string
     */
    public function getStartedAt() : string
    {
        return $this->startedAt;
    }
    /**
     * The time that the check run began. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt) : self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
    * **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. Can be one of `success`, `failure`, `neutral`, `cancelled`, `skipped`, `timed_out`, or `action_required`. When the conclusion is `action_required`, additional details should be provided on the site specified by `details_url`.  
    **Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. Only GitHub can change a check run conclusion to `stale`.
    *
    * @return string
    */
    public function getConclusion() : string
    {
        return $this->conclusion;
    }
    /**
    * **Required if you provide `completed_at` or a `status` of `completed`**. The final conclusion of the check. Can be one of `success`, `failure`, `neutral`, `cancelled`, `skipped`, `timed_out`, or `action_required`. When the conclusion is `action_required`, additional details should be provided on the site specified by `details_url`.  
    **Note:** Providing `conclusion` will automatically set the `status` parameter to `completed`. Only GitHub can change a check run conclusion to `stale`.
    *
    * @param string $conclusion
    *
    * @return self
    */
    public function setConclusion(string $conclusion) : self
    {
        $this->initialized['conclusion'] = true;
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
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://developer.github.com/v3/checks/runs/#output-object) description.
     *
     * @return ReposOwnerRepoCheckRunsPostBodyOutput
     */
    public function getOutput() : ReposOwnerRepoCheckRunsPostBodyOutput
    {
        return $this->output;
    }
    /**
     * Check runs can accept a variety of data in the `output` object, including a `title` and `summary` and can optionally provide descriptive details about the run. See the [`output` object](https://developer.github.com/v3/checks/runs/#output-object) description.
     *
     * @param ReposOwnerRepoCheckRunsPostBodyOutput $output
     *
     * @return self
     */
    public function setOutput(ReposOwnerRepoCheckRunsPostBodyOutput $output) : self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
    /**
     * Displays a button on GitHub that can be clicked to alert your app to do additional tasks. For example, a code linting app can display a button that automatically fixes detected errors. The button created in this object is displayed after the check run completes. When a user clicks the button, GitHub sends the [`check_run.requested_action` webhook](https://developer.github.com/webhooks/event-payloads/#check_run) to your app. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://developer.github.com/v3/checks/runs/#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)." To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)."
     *
     * @return ReposOwnerRepoCheckRunsPostBodyActionsItem[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Displays a button on GitHub that can be clicked to alert your app to do additional tasks. For example, a code linting app can display a button that automatically fixes detected errors. The button created in this object is displayed after the check run completes. When a user clicks the button, GitHub sends the [`check_run.requested_action` webhook](https://developer.github.com/webhooks/event-payloads/#check_run) to your app. Each action includes a `label`, `identifier` and `description`. A maximum of three actions are accepted. See the [`actions` object](https://developer.github.com/v3/checks/runs/#actions-object) description. To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)." To learn more about check runs and requested actions, see "[Check runs and requested actions](https://developer.github.com/v3/checks/runs/#check-runs-and-requested-actions)."
     *
     * @param ReposOwnerRepoCheckRunsPostBodyActionsItem[] $actions
     *
     * @return self
     */
    public function setActions(array $actions) : self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
}