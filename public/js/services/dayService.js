/**
 * Created by alexstorm13 on 05/01/15.
 */
angular.module('dayService', [])

    .factory('Day', function ($http) {

        return {
            // get all the days
            get: function () {
                return $http.get('/api/days');
            },

            //Display all days of the chosen week
            showWeekDays: function (week_number) {
                return $http({
                    method: 'GET',
                    url: '/api/days/' + week_number + '/weekdays'
                });
            },
            openDayHours: function (id) {
                return $http({
                    method: 'GET',
                    url: '/api/hours/' + id + '/opendayhours'
                });
            }
        }

    });