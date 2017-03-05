app.controller("detailCtrl", function ($http, $scope, $stateParams) {
    $scope.param1 = $stateParams.name;
    $scope.param2 = $stateParams.id;

    $http({method: 'GET', url: $scope.urlprod + 'get-product-by-shop-name-and-id?shop_name=sunshopseles&id=' + $scope.param2 + '&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.detailprods = response.data;
    }, function myError(response) {
        $scope.detailprods = response.statusText;
    });

    $http({method: 'GET', url: $scope.urlprod + 'get-all-by-shop-name?shop_name=sunshopseles&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.allprod = response.data;
    }, function myError(response) {
        $scope.allprod = response.statusText;
    });
    
    $http({method: 'GET', url: $scope.urlprod + 'get-all-product-by-shop-name-and-product-id-and-number-limit-return?shop_name=sunshopseles&id=' + $scope.param2 + '&limit=-1&language=vi-VN&is_return_array=0'
    }).then(function mySucces(response) {
        $scope.relatedprod = response.data;
    }, function myError(response) {
        $scope.relatedprod = response.statusText;
    });

})

