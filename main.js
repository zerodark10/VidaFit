const aplication =document.querySelector('conten')

fetch('https://rickandmortyapi.com/api/character')
      .then(res => res.json())
      .then(res =>{
		res.forEach(usuario => {
			console.log(usuario.name)
		});
	  })
	
	  
	  .catch(error =>console.log(error))


	  