<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='add_student'>
            <h1>Dodaj Podopiecznego</h1>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                            <label>Imię*:<input type="text" name="name"></label>
                            <p class="e-value"></p>
                            <label>Nazwisko*: <input type="text" name="lname"></label>
                            <p class="e-value"></p>
                            <div class="sex-radio">Płęć*:
                                <input type="radio" name="sex" id="m" class="input-hidden">
                                <label for="m">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path style="fill:#8BB7F0;" d="M14.5,37.5c-6.617,0-12-5.383-12-12s5.383-12,12-12c2.419,0,4.752,0.719,6.748,2.078l0.342,0.233
                                                        L31.901,5.5H24.5v-3h13v13h-3V8.099L24.188,18.41l0.233,0.342c1.359,1.995,2.078,4.328,2.078,6.748
                                                        C26.5,32.117,21.117,37.5,14.5,37.5z M14.5,17.5c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S18.911,17.5,14.5,17.5z"></path>
                                                </g>
                                                <g>
                                                    <path style="fill:#4E7AB5;" d="M37,3v12h-2V9.306V6.892l-1.707,1.707l-9.165,9.165l-0.586,0.586l0.466,0.685
                                                        C25.311,20.946,26,23.182,26,25.5C26,31.841,20.841,37,14.5,37S3,31.841,3,25.5S8.159,14,14.5,14c2.318,0,4.554,0.689,6.466,1.991
                                                        l0.685,0.466l0.586-0.586l9.165-9.165L33.108,5h-2.414H25V3H37 M14.5,34c4.687,0,8.5-3.813,8.5-8.5S19.187,17,14.5,17
                                                        S6,20.813,6,25.5S9.813,34,14.5,34 M38,2H24v4h6.694l-9.165,9.165C19.526,13.8,17.107,13,14.5,13C7.596,13,2,18.596,2,25.5
                                                        S7.596,38,14.5,38C21.404,38,27,32.404,27,25.5c0-2.607-0.8-5.026-2.165-7.029L34,9.306V16h4V2L38,2z M14.5,33
                                                        C10.358,33,7,29.642,7,25.5c0-4.142,3.358-7.5,7.5-7.5s7.5,3.358,7.5,7.5C22,29.642,18.642,33,14.5,33L14.5,33z"></path>
                                                </g>
                                            </g>
                                            </svg>    
                                </label>
                                <input type="radio" name="sex" id="g" class="input-hidden">
                                    <label for="g">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path style="fill:#F78F8F;" d="M18.5,38.5v-5h-5v-3h5v-6.103l-0.417-0.07C12.53,23.394,8.5,18.629,8.5,13
                                                    C8.5,6.659,13.659,1.5,20,1.5S31.5,6.659,31.5,13c0,5.629-4.03,10.394-9.583,11.327l-0.417,0.07V30.5h5v3h-5v5H18.5z M20,5.5
                                                    c-4.136,0-7.5,3.364-7.5,7.5s3.364,7.5,7.5,7.5s7.5-3.364,7.5-7.5S24.136,5.5,20,5.5z"></path>
                                            </g>
                                            <g>
                                                <path style="fill:#C74343;" d="M20,2c6.065,0,11,4.935,11,11c0,5.385-3.855,9.941-9.166,10.834L21,23.974v0.846V30v1h1h4v2h-4h-1
                                                    v1v4h-2v-4v-1h-1h-4v-2h4h1v-1v-5.18v-0.846l-0.834-0.14C12.855,22.941,9,18.385,9,13C9,6.935,13.935,2,20,2 M20,21
                                                    c4.411,0,8-3.589,8-8s-3.589-8-8-8s-8,3.589-8,8S15.589,21,20,21 M20,1C13.373,1,8,6.372,8,13c0,5.944,4.327,10.866,10,11.82V30
                                                    h-5v4h5v5h4v-5h5v-4h-5v-5.18c5.673-0.954,10-5.876,10-11.82C32,6.372,26.627,1,20,1L20,1z M20,20c-3.866,0-7-3.134-7-7
                                                    s3.134-7,7-7s7,3.134,7,7S23.866,20,20,20L20,20z"></path>
                                            </g>
                                        </g>
                                        </svg>
                                </label>
                            </div>
                            <p class="e-value"></p>
                            <label>Grupa*: 
                                <select name="group">
                                    <option value="Gr 1">Gr 1</option>
                                    <option value="Gr 2">Gr 2</option>
                                    <option value="Gr 3">Gr 3</option>
                                </select>
                            </label>
                            <p class="e-value"></p>
                            <label>Data ur.<input type="date" name="bday"></label>
                            <p class="e-value"></p>
                            <label>Komentarz :<textarea name="?" cols="30" rows="5"></textarea></label>
                            <p class="e-value"></p>
                            <label for="status">Status: </label>
                            <input id="status" type="checkbox" name="status">
                            <p class="e-value"></p>
                            <label>Patron: 
                                <select name="guardian">
                                    <option value="123">Nie ustalony</option>
                                    <option value="123">Adam Kowalski</option>
                                    <option value="321">Agnieszka Wrona</option>
                                    <option value="231">Krzysztof Baraniecki</option>
                                </select>
                            </label>
                            <p class="e-value"></p>
                            <p>* - Obowiązkowe</p>
                    </div>
                    <div class="col-lg-6">
                        <div style="width: 300px; height: 300px; background: darkblue; margin: auto; border-radius: 50%;"></div>
                        <p class="text-center">Dodaj zdjęcie / usuń zdjęcie</p>
                        <p class="e-value"></p>
                    </div>
                    <div class="col-lg-12 text-center my-4">
                        <button type="submit" class="btn btn-outline-primary">Dodaj</button>
                    </div>
                </div>
            </form>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>