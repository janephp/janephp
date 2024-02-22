<?php

namespace Docker\Api\Model;

class ContainersIdExecPostBody
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
     * Attach to `stdin` of the exec command.
     *
     * @var bool
     */
    protected $attachStdin;
    /**
     * Attach to `stdout` of the exec command.
     *
     * @var bool
     */
    protected $attachStdout;
    /**
     * Attach to `stderr` of the exec command.
     *
     * @var bool
     */
    protected $attachStderr;
    /**
    * Override the key sequence for detaching a container. Format is
    a single character `[a-Z]` or `ctrl-<value>` where `<value>`
    is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
    
    *
    * @var string
    */
    protected $detachKeys;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    protected $tty;
    /**
     * A list of environment variables in the form `["VAR=value", ...]`.
     *
     * @var list<string>
     */
    protected $env;
    /**
     * Command to run, as a string or array of strings.
     *
     * @var list<string>
     */
    protected $cmd;
    /**
     * Runs the exec process with extended privileges.
     *
     * @var bool
     */
    protected $privileged = false;
    /**
    * The user, and optionally, group to run the exec process inside
    the container. Format is one of: `user`, `user:group`, `uid`,
    or `uid:gid`.
    
    *
    * @var string
    */
    protected $user;
    /**
     * The working directory for the exec process inside the container.
     *
     * @var string
     */
    protected $workingDir;
    /**
     * Attach to `stdin` of the exec command.
     *
     * @return bool
     */
    public function getAttachStdin() : bool
    {
        return $this->attachStdin;
    }
    /**
     * Attach to `stdin` of the exec command.
     *
     * @param bool $attachStdin
     *
     * @return self
     */
    public function setAttachStdin(bool $attachStdin) : self
    {
        $this->initialized['attachStdin'] = true;
        $this->attachStdin = $attachStdin;
        return $this;
    }
    /**
     * Attach to `stdout` of the exec command.
     *
     * @return bool
     */
    public function getAttachStdout() : bool
    {
        return $this->attachStdout;
    }
    /**
     * Attach to `stdout` of the exec command.
     *
     * @param bool $attachStdout
     *
     * @return self
     */
    public function setAttachStdout(bool $attachStdout) : self
    {
        $this->initialized['attachStdout'] = true;
        $this->attachStdout = $attachStdout;
        return $this;
    }
    /**
     * Attach to `stderr` of the exec command.
     *
     * @return bool
     */
    public function getAttachStderr() : bool
    {
        return $this->attachStderr;
    }
    /**
     * Attach to `stderr` of the exec command.
     *
     * @param bool $attachStderr
     *
     * @return self
     */
    public function setAttachStderr(bool $attachStderr) : self
    {
        $this->initialized['attachStderr'] = true;
        $this->attachStderr = $attachStderr;
        return $this;
    }
    /**
    * Override the key sequence for detaching a container. Format is
    a single character `[a-Z]` or `ctrl-<value>` where `<value>`
    is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
    
    *
    * @return string
    */
    public function getDetachKeys() : string
    {
        return $this->detachKeys;
    }
    /**
    * Override the key sequence for detaching a container. Format is
    a single character `[a-Z]` or `ctrl-<value>` where `<value>`
    is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
    
    *
    * @param string $detachKeys
    *
    * @return self
    */
    public function setDetachKeys(string $detachKeys) : self
    {
        $this->initialized['detachKeys'] = true;
        $this->detachKeys = $detachKeys;
        return $this;
    }
    /**
     * Allocate a pseudo-TTY.
     *
     * @return bool
     */
    public function getTty() : bool
    {
        return $this->tty;
    }
    /**
     * Allocate a pseudo-TTY.
     *
     * @param bool $tty
     *
     * @return self
     */
    public function setTty(bool $tty) : self
    {
        $this->initialized['tty'] = true;
        $this->tty = $tty;
        return $this;
    }
    /**
     * A list of environment variables in the form `["VAR=value", ...]`.
     *
     * @return list<string>
     */
    public function getEnv() : array
    {
        return $this->env;
    }
    /**
     * A list of environment variables in the form `["VAR=value", ...]`.
     *
     * @param list<string> $env
     *
     * @return self
     */
    public function setEnv(array $env) : self
    {
        $this->initialized['env'] = true;
        $this->env = $env;
        return $this;
    }
    /**
     * Command to run, as a string or array of strings.
     *
     * @return list<string>
     */
    public function getCmd() : array
    {
        return $this->cmd;
    }
    /**
     * Command to run, as a string or array of strings.
     *
     * @param list<string> $cmd
     *
     * @return self
     */
    public function setCmd(array $cmd) : self
    {
        $this->initialized['cmd'] = true;
        $this->cmd = $cmd;
        return $this;
    }
    /**
     * Runs the exec process with extended privileges.
     *
     * @return bool
     */
    public function getPrivileged() : bool
    {
        return $this->privileged;
    }
    /**
     * Runs the exec process with extended privileges.
     *
     * @param bool $privileged
     *
     * @return self
     */
    public function setPrivileged(bool $privileged) : self
    {
        $this->initialized['privileged'] = true;
        $this->privileged = $privileged;
        return $this;
    }
    /**
    * The user, and optionally, group to run the exec process inside
    the container. Format is one of: `user`, `user:group`, `uid`,
    or `uid:gid`.
    
    *
    * @return string
    */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
    * The user, and optionally, group to run the exec process inside
    the container. Format is one of: `user`, `user:group`, `uid`,
    or `uid:gid`.
    
    *
    * @param string $user
    *
    * @return self
    */
    public function setUser(string $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * The working directory for the exec process inside the container.
     *
     * @return string
     */
    public function getWorkingDir() : string
    {
        return $this->workingDir;
    }
    /**
     * The working directory for the exec process inside the container.
     *
     * @param string $workingDir
     *
     * @return self
     */
    public function setWorkingDir(string $workingDir) : self
    {
        $this->initialized['workingDir'] = true;
        $this->workingDir = $workingDir;
        return $this;
    }
}