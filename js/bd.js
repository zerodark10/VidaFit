


var db=openDatabase('Vidafit', '1.0', 'usuarios', 2 * 1024 * 1024);
db.transaction(function (tx) {
    tx.executeSql('CREATE TABLE IF NOT EXISTS tweets(id, email, apellidos,email,contrasena )', [], getTweets);
});