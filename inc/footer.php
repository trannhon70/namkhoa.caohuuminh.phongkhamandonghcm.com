<footer class="footer" >
    <img loading="lazy" src="<?php echo $local ?>/images/banner/footer.webp" alt="...">
    <div class="footer__body" >
        <div class="footer__body-top" >
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
        </div>
        <div class="footer__body-botom" >
            <a href="tel:+0968063109"></a>
        </div>
    </div>
</footer>
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
</body>

</html>