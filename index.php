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
            <?php $frutas = ["manzana", "naranja", "limón", "pera"];?>
            <h1>Lista de frutas</h1>
                <?php echo "
                <li> $frutas[0]</li>
                <li> $frutas[1]</li>
                <li> $frutas[2]</li>
                <li> $frutas[3]</li>"
            ?>
            
            <?php echo"
                <input type='text'>

                <input type='radio' name = 'contact'>
                    <label>Tfno</label>
                <input type='radio' name = 'contact'>
                    <label>Fax</label>
                <input type='radio' name ='contact'>
                    <label>Email</label>

                <select name = 'cars'>
                    <option value='BMW'>BMW</option>
                    <option value='Volvo'>Volvo</option>
                    <option value='Seat'>Seat</option>
                    <option value='Toyota'>Toyota</option>
                </select>"
            ?>

            <?php $user = 
                [
                    [
                    'Name' => 'John',
                    'Surname' => 'Cena',
                    'Mail' => 'youcantseeme@hotmail.com',
                    ]
                ];
            ?>

            <table border="3">'
            
            <?php
                foreach($user as $r){
            ?>
                <tr>
                    <?php
                    foreach($r as $v){
                    ?>
                    <td><?php echo $v;?></td>
                    <?php
                    }
                    ?>
                </tr>
                <?php
            }
                ?>
                </table>
    </main>
</body>
</html>
