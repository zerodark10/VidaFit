// Si se crea el nombre de la base de datos, el nombre de la tabla se ha creado en otro webSQL anteriormente, entonces se hará referencia directa al contenido de los datos y no se creará ninguna nueva.
		 // Establecer nombre de la base de datos, versión, grupo de conexiones, tamaño
         var xx=window.openDatabase("vidafit.db","1.0",null,20000);
		 // crear tabla
		xx.transaction(function(tr){
			tr.executeSql("create table usuarios(_id integer primary key autoincrement,name text,pasword password)")
		})
 
		 // Agregar, eliminar y modificar el formato xx.executeSql ("instrucción sql", [parámetro])
		 // Insertar datos
		function insertDate(){
		xx.transaction(function(tr){
			 console.log (tr); // Una SQLTransaction {}
			 tr.executeSql ("insertar en los bienes (nombre, password) valores (?,?)", ["   ", 75562])
		})
		}
		 // Eliminar la base de datos
		function delTable(){
		xx.transaction(function(tr){
			tr.executeSql("drop table goods")
		})
		}
 
		 // Modificar los datos
		function updata1(id,name,price){
			xx.transaction(function(tr){
				tr.executeSql("update goods set name=?,price=? where _id=?",[name,price,id])
			})
		}
		 // Consultar datos
		function getData(){
			xx.transaction(function(tr){
				 // resultado devuelve una matriz
				tr.executeSql('select * from goods',[],function(tr,result){
					console.log(result);
					for (var i = 0; i < result.rows.length; i++) {
						let dd=result.rows[i];
						document.write(dd._id+dd.name+dd.price)
					}
				}) //tr.executeSql
			})
        }
