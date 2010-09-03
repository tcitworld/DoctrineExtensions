<?php

namespace DoctrineExtensions\Translatable;

/**
 * The exception list for Translatable behavior
 * 
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @package DoctrineExtensions.Translatable
 * @link http://www.gediminasm.org
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class TranslatableException extends \Exception
{
    static public function undefinedLocale()
    {
        return new self("Locale cannot be empty and must be set in Translatable\Listener or in the entity");
    }

    static public function singleIdentifierRequired($entityClass)
    {
        return new self("Only a single identifier column is required for the Translatable extension, entity: {$entityClass}.");
    }
    
    static public function invalidIdentifierType($id)
    {
    	$type = gettype($id);
        return new self("Currently there is only integer identifiers supported, [{$type}] is given.");
    }
}