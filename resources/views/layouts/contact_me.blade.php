
{{-- More info --}}
<section id="services" class="contact contact-custom2">
    <div class="container" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-8">
                <h1 style=""><b>Temukan Info Lebih Banyak, Klik </b> &nbsp;&nbsp;&nbsp; <i class="bi bi-cursor-fill"></i></h1>
            </div>
            <div class="col-lg-4">
                <a href="{{ $contact['more_info'] }}" class="btn btn-secondary btn-lg btn-block-custom3"><i class="bi bi-telephone-fill"></i> +{{ $contact['no_whatsapp'] }}</a>
            </div>
        </div>
    </div>
</section>
{{-- Form penawaran khusus --}}
<section id="services" class="contact contact-custom">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                style="border-radius: 2rem;">
                <div class="section-header">
                    <h2>Dapatkan penawaran khusus dari Cakrawala</h2>
                    {{-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                        dolorem dolore earum</p> --}}
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <h5 class="text-center">Nama</h5>
                        <input type="text" name="name" class="form-control rounded-pill" id="name"
                            placeholder="Masukkan nomor anda . . . ." required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <h5 class="text-center">No. WhatsApp</h5>
                        <input type="email" class="form-control rounded-pill" name="no_wa_client"
                            id="" placeholder="Masukkan nomor Whats App . . . ." required>
                    </div>
                </div>


                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" style="background-color:#C82121;">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</section>