angular.module("excelAnalyser",[
        'ngRoute',
        'ngSanitize',
        'excelAnalyserDirectives',
        'excelAnalyserControllers',
        'excelAnalyserServices',
        'excelAnalyserFilters',
        'mgcrea.ngStrap',
        'ngAnimate',
        'angular-spinkit',
        'multi-select-tree',
        'highcharts-ng',
        'angularUtils.directives.dirPagination',
        'ngCsv'
])
    .run( function($rootScope, $location) {
        // register listener to watch route changes
        $rootScope.$on( "$routeChangeStart", function(event, next, current) {
            console.log("route imebadilika")
        });
    })
    .config( function($routeProvider){
        $routeProvider.when("/reports",{
            templateUrl: 'views/reports.html',
            controller: 'mainController'
        }).when("/location",{
            templateUrl: 'views/location.html',
            controller: 'locationController'
        }).when("/metadata",{
            templateUrl: 'views/metadata.html',
            controller: 'mainController'
        }).when("/program_data",{
            templateUrl: 'views/program_data.html',
            controller: 'mainController'
        }).when("/upload",{
            templateUrl: 'views/upload.html',
            controller: 'mainController'
        }).when("/users",{
            templateUrl: 'views/users.html',
            controller: 'mainController'
        });

        $routeProvider.otherwise({
            redirectTo: '/upload'
        });



    });