<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Intro PHP</title>
</head>

<body>
    <main>
        <h1>1. Lista de frutas</h1>
        <?php $frutas = ["Limón", "Pera", "Manzana", "Plátano", "Cereza", "Fresa"]; ?>
        <?php echo "
                <ol>
                    <li> $frutas[0]</li>
                    <li> $frutas[1]</li>
                    <li> $frutas[2]</li>
                    <li> $frutas[3]</li>
                    <li> $frutas[4]</li>
                    <li> $frutas[5]</li>
                </ol>"
        ?>

        <h1>2. Input de texto, de radio y de selector</h1>

        <?php echo "
                <input type='text'>"
        ?>

        <?php echo "
                <input type='radio' name = 'contact'>
                    <label>Tfno</label>
                <input type='radio' name = 'contact'>
                    <label> Fax</label>
                <input type='radio' name ='contact'>
                    <label> Email</label>"
        ?>

        <?php echo "
                <select name = 'Car brands'>
                    <option value='Select brand'>Select brand</option>
                    <option value='BMW'>BMW</option>
                    <option value='Volvo'>Volvo</option>
                    <option value='Seat'>Seat</option>
                    <option value='Toyota'>Toyota</option>
                </select>"
        ?>

        <h1>3. Array clave-valor de PHP en forma de tabla HTML</h1>
        <?php $user =
            [
                [
                    'Name' => 'John',
                    'Surname' => 'Cena',
                    'Mail' => 'youcantseeme@hotmail.com',
                ],
                [
                    'Name' => 'Rey',
                    'Surname' => 'Misterio',
                    'Mail' => 'booyakabooyaka@msn.com',
                ]
            ];
        ?>
        <table border="3">

            <?php foreach ($user as $r) { ?>
                <tr>
                    <?php foreach ($r as $v) { ?>
                        <td>
                            <?php echo $v; ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php
            }
            ?>
        </table>

        <h1>4.Cards de objetos película</h1>
        <?php
        class Movie
        {
            private $title;
            public $year;
            public $director;

            function set_title($title)
            {
                $this->title = $title;
            }
            function get_title()
            {
                return $this->title;
            }

            function set_year($year)
            {
                $this->year = $year;
            }
            function get_year()
            {
                return $this->year;
            }

            function set_director($director)
            {
                $this->director = $director;
            }
            function get_director()
            {
                return $this->director;
            }
        }
        ?>

        <?php
        $iron = new Movie();
        $iron->set_title('Iron Man');
        $iron->set_year('2008');
        $iron->set_director('Jon Favreau');

        $hulk = new Movie();
        $hulk->set_title('The incredible Hulk');
        $hulk->set_year('2008');
        $hulk->set_director('Louis Leterrier');

        $iron2 = new Movie();
        $iron2->set_title('Iron Man 2');
        $iron2->set_year('2010');
        $iron2->set_director('Jon Favreau');

        $thor = new Movie();
        $thor->set_title('Thor');
        $thor->set_year('2011');
        $thor->set_director('Kenneth Branagh');

        $capi = new Movie();
        $capi->set_title('Capitán América');
        $capi->set_year('2011');
        $capi->set_director('Joe Johnston');

        $avengers = new Movie();
        $avengers->set_title('The Avengers');
        $avengers->set_year('2012');
        $avengers->set_director('Joss Whedon');
        ?>

        <div class="card-group">
            <div class="card">
                <img src="./assets/Man.jpg" class="card-img-top" alt="Iron Man poster">
                <div class='card-body'>
                    <h4 class='card-title'><?php echo 'Title: ' . $iron->get_title(); ?></h4>
                    <h5 class='card-year'><?php echo 'Year: ' . $iron->get_year(); ?></h5>
                    <h5 class='card-director'><?php echo 'Director: ' . $iron->get_director(); ?></h5>
                    <a href='https://es.wikipedia.org/wiki/Iron_Man_(pel%C3%ADcula)' target='_blank' class='btn btn-primary'>Wiki</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/Hulk.webp" class="card-img-top" alt="Hulk poster">
                <div class='card-body'>
                    <h4 class='card-title'><?php echo 'Title: ' . $hulk->get_title(); ?></h4>
                    <h5 class='card-year'><?php echo 'Year: ' . $hulk->get_year(); ?></h5>
                    <h5 class='card-director'><?php echo 'Director: ' . $hulk->get_director(); ?></h5>
                    <a href='https://es.wikipedia.org/wiki/The_Incredible_Hulk_(pel%C3%ADcula)' target='_blank' class='btn btn-primary'>Wiki</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/IronMan2.webp" class="card-img-top" alt="Iron Man 2 poster">
                <div class='card-body'>
                    <h4 class='card-title'><?php echo 'Title: ' . $iron2->get_title(); ?></h4>
                    <h5 class='card-year'><?php echo 'Year: ' . $iron2->get_year(); ?></h5>
                    <h5 class='card-director'><?php echo 'Director: ' . $iron2->get_director(); ?></h5>
                    <a href='https://es.wikipedia.org/wiki/Iron_Man_2' target='_blank' class='btn btn-primary'>Wiki</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/Thor.jpg" class="card-img-top" alt="Thor poster">
                <div class='card-body'>
                    <h4 class='card-title'><?php echo 'Title: ' . $thor->get_title(); ?></h4>
                    <h5 class='card-year'><?php echo 'Year: ' . $thor->get_year(); ?></h5>
                    <h5 class='card-director'><?php echo 'Director: ' . $thor->get_director(); ?></h5>
                    <a href='https://es.wikipedia.org/wiki/Thor_(pel%C3%ADcula)' target='_blank' class='btn btn-primary'>Wiki</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/capi.jpg" class="card-img-top" alt="Capitán América poster">
                <div class='card-body'>
                    <h4 class='card-title'><?php echo 'Title: ' . $capi->get_title(); ?></h4>
                    <h5 class='card-year'><?php echo 'Year: ' . $capi->get_year(); ?></h5>
                    <h5 class='card-director'><?php echo 'Director: ' . $capi->get_director(); ?></h5>
                    <a href='https://es.wikipedia.org/wiki/Capit%C3%A1n_Am%C3%A9rica:_El_primer_vengador' target='_blank' class='btn btn-primary'>Wiki</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/avengers.jpg" class="card-img-top" alt="Vengadores poster">
                <div class='card-body'>
                    <h4 class='card-title'><?php echo 'Title: ' . $avengers->get_title(); ?></h4>
                    <h5 class='card-year'><?php echo 'Year: ' . $avengers->get_year(); ?></h5>
                    <h5 class='card-director'><?php echo 'Director: ' . $avengers->get_director(); ?></h5>
                    <a href='https://es.wikipedia.org/wiki/The_Avengers_(pel%C3%ADcula_de_2012)' target='_blank' class='btn btn-primary'>Wiki</a>
                </div>
            </div>
        </div>

        <?php echo '<h2>Goodbye, World!</h2>'?>

    </main>
</body>

</html>