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