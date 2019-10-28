<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content as ContentInterface;

abstract class Content implements ContentInterface {
    /** 
     * @var string
     */
    protected $template;
    /** 
     * @var Array<string> $args
     */
    protected $args;

    public function __construct() { }

    public function template(): string {
        return $this->template;
    }
    public final function toString(): string {
        return sprintf($this->template, ...$this->getBinds());
    }
    public function bind(array $args = []): void {
        $this->args = $args;
    }
    public function getBinds(): array {
        return $this->args;
    }
}