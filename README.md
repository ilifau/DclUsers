ILIAS Data Collection Field for Multiple User Selection
=======================================================

Installation
------------
When you download the Plugin as ZIP file from GitHub, please rename the extracted directory to *DclTimes* (remove the branch suffix, e.g. -main).

1. Copy the DclUsers directory to your ILIAS installation at the following path (create subdirectories, if neccessary):
Customizing/global/plugins/Modules/DataCollection/FieldTypeHook
2. Go to Administration > Plugins
3. Choose "Install" for the DclUsers plugin
4. Choose "Activate" for the DclUsers plugin

There is nothing to configure for this plugin.

Usage
-----
This plugin provides a new field type for ILIAS data collection. When a new field is created, the option "Plugin" will show a selection "DclUsers".
This fields allows to select multiple ILIAS uses, just like the user selection in the membership administration of courses or groups.
The entered values are stored and presented as a comma separated list of login names.

