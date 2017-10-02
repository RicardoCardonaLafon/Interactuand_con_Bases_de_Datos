var MongoClient = require('mongodb').MongoClient

var url = "mongodb://localhost/nodedriver"

var Operaciones = require('./CRUD.js')

MongoClient.connect(url,function(error,db){
    if (error) {
        console.log(error)
    } else {
        console.log("La conexión a la BD se etableció correctamente..")
        Operaciones.insertarRegistro(db,(error,result)=>{
            if (error) {
                console.log("Error al insertar registro: " + error)
            }
        })
    }
})