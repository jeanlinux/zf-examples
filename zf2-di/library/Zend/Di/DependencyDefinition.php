<?php
namespace Zend\Di;

interface DependencyDefinition
{
    public function __construct($className);
    public function setParam($name, $value);
    
    /**
     * @param array $map Map of name => position pairs for constructor arguments
     */
    public function setParamMap(array $map);
    
    public function getParams();
    
    public function setShared($flag = true);
    
    public function addTag($tag);
    public function addTags(array $tags);
    
    public function addMethodCall($name, array $args);
    
    /**
     * @return MethodCollection
     */
    public function getMethodCalls();
}