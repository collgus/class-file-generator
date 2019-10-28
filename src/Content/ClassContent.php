<?php 
namespace Collgus\GF\Content;

use Collgus\GF\Content;
use Collgus\GF\Content\Content as AbstractContent;

final class ClassContent extends AbstractContent {
    /** 
     * @var string $name
     */
    protected $name;
    /** 
     * @var Array<Content> $methods
     */
    protected $methods;
    /** 
     * @var Array<string>
     */
    protected $interfaces;
    /** 
     * @var string $template
     */
    protected $template = "/** %s */class %s implements %s {%s}";


    protected static $info = "Auto-genereted File, dont modify.";

    /** 
     * @param string $name
     * @param Array<string> $interfaces
     * @param Array<Content> $methodsContent
     */
    public function __construct(string $name, array $interfaces, array $methodsContent) {
        parent::__construct();

        $this->name = $name;
        $this->interfaces = $interfaces;
        $this->methods = $methodsContent;
    }

    public function getBinds(): array {
        return [
            self::$info,
            $this->name,
            join(',', $this->interfaces),
            join("\n\t", array_map(function(Content $content) {
                return $content->toString();
            }, $this->methods)),

        ];
    }
}