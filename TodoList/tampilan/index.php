<?php
include '../auth/koneksi.php';

include 'header.php';

$sql = "SELECT COUNT(*) AS tugas FROM list;";

$hasil = $koneksi->query($sql);

$item = $hasil->fetch_assoc();

?>

<style>
  .carousel-item img {
    object-fit: cover;
    height: 350px;
    /* Atur sesuai kebutuhan */
    max-height: 550px;
    /* Batas maksimum */
  }

  .carousel-item img {
    object-fit: cover;
    width: 100%;
    height: 250px;
    /* Default height */
  }

  @media (min-width: 768px) {
    .carousel-item img {
      height: 400px;
      /* Untuk layar menengah */
    }
  }

  @media (min-width: 1200px) {
    .carousel-item img {
      height: 500px;
      /* Untuk layar besar */
    }
  }

  .custom-carousel .carousel-item img {
    object-fit: cover;
    height: 450px;
    /* Tinggi standar */
  }

  /* Calender */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body {
    display: flex;
    flex-direction: column;
    height: 100vh;
    font-family: Poppins, sans-serif;
  }

  h1 {
    font-weight: 600;
    text-align: center;
    color: #fff;
    margin-block: 2rem;
  }

  h3 {
    font-weight: 600;
  }

  .calendar {
    margin: 0 auto;
    width: clamp(320px, 400px, 90%);
    padding: 1rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .calendar header {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .calendar nav {
    display: flex;
    align-items: center;
  }

  .calendar ul {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    text-align: center;
  }

  .calendar ul li {
    width: calc(100% / 7);
    position: relative;
    z-index: 2;
    aspect-ratio: 1;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #prev,
  #next {
    width: 20px;
    height: 20px;
    position: relative;
    border: none;
    background: transparent;
    cursor: pointer;
  }

  #prev::before,
  #next::before {
    content: "";
    width: 50%;
    height: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    border-style: solid;
    border-width: 0.25em 0.25em 0 0;
    border-color: #ccc;
  }

  #next::before {
    transform: translate(-50%, -50%) rotate(45deg);
  }

  #prev::before {
    transform: translate(-50%, -50%) rotate(-135deg);
  }

  #prev:hover::before,
  #next:hover::before {
    border-color: #000;
  }

  .days {
    font-weight: 600;
  }

  .dates li.today {
    color: #fff;
  }

  .dates li.today::before {
    content: "";
    width: 2rem;
    height: 2rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #000;
    border-radius: 50%;
    z-index: -1;
  }

  .dates li.inactive {
    color: #ccc;
  }
</style>

<!-- Caruosel Slide -->
<div id="carouselExample" class="carousel slide custom-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/slide2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/slide3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Caruosel Slide -->
<!-- Selamat Datang -->

<h3 class="text-center mt-4" style="font-size: 21px;">Kami telah menunggu begitu lama untuk memilikimu di antara kami.<br>
  Akhirnya, waktunya telah tiba. Kami dengan senang hati menyambutmu <?php echo $_SESSION['username']; ?><span style="color: crimson;">&#10084;</span>&#129303;</h3>
<!-- POS -->
<div class="container text-center mt-4">
  <div class="row">
    <div class="col">
      <div class="card text-bg-success mb-3" style="max-width: 18rem; border: 2px solid black;">
        <div class="card-body">
          <h5 class="card-title">Total Tugas</h5>
          <hr>
          <p class="card-text" style="font-size: 20px; font-weight:bolder;"><?php echo $item['tugas']; ?></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-bg-warning mb-3" style="max-width: 18rem; border: 2px solid black;">
        <div class="card-body">
          <h5 class="card-title">Total Tugas</h5>
          <hr>
          <p class="card-text" style="font-size: 20px; font-weight:bolder;"><?php echo $item['tugas']; ?></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-bg-danger  mb-3" style="max-width: 18rem; border: 2px solid black;">
        <div class="card-body">
          <h5 class="card-title">Total Tugas</h5>
          <hr>
          <p class="card-text" style="font-size: 20px; font-weight:bolder;"><?php echo $item['tugas']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End POS -->

<!-- Card Tujuan -->
<div class="container mt-5">
  <div class="d-flex justify-content-start">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../assets//gambar1.png" class="img-fluid rounded-start" alt="Gambar Beban Di Kepala">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Membantu mengurangi beban di kepala</h5>
            <p class="card-text">To do list dapat membantu seseorang untuk mengurangi beban yang bertumpuk di kepala.</p>
            <p class="card-text"><small class="text-body-secondary">To do list dapat dibuat harian, mingguan, atau bulanan, dan dapat dibuat untuk pribadi atau tim.</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Card Tujuan 2 -->
<div class="container mt-3">
  <div class="d-flex justify-content-center">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../assets/gambar2.png" class="img-fluid rounded-start" alt="Gambar Mengatur Waktu">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Membantu mengatur waktu</h5>
            <p class="card-text">To do list dapat membantu seseorang untuk mengatur waktu dan meluangkan waktu untuk kegiatan yang disukai.</p>
            <p class="card-text"><small class="text-body-secondary">To do list dapat dibuat harian, mingguan, atau bulanan, dan dapat dibuat untuk pribadi atau tim.</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Card Tujuan -->

<!-- Card Tujuan 3 -->
<div class="container mt-3">
  <div class="d-flex justify-content-end">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../assets/gambar3.png" class="img-fluid rounded-start" alt="Gambar Kegiatan">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Membantu menghindari kegiatan mendadak</h5>
            <p class="card-text">To do list dapat membantu seseorang untuk menghindari kegiatan mendadak atau mengerjakan tugas pada menit-menit akhir.</p>
            <p class="card-text"><small class="text-body-secondary">To do list dapat dibuat harian, mingguan, atau bulanan, dan dapat dibuat untuk pribadi atau tim.</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Card Tujuan -->

<!-- Banner -->
<div class="container-fluid text-center mt-3 mb-4">
  <a href="../assets/banner.png" target="_blank" rel="noopener noreferrer"><img src="../assets/banner.png" class="img-fluid img-thumbnail" alt="..." style="width: 75%;"></a>
  <figcaption class="figure-caption text-center">Banner To Do List</figcaption>
</div>
<!-- End Banner -->

<!-- Poster -->
<div class="grid text-center mb-4">
  <a href="../assets/poster1.png" target="_blank" rel="noopener noreferrer"><img src="../assets/poster1.png" class="rounded -start img-thumbnail mx-5" style="width: 20%;" alt="..."></a>

  <a href="../assets/poster2.png" target="_blank" rel="noopener noreferrer"><img src="../assets/poster2.png" class="rounded -end img-thumbnail mx-5" style="width: 20%;" alt="..."></a>

</div>
<!-- End Poster -->

<!-- Kalender -->
<div class="calendar mb-4">
      <header>
        <h3></h3>
        <nav>
          <button id="prev"></button>
          <button id="next"></button>
        </nav>
      </header>
      <section>
        <ul class="days">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="dates"></ul>
      </section>
    </div>
    <!-- End Kalender -->

        <!-- Jam -->

        <div id="clock"></div>
    <script>
  setInterval(() => {
    let date = new Date()
    let clock = document.getElementById('clock')
    clock.innerHTML =
      date.getHours() + ":" +
      date.getMinutes() + ":" +
      date.getSeconds()
  }, 1000);
</script>
<!-- End Jam -->

<!-- Quote -->
<div class="container mb-4">
  <div class="card">
    <div class="card-header">
      Quote
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>“Suka banget sama daftar “yang harus dilakukan” di Senin pagi , bikin saya semangat untuk minggu depan.”</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Patricia Bright</cite></footer>
      </blockquote>
    </div>
  </div>
</div>
<!-- End Quote -->

<!-- Footer -->

<div class="card text-center">
  <div class="card-footer text-body-secondary p-4" style="background-color: #074799; border:1px solid black; ">
    <p style="color: white; font-size:20px; font-weight:bold;">&#10084;Made In Kelompok 2</p>
  </div>
</div>

<!-- End Footer -->

<script>
  const header = document.querySelector(".calendar h3");
  const dates = document.querySelector(".dates");
  const navs = document.querySelectorAll("#prev, #next");

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  let date = new Date();
  let month = date.getMonth();
  let year = date.getFullYear();

  function renderCalendar() {
    // first day of the month
    const start = new Date(year, month, 1).getDay();
    // last date of the month
    const endDate = new Date(year, month + 1, 0).getDate();
    // last day of the month
    const end = new Date(year, month, endDate).getDay();
    // last date of the previous month
    const endDatePrev = new Date(year, month, 0).getDate();

    let datesHtml = "";

    for (let i = start; i > 0; i--) {
      datesHtml += `<li class="inactive">${endDatePrev - i + 1}</li>`;
    }

    for (let i = 1; i <= endDate; i++) {
      let className =
        i === date.getDate() &&
        month === new Date().getMonth() &&
        year === new Date().getFullYear() ?
        ' class="today"' :
        "";
      datesHtml += `<li${className}>${i}</li>`;
    }

    for (let i = end; i < 6; i++) {
      datesHtml += `<li class="inactive">${i - end + 1}</li>`;
    }

    dates.innerHTML = datesHtml;
    header.textContent = `${months[month]} ${year}`;
  }

  navs.forEach((nav) => {
    nav.addEventListener("click", (e) => {
      const btnId = e.target.id;

      if (btnId === "prev" && month === 0) {
        year--;
        month = 11;
      } else if (btnId === "next" && month === 11) {
        year++;
        month = 0;
      } else {
        month = btnId === "next" ? month + 1 : month - 1;
      }

      date = new Date(year, month, new Date().getDate());
      year = date.getFullYear();
      month = date.getMonth();

      renderCalendar();
    });
  });

  renderCalendar();
</script>
<?php include 'footer.php'; ?>