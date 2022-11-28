<?php

namespace ContainerPxy751x;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9a7be = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer974ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7df0d = [
        
    ];

    public function getConnection()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getConnection', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getMetadataFactory', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getExpressionBuilder', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'beginTransaction', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getCache', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getCache();
    }

    public function transactional($func)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'transactional', array('func' => $func), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'wrapInTransaction', array('func' => $func), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'commit', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->commit();
    }

    public function rollback()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'rollback', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getClassMetadata', array('className' => $className), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'createQuery', array('dql' => $dql), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'createNamedQuery', array('name' => $name), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'createQueryBuilder', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'flush', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'clear', array('entityName' => $entityName), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->clear($entityName);
    }

    public function close()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'close', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->close();
    }

    public function persist($entity)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'persist', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'remove', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'refresh', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'detach', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'merge', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getRepository', array('entityName' => $entityName), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'contains', array('entity' => $entity), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getEventManager', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getConfiguration', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'isOpen', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getUnitOfWork', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getProxyFactory', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'initializeObject', array('obj' => $obj), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'getFilters', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'isFiltersStateClean', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'hasFilters', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return $this->valueHolder9a7be->hasFilters();
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

        $instance->initializer974ed = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9a7be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a7be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9a7be->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, '__get', ['name' => $name], $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        if (isset(self::$publicProperties7df0d[$name])) {
            return $this->valueHolder9a7be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a7be;

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

        $targetObject = $this->valueHolder9a7be;
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
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a7be;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9a7be;
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
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, '__isset', array('name' => $name), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a7be;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9a7be;
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
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, '__unset', array('name' => $name), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a7be;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9a7be;
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
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, '__clone', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        $this->valueHolder9a7be = clone $this->valueHolder9a7be;
    }

    public function __sleep()
    {
        $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, '__sleep', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;

        return array('valueHolder9a7be');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer974ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer974ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer974ed && ($this->initializer974ed->__invoke($valueHolder9a7be, $this, 'initializeProxy', array(), $this->initializer974ed) || 1) && $this->valueHolder9a7be = $valueHolder9a7be;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a7be;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a7be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
