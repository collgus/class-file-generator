<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content;
use Collgus\GF\Content\Content as AbstractContent;

final class ParamContent extends AbstractContent {
    /** 
     * @var string
     */
    private $paramType;
    /** 
     * @var string
     */
    private $name;

    protected $template = '%s $%s';

    public function __construct(string $type, string $name) {
        parent::__construct();
        
        $this->paramType = $type;
        $this->name = $name;
    }
    public function getBinds(): array {
        return [
            $this->paramType,
            $this->name
        ];
    }
}