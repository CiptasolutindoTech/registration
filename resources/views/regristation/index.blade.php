<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Sekata</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center bg-no-repeat flex justify-center items-center min-h-screen" 
      style="background-image: url('image/bg.jpg');">

    <div class="card w-full max-w-lg bg-white bg-opacity-80 backdrop-blur-md shadow-lg p-6 rounded-lg">

        <!-- HEADER DENGAN LOGO PERUSAHAAN -->
        <div class="flex flex-col items-center mb-6">
            <img src="image/logo.png" alt="Logo Perusahaan" class="w-24 h-24 mb-2">
            <h2 class="text-2xl font-bold text-center">Formulir Pendaftaran Sekata</h2>
        </div>

        <form method="POST" class="space-y-4">
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
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="skema[]" value="asisteninstruktur"> Asisten Instruktur
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="skema[]" value="instruktur"> Instruktur
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="skema[]" value="instruktursenior"> Instruktur Senior
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="focus:ring-2 focus:ring-blue-500" name="skema[]" value="mastertrainer"> Master Trainer
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
</body>
</html>
