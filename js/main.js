//importamos el achivo de funciones y accedemos al objeto de la bd y funciones
import usuariobd, {guardar,consultar,crearEtiqueta} from './funciones.js';

/*Al cargar por primera vez el sitio debemos crear la bd,
empleamos la función de tindabd para crear la base de datos tienda
y la tabla de productos, para crear la tabla debemos indicar los atributos
++id indica que el id es auto incremental*/
let bd=usuariobd("Vida-Fit", {usuarios:'++id,fecha, comida, platillo, porcion, cantidad, agua, Imagen'});


/*Genermaos un objeto para cada elemento del formulario que
manipularemos, campos de formulario, botones, tabla, etc 
Campos del formulario. 
Nota: recuerda que el nombre que esta entre paretesis es el nombre de
los id de la etiqueta html*/

//Objetos para acceder a lso input del formulario
const clave_usu = document.getElementById("clave");
const nombre_usu = document.getElementById("fecha");
const edad_usu = document.getElementById("comida");
const estatura_usu = document.getElementById("platillo");
const peso_usu = document.getElementById("porcion");
const sexo_usu = document.getElementById("cantidad");
const indice_usu = document.getElementById("agua");
const salud_usu = document.getElementById("imagen");
/*Objeto para acceder a etiqueta que nos mostrará un mesaje en la 
tabla cuando no tengamos productos para mostrar*/
const mesajeSinRegistros = document.getElementById("siRegistros");
//Objetos para acceder a los botones del formulario
const btGuardar=document.getElementById("guardar");
const btModificar=document.getElementById("editar");
const btEliminarTodo=document.getElementById("eliminar-todo");


//Evento que se ejecuta al abrir la página
window.onload=() =>{
/*Ejecutamos la función de cargar tabla para que se muestren los productos
que actualmente estan en la BD*/
cargarTabla();
}



/*Evento click para guardar, se activa al presionar el 
boton guardar del formulario*/
btGuardar.onclick=(evento)=>{
    /*Ejecutamos la función guardar de el archivo de funciones
    indicamos que gaurdaremos un producto y que los datos a enviar
    son el nombre, precio y descripción (el id no por que es autoincremental)
    asignamos a cada campo el valor recuperado del formulario
    Nota: Recordar que flag retorna true si se gaurdo el registro y flase si no*/
     let flag =guardar(bd.usuarios, {
     nombre:nombre_usu.value,
     edad:edad_usu.value,
     estatura:estatura_usu.value,
     peso:peso_usu.value,
     sexo:sexo_usu.value,
     indice:indice_usu.value,
     salud:salud_usu.value
     
 });
 
 if(flag){//Si se guardo limpiamo el formulario
    nombre_usu.value='';
    edad_usu.value='';
    estatura_usu.value='';
    peso_usu.value='';
    sexo_usu.value='';
    indice_usu.value='';
    salud_usu.value='';
  //recargamos la tabla para viasulizar el nuevo regsitro
   cargarTabla();
   
}
}

/*Evento click para ejecutar la modificación de datos, 
se activa al presionar el boton modificar del formulario*/
btModificar.onclick=(evento)=>{
    //Recuperamos la clave del producto que se muestra en el input del formulario
    const id=parseInt(clave_usu.value||0);
    //Si existe un id
    if(id){
        /*Ejecutamos la modificación, update requiere la clave del producto
        y los valores a modificar tomando los valores del formulario*/
        bd.usuarios.update(id,{
            nombre:nombre_usu.value,
            edad:edad_usu.value,
            estatura:estatura_usu.value,
            peso:peso_usu.value,
            sexo:sexo_usu.value,
            indice:indice_usu.value,
            salud:salud_usu.value
        }).then((resultado)=>{//si se realiza la modificación
            if(resultado){
              //Limpiamos el formulario y recargamos la tabla
              console.log("Modificación realizada");
              
              

               nombre_usu.value="";
               edad_usu.value="";
               estatura_usu.value="";
               peso_usu.value="";
               sexo_usu.value="";
               indice_usu.value="";
               salud_usu.value="";
                cargarTabla();
                
            }else{
                console.log("No se aplicaron los cambios");
        
            }
            
        })
    }
}


/*Evento click para ejecutar el borrado de la base de datos, 
se activa al presionar el boton limpiar BD  del formulario*/
btEliminarTodo.onclick=()=>{
    //Elimianmos la BD
       bd.delete();
       //La creamos nuevamente, al igual que la tabla
       bd=usuariobd("Vida-Fit", {usuarios:'++id,nombre, edad, estatura, peso, sexo, indice, salud'});
       //abrimos la nueva bd
       bd.open();
       //Recargamos la vista
       location.reload();
      
}

/*Función que agrega a la tabla cada producto registrado */
function cargarTabla(){
    //Recuperamos el objeto de la tabla que modificaremos
    const tbody =document.getElementById("tbody");
    /*Si la tabla ya tiene algo, la limpiamos de lo 
    contrario se duplicarían los registros*/
    while(tbody.hasChildNodes()){
        tbody.removeChild(tbody.firstChild);
    }
    /*Ejecutamos la función de consultar del archivo de funciones
    la cual recibe la lista de productos*/
    consultar(bd.usuarios,(usuarios)=>{
       //Si existen productos
        if (usuarios){
            /*Esta variable muesta el texto cuando no hay productos
            cuando hay debemos limpiar el mensaje*/
            mesajeSinRegistros.textContent="";
            /*Empleamos la función crearEtiqueta del archivo de funciones
            crearemos una nueva fila para la tabla*/
            crearEtiqueta("tr",tbody, (tr)=>{
                //Recorremos cada producto consultado
              for(const atributo in usuarios){
                //Crearemos una  columna para cada atributo de el producto evaluado por el for
                crearEtiqueta("td",tr, (td)=>{
                /*Asignamos el valor de cada atributo del producto a la nueva columna
                la validación indica que si el campo es el de precio se le agrege un signo de $*/
                td.textContent =usuarios.estatura===usuarios[atributo]?`${usuarios[atributo]} `:usuarios[atributo];
               
                
                })
               
            }
            //Creamos una nueva columna  para el icono de lapiz para modificar
            crearEtiqueta("td",tr, (td)=>{
                crearEtiqueta("i",td, (i)=>{
                i.className += "icon-pencil";
                //Le asignamos como identificador la calve del producto del renglón
                i.setAttribute('data-id',usuarios.id);
                //Indicamos que si precionamos el lapiz se activa la función btnEditar
                i.onclick=btnEditar;
                })
        })
        //Creamos una nueva columna  para el icono de menos para eliminar
            crearEtiqueta("td",tr, (td)=>{
            crearEtiqueta("i",td, (i)=>{
            i.className += "icon-minus";
            //Le asignamos como identificador la calve del producto del renglón
            i.setAttribute('data-id',usuarios.id);
            //Indicamos que si precionamos el lapiz se activa la función btnEliminar
            i.onclick=btnEliminar;
            })
        })
        })
        }else{
            //Si no hay productos registrados mostramos el mensaje bajo el encabezado de la tabla
            mesajeSinRegistros.textContent="No existen los usuarios registrados";
        }
})

}
//Función que se activa al presionar el icono de lapiz de un renglón de la tabla
function btnEditar(evento) {
    //Recuperamos el identificador del renglón que es la clave del producto
    let id=parseInt(evento.target.dataset.id);
   //Realizamos una consulta del producto que tiene la clave recuperada
    bd.productos.get(id, usuario=>{
    //Asignamos al formulario el valor correspondiente del producto seleccionado
      clave_usu.value=usario.id||0;
      nombre_usu.value=usuario.nombre||"";
      edad_usu.value=usuario.edad||"";
      estatura_usu.value=usuario.estatura||"";
      peso_usu.value=usuario.peso||"";
      sexo_usu.value=usuario.sexo||"";
      indice_usu.value=usuario.indice||"";
      salud_usu.value=usuario.salud||"";

    })
}
 //Función que se activa al presionar el icono de menos de un renglón de la tabla
   function btnEliminar(evento) {
    /*Recuperamos el identificador del renglón que es la clave del producto
    el id al ser autoincremental es entero debemos realizar el cambio de texto a int*/
    let id=parseInt(evento.target.dataset.id);
    //Eliminamos el registro con el ide recuperado
    bd.usuarios.delete(id);
    //Actualizamos la tabla
    cargarTabla();
    
}



