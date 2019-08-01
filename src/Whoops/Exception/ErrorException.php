<?php
/**
 * Whoops - Considerable error and exception handling
 */

namespace Whoops\Exception;

use ErrorException as BaseErrorException;

/**
 * Wraps ErrorException; mostly used for typing (at least now)
 * to easily cleanup the stack trace of redundant info.
 */
class ErrorException extends BaseErrorException
{
}
