<!doctype html>
<html lang="en" data-ng-app="app" data-ng-controller="MainCtrl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" href="{{url('admin/css/vendor.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/main.css')}}">
</head>
<body>
    <navbar></navbar>
    <ui-view></ui-view>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Замовлення</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Номер</th>
                            <th>Дата</th>
                            <th>Ім'я</th>
                            <th>Номер телефону</th>
                            <th>Адреса</th>
                            <th>Список продуктів</th>
                            <th>Тип оплати</th>
                            <th>Ціна</th>
                            <th>Статус</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody data-ng-repeat="order in data.data">
                        <tr>
                            <td>@{{order.id}}</td>
                            <td>@{{order.created_at}}</td>
                            <td>@{{order.name}}</td>
                            <td>@{{order.phone}}</td>
                            <td>@{{order.address}}</td>
                            <td>@{{order.products_list}}</td>
                            <td>@{{order.billing.title}}</td>
                            <td>@{{order.amount}}</td>
                            <td>@{{order.status}}</td>
                            <td style="min-width: 125px" class="text-right">
                                <button class="btn btn-sm btn-primary">Edit</button>
                                <button class="btn btn-sm btn-danger" data-ng-click="deleteOrder(order.id)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <ul uib-pagination ng-change="pageChanged()" total-items="data.total" items-per-page="data.per_page" ng-model="currentPage" max-size="5" class="pagination-sm" boundary-link-numbers="true" rotate="false"></ul>
            </div>
        </div>
    </div>
    <script src="{{url('admin/js/vendor.js')}}"></script>
    <script src="{{url('admin/js/main.js')}}"></script>
</body>
</html>