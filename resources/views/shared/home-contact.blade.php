
<!-- Contact -->
<section class="section-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-lg-24">
                <div class="title-row">
                    <p class="subtitle">Contact</p>
                    <h2 class="section-title">Get in Touch</h2>
                    <p>Use the form fill below to contact us for more enquiry</p>
                </div>

                <!-- Contact Form -->
                <form id="contact-form" class="contact-form material" method="post" action="/contact">
                    @csrf()
                    <!-- Name -->
                    <div class="material__form-group form-group">
                        <input type="text" name="name" id="name" value="{{old('name') ?? ''}}" class="form-input material__input" required>
                        <label for="name" class="material__label">Name
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        @if ($errors->has('name'))
                            <div class="material__underline">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    
                    <!-- Email -->
                    <div class="material__form-group form-group">
                        <input type="email" name="email" id="email" value="{{old('email') ?? ''}}" class="form-input material__input" required>
                        <label for="email" class="material__label">Email
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        @if ($errors->has('email'))
                            <div class="material__underline">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <!-- Subject -->
                    <div class="material__form-group form-group">
                        <input type="text" name="subject" id="subject" value="{{old('subject') ?? ''}}" 
                            class="form-input material__input @error('subject') is-invalid @enderror">
                        <label for="subject" class="material__label">Subject</label>
                        @if ($errors->has('subject'))
                            <div class="material__underline">{{ $errors->first('subject') }}</div>
                        @endif
                    </div>							

                    <div class="material__form-group form-group">
                        <textarea id="message" name="message" rows="7" class="form-input material__input" required>{{old('email') ?? ''}}</textarea>
                        <label for="message" class="material__label">Message
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        @if ($errors->has('message'))
                            <div class="material__underline">{{ $errors->first('message') }}</div>
                        @endif
                    </div>								
                
                    <input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
                    <div id="msg" class="message"></div>
                </form>
            </div>						

            <div class="col-lg-7 offset-lg-1">
                <!-- Google Map -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9679844513716!2d120.97225391411865!3d14.60089968980224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca1023917729%3A0xfb3589db486b911!2sV.%20Tytana%20St%2C%20Binondo%2C%20Manila%2C%201006%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sng!4v1611965013561!5m2!1sen!2sng"  style="width: 100%; min-height: 450;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            </div>

        </div>
    </div>
</section> <!-- end contact -->