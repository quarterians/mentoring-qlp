@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="accordion">
            <h1>Ada yang bisa kami bantu?</h1>
            <p></p>
            <div class="accordion-item">
              <div class="accordion-item-header">
                Mentoring di Quarter Life Projects gratis atau berbayar, sih?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Layanan Mentoring di Quarter Life Projects adalah layanan gratis yang dapat kamu akses secara cuma-cuma. Jadi jangan sungkan untuk mendaftar ya!</div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-item-header">
                Apakah tersedia layanan Mentoring tatap muka?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Mentoring di Quarter Life Projects tidak menyediakan layanan tatap muka. Layanan mentoring masih dilakukan secara daring (online) berdasarkan preferensi mentor dan mentee (misalnya Zoom, G-Meet, atau Call).</div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-item-header">
                Bagaimana cara mendaftar layanan mentoring di Quarter Life Projects?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Kamu dapat mengunjungi menu "Guide" untuk mengetahui prosesnya. Proses pendaftaran pada dasarnya sangat singkat. Kamu hanya cukup memilih kategori dan subkategori mentoring, lalu memilih mentor yang kamu inginkan
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-item-header">
                Apakah saya bisa memilih jadwal Mentoring sendiri?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Ya, kamu bisa memilih jadwal mentoringmu sendiri dengan menyesuaikan jadwal dari mentor pilihanmu.
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                  Apakah saya bisa memilih jadwal Mentoring sendiri?
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                      Ya, kamu bisa memilih jadwal mentoringmu sendiri dengan menyesuaikan jadwal dari mentor pilihanmu.
                  </div>
                </div>
            </div>
              
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Apa yang harus saya lakukan jika sudah melakukan pendaftaran?
                </div>
                <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Setelah kamu memilih mentor pilihanmu dan menyelesaikan registrasi, dalam waktu maksimal H+1 mentor akan mengirimkan pesan ke kamu untuk konfirmasi sesi mentoring.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Apakah setelah menyelesaikan sesi mentoring, saya bisa melakukan sesi yang keduakalinya dengan mentor yang sama?
                </div>
                <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Bisa banget! Kamu cukup tinggal mengulang saja proses registrasi dengan mentor yang sama.
                </div>
                </div>
            </div>
      
  </div>
    </div>

    
    
@endsection
{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

  accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
      
      // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
      
      // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
      // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      //   currentlyActiveAccordionItemHeader.classList.toggle("active");
      //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      // }

      accordionItemHeader.classList.toggle("active");
      const accordionItemBody = accordionItemHeader.nextElementSibling;
      if(accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
      }
      else {
        accordionItemBody.style.maxHeight = 0;
      }
      
    });
  });
</script> --}}