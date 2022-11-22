<div class="nav__overlay">
    <div class="nav__container">
        <div id="nav__main">
            <ul role="navigation"> 
               <?php
                $cesta = basename($_SERVER['SCRIPT_NAME'],'.php');

                if ($cesta === 'index') echo 
                '<li><span class="m--number">01</span><a href="/" role="menuitem" class="link odkaz"><span class="highlight_blue">Home</span></a></li>';
                else echo 
                '<li><span class="m--number">01</span><a href="/" role="menuitem" class="link odkaz">Home</a></li>';

                if ($cesta === 'about') echo '<li><span class="m--number">02</span><a href="/about" role="menuitem" class="link odkaz" data-img="img/menu-about.png" data-fx="12"><span class="highlight_blue">About me</span></a></li>';
                else echo '<li><span class="m--number">02</span><a href="/about" role="menuitem" class="link odkaz" data-img="img/menu-about.png" data-fx="12">About me</a></li>';

                if ($cesta === 'work') echo '<li><span class="m--number">03</span><a href="/work" role="menuitem" class="link odkaz"><span class="highlight_blue">My work & case studies</span></a></li>';
                else echo '<li><span class="m--number">03</span><a href="/work" role="menuitem" class="link odkaz">My work & case studies</a></li>';

                if ($cesta === 'Worki') echo '<li><span class="m--number">04</span><a href="/work.php#designsources" role="menuitem" class="link odkaz"><span class="highlight_blue">Design sources</span></a></li>';
                else echo '<li><span class="m--number">04</span><a href="/work.php#designsources" role="menuitem" class="link odkaz">Design sources</a></li>';

                if ($cesta === 'contact') echo '<li class="m--last"><span class="m--number">05</span><a href="/contact" role="menuitem" class="link odkaz"><span class="highlight_blue">Contact me</span></a></li>';
                else echo '<li class="m--last"><span class="m--number">05</span><a href="/contact" role="menuitem" class="link odkaz">Contact me</a></li>';

                 ?>	
                    <ul class="nav__social">
                        <li>
                                <a rel="nofollow" target="_blank" href="https://www.behance.net/jambi" class="link">
                                    <svg width="25px" height="16px" viewBox="0 0 14 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#ffffff" fill-rule="evenodd">
                                        <g  id="Artboard" transform="translate(-175.000000, -102.000000)">
                                            <path d="M180.437487,106.054699 C180.937486,106.195324 181.316391,106.449229 181.574203,106.816416 C181.832015,107.183603 181.960921,107.63282 181.960921,108.164069 C181.960921,108.960942 181.656234,109.570316 181.046861,109.99219 C180.531237,110.382814 179.859363,110.578126 179.03124,110.578126 L175,110.578126 L175,102.257833 L178.914053,102.257833 C179.726551,102.257833 180.35155,102.398458 180.789049,102.679707 C181.304672,103.007832 181.562484,103.562518 181.562484,104.343766 C181.562484,105.125014 181.187485,105.695325 180.437487,106.054699 Z M176.828121,103.687517 L176.828121,105.632825 L178.679679,105.632825 C179.023428,105.632825 179.292959,105.550794 179.488271,105.386732 C179.683582,105.22267 179.781239,104.968764 179.781239,104.625015 C179.781239,104.000017 179.367177,103.687517 178.539054,103.687517 L176.828121,103.687517 Z M178.773429,109.171879 C179.679676,109.171879 180.1328,108.804693 180.1328,108.070319 C180.1328,107.273446 179.695301,106.87501 178.820303,106.87501 L176.828121,106.87501 L176.828121,109.171879 L178.773429,109.171879 Z M183.812479,103.523455 L183.812479,102.703145 L187.187471,102.703145 L187.187471,103.523455 L183.812479,103.523455 Z M188.499968,107.648445 L188.47653,107.953132 L184.140603,107.953132 C184.140603,108.453131 184.269509,108.835943 184.527321,109.101567 C184.785133,109.367191 185.148413,109.500004 185.617162,109.500004 C185.898412,109.500004 186.167942,109.429691 186.425754,109.289067 C186.683566,109.148442 186.851534,108.95313 186.929659,108.70313 L188.382781,108.70313 C187.945282,110.046877 187.007784,110.718751 185.570287,110.718751 C184.63279,110.718751 183.886698,110.429689 183.332011,109.851565 C182.777325,109.273441 182.499982,108.515631 182.499982,107.578133 C182.499982,106.984385 182.628888,106.445323 182.8867,105.96095 C183.144512,105.476576 183.507792,105.093764 183.976541,104.812515 C184.44529,104.531265 184.976539,104.390641 185.570287,104.390641 C186.476535,104.390641 187.203096,104.710953 187.74997,105.351576 C188.249968,105.96095 188.499968,106.726573 188.499968,107.648445 Z M184.140603,106.921885 L186.835909,106.921885 C186.804659,106.515636 186.67966,106.19923 186.46091,105.972668 C186.242161,105.746106 185.933568,105.632825 185.535131,105.632825 C185.136695,105.632825 184.812477,105.750013 184.562477,105.984387 C184.312478,106.218761 184.171853,106.531261 184.140603,106.921885 Z"></path>
                                            </g>
                                        </g>
                                </svg>
                                </a>
                        </li>

                        <li>
                            <a rel="nofollow" target="_blank" href="https://dribbble.com/jambi" class="link">
                                <svg width="20px" height="22px" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#ffffff" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-328.000000, -32.000000)">
                                            <path d="M333.999986,32.6875246 C335.046858,32.6875246 336.015606,32.9492428 336.906229,33.472679 C337.796852,33.9961151 338.503881,34.7031448 339.027317,35.5937677 C339.550754,36.4843905 339.812472,37.4531381 339.812472,38.5000107 C339.812472,39.5468834 339.550754,40.5156309 339.027317,41.4062538 C338.503881,42.2968767 337.796852,43.0039064 336.906229,43.5273425 C336.015606,44.0507786 335.046858,44.3124969 333.999986,44.3124969 C332.953113,44.3124969 331.984366,44.0507786 331.093743,43.5273425 C330.20312,43.0039064 329.49609,42.2968767 328.972654,41.4062538 C328.449218,40.5156309 328.1875,39.5468834 328.1875,38.5000107 C328.1875,37.4531381 328.449218,36.4843905 328.972654,35.5937677 C329.49609,34.7031448 330.20312,33.9961151 331.093743,33.472679 C331.984366,32.9492428 332.953113,32.6875246 333.999986,32.6875246 Z M337.843727,35.3593932 C337.671852,35.5937677 337.429665,35.8437672 337.117166,36.1093914 C336.523417,36.6093901 335.843731,37.0156394 335.078108,37.3281385 C335.218733,37.6406377 335.359357,37.9687619 335.499982,38.3125112 C336.203105,38.2187614 336.968729,38.210949 337.796852,38.2890737 C338.234351,38.3359486 338.624975,38.3906359 338.968724,38.4531358 C338.953099,37.8750121 338.851537,37.3242322 338.664037,36.800796 C338.476538,36.2773599 338.203101,35.7968923 337.843727,35.3593932 Z M337.281228,34.7968946 C336.671854,34.250021 335.976543,33.8789279 335.195295,33.683616 C334.414047,33.488304 333.624987,33.4843977 332.828113,33.6718972 C333.499987,34.5625201 334.117173,35.5312677 334.679672,36.5781403 C335.42967,36.3125161 336.078106,35.9531417 336.624979,35.5000179 C336.921854,35.2500184 337.140603,35.0156439 337.281228,34.7968946 Z M331.890616,34.0234589 C331.187492,34.3515831 330.593744,34.820332 330.10937,35.4297055 C329.624996,36.0390791 329.304685,36.7265773 329.148435,37.4922006 C329.570309,37.4922006 330.070307,37.4687632 330.648435,37.4218883 C331.726554,37.3281385 332.749989,37.1484513 333.718736,36.8828271 C333.156238,35.8672046 332.546864,34.9140818 331.890616,34.0234589 Z M329.031248,38.5000107 C329.031248,39.1250094 329.144528,39.7226642 329.37109,40.2929752 C329.597653,40.8632862 329.914058,41.375004 330.320307,41.8281278 C330.742181,41.0937547 331.320305,40.4296935 332.054678,39.835945 C332.851551,39.1796966 333.679674,38.7343852 334.539047,38.5000107 C334.429672,38.2187614 334.29686,37.9375121 334.14061,37.6562627 C333.093738,37.9687619 331.960928,38.1796989 330.742181,38.2890737 C330.085933,38.3359486 329.515622,38.3593861 329.031248,38.3593861 L329.031248,38.5000107 Z M330.953118,42.4140639 C331.671866,42.9921876 332.480458,43.3320306 333.378893,43.4335927 C334.277329,43.5351549 335.132795,43.4140616 335.945294,43.0703123 C335.742169,41.8671903 335.390607,40.6171931 334.890609,39.3203213 C333.937486,39.6328204 333.093738,40.1015693 332.359365,40.7265679 C331.703116,41.2734415 331.234367,41.8359402 330.953118,42.4140639 Z M336.765604,42.6250009 C337.328103,42.2500018 337.796852,41.7734405 338.171851,41.1953168 C338.54685,40.6171931 338.789037,39.9843821 338.898412,39.2968838 C338.617162,39.2031341 338.273413,39.1328217 337.867164,39.0859468 C337.148416,38.976572 336.460917,38.976572 335.804669,39.0859468 C336.257793,40.3359437 336.578105,41.5156287 336.765604,42.6250009 Z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>

                        <li><a rel="nofollow" target="_blank" href="https://www.linkedin.com/in/david-jambor/" class="link">
                            <svg width="20px" height="20px" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#ffffff" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-322.000000, -100.000000)">
                                        <path d="M324.678571,112 L322.1875,112 L322.1875,103.991071 L324.678571,103.991071 L324.678571,112 Z M323.446429,102.892857 C323.053571,102.892857 322.714286,102.75 322.428571,102.464286 C322.142857,102.178571 322,101.839286 322,101.446429 C322,101.053571 322.142857,100.714286 322.428571,100.428571 C322.714286,100.142857 323.053571,100 323.446429,100 C323.839286,100 324.178571,100.142857 324.464286,100.428571 C324.75,100.714286 324.892857,101.053571 324.892857,101.446429 C324.892857,101.839286 324.75,102.178571 324.464286,102.464286 C324.178571,102.75 323.839286,102.892857 323.446429,102.892857 Z M334,112 L331.508929,112 L331.508929,108.089286 C331.508929,107.446429 331.455357,106.982143 331.348214,106.696429 C331.151786,106.214286 330.767857,105.973214 330.196429,105.973214 C329.625,105.973214 329.223214,106.1875 328.991071,106.616071 C328.8125,106.9375 328.723214,107.410714 328.723214,108.035714 L328.723214,112 L326.258929,112 L326.258929,103.991071 L328.642857,103.991071 L328.642857,105.089286 L328.669643,105.089286 C328.848214,104.732143 329.133928,104.4375 329.526786,104.205357 C329.955357,103.919643 330.455357,103.776786 331.026786,103.776786 C332.1875,103.776786 333,104.142857 333.464286,104.875 C333.821428,105.464286 334,106.375 334,107.607143 L334,112 Z"></path>
                                    </g>
                                </g>
                            </svg>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" target="_blank" href="https://www.linkedin.com/in/david-jambor/" class="link">
                                <svg width="20" height="20" 
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 4.866c.923 0 1.778.23 2.567.692a5.149 5.149 0 011.875 1.875c.461.789.692 1.644.692 2.567 0 .923-.23 1.778-.692 2.567a5.149 5.149 0 01-1.875 1.875 4.996 4.996 0 01-2.567.692c-.923 0-1.778-.23-2.567-.692a5.149 5.149 0 01-1.875-1.875A4.996 4.996 0 014.866 10c0-.923.23-1.778.692-2.567a5.149 5.149 0 011.875-1.875A4.996 4.996 0 0110 4.866zm0 8.482c.923 0 1.711-.327 2.366-.982A3.225 3.225 0 0013.348 10c0-.923-.327-1.711-.982-2.366A3.225 3.225 0 0010 6.652c-.923 0-1.711.327-2.366.982A3.225 3.225 0 006.652 10c0 .923.327 1.711.982 2.366a3.225 3.225 0 002.366.982zm6.563-8.705a1.39 1.39 0 01-.38.848 1.087 1.087 0 01-.826.357c-.327 0-.61-.119-.848-.357a1.159 1.159 0 01-.357-.848c0-.328.119-.61.357-.848s.52-.357.848-.357c.328 0 .61.119.848.357s.358.52.358.848zm3.392 1.205c.03.834.045 2.217.045 4.152s-.022 3.326-.067 4.174c-.045.848-.171 1.585-.38 2.21a5.203 5.203 0 01-1.227 1.942c-.55.55-1.198.96-1.942 1.228-.625.208-1.362.334-2.21.379-.848.045-2.24.067-4.174.067-1.935 0-3.326-.022-4.174-.067-.848-.045-1.585-.186-2.21-.424a4.759 4.759 0 01-1.942-1.183 5.203 5.203 0 01-1.228-1.942c-.208-.625-.334-1.362-.379-2.21C.022 13.326 0 11.934 0 10c0-1.935.022-3.326.067-4.174.045-.848.171-1.585.38-2.21a5.203 5.203 0 011.227-1.942c.55-.55 1.198-.96 1.942-1.228.625-.208 1.362-.334 2.21-.379C6.674.022 8.066 0 10 0c1.935 0 3.326.022 4.174.067.848.045 1.585.171 2.21.38a5.203 5.203 0 011.942 1.227c.55.55.96 1.198 1.228 1.942.208.625.342 1.37.401 2.232zm-2.142 10.045c.178-.506.297-1.31.357-2.41.03-.656.044-1.578.044-2.769V9.286c0-1.22-.015-2.143-.044-2.768-.06-1.131-.179-1.935-.358-2.41-.357-.923-.997-1.563-1.92-1.92-.475-.18-1.279-.298-2.41-.358a65.132 65.132 0 00-2.768-.044H9.286c-1.19 0-2.113.015-2.768.044-1.101.06-1.905.179-2.41.357-.923.358-1.563.998-1.92 1.92-.18.476-.298 1.28-.358 2.41-.03.656-.044 1.578-.044 2.769v1.428c0 1.19.015 2.113.044 2.768.06 1.101.179 1.905.357 2.41.387.923 1.027 1.563 1.92 1.92.506.18 1.31.298 2.41.358.656.03 1.578.044 2.769.044h1.428c1.22 0 2.143-.015 2.768-.044 1.131-.06 1.935-.179 2.41-.358.923-.386 1.563-1.026 1.92-1.92z" fill="#ffffff" fill-rule="nonzero"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" target="_blank" href="https://www.figma.com/@dajambi" class="link">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.5781 7.34375C15.1389 6.93702 15.5566 6.36322 15.7714 5.70455C15.9861 5.04588 15.9869 4.33615 15.7735 3.67702C15.5602 3.0179 15.1437 2.44322 14.5837 2.03531C14.0237 1.6274 13.349 1.4072 12.6562 1.40625H7.34373C6.65094 1.4072 5.97623 1.6274 5.41626 2.03531C4.85629 2.44322 4.43979 3.0179 4.22645 3.67702C4.0131 4.33615 4.01385 5.04588 4.22859 5.70455C4.44332 6.36322 4.86103 6.93702 5.42186 7.34375C5.00081 7.64699 4.65787 8.04599 4.42134 8.50783C4.18481 8.96966 4.06146 9.48112 4.06146 10C4.06146 10.5189 4.18481 11.0303 4.42134 11.4922C4.65787 11.954 5.00081 12.353 5.42186 12.6562C4.96642 12.9854 4.60313 13.4259 4.3668 13.9357C4.13047 14.4455 4.02902 15.0075 4.07217 15.5677C4.11533 16.128 4.30163 16.6678 4.61324 17.1354C4.92485 17.603 5.35132 17.9827 5.85179 18.2382C6.35226 18.4937 6.90996 18.6164 7.47145 18.5945C8.03294 18.5727 8.5794 18.407 9.05848 18.1133C9.53756 17.8197 9.9332 17.4079 10.2075 16.9175C10.4818 16.4271 10.6255 15.8744 10.625 15.3125V12.5703C10.9656 12.8577 11.3611 13.0727 11.7875 13.2022C12.2139 13.3316 12.6622 13.3729 13.1051 13.3235C13.5479 13.274 13.9761 13.1349 14.3634 12.9146C14.7508 12.6942 15.0892 12.3973 15.358 12.0419C15.6268 11.6865 15.8204 11.28 15.927 10.8473C16.0336 10.4146 16.0509 9.96478 15.9779 9.52517C15.905 9.08556 15.7432 8.66543 15.5025 8.29038C15.2619 7.91534 14.9473 7.59325 14.5781 7.34375ZM14.6875 4.6875C14.6854 5.22559 14.4708 5.74105 14.0903 6.12154C13.7098 6.50203 13.1943 6.71669 12.6562 6.71875H10.625V2.65625H12.6562C13.1943 2.65831 13.7098 2.87297 14.0903 3.25346C14.4708 3.63395 14.6854 4.14941 14.6875 4.6875ZM5.31248 4.6875C5.31454 4.14941 5.52921 3.63395 5.9097 3.25346C6.29018 2.87297 6.80565 2.65831 7.34373 2.65625H9.37498V6.71875H7.34373C6.80565 6.71669 6.29018 6.50203 5.9097 6.12154C5.52921 5.74105 5.31454 5.22559 5.31248 4.6875V4.6875ZM5.31248 10C5.31454 9.46191 5.52921 8.94645 5.9097 8.56596C6.29018 8.18547 6.80565 7.97081 7.34373 7.96875H9.37498V12.0312H7.34373C6.80565 12.0292 6.29018 11.8145 5.9097 11.434C5.52921 11.0535 5.31454 10.5381 5.31248 10ZM7.34373 17.3438C6.80501 17.3437 6.28836 17.1297 5.90742 16.7488C5.52649 16.3679 5.31248 15.8512 5.31248 15.3125C5.31248 14.7738 5.52649 14.2571 5.90742 13.8762C6.28836 13.4953 6.80501 13.2813 7.34373 13.2812H9.37498V15.3125C9.37293 15.8506 9.15826 16.366 8.77777 16.7465C8.39728 17.127 7.88182 17.3417 7.34373 17.3438V17.3438ZM12.6562 12.0312C12.1175 12.0312 11.6009 11.8172 11.2199 11.4363C10.839 11.0554 10.625 10.5387 10.625 10C10.625 9.46128 10.839 8.94462 11.2199 8.56369C11.6009 8.18276 12.1175 7.96875 12.6562 7.96875V7.96875C13.195 7.96875 13.7116 8.18276 14.0925 8.56369C14.4735 8.94462 14.6875 9.46128 14.6875 10C14.6875 10.5387 14.4735 11.0554 14.0925 11.4363C13.7116 11.8172 13.195 12.0312 12.6562 12.0312V12.0312Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>	
        </div>
    </div>
</div>
<script src="js/TweenMax.min.js"></script>
<script src="js/hoverEffect.js"></script>

