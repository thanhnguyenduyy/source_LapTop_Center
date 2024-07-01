<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TypeProductTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ReviewProductTableSeeder::class);
        $this->call(ImageProductTableSeeder::class);
        $this->call(CategoryNewsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(BillTableSeeder::class);
        $this->call(BillDetailTableSeeder::class);
    }
}

class BillDetailTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bill_detail')->insert([
            'id_bill' => 2,
            'id_product' => 2,
            'quantity' => 1,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 2,
            'id_product' => 6,
            'quantity' => 2,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 2,
            'id_product' => 3,
            'quantity' => 3,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 3,
            'id_product' => 3,
            'quantity' => 3,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 3,
            'id_product' => 5,
            'quantity' => 4,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 4,
            'id_product' => 3,
            'quantity' => 6,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 5,
            'id_product' => 1,
            'quantity' => 7,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 6,
            'id_product' => 1,
            'quantity' => 11,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 7,
            'id_product' => 3,
            'quantity' => 1,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
    }
}

class BillTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bill')->insert([
            'id_users' => 1,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 1,
        ]);
        DB::table('bill')->insert([
            'id_users' => 2,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 1,
        ]);
        DB::table('bill')->insert([
            'id_users' => 3,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 0,
        ]);
        DB::table('bill')->insert([
            'id_users' => 4,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 0,
        ]);
        DB::table('bill')->insert([
            'id_users' => 7,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 1,
        ]);
        DB::table('bill')->insert([
            'id_users' => 8,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 0,
        ]);
    }
}

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            'id_category_new' => 1,
            'title' => 'Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu',
            'info' => 'Dù không có sự thay đổi về ngoại hình nhưng việc đem màn hình OLED đến sản phẩm này giúp cho người dùng có một trải nghiệm hoàn toàn mới mẻ.',
            'content' => '<p>ZenBook l&agrave; d&ograve;ng laptop hướng đến người d&ugrave;ng trẻ đề cao t&iacute;nh thẩm mỹ v&agrave; nh&acirc;n vi&ecirc;n văn ph&ograve;ng kh&aacute; quen thuộc của nh&agrave; sản xuất ASUS. Trải qua nhiều năm cải tiến, giờ đ&acirc;y d&ograve;ng ZenBook Series n&agrave;y đ&atilde; c&oacute; được một lượng lớn người d&ugrave;ng tr&ecirc;n to&agrave;n thế giới n&oacute;i chung lẫn Việt Nam n&oacute;i ri&ecirc;ng. Vậy phi&ecirc;n bản 2021 n&agrave;y c&oacute; g&igrave; đặc biệt? H&atilde;y c&ugrave;ng ch&uacute;ng t&ocirc;i t&igrave;m hiểu.</p>
 
            <p><strong>Thiết kế thanh lịch, phụ kiện k&egrave;m theo c&oacute; cả t&uacute;i đựng</strong></p>
            
            <p>ZenBook UX325 được nh&agrave; sản xuất kho&aacute;c l&ecirc;n cho lớp &aacute;o thanh lịch v&agrave; cao cấp. Ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n, ch&uacute;ng ta c&oacute; thể thấy m&aacute;y to&aacute;t l&ecirc;n vẻ cứng c&aacute;p v&agrave; pha ch&uacute;t lạnh l&ugrave;ng nhờ sử dụng vật liệu kim loại cho vỏ ngo&agrave;i. Kiểu d&aacute;ng gọn nhẹ, chỉ với 1,14kg c&ugrave;ng độ mỏng ấn tượng 13,9mm, cũng l&agrave; ưu điểm của d&ograve;ng sản phẩm n&agrave;y. Hay n&oacute;i c&aacute;ch kh&aacute;c, n&oacute; rất cơ động để c&oacute; thể mang lại khắp nơi một c&aacute;ch thoải m&aacute;i v&agrave; đặc biệt vẫn cung cấp đầy đủ c&aacute;c cổng kết nối n&ecirc;n người d&ugrave;ng cũng kh&ocirc;ng cần vướng bận đến việc mang theo c&aacute;c bộ chuyển đổi.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-1-1630292504889457794582.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-1-1630292504889457794582.jpg" /></a></p>
            
            <p>Nếu lo ngại việc mảnh mai của chiếc m&aacute;y n&agrave;y sẽ ảnh hưởng đến độ bền th&igrave; người d&ugrave;ng c&oacute; thể an t&acirc;m v&igrave; m&aacute;y UX325 n&agrave;y cũng đ&atilde; trải qua nhiều b&agrave;i kiểm tra độ bền ti&ecirc;u chuẩn qu&acirc;n đội MIL-STD-810G. Chuẩn n&agrave;y cũng được &aacute;p dụng cho phi&ecirc;n bản trước v&agrave; cũng đ&atilde; được chứng thực với người d&ugrave;ng trong thời gian d&agrave;i. Kh&ocirc;ng chỉ chống chịu va đập, m&aacute;y c&ograve;n c&oacute; khả năng tồn tại trong nhiệt độ m&ocirc;i trường khắc nghiệt v&agrave; độ ẩm cao.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-1-1630292508418144812219.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-1-1630292508418144812219.jpg" /></a></p>
            
            <p><strong>Cải tiến lớn nằm ở m&agrave;n h&igrave;nh OLED - điểm đ&aacute;ng tiền của d&ograve;ng sản phẩm năm nay</strong></p>
            
            <p>V&agrave;o đầu năm nay, ASUS ra mắt chiếc ZenBook Flip 13 UX363 với m&agrave;n h&igrave;nh OLED v&agrave; cho biết sẽ cố gắng phổ cập c&ocirc;ng nghệ m&agrave;n h&igrave;nh t&acirc;n tiến n&agrave;y đến với người d&ugrave;ng nhiều hơn th&ocirc;ng qua c&aacute;c d&ograve;ng sản phẩm laptop sắp tới.</p>
            
            <p>Giữ đ&uacute;ng lời hứa, phi&ecirc;n bản ZenBook UX325 lần n&agrave;y l&agrave; một trong số những chiếc laptop được n&acirc;ng cấp c&ocirc;ng nghệ m&agrave;n h&igrave;nh OLED với k&iacute;ch thước 13 inch v&agrave; độ ph&acirc;n giải Full HD. Vậy v&igrave; sao ASUS lại quyết t&acirc;m đưa OLED l&ecirc;n c&aacute;c sản phẩm laptop của họ trong năm nay?</p>
            
            <p>1. Điều đầu ti&ecirc;n cần phải giới thiệu rằng OLED l&agrave; c&ocirc;ng nghệ m&agrave;n h&igrave;nh được xem l&agrave; &quot;hot&quot; hiện nay d&agrave;nh cho người d&ugrave;ng cuối. M&agrave;u sắc lu&ocirc;n l&agrave; vấn đề được người d&ugrave;ng quan t&acirc;m h&agrave;ng đầu mỗi khi lựa chọn một chiếc laptop v&agrave; OLED được cam kết mang đến độ chuẩn x&aacute;c m&agrave;u kh&aacute; cao. Cũng theo ASUS, chiếc laptop n&agrave;y đ&aacute;p ứng được 100% dải m&agrave;u DCI-P3, gi&uacute;p ch&uacute;ng ta c&oacute; thể xem được những thước phim điện ảnh ch&acirc;n thật v&agrave; đ&uacute;ng với &yacute; đồ của đạo diễn hơn.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-2-16302925084191738286845.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-2-16302925084191738286845.jpg" /></a></p>
            
            <p>2. OLED cũng giảm tới 70% lượng &aacute;nh s&aacute;ng xanh g&acirc;y hại cho mắt đươc chứng nhận bởi hiệp hội TUV Rheinland. Thời điểm hiện tại ch&uacute;ng ta l&agrave;m việc Work From Home v&agrave; chắc chắn mắt ch&uacute;ng ta sẽ &quot;d&iacute;nh&quot; rất nhiều thời gian với chiếc m&aacute;y t&iacute;nh hơn l&agrave; l&uacute;c trước ở c&ocirc;ng ty. Vậy n&ecirc;n việc bảo vệ mắt rất quan trọng trong thời gian n&agrave;y, l&agrave;m việc được thoải m&aacute;i hơn v&agrave; hơn nữa, &aacute;nh s&aacute;ng xanh cũng khiến buổi đ&ecirc;m ch&uacute;ng ta kh&oacute; ngủ hơn, v&igrave; vậy việc giảm bớt lượng n&agrave;y sẽ gi&uacute;p cho giấc ngủ của bản th&acirc;n cũng được chất lượng hơn. Ngo&agrave;i ra, với đối tượng người d&ugrave;ng trẻ như học sinh, sinh vi&ecirc;n, thời gian n&agrave;y cũng l&agrave; l&uacute;c học online rất nhiều th&ocirc;ng qua m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh, v&igrave; vậy lựa chọn một chiếc m&aacute;y c&oacute; m&agrave;n h&igrave;nh OLED cũng l&agrave; điều cần thiết để bảo vệ mắt.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-3-16302925084201209730949.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-3-16302925084201209730949.jpg" /></a></p>
            
            <p>3. M&agrave;n h&igrave;nh OLED cho h&igrave;nh ảnh r&otilde; r&agrave;ng v&agrave; sắc n&eacute;t ở mọi độ s&aacute;ng, hay n&oacute;i c&aacute;ch kh&aacute;c, d&ugrave; ở độ s&aacute;ng thấp nhất th&igrave; h&igrave;nh ảnh vẫn được thể hiện r&otilde; r&agrave;ng v&agrave; chi tiết. Với LCD truyền thống, chất lượng chi tiết v&agrave; m&agrave;u sắc sẽ bị giảm đ&aacute;ng kể khi ch&uacute;ng ta hạ độ s&aacute;ng, tuy nhi&ecirc;n với OLED trang bị tr&ecirc;n d&ograve;ng laptop ASUS sẽ vẫn đảm bảo chất lượng cho h&igrave;nh ảnh đầu ra. Cũng nhờ vậy, người d&ugrave;ng khi l&agrave;m việc trong buổi đ&ecirc;m cũng thoải m&aacute;i hơn, kh&ocirc;ng cần tăng độ s&aacute;ng qu&aacute; nhiều để thấy c&aacute;c chi tiết trong v&ugrave;ng tối v&agrave; cũng nhờ đ&oacute; đỡ ch&oacute;i mắt, hại mắt hơn.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-4-1630292508422453799656.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-4-1630292508422453799656.jpg" /></a></p>
            
            <p>C&aacute;ch thể hiện m&agrave;u đen của m&agrave;n h&igrave;nh OLED tr&ecirc;n ZenBook UX325 rất s&acirc;u, kh&ocirc;ng c&ograve;n cảm gi&aacute;c nhờ nhờ x&aacute;m như c&aacute;c d&ograve;ng m&agrave;n h&igrave;nh kh&aacute;c tr&ecirc;n thị trường.</p>
            
            <p>4. B&ecirc;n cạnh đ&oacute;, OLED tr&ecirc;n ZenBook UX325 cũng cho độ tương phản rất cao, đạt chuẩn HDR 500 True Black mang đến trải nghiệm điện ảnh ho&agrave;n to&agrave;n kh&aacute;c biệt v&agrave; c&oacute; thể thấy được nhiều chi tiết tối nhất của một bộ phim.</p>
            
            <p>5. Cuối c&ugrave;ng, UX325 c&oacute; thời gian phản hồi 0,2ms nhờ c&ocirc;ng nghệ m&agrave;n h&igrave;nh OLED. Nhờ thời gian phản hồi cực thấp n&ecirc;n những pha h&agrave;nh động nhịp độ nhanh trong phim sẽ mượt m&agrave; hơn, thậm ch&iacute; khi cuộn văn bản cũng kh&ocirc;ng g&acirc;y hiện tượng mờ chữ kh&oacute; chịu cho mắt, ph&ugrave; hợp với người d&ugrave;ng văn ph&ograve;ng.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-5-16302925084231152783012.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 6." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-5-16302925084231152783012.jpg" /></a></p>
            
            <p>Độ phản hồi nhanh sẽ gi&uacute;p việc lướt văn bản hay xem phim được mượt m&agrave; hơn, giảm thiểu t&igrave;nh trạng b&oacute;ng mờ.</p>
            
            <p><strong>Những điểm nổi bật kh&aacute;c bạn cần biết</strong></p>
            
            <p>Ngo&agrave;i m&agrave;n h&igrave;nh OLED s&aacute;ng gi&aacute;, những điểm kh&aacute;c của chiếc laptop n&agrave;y cũng đ&aacute;ng được quan t&acirc;m. Trước hết l&agrave; bản lề ErgoLift đặc sản của nh&agrave; ASUS gi&uacute;p n&acirc;ng b&agrave;n ph&iacute;m l&ecirc;n một g&oacute;c nghi&ecirc;ng, tạo cảm gi&aacute;c g&otilde; thoải m&aacute;i hơn cũng như tản nhiệt tốt hơn ở khu vực đ&aacute;y m&aacute;y.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-6-1630292508425252778343.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 7." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-6-1630292508425252778343.jpg" /></a></p>
            
            <p>B&ecirc;n cạnh đ&oacute;, tuy m&aacute;y kh&aacute; mỏng nhưng b&agrave;n ph&iacute;m vẫn tạo cảm gi&aacute;c g&otilde; rất tốt, h&agrave;nh tr&igrave;nh ph&iacute;m vừa đủ v&agrave; k&iacute;ch thước ph&iacute;m c&ugrave;ng k&yacute; tự in to r&otilde; gi&uacute;p việc g&otilde; cũng dễ d&agrave;ng hơn, kh&ocirc;ng bị nhầm trong qu&aacute; tr&igrave;nh thao t&aacute;c. Đặc biệt, phần TouchPad c&oacute; th&ecirc;m khả năng hiển thị b&agrave;n ph&iacute;m số ảo th&ocirc;ng qua đ&egrave;n LED với t&ecirc;n gọi NumberPad 2.0.</p>
            
            <p>Về cấu h&igrave;nh, m&aacute;y được trang bị vi xử l&yacute; Intel Core i7 thế hệ 11 mới nhất, k&egrave;m theo đ&oacute; l&agrave; 16GB RAM c&ugrave;ng SSD 512GB v&agrave; GPU Intel Iris Xe gi&uacute;p xử l&yacute; đa t&aacute;c vụ hoặc chơi game nhẹ nh&agrave;ng vẫn đảm bảo được độ mượt m&agrave; nhất.</p>
            
            <p>Cuối c&ugrave;ng, nhờ ứng dụng m&agrave;n h&igrave;nh OLED n&ecirc;n m&aacute;y đ&atilde; giảm bớt g&aacute;nh nặng về điện năng ti&ecirc;u thụ, cũng v&igrave; thế laptop c&oacute; thể đ&aacute;p ứng được thời lượng sử dụng l&ecirc;n đến 13 tiếng, tức gi&uacute;p cho người d&ugrave;ng c&oacute; thể sử dụng cả ng&agrave;y m&agrave; kh&ocirc;ng qu&aacute; bận t&acirc;m đến chuyện sạc pin. B&ecirc;n cạnh đ&oacute;, ASUS ZenBook UX325 cũng trang bị c&ocirc;ng nghệ sạc nhanh, cho ph&eacute;p nạp pin l&ecirc;n đến 60% chỉ trong v&ograve;ng 49 ph&uacute;t.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-7-16302925084261584047174.jpg" target="_blank"><img alt="Trải nghiệm ASUS ZenBook UX325: Nâng cấp lên màn hình OLED khiến chiếc máy đáng từng xu - Ảnh 8." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-7-16302925084261584047174.jpg" /></a></p>
            
            <p>Tổng kết lại, ASUS ZenBook UX325 xứng đ&aacute;ng l&agrave; một chiếc laptop ti&ecirc;n phong trong ph&acirc;n kh&uacute;c người d&ugrave;ng văn ph&ograve;ng, tạo một tr&agrave;o lưu mới cho việc &aacute;p dụng m&agrave;n h&igrave;nh OLED đến gần mọi người hơn. D&ugrave; kh&ocirc;ng thay đổi về mặt thiết kế nhưng việc n&acirc;ng cấp m&agrave;n h&igrave;nh chất lượng cao c&ugrave;ng cấu h&igrave;nh tốt đ&atilde; khiến chiếc m&aacute;y n&agrave;y trở n&ecirc;n đ&aacute;ng từng đồng xu hơn bao giờ hết.</p>',
            'image' => '6nKi_banner17.jpg',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 1,
            'title' => 'Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn',
            'info' => 'Đây là một tầm giá "vừa phải", không quá thấp để phải mua những laptop chất lượng thấp nhưng cũng không vượt quá budget của đa số người dùng!',
            'content' => '<p>Trong t&igrave;nh h&igrave;nh gi&atilde;n c&aacute;ch x&atilde; hội, nhu cầu học tập v&agrave; l&agrave;m việc tại nh&agrave; ng&agrave;y c&agrave;ng tăng cao v&agrave; k&eacute;o theo l&agrave; việc nhiều bạn muốn n&acirc;ng cấp hoặc mua mới laptop. Nếu bạn đang trong qu&aacute; tr&igrave;nh &quot;đi săn&quot; một chiếc laptop d&agrave;nh cho m&igrave;nh trong tầm gi&aacute; 15 triệu Đồng, h&atilde;y để WeBuy đưa ra một v&agrave;i lựa chọn chất lượng cao v&agrave; đang được giảm gi&aacute;.</p>
 
            <p>Mua laptop trong mức gi&aacute; 15 triệu Đồng, ta kh&oacute; c&oacute; thể đ&ograve;i hỏi được m&aacute;y với cấu h&igrave;nh cao cấp nhất hay c&oacute; thiết kế&nbsp;<em>&quot;si&ecirc;u sang xịn mịn&quot;</em>, nhưng vẫn đủ để t&igrave;m được những d&ograve;ng m&aacute;y c&oacute; cấu h&igrave;nh đủ d&ugrave;ng với Intel Core i3 - i5, m&agrave;n h&igrave;nh 14 - 15.6 inch FullHD v&agrave; một thiết kế cứng c&aacute;p kết hợp giữa nhựa v&agrave; nh&ocirc;m.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://shopee.vn/Laptop-Acer-Aspire-5-A514-54-38TM-14FHDIPS-i3-1115G4-4OB-256-PCIe-AX-Backlit-KB-Win-M%C3%A0u-Sliver-i.270156897.3053594313?position=63" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 1." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-7-16301218243991340397633.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://tiki.vn/may-tinh-xach-tay-laptop-huawei-matebook-d15-8gb-256gb-share-man-hinh-huawei-fullview-huawei-phim-nguon-ket-hop-bao-mat-van-tay-hang-chinh-hang-p74556865.html" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 2." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-1630121824414861559481.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.hanoicomputer.vn/laptop-hp-probook-445-g6-6xp98pa-ryzen-5-2500u-4gb-ram-1tb-hdd-radeon-rx-vega-14-inch-fhd-dos" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 3." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-2-1630121824349313142917.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.hanoicomputer.vn/laptop-lenovo-ideapad-3-14itl6-82h700d6vn-xanh" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 4." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-4-16301218243662115579326.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.phucanh.vn/laptop-dell-inspiron-3501-nk5ck-laptop-van-phong-gia-canh-tranh.html" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 5." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-3-1630121824363627184244.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.anphatpc.com.vn/laptop-asus-x415ja-ek259t-core-i5-1035g1-4gb-512gb-intel-uhd-14.0-inch-fhd-win-10-bac_id37560.html" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 6." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-5-16301218243761993265293.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.anphatpc.com.vn/laptop-msi-modern-14-b11mo-682vn-core-i3-1115g4-8gb-256gb-intel-uhd-14-inch-fhd-win-10-blue-stone_id38901.html" target="_blank"><img alt="Loạt laptop đang sale trong tầm giá 15 triệu: Quá nhiều lựa chọn, đã rẻ nay còn rẻ hơn - Ảnh 7." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-6-163012182438021924247.jpg" /></a></p>',
            'image' => 'vl5z_1.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 2,
            'title' => 'Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui',
            'info' => 'Trở lại trường học với tinh thần phấn khởi cùng loại phụ kiện, đồ chơi công nghệ giá bèo must have cho học sinh, sinh viên.',
            'content' => '<p><strong>M&oacute;n đầu ti&ecirc;n n&ecirc;n l&ecirc;n đời cho dịp Back to School ch&iacute;nh l&agrave; chiếc laptop cũ kĩ. Hiện tại gi&aacute; laptop đang rẻ chưa từng thấy c&ugrave;ng sự xuất hiện của d&ograve;ng chip Ryzen mới hiệu năng mạnh mẽ, c&aacute;c bạn trẻ sẽ được d&ugrave;ng m&aacute;y xịn hơn, nhanh hơn m&agrave; tiết kiệm kha kh&aacute; so với laptop chip Intel.</strong></p>
 
            <p>&nbsp;</p>
            
            <p><em><a href="https://gearvn.com/products/laptop-asus-d515da-ej711t" target="_blank"><img alt="Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui - Ảnh 2." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist14-1629226369411575133612.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://gearvn.com/products/laptop-ideapad-5-14alc05-82lm00d5vn" target="_blank"><img alt="Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui - Ảnh 3." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist17-16292266179111232863193.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p><strong>Chiếc điện thoại đời cổ chậm chạp cũng n&ecirc;n được thay thế, v&agrave; hai option &quot;ngon&quot; nhất hiện tại c&oacute; POCO X3 Pro gi&aacute; chỉ dưới 6 triệu m&agrave; cấu h&igrave;nh si&ecirc;u mạnh, hoặc nếu muốn trải nghiệm những t&iacute;nh năng cao cấp th&igrave; khoảng 12 triệu đ&atilde; mua được Galaxy Note 10 sang chảnh rồi.</strong></p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://clickbuy.com.vn/xiaomi-poco-x3-pro-chinh-hang/" target="_blank"><img alt="Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui - Ảnh 4." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist10-16292263693782122926496.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://tiki.vn/dien-thoai-samsung-galaxy-note-10-256gb-8gb-hang-chinh-hang-p22356225.html?spid=22356228" target="_blank"><img alt="Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui - Ảnh 5." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist11-16292263693441687910346.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p><strong>Tai nghe kh&ocirc;ng d&acirc;y giờ cũng rất rẻ rồi, chỉ v&agrave;i trăm ngh&igrave;n l&agrave; mua được h&agrave;ng chất lượng. Bạn n&agrave;o th&iacute;ch chống ồn thật ngon c&oacute; thể thử đầu tư hẳn mẫu tai mới từ JBL đảm bảo kh&ocirc;ng thất vọng.</strong></p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://cellphones.com.vn/tai-nghe-bluetooth-oppo-enco-buds-w12.html" target="_blank"><img alt="Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui - Ảnh 6." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist15-16292263694431929713455.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://cellphones.com.vn/tai-nghe-khong-day-jbl-live-pro-plus.html" target="_blank"><img alt="Mùa Back to School lại tới, đây là 8 món đồ học sinh, sinh viên nên sắm để học hành, giải trí đều vui - Ảnh 7." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist16-1629226369363427778238.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>',
            'image' => 'HkYX_2.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 4,
            'title' => 'Mùa tựu trường đã rất gần, các bạn sinh viên hãy chọn 1 trong 5 laptop này để phục vụ học tập và giải trí',
            'info' => 'Dù có học tập tại trường hay ở nhà, laptop vẫn là "vật bất ly thân" với bất cứ bạn học sinh, sinh viên nào!',
            'content' => '<h3>Nắm bắt nhu cầu đ&oacute;, Asus đ&atilde; ra mắt hai mẫu laptop mới ASUS ExpertBook B1 với hai phi&ecirc;n bản B1400 (m&agrave;n h&igrave;nh 14 inch) v&agrave; B1500 (m&agrave;n h&igrave;nh 15.6 inch), thuộc ph&acirc;n kh&uacute;c Thiết Yếu d&agrave;nh cho c&aacute;c doanh nghiệp vừa &amp; nhỏ tại Việt Nam. Đ&acirc;y l&agrave; phi&ecirc;n bản hậu duệ, với mức gi&aacute; dễ tiếp cận hơn nhưng thừa hưởng nhiều ưu điểm của chiếc ExpertBook B9 đang l&agrave;m mưa l&agrave;m gi&oacute; ở ph&acirc;n kh&uacute;c Laptop d&agrave;nh cho Doanh nh&acirc;n, Nh&agrave; quản l&yacute;.</h3>
 
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/14/ava-1628914655060846405650.png" /></p>
            
            <p><strong>Mạnh mẽ, dễ d&agrave;ng n&acirc;ng cấp gi&uacute;p tối ưu chi ph&iacute; đầu tư ban đầu</strong></p>
            
            <p>Ng&ocirc;n ngữ thiết kế của ExpertBook B1 giữ bản sắc chuy&ecirc;n nghiệp, thanh lịch, sang trọng của d&ograve;ng ExpertBook. Đặc biệt, phần nắp m&aacute;y được ho&agrave;n thiện bằng hợp kim nh&ocirc;m đi c&ugrave;ng chất lượng gia c&ocirc;ng chắc chắn mang lại x&uacute;c gi&aacute;c, độ bền cũng như ngoại h&igrave;nh rất cao cấp. Ch&uacute;ng ta sẽ c&oacute; những chiếc Laptop nặng hơn một ch&uacute;t so với ExpertBook B9 nhưng vẫn đảm bảo t&iacute;nh di động (chỉ 1,45kg), đổi lại l&agrave; card đồ hoạ rời v&agrave; khả năng n&acirc;ng cấp RAM, ổ cứng.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-162884676854078379359.jpg" /></p>
            
            <p>ExpertBook B1 bản 15 inch với b&agrave;n ph&iacute;m số T9</p>
            
            <p>Cả hai phi&ecirc;n bản 14 v&agrave; 15 inch của ExpertBook B1 đều được trang bị vi xử l&yacute; Intel thế hệ 11 mới nhất, t&ugrave;y chọn card đồ họa rời Nvidia MX330, khả năng n&acirc;ng cấp RAM linh hoạt tối đa đến 48GB, giải ph&aacute;p lưu trữ k&eacute;p với 1 SSD PCIe + ổ cứng 2,5&quot;.</p>
            
            <p>C&oacute; thể thấy ExpertBook B1 series mang lại khả năng n&acirc;ng cấp v&agrave; thay đổi rất linh hoạt. Bạn hay doanh nghiệp của bạn kh&ocirc;ng cần phải bỏ ra chi ph&iacute; đầu tư ban đầu qu&aacute; lớn, nhưng vẫn c&oacute; khả năng n&acirc;ng cấp, mở rộng trong tương lai. Điều n&agrave;y lại c&agrave;ng trở n&ecirc;n &yacute; nghĩa trong thời điểm kinh tế gặp nhiều bất ổn như hiện nay.</p>
            
            <p><strong>Khả năng kết nối đa dạng v&agrave; đầy đủ</strong></p>
            
            <p>Kh&ocirc;ng giống như những nh&agrave; sản xuất kh&aacute;c, hi sinh sự tiện dụng của người d&ugrave;ng khi loại bỏ c&aacute;c cổng kết nối, ASUS ExpertBook B1 trang bị đầy đủ c&aacute;c cổng kết nối như USB-A, HDMI, VGA, RJ45 (mạng Lan), đầu đọc thẻ nhớ MicroSD cho đến USB-C hỗ trợ truyền điện năng cũng như xuất h&igrave;nh ảnh. Nhờ đ&oacute;, ExpertBook B1 mang lại khả năng kết nối với c&ugrave;ng l&uacute;c 3 m&agrave;n h&igrave;nh ngo&agrave;i, cũng như kết nối với hầu hết c&aacute;c m&aacute;y m&oacute;c trong m&ocirc;i trường c&ocirc;ng sở, sản xuất.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-1628846773689270250684.jpg" /></p>
            
            <p>M&aacute;y được trang bị đầy đủ c&aacute;c cổng kết nối cho nhu cầu l&agrave;m việc đa nhiệm</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>M&ocirc;i trường l&agrave;m việc tại nh&agrave; với c&aacute;c cuộc họp trực tuyến cũng được ASUS t&iacute;nh to&aacute;n v&agrave; tối ưu cho ExpertBook B1 với webcam độ ph&acirc;n giải cao, 2 microphone thu &acirc;m 360 độ kết hợp c&ocirc;ng nghệ khử ồn th&ocirc;ng minh ASUS AI Noise-Cancelling cho chất lượng đ&agrave;m thoại tốt trong mọi m&ocirc;i trường.</p>
            
            <p><strong>Bền bỉ v&agrave; bảo mật</strong></p>
            
            <p>Nhằm hỗ trợ người d&ugrave;ng l&agrave;m việc bền bỉ trong mọi m&ocirc;i trường từ văn ph&ograve;ng, xưởng sản xuất cho tới gia đ&igrave;nh c&oacute; trẻ em, c&aacute;c kĩ sư của ASUS đ&atilde; thiết kế ExpertBook B1 vượt ti&ecirc;u chuẩn độ bền của Qu&acirc;n đội Mỹ. Nắp m&aacute;y của Expert Book B1 được l&agrave;m bằng hợp kim nh&ocirc;m, b&agrave;n ph&iacute;m c&oacute; khả năng chống tr&agrave;n gi&uacute;p chiếc m&aacute;y c&ugrave;ng dữ liệu của bạn c&oacute; thể an to&agrave;n sau những c&uacute; rơi hay những pha v&ocirc; &yacute; đổ nước, cafe l&ecirc;n b&agrave;n ph&iacute;m.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-2-16288467736911709313938.jpg" /></p>
            
            <p>M&aacute;y vẫn đảm bảo t&iacute;nh di động với trọng lượng chỉ 1.45 kg.</p>
            
            <p>Ngo&agrave;i ra, trong thời đại &quot;dữ liệu l&agrave; v&agrave;ng&quot;, khả năng bảo mật tr&ecirc;n ExpertBook B1 cũng được ASUS d&agrave;nh nhiều t&acirc;m huyết với cảm biến v&acirc;n tay một chạm t&iacute;ch hợp trong n&uacute;t nguồn, chip TPM 2.0 v&agrave; ứng dụng bảo mật đi k&egrave;m ASUS Business Manager. Nhờ đ&oacute;, m&aacute;y c&oacute; khả năng m&atilde; h&oacute;a, bảo vệ dữ liệu, kh&oacute;a c&aacute;c cổng kết nối vật l&yacute; một c&aacute;ch nhanh ch&oacute;ng khi ph&aacute;t hiện nguy cơ r&ograve; rỉ dữ liệu. Đặc biệt, webcam được trang bị tấm che vật l&yacute;, đảm bảo an to&agrave;n cho h&igrave;nh ảnh c&aacute; nh&acirc;n của người d&ugrave;ng, hạn chế ho&agrave;n to&agrave;n khả năng lộ h&igrave;nh ảnh nhạy cảm, đặc biệt hữu &iacute;ch khi l&agrave;m việc tại nh&agrave;.</p>
            
            <p><strong>Chế độ bảo h&agrave;nh cao cấp v&agrave; linh hoạt</strong></p>
            
            <p>D&ograve;ng sản phẩm &quot;thửa ri&ecirc;ng&quot; doanh nghiệp n&agrave;y c&ograve;n đi k&egrave;m chế độ bảo h&agrave;nh cao cấp từ ASUS với thời gian bảo h&agrave;nh tuỳ chọn từ 1-5 năm, dịch vụ bảo h&agrave;nh tận nơi, giao nhận h&agrave;ng tận nơi. Đặc biệt t&ugrave;y chọn giữ lại ổ cứng bị lỗi cho ph&eacute;p doanh nghiệp đảm bảo an to&agrave;n, bảo mật dữ liệu kinh doanh.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-3-16288467736921192717538.jpg" /></p>
            
            <p>M&aacute;y cũng ph&ugrave; hợp với gi&aacute;o vi&ecirc;n, học sinh, sinh vi&ecirc;n.</p>
            
            <p>C&oacute; thể n&oacute;i, ASUS ExpertBook B1 l&agrave; mảnh gh&eacute;p cuối c&ugrave;ng tạo n&ecirc;n bức tranh &quot;laptop doanh nghiệp&quot; ho&agrave;n hảo, phục vụ đầy đủ c&aacute;c nhu cầu của doanh nghiệp. B&ecirc;n cạnh hai mẫu laptop doanh nghiệp trước đ&oacute; l&agrave; ExpertBook B9 cao cấp, ExpertBook P2 di động, sự xuất hiện của ExpertBook B1 đem lại sự lựa chọn mạnh mẽ, linh hoạt hơn, gi&uacute;p doanh nghiệp vừa v&agrave; nhỏ tối ưu chi ph&iacute;, n&acirc;ng cao khả năng th&iacute;ch ứng trong m&ocirc;i trường kinh doanh b&igrave;nh thường mới nhiều biến đổi. Để c&oacute; th&ecirc;m th&ocirc;ng tin chi tiết v&agrave; y&ecirc;u cầu đặt mua sản phẩm, bạn đọc c&oacute; thể li&ecirc;n hệ hotline 1800 6588.</p>',
            'image' => 'YpYO_4.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 1,
            'title' => 'ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt',
            'info' => 'Trong thời điểm phần lớn nguồn nhân lực của các công ty đang làm việc tại nhà, từ xa, tin cậy của cả người đi làm hay các các công ty đều đang tăng cao.',
            'content' => '<h2>Trong thời điểm phần lớn nguồn nh&acirc;n lực của c&aacute;c c&ocirc;ng ty đang l&agrave;m việc tại nh&agrave;, từ xa, nhu cầu về những chiếc laptop mạnh mẽ, gọn nhẹ, tin cậy của cả người đi l&agrave;m hay c&aacute;c c&aacute;c c&ocirc;ng ty đều đang tăng cao.</h2>
 
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/14/ava-1628914655060846405650.png" /></p>
            
            <p>Nắm bắt nhu cầu đ&oacute;, Asus đ&atilde; ra mắt hai mẫu laptop mới ASUS ExpertBook B1 với hai phi&ecirc;n bản B1400 (m&agrave;n h&igrave;nh 14 inch) v&agrave; B1500 (m&agrave;n h&igrave;nh 15.6 inch), thuộc ph&acirc;n kh&uacute;c Thiết Yếu d&agrave;nh cho c&aacute;c doanh nghiệp vừa &amp; nhỏ tại Việt Nam. Đ&acirc;y l&agrave; phi&ecirc;n bản hậu duệ, với mức gi&aacute; dễ tiếp cận hơn nhưng thừa hưởng nhiều ưu điểm của chiếc ExpertBook B9 đang l&agrave;m mưa l&agrave;m gi&oacute; ở ph&acirc;n kh&uacute;c Laptop d&agrave;nh cho Doanh nh&acirc;n, Nh&agrave; quản l&yacute;.</p>
            
            <p><strong>Mạnh mẽ, dễ d&agrave;ng n&acirc;ng cấp gi&uacute;p tối ưu chi ph&iacute; đầu tư ban đầu</strong></p>
            
            <p>Ng&ocirc;n ngữ thiết kế của ExpertBook B1 giữ bản sắc chuy&ecirc;n nghiệp, thanh lịch, sang trọng của d&ograve;ng ExpertBook. Đặc biệt, phần nắp m&aacute;y được ho&agrave;n thiện bằng hợp kim nh&ocirc;m đi c&ugrave;ng chất lượng gia c&ocirc;ng chắc chắn mang lại x&uacute;c gi&aacute;c, độ bền cũng như ngoại h&igrave;nh rất cao cấp. Ch&uacute;ng ta sẽ c&oacute; những chiếc Laptop nặng hơn một ch&uacute;t so với ExpertBook B9 nhưng vẫn đảm bảo t&iacute;nh di động (chỉ 1,45kg), đổi lại l&agrave; card đồ hoạ rời v&agrave; khả năng n&acirc;ng cấp RAM, ổ cứng.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-162884676854078379359.jpg" /></p>
            
            <p>ExpertBook B1 bản 15 inch với b&agrave;n ph&iacute;m số T9</p>
            
            <p>Cả hai phi&ecirc;n bản 14 v&agrave; 15 inch của ExpertBook B1 đều được trang bị vi xử l&yacute; Intel thế hệ 11 mới nhất, t&ugrave;y chọn card đồ họa rời Nvidia MX330, khả năng n&acirc;ng cấp RAM linh hoạt tối đa đến 48GB, giải ph&aacute;p lưu trữ k&eacute;p với 1 SSD PCIe + ổ cứng 2,5&quot;.</p>
            
            <p>C&oacute; thể thấy ExpertBook B1 series mang lại khả năng n&acirc;ng cấp v&agrave; thay đổi rất linh hoạt. Bạn hay doanh nghiệp của bạn kh&ocirc;ng cần phải bỏ ra chi ph&iacute; đầu tư ban đầu qu&aacute; lớn, nhưng vẫn c&oacute; khả năng n&acirc;ng cấp, mở rộng trong tương lai. Điều n&agrave;y lại c&agrave;ng trở n&ecirc;n &yacute; nghĩa trong thời điểm kinh tế gặp nhiều bất ổn như hiện nay.</p>
            
            <p><strong>Khả năng kết nối đa dạng v&agrave; đầy đủ</strong></p>
            
            <p>Kh&ocirc;ng giống như những nh&agrave; sản xuất kh&aacute;c, hi sinh sự tiện dụng của người d&ugrave;ng khi loại bỏ c&aacute;c cổng kết nối, ASUS ExpertBook B1 trang bị đầy đủ c&aacute;c cổng kết nối như USB-A, HDMI, VGA, RJ45 (mạng Lan), đầu đọc thẻ nhớ MicroSD cho đến USB-C hỗ trợ truyền điện năng cũng như xuất h&igrave;nh ảnh. Nhờ đ&oacute;, ExpertBook B1 mang lại khả năng kết nối với c&ugrave;ng l&uacute;c 3 m&agrave;n h&igrave;nh ngo&agrave;i, cũng như kết nối với hầu hết c&aacute;c m&aacute;y m&oacute;c trong m&ocirc;i trường c&ocirc;ng sở, sản xuất.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-1628846773689270250684.jpg" /></p>
            
            <p>M&aacute;y được trang bị đầy đủ c&aacute;c cổng kết nối cho nhu cầu l&agrave;m việc đa nhiệm</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>M&ocirc;i trường l&agrave;m việc tại nh&agrave; với c&aacute;c cuộc họp trực tuyến cũng được ASUS t&iacute;nh to&aacute;n v&agrave; tối ưu cho ExpertBook B1 với webcam độ ph&acirc;n giải cao, 2 microphone thu &acirc;m 360 độ kết hợp c&ocirc;ng nghệ khử ồn th&ocirc;ng minh ASUS AI Noise-Cancelling cho chất lượng đ&agrave;m thoại tốt trong mọi m&ocirc;i trường.</p>
            
            <p><strong>Bền bỉ v&agrave; bảo mật</strong></p>
            
            <p>Nhằm hỗ trợ người d&ugrave;ng l&agrave;m việc bền bỉ trong mọi m&ocirc;i trường từ văn ph&ograve;ng, xưởng sản xuất cho tới gia đ&igrave;nh c&oacute; trẻ em, c&aacute;c kĩ sư của ASUS đ&atilde; thiết kế ExpertBook B1 vượt ti&ecirc;u chuẩn độ bền của Qu&acirc;n đội Mỹ. Nắp m&aacute;y của Expert Book B1 được l&agrave;m bằng hợp kim nh&ocirc;m, b&agrave;n ph&iacute;m c&oacute; khả năng chống tr&agrave;n gi&uacute;p chiếc m&aacute;y c&ugrave;ng dữ liệu của bạn c&oacute; thể an to&agrave;n sau những c&uacute; rơi hay những pha v&ocirc; &yacute; đổ nước, cafe l&ecirc;n b&agrave;n ph&iacute;m.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-2-16288467736911709313938.jpg" /></p>
            
            <p>M&aacute;y vẫn đảm bảo t&iacute;nh di động với trọng lượng chỉ 1.45 kg.</p>
            
            <p>Ngo&agrave;i ra, trong thời đại &quot;dữ liệu l&agrave; v&agrave;ng&quot;, khả năng bảo mật tr&ecirc;n ExpertBook B1 cũng được ASUS d&agrave;nh nhiều t&acirc;m huyết với cảm biến v&acirc;n tay một chạm t&iacute;ch hợp trong n&uacute;t nguồn, chip TPM 2.0 v&agrave; ứng dụng bảo mật đi k&egrave;m ASUS Business Manager. Nhờ đ&oacute;, m&aacute;y c&oacute; khả năng m&atilde; h&oacute;a, bảo vệ dữ liệu, kh&oacute;a c&aacute;c cổng kết nối vật l&yacute; một c&aacute;ch nhanh ch&oacute;ng khi ph&aacute;t hiện nguy cơ r&ograve; rỉ dữ liệu. Đặc biệt, webcam được trang bị tấm che vật l&yacute;, đảm bảo an to&agrave;n cho h&igrave;nh ảnh c&aacute; nh&acirc;n của người d&ugrave;ng, hạn chế ho&agrave;n to&agrave;n khả năng lộ h&igrave;nh ảnh nhạy cảm, đặc biệt hữu &iacute;ch khi l&agrave;m việc tại nh&agrave;.</p>
            
            <p><strong>Chế độ bảo h&agrave;nh cao cấp v&agrave; linh hoạt</strong></p>
            
            <p>D&ograve;ng sản phẩm &quot;thửa ri&ecirc;ng&quot; doanh nghiệp n&agrave;y c&ograve;n đi k&egrave;m chế độ bảo h&agrave;nh cao cấp từ ASUS với thời gian bảo h&agrave;nh tuỳ chọn từ 1-5 năm, dịch vụ bảo h&agrave;nh tận nơi, giao nhận h&agrave;ng tận nơi. Đặc biệt t&ugrave;y chọn giữ lại ổ cứng bị lỗi cho ph&eacute;p doanh nghiệp đảm bảo an to&agrave;n, bảo mật dữ liệu kinh doanh.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - Mẫu laptop doanh nghiệp mạnh mẽ với khả năng nâng cấp linh hoạt - Ảnh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-3-16288467736921192717538.jpg" /></p>
            
            <p>M&aacute;y cũng ph&ugrave; hợp với gi&aacute;o vi&ecirc;n, học sinh, sinh vi&ecirc;n.</p>
            
            <p>C&oacute; thể n&oacute;i, ASUS ExpertBook B1 l&agrave; mảnh gh&eacute;p cuối c&ugrave;ng tạo n&ecirc;n bức tranh &quot;laptop doanh nghiệp&quot; ho&agrave;n hảo, phục vụ đầy đủ c&aacute;c nhu cầu của doanh nghiệp. B&ecirc;n cạnh hai mẫu laptop doanh nghiệp trước đ&oacute; l&agrave; ExpertBook B9 cao cấp, ExpertBook P2 di động, sự xuất hiện của ExpertBook B1 đem lại sự lựa chọn mạnh mẽ, linh hoạt hơn, gi&uacute;p doanh nghiệp vừa v&agrave; nhỏ tối ưu chi ph&iacute;, n&acirc;ng cao khả năng th&iacute;ch ứng trong m&ocirc;i trường kinh doanh b&igrave;nh thường mới nhiều biến đổi. Để c&oacute; th&ecirc;m th&ocirc;ng tin chi tiết v&agrave; y&ecirc;u cầu đặt mua sản phẩm, bạn đọc c&oacute; thể li&ecirc;n hệ hotline 1800 6588.</p>',
            'image' => 'E1mK_3.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 3,
            'title' => 'Microsoft Surface nào phù hợp với bạn?',
            'info' => 'Dòng Surface của Microsoft ngày càng có những sản phẩm ấn tượng, thu hút nhiều người yêu công nghệ sử dụng. Đặc biệt là các bạn fan của hệ điều hành Windows.',
            'content' => '<p>Vậy c&oacute; những mẫu Surface n&agrave;o đ&aacute;ng ch&uacute; &yacute;? Bạn n&ecirc;n mua mẫu n&agrave;o trong năm 2021 n&agrave;y? Bạn c&oacute; thể t&igrave;m thấy địa chỉ ph&acirc;n phối Surface uy t&iacute;n ở đ&acirc;u?</p>
 
            <p>H&atilde;y c&ugrave;ng t&ocirc;i t&igrave;m hiểu qua b&agrave;i viết dưới đ&acirc;y.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/a1-1628501852939402603874.jpg" target="_blank"><img alt="Microsoft Surface nào phù hợp với bạn? - Ảnh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/a1-1628501852939402603874.jpg" /></a></p>
            
            <p>Microsoft Surface n&agrave;o ph&ugrave; hợp với bạn?</p>
            
            <p><strong>C&aacute;c mẫu Surface đ&aacute;ng mua 2021&nbsp;</strong></p>
            
            <p><em>Surface Laptop 4 - Thiết kế kh&ocirc;ng thể chối từ&nbsp;</em></p>
            
            <p>Surface Laptop 4 được tr&igrave;nh l&agrave;ng lần đầu v&agrave;o năm 2021, m&aacute;y t&iacute;nh n&agrave;y l&agrave; một trong những chiếc Surface Laptop xuất sắc nhất của Microsoft.</p>
            
            <p>Được b&agrave;y b&aacute;n với hai size l&agrave; 13,5 inch v&agrave; 15 inch với nhiều phi&ecirc;n bản v&agrave; dung lượng kh&aacute;c nhau, n&oacute; đ&aacute;p ứng được nhu cầu của nhiều đối tượng kh&aacute;ch h&agrave;ng.</p>
            
            <p>Ưu điểm:</p>
            
            <p>- M&aacute;y t&iacute;nh mỏng v&agrave; nhẹ</p>
            
            <p>- Hiệu suất xuất sắc (chỉ thua k&eacute;m những laptop d&ugrave;ng NVIDIA GPU) v&agrave; cho cảm gi&aacute;c nhanh ch&oacute;ng, dễ thao t&aacute;c</p>
            
            <p>- Phi&ecirc;n bản 15 inch c&oacute; t&ugrave;y chọn sử dụng chip AMD kh&ocirc;ng hề thua k&eacute;m chip Apple M1.</p>
            
            <p>- Thời lượng pin thực tế l&ecirc;n đến 8 giờ</p>
            
            <p>- M&agrave;n h&igrave;nh cảm ứng, hỗ trợ t&iacute;nh năng viết với Surface pen (th&iacute;ch hợp k&yacute; văn bản hoặc ghi ch&uacute; nhanh)</p>
            
            <p>Ngo&agrave;i ra m&aacute;y c&ograve;n ra mắt với nhiều phi&ecirc;n bản kh&aacute;c nhau: m&aacute;y d&ugrave;ng chip Ryzen 5, Ryzen 7, Core i5, Core i7.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-1-16285017686081956089279.jpg" target="_blank"><img alt="Microsoft Surface nào phù hợp với bạn? - Ảnh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-1-16285017686081956089279.jpg" /></a></p>
            
            <p>Surface Laptop 4 - Thiết kế kh&ocirc;ng thể chối từ</p>
            
            <p>Tuy nhi&ecirc;n, m&aacute;y lại kh&ocirc;ng được trang bị cổng Thunderbolt 4. Chất lượng &acirc;m thanh cũng kh&ocirc;ng qu&aacute; xuất sắc nhưng theo t&ocirc;i thấy n&oacute; đủ d&ugrave;ng cho một m&aacute;y t&iacute;nh c&aacute; nh&acirc;n.</p>
            
            <p>Với thiết kế đẹp mắt v&agrave; hiệu xuất mạnh, Surface Laptop 4 sẽ ph&ugrave; hợp với c&aacute;c người d&ugrave;ng l&agrave; doanh nh&acirc;n, người l&agrave;m lĩnh vực multimedia như viết l&aacute;ch, chỉnh ảnh, video v&agrave; những nh&acirc;n vi&ecirc;n văn ph&ograve;ng.</p>
            
            <p>&nbsp;<em>Surface Pro 7 - Gi&aacute; tốt nhất so với trải nghiệm&nbsp;</em></p>
            
            <p>Surface Pro 7 l&agrave; một trong những mẫu surface đ&aacute;ng mua v&igrave; trải nghiệm rất xứng đ&aacute;ng với gi&aacute; tiền:</p>
            
            <p>- Thiết kế 2-in-1, bạn c&oacute; thể th&aacute;o rời m&agrave;n h&igrave;nh v&agrave; b&agrave;n ph&iacute;m Surface Type Cover</p>
            
            <p>- Ngoại h&igrave;nh đẹp, được l&agrave;m từ hợp kim Magie chất lượng cao, nhỏ gọn v&agrave; cao cấp (m&aacute;y c&oacute; k&iacute;ch thước 12.3 inch, chỉ nặng c&oacute; 775 gram)</p>
            
            <p>- Phần đế tiện lợi, c&oacute; thể xoay linh hoạt từ 0 đến 165 độ</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-1-16285017707541017172344.jpg" target="_blank"><img alt="Microsoft Surface nào phù hợp với bạn? - Ảnh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-1-16285017707541017172344.jpg" /></a></p>
            
            <p>Surface Pro 7 - Gi&aacute; tốt, trải nghiệm h&agrave;i l&ograve;ng</p>
            
            <p>- B&agrave;n ph&iacute;m c&oacute; đ&egrave;n nền gi&uacute;p bạn l&agrave;m việc tốt trong b&oacute;ng tối</p>
            
            <p>- M&agrave;n h&igrave;nh ph&acirc;n giải cao, m&agrave;u sắc sống động</p>
            
            <p>- Hiệu năng tốt, m&aacute;y kh&ocirc;ng giật lag ngay cả khi chục tab Chrome được mở k&egrave;m c&aacute;c app như Skype, Netflix, Youtube,...</p>
            
            <p>- Pin c&oacute; thể sử dụng từ 8 đến 12h</p>
            
            <p>Điểm trừ c&oacute; thể n&oacute;i l&agrave; duy nhất của mẫu Surface n&agrave;y l&agrave; n&oacute; kh&ocirc;ng hỗ trợ Thunderbolt 3. Nếu bạn muốn chuyển khối lượng dữ liệu lớn, bạn sẽ phải l&agrave;m với tốc độ hơi chậm của USB ti&ecirc;u chuẩn.</p>
            
            <p>Bạn cũng n&ecirc;n lưu &yacute;, một số nơi sẽ b&aacute;n b&agrave;n ph&iacute;m rời thay v&igrave; gom chung một bộ. Tuy nhi&ecirc;n, d&ugrave; mua ri&ecirc;ng th&igrave; gi&aacute; của Surface Pro 7 vẫn rất hợp l&yacute; với chất lượng n&oacute; mang lại.</p>
            
            <p>M&aacute;y ph&ugrave; hợp với c&aacute;c bạn ưu ti&ecirc;n t&iacute;nh di động của sản phẩm, phải di chuyển nhiều v&agrave; cần m&aacute;y c&oacute; hiệu suất mạnh.</p>
            
            <p>&nbsp;<strong>Surface Book 3 - All in One Laptop&nbsp;</strong></p>
            
            <p>Surface Book 3 l&agrave; sản phẩm tuyệt vời vừa được Microsoft ra mắt v&agrave;o năm 2020 Kh&ocirc;ng qu&aacute; ngạc nhi&ecirc;n khi thiết kế của Surface Book 3 được nhiều chuy&ecirc;n gia đ&aacute;nh gi&aacute; cao, tất cả chi tiết của Surface Book 3 đều đ&ograve;i hỏi chất lượng, từ cảm gi&aacute;c cứng c&aacute;p của b&agrave;n ph&iacute;m cho đến bản lề hay sự b&oacute;ng bẩy của logo Microsoft ở mặt lưng.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-2-16285017707561308092891.jpg" target="_blank"><img alt="Microsoft Surface nào phù hợp với bạn? - Ảnh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-2-16285017707561308092891.jpg" /></a></p>
            
            <p>Surface Book 3 c&oacute; 2 phi&ecirc;n bản l&agrave; 13.3 inch v&agrave; 15 inch với phần m&agrave;n h&igrave;nh c&oacute; thể th&aacute;o rời dễ d&agrave;ng để chuyển đổi th&agrave;nh tablet.</p>
            
            <p>Ch&uacute;ng ta sẽ c&oacute; cấu h&igrave;nh ở mức cơ bản:</p>
            
            <p>- Phi&ecirc;n bản 13.3 inch: CPU i5 hoặc i7 thế hệ 10, RAM 8GB, 16GB v&agrave; 32GB c&ugrave;ng SSD 256GB, 512GB, 1TB</p>
            
            <p>- Phi&ecirc;n bản 15 inch: CPI i7 thế hệ 10, RAM 16GB, 32GB c&ugrave;ng SSD 512GB, 1TB hoặc 2TB c&ugrave;ng card đồ hoạ rời GTX 1660 Ti hoặc RTX-3000 khủng.</p>
            
            <p>Với cấu h&igrave;nh n&agrave;y n&agrave;y cho phi&ecirc;n bản Laptop c&oacute; thể n&oacute;i l&agrave; vượt trội để phục vụ cho c&aacute;c t&aacute;c vụ nặng như lập tr&igrave;nh, đồ hoạ, render, l&agrave;m phim&hellip; ngo&agrave;i ra c&aacute;c phần mềm Office cũng hỗ trợ tuyệt vời cho Surface Book 3. Nhưng khi trở th&agrave;nh chiếc tablet th&igrave; đ&acirc;y được đ&aacute;nh gi&aacute; l&agrave; chiếc tablet mạnh mẽ thời điểm hiện tại.</p>
            
            <p><strong>&nbsp;Địa chỉ mua Surface uy t&iacute;n l&agrave; điều phải c&acirc;n nhắc&nbsp;</strong></p>
            
            <p>Khi bạn đ&atilde; x&aacute;c định được d&ograve;ng m&aacute;y v&agrave; kiểu m&aacute;y y&ecirc;u th&iacute;ch, h&atilde;y đảm bảo rằng bạn t&igrave;m đ&uacute;ng địa chỉ mua Surface uy t&iacute;n.</p>
            
            <p>C&aacute;c cửa h&agrave;ng n&agrave;y cần phải c&oacute; th&ocirc;ng tin r&otilde; r&agrave;ng, n&ecirc;n c&oacute; website v&agrave; đầy đủ c&aacute;c dịch vụ hậu m&atilde;i:</p>
            
            <p>- Cửa h&agrave;ng được nhiều kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; tốt</p>
            
            <p>- Chế độ hỗ trợ kỹ thuật phải n&oacute;i l&agrave; tốt nhất hiện h&agrave;nh</p>
            
            <p>- C&oacute; địa chỉ v&agrave; c&aacute;c thức li&ecirc;n lạc</p>
            
            <p>- Gi&aacute; cả phải chăng v&agrave; minh bạch</p>
            
            <p>- C&oacute; dịch vụ bảo h&agrave;nh (hoặc sửa chữa)</p>
            
            <p>Bạn c&oacute; thể tham khảo ngay tại Laptop V&agrave;ng. Địa chỉ chuy&ecirc;n ph&acirc;n phối c&aacute;c sản phẩm Surface v&agrave; đồ chơi c&ocirc;ng nghệ với c&aacute;c ch&iacute;nh s&aacute;ch bảo h&agrave;nh tốt, tư vấn kỹ c&agrave;ng.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-3-1628501770760333059248.jpg" target="_blank"><img alt="Microsoft Surface nào phù hợp với bạn? - Ảnh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-3-1628501770760333059248.jpg" /></a></p>
            
            <p>Laptop V&agrave;ng c&ograve;n cho ph&eacute;p thanh to&aacute;n online, trả g&oacute;p cũng như miễn ph&iacute; vận chuyển nội th&agrave;nh Hồ Ch&iacute; Minh.</p>
            
            <p>Th&ocirc;ng tin li&ecirc;n hệ:</p>
            
            <p>Địa chỉ: 273/8 Nguyễn Trọng Tuyển, Phường 10, Ph&uacute; Nhuận, Th&agrave;nh phố Hồ Ch&iacute; Minh</p>
            
            <p>Hotline: 0868 111 232</p>
            
            <p>Hỗ trợ kỹ thuật: 0868 111 242</p>
            
            <p>Website:&nbsp;<a href="https://laptopvang.com/" target="_blank">https://laptopvang.com</a>/</p>
            
            <p>Fanpage: https://facebook.com/laptopvang</p>
            
            <p>Email: sale@laptopvang.com</p>
            
            <p>Hy vọng qua b&agrave;i viết n&agrave;y c&aacute;c bạn đ&atilde; x&aacute;c định được em Surface m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch, ch&uacute;c c&aacute;c bạn đọc sớm &quot;tậu&quot; được sản phẩm m&agrave; m&igrave;nh mong muốn về tay nh&eacute;!</p>
            
            <p><a href="https://genk.vn/tat-tan-tat-ve-surface-duo-2-nang-cap-cau-hinh-camera-nhung-chua-thay-doi-nhieu-ve-thiet-ke-20210806154110733.chn" target="_blank">Tất tần tật về Surface Duo 2: N&acirc;ng cấp cấu h&igrave;nh, camera nhưng chưa thay đổi nhiều về thiết kế</a></p>
            
            <p><a href="javascript:void(0);">Theo&nbsp;Tr&iacute; Thức Trẻ&nbsp;<em>Copy link</em></a></p>',
            'image' => 'W20l_5.png',
        ]);
    }
}

class CategoryNewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_news')->insert([
            'name' => 'bài viết công nghệ mới',
            'sort_order' => 1,
            'status' => 1,
        ]);
        DB::table('category_news')->insert([
            'name' => 'tin khuyến mãi',
            'sort_order' => 2,
            'status' => 1,
        ]);
        DB::table('category_news')->insert([
            'name' => 'tin thị trường',
            'sort_order' => 3,
            'status' => 1,
        ]);
        DB::table('category_news')->insert([
            'name' => 'tin nóng',
            'sort_order' => 4,
            'status' => 1,
        ]);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => 'User' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => 'NONX_icon-user.jpg',
                'address' => '218 Hoàng văn thái, Đà Nẵng',
                'phone' => '0123456789',
                'level' => 0,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert([
                'name' => 'Admin' . $i,
                'email' => 'admin' . $i . '@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => 'user8.png',
                'address' => '218 Hoàng văn thái, Đà Nẵng',
                'phone' => '0123456789',
                'level' => 1,
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Thanh Nguyễn Duy',
            'email' => 'thanhnguyenduyy@gmail.com',
            'password' => bcrypt('12345678'),
            'avatar' => 'user1.png',
            'address' => '218 Hoàng văn thái, Đà Nẵng',
            'phone' => '0123456789',
            'level' => 2,
        ]);
    }
}

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('slide')->insert([
            'link' => 'msi',
            'image' => 'slide2.png',
        ]);

        DB::table('slide')->insert([
            'link' => 'asus/republic-of-gamers',
            'image' => 'banner01.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'hp/hp-spectre',
            'image' => 'banner02.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'dell/dell-xps',
            'image' => 'banner03.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'dell/dell-xps',
            'image' => 'slide3.png',
        ]);

        DB::table('slide')->insert([
            'link' => 'msi',
            'image' => 'banner00.jpg',
        ]);
    }
}

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id 1
        DB::table('category')->insert([
            'name' => 'Dell',
            'slug' => changeTitle('Dell'),
            'image' => 'banner10.png',
        ]);

        // id 2
        DB::table('category')->insert([
            'name' => 'Hp',
            'slug' => changeTitle('Hp'),
            'image' => 'banner11.jpg',
        ]);

        // id 3
        DB::table('category')->insert([
            'name' => 'Asus',
            'slug' => changeTitle('Asus'),
            'image' => 'banner12.jpg',
        ]);

        // id 4
        DB::table('category')->insert([
            'name' => 'Msi',
            'slug' => changeTitle('Msi'),
            'image' => 'banner13.jpg',
        ]);

        // id 5
        DB::table('category')->insert([
            'name' => 'Acer',
            'slug' => changeTitle('Acer'),
            'image' => 'banner15.jpg',
        ]);

        // id 6
        DB::table('category')->insert([
            'name' => 'Lenovo',
            'slug' => changeTitle('Lenovo'),
            'image' => 'banner16.jpg',
        ]);

        // id 7
        DB::table('category')->insert([
            'name' => 'Apple Macbook',
            'slug' => changeTitle('Apple Macbook'),
            'image' => 'banner17.jpg',
        ]);
    }
}

class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id 1
        DB::table('type_product')->insert([
            'name' => 'Dell Inspiron',
            'slug' => changeTitle('Dell Inspiron'),
            'id_category' => '1',
        ]);

        // id 2
        DB::table('type_product')->insert([
            'name' => 'Dell Vostro',
            'slug' => changeTitle('Dell Vostro'),
            'id_category' => '1',
        ]);

        // id 3
        DB::table('type_product')->insert([
            'name' => 'Dell Lattitude',
            'slug' => changeTitle('Dell Lattitude'),
            'id_category' => '1',
        ]);

        // id 4
        DB::table('type_product')->insert([
            'name' => 'Dell XPS',
            'slug' => changeTitle('Dell XPS'),
            'id_category' => '1',
        ]);

        // id 5
        DB::table('type_product')->insert([
            'name' => 'Dell Alienware',
            'slug' => changeTitle('Dell Alienware'),
            'id_category' => '1',
        ]);

        // id 6
        DB::table('type_product')->insert([
            'name' => 'Hp Spectre',
            'slug' => changeTitle('Hp Spectre'),
            'id_category' => '2',
        ]);

        // id 7
        DB::table('type_product')->insert([
            'name' => 'Hp Elitebook',
            'slug' => changeTitle('Hp Elitebook'),
            'id_category' => '2',
        ]);

        // id 8
        DB::table('type_product')->insert([
            'name' => 'Hp Envy',
            'slug' => changeTitle('Hp Envy'),
            'id_category' => '2',
        ]);

        // id 9
        DB::table('type_product')->insert([
            'name' => 'Hp Probook',
            'slug' => changeTitle('Hp Probook'),
            'id_category' => '2',
        ]);

        // id 10
        DB::table('type_product')->insert([
            'name' => 'Republic Of Gamers',
            'slug' => changeTitle('Republic Of Gamers'),
            'id_category' => '3',
        ]);

        // id 11
        DB::table('type_product')->insert([
            'name' => 'Asus Zenbook',
            'slug' => changeTitle('Asus Zenbook'),
            'id_category' => '3',
        ]);

        // id 12
        DB::table('type_product')->insert([
            'name' => 'Asus Vivobook',
            'slug' => changeTitle('Asus Vivobook'),
            'id_category' => '3',
        ]);

        // id 13
        DB::table('type_product')->insert([
            'name' => 'GL Gaming',
            'slug' => changeTitle('GL Gaming'),
            'id_category' => '4',
        ]);

        // id 14
        DB::table('type_product')->insert([
            'name' => 'GV Gaming',
            'slug' => changeTitle('GV Gaming'),
            'id_category' => '4',
        ]);

        // id 15
        DB::table('type_product')->insert([
            'name' => 'GP Gaming',
            'slug' => changeTitle('GP Gaming'),
            'id_category' => '4',
        ]);

        // id 16
        DB::table('type_product')->insert([
            'name' => 'GE Gaming',
            'slug' => changeTitle('GE Gaming'),
            'id_category' => '4',
        ]);

        // id 17
        DB::table('type_product')->insert([
            'name' => 'GS Gaming',
            'slug' => changeTitle('GS Gaming'),
            'id_category' => '4',
        ]);

        // id 18
        DB::table('type_product')->insert([
            'name' => 'GT Gaming',
            'slug' => changeTitle('GT Gaming'),
            'id_category' => '4',
        ]);

        // id 19
        DB::table('type_product')->insert([
            'name' => 'Acer Asprie',
            'slug' => changeTitle('Acer Asprie'),
            'id_category' => '5',
        ]);

        // id 20
        DB::table('type_product')->insert([
            'name' => 'Acer Nitro',
            'slug' => changeTitle('Acer Nitro'),
            'id_category' => '5',
        ]);

        // id 21
        DB::table('type_product')->insert([
            'name' => 'Acer Spin',
            'slug' => changeTitle('Acer Spin'),
            'id_category' => '5',
        ]);

        // id 22
        DB::table('type_product')->insert([
            'name' => 'Acer Asprie V Nitro',
            'slug' => changeTitle('Acer Asprie V Nitro'),
            'id_category' => '5',
        ]);

        // id 23
        DB::table('type_product')->insert([
            'name' => 'Lenovo Thinkpad',
            'slug' => changeTitle('Lenovo Thinkpad'),
            'id_category' => '6',
        ]);

        // id 24
        DB::table('type_product')->insert([
            'name' => 'Macbook Pro',
            'slug' => changeTitle('Macbook Pro'),
            'id_category' => '7',
        ]);

        // id 25
        DB::table('type_product')->insert([
            'name' => 'Macbook Air',
            'slug' => changeTitle('Macbook Air'),
            'id_category' => '7',
        ]);
    }
}

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dell Inspiron
        // id 1
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7567',
            'slug' => changeTitle('Dell Inspiron 7567'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>Ổ cứng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>Màn hình:</b> 15.6 inch FHD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>Tích hợp:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Trọng lượng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 26690000,
            'promotion_price' => 25500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 2
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5567',
            'slug' => changeTitle('Dell Inspiron 5567'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7500U, RAM 8GB DDR4, 1TB HDD, AMD Radeon R7 M445 4G GDDR5, 15.6 inch HD (1366x768), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7500U (2.7GHz upto 3.5GHz, 2Cores, 4Threads, 4MB cache, FSB 4GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2133Mhz (2 slot)</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b> AMD Radeon R7 M445 4G GDDR5 + Intel HD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 1000Mbps / WLan 802.11b,g,n / Bluetooth 4.0</p><p><b>Tích hợp:</b> Reader SD | Camera HD | DVI | USB 3.0 | Backlit</p><p><b>Trọng lượng:</b> 2.3 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 19190000,
            'promotion_price' => 17400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 3
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5570',
            'slug' => changeTitle('Dell Inspiron 5570'),
            'id_type' => '1',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 16400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 4
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7373',
            'slug' => changeTitle('Dell Inspiron 7373'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>Ổ cứng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>Màn hình:</b> 15.6 inch FHD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>Tích hợp:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Trọng lượng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 28500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 5
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7577',
            'slug' => changeTitle('Dell Inspiron 7577'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>Ổ cứng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>Màn hình:</b> 15.6 inch FHD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>Tích hợp:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Trọng lượng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>Hệ điều hành:</b> Free DOS.</p>',
            'unit_price' => 29990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 6
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5468',
            'slug' => changeTitle('Dell Inspiron 5468'),
            'id_type' => '1',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 14700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Vostro
        // id 7
        DB::table('product')->insert([
            'name' => 'Dell Vostro 7570',
            'slug' => changeTitle('Dell Vostro 7570'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 30190000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 8
        DB::table('product')->insert([
            'name' => 'Dell Vostro 3568',
            'slug' => changeTitle('Dell Vostro 3568'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 16300000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 9
        DB::table('product')->insert([
            'name' => 'Dell Vostro 5468',
            'slug' => changeTitle('Dell Vostro 5468'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21000000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 10
        DB::table('product')->insert([
            'name' => 'Dell Vostro 5471',
            'slug' => changeTitle('Dell Vostro 5471'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 24700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 11
        DB::table('product')->insert([
            'name' => 'Dell Vostro 3468',
            'slug' => changeTitle('Dell Vostro 3468'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 10800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Lattitude
        // id 12
        DB::table('product')->insert([
            'name' => 'Dell Lattitude 7280',
            'slug' => changeTitle('Dell Lattitude 7280'),
            'id_type' => '3',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 32900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 13
        DB::table('product')->insert([
            'name' => 'Dell Lattitude E5470',
            'slug' => changeTitle('Dell Lattitude E5470'),
            'id_type' => '3',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 20600000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell XPS
        // id 14
        DB::table('product')->insert([
            'name' => 'Dell XPS 13 9360',
            'slug' => changeTitle('Dell XPS 13 9360'),
            'id_type' => '4',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 46350000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 15
        DB::table('product')->insert([
            'name' => 'Dell XPS 15 9560',
            'slug' => changeTitle('Dell XPS 15 9560'),
            'id_type' => '4',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 48200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Alienware
        // id 16
        DB::table('product')->insert([
            'name' => 'Dell Alienware 17 R4',
            'slug' => changeTitle('Dell Alienware 17 R4'),
            'id_type' => '5',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 40500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Spectre
        // id 17
        DB::table('product')->insert([
            'name' => 'Hp Spectre 13',
            'slug' => changeTitle('Hp Spectre 13'),
            'id_type' => '6',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 41400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Elitebook
        // id 18
        DB::table('product')->insert([
            'name' => 'Hp Elitebook x360 G2',
            'slug' => changeTitle('Hp Elitebook x360 G2'),
            'id_type' => '7',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 40200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 19
        DB::table('product')->insert([
            'name' => 'Hp Elitebook 1040 G3',
            'slug' => changeTitle('Hp Elitebook 1040 G3'),
            'id_type' => '7',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27390000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Envy
        // id 20
        DB::table('product')->insert([
            'name' => 'Hp Envy 13',
            'slug' => changeTitle('Hp Envy 13'),
            'id_type' => '8',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21350000,
            'promotion_price' => 20500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 21
        DB::table('product')->insert([
            'name' => 'Hp Envy 15',
            'slug' => changeTitle('Hp Envy 15'),
            'id_type' => '8',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 23200000,
            'promotion_price' => 21200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Probook
        // id 22
        DB::table('product')->insert([
            'name' => 'Hp Probook 450 G4',
            'slug' => changeTitle('Hp Probook 450 G4'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 15500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 23
        DB::table('product')->insert([
            'name' => 'Hp Probook 450 G3',
            'slug' => changeTitle('Hp Probook 450 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 11700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 24
        DB::table('product')->insert([
            'name' => 'Hp Probook 440 G3',
            'slug' => changeTitle('Hp Probook 440 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 14950000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 25
        DB::table('product')->insert([
            'name' => 'Hp Probook 440 G4',
            'slug' => changeTitle('Hp Probook 440 G4'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 12100000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 26
        DB::table('product')->insert([
            'name' => 'Hp Probook 430 G3',
            'slug' => changeTitle('Hp Probook 430 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 11700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Republic Of Gamers
        // id 27
        DB::table('product')->insert([
            'name' => 'Asus FX503VD',
            'slug' => changeTitle('Asus FX503VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 28
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL503VD',
            'slug' => changeTitle('Asus ROG Strix Hero GL503VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27490000,
            'promotion_price' => 26490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 29
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Scar GL703VD',
            'slug' => changeTitle('Asus ROG Strix Scar GL703VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27990000,
            'promotion_price' => 26990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 30
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL503VM',
            'slug' => changeTitle('Asus ROG Strix Hero GL503VM'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 32490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 31
        DB::table('product')->insert([
            'name' => 'Asus ROG GL553VD',
            'slug' => changeTitle('Asus ROG GL553VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 24490000,
            'promotion_price' => 22790000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 32
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL703VM',
            'slug' => changeTitle('Asus ROG Strix Hero GL703VM'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 39990000,
            'promotion_price' => 38790000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 33
        DB::table('product')->insert([
            'name' => 'Asus ROG GX800VH',
            'slug' => changeTitle('Asus ROG GX800VH'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 145500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Asus Zenbook
        // id 34
        DB::table('product')->insert([
            'name' => 'Asus Zenbook UX430',
            'slug' => changeTitle('Asus Zenbook UX430'),
            'id_type' => '11',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 26990000,
            'promotion_price' => 26200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 35
        DB::table('product')->insert([
            'name' => 'Asus Zenbook 3 Deluxe UX490',
            'slug' => changeTitle('Asus Zenbook 3 Deluxe UX490'),
            'id_type' => '11',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 42490000,
            'promotion_price' => 41200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Asus Vivobook
        // id 36
        DB::table('product')->insert([
            'name' => 'Asus Vivobook S15',
            'slug' => changeTitle('Asus Vivobook S15'),
            'id_type' => '12',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 16290000,
            'promotion_price' => 15190000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GL
        // id 37
        DB::table('product')->insert([
            'name' => 'Msi GL62 7RDX',
            'slug' => changeTitle('Msi GL62 7RDX'),
            'id_type' => '13',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 21990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GV
        // id 38
        DB::table('product')->insert([
            'name' => 'Msi GV62 7RD',
            'slug' => changeTitle('Msi GV62 7RD'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 23990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 39
        DB::table('product')->insert([
            'name' => 'Msi GV72 7RD',
            'slug' => changeTitle('Msi GV72 7RD'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 25490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 40
        DB::table('product')->insert([
            'name' => 'Msi GV72 7RE',
            'slug' => changeTitle('Msi GV72 7RE'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 25990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GP
        // id 41
        DB::table('product')->insert([
            'name' => 'Msi GP72M 7REX',
            'slug' => changeTitle('Msi GP72M 7REX'),
            'id_type' => '15',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 27990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 42
        DB::table('product')->insert([
            'name' => 'Msi GP62M 7REX',
            'slug' => changeTitle('Msi GP62M 7REX'),
            'id_type' => '15',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 29490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GE
        // id 43
        DB::table('product')->insert([
            'name' => 'Msi GE63VR 7RE',
            'slug' => changeTitle('Msi GE63VR 7RE'),
            'id_type' => '16',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 40990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 44
        DB::table('product')->insert([
            'name' => 'Msi GE73VR 7RF',
            'slug' => changeTitle('Msi GE73VR 7RF'),
            'id_type' => '16',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 42690000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GS
        // id 45
        DB::table('product')->insert([
            'name' => 'Msi GS63VR 7RF',
            'slug' => changeTitle('Msi GS63VR 7RF'),
            'id_type' => '17',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 53200000,
            'promotion_price' => 50900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GT
        // id 46
        DB::table('product')->insert([
            'name' => 'Msi GT83VR 7RF Titan',
            'slug' => changeTitle('Msi GT83VR 7RF Titan'),
            'id_type' => '18',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 122900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 47
        DB::table('product')->insert([
            'name' => 'Msi GT75VR 7RE Titan',
            'slug' => changeTitle('Msi GT75VR 7RE Titan'),
            'id_type' => '18',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 64490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Asprie
        // id 48
        DB::table('product')->insert([
            'name' => 'Acer Aspire 7 A715',
            'slug' => changeTitle('Acer Aspire 7 A715'),
            'id_type' => '19',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 17550000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Nitro
        // id 49
        DB::table('product')->insert([
            'name' => 'Acer Nitro 5 AN515',
            'slug' => changeTitle('Acer Nitro 5 AN515'),
            'id_type' => '20',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 22950000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Spin
        // id 50
        DB::table('product')->insert([
            'name' => 'Acer Spin 5 SP513',
            'slug' => changeTitle('Acer Spin 5 SP513'),
            'id_type' => '21',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 19800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Asprie V Nitro
        // id 51
        DB::table('product')->insert([
            'name' => 'Acer VX5 591G',
            'slug' => changeTitle('Acer VX5 591G'),
            'id_type' => '22',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 23900000,
            'promotion_price' => 22100000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Lenovo Thinkpad
        // id 52
        DB::table('product')->insert([
            'name' => 'Lenovo Thinkpad E560',
            'slug' => changeTitle('Lenovo Thinkpad E560'),
            'id_type' => '23',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 11500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Macbook Pro
        // id 53
        DB::table('product')->insert([
            'name' => 'Macbook Pro 2017',
            'slug' => changeTitle('Macbook Pro 2017'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 48500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 54
        DB::table('product')->insert([
            'name' => 'Macbook Pro Retina 2017',
            'slug' => changeTitle('Macbook Pro Retina 2017'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 34500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 55
        DB::table('product')->insert([
            'name' => 'Macbook Pro 2016',
            'slug' => changeTitle('Macbook Pro 2016'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 44500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 56
        DB::table('product')->insert([
            'name' => 'Macbook Pro Retina 2016',
            'slug' => changeTitle('Macbook Pro Retina 2016'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 31800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Macbook Air
        // id 57
        DB::table('product')->insert([
            'name' => 'Macbook Air 2017',
            'slug' => changeTitle('Macbook Air 2017'),
            'id_type' => '25',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 20500000,
            'promotion_price' => 19500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 58
        DB::table('product')->insert([
            'name' => 'Macbook Air 2016',
            'slug' => changeTitle('Macbook Air 2016'),
            'id_type' => '25',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD® Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>Ổ cứng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD® Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>Màn hình:</b> 15.6 inch HD (1920x1080)</p><p><b>Kết nối:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>Tích hợp:</b> USB 3.1 Gen 1, USB2.0, HDMI™ 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Trọng lượng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>Hệ điều hành:</b> Windows 10 bản quyền.</p>',
            'unit_price' => 19700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);
    }
}

class ReviewProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $count = count($products);

        for ($i = 1; $i <= $count; $i++) {
            $product = Product::find($i);

            for ($j = 0; $j < 7; $j++) {
                DB::table('review_product')->insert([
                    'name' => 'User' . $j,
                    'email' => 'user' . $j . '@mymail.com',
                    'content' => 'sản phẩm tốt, chất lượng, gia hợp lý',
                    'rating' => mt_rand(2, 5),
                    'id_product' => $i,
                ]);
            }

            $reviews = $product->reviewProduct;
            $totalReview = count($reviews);
            $totalRating = 0;
            foreach ($reviews as $item) {
                $totalRating += $item['rating'];
            }

            $product->rating = $totalRating / $totalReview;
            $product->save();
        }
    }
}

class ImageProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $count = count($products);

        for ($i = 1; $i <= $count; $i++) {
            $product = Product::find($i);

            for ($j = 1; $j <= 4; $j++) {
                DB::table('image_product')->insert([
                    'name' => $product->slug . '-' . $j . '.jpg',
                    'id_product' => $i,
                ]);
            }
        }
    }
}

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title_gioithieu' => 'LAPTOP-CENTRE CHUYÊN BÁN LẺ LAPTOP UY TÍN',
            'title_lienhe' => 'Thông tin liên hệ',
            'gioithieu' => '<h2><strong>I. GIỚI THIỆU CHUNG</strong></h2>
 
            <ul>
                <li><strong>Laptop-</strong><strong>Centre</strong>&nbsp;l&agrave; một trong những đơn vị hoạt động trong lĩnh vực kinh doanh dịch vụ tại th&agrave;nh phố Đ&agrave; Nẵng&nbsp;trong lĩnh vực kinh doanh c&aacute;c d&ograve;ng sản phẩm laptop, linh kiện v&agrave; bapr h&agrave;nh sửa chữa laptop. Th&agrave;nh lập từ năm 2017 đến nay,<strong>&nbsp;Laptop-</strong><strong>Centre&nbsp;</strong>đ&atilde; tạo dựng được chỗ đứng vững chắc tr&ecirc;n thị trường v&agrave; trở th&agrave;nh c&aacute;i t&ecirc;n quen thuộc đối với kh&aacute;ch h&agrave;ng.&nbsp;<br />
                <br />
                <img src="https://khoahocphattrien.vn/Images/Uploaded/Share/2020/05/28/2Anh-QT-6.jpg" /><br />
                &nbsp;</li>
                <li>Sau 2 năm th&agrave;nh lập,&nbsp;<strong>Laptop-</strong><strong>Centre&nbsp;</strong>lu&ocirc;n nỗ lực hết m&igrave;nh hướng đến cửa h&agrave;ng năng động, uy t&iacute;n để đem đến dịch vụ tốt nhất đến với kh&aacute;ch h&agrave;ng, với t&acirc;m niệm mỗi kh&aacute;ch h&agrave;ng khi t&igrave;m kiếm đến ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ trải nghiệm dịch vụ mua b&aacute;n th&ocirc;ng thường m&agrave; sẽ cảm nhận thấy sự kh&aacute;c biệt &ndash; tin cậy, an t&acirc;m đến từ chất lượng sản phẩm, chế độ hậu m&atilde;i.&nbsp;<strong>Laptop-</strong><strong>Centre&nbsp;</strong>cam kết c&aacute;c sản phẩm lu&ocirc;n đảm bảo chất lượng cao v&agrave; nguồn gốc r&otilde; r&agrave;ng, gi&aacute; cạnh tranh tr&ecirc;n thị trường, nhiều ưu đ&atilde;i hấp dẫn, bảo h&agrave;nh uy t&iacute;n với chế độ hậu m&atilde;i trọn đời.Ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; một trong những đơn vị c&oacute; thương hiệu, uy t&iacute;n v&agrave; đứng đầu về hoạt động kinh doanh c&aacute;c sản phẩm Laptop, phụ kiện uy t&iacute;n tại Việt Nam.</li>
                <li>Quy tụ đội ngũ nh&acirc;n vi&ecirc;n trẻ tuổi, l&agrave;m việc chuy&ecirc;n nghiệp, kỷ luật, th&acirc;n thiện, chuy&ecirc;n m&ocirc;n, nhiệt huyết, tận tụy với kh&aacute;ch h&agrave;ng, khi t&igrave;m đến&nbsp;<strong>Laptop-</strong><strong>Centre</strong>&nbsp;c&aacute;c bạn sẽ cảm thấy h&agrave;i l&ograve;ng khi tiếp x&uacute;c trực tiếp tại cửa h&agrave;ng hoặc qua điện thoại, nh&acirc;n vi&ecirc;n tư vấn của ch&uacute;ng t&ocirc;i sẽ hướng dẫn v&agrave; cung cấp cho kh&aacute;ch h&agrave;ng những th&ocirc;ng tin hữu &iacute;ch nhất với sự nhiệt th&agrave;nh v&agrave; th&acirc;n thiện. Đi theo phương ch&acirc;m &ldquo;Kiến tạo chất lượng &ndash; Kết nối sẻ chia&rdquo;, ch&uacute;ng t&ocirc;i lu&ocirc;n lắng nghe v&agrave; quan t&acirc;m tới nhu cầu của kh&aacute;ch h&agrave;ng, đồng thời kh&ocirc;ng ngừng n&acirc;ng cao chất lượng dịch vụ mỗi ng&agrave;y.</li>
            </ul>
            
            <h2><strong>II. C&Aacute;C DỊCH VỤ CUNG CẤP</strong></h2>
            
            <ul>
                <li>Hiện nay, hệ thống cửa h&agrave;ng&nbsp;<strong>Laptop-</strong><strong>Centre</strong>&nbsp;đ&atilde; ph&aacute;t triển vững mạnh tại Đ&agrave; Nẵng, c&aacute;c tỉnh th&agrave;nh kh&aacute;c v&agrave; tập trung c&aacute;c dịch vụ ch&iacute;nh sau:</li>
            </ul>
            
            <ul>
                <li>
                <ul>
                    <li>Ph&acirc;n phối v&agrave; b&aacute;n c&aacute;c sản phẩm laptop cũ, đặc biệt l&agrave; c&aacute;c sản phẩm d&ograve;ng Pro Business v&agrave; Mobile Workstation.</li>
                    <li>Dịch vụ c&agrave;i đặt phần mềm, bảo dưỡng, vệ sinh m&aacute;y định kỳ</li>
                    <li>Dịch vụ sửa chữa, thay thế linh kiện</li>
                    <li>Dịch vụ n&acirc;ng cấp cấu h&igrave;nh m&aacute;y cũ</li>
                    <li>Dịch vụ n&acirc;ng cấp, đổi m&aacute;y cũ lấy m&aacute;y mới hơn</li>
                </ul>
                </li>
            </ul>
            
            <h2><strong>III. CHƯƠNG TR&Igrave;NH BẢO H&Agrave;NH TRỌN ĐỜI</strong></h2>
            
            <ul>
                <li><strong>Laptop-</strong><strong>Centre</strong>&nbsp;triển khai g&oacute;i chương tr&igrave;nh &ldquo;trọn đời b&ecirc;n nhau (lớn hơn 88 th&aacute;ng)&rdquo; như một lời cam kết hỗ trợ trọn vẹn v&ograve;ng đời sản phẩm m&agrave;<strong><a href="https://laptopngoai.com/">&nbsp;</a>Laptop-</strong><strong>Centre</strong>&nbsp;b&aacute;n ra tới kh&aacute;ch h&agrave;ng</li>
            </ul>
            
            <h3><strong>1. Duy tr&igrave; hoạt động của m&aacute;y t&iacute;nh ở t&igrave;nh trạng tốt nhất</strong></h3>
            
            <ul>
                <li>Bảo h&agrave;nh phần mềm trọn đời</li>
                <li>Miễn ph&iacute; vệ sinh, bảo dưỡng laptop 06 th&aacute;ng một lần trọn đời m&aacute;y</li>
            </ul>
            
            <h3><strong>2. Khắc phục sự cố với chi ph&iacute; rẻ nhất</strong></h3>
            
            <ul>
                <li>Cũng như chiếc xe m&aacute;y của bạn, đi một thời gian phải thay săm lốp, nh&ocirc;ng x&iacute;ch, dầu mỡ th&igrave; m&aacute;y t&iacute;nh cũng vậy. Mỗi năm bạn sẽ phải bỏ ra một khoản chi ph&iacute; nhỏ để thay thế c&aacute;c bộ phận hao m&ograve;n như b&agrave;n ph&iacute;m, pin, ổ cứng&hellip;Thấu hiểu điều đ&oacute;, ch&uacute;ng t&ocirc;i đưa ra chương tr&igrave;nh hỗ trợ:</li>
                <li>Tặng 28% ph&iacute; sửa chữa lần đầu ti&ecirc;n sau khi đ&atilde; hết thời hạn bảo h&agrave;nh tại hệ thống&nbsp;<strong>Laptop-</strong><strong>Centre</strong></li>
                <li>Tặng 18% ph&iacute; sửa chữa những lần tiếp theo trong 88 th&aacute;ng tại hệ thống&nbsp;<strong>Laptop-</strong><strong>Centre</strong></li>
            </ul>
            
            <h3><strong>3. N&acirc;ng cấp cấu h&igrave;nh m&aacute;y t&iacute;nh cũ</strong></h3>
            
            <ul>
                <li>Tặng 2,8% gi&aacute; linh kiện thay thế hoặc n&acirc;ng cấp cho m&aacute;y trong v&ograve;ng 88 th&aacute;ng tại hệ thống&nbsp;<strong>Laptop-</strong><strong>Centre</strong></li>
            </ul>
            
            <h3><strong>4. N&acirc;ng cấp, đổi lấy m&aacute;y đời cao hơn</strong></h3>
            
            <ul>
                <li>Khi c&oacute; nhu cầu n&acirc;ng cấp m&aacute;y, Qu&yacute; kh&aacute;ch đổi m&aacute;y đang sử dụng lấy m&aacute;y kh&aacute;c đời cao hơn sẽ được nh&acirc;n gấp 3 lần số t&iacute;ch điểm của chiếc m&aacute;y đang sử dụng đ&oacute; v&agrave; được trừ ngay v&agrave;o ho&aacute; đơn mua m&aacute;y tiếp theo.</li>
                <li>Với g&oacute;i dịch vụ n&agrave;y, chắc chắn rằng, mỗi chiếc laptop được mua tại&nbsp;<strong>Laptop-</strong><strong>Centre</strong><a href="https://laptopngoai.com/">&nbsp;</a>sẽ đồng h&agrave;nh với chủ nh&acirc;n l&acirc;u d&agrave;i v&agrave; bền bỉ, trở th&agrave;nh &ldquo;người bạn tri kỷ&rdquo; c&ugrave;ng bạn gặt h&aacute;i mọi th&agrave;nh quả trong học tập v&agrave; sự nghiệp.</li>
                <li>Xin ch&acirc;n th&agrave;nh cảm ơn qu&yacute; kh&aacute;ch đ&atilde; ủng hộ&nbsp;<strong>Laptop-</strong><strong>Centre</strong>.&nbsp;Sự h&agrave;i l&ograve;ng của qu&yacute; kh&aacute;ch ch&iacute;nh l&agrave; niềm vui v&agrave; tạo động lực gi&uacute;p ch&uacute;ng t&ocirc;i kh&ocirc;ng ngừng ho&agrave;n thiện v&agrave; ph&aacute;t triển dịch vụ hơn nữa!</li>
            </ul>',
            'diachi' => '218 Hoàng Văn Thái, Hòa Khánh Nam, Liên Chiểu, Đà Nẵng',
            'email' => 'thanhnguyenduyy@gmail.com',
            'phone' => '0843-456-567',
            'created_at' => '2021-09-04 21:55:51',
            'updated_at' => '2021-09-04 21:55:51',
        ]);
    }
}
