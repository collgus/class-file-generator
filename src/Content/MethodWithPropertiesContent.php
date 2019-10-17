<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content;
use Collgus\Exception\InvalidArgsException;
use Collgus\GF\Content\Content as AbstractContent;

final class MethodWithPropertiesContent extends AbstractContent {
    /** 
     * @var string $name
     */
    protected $name;
    /** 
     * @var Array<string> $properties
     */
    protected $properties;
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
    protected $template = "%spublic function %s(%s)%s\n{%s}";


    protected static $info = "Auto-genereted File.";

    /** 
     * @param string $name
     * @param Array<Content> $params
     * @param Content $body
     * @param Array<string> $properties
     * @param string|null $returnType
     * 
     * @throws InvalidArgsException
     */
    public function __construct(string $name, array $params, Content $body, ?array $properties, ?string $returnType = null) {
        parent::__construct();
        
        if ($this->validateParams($params)) {
            $this->name = $name;
            $this->body = $body;
            $this->properties = $properties;
            $this->params = $params;
            $this->returnType = $returnType;
        } else {
            throw new InvalidArgsException();
        }

    }

    public function getBinds(): array {
        return [
            join('', $this->properties),
            $this->name,
            join(',', $this->params),
            $this->obtainReturnType($this->returnType),
            strval($this->body)
            
        ];
    }
    private function obtainReturnType(?string $type): string {
        if (is_null($type)) {
            return strval($type);
        }

        return sprintf(": %s", trim($type));
        
    }
    private function validateParams(array $params): bool {
        foreach ($this->params as $param) {
            if ( !($param instanceof Content)) {
                return false;
            }
        }
        return true;
    }
}