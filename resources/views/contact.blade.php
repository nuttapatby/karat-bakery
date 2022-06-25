@extends('layouts.app')
@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="/" class="text-decoration-none">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="contact" class="contact pt-5 pb-5">
            <div class="container">

                <div>
                    <iframe style="border: 0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1941.4218079238185!2d100.93033532142063!3d13.297707600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b4d0ea01661d%3A0x9f968015e22f7a7!2z4LiB4Liw4Lij4Lix4LiV4LmA4Lia4LmA4LiB4Lit4Lij4Li14LmI4LmC4Liu4Lih!5e0!3m2!1sth!2sth!4v1646577590031!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>40/5 ถนนข้าวหลาม ตำบลบ้านปึก อำเภอเมืองชลบุรี ชลบุรี 20130</p>
                            </div>

                            <div class="openHours">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>9.00 - 18.00น.</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(+66)81 619 1092</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.blade.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
