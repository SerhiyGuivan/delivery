app.config(['$stateProvider','$urlRouterProvider', function($stateProvider, $urlRouterProvider ){

    $urlRouterProvider.otherwise('/orders');

    $stateProvider
        .state('orders', {
            url: '/',
            template: 'Orders'
        }).state('billing', {
            url: '/billing',
            template: 'Billing'
        }).state('reviews', {
            url: '/reviews',
            template: 'Reviews'
        })
}]);