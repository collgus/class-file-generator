<?php 
namespace Collgus\GF;

interface Content {
    public function template(): string;
    public function toString(): string;
    public function bind(array $args = []): void;
    public function getBinds(): array;
}