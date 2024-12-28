<div class="col-lg-6">
    <form action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
        @csrf
        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required />
            </div>

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required />
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="text-center col-md-12">
                <!-- Display success message -->
                @if (@session('Success'))
                    <div class="sent-message">
                        {{ session('Success') }}
                    </div>
                @endif
                <!-- Display error message -->
                @if ($errors->any())
                    <div class="error-message">
                        {{ $errors }}
                    </div>
                @endif


                <button type="submit">Send Message</button>

            </div>
        </div>
    </form>
</div>
<!-- End Contact Form -->
