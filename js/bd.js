


var db=openDatabase('Vidafit', '1.0', 'usuarios', 1000000);
db.transaction(function (tx) {
    tx.executeSql('CREATE TABLE IF NOT EXISTS tweets(id, email, apellidos,email,contrasena )', [], getTweets);
});