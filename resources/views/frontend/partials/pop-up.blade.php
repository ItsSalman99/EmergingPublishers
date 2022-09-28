<div class="pop-bg" id="pop">
    <div class="pop-up" >
        <div class="row">
            <div class="col imgcol">
                <div >
                    {{-- <img src="{{ asset('assets/frontend/media/logo.png') }}"  alt=""> --}}
                    <img src="{{ asset('assets/frontend/media/about/about-2.png') }}"  alt="">
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>FILL THE FORM <br> <span class="fs-1" style="color: red"> TO GET 50% DISCOUNT</span></h4>
                    </div>
                    <div>
                        <a class="close-pop" onclick="closePop()">&times;</a>
                    </div>
                </div>
                <form method="POST" class="">
                    <div class="form-group">
                        <label>Your Name:</label>
                        <input type="text" class="form-control" style="border: 2px solid #0000007a;" name="contact-name" placeholder="John Smith">
                    </div>
                    <div class="form-group">
                        <label>Your Email:</label>
                        <input type="email" class="form-control" style="border: 2px solid #0000007a;" name="contact-email" placeholder="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label>Your Phone:</label>
                        <input type="tel" class="form-control" style="border: 2px solid #0000007a;" name="contact-company" placeholder="+123456789">
                    </div>
                    <div class="form-group">
                        <label>Your Message:</label>
                        <textarea class="form-control" style="border: 2px solid #0000007a; resize: none" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="axil-btn btn-borderd btn-fluid btn-primary" style="border: 2px solid #0000007a;" name="submit-btn">Get Free
                            Consutation Now</button>
                    </div>
                    <input type="hidden" class="form-control" name="contact-message" value="Null">
                </form>
            </div>
        </div>
    </div>
</div>
