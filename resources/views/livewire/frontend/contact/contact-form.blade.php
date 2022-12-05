<div>
    <p class="mb-4">
        The contact form is currently inactive. Get a functional and working contact form with
        Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.
        <a href="https://htmlcodex.com/contact-form">Download Now</a>.
    </p>

    <form wire:submit.prevent="submit">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" wire:model.defer="name" id="name" placeholder="Your Name" required />
                    <label for="name">Your Name <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" wire:model.defer="email" id="email" placeholder="Your Email" required />
                    <label for="email">Your Email <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input type="number" class="form-control" wire:model.defer="phone" id="phone" placeholder="Phone">
                    <label for="phone">Phone</label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" wire:model.defer="subject" id="subject" placeholder="Subject" required />
                    <label for="subject">Subject <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" wire:model.defer="message" id="message" required style="height: 100px;"></textarea>
                    <label for="message">Message <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div>
