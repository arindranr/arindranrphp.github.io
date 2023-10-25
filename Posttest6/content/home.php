<?php include('config/functions.php') ?>

<header id="home">
    <div class="header-content">
        <h2>Best Trip</h2>
        <div class="line"></div>
        <h1>Only With BlueBird</h1>
        <a href="rent.php" class="ctn">Rent Now</a>
    </div>
</header>

<!-- Catalog -->
<section class="catalog" id="catalog">
    <div class="title">
        <h1>BlueBird Bus</h1>
        <div class="line">
        </div>
        <div class="row">
            <?php foreach (getDataBus() as $bus): ?>
                <?php $fasilitas = explode(",", $bus['fasilitas']); ?>
                <div class="col">
                    <img src="admin/gambar-upload/<?= $bus['gambar'] ?>" width="300px">
                    <h4>
                        <?= $bus['nama_bus'] ?>
                    </h4>

                    <p class="fasilitas">Fasilitas :</p>
                    <div class="fasilitas-group">
                        <!-- <ul>
                            <?php foreach ($fasilitas as $f): ?>
                                <li>
                                    <?= "$f," ?>
                                </li>
                            <?php endforeach; ?>
                        </ul> -->
                        <p><?= $bus['fasilitas'] ?></p>
                    </div>
                    <p class="jumlah-unit">Jumlah Unit :
                        <?= $bus['jumlah_unit'] ?>
                    </p>
                    <p class="jumlah-unit">Harga Sewa : Rp.
                        <?= number_format($bus['harga_sewa'], 0, ',', '.') ?>
                    </p>
                    <!-- <p>Best for your travel buddy. A-class bus from BlueBird.</p> -->
                    <!-- <a href="#" class="ctn learn-more">Learn More</a> -->
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="about" id="about">
    <div class="title">
        <h1>About Us</h1>
    </div>
    <div class="line"></div>
    <div class="content">
        <div class="image">
            <img src="images/foto-arin.jpg" alt="" width=" 50px">
        </div>
        <div>
            <h3>Tentang Saya</h3>
            <br />
            <div>Nama: Arindra Nurshadrina Ramadini</div>
            <div>NIM : 2209106070 </div>
            <div>TTL : 8 November 2004 </div>
            <div>E-mail : arindra.nr@gmail.com </div>
        </div>
    </div>
</section>

<section class="footer">
    <p>Copyright © 2022 Blue Bird Group. All Rights Reserved</p>
</section>