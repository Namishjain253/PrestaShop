var CommonClient = require('./common_client');

global.checkCarrierName = [];

class Carrier extends CommonClient {

    /*checkImage(selector) {
        return this.client
            .waitForExist(selector)
            .pause(2000)
            .then(() => this.client.isExisting(selector))
            .then((text) => expect(text).to.be.equal(true));

    }

    clickOnAction(actionSelector, groupActionSelector = '', action = 'edit', alert = false) {
        if (action === 'delete') {
            if (alert) {
                return this.client
                    .waitForExistAndClick(groupActionSelector)
                    .waitForExistAndClick(actionSelector)
                    .alertAccept()
            } else {
                return this.client
                    .waitForExistAndClick(groupActionSelector)
                    .waitForExistAndClick(actionSelector)
            }
        } else {
            return this.client
                .pause(2000)
                .waitForExistAndClick(actionSelector)
        }
    }

    getCategoriesName(categories_list, i) {
        return this.client.getText(categories_list + '/li[' + i + ']/a').then(function (name) {
            checkCarrierName[i] = name;
        });
    }

    checkCarrier(selector, category_name) {
        return this.client
            .waitForExist(selector)
            .then(() => {
                expect(checkCarrierName).to.be.an('array').that.does.include(category_name)
            });
    }*/
}

module.exports = Carrier;
