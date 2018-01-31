@extends('Ripple::layouts.beta-app') 
@section('page-content')
<div class="container-fluid p-3" ng-app="Settings"> 

    <div class="row" ng-controller="UpdateBreadStatus">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    Bread Enabled
                </div>
                <div class="card-body">
                    <div class="card mb-2" ng-repeat="bread in breadTables" ng-if="(bread.status)">
                        <div class="card-header p-2" ng-init="breadEnabled(1)">
                            <i class="fa fa-list-alt"></i>   [!! (bread.table).substr(0,1).toUpperCase() + (bread.table).substr(1).toLowerCase() !!]
                            <div class="pull-right">
                                <i class="fa fa-check-square-o [!! (bread.table) !!]-status-icon text-success" style="cursor: pointer" ng-click="updateStatus((bread.table), $index);"></i>
                            </div>
                        </div>
                    </div> 
                    <div class="alert alert-danger" ng-if="enabled == 0">
                        <i class="fa fa-warning"></i> There are no Enabled breads
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    Bread Disabled
                </div>
                <div class="card-body">
                    <div class="card mb-2" ng-repeat="bread in breadTables" ng-if="!(bread.status)" >
                        <div class="card-header p-2" ng-init="breadDisabled(1)">
                            <i class="fa fa-list-alt"></i>   [!! (bread.table).substr(0,1).toUpperCase() + (bread.table).substr(1).toLowerCase() !!]
                            <div class="pull-right">
                                <i class="fa fa-square-o [!! (bread.table) !!]-status-icon text-danger" style="cursor: pointer" ng-click="updateStatus((bread.table), $index);"></i>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger" ng-if="disabled == 0">
                        <i class="fa fa-warning"></i> There are no Disabled breads
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>





{{-- END Page Content --}}
@stop
@push('page-script')
<script type="text/javascript">
            let Setting = angular.module('Settings', []).config(function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[!!').endSymbol('!!]');
    });

    Setting.controller('UpdateBreadStatus', ['$scope', '$http', function ($scope, $http) {
            $scope.breadTables = JSON.parse('{!! json_encode(Ripple::tablesBreadWithStatus()) !!}');
            $scope.enabled = 0;
            $scope.disabled = 0;
            $scope.breadEnabled = function (increment) {
                $scope.enabled += increment;
            };
            $scope.breadDisabled = function (increment) {
                $scope.disabled += increment;
            };
            $scope.updateStatus = function (table, index) {
                $('.' + table + '-status-icon').removeClass('fa-check-square-o fa-square-o').toggleClass('fa-spinner fa-spin');
                $http.post('{!! route("Ripple::updateBreadStatus") !!}', {_token: '{!! csrf_token() !!}', table: table}).then(function (response, status) {
                    let data = response.data;
                    if (data.status === 'OK') {
                        $scope.breadTables[index].status = (!$scope.breadTables[index].status);
                        toastr.success(data.msg, 'SUCCESS!');
                    } else {
                        $('.' + table + '-status-icon').removeClass('fa-spinner fa-spin').toggleClass('fa-check-square-o fa-square-o');
                        toastr.error(data.msg, 'ERROR!');

                    }
                }, function (data, status) {
                    console.log(data, status);
                });
            };
        }]);

    /*
     * @functionDeclarations
     */

    function strReplaceAll(string, Find, Replace) {
        try {
            return string.replace(new RegExp(Find, "gi"), Replace);
        } catch (ex) {
            return string;
        }
    }
    function titleCase(str) {
        return str
                .toLowerCase()
                .split('_')
                .map(function (word) {
                    return word[0].toUpperCase() + word.substr(1);
                })
                .join(' ');
    }
</script>
@endpush