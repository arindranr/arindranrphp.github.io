<div class="form-rent">
    <div class="container">
        <h2>BlueBird</h2>
        <p>Jasa Peminjaman Bus Terpercaya</p>
        <form class="form" id="rent-form">
            <input type="text" name="nama" class="input" placeholder="Nama" required />
            <input type="tel" name="telepon" class="input" placeholder="Nomor Telepon" required />
            <select class="input" name="masa_sewa" required>
                <option value="" disabled selected>Pilih Masa Sewa</option>
                <?php
                for ($i = 1; $i <= 30; $i++) {
                    echo "<option value='$i'>$i hari</option>";
                }
                ?>
            </select>
            <p>Pilihan Bus:</p>
            <div class="form-radio">
                <label style="color:white">
                    <input type="radio" name="pilihan_bus" value="Alpha" required /> Alpha
                </label>
                <label style="color:white">
                    <input type="radio" name="pilihan_bus" value="Bravo" required /> Bravo
                </label>
                <label style="color:white">
                    <input type="radio" name="pilihan_bus" value="Delta" required /> Delta
                </label>
                <label style="color:white">
                    <input type="radio" name="pilihan_bus" value="Metta" required /> Metta
                </label>
            </div>
            <button type="button" onclick="showPopup()">Rent Now</button>
        </form>
    </div>
</div>

<div class="popup" id="rent-popup">
    <div class="popup-content">
        <h2>Rincian Peminjaman</h2>
        <div id="popup-data"></div>
        <button onclick="closePopup()">Tutup</button>
    </div>
</div>

<script>
    function showPopup() {
        const nama = document.querySelector('[name="nama"]').value;
        const telepon = document.querySelector('[name="telepon"]').value;
        const masaSewa = document.querySelector('[name="masa_sewa"]').value;
        const pilihanBus = document.querySelector('[name="pilihan_bus"]:checked').value;

        const popupData = document.getElementById('popup-data');
        popupData.innerHTML = `<p>Nama: ${nama}</p><p>Nomor Telepon: ${telepon}</p><p>Masa Sewa: ${masaSewa}</p><p>Pilihan Bus: ${pilihanBus}</p>`;

        const rentPopup = document.getElementById('rent-popup');
        rentPopup.style.display = 'block';
    }

    function closePopup() {
        const rentPopup = document.getElementById('rent-popup');
        rentPopup.style.display = 'none';
        window.location.href = 'index.php';
    }
</script>