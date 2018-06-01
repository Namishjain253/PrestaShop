var CommonClient = require('./common_client');

class AttributeAndFeature extends CommonClient {

  addValueToAttribute(attributeSubMenu, values) {
    return this.client
      .waitForExistAndClick(attributeSubMenu.add_value_button)
      .waitAndSetValue(attributeSubMenu.value_input, values[1])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[2])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[4])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[5])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[6])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[7])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[8])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[9])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[10])
      .waitForExistAndClick(attributeSubMenu.save_and_add)
      .waitAndSetValue(attributeSubMenu.value_input, values[3])
      .waitForExistAndClick(attributeSubMenu.save_value_button)
  }

  clickOnAction(groupActionSelector, actionSelector, action = 'edit') {
    if (action === 'delete') {
      return this.client
        .waitForExistAndClick(groupActionSelector)
        .waitForExistAndClick(actionSelector)
        .alertAccept()
    } else {
      return this.client
        .waitForExistAndClick(groupActionSelector)
        .waitForExistAndClick(actionSelector)
    }
  }

  checkDeleted(selector) {
    return this.client
      .pause(3000)
      .then(() => this.client.isExisting(selector))
      .then((value) => expect(value).to.be.false);
  }
}

module.exports = AttributeAndFeature;
