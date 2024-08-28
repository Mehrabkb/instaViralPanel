$(function(){
    $(document).on('click' , '.add-item' , function(){
        let that = $(this);
        let container = $('.form-items');
        container.append(`<div class="item w-75 mx-auto">
                                        <div class="card card-dark">
                                            <div class="card-header">
                                                <h3 class="card-title float-left">آیتم</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label> نام پیج</label>
                                                    <input class="form-control" type="text" placeholder="نام پیج" name="social-name[]">
                                                </div>
                                                <div class="form-group">
                                                    <label> لینک پیج</label>
                                                    <input class="form-control" type="text" placeholder="لینک پیج" name="social-link[]">
                                                </div>
                                                <div class="form-group">
                                                    <label>عکس پیج</label>
                                                    <input class="form-control" type="file"  name="social-image[]">
                                                </div>
                                                <div class="form-group">
                                                    <label> تعداد فالور</label>
                                                    <input class="form-control" type="number" placeholder=" تعداد فالور" name="social-follower-count[]">
                                                </div>
                                                <div class="form-group">
                                                    <label> ساعت قرارگیری</label>
                                                    <input class="form-control social-date-registered"  type="text" placeholder="تاریخ">
                                                    <input type="hidden" id="social-date-registered" name="social-date-registered[]" >
                                                </div>
                                                <div class="form-group">
                                                    <label>ویو استوری</label>
                                                    <input class="form-control" type="number" placeholder="ویو استوری" name="social-story-view[]">
                                                </div>
                                                <div class="form-group">
                                                    <label>گزارش اکسل</label>
                                                    <input class="form-control" type="file"  name="social-story-excel-file[]">
                                                </div>
                                                <div class="form-group">
                                                    <label>گزارش ویدیو</label>
                                                    <input class="form-control" type="file"  name="social-story-video-file[]">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-danger btn-delete-item">حذف</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`)
    });
    $(document).on('click' , '.btn-delete-item' , function(){
        let that = $(this);
        that.closest('.item').remove();
    });
})
