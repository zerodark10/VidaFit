if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./sw.js')
    .then(function(registration) {
        console.log("Service Worker Registrado", registration);
    })
    .catch(function(err) {
        console.log("Service Worker Fallo el Registro", err);
    })
}
