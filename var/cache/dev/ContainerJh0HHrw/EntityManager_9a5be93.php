<?php

namespace ContainerJh0HHrw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99cfb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdbfd4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties98ac0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getConnection', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getMetadataFactory', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getExpressionBuilder', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'beginTransaction', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getCache', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'transactional', array('func' => $func), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'commit', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->commit();
    }

    public function rollback()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'rollback', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getClassMetadata', array('className' => $className), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'createQuery', array('dql' => $dql), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'createNamedQuery', array('name' => $name), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'createQueryBuilder', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'flush', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'clear', array('entityName' => $entityName), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->clear($entityName);
    }

    public function close()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'close', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->close();
    }

    public function persist($entity)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'persist', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'remove', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'refresh', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'detach', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'merge', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'contains', array('entity' => $entity), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getEventManager', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getConfiguration', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'isOpen', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getUnitOfWork', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getProxyFactory', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'initializeObject', array('obj' => $obj), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'getFilters', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'isFiltersStateClean', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'hasFilters', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return $this->valueHolder99cfb->hasFilters();
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

        $instance->initializerdbfd4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder99cfb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99cfb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99cfb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, '__get', ['name' => $name], $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        if (isset(self::$publicProperties98ac0[$name])) {
            return $this->valueHolder99cfb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99cfb;

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

        $targetObject = $this->valueHolder99cfb;
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
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99cfb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99cfb;
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
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, '__isset', array('name' => $name), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99cfb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99cfb;
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
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, '__unset', array('name' => $name), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99cfb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99cfb;
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
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, '__clone', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        $this->valueHolder99cfb = clone $this->valueHolder99cfb;
    }

    public function __sleep()
    {
        $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, '__sleep', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;

        return array('valueHolder99cfb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdbfd4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdbfd4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdbfd4 && ($this->initializerdbfd4->__invoke($valueHolder99cfb, $this, 'initializeProxy', array(), $this->initializerdbfd4) || 1) && $this->valueHolder99cfb = $valueHolder99cfb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99cfb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99cfb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
