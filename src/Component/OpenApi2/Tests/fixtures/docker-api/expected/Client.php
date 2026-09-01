<?php

namespace Docker\Api;

class Client extends \Docker\Api\Runtime\Client\Client
{
    /**
     * Returns a list of containers. For details on the format, see the
     * [inspect endpoint](#operation/ContainerInspect).
     *
     * Note that it uses a different, smaller representation of a container
     * than inspecting a single container. For example, the list of linked
     * containers is not propagated .
     *
     * @param array $queryParameters {
     *     @var bool $all Return all containers. By default, only running containers are shown.
     *     
     *     @var int $limit Return this number of most recently created containers, including
     *     non-running ones.
     *     
     *     @var bool $size Return the size of container as fields `SizeRw` and `SizeRootFs`.
     *     
     *     @var string $filters Filters to process on the container list, encoded as JSON (a
     *     `map[string][]string`). For example, `{"status": ["paused"]}` will
     *     only return paused containers.
     *     
     *     Available filters:
     *     
     *     - `ancestor`=(`<image-name>[:<tag>]`, `<image id>`, or `<image@digest>`)
     *     - `before`=(`<container id>` or `<container name>`)
     *     - `expose`=(`<port>[/<proto>]`|`<startport-endport>/[<proto>]`)
     *     - `exited=<int>` containers with exit code of `<int>`
     *     - `health`=(`starting`|`healthy`|`unhealthy`|`none`)
     *     - `id=<ID>` a container's ID
     *     - `isolation=`(`default`|`process`|`hyperv`) (Windows daemon only)
     *     - `is-task=`(`true`|`false`)
     *     - `label=key` or `label="key=value"` of a container label
     *     - `name=<name>` a container's name
     *     - `network`=(`<network id>` or `<network name>`)
     *     - `publish`=(`<port>[/<proto>]`|`<startport-endport>/[<proto>]`)
     *     - `since`=(`<container id>` or `<container name>`)
     *     - `status=`(`created`|`restarting`|`running`|`removing`|`paused`|`exited`|`dead`)
     *     - `volume`=(`<volume name>` or `<mount point destination>`)
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerListBadRequestException
     * @throws \Docker\Api\Exception\ContainerListInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainerSummary[]
     */
    public function containerList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerList($queryParameters));
    }
    /**
     * @param \Docker\Api\Model\ContainersCreatePostBody $body Container to create
     * @param array $queryParameters {
     *     @var string $name Assign the specified name to the container. Must match
     *     `/?[a-zA-Z0-9][a-zA-Z0-9_.-]+`.
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerCreateBadRequestException
     * @throws \Docker\Api\Exception\ContainerCreateNotFoundException
     * @throws \Docker\Api\Exception\ContainerCreateConflictException
     * @throws \Docker\Api\Exception\ContainerCreateInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersCreatePostResponse201
     */
    public function containerCreate(\Docker\Api\Model\ContainersCreatePostBody $body, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerCreate($body, $queryParameters));
    }
    /**
     * Return low-level information about a container.
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $size Return the size of container as fields `SizeRw` and `SizeRootFs`
     * }
     * @throws \Docker\Api\Exception\ContainerInspectNotFoundException
     * @throws \Docker\Api\Exception\ContainerInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersIdJsonGetResponse200
     */
    public function containerInspect(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerInspect($id, $queryParameters));
    }
    /**
     * On Unix systems, this is done by running the `ps` command. This endpoint
     * is not supported on Windows.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $ps_args The arguments to pass to `ps`. For example, `aux`
     * }
     * @throws \Docker\Api\Exception\ContainerTopNotFoundException
     * @throws \Docker\Api\Exception\ContainerTopInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersIdTopGetResponse200
     */
    public function containerTop(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerTop($id, $queryParameters));
    }
    /**
     * Get `stdout` and `stderr` logs from a container.
     *
     * Note: This endpoint works only for containers with the `json-file` or
     * `journald` logging driver.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $follow Keep connection after returning logs.
     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var int $until Only return logs before this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs.
     *     Specify as an integer or `all` to output all log lines.
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerLogsNotFoundException
     * @throws \Docker\Api\Exception\ContainerLogsInternalServerErrorException
     *
     * @return null|string
     */
    public function containerLogs(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerLogs($id, $queryParameters));
    }
    /**
     * Returns which files in a container's filesystem have been added, deleted,
     * or modified. The `Kind` of modification can be one of:
     *
     * - `0`: Modified
     * - `1`: Added
     * - `2`: Deleted
     *
     * @param string $id ID or name of the container
     * @throws \Docker\Api\Exception\ContainerChangesNotFoundException
     * @throws \Docker\Api\Exception\ContainerChangesInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersIdChangesGetResponse200Item[]
     */
    public function containerChanges(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerChanges($id));
    }
    /**
     * Export the contents of a container as a tarball.
     * @param string $id ID or name of the container
     * @throws \Docker\Api\Exception\ContainerExportNotFoundException
     * @throws \Docker\Api\Exception\ContainerExportInternalServerErrorException
     *
     * @return null
     */
    public function containerExport(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerExport($id));
    }
    /**
     * This endpoint returns a live stream of a container’s resource usage
     * statistics.
     *
     * The `precpu_stats` is the CPU statistic of the *previous* read, and is
     * used to calculate the CPU usage percentage. It is not an exact copy
     * of the `cpu_stats` field.
     *
     * If either `precpu_stats.online_cpus` or `cpu_stats.online_cpus` is
     * nil then for compatibility with older daemons the length of the
     * corresponding `cpu_usage.percpu_usage` array should be used.
     *
     * On a cgroup v2 host, the following fields are not set
     * * `blkio_stats`: all fields other than `io_service_bytes_recursive`
     * * `cpu_stats`: `cpu_usage.percpu_usage`
     * * `memory_stats`: `max_usage` and `failcnt`
     * Also, `memory_stats.stats` fields are incompatible with cgroup v1.
     *
     * To calculate the values shown by the `stats` command of the docker cli tool
     * the following formulas can be used:
     * * used_memory = `memory_stats.usage - memory_stats.stats.cache`
     * * available_memory = `memory_stats.limit`
     * * Memory usage % = `(used_memory / available_memory) * 100.0`
     * * cpu_delta = `cpu_stats.cpu_usage.total_usage - precpu_stats.cpu_usage.total_usage`
     * * system_cpu_delta = `cpu_stats.system_cpu_usage - precpu_stats.system_cpu_usage`
     * * number_cpus = `lenght(cpu_stats.cpu_usage.percpu_usage)` or `cpu_stats.online_cpus`
     * * CPU usage % = `(cpu_delta / system_cpu_delta) * number_cpus * 100.0`
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $stream Stream the output. If false, the stats will be output once and then
     *     it will disconnect.
     *     
     *     @var bool $one-shot Only get a single stat instead of waiting for 2 cycles. Must be used
     *     with `stream=false`.
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerStatsNotFoundException
     * @throws \Docker\Api\Exception\ContainerStatsInternalServerErrorException
     *
     * @return null
     */
    public function containerStats(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerStats($id, $queryParameters));
    }
    /**
     * Resize the TTY for a container.
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var int $h Height of the TTY session in characters
     *     @var int $w Width of the TTY session in characters
     * }
     * @throws \Docker\Api\Exception\ContainerResizeNotFoundException
     * @throws \Docker\Api\Exception\ContainerResizeInternalServerErrorException
     *
     * @return null
     */
    public function containerResize(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerResize($id, $queryParameters));
    }
    /**
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $detachKeys Override the key sequence for detaching a container. Format is a
     *     single character `[a-Z]` or `ctrl-<value>` where `<value>` is one
     *     of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerStartNotFoundException
     * @throws \Docker\Api\Exception\ContainerStartInternalServerErrorException
     *
     * @return null
     */
    public function containerStart(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerStart($id, $queryParameters));
    }
    /**
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var int $t Number of seconds to wait before killing the container
     * }
     * @throws \Docker\Api\Exception\ContainerStopNotFoundException
     * @throws \Docker\Api\Exception\ContainerStopInternalServerErrorException
     *
     * @return null
     */
    public function containerStop(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerStop($id, $queryParameters));
    }
    /**
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var int $t Number of seconds to wait before killing the container
     * }
     * @throws \Docker\Api\Exception\ContainerRestartNotFoundException
     * @throws \Docker\Api\Exception\ContainerRestartInternalServerErrorException
     *
     * @return null
     */
    public function containerRestart(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerRestart($id, $queryParameters));
    }
    /**
     * Send a POSIX signal to a container, defaulting to killing to the
     * container.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $signal Signal to send to the container as an integer or string (e.g. `SIGINT`)
     * }
     * @throws \Docker\Api\Exception\ContainerKillNotFoundException
     * @throws \Docker\Api\Exception\ContainerKillConflictException
     * @throws \Docker\Api\Exception\ContainerKillInternalServerErrorException
     *
     * @return null
     */
    public function containerKill(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerKill($id, $queryParameters));
    }
    /**
     * Change various configuration options of a container without having to
     * recreate it.
     *
     * @param string $id ID or name of the container
     * @param \Docker\Api\Model\ContainersIdUpdatePostBody $update
     * @throws \Docker\Api\Exception\ContainerUpdateNotFoundException
     * @throws \Docker\Api\Exception\ContainerUpdateInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersIdUpdatePostResponse200
     */
    public function containerUpdate(string $id, \Docker\Api\Model\ContainersIdUpdatePostBody $update)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerUpdate($id, $update));
    }
    /**
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $name New name for the container
     * }
     * @throws \Docker\Api\Exception\ContainerRenameNotFoundException
     * @throws \Docker\Api\Exception\ContainerRenameConflictException
     * @throws \Docker\Api\Exception\ContainerRenameInternalServerErrorException
     *
     * @return null
     */
    public function containerRename(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerRename($id, $queryParameters));
    }
    /**
     * Use the freezer cgroup to suspend all processes in a container.
     *
     * Traditionally, when suspending a process the `SIGSTOP` signal is used,
     * which is observable by the process being suspended. With the freezer
     * cgroup the process is unaware, and unable to capture, that it is being
     * suspended, and subsequently resumed.
     *
     * @param string $id ID or name of the container
     * @throws \Docker\Api\Exception\ContainerPauseNotFoundException
     * @throws \Docker\Api\Exception\ContainerPauseInternalServerErrorException
     *
     * @return null
     */
    public function containerPause(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerPause($id));
    }
    /**
     * Resume a container which has been paused.
     * @param string $id ID or name of the container
     * @throws \Docker\Api\Exception\ContainerUnpauseNotFoundException
     * @throws \Docker\Api\Exception\ContainerUnpauseInternalServerErrorException
     *
     * @return null
     */
    public function containerUnpause(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerUnpause($id));
    }
    /**
     * Attach to a container to read its output or send it input. You can attach
     * to the same container multiple times and you can reattach to containers
     * that have been detached.
     *
     * Either the `stream` or `logs` parameter must be `true` for this endpoint
     * to do anything.
     *
     * See the [documentation for the `docker attach` command](/engine/reference/commandline/attach/)
     * for more details.
     *
     * ### Hijacking
     *
     * This endpoint hijacks the HTTP connection to transport `stdin`, `stdout`,
     * and `stderr` on the same socket.
     *
     * This is the response from the daemon for an attach request:
     *
     * ```
     * HTTP/1.1 200 OK
     * Content-Type: application/vnd.docker.raw-stream
     *
     * [STREAM]
     * ```
     *
     * After the headers and two new lines, the TCP connection can now be used
     * for raw, bidirectional communication between the client and server.
     *
     * To hint potential proxies about connection hijacking, the Docker client
     * can also optionally send connection upgrade headers.
     *
     * For example, the client sends this request to upgrade the connection:
     *
     * ```
     * POST /containers/16253994b7c4/attach?stream=1&stdout=1 HTTP/1.1
     * Upgrade: tcp
     * Connection: Upgrade
     * ```
     *
     * The Docker daemon will respond with a `101 UPGRADED` response, and will
     * similarly follow with the raw stream:
     *
     * ```
     * HTTP/1.1 101 UPGRADED
     * Content-Type: application/vnd.docker.raw-stream
     * Connection: Upgrade
     * Upgrade: tcp
     *
     * [STREAM]
     * ```
     *
     * ### Stream format
     *
     * When the TTY setting is disabled in [`POST /containers/create`](#operation/ContainerCreate),
     * the stream over the hijacked connected is multiplexed to separate out
     * `stdout` and `stderr`. The stream consists of a series of frames, each
     * containing a header and a payload.
     *
     * The header contains the information which the stream writes (`stdout` or
     * `stderr`). It also contains the size of the associated frame encoded in
     * the last four bytes (`uint32`).
     *
     * It is encoded on the first eight bytes like this:
     *
     * ```go
     * header := [8]byte{STREAM_TYPE, 0, 0, 0, SIZE1, SIZE2, SIZE3, SIZE4}
     * ```
     *
     * `STREAM_TYPE` can be:
     *
     * - 0: `stdin` (is written on `stdout`)
     * - 1: `stdout`
     * - 2: `stderr`
     *
     * `SIZE1, SIZE2, SIZE3, SIZE4` are the four bytes of the `uint32` size
     * encoded as big endian.
     *
     * Following the header is the payload, which is the specified number of
     * bytes of `STREAM_TYPE`.
     *
     * The simplest way to implement this protocol is the following:
     *
     * 1. Read 8 bytes.
     * 2. Choose `stdout` or `stderr` depending on the first byte.
     * 3. Extract the frame size from the last four bytes.
     * 4. Read the extracted size and output it on the correct output.
     * 5. Goto 1.
     *
     * ### Stream format when using a TTY
     *
     * When the TTY setting is enabled in [`POST /containers/create`](#operation/ContainerCreate),
     * the stream is not multiplexed. The data exchanged over the hijacked
     * connection is simply the raw data from the process PTY and client's
     * `stdin`.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $detachKeys Override the key sequence for detaching a container.Format is a single
     *     character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`,
     *     `@`, `^`, `[`, `,` or `_`.
     *     
     *     @var bool $logs Replay previous logs from the container.
     *     
     *     This is useful for attaching to a container that has started and you
     *     want to output everything since the container started.
     *     
     *     If `stream` is also enabled, once all the previous output has been
     *     returned, it will seamlessly transition into streaming current
     *     output.
     *     
     *     @var bool $stream Stream attached streams from the time the request was made onwards.
     *     
     *     @var bool $stdin Attach to `stdin`
     *     @var bool $stdout Attach to `stdout`
     *     @var bool $stderr Attach to `stderr`
     * }
     * @throws \Docker\Api\Exception\ContainerAttachBadRequestException
     * @throws \Docker\Api\Exception\ContainerAttachNotFoundException
     * @throws \Docker\Api\Exception\ContainerAttachInternalServerErrorException
     *
     * @return null
     */
    public function containerAttach(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerAttach($id, $queryParameters));
    }
    /**
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $detachKeys Override the key sequence for detaching a container.Format is a single
     *     character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`,
     *     `@`, `^`, `[`, `,`, or `_`.
     *     
     *     @var bool $logs Return logs
     *     @var bool $stream Return stream
     *     @var bool $stdin Attach to `stdin`
     *     @var bool $stdout Attach to `stdout`
     *     @var bool $stderr Attach to `stderr`
     * }
     * @throws \Docker\Api\Exception\ContainerAttachWebsocketBadRequestException
     * @throws \Docker\Api\Exception\ContainerAttachWebsocketNotFoundException
     * @throws \Docker\Api\Exception\ContainerAttachWebsocketInternalServerErrorException
     *
     * @return null
     */
    public function containerAttachWebsocket(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerAttachWebsocket($id, $queryParameters));
    }
    /**
     * Block until a container stops, then returns the exit code.
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $condition Wait until a container state reaches the given condition, either
     *     'not-running' (default), 'next-exit', or 'removed'.
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerWaitNotFoundException
     * @throws \Docker\Api\Exception\ContainerWaitInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersIdWaitPostResponse200
     */
    public function containerWait(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerWait($id, $queryParameters));
    }
    /**
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $v Remove anonymous volumes associated with the container.
     *     @var bool $force If the container is running, kill it before removing it.
     *     @var bool $link Remove the specified link associated with the container.
     * }
     * @throws \Docker\Api\Exception\ContainerDeleteBadRequestException
     * @throws \Docker\Api\Exception\ContainerDeleteNotFoundException
     * @throws \Docker\Api\Exception\ContainerDeleteConflictException
     * @throws \Docker\Api\Exception\ContainerDeleteInternalServerErrorException
     *
     * @return null
     */
    public function containerDelete(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerDelete($id, $queryParameters));
    }
    /**
     * Get a tar archive of a resource in the filesystem of container id.
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $path Resource in the container’s filesystem to archive.
     * }
     * @throws \Docker\Api\Exception\ContainerArchiveBadRequestException
     * @throws \Docker\Api\Exception\ContainerArchiveNotFoundException
     * @throws \Docker\Api\Exception\ContainerArchiveInternalServerErrorException
     *
     * @return null
     */
    public function containerArchive(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerArchive($id, $queryParameters));
    }
    /**
     * A response header `X-Docker-Container-Path-Stat` is returned, containing
     * a base64 - encoded JSON object with some filesystem header information
     * about the path.
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var string $path Resource in the container’s filesystem to archive.
     * }
     * @throws \Docker\Api\Exception\ContainerArchiveInfoBadRequestException
     * @throws \Docker\Api\Exception\ContainerArchiveInfoNotFoundException
     * @throws \Docker\Api\Exception\ContainerArchiveInfoInternalServerErrorException
     *
     * @return null
     */
    public function containerArchiveInfo(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerArchiveInfo($id, $queryParameters));
    }
    /**
    * Upload a tar archive to be extracted to a path in the filesystem of container id.
    * @param string $id ID or name of the container
    * @param string|resource $inputStream The input stream must be a tar archive compressed with one of the
    following algorithms: `identity` (no compression), `gzip`, `bzip2`,
    or `xz`.
    * @param array $queryParameters {
    *     @var string $path Path to a directory in the container to extract the archive’s contents into.
    *     @var string $noOverwriteDirNonDir If `1`, `true`, or `True` then it will be an error if unpacking the
    *     given content would cause an existing directory to be replaced with
    *     a non-directory and vice versa.
    *     
    *     @var string $copyUIDGID If `1`, `true`, then it will copy UID/GID maps to the dest file or
    *     dir
    *     
    * }
    
    * @throws \Docker\Api\Exception\PutContainerArchiveBadRequestException
    * @throws \Docker\Api\Exception\PutContainerArchiveForbiddenException
    * @throws \Docker\Api\Exception\PutContainerArchiveNotFoundException
    * @throws \Docker\Api\Exception\PutContainerArchiveInternalServerErrorException
    *
    * @return null
    */
    public function putContainerArchive(string $id, $inputStream, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PutContainerArchive($id, $inputStream, $queryParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
     *     
     *     Available filters:
     *     - `until=<timestamp>` Prune containers created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time.
     *     - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune containers with (or without, in case `label!=...` is used) the specified labels.
     *     
     * }
     * @throws \Docker\Api\Exception\ContainerPruneInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ContainersPrunePostResponse200
     */
    public function containerPrune(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerPrune($queryParameters));
    }
    /**
     * Returns a list of images on the server. Note that it uses a different, smaller representation of an image than inspecting a single image.
     * @param array $queryParameters {
     *     @var bool $all Show all images. Only images from a final layer (no children) are shown by default.
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the images list.
     *     
     *     Available filters:
     *     
     *     - `before`=(`<image-name>[:<tag>]`,  `<image id>` or `<image@digest>`)
     *     - `dangling=true`
     *     - `label=key` or `label="key=value"` of an image label
     *     - `reference`=(`<image-name>[:<tag>]`)
     *     - `since`=(`<image-name>[:<tag>]`,  `<image id>` or `<image@digest>`)
     *     
     *     @var bool $digests Show digest information as a `RepoDigests` field on each image.
     * }
     * @throws \Docker\Api\Exception\ImageListInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ImageSummary[]
     */
    public function imageList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageList($queryParameters));
    }
    /**
     * Build an image from a tar archive with a `Dockerfile` in it.
     *
     * The `Dockerfile` specifies how the image is built from the tar archive. It is typically in the archive's root, but can be at a different path or have a different name by specifying the `dockerfile` parameter. [See the `Dockerfile` reference for more information](/engine/reference/builder/).
     *
     * The Docker daemon performs a preliminary validation of the `Dockerfile` before starting the build, and returns an error if the syntax is incorrect. After that, each instruction is run one-by-one until the ID of the new image is output.
     *
     * The build is canceled if the client drops the connection by quitting or being killed.
     *
     * @param string|resource $inputStream A tar archive compressed with one of the following algorithms: identity (no compression), gzip, bzip2, xz.
     * @param array $queryParameters {
     *     @var string $dockerfile Path within the build context to the `Dockerfile`. This is ignored if `remote` is specified and points to an external `Dockerfile`.
     *     @var string $t A name and optional tag to apply to the image in the `name:tag` format. If you omit the tag the default `latest` value is assumed. You can provide several `t` parameters.
     *     @var string $extrahosts Extra hosts to add to /etc/hosts
     *     @var string $remote A Git repository URI or HTTP/HTTPS context URI. If the URI points to a single text file, the file’s contents are placed into a file called `Dockerfile` and the image is built from that file. If the URI points to a tarball, the file is downloaded by the daemon and the contents therein used as the context for the build. If the URI points to a tarball and the `dockerfile` parameter is also specified, there must be a file with the corresponding path inside the tarball.
     *     @var bool $q Suppress verbose build output.
     *     @var bool $nocache Do not use the cache when building the image.
     *     @var string $cachefrom JSON array of images used for build cache resolution.
     *     @var string $pull Attempt to pull the image even if an older image exists locally.
     *     @var bool $rm Remove intermediate containers after a successful build.
     *     @var bool $forcerm Always remove intermediate containers, even upon failure.
     *     @var int $memory Set memory limit for build.
     *     @var int $memswap Total memory (memory + swap). Set as `-1` to disable swap.
     *     @var int $cpushares CPU shares (relative weight).
     *     @var string $cpusetcpus CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     *     @var int $cpuperiod The length of a CPU period in microseconds.
     *     @var int $cpuquota Microseconds of CPU time that the container can get in a CPU period.
     *     @var string $buildargs JSON map of string pairs for build-time variables. Users pass these values at build-time. Docker uses the buildargs as the environment context for commands run via the `Dockerfile` RUN instruction, or for variable expansion in other `Dockerfile` instructions. This is not meant for passing secret values.
     *     
     *     For example, the build arg `FOO=bar` would become `{"FOO":"bar"}` in JSON. This would result in the query parameter `buildargs={"FOO":"bar"}`. Note that `{"FOO":"bar"}` should be URI component encoded.
     *     
     *     [Read more about the buildargs instruction.](/engine/reference/builder/#arg)
     *     
     *     @var int $shmsize Size of `/dev/shm` in bytes. The size must be greater than 0. If omitted the system uses 64MB.
     *     @var bool $squash Squash the resulting images layers into a single layer. *(Experimental release only.)*
     *     @var string $labels Arbitrary key/value labels to set on the image, as a JSON map of string pairs.
     *     @var string $networkmode Sets the networking mode for the run commands during build. Supported
     *     standard values are: `bridge`, `host`, `none`, and `container:<name|id>`.
     *     Any other value is taken as a custom network's name or ID to which this
     *     container should connect to.
     *     
     *     @var string $platform Platform in the format os[/arch[/variant]]
     *     @var string $target Target build stage
     *     @var string $outputs BuildKit output configuration
     * }
     * @param array $headerParameters {
     *     @var string $Content-type
     *     @var string $X-Registry-Config This is a base64-encoded JSON object with auth configurations for multiple registries that a build may refer to.
     *     
     *     The key is a registry URL, and the value is an auth configuration object, [as described in the authentication section](#section/Authentication). For example:
     *     
     *     ```
     *     {
     *       "docker.example.com": {
     *         "username": "janedoe",
     *         "password": "hunter2"
     *       },
     *       "https://index.docker.io/v1/": {
     *         "username": "mobydock",
     *         "password": "conta1n3rize14"
     *       }
     *     }
     *     ```
     *     
     *     Only the registry domain name (and port if not the default 443) are required. However, for legacy reasons, the Docker Hub registry must be specified with both a `https://` prefix and a `/v1/` suffix even though Docker will prefer to use the v2 registry API.
     *     
     * }
     * @throws \Docker\Api\Exception\ImageBuildBadRequestException
     * @throws \Docker\Api\Exception\ImageBuildInternalServerErrorException
     *
     * @return null
     */
    public function imageBuild($inputStream, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageBuild($inputStream, $queryParameters, $headerParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var int $keep-storage Amount of disk space in bytes to keep for cache
     *     @var bool $all Remove all types of build cache
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the list of build cache objects.
     *     
     *     Available filters:
     *     
     *     - `until=<duration>`: duration relative to daemon's time, during which build cache was not used, in Go's duration format (e.g., '24h')
     *     - `id=<id>`
     *     - `parent=<id>`
     *     - `type=<string>`
     *     - `description=<string>`
     *     - `inuse`
     *     - `shared`
     *     - `private`
     *     
     * }
     * @throws \Docker\Api\Exception\BuildPruneInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\BuildPrunePostResponse200
     */
    public function buildPrune(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\BuildPrune($queryParameters));
    }
    /**
     * Create an image by either pulling it from a registry or importing it.
     * @param string $inputImage Image content if the value `-` has been specified in fromSrc query parameter
     * @param array $queryParameters {
     *     @var string $fromImage Name of the image to pull. The name may include a tag or digest. This parameter may only be used when pulling an image. The pull is cancelled if the HTTP connection is closed.
     *     @var string $fromSrc Source to import. The value may be a URL from which the image can be retrieved or `-` to read the image from the request body. This parameter may only be used when importing an image.
     *     @var string $repo Repository name given to an image when it is imported. The repo may include a tag. This parameter may only be used when importing an image.
     *     @var string $tag Tag or digest. If empty when pulling an image, this causes all tags for the given image to be pulled.
     *     @var string $message Set commit message for imported image.
     *     @var array $changes Apply `Dockerfile` instructions to the image that is created,
     *     for example: `changes=ENV DEBUG=true`.
     *     Note that `ENV DEBUG=true` should be URI component encoded.
     *     
     *     Supported `Dockerfile` instructions:
     *     `CMD`|`ENTRYPOINT`|`ENV`|`EXPOSE`|`ONBUILD`|`USER`|`VOLUME`|`WORKDIR`
     *     
     *     @var string $platform Platform in the format os[/arch[/variant]]
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration.
     *     
     *     Refer to the [authentication section](#section/Authentication) for
     *     details.
     *     
     * }
     * @throws \Docker\Api\Exception\ImageCreateNotFoundException
     * @throws \Docker\Api\Exception\ImageCreateInternalServerErrorException
     *
     * @return null
     */
    public function imageCreate(string $inputImage, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageCreate($inputImage, $queryParameters, $headerParameters));
    }
    /**
     * Return low-level information about an image.
     * @param string $name Image name or id
     * @throws \Docker\Api\Exception\ImageInspectNotFoundException
     * @throws \Docker\Api\Exception\ImageInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Image
     */
    public function imageInspect(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageInspect($name));
    }
    /**
     * Return parent layers of an image.
     * @param string $name Image name or ID
     * @throws \Docker\Api\Exception\ImageHistoryNotFoundException
     * @throws \Docker\Api\Exception\ImageHistoryInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ImagesNameHistoryGetResponse200Item[]
     */
    public function imageHistory(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageHistory($name));
    }
    /**
     * Push an image to a registry.
     *
     * If you wish to push an image on to a private registry, that image must
     * already have a tag which references the registry. For example,
     * `registry.example.com/myimage:latest`.
     *
     * The push is cancelled if the HTTP connection is closed.
     *
     * @param string $name Image name or ID.
     * @param array $queryParameters {
     *     @var string $tag The tag to associate with the image on the registry.
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration.
     *     
     *     Refer to the [authentication section](#section/Authentication) for
     *     details.
     *     
     * }
     * @throws \Docker\Api\Exception\ImagePushNotFoundException
     * @throws \Docker\Api\Exception\ImagePushInternalServerErrorException
     *
     * @return null
     */
    public function imagePush(string $name, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImagePush($name, $queryParameters, $headerParameters));
    }
    /**
     * Tag an image so that it becomes part of a repository.
     * @param string $name Image name or ID to tag.
     * @param array $queryParameters {
     *     @var string $repo The repository to tag in. For example, `someuser/someimage`.
     *     @var string $tag The name of the new tag.
     * }
     * @throws \Docker\Api\Exception\ImageTagBadRequestException
     * @throws \Docker\Api\Exception\ImageTagNotFoundException
     * @throws \Docker\Api\Exception\ImageTagConflictException
     * @throws \Docker\Api\Exception\ImageTagInternalServerErrorException
     *
     * @return null
     */
    public function imageTag(string $name, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageTag($name, $queryParameters));
    }
    /**
     * Remove an image, along with any untagged parent images that were
     * referenced by that image.
     *
     * Images can't be removed if they have descendant images, are being
     * used by a running container or are being used by a build.
     *
     * @param string $name Image name or ID
     * @param array $queryParameters {
     *     @var bool $force Remove the image even if it is being used by stopped containers or has other tags
     *     @var bool $noprune Do not delete untagged parent images
     * }
     * @throws \Docker\Api\Exception\ImageDeleteNotFoundException
     * @throws \Docker\Api\Exception\ImageDeleteConflictException
     * @throws \Docker\Api\Exception\ImageDeleteInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ImageDeleteResponseItem[]
     */
    public function imageDelete(string $name, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageDelete($name, $queryParameters));
    }
    /**
     * Search for an image on Docker Hub.
     * @param array $queryParameters {
     *     @var string $term Term to search
     *     @var int $limit Maximum number of results to return
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the images list. Available filters:
     *     
     *     - `is-automated=(true|false)`
     *     - `is-official=(true|false)`
     *     - `stars=<number>` Matches images that has at least 'number' stars.
     *     
     * }
     * @throws \Docker\Api\Exception\ImageSearchInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ImagesSearchGetResponse200Item[]
     */
    public function imageSearch(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageSearch($queryParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`). Available filters:
     *     
     *     - `dangling=<boolean>` When set to `true` (or `1`), prune only
     *        unused *and* untagged images. When set to `false`
     *        (or `0`), all unused images are pruned.
     *     - `until=<string>` Prune images created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time.
     *     - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune images with (or without, in case `label!=...` is used) the specified labels.
     *     
     * }
     * @throws \Docker\Api\Exception\ImagePruneInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ImagesPrunePostResponse200
     */
    public function imagePrune(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImagePrune($queryParameters));
    }
    /**
     * Validate credentials for a registry and, if available, get an identity
     * token for accessing the registry without password.
     *
     * @param \Docker\Api\Model\AuthConfig $authConfig Authentication to check
     * @throws \Docker\Api\Exception\SystemAuthInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\AuthPostResponse200
     */
    public function systemAuth(\Docker\Api\Model\AuthConfig $authConfig)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemAuth($authConfig));
    }
    /**
     * @throws \Docker\Api\Exception\SystemInfoInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\SystemInfo
     */
    public function systemInfo()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemInfo());
    }
    /**
     * @throws \Docker\Api\Exception\SystemVersionInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\SystemVersion
     */
    public function systemVersion()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemVersion());
    }
    /**
     * @throws \Docker\Api\Exception\SystemPingInternalServerErrorException
     *
     * @return null|string
     */
    public function systemPing()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemPing());
    }
    /**
     * @throws \Docker\Api\Exception\SystemPingHeadInternalServerErrorException
     *
     * @return null|string
     */
    public function systemPingHead()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemPingHead());
    }
    /**
     * @param \Docker\Api\Model\ContainerConfig $containerConfig The container configuration
     * @param array $queryParameters {
     *     @var string $container The ID or name of the container to commit
     *     @var string $repo Repository name for the created image
     *     @var string $tag Tag name for the create image
     *     @var string $comment Commit message
     *     @var string $author Author of the image (e.g., `John Hannibal Smith <hannibal@a-team.com>`)
     *     @var bool $pause Whether to pause the container before committing
     *     @var string $changes `Dockerfile` instructions to apply while committing
     * }
     * @throws \Docker\Api\Exception\ImageCommitNotFoundException
     * @throws \Docker\Api\Exception\ImageCommitInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\IdResponse
     */
    public function imageCommit(\Docker\Api\Model\ContainerConfig $containerConfig, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageCommit($containerConfig, $queryParameters));
    }
    /**
     * Stream real-time events from the server.
     *
     * Various objects within Docker report events when something happens to them.
     *
     * Containers report these events: `attach`, `commit`, `copy`, `create`, `destroy`, `detach`, `die`, `exec_create`, `exec_detach`, `exec_start`, `exec_die`, `export`, `health_status`, `kill`, `oom`, `pause`, `rename`, `resize`, `restart`, `start`, `stop`, `top`, `unpause`, `update`, and `prune`
     *
     * Images report these events: `delete`, `import`, `load`, `pull`, `push`, `save`, `tag`, `untag`, and `prune`
     *
     * Volumes report these events: `create`, `mount`, `unmount`, `destroy`, and `prune`
     *
     * Networks report these events: `create`, `connect`, `disconnect`, `destroy`, `update`, `remove`, and `prune`
     *
     * The Docker daemon reports these events: `reload`
     *
     * Services report these events: `create`, `update`, and `remove`
     *
     * Nodes report these events: `create`, `update`, and `remove`
     *
     * Secrets report these events: `create`, `update`, and `remove`
     *
     * Configs report these events: `create`, `update`, and `remove`
     *
     * The Builder reports `prune` events
     *
     * @param array $queryParameters {
     *     @var string $since Show events created since this timestamp then stream new events.
     *     @var string $until Show events created until this timestamp then stop streaming.
     *     @var string $filters A JSON encoded value of filters (a `map[string][]string`) to process on the event list. Available filters:
     *     
     *     - `config=<string>` config name or ID
     *     - `container=<string>` container name or ID
     *     - `daemon=<string>` daemon name or ID
     *     - `event=<string>` event type
     *     - `image=<string>` image name or ID
     *     - `label=<string>` image or container label
     *     - `network=<string>` network name or ID
     *     - `node=<string>` node ID
     *     - `plugin`=<string> plugin name or ID
     *     - `scope`=<string> local or swarm
     *     - `secret=<string>` secret name or ID
     *     - `service=<string>` service name or ID
     *     - `type=<string>` object to filter by, one of `container`, `image`, `volume`, `network`, `daemon`, `plugin`, `node`, `service`, `secret` or `config`
     *     - `volume=<string>` volume name
     *     
     * }
     * @throws \Docker\Api\Exception\SystemEventsBadRequestException
     * @throws \Docker\Api\Exception\SystemEventsInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\EventMessage
     */
    public function systemEvents(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemEvents($queryParameters));
    }
    /**
     * @throws \Docker\Api\Exception\SystemDataUsageInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\SystemDfGetResponse200
     */
    public function systemDataUsage()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SystemDataUsage());
    }
    /**
     * Get a tarball containing all images and metadata for a repository.
     *
     * If `name` is a specific name and tag (e.g. `ubuntu:latest`), then only that image (and its parents) are returned. If `name` is an image ID, similarly only that image (and its parents) are returned, but with the exclusion of the `repositories` file in the tarball, as there were no image names referenced.
     *
     * ### Image tarball format
     *
     * An image tarball contains one directory per image layer (named using its long ID), each containing these files:
     *
     * - `VERSION`: currently `1.0` - the file format version
     * - `json`: detailed layer information, similar to `docker inspect layer_id`
     * - `layer.tar`: A tarfile containing the filesystem changes in this layer
     *
     * The `layer.tar` file contains `aufs` style `.wh..wh.aufs` files and directories for storing attribute changes and deletions.
     *
     * If the tarball defines a repository, the tarball should also include a `repositories` file at the root that contains a list of repository and tag names mapped to layer IDs.
     *
     * ```json
     * {
     *   "hello-world": {
     *     "latest": "565a9d68a73f6706862bfe8409a7f659776d4d60a8d096eb4a3cbce6999cc2a1"
     *   }
     * }
     * ```
     *
     * @param string $name Image name or ID
     * @throws \Docker\Api\Exception\ImageGetInternalServerErrorException
     *
     * @return null|string
     */
    public function imageGet(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageGet($name));
    }
    /**
     * Get a tarball containing all images and metadata for several image
     * repositories.
     *
     * For each value of the `names` parameter: if it is a specific name and
     * tag (e.g. `ubuntu:latest`), then only that image (and its parents) are
     * returned; if it is an image ID, similarly only that image (and its parents)
     * are returned and there would be no names referenced in the 'repositories'
     * file for this image ID.
     *
     * For details on the format, see the [export image endpoint](#operation/ImageGet).
     *
     * @param array $queryParameters {
     *     @var array $names Image names to filter by
     * }
     * @throws \Docker\Api\Exception\ImageGetAllInternalServerErrorException
     *
     * @return null|string
     */
    public function imageGetAll(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageGetAll($queryParameters));
    }
    /**
     * Load a set of images and tags into a repository.
     *
     * For details on the format, see the [export image endpoint](#operation/ImageGet).
     *
     * @param string|resource $imagesTarball Tar archive containing images
     * @param array $queryParameters {
     *     @var bool $quiet Suppress progress details during load.
     * }
     * @throws \Docker\Api\Exception\ImageLoadInternalServerErrorException
     *
     * @return null
     */
    public function imageLoad($imagesTarball, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ImageLoad($imagesTarball, $queryParameters));
    }
    /**
     * Run a command inside a running container.
     * @param string $id ID or name of container
     * @param \Docker\Api\Model\ContainersIdExecPostBody $execConfig Exec configuration
     * @throws \Docker\Api\Exception\ContainerExecNotFoundException
     * @throws \Docker\Api\Exception\ContainerExecConflictException
     * @throws \Docker\Api\Exception\ContainerExecInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\IdResponse
     */
    public function containerExec(string $id, \Docker\Api\Model\ContainersIdExecPostBody $execConfig)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ContainerExec($id, $execConfig));
    }
    /**
     * Starts a previously set up exec instance. If detach is true, this endpoint
     * returns immediately after starting the command. Otherwise, it sets up an
     * interactive session with the command.
     *
     * @param string $id Exec instance ID
     * @param \Docker\Api\Model\ExecIdStartPostBody $execStartConfig
     * @throws \Docker\Api\Exception\ExecStartNotFoundException
     * @throws \Docker\Api\Exception\ExecStartConflictException
     *
     * @return null
     */
    public function execStart(string $id, \Docker\Api\Model\ExecIdStartPostBody $execStartConfig)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ExecStart($id, $execStartConfig));
    }
    /**
     * Resize the TTY session used by an exec instance. This endpoint only works
     * if `tty` was specified as part of creating and starting the exec instance.
     *
     * @param string $id Exec instance ID
     * @param array $queryParameters {
     *     @var int $h Height of the TTY session in characters
     *     @var int $w Width of the TTY session in characters
     * }
     * @throws \Docker\Api\Exception\ExecResizeBadRequestException
     * @throws \Docker\Api\Exception\ExecResizeNotFoundException
     * @throws \Docker\Api\Exception\ExecResizeInternalServerErrorException
     *
     * @return null
     */
    public function execResize(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ExecResize($id, $queryParameters));
    }
    /**
     * Return low-level information about an exec instance.
     * @param string $id Exec instance ID
     * @throws \Docker\Api\Exception\ExecInspectNotFoundException
     * @throws \Docker\Api\Exception\ExecInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\ExecIdJsonGetResponse200
     */
    public function execInspect(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ExecInspect($id));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the volumes list. Available filters:
     *     
     *     - `dangling=<boolean>` When set to `true` (or `1`), returns all
     *        volumes that are not in use by a container. When set to `false`
     *        (or `0`), only volumes that are in use by one or more
     *        containers are returned.
     *     - `driver=<volume-driver-name>` Matches volumes based on their driver.
     *     - `label=<key>` or `label=<key>:<value>` Matches volumes based on
     *        the presence of a `label` alone or a `label` and a value.
     *     - `name=<volume-name>` Matches all or part of a volume name.
     *     
     * }
     * @throws \Docker\Api\Exception\VolumeListInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\VolumesGetResponse200
     */
    public function volumeList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\VolumeList($queryParameters));
    }
    /**
     * @param \Docker\Api\Model\VolumesCreatePostBody $volumeConfig Volume configuration
     * @throws \Docker\Api\Exception\VolumeCreateInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Volume
     */
    public function volumeCreate(\Docker\Api\Model\VolumesCreatePostBody $volumeConfig)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\VolumeCreate($volumeConfig));
    }
    /**
     * Instruct the driver to remove the volume.
     * @param string $name Volume name or ID
     * @param array $queryParameters {
     *     @var bool $force Force the removal of the volume
     * }
     * @throws \Docker\Api\Exception\VolumeDeleteNotFoundException
     * @throws \Docker\Api\Exception\VolumeDeleteConflictException
     * @throws \Docker\Api\Exception\VolumeDeleteInternalServerErrorException
     *
     * @return null
     */
    public function volumeDelete(string $name, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\VolumeDelete($name, $queryParameters));
    }
    /**
     * @param string $name Volume name or ID
     * @throws \Docker\Api\Exception\VolumeInspectNotFoundException
     * @throws \Docker\Api\Exception\VolumeInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Volume
     */
    public function volumeInspect(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\VolumeInspect($name));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
     *     
     *     Available filters:
     *     - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune volumes with (or without, in case `label!=...` is used) the specified labels.
     *     
     * }
     * @throws \Docker\Api\Exception\VolumePruneInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\VolumesPrunePostResponse200
     */
    public function volumePrune(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\VolumePrune($queryParameters));
    }
    /**
     * Returns a list of networks. For details on the format, see the
     * [network inspect endpoint](#operation/NetworkInspect).
     *
     * Note that it uses a different, smaller representation of a network than
     * inspecting a single network. For example, the list of containers attached
     * to the network is not propagated in API versions 1.28 and up.
     *
     * @param array $queryParameters {
     *     @var string $filters JSON encoded value of the filters (a `map[string][]string`) to process
     *     on the networks list.
     *     
     *     Available filters:
     *     
     *     - `dangling=<boolean>` When set to `true` (or `1`), returns all
     *        networks that are not in use by a container. When set to `false`
     *        (or `0`), only networks that are in use by one or more
     *        containers are returned.
     *     - `driver=<driver-name>` Matches a network's driver.
     *     - `id=<network-id>` Matches all or part of a network ID.
     *     - `label=<key>` or `label=<key>=<value>` of a network label.
     *     - `name=<network-name>` Matches all or part of a network name.
     *     - `scope=["swarm"|"global"|"local"]` Filters networks by scope (`swarm`, `global`, or `local`).
     *     - `type=["custom"|"builtin"]` Filters networks by type. The `custom` keyword returns all user-defined networks.
     *     
     * }
     * @throws \Docker\Api\Exception\NetworkListInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Network[]
     */
    public function networkList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkList($queryParameters));
    }
    /**
     * @param string $id Network ID or name
     * @throws \Docker\Api\Exception\NetworkDeleteForbiddenException
     * @throws \Docker\Api\Exception\NetworkDeleteNotFoundException
     * @throws \Docker\Api\Exception\NetworkDeleteInternalServerErrorException
     *
     * @return null
     */
    public function networkDelete(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkDelete($id));
    }
    /**
     * @param string $id Network ID or name
     * @param array $queryParameters {
     *     @var bool $verbose Detailed inspect output for troubleshooting
     *     @var string $scope Filter the network by scope (swarm, global, or local)
     * }
     * @throws \Docker\Api\Exception\NetworkInspectNotFoundException
     * @throws \Docker\Api\Exception\NetworkInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Network
     */
    public function networkInspect(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkInspect($id, $queryParameters));
    }
    /**
     * @param \Docker\Api\Model\NetworksCreatePostBody $networkConfig Network configuration
     * @throws \Docker\Api\Exception\NetworkCreateForbiddenException
     * @throws \Docker\Api\Exception\NetworkCreateNotFoundException
     * @throws \Docker\Api\Exception\NetworkCreateInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\NetworksCreatePostResponse201
     */
    public function networkCreate(\Docker\Api\Model\NetworksCreatePostBody $networkConfig)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkCreate($networkConfig));
    }
    /**
     * @param string $id Network ID or name
     * @param \Docker\Api\Model\NetworksIdConnectPostBody $container
     * @throws \Docker\Api\Exception\NetworkConnectForbiddenException
     * @throws \Docker\Api\Exception\NetworkConnectNotFoundException
     * @throws \Docker\Api\Exception\NetworkConnectInternalServerErrorException
     *
     * @return null
     */
    public function networkConnect(string $id, \Docker\Api\Model\NetworksIdConnectPostBody $container)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkConnect($id, $container));
    }
    /**
     * @param string $id Network ID or name
     * @param \Docker\Api\Model\NetworksIdDisconnectPostBody $container
     * @throws \Docker\Api\Exception\NetworkDisconnectForbiddenException
     * @throws \Docker\Api\Exception\NetworkDisconnectNotFoundException
     * @throws \Docker\Api\Exception\NetworkDisconnectInternalServerErrorException
     *
     * @return null
     */
    public function networkDisconnect(string $id, \Docker\Api\Model\NetworksIdDisconnectPostBody $container)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkDisconnect($id, $container));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters Filters to process on the prune list, encoded as JSON (a `map[string][]string`).
     *     
     *     Available filters:
     *     - `until=<timestamp>` Prune networks created before this timestamp. The `<timestamp>` can be Unix timestamps, date formatted timestamps, or Go duration strings (e.g. `10m`, `1h30m`) computed relative to the daemon machine’s time.
     *     - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune networks with (or without, in case `label!=...` is used) the specified labels.
     *     
     * }
     * @throws \Docker\Api\Exception\NetworkPruneInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\NetworksPrunePostResponse200
     */
    public function networkPrune(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NetworkPrune($queryParameters));
    }
    /**
     * Returns information about installed plugins.
     * @param array $queryParameters {
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the plugin list.
     *     
     *     Available filters:
     *     
     *     - `capability=<capability name>`
     *     - `enable=<true>|<false>`
     *     
     * }
     * @throws \Docker\Api\Exception\PluginListInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Plugin[]
     */
    public function pluginList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginList($queryParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var string $remote The name of the plugin. The `:latest` tag is optional, and is the
     *     default if omitted.
     *     
     * }
     * @throws \Docker\Api\Exception\GetPluginPrivilegesInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\PluginPrivilege[]
     */
    public function getPluginPrivileges(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\GetPluginPrivileges($queryParameters));
    }
    /**
     * Pulls and installs a plugin. After the plugin is installed, it can be
     * enabled using the [`POST /plugins/{name}/enable` endpoint](#operation/PostPluginsEnable).
     *
     * @param \Docker\Api\Model\PluginPrivilege[] $body
     * @param array $queryParameters {
     *     @var string $remote Remote reference for plugin to install.
     *     
     *     The `:latest` tag is optional, and is used as the default if omitted.
     *     
     *     @var string $name Local name for the pulled plugin.
     *     
     *     The `:latest` tag is optional, and is used as the default if omitted.
     *     
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration to use when pulling a plugin
     *     from a registry.
     *     
     *     Refer to the [authentication section](#section/Authentication) for
     *     details.
     *     
     * }
     * @throws \Docker\Api\Exception\PluginPullInternalServerErrorException
     *
     * @return null
     */
    public function pluginPull(array $body, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginPull($body, $queryParameters, $headerParameters));
    }
    /**
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @throws \Docker\Api\Exception\PluginInspectNotFoundException
     * @throws \Docker\Api\Exception\PluginInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Plugin
     */
    public function pluginInspect(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginInspect($name));
    }
    /**
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @param array $queryParameters {
     *     @var bool $force Disable the plugin before removing. This may result in issues if the
     *     plugin is in use by a container.
     *     
     * }
     * @throws \Docker\Api\Exception\PluginDeleteNotFoundException
     * @throws \Docker\Api\Exception\PluginDeleteInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\Plugin
     */
    public function pluginDelete(string $name, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginDelete($name, $queryParameters));
    }
    /**
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @param array $queryParameters {
     *     @var int $timeout Set the HTTP client timeout (in seconds)
     * }
     * @throws \Docker\Api\Exception\PluginEnableNotFoundException
     * @throws \Docker\Api\Exception\PluginEnableInternalServerErrorException
     *
     * @return null
     */
    public function pluginEnable(string $name, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginEnable($name, $queryParameters));
    }
    /**
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @throws \Docker\Api\Exception\PluginDisableNotFoundException
     * @throws \Docker\Api\Exception\PluginDisableInternalServerErrorException
     *
     * @return null
     */
    public function pluginDisable(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginDisable($name));
    }
    /**
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @param \Docker\Api\Model\PluginPrivilege[] $body
     * @param array $queryParameters {
     *     @var string $remote Remote reference to upgrade to.
     *     
     *     The `:latest` tag is optional, and is used as the default if omitted.
     *     
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration to use when pulling a plugin
     *     from a registry.
     *     
     *     Refer to the [authentication section](#section/Authentication) for
     *     details.
     *     
     * }
     * @throws \Docker\Api\Exception\PluginUpgradeNotFoundException
     * @throws \Docker\Api\Exception\PluginUpgradeInternalServerErrorException
     *
     * @return null
     */
    public function pluginUpgrade(string $name, array $body, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginUpgrade($name, $body, $queryParameters, $headerParameters));
    }
    /**
     * @param string|resource $tarContext Path to tar containing plugin rootfs and manifest
     * @param array $queryParameters {
     *     @var string $name The name of the plugin. The `:latest` tag is optional, and is the
     *     default if omitted.
     *     
     * }
     * @throws \Docker\Api\Exception\PluginCreateInternalServerErrorException
     *
     * @return null
     */
    public function pluginCreate($tarContext, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginCreate($tarContext, $queryParameters));
    }
    /**
     * Push a plugin to the registry.
     *
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @throws \Docker\Api\Exception\PluginPushNotFoundException
     * @throws \Docker\Api\Exception\PluginPushInternalServerErrorException
     *
     * @return null
     */
    public function pluginPush(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginPush($name));
    }
    /**
     * @param string $name The name of the plugin. The `:latest` tag is optional, and is the
     * default if omitted.
     * 
     * @param array $body
     * @throws \Docker\Api\Exception\PluginSetNotFoundException
     * @throws \Docker\Api\Exception\PluginSetInternalServerErrorException
     *
     * @return null
     */
    public function pluginSet(string $name, array $body)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\PluginSet($name, $body));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters Filters to process on the nodes list, encoded as JSON (a `map[string][]string`).
     *     
     *     Available filters:
     *     - `id=<node id>`
     *     - `label=<engine label>`
     *     - `membership=`(`accepted`|`pending`)`
     *     - `name=<node name>`
     *     - `node.label=<node label>`
     *     - `role=`(`manager`|`worker`)`
     *     
     * }
     * @throws \Docker\Api\Exception\NodeListInternalServerErrorException
     * @throws \Docker\Api\Exception\NodeListServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Node[]
     */
    public function nodeList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NodeList($queryParameters));
    }
    /**
     * @param string $id The ID or name of the node
     * @param array $queryParameters {
     *     @var bool $force Force remove a node from the swarm
     * }
     * @throws \Docker\Api\Exception\NodeDeleteNotFoundException
     * @throws \Docker\Api\Exception\NodeDeleteInternalServerErrorException
     * @throws \Docker\Api\Exception\NodeDeleteServiceUnavailableException
     *
     * @return null
     */
    public function nodeDelete(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NodeDelete($id, $queryParameters));
    }
    /**
     * @param string $id The ID or name of the node
     * @throws \Docker\Api\Exception\NodeInspectNotFoundException
     * @throws \Docker\Api\Exception\NodeInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\NodeInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Node
     */
    public function nodeInspect(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NodeInspect($id));
    }
    /**
     * @param string $id The ID of the node
     * @param \Docker\Api\Model\NodeSpec $body
     * @param array $queryParameters {
     *     @var int $version The version number of the node object being updated. This is required
     *     to avoid conflicting writes.
     *     
     * }
     * @throws \Docker\Api\Exception\NodeUpdateBadRequestException
     * @throws \Docker\Api\Exception\NodeUpdateNotFoundException
     * @throws \Docker\Api\Exception\NodeUpdateInternalServerErrorException
     * @throws \Docker\Api\Exception\NodeUpdateServiceUnavailableException
     *
     * @return null
     */
    public function nodeUpdate(string $id, \Docker\Api\Model\NodeSpec $body, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\NodeUpdate($id, $body, $queryParameters));
    }
    /**
     * @throws \Docker\Api\Exception\SwarmInspectNotFoundException
     * @throws \Docker\Api\Exception\SwarmInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Swarm
     */
    public function swarmInspect()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmInspect());
    }
    /**
     * @param \Docker\Api\Model\SwarmInitPostBody $body
     * @throws \Docker\Api\Exception\SwarmInitBadRequestException
     * @throws \Docker\Api\Exception\SwarmInitInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmInitServiceUnavailableException
     *
     * @return null|string
     */
    public function swarmInit(\Docker\Api\Model\SwarmInitPostBody $body)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmInit($body));
    }
    /**
     * @param \Docker\Api\Model\SwarmJoinPostBody $body
     * @throws \Docker\Api\Exception\SwarmJoinBadRequestException
     * @throws \Docker\Api\Exception\SwarmJoinInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmJoinServiceUnavailableException
     *
     * @return null
     */
    public function swarmJoin(\Docker\Api\Model\SwarmJoinPostBody $body)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmJoin($body));
    }
    /**
     * @param array $queryParameters {
     *     @var bool $force Force leave swarm, even if this is the last manager or that it will
     *     break the cluster.
     *     
     * }
     * @throws \Docker\Api\Exception\SwarmLeaveInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmLeaveServiceUnavailableException
     *
     * @return null
     */
    public function swarmLeave(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmLeave($queryParameters));
    }
    /**
     * @param \Docker\Api\Model\SwarmSpec $body
     * @param array $queryParameters {
     *     @var int $version The version number of the swarm object being updated. This is
     *     required to avoid conflicting writes.
     *     
     *     @var bool $rotateWorkerToken Rotate the worker join token.
     *     @var bool $rotateManagerToken Rotate the manager join token.
     *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
     * }
     * @throws \Docker\Api\Exception\SwarmUpdateBadRequestException
     * @throws \Docker\Api\Exception\SwarmUpdateInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmUpdateServiceUnavailableException
     *
     * @return null
     */
    public function swarmUpdate(\Docker\Api\Model\SwarmSpec $body, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmUpdate($body, $queryParameters));
    }
    /**
     * @throws \Docker\Api\Exception\SwarmUnlockkeyInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmUnlockkeyServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\SwarmUnlockkeyGetResponse200
     */
    public function swarmUnlockkey()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmUnlockkey());
    }
    /**
     * @param \Docker\Api\Model\SwarmUnlockPostBody $body
     * @throws \Docker\Api\Exception\SwarmUnlockInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmUnlockServiceUnavailableException
     *
     * @return null
     */
    public function swarmUnlock(\Docker\Api\Model\SwarmUnlockPostBody $body)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SwarmUnlock($body));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the services list.
     *     
     *     Available filters:
     *     
     *     - `id=<service id>`
     *     - `label=<service label>`
     *     - `mode=["replicated"|"global"]`
     *     - `name=<service name>`
     *     
     *     @var bool $status Include service status, with count of running and desired tasks.
     *     
     * }
     * @throws \Docker\Api\Exception\ServiceListInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceListServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Service[]
     */
    public function serviceList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ServiceList($queryParameters));
    }
    /**
     * @param \Docker\Api\Model\ServicesCreatePostBody $body
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration for pulling from private
     *     registries.
     *     
     *     Refer to the [authentication section](#section/Authentication) for
     *     details.
     *     
     * }
     * @throws \Docker\Api\Exception\ServiceCreateBadRequestException
     * @throws \Docker\Api\Exception\ServiceCreateForbiddenException
     * @throws \Docker\Api\Exception\ServiceCreateConflictException
     * @throws \Docker\Api\Exception\ServiceCreateInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceCreateServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\ServicesCreatePostResponse201
     */
    public function serviceCreate(\Docker\Api\Model\ServicesCreatePostBody $body, array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ServiceCreate($body, $headerParameters));
    }
    /**
     * @param string $id ID or name of service.
     * @throws \Docker\Api\Exception\ServiceDeleteNotFoundException
     * @throws \Docker\Api\Exception\ServiceDeleteInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceDeleteServiceUnavailableException
     *
     * @return null
     */
    public function serviceDelete(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ServiceDelete($id));
    }
    /**
     * @param string $id ID or name of service.
     * @param array $queryParameters {
     *     @var bool $insertDefaults Fill empty fields with default values.
     * }
     * @throws \Docker\Api\Exception\ServiceInspectNotFoundException
     * @throws \Docker\Api\Exception\ServiceInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Service
     */
    public function serviceInspect(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ServiceInspect($id, $queryParameters));
    }
    /**
     * @param string $id ID or name of service.
     * @param \Docker\Api\Model\ServicesIdUpdatePostBody $body
     * @param array $queryParameters {
     *     @var int $version The version number of the service object being updated. This is
     *     required to avoid conflicting writes.
     *     This version number should be the value as currently set on the
     *     service *before* the update. You can find the current version by
     *     calling `GET /services/{id}`
     *     
     *     @var string $registryAuthFrom If the `X-Registry-Auth` header is not specified, this parameter
     *     indicates where to find registry authorization credentials.
     *     
     *     @var string $rollback Set to this parameter to `previous` to cause a server-side rollback
     *     to the previous service spec. The supplied spec will be ignored in
     *     this case.
     *     
     * }
     * @param array $headerParameters {
     *     @var string $X-Registry-Auth A base64url-encoded auth configuration for pulling from private
     *     registries.
     *     
     *     Refer to the [authentication section](#section/Authentication) for
     *     details.
     *     
     * }
     * @throws \Docker\Api\Exception\ServiceUpdateBadRequestException
     * @throws \Docker\Api\Exception\ServiceUpdateNotFoundException
     * @throws \Docker\Api\Exception\ServiceUpdateInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceUpdateServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\ServiceUpdateResponse
     */
    public function serviceUpdate(string $id, \Docker\Api\Model\ServicesIdUpdatePostBody $body, array $queryParameters = [], array $headerParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ServiceUpdate($id, $body, $queryParameters, $headerParameters));
    }
    /**
     * Get `stdout` and `stderr` logs from a service. See also
     * [`/containers/{id}/logs`](#operation/ContainerLogs).
     *
     * **Note**: This endpoint works only for services with the `local`,
     * `json-file` or `journald` logging drivers.
     *
     * @param string $id ID or name of the service
     * @param array $queryParameters {
     *     @var bool $details Show service context and extra details provided to logs.
     *     @var bool $follow Keep connection after returning logs.
     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs.
     *     Specify as an integer or `all` to output all log lines.
     *     
     * }
     * @throws \Docker\Api\Exception\ServiceLogsNotFoundException
     * @throws \Docker\Api\Exception\ServiceLogsInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceLogsServiceUnavailableException
     *
     * @return null|string
     */
    public function serviceLogs(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ServiceLogs($id, $queryParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the tasks list.
     *     
     *     Available filters:
     *     
     *     - `desired-state=(running | shutdown | accepted)`
     *     - `id=<task id>`
     *     - `label=key` or `label="key=value"`
     *     - `name=<task name>`
     *     - `node=<node id or name>`
     *     - `service=<service name>`
     *     
     * }
     * @throws \Docker\Api\Exception\TaskListInternalServerErrorException
     * @throws \Docker\Api\Exception\TaskListServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Task[]
     */
    public function taskList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\TaskList($queryParameters));
    }
    /**
     * @param string $id ID of the task
     * @throws \Docker\Api\Exception\TaskInspectNotFoundException
     * @throws \Docker\Api\Exception\TaskInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\TaskInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Task
     */
    public function taskInspect(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\TaskInspect($id));
    }
    /**
     * Get `stdout` and `stderr` logs from a task.
     * See also [`/containers/{id}/logs`](#operation/ContainerLogs).
     *
     * **Note**: This endpoint works only for services with the `local`,
     * `json-file` or `journald` logging drivers.
     *
     * @param string $id ID of the task
     * @param array $queryParameters {
     *     @var bool $details Show task context and extra details provided to logs.
     *     @var bool $follow Keep connection after returning logs.
     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs.
     *     Specify as an integer or `all` to output all log lines.
     *     
     * }
     * @throws \Docker\Api\Exception\TaskLogsNotFoundException
     * @throws \Docker\Api\Exception\TaskLogsInternalServerErrorException
     * @throws \Docker\Api\Exception\TaskLogsServiceUnavailableException
     *
     * @return null|string
     */
    public function taskLogs(string $id, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\TaskLogs($id, $queryParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the secrets list.
     *     
     *     Available filters:
     *     
     *     - `id=<secret id>`
     *     - `label=<key> or label=<key>=value`
     *     - `name=<secret name>`
     *     - `names=<secret name>`
     *     
     * }
     * @throws \Docker\Api\Exception\SecretListInternalServerErrorException
     * @throws \Docker\Api\Exception\SecretListServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Secret[]
     */
    public function secretList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SecretList($queryParameters));
    }
    /**
     * @param \Docker\Api\Model\SecretsCreatePostBody $body
     * @throws \Docker\Api\Exception\SecretCreateConflictException
     * @throws \Docker\Api\Exception\SecretCreateInternalServerErrorException
     * @throws \Docker\Api\Exception\SecretCreateServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\IdResponse
     */
    public function secretCreate(\Docker\Api\Model\SecretsCreatePostBody $body)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SecretCreate($body));
    }
    /**
     * @param string $id ID of the secret
     * @throws \Docker\Api\Exception\SecretDeleteNotFoundException
     * @throws \Docker\Api\Exception\SecretDeleteInternalServerErrorException
     * @throws \Docker\Api\Exception\SecretDeleteServiceUnavailableException
     *
     * @return null
     */
    public function secretDelete(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SecretDelete($id));
    }
    /**
     * @param string $id ID of the secret
     * @throws \Docker\Api\Exception\SecretInspectNotFoundException
     * @throws \Docker\Api\Exception\SecretInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\SecretInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Secret
     */
    public function secretInspect(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SecretInspect($id));
    }
    /**
    * @param string $id The ID or name of the secret
    * @param \Docker\Api\Model\SecretSpec $body The spec of the secret to update. Currently, only the Labels field
    can be updated. All other fields must remain unchanged from the
    [SecretInspect endpoint](#operation/SecretInspect) response values.
    * @param array $queryParameters {
    *     @var int $version The version number of the secret object being updated. This is
    *     required to avoid conflicting writes.
    *     
    * }
    
    * @throws \Docker\Api\Exception\SecretUpdateBadRequestException
    * @throws \Docker\Api\Exception\SecretUpdateNotFoundException
    * @throws \Docker\Api\Exception\SecretUpdateInternalServerErrorException
    * @throws \Docker\Api\Exception\SecretUpdateServiceUnavailableException
    *
    * @return null
    */
    public function secretUpdate(string $id, \Docker\Api\Model\SecretSpec $body, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\SecretUpdate($id, $body, $queryParameters));
    }
    /**
     * @param array $queryParameters {
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to
     *     process on the configs list.
     *     
     *     Available filters:
     *     
     *     - `id=<config id>`
     *     - `label=<key> or label=<key>=value`
     *     - `name=<config name>`
     *     - `names=<config name>`
     *     
     * }
     * @throws \Docker\Api\Exception\ConfigListInternalServerErrorException
     * @throws \Docker\Api\Exception\ConfigListServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Config[]
     */
    public function configList(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ConfigList($queryParameters));
    }
    /**
     * @param \Docker\Api\Model\ConfigsCreatePostBody $body
     * @throws \Docker\Api\Exception\ConfigCreateConflictException
     * @throws \Docker\Api\Exception\ConfigCreateInternalServerErrorException
     * @throws \Docker\Api\Exception\ConfigCreateServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\IdResponse
     */
    public function configCreate(\Docker\Api\Model\ConfigsCreatePostBody $body)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ConfigCreate($body));
    }
    /**
     * @param string $id ID of the config
     * @throws \Docker\Api\Exception\ConfigDeleteNotFoundException
     * @throws \Docker\Api\Exception\ConfigDeleteInternalServerErrorException
     * @throws \Docker\Api\Exception\ConfigDeleteServiceUnavailableException
     *
     * @return null
     */
    public function configDelete(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ConfigDelete($id));
    }
    /**
     * @param string $id ID of the config
     * @throws \Docker\Api\Exception\ConfigInspectNotFoundException
     * @throws \Docker\Api\Exception\ConfigInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\ConfigInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Config
     */
    public function configInspect(string $id)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ConfigInspect($id));
    }
    /**
    * @param string $id The ID or name of the config
    * @param \Docker\Api\Model\ConfigSpec $body The spec of the config to update. Currently, only the Labels field
    can be updated. All other fields must remain unchanged from the
    [ConfigInspect endpoint](#operation/ConfigInspect) response values.
    * @param array $queryParameters {
    *     @var int $version The version number of the config object being updated. This is
    *     required to avoid conflicting writes.
    *     
    * }
    
    * @throws \Docker\Api\Exception\ConfigUpdateBadRequestException
    * @throws \Docker\Api\Exception\ConfigUpdateNotFoundException
    * @throws \Docker\Api\Exception\ConfigUpdateInternalServerErrorException
    * @throws \Docker\Api\Exception\ConfigUpdateServiceUnavailableException
    *
    * @return null
    */
    public function configUpdate(string $id, \Docker\Api\Model\ConfigSpec $body, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\ConfigUpdate($id, $body, $queryParameters));
    }
    /**
     * Return image digest and platform information by contacting the registry.
     *
     * @param string $name Image name or id
     * @throws \Docker\Api\Exception\DistributionInspectUnauthorizedException
     * @throws \Docker\Api\Exception\DistributionInspectInternalServerErrorException
     *
     * @return null|\Docker\Api\Model\DistributionInspect
     */
    public function distributionInspect(string $name)
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\DistributionInspect($name));
    }
    /**
     * @throws \Docker\Api\Exception\SessionBadRequestException
     * @throws \Docker\Api\Exception\SessionInternalServerErrorException
     *
     * @return null
     */
    public function session()
    {
        return $this->executeEndpoint(new \Docker\Api\Endpoint\Session());
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Docker\Api\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Docker\Api\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}