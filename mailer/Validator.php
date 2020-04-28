<?php
/**
 * Validator: класс-хелпер, валидацирует данные пришедшие от пользователя
 */
class Validator
{
	
	public static function isValidPhone($phone)
	{
		return preg_match("#\+7 \(\d{3}\) \d{3}\-\d{2}-\d{2}#", $phone);
	}

	/**
     * Проверяет пришли ли данные POST-запросом, если да,
     * то возвращает TRUE, в противном случае FALSE.
     * @return boolean
     */
	public static function isPost()
	{
		return $_SERVER['REQUEST_METHOD'] === 'POST';
	}

	/**
     * Проверяет пришли ли данные Ajax-запросом, если да,
     * то возвращает TRUE, в противном случае FALSE.
     * @return boolean
     */
	public static function isAjax()
	{
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
	}
}