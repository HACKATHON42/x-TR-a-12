<?php
include './include/header.php';
?>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-xl-12 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div id="full">
                    <div class="nft-img mb-10"><img src="./nft_img/nft_1.png" alt=""></div>

                    <div class="nft-info">
                    <p class="mt-10">Lütfen işlem yapmak istdiğiniz NFT cüzdan numaranızı girin.</p>
                    <p>NFT Cüzdan numarası</p>
                        <form id="form-inline">
                            <div class="form-group c-odeme  mb-2">
                                <input type="text" class="form-control" id="seri-no" placeholder="NFT cüzdan no">
                                <input type="text" class="form-control" id="seri-no" placeholder="Ad Soyad">
                                <input type="text" class="form-control" id="seri-no" placeholder="Kart Numarası">
                                <input type="text" class="form-control" id="seri-no" placeholder="Ay / Yıl">
                                <input type="text" class="form-control" id="seri-no" placeholder="CVC">
                            </div>
                            <button type="submit" class="btn btn-danger mb-2"><a href="urun-al">Satın Al</a></button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
    
    <?php
include './include/footer.php';
?>