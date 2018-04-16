const {Menu} = require('../../../selectors/BO/menu.js');
const {CatalogPage} = require('../../../selectors/BO/catalogpage/index');
const {productPage} = require('../../../selectors/FO/product_page');
let promise = Promise.resolve();

module.exports = {
  createCarrier(CarrierSubMenu, carrierData) {
    scenario('Create a new "Carrier"', client => {
      test('should go to "Carrier" page', () => client.goToSubtabMenuPage(Menu.Improve.Shipping.shipping_menu, Menu.Improve.Shipping.carriers_submenu));
      test('should click on "Add new carrier" button', () => client.waitForExistAndClick(CarrierSubMenu.new_carrier_button));
      test('should set the "Carrier name" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_name_input, carrierData.carrier_name_input + date_time));
      test('should set the "Transit time" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_transit_time_input, carrierData.carrier_transit_time_input));
      test('should set the "Speed grade" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_speed_grade_input, carrierData.carrier_speed_grade_input));
      test('should upload the "Logo"', () => client.uploadPicture(carrierData.image_name, CarrierSubMenu.logo, 'image'));
      test('should set the "Tracking URL" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_tracking_URL_input,carrierData.carrier_tracking_URL_input));
      test('should click on "Next" button', () => client.waitForExistAndClick(CarrierSubMenu.next_button));
      test('should enable the "Add handling costs" button', () => client.waitForExistAndClick(CarrierSubMenu.shipping_handling_on_button,1000));
      test('should set the "Billing" to "According to total price."', () => client.waitForExistAndClick(CarrierSubMenu.select_billing_price));
      test('should set the first "Ranges" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_zone_ranges_sup_input_first_range, carrierData.carrier_zone_ranges_sup_input_first_range));
      test('should check "All" option', () => client.waitForExistAndClick(CarrierSubMenu.carrier_ranges_all_zones_checkbox));
      test('should set the second "Ranges" input for all zones', () => client.waitAndSetValue(CarrierSubMenu.carrier_ranges_all_zones_first_input, carrierData.carrier_ranges_all_zones_first_input));
      test('should click out side', () => client.waitForExistAndClick(CarrierSubMenu.carrier_ranges_title));
      test('should click on "Add new range" button', () => client.scrollWaitForExistAndClick(CarrierSubMenu.add_new_range_button));
      test('should set the second sup "Ranges" input', () => client.scrollWaitForExistAndSetValue(CarrierSubMenu.carrier_zone_ranges_sup_input_second_range, carrierData.carrier_zone_ranges_sup_input_second_range));
      test('should set the second "Ranges" input for all zones', () => {
        return promise
          .then(() => client.pause(2000))
          .then(() => client.waitAndSetValue(CarrierSubMenu.carrier_ranges_all_zones_second_input, carrierData.carrier_ranges_all_zones_second_input));

      });
      test('should click out side', () => client.waitForExistAndClick(CarrierSubMenu.carrier_ranges_title));
      test('should click on "Next" button', () => client.scrollWaitForExistAndClick(CarrierSubMenu.next_button));
      test('should set the "Maximum package width (cm)" input', () => client.waitAndSetValue(CarrierSubMenu.max_width_input, carrierData.max_width_input));
      test('should set the "Maximum package height (cm)" input', () => client.waitAndSetValue(CarrierSubMenu.max_height_input, carrierData.max_height_input));
      test('should set the "Maximum package depth (cm)" input', () => client.waitAndSetValue(CarrierSubMenu.max_depth_input, carrierData.max_depth_input));
      test('should set the "Maximum package weight (kg)" input', () => client.waitAndSetValue(CarrierSubMenu.max_weight_input, carrierData.max_weight_input));
      test('should click on "Next" button', () => client.scrollWaitForExistAndClick(CarrierSubMenu.next_button));
      test('should click on "Finish" button', () => client.waitForExistAndClick(CarrierSubMenu.finish_button,1000));
      test('should verify the appearance of the green validation', () => client.checkTextValue(CatalogPage.success_panel, '×\nSuccessful creation.'));
    }, 'carrier');
  },

  checkCreatedCarrierInBO(CarrierSubMenu,carrierData) {
    scenario('Check the carrier creation in Back Office', client => {
      test('should go to "Carrier" page', () => client.goToSubtabMenuPage(Menu.Improve.Shipping.shipping_menu, Menu.Improve.Shipping.carriers_submenu));
      test('should search for carrier by name', () => client.searchByValue(CarrierSubMenu.search_input, CarrierSubMenu.search_button, carrierData.carrier_name_input + date_time));
      test('should check the existence of carrier name', () => client.checkTextValue(CarrierSubMenu.carrierFilter_name, carrierData.carrier_name_input + date_time));
      test('should check carrier logo', () => client.checkImage(CarrierSubMenu.image_link));
      test('should check the existence of carrier delay', () => client.checkTextValue(CarrierSubMenu.carrierFilter_delay, carrierData.carrier_transit_time_input));
      test('should reset filter', () => client.waitForExistAndClick(CarrierSubMenu.carrier_reset_filter));
    }, 'carrier');
  },

  checkCreatedCarrierInFO(CarrierSubMenu,carrierData) {
    scenario('Create order in the Front Office', client => {
      test('should set the language of shop to "English"', () => client.changeLanguage());
      test('should go to the first product page', () => client.waitForExistAndClick(productPage.first_product));
      test('should select product "size M" ', () => client.waitAndSelectByValue(productPage.first_product_size, '2'));
      test('should select product "color Black"', () => client.waitForExistAndClick(productPage.first_product_color));
      test('should set the product "quantity"', () => client.waitAndSetValue(productPage.first_product_quantity, "4"));
      test('should click on "Add to cart" button  ', () => client.waitForExistAndClick(CheckoutOrderPage.add_to_cart_button));
      test('should click on proceed to checkout button 1', () => client.waitForVisibleAndClick(CheckoutOrderPage.proceed_to_checkout_modal_button));
    }, 'common_client');
  },

  updateCreatedCarrier(CarrierSubMenu,carrierData){
    scenario('Update the carrier created', client => {
      test('should go to "Carrier" page', () => client.goToSubtabMenuPage(Menu.Improve.Shipping.shipping_menu, Menu.Improve.Shipping.carriers_submenu));
      test('should search for carrier ', () => client.searchByValue(CarrierSubMenu.search_input, CarrierSubMenu.search_button, carrierData.carrier_name_input + date_time));
      test('should click on "Edit" action', () => client.waitForExistAndClick(CarrierSubMenu.edit_button));
      test('should set the "Carrier name" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_name_input, 'update category' + date_time));
      test('should set the "Transit time" input', () => client.waitAndSetValue(CarrierSubMenu.carrier_transit_time_input, 'update ' + carrierData.carrier_transit_time_input));
      test('should click on "Save" button', () => client.waitForExistAndClick(CarrierSubMenu.finish_button));
      test('should verify the appearance of the green validation', () => client.checkTextValue(CatalogPage.success_panel, '×\nSuccessful update.'));
    }, 'carrier');
  },
}