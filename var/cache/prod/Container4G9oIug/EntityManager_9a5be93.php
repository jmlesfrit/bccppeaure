<?php

namespace Container4G9oIug;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder12844 = null;
    private $initializerb92e2 = null;
    private static $publicProperties802ed = [
        
    ];
    public function getConnection()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getConnection', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getMetadataFactory', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getExpressionBuilder', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'beginTransaction', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getCache', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'transactional', array('func' => $func), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->transactional($func);
    }
    public function commit()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'commit', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->commit();
    }
    public function rollback()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'rollback', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getClassMetadata', array('className' => $className), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'createQuery', array('dql' => $dql), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'createNamedQuery', array('name' => $name), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'createQueryBuilder', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'flush', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'clear', array('entityName' => $entityName), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->clear($entityName);
    }
    public function close()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'close', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->close();
    }
    public function persist($entity)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'persist', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'remove', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'refresh', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'detach', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'merge', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'contains', array('entity' => $entity), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getEventManager', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getConfiguration', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'isOpen', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getUnitOfWork', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getProxyFactory', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'initializeObject', array('obj' => $obj), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'getFilters', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'isFiltersStateClean', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'hasFilters', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return $this->valueHolder12844->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb92e2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder12844) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder12844 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder12844->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, '__get', ['name' => $name], $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        if (isset(self::$publicProperties802ed[$name])) {
            return $this->valueHolder12844->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12844;
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
        $targetObject = $this->valueHolder12844;
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
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12844;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder12844;
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
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, '__isset', array('name' => $name), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12844;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder12844;
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
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, '__unset', array('name' => $name), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12844;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder12844;
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
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, '__clone', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        $this->valueHolder12844 = clone $this->valueHolder12844;
    }
    public function __sleep()
    {
        $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, '__sleep', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
        return array('valueHolder12844');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb92e2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb92e2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb92e2 && ($this->initializerb92e2->__invoke($valueHolder12844, $this, 'initializeProxy', array(), $this->initializerb92e2) || 1) && $this->valueHolder12844 = $valueHolder12844;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12844;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12844;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
