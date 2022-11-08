<?php

namespace ContainerNhRQ28W;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8f9d3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf1125 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9642d = [
        
    ];

    public function getConnection()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getConnection', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getMetadataFactory', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getExpressionBuilder', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'beginTransaction', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getCache', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'transactional', array('func' => $func), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'commit', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->commit();
    }

    public function rollback()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'rollback', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'createQuery', array('dql' => $dql), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'createQueryBuilder', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'flush', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'clear', array('entityName' => $entityName), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->clear($entityName);
    }

    public function close()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'close', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->close();
    }

    public function persist($entity)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'persist', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'remove', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'refresh', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'detach', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'merge', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'contains', array('entity' => $entity), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getEventManager', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getConfiguration', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'isOpen', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getUnitOfWork', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getProxyFactory', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'getFilters', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'isFiltersStateClean', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'hasFilters', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return $this->valueHolder8f9d3->hasFilters();
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

        $instance->initializerf1125 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8f9d3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8f9d3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8f9d3->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, '__get', ['name' => $name], $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        if (isset(self::$publicProperties9642d[$name])) {
            return $this->valueHolder8f9d3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9d3;

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

        $targetObject = $this->valueHolder8f9d3;
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
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9d3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8f9d3;
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
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, '__isset', array('name' => $name), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9d3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8f9d3;
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
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, '__unset', array('name' => $name), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f9d3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8f9d3;
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
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, '__clone', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        $this->valueHolder8f9d3 = clone $this->valueHolder8f9d3;
    }

    public function __sleep()
    {
        $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, '__sleep', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;

        return array('valueHolder8f9d3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1125 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1125;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf1125 && ($this->initializerf1125->__invoke($valueHolder8f9d3, $this, 'initializeProxy', array(), $this->initializerf1125) || 1) && $this->valueHolder8f9d3 = $valueHolder8f9d3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f9d3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f9d3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
