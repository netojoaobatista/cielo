<?php
/**
 * @author		João Batista Neto
 * @brief		Classes relacionadas ao webservice da Cielo
 * @package		dso.cielo
 */

/**
 * Bandeira do cartão
 * @ingroup		Cielo
 * @interface	CreditCard
 */
interface CreditCard {

	/**
	 * Cartão Visa
	 */
	const VISA = 'visa';

	/**
	 * Cartão MarterCard
	 */
	const MASTER_CARD = 'mastercard';

	/**
	 * Cartão Elo
	 */
	const ELO = 'elo';

	/**
	 * Cartão American Express
	 */
	const AMEX = 'amex';

	/**
	 * Cartão Diners Club
	 */
	const DINERS = 'diners';

	/**
	 * Cartão Discover
	 */
	const DISCOVER = 'discover';

}