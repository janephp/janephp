<?php

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Marker interface for all user facing errors thrown by Jane components.
 *
 * Implementations must provide a message explaining the problem to the user
 * and, when possible, how to fix it. Console commands can rely on this marker
 * to render those errors cleanly instead of letting them bubble up as raw
 * PHP errors.
 *
 * Living in the runtime component so runtime exceptions thrown during
 * generation (reference resolution, …) can be part of the error taxonomy
 * without inverting the component dependency direction.
 */
interface JaneExceptionInterface
{
}
