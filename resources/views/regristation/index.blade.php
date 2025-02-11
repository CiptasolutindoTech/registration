<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ url('colorlib-regform-12/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('colorlib-regform-12/css/style.css') }}">
    
    <style>
        label {
            font-weight: bold;
            color: black;
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Formulir Pendaftaran Sekata</h2>
                <div class="form-group-1">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label> 
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin">
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label> 
                        <input type="text" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Nama Instansi/Perusahaan</label> 
                        <input type="text" id="perusahaan" name="perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">No Whatsapp</label>
                        <input type="tel" id="telepon" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="skema">Skema Kompetensi yang dipilih:</label>
                        <select id="skema" name="skema[]" multiple>
                            <option value="asisteninstruktur">Asisten Instruktur</option>
                            <option value="instruktur">Instruktur</option>
                            <option value="instruktursenior">Instruktur Senior</option>
                            <option value="mastertrainer">Master Trainer</option>
                        </select>
                        <small>Tahan tombol Ctrl (Windows) atau Command (Mac) untuk memilih lebih dari satu.</small>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Request an appointment" />
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ url('colorlib-regform-12/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('colorlib-regform-12/js/main.js')}}"></script>
</body>
</html>
