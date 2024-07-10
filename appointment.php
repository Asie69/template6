<?php include('header.php'); ?>

<div class="container-fluid" id="about-main">
    <div class="h-100">
        <div class="row">
            <div class="col-lg-6 mt-5 pe-5 pt-4">
                <h1 class="mt-5 text-secondary">قرار ملاقات</h1>
                <nav aria-label="breadcrumb" class="float-end mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">قرار ملاقات</li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">صفحات</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">خانه</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>
<!--appointment-start-->
<div class="container">
    <div class="row">
        <div class="col-lg-6 wow animate__fadeInUp">
            <div class="col-12 mt-5">
                <div class="col-4 col-sm-3">
                    <p class="py-2 px-2 border border-1 border-main-color-2 rounded-5 my-4 text-center">قرار ملاقات</p>
                </div>
                <div class="col-12">
                    <h2 class="my-4">یک قرار ملاقات برای دیدن پزشک ما تعیین کنید</h2>
                    <p class="lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                        طراحان
                        از صنعت چاپ، و با استفاده از طراحان
                        از صنعت چاپ، و با استفاده از طراحان
                        گرافیک استگرافیک است گرافیک است</p>
                    <div class="col-12 d-flex justify-content-between align-items-center bg-main-color-2 p-5">
                        <div class="col-3">
                            <i class="fa-solid fa-phone main-color-1 p-4 rounded-circle bg-white"></i>
                        </div>
                        <div class="col-10">
                            <p class="mb-3">به ما زنگ بزنید</p>
                            <h5 class="mb-0">05130000000</h5>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center bg-main-color-2 p-5 mt-4">
                        <div class="col-3">
                            <i class="fa-solid fa-envelope-open main-color-1 p-4 rounded-circle bg-white"></i>
                        </div>
                        <div class="col-10">
                            <p class="mb-3">به ما ایمیل دهید</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 bg-main-color-2 p-5 wow animate__fadeInUp mt-4 mt-lg-0" data-wow-delay="0.1s">
            <form class="row justify-content-center align-items-center h-100">
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg border-0" placeholder="نام کاربری">
                </div>
                <div class="col-sm-6">
                    <input type="email" class="form-control form-control-lg border-0 my-3 my-lg--0" placeholder="ایمیل">
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control form-control-lg border-0" placeholder="موبایل">
                </div>
                <div class="col-sm-6 my-3 my-lg--0">
                    <select class="form-select form-select-lg border-0">
                        <option selected>انتخاب دکتر</option>
                        <option value="1">دکتر 1</option>
                        <option value="2">دکتر 2</option>
                        <option value="3">دکتر 3</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg border-0" placeholder="انتخاب روز" id="filter-date">
                </div>
                <div class="col-sm-6 my-3 my-lg--0">
                    <input type="text" class="form-control form-control-lg border-0" placeholder="انتخاب ساعت" id="timepicker">
                </div>
                <div class="col-12">
                    <textarea type="text" class="form-control form-control-lg border-0" placeholder="مشکل خود را توضیح دهید" rows="5"></textarea>
                </div>
                <div class="col-12 mt-3 mt-lg-0">
                    <button type="submit" class="btn btn-primary w-100 py-3 btn-lg">رزرو قرار ملاقات</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--appointment-end-->
<?php include('footer.php'); ?>