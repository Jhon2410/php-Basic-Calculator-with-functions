<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activad 3 - uso de funciones</title>
    </head>
    <style>
        body{
            background-color: #000;
            color:#fff;
            text-align: center;
        }
        table{
            margin: auto;
        }
        table, td,th { 
        border: 1px solid white;
        padding: 5px 10px;
        }
        form{
            
            color:#000;
            width: 40%;
            margin: 15px auto;
            padding: 15px;
            border: 1px solid #fff;
        }
        form input{
            outline: none;
            padding: 5px 10px;
            margin: 5px auto;
              
            
        }
        form select{
            outline: none;
            padding: 5px 10px;
        }
        #enviar{
            background-color:#00a;
            padding: 10px 25px;
            color:#fff;
            outline: none;
            border: none;
            border-radius: 5px;
            
        }
        #enviar:hover{
            background: #05f;
        }
        h4{
            color:#fff;
        }
    </style>
    
    <body >
        <?php
        // jhon anderson puentes hernandez 
         $numero1 = 40;
         $numero2 = 3;
         $operacion ="sumar";
         
        if(isset($_POST["numero1"]) and isset($_POST["numero2"]) and isset($_POST["operacion"])){ //verificar si los parametros existen
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"]; 
            $operacion = $_POST["operacion"];  
            
        }
        include("biblioteca.php"); //incluir la biblioteca con las operaciones 
        ?>
        <form action="./index.php" method="POST">
             <span> <img src="php.svg" width="50" /></span>
            <h4>calcular numero con funciones en PHP</h4>
            <input type="number" name="numero1"required placeholder="Digite el numero 1" />
            <input  type="number" name="numero2" required placeholder="Digite el numero 2"/>
            <br>
            <select name="operacion">
                <option value="sumar">
                    sumar
                </option>
                 <option value="restar">
                    restar
                </option>
                 <option value="multiplicar">
                    multiplicar
                </option>
                 <option value="dividir">
                    dividir
                </option>
            </select>
             <br>
            <input type="submit" id="enviar" value="Calcular"/>
        </form>
          <table>
            <thead>
                <tr>
                    <th>
                       operacion 
                    </th>
                    <th>
                       numero 1 
                    </th>
                    <th>
                       numero 2 
                    </th>
                    <th>
                        Resultado 
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>  <?php echo  $operacion ?></td>
                  <td>  <?php echo $numero1 ?></td>
                  <td>  <?php echo $numero2 ?></td>
                  <td>  <?php echo operaciones($numero1,$numero2,$operacion) ?></td>
                </tr>
            </tbody>
        </table>
        
        <br>
        <h5>Otras posibles operaciones</h5>
        <table>
            <thead>
                <tr>
                    <th>
                       operacion 
                    </th>
                    <th>
                       numero 1 
                    </th>
                    <th>
                       numero 2 
                    </th>
                    <th>
                        Resultado 
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>  <?php echo  $operacion="sumar" ?></td>
                  <td>  <?php echo $numero1 ?></td>
                  <td>  <?php echo $numero2 ?></td>
                  <td>  <?php echo operaciones($numero1,$numero2,$operacion) ?></td>
                </tr>
                <tr>
                  <td>  <?php echo$operacion="restar" ?></td>
                  <td>  <?php echo $numero1 ?></td>
                  <td>  <?php echo $numero2 ?></td>
                  <td>  <?php echo operaciones($numero1,$numero2,$operacion) ?></td>
                </tr>
                <tr>
                  <td>  <?php echo  $operacion="multiplicar" ?></td>
                  <td>  <?php echo $numero1 ?></td>
                  <td>  <?php echo $numero2 ?></td>
                  <td>  <?php echo operaciones($numero1,$numero2,$operacion) ?></td>
                </tr>
                <tr>
                  <td>  <?php echo $operacion="dividir"?></td>
                  <td>  <?php echo $numero1 ?></td>
                  <td>  <?php echo $numero2 ?></td>
                  <td>  <?php echo operaciones($numero1,$numero2,$operacion) ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
