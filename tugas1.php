<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Rak</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group .required {
            color: red;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px 20px;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Data Rak</h2>
    <div class="form-group">
        <label for="namaGedung">Nama Gedung</label>
        <select id="namaGedung">
            <option value="">Pilih Gedung</option>
            <option value="Gedung A">Gedung A</option>
            <option value="Gedung B">Gedung B</option>
            <option value="Gedung C">Gedung C</option>
        </select>
    </div>

    <div class="form-group">
        <label for="namaLantai">Nama Lantai</label>
        <select id="namaLantai">
            <option value="">Pilih Lantai</option>
            <option value="Lantai 1">Lantai 1</option>
            <option value="Lantai 2">Lantai 2</option>
            <option value="Lantai 3">Lantai 3</option>
        </select>
    </div>

    <div class="form-group">
        <label for="namaRuang">Nama Ruang <span class="required">*</span></label>
        <select id="namaRuang" required>
            <option value="">Pilih Ruang</option>
            <option value="Ruang 101">Ruang 101</option>
            <option value="Ruang 102">Ruang 102</option>
            <option value="Ruang 103">Ruang 103</option>
        </select>
    </div>

    <div class="form-group">
        <label for="kodeRak">Kode Rak <span class="required">*</span></label>
        <input type="text" id="kodeRak" required>
    </div>

    <div class="form-group">
        <label for="namaRak">Nama Rak <span class="required">*</span></label>
        <input type="text" id="namaRak" required>
    </div>

    <div class="form-group">
        <label for="kapasitas">Kapasitas (Baris) <span class="required">*</span></label>
        <input type="number" id="kapasitas" required>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan"></textarea>
    </div>

    <div class="buttons">
        <button onclick="tutup()">Tutup</button>
        <button onclick="simpan()">Simpan</button>
    </div>
</div>

<div id="output" class="output">
    <h2>Data Rak yang Disimpan</h2>
    <p><strong>Nama Gedung:</strong> <span id="outputNamaGedung"></span></p>
    <p><strong>Nama Lantai:</strong> <span id="outputNamaLantai"></span></p>
    <p><strong>Nama Ruang:</strong> <span id="outputNamaRuang"></span></p>
    <p><strong>Kode Rak:</strong> <span id="outputKodeRak"></span></p>
    <p><strong>Nama Rak:</strong> <span id="outputNamaRak"></span></p>
    <p><strong>Kapasitas (Baris):</strong> <span id="outputKapasitasBaris"></span></p>
    <p><strong>Keterangan:</strong> <span id="outputKeterangan"></span></p> 
</div>

<script>
    function tutup() {
        alert('Form closed');
        // Here you can add code to actually close the form if needed
    }

    function simpan() {
        let data = {
            namaGedung: document.getElementById('namaGedung').value,
            namaLantai: document.getElementById('namaLantai').value,
            namaRuang: document.getElementById('namaRuang').value,
            kodeRak: document.getElementById('kodeRak').value,
            namaRak: document.getElementById('namaRak').value,
            kapasitas: document.getElementById('kapasitas').value,
            keterangan: document.getElementById('keterangan').value
        };

        document.getElementById('outputNamaGedung').textContent = data.namaGedung;
        document.getElementById('outputNamaLantai').textContent = data.namaLantai;
        document.getElementById('outputNamaRuang').textContent = data.namaRuang;
        document.getElementById('outputKodeRak').textContent = data.kodeRak;
        document.getElementById('outputNamaRak').textContent = data.namaRak;
        document.getElementById('outputKapasitasBaris').textContent = data.kapasitas;
        document.getElementById('outputKeterangan').textContent = data.keterangan;

        document.getElementById('output').style.display = 'block'; // Menampilkan output setelah data disimpan

        console.log('Data saved:', data);
        alert('Data has been saved');
    }
</script>

</body>
</html>