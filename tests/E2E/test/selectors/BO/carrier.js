module.exports = {
    CarrierSubMenu: {
        new_carrier_button: '//*[@id="page-header-desc-carrier-new_carrier"]',
        //save_button: '//*[@id="category_form_submit_btn"]',
        search_input: '//*[@id="table-carrier"]/thead/tr[2]/th[3]/input',
        search_button: '//*[@id="submitFilterButtoncarrier"]',
        update_button: '//*[@id="tr_2_2_1"]/td[9]/div//a',
        next_button: '//*[@id="carrier_wizard"]//a[contains(@class, "Next")]',
        finish_button: '//*[@id="carrier_wizard"]//a[contains(@class, "Finish")]',
        carrier_name_input: '//*[@id="name"]',
        carrier_transit_time_input: '//*[@id="delay_1"]',
        carrier_speed_grade_input: '//*[@id="grade"]',
        carrier_tracking_URL_input: '//*[@id="url"]',
        carrier_ranges_input: '//*[@id="zones_table"]/tbody/tr[2]/td[3]/div/input',
        carrier_ranges_all_zones_input: '//*[@id="zones_table"]/tbody/tr[3]/td[3]/div/input',
        carrier_ranges_title: '//*[@id="zone_ranges"]/h4',
        logo: '//*[@id="attachement_fileselectbutton"]',
        carrier_ranges_radio_button: '//*[@id="zones_table"]/tbody//input[@type="checkbox" and @value="1"]',
        //search_result: '//*[@id="table-category"]//td[3]',
    }
};