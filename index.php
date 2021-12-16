<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Intro PHP</title>
</head>

<body>
    <main>
            <h1>1. Lista de frutas</h1>
            <?php $frutas = ["Limón", "Pera", "Manzana", "Plátano", "Cereza", "Fresa"];?>
                <?php echo "
                <li> $frutas[0]</li>
                <li> $frutas[1]</li>
                <li> $frutas[2]</li>
                <li> $frutas[3]</li>
                <li> $frutas[4]</li>
                <li> $frutas[5]</li>"
            ?>
            
            <h1>2. Input de texto, de radio y de selector</h1>

            <?php echo"
                <input type='text'>"
            ?>

            <?php echo"
                <input type='radio' name = 'contact'>
                    <label>Tfno</label>
                <input type='radio' name = 'contact'>
                    <label> Fax</label>
                <input type='radio' name ='contact'>
                    <label> Email</label>"
            ?>

            <?php echo"
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
            
            <?php foreach($user as $r){?>
                <tr>
                    <?php foreach($r as $v){?>
                    <td>
                    <?php echo $v;?>
                    </td>
                    <?php }?>
                </tr>
                <?php
            }
                ?>
                </table>

            <h1>4.Cards de objetos película</h1>
            <!-- Usa una clase para definir una película. Crea varios objetos Película y dibujarlos en “cards” en un documento HTML. -->
            <?php 
                Class Movie{
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
            
                $hulk = new Movie();
                $hulk->set_title('The incredible Hulk');
                $hulk->set_year('2008');
                $hulk->set_director('Louis Leterrier');

                echo "Title: " . $hulk->get_title();
                    echo "<br>";
                echo "Year: " . $hulk->get_year();
                    echo "<br>";
                echo "Director: " . $hulk->get_director();
                    echo "<br>";

                $iron = new Movie();
                $iron->set_title('Iron Man');
                $iron->set_year('2008');
                $iron->set_director('Jon Favreau');

                echo "Title: " . $iron->get_title();
                    echo "<br>";
                echo "Year: " . $iron->get_year();
                    echo "<br>";
                echo "Director: " . $iron->get_director();
                    echo "<br>";

                $thor = new Movie();
                $thor->set_title('Thor');
                $thor->set_year('2011');
                $thor->set_director('Kenneth Branagh');

                echo "Title: " . $thor->get_title();
                    echo "<br>";
                echo "Year: " . $thor->get_year();
                    echo "<br>";
                echo "Director: " . $thor->get_director();
                    echo "<br>";
                ?>
    </main>
</body>
</html>


<!-- <li><ol><?php 
            $frutas = ["Limón", "Pera", "Manzana", "Plátano", "Cereza", "Fresa"];
            foreach($frutas as $key => $value){
                echo "{$key} => {$value}";
            };
            foreach($frutas as $fruta){
                $fruta++;
                echo $fruta;
            }
        ?></ol></li> -->

