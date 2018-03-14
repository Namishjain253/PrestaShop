const {AccessPageBO} = require('../../../selectors/BO/access_page');
const {Menu} = require('../../../selectors/BO/menu.js');
const {CarrierSubMenu} = require('../../../selectors/BO/carrier');
const {CatalogPage} = require('../../../selectors/BO/catalogpage/index');




scenario('Create "Carrier"', () => {
    scenario('Login in the Back Office', client => {
        test('should open the browser', () => client.open());
        test('should login successfully in the Back Office', () => client.signInBO(AccessPageBO));
    }, 'carrier');
    scenario('Create a new "Carrier"', client => {
        test('should go to "Carrier" page', () => client.goToSubtabMenuPage(Menu.Improve.Shipping.shipping_menu, Menu.Improve.Shipping.carriers_submenu));
        test('should click on "Add new carrier" button', () => client.waitForExistAndClick(CarrierSubMenu.new_carrier_button));
        test('should set the "Carrier name" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_name_input, 'carrier' + date_time));
        test('should set the "Transit time" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_transit_time_input, 'Delivery next day!'));
        test('should set the "Speed grade" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_speed_grade_input, '0'));
        test('should upload the "Logo"', () => client.uploadPicture('carrier_logo.jpg', CarrierSubMenu.logo, 'image'));
        test('should set the "Tracking URL" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_tracking_URL_input, 'http://example.com/track.php?num=@'));
        test('should click on "Next" button', () => client.waitForExistAndClick(CarrierSubMenu.next_button));

        test('should set the "Ranges" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_ranges_input, '100'));
        test('should check "All" option', () => client.waitForExistAndClick('//*[@id="zones_table"]/tbody/tr[3]/td[2]/input'));
        test('should set the "Ranges" input for all zones', () => client.waitAndSetValue(CarrierSubMenu.carrier_ranges_all_zones_input, '12'));
        test('should click out side', () => client.waitForExistAndClick(CarrierSubMenu.carrier_ranges_title));

        test('should click on "Next" button', () => client.waitForExistAndClick(CarrierSubMenu.next_button));
        test('should click on "Next" button', () => client.waitForExistAndClick(CarrierSubMenu.next_button));
        test('should click on "Finish" button', () => client.waitForExistAndClick(CarrierSubMenu.finish_button));
        test('should verify the appearance of the green validation', () => client.checkTextValue(CatalogPage.success_panel, '×\nSuccessful creation.'));
    }, 'carrier');



        /*test('should search for carrier ', () => client.searchByValue(CarrierSubMenu.search_input, CarrierSubMenu.search_button, 'carrier' + date_time));
        test('should click on "Edit" action', () => client.clickOnAction(CarrierSubMenu.update_button));

        test('should set the "Carrier name" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_name_input, 'category' + date_time + 'update'));
        test('should set the "Simplify url" input', () => client.waitAndSetValue(CarrierSubMenu.simplify_URL_input, 'category' + date_time + 'update'));
        test('should click on "Save" button', () => client.waitForExistAndClick(CarrierSubMenu.save_button));
        test('should verify the appearance of the green validation', () => client.checkTextValue(CatalogPage.success_panel, '×\nSuccessful update.'));
    }, 'carrier');*/
    scenario('Logout from the Back Office', client => {
        test('should logout successfully from the Back Office', () => client.signOutBO());
    }, 'carrier');
}, 'carrier', true);






/*

scenario('Update "Carrier"', () => {
    scenario('Update the created "Carrier"', client => {
        test('should go to "Carrier" page', () => client.goToSubtabMenuPage(Menu.Sell.Catalog.shipping_menu, Menu.Sell.Catalog.carriers_submenu));
        test('should search for carrier ', () => client.searchByValue(CarrierSubMenu.search_input, CarrierSubMenu.search_button, 'carrier' + date_time));
        test('should click on "Edit" action', () => client.clickOnAction(CarrierSubMenu.update_button));

        test('should set the "Carrier name" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_name_input, 'category' + date_time + 'update'));
        test('should set the "Simplify url" input', () => client.waitAndSetValue(CarrierSubMenu.simplify_URL_input, 'category' + date_time + 'update'));
        test('should click on "Save" button', () => client.waitForExistAndClick(CarrierSubMenu.save_button));
        test('should verify the appearance of the green validation', () => client.checkTextValue(CatalogPage.success_panel, '×\nSuccessful update.'));
    }, 'category');
    scenario('Logout from the Back Office', client => {
        test('should logout successfully from the Back Office', () => client.signOutBO());
    }, 'category');
}, 'category', true);*/
