<?php

namespace Jane\Component\JsonSchema\Exception;

/**
 * Marker interface for all user facing errors thrown by Jane components.
 *
 * Implementations must provide a message explaining the problem to the user
 * and, when possible, how to fix it. Console commands can rely on this marker
 * to render those errors cleanly instead of letting them bubble up as raw
 * PHP errors.
 */
interface JaneExceptionInterface
{
}
