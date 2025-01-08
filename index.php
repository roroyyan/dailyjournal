<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rubik 3x3</title>
  <link rel="icon" href="./img/logo.webp" />
  <!-- bootsrap start -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- boostrap end -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg p-3 fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="">Jenis jenis Rubik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-5" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 ms-0- ms-lg-3" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 ms-0- ms-lg-3" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 ms-0- ms-lg-3" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 ms-0- ms-lg-3" href="login.php">Login</a>
            </li>
            <li class="nav-item dropdown">
              <button class="btn nav-link fs-5 ms-0- ms-lg-3 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi-circle-half theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button id="light" class="dropdown-item d-flex align-items-center" type="button"
                    data-bs-theme-value="light">
                    <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                    Light
                  </button>
                </li>
                <li>
                  <button id="dark" class="dropdown-item d-flex align-items-center" type="button"
                    data-bs-theme-value="dark">
                    <i class="bi bi-moon-fill me-2 opacity-50" data-theme-icon="bi-moon-fill"></i>
                    Dark
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>    
  </header>

  <!-- Hero Start -->
  <section id="home">
    <div class="container1">
      <div class="d-flex flex-column justify-content-center vh-100 align-items-center">
        <h1 class="fw-bold text-center text-light">
          Rubik tergbagi menjadi <br />
          beberapa macam
        </h1>

        <a href="#article" class="btn btn-dark fs-5 fw-bold mt-2">
          Start
        </a>
      </div>
    </div>
    <div id="datetime" class="datetime"></div>
  </section>
  <!-- Hero End -->

<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

  <!-- Gallery Start -->
  <section id="gallery">
    <div class="container" style="padding-top: 100px">
      <div class="title text-center mb-5">
        <h1 class="fw-bold">Gallery</h1>
        <p>Ada beberapa jenis rubik </p>
      </div>
      <div class="row">
        <div class="col-12 col-lg-4 col-md-4">
          <div class="card">
            <img src="./img/1x1.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Rubik 1x1, Rubik 1x1, sering disebut sebagai "kubus kosong" atau "kubus satu warna," sebenarnya bukanlah
                teka-teki yang sesungguhnya seperti Rubik's Cube lainnya. Ini hanyalah sebuah kubus yang terdiri dari
                satu blok warna, sehingga tidak ada tantangan atau cara pemecahan yang diperlukan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
          <div class="card">
            <img src="./img/2x2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Rubik 2x2, atau Pocket Cube, adalah versi mini dari Rubik's Cube yang terdiri dari 2 lapisan
                dan 8 kubus kecil (corner pieces). Meskipun lebih sederhana daripada Rubik 3x3, tetap menawarkan
                tantangan dengan sekitar 3.674.160 kombinasi. Tujuannya adalah mengatur semua sisi sehingga memiliki
                satu warna yang sama. Banyak pemecah menggunakan metode seperti "Layer by Layer" untuk menyelesaikannya.
                Cocok untuk pemula yang ingin belajar sebelum mencoba Rubik 3x3.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
          <div class="card">
            <img src="./img/3x3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Rubik 3x3, atau Rubik's Cube klasik, adalah teka-teki tiga dimensi yang terdiri dari 3
                lapisan dan 26 kubus kecil. Setiap sisi memiliki satu dari enam warna, dan tujuannya adalah mengatur
                agar setiap sisi memiliki warna yang sama. Dengan sekitar 43 quintillion kombinasi, Rubik 3x3 menawarkan
                tantangan besar. Metode penyelesaian yang populer termasuk Layer by Layer dan CFOP. Ini adalah bentuk
                paling dikenal dari Rubik's Cube dan langkah awal bagi banyak penggemar speedcubing.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-4 col-md-4">
          <div class="card">
            <img src="./img/4x4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Rubik 4x4, atau Rubik's Revenge, adalah versi lebih kompleks dari Rubik's Cube yang terdiri dari 4
                lapisan dan 56 kubus kecil. Tujuannya adalah mengatur setiap sisi sehingga memiliki warna yang sama,
                dengan lebih dari 7,4 juta kombinasi yang mungkin. Terdapat juga situasi paritas yang memerlukan
                algoritma tambahan untuk menyelesaikannya. Rubik 4x4 adalah tantangan ideal bagi penggemar yang telah
                menguasai Rubik 3x3.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
          <div class="card">
            <img src="./img/mirror.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Rubik Mirror, atau Mirror Cube, adalah variasi Rubik's Cube yang menggunakan ukuran dan bentuk kubus
                kecil, bukan warna. Tujuannya adalah mengembalikan kubus ke bentuk asalnya setelah dicampur.
                Tantangannya terletak pada perbedaan ukuran, menjadikannya menarik bagi penggemar teka-teki.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
          <div class="card">
            <img src="./img/pyram.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Rubik Pyraminx adalah teka-teki berbentuk piramida segitiga dengan 4 sisi berwarna. Tujuannya adalah
                mengatur setiap sisi sehingga memiliki warna yang sama. Pyraminx lebih mudah diselesaikan dibandingkan
                Rubik 3x3, tetapi tetap menawarkan tantangan menarik bagi pemula dan penggemar teka-teki.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="panah">
    <a href="#home"><img src="./img/arrow-bar-up.svg" alt=""></a>
  </div>
  <!-- Gallery End -->

<section id="schedule" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3 pt-5">Schedule</h1>
    <div class="row gy-4 justify-content-center" style="gap: 20px;">

                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card bg-danger text-dark" style="width: 18rem;">
                      <div class="card-header">
                        Senin
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Etika Profesi
                          <p>16.20-18.00 | H.4.4</p>
                        </li>
                        <li class="list-group-item">
                          Sistem Operasi
                          <p>18.40-21.00 | H.4.8</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card bg-danger text-dark" style="width: 18rem;">
                      <div class="card-header">
                        Selasa
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Pendidikan Kewarganegaraan
                          <p>12.30-13.10 | Kulino</p>
                        </li>
                        <li class="list-group-item">
                          Probabilitas dan Statistik
                          <p>15.30-18.00 | H.4.9</p>
                        </li>
                        <li class="list-group-item">
                          Kecerdasan Buatan
                          <p>18.30-21.00 | H.4.11</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card bg-danger text-dark" style="width: 18rem;">
                      <div class="card-header">
                        Rabu
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Manajemen Proyeksi Teknologi Informasi
                          <p>15.30-18.00 | H.4.6</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card bg-danger text-dark" style="width: 18rem;">
                      <div class="card-header">
                        Kamis
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Bahasa Indonesia
                          <p>12.30-14.00 | Kulino</p>
                        </li>
                        <li class="list-group-item">
                          Pendidikan Agama Islam
                          <p>16.00-18.00 | Kulino</p>
                        </li>
                        <li class="list-group-item">
                          Penambangan Data
                          <p>18.30-21.00 | H.4.9</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card bg-danger text-dark" style="width: 18rem;">
                      <div class="card-header">
                        Jumat
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Pemrograman Web Lanjut
                          <p>10.20-12.00 | D.2.K</p>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card bg-danger text-dark" style="width: 18rem;">
                      <div class="card-header">
                        Sabtu
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Free
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <section id="article" class="text-center p-5">
              <div class="container">
                <h1 class="fw-bold display-4 pb-3 pt-5">Profil</h1>
                <div class="row gy-5 justify-content-center pt-3 pb-3">
                  <div class="col-12 col-lg-6">
                    <img
                      src="./img/prof.jpg"
                      alt=""
                      class="img-fluid rounded-5"
                    />
                  </div>
                  <div class="col-12 col-lg-6">
                    <p style="text-align: justify">
                      <br>
                      <Span class="">NIM : A11.2023.15014</Span> <br>
                     <span class=""><b>Nama: Royyan Firdaus</b></span>
                    </p>
                    <p style="text-align: justify">
                      Program Studi Teknik Informatika <br>
                      Universitas Dian Nuswantoro
                    </p>
                  </div>
                </div>
              </div>
            </section>

  <!-- Footer Start -->

  <footer class="footer text-center p-3 shadow-lg">
    Copyright © 2024 Royyan All Rights Reserved
    <div>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-twitter-x"></i>
      <i class="bi bi-whatsapp"></i>
    </div>
  </footer>

  <!-- Footer End -->

  <!-- Js Bootstraps -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Js dark dan light mode start -->
  <script>
    /*!
     * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
     * Copyright 2011-2024 The Bootstrap Authors
     * Licensed under the Creative Commons Attribution 3.0 Unported License.
     */

    (() => {
      "use strict";

      const getStoredTheme = () => localStorage.getItem("theme");
      const setStoredTheme = (theme) => localStorage.setItem("theme", theme);

      const getPreferredTheme = () => {
        const storedTheme = getStoredTheme();
        if (storedTheme) {
          return storedTheme;
        }

        return window.matchMedia("(prefers-color-scheme: dark)").matches
          ? "dark"
          : "light";
      };

      const setTheme = (theme) => {
        if (theme === "auto") {
          document.documentElement.setAttribute(
            "data-bs-theme",
            window.matchMedia("(prefers-color-scheme: dark)").matches
              ? "dark"
              : "light"
          );
        } else {
          document.documentElement.setAttribute("data-bs-theme", theme);
        }
      };

      setTheme(getPreferredTheme());

      const showActiveTheme = (theme, focus = false) => {
        const themeSwitcher = document.querySelector("#bd-theme");

        if (!themeSwitcher) {
          return;
        }

        const themeSwitcherText = document.querySelector("#bd-theme-text");
        const activeThemeIcon = document.querySelector(".theme-icon-active");
        const btnToActive = document.querySelector(
          `[data-bs-theme-value="${theme}"]`
        );
        const iconOfActiveBtn =
          btnToActive.querySelector("i").dataset.themeIcon;

        document
          .querySelectorAll("[data-bs-theme-value]")
          .forEach((element) => {
            element.classList.remove("active");
            element.setAttribute("aria-pressed", "false");
          });

        btnToActive.classList.add("active");
        btnToActive.setAttribute("aria-pressed", "true");
        activeThemeIcon.classList.remove(
          activeThemeIcon.dataset.themeIconActive
        );
        activeThemeIcon.classList.add(iconOfActiveBtn);
        activeThemeIcon.dataset.iconActive = iconOfActiveBtn;
        const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
        themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

        if (focus) {
          themeSwitcher.focus();
        }
      };

      window
        .matchMedia("(prefers-color-scheme: dark)")
        .addEventListener("change", () => {
          const storedTheme = getStoredTheme();
          if (storedTheme !== "light" && storedTheme !== "dark") {
            setTheme(getPreferredTheme());
          }
        });

      window.addEventListener("DOMContentLoaded", () => {
        showActiveTheme(getPreferredTheme());

        document
          .querySelectorAll("[data-bs-theme-value]")
          .forEach((toggle) => {
            toggle.addEventListener("click", () => {
              const theme = toggle.getAttribute("data-bs-theme-value");
              setStoredTheme(theme);
              setTheme(theme);
              showActiveTheme(theme, true);
            });
          });
      });
    })();
  </script>
  <!-- Js dark dan light mode end -->

  <!-- shadow navbar start -->
  <script>
    window.addEventListener("scroll", function () {
      const navbar = document.querySelector(".navbar");
      navbar.classList.toggle("scrolled", window.scrollY > 0);
    });
  </script>
  <!-- shadow navbar end -->

  <!-- Js real date time start -->
  <script>
    function updateTime() {
      const now = new Date();
      const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
      };
      const formattedTime = now.toLocaleDateString("en-US", options);
      document.getElementById("datetime").textContent = formattedTime;
    }

    // Update the time every second
    setInterval(updateTime, 1000);
    updateTime(); // Initial call to display time immediately on load
  </script>
  <!-- Js real date time end -->
</body>

</html>