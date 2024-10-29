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
<script defer >
    // Số lượng lớp ping cần tạo
    const numberOfLayers = 10;
    // Lấy phần tử chứa các lớp ping
    const pingWrapper = document.querySelector('.ping-wrapper');
    // Hàm tạo màu ngẫu nhiên tươi sáng
    function getRandomBrightColor() {
      // Sử dụng HSL để tạo màu với độ bão hòa và độ sáng cao
      const hue = Math.floor(Math.random() * 360); 
      const saturation = 50; 
      const lightness = Math.floor(Math.random() * 21) + 20; 
      return `hsl(${hue}, ${saturation}%, ${lightness}%)`;
    }

    // Tạo các lớp ping
    for (let i = 1; i <= numberOfLayers; i++) {
      const pingLayer = document.createElement('div');
      pingLayer.className = `ping-layer ping-layer${i}`;
      pingLayer.style.width = `calc(100% + ${10 * i}px)`;
      pingLayer.style.height = `calc(100% + ${10 * i}px)`;
      pingLayer.style.border = '4px solid';
      pingLayer.style.borderColor = getRandomBrightColor(); 
      pingLayer.style.animationDelay = `${0.2 * (i - 0.6)}s`; 
      pingWrapper.appendChild(pingLayer);
    }
  </script>

  <!-- Google tag (gtag.js) -->
<!-- <script defer src="https://www.googletagmanager.com/gtag/js?id=G-M8KPG8P2YN"></script>
<script defer>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8KPG8P2YN');
</script> -->

<script defer>
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      // Chèn script Google Tag Manager sau khi đợi 10 giây
      const gtagScript = document.createElement("script");
      gtagScript.src = "https://www.googletagmanager.com/gtag/js?id=G-M8KPG8P2YN";
      gtagScript.async = true; // Sử dụng async cho script động
      document.head.appendChild(gtagScript);

      // Thiết lập gtag sau khi tải script
      gtagScript.onload = function() {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-M8KPG8P2YN');
      };
    }, 10000); // Trì hoãn 10 giây
  });
</script>
</body>

</html>