<?php
namespace Aura\Sql\Parser;

/**
 * Parser which gets into an infinite loop when finding a 'S' character
 * @package Aura\Sql
 */
class LoopParser extends AbstractParser
{
    /**
     * Constructor. Sets up the bad callback
     */
    public function __construct()
    {
        $this->statementPartsHandlers = array(
            'S' => array($this, 'neverEndingHandler'),
        );
    }

    /**
     * Returns an untouched State
     * @param State $state
     * @return State
     */
    protected function neverEndingHandler($state)
    {
        return $state;
    }
}
