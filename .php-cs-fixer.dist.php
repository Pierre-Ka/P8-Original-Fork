// J'ai mis entre parenthèse les lignes 51, 52, 55 de :
// final class ToolInfo implements ToolInfoInterface

<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('var')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@Symfony' => true,
    'full_opening_tag' => false,
])
    ->setFinder($finder)
    ;