<?php

namespace Container2OmZuFg;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder0a7ab = null;
    private $initializerff299 = null;
    private static $publicPropertiesf39da = [
        
    ];
    public function getConnection()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getConnection', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getMetadataFactory', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getExpressionBuilder', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'beginTransaction', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getCache', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getCache();
    }
    public function transactional($func)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'transactional', array('func' => $func), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->transactional($func);
    }
    public function commit()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'commit', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->commit();
    }
    public function rollback()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'rollback', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getClassMetadata', array('className' => $className), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'createQuery', array('dql' => $dql), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'createNamedQuery', array('name' => $name), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'createQueryBuilder', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'flush', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'clear', array('entityName' => $entityName), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->clear($entityName);
    }
    public function close()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'close', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->close();
    }
    public function persist($entity)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'persist', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'remove', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'refresh', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'detach', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'merge', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'contains', array('entity' => $entity), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getEventManager', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getConfiguration', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'isOpen', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getUnitOfWork', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getProxyFactory', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'initializeObject', array('obj' => $obj), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'getFilters', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'isFiltersStateClean', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'hasFilters', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return $this->valueHolder0a7ab->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerff299 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder0a7ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0a7ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder0a7ab->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, '__get', ['name' => $name], $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        if (isset(self::$publicPropertiesf39da[$name])) {
            return $this->valueHolder0a7ab->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a7ab;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder0a7ab;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a7ab;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder0a7ab;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, '__isset', array('name' => $name), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a7ab;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder0a7ab;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, '__unset', array('name' => $name), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a7ab;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder0a7ab;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, '__clone', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        $this->valueHolder0a7ab = clone $this->valueHolder0a7ab;
    }
    public function __sleep()
    {
        $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, '__sleep', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
        return array('valueHolder0a7ab');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerff299 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerff299;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerff299 && ($this->initializerff299->__invoke($valueHolder0a7ab, $this, 'initializeProxy', array(), $this->initializerff299) || 1) && $this->valueHolder0a7ab = $valueHolder0a7ab;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0a7ab;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0a7ab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
