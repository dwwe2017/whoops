<?php
/**
 * Whoops - Considerable error and exception handling
 */

namespace Whoops\Handler;

use Throwable;
use Whoops\Exception\Inspector;
use Whoops\RunInterface;

interface HandlerInterface
{
    /**
     * @param Throwable|null $e
     * @return int|null A handler may return nothing, or a Handler::HANDLE_* constant
     */
    public function handle(?Throwable $e = null);

    /**
     * @param RunInterface $run
     * @return void
     */
    public function setRun(RunInterface $run);

    /**
     * @param Throwable $exception
     * @return void
     */
    public function setException($exception);

    /**
     * @param Inspector $inspector
     * @return void
     */
    public function setInspector(Inspector $inspector);
}
