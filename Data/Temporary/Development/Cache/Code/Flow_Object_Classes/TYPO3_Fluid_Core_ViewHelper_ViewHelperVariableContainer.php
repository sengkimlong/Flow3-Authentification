<?php 
namespace TYPO3\Fluid\Core\ViewHelper;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Fluid".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Fluid\Core\ViewHelper\Exception\InvalidVariableException;
use TYPO3\Fluid\View\AbstractTemplateView;

/**
 * A key/value store that can be used by ViewHelpers to communicate between each other.
 *
 * @api
 */
class ViewHelperVariableContainer_Original {

	/**
	 * Two-dimensional object array storing the values. The first dimension is the fully qualified ViewHelper name,
	 * and the second dimension is the identifier for the data the ViewHelper wants to store.
	 *
	 * @var array
	 */
	protected $objects = array();

	/**
	 *
	 * @var AbstractTemplateView
	 */
	protected $view;

	/**
	 * Add a variable to the Variable Container. Make sure that $viewHelperName is ALWAYS set
	 * to your fully qualified ViewHelper Class Name
	 *
	 * In case the value is already inside, an exception is thrown.
	 *
	 * @param string $viewHelperName The ViewHelper Class name (Fully qualified, like "TYPO3\Fluid\ViewHelpers\ForViewHelper")
	 * @param string $key Key of the data
	 * @param mixed $value The value to store
	 * @return void
	 * @throws InvalidVariableException if there was no key with the specified name
	 * @api
	 */
	public function add($viewHelperName, $key, $value) {
		if ($this->exists($viewHelperName, $key)) {
			throw new InvalidVariableException(sprintf('The key "%s->%s" was already stored and you cannot override it. Use addOrUpdate() instead if you want to replace existing values', $viewHelperName, $key), 1243352010);
		}
		$this->addOrUpdate($viewHelperName, $key, $value);
	}

	/**
	 * Add a variable to the Variable Container. Make sure that $viewHelperName is ALWAYS set
	 * to your fully qualified ViewHelper Class Name.
	 * In case the value is already inside, it is silently overridden.
	 *
	 * @param string $viewHelperName The ViewHelper Class name (Fully qualified, like "TYPO3\Fluid\ViewHelpers\ForViewHelper")
	 * @param string $key Key of the data
	 * @param mixed $value The value to store
	 * @return void
	 */
	public function addOrUpdate($viewHelperName, $key, $value) {
		if (!isset($this->objects[$viewHelperName])) {
			$this->objects[$viewHelperName] = array();
		}
		$this->objects[$viewHelperName][$key] = $value;
	}

	/**
	 * Gets a variable which is stored
	 *
	 * @param string $viewHelperName The ViewHelper Class name (Fully qualified, like "TYPO3\Fluid\ViewHelpers\ForViewHelper")
	 * @param string $key Key of the data
	 * @return mixed The object stored
	 * @throws InvalidVariableException if there was no key with the specified name
	 * @api
	 */
	public function get($viewHelperName, $key) {
		if (!$this->exists($viewHelperName, $key)) {
			throw new InvalidVariableException(sprintf('No value found for key "%s->%s"', $viewHelperName, $key), 1243325768);
		}
		return $this->objects[$viewHelperName][$key];
	}

	/**
	 * Determine whether there is a variable stored for the given key
	 *
	 * @param string $viewHelperName The ViewHelper Class name (Fully qualified, like "TYPO3\Fluid\ViewHelpers\ForViewHelper")
	 * @param string $key Key of the data
	 * @return boolean TRUE if a value for the given ViewHelperName / Key is stored, FALSE otherwise.
	 * @api
	 */
	public function exists($viewHelperName, $key) {
		return isset($this->objects[$viewHelperName]) && array_key_exists($key, $this->objects[$viewHelperName]);
	}

	/**
	 * Remove a value from the variable container
	 *
	 * @param string $viewHelperName The ViewHelper Class name (Fully qualified, like "TYPO3\Fluid\ViewHelpers\ForViewHelper")
	 * @param string $key Key of the data to remove
	 * @return void
	 * @throws InvalidVariableException if there was no key with the specified name
	 * @api
	 */
	public function remove($viewHelperName, $key) {
		if (!$this->exists($viewHelperName, $key)) {
			throw new InvalidVariableException(sprintf('No value found for key "%s->%s", thus the key cannot be removed.', $viewHelperName, $key), 1243352249);
		}
		unset($this->objects[$viewHelperName][$key]);
	}

	/**
	 * Set the view to pass it to ViewHelpers.
	 *
	 * @param AbstractTemplateView $view View to set
	 * @return void
	 */
	public function setView(AbstractTemplateView $view) {
		$this->view = $view;
	}

	/**
	 * Get the view.
	 *
	 * !!! This is NOT a public API and might still change!!!
	 *
	 * @return AbstractTemplateView The View
	 */
	public function getView() {
		return $this->view;
	}

	/**
	 * Clean up for serializing.
	 *
	 * @return array
	 */
	public function __sleep() {
		return array('objects');
	}
}
namespace TYPO3\Fluid\Core\ViewHelper;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * A key/value store that can be used by ViewHelpers to communicate between each other.
 */
class ViewHelperVariableContainer extends ViewHelperVariableContainer_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 */
	 public function __wakeup() {

	if (property_exists($this, 'Flow_Persistence_RelatedEntities') && is_array($this->Flow_Persistence_RelatedEntities)) {
		$persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface');
		foreach ($this->Flow_Persistence_RelatedEntities as $entityInformation) {
			if($entityInformation['entityType'] === 'TYPO3\Flow\Resource\ResourcePointer') continue;
			$entity = $persistenceManager->getObjectByIdentifier($entityInformation['identifier'], $entityInformation['entityType'], TRUE);
			if (isset($entityInformation['entityPath'])) {
				$this->$entityInformation['propertyName'] = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$entityInformation['propertyName'], $entityInformation['entityPath'], $entity);
			} else {
				$this->$entityInformation['propertyName'] = $entity;
			}
		}
		unset($this->Flow_Persistence_RelatedEntities);
	}
			}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function searchForEntitiesAndStoreIdentifierArray($path, $propertyValue, $originalPropertyName) {

		if (is_array($propertyValue) || (is_object($propertyValue) && ($propertyValue instanceof \ArrayObject || $propertyValue instanceof \SplObjectStorage))) {
			foreach ($propertyValue as $key => $value) {
				$this->searchForEntitiesAndStoreIdentifierArray($path . '.' . $key, $value, $originalPropertyName);
			}
		} elseif ($propertyValue instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($propertyValue) || $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
			if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
				$this->Flow_Persistence_RelatedEntities = array();
				$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
			}
			if ($propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($propertyValue);
			} else {
				$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($propertyValue));
			}
			$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($propertyValue);
			if (!$identifier && $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($propertyValue, '_identifier', TRUE));
			}
			$this->Flow_Persistence_RelatedEntities[$originalPropertyName . '.' . $path] = array(
				'propertyName' => $originalPropertyName,
				'entityType' => $className,
				'identifier' => $identifier,
				'entityPath' => $path
			);
			$this->$originalPropertyName = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$originalPropertyName, $path, NULL);
		}
			}
}
# PathAndFilename: /var/www/html/flow-login/Packages/Framework/TYPO3.Fluid/Classes/TYPO3/Fluid/Core/ViewHelper/ViewHelperVariableContainer.php
#