<h1>Quần áo</h1>

<div class="product-container">
    <div class="product-item">
        <a href="detail.php?id=1">
            <div class="product-image">
                <img src="2170.jpg" alt="Áo len từ thiện">
            </div>
            <div class="product-info">
                <p class="product-name">Áo len ấm mùa đông</p>
            </div>

            <div><button class="btn-receive">Nhận</button></div>
        </a>
    </div>
    
    <div class="product-item">
        <a href="detail.php?id=2">
            <div class="product-image">
                <img src="2170.jpg" alt="Găng tay">
            </div>
            <div class="product-info">
                <p class="product-name">Găng tay len trẻ em</p>
            </div>

            <div><button class="btn-receive">Nhận</button></div>
        </a>
    </div>
</div>


<style>
    
.product-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
}

.product-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    text-align: center;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.product-item a {
    text-decoration: none;
    color: inherit;
}

.product-image img {
    width: 100%;
    height: 200px;
    object-fit: cover; /* Giúp ảnh không bị méo */
}

.product-info {
    padding: 10px;
}

.product-name {
    font-weight: bold;
    color: #333;
    margin: 10px 0;
    /* Hiệu ứng đổi màu khi hover */
}

.product-item:hover .product-name {
    color: #28a745; /* Màu xanh lá giống menu của bạn */
}
.btn-receive{
        display: inline-block;
    padding: 8px 15px;
    border: 1px solid #28a745;
    color: #28a745;
    border-radius: 5px;
}
.btn-receive:hover {
    background-color: #28a745;
    color: #fff;
}
</style>