<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
      <input type="text" id="name" name="name" value="">
      <button id="button"></button>

    
    
    <h1>The pokemon will be shown here</h1>
    <img id="poke-img" src="" alt="">
</body>
<script> 
    
    const button = document.getElementById('button');
    button.addEventListener('click',()=>{
      const imgEl = document.getElementById('poke-img');   
      const input = document.getElementById('name').value;
        if(input != null){
          fetch('https://pokeapi.co/api/v1/pokemon/Pikachu').then(response => response.json()).then(pokemon => {
          imgEl.src = pokemon.sprites.front_default;
          })
        }
        else{
          alert("please enter a pokemon name");
        } 
    })
    
    </script>
</html>