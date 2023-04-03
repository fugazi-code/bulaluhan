<div>

    <main class="pt-5" style="background-color: #edc9b540;">
        <div class="row justify-content-center px-0 px-md-5 mt-3">
            <img src="./images/about-bulalo.jpg" class="img-fluid border-0 rounded-2 shadow position-relative px-0"
                style="height: 90vh;" alt="Bulalohan in Riyadh">
        </div>
        <div class="p-5">
            <h1 class="pb-2 pt-3 display-4 text-description-color text-center">Our Best Sellers</h1>
            <div class="row justify-content-start mt-3">
                <div class="col-12 col-md-3">
                    <img src="./images/hero8-bulalo.png" class="img-fluid border-0 rounded-3 shadow" alt="Bulalo">
                </div>
                <div class="col-12 col-md-3">
                    <img src="./images/hero5-lomi.png" class="img-fluid border-0 rounded-3 shadow" alt="Lomi">
                </div>
                <div class="col-12 col-md-3">
                    <img src="./images/hero7-no-logo-and-price.png" class="img-fluid border-0 rounded-3 shadow"
                        alt="Silog">
                </div>
                <div class="col-12 col-md-3">
                    <img src="./images/hero1-no-logo.png" class="img-fluid border-0 rounded-3 shadow" alt="Silog">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-auto">
                    <a href="{{ route('menu') }}" class="btn theme-button btn-sm mt-2" type="button">VIEW MENU</a>
                </div>
            </div>
        </div>
    </main>

    <section href="#bookTable" id="bookTable" class="contact">
        <div class="container pt-1 pb-5">
            <div class="section-title mt-5">
                <h1 class="text-description-color display-4">Book A Table</h1>
                <p>Dine in with your Friends and Family.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name">Your Name</label>
                                <input type="text" v-model="name" name="name" class="form-control" id="name"
                                    required>
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <label for="name">Email Address</label>
                                <input type="email" v-model="email" class="form-control" name="email" id="email"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Phone</label>
                                <input type="text" v-model="phone_number" class="form-control" name="phone"
                                    id="phone_number" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <label>Date</label>
                                <input type="date" v-model="date" class="form-control" name="date" id="date"
                                    required>
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <label>Time</label>
                                <input type="time" v-model="time" class="form-control" name="time" id="time"
                                    required>
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <label>No of People</label>
                                <input type="number" v-model="number_of_guests" class="form-control" name="person"
                                    id="number_of_guests" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Message</label>
                                <textarea v-model="message" class="form-control" name="message" rows="5" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                        </div>
                        <div class="text-center pt-3">
                            <button type="button" class="btn theme-button" v-on:click="sendBooking">Book
                                Table</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 px-3" style="background-color: #edc9b540;">
        <div class="row justify-content-center px-0 px-md-5 mt-5">
            <div class="offset-md-1 col-md-7 col-sm-11">
                <h1 class="display-4 text-description-color">Brief History</h1>
                <p class="lead mt-1 mb-2"><strong>Bulalohan sa Riyadh</strong> started in August 2019 at the
                    Sulimaniya area. Our aim is to bring our Filipino concept of restaurant here in Saudi Arabia,
                    where you can enjoy all out cultural food as well as some Asian dishes. </p>

                <h2 class="text-description-color mt-2">For our services, we offer:</h2>
                <p class="mb-0">Eat all you can (Buffet)</p>
                <p class="mb-0">Ala Carte (short Orders)</p>
                <p class="mb-0">Catering Service</p>
                <p class="mb-0">Delivery service</p>
            </div>
            <div class="col-auto d-md-block">
                <video class="shadow-sm rounded-3" width="300px" height="100%" controls>
                    <source src="./videos/bulalo-video.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
        <div class="row justify-content-center px-md-5 mt-5">
            <div class="col-auto d-md-block">
                <video class="shadow-sm rounded-3" width="100%" height="100%" controls>
                    <source src="./videos/vip_room.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="col-md-7">
                <h1 class="text-description-color display-4">VIP Room</h1>
                <h2>For entertainment we offer:</h2>
                <ul class="list-group">

                </ul>
                <p class="lh-lg">Sing along karaoke everyday open for everybody <br />
                    Live Band <br />
                    Tawag ng Bulalohan Singing contest <br />
                    Stand-up Comedy <br />
                    Acoustic Band <br />
                    Solo performers We are encouraging all our beloved customers to write down their comments on our
                    comment card to help us improve in every aspect for customer satisfaction. We put our trust in
                    God, who helps us in achieving all our goals.<br />
                </p>

            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container pt-1">
            <div class="section-title mt-5">
                <h1 class="text-description-color display-4">Contact</h1>
                <p>Do not hesitate to reach our experienced IT experts should you have any further inquiries or
                    concerns.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <h4>Location:</h4>
                            <p>bulalohan sa riyadh, Sulimaniya area near Military hospital , Riyadh, Saudi Arabia
                            </p>
                        </div>
                        <div class="email">
                            <h4>Email:</h4>
                            <p>ronald@bulalohansariyadh.xyz</p>
                        </div>
                        <div class="phone">
                            <h4>Contact:</h4>
                            <p>
                            <ul>
                                <li>0569663285</li>
                                <li>0570769407</li>
                            </ul>
                            </p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.6595737908174!2d46.655895798142666!3d24.738564914037966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee379e77986bd%3A0x9e2d2a7f9be958b9!2sAmerah%20Hub!5e0!3m2!1sen!2ssa!4v1673612806300!5m2!1sen!2ssa"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Your Name</label>
                                <input type="text" v-model="name_contact" name="name" class="form-control"
                                    id="name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" v-model="email_contact" name="email"
                                    id="email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" v-model="subject_contact" name="subject"
                                id="subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" v-model="message_contact" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button class="btn theme-button" type="button" v-on:click="sendContact">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
