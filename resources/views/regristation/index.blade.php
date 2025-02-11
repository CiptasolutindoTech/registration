<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Sekata</title>

    <!-- Tailwind CSS & DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
            plugins: [daisyui]
        }
    </script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="card w-full max-w-lg bg-white shadow-lg p-6 rounded-lg">
        <h2 class="text-2xl font-bold text-center mb-4">Formulir Pendaftaran Sekata</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label for="nama" class="label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="input input-bordered w-full" required>
            </div>
            <div>
                <label for="jenis_kelamin" class="label">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="select select-bordered w-full" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="alamat" class="label">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="input input-bordered w-full" required>
            </div>
            <div>
                <label for="perusahaan" class="label">Nama Instansi/Perusahaan</label>
                <input type="text" id="perusahaan" name="perusahaan" class="input input-bordered w-full" required>
            </div>
            <div>
                <label for="email" class="label">Email</label>
                <input type="email" id="email" name="email" class="input input-bordered w-full" required>
            </div>
            <div>
                <label for="telepon" class="label">No Whatsapp</label>
                <input type="tel" id="telepon" name="telepon" class="input input-bordered w-full" required>
            </div>
            <div>
                <label class="label">Skema Kompetensi yang dipilih:</label>
                <div class="flex flex-col gap-2">
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="checkbox" name="skema[]" value="asisteninstruktur"> Asisten Instruktur
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="checkbox" name="skema[]" value="instruktur"> Instruktur
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="checkbox" name="skema[]" value="instruktursenior"> Instruktur Senior
                    </label>
                    <label class="cursor-pointer flex items-center gap-2">
                        <input type="checkbox" class="checkbox" name="skema[]" value="mastertrainer"> Master Trainer
                    </label>
                </div>
                <small class="text-gray-500">Tahan tombol Ctrl (Windows) atau Command (Mac) untuk memilih lebih dari satu.</small>
            </div>
            <div class="form-control">
                <label class="cursor-pointer flex items-center gap-2">
                    <input type="checkbox" class="checkbox" name="agree-term" required>
                    Saya setuju dengan <a href="#" class="text-blue-500 underline">Syarat dan Ketentuan</a>
                </label>
            </div>
            <button type="submit" class="btn btn-primary w-full">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>
