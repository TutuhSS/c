<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Cores!</title>

    <style>
        body{
                <?php  $cor_fundo = $_GET['cor'] ?? "White";  ?>
            
            background-color:  <?php echo "$cor_fundo";?> ;

         }
        
        #bu{
            background-color: orange;
            height:50px;
            width: 90px;
            color: White;
        }


    </style>
</head>
<body>
    <form action="index.php" method="get">
          
          <h4> Selecione Sua Cor: </h4> 
          
          <select name="cor" id="cor">
                    
                <optgroup label = "Sem cor"> 
                    <option value=""> Escolha um cor!</option>
                </optgroup>

                <optgroup label ="Tons De Azul">
                    <option value ="blue"> Azul</option>
                    <option value ="#00008B"> Azul-Escuro</option>
                    <option value ="#ADD8E6"> Azul-Claro</option>
                </optgroup>

                <optgroup label ="Tons De Verde">
                    <option value ="Green"> Verde</option>
                    <option value ="#006400"> Verde-Escuro</option>
                    <option value ="lightgreen"> Verde-Claro</option>
                </optgroup>

                <optgroup label ="Tons De Vermelho">
                    <option value ="red"> Vermelho</option>
                    <option value ="#8B0000"> Vermelho-Escuro</option>
                    <option value ="#4E0000"> Vermelho-Vinho</option>
                </optgroup>

                 <optgroup label ="Tons De Amarelo">
                    <option value ="Yellow"> Amarelo</option>
                    <option value ="#FFD700"> Ouro</option>
                    <option value ="#F0E68C"> Khaki</option>
                </optgroup>

          </select> <br> <br>

          <button type="submit" id="bu"> Ver Cor</button>
    </form>
</body>
</html>