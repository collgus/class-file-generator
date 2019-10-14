<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content;
use Collgus\GF\Content\Content as AbstractContent;

final class SetterContent extends AbstractContent {
    /** 
     * @var string
     */
    private $propertyName;
    /** 
     * @var mixed
     */
    private $propertyValue;

    protected $template = '$this->%s = $%s;';

    public function __construct(string $propertyName, $value) {
        parent::__construct();
        
        $this->propertyName = $propertyName;
        $this->propertyValue = $value;
    }
    public function getBinds(): array {
        return [
            $this->propertyName,
            $this->propertyValue
        ];
    }
}