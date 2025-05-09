<div class="container d-flex justify-content-center mt-5">
    <div class="col-12 col-md-8 col-lg-6">
        <form method="post" action="/check" class="d-flex flex-column align-items-center justify-content-center mt-5">
            <label for="name" class="text-yellow fw-bold fs-5 text-center mb-2 text-uppercase">
                Vui lòng nhập họ và tên quý khách (Có dấu) <br>
                請輸入您的姓名 (PASSPORT/VIETNAMESE NAME)
            </label>
            <div class="col-12 col-md-8 col-lg-6">
                <input id="name" name="input_name" type="text" class="form-control w-100" placeholder="">
            </div>
            <button type="submit" class="bg-yellow fw-bold btn mt-3 px-3">
                Xác nhận <span class="mx-1">/</span> 確認
            </button>
        </form>
    </div>
</div>  

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lắng nghe sự kiện click
        document.getElementById('continue').addEventListener('click', function() {
            // Cuộn xuống 100vh
            window.scrollBy({
                top: window.innerHeight, // Cuộn xuống 1 khoảng 100vh
                behavior: 'smooth' // Hiệu ứng cuộn mượt mà
            });
        });

        // Lắng nghe sự kiện cuộn
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY; // Lấy vị trí cuộn hiện tại
            const threshold = window.innerHeight * 0.2; // Tính 20vh

            // Kiểm tra nếu vị trí cuộn lớn hơn 40vh
            if (scrollPosition > threshold) {
                document.getElementById('continue').style.opacity = '0'; // Đặt opacity thành 0
            } else {
                document.getElementById('continue').style.opacity = '1'; // Đặt opacity trở lại 1
            }
        });
    });
</script>