var app = angular.module('app', [
    'ui.router',
    'ui.bootstrap',
    'ngResource'
]);
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
app.factory('OrderService', function ($resource) {
    return $resource('orders/:id',{id: "@id"}, {
        'paginate' : {
            method : 'GET',
            params: {
                by: '@by'
            }
        }
    });
});
app.directive('navbar',function(){
    return {
        templateUrl:'admin/views/navbar.html',
        restrict: 'E',
        replace: true,
    }
});
app.controller('MainCtrl', ['$scope', '$interval', 'OrderService', function($scope, $interval, OrderService) {

    $scope.navbarCollapsed = true;

    $scope.currentPage = 1;

    $scope.data = {};

    $scope.getOrders = function(){
        OrderService.paginate({paginateBy: 5, page: $scope.currentPage}, function(response){
            if($scope.data.total < response.total){
                console.log('new orders' + (response.total - $scope.data.total));
            }
            $scope.data = response;
        });
    };

    $scope.intervalPromise = $interval(function(){

        $scope.getOrders();

    }, 10000);

    $scope.getOrders();

    $scope.pageChanged = function(){

        $scope.getOrders();
    };
    $scope.deleteOrder = function(id){
        //var $this = this;
        OrderService.remove({id: id}, function(){
            //$scope.data.data.splice($this.$index, 1);
            $scope.getOrders();
        });
    };

}]);
//# sourceMappingURL=main.js.map
