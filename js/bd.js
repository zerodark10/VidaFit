

function db (){};
var db=openDatabase('Vidafit', '1.0', 'usuarios', 2 * 1024 * 1024);
db.transaction(function (tx) {
    tx.executeSql('CREATE TABLE IF NOT EXISTS tweets(id, email, apellidos,email,contrasena )', [], getTweets);
});
var tareas = new Tareas();
function Tareas (){};
Tareas.prototype.CrearDB = function (){
    var nombrecorto = 'DB Tareas';
    var version = '1.0';
    var nombrebase = 'List To-Do';
    var size = 50*1024*1024;    
    var db = openDatabase(nombrecorto, version, nombrebase, size);
    return db;
};
Tareas.prototype.Tabla = function (){
    var db, SqlLista;
    db = tareas.CrearDB();
    SqlLista = 'CREATE TABLE IF NOT EXISTS Tareas(fila integer primary key, tarea text)';
    db.transaction(function (tx){
        tx.executeSql(SqlLista);
    });
};