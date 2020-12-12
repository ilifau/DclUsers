<?php
// Copyright (c) 2020 Institut fuer Lern-Innovation, Friedrich-Alexander-Universitaet Erlangen-Nuernberg, GPLv3, see LICENSE

require_once(__DIR__ . '/class.ilDclUsersInputGUI.php');

/**
 * Class ilDclUsersFieldRepresentation
 */
class ilDclUsersFieldRepresentation extends ilDclPluginFieldRepresentation
{

    /**
     * Get the property form input field for records
	 * @param ilPropertyFormGUI $form
	 * @param int               $record_id
	 *
	 * @return ilDclGenericMultiInputGUI
	 */
	public function getInputField(ilPropertyFormGUI $form, $record_id = 0)
    {
        $input = new ilDclUsersInputGUI($this->getField()->getTitle(), 'field_' . $this->getField()->getId());
        $input->setInfo($this->getField()->getDescription());
        return $input;
	}
}