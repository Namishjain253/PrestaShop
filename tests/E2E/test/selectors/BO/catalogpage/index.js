module.exports = Object.assign(
  {
    CatalogPage: {
      menu_button: '//*[@id="subtab-AdminCatalog"]/a',
      success_panel: '//*[@id="content"]/div[@class="bootstrap"]/div[contains(@class, "success")]',
      select_all_product_button: '//*[@id="bulk_action_select_all"]',
      action_group_button: '//*[@id="product_bulk_menu"]',
      action_button: '(//*[@id="main-div"]//div[contains(@class, "bulk-catalog")]//a)[%ID]',
      green_validation: '//*[@id="main-div"]//div[contains(@class, "alert-success") and not(@style)]',
      product_status_icon: '(//*[@id="product_catalog_list"]//tbody/tr[%S]//i[contains(@class, "material-icons")])[1]',
      product_name_input: '//*[@id="product_catalog_list"]/div[2]/div/table/thead/tr[2]/th[3]/input',
      products_title_page: '//*[@id="main-div"]/div[1]/h2',
      apply_button: '//*[@id="product_catalog_list"]/div[2]/div/table/thead/tr[2]/th[9]/button[1]',
      delete_now_button: '//*[@id="catalog_deletion_modal"]/div/div/div[3]/button[2]',
      reset_button: '//*[@id="product_catalog_list"]/div[2]/div/table/thead/tr[2]/th[9]/button[2]',
    }
  },
  require('./feature_submenu'),
  require('./category_submenu'),
  require('./attribute_submenu'),
  require('./Manufacturers'),
  require('./stocksubmenu'),
  require('./discount_submenu')
);
