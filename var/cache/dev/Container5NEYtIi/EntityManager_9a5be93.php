<?php

namespace Container5NEYtIi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder20289 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3262 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese6594 = [
        
    ];

    public function getConnection()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getConnection', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getMetadataFactory', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getExpressionBuilder', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'beginTransaction', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getCache', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'transactional', array('func' => $func), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->transactional($func);
    }

    public function commit()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'commit', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->commit();
    }

    public function rollback()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'rollback', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getClassMetadata', array('className' => $className), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'createQuery', array('dql' => $dql), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'createNamedQuery', array('name' => $name), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'createQueryBuilder', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'flush', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'clear', array('entityName' => $entityName), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->clear($entityName);
    }

    public function close()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'close', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->close();
    }

    public function persist($entity)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'persist', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'remove', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'refresh', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'detach', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'merge', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'contains', array('entity' => $entity), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getEventManager', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getConfiguration', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'isOpen', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getUnitOfWork', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getProxyFactory', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'initializeObject', array('obj' => $obj), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'getFilters', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'isFiltersStateClean', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'hasFilters', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return $this->valueHolder20289->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera3262 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder20289) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder20289 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder20289->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, '__get', ['name' => $name], $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        if (isset(self::$publicPropertiese6594[$name])) {
            return $this->valueHolder20289->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20289;

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

        $targetObject = $this->valueHolder20289;
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
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20289;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder20289;
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
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, '__isset', array('name' => $name), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20289;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder20289;
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
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, '__unset', array('name' => $name), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20289;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder20289;
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
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, '__clone', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        $this->valueHolder20289 = clone $this->valueHolder20289;
    }

    public function __sleep()
    {
        $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, '__sleep', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;

        return array('valueHolder20289');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3262 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3262;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3262 && ($this->initializera3262->__invoke($valueHolder20289, $this, 'initializeProxy', array(), $this->initializera3262) || 1) && $this->valueHolder20289 = $valueHolder20289;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20289;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20289;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
