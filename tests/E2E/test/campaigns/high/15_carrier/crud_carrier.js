const {AccessPageBO} = require('../../../selectors/BO/access_page');
const {CarrierSubMenu} = require('../../../selectors/BO/carrier');
const common_scenarios = require('./carrier');
var carrierData = {
  carrier_transit_time_input: "Delivery next day!",
  carrier_speed_grade_input: "0",
  carrier_tracking_URL_input: "http://example.com/track.php?num=@",
  carrier_zone_ranges_sup_input_first_range: "100",
  carrier_zone_ranges_sup_input_second_range: "200",
  image_name: "carrier_logo.jpg",
  carrier_ranges_all_zones_first_input: "12",
  carrier_ranges_all_zones_second_input: "20",
  max_width_input: "1000",
  max_height_input: "1000",
  max_depth_input: "1000",
  max_weight_input: "1000"

};

scenario('Create "Carrier"', () => {
  scenario('Login in the Back Office', client => {
    test('should open the browser', () => client.open());
    test('should login successfully in the Back Office', () => client.signInBO(AccessPageBO));
  }, 'carrier');
  common_scenarios.createCarrier(CarrierSubMenu,carrierData);
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