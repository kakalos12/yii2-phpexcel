<?php

namespace kakalos12\phpexcel;

use yii\base\Component;

class PhpExcel extends Component {

	private $_phpexcel = null;

	public function createInstance() {
		if (! isset ( $this->_phpexcel )) {
			$this->_phpexcel = new \PHPExcel ();
		}
		return $this->_phpexcel ;
	}

}