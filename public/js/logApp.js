var logApp = angular.module('logApp', ['weekCtrl', 'weekService', 'dayService', 'dayCtrl', 'hourService', 'hourCtrl'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});