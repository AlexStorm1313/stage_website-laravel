var logApp = angular.module('logApp', ['weekCtrl', 'weekService', 'dayService', 'dayCtrl'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});