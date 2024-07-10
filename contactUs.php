<?php include('header.php'); ?>

<div class="container-fluid" id="about-main">
    <div class="h-100">
        <div class="row">
            <div class="col-lg-6 mt-5 pe-5 pt-4">
                <h1 class="mt-5 text-secondary">تماس با ما</h1>
                <nav aria-label="breadcrumb" class="float-end mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">صفحات</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">خانه</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4">
            <div class=" bg-main-color-2 p-5 rounded-3" id="contactInfo">
                <div class="row">
                    <div class="col-4 d-flex align-items-center">
                        <div id="contactIcon" class="bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-map-marker-alt main-color-1"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <p>آدرس</p>
                        <h5>ایران،مشهد،خیابان لورم</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-4 my-lg-0">
            <div class=" bg-main-color-2 p-5 rounded-3" id="contactInfo">
                <div class="row">
                    <div class="col-4 d-flex align-items-center">
                        <div id="contactIcon" class="bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone main-color-1"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <p> با ما تماس بگیرید</p>
                        <h5 class="w-50">05130000000</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class=" bg-main-color-2 p-5 rounded-3" id="contactInfo">
                <div class="row">
                    <div class="col-4 d-flex align-items-center">
                        <div id="contactIcon" class="bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-envelope-open main-color-1"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <p>به ما ایمیل بزنید</p>
                        <h5 class="w-50">example@yahoo.com</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-lg-6 wow animate__fadeIn">
            <div class="col-12 bg-main-color-2 p-5 rounded-3">
                <div class="col-6 col-sm-3">
                    <p class="py-2 px-2 border border-1 border-main-color-2 rounded-5 my-4">قرار ملاقات</p>
                </div>
                <div class="col-12">
                    <h3 class="">آیا مشکلی دارید؟ لطفا با ما تماس بگیرید!</h3>
                    <p class="lh-lg my-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط.</p>
                    <form class="row justify-content-center align-items-center h-100">
                        <div class="col-sm-6 mt-4 mb-3">
                            <input type="text" class="form-control form-control-lg border-0" placeholder="نام کاربری">
                        </div>
                        <div class="col-sm-6 mb-3 mb-lg-0">
                            <input type="email" class="form-control form-control-lg border-0" placeholder="ایمیل">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control form-control-lg border-0" placeholder="موضوع">
                        </div>

                        <div class="col-12 my-3">
                            <textarea type="text" class="form-control form-control-lg border-0" placeholder="مشکل خود را توضیح دهید" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3 btn-lg">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow animate__fadeIn" data-wow-delay="0.5s">
            <div class="h-100" style="min-height: 400px;">
                <iframe class="rounded h-100 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d615265.8768495044!2d58.95030942354784!3d36.47856243953651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6c911abe4131d7%3A0xc9c57e3a9318753b!2sMashhad%2C%20Razavi%20Khorasan%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1719999371494!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</div>


<?php include('footer.php'); ?>