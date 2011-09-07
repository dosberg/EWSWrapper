<?php
/**
 * Definition of the IsLessThanOrEqualToType type
 * 
 * @author Michal Korzeniowski <mko_san@lafiel.net>
 */

class EWSType_IsLessThanOrEqualToType extends EWSType {
	/**
	 * SearchExpression property
	 * 
	 * @var EWSType_TwoOperandExpressionType
	 */
	public $SearchExpression;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SearchExpression',
				'required' => false,
				'type' => 'TwoOperandExpressionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class IsLessThanOrEqualToType