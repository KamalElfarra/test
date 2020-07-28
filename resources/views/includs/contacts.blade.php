<section class="colorlib-contact" data-section="contact">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <h2 class="colorlib-heading">إتصل بنا</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                        <form action="/contact/store" method="Post">

                            {{ csrf_field() }}


                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="الإسم">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="الإيميل">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="اسم الموضوع">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="الرسالة"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-send-message" value="إرسال">
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            @if($contact->count()>0)

            <div class="col-md-5">
                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="icon-globe-outline"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="mailto:melfarra@iugaza.edu.ps">{{ $contact->email }}
                        </a></p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="icon-map"></i>
                    </div>
                    <div class="colorlib-text">
                        <p>{{ $contact->address }}</p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="tel://">{{ $contact->phone }}</a></p>
                    </div>
                </div>
            </div>
            @else
                <p scope="row" class="text-center" style="color: mediumblue;">There Is No contact Founds!!</p>
            @endif

        </div>
    </div>
</section>
