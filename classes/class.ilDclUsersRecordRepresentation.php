<?php
// Copyright (c) 2020 Institut fuer Lern-Innovation, Friedrich-Alexander-Universitaet Erlangen-Nuernberg, GPLv3, see LICENSE

/**
 * Class ilDclUsersRecordRepresentation
 */
class ilDclUsersRecordRepresentation extends ilDclBaseRecordRepresentation {

    /**
     * function parses stored value to the variable needed to fill into the form for editing.
     *
     * @param $value
     * @return mixed
     * @see \ilDclUsersRecordFieldModel::parseValue
     * @see \ilDclGenericMultiInputGUI::insert
     */
    public function parseFormInput($value)
    {
        require_once(__DIR__ . '/class.ilDclUsersInputGUI.php');
        return ilDclUsersInputGUI::_getArray($value);
    }
}