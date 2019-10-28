<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content\Content;

class PropertyContent extends Content {
    /** 
     * @var string
     */
    private $propertyName;

    protected $template = ' private %s;';

    public function __construct(string $propertyName) {
        parent::__construct();
        
        $this->propertyName = $propertyName;
    }
    public function getBinds(): array {
        return [
            $this->propertyName,
        ];
    }
}