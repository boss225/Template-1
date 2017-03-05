<div ng-controller="headerCtrl">
    <div class="signinout">
        <div class="container"><a>ĐĂNG NHẬP</a> <a>ĐĂNG KÝ</a></div>
    </div>
    <div class="logoshop">
        <div class="container">
            <div class="col-md-6 col-sm-5 col-xs-12">
                <a ui-sref="home"><img src="{{imageslide + logoshop.company_logo}}"></a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" ng-model="keys" required>
                        <span class="input-group-btn">
                            <a class="btn defaul" href="#/tim-kiem/{{keys}}" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12 dropdown">
                <ngcart-summary></ngcart-summary>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a ui-sref="home">TRANG CHỦ </a></li>
                    <li><a ui-sref="about">GIỚI THIỆU</a></li>
                    <li><a href="#/danh-muc/all">SẢN PHẨM </a></li>
                    <li><a ui-sref="error404">TIN TỨC</a></li>
                    <li><a ui-sref="contact">LIÊN HỆ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container main-server">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <p><span class="fa fa-money" aria-hidden="true"></span>Thanh toán linh hoạt</p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <p><span class="fa fa-truck" aria-hidden="true"></span>Giao hàng miễn phí</p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <p><span class="fa fa-exchange" aria-hidden="true"></span>Trả hàng trong 30 ngày</p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <p><span class="fa fa-tty" aria-hidden="true"></span>Hotline: 04 6674 2332</p>
        </div>
    </div>
</div>

<script type="text/ng-template" id="template/ngCart/summary.html">
    <a class="shoppingcart dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-opencart fa-2x" aria-hidden="true"></i>
        <div>{{ ngCart.getTotalItems() }}
            <ng-pluralize count="ngCart.getTotalItems()" when="{1: 'Sản phẩm', 'other':'Sản phẩm'}"></ng-pluralize>
        </div>
    </a>
    <ul class="dropdown-menu">
        <table class="ngCart cart">
            <tr ng-repeat="item in ngCart.getCart().items track by $index">             
                <td>
                    
                        <img src="{{item.getImg()}}" class="img-responsive" style="float:left; width:50px">
                     
                    <div>
                        <p>{{ item.getName()}}</p>
                        <small>Số lượng: {{ item.getQuantity() | number}}</smaill>                      
                    </div>
                </td>
                <td style="color:#01c4c4">{{ item.getTotal() | currency:'':0}}đ</td>
                <td style="width: 1%"><span ng-click="ngCart.removeItemById(item.getId())" class="glyphicon glyphicon-remove"></span></td>
            </tr>
        </table>
        <div style="text-align:right">
            <h5><strong>Tổng tiền: {{ ngCart.totalCost() | currency:'':0 }}đ</strong></h5>
            <div>
                <a class="w3-btn w3-light-grey w3-hover-teal">Thanh toán</a>
                <a ui-sref="cart" class="w3-btn w3-light-grey w3-hover-teal">Giỏ hàng</a>
            </div>
        </div>
    </ul>
</script>
