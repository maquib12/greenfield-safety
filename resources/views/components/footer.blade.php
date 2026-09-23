<footer class="site-footer">

    {{-- MAIN FOOTER --}}
    <div class="footer-main">

        <div class="container">

            <div class="row g-5">

                {{-- COMPANY --}}
                <div class="col-lg-4 col-md-6">

                    <div class="footer-brand">
                        <img
                            src="{{ asset('images/GreenFieldLogo.jpeg') }}"
                            alt="Greenfield Training & Consultancy Safety"
                        >
                    </div>

                    <p class="footer-description">
                        Greenfield Training & Consultancy Safety provides
                        professional safety training, consultancy and
                        practical workplace safety solutions for
                        organisations and professionals.
                    </p>

                    <div class="footer-socials">

                        <a href="#" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="#" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>

                    </div>

                </div>


                {{-- QUICK LINKS --}}
                <div class="col-lg-2 col-md-6">

                    <div class="footer-widget">

                        <h3>Quick Links</h3>

                        <ul>
                            <li>
                                <a href="{{ url('/') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('about') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('training') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Training
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('consultancy') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Consultancy
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>


                {{-- SERVICES --}}
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget">

                        <h3>Our Services</h3>

                        <ul>

                            <li>
                                <a href="{{ route('training') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Safety Training
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('consultancy') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Safety Consultancy
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('consultancy') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Safety Inspection
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('consultancy') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    HSE Management
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('consultancy') }}">
                                    <i class="bi bi-chevron-right"></i>
                                    Risk Assessment
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>


                {{-- CONTACT --}}
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget">

                        <h3>Contact Us</h3>

                        <div class="footer-contact">

                            <div class="footer-contact-item">

                                <div class="footer-contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>

                                <div>
                                    <span>Address</span>
                                    <p>
                                        United Arab Emirates
                                    </p>
                                </div>

                            </div>


                            <div class="footer-contact-item">

                                <div class="footer-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>

                                <div>
                                    <span>Phone</span>
                                    <p>
                                        <a href="tel:+971000000000">
                                            +971 00 000 0000
                                        </a>
                                    </p>
                                </div>

                            </div>


                            <div class="footer-contact-item">

                                <div class="footer-contact-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>

                                <div>
                                    <span>Email</span>
                                    <p>
                                        <a href="mailto:info@greenfield.com">
                                            info@greenfield.com
                                        </a>
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- FOOTER BOTTOM --}}
    <div class="footer-bottom">

        <div class="container">

            <div class="footer-bottom-content">

                <p>
                    © {{ date('Y') }}
                    Greenfield Training & Consultancy Safety.
                    All Rights Reserved.
                </p>

                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                </div>

            </div>

        </div>

    </div>

</footer>