<?php declare(strict_types = 0);

namespace Modules\Example_C\Actions;

use CController as CAction;

class Test2 extends CAction {

	public function init() {
		$this->disableCsrfValidation();
	}

	/**
	 * @inheritDoc
	 */
	protected function checkPermissions() {
		return true;
	}

	/**
	 * @inheritDoc
	 */
	protected function checkInput() {
		return true;
	}

	/**
	 * @inheritDoc
	 */
	protected function doAction() {
		$response = new \CControllerResponseData([]);
		$response->setTitle('Dummy module');

		$this->setResponse($response);
	}
}
