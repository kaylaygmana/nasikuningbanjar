
        // Ketika halaman dimuat
        document.addEventListener("DOMContentLoaded", function () {
            // Mendapatkan elemen resep section
            var resepSection = document.getElementById("resep");

            // Mendapatkan elemen navbar link untuk resep
            var resepNavLink = document.querySelector('a[href="#resep"]');

            // Ketika pengguna menggulir halaman
            window.addEventListener('scroll', function () {
                // Jika pengguna sedang berada di dalam resep section
                if (isElementInViewport(resepSection)) {
                    // Tambahkan kelas 'active' pada navbar link untuk resep
                    resepNavLink.classList.add('active');
                } else {
                    // Hapus kelas 'active' dari navbar link untuk resep
                    resepNavLink.classList.remove('active');
                }
            });

            // Fungsi untuk memeriksa apakah sebuah elemen berada di dalam viewport
            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
        });

            // Tangani saat tombol toggle nav ditekan
    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        // Toggle kelas 'show' pada elemen dengan id 'navbarTogglerDemo02'
        document.getElementById('navbarTogglerDemo02').classList.toggle('show');
    });

    // Tangani saat layar diubah menjadi responsif
    window.addEventListener('resize', function() {
        // Periksa jika lebar layar sudah cukup besar untuk menampilkan navbar
        if (window.innerWidth > 991) {
            // Hapus kelas 'show' dari elemen dengan id 'navbarTogglerDemo02'
            document.getElementById('navbarTogglerDemo02').classList.remove('show');
        }
    });