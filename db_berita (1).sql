USE if0_39190718_berita;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `author` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `berita` (`id`, `judul`, `description`, `kategori`, `image`, `slug`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa Polmed sudah mulai Pulang melaksanakan Libur semester', 'Mahasiswa ini adalah mahasiswa yang selalu tidak terlambat untuk pulang ke kampung halaman. " terkadang kampung halaman adalah tempat yang sebenarnya yang dirindukan oleh mahasiwa. walaupun keliatan nya teguh, tapi aslinya rapuh " Ujar Rassid, Sebagai perwakilan dari mahasiswa (06-08-2025).', 'gayahidup', 'polmed.jpeg', 'mahasiswa-polmed-sudah-mmulai-pulang-melaksanakan-liburan', 'Rassid Risda Sulpa', '2025-06-04 16:50:49', NULL),
(9, 'Anggota DPR Fraksi PKB Angkat Suara Wacana Legalisasi Kasino', 'Anggota Komisi III DPR Fraksi Partai Kebangkitan Bangsa (PKB) Hasbiallah Ilyas ...', 'politik', '68448b509d2af.jpg', 'anggota-dpr-fraksi-pkb-angkat-suara-wacana-legalisasi-kasino', 'Rassid Risda Sulpa', '2025-06-08 01:56:16', NULL),
(10, 'Kebaikan Iduladha 1446 H:Ratusan kurban BPKH jangkau Plosok Negeri', 'Badan Pengelola Keuangan Haji (BPKH) kembali menggelar program Sedekah Kurban 1446 Hijriah ...', 'ekonomi', '684491e26375a.jpeg', 'kebaikan-iduladha-1446-hratusan-kurban-bpkh-jangkau-plosok-negeri', 'Rassid Risda Sulpa', '2025-06-08 02:24:18', NULL),
(11, 'Media Malaysia: Timnas indonesia bikin iri fans Malaysia', 'Media Malaysia menilai sukses Timnas Indonesia di Kualifikasi Piala Dunia 2026 ...', 'olahraga', '684585c047106.jpeg', 'media-malaysia-timnas-indonesia-bikin-iri-fans-malaysia', 'Rassid Risda Sulpa', '2025-06-08 19:44:48', NULL),
(12, 'Titiek Puspa Meninggal, Dunia Hiburan Indonesia Meninggal', 'Kabar Titiek Puspa meninggal dunia dalam usia 87 tahun pada Kamis (10/4) ...', 'hiburan', '6845868b6fa8b.jpeg', 'titiek-puspa-meninggal-dunia-hiburan-indonesia-meninggal', 'Rassid Risda Sulpa', '2025-06-08 19:48:11', NULL),
(13, 'HP Android RedMagic 10S Pro Meluncur Global, Using Chip SnapDragon 8 Elite Khusus', 'Nubia resmi meluncurkan ponsel gaming terbarunya, RedMagic 10S Pro ...', 'teknologi', '68459349e0038.jpg', 'hp-android-redmagic-10s-pro-meluncur-global-using-chip-snapdragon-8-elite-khusus', 'Rassid Risda Sulpa', '2025-06-08 20:42:33', NULL),
(14, 'Trump Tegaskan Hubungannya Dengan Elon Musk Berakhir, Tak Mau Damai', 'Presiden AS Donald Trump akhirnya menegaskan hubungan dirinya dengan miliardernya Elon Musk ...', 'politik', '684598502f232.jpeg', 'trump-tegaskan-hubungannya-dengan-elon-musk-berakhir-tak-mau-damai', 'Hadijah Alaydrus', '2025-06-08 21:04:00', NULL),
(15, 'Ini Raja Debt Collector Paling Ditakuti di RI, Bangun Bisnis dari Nol', 'Debt collector menjadi profesi yang tak asing di telinga masyarakat Indonesia ...', 'politik', '684599a8937d3.png', 'ini-raja-debt-collector-paling-ditakuti-di-ri-bangun-bisnis-dari-nol', 'Khoirul Anam', '2025-06-08 21:09:44', NULL);

CREATE TABLE `tb_users` (
  `id` int NOT NULL,
  `namalengkap` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tb_users` (`id`, `namalengkap`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'RassidRemixer', 'admin@gmail.com', '$2y$10$ieE2x5EoqKlrPCI0WBoHw.CPH2QACX88bbparsy2TlV7UN.zQgNRi', '2025-06-04 11:23:37', NULL);

ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `tb_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

COMMIT;
