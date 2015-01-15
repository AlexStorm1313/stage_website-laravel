/**
 * Created by alexstorm13 on 09/01/15.
 */
angular.module('hourService', [])

    .factory('Hour', function ($http) {

        return {
            // get all the days
            get: function () {
                return $http.get('/api/hours');
            },

            //Display all days of the chosen week
            showDayHours: function (date_of_day) {
                return $http({
                    method: 'GET',
                    url: '/api/hours/' + date_of_day + '/dayhours'
                });
            },
            updateLog: function (id, log) {
                return $http({
                    method: 'PUT',
                    url: 'api/hours/' + id + '/' + log,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(id, log)
                });
            }
        }

    });