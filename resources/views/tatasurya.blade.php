<!-- <!DOCTYPE html>
<html lang="en">
 -->
 @extends('layouts.main')

 @section('container')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/css/tatasurya.css" rel="stylesheet" />
</head>

<body class="opening hide-UI view-2D zoom-large data-close controls-close">
 
    <!-- <div id="navbar">
        <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a>
        <h1>Animasi 3D Tata Surya<br><span>Oleh <a href="https://twitter.com/JulianGarnier"
                    target="_blank">@JulianGarnier</a></span></h1>
        <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Controls</a>
    </div> -->
    <div>
        <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a>
        <h1>Animasi 3D Tata Surya<br><span>Oleh <a href="https://twitter.com/JulianGarnier"
                    target="_blank">@JulianGarnier</a></span></h1>
        <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Controls</a>
    </div>
    <div id="data">
        <a class="sun" title="sun" href="#sunspeed">Matahari</a>
        <a class="mercury" title="mercury" href="#mercuryspeed">Merkurius</a>
        <a class="venus" title="venus" href="#venusspeed">Venus</a>
        <a class="earth active" title="earth" href="#earthspeed">Bumi</a>
        <a class="mars" title="mars" href="#marsspeed">Mars</a>
        <a class="jupiter" title="jupiter" href="#jupiterspeed">Jupiter</a>
        <a class="saturn" title="saturn" href="#saturnspeed">Saturnus</a>
        <a class="uranus" title="uranus" href="#uranusspeed">Uranus</a>
        <a class="neptune" title="neptune" href="#neptunespeed">Neptunus</a>
    </div>
    <div id="controls">
        <label class="set-view">
            <input type="checkbox">
        </label>
        <label class="set-zoom">
            <input type="checkbox">
        </label>
        <label>
            <input type="radio" class="set-speed" name="scale" checked>
            <span>Kecepatan</span>
        </label>
        <label>
            <input type="radio" class="set-size" name="scale">
            <span>Ukuran</span>
        </label>
        <label>
            <input type="radio" class="set-distance" name="scale">
            <span>Jarak</span>
        </label>
    </div>
    <div id="universe" class="scale-stretched">
        <div id="galaxy">
            <div id="solar-system" class="earth">
                <div id="mercury" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <dl class="infos">
                                <dt>Merkurius</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="venus" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <dl class="infos">
                                <dt>Venus</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="earth" class="orbit">
                    <div class="pos">
                        <div class="orbit">
                            <div class="pos">
                                <div class="moon"></div>
                            </div>
                        </div>
                        <div class="planet">
                            <dl class="infos">
                                <dt>Bumi</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="mars" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <dl class="infos">
                                <dt>Mars</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="jupiter" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <dl class="infos">
                                <dt>Jupiter</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="saturn" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <div class="ring"></div>
                            <dl class="infos">
                                <dt>Saturnus</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="uranus" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <dl class="infos">
                                <dt>Uranus</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="neptune" class="orbit">
                    <div class="pos">
                        <div class="planet">
                            <dl class="infos">
                                <dt>Neptunus</dt>
                                <dd><span></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div id="sun">
                    <dl class="infos">
                        <dt>Matahari</dt>
                        <dd><span></span></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- menampilkan sumber source code -->
    <div>
        <!-- <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a> -->
        <h1>Animasi 3D Tata Surya<br><span>Oleh <a href="https://twitter.com/JulianGarnier"
                    target="_blank">@JulianGarnier</a></span></h1>
        
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    <script src="assets/js/tatasurya.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

@endsection

<!-- </html> -->
