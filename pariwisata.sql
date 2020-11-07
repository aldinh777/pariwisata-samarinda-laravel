-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 04:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kafe`
--

CREATE TABLE `kafe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kafe`
--

INSERT INTO `kafe` (`id`, `nama`, `alamat`, `jam_buka`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Teduh Coffee & Eatery Juanda', 'Jl. Juanda 4, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75124', '09.00–00.00', 'Ruang Teduh memiliki konsep kedai kopi yang minimalis namun terkesan sangat homey. Sesuai dengan namanya, kedai kopi yang dihiasi dengan dinding bercat putih serta lantai kayu, mampu memberikan kesan teduh untuk jiwa yang lelah, sehingga mampu menjadi pilihan untuk bersantai dan rehat sejenak dari rutinitas sehari-hari.\r\n\r\nDi salah satu dinding dihiasi dengan menu kopi dari Ruang Teduh yang terbuat dari kayu. Selain itu, Ruang Teduh juga memiliki banyak jendela kaca dengan ukuran yang cukup besar, sehingga cahaya matahari yang masuk mampu menjadi sarana penunjang bagi kamu yang hobi foto.Kalau mampir ke Ruang Teduh. Teman Traveler patut mencoba salah satu menu kopi best-seller mereka yaitu kopi susu caramel. Kedai kopi yang satu ini terletak di Jalan Juanda 4 No. 99, Samarinda. Ruang Teduh Coffee buka setiap hari mulai pukul 11.00-23.00 WITA.', '/img/kafe/ruang-teduh.jpg', NULL, NULL),
(2, 'D\'puncak Cafe & Resto', 'Karang Anyar, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', '10.00–23.30', 'D’Puncak bisa dibilang merupakan salah satu tempat terbaik untuk ngobrol dan makan santai sembari menikmati indahnya panorama ketinggian. Berdasarkan laman media sosial mereka, kafe ini diklaim sebagai yang tertinggi di Samarinda. Pemandangan yang tersaji sungguh memanjakan mata, terutama di malam hari.\r\n\r\nKafe ini buka mulai pukul 11 siang hingga satu dini hari. Jadi pengunjung bisa mendapatkan beragam view lengkap dengan atmosfer berbeda. Datang menjelang sore hari, maka Teman Traveler akan disambut atmosfer senja yang syahdu. Tiba di malam hari, suasana romantis dengan temaram lampu siap menanti.\r\n\r\nMenu utama yang ditawarkan di D’Puncak adalah bakar-bakar ala barbecue. Masing-masing pelanggan akan disajikan satu piring plastik berisi sate sosis, bakso, dan beragam bahan lezat lainnya. Pengunjung kemudian tinggal mencelupkan dalam bumbu dan memasaknya sendiri dalam bakaran yang disediakan di tengah meja. Tentunya akan terasa kian seru jika dilakukan beramai-ramai.\r\n\r\nBeberapa kali kafe ini menjadi tuan rumah kegiatan bereagam komunitas berbeda di Kalimantan Timur. Mulai dari stand-up comedy, pemutaran film, pagelaran band indie, penggemar musik EDM, dan masih banyak lagi. Jika sobat traveler bingung mencari hiburan dan ingin menyasikan live performace menarik, tak ada salahnya datang ke kafe ini.\r\n\r\nTak cuma sekadar menjual panorama ketinggian, D’Puncak Samarinda juga berupaya semaksimal mungkin untuk membuat kafe mereka terasa nyaman. Hasilnya, pengunjung akan dimanjakan interior kafe yang terkesan minimalis dan natural. Tak heran jika ada banyak pelanggan kemudian memanfaatkan beberapa sudut sebagai titik foto menarik.', '/img/kafe/dpuncak.jpg', NULL, NULL),
(3, 'Aksara Kopi dan Buku', 'Jl. Merdeka 2 No.50, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242', '16.00–23.00', 'Salah satu kedai kopi yang tak kalah menarik untuk dikunjungi adalah Aksara Kopi & Buku. Coffee shop yang satu ini menyediakan banyak buku yang bisa dibaca sembari menikmati secangkir kopi. Bahkan, ada ruang dan sudut khusus bagi para pengunjung untuk bisa membaca dengan tenang. Tak jarang, pengunjung juga berdiskusi dan bertanya dengan para barista seputar buku-buku rekomendasi.\r\n\r\nUniknya lagi, di kedai kopi satu ini tersedia sebuah dinding khusus yang dinamakan dinding karya, di mana pengunjung bisa mengekspresikan diri dengan menulis sajak ataupun puisi untuk ditempel di dinding tersebut. Aksara Kopi & Buku sukses membuat pengunjung betah berlama-lama karena menghadirkan kesan kedai kopi rumahan yang hangat dengan interior yang dihadirkan. Jika Teman Traveler ingin mencoba sensasi nongkrong di sini, Aksara Kopi dan Buku ini berlokasi di Jalan Merdeka 2 No. 2, Samarinda. Pada Hari Senin-Kamis buka pukul 10.00-22.00 WITA, namun pada Hari Sabtu-Minggu buka pukul 14.00-22.00 WITA.', '/img/kafe/aksara-kopibuku.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `nama`, `deskripsi_singkat`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Ayam Cincane', 'Ayam Cincane adalah ayam kampung yang dibakar dan disajikan dengan sambal tomat.', 'Inilah makanan khas Samarinda yang jadi favorit turis ketika berkunjung ke Samarinda. Ayam Cincane adalah ayam kampung yang dibakar dan disajikan dengan sambal tomat.\r\n\r\nSekilas, makanan ini memang terlihat mirip dengan ayam balado karena warnanya yang merah, Toppers.\r\n\r\nMeski demikian, rasa Ayam Cincane ini sangat berbeda karena penggunaan bumbu-bumbu khas terutama dari segi rempah yang dilumuri sebelum dibakar.\r\n\r\nKuliner tradisional khas Samarinda ini juga telah melewati proses perebusan terlebih dahulu sehingga dagingnya empuk dan lembut.\r\n\r\nBiasanya, Ayam Cincane dihidangkan dalam acara resmi seperti undangan atau pernikahan.', '/img/kuliner/Ayam-Cincane.jpg', NULL, NULL),
(2, 'Nasi Kuning', 'Kepopuleran makanan ini telah membuahkan sebuah nama untuk satu wilayah di tengah kota, yaitu Kampoeng Nasi Kuning.', 'Satu lagi kuliner dari Samarinda yang amat sayang untuk dilewatkan. Kepopuleran makanan ini telah membuahkan sebuah nama untuk satu wilayah di tengah kota, yaitu Kampoeng Nasi Kuning.\r\n\r\nNasi Kuning tidak hanya sangat diminati oleh warga asli Samarinda, tapi juga masyarakat yang sedang berlibur ke sana.\r\n\r\nPada dasarnya, makanan ini tidak jauh berbeda dengan nasi kuning yang bisa kita temukan di sekitar kita.\r\n\r\nNasi Kuning Samarinda dibuat dengan campuran kunyit dan santan kemudian disajikan dengan tambahan telur, ayam, ikan atau daging, lauk tempe beserta sayur mentimun atau tomat.\r\n\r\nPenganan khas Samarinda ini sering dinikmati pada pagi hari atau dijamu pada acara penting sebagai nasi tumpeng.', '/img/kuliner/nasi-kuning.jpg', NULL, NULL),
(3, 'Nasi Bekepor', 'Nasi Bekepor pada awalnya lebih dikenal sebagai makanan utama bagi kerajaan Kutai Kertanegara.', 'Selain terkenal dengan nasi kuningnya, Samarinda juga punya Nasi Bekepor. Uniknya, makanan khas Samarinda ini tergolong sebagai salah satu yang sulit untuk dicari.\r\n\r\nNasi Bekepor pada awalnya lebih dikenal sebagai makanan utama bagi kerajaan Kutai Kertanegara.\r\n\r\nTampilannya mirip seperti nasi uduk; berisi nasi putih, ikan asin, minyak sayur dan taburan rempah-rempah.\r\n\r\nBiasanya, kuliner khs Samarinda ini disajikan dengan sambal raja, sebuah perpaduan enam jenis sambal khas Kalimantan Timur yang dijadikan satu.', '/img/kuliner/nasi-bekepor.jpg', NULL, NULL),
(4, 'Sup Ikan Akmal', 'Embel-embel nama Akmal ternyata merujuk pada nama sebuah restoran legendaris di Samarinda', 'Embel-embel nama Akmal ternyata merujuk pada nama sebuah restoran legendaris di Samarinda. Restoran ini juga sering jadi rujukan bagi turis yang berkunjung ke kota ini.\r\n\r\nBagi anda yang sedang ingin makanan berkuah patut mencicipi kuliner asli Samarinda yang satu ini.\r\n\r\nBerbahan dasar ikan patin, Sup Ikan Akmal diolah menggunakan bumbu-bumbu khas dengan sensasi rasa asam pedas yang nikmat.\r\n\r\nSantapan pertamanya akan memberikan sensasi segar yang menggugah selera dan membuat ketagihan.\r\n\r\nSajian kuliner khas Samarinda ini paling cocok dinikmati bersama nasi hangat dan es teh manis.', '/img/kuliner/Sup-Ikan-Akmal.jpg', NULL, NULL),
(5, 'Bubur Pedas', 'Menggunakan beras yang disangrai bersama kelapa parut, bubur ini kemudian dimasak dalam air mendidih bersama tetelan daging dan aneka sayuran.', 'Sedikit unik memang, namun Samarinda juga menawarkan kuliner bubur yang patut untuk dicoba.\r\n\r\nMenggunakan beras yang disangrai bersama kelapa parut, bubur ini kemudian dimasak dalam air mendidih bersama tetelan daging dan aneka sayuran.\r\n\r\nPenggunaan daun kesum pada makanan khas Samarinda ini memberikan sensasi pedas yang khas; harum yang sedikit menyengat dengan rasa yang asam.\r\n\r\nMenyantap bubur pedas ini akan semakin lengkap dengan tambahan ikan teri goreng, jeruk sambal, kacang tanah dan kecap.', '/img/kuliner/bubur-pedas.jpg', NULL, NULL),
(6, 'Soto Banjar', 'Makanan berkuah kedua yang juga banyak dicari di Samarinda adalah Soto Banjar.', 'Makanan berkuah kedua yang juga banyak dicari di Samarinda adalah Soto Banjar. Makanan khas Samarinda ini terdiri dari ayam yang telah disuwir kecil-kecil, perkedel kentang, sohun rebus, potongan telur dan daun seledri.\r\n\r\nBanyak juga tempat makan yang menyajikannya dengan tambahan ketupat. Yang paling khas dari soto khas Banjar ini adalah aroma rempah dari kayu manis, biji pala dan cengkeh yang menjadikan cita rasanya makin menggoda.', '/img/kuliner/soto-banjar.jpg', NULL, NULL),
(7, 'Gence Ruan', 'Gence Ruan merupakan makanan khas Kalimantan Timur dengan bahan utama ikan haruan atau ikan gabus', 'Gence Ruan merupakan makanan khas Kalimantan Timur dengan bahan utama ikan haruan atau ikan gabus\r\n\r\nKudapan ini memiliki tampilan yang menarik perhatian dengan warna merah yang tentunya akan membangkitkan selera makan. Warna yang terang menyala ini dihasilkan dari penggunaan rempah-rempah.\r\n\r\nDisarankan untuk menyantap kuliner tradisional Samarinda ini selagi hangat karena rasanya akan semakin nikmat dan mantap.', '/img/kuliner/gence-ruan.jpg', NULL, NULL),
(8, 'Pepes Kepiting', 'Meski sudah lebih dulu terkenal di daerah Balikpapan, pepes kepiting juga menjadi salah satu menu kuliner khas pilihan di Samarinda.', 'Tidak seperti pepes pada umumnya, Samarinda menyajikan pilihan menu pepes menggunakan bahan dasar kepiting.\r\n\r\nMeski sudah lebih dulu terkenal di daerah Balikpapan, pepes kepiting juga menjadi salah satu menu kuliner khas pilihan di Samarinda.\r\n\r\nMakanan ini biasanya menggunakan kepiting soka atau kepiting lemburi sebagai bahan utama.\r\n\r\nOleh karena kepiting memiliki kandungan gizi yang cukup banyak, pepes kepiting tidak hanya nikmat, tapi juga menyehatkan.\r\n\r\nDari segi bumbu, bahan-bahan campuran seperti cabai dan kunyit membuat makanan khas Samarinda ini memiliki rasa yang pedas menyengat.\r\n\r\nBanyak yang menggemari pepes kepiting khas Samarinda karena melimpahnya daging kepiting yang telah dibungkus dengan daun pisang.', '/img/kuliner/Pepes-Kepiting.jpg', NULL, NULL),
(9, 'Sate Payau', 'Sedikit berbeda dari sate kebanyakan, makanan tradisional khas Samarinda yang satu ini memiliki bahan utama daging rusa.', 'Jika Anda ingin berburu makanan khas di kota Samarinda, Sate Payau bisa menjadi pilihan.\r\n\r\nSedikit berbeda dari sate kebanyakan, makanan tradisional khas Samarinda yang satu ini memiliki bahan utama daging rusa.\r\n\r\nTekstur daging payau (rusa) terasa lebih empuk dan lembut di mulut jika dibandingkan dengan daging sapi kebanyakan.\r\n\r\nSayangnya, Sate Payau sudah semakin sulit ditemukan karena rusa telah menjadi salah satu hewan yang dilindungi.\r\n\r\nAkan tetapi, kamu masih bisa mencari makanan ini di berbagai acara kesenian atau upacara adat di Kalimantan Timur.\r\n\r\n', '/img/kuliner/sate-payau.jpg', NULL, NULL),
(10, 'Rojak Singkil', 'Rojak Singkil adalah sayur dengan kuah santan kelapda yang berisi daun singkil dan ikan haruan.', 'Walaupun namanya rujak, makanan khas Samarinda yang satu ini berbeda jauh dengan rujak yang biasanya kita nikmati.\r\n\r\nRojak Singkil adalah sayur dengan kuah santan kelapda yang berisi daun singkil dan ikan haruan.\r\n\r\nSelain nasi Bekepor, makanan khas Samarinda ini juga merupakan menu khas dari kerajaan Kutai Kertanegara.\r\n\r\nRojak Singkil umumnya disajikan bersama ikan dan sambal pedas. Menyantapnya dengan nasi hangat juga tidak kalah nikmat.', '/img/kuliner/rojak-singkil.jpg', NULL, NULL),
(11, 'Sayur Asam Kutai', 'Sebagai makanan khas Samarinda, Sayur Asam Kutai tidak berbahan pokok sayur-mayur, melainkan kepala ikan gabus.', 'Di Indonesia, terdapat berbagai macam sayuran. Ada sayur kangkung, sayur daun singkong, sayur gulai nangka, dan lain-lain.\r\n\r\nSemuanya terbuat dari bahan utama berupa sayur. Akan tetapi, Kota Samarinda memiliki hidangan sayuran yang unik, yakni Sayur Asam Kutai.\r\n\r\nSebagai makanan khas Samarinda, Sayur Asam Kutai tidak berbahan pokok sayur-mayur, melainkan kepala ikan gabus.\r\n\r\nKepala ikan gabus tersebut dibelah dua, lalu dilumuri garam dan air jeruk nipis. Nantinya, bahan utama itu dimasukkan ke dalam kuah khas yang lezat dan nikmat.', '/img/kuliner/Sayur-Asam-Kutai.jpeg', NULL, NULL),
(12, 'Rabo Ruan', 'Mirip halnya seperti Gence Ruan, hidangan ini berbahan dasar ikan haruan. Perbedaan tampilannya terletak pada penyajian makanan khas Samarinda ini.', 'Mirip halnya seperti Gence Ruan, hidangan ini berbahan dasar ikan haruan. Perbedaan tampilannya terletak pada penyajian makanan khas Samarinda ini. Rabo Ruan tidak diolah dengan ikan utuh, melainkan suwiran daging ikan, seperti abon.\r\n\r\nKelezatan Rabo Ruan disempurnakan dengan bumbu dan rempah yang pas. Juga, masakan ini diberi santan, sehingga terdapat kegurihan.', '/img/kuliner/rabo-ruan.jpg', NULL, NULL),
(13, 'Sambal Raja', 'Sambal Raja merupakan gabungan aneka sambal. Inilah sambal khas Samarinda yang bisa menggoyang lidahmu,', 'Sambal Raja merupakan gabungan aneka sambal. Inilah sambal khas Samarinda yang bisa menggoyang lidahmu.\r\n\r\nJelas rasanya pedas, namun sensasi membara pada lidah bukan satu-satunya yang menjadi andalan hidangan ini.\r\n\r\nSambal Raja disempurnakan dengan terong ungu, telur rebus, irisan bawang, kacang-kacangan, rempah-rempah, dan bermacam bumbu. Kemudian, olahannya digoreng dan diberi sentuhan akhir berupa perasan jeruk cina.', '/img/kuliner/sambal-raja.jpg', NULL, NULL),
(14, 'Kue Bingka Kentang', 'Kudapan yang ringan di perut, namun nendang di lidah. Ya, itulah Kue Bingka Kentang.', 'Kudapan yang ringan di perut, namun nendang di lidah. Ya, itulah Kue Bingka Kentang. Santapan lezat ini memang memiliki rasa yang lezat.\r\n\r\nJadi, sudah menjadi barang wajib untuk memasukkan Kue Bingka Kentang ke dalam daftar rekomendasi makanan khas Samarinda yang harus dinikmati.\r\n\r\nSesuai  dengan namanya, Kue Bingka Kentang berbahan pokok kentang. Mulanya, kentang harus dihaluskan terlebih dahulu, kemudian dicampur dengan bahan lainnya, seperti tepung, telur, santan, gula, perisa, dan resep nikmat rahasia lainnya.', '/img/kuliner/Kue-Bingka-Kentang.jpg', NULL, NULL),
(15, 'Kue Gegincak', 'Kudapan ini sangatlah disukai masyarakat Samarinda karena teksturnya yang lembut dan kenyal.', 'Tidak kalah dengan makanan khas Samarinda sebelumnya, Kue Gegincak juga sayang untuk dilewatkan.\r\n\r\nKudapan ini sangatlah disukai masyarakat Samarinda karena teksturnya yang lembut dan kenyal. Kue Gegincak memiliki rasa yang manis dan wangi yang harum.\r\n\r\nKue ini terbuat dari tepung beras ketan putih. Warnanya hijau sebab campuran daun pandan.\r\n\r\nHarumnya pun demikian; wangi pandan. Setelah matang dari kukusan, Kue Gegincak akan ditaburi parutan kelapa dan disirami saus gula merah.', '/img/kuliner/Kue-Gegincak.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_11_07_022417_create_wisatas_table', 1),
(12, '2020_11_07_022850_create_kuliners_table', 2),
(13, '2020_11_07_055740_create_kaves_table', 3),
(14, '2020_11_07_092151_create_oleholehs_table', 4),
(15, '2020_11_07_092444_create_working_spaces_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oleh_oleh`
--

CREATE TABLE `oleh_oleh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oleh_oleh`
--

INSERT INTO `oleh_oleh` (`id`, `nama`, `deskripsi_singkat`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Sarung Samarinda', 'Sarung Samarinda merupakan salah satu produk unggulan yang diproduksi oleh masyarakat lokal Samarinda.', 'Anda pasti sangat familiar dengan sarung, karena orang Indonesia doyan mengenakan sarung. Sarung Samarinda merupakan salah satu produk unggulan yang diproduksi oleh masyarakat lokal Samarinda. Dahulu Sarung Samarinda diperkenalkan pertama kali oleh pendatang suku Bigis yang berasal dari Sulawesi pada tahun 1668. Tentunya anda menginginkan oleh-oleh khas Samarinda yang terbuat dari kain seperti sarung satu ini. Anda bisa menjadikan kain sarung ini pada saat moment lebaran bersama keluarga. Harga Sarung Samarinda berkisar 100-200 ribu rupiah tergantung ukuran dan bahan dasarnya.', '/img/oleholeh/sarung-samarinda.jpg', NULL, NULL),
(2, 'Keminting Samarinda', 'Keminting Samarinda merupakan salah satu oleh oleh khas Samarinda yang juga terkenal dikalangan wisatawan.', 'Keminting Samarinda merupakan salah satu oleh oleh khas Samarinda yang juga terkenal dikalangan wisatawan. Keminting hanya bisa anda temukan di Samrinda, karena olahan satu ini terbuat dari biji kemiri yang dicampur dengan sagu, tepung, dan gula. Rasanya sangat manis dan sedikit lebih lemak. Teksturnya yang kasar dan beruas rapi membuat anda penasaran untuk segera mencicipinya. Anda jangan ragu memilih Keminting kedalam daftar oleh oleh khas dari Samarinda. Untuk harganya sendiri dihitung per kilo. Jika anda tidak ingin membawa kemasan keminting berukuran besar, maka pilih saja ukuran medium. Jadi, bagi anda suka nyemil, Keminting khas Samiranda bisa dimasukan kedalam daftar oleh-oleh yang wajib dibawa pulang.', '/img/oleholeh/keminting-samarinda.jpg', NULL, NULL),
(3, 'Gula Gait', 'Gula Gait sebenarnya menjadi salah satu ikon khas Samarinda yang terbuat dari campuran gula aren dan gula putih.', 'Oleh oleh khas Samarinda yang diolah menjadi panganan rasanya lumayan manis. Gula Gait sebenarnya menjadi salah satu ikon khas Samarinda yang terbuat dari campuran gula aren dan gula putih. Untuk membuat olahan ini, masyarakat Samarinda membutuhkan waktu yang lumaya lama hingga Gula Gait dapat dinikmati. Jajanan khas Samarinda ini sangat unik dan berasa legit di mulut, selain itu tampilannya yang sangat imut menyerupai kayu. Temukan makanan ini di tempat oleh-oleh dan jangan takut kehabisan, karena stoknya akan selalu tersedia. Bagi anda yang tidak ingin bepergian ke luar hotel, anda bisa memesannya lewat online langsung dari tempat pembuatan Gula Gait.', '/img/oleholeh/gula-gait.jpg', NULL, NULL),
(4, 'Amplang', 'Camilan menjadi buah tangan yang digemari dan paling mudah dibawa. Salah satunya adalah Amplang', 'Oleh-oleh tidak selalu berupa cinderamata, buktinya camilan menjadi buah tangan yang digemari dan paling mudah dibawa. Salah satunya adalah Amplang menjadi oleh oleh khas Samarinda yang paling terkenal banyak diburu olehh wisatawan. Terbuat dari olahan ikan tenggiri yang dicampur dengan tepung kanji. Tidak lupa bumbu yang dicampur kedalam adonan sangat khas sehingga memberikan cita rasa yang gurih dan renyah di mulut. Jika anda ingin oleh-oleh yang ringan, Amplang adalah opsi yang tepat. Untuk camilan satu ini dihargai berkisaran 30-100 ribu rupiah beradasarkan beratnya. Anda tertarik membeli Amplang? Minta driver mengantarkan anda ke tempat toko oleh oleh khusus Amplang di Samarinda.', '/img/oleholeh/amplang.jpg', NULL, NULL),
(5, 'Abon Ikan Haruan', 'Selain Amplang, ada juga oleh-oleh khas Samarinda lainnya yang juga terbuat dari ikan yaitu Abon', 'Selain Amplang, ada juga oleh-oleh khas Samarinda lainnya yang juga terbuat dari ikan yaitu Abon. Abon ikan Haruan merupakan nama lain dari ikan gabus. Samarinda, Kalimantan Timur memang sangat terkenal dengan ikan gabus yang sudah menjadi makanan khas penduduk lokal. Kini tidak hanya digoreng, ikan Haruan ini sudah diolah menjadi abon yang lezat dan bebas pengawet. Abon ikan gabus ini punya cita rasa yang khas. Oleh sebab itu banyak wisatawan memburu oleh-oleh abon khas Samarinda. Harga abon ikan Haruan cukup bervariasi tergantung dengan jenisnya. Biasanya harga abon ikan Haruan sangat bervariasi dimulai dari 15-20 ribu per ons nya.', '/img/oleholeh/abon-ikan-haruan.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `lokasi`, `deskripsi_singkat`, `deskripsi`, `gambar`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'Desa Budaya Pampang', 'Jl. Wisata Budaya Pampang, No.32, RT.03, Kec Sam. Utara, Kota Samarinda', 'Desa Budaya Pampang, menjadi salah satu destinasi yang bisa Kamu kunjungi jika ingin mengenal budaya lokal suku di Samarinda.', 'Desa Budaya Pampang, menjadi salah satu destinasi yang bisa Kamu kunjungi jika ingin mengenal budaya lokal suku di Samarinda. Desa budaya ini dihuni oleh suku Dayak Kenyah asli. Desa ini juga memiliki keunikan, tak heran jika banyak wisatawan yang berkunjung kesini.\r\n\r\nSelain melihat berbagai aktivitas warga suku Dayak, Kamu juga bisa menikmati pertunjukan seni setiap hari minggu siang di balai pertemuan atau lamin. Uniknya, saat pertunjukan berlangsung seluruh masyarakat Desa Pampang akan mengenakan baju tradisionalnya.', '/img/wisata/Desa-Budaya-Pampang.jpg', -0.3775379, 117.2279942, NULL, NULL),
(2, 'Air Terjun Tanah Merah', 'Jl. Muara Badak , Tanah Merah, Kec. Samarinda Utara, Kota Samarinda', 'Air Terjun Tanah Merah, merupakan salah satu wisata air terjun di Samarinda yang mempunyai keunikan.', 'Air Terjun Tanah Merah, merupakan salah satu wisata air terjun di Samarinda yang mempunyai keunikan. Air terjun setinggi 15 meter ini akan tampak bening saat mengalir, namun setelah sampai di hilir air berubah menjadi keruh kemerahan. Ini disebabkan dasar berupa tanah gambut.\r\n\r\nBerada disini, Kamu bisa puas bermain air, meski terlihat keruh. Atau duduk santai menikmati pemandangan di gazebo, jika tak ingin basah-basahan. Disini juga sudah dilengkapi beberapa fasilitas, seperti warung dan area bermain anak.', '/img/wisata/Air-Terjun-Tanah-Merah.jpg', -0.4334951, 117.2318422, NULL, NULL),
(3, 'Telaga Permai Batu Besaung', 'Sempaja, Sempaja, Samarinda Utara, Kota Samarinda', 'List recommended pas buat Kamu yang ingin berkemah di alam bebas, yaitu Telaga Permai Batu Besaung.', 'List recommended pas buat Kamu yang ingin berkemah di alam bebas, yaitu Telaga Permai Batu Besaung. Sungai disini tampak seperti air terjun pendek, dikarenakan kawasannya memiliki ketinggian tanah yang berbeda-beda.\r\n\r\nTak hanya berkemah saja, di telaga ini Kamu bisa bermain air tanpa takut tenggelam, atau berpetualang menikmati keindahan alam Telaga Batu Saung. Oh ya jangan lupa membawa bekal makanan ya, biar tak kelaparan setelah berendam disini.', '/img/wisata/Telaga-Permai-Batu-Besaung.jpg', -0.3956642, 117.1484509, NULL, NULL),
(4, 'Kebun Raya Unmul Samarinda', 'Jl. Kuaro, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda', 'Meskipun dikelola oleh Universitas Mulawarman sebagai hutan pendidikan, namun destinasi wisata ini terbuka untuk wisatawan umum.', 'Meskipun dikelola oleh Universitas Mulawarman sebagai hutan pendidikan, namun destinasi wisata ini terbuka untuk wisatawan umum. Jika ingin mengunjungi Kebun Raya Unmul, Kamu harus menempuh jarah sekitar 10 km dari kota Samarinda.\r\n\r\nAda banyak aktivitas menyenangkan yang bisa dilakukan saat berlibur kesini. Kamu bisa berkeliling danau cantik menggunakan sepeda air, mengelilingi kebun dengan andong, mengunjungi kebun binatang mini, atau menambah informasi tentang jenis kayu Kalimantan di museum kayu.', '/img/wisata/Kebun-Raya-Unmul-Samarinda.jpg', -0.4461035, 117.205533, NULL, NULL),
(5, 'Taman Rekreasi Lembah Hijau', 'Jl. Kebun Raya, Lempake, Kec. Samarinda Utara, Kota Samarinda', 'Berlibur ke Samarinda tak lengkap jika tidak mengunjungi Taman Rekreasi Lembah Hijau, sebuah destinasi wisata yang memiliki banyak fasilitas.', 'Berlibur ke Samarinda tak lengkap jika tidak mengunjungi Taman Rekreasi Lembah Hijau, sebuah destinasi wisata yang memiliki banyak fasilitas. Mulai dari flying fox, camping area, kolam renang, replica hutan, gazebo, area permainan anak, pujasera, dan kolam pemancingan.\r\n\r\nKamu bisa mengajak seluruh anggota keluarga untuk berlibur kesini, atau rekan kerja untuk melaksanakan outbond. Selain fasilitas yang lengkap, pemandangan alam yang disuguhkan juga sangat menakjubkan ditambah harga tiket yang juga murah.', '/img/wisata/Taman-Rekreasi-Lembah-Hijau.jpg', -0.449746, 117.2005781, NULL, NULL),
(6, 'Pulau Kumala', 'Jl. K.H. Ahmad Muksin, Tenggarong, Timbau, Kec. Tenggarong, Kab. Kutai Kartanegara', 'Lokasi Pulau Kumala berada di tengah Sungai Mahakam, dan berbentuk seperti perahu terbalik.', 'Lokasi Pulau Kumala berada di tengah Sungai Mahakam, dan berbentuk seperti perahu terbalik. Untuk menjamahnya, Kamu bisa naik kereta gantung dari Tenggarong atau perahu motor.\r\n\r\nWisata pulau ini menyuguhkan keindahan budaya khas Kalimantan, seperti bangunan tradisional, patung lembu, dan candi. Tak hanya itu saja, Kamu bisa menikmati berbagai permainan seru seperti sky tower dan lainnya.', '/img/wisata/Pulau-Kumala.jpg', -0.4233265, 116.9920942, NULL, NULL),
(7, 'Pulau Beras Basah', 'Bontang Lestari, Kec. Bontang Selatan, Kota Bontang', 'Tak kalah dengan pesona Pulau Kumala, wisata Pulau Beras Basah juga memiliki pemandangan alam yang sangat eksotis.', 'Tak kalah dengan pesona Pulau Kumala, wisata Pulau Beras Basah juga memiliki pemandangan alam yang sangat eksotis. Karena berada di Selat Makasar, untuk menjamah wisata alam ini Kamu membutuhkan waktu sekitar 3 jam.\r\n\r\nPemandangan air laut jernih dipadu hamparan pasir putih bersih, siap mengobati rasa lelah. Tak hanya itu saja pemandangan bawah lautnya juga menarik, sayang jika dilewatkan.', '/img/wisata/Pulau-Beras-Basah-1.jpg', 0.0466293, 117.5218439, NULL, NULL),
(8, 'Masjid Islamic Center Samarinda', 'Jl. Slamet Riady No.1, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda', 'Berdiri sejak 19 tahun yang lalu, Masjid Islamic Center Samarinda ini menjadi salah satu destinasi wisata religi yang selalu ramai dikunjungi wisatawan.', 'Berdiri sejak 19 tahun yang lalu, Masjid Islamic Center Samarinda ini menjadi salah satu destinasi wisata religi yang selalu ramai dikunjungi wisatawan. Daya tariknya terletak pada gaya arsitektur bangunan, yang konon terinspirasi oleh Hagia Sophia, Turki.\r\n\r\nMasjid ini juga memiliki satu menara dengan tinggi 99 meter, sebagai lambang dari asmaul husna. 6 menara pendek sebagai lambang rukun iman, dan 33 buah anak tangga sebagai lambang jumlah butiran tasbih.', '/img/wisata/Masjid-Islamic-Center-Samarinda.jpg', -0.5023579, 117.1202116, NULL, NULL),
(9, 'Air Terjun Pinang Seribu', 'Sempaja Utara, Kec. Samarinda Utara, Kota Samarinda', 'Saat berada di Samarinda Utara, Kamu bisa mengunjungi salah satu destinasi wisata alam yang sangat unik yaitu Air Terjun Pinang Seribu.', 'KALIMANTAN TIMUR16 Tempat Wisata di Samarinda Terbaru & Lagi Hits Dikunjungi\r\nTempat Wisata Samarinda\r\n\r\nSamarinda merupakan ibukota Kalimantan Timur, yang sebelumnya menjadi bagian dari daerah Kesultanan Kutai Kartanegara ing Martadipura. Dengan luas 718 km persegi dan pesona alam yang masih asri, membuat Samarinda selalu ramai dikunjungi wisatawan saat musim liburan tiba.\r\n\r\nAda banyak tempat wisata di Samarinda yang wajib dikunjungi, mulai dari wisata alam, sejarah, religi, hingga wisata wahana yang menyenangkan. Meski yang menjadi favorit adalah wisata alamnya, namun keindahan destinasi lain harus dijamah saat berlibur kesini.\r\n\r\nBerikut 16 list objek wisata favorit dengan pesona yang menakjubkan, dan wajib dikunjungi segera. Kamu bisa mengajak keluarga atau sahabat terdekat, untuk menjelajahinya. Perlu diingat, untuk menjaga dan mentaati peraturan agar kelestariannya tetap terjaga.\r\n\r\n1. Desa Budaya Pampang\r\nDesa Budaya Pampang\r\nLokasi: Jl. Wisata Budaya Pampang, No.32, RT.03, Kec Sam. Utara, Kota Samarinda, Kalimantan Timur. – Image Credit by Pesona.travel\r\n\r\nDesa Budaya Pampang, menjadi salah satu destinasi yang bisa Kamu kunjungi jika ingin mengenal budaya lokal suku di Samarinda. Desa budaya ini dihuni oleh suku Dayak Kenyah asli. Desa ini juga memiliki keunikan, tak heran jika banyak wisatawan yang berkunjung kesini.\r\n\r\nSelain melihat berbagai aktivitas warga suku Dayak, Kamu juga bisa menikmati pertunjukan seni setiap hari minggu siang di balai pertemuan atau lamin. Uniknya, saat pertunjukan berlangsung seluruh masyarakat Desa Pampang akan mengenakan baju tradisionalnya.\r\n\r\n2. Air Terjun Tanah Merah\r\nAir Terjun Tanah Merah\r\nLokasi: Jl. Muara Badak , Tanah Merah, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur. – Image Credit by Ksmtour.com\r\n\r\nAir Terjun Tanah Merah, merupakan salah satu wisata air terjun di Samarinda yang mempunyai keunikan. Air terjun setinggi 15 meter ini akan tampak bening saat mengalir, namun setelah sampai di hilir air berubah menjadi keruh kemerahan. Ini disebabkan dasar berupa tanah gambut.\r\n\r\nBerada disini, Kamu bisa puas bermain air, meski terlihat keruh. Atau duduk santai menikmati pemandangan di gazebo, jika tak ingin basah-basahan. Disini juga sudah dilengkapi beberapa fasilitas, seperti warung dan area bermain anak.\r\n\r\n3. Telaga Permai Batu Besaung\r\nTelaga Permai Batu Besaung\r\nLokasi: Sempaja, Sempaja, Samarinda Utara, Kota Samarinda, Kalimantan Timur. – Image Credit by Adigunawan86.blogspot.com\r\n\r\nList recommended pas buat Kamu yang ingin berkemah di alam bebas, yaitu Telaga Permai Batu Besaung. Sungai disini tampak seperti air terjun pendek, dikarenakan kawasannya memiliki ketinggian tanah yang berbeda-beda.\r\n\r\nBACA:  Pantai Lamaru, Pantai Indah yang Asri di Balikpapan\r\nTak hanya berkemah saja, di telaga ini Kamu bisa bermain air tanpa takut tenggelam, atau berpetualang menikmati keindahan alam Telaga Batu Saung. Oh ya jangan lupa membawa bekal makanan ya, biar tak kelaparan setelah berendam disini.\r\n\r\n4. Kebun Raya Unmul Samarinda\r\nKebun Raya Unmul Samarinda\r\nLokasi: Jl. Kuaro, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur. – Image Credit by Eastborneosite.wordpress.com\r\n\r\nMeskipun dikelola oleh Universitas Mulawarman sebagai hutan pendidikan, namun destinasi wisata ini terbuka untuk wisatawan umum. Jika ingin mengunjungi Kebun Raya Unmul, Kamu harus menempuh jarah sekitar 10 km dari kota Samarinda.\r\n\r\nAda banyak aktivitas menyenangkan yang bisa dilakukan saat berlibur kesini. Kamu bisa berkeliling danau cantik menggunakan sepeda air, mengelilingi kebun dengan andong, mengunjungi kebun binatang mini, atau menambah informasi tentang jenis kayu Kalimantan di museum kayu.\r\n\r\n5. Taman Rekreasi Lembah Hijau\r\nTaman Rekreasi Lembah Hijau\r\nLokasi: Jl. Kebun Raya, Lempake, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur. – Image Credit by Ayupurnamasari30.blogspot.com\r\n\r\nBerlibur ke Samarinda tak lengkap jika tidak mengunjungi Taman Rekreasi Lembah Hijau, sebuah destinasi wisata yang memiliki banyak fasilitas. Mulai dari flying fox, camping area, kolam renang, replica hutan, gazebo, area permainan anak, pujasera, dan kolam pemancingan.\r\n\r\nKamu bisa mengajak seluruh anggota keluarga untuk berlibur kesini, atau rekan kerja untuk melaksanakan outbond. Selain fasilitas yang lengkap, pemandangan alam yang disuguhkan juga sangat menakjubkan ditambah harga tiket yang juga murah.\r\n\r\n6. Pulau Kumala\r\nPulau Kumala\r\nLokasi: Jl. K.H. Ahmad Muksin, Tenggarong, Timbau, Kec. Tenggarong, Kab. Kutai Kartanegara, Kalimantan Timur. – Image Credit by Korankaltim.com\r\n\r\nLokasi Pulau Kumala berada di tengah Sungai Mahakam, dan berbentuk seperti perahu terbalik. Untuk menjamahnya, Kamu bisa naik kereta gantung dari Tenggarong atau perahu motor.\r\n\r\nBACA:  Taman Cibodas Bontang, Tujuan Rekreasi Favorit Keluarga\r\nWisata pulau ini menyuguhkan keindahan budaya khas Kalimantan, seperti bangunan tradisional, patung lembu, dan candi. Tak hanya itu saja, Kamu bisa menikmati berbagai permainan seru seperti sky tower dan lainnya.\r\n\r\n7. Pulau Beras Basah\r\nPulau Beras Basah\r\nLokasi: Bontang Lestari, Kec. Bontang Selatan, Kota Bontang, Kalimantan Timur. – Image Credit by Ksmtour.com\r\n\r\nTak kalah dengan pesona Pulau Kumala, wisata Pulau Beras Basah juga memiliki pemandangan alam yang sangat eksotis. Karena berada di Selat Makasar, untuk menjamah wisata alam ini Kamu membutuhkan waktu sekitar 3 jam.\r\n\r\nPemandangan air laut jernih dipadu hamparan pasir putih bersih, siap mengobati rasa lelah. Tak hanya itu saja pemandangan bawah lautnya juga menarik, sayang jika dilewatkan.\r\n\r\n8. Masjid Islamic Center Samarinda\r\nMasjid Islamic Center Samarinda\r\nLokasi: Jl. Slamet Riady No.1, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur. – Image Credit by Pegipegi.com\r\n\r\nBerdiri sejak 19 tahun yang lalu, Masjid Islamic Center Samarinda ini menjadi salah satu destinasi wisata religi yang selalu ramai dikunjungi wisatawan. Daya tariknya terletak pada gaya arsitektur bangunan, yang konon terinspirasi oleh Hagia Sophia, Turki.\r\n\r\nMasjid ini juga memiliki satu menara dengan tinggi 99 meter, sebagai lambang dari asmaul husna. 6 menara pendek sebagai lambang rukun iman, dan 33 buah anak tangga sebagai lambang jumlah butiran tasbih.\r\n\r\n9. Air Terjun Pinang Seribu\r\nAir Terjun Pinang Seribu\r\nLokasi: Sempaja Utara, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur. – Image Credit by Wonderfulborneoku.blogspot.com\r\n\r\nSaat berada di Samarinda Utara, Kamu bisa mengunjungi salah satu destinasi wisata alam yang sangat unik yaitu Air Terjun Pinang Seribu. Berbeda dengan lainnya, air terjun disini berwujud undakan dengan aliran air yang tidak begitu deras sehingga aman saat Kamu naiki.\r\n\r\nBerlibur kesini Kamu bisa puas bermain air, atau memancing dan menyewa sepeda air untuk berkeliling. Ada juga gazebo untuk menyantap bekal makanan, serta villa untuk bermalam disini. Usahakan tidak menjamah air terjun saat musim hujan, biar alirannya tidak deras dan aman.', '/img/wisata/Air-Terjun-Pinang-Seribu.jpg', -0.4015948, 117.1542737, NULL, NULL),
(10, 'Kampung Tenun Samarinda', 'Gg. Pertenunan Jl. Hos Cokro Aminoto, Rapak Dalam, Kec. Samarinda Seberang', 'Nah buat yang ingin mencari oleh-oleh khas Kalimantan Timur, bisa berkunjung ke Kampung Tenun Samarinda yang berlokasi di sebelah Sungai Mahakam.', 'Nah buat yang ingin mencari oleh-oleh khas Kalimantan Timur, bisa berkunjung ke Kampung Tenun Samarinda yang berlokasi di sebelah Sungai Mahakam. Tepatnya di Kecamatan Samarinda Seberang. Ada 2 kampung disini yang semuanya adalah tempat wisata kerajinan tenun.\r\n\r\nSelain bisa membeli kain tenun yang sudah jadi, Kamu juga bisa melihat proses pembuatannya. Pembuatan kain tenun biasanya membutuhkan waktu sekitar 3-7 hari, sesuai kesulitannya.', '/img/wisata/Kampung-Tenun-Samarinda.jpg', -0.5109443, 117.1451028, NULL, NULL),
(11, 'Tjiu’s  Palace Samarinda\r\n', 'Jl. Sultan Sulaiman No.6, Sambutan, Kec. Sambutan, Kota Samarinda', 'Ini merupakan tempat wisata yang cocok dikunjungi bersama keluarga, terutama anak-anak.', 'List destinasi selanjutnya berada di kecamatan Sambutan, yaitu Tjiu’s Palace Samarinda. Ini merupakan tempat wisata yang cocok dikunjungi bersama keluarga, terutama anak-anak.\r\n\r\nFasilitasnya cukup lengkap seperti sepeda air berbentuk lucu, kolam pemancingan, kereta api, kolam khusus anak, dan masih banyak lagi. Destinasi ini cocok buat Kamu yang memiliki hobi memancing. Pemandangannya juga sangat eksotis, dengan udara khas Kalimantan Timur.', '/img/wisata/Tjiu’s-Palace-Samarinda.jpg', -0.518129, 117.194867, NULL, NULL),
(12, 'Penangkaran Buaya Samarinda', 'Makroman, Kec. Sambutan, Kota Samarinda', 'Ingin menguji adrenalin Kamu? Coba kunjungi Penangkaran Buaya Samarinda, yang berada di kecamatan Sambutan.', 'Ingin menguji adrenalin Kamu? Coba kunjungi Penangkaran Buaya Samarinda, yang berada di kecamatan Sambutan. Wisata ini dibuka setiap hari mulai pukul 8 pagi hingga 5 sore, tiket masuknya juga sangat murah.\r\n\r\nDi area seluas 7 hektare, Kamu bisa menemukan 3 jenis buaya yang bisa juga diajak foto diantaranya buaya muara, sepit, dan siam. Untuk fasilitas, wisata penangkaran ini sudah cukup lengkap seperti area parkir, kamar mandi, foodcourt, dan masih banyak lagi.', '/img/wisata/Penangkaran-Buaya-Samarinda.jpg', -0.517073, 117.2324435, NULL, NULL),
(13, 'Jungle Water World', 'Km. 24, Guntunglai, Jalan Bontang – Samarinda, Tanah Merah, Kec. Samarinda Utara, Kota Samarinda', 'Jungle Water World, menjadi salah satu destinasi di Samarinda yang wajib Kamu kunjungi.', 'Jungle Water World, menjadi salah satu destinasi di Samarinda yang wajib Kamu kunjungi. Lokasinya yang berada di pusat kota, menjadikan tempat wisata ini menjadi tujuan utama wisatawan saat berlibur ke ibu kota ini.\r\n\r\nAda banyak fasilitas mewah yang bisa Kamu dapatkan disini, salah satunya beberapa kolam renang yang dapat menguji adrenalin seperti kolam Wadah Berhayut. Destinasi ini juga bisa dijadikan sebagai area outbond dengan harga yang cukup murah meriah.', '/img/wisata/Jungle-Water-World.jpg', -0.4174396, 117.2346063, NULL, NULL),
(14, 'Bukit Anggana', 'Jln.Ampera, Kec. Palaran, Kota Samarinda', 'Destinasi ini hanya berjarak sekitar 9 km dari Kecamatan Sebulu, dan butuh 2 jam perjalanan dari pusat kota.', 'Destinasi ini hanya berjarak sekitar 9 km dari Kecamatan Sebulu, dan butuh 2 jam perjalanan dari pusat kota. Dijuluki Bukit Teletubbies karena hamparan bukit dengan rumput hijau saat musim hujan, akan menyerupai bukit yang ada di serial kartun tersebut.\r\n\r\nDisini Kamu bisa berfoto, berguling-guling dan piknik. Yang lebih menariknya Kamu bisa menikmati senja khas Samarinda disini.\r\n\r\n', '/img/wisata/Bukit-Anggana.jpg', -0.5734251, 117.1778065, NULL, NULL),
(15, 'Waduk Benanga', 'Lempake, Kec. Samarinda Utara, Kota Samarinda', 'Masih berada di lokasi Lempake, untuk menuju Waduk Benanga dibutuhkan waktu sekitar 1 jam menggunakan kendaraan bermotor roda dua atau empat.', 'Masih berada di lokasi Lempake, untuk menuju Waduk Benanga dibutuhkan waktu sekitar 1 jam menggunakan kendaraan bermotor roda dua atau empat. Suguhan pemandangan waduk yang indah, bisa Kamu nikmati disini.\r\n\r\nKamu bisa berfoto dengan background pesona waduk yang memukau. Apalagi saat sore menjelang matahari terbenam, panorama waduk akan semakin eksotis.', '/img/wisata/Waduk-Benanga.jpg', -0.4201001, 117.1778065, NULL, NULL),
(16, 'Mahakam Lampion Garden', 'Jl. Slamet Riady No.75, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda', 'Kecantikan berbagai bentuk lampion yang cantik, siap menyambut Kamu.', 'Mengujungi Mahakam Lampion Garden saat malam hari merupakan pilihan tepat. Kecantikan berbagai bentuk lampion yang cantik, siap menyambut Kamu.\r\n\r\nPesona lampu lampion yang kelap-kelip, menjadi pemanis di tepian Sungai Mahakam. Kamu bisa puas berfoto di banyak spot lampion, atau bermain di berbagai permainan seru yang disediakan.\r\n\r\n', '/img/wisata/Mahakam-Lampion-Garden.jpg', -0.5065392, 117.1174306, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_space`
--

CREATE TABLE `working_space` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_space`
--

INSERT INTO `working_space` (`id`, `nama`, `alamat`, `jam_buka`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Ruangku Coworking Space', 'Jl. Jend. Ahmad Yani No.15B, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117', '09.00–21.00', 'The first Co-working Space in Samarinda, beautiful place in East Borneo. Place for Create, Connect, Colaborate for Creative People.', '/img/workingspace/ruangku.jpg', NULL, NULL),
(2, 'Start-Up Coffee', 'Jl. Wahid Hasyim 2 No.25, Sempaja Sel., Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75131', '10.00–22.00', 'Mau Cari tempat buat kumpul-kumpul bareng temen-temen malam ini? Ke  Start Up Coffee aja yuk. Banyak menu yang harus kamu coba sambil baca buku-buku atau belajar bersama. Langsung aja yuk mampir sekarang...', '/img/workingspace/startup-coffee.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kafe`
--
ALTER TABLE `kafe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oleh_oleh`
--
ALTER TABLE `oleh_oleh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_space`
--
ALTER TABLE `working_space`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kafe`
--
ALTER TABLE `kafe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `oleh_oleh`
--
ALTER TABLE `oleh_oleh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `working_space`
--
ALTER TABLE `working_space`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
