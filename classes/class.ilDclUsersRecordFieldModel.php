<?php
// Copyright (c) 2020 Institut fuer Lern-Innovation, Friedrich-Alexander-Universitaet Erlangen-Nuernberg, GPLv3, see LICENSE

/**
 * Class ilDclUsersRecordFieldModel
 */
class ilDclUsersRecordFieldModel extends ilDclPluginRecordFieldModel
{
	// here you could override record-value logic (e.g. Excel-Export formating, other storage-location mechanisms)

    /**
     * Function to parse incoming data from form input value $value. returns the string/number/etc. to store in the database.
     *
     * @param $value
     * @return int|string
     * @see \ilDclUsersRecordRepresentation::parseFormInput
     */
    public function parseValue($value)
    {
        require_once(__DIR__ . '/class.ilDclUsersInputGUI.php');
        return ilDclUsersInputGUI::_getString($value);
    }


    /**
     * @param ilConfirmationGUI $confirmation
     */
    public function addHiddenItemsToConfirmation(ilConfirmationGUI &$confirmation)
    {
       require_once(__DIR__ . '/class.ilDclUsersInputGUI.php');
       $values = ilDclUsersInputGUI::_getArray($this->getValue());
       $this->addHiddenItemsToConfirmationRec($confirmation, 'field_' . $this->field->getId(), $values);
    }

    /**
     * @param ilConfirmationGUI $confirmation
     * @param string            $postvar
     * @param mixed             $values
     */
    protected function addHiddenItemsToConfirmationRec(ilConfirmationGUI &$confirmation, $postvar, $values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $this->addHiddenItemsToConfirmationRec($confirmation, $postvar ."[$key]", $value);
            }
        }
        else {
            $confirmation->addHiddenItem($postvar, $values);
        }
    }

}