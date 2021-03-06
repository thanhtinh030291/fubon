<?php

use Illuminate\Database\Seeder;

class TermsSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('terms')->insert([
            [
                'name' => '3.1',
                'description' =>'Các tình trạng tồn tại trước mà không được khai báo và không được Công ty chấp nhận.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.2',
                'description' =>'Các tình trạng bẩm sinh và các khuyết tật khi sinh hoặc sự phát triển và sự tăng trưởng cơ thể bất thường hoặc những vấn đề về gen (bao gồm cả các chứng thoát vị cho tới 10 tuổi).',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.3',
                'description' =>'Bệnh động kinh, tất cả các hình thức của tràn dịch não, tất cả các hình thức của hẹp bao quy đầu và các biến chứng của chúng, tất cả các trường hợp vẹo vách ngăn mũi.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.4',
                'description' =>'Viêm khớp xương, loãng xương, vẹo cột sống và tất cả các hình thức của bệnh thoái hóa xương.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.5',
                'description' =>'Phẫu thuật thẩm mỹ hoặc việc điều trị hay các biến chứng có liên quan đến việc làm đẹp bao gồm cả việc điều trị các vấn đề về da, viêm nang lông (trứng cá), rám da, tàn nhang, mụn thịt, thiếu sắc tố da, gàu.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.6',
                'description' =>'Giảm cân và tăng cân, các biến chứng về rụng tóc, sẹo, tiếp nhận hoặc sử dụng mỹ phẩm có tác dụng thuốc, vitamin, khoáng chất, sữa, chất dinh dưỡng bổ sung, các chương trình kiểm soát cân nặng và điều trị hoặc phẫu thuật lựa chọn.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.7',
                'description' =>'Phẫu thuật chỉnh hình, trừ khi bị thương tích do tai nạn và phẫu thuật chỉnh hình là cần thiết để khôi phục lại chức năng của Người được bảo hiểm.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.8',
                'description' =>'Các dịch vụ liên quan đến vô sinh, thai sản, sinh đẻ, sẩy thai, ph thai hoặc bất kỳ nguyên nhân nào có liên quan đến thai sản, việc triệt sản hoặc kiểm tra việc triệt sản.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.9',
                'description' =>'Các tình trạng có liên quan đến hội chứng suy giảm miễn dich mắc phải (AIDS) hoặc các bệnh lây truyền qua đường tình dục (STD).',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.10',
                'description' =>'Điều trị hoặc phòng ngừa để giảm nhẹ các triệu chứng thông thường liên quan đến tuổi già, sự mãn kinh, loãng xương hoặc dậy thì sớm, loạn chức năng giới tính hoặc thay đổi giới tính.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.11',
                'description' =>'Kiểm tra sức khỏe, chăm sóc dưỡng bệnh bao gồm cả chữa bệnh bằng cách nghỉ ngơi và việc phục hồi.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.12',
                'description' =>'Bất kỳ sự điều trị, thuốc hoặc các đồ dùng y tế nào không liên quan đến chẩn đoán; và chẩn đoán không liên quan đến thương tích hoặc ốm đau hoặc không theo sự cần thiết về mặt y tế và những tiêu chuẩn thông thường.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.13',
                'description' =>'Xét nghiệm bảng dị ứng cho sự không dung nạp thực phẩm, xét nghiệm các mức độ vitamin và các mức độ khoáng chất vi lượng.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.14',
                'description' =>'Tất cả các chi phí y tế liên quan đến sự bất thường của thị lực bao gồm nhưng không chỉ giới hạn ở tất cả các hình thức lác mắt (lé), kính đeo mắt, kính sát tròng, phẫu thuật LASIK và bất kỳ chi phí nào có liên quan đến việc điều trị trợ giúp thị giác.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.15',
                'description' =>'Bất kỳ sự điều trị nào để chẩn đoán, điều trị hoặc phòng ngừa một tình trạng nha khoa hoặc phẫu thuật chỉnh hình có liên quan đến răng, nướu hoặc hm trong trường hợp có liên quan đến răng, răng giả, cầu răng, điều trị ống chân răng, trám răng, chỉnh răng, lấy cao răng, nhổ răng và cấy implant, ngoại trừ thương tích do tai nạn đối với răng trong thời gian sản phẩm bảo hiểm bổ sung này đang có hiệu lực hoặc trừ khi được bảo hiểm theo quyền lợi chăm sóc răng của sản phẩm bảo hiểm bổ sung này. ',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.16',
                'description' =>'Điều trị y tế có liên quan đến chứng nghiện rượu, sử dụng chất cĩ cồn, sử dụng và nghiện thuốc lá, ma túy hoặc các chất gây nghiện khác hoặc các chất tạo thành thói quen.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.17',
                'description' =>'Điều trị y tế có liên quan đến các rối loạn thần kinh, các rối loạn tâm thần, lo âu, các vấn đề về tâm thần, các rối loạn nhân cách, các rối loạn về nói, tự kỷ, stress, các rối loạn về ăn và các tình trạng rối loạn tăng động giảm chú ý (ADHD). ',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.18',
                'description' =>'Điều trị y tế mà đang trong giai đoạn thử nghiệm hoặc đang trong sự phát triển thí nghiệm.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.19',
                'description' =>'Điều trị các rối loạn về ngủ, các rối loạn về thở có liên quan đến giấc ngủ bao gồm cả ngy v ngưng thở trong lúc ngủ.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.20',
                'description' =>'Bất kỳ sự tiêm chủng hoặc chủng ngừa nào, ngoại trừ vắc xin bệnh dại cần thiết sau khi bị động vật tấn công hoặc chích ngừa uốn ván cần thiết sau khi bị tai nạn hoặc bị thương tật.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.21',
                'description' =>'Điều trị không được xem là y học hiện đại, ngoại trừ y học thay thế được chi trả theo quyền lợi điều trị ngoại trú.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.22',
                'description' =>'Bất kỳ sự điều trị y tế nào do Bác sĩ y khoa thực hiện mà người này là cha mẹ, anh chị em ruột, vợ chồng hoặc con cái của Người được bảo hiểm. Người được bảo hiểm là Bác sĩ y khoa có đăng ký sẽ không được bồi hoàn cho các điều trị do tự mình thực hiện.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.23',
                'description' =>'Tự tử hoặc cố gắng tự tử, tự gây thương tích hoặc cố gắng tự gây thương tích cho dù là chính mình làm hoặc cho phép (những) người khác làm trong lúc có mất trí hay không. Điều này cũng bao gồm cả những tai nạn đối với Người được bảo hiểm do hít, sử dụng, uống, hoặc tiêm chích chất độc vào trong cơ thể hoặc sử dụng thuốc quá liều.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.24',
                'description' =>'Bất kỳ tổn thất hoặc thương tích nào phát sinh từ hành động của Người được bảo hiểm dưới ảnh hưởng của chất có cồn, thuốc gây nghiện, thuốc gây mê.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.25',
                'description' =>'Thương tật do các hành vi tham gia ẩu đả của Người được bảo hiểm, trừ khi chứng minh được đó là hành động phòng vệ chính đáng. ',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.26',
                'description' =>'Thương tật trong khi Người được bảo hiểm phạm tội hoặc trong khi Người được bảo hiểm đang bị bắt giữ hoặc đang trốn thoát khỏi sự bắt giữ của cơ quan có thẩm quyền.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.27',
                'description' =>'Các thương tật do vi phạm luật giao thông.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.28',
                'description' =>'Thương tật trong khi Người được bảo hiểm tham gia thể thao chuyên nghiệp (bao gồm cả việc luyện tập cho môn thể thao đó), các môn thể thao hoặc các hoạt động nguy hiểm, và các môn thể thao tiếp xúc.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.29',
                'description' =>'Thương tật trong khi Người được bảo hiểm đi lên xuống hoặc di chuyển trên một máy bay không có giấy phép chuyên chở hành khách hoặc không hoạt động như là một máy bay thương mại.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.30',
                'description' =>'Thương tật trong khi Người được bảo hiểm đang lái máy bay hoặc đang làm việc trên máy bay như là một nhân viên của một công ty hàng không.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.31',
                'description' =>'Thương tật trong khi Người được bảo hiểm phục vụ như là một quân nhân, cảnh sát, hoặc một người tình nguyện và tham gia vào chiến tranh hoặc ngăn chặn tội phạm.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.32',
                'description' =>'Khủng bố, chiến tranh (cho dù có được tuyên bố hay không), sự xâm lược, các hành động của kẻ thù nước ngoài, nội chiến, cách mạng, nổi dậy, bạo động dân sự, dân chúng nổi dậy chống chính phủ, nổi loạn, đình công.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.33',
                'description' =>'Các bức xạ ion hóa hoặc nhiễm phóng xạ từ nhiên liệu hạt nhân hoặc từ chất thải hạt nhân từ sự đốt cháy nhiên liệu hạt nhân. Phóng xạ, độc hại, nổ hoặc tính chất nguy hiểm khác của bất kỳ sự tập hợp hạt nhân dễ nổ nào hoặc thành phần hạt nhân của nó.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => '3.34',
                'description' =>'Điều trị y tế có liên quan đến việc nhiễm/ngộ độc trực tiếp hoặc gián tiếp do hóa chất hoặc thuốc.',
                'created_user' => 1,
                'updated_user' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ]);
    }
}
