
<section class="container w-100 d-flex justify-content-center mt-4">
    <div class="row">
        <?php
        foreach ($ticket as $row) {
        ?>

            <article class="card fl-left">
                <section class="card-cont position-relative">

                    <small class=" z-1"><?= $row['teamA'] ?> VS <?= $row['teamB'] ?></small>
                    <div class=" z-1 even-date">
                        <i class="fa fa-calendar"></i>
                        <time>
                            <span><?= $row['MatchDateTime'] ?></span>
                        </time>
                    </div>
                    <div class=" z-1 even-info">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            <?= $row['address'] ?>, <?= $row['city'] ?>
                        </p>
                    </div>
                    <div class=" z-0 opacity-25 w-100 d-flex justify-content-between position-absolute Logo">
                        <img class=" w-50" src="https://flagsapi.com/<?= $row['logoA'] ?>/flat/64.png" alt="">
                        <img class=" w-50" src="https://flagsapi.com/<?= $row['logoB'] ?>/flat/64.png" alt="">
                    </div>
                    <!-- <a href="#">tickets</a> -->
                </section>
                <section class="date ">


                    <div class="QR">
                        <div class="">
                            <?php
                            // $qr_code = QrCode::create("#nfnkjvnlkdxc");
                            // $writer = new PngWriter;
                            // $result = $writer->write($qr_code);
                            // header("Content-Type: " . $result->getMimeType());
                            // echo $result->getString();
                            ?>
                            <img class=" w-100" src="<?= APP_URL ?>asset/uploads/QR_Code_Example.svg.png" alt="">
                        </div>
                    </div>

                </section>
            </article>
        <?php
        }
        ?>
    </div>
</section>


<style>
    .fl-left {
        float: left
    }

    .fl-right {
        float: right
    }

    h1 {
        text-transform: uppercase;
        font-weight: 900;
        border-left: 10px solid #fec500;
        padding-left: 10px;
        margin-bottom: 30px
    }

    article {
        overflow: hidden
    }

    .card {
        display: table-row;
        background-color: #fff;
        margin-bottom: 10px;
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        border-radius: 4px;
        position: relative
    }

    .card+.card {
        margin-left: 2%
    }

    .date {
        display: table-cell;
        width: 40%;
        position: relative;
        text-align: center;
        border-left: 2px dashed #dadde6
    }

    .date:before,
    .date:after {
        content: "";
        display: block;
        width: 30px;
        height: 30px;
        background-color: #DADDE6;
        position: absolute;
        top: -15px;
        left: -15px;
        z-index: 1;
        border-radius: 50%
    }

    .date:after {
        top: auto;
        bottom: -15px
    }

    .date .QR {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }


    .card-cont {
        display: table-cell;
        width: 70%;
        font-size: 85%;
        padding: 10px 10px 30px 50px
    }


    .card-cont>div {
        display: table-row
    }

    .card-cont .even-date i,
    .card-cont .even-info i,
    .card-cont .even-date time,
    .card-cont .even-info p {
        display: table-cell
    }

    .card-cont .even-date i,
    .card-cont .even-info i {
        padding: 5% 5% 0 0
    }

    .card-cont .even-info p {
        padding: 20px 40px 0 0
    }

    .card-cont .even-date time span {
        display: block
    }

    .card-cont a {
        display: block;
        text-decoration: none;
        width: 80px;
        height: 30px;
        background-color: #fec500;
        color: #fff;
        text-align: center;
        line-height: 30px;
        border-radius: 2px;
        position: absolute;
        right: 10px;
        bottom: 10px
    }

    .row:last-child .card:first-child .card-cont a {
        background-color: #037FDD
    }

    .row:last-child .card:last-child .card-cont a {
        background-color: #F8504C
    }
    .Logo {
        top: 20%;
        gap: 20%;
    }
</style>