<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.product-item {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
    padding: 10px;
    width: 200px;
    text-align: center;
}

#load-more {
    margin: 20px auto;
    display: block;
}
</style>
<body>
    <header>
        <h1>Danh sách sản phẩm</h1>
    </header>
    <main class="product-list-container">
        <section class="product-list"></section>
        <button id="load-more">Tải thêm sản phẩm</button>
    </main>
    <script  defer>
        const products = [
    { name: "Sản phẩm 1", price: "100.000 VNĐ" },
    { name: "Sản phẩm 2", price: "200.000 VNĐ" },
    { name: "Sản phẩm 3", price: "300.000 VNĐ" },
    { name: "Sản phẩm 4", price: "400.000 VNĐ" },
    { name: "Sản phẩm 5", price: "500.000 VNĐ" },
    { name: "Sản phẩm 6", price: "600.000 VNĐ" },
    // Thêm nhiều sản phẩm khác nếu cần
];

let currentIndex = 0;
const itemsPerPage = 3;

function loadProducts() {
    const productList = document.querySelector('.product-list');
    const fragment = document.createDocumentFragment();

    for (let i = 0; i < itemsPerPage; i++) {
        if (currentIndex >= products.length) {
            break; // Không còn sản phẩm nào để tải
        }

        const productItem = document.createElement('div');
        productItem.classList.add('product-item');
        productItem.innerHTML = `
            <h2>${products[currentIndex].name}</h2>
            <p>Giá: ${products[currentIndex].price}</p>
        `;
        fragment.appendChild(productItem);
        currentIndex++;
    }

    productList.appendChild(fragment); // Thêm toàn bộ vào DOM một lần
}

// Tải sản phẩm đầu tiên khi trang được tải
loadProducts();

// Xử lý sự kiện cho nút "Tải thêm sản phẩm"
document.getElementById('load-more').addEventListener('click', loadProducts);
    </script>
</body>
</html>

<!-- <section class="treatment">
        <div id="slider">
            <div class="slide_show w-100">
                <div class="list_image">
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
                </div>
                <div class="btns">
                    <div class="btn-left btn"><img loading="lazy" width="30px" height="30px" src="<?php echo $local ?>/images/icons/icon_prev.webp" alt="..."></div>
                    <div class="btn-right btn"><img loading="lazy" width="30px" height="30px" src="<?php echo $local ?>/images/icons/icon_next.webp" alt="..."></i></div>
                </div>

            </div>
        </div>
    </section> -->