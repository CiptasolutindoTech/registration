<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Sekata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-cover bg-center bg-no-repeat flex flex-col justify-center items-center min-h-screen" 
      style="background-image: url('image/bg.jpg');">

    <div class="card w-full max-w-lg bg-white bg-opacity-80 backdrop-blur-md shadow-lg p-6 rounded-lg">

        <!-- HEADER DENGAN LOGO PERUSAHAAN -->
        <div class="flex flex-col items-center mb-6">
            <img src="image/logo.png" alt="Logo Perusahaan" class="w-24 h-24 mb-2">
            <h2 class="text-2xl font-bold text-center">Formulir Pendaftaran Sekata</h2>
        </div>

        <form method="POST" action="{{ route('regristration.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="nama" class="label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="border-b-2 border-gray-300 w-full focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="jenis_kelamin" class="label">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="border-b-2 border-gray-300 w-full focus:outline-none focus:border-blue-500" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="alamat" class="label">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="border-b-2 border-gray-300 w-full focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="perusahaan" class="label">Nama Instansi/Perusahaan</label>
                <input type="text" id="perusahaan" name="perusahaan" class="border-b-2 border-gray-300 w-full focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="email" class="label">Email</label>
                <input type="email" id="email" name="email" class="border-b-2 border-gray-300 w-full focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label for="telepon" class="label">No Whatsapp</label>
                <input type="tel" id="telepon" name="telepon" class="border-b-2 border-gray-300 w-full focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <label class="label">Skema Kompetensi yang dipilih:</label>
                <div class="flex flex-col gap-2">
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="asisteninstruktur" value="asisteninstruktur"> Asisten Instruktur
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="instruktur" value="instruktur"> Instruktur
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="instruktursenior" value="instruktursenior"> Instruktur Senior
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="mastertrainer" value="mastertrainer"> Master Trainer
                    </label>
                </div>
            </div>
            <div class="form-control">
                <label class="cursor-pointer flex items-center gap-2">
                    <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="agree-term" required>
                    Saya setuju dengan <a href="#" class="text-blue-500 underline">Syarat dan Ketentuan</a>
                </label>
            </div>
            <button type="submit" class="btn w-full bg-red-500 text-white shadow-lg hover:bg-red-600 hover:shadow-xl transition-shadow duration-300 py-2 px-4 text-sm rounded-lg">Daftar Sekarang</button>
        </form>
    </div>

   <!-- FOOTER SOSIAL MEDIA -->
<footer class="w-full text-center py-4 bg-red-900 text-white mb-0">
    <div class="flex justify-center gap-4 mt-2">
        <a href="https://www.facebook.com/profile.php?id=100094426865230&mibextid=ZbWKwL" target="_blank">
            <img src="image/fb.png" alt="Facebook" class="w-10 h-10 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
        </a>
        <a href="https://www.instagram.com/sekata_consulting" target="_blank">
            <img src="image/ig.png" alt="Instagram" class="w-10 h-10 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
        </a>
        <a href="https://wa.me/6287771107292" target="_blank">
            <img src="image/wa.png" alt="WhatsApp" class="w-10 h-10 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
        </a>
        <a href="https://www.linkedin.com" target="_blank">
            <img src="image/yt.png" alt="YouTube" class="w-10 h-10 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
        </a>
    </div>
</footer>

<!-- FOOTER INFORMASI KONTAK -->
<footer class="w-full text-center bg-red-500 text-white mt-0">
    <p class="text-sm">Hubungi kami melalui email:</p>
    <p class="text-lg font-semibold">
        <a href="mailto:sekataconsulting7292@gmail.com" class="text-blue-200 hover:underline">
           sekataconsulting7292@gmail.com
        </a>
    </p>
</footer>

</body>
</html>
