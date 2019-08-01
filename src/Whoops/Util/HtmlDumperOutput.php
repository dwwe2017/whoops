<?php
/**
 * Whoops - Considerable error and exception handling
 */

namespace Whoops\Util;

/**
 * Used as output callable for Symfony\Component\VarDumper\Dumper\HtmlDumper::dump()
 *
 * @see TemplateHelper::dump()
 */
class HtmlDumperOutput
{
    /**
     * @var
     */
    private $output;

    /**
     * @param $line
     * @param $depth
     */
    public function __invoke($line, $depth)
    {
        // A negative depth means "end of dump"
        if ($depth >= 0) {
            // Adds a two spaces indentation to the line
            $this->output .= str_repeat('  ', $depth) . $line . "\n";
        }
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     *
     */
    public function clear()
    {
        $this->output = null;
    }
}
