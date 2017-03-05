app.controller("allprodsCtrl", function ($http, $scope, $stateParams) {
    $scope.param3 = $stateParams.name;
    $scope.param4 = $stateParams.name1;
    $scope.param5 = $stateParams.id;
    $scope.param6 = $stateParams.lv;
    $scope.param7 = $stateParams.key;

    $http({method: 'GET', url: $scope.urlcategory+'get-all-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.alldm = response.data;
    }, function myError(response) {
        $scope.alldm = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod+'get-all-by-shop-name-and-is-sellest?shop_name=sunshopseles&is_sellest=1&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.prodseles = response.data;
    }, function myError(response) {
        $scope.prodseles = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod+'get-all-by-shop-name-and-is-promote?shop_name=sunshopseles&is_promote=1&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.seleoff = response.data;
    }, function myError(response) {
        $scope.seleoff = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlsearchprods+'get-all-keyword-orientate-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.keywords = response.data;
    }, function myError(response) {
        $scope.keywords = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod+'get-all-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.allprods = response.data;
    }, function myError(response) {
        $scope.allprods = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlprod+'get-all-by-shop-name-and-category-id-and-level?shop_name=sunshopseles&category_id='+$scope.param5+'&level='+$scope.param6+'&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.deltailcatolog = response.data;
    }, function myError(response) {
        $scope.deltailcatolog = response.statusText;
    });
    $http({method: 'GET', url: $scope.urlsearchprods+'search-all-by-shop-name-and-keyword?shop_name=sunshopseles&keyword_enter='+$scope.param7+'&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.searchprods = response.data;
    }, function myError(response) {
        $scope.searchprods = response.statusText;
    });
    
});

