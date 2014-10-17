var home = angular.module('home', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');

});
home.controller("PanelController", function () {
    this.tab = 1;

    this.selectTab = function (setTab) {
        this.tab = setTab;
    };
    this.isSelected = function (checkTab) {
        return this.tab === checkTab;
    };
});