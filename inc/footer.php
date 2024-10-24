 <footer class="footer" >
    <img loading="lazy" src="<?php echo $local ?>/images/banner/footer.webp" alt="...">
    <div class="footer__body" >
        <div class="footer__body-top" >
            <a aria-label="left" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
            <a aria-label="center" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
            <a aria-label="right" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
        </div>
        <div class="footer__body-botom" >
            <a aria-label="bottom" href="tel:+0968063109"></a>
        </div>
    </div>
</footer>
<?php include_once 'layout/modalKhuyenMai.php' ?>

<script language="javascript" src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en"></script>
<script defer src="<?php echo $local ?>/js/slider.min.js"></script>
<script defer>
    const feedbacks = document.querySelectorAll('.feedback_body-list-item');
    const listItems = document.querySelectorAll('.feedback-item');
    let currentIndex = 0;

    const showFeedback = (index) => {
        feedbacks.forEach((feedback, idx) => {
            feedback.classList.toggle('activeFeedback', idx === index);
        });
        listItems.forEach((listItem, idx) => {
            listItem.classList.toggle('activeFeedback', idx === index);
        });
    };

    const handleChangeSlideFeedback = () => {
        currentIndex = (currentIndex + 1) % feedbacks.length;
        showFeedback(currentIndex);
    };

    showFeedback(currentIndex); // Initialize the first feedback as active
    setInterval(handleChangeSlideFeedback, 4000);
</script>
<!-- <script defer>
document.addEventListener('scroll', function() {
    const expertSection = document.querySelector('.expert_ul');
    const rect = expertSection.getBoundingClientRect();

    // Kiểm tra nếu phần tử .expert nằm trong khung nhìn
    if (rect.top < window.innerHeight) {
        // Kiểm tra nếu thẻ <ul> đã được thêm vào hay chưa
        if (!expertSection.querySelector('ul')) {
            // Tạo thẻ <ul>
            const ulElement = document.createElement('ul');

            // Tạo nội dung cho thẻ <ul>
            const content = [
                "<li><strong>+ </strong> 20 năm kinh nghiệm khám chữa bệnh Ngoại khoa tổng quát và Nam khoa</li>",
                "<li><strong>+ </strong> Từng công tác tại Bệnh viện Quân Y 16, Bệnh viện Quân Y 103, Viện Y Học Cổ Truyền</li>",
                "<li><strong>+ </strong> Từng giữ chức vụ Phó giám đốc Bệnh viện Quận Y 16 trực thuộc Bộ Quốc Phòng</li>"
            ];

            // Gắn nội dung vào thẻ <ul>
            ulElement.innerHTML = content.join(''); // Chuyển mảng thành chuỗi HTML
            
            // Thêm thẻ <ul> vào phần tử expertSection
            expertSection.appendChild(ulElement); // Thêm thẻ <ul> vào DOM

            // Hiển thị nội dung
            ulElement.style.display = 'block'; // Hiển thị thẻ <ul>
        }
    }
});
</script> -->
</body>

</html>