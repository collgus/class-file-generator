<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content;
use Collgus\GF\Content\Content as AbstractContent;

final class GetterContent extends AbstractContent {
    /** 
     * @var string
     */
    private $propertyName;

    protected $template = 'return $this->%s;';

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