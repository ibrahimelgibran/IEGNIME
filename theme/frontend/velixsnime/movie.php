<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= meta_tag([
        'title' => $title,
        'description' => $row->seo_description,
        'favicon' => _storage($websettings->seo_favicon),
        'thumb' => _storage("thumbnails/$row->thumb"),
        'keywords' => $row->seo_keywords,
        'url' => base_url(),
        'author' => ''
    ]); ?>

    <link rel="stylesheet" href="<?= _frontEnd($websettings->theme_active) ?>css/css23901.css?family=Sarabun:wght@300;400;700;800&amp;display=swap" />
    <link rel="stylesheet" href="<?= _frontEnd($websettings->theme_active) ?>css/line-awesome.min.css" />
    <link rel="stylesheet" href="<?= _frontEnd($websettings->theme_active) ?>vendor/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" href="<?= _frontEnd($websettings->theme_active) ?>vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= _frontEnd($websettings->theme_active) ?>css/style.default.css" id="theme-stylesheet" />
    <link rel="stylesheet" href="<?= _frontEnd($websettings->theme_active) ?>css/custom.css?v=11" />
    <style>
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600");

        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
        }

        .title-nimex {
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            font-size: 20px;
            /* line-height: 42px; */
            margin: 0;
        }


        a {
            text-decoration: none;
        }

        .title-animex {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            font-size: 13px;
            color: #ffff;
        }

        .genre-oneline {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .card__cover {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            background-color: #222028;
        }

        .card__cover img {
            width: 100%;
            transition: opacity 0.5s;
        }

        .card__cover:hover img {
            opacity: 0.4;
        }

        .card__cover:hover .card__play {
            opacity: 1;
            transform: scale(1);
        }

        .card__play {
            position: absolute;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            margin: -30px 0 0 -30px;
            z-index: 3;
            font-size: 30px;
            color: #007df9;
            transition: 0.5s;
            transform: scale(0.9);
            transition-property: opacity, background-color, color, border-color, transform;
            opacity: 0;
            border: 6px solid rgba(255, 255, 255, 0.15);
        }

        .card__play i {
            position: relative;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #fff;
            padding: 1px 0 0 1px;
        }

        .card__play:hover {
            border-color: rgb(0 104 255 / 32%);
            color: #007df9;
        }

        .col-animex {
            padding-left: 5px;
            padding-right: 5px;
        }

        .box-eps {
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            position: absolute;
            z-index: 3;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 20px;
            bottom: 0px;
            background-color: rgb(0 0 0 / 71%);
            /* border: 2px solid transparent; */
            /* border-radius: 50%; */
        }

        .box-type {
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            position: absolute;
            z-index: 3;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 1px 5px 3px 7px;
            top: 0px;
            right: 0px;
            background-color: rgb(0 0 0 / 50%);
            border-radius: 5%;
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url("<?= _frontEnd($websettings->theme_active) ?>img/playbackground-loading.jpg") center center / cover no-repeat;

        }

        .content-iframe {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%;
        }

        .iframe-play {
            font-size: 30px;
            position: absolute;
            z-index: 3;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            top: 50%;
            left: 50%;
            background-color: #fff;
            color: #0068ff;
            border-radius: 50%;
            margin: -30px 0 0 -30px;
        }
    </style>
    <?= $webmaster->script_head ?>
</head>

<body>

    <?php require_once('include/header.php') ?>

    <!-- NEW ITEMS SECTION -->
    <section class="py-3">
        <div class="container-md px-0">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-8">
                    <div class="card rounded-0 card-body mb-2">
                        <small><span class="text-primary">!!</span> Loading lebih dari 1 menit? » <a href="javascript:void(0)" onclick="LoadVideoServer()">Reload ⟳</a> beberapa kali.</small>
                    </div>
                    <div class="card rounded-0 mb-3">
                        <div class="content-iframe" id="content-iframe">
                            <img class="responsive-iframe" src="<?= _frontEnd($websettings->theme_active) ?>img/playbackground.jpg" alt="">
                            <a href="javascript:void(0)" onclick="LoadVideoServer()" class="iframe-play"><i class="las la-play" style="padding-top: 2px; padding-left: 2px; font-size: 30px"></i></a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <select class="all-categories-choices" style="margin-bottom: 5px" onchange="serverChange()" data-customclass="form-select border-dark bd-3 bg-dark" id="server_stream">
                                <?php $i = 1;
                                foreach (explode('{{==}}', $video->video) as $videos) : ?>
                                    <option value="<?= $i ?>">Server <?= $i ?></option>
                                <?php $i++;
                                endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="card card-body mb-1">
                        <div class="d-flex">
                            <img style="height: 150px; margin-right: 10px;" src="<?= _storage("thumbnails/$row->thumb") ?>" alt="<?= $row->title ?>">
                            <div class="">
                                <div style="font-size: 16px;" class=" title-animex"><?= $row->title ?></div>
                                <ul class="list-unstyled text-sm text-muted mb-0">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 d-flex align-items-center"><span class="">Status : </span></p>
                                        <p class="mb-0 text-gray-muted"><?= animextype($row->status) ?></p>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 d-flex align-items-center"><span class="">Type : </span></p>
                                        <p class="mb-0 text-gray-muted"><?= $type ?></p>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 d-flex align-items-center"><span class="">Upload at : </span></p>
                                        <p class="mb-0 text-gray-muted"><?= $row->created_at ?></p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1">
                        <div class="d-flex justify-content-center">
                            <ul style="padding-left: unset;">
                                <?php foreach (explode(',', $row->genre) as $genre) : ?>
                                    <a class=" btn btn-sm btn-outline-primary rounded-0 m-1" href="<?= base_url("list?genre=$genre") ?>"><?= $genre ?></a>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-body mb-1">
                        <span class="text-primary"><small>Description :</small></span>
                        <p style="font-size: 12px"><?= $row->description ?></p>
                    </div>

                    <div class="card">
                        <div class="text-center">
                            Trailer
                        </div>
                        <iframe height="400" src="https://www.youtube.com/embed/<?= $row->trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-0 mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="icon icon-md me-2 flex-shrink-0 bg-primary rounded-sm text-white"><i class="las la-play"></i></div>
                                <h2 class="title-nimex">TOP ANIME</h2>
                            </div>
                            <hr>
                            <?php foreach ($topnime as $news) : ?>
                                <div class="d-flex">
                                    <img style="height: 70px; margin-right: 10px;" src="<?= _storage("thumbnails/$news->thumb") ?>">
                                    <div class="">
                                        <a class="title-animex" href="<?= base_url("$news->seo_slug") ?>"><?= $news->title ?></a>
                                        <div class="genre-oneline">
                                            Genre :
                                            <?php foreach (explode(',', $news->genre) as $genretop) : ?>
                                                <a href="<?= base_url("list?genre=$genretop") ?>"><?= $genretop ?></a>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            Genre
                            <hr>
                            <?php foreach ($genres as $gs) : ?>
                                <a class="btn btn-sm btn-outline-primary rounded-0 mb-1" href="<?= base_url("list?genre=$gs->seo_slug") ?>"><?= $gs->title ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-8">
                    <div class="card card-body mt-3">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRELOADER -->
    <div class="preloader-outer">
        <div class="preloader-inner">
            <div class="loading"><span>Loading</span></div>
        </div>
    </div>

    <!-- SCROLL TO TOP BUTTON-->
    <div class="scroll-top-btn d-flex align-items-center shadow"><span>Top</span><i class="las la-arrow-right ms-2"></i></div>

    <?php require_once('include/footer.php') ?>

    <script src="<?= _frontEnd($websettings->theme_active) ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= _frontEnd($websettings->theme_active) ?>vendor/choices.js/public/assets/scripts/choices.js"></script>
    <script src="<?= _frontEnd($websettings->theme_active) ?>vendor/mixitup/mixitup.min.js"></script>
    <script src="<?= _frontEnd($websettings->theme_active) ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= _frontEnd($websettings->theme_active) ?>js/countdown.js"></script>
    <script src="<?= _frontEnd($websettings->theme_active) ?>js/theme.js"></script>
    <script>
        function LoadVideoServer() {
            document.getElementById("content-iframe").innerHTML = '<iframe class="responsive-iframe" src="<?= explode('{{==}}', $video->video)[0] ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="NO"></iframe>';
        }

        function serverChange() {
            let server_video = document.getElementById("server_stream").value
            let i = 1;
            <?php foreach (explode('{{==}}', $video->video) as $videos) : ?>
                if (server_video == i) {
                    document.getElementById("content-iframe").innerHTML = '<iframe class="responsive-iframe" src="<?= $videos ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" marginwidth="0" marginheight="0" scrolling="NO"></iframe>';
                }
                i++;
            <?php endforeach ?>
        }
    </script>
    <?php if ($webmaster->plugin_comment != 'off') { ?>
        <script>
            var disqus_config = function() {
                this.page.url = '<?= base_url($row->seo_slug) ?>'; // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = '<?= $row->id ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = '<?= $webmaster->src_comment ?>';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <?php } ?>
    <?= $webmaster->script_body ?>
</body>

</html>