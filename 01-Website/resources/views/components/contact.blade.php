<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <!--Contact section start-->
    <section class="contact-sec padding-top padding-bottom" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h4 class="heading text-center text-lg-left">KOM IN CONTACT MET HBO-I</h4>
                    @if (Session::has('message_send'))
                        <div class="alert-succes mb-2" role="alert">
                            <p class="mb-5 text-white bg-success text-center">{{ Session::get('message_send') }}</p>
                        </div>
                    @endif

                    <form class="row contact-form wow fadeInLeft" id="contact-form-data"
                        action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="col-sm-12" id="result"></div>
                        <div class="col-12 col-md-5">

                            <input type="text" name="userName" placeholder="Uw naam..." class="form-control">
                            <input type="email" name="userEmail" placeholder="E-mailadres..." class="form-control">
                            <input type="text" name="userSubject" placeholder="Onderwerp..." class="form-control">
                        </div>
                        <div class="col-12 col-md-7">
                            <textarea class="form-control" name="userMessage" placeholder="Vraag en/of opmerking..." rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" data-sitekey="reCAPTCHA_site_key"
                                class="btn purple-btn rounded-pill w-100 contact_btn">
                                <i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true">
                                </i>Versturen
                                <span></span><span></span><span></span><span></span><span></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                    <div class="contact-details wow fadeInRight">
                        <h4 class="heading">ONZE LOCATIE</h4>
                        <p class="text">
                            Heeft u een vraag of een opmerking? U kunt contact opnemen met het HBO-i Bureau.
                        </p>
                        <ul>
                            <li><i class="las la-map-marker addr"></i>Weteringschans 223 BG, 1017 XH Amsterdam</li>
                            <li><i class="las la-phone-volume phone"></i>
                                <span>020-626 17 82</span>
                            </li>
                            <li><i class="las la-paper-plane email"></i>info@hbo-i.nl</li>
                            <li><i class="las la-fax fax"></i>020-627 03 22</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact section end-->

</div>
