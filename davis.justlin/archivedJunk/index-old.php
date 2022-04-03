<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.typekit.net/ilv2uut.css" />
    <link rel="stylesheet" href="../davis.justlin/lib/css/storeStyleGuide.css" />
    <!-- <link rel="stylesheet" href="../lib/css/styleguide.css"> -->
    <title>Car Enthusiast Art Site Style Guide</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="../davis.justlin/img/cea-logo-white-sm.png" alt="Car Enthusiast Logo Image" />
        </div>
        <div>
            <h1>Car Enthusiast Art</h1>
            <hr />
            <h3>Paintings | Posters | Photography</h3>
        </div>
        <div class="nav-stretch">

            <ul>
                <li><a href="#Brand">Paintings</a></li>
                <li><a href="#Typography">Prints</a></li>
                <li><a href="#Colors">Digital</a></li>
                <li><a href="#Navigation">Contact Us</a></li>

            </ul>
        </div>
    </header>



    <main>
        <div class="card-hard" id="Brand">
            <h1>The Best in Performance Car Art</h1>
            <hr />
            <h2>Logo</h2>
            <p class="alertSimple">Logo options for dark or light backgrounds.</p>

        </div>

        <div class="card-hard" id="Brand">
            <h1>The Best in Performance Car Art</h1>
            <hr />
            <h2>Logo</h2>
            <p class="alertSimple">Logo options for dark or light backgrounds.</p>

        </div>

        <div class="card" id="Typography">
            <h1>Typography</h1>
            <hr />
            <h2>Typeface</h2>
            <ul>
                <h3>Regular</h3>
                <li>
                    Eurostile Regular font-family: eurostile, sans-serif; font-weight:
                    400; font-style: normal;
                </li>
                <li>
                    Eurostile Bold font-family: eurostile, sans-serif; font-weight: 700;
                    font-style: normal;
                </li>
                <br />

                <h3>Oblique</h3>
                <li>
                    Eurostile Regular Oblique font-family: eurostile, sans-serif;
                    font-weight: 400; font-style: italic;
                </li>
                <li>
                    Eurostile Bold Oblique font-family: eurostile, sans-serif;
                    font-weight: 700; font-style: italic;
                </li>
            </ul>
            <br />
            <h2>Sizing</h2>
            <h1>Heading 1</h1>
            <li>font-size: 20pt</li>
            <li>line-height: 30pt</li>

            <br />
            <h2>Heading 2</h2>
            <li>font-size: 20pt</li>
            <li>line-height: 30pt</li>

            <br />
            <h3>Heading 3</h3>
            <li>font-size: 14pt</li>

            <br />
            <h3>Paragraph</h3>
            <li>font-size: 1em</li>

            <br />
            <h3>Unordered List</h3>
            <li>padding-left: 20px</li>
        </div>

        <div class="card" id="Colors">
            <h1>Color Pallet</h1>
            <hr />
            <p class="alertSimple">NOTE: The color pallet is divided into Group One and Group Two. While colors may be mixed across pallets, the intent is to combine elements within the respective groups where possible.
                <br>
            </p>

            <h3>Group One</h3>
            <div id="color2">
                <h3>#f3dc5c</h3>
            </div>

            <div id="color4">
                <h3>#cc6022</h3>
            </div>

            <div id="color1">
                <h3>#8f0d04</h3>
            </div>
            <h3>Group Two</h3>
            <div id="color3">
                <h3>#b5a89c</h3>
            </div>

            <div id="color5">
                <h3>#79869e</h3>
            </div>

            <div id="color6">
                <h3>#000000</h3>
            </div>
        </div>

        <div class="card" id="Navigation">

            <script>
                const makeNav = (classes = '') => {
                    const links = ['home', 'store', 'about', 'contact'];
                    let ran = Math.floor(Math.random() * links.lenght);
                    document.write(`
            <div> 
              <nav class="${classes}">
          <ul>
            ${links.reduce((r,o,i)=>{
              return r+ `<li class="${ran==i?'active':''}"><a heref="#">${o}</a></li>`;
            },'')}
          </ul>
        </nav>

            </div>
            `);
                }
            </script>
            <h1>Navigation</h1>
            <hr />


            <h2>Basic Nav</h2>
            <script>
                makeNav('nav')
            </script>

            <h2>Nav Flex</h2>
            <script>
                makeNav('nav-flex')
            </script>

            <h2>Nav Stretch</h2>
            <script>
                makeNav('nav-stretch')
            </script>

            <h2>Nav Pills</h2>
            <script>
                makeNav('nav-pills')
            </script>


            <h2>Crumbs Navigation</h2>
            <script>
                makeNav('nav-crumbs')
            </script>


            <h2>Material Navigation</h2>
            <script>
                makeNav('nav-material')
            </script>

        </div>

        <div class="card" id="Cards">
            <h1>Cards</h1>
            <hr />

            <h2>Product Card</h2>

            <div class="productCard">
                <img src="../img/art2.jpg" class="productImage" alt="Car Art">
                <h2>Framed GT4 Poster</h2>
                <p class="productPrice">$99.99</p>
                <p>Some text about the GT4. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt undeiste atque vitae quasi animi libero sit corrupti repudiandae facilis!</p>
                <hr>
                <button class="productButton">Add to Cart</button>

            </div>
            <div class="card-dark-soft">
                <h2>Soft Shadow Dark Card</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt unde
                    iste atque vitae quasi animi libero sit corrupti repudiandae
                    facilis!
                </p>
            </div>

            <div class="card">
                <h2>Soft Shadow Light Card</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt unde
                    iste atque vitae quasi animi libero sit corrupti repudiandae
                    facilis!!!!
                </p>
            </div>

            <div class="card-hard">
                <h2>Hard Light Card</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt unde
                    iste atque vitae quasi animi libero sit corrupti repudiandae
                    facilis!
                </p>
            </div>
        </div>

        <div class="card" id="Tables">
            <h1>Tables</h1>
            <hr />
            <div class="card-dark-soft">
                <h2>Table-Basic</h2>


                <div class="card">
                    <h2>Table-Basic</h2>

                    <table class="table">
                        <tr>
                            <th>Item Type</th>
                            <th>Item Name</th>
                            <th>Item Size</th>
                            <th>Item Price</th>
                        </tr>
                        <tr>
                            <td>Painting</td>
                            <td>The GT4</td>
                            <td>24x36</td>
                            <td>$399</td>
                        </tr>
                        <tr>
                            <td>Poster</td>
                            <td>The 911</td>
                            <td>24x48</td>
                            <td>$599</td>
                        </tr>

                        <tr>
                            <td>Wallpaper</td>
                            <td>The GTI</td>
                            <td>4K</td>
                            <td>$99</td>
                        </tr>
                    </table>
                </div>
                <h2>Table-Alt</h2>
                <div class="card">
                    <h2>Table-Alt</h2>

                    <table class="table-alt">
                        <tr>
                            <th>Item Type</th>
                            <th>Item Name</th>
                            <th>Item Size</th>
                            <th>Item Price</th>
                        </tr>
                        <tr>
                            <td>Painting</td>
                            <td>The GT4</td>
                            <td>24x36</td>
                            <td>$399</td>
                        </tr>
                        <tr>
                            <td>Poster</td>
                            <td>The 911</td>
                            <td>24x48</td>
                            <td>$599</td>
                        </tr>

                        <tr>
                            <td>Wallpaper</td>
                            <td>The GTI</td>
                            <td>4K</td>
                            <td>$99</td>
                        </tr>
                    </table>
                </div>

                <h2>Table-Borders</h2>
                <div class="card">
                    <h2>Table-Borders</h2>

                    <table class="table-borders">
                        <tr>
                            <th>Item Type</th>
                            <th>Item Name</th>
                            <th>Item Size</th>
                            <th>Item Price</th>
                        </tr>
                        <tr>
                            <td>Painting</td>
                            <td>GT4</td>
                            <td>24x36</td>
                            <td>$399</td>
                        </tr>
                        <tr>
                            <td>Poster</td>
                            <td>Carrera</td>
                            <td>24x48</td>
                            <td>$599</td>
                        </tr>

                        <tr>
                            <td>Wallpaper</td>
                            <td>GTI</td>
                            <td>4K</td>
                            <td>$99</td>
                        </tr>
                    </table>


                </div>

            </div>

            <div class="card" id="Figures">
                <h1>Figures</h1>
                <hr />
                <div class="card-hard">
                    <h2>Headline Text Copy</h2>
                    <p>Figure images should utilize the following border radius settings: border-radius: 20px. This is specified in the the "FIGURE IMG" class.</p>
                    <figure>
                        <img src="../img/car1.jpg" alt="Car Enthusiast Art">
                        <figcaption>Figure Caption specifications are captured under the FIGURE class and are: <br>figure {
                            font-style: italic;
                            padding: 20px;
                            }</figcaption>
                    </figure>
                </div>
            </div>

            <div class="card" id="Forms">
                <h1>Forms</h1>
                <hr />
                <div class="card-hard">
                    <h2>Inputs</h2>
                    <div class="card">
                        <h3>Default Inputs</h3>
                        <form>
                            <input type="text"><br>
                            <input type="number"><br>
                            <input type="password"><br>
                            <input type="url"><br>
                            <input type="datetime-local"><br>
                            <input type="date"><br>
                            <input type="search"><br>
                        </form>
                        <hr>

                        <h3>Form Input</h3>
                        <form>
                            <input type="text" class="form-input" placeholder="text">
                            <input type="number" class="form-input" placeholder="number">
                            <input type="password" class="form-input" placeholder="password">
                            <input type="url" class="form-input" placeholder="url">
                            <input type="datetime-local" class="form-input" placeholder="date-time">
                            <input type="date" class="form-input" placeholder="date">
                            <input type="search" class="form-input" placeholder="search">
                        </form>
                        <hr>
                        <h3>Form Label</h3>
                        <form>
                            <label class="form-label">Text</label>
                            <input type="text" class="form-input" placeholder="text">
                            <label class="form-label">Number</label>
                            <input type="number" class="form-input" placeholder="number">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-input" placeholder="password">
                            <label class="form-label">URL</label>
                            <input type="url" class="form-input" placeholder="url">
                            <label class="form-label">Date/Time</label>
                            <input type="datetime-local" class="form-input" placeholder="date-time">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-input" placeholder="date">
                            <label class="form-label">Search</label>
                            <input type="search" class="form-input" placeholder="search">
                        </form>
                        <hr>
                        <h3>Form Control</h3>
                        <form>
                            <label class="form-control-label">Text</label>
                            <input type="text" class="form-input" placeholder="text">
                            <label class="form-control-label">Number</label>
                            <input type="number" class="form-input" placeholder="number">
                            <label class="form-control-label">Password</label>
                            <input type="password" class="form-input" placeholder="password">
                            <label class="form-control-label">URL</label>
                            <input type="url" class="form-input" placeholder="url">
                            <label class="form-control-label">Date/Time</label>
                            <input type="datetime-local" class="form-input" placeholder="date-time">
                            <label class="form-control-label">Date</label>
                            <input type="date" class="form-input" placeholder="date">
                            <label class="form-control-label">Search</label>
                            <input type="search" class="form-input" placeholder="search">
                        </form>
                        <hr>
                        <h2>Buttons</h2>
                        <button class="button1">Button Style 1</button>
                        <button class="button2">Button Style 2</button>
                        <button class="button3">Button Style 3</button>

                        <hr>
                        <h2>Alerts</h2>
                        <p>"Important" alerts are to be used as notices for page events that require immediate user attention or correction.</p>

                        <div class="alertMsg">
                            <span class="alertClose">&times;</span>
                            Important Alert Box.
                        </div>
                        <p>"Simnple Message" alerts may be used for confirmations and other notices which do not require an action by the user.</p>
                        <div class="alertSimple">

                            <span class="alertClose">&times;</span>
                            Simple Message Box.
                        </div>

                        <hr>
                        <h2>Hot Dog</h2>


                        <form class="hotdog">

                            <input type="search" placeholder="= Search">
                        </form>

                        <hr>
                        <h2>Select </h2>

                        <select class="form-select">
                            <option>Acura</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                        </select>
                        <hr>
                        <h2>Checkbox </h2>

                        <form class="form-control">
                            <input type="checkbox" class="cb1" id="vehicle1" name="vehicle1" value="Acura">
                            <label for="vehicle1"> I have a Japanese Car</label><br>
                            <input type="checkbox" class="cb1" id="vehicle2" name="vehicle2" value="BMW">
                            <label for="vehicle2"> I have a German car</label><br>
                            <input type="checkbox" class="cb1" id="vehicle3" name="vehicle3" value="Ferrari">
                            <label for="vehicle3"> I have an Itilian car</label><br><br>

                        </form>

                        <hr>
                        <h2>Toggle </h2>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>





                    </div>

                </div>
            </div>
    </main>

    <footer>Car Enthusiast Art by Jhay Davis &copy 2022</footer>
</body>

</html>