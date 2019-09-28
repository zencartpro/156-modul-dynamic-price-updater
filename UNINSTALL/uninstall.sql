########################################################################
# Dynamic Price Updater 3.2.1 UNINSTALL - 2019-09-27 - webchills
# Nur ausführen, wenn Sie das Modul aus der Datenbank entfernen wollen!
########################################################################

SET @t4=0;
SELECT (@t4:=configuration_group_id) as t4 
FROM configuration_group WHERE configuration_group_title= 'Dynamic Price Updater Config';
DELETE FROM configuration WHERE configuration_group_id = @t4;
DELETE FROM configuration_group WHERE configuration_group_id = @t4;
DELETE FROM configuration_language WHERE configuration_key LIKE '%DPU_%';
DELETE FROM admin_pages WHERE page_key='configDynamicPriceUpdater';
SET @t4=0;
SELECT (@t4:=configuration_group_id) as t4 
FROM configuration_group WHERE configuration_group_title= 'Dynamic Price Updater';
DELETE FROM configuration WHERE configuration_group_id = @t4;
DELETE FROM configuration_group WHERE configuration_group_id = @t4;