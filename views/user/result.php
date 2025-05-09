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
            const threshold = window.innerHeight * 0.3; // Tính 20vh

            // Kiểm tra nếu vị trí cuộn lớn hơn 40vh
            if (scrollPosition > threshold) {
                document.getElementById('continue').style.opacity = '0'; // Đặt opacity thành 0
            } else {
                document.getElementById('continue').style.opacity = '1'; // Đặt opacity trở lại 1
            }
        });
    });
</script>

<div class="container d-flex justify-content-center mt-5">
    <div class="col-12 col-md-8 col-lg-6 d-flex flex-column gap-3 gap-lg-0 card-result p-3 rounded-4 mb-lg-0 shadow">
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Họ và tên<span class="mx-1">/</span>姓和名
            </div>
            <div class="fw-info fs-4">
                <?= $_SESSION['temp']['result'][0] ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Ngày sinh<span class="mx-1">/</span>出生日期
            </div>
            <div class="fw-info fs-4">
            <?= $_SESSION['temp']['result'][2] ?? '<span class="small text-muted fst-italic">(trống)</span>' ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Số phòng<span class="mx-1">/</span>房號
            </div>
            <div class="fw-info fs-4">
            <?= $_SESSION['temp']['result'][4] ?? '<span class="small text-muted fst-italic">(trống)</span>' ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Loại phòng<span class="mx-1">/</span>房型
            </div>
            <div class="fw-info fs-4">
                <?= $_SESSION['temp']['result'][5] ?? '<span class="small text-muted fst-italic">(trống)</span>' ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Người ở cùng<span class="mx-1">/</span>同住人
            </div>
            <div class="fw-info fs-4">
                <?= $_SESSION['temp']['roomate'][0][0]  ?? '<span class="small text-muted fst-italic">(trống)</span>' ?>
            </div>
        </div>
    </div>
</div>
<div class="col-10 col-md-12 text-center mt-4">
    <div id="continue" class="fw-bold fs-5 text-yellow text-uppercase img-heading">
        <i class="bi bi-chevron-down me-2"></i>xem hoạt động chi tiết <span class="me-1">/</span> 詳細活動
    </div>
</div>

<div class="col-12 col-md-8 col-lg-5 mt-5">
    <img class="w-100 mx-auto" src="<?= URL_STORAGE ?>system/timeline.png" alt="timeline.png">
</div>

<div class="col-12 col-md-8 col-lg-6 text-center mt-5 mb-3 px-2">
    <div class="h5 fw-bold fst-italic text-yellow img-heading">
    THD Event chân thành cảm ơn LITEON đã tin tưởng và đồng hành trong suốt thời gian qua. Chúc CBCNV LITEON có một trải nghiệm và hành trình tuyệt vời ! 
    <div class="mt-3">
        THD Event 衷心感謝光寶科技一直以來的信任與支持。祝福光寶員工有美好的經歷和旅程！
    </div>
    </div>
</div>