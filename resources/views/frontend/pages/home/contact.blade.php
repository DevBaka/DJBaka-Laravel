        <section class="contact-section" id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 order-2 order-md-1">
                        <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                            <div class="section-header">
                                <h2 class="section-title">Let’s work together!</h2>
                                <p>I design and code beautifully simple things and i love what i do. Just simple like
                                    that!</p>
                            </div>

                            <div class="tj-contact-form">
                                <form id="contact-form">
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="conName" id="conName"
                                                    placeholder="First name" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="conLName" id="conLName"
                                                    placeholder="Last name" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="email" name="conEmail" id="conEmail"
                                                    placeholder="Email address" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="tel" name="conPhone" id="conPhone"
                                                    placeholder="Phone number" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_group">
                                                <select name="conService" id="conService" class="tj-nice-select">
                                                    <option value="" selected disabled>Choose Genre</option>
                                                    <option value="braning">Hard Techno</option>
                                                    <option value="web">Hardstyle</option>
                                                    <option value="uxui">Hardcore</option>
                                                    <option value="app">Up Tempo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_group">
                                                <textarea name="conMessage" id="conMessage" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_btn">
                                                <button type="submit" class="btn tj-btn-primary">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                        <div class="contact-info-list">
                            <ul class="ul-reset">
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".4s">
                                    <div class="icon-box">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Discord</p>
                                        <a href="https://discord.djbaka.com">discord.djbaka.com</a>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".5s">
                                    <div class="icon-box">
                                        <i class="flaticon-mail-inbox-app"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Email</p>
                                        <a href="mailto:contact@djbaka.com">contact@djbaka.com</a>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".6s">
                                    <div class="icon-box">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Address</p>
                                        <a href="#">Warne Park Street Pine, <br />Kaduna.</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



                <!-- BEGIN: Contact Form Success Modal Message -->
        <div class="modal contact_modal" id="message_sent" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title"><strong>Message Sent Successfully</strong></span>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you for contacting us. We will get back to you shortly.<br />Have a great day!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Success Modal Message -->

        <!-- BEGIN: Contact Form Fail Modal Message -->
        <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title"><strong>Error</strong></span>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <p>Oops! Something went wrong, please try again.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Fail Modal Message End -->