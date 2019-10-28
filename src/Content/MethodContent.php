<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content\PropertyContent;
use Collgus\GF\Content;
use Collgus\Exception\InvalidArgsException;
use Collgus\GF\Content\Content as AbstractContent;

final class MethodContent extends AbstractContent {
    /** 
     * @var string $name
     */
    protected $name;
    /** 
     * @var Array<Content> $properties
     */
    protected $params;
    /** 
     * @var string|null
     */
    protected $returnType;
    /** 
     * @var Content
     */
    protected $body;
    /** 
     * @var string $template
     */
    protected $template = "public function %s(%s)%s\n{%s}";


    protected static $info = "Auto-genereted File.";

    /** 
     * @param string $name
     * @param Array<Content> $params
     * @param Content $body
     * @param string|null $returnType
     * 
     * @throws InvalidArgsException
     */
    public function __construct(string $name, array $params, Content $body, ?string $returnType = null) {
        parent::__construct();
        
        if ($this->validateParams($params)) {
            $this->name = $name;
            $this->body = $body;
            $this->params = $params;
            $this->returnType = $returnType;
        } else {
            throw new InvalidArgsException();
        }

    }

    public function getBinds(): array {
        return [
            $this->name,
            join(',', array_map( function (ParamContent $paramContent) { return $paramContent->toString();}, $this->params)),
            $this->obtainReturnType($this->returnType),
            strval($this->body->toString())
            
        ];
    }
    private function obtainReturnType(?string $type): string {
        if (is_null($type)) {
            return strval($type);
        }

        return sprintf(": %s", trim($type));
        
    }
    private function validateParams(array $params): bool {
        foreach ($params as $param) {
            if ( !($param instanceof Content)) {
                return false;
            }
        }
        return true;
    }
}