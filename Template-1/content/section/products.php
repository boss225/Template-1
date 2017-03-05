<div ng-controller="detailCtrl" ng-repeat="dp in detailprods" class="container detprod">
    <div class="row det1">
        <a href="#">Trang chủ</a> > 
        <a >{{dp.name_vi}}</a>
    </div>
    <div class="row det2">
        <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center">
            <img id="zoom1" src="{{imageslide + dp.image}}">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="#/chi-tiet/{{dp.name_seo_vi}}-{{dp.id}}">
                <h2>
                    {{dp.name_vi}}
                </h2>
            </a>
            <p>Tình trạng: 
                <strong ng-if="dp.still_in_store = 1">Còn hàng</strong>
                <strong ng-if="dp.still_in_store = 0">Tạm hết hàng</strong>
            </p>
            <i><span ng-if="dp.price_off_percent != 0">{{(dp.price_off_percent / 100 + 1)*dp.price_vn|currency:'':0}}đ</span></i>
            <h5>               
                {{dp.price_vn|currency:'':0}}đ
            </h5>
            <p ng-bind-html="dp.description_vi"></p>
<!--            <div>
                <b>SỐ LƯỢNG</b>
                <br/>
                <input type="number" name="quantity" id="quantity" min="1" value="1">
            </div>
            <md-button>THÊM VÀO GIỎ</md-button>-->

            <ngcart-addtocart id="{{dp.id}}" name="{{dp.name_vi}}" price="{{dp.price_vn}}" quantity="1" img="{{imageslide + dp.image}}">THÊM VÀO GIỎ</ngcart-addtocart>
        </div>
    </div>
    <br><br/>
    <div class="row">
        <div ng-cloak class="col-md-9">
            <md-content>
                <md-tabs md-dynamic-height md-border-bottom>
                    <md-tab label="THÔNG TIN SẢN PHẨM">
                        <md-content class="md-padding">
                            <p>Trang phục lịch sự, trang nhã, luôn đem lại phong cách thanh lịch. Tuy được sử dụng rộng rãi nhưng việc lựa chọn áo sơmi sao cho phù hợp với mỗi người thì không phải là chuyện nhỏ.</p>
                            <p>Những chiếc áo có màu truyền thống như trắng, đen hay xám rất dễ sử dụng trong nhiều hoàn cảnh khác nhau và dễ dàng kết hợp với các trang phục khác.</p>
                            <p>Nếu bạn có nhiều sơmi để thay đổi thì có thể mở rộng biên độ về màu sắc. Màu hồng nhạt được nam giới chọn khá nhiều. Tưởng chừng như màu đó chỉ dành cho phái nữ, thực ra sơmi nam màu hồng khi được phái nam diện sẽ tạo được ấn tượng và quan trọng là không hề mất đi vẻ nam tính.</p>
                            <p>Những chiếc áo kẻ sọc là lựa chọn rất tốt cho vẻ nam tính, mạnh mẽ. Chỉ cần nhớ một nguyên tắc: Những người gầy không nên mặc màu tối hay kẻ sọc to, người mập không nên chọn màu quá lòe loẹt, hoặc kẻ ngang, kẻ carô to.</p>
                            <p style="text-align: center"><img src="{{imageslide + dp.image}}"></p>
                            <p>Thương hiệu Tommy Hilfiger do nhà thiết kế cùng tên sáng lập năm 1985 với các dòng sản phẩm như: quần áo, trang phục thể thao, đồ Jeans, giày, túi xách, nước hoa, đồng hồ và mắt kính phục vụ cho giới trẻ nam nữ.</p>
                            <p>Các thiết kế của hãng rất đa dạng, từ những mẫu thiết kế cơ bản, cổ điển, đến thanh lịch và năng động.</p>
                            <p>Với ba màu sắc truyền thống là đỏ, trắng, và xanh dương đậm, Tommy Hilfiger đã trở thành một biểu tượng thương hiệu thời trang của Mỹ.</p>
                        </md-content>
                    </md-tab>
                    <md-tab label="THÔNG TIN THANH TOÁN">
                        <md-content class="md-padding">
                            <p>Bước 1: Truy cập website và lựa chọn sản phẩm cần mua để mua hàng</p>
                            <p>Bước 2: Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán </p>
                            <p>Bước 3: Lựa chọn thông tin tài khoản thanh toán Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản</p>
                            <p>Bước 4: Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình </p>
                            <p>Bước 5: Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn. Trân trọng cảm ơn.</p>
                        </md-content>
                    </md-tab>
                    <md-tab label="CHÍNH SÁCH VẬN CHUYỂN">
                        <md-content class="md-padding">
                            <p>Với mong muốn mang lại sự hài lòng cho quý khách khi mua hàng, chúng tôi có những quy định trong vận chuyển, nhằm đảm bảo rằng những sản phẩm quý khách mua là sản phẩm mà vừa ý nhất.
                                <br><br>1. Chúng tôi sẽ được thực hiện và chuyển phát dựa trên mẫu khách hàng đã chọn. Trường hợp không có đúng sản phẩm Quý khách yêu cầu chúng tôi sẽ gọi điện xác nhận gửi sản phẩm tương tự thay thế. 
                                <br><br>2. Thời gian chuyển phát tiêu chuẩn cho một đơn hàng là 12 giờ kể từ lúc đặt hàng. Chuyển phát sản phẩm đến các khu vực nội thành thành phố trên toàn quốc từ 4 giờ kể từ khi nhận hàng, chuyển phát ngay trong ngày đến các vùng lân cận (bán kính từ 10km – 50km). 
                                <br><br>3. Các đơn hàng gửi đi quốc tế: không đảm bảo thời gian được chính xác như yêu cầu, không đảm bảo thời gian nếu thời điểm chuyển phát trùng với các ngày lễ, tết và chủ nhật tại khu vực nơi đến. 
                                <br><br>4. Trường hợp không liên lạc được với người nhận, người nhận đi vắng: - Nếu chưa rõ địa chỉ chúng tôi sẽ lưu lại trong vòng 6 tiếng và liên lạc lại với người nhận, trong trường hợp ko liên lạc được đơn hàng sẽ bị hủy và không được hoàn lại thanh toán. - Nếu địa chỉ là công ty, văn phòng, nhà ở… Chúng tôi sẽ gửi đồng nghiệp, người thân nhận hộ và ký xác nhận - Để tại một nơi an toàn người nhận dễ nhận thấy tại nhà, văn phòng, công ty… Trường hợp này không có ký nhận. 
                                <br><br>5. Trường hợp người nhận không nhận đơn hàng: - Chúng tôi sẽ hủy bỏ đơn hàng. Trường hợp này sẽ không được hoàn trả thanh toán. 
                                <br><br>6. Trường hợp không đúng địa chỉ, thay đổi địa chỉ: - Không đúng địa chỉ: trường hợp sai địa chỉ chúng tôi sẽ lưu lại 6 tiếng và liên lạc với người gửi và người nhận để thỏa thuận về địa điểm, thời gian, nếu địa chỉ mới không quá 3km sẽ phát miễn phí. Trường hợp địa chỉ mới xa hơn 3km sẽ tính thêm phí theo quy định chuyển phát. 
                                <br><br>7. Trường hợp không tồn tại người nhận tại địa chỉ yêu cầu: đơn hàng sẽ được hủy và không được hoàn lại thanh toán. 8. Chúng tôi không vận chuyển sản phẩm đến các địa chỉ trên tàu hỏa, máy bay, tàu thủy, khu vực nguy hiểm, các khu vực cấm…</p>
                        </md-content>
                    </md-tab>
                </md-tabs>
            </md-content>
        </div>
        <div class="col-md-3 cancare">
            <h4>
                <strong>CÓ THỂ BẠN QUAN TÂM</strong>
            </h4>
            <ul class="list-group hidden-sm hidden-xs">
                <li class="list-group-item" ng-repeat="num in relatedprod">
                    <a href="#/chi-tiet/{{num.name_seo_vi}}-{{num.id}}"><img src="{{imageslide + num.image}}"></a>
                    <div>
                        <a href="#/chi-tiet/{{dp.name_seo_vi}}-{{dp.id}}"><h5><strong>{{num.name_vi}}</strong></h5></a>
                        <p ng-if="num.price_off_percent !== 0">{{(num.price_off_percent / 100 + 1)*num.price_vn|currency:'':0}}đ</p>
                        <b>{{num.price_vn|currency:'':0}}đ </b>
                    </div>
                </li>
            </ul>
            <ul class="row visible-sm visible-xs">
                <li class="col-sm-6 col-xs-6" ng-repeat="num in relatedprod">
                    <a href="#/chi-tiet/{{num.name_seo_vi}}-{{num.id}}"><img src="{{imageslide + num.image}}"></a>
                    <div>
                        <a href="#/chi-tiet/{{dp.name_seo_vi}}-{{dp.id}}"><h5><strong>{{num.name_vi}}</strong></h5></a>
                        <p ng-if="num.price_off_percent !== 0">{{(num.price_off_percent / 100 + 1)*num.price_vn|currency:'':0}}đ</p>
                        <b>{{num.price_vn|currency:'':0}}đ </b>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {

        $('#zoom1').zoom({magnify: 1.8});

    });

</script>