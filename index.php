<?php
include_once "inc/header.php"
?>
<link rel="preload" href="css/trang-chu.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
<noscript>
    <link rel="stylesheet" href="css/trang-chu.min.css">
</noscript>

</head>

<?php
$slides = [
    [
        "image" => "/images/banner/sui_mau_ga.webp",
        "alt" => "Sùi mào gà",
        "symptom" => "Nổi các nốt sần, gai thịt mềm tại lỗ sáo, quy đầu, bao quy đầu, thân dương vật.",
        "complication" => "Ảnh hưởng đến tâm lý, chất lượng cuộc sống và sức khỏe tổng thể. Thậm chí dẫn tới dương vật."
    ],
    [
        "image" => "/images/banner/benh_lau.webp",
        "alt" => "Bệnh lậu",
        "symptom" => "Tiểu buốt, tiểu rát, nước tiểu đục, nặng mùi, có thể lẫn máu hoặc mủ. Lỗ sáo sưng đỏ, chảy mủ trắng đục hoặc vàng xanh.",
        "complication" => "Ảnh hưởng đến tâm lý, chất lượng cuộc sống và sức khỏe tổng thể, làm tăng nguy cơ vô sinh hiếm muộn."
    ],
    [
        "image" => "/images/banner/roi_loan_cuong_duong.webp",
        "alt" => "Rối loạn cương dương",
        "symptom" => "Dương vật khó cương, cương không đủ cứng để thực hiện quan hệ, thời gian cương cứng ngắn, dương vật đau nhức khi sau xuất tinh.",
        "complication" => "Tác động tiêu cực đến tâm lý, gây suy giảm ham muốn và có thể dẫn đến liệt dương, tăng vô sinh hiếm muộn."
    ],
    [
        "image" => "/images/banner/viem_bao_quy_dau.webp",
        "alt" => "Rối loạn cương dương",
        "symptom" => "Quy đầu, bao quy đầu tấy đỏ, mọng nước và nổi nhiều nốt mụn nhỏ, tiết dịch nhầy và bợn trắng, gây ngứa ngáy và đau rát khó chịu.",
        "complication" => "Viêm nhiễm lan sang có bộ phận khác, ảnh hưởng đến tâm lý và sức khỏe tổng thể của nam giới. Có thể gây hoại tử quy đầu, ung thư dương vật."
    ],
    [
        "image" => "/images/banner/benh_tinh_hoan.webp",
        "alt" => "Bệnh tinh hoàn",
        "symptom" => "Đau một hoặc cả hai bên tinh hoàn, tinh hoàn sưng tấy, bầm tím hoặc to mọng, lệch bên. Sốt cao và ớn lạnh, buồn nôn và nôn, tiểu buốt rát…",
        "complication" => "Bệnh tinh hoàn cần được hỗ trợ điều trị sớm, tránh để lâu có thể dẫn đến hoại tử hoặc teo tinh hoàn, tăng nguy cơ vô sinh nam, thậm chí ung thư tinh hoàn."
    ],

    [
        "image" => "/images/banner/viem_nhiem_nam_khoa.webp",
        "alt" => "Bệnh tinh hoàn",
        "symptom" => " Dương vật nổi mụn và tiết dịch lạ, tiểu buốt rát, tiểu nhiều lần, nước tiểu đục. Dương vật có mùi hôi, khó cương và đau nhức khi cương…",
        "complication" => "Ảnh hưởng trực tiếp đến sức khỏe tình dục, sinh sản và tiết niệu của nam giới. Bệnh tiến triển nặng có thể gây ung thư, vô sinh nam."
    ],
    [
        "image" => "/images/banner/xuat_tinh_som.webp",
        "alt" => "Bệnh tinh hoàn",
        "symptom" => "Xuất tinh rất nhanh, từ 1 – 2 phút. Xuất tinh khi vừa đưa dương vật vào âm đạo hoặc ngay trong khúc dạo đầu. Dương vật xìu liền sau khi xuất tinh.",
        "complication" => "Lo lắng và căng thẳng, ảnh hưởng công việc và cuộc sống. Né tránh quan hệ, lâu dần dẫn đến lãnh cảm, rối loạn cương dương, thậm chí liệt dương."
    ],

];
?>

<body>

    <header class="header">
        <div class="header__body">
            <img loading="lazy" width="100%" height="auto" srcset="<?php echo $local ?>/images/banner/banner.webp 1024w, <?php echo $local ?>/images/banner/banner.webp 640w" sizes="(max-width: 640px) 100vw, 1024px" src="<?php echo $local ?>/images/banner/banner.webp" alt="...">
        </div>
    </header>
    <section class="section__button">
        <a aria-label="liên hệ" class="animated-button" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            tư vấn với bác sĩ tại đây</a>
    </section>

    
    <section class="treatment treatment__card">
        <div class="treatment__namkhoa">

            <ul>
                <li class="treatment__namkhoa-title" >ĐIỀU TRỊ CHUYÊN KHOA</li>
                <li class="treatment__namkhoa-titleN">+ bệnh nam khoa</li>
                <li><a aria-label="1" href="">1. Bệnh bao quy đầu</a></li>
                <li><a aria-label="1" href="">2. Rối loạn xuất tinh</a></li>
                <li><a aria-label="1" href="">3. Bệnh tinh hoàn</a></li>
                <li><a aria-label="1" href="">4. Bệnh tuyến tiền liệt</a></li>
                <li><a aria-label="1" href="">5. Bệnh đường tiết niệu</a></li>
                <li><a aria-label="1" href="">6. Vô sinh hiến muộn</a></li>
                <li><a aria-label="1" href="">7. Rối loạn chức năng sinh dục</a></li>
                <li><a aria-label="1" href="">8. Bệnh dương vật</a></li>
                
                <li class="treatment__namkhoa-titleN">+  bệnh xã hội</li>
                <li><a aria-label="1" href="">1. Sùi màu gà</a></li>
                <li><a aria-label="1" href="">2. Bệnh lậu</a></li>
                <li><a aria-label="1" href="">3. Giang mai</a></li>
                <li><a aria-label="1" href="">4. Mụn sinh dục</a></li>
                <li><a aria-label="1" href="">5. Rận mu</a></li>
               
            </ul>
        </div>
       
    </section>
    <section class="treatment">
        <a aria-label="chat" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="expert__chat">
            <img loading="lazy" src="<?php echo $local ?>/images/icons/chat_dakhoa.gif" alt="...">
        </a>
    </section>

    <session class="expert">
        <div class="expert__title">
            GIỚI THIỆU THÔNG TIN BÁC SĨ
        </div>
        <div class="expert__content">
            Đi thăm khám Nam khoa hiệu quả và an toàn bắt buộc cần có bác sĩ trình độ cao,
            chuyên môn tốt và nhiều kinh nghiệm thăm khám.
        </div>
        <img loading="lazy" width="100%" height="auto" src="<?php echo $local ?>/images/banner/bac_si_1.webp" alt="...">

    </session>
    <section class="expert">
        <div class="expert__title1">
            BS. cao hữu minh
        </div>
        <span>
            Quá trình công tác
        </span>
    </section>
    <section class="expert expert_ul">
        <ul>
            <li><strong>+ </strong> 20 năm kinh nghiệm khám chữa bệnh Ngoại khoa tổng quát và Nam khoa</li>
            <li><strong>+ </strong> Từng công tác tại Bệnh viện Quân Y 16, Bệnh viện Quân Y 103, Viện Y Học Cổ Truyền</li>
            <li><strong>+ </strong> Từng giữ chức vụ Phó giám đốc Bệnh viện Quận Y 16 trực thuộc Bộ Quốc Phòng</li>
        </ul>
    </section>
    <section class="expert">
        <div class="expert__spacialty">
            <div class="expert__spacialty-title">
                Chuyên khoa :
            </div>
            <ul>
                <li>- Sinh sản nam</li>
                <li>- Bệnh ngoại tiết niệu</li>
                <li>- Rối lọa tiết tố nam</li>
                <li>- Cấp cưu nam khoa</li>
            </ul>
        </div>
        <a aria-label="chat" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="expert__chat">
            <img loading="lazy" src="<?php echo $local ?>/images/icons/chat_dakhoa.gif" alt="...">
        </a>
        <div class="expert__certificate">
            <button>CHỨNG CHỈ</button>
        </div>
    </section>
    <section class="expert">
        <div class="expert__certificate-img">
            <img loading="lazy" width="100%" height="auto" src="<?php echo $local ?>/images/banner/chung_chi.webp" alt="...">
        </div>
    </section>
    <section class="section__button">
        <a aria-label="liên hệ" class="animated-button" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đặt lịch khám ngay</a>
    </section>

    <section class="treatment">
        <div class="treatment__title">
            ĐIỀU TRỊ CÁC BỆNH LÝ
        </div>

    </section>
   

   

    
    <section class="treatment">
    <?php foreach ($slides as $slide): ?>
                        <div class="list_image_card">
                            <img loading="lazy" height="100%" width="100%" src="<?php echo $local . $slide['image']; ?>" alt="<?php echo $slide['alt']; ?>">
                            <div class="list_image_card-text">
                                <div>
                                    <strong>Biểu hiện : </strong>
                                    <span><?php echo $slide['symptom']; ?></span>
                                </div>
                                <div>
                                    <strong>Biến chứng: </strong>
                                    <span><?php echo $slide['complication']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
    </section>
    <section class="feedback">
        <div class="feedback_body">
            <div class="feedback_body-container">
                <img loading="lazy" src="<?php echo $local ?>/images/banner/feedback.webp" alt="...">
                <div class="feedback_body-list">
                    <div class="feedback_body-list-item activeFeedback">
                        <img loading="lazy" src="<?php echo $local ?>/images/banner/chat.webp" alt="...">
                    </div>
                    <div class="feedback_body-list-item ">
                        <img loading="lazy" src="<?php echo $local ?>/images/banner/chat1.webp" alt="...">
                    </div>
                </div>
                <div class="index-feedbacks">
                    <div class="feedback-item feedback-item-0 activeFeedback"></div>
                    <div class="feedback-item feedback-item-1"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__button">
        <a aria-label="liên hệ" class="animated-button" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Liên hệ ngay</a>
    </section>
    <section class="service">
        <div class="service__body">
            <div class="service__body-item">
                <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_bs.webp" alt="...">
            </div>
            <div class="service__body-item">
                <div class="service__body-item-card">
                    <img width="44px" height="44px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="...">
                    <div>
                        Mức chi phí hợp lý, rõ ràng
                    </div>
                </div>
                <div class="service__body-item-card">
                    <img width="44px" height="44px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="...">
                    <div>
                        Dịch vụ chuyên nghiệp
                    </div>
                </div>
                <div class="service__body-item-card">
                    <img width="44px" height="44px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="...">
                    <div>
                        Bảo mật thông tin
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="license">
        <img loading="lazy" src="<?php echo $local ?>/images/banner/giay_phep.webp" alt="...">
    </section>
    <section class="time">
        <div class="ping-wrapper">
            <div class="ping-border">
                <img loading="lazy" src="<?php echo $local ?>/images/banner/time.webp" alt="...">
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="contact__title">
            LIÊN HỆ TƯ VẤN VÀ ĐẶT LỊCH KHÁM
        </div>
        <div class="contact__body">
            <div>
                <a aria-label="phone" href="tel:+0968063109">
                    <strong>HOTLINE: </strong> <span>0968 063 109</span>
                </a>
            </div>
            <div>
                <a aria-label="phone" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                    <strong>ZALO: </strong> <span>0968 063 109</span>
                </a>
            </div>
            <div>
                <a aria-label="phone" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                    <strong>CHAT TRỰC TIẾP </strong>
                </a>
            </div>
            <div>
                <strong>ĐỊA CHỈ: </strong> <span>360 An Dương Vương, P.4, Q.5, TP.HCM</span>
            </div>
        </div>
    </section>

    <?php include_once "inc/footer.php" ?>